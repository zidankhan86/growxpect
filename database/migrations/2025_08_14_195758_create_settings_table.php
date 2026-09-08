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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('google_key', 191)->nullable();
            $table->string('google_analytics_id', 191)->nullable();
            $table->longText('site_name')->nullable();
            $table->string('site_logo', 191)->nullable();
            $table->string('admin_logo', 191)->nullable();
            $table->string('favicon', 191)->nullable();
            $table->longText('seo_meta_description')->nullable();
            $table->longText('seo_keywords')->nullable();
            $table->string('seo_image', 191)->nullable();
            $table->string('tawk_chat_bot_key', 191)->nullable();
            $table->longText('name')->nullable();
            $table->longText('address')->nullable();
            $table->string('driver', 191)->nullable();
            $table->string('host', 191)->nullable();
            $table->integer('port')->nullable();
            $table->string('encryption', 191)->nullable();
            $table->string('username', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('status', 191)->default('1');
            $table->string('application_type', 50)->nullable();
            $table->enum('app_mode', ['local', 'live'])->nullable()->comment('local/live');
            $table->string('facebook_client_id', 150)->nullable();
            $table->string('facebook_client_secret', 150)->nullable();
            $table->string('facebook_callback_url', 255)->nullable();
            $table->string('google_client_id', 150)->nullable();
            $table->string('google_client_secret', 150)->nullable();
            $table->string('google_callback_url', 255)->nullable();
            $table->string('copyright_text', 124)->nullable();
            $table->string('office_address', 150)->nullable();
            $table->string('facebook_url', 150)->nullable();
            $table->string('github_url', 150)->nullable();
            $table->string('twitter_url', 150)->nullable();
            $table->string('linkedin_url', 150)->nullable();
            $table->string('telegram_url', 150)->nullable();
            $table->string('whatsapp_number', 150)->nullable();
            $table->string('primary_color')->default('#c08b4f');
            $table->string('footer_text', 250)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('phone_no', 150)->nullable();
            $table->string('support_email', 30)->nullable();
            $table->boolean('is_email')->default(0);
            $table->string('instagram_url', 255)->nullable();
            $table->text('map_link')->nullable();
            $table->string('gtm_id', 200)->nullable();
            $table->boolean('gtm_status')->default(0);
            $table->string('fb_pixel_id', 100)->nullable();
            $table->boolean('fb_pixel_status')->default(0);
            $table->text('invoice_footer')->nullable();
            $table->enum('category_type', ['carousel', 'grid'])->default('carousel')->comment('homepage category display');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
