<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            if (!Schema::hasColumn('case_studies', 'full_content')) {
                $table->longText('full_content')->nullable()->after('solution');
            }
            if (!Schema::hasColumn('case_studies', 'results_detail')) {
                $table->text('results_detail')->nullable()->after('full_content');
            }
            if (!Schema::hasColumn('case_studies', 'client_logo')) {
                $table->string('client_logo')->nullable()->after('client_name');
            }
            if (!Schema::hasColumn('case_studies', 'project_url')) {
                $table->string('project_url')->nullable()->after('client_logo');
            }
        });
    }

    public function down(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropColumn([
                'full_content',
                'results_detail',
                'client_logo',
                'project_url'
            ]);
        });
    }
};
