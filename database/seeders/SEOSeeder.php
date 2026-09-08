<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seos')->truncate();

        DB::table('seos')->insert([
            [
                'id' => 1,
                'page_slug' => 'home',
                'title' => 'Welcome To Ecommerce',
                'description' => 'Ecommerce helps you manage customers, automate billing, and get paid via M-PESA — all in one platform.',
                'keywords' => 'Ecommerce, automate billing, water service, water billing',
                'image' => 'uploads/seo/logovenmeo-6666c014183a9.png',
                'created_at' => '2022-08-19 23:31:12',
                'updated_at' => '2025-08-09 12:03:01'
            ]
        ]);

    }
}
