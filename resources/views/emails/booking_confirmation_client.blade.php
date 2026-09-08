<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Growth Strategy Call Confirmation</title>
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
              <div style="display: inline-block; padding: 6px 14px; background-color: rgba(16, 185, 129, 0.12); border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 50px; font-size: 11px; font-weight: 700; color: #34d399; letter-spacing: 1px; text-transform: uppercase;">
                ✓ CALL CONFIRMED
              </div>
              <h1 style="margin: 16px 0 6px 0; font-size: 24px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
                You're Scheduled, {{ explode(' ', $booking->name)[0] }}!
              </h1>
              <p style="margin: 0; font-size: 14px; color: #94a3b8; line-height: 1.5;">
                We've reserved your 30-minute growth architecture session. Here are the details of your upcoming call:
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
                      📅 Your Confirmed Slot
                    </div>
                    <div style="font-size: 20px; font-weight: 800; color: #ffffff;">
                      {{ $booking->booking_date ?? 'Upcoming Session' }}
                    </div>
                    <div style="font-size: 15px; font-weight: 700; color: #67e8f9; margin-top: 4px;">
                      ⏰ {{ $booking->booking_time ?? '9:00 AM (EST)' }}
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
                HOW TO PREPARE
              </div>

              <div style="background-color: #0d1933; border-radius: 12px; padding: 18px 20px; margin-bottom: 12px; border-left: 3px solid #38C5D2;">
                <div style="font-size: 14px; font-weight: 700; color: #ffffff; margin-bottom: 4px;">1. Have your numbers ready</div>
                <div style="font-size: 13px; color: #94a3b8; line-height: 1.4;">Current traffic, conversion rates, customer acquisition cost (CAC), and target revenue goals.</div>
              </div>

              <div style="background-color: #0d1933; border-radius: 12px; padding: 18px 20px; margin-bottom: 12px; border-left: 3px solid #6366F1;">
                <div style="font-size: 14px; font-weight: 700; color: #ffffff; margin-bottom: 4px;">2. Bring your current funnel & ad assets</div>
                <div style="font-size: 13px; color: #94a3b8; line-height: 1.4;">We will do a live breakdown of where you might be losing qualified leads.</div>
              </div>

              <div style="background-color: #0d1933; border-radius: 12px; padding: 18px 20px; border-left: 3px solid #A855F7;">
                <div style="font-size: 14px; font-weight: 700; color: #ffffff; margin-bottom: 4px;">3. 100% Focused & Actionable</div>
                <div style="font-size: 13px; color: #94a3b8; line-height: 1.4;">This is a pure strategy session — you'll walk away with a crystal-clear growth architecture map.</div>
              </div>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #060c1c; border-top: 1px solid #1e293b; padding: 24px 36px; text-align: center;">
              <p style="margin: 0 0 6px 0; font-size: 12px; color: #94a3b8;">
                Need to reschedule? Simply reply directly to this email.
              </p>
              <p style="margin: 0; font-size: 11px; color: #64748b;">
                Growxpect &bull; Predictable Revenue Engines & Growth Systems
              </p>
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>

