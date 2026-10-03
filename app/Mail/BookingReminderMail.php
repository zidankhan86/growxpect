<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
{
}
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public Booking $booking;
    public string $timeframe; // '6 hours', '1 hour', or '30 minutes'

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking, string $timeframe)
    {
        $this->booking = $booking;
        $this->timeframe = $timeframe;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $label = match($this->timeframe) {
            '6 hours' => '⏰ Reminder: Your Strategy Call is in 6 Hours',
            '1 hour' => '⚡ Reminder: Your Strategy Call starts in 1 Hour!',
            '30 minutes' => '🚀 Starting Soon: Your Strategy Call is in 30 Minutes!',
            default => '⏰ Reminder: Upcoming Strategy Call with Growxpect',
        };

        return new Envelope(
            subject: $label . ' (' . ($this->booking->booking_time ?? '') . ')',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.booking_reminder_client',
            with: [
                'timeframe' => $this->timeframe,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
