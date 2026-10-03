@extends('admin.layouts.master')

@section('cms_about_manage', 'active')
@section('title', 'About Page CMS')

@push('style')
<style>
    .card-tabs .nav-tabs {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        padding: 8px 16px 0;
    }
    .card-tabs .nav-tabs .nav-link {
        font-weight: 600;
        font-size: 13px;
        color: #64748b;
        border: 1px solid transparent;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        padding: 10px 18px;
        margin-right: 4px;
        transition: all 0.15s ease-in-out;
    }
    .card-tabs .nav-tabs .nav-link.active {
        color: #0f172a;
        background: #ffffff;
        border-color: #cbd5e1 #cbd5e1 #ffffff;
        box-shadow: 0 -2px 5px rgba(0,0,0,0.03);
    }
    .card-tabs .nav-tabs .nav-link:hover:not(.active) {
        color: #1e293b;
        background: #f1f5f9;
    }
    .section-card-title {
        font-size: 15px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 18px;
        padding-bottom: 10px;
        border-bottom: 1px solid #f1f5f9;
    }
    .field-group-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 16px;
        margin-bottom: 16px;
    }
    .field-group-title {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .05em;
        color: #475569;
        margin-bottom: 12px;
    }
</style>
@endpush

@section('content')
<div class="page-wrapper">

    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Manage Content</div>
                    <h2 class="page-title">About Page CMS</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ url('/about') }}" target="_blank" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                            <path d="M11 13l9 -9" />
                            <path d="M15 4h5v5" />
                        </svg> View Live Page
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="content">
        <div class="page-body">
            <div class="container-xl">

                <div id="cmsAlert" class="alert alert-dismissible d-none mb-3" role="alert">
                    <div id="cmsAlertMessage"></div>
                    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                </div>

                <!-- Card with Nav Tabs -->
                <div class="card card-tabs">
                    <div class="card-header border-bottom-0 p-0">
                        <ul class="nav nav-tabs card-header-tabs" id="aboutCmsTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="hero-tab" data-bs-toggle="tab" data-bs-target="#tab-hero" type="button" role="tab">
                                    1. Hero Section
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="system-tab" data-bs-toggle="tab" data-bs-target="#tab-system" type="button" role="tab">
                                    2. Growth System
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="founder-tab" data-bs-toggle="tab" data-bs-target="#tab-founder" type="button" role="tab">
                                    3. Meet Founder
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="capabilities-tab" data-bs-toggle="tab" data-bs-target="#tab-capabilities" type="button" role="tab">
                                    4. Capabilities
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="why-tab" data-bs-toggle="tab" data-bs-target="#tab-why" type="button" role="tab">
                                    5. Why Growxpect
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#tab-mission" type="button" role="tab">
                                    6. Mission & CTA
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body p-4">
                        <div class="tab-content" id="aboutCmsTabsContent">

                            <!-- TAB 1: HERO SECTION -->
                            <div class="tab-pane fade show active" id="tab-hero" role="tabpanel">
                                <h3 class="section-card-title">1. Hero Section Settings</h3>
                                <form action="{{ route('admin.cms.update') }}" method="POST" class="cms-submit-form">
                                    @csrf
                                    <input type="hidden" name="section" value="about_hero">

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Top Badge Text</label>
                                            <input type="text" class="form-control" name="badge_text" value="{{ $cms['about_hero_badge_text'] ?? $cms['badge_text'] ?? 'ABOUT GROWXPECT' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Goal Banner Badge</label>
                                            <input type="text" class="form-control" name="goal_badge" value="{{ $cms['about_hero_goal_badge'] ?? $cms['goal_badge'] ?? 'OUR GOAL IS SIMPLE' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Heading Line 1</label>
                                            <input type="text" class="form-control" name="heading_line1" value="{{ $cms['about_hero_heading_line1'] ?? 'We Build Growth Systems That' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Heading Highlight (Gradient Text)</label>
                                            <input type="text" class="form-control" name="heading_highlight" value="{{ $cms['about_hero_heading_highlight'] ?? 'Turn Attention Into Revenue' }}">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Subheading Description</label>
                                            <textarea class="form-control" name="description" rows="3">{{ $cms['about_hero_description'] ?? $cms['description'] ?? 'Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter marketing systems.' }}</textarea>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Feature Box Content</label>
                                            <textarea class="form-control" name="box_text" rows="3">{{ $cms['about_hero_box_text'] ?? $cms['box_text'] ?? 'We combine high-converting funnels, CRM, marketing automation, paid advertising, and AI-powered solutions to create connected growth systems that work together — not isolated marketing services.' }}</textarea>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Goal Banner Statement</label>
                                            <textarea class="form-control" name="goal_text" rows="2">{{ $cms['about_hero_goal_text'] ?? $cms['goal_text'] ?? 'Help businesses grow faster, operate smarter, and turn more opportunities into revenue.' }}</textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg> Save Hero Section
                                    </button>
                                </form>
                            </div>

                            <!-- TAB 2: GROWTH SYSTEM -->
                            <div class="tab-pane fade" id="tab-system" role="tabpanel">
                                <h3 class="section-card-title">2. More Than Marketing (Growth System)</h3>
                                <form action="{{ route('admin.cms.update') }}" method="POST" class="cms-submit-form">
                                    @csrf
                                    <input type="hidden" name="section" value="about_system">

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Section Badge</label>
                                            <input type="text" class="form-control" name="badge_text" value="{{ $cms['about_system_badge_text'] ?? 'MORE THAN MARKETING' }}">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Heading Line 1</label>
                                            <input type="text" class="form-control" name="heading_line1" value="{{ $cms['about_system_heading_line1'] ?? 'A Complete' }}">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Heading Highlight</label>
                                            <input type="text" class="form-control" name="heading_highlight" value="{{ $cms['about_system_heading_highlight'] ?? 'Growth System.' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Paragraph 1</label>
                                            <textarea class="form-control" name="paragraph_1" rows="3">{{ $cms['about_system_paragraph_1'] ?? 'Getting traffic is only one part of the equation.' }}</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Paragraph 2</label>
                                            <textarea class="form-control" name="paragraph_2" rows="3">{{ $cms['about_system_paragraph_2'] ?? 'If leads are not captured properly, follow-ups are slow, sales processes are unorganized, or customers fall through the cracks, businesses lose revenue every day.' }}</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Paragraph 3 (Callout)</label>
                                            <input type="text" class="form-control" name="paragraph_3" value="{{ $cms['about_system_paragraph_3'] ?? 'That\'s where Growxpect comes in.' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Paragraph 4</label>
                                            <textarea class="form-control" name="paragraph_4" rows="2">{{ $cms['about_system_paragraph_4'] ?? 'We design and implement the systems behind your marketing and sales process — from the moment someone discovers your business to the moment they become a customer.' }}</textarea>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="field-group-box">
                                                <div class="field-group-title">Right Card Benefit List</div>
                                                <div class="row">
                                                    <div class="col-12 mb-2">
                                                        <label class="form-label">Card Title</label>
                                                        <input type="text" class="form-control" name="card_title" value="{{ $cms['about_system_card_title'] ?? 'Our Systems Help You:' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="form-label">Benefit 1</label>
                                                        <input type="text" class="form-control" name="benefit_1" value="{{ $cms['about_system_benefit_1'] ?? 'Attract the right audience with targeted advertising' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="form-label">Benefit 2</label>
                                                        <input type="text" class="form-control" name="benefit_2" value="{{ $cms['about_system_benefit_2'] ?? 'Capture high-intent leads with conversion-focused funnels' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="form-label">Benefit 3</label>
                                                        <input type="text" class="form-control" name="benefit_3" value="{{ $cms['about_system_benefit_3'] ?? 'Nurture prospects automatically with smart CRM workflows' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="form-label">Benefit 4</label>
                                                        <input type="text" class="form-control" name="benefit_4" value="{{ $cms['about_system_benefit_4'] ?? 'Convert more leads into paying customers with streamlined sales systems' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="form-label">Benefit 5</label>
                                                        <input type="text" class="form-control" name="benefit_5" value="{{ $cms['about_system_benefit_5'] ?? 'Scale predictably with data-driven optimization' }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg> Save System Section
                                    </button>
                                </form>
                            </div>

                            <!-- TAB 3: MEET THE FOUNDER -->
                            <div class="tab-pane fade" id="tab-founder" role="tabpanel">
                                <h3 class="section-card-title">3. Meet The Founder</h3>
                                <form action="{{ route('admin.cms.update') }}" method="POST" enctype="multipart/form-data" class="cms-submit-form">
                                    @csrf
                                    <input type="hidden" name="section" value="about_founder">

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Header Badge</label>
                                            <input type="text" class="form-control" name="badge_text" value="{{ $cms['about_founder_badge_text'] ?? 'MEET THE FOUNDER' }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Years Experience Text</label>
                                            <input type="text" class="form-control" name="years_experience" value="{{ $cms['about_founder_years_experience'] ?? '7+ Years' }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Experience Label</label>
                                            <input type="text" class="form-control" name="experience_label" value="{{ $cms['about_founder_experience_label'] ?? 'Experience' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Founder Photo</label>
                                            @if(!empty($cms['about_founder_founder_image']))
                                                <div class="mb-2">
                                                    <img src="{{ asset($cms['about_founder_founder_image']) }}" alt="Founder" class="rounded border" style="max-height: 90px;">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" name="founder_image" accept="image/*">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Signature Image</label>
                                            @if(!empty($cms['about_founder_signature_image']))
                                                <div class="mb-2 bg-dark p-2 rounded">
                                                    <img src="{{ asset($cms['about_founder_signature_image']) }}" alt="Signature" style="max-height: 50px;">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" name="signature_image" accept="image/*">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Greeting Name Line 1</label>
                                            <input type="text" class="form-control" name="greeting_1" value="{{ $cms['about_founder_greeting_1'] ?? 'Hi, I\'m' }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">First Name (Highlight 1)</label>
                                            <input type="text" class="form-control" name="name_1" value="{{ $cms['about_founder_name_1'] ?? 'Rezaee' }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Last Name (Highlight 2)</label>
                                            <input type="text" class="form-control" name="name_2" value="{{ $cms['about_founder_name_2'] ?? 'Rabbi.' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Role Title Text</label>
                                            <input type="text" class="form-control" name="role_text" value="{{ $cms['about_founder_role_text'] ?? 'Founder & Digital Growth Strategist at' }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="role_company" value="{{ $cms['about_founder_role_company'] ?? 'Growxpect' }}">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Founder Bio Description</label>
                                            <textarea class="form-control" name="description" rows="3">{{ $cms['about_founder_description'] ?? 'I help businesses grow through proven digital systems — including sales funnels, GoHighLevel, CRM & marketing automation, lead generation, paid advertising and conversion optimization.' }}</textarea>
                                        </div>

                                        <!-- Core Expertise Grid -->
                                        <div class="col-12 mb-3">
                                            <div class="field-group-box">
                                                <div class="field-group-title">Core Expertise (6 Cards)</div>
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Card 1 Title</label>
                                                        <input type="text" class="form-control mb-1" name="expertise_1_title" value="{{ $cms['about_founder_expertise_1_title'] ?? 'Sales Funnels' }}">
                                                        <input type="text" class="form-control" name="expertise_1_desc" value="{{ $cms['about_founder_expertise_1_desc'] ?? 'Turn visitors into customers.' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Card 2 Title</label>
                                                        <input type="text" class="form-control mb-1" name="expertise_2_title" value="{{ $cms['about_founder_expertise_2_title'] ?? 'GoHighLevel' }}">
                                                        <input type="text" class="form-control" name="expertise_2_desc" value="{{ $cms['about_founder_expertise_2_desc'] ?? 'All-in-one platform. Real results.' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Card 3 Title</label>
                                                        <input type="text" class="form-control mb-1" name="expertise_3_title" value="{{ $cms['about_founder_expertise_3_title'] ?? 'CRM & Marketing Automation' }}">
                                                        <input type="text" class="form-control" name="expertise_3_desc" value="{{ $cms['about_founder_expertise_3_desc'] ?? 'Nurture. Engage. Convert.' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Card 4 Title</label>
                                                        <input type="text" class="form-control mb-1" name="expertise_4_title" value="{{ $cms['about_founder_expertise_4_title'] ?? 'Lead Generation' }}">
                                                        <input type="text" class="form-control" name="expertise_4_desc" value="{{ $cms['about_founder_expertise_4_desc'] ?? 'Scale with data, not guesswork.' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Card 5 Title</label>
                                                        <input type="text" class="form-control mb-1" name="expertise_5_title" value="{{ $cms['about_founder_expertise_5_title'] ?? 'Paid Advertising' }}">
                                                        <input type="text" class="form-control" name="expertise_5_desc" value="{{ $cms['about_founder_expertise_5_desc'] ?? 'More qualified leads. Faster.' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Card 6 Title</label>
                                                        <input type="text" class="form-control mb-1" name="expertise_6_title" value="{{ $cms['about_founder_expertise_6_title'] ?? 'Conversion Optimization' }}">
                                                        <input type="text" class="form-control" name="expertise_6_desc" value="{{ $cms['about_founder_expertise_6_desc'] ?? 'Higher traffic. Better results.' }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 mb-3">
                                            <label class="form-label">Quote Callout Text</label>
                                            <textarea class="form-control" name="quote_text" rows="2">{{ $cms['about_founder_quote_text'] ?? '“Don\'t just generate more leads. Build a system that knows what to do with them.”' }}</textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Founder Subtext Title</label>
                                            <input type="text" class="form-control" name="founder_title" value="{{ $cms['about_founder_founder_title'] ?? 'Founder, Growxpect' }}">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg> Save Founder Section
                                    </button>
                                </form>
                            </div>

                            <!-- TAB 4: CAPABILITIES -->
                            <div class="tab-pane fade" id="tab-capabilities" role="tabpanel">
                                <h3 class="section-card-title">4. Capabilities (What We Do)</h3>
                                <form action="{{ route('admin.cms.update') }}" method="POST" class="cms-submit-form">
                                    @csrf
                                    <input type="hidden" name="section" value="about_capabilities">

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Section Badge</label>
                                            <input type="text" class="form-control" name="badge_text" value="{{ $cms['about_capabilities_badge_text'] ?? 'OUR CAPABILITIES' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Heading</label>
                                            <input type="text" class="form-control" name="heading" value="{{ $cms['about_capabilities_heading'] ?? 'What We Do' }}">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Subheading</label>
                                            <textarea class="form-control" name="subheading" rows="2">{{ $cms['about_capabilities_subheading'] ?? 'We help businesses build and optimize every stage of their customer acquisition and retention process:' }}</textarea>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="field-group-box">
                                                <div class="field-group-title">Capability Cards (5 Items)</div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Card 1 Title</label>
                                                        <input type="text" class="form-control mb-1" name="cap_1_title" value="{{ $cms['about_capabilities_cap_1_title'] ?? 'High-Converting Funnels & Landing Pages' }}">
                                                        <textarea class="form-control" name="cap_1_desc" rows="2">{{ $cms['about_capabilities_cap_1_desc'] ?? 'Custom-designed funnels built to turn visitors into qualified leads and sales.' }}</textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Card 2 Title</label>
                                                        <input type="text" class="form-control mb-1" name="cap_2_title" value="{{ $cms['about_capabilities_cap_2_title'] ?? 'CRM & Pipeline Setup' }}">
                                                        <textarea class="form-control" name="cap_2_desc" rows="2">{{ $cms['about_capabilities_cap_2_desc'] ?? 'Organized systems to manage leads, track deals, and improve sales efficiency.' }}</textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Card 3 Title</label>
                                                        <input type="text" class="form-control mb-1" name="cap_3_title" value="{{ $cms['about_capabilities_cap_3_title'] ?? 'Marketing & Sales Automation' }}">
                                                        <textarea class="form-control" name="cap_3_desc" rows="2">{{ $cms['about_capabilities_cap_3_desc'] ?? 'Automated email, SMS, and workflow follow-ups that engage prospects instantly.' }}</textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Card 4 Title</label>
                                                        <input type="text" class="form-control mb-1" name="cap_4_title" value="{{ $cms['about_capabilities_cap_4_title'] ?? 'Paid Advertising (Meta & Google Ads)' }}">
                                                        <textarea class="form-control" name="cap_4_desc" rows="2">{{ $cms['about_capabilities_cap_4_desc'] ?? 'Targeted campaigns designed to generate consistent, qualified traffic.' }}</textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Card 5 Title</label>
                                                        <input type="text" class="form-control mb-1" name="cap_5_title" value="{{ $cms['about_capabilities_cap_5_title'] ?? 'AI & Smart Growth Solutions' }}">
                                                        <textarea class="form-control" name="cap_5_desc" rows="2">{{ $cms['about_capabilities_cap_5_desc'] ?? 'AI-powered tools and automations that speed up lead response and improve conversion rates.' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg> Save Capabilities Section
                                    </button>
                                </form>
                            </div>

                            <!-- TAB 5: WHY GROWXPECT -->
                            <div class="tab-pane fade" id="tab-why" role="tabpanel">
                                <h3 class="section-card-title">5. Why Growxpect?</h3>
                                <form action="{{ route('admin.cms.update') }}" method="POST" class="cms-submit-form">
                                    @csrf
                                    <input type="hidden" name="section" value="about_why">

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Badge Text</label>
                                            <input type="text" class="form-control" name="badge_text" value="{{ $cms['about_why_badge_text'] ?? 'WHY GROWXPECT?' }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Heading Line 1</label>
                                            <input type="text" class="form-control" name="heading_line1" value="{{ $cms['about_why_heading_line1'] ?? 'We Focus on the' }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Heading Highlight</label>
                                            <input type="text" class="form-control" name="heading_highlight" value="{{ $cms['about_why_heading_highlight'] ?? 'Entire System.' }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Paragraph 1</label>
                                            <textarea class="form-control" name="paragraph_1" rows="3">{{ $cms['about_why_paragraph_1'] ?? 'Most agencies focus on only one piece of the puzzle — running ads without fixing the funnel, or building a website without follow-up systems.' }}</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Paragraph 2 (Bold Statement)</label>
                                            <input type="text" class="form-control" name="paragraph_2" value="{{ $cms['about_why_paragraph_2'] ?? 'At Growxpect, we focus on the entire system.' }}">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="field-group-box">
                                                <div class="field-group-title">Reasons (5 Cards)</div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Reason 1 Title</label>
                                                        <input type="text" class="form-control mb-1" name="reason_1_title" value="{{ $cms['about_why_reason_1_title'] ?? 'Connected Strategy' }}">
                                                        <input type="text" class="form-control" name="reason_1_desc" value="{{ $cms['about_why_reason_1_desc'] ?? 'Marketing, sales, and automation working together.' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Reason 2 Title</label>
                                                        <input type="text" class="form-control mb-1" name="reason_2_title" value="{{ $cms['about_why_reason_2_title'] ?? 'Speed to Lead' }}">
                                                        <input type="text" class="form-control" name="reason_2_desc" value="{{ $cms['about_why_reason_2_desc'] ?? 'Instant follow-ups so you never lose high-intent prospects.' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Reason 3 Title</label>
                                                        <input type="text" class="form-control mb-1" name="reason_3_title" value="{{ $cms['about_why_reason_3_title'] ?? 'Conversion-Driven Design' }}">
                                                        <input type="text" class="form-control" name="reason_3_desc" value="{{ $cms['about_why_reason_3_desc'] ?? 'Built to generate revenue, not just look good.' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Reason 4 Title</label>
                                                        <input type="text" class="form-control mb-1" name="reason_4_title" value="{{ $cms['about_why_reason_4_title'] ?? 'Scalable Systems' }}">
                                                        <input type="text" class="form-control" name="reason_4_desc" value="{{ $cms['about_why_reason_4_desc'] ?? 'Processes and technology that grow with your business.' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Reason 5 Title</label>
                                                        <input type="text" class="form-control mb-1" name="reason_5_title" value="{{ $cms['about_why_reason_5_title'] ?? 'Results-Focused' }}">
                                                        <input type="text" class="form-control" name="reason_5_desc" value="{{ $cms['about_why_reason_5_desc'] ?? 'We measure success by leads, conversions, and growth.' }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg> Save Why Section
                                    </button>
                                </form>
                            </div>

                            <!-- TAB 6: MISSION & CTA -->
                            <div class="tab-pane fade" id="tab-mission" role="tabpanel">
                                <h3 class="section-card-title">6. Our Mission & CTA Banner</h3>
                                <form action="{{ route('admin.cms.update') }}" method="POST" class="cms-submit-form">
                                    @csrf
                                    <input type="hidden" name="section" value="about_mission">

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Badge Text</label>
                                            <input type="text" class="form-control" name="badge_text" value="{{ $cms['about_mission_badge_text'] ?? 'OUR MISSION' }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mission Highlight Text</label>
                                            <input type="text" class="form-control" name="heading_highlight" value="{{ $cms['about_mission_heading_highlight'] ?? 'predictable revenue engine.' }}">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Mission Line 1</label>
                                            <textarea class="form-control" name="heading_line1" rows="2">{{ $cms['about_mission_heading_line1'] ?? 'To help ambitious businesses build scalable growth infrastructure that turns marketing into a' }}</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">CTA Heading</label>
                                            <input type="text" class="form-control" name="cta_heading" value="{{ $cms['about_mission_cta_heading'] ?? 'Ready to Build Your Growth System?' }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">CTA Description</label>
                                            <textarea class="form-control" name="cta_description" rows="2">{{ $cms['about_mission_cta_description'] ?? 'Let\'s turn your marketing into a connected, high-performing system that drives real results.' }}</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Button 1 Text</label>
                                            <input type="text" class="form-control mb-1" name="cta_btn1_text" value="{{ $cms['about_mission_cta_btn1_text'] ?? 'Book a Strategy Call' }}">
                                            <label class="form-label">Button 1 Link</label>
                                            <input type="text" class="form-control" name="cta_btn1_link" value="{{ $cms['about_mission_cta_btn1_link'] ?? (route('home') . '#booking') }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Button 2 Text</label>
                                            <input type="text" class="form-control mb-1" name="cta_btn2_text" value="{{ $cms['about_mission_cta_btn2_text'] ?? 'Explore Services & Pricing' }}">
                                            <label class="form-label">Button 2 Link</label>
                                            <input type="text" class="form-control" name="cta_btn2_link" value="{{ $cms['about_mission_cta_btn2_link'] ?? route('services') }}">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy me-1" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg> Save Mission & CTA
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    document.querySelectorAll('.cms-submit-form').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var alertBox = document.getElementById('cmsAlert');
            var alertMsg = document.getElementById('cmsAlertMessage');
            var btn = form.querySelector('[type=submit]');
            var origHtml = btn.innerHTML;

            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status"></span> Saving...';

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: new FormData(form),
            })
            .then(function(r) {
                if (r.status === 422) {
                    return r.json().then(function(d) {
                        var first = d.errors ? Object.values(d.errors)[0][0] : 'Validation failed.';
                        return { success: false, message: first };
                    });
                }
                return r.json().catch(function() {
                    return { success: false, message: 'Unexpected server response.' };
                });
            })
            .then(function(data) {
                alertBox.classList.remove('d-none', 'alert-success', 'alert-danger');
                if (data.success) {
                    alertBox.classList.add('alert-success');
                    alertMsg.innerHTML = '<strong>Success!</strong> ' + (data.message || 'Updated successfully.');
                } else {
                    alertBox.classList.add('alert-danger');
                    alertMsg.innerHTML = '<strong>Error!</strong> ' + (data.message || 'Failed to update.');
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });
            })
            .catch(function() {
                alertBox.classList.remove('d-none', 'alert-success');
                alertBox.classList.add('alert-danger');
                alertMsg.innerHTML = '<strong>Error!</strong> Network connection error.';
                window.scrollTo({ top: 0, behavior: 'smooth' });
            })
            .finally(function() {
                btn.disabled = false;
                btn.innerHTML = origHtml;
            });
        });
    });
</script>
@endpush
