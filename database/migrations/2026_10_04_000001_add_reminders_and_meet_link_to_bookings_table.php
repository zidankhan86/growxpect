<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'google_meet_link')) {
                $table->string('google_meet_link')->nullable()->after('timezone');
            }
            if (!Schema::hasColumn('bookings', 'reminded_6h_at')) {
                $table->timestamp('reminded_6h_at')->nullable()->after('status');
            }
            if (!Schema::hasColumn('bookings', 'reminded_1h_at')) {
                $table->timestamp('reminded_1h_at')->nullable()->after('reminded_6h_at');
            }
            if (!Schema::hasColumn('bookings', 'reminded_30m_at')) {
                $table->timestamp('reminded_30m_at')->nullable()->after('reminded_1h_at');
            }
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (Schema::hasColumn('bookings', 'google_meet_link')) {
                $table->dropColumn('google_meet_link');
            }
            if (Schema::hasColumn('bookings', 'reminded_6h_at')) {
                $table->dropColumn('reminded_6h_at');
            }
            if (Schema::hasColumn('bookings', 'reminded_1h_at')) {
                $table->dropColumn('reminded_1h_at');
            }
            if (Schema::hasColumn('bookings', 'reminded_30m_at')) {
                $table->dropColumn('reminded_30m_at');
            }
        });
    }
};
