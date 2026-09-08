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
        'message',
        'status',
        'ip_address',
    ];
}
