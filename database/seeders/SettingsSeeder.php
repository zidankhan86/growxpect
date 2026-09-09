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
                'site_name' => 'Growxpect',
                'site_logo' => 'logo.png', 
                'favicon' => '/assets/uploads/icon/fab-icon-6896dfd32829b.ico',
                'seo_meta_description' => 'Growxpect helps you create predictable revenue engines with high-converting funnels, marketing automation, paid ads, and AI systems.',
                'seo_keywords' => 'growxpect.com, digital growth agency, funnels, crm automation',
                'seo_image' => 'logo.png',
                'tawk_chat_bot_key' => null,
                'name' => 'Growxpect Admin',
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
                'facebook_callback_url' => '',
                'google_client_id' => null,
                'google_client_secret' => null,
                'google_callback_url' => '',
                'copyright_text' => 'Copyright © Growxpect. All rights reserved.', 
                'footer_text' => 'Connecting funnels, CRM, and automation into predictable revenue engines.',
                'email' => 'admin@growxpect.com',
                'phone_no' => '+1 (555) 019-2834',
                'support_email' => 'support@growxpect.com',
                'instagram_url' => "https://instagram.com/growxpect",
                'is_email' => 0,
                'primary_color' =>'#38C5D2',
            ]
        ]);
    }
}








