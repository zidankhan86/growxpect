<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PricingPlan::where('tier_type', 'home')->delete();

        $plans = [
            [
                'name' => 'Growth Foundation',
                'badge' => 'Foundation',
                'tier_type' => 'home',
                'price' => '$1,490',
                'price_period' => '/ one-time setup',
                'sub_price_note' => 'Optional optimization & hosting: $290/mo',
                'description' => 'Essential lead capture and CRM pipeline automation designed to eliminate lead drop-off.',
                'features' => [
                    'Custom High-Converting Landing Page / Funnel',
                    'CRM Configuration & Deal Pipeline Setup',
                    '3-Stage Instant Email & SMS Follow-Up Workflows',
                    'Automated Booking Calendar & Form Integration',
                    'Instant Team Alert Bot (Slack / WhatsApp / Email)',
                    'Essential Analytics & Conversion Tracking',
                ],
                'cta_text' => 'Start With Foundation',
                'cta_link' => '#booking',
                'is_popular' => false,
                'sort_order' => 1,
            ],
            [
                'name' => 'Flagship Growth Engine',
                'badge' => 'Most Popular • Complete System',
                'tier_type' => 'home',
                'price' => '$2,750',
                'price_period' => '/ month',
                'sub_price_note' => 'Includes $1,990 one-time architecture setup',
                'description' => 'The complete connected ecosystem: High-converting funnels, CRM automation, Paid Ads management, and AI Speed-to-Lead bot.',
                'features' => [
                    'Full Multi-Stage Funnel Ecosystem (VSL + Lead Magnet + Booking)',
                    'Omnichannel Paid Ads Management (Meta & Google Ads)',
                    'AI Speed-to-Lead Instant Response Bot (< 60s qualification)',
                    'Complete Lifecycle CRM Workflows & Multi-Touch Nurturing',
                    'Continuous CRO A/B Split Testing & Copy Optimizations',
                    'Dedicated Growth Strategist & Private Slack Channel',
                ],
                'cta_text' => 'Build My Growth Engine',
                'cta_link' => '#booking',
                'is_popular' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Custom Enterprise',
                'badge' => 'Enterprise',
                'tier_type' => 'home',
                'price' => 'Custom',
                'price_period' => '/ tailored scope',
                'sub_price_note' => 'Tailored for established firms & high ad spend',
                'description' => 'Bespoke AI automation, high-volume multi-brand funnels, and enterprise API integrations.',
                'features' => [
                    'Multi-Brand / Multi-Location Funnel & CRM Systems',
                    'Custom AI Agent Trained on Proprietary Business Knowledge',
                    'Custom Database, ERP, or Proprietary Webhook Integrations',
                    'Multi-Touch Revenue Attribution & Executive Reporting',
                    'White-Glove Team Onboarding & SOP Documentation',
                    'Priority 24/7 Response Time & Dedicated Tech Lead',
                ],
                'cta_text' => 'Talk to Solutions Architect',
                'cta_link' => '#booking',
                'is_popular' => false,
                'sort_order' => 3,
            ],
        ];

        foreach ($plans as $plan) {
            PricingPlan::create($plan);
        }
    }
}

