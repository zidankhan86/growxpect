<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // healthcare, saas, realestate, ecommerce
            $table->string('category_label');
            $table->string('badge_text')->nullable();
            $table->string('headline');
            $table->text('description');
            $table->string('metric_1_val')->nullable();
            $table->string('metric_1_label')->nullable();
            $table->string('metric_2_val')->nullable();
            $table->string('metric_2_label')->nullable();
            $table->string('metric_3_val')->nullable();
            $table->string('metric_3_label')->nullable();
            $table->string('tech_stack')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
