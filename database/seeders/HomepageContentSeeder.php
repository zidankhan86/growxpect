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

            // =========================================================================
            // ABOUT PAGE SECTIONS
            // =========================================================================
            ['section' => 'about_hero', 'field_key' => 'badge_text', 'field_value' => 'ABOUT GROWXPECT', 'field_type' => 'text'],
            ['section' => 'about_hero', 'field_key' => 'heading_line1', 'field_value' => 'We Build Growth Systems That', 'field_type' => 'text'],
            ['section' => 'about_hero', 'field_key' => 'heading_highlight', 'field_value' => 'Turn Attention Into Revenue', 'field_type' => 'text'],
            ['section' => 'about_hero', 'field_key' => 'description', 'field_value' => 'Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter marketing systems.', 'field_type' => 'textarea'],
            ['section' => 'about_hero', 'field_key' => 'box_text', 'field_value' => 'We combine high-converting funnels, CRM, marketing automation, paid advertising, and AI-powered solutions to create connected growth systems that work together — not isolated marketing services.', 'field_type' => 'textarea'],
            ['section' => 'about_hero', 'field_key' => 'goal_badge', 'field_value' => 'OUR GOAL IS SIMPLE', 'field_type' => 'text'],
            ['section' => 'about_hero', 'field_key' => 'goal_text', 'field_value' => 'Help businesses grow faster, operate smarter, and turn more opportunities into revenue.', 'field_type' => 'textarea'],

            ['section' => 'about_system', 'field_key' => 'badge_text', 'field_value' => 'MORE THAN MARKETING', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'heading_line1', 'field_value' => 'A Complete', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'heading_highlight', 'field_value' => 'Growth System.', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'paragraph_1', 'field_value' => 'Getting traffic is only one part of the equation.', 'field_type' => 'textarea'],
            ['section' => 'about_system', 'field_key' => 'paragraph_2', 'field_value' => 'If leads are not captured properly, follow-ups are slow, sales processes are unorganized, or customers fall through the cracks, businesses lose revenue every day.', 'field_type' => 'textarea'],
            ['section' => 'about_system', 'field_key' => 'paragraph_3', 'field_value' => 'That\'s where Growxpect comes in.', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'paragraph_4', 'field_value' => 'We design and implement the systems behind your marketing and sales process — from the moment someone discovers your business to the moment they become a customer.', 'field_type' => 'textarea'],
            ['section' => 'about_system', 'field_key' => 'card_title', 'field_value' => 'Our Systems Help You:', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'benefit_1', 'field_value' => 'Attract the right audience with targeted advertising', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'benefit_2', 'field_value' => 'Capture high-intent leads with conversion-focused funnels', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'benefit_3', 'field_value' => 'Nurture prospects automatically with smart CRM workflows', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'benefit_4', 'field_value' => 'Convert more leads into paying customers with streamlined sales systems', 'field_type' => 'text'],
            ['section' => 'about_system', 'field_key' => 'benefit_5', 'field_value' => 'Scale predictably with data-driven optimization', 'field_type' => 'text'],

            ['section' => 'about_founder', 'field_key' => 'badge_text', 'field_value' => 'MEET THE FOUNDER', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'years_experience', 'field_value' => '7+ Years', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'experience_label', 'field_value' => 'Experience', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'greeting_1', 'field_value' => 'Hi, I\'m', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'name_1', 'field_value' => 'Rezaee', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'name_2', 'field_value' => 'Rabbi.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'role_text', 'field_value' => 'Founder & Digital Growth Strategist at', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'role_company', 'field_value' => 'Growxpect', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'description', 'field_value' => 'I help businesses grow through proven digital systems — including sales funnels, GoHighLevel, CRM & marketing automation, lead generation, paid advertising and conversion optimization.', 'field_type' => 'textarea'],
            ['section' => 'about_founder', 'field_key' => 'expertise_1_title', 'field_value' => 'Sales Funnels', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_1_desc', 'field_value' => 'Turn visitors into customers.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_2_title', 'field_value' => 'GoHighLevel', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_2_desc', 'field_value' => 'All-in-one platform. Real results.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_3_title', 'field_value' => 'CRM & Marketing Automation', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_3_desc', 'field_value' => 'Nurture. Engage. Convert.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_4_title', 'field_value' => 'Lead Generation', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_4_desc', 'field_value' => 'Scale with data, not guesswork.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_5_title', 'field_value' => 'Paid Advertising', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_5_desc', 'field_value' => 'More qualified leads. Faster.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_6_title', 'field_value' => 'Conversion Optimization', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'expertise_6_desc', 'field_value' => 'Higher traffic. Better results.', 'field_type' => 'text'],
            ['section' => 'about_founder', 'field_key' => 'quote_text', 'field_value' => '“Don\'t just generate more leads. Build a system that knows what to do with them.”', 'field_type' => 'textarea'],
            ['section' => 'about_founder', 'field_key' => 'founder_title', 'field_value' => 'Founder, Growxpect', 'field_type' => 'text'],

            ['section' => 'about_capabilities', 'field_key' => 'badge_text', 'field_value' => 'OUR CAPABILITIES', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'heading', 'field_value' => 'What We Do', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'subheading', 'field_value' => 'We help businesses build and optimize every stage of their customer acquisition and retention process:', 'field_type' => 'textarea'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_1_title', 'field_value' => 'High-Converting Funnels & Landing Pages', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_1_desc', 'field_value' => 'Custom-designed funnels built to turn visitors into qualified leads and sales.', 'field_type' => 'textarea'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_2_title', 'field_value' => 'CRM & Pipeline Setup', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_2_desc', 'field_value' => 'Organized systems to manage leads, track deals, and improve sales efficiency.', 'field_type' => 'textarea'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_3_title', 'field_value' => 'Marketing & Sales Automation', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_3_desc', 'field_value' => 'Automated email, SMS, and workflow follow-ups that engage prospects instantly.', 'field_type' => 'textarea'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_4_title', 'field_value' => 'Paid Advertising (Meta & Google Ads)', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_4_desc', 'field_value' => 'Targeted campaigns designed to generate consistent, qualified traffic.', 'field_type' => 'textarea'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_5_title', 'field_value' => 'AI & Smart Growth Solutions', 'field_type' => 'text'],
            ['section' => 'about_capabilities', 'field_key' => 'cap_5_desc', 'field_value' => 'AI-powered tools and automations that speed up lead response and improve conversion rates.', 'field_type' => 'textarea'],

            ['section' => 'about_why', 'field_key' => 'badge_text', 'field_value' => 'WHY GROWXPECT?', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'heading_line1', 'field_value' => 'We Focus on the', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'heading_highlight', 'field_value' => 'Entire System.', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'paragraph_1', 'field_value' => 'Most agencies focus on only one piece of the puzzle — running ads without fixing the funnel, or building a website without follow-up systems.', 'field_type' => 'textarea'],
            ['section' => 'about_why', 'field_key' => 'paragraph_2', 'field_value' => 'At Growxpect, we focus on the entire system.', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_1_title', 'field_value' => 'Connected Strategy', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_1_desc', 'field_value' => 'Marketing, sales, and automation working together.', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_2_title', 'field_value' => 'Speed to Lead', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_2_desc', 'field_value' => 'Instant follow-ups so you never lose high-intent prospects.', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_3_title', 'field_value' => 'Conversion-Driven Design', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_3_desc', 'field_value' => 'Built to generate revenue, not just look good.', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_4_title', 'field_value' => 'Scalable Systems', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_4_desc', 'field_value' => 'Processes and technology that grow with your business.', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_5_title', 'field_value' => 'Results-Focused', 'field_type' => 'text'],
            ['section' => 'about_why', 'field_key' => 'reason_5_desc', 'field_value' => 'We measure success by leads, conversions, and growth.', 'field_type' => 'text'],

            ['section' => 'about_mission', 'field_key' => 'badge_text', 'field_value' => 'OUR MISSION', 'field_type' => 'text'],
            ['section' => 'about_mission', 'field_key' => 'heading_line1', 'field_value' => 'To help ambitious businesses build scalable growth infrastructure that turns marketing into a', 'field_type' => 'textarea'],
            ['section' => 'about_mission', 'field_key' => 'heading_highlight', 'field_value' => 'predictable revenue engine.', 'field_type' => 'text'],
            ['section' => 'about_mission', 'field_key' => 'cta_heading', 'field_value' => 'Ready to Build Your Growth System?', 'field_type' => 'text'],
            ['section' => 'about_mission', 'field_key' => 'cta_description', 'field_value' => 'Let\'s turn your marketing into a connected, high-performing system that drives real results.', 'field_type' => 'textarea'],
            ['section' => 'about_mission', 'field_key' => 'cta_btn1_text', 'field_value' => 'Book a Strategy Call', 'field_type' => 'text'],
            ['section' => 'about_mission', 'field_key' => 'cta_btn1_link', 'field_value' => '/#booking', 'field_type' => 'text'],
            ['section' => 'about_mission', 'field_key' => 'cta_btn2_text', 'field_value' => 'Explore Services & Pricing', 'field_type' => 'text'],
            ['section' => 'about_mission', 'field_key' => 'cta_btn2_link', 'field_value' => '/services', 'field_type' => 'text'],
        ];

        foreach ($fields as $item) {
            DB::table('homepage_contents')->updateOrInsert(
                [
                    'section' => $item['section'],
                    'field_key' => $item['field_key']
                ],
                [
                    'field_value' => $item['field_value'],
                    'field_type' => $item['field_type'],
                    'updated_at' => $now,
                    'created_at' => $now
                ]
            );
        }

        $this->command->info('Homepage & About CMS seeded successfully!');
    }
}
