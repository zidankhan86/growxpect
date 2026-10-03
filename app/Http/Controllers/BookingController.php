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
    /**
     * Fetch all active booked time slots for a given date.
     */
    public function getBookedSlots(Request $request)
    {
        $date = $request->query('booking_date') ?: $request->query('date');
        
        if (!$date) {
            return response()->json([
                'success' => true,
                'booked_slots' => []
            ]);
        }

        // Active bookings lock the time slots. Completed/cancelled bookings unlock the slots.
        $activeBookings = Booking::active()
            ->where('booking_date', $date)
            ->get();

        $bookedSlots = $activeBookings->map(function ($b) {
            return Booking::cleanTimeSlot($b->booking_time);
        })->filter()->unique()->values()->all();

        return response()->json([
            'success' => true,
            'booking_date' => $date,
            'booked_slots' => $bookedSlots
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company_name' => 'required|string|max:255',
            'website_url' => 'required|string|max:255',
            'monthly_revenue' => 'required|string|max:100',
            'service_interested' => 'required|string|max:255',
            'booking_date' => 'required|string|max:100',
            'booking_time' => 'required|string|max:100',
            'timezone' => 'nullable|string|max:50',
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

        // Check Calendly-style slot availability (only 1 customer per active slot until completed)
        $bookingDate = $request->booking_date;
        $requestedTimeClean = Booking::cleanTimeSlot($request->booking_time);

        $existingActiveBooking = Booking::active()
            ->where('booking_date', $bookingDate)
            ->get()
            ->first(function ($b) use ($requestedTimeClean) {
                return Booking::cleanTimeSlot($b->booking_time) === $requestedTimeClean;
            });

        if ($existingActiveBooking) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'This time slot (' . $request->booking_time . ') is already reserved for ' . $bookingDate . '. Please select another time slot.',
                    'errors' => [
                        'booking_time' => ['This time slot is already reserved. Please select another time slot.']
                    ]
                ], 422);
            }
            return redirect()->back()->withErrors(['booking_time' => 'This time slot is already reserved.'])->withInput();
        }

        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'website_url' => $request->website_url,
            'monthly_revenue' => $request->monthly_revenue,
            'service_interested' => $request->service_interested,
            'booking_date' => $bookingDate,
            'booking_time' => $request->booking_time,
            'timezone' => $request->timezone ?? 'EST',
            'google_meet_link' => env('GOOGLE_MEET_LINK', 'https://meet.google.com/yfy-izme-fng'),
            'message' => $request->message,
            'status' => 'pending',
            'ip_address' => $request->ip(),
        ]);

        // Send Email Notifications
        try {
            // Determine Admin Notification Recipients
            $setting = Setting::first();
            $adminEmails = collect(['contact@growxpect.com']);

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

