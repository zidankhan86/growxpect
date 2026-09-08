<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homepage_contents', function (Blueprint $table) {
            $table->id();
            $table->string('section', 100)->comment('e.g. hero, social_proof, cta ...');
            $table->string('field_key', 100);
            $table->longText('field_value')->nullable();
            $table->string('field_type', 50)->default('text')->comment('text|textarea|image|url');
            $table->timestamps();

            $table->unique(['section', 'field_key']);
            $table->index('section');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_contents');
    }
};
