<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('bookings', 'timezone')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->string('timezone')->nullable()->after('booking_time');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('bookings', 'timezone')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->dropColumn('timezone');
            });
        }
    }
};
