<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Strategy Call Lead</title>
</head>
<body style="margin: 0; padding: 0; background-color: #030712; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #e2e8f0;">

  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #030712; min-height: 100vh; padding: 30px 15px;">
    <tr>
      <td align="center">

        <!-- Main Card Container -->
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 620px; background-color: #091124; border: 1px solid #1e293b; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);">

          <!-- Top Accent Bar -->
          <tr>
            <td style="background: linear-gradient(90deg, #38C5D2 0%, #6366F1 50%, #A855F7 100%); height: 5px; line-height: 5px; font-size: 1px;">&nbsp;</td>
          </tr>

          <!-- Header -->
          <tr>
            <td style="padding: 32px 36px 20px 36px;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    <!-- Brand Logo / Badge -->
                    <div style="display: inline-block; padding: 6px 14px; background-color: rgba(56, 197, 210, 0.12); border: 1px solid rgba(56, 197, 210, 0.3); border-radius: 50px; font-size: 11px; font-weight: 700; color: #38C5D2; letter-spacing: 1px; text-transform: uppercase;">
                      ⚡ INBOUND STRATEGY CALL
                    </div>
                    <h1 style="margin: 16px 0 6px 0; font-size: 24px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
                      New Strategy Call Booked!
                    </h1>
                    <p style="margin: 0; font-size: 14px; color: #94a3b8; line-height: 1.5;">
                      A prospective client has submitted a 1-on-1 strategy call through your website booking calendar.
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Call Slot Highlights Box -->
          <tr>
            <td style="padding: 0 36px 24px 36px;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #06182e; border: 1px solid rgba(56, 197, 210, 0.35); border-radius: 14px; padding: 18px 22px;">
                <tr>
                  <td>
                    <div style="font-size: 11px; font-weight: 700; color: #38C5D2; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">
                      📅 Scheduled Session Slot
                    </div>
                    <div style="font-size: 18px; font-weight: 800; color: #ffffff;">
                      {{ $booking->booking_date ?? 'Not Specified' }}
                    </div>
                    <div style="font-size: 14px; font-weight: 600; color: #67e8f9; margin-top: 4px;">
                      ⏰ {{ $booking->booking_time ?? '9:00 AM (EST)' }}
                    </div>
                  </td>
                  <td align="right" valign="middle">
                    <span style="display: inline-block; padding: 6px 12px; background-color: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 8px; font-size: 12px; font-weight: 700; color: #34d399;">
                      ● Slot Locked
                    </span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Lead Details Grid -->
          <tr>
            <td style="padding: 0 36px 30px 36px;">
              <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">
                PROSPECT DETAILS
              </div>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: separate; border-spacing: 0 10px;">

                <!-- Full Name -->
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; width: 35%; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Full Name
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 14px; font-weight: 700; color: #ffffff;">
                    {{ $booking->name }}
                  </td>
                </tr>

                <!-- Work Email -->
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Work Email
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 14px; font-weight: 600;">
                    <a href="mailto:{{ $booking->email }}" style="color: #38C5D2; text-decoration: none;">
                      {{ $booking->email }}
                    </a>
                  </td>
                </tr>

                <!-- Phone / WhatsApp -->
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Phone / WhatsApp
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 14px; font-weight: 600; color: #ffffff;">
                    @if($booking->phone)
                      <a href="tel:{{ $booking->phone }}" style="color: #67e8f9; text-decoration: none;">
                        {{ $booking->phone }}
                      </a>
                    @else
                      <span style="color: #64748b; font-style: italic;">Not provided</span>
                    @endif
                  </td>
                </tr>

                <!-- Monthly Revenue -->
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Monthly Revenue
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 13px; font-weight: 700; color: #a855f7;">
                    {{ $booking->monthly_revenue ?? '$30k – $100k / mo' }}
                  </td>
                </tr>

                <!-- Primary Growth Focus -->
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Growth Focus
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 13px; font-weight: 700; color: #38C5D2;">
                    {{ $booking->service_interested ?? 'All-In-One Growth Engine' }}
                  </td>
                </tr>

                @if($booking->company_name)
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Company Name
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 14px; font-weight: 600; color: #ffffff;">
                    {{ $booking->company_name }}
                  </td>
                </tr>
                @endif

                @if($booking->website_url)
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8;">
                    Website URL
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 14px; font-weight: 600;">
                    <a href="{{ $booking->website_url }}" target="_blank" style="color: #38C5D2; text-decoration: none;">
                      {{ $booking->website_url }}
                    </a>
                  </td>
                </tr>
                @endif

                @if($booking->message)
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 13px; font-weight: 600; color: #94a3b8; vertical-align: top;">
                    Client Message
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 13px; line-height: 1.5; color: #cbd5e1;">
                    {{ $booking->message }}
                  </td>
                </tr>
                @endif

                <!-- Meta Info -->
                <tr>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 10px 0 0 10px; font-size: 12px; font-weight: 600; color: #64748b;">
                    IP / Timestamp
                  </td>
                  <td style="background-color: #0d1933; padding: 12px 16px; border-radius: 0 10px 10px 0; font-size: 12px; color: #64748b;">
                    IP: {{ $booking->ip_address ?? '127.0.0.1' }} &bull; {{ $booking->created_at ? $booking->created_at->format('M d, Y - h:i A') : now()->format('M d, Y - h:i A') }}
                  </td>
                </tr>

              </table>
            </td>
          </tr>

          <!-- Quick Action Buttons -->
          <tr>
            <td style="padding: 0 36px 36px 36px;" align="center">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="border-radius: 12px; background: linear-gradient(90deg, #38C5D2 0%, #6366F1 100%);">
                    <a href="mailto:{{ $booking->email }}?subject=Re:%20Your%20Growth%20Strategy%20Call%20with%20Growxpect" style="padding: 14px 28px; font-size: 13px; font-weight: 700; color: #ffffff; text-decoration: none; display: inline-block; border-radius: 12px; letter-spacing: 0.5px;">
                      ✉️ Reply Directly to {{ explode(' ', $booking->name)[0] }}
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #060c1c; border-top: 1px solid #1e293b; padding: 20px 36px; text-align: center;">
              <p style="margin: 0; font-size: 11px; color: #64748b; line-height: 1.5;">
                This notification was sent automatically by your Growxpect Revenue Engine booking system.
              </p>
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>

