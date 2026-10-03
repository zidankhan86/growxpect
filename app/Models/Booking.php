<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'website_url',
        'monthly_revenue',
        'service_interested',
        'booking_date',
        'booking_time',
        'timezone',
        'google_meet_link',
        'message',
        'status',
        'ip_address',
        'reminded_6h_at',
        'reminded_1h_at',
        'reminded_30m_at',
    ];

    protected $casts = [
        'reminded_6h_at' => 'datetime',
        'reminded_1h_at' => 'datetime',
        'reminded_30m_at' => 'datetime',
    ];

    /**
     * Get effective Google Meet Link.
     */
    public function getMeetLinkAttribute()
    {
        return !empty($this->google_meet_link) 
            ? $this->google_meet_link 
            : (env('GOOGLE_MEET_LINK') ?: 'https://meet.google.com/yfy-izme-fng');
    }

    /**
     * Parse appointment date and time into a Carbon instance in client's timezone or UTC.
     */
    public function getAppointmentDateTime()
    {
        try {
            $cleanTime = self::cleanTimeSlot($this->booking_time);
            if (!$this->booking_date || !$cleanTime) return null;

            $dateTimeString = trim($this->booking_date . ' ' . $cleanTime);
            $sourceTz = self::getIanaTimezone($this->timezone);

            return \Carbon\Carbon::parse($dateTimeString, $sourceTz);
        } catch (\Throwable $e) {
            return null;
        }
    }

    protected $appends = ['bangladesh_time'];

    /**
     * Scope for active bookings (pending or confirmed).
     * Completed or cancelled bookings release the time slot.
     */
    public function scopeActive($query)
    {
        return $query->whereIn('status', ['pending', 'confirmed']);
    }

    /**
     * Map frontend timezone abbreviations to standard IANA timezone identifiers.
     */
    public static function getIanaTimezone($tz)
    {
        $tz = strtoupper(trim($tz ?? ''));
        if (str_contains($tz, 'EST')) return 'America/New_York';
        if (str_contains($tz, 'CST')) return 'America/Chicago';
        if (str_contains($tz, 'PST')) return 'America/Los_Angeles';
        if (str_contains($tz, 'GMT')) return 'Europe/London';
        if (str_contains($tz, 'CET')) return 'Europe/Paris';
        if (str_contains($tz, 'GST') || str_contains($tz, 'DUBAI')) return 'Asia/Dubai';
        if (str_contains($tz, 'DHAKA') || str_contains($tz, 'BST (DHAKA)')) return 'Asia/Dhaka';
        if (str_contains($tz, 'SGT') || str_contains($tz, 'SINGAPORE')) return 'Asia/Singapore';
        if (str_contains($tz, 'AEST') || str_contains($tz, 'SYDNEY')) return 'Australia/Sydney';
        return 'America/New_York';
    }

    /**
     * Convert client scheduled appointment date & time to Bangladesh Local Time (Asia/Dhaka).
     */
    public function getBangladeshTimeAttribute()
    {
        try {
            $cleanTime = self::cleanTimeSlot($this->booking_time);
            if (!$this->booking_date || !$cleanTime) return null;

            $dateTimeString = trim($this->booking_date . ' ' . $cleanTime);
            $sourceTz = self::getIanaTimezone($this->timezone);

            $dt = \Carbon\Carbon::parse($dateTimeString, $sourceTz);
            $dt->setTimezone('Asia/Dhaka');

            return $dt->format('M j, Y \a\t h:i A');
        } catch (\Throwable $e) {
            return null;
        }
    }

    /**
     * Helper to clean / extract standard time string e.g. "09:00 AM" from "09:00 AM (EST)".
     */
    public static function cleanTimeSlot($timeString)
    {
        if (!$timeString) return '';
        // Extract pattern like "09:00 AM" or "9:00 AM"
        if (preg_match('/(\d{1,2}:\d{2}\s*(?:AM|PM))/i', $timeString, $matches)) {
            return strtoupper(trim($matches[1]));
        }
        return trim($timeString);
    }
}
