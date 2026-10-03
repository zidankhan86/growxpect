<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('send-reminders', function () {
    $this->info('Checking upcoming appointments for reminder dispatch...');

    $bookings = \App\Models\Booking::whereIn('status', ['active', 'confirmed', 'pending', 'approved'])
        ->orWhereNull('status')
        ->get();

    $now = now();
    $sentCount = 0;

    foreach ($bookings as $booking) {
        $appointmentTime = $booking->getAppointmentDateTime();

        if (!$appointmentTime) {
            continue;
        }

        $diffInMinutes = (int) $now->diffInMinutes($appointmentTime, false);

        if ($diffInMinutes < -10) {
            continue;
        }

        // 6 Hours Reminder
        if ($diffInMinutes <= 360 && $diffInMinutes > 60 && is_null($booking->reminded_6h_at)) {
            try {
                \Illuminate\Support\Facades\Mail::to($booking->email)->send(new \App\Mail\BookingReminderMail($booking, '6 hours'));
                $booking->update(['reminded_6h_at' => now()]);
                $this->info("Sent 6h reminder to {$booking->email}");
                $sentCount++;
            } catch (\Throwable $e) {
                $this->error("Failed to send 6h reminder to {$booking->email}: {$e->getMessage()}");
            }
        }

        // 1 Hour Reminder
        if ($diffInMinutes <= 60 && $diffInMinutes > 30 && is_null($booking->reminded_1h_at)) {
            try {
                \Illuminate\Support\Facades\Mail::to($booking->email)->send(new \App\Mail\BookingReminderMail($booking, '1 hour'));
                $booking->update(['reminded_1h_at' => now()]);
                $this->info("Sent 1h reminder to {$booking->email}");
                $sentCount++;
            } catch (\Throwable $e) {
                $this->error("Failed to send 1h reminder to {$booking->email}: {$e->getMessage()}");
            }
        }

        // 30 Minutes Reminder
        if ($diffInMinutes <= 30 && $diffInMinutes > 0 && is_null($booking->reminded_30m_at)) {
            try {
                \Illuminate\Support\Facades\Mail::to($booking->email)->send(new \App\Mail\BookingReminderMail($booking, '30 minutes'));
                $booking->update(['reminded_30m_at' => now()]);
                $this->info("Sent 30m reminder to {$booking->email}");
                $sentCount++;
            } catch (\Throwable $e) {
                $this->error("Failed to send 30m reminder to {$booking->email}: {$e->getMessage()}");
            }
        }
    }

    $this->info("Reminder check complete. Dispatched {$sentCount} reminder emails.");
    return 0;
})->purpose('Send 6-hour, 1-hour, and 30-minute appointment reminders');

Artisan::command('app:send-appointment-reminders', function () {
    return Artisan::call('send-reminders');
})->purpose('Alias for send-reminders');

Artisan::command('appointment:send-reminders', function () {
    return Artisan::call('send-reminders');
})->purpose('Alias for send-reminders');





