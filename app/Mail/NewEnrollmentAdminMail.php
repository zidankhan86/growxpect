<?php

namespace App\Mail;

use App\Models\Enrollment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEnrollmentAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public Enrollment $enrollment;

    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
    }

    public function build(): static
    {
        $siteName = getSetting()->site_name ?? config('app.name');
        $fromEmail = env('MAIL_FROM_ADDRESS');

        return $this->subject('New Enrollment Received — ' . $siteName)->from($fromEmail)
            ->view('emails.new_enrollment_admin')
            ->with('enrollment', $this->enrollment);
    }
}
