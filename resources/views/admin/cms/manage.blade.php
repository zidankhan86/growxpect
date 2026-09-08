@extends('admin.layouts.master')

@section('cms_manage', 'active')
@section('title') Homepage CMS @endsection

@push('style')
    <style>
        .cms-page-wrapper~.page-wrapper {
            display: none;
        }

        .cms-page-wrapper {
            display: flex;
            flex-direction: column;
            flex: 1 1 auto;
            overflow: hidden;
            padding: 0 !important;
            height: 100vh;
            max-height: 100vh;
            position: sticky;
            top: 0;
        }

        .cms-shell {
            display: flex;
            flex: 1 1 auto;
            overflow: hidden;
            height: 100%;
        }

        .cms-left {
            width: 440px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #e0e3e8;
            background: #fff;
            overflow: hidden;
        }

        .cms-left-head {
            padding: 12px 16px;
            border-bottom: 1px solid #e0e3e8;
            background: #0f172a;
            color: #fff;
            font-weight: 700;
            font-size: 13px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cms-left-body {
            flex: 1;
            overflow-y: auto;
        }

        .cms-accordion .accordion-button {
            font-size: 13px;
            font-weight: 600;
            padding: 12px 16px;
            background: #fff;
            color: #1a1a2e;
            box-shadow: none;
            border-bottom: 1px solid #edf2f7;
        }

        .cms-accordion .accordion-button:not(.collapsed) {
            background: #f0fdf4;
            color: #15803d;
            box-shadow: none;
            border-bottom: 1px solid #bbf7d0;
        }

        .cms-accordion .accordion-button::after {
            margin-left: auto;
            flex-shrink: 0;
        }

        .cms-accordion .accordion-body {
            padding: 14px 16px 20px;
            border-top: 1px solid #e8ecf0;
            background: #f8fafc;
        }

        .cms-accordion .accordion-item {
            border: none;
            border-bottom: 1px solid #e8ecf0;
        }

        .cf-label {
            font-size: 11px;
            font-weight: 700;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: .04em;
            margin-bottom: 4px;
            display: block;
            margin-top: 12px;
        }

        .cf-label:first-child {
            margin-top: 0;
        }

        .cf-control {
            font-size: 12.5px;
            padding: 6px 10px;
            background: #fff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        .cf-control:focus {
            border-color: #38c5d2;
            box-shadow: 0 0 0 2px rgba(56, 197, 210, 0.2);
        }

        .cf-row {
            display: flex;
            gap: 8px;
        }

        .cf-row>* {
            flex: 1;
        }

        .cms-save-btn {
            width: 100%;
            margin-top: 16px;
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: .03em;
            background: #0f172a;
            color: #fff;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            transition: all 0.2s;
        }

        .cms-save-btn:hover {
            background: #1e293b;
            color: #38c5d2;
        }

        .sub-card {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 10px 12px;
            margin-top: 10px;
            background: #fff;
        }

        .sub-card-title {
            font-size: 11px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .cms-preview {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: #030712;
        }

        .cms-preview-bar {
            background: #0f172a;
            border-bottom: 1px solid #1e293b;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
            font-size: 12px;
            color: #f8fafc;
        }

        #previewFrame {
            flex: 1;
            border: none;
            width: 100%;
            height: 100%;
        }

        #cmsToasts {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 9999;
            display: flex;
            flex-direction: column-reverse;
            gap: 8px;
            pointer-events: none;
        }

        .cms-toast {
            padding: 10px 18px;
            border-radius: 8px;
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .25);
            display: flex;
            align-items: center;
            gap: 8px;
            max-width: 320px;
            animation: cmsToastIn .2s ease;
        }

        .cms-toast.success {
            background: #10b981;
        }

        .cms-toast.error {
            background: #ef4444;
        }

        @keyframes cmsToastIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: none;
            }
        }

        .btn-spinner {
            display: inline-block;
            width: 12px;
            height: 12px;
            border: 2px solid rgba(255, 255, 255, .4);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .6s linear infinite;
            vertical-align: middle;
            margin-right: 4px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
@endpush

@section('content')
    <div class="page-wrapper cms-page-wrapper">
        <div class="cms-shell">

            <div class="cms-left">
                <div class="cms-left-head">
                    <span class="d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                        Homepage Sections
                    </span>
                    <span class="badge bg-success text-white" style="font-size:10px;">Growxpect CMS</span>
                </div>

                <div class="cms-left-body">
                    <div class="accordion cms-accordion" id="cmsAccordion">

                        <!-- 1. HERO SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sec-hero">
                                    1. Hero Section
                                </button>
                            </h2>
                            <div id="sec-hero" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Hero">
                                        @csrf
                                        <input type="hidden" name="section" value="hero">

                                        <label class="cf-label">Category Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['hero_badge'] ?? 'FUNNELS • CRM • AUTOMATION • GROWTH' }}">

                                        <label class="cf-label">Main Headline</label>
                                        <textarea name="title" rows="3" class="form-control cf-control">{{ $cms['hero_title'] ?? 'Turn More Leads Into Customers With Smarter Growth Systems.' }}</textarea>

                                        <label class="cf-label">Subtitle Description</label>
                                        <textarea name="subtitle" rows="3" class="form-control cf-control">{{ $cms['hero_subtitle'] ?? 'Growxpect builds conversion-focused funnels, CRM systems, and automated workflows that help businesses capture, nurture and convert more leads.' }}</textarea>

                                        <div class="cf-row">
                                            <div>
                                                <label class="cf-label">Primary Button Text</label>
                                                <input type="text" name="primary_btn_text" class="form-control cf-control" value="{{ $cms['hero_primary_btn_text'] ?? 'Build My Growth System' }}">
                                            </div>
                                            <div>
                                                <label class="cf-label">Button Link</label>
                                                <input type="text" name="primary_btn_link" class="form-control cf-control" value="{{ $cms['hero_primary_btn_link'] ?? '#booking' }}">
                                            </div>
                                        </div>

                                        <div class="cf-row">
                                            <div>
                                                <label class="cf-label">Secondary Button Text</label>
                                                <input type="text" name="secondary_btn_text" class="form-control cf-control" value="{{ $cms['hero_secondary_btn_text'] ?? 'See How It Works' }}">
                                            </div>
                                            <div>
                                                <label class="cf-label">Secondary Link</label>
                                                <input type="text" name="secondary_btn_link" class="form-control cf-control" value="{{ $cms['hero_secondary_btn_link'] ?? '#process' }}">
                                            </div>
                                        </div>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Live Growth Engine Metrics</div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Floating Leads Stat</label>
                                                    <input type="text" name="stat_leads" class="form-control cf-control" value="{{ $cms['hero_stat_leads'] ?? '+128 this week' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Captured (30D)</label>
                                                    <input type="text" name="stat_captured_leads" class="form-control cf-control" value="{{ $cms['hero_stat_captured_leads'] ?? '2,847' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Growth Rate</label>
                                                    <input type="text" name="stat_growth_rate" class="form-control cf-control" value="{{ $cms['hero_stat_growth_rate'] ?? '+32.5%' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Appointments</label>
                                                    <input type="text" name="stat_appointments" class="form-control cf-control" value="{{ $cms['hero_stat_appointments'] ?? '34' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn cms-save-btn">Save Hero Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 2. THE PROBLEM SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-problem">
                                    2. The Problem Section
                                </button>
                            </h2>
                            <div id="sec-problem" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="The Problem">
                                        @csrf
                                        <input type="hidden" name="section" value="problem">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['problem_badge'] ?? 'THE PROBLEM' }}">

                                        <label class="cf-label">Heading</label>
                                        <textarea name="title" rows="2" class="form-control cf-control">{{ $cms['problem_title'] ?? 'Your leads are leaking between systems.' }}</textarea>

                                        <label class="cf-label">Description</label>
                                        <textarea name="subtitle" rows="3" class="form-control cf-control">{{ $cms['problem_subtitle'] ?? 'You\'re getting leads, but they\'re not converting? The problem isn\'t your traffic — it\'s the broken connection between your funnel, CRM and follow-ups.' }}</textarea>

                                        <label class="cf-label">Warning Callout</label>
                                        <textarea name="callout" rows="2" class="form-control cf-control">{{ $cms['problem_callout'] ?? 'Over 68% of warm inbound inquiries go cold due to manual delays and siloed systems.' }}</textarea>

                                        <button type="submit" class="btn cms-save-btn">Save Problem Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 3. OUR SOLUTION SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-solution">
                                    3. Our Solution Section
                                </button>
                            </h2>
                            <div id="sec-solution" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Our Solution">
                                        @csrf
                                        <input type="hidden" name="section" value="solution">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['solution_badge'] ?? 'OUR SOLUTION' }}">

                                        <label class="cf-label">Heading</label>
                                        <textarea name="title" rows="2" class="form-control cf-control">{{ $cms['solution_title'] ?? 'The Growxpect Growth System.' }}</textarea>

                                        <label class="cf-label">Description</label>
                                        <textarea name="subtitle" rows="3" class="form-control cf-control">{{ $cms['solution_subtitle'] ?? 'We connect the dots — from first click to final sale — with high-converting funnels, smart CRM and powerful automation. Everything works together seamlessly, so you can focus on what matters most: growing your business.' }}</textarea>

                                        <div class="sub-card">
                                            <div class="sub-card-title">4-Step System Steps</div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Step 1 Title</label>
                                                    <input type="text" name="step_1_title" class="form-control cf-control" value="{{ $cms['solution_step_1_title'] ?? 'Funnels' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Step 1 Desc</label>
                                                    <input type="text" name="step_1_desc" class="form-control cf-control" value="{{ $cms['solution_step_1_desc'] ?? 'Turn visitors into leads' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Step 2 Title</label>
                                                    <input type="text" name="step_2_title" class="form-control cf-control" value="{{ $cms['solution_step_2_title'] ?? 'CRM' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Step 2 Desc</label>
                                                    <input type="text" name="step_2_desc" class="form-control cf-control" value="{{ $cms['solution_step_2_desc'] ?? 'Manage & nurture leads' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Step 3 Title</label>
                                                    <input type="text" name="step_3_title" class="form-control cf-control" value="{{ $cms['solution_step_3_title'] ?? 'Automation' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Step 3 Desc</label>
                                                    <input type="text" name="step_3_desc" class="form-control cf-control" value="{{ $cms['solution_step_3_desc'] ?? 'Save time, boost conversions' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Step 4 Title</label>
                                                    <input type="text" name="step_4_title" class="form-control cf-control" value="{{ $cms['solution_step_4_title'] ?? 'Appointments' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Step 4 Desc</label>
                                                    <input type="text" name="step_4_desc" class="form-control cf-control" value="{{ $cms['solution_step_4_desc'] ?? 'Book more meetings' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn cms-save-btn">Save Solution Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 4. WHAT WE DO / SERVICES SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-services">
                                    4. What We Do / Services Overview
                                </button>
                            </h2>
                            <div id="sec-services" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Services Overview">
                                        @csrf
                                        <input type="hidden" name="section" value="services_overview">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['services_overview_badge'] ?? 'WHAT WE DO' }}">

                                        <label class="cf-label">Section Heading</label>
                                        <input type="text" name="title" class="form-control cf-control" value="{{ $cms['services_overview_title'] ?? 'Solutions That Drive Growth' }}">

                                        <label class="cf-label">Section Subtitle</label>
                                        <textarea name="subtitle" rows="2" class="form-control cf-control">{{ $cms['services_overview_subtitle'] ?? 'Everything your business needs to attract, engage, and convert more customers — all under one cohesive strategy.' }}</textarea>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Card 1: Funnels</div>
                                            <label class="cf-label">Title</label>
                                            <input type="text" name="service_1_title" class="form-control cf-control" value="{{ $cms['services_overview_service_1_title'] ?? 'High-Converting Funnels' }}">
                                            <label class="cf-label">Description</label>
                                            <textarea name="service_1_desc" rows="2" class="form-control cf-control">{{ $cms['services_overview_service_1_desc'] ?? 'Strategic funnels that turn traffic into qualified leads and paying customers with frictionless UX.' }}</textarea>
                                        </div>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Card 2: CRM Systems</div>
                                            <label class="cf-label">Title</label>
                                            <input type="text" name="service_2_title" class="form-control cf-control" value="{{ $cms['services_overview_service_2_title'] ?? 'CRM Systems' }}">
                                            <label class="cf-label">Description</label>
                                            <textarea name="service_2_desc" rows="2" class="form-control cf-control">{{ $cms['services_overview_service_2_desc'] ?? 'Keep your leads organized, follow up automatically, and never let high-value revenue slip through cracks.' }}</textarea>
                                        </div>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Card 3: Marketing Automation</div>
                                            <label class="cf-label">Title</label>
                                            <input type="text" name="service_3_title" class="form-control cf-control" value="{{ $cms['services_overview_service_3_title'] ?? 'Marketing Automation' }}">
                                            <label class="cf-label">Description</label>
                                            <textarea name="service_3_desc" rows="2" class="form-control cf-control">{{ $cms['services_overview_service_3_desc'] ?? 'Automate your multi-channel follow-ups, re-engage cold leads, and scale conversion on 24/7 autopilot.' }}</textarea>
                                        </div>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Card 4: Lead Generation</div>
                                            <label class="cf-label">Title</label>
                                            <input type="text" name="service_4_title" class="form-control cf-control" value="{{ $cms['services_overview_service_4_title'] ?? 'Lead Generation' }}">
                                            <label class="cf-label">Description</label>
                                            <textarea name="service_4_desc" rows="2" class="form-control cf-control">{{ $cms['services_overview_service_4_desc'] ?? 'Drive consistent, high-converting targeted traffic with full-funnel data-driven campaign architecture.' }}</textarea>
                                        </div>

                                        <button type="submit" class="btn cms-save-btn">Save Services Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 5. CASE STUDIES OVERVIEW SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-case-studies">
                                    5. Case Studies Overview
                                </button>
                            </h2>
                            <div id="sec-case-studies" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Case Studies Overview">
                                        @csrf
                                        <input type="hidden" name="section" value="case_studies_overview">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['case_studies_overview_badge'] ?? 'CASE STUDIES' }}">

                                        <label class="cf-label">Heading</label>
                                        <input type="text" name="title" class="form-control cf-control" value="{{ $cms['case_studies_overview_title'] ?? 'Growth Systems Built To Perform.' }}">

                                        <label class="cf-label">Subtitle</label>
                                        <textarea name="subtitle" rows="2" class="form-control cf-control">{{ $cms['case_studies_overview_subtitle'] ?? 'Real businesses. Real results. See how we\'ve helped companies scale predictability with custom automated growth systems.' }}</textarea>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Overview Stat Badges</div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Stat 1 Value</label>
                                                    <input type="text" name="stat_1_val" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_1_val'] ?? '+287%' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Stat 1 Label</label>
                                                    <input type="text" name="stat_1_label" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_1_label'] ?? 'Average Lead Growth' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Stat 2 Value</label>
                                                    <input type="text" name="stat_2_val" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_2_val'] ?? '+156%' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Stat 2 Label</label>
                                                    <input type="text" name="stat_2_label" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_2_label'] ?? 'Increase Appointments' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Stat 3 Value</label>
                                                    <input type="text" name="stat_3_val" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_3_val'] ?? '+73%' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Stat 3 Label</label>
                                                    <input type="text" name="stat_3_label" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_3_label'] ?? 'Higher Conversion' }}">
                                                </div>
                                            </div>
                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Stat 4 Value</label>
                                                    <input type="text" name="stat_4_val" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_4_val'] ?? '-42%' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Stat 4 Label</label>
                                                    <input type="text" name="stat_4_label" class="form-control cf-control" value="{{ $cms['case_studies_overview_stat_4_label'] ?? 'Lower Cost Per Lead' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn cms-save-btn">Save Case Studies Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 6. PARTNER & WHY GROWXPECT SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-partner">
                                    6. Partner & Why Growxpect
                                </button>
                            </h2>
                            <div id="sec-partner" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Partner Section">
                                        @csrf
                                        <input type="hidden" name="section" value="partner">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['partner_badge'] ?? 'TOGETHER FOR YOUR SUCCESS' }}">

                                        <label class="cf-label">Heading</label>
                                        <input type="text" name="title" class="form-control cf-control" value="{{ $cms['partner_title'] ?? 'Your Partner in Digital Success.' }}">

                                        <label class="cf-label">Subtitle</label>
                                        <textarea name="subtitle" rows="2" class="form-control cf-control">{{ $cms['partner_subtitle'] ?? 'We don\'t just build websites. We build end-to-end revenue engines that scale with your business.' }}</textarea>

                                        <div class="sub-card">
                                            <div class="sub-card-title">Why Growxpect Pillars</div>
                                            <label class="cf-label">Why Badge</label>
                                            <input type="text" name="why_badge" class="form-control cf-control" value="{{ $cms['partner_why_badge'] ?? 'WHY GROWXPECT' }}">

                                            <div class="cf-row mt-2">
                                                <div>
                                                    <label class="cf-label">Pillar 1 Title</label>
                                                    <input type="text" name="why_1_title" class="form-control cf-control" value="{{ $cms['partner_why_1_title'] ?? 'Data-Driven Strategy' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Pillar 1 Desc</label>
                                                    <input type="text" name="why_1_desc" class="form-control cf-control" value="{{ $cms['partner_why_1_desc'] ?? 'No guesswork. Every step is engineered with metrics.' }}">
                                                </div>
                                            </div>

                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Pillar 2 Title</label>
                                                    <input type="text" name="why_2_title" class="form-control cf-control" value="{{ $cms['partner_why_2_title'] ?? 'Proven Systems' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Pillar 2 Desc</label>
                                                    <input type="text" name="why_2_desc" class="form-control cf-control" value="{{ $cms['partner_why_2_desc'] ?? 'Battle-tested funnel frameworks that convert.' }}">
                                                </div>
                                            </div>

                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Pillar 3 Title</label>
                                                    <input type="text" name="why_3_title" class="form-control cf-control" value="{{ $cms['partner_why_3_title'] ?? 'Dedicated Team' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Pillar 3 Desc</label>
                                                    <input type="text" name="why_3_desc" class="form-control cf-control" value="{{ $cms['partner_why_3_desc'] ?? 'Direct access to experienced growth engineers.' }}">
                                                </div>
                                            </div>

                                            <div class="cf-row">
                                                <div>
                                                    <label class="cf-label">Pillar 4 Title</label>
                                                    <input type="text" name="why_4_title" class="form-control cf-control" value="{{ $cms['partner_why_4_title'] ?? 'Long-Term Partnership' }}">
                                                </div>
                                                <div>
                                                    <label class="cf-label">Pillar 4 Desc</label>
                                                    <input type="text" name="why_4_desc" class="form-control cf-control" value="{{ $cms['partner_why_4_desc'] ?? 'Continuous iteration to maximize lifetime ROI.' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn cms-save-btn">Save Partner Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 7. OUR PROCESS SECTION -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-process">
                                    7. Our Process Section
                                </button>
                            </h2>
                            <div id="sec-process" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Our Process">
                                        @csrf
                                        <input type="hidden" name="section" value="process">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['process_badge'] ?? 'OUR PROCESS' }}">

                                        <label class="cf-label">Heading</label>
                                        <input type="text" name="title" class="form-control cf-control" value="{{ $cms['process_title'] ?? 'A Simple Process. A Powerful Result.' }}">

                                        <label class="cf-label">Subtitle</label>
                                        <textarea name="subtitle" rows="2" class="form-control cf-control">{{ $cms['process_subtitle'] ?? 'We follow a proven 4-step framework to build your custom growth engine, tailored for your industry.' }}</textarea>

                                        <div class="sub-card">
                                            <div class="sub-card-title">4-Step Process Details</div>
                                            <div class="mb-2">
                                                <label class="cf-label">01. Title</label>
                                                <input type="text" name="step_1_title" class="form-control cf-control" value="{{ $cms['process_step_1_title'] ?? 'DISCOVER' }}">
                                                <label class="cf-label">01. Description</label>
                                                <textarea name="step_1_desc" rows="2" class="form-control cf-control">{{ $cms['process_step_1_desc'] ?? 'Understand your unique business model, ideal customer profile, and bottlenecks.' }}</textarea>
                                            </div>
                                            <div class="mb-2">
                                                <label class="cf-label">02. Title</label>
                                                <input type="text" name="step_2_title" class="form-control cf-control" value="{{ $cms['process_step_2_title'] ?? 'STRATEGIZE' }}">
                                                <label class="cf-label">02. Description</label>
                                                <textarea name="step_2_desc" rows="2" class="form-control cf-control">{{ $cms['process_step_2_desc'] ?? 'Architect the optimal conversion funnel, CRM workflow, and customer journey.' }}</textarea>
                                            </div>
                                            <div class="mb-2">
                                                <label class="cf-label">03. Title</label>
                                                <input type="text" name="step_3_title" class="form-control cf-control" value="{{ $cms['process_step_3_title'] ?? 'BUILD' }}">
                                                <label class="cf-label">03. Description</label>
                                                <textarea name="step_3_desc" rows="2" class="form-control cf-control">{{ $cms['process_step_3_desc'] ?? 'Engineer high-converting pages, integrate CRM, and configure automated sequences.' }}</textarea>
                                            </div>
                                            <div>
                                                <label class="cf-label">04. Title</label>
                                                <input type="text" name="step_4_title" class="form-control cf-control" value="{{ $cms['process_step_4_title'] ?? 'OPTIMIZE' }}">
                                                <label class="cf-label">04. Description</label>
                                                <textarea name="step_4_desc" rows="2" class="form-control cf-control">{{ $cms['process_step_4_desc'] ?? 'Continuously track analytics, A/B test touchpoints, and maximize ROI.' }}</textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn cms-save-btn">Save Process Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 8. STRATEGY CALL BOOKING CTA -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sec-booking">
                                    8. Strategy Call Booking CTA
                                </button>
                            </h2>
                            <div id="sec-booking" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="Booking Section">
                                        @csrf
                                        <input type="hidden" name="section" value="booking_cta">

                                        <label class="cf-label">Badge</label>
                                        <input type="text" name="badge" class="form-control cf-control" value="{{ $cms['booking_cta_badge'] ?? 'BOOK A FREE STRATEGY CALL' }}">

                                        <label class="cf-label">Heading</label>
                                        <textarea name="title" rows="2" class="form-control cf-control">{{ $cms['booking_cta_title'] ?? 'Ready to Build a Growth System That Works?' }}</textarea>

                                        <label class="cf-label">Subtitle</label>
                                        <textarea name="subtitle" rows="3" class="form-control cf-control">{{ $cms['booking_cta_subtitle'] ?? 'Let\'s turn your leads, funnels and follow-ups into a connected revenue engine. Schedule a 1-on-1 strategy session with our lead architects.' }}</textarea>

                                        <label class="cf-label">Button Text</label>
                                        <input type="text" name="button_text" class="form-control cf-control" value="{{ $cms['booking_cta_button_text'] ?? 'Book A Free Growth Strategy Call' }}">

                                        <label class="cf-label">Footnote</label>
                                        <input type="text" name="footnote" class="form-control cf-control" value="{{ $cms['booking_cta_footnote'] ?? '30-Minute Call • 100% Free • No Obligation' }}">

                                        <button type="submit" class="btn cms-save-btn">Save Booking Section</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- RIGHT LIVE PREVIEW PANEL --}}
            <div class="cms-preview">
                <div class="cms-preview-bar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                    <strong style="font-size:12px;">Live Preview (Instant Sync on Save)</strong>
                    <div class="ms-auto d-flex gap-2">
                        <button type="button" id="btnRefresh" class="btn btn-xs btn-outline-light" style="font-size:11px; padding:2px 8px;">↻ Reload</button>
                        <a href="{{ url('/') }}" target="_blank" class="btn btn-xs btn-outline-info text-white" style="font-size:11px; padding:2px 8px;">Open Tab ↗</a>
                    </div>
                </div>
                <iframe id="previewFrame" src="{{ url('/') }}"></iframe>
            </div>

        </div>
        <div id="cmsToasts"></div>
    </div>
@endsection

@push('script')
    <script>
        (function() {
            'use strict';

            var csrfToken = (document.querySelector('meta[name="csrf-token"]') || {}).content || '';
            var previewFrame = document.getElementById('previewFrame');
            var btnRefresh = document.getElementById('btnRefresh');

            function reloadPreview() {
                if (previewFrame) {
                    var base = previewFrame.getAttribute('data-src') || '{{ url('/') }}';
                    previewFrame.src = base + (base.indexOf('?') > -1 ? '&' : '?') + '_t=' + new Date().getTime();
                }
            }

            if (btnRefresh) {
                btnRefresh.addEventListener('click', function() {
                    reloadPreview();
                });
            }

            function showToast(type, msg) {
                var wrap = document.getElementById('cmsToasts');
                var t = document.createElement('div');
                t.className = 'cms-toast ' + (type === 'success' ? 'success' : 'error');
                t.innerHTML = (type === 'success' ?
                        '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>' :
                        '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>'
                    ) +
                    ' <span>' + msg + '</span>';
                wrap.appendChild(t);
                setTimeout(function() {
                    t.style.transition = 'opacity .3s';
                    t.style.opacity = '0';
                    setTimeout(function() {
                        t.remove();
                    }, 320);
                }, 3500);
            }

            document.querySelectorAll('.cms-form').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    var section = form.getAttribute('data-section') || 'Section';
                    var btn = form.querySelector('[type=submit]');
                    var origHtml = btn.innerHTML;
                    btn.disabled = true;
                    btn.innerHTML = '<span class="btn-spinner"></span> Saving…';

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                            body: new FormData(form),
                        })
                        .then(function(r) {
                            if (r.status === 422) {
                                return r.json().then(function(d) {
                                    var first = d.errors ? Object.values(d.errors)[0][0] : 'Validation failed.';
                                    return {
                                        success: false,
                                        message: first
                                    };
                                });
                            }
                            return r.json().catch(function() {
                                return {
                                    success: false,
                                    message: 'Unexpected server response.'
                                };
                            });
                        })
                        .then(function(data) {
                            showToast(data.success ? 'success' : 'error', data.message || (data.success ? section + ' saved!' : 'Failed to save.'));
                            if (data.success) {
                                reloadPreview();
                            }
                        })
                        .catch(function() {
                            showToast('error', 'Network error. Please try again.');
                        })
                        .finally(function() {
                            btn.disabled = false;
                            btn.innerHTML = origHtml;
                        });
                });
            });
        })();
    </script>
@endpush
