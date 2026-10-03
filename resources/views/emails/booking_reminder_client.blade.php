<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strategy Call Reminder</title>
</head>
<body style="margin: 0; padding: 0; background-color: #030712; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #e2e8f0;">

  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #030712; min-height: 100vh; padding: 30px 15px;">
    <tr>
      <td align="center">

        <!-- Main Card Container -->
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #091124; border: 1px solid #1e293b; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);">

          <!-- Top Accent Bar -->
          <tr>
            <td style="background: linear-gradient(90deg, #38C5D2 0%, #6366F1 50%, #A855F7 100%); height: 5px; line-height: 5px; font-size: 1px;">&nbsp;</td>
          </tr>

          <!-- Header -->
          <tr>
            <td style="padding: 32px 36px 20px 36px; text-align: center;">
              <div style="display: inline-block; padding: 6px 14px; background-color: rgba(56, 197, 210, 0.12); border: 1px solid rgba(56, 197, 210, 0.3); border-radius: 50px; font-size: 11px; font-weight: 700; color: #38C5D2; letter-spacing: 1px; text-transform: uppercase;">
                ⏰ UPCOMING STRATEGY CALL ({{ strtoupper($timeframe) }})
              </div>
              <h1 style="margin: 16px 0 6px 0; font-size: 24px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
                @if($timeframe === '30 minutes')
                  Starting in 30 Minutes, {{ explode(' ', $booking->name)[0] }}!
                @elseif($timeframe === '1 hour')
                  1 Hour Reminder, {{ explode(' ', $booking->name)[0] }}!
                @else
                  Upcoming Strategy Call in 6 Hours!
                @endif
              </h1>
              <p style="margin: 0; font-size: 14px; color: #94a3b8; line-height: 1.5;">
                This is a quick reminder for your 1-on-1 Growth Strategy Call with GrowXpect.
              </p>
            </td>
          </tr>

          <!-- Call Slot Highlights Box -->
          <tr>
            <td style="padding: 0 36px 24px 36px;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #06182e; border: 1px solid rgba(56, 197, 210, 0.35); border-radius: 14px; padding: 20px; text-align: center;">
                <tr>
                  <td>
                    <div style="font-size: 11px; font-weight: 700; color: #38C5D2; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;">
                      📅 Your Session Slot
                    </div>
                    <div style="font-size: 20px; font-weight: 800; color: #ffffff;">
                      {{ $booking->booking_date ?? 'Today' }}
                    </div>
                    <div style="font-size: 15px; font-weight: 700; color: #67e8f9; margin-top: 4px;">
                      ⏰ {{ $booking->booking_time ?? '9:00 AM' }}
                    </div>

                    <!-- Google Meet Link Button -->
                    <div style="margin-top: 20px;">
                      <a href="{{ $booking->meet_link }}" target="_blank" style="display: inline-block; padding: 14px 28px; background: linear-gradient(90deg, #38C5D2 0%, #6366F1 100%); color: #ffffff; font-size: 14px; font-weight: 800; text-decoration: none; border-radius: 50px; box-shadow: 0 4px 15px rgba(56, 197, 210, 0.4);">
                        📹 Join Google Meet Room Now
                      </a>
                    </div>
                    <div style="font-size: 12px; color: #94a3b8; margin-top: 10px;">
                      Direct Link: <a href="{{ $booking->meet_link }}" target="_blank" style="color: #38C5D2; text-decoration: underline;">{{ $booking->meet_link }}</a>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Preparation Checklist -->
          <tr>
            <td style="padding: 0 36px 30px 36px;">
              <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px;">
                QUICK CHECKLIST BEFORE JOINING
              </div>

              <div style="background-color: #0d1933; border-radius: 12px; padding: 16px 18px; margin-bottom: 10px; border-left: 3px solid #38C5D2;">
                <div style="font-size: 13px; font-weight: 700; color: #ffffff;">🎧 Check your microphone & camera</div>
              </div>

              <div style="background-color: #0d1933; border-radius: 12px; padding: 16px 18px; margin-bottom: 10px; border-left: 3px solid #6366F1;">
                <div style="font-size: 13px; font-weight: 700; color: #ffffff;">📊 Open your funnel analytics or ad dashboard</div>
              </div>

              <div style="background-color: #0d1933; border-radius: 12px; padding: 16px 18px; border-left: 3px solid #A855F7;">
                <div style="font-size: 13px; font-weight: 700; color: #ffffff;">⚡ Be ready to dive straight into strategy</div>
              </div>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #060c1c; border-top: 1px solid #1e293b; padding: 24px 36px; text-align: center;">
              <p style="margin: 0 0 6px 0; font-size: 12px; color: #94a3b8;">
                Questions or running late? Reply directly to this email.
              </p>
              <p style="margin: 0; font-size: 11px; color: #64748b;">
                GrowXpect &bull; Predictable Revenue Engines
              </p>
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>
