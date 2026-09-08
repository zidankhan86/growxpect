<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\NewEnrollmentAdminMail;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\PaymentGatewaySetting;
use App\Models\Setting;
use App\Services\EpsPaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EnrollmentController extends Controller
{
    private EpsPaymentService $epsService;

    public function __construct(EpsPaymentService $epsService)
    {
        $this->middleware('auth')->only('pay');

        $this->epsService = $epsService;
    }

    public function pay(Request $request)
    {
        $user = Auth::user();

        Log::info('[Enrollment] pay() initiated', ['user_id' => $user->id]);

        // Validate payment gateway settings
        $settings = PaymentGatewaySetting::where('is_active', 1)->first();

        if (! $settings) {
            Log::error('[Enrollment] No active payment gateway settings', ['user_id' => $user->id]);

            return redirect()->route('home')
                ->with('error', 'পেমেন্ট গেটওয়ে কনফিগার করা নেই। সাপোর্টে যোগাযোগ করুন।');
        }

        if ($settings->amount <= 0) {
            Log::error('[Enrollment] Payment amount is zero or negative', [
                'user_id' => $user->id,
                'amount'  => $settings->amount,
            ]);

            return redirect()->route('home')
                ->with('error', 'পেমেন্টের পরিমাণ সঠিক নেই। সাপোর্টে যোগাযোগ করুন।');
        }

        // Resolve course
        $course = Course::first();

        if (! $course) {
            Log::error('[Enrollment] No course found in database', ['user_id' => $user->id]);

            return redirect()->route('home')
                ->with('error', 'কোর্স এখনো পাওয়া যাচ্ছে না। সাপোর্টে যোগাযোগ করুন।');
        }


        $existingEnrollment = Enrollment::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->whereIn('status', ['pending', 'completed'])
            ->first();

        if ($existingEnrollment) {
            if ($existingEnrollment->status === 'completed') {
                Log::info('[Enrollment] User already enrolled (completed)', [
                    'user_id'   => $user->id,
                    'course_id' => $course->id,
                ]);

                return redirect()->route('user.dashboard')
                    ->with('success', 'আপনি ইতোমধ্যে এই কোর্সে এনরোলড আছেন।');
            }

            Log::info('[Enrollment] User already has a pending enrollment', [
                'user_id'   => $user->id,
                'course_id' => $course->id,
            ]);

            return redirect()->route('home')
                ->with('info', 'আপনার একটি পেমেন্ট ইতোমধ্যে প্রক্রিয়াধীন আছে।');
        }

        // Generate unique merchant transaction ID
        $merchantTransactionId = date('YmdHis') . $user->id . rand(100, 999);

        // Get EPS bearer token
        try {
            $token = $this->epsService->getAccessToken();
        } catch (\Exception $e) {
            Log::error('[Enrollment] GetToken failed', [
                'user_id' => $user->id,
                'error'   => $e->getMessage(),
            ]);

            return redirect()->route('home')
                ->with('error', 'Payment gateway connection failed. Please try again later.');
        }

        // Build EPS Initialize payload
        $customerName  = $user->name  ?? ($user->email ?? $user->phone ?? 'Customer');
        $customerEmail = $user->email ?? 'noemail@example.com';
        $customerPhone = $user->phone ?? '01000000000';

        $payload = [
            'merchantId'            => $settings->merchant_id,
            'storeId'               => $settings->store_id,
            'CustomerOrderId'       => 'ORD' . $merchantTransactionId,
            'merchantTransactionId' => $merchantTransactionId,
            'transactionTypeId'     => 1,   // 1 = Web
            'financialEntityId'     => 0,
            'transitionStatusId'    => 0,
            'totalAmount'           => (float) $settings->amount,
            'ipAddress'             => $request->ip() ?? '127.0.0.1',
            'version'               => '1',
            'successUrl'            => route('enrollment.callback.success'),
            'failUrl'               => route('enrollment.callback.failed'),
            'cancelUrl'             => route('enrollment.callback.cancel'),
            'customerName'          => $customerName,
            'customerEmail'         => $customerEmail,
            'customerAddress'       => $user->address ?? 'N/A',
            'customerAddress2'      => '',
            'customerCity'          => 'Dhaka',
            'customerState'         => 'Dhaka',
            'customerPostcode'      => '1000',
            'customerCountry'       => 'BD',
            'customerPhone'         => $customerPhone,
            'shipmentName'          => $customerName,
            'shipmentAddress'       => 'N/A',
            'shipmentAddress2'      => '',
            'shipmentCity'          => 'Dhaka',
            'shipmentState'         => 'Dhaka',
            'shipmentPostcode'      => '1000',
            'shipmentCountry'       => 'BD',
            'valueA'                => (string) $user->id,
            'valueB'                => (string) $course->id,
            'valueC'                => '',
            'valueD'                => '',
            'shippingMethod'        => 'NO',
            'noOfItem'              => '1',
            'productName'           => $course->name,
            'productProfile'        => 'general',
            'productCategory'       => 'Course',
            'ProductList'           => [
                [
                    'ProductName'     => $course->name,
                    'NoOfItem'        => '1',
                    'ProductProfile'  => 'general',
                    'ProductCategory' => 'Course',
                    'ProductPrice'    => (string) $settings->amount,
                ],
            ],
        ];

        try {
            $epsResponse = $this->epsService->initializePayment($token, $payload);
        } catch (\Exception $e) {
            Log::error('[Enrollment] InitializeEPS failed', [
                'user_id'               => $user->id,
                'merchantTransactionId' => $merchantTransactionId,
                'error'                 => $e->getMessage(),
            ]);

            return redirect()->route('home')
                ->with('error', 'পেমেন্ট শুরু করতে সমস্যা হয়েছে। পরে আবার চেষ্টা করুন।');
        }


        $enrollment = DB::transaction(function () use ($user, $course, $settings, $merchantTransactionId) {
            $conflict = Enrollment::where('user_id', $user->id)
                ->where('course_id', $course->id)
                ->whereIn('status', ['pending', 'completed'])
                ->lockForUpdate()
                ->first();

            if ($conflict) {
                return $conflict;
            }

            return Enrollment::create([
                'user_id'        => $user->id,
                'course_id'      => $course->id,
                'amount'         => $settings->amount,
                'transaction_id' => $merchantTransactionId,
                'status'         => 'pending',
                'paid_at'        => null,
            ]);
        });

        if (! $enrollment->wasRecentlyCreated) {
            Log::warning('[Enrollment] Race condition caught: duplicate enrollment prevented', [
                'user_id'                => $user->id,
                'course_id'              => $course->id,
                'existing_enrollment_id' => $enrollment->id,
                'existing_status'        => $enrollment->status,
            ]);

            if ($enrollment->status === 'completed') {
                return redirect()->route('user.dashboard')
                    ->with('success', 'আপনি ইতোমধ্যে এই কোর্সে এনরোলড আছেন।');
            }

            return redirect()->route('home')
                ->with('info', 'আপনার একটি পেমেন্ট ইতোমধ্যে প্রক্রিয়াধীন আছে।');
        }

        Log::info('[Enrollment] Pending enrollment created, redirecting to EPS gateway', [
            'enrollment_id'         => $enrollment->id,
            'user_id'               => $user->id,
            'course_id'             => $course->id,
            'merchantTransactionId' => $merchantTransactionId,
            'redirect_url'          => $epsResponse['RedirectURL'],
        ]);

        return redirect()->away($epsResponse['RedirectURL']);
    }


    public function successCallback(Request $request)
    {
        Log::info('[Enrollment] Success callback received', $request->all());

        $merchantTransactionId = $this->resolveMerchantTransactionId($request);

        if (! $merchantTransactionId) {
            Log::error('[Enrollment] Success callback missing merchantTransactionId', $request->all());

            return view('enrollment.failed', [
                'message' => 'Invalid payment response. Please contact support.',
            ]);
        }

        // Find the enrollment record persisted during pay()
        $enrollment = Enrollment::where('transaction_id', $merchantTransactionId)->first();

        if (! $enrollment) {
            Log::error('[Enrollment] Enrollment record not found for transaction', [
                'merchantTransactionId' => $merchantTransactionId,
            ]);

            return view('enrollment.failed', [
                'message' => 'Enrollment record not found. Please contact support.',
            ]);
        }

        if ($enrollment->status === 'completed') {
            Log::info('[Enrollment] Enrollment already completed (idempotent callback)', [
                'enrollment_id' => $enrollment->id,
            ]);

            return view('enrollment.success', compact('enrollment'));
        }

        // Verify with EPS API
        try {
            $token      = $this->epsService->getAccessToken();
            $statusData = $this->epsService->checkTransactionStatus($token, $merchantTransactionId);

            $epsStatus = strtolower($statusData['Status'] ?? '');

            Log::info('[Enrollment] EPS transaction status verified', [
                'merchantTransactionId' => $merchantTransactionId,
                'eps_status'            => $epsStatus,
                'eps_data'              => $statusData,
            ]);

            if ($epsStatus === 'success') {
                $enrollment->update([
                    'status'  => 'completed',
                    'paid_at' => now(),
                ]);

                Log::info('[Enrollment] Enrollment marked as COMPLETED', [
                    'enrollment_id' => $enrollment->id,
                    'user_id'       => $enrollment->user_id,
                    'course_id'     => $enrollment->course_id,
                ]);

                $this->notifyAdmin($enrollment->fresh(['user', 'course']));

                return view('enrollment.success', compact('enrollment'));
            }

            // EPS returned a non-success status
            $enrollment->update(['status' => 'failed']);

            Log::warning('[Enrollment] EPS verification returned non-success', [
                'eps_status'  => $epsStatus,
                'error_msg'   => $statusData['ErrorMessage'] ?? '',
            ]);

            return view('enrollment.failed', [
                'message' => $statusData['ErrorMessage'] ?? 'Payment verification failed. Please contact support.',
            ]);

        } catch (\Exception $e) {
            Log::error('[Enrollment] Success callback: EPS verification exception', [
                'merchantTransactionId' => $merchantTransactionId,
                'error'                 => $e->getMessage(),
                'trace'                 => $e->getTraceAsString(),
            ]);

            return view('enrollment.failed', [
                'message' => 'পেমেন্ট যাচাই করতে সমস্যা হয়েছে। সাপোর্টে যোগাযোগ করুন।',
            ]);
        }
    }


    public function failedCallback(Request $request)
    {
        Log::warning('[Enrollment] Failed callback received', $request->all());

        $merchantTransactionId = $this->resolveMerchantTransactionId($request);

        if ($merchantTransactionId) {
            $updated = Enrollment::where('transaction_id', $merchantTransactionId)
                ->where('status', 'pending')
                ->update(['status' => 'failed']);

            Log::info('[Enrollment] Marked failed enrollment', [
                'merchantTransactionId' => $merchantTransactionId,
                'rows_updated'          => $updated,
            ]);
        }

        return view('enrollment.failed', [
            'message' => 'পেমেন্ট সফল হয়নি। আবার চেষ্টা করুন।',
        ]);
    }


    public function cancelCallback(Request $request)
    {
        Log::info('[Enrollment] Cancel callback received', $request->all());

        $merchantTransactionId = $this->resolveMerchantTransactionId($request);

        if ($merchantTransactionId) {
            Enrollment::where('transaction_id', $merchantTransactionId)
                ->where('status', 'pending')
                ->update(['status' => 'failed']);
        }

        return view('enrollment.cancel');
    }


    private function resolveMerchantTransactionId(Request $request): ?string
    {
        return $request->query('merchantTransactionId')
            ?? $request->query('MerchantTransactionId')
            ?? $request->query('merchant_transaction_id')
            ?? null;
    }

    private function notifyAdmin(Enrollment $enrollment): void
    {
        $setting = Setting::orderBy('id', 'DESC')->first();

        if (! $setting || (int) $setting->is_email !== 1) {
            Log::info('Email notification skipped (is_email disabled)', [
                'enrollment_id' => $enrollment->id,
            ]);
            return;
        }

        $adminEmail = $setting->email ?? null;

        if (! $adminEmail) {
            Log::warning('Email notification skipped (no admin email configured)', [
                'enrollment_id' => $enrollment->id,
            ]);
            return;
        }

        try {
            Mail::to($adminEmail)->send(new NewEnrollmentAdminMail($enrollment));
        } catch (\Exception $e) {
            Log::error('Failed to send email notification', [
                'enrollment_id' => $enrollment->id,
                'admin_email'   => $adminEmail,
                'error'         => $e->getMessage(),
                'trace'         => $e->getTraceAsString(),
            ]);
        }
    }
}
