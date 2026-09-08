<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->truncate();

        DB::table('settings')->insert([
            [
                'id' => 1,
                'google_key' => null,
                'google_analytics_id' => null,
                'site_name' => 'LMS',
                'site_logo' => '/assets/uploads/logo/logo.png', 
                'favicon' => '/assets/uploads/icon/fab-icon-6896dfd32829b.ico',
                'seo_meta_description' => 'LMS helps you create, manage, and sell online courses, track student progress, and deliver seamless learning — all in one platform.',
                'seo_keywords' => 'LMS.com',
                'seo_image' => '/assets/uploads/logo/logo.png',
                'tawk_chat_bot_key' => null,
                'name' => '',
                'address' => '',
                'driver' => '',
                'host' => 'smtp.mailtrap.io',
                'port' => 2525,
                'encryption' => 'tls',
                'username' => 'zidan',
                'password' => '123456',
                'status' => '1',
                'application_type' => null,
                'app_mode' => null,
                'facebook_client_id' => null,
                'facebook_client_secret' => null,
                'facebook_callback_url' => 'https://letsconnectv2.webdevs4u.com/auth/facebook/callback',
                'google_client_id' => null,
                'google_client_secret' => null,
                'google_callback_url' => 'https://letsconnectv2.webdevs4u.com/auth/google/callback',
                'copyright_text' => 'Copyright © LetsConnect. All rights reserved.', 
                'footer_text' => null,
                'email' => 'support@lms.com',
                'phone_no' => '07111111111',
                'support_email' => 'support@lms.com',
                'instagram_url' => "Building modern websites that drive results. We create stunning, responsive websites with cutting-edge technology.",
                'is_email' => 0,
                'primary_color' =>'#000000',
            ]
        ]);
    }
}








