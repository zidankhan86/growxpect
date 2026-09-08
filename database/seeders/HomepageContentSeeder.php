<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageContentSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        $fields = [
            // 1. HERO SECTION
            ['section' => 'hero', 'field_key' => 'badge', 'field_value' => 'FUNNELS • CRM • AUTOMATION • GROWTH', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'title', 'field_value' => 'Turn More Leads Into Customers With Smarter Growth Systems.', 'field_type' => 'textarea'],
            ['section' => 'hero', 'field_key' => 'subtitle', 'field_value' => 'Growxpect builds conversion-focused funnels, CRM systems, and automated workflows that help businesses capture, nurture and convert more leads.', 'field_type' => 'textarea'],
            ['section' => 'hero', 'field_key' => 'primary_btn_text', 'field_value' => 'Build My Growth System', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'primary_btn_link', 'field_value' => '#booking', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'secondary_btn_text', 'field_value' => 'See How It Works', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'secondary_btn_link', 'field_value' => '#process', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'stat_leads', 'field_value' => '+128 this week', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'stat_captured_leads', 'field_value' => '2,847', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'stat_growth_rate', 'field_value' => '+32.5%', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'stat_appointments', 'field_value' => '34', 'field_type' => 'text'],
            ['section' => 'hero', 'field_key' => 'stat_followup_rate', 'field_value' => '92%', 'field_type' => 'text'],

            // 2. THE PROBLEM SECTION
            ['section' => 'problem', 'field_key' => 'badge', 'field_value' => 'THE PROBLEM', 'field_type' => 'text'],
            ['section' => 'problem', 'field_key' => 'title', 'field_value' => 'Your leads are leaking between systems.', 'field_type' => 'textarea'],
            ['section' => 'problem', 'field_key' => 'subtitle', 'field_value' => 'You\'re getting leads, but they\'re not converting? The problem isn\'t your traffic — it\'s the broken connection between your funnel, CRM and follow-ups.', 'field_type' => 'textarea'],
            ['section' => 'problem', 'field_key' => 'callout', 'field_value' => 'Over 68% of warm inbound inquiries go cold due to manual delays and siloed systems.', 'field_type' => 'textarea'],

            // 3. OUR SOLUTION SECTION
            ['section' => 'solution', 'field_key' => 'badge', 'field_value' => 'OUR SOLUTION', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'title', 'field_value' => 'The Growxpect Growth System.', 'field_type' => 'textarea'],
            ['section' => 'solution', 'field_key' => 'subtitle', 'field_value' => 'We connect the dots — from first click to final sale — with high-converting funnels, smart CRM and powerful automation. Everything works together seamlessly, so you can focus on what matters most: growing your business.', 'field_type' => 'textarea'],
            ['section' => 'solution', 'field_key' => 'step_1_title', 'field_value' => 'Funnels', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_1_desc', 'field_value' => 'Turn visitors into leads', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_2_title', 'field_value' => 'CRM', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_2_desc', 'field_value' => 'Manage & nurture leads', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_3_title', 'field_value' => 'Automation', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_3_desc', 'field_value' => 'Save time, boost conversions', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_4_title', 'field_value' => 'Appointments', 'field_type' => 'text'],
            ['section' => 'solution', 'field_key' => 'step_4_desc', 'field_value' => 'Book more meetings', 'field_type' => 'text'],

            // 4. WHAT WE DO / SERVICES OVERVIEW SECTION
            ['section' => 'services_overview', 'field_key' => 'badge', 'field_value' => 'WHAT WE DO', 'field_type' => 'text'],
            ['section' => 'services_overview', 'field_key' => 'title', 'field_value' => 'Solutions That Drive Growth', 'field_type' => 'textarea'],
            ['section' => 'services_overview', 'field_key' => 'subtitle', 'field_value' => 'Everything your business needs to attract, engage, and convert more customers — all under one cohesive strategy.', 'field_type' => 'textarea'],
            ['section' => 'services_overview', 'field_key' => 'service_1_title', 'field_value' => 'High-Converting Funnels', 'field_type' => 'text'],
            ['section' => 'services_overview', 'field_key' => 'service_1_desc', 'field_value' => 'Strategic funnels that turn traffic into qualified leads and paying customers with frictionless UX.', 'field_type' => 'textarea'],
            ['section' => 'services_overview', 'field_key' => 'service_2_title', 'field_value' => 'CRM Systems', 'field_type' => 'text'],
            ['section' => 'services_overview', 'field_key' => 'service_2_desc', 'field_value' => 'Keep your leads organized, follow up automatically, and never let high-value revenue slip through cracks.', 'field_type' => 'textarea'],
            ['section' => 'services_overview', 'field_key' => 'service_3_title', 'field_value' => 'Marketing Automation', 'field_type' => 'text'],
            ['section' => 'services_overview', 'field_key' => 'service_3_desc', 'field_value' => 'Automate your multi-channel follow-ups, re-engage cold leads, and scale conversion on 24/7 autopilot.', 'field_type' => 'textarea'],
            ['section' => 'services_overview', 'field_key' => 'service_4_title', 'field_value' => 'Lead Generation', 'field_type' => 'text'],
            ['section' => 'services_overview', 'field_key' => 'service_4_desc', 'field_value' => 'Drive consistent, high-converting targeted traffic with full-funnel data-driven campaign architecture.', 'field_type' => 'textarea'],

            // 5. CASE STUDIES OVERVIEW SECTION
            ['section' => 'case_studies_overview', 'field_key' => 'badge', 'field_value' => 'CASE STUDIES', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'title', 'field_value' => 'Growth Systems Built To Perform.', 'field_type' => 'textarea'],
            ['section' => 'case_studies_overview', 'field_key' => 'subtitle', 'field_value' => 'Real businesses. Real results. See how we\'ve helped companies scale predictability with custom automated growth systems.', 'field_type' => 'textarea'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_1_val', 'field_value' => '+287%', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_1_label', 'field_value' => 'Average Lead Growth', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_2_val', 'field_value' => '+156%', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_2_label', 'field_value' => 'Increase Appointments', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_3_val', 'field_value' => '+73%', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_3_label', 'field_value' => 'Higher Conversion', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_4_val', 'field_value' => '-42%', 'field_type' => 'text'],
            ['section' => 'case_studies_overview', 'field_key' => 'stat_4_label', 'field_value' => 'Lower Cost Per Lead', 'field_type' => 'text'],

            // 6. PARTNER & WHY GROWXPECT SECTION
            ['section' => 'partner', 'field_key' => 'badge', 'field_value' => 'TOGETHER FOR YOUR SUCCESS', 'field_type' => 'text'],
            ['section' => 'partner', 'field_key' => 'title', 'field_value' => 'Your Partner in Digital Success.', 'field_type' => 'textarea'],
            ['section' => 'partner', 'field_key' => 'subtitle', 'field_value' => 'We don\'t just build websites. We build end-to-end revenue engines that scale with your business.', 'field_type' => 'textarea'],
            ['section' => 'partner', 'field_key' => 'why_badge', 'field_value' => 'WHY GROWXPECT', 'field_type' => 'text'],
            ['section' => 'partner', 'field_key' => 'why_1_title', 'field_value' => 'Data-Driven Strategy', 'field_type' => 'text'],
            ['section' => 'partner', 'field_key' => 'why_1_desc', 'field_value' => 'No guesswork. Every step is engineered with metrics.', 'field_type' => 'textarea'],
            ['section' => 'partner', 'field_key' => 'why_2_title', 'field_value' => 'Proven Systems', 'field_type' => 'text'],
            ['section' => 'partner', 'field_key' => 'why_2_desc', 'field_value' => 'Battle-tested funnel frameworks that convert.', 'field_type' => 'textarea'],
            ['section' => 'partner', 'field_key' => 'why_3_title', 'field_value' => 'Dedicated Team', 'field_type' => 'text'],
            ['section' => 'partner', 'field_key' => 'why_3_desc', 'field_value' => 'Direct access to experienced growth engineers.', 'field_type' => 'textarea'],
            ['section' => 'partner', 'field_key' => 'why_4_title', 'field_value' => 'Long-Term Partnership', 'field_type' => 'text'],
            ['section' => 'partner', 'field_key' => 'why_4_desc', 'field_value' => 'Continuous iteration to maximize lifetime ROI.', 'field_type' => 'textarea'],

            // 7. OUR PROCESS SECTION
            ['section' => 'process', 'field_key' => 'badge', 'field_value' => 'OUR PROCESS', 'field_type' => 'text'],
            ['section' => 'process', 'field_key' => 'title', 'field_value' => 'A Simple Process. A Powerful Result.', 'field_type' => 'textarea'],
            ['section' => 'process', 'field_key' => 'subtitle', 'field_value' => 'We follow a proven 4-step framework to build your custom growth engine, tailored for your industry.', 'field_type' => 'textarea'],
            ['section' => 'process', 'field_key' => 'step_1_title', 'field_value' => 'DISCOVER', 'field_type' => 'text'],
            ['section' => 'process', 'field_key' => 'step_1_desc', 'field_value' => 'Understand your unique business model, ideal customer profile, and bottlenecks.', 'field_type' => 'textarea'],
            ['section' => 'process', 'field_key' => 'step_2_title', 'field_value' => 'STRATEGIZE', 'field_type' => 'text'],
            ['section' => 'process', 'field_key' => 'step_2_desc', 'field_value' => 'Architect the optimal conversion funnel, CRM workflow, and customer journey.', 'field_type' => 'textarea'],
            ['section' => 'process', 'field_key' => 'step_3_title', 'field_value' => 'BUILD', 'field_type' => 'text'],
            ['section' => 'process', 'field_key' => 'step_3_desc', 'field_value' => 'Engineer high-converting pages, integrate CRM, and configure automated sequences.', 'field_type' => 'textarea'],
            ['section' => 'process', 'field_key' => 'step_4_title', 'field_value' => 'OPTIMIZE', 'field_type' => 'text'],
            ['section' => 'process', 'field_key' => 'step_4_desc', 'field_value' => 'Continuously track analytics, A/B test touchpoints, and maximize ROI.', 'field_type' => 'textarea'],

            // 8. BOOKING CTA SECTION
            ['section' => 'booking_cta', 'field_key' => 'badge', 'field_value' => 'BOOK A FREE STRATEGY CALL', 'field_type' => 'text'],
            ['section' => 'booking_cta', 'field_key' => 'title', 'field_value' => 'Ready to Build a Growth System That Works?', 'field_type' => 'textarea'],
            ['section' => 'booking_cta', 'field_key' => 'subtitle', 'field_value' => 'Let\'s turn your leads, funnels and follow-ups into a connected revenue engine. Schedule a 1-on-1 strategy session with our lead architects.', 'field_type' => 'textarea'],
            ['section' => 'booking_cta', 'field_key' => 'button_text', 'field_value' => 'Book A Free Growth Strategy Call', 'field_type' => 'text'],
            ['section' => 'booking_cta', 'field_key' => 'footnote', 'field_value' => '30-Minute Call • 100% Free • No Obligation', 'field_type' => 'text'],
        ];

        foreach ($fields as &$row) {
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
        }

        DB::table('homepage_contents')->truncate();
        DB::table('homepage_contents')->insert($fields);

        $this->command->info('Homepage CMS seeded successfully!');
    }
}
