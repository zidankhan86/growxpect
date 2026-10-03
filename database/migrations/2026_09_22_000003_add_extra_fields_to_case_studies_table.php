<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            if (!Schema::hasColumn('case_studies', 'image')) {
                $table->string('image')->nullable()->after('tech_stack');
            }
            if (!Schema::hasColumn('case_studies', 'client_name')) {
                $table->string('client_name')->nullable()->after('image');
            }
            if (!Schema::hasColumn('case_studies', 'challenge')) {
                $table->text('challenge')->nullable()->after('client_name');
            }
            if (!Schema::hasColumn('case_studies', 'solution')) {
                $table->text('solution')->nullable()->after('challenge');
            }
            if (!Schema::hasColumn('case_studies', 'testimonial_quote')) {
                $table->text('testimonial_quote')->nullable()->after('solution');
            }
            if (!Schema::hasColumn('case_studies', 'testimonial_author')) {
                $table->string('testimonial_author')->nullable()->after('testimonial_quote');
            }
        });
    }

    public function down(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropColumn([
                'image',
                'client_name',
                'challenge',
                'solution',
                'testimonial_quote',
                'testimonial_author'
            ]);
        });
    }
};
