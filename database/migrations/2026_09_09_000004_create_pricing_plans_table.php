<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('badge')->nullable();
            $table->string('tier_type')->default('home'); // home, funnel, crm, ads, ai, flagship
            $table->string('price');
            $table->string('price_period')->nullable();
            $table->string('sub_price_note')->nullable();
            $table->text('description');
            $table->json('features');
            $table->string('cta_text')->default('Book Strategy Call');
            $table->string('cta_link')->default('#booking');
            $table->boolean('is_popular')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
