<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Setting;
use App\Mail\NewBookingAdminMail;
use App\Mail\BookingConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company_name' => 'nullable|string|max:255',
            'website_url' => 'nullable|string|max:255',
            'monthly_revenue' => 'nullable|string|max:100',
            'service_interested' => 'nullable|string|max:255',
            'booking_date' => 'nullable|string|max:100',
            'booking_time' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:2000',
        ]);

        if ($validator->fails()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'website_url' => $request->website_url,
            'monthly_revenue' => $request->monthly_revenue,
            'service_interested' => $request->service_interested,
            'booking_date' => $request->booking_date ?? 'September 10, 2026',
            'booking_time' => $request->booking_time ?? '9:00 AM EST',
            'message' => $request->message,
            'status' => 'pending',
            'ip_address' => $request->ip(),
        ]);

        // Send Email Notifications
        try {
            // Determine Admin Notification Recipients
            $setting = Setting::first();
            $adminEmails = collect();

            if (!empty($setting?->email)) {
                $adminEmails->push(trim($setting->email));
            }
            if (!empty($setting?->support_email)) {
                $adminEmails->push(trim($setting->support_email));
            }

            // Also include active admin user accounts if available
            $adminUsers = Admin::where('status', 1)->pluck('email')->filter();
            foreach ($adminUsers as $adminEmail) {
                $adminEmails->push(trim($adminEmail));
            }

            $adminEmails = $adminEmails->unique()->filter(function ($email) {
                return filter_var($email, FILTER_VALIDATE_EMAIL);
            });

            if ($adminEmails->isEmpty()) {
                $fallback = config('mail.from.address') ?: 'admin@growxpect.com';
                $adminEmails->push($fallback);
            }

            // 1. Dispatch email to Admin(s)
            Mail::to($adminEmails->values()->all())->send(new NewBookingAdminMail($booking));

            // 2. Dispatch confirmation email to the client
            if (filter_var($booking->email, FILTER_VALIDATE_EMAIL)) {
                Mail::to($booking->email)->send(new BookingConfirmationMail($booking));
            }
        } catch (\Throwable $e) {
            Log::error('Failed to send booking notification email: ' . $e->getMessage(), [
                'booking_id' => $booking->id,
                'exception' => $e
            ]);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your strategy session has been locked in! Our growth team will reach out via email/calendar invite.',
                'booking' => $booking
            ]);
        }

        return redirect()->back()->with('success', 'Your strategy session has been booked successfully!');
    }
}

