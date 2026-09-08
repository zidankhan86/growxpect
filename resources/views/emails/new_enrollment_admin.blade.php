<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body { width: 100% !important; }
            .footer     { width: 100% !important; }
        }
    </style>
</head>
<body style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;background-color:#f0f4f8;color:#4a5568;margin:0;padding:0;width:100%!important;">

    <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
           style="background-color:#f0f4f8;margin:0;padding:20px 0;width:100%;">
        <tbody>
            <tr>
                <td align="center">

                    {{-- Header --}}
                    <table width="570" cellpadding="0" cellspacing="0" role="presentation"
                           style="margin:0 auto 20px;">
                        <tbody>
                            <tr>
                                <td style="padding:24px 0;text-align:center;">
                                    <span style="color:#1a202c;font-size:22px;font-weight:700;text-decoration:none;">
                                        {{ getSetting()->site_name ?? config('app.name') }}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- Card --}}
                    <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0"
                           role="presentation"
                           style="background-color:#ffffff;border:1px solid #e2e8f0;border-radius:6px;
                                  box-shadow:0 2px 6px rgba(0,0,0,.06);margin:0 auto;padding:0;width:570px;">
                        <tbody>
                            <tr>
                                <td style="padding:0;">
                                    {{-- Accent bar --}}
                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                        <tr>
                                            <td style="background-color:#e53e3e;border-radius:6px 6px 0 0;height:5px;"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:36px 40px 28px;">

                                    <h1 style="color:#1a202c;font-size:20px;font-weight:700;margin:0 0 8px;">
                                        New Enrollment Notification
                                    </h1>
                                    <p style="color:#718096;font-size:14px;margin:0 0 28px;">
                                        A student has successfully enrolled and completed payment.
                                    </p>

                                    {{-- Divider --}}
                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                        <tr><td style="border-top:1px solid #edf2f7;margin-bottom:20px;">&nbsp;</td></tr>
                                    </table>

                                    {{-- Details table --}}
                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                                           style="font-size:14px;line-height:1.6;">

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;width:160px;vertical-align:top;">Student Name</td>
                                            <td style="color:#1a202c;font-weight:600;padding:6px 0;">
                                                {{ $enrollment->user->name ?? 'N/A' }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Student Email</td>
                                            <td style="color:#1a202c;font-weight:600;padding:6px 0;">
                                                {{ $enrollment->user->email ?? 'N/A' }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Phone</td>
                                            <td style="color:#1a202c;font-weight:600;padding:6px 0;">
                                                {{ $enrollment->user->phone ?? '—' }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Course</td>
                                            <td style="color:#1a202c;font-weight:600;padding:6px 0;">
                                                {{ $enrollment->course->name ?? 'N/A' }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Transaction ID</td>
                                            <td style="color:#1a202c;font-weight:600;padding:6px 0;font-family:monospace;">
                                                {{ $enrollment->transaction_id }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Amount Paid</td>
                                            <td style="padding:6px 0;">
                                                <span style="background-color:#c6f6d5;color:#276749;border-radius:4px;
                                                             font-size:13px;font-weight:700;padding:3px 10px;">
                                                    ৳{{ number_format($enrollment->amount, 2) }}
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Payment Status</td>
                                            <td style="padding:6px 0;">
                                                <span style="background-color:#c6f6d5;color:#276749;border-radius:4px;
                                                             font-size:13px;font-weight:700;padding:3px 10px;">
                                                    Completed
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#718096;padding:6px 0;vertical-align:top;">Paid At</td>
                                            <td style="color:#1a202c;font-weight:600;padding:6px 0;">
                                                {{ $enrollment->paid_at ? $enrollment->paid_at->format('d M Y, h:i A') : '—' }}
                                            </td>
                                        </tr>

                                    </table>

                                    {{-- Divider --}}
                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                                           style="margin-top:24px;">
                                        <tr><td style="border-top:1px solid #edf2f7;">&nbsp;</td></tr>
                                    </table>

                                    {{-- CTA --}}
                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                                           style="margin-top:20px;">
                                        <tr>
                                            <td>
                                                <a href="{{ url('/admin/enrollments') }}"
                                                   style="background-color:#e53e3e;border-radius:4px;color:#ffffff;
                                                          display:inline-block;font-size:14px;font-weight:600;
                                                          padding:12px 28px;text-decoration:none;">
                                                    View Enrollments
                                                </a>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- Footer --}}
                    <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0"
                           role="presentation" style="margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="color:#a0aec0;font-size:12px;padding:24px 0;text-align:center;">
                                    This is an automated notification from
                                    <strong>{{ getSetting()->site_name ?? config('app.name') }}</strong>.
                                    Please do not reply to this email.
                                    <br>
                                    {{ getSetting()->copyright_text ?? '' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>
