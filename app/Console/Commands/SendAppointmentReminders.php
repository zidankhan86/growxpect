<?php

namespace App\Console\Commands;

use App\Mail\BookingReminderMail;
use App\Models\Booking;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendAppointmentReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send 6-hour, 1-hour, and 30-minute reminder emails to customers for upcoming appointments';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking upcoming appointments for reminder dispatch...');

        // Fetch bookings that are active/confirmed (or not cancelled)
        $bookings = Booking::whereIn('status', ['active', 'confirmed', 'pending', 'approved'])
            ->orWhereNull('status')
            ->get();

        $now = now();
        $sentCount = 0;

        foreach ($bookings as $booking) {
            $appointmentTime = $booking->getAppointmentDateTime();

            if (!$appointmentTime) {
                continue;
            }

            // Calculate difference in minutes (positive means appointment is in the future)
            $diffInMinutes = (int) $now->diffInMinutes($appointmentTime, false);

            // Skip past appointments (more than 10 minutes past)
            if ($diffInMinutes < -10) {
                continue;
            }

            // Check 6-Hour Reminder (Window: between 360 mins and 60 mins before meeting)
            if ($diffInMinutes <= 360 && $diffInMinutes > 60 && is_null($booking->reminded_6h_at)) {
                $this->sendReminder($booking, '6 hours', 'reminded_6h_at');
                $sentCount++;
            }

            // Check 1-Hour Reminder (Window: between 60 mins and 30 mins before meeting)
            if ($diffInMinutes <= 60 && $diffInMinutes > 30 && is_null($booking->reminded_1h_at)) {
                $this->sendReminder($booking, '1 hour', 'reminded_1h_at');
                $sentCount++;
            }

            // Check 30-Minute Reminder (Window: between 30 mins and 0 mins before meeting)
            if ($diffInMinutes <= 30 && $diffInMinutes > 0 && is_null($booking->reminded_30m_at)) {
                $this->sendReminder($booking, '30 minutes', 'reminded_30m_at');
                $sentCount++;
            }
        }

        $this->info("Reminder check complete. Dispatched {$sentCount} reminder emails.");
        return 0;
    }

    /**
     * Helper to send reminder mail and set database flag to prevent duplicates.
     */
    protected function sendReminder(Booking $booking, string $timeframe, string $flagColumn): void
    {
        try {
            Mail::to($booking->email)->send(new BookingReminderMail($booking, $timeframe));
            $booking->update([$flagColumn => now()]);
            $this->info("Successfully sent {$timeframe} reminder to {$booking->email} (Booking #{$booking->id}).");
            Log::info("Sent {$timeframe} appointment reminder to {$booking->email} (Booking ID: {$booking->id})");
        } catch (\Throwable $e) {
            $this->error("Failed to send {$timeframe} reminder to {$booking->email}: {$e->getMessage()}");
            Log::error("Failed sending {$timeframe} appointment reminder to {$booking->email}: " . $e->getMessage());
        }
    }
}
