<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('website_url')->nullable();
            $table->string('monthly_revenue')->nullable();
            $table->string('service_interested')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('booking_time')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('pending'); // pending, confirmed, completed, cancelled
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
