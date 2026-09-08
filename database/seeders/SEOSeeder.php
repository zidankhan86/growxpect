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
                'title' => 'Growxpect | Digital Growth & Performance Marketing Agency',
                'description' => 'We engineer predictable revenue engines with high-converting funnels, marketing automation, paid ads, and AI systems.',
                'keywords' => 'digital growth agency, performance marketing, conversion rate optimization, sales funnels, crm automation',
                'image' => 'assets/images/og-image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'page_slug' => 'about',
                'title' => 'About Us - Growxpect | We Build Growth Systems',
                'description' => 'Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter systems.',
                'keywords' => 'about growxpect, digital growth agency, marketing automation team',
                'image' => 'assets/images/og-image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'page_slug' => 'case_studies',
                'title' => 'Case Studies & Results - Growxpect',
                'description' => 'Explore how Growxpect helps healthcare, SaaS, real estate, and eCommerce brands achieve explosive measurable growth.',
                'keywords' => 'case studies, client results, growth marketing metrics, roi',
                'image' => 'assets/images/og-image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'page_slug' => 'services',
                'title' => 'Our Growth Services & Pricing - Growxpect',
                'description' => 'Full-funnel growth infrastructure: Lead Gen, CRM & Automation, Paid Media, and AI Sales Systems.',
                'keywords' => 'growth services, paid media pricing, marketing automation pricing, lead gen packages',
                'image' => 'assets/images/og-image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

    }
}
