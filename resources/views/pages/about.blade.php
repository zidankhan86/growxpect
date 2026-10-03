@extends('layouts.app')

@section('title', 'About Growxpect — We Build Growth Systems That Turn Attention Into Revenue')
@section('meta_description', 'Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter marketing systems.')

@section('content')
<!-- 1. HERO SECTION (REDESIGNED MODERN TWO-COLUMN & STATS DASHBOARD) -->
<section class="relative pt-16 pb-20 md:pt-24 md:pb-28 overflow-hidden">
  <!-- Ambient Glow Backgrounds -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[1000px] h-[500px] bg-gradient-to-r from-purple-600/15 via-cyan-500/15 to-indigo-600/15 blur-[160px] rounded-full"></div>
    <div class="absolute top-1/3 right-10 w-96 h-96 bg-cyan-500/10 blur-[130px] rounded-full"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-purple-600/10 blur-[130px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-20"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- 2-Column Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      <!-- Left Column: Headline, Subtitle, Key Pill List & CTAs -->
      <div class="lg:col-span-7 space-y-6 text-center lg:text-left">

        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-extrabold tracking-widest uppercase backdrop-blur-md shadow-[0_0_20px_rgba(56,197,210,0.15)]">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
          <span>{{ $cms['about_hero_badge_text'] ?? $cms['badge_text'] ?? 'ABOUT GROWXPECT' }}</span>
        </div>

        <!-- Main Headline -->
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.12]">
          {{ $cms['about_hero_heading_line1'] ?? 'We Build Growth Systems That' }} <br class="hidden sm:inline" />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400 text-glow">
            {{ $cms['about_hero_heading_highlight'] ?? 'Turn Attention Into Revenue.' }}
          </span>
        </h1>

        <!-- Subtitle -->
        <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
          {{ $cms['about_hero_description'] ?? 'Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter marketing systems.' }}
        </p>

        <!-- Feature Highlight Card -->
        <div class="p-5 rounded-2xl bg-[#081024]/90 border border-white/10 backdrop-blur-xl text-sm text-slate-300 leading-relaxed max-w-2xl mx-auto lg:mx-0 shadow-2xl relative group hover:border-cyan-500/40 transition-all text-left">
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="layers" class="w-4.5 h-4.5"></i>
            </div>
            <div>
              <div class="text-xs font-bold text-white uppercase tracking-wider mb-1">CONNECTED SYSTEM ARCHITECTURE</div>
              <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                {!! nl2br(e($cms['about_hero_box_text'] ?? 'We combine high-converting funnels, CRM, marketing automation, paid advertising, and AI-powered solutions to create connected growth systems that work together — not isolated marketing services.')) !!}
              </p>
            </div>
          </div>
        </div>

        <!-- CTA Buttons -->
        <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
          <button onclick="window.openBookingModal && window.openBookingModal()" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-extrabold text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:shadow-cyan-500/50 hover:scale-[1.02] active:scale-95 transition-all">
            <span>Book a Strategy Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
          
          <a href="#system" class="w-full sm:w-auto px-7 py-4 rounded-full bg-white/[0.04] hover:bg-white/[0.08] border border-white/10 text-slate-200 font-bold text-sm flex items-center justify-center gap-2 backdrop-blur-md transition-all">
            <i data-lucide="sparkles" class="w-4 h-4 text-cyan-400"></i>
            <span>See How We Work</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Goal Quote Banner & Glass Metrics Showcase -->
      <div class="lg:col-span-5 relative space-y-6">

        <!-- Our Goal Banner (Floating Glass Card) -->
        <div class="relative p-7 sm:p-8 rounded-3xl bg-gradient-to-br from-[#0b1329]/95 via-[#080d1d] to-[#120a24]/95 border border-cyan-500/35 shadow-[0_0_40px_rgba(56,197,210,0.18)] overflow-hidden group hover:border-cyan-400 transition-all">
          
          <!-- Background Glow Accents -->
          <div class="absolute -top-12 -right-12 w-36 h-36 bg-purple-500/20 rounded-full blur-2xl pointer-events-none"></div>
          <div class="absolute -bottom-12 -left-12 w-36 h-36 bg-cyan-500/20 rounded-full blur-2xl pointer-events-none"></div>

          <div class="relative z-10 space-y-4">
            <div class="flex items-center justify-between">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 text-[10px] font-black uppercase tracking-widest">
                <i data-lucide="target" class="w-3 h-3 text-cyan-400"></i>
                {{ $cms['about_hero_goal_badge'] ?? 'OUR GOAL IS SIMPLE' }}
              </span>
              <div class="w-8 h-8 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center">
                <i data-lucide="quote" class="w-4 h-4"></i>
              </div>
            </div>

            <h2 class="text-lg sm:text-2xl font-black text-white leading-snug tracking-tight">
              "{{ $cms['about_hero_goal_text'] ?? 'Help businesses grow faster, operate smarter, and turn more opportunities into revenue.' }}"
            </h2>

            <div class="pt-4 border-t border-white/[0.08] flex items-center justify-between text-xs text-slate-400">
              <span class="font-semibold text-slate-300">Predictable Revenue Systems</span>
              <span class="text-cyan-400 font-bold">100% Scalable</span>
            </div>
          </div>
        </div>

        <!-- 3 Quick Pillar Cards -->
        <div class="grid grid-cols-3 gap-3">
          <div class="p-4 rounded-2xl bg-[#091024]/80 border border-white/10 text-center flex flex-col justify-center">
            <div class="text-lg sm:text-xl font-black text-cyan-400">$12M+</div>
            <div class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider mt-1">Client Revenue</div>
          </div>
          <div class="p-4 rounded-2xl bg-[#091024]/80 border border-white/10 text-center flex flex-col justify-center">
            <div class="text-lg sm:text-xl font-black text-purple-400">500K+</div>
            <div class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider mt-1">Leads Handled</div>
          </div>
          <div class="p-4 rounded-2xl bg-[#091024]/80 border border-white/10 text-center flex flex-col justify-center">
            <div class="text-lg sm:text-xl font-black text-emerald-400">98%</div>
            <div class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider mt-1">Client Retention</div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- 2. MORE THAN MARKETING: A COMPLETE GROWTH SYSTEM -->
<section id="system" class="py-20 sm:py-24 relative bg-slate-950/70 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-16">
      <div class="lg:col-span-6 space-y-5 text-center lg:text-left">
        <div class="inline-block text-xs font-bold uppercase tracking-widest text-purple-400 bg-purple-500/10 px-3.5 py-1 rounded-full border border-purple-500/20">
          {{ $cms['about_system_badge_text'] ?? 'MORE THAN MARKETING' }}
        </div>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
          {{ $cms['about_system_heading_line1'] ?? 'A Complete' }} <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">
            {{ $cms['about_system_heading_highlight'] ?? 'Growth System.' }}
          </span>
        </h2>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          {{ $cms['about_system_paragraph_1'] ?? 'Getting traffic is only one part of the equation.' }}
        </p>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          {{ $cms['about_system_paragraph_2'] ?? 'If leads are not captured properly, follow-ups are slow, sales processes are unorganized, or customers fall through the cracks, businesses lose revenue every day.' }}
        </p>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed font-semibold">
          {{ $cms['about_system_paragraph_3'] ?? 'That\'s where Growxpect comes in.' }}
        </p>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          {{ $cms['about_system_paragraph_4'] ?? 'We design and implement the systems behind your marketing and sales process — from the moment someone discovers your business to the moment they become a customer.' }}
        </p>
      </div>

      <div class="lg:col-span-6">
        <div class="glass-panel p-6 sm:p-8 rounded-3xl border-cyan-500/30 shadow-2xl relative">
          <div class="text-xs text-cyan-400 font-bold uppercase tracking-wider mb-5 flex items-center gap-2">
            <i data-lucide="check-circle" class="w-4 h-4"></i>
            {{ $cms['about_system_card_title'] ?? 'Our Systems Help You:' }}
          </div>

          <div class="space-y-4 text-xs sm:text-sm text-slate-300">
            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="target" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                {{ $cms['about_system_benefit_1'] ?? 'Attract the right audience with targeted advertising' }}
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-purple-500/20 text-purple-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="filter" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                {{ $cms['about_system_benefit_2'] ?? 'Capture high-intent leads with conversion-focused funnels' }}
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="zap" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                {{ $cms['about_system_benefit_3'] ?? 'Nurture prospects automatically with smart CRM workflows' }}
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="dollar-sign" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                {{ $cms['about_system_benefit_4'] ?? 'Convert more leads into paying customers with streamlined sales systems' }}
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="trending-up" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                {{ $cms['about_system_benefit_5'] ?? 'Scale predictably with data-driven optimization' }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- 3. MEET THE FOUNDER: REZAEE RABBI -->
<section class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/3 -left-32 w-[500px] h-[500px] bg-purple-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute bottom-1/4 -right-32 w-[500px] h-[500px] bg-cyan-500/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-30"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

      <!-- 1. Top Content: Greeting, Role & Description (Right column top on desktop) -->
      <div class="lg:col-span-7 lg:col-start-6 lg:row-start-1 space-y-5">
        <div class="flex items-center gap-3">
          <div class="h-0.5 w-7 bg-purple-500"></div>
          <span class="text-xs font-extrabold tracking-widest text-purple-400 uppercase">
            {{ $cms['about_founder_badge_text'] ?? 'MEET THE FOUNDER' }}
          </span>
        </div>

        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
          {{ $cms['about_founder_greeting_1'] ?? 'Hi, I\'m' }} 
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-purple-300 to-indigo-400">{{ $cms['about_founder_name_1'] ?? 'Rezaee' }}</span> 
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-300">{{ $cms['about_founder_name_2'] ?? 'Rabbi.' }}</span>
        </h2>

        <h3 class="text-base sm:text-xl font-bold text-slate-200">
          {{ $cms['about_founder_role_text'] ?? 'Founder & Digital Growth Strategist at' }} 
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400 font-extrabold">{{ $cms['about_founder_role_company'] ?? 'Growxpect' }}</span>
        </h3>

        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          {{ $cms['about_founder_description'] ?? 'I help businesses grow through proven digital systems — including sales funnels, GoHighLevel, CRM & marketing automation, lead generation, paid advertising and conversion optimization.' }}
        </p>
      </div>

      <!-- 2. Founder Photo Card & Process Chain (Left column on desktop, above Core Expertise on mobile) -->
      <div class="lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:row-span-2 space-y-6">
        <div class="glass-panel p-3 sm:p-4 rounded-3xl border-white/10 relative shadow-2xl group">
          <div class="relative rounded-2xl overflow-hidden bg-slate-900 border border-white/10 aspect-[4/4.2] sm:aspect-square lg:aspect-[4/4.2]">
            <img src="{{ !empty($cms['about_founder_founder_image']) ? asset($cms['about_founder_founder_image']) : asset('founder.png') }}" alt="Rezaee Rabbi - Founder & Digital Growth Strategist at Growxpect" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-[1.02]" />

            <div class="absolute top-3.5 right-3.5 sm:top-4 sm:right-4 z-20 px-3.5 py-2 rounded-2xl bg-white/95 text-slate-900 backdrop-blur-md shadow-xl border border-white/40 flex items-center gap-2.5">
              <div class="w-8 h-8 rounded-xl bg-purple-100 border border-purple-200 text-purple-700 flex items-center justify-center shrink-0">
                <i data-lucide="award" class="w-4 h-4"></i>
              </div>
              <div class="text-left">
                <div class="text-xs sm:text-sm font-extrabold text-purple-950 leading-tight">
                  {{ $cms['about_founder_years_experience'] ?? '7+ Years' }}
                </div>
                <div class="text-[10px] text-slate-500 font-medium">
                  {{ $cms['about_founder_experience_label'] ?? 'Experience' }}
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 4-Stage Connected Process Bar -->
        <div class="glass-panel rounded-2xl p-4 sm:p-5 border-white/10">
          <div class="flex items-center justify-between gap-1 sm:gap-2">

            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(168,85,247,0.25)]">
                <i data-lucide="user" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Founder</span>
              <span class="text-[9px] text-slate-400">Vision & Strategy</span>
            </div>

            <div class="flex items-center justify-center text-slate-600 pb-4">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </div>

            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(56,197,210,0.25)]">
                <i data-lucide="settings" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Expertise</span>
              <span class="text-[9px] text-slate-400">Funnels • CRM • Ads</span>
            </div>

            <div class="flex items-center justify-center text-slate-600 pb-4">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </div>

            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(168,85,247,0.25)]">
                <i data-lucide="share-2" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Growth System</span>
              <span class="text-[9px] text-slate-400">Automation • Nurture</span>
            </div>

            <div class="flex items-center justify-center text-slate-600 pb-4">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </div>

            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-teal-500/15 border border-teal-500/30 text-teal-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(45,212,191,0.25)]">
                <i data-lucide="trending-up" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Business Growth</span>
              <span class="text-[9px] text-slate-400">More Leads & Sales</span>
            </div>

          </div>
        </div>
      </div>

      <!-- 3. Bottom Content: Core Expertise & Quote (Right column bottom on desktop) -->
      <div class="lg:col-span-7 lg:col-start-6 lg:row-start-2 space-y-6">

        <!-- Core Expertise -->
        <div>
          <div class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-3.5">
            MY CORE EXPERTISE
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">

            <!-- 1. Sales Funnels -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="filter" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-purple-300 transition-colors truncate">
                  {{ $cms['about_founder_expertise_1_title'] ?? 'Sales Funnels' }}
                </h4>
                <p class="text-[11px] text-slate-400 truncate">
                  {{ $cms['about_founder_expertise_1_desc'] ?? 'Turn visitors into customers.' }}
                </p>
              </div>
            </div>

            <!-- 2. GoHighLevel -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/40 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="boxes" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-cyan-300 transition-colors truncate">
                  {{ $cms['about_founder_expertise_2_title'] ?? 'GoHighLevel' }}
                </h4>
                <p class="text-[11px] text-slate-400 truncate">
                  {{ $cms['about_founder_expertise_2_desc'] ?? 'All-in-one platform. Real results.' }}
                </p>
              </div>
            </div>

            <!-- 3. CRM & Marketing Automation -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/40 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="settings" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-cyan-300 transition-colors truncate">
                  {{ $cms['about_founder_expertise_3_title'] ?? 'CRM & Marketing Automation' }}
                </h4>
                <p class="text-[11px] text-slate-400 truncate">
                  {{ $cms['about_founder_expertise_3_desc'] ?? 'Nurture. Engage. Convert.' }}
                </p>
              </div>
            </div>

            <!-- 4. Lead Generation -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="megaphone" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-purple-300 transition-colors truncate">
                  {{ $cms['about_founder_expertise_4_title'] ?? 'Lead Generation' }}
                </h4>
                <p class="text-[11px] text-slate-400 truncate">
                  {{ $cms['about_founder_expertise_4_desc'] ?? 'Scale with data, not guesswork.' }}
                </p>
              </div>
            </div>

            <!-- 5. Paid Advertising -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="target" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-purple-300 transition-colors truncate">
                  {{ $cms['about_founder_expertise_5_title'] ?? 'Paid Advertising' }}
                </h4>
                <p class="text-[11px] text-slate-400 truncate">
                  {{ $cms['about_founder_expertise_5_desc'] ?? 'More qualified leads. Faster.' }}
                </p>
              </div>
            </div>

            <!-- 6. Conversion Optimization -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-teal-500/20 border border-teal-500/40 text-teal-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(45,212,191,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="trending-up" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-teal-300 transition-colors truncate">
                  {{ $cms['about_founder_expertise_6_title'] ?? 'Conversion Optimization' }}
                </h4>
                <p class="text-[11px] text-slate-400 truncate">
                  {{ $cms['about_founder_expertise_6_desc'] ?? 'Higher traffic. Better results.' }}
                </p>
              </div>
            </div>

          </div>
        </div>

        <!-- Quote Callout Card -->
        <div class="p-5 sm:p-6 rounded-2xl bg-gradient-to-r from-cyan-950/40 via-[#0A1328] to-purple-950/40 border border-cyan-500/30 shadow-[0_0_30px_rgba(56,197,210,0.12)] flex items-start gap-4 mt-6">
          <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_12px_rgba(56,197,210,0.3)] mt-0.5">
            <i data-lucide="quote" class="w-4 h-4"></i>
          </div>
          <div class="border-l-2 border-cyan-400/50 pl-4 py-0.5">
            <p class="text-sm sm:text-base font-bold text-white leading-snug">
              {{ $cms['about_founder_quote_text'] ?? '“Don\'t just generate more leads. Build a system that knows what to do with them.”' }}
            </p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- 4. WHAT WE DO (CAPABILITIES) -->
<section class="py-20 sm:py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        {{ $cms['about_capabilities_badge_text'] ?? 'OUR CAPABILITIES' }}
      </div>
      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        {{ $cms['about_capabilities_heading'] ?? 'What We Do' }}
      </h2>
      <p class="text-slate-300 text-sm sm:text-base">
        {{ $cms['about_capabilities_subheading'] ?? 'We help businesses build and optimize every stage of their customer acquisition and retention process:' }}
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Funnels -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(56,197,210,0.3)]">
          <i data-lucide="filter" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">
          {{ $cms['about_capabilities_cap_1_title'] ?? 'High-Converting Funnels & Landing Pages' }}
        </h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          {{ $cms['about_capabilities_cap_1_desc'] ?? 'Custom-designed funnels built to turn visitors into qualified leads and sales.' }}
        </p>
      </div>

      <!-- CRM -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-purple-500/20 text-purple-400 border border-purple-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
          <i data-lucide="database" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">
          {{ $cms['about_capabilities_cap_2_title'] ?? 'CRM & Pipeline Setup' }}
        </h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          {{ $cms['about_capabilities_cap_2_desc'] ?? 'Organized systems to manage leads, track deals, and improve sales efficiency.' }}
        </p>
      </div>

      <!-- Automation -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-blue-500/20 text-blue-400 border border-blue-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(59,130,246,0.3)]">
          <i data-lucide="zap" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">
          {{ $cms['about_capabilities_cap_3_title'] ?? 'Marketing & Sales Automation' }}
        </h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          {{ $cms['about_capabilities_cap_3_desc'] ?? 'Automated email, SMS, and workflow follow-ups that engage prospects instantly.' }}
        </p>
      </div>

      <!-- Paid Ads -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 text-indigo-400 border border-indigo-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(99,102,241,0.3)]">
          <i data-lucide="badge-dollar-sign" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-indigo-300 transition-colors">
          {{ $cms['about_capabilities_cap_4_title'] ?? 'Paid Advertising (Meta & Google Ads)' }}
        </h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          {{ $cms['about_capabilities_cap_4_desc'] ?? 'Targeted campaigns designed to generate consistent, qualified traffic.' }}
        </p>
      </div>

      <!-- AI Solutions -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group md:col-span-2 lg:col-span-2">
        <div class="w-12 h-12 rounded-2xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(56,197,210,0.3)]">
          <i data-lucide="bot" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">
          {{ $cms['about_capabilities_cap_5_title'] ?? 'AI & Smart Growth Solutions' }}
        </h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          {{ $cms['about_capabilities_cap_5_desc'] ?? 'AI-powered tools and automations that speed up lead response and improve conversion rates.' }}
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 5. WHY GROWXPECT? -->
<section class="py-20 sm:py-24 relative bg-slate-950/70 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

      <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-28">
        <div class="inline-block text-xs font-bold uppercase tracking-widest text-purple-400 bg-purple-500/10 px-3.5 py-1 rounded-full border border-purple-500/20">
          {{ $cms['about_why_badge_text'] ?? 'WHY GROWXPECT?' }}
        </div>

        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
          {{ $cms['about_why_heading_line1'] ?? 'We Focus on the' }} <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">
            {{ $cms['about_why_heading_highlight'] ?? 'Entire System.' }}
          </span>
        </h2>

        <div class="space-y-3 text-slate-300 text-xs sm:text-sm leading-relaxed">
          <p>
            {{ $cms['about_why_paragraph_1'] ?? 'Most agencies focus on only one piece of the puzzle — running ads without fixing the funnel, or building a website without follow-up systems.' }}
          </p>
          <p class="font-bold text-white text-sm sm:text-base pt-2">
            {{ $cms['about_why_paragraph_2'] ?? 'At Growxpect, we focus on the entire system.' }}
          </p>
        </div>
      </div>

      <div class="lg:col-span-7 space-y-4">

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="network" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">
              {{ $cms['about_why_reason_1_title'] ?? 'Connected Strategy' }}
            </h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              {{ $cms['about_why_reason_1_desc'] ?? 'Marketing, sales, and automation working together.' }}
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 border border-purple-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="clock" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">
              {{ $cms['about_why_reason_2_title'] ?? 'Speed to Lead' }}
            </h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              {{ $cms['about_why_reason_2_desc'] ?? 'Instant follow-ups so you never lose high-intent prospects.' }}
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 border border-blue-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="target" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">
              {{ $cms['about_why_reason_3_title'] ?? 'Conversion-Driven Design' }}
            </h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              {{ $cms['about_why_reason_3_desc'] ?? 'Built to generate revenue, not just look good.' }}
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="layers" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">
              {{ $cms['about_why_reason_4_title'] ?? 'Scalable Systems' }}
            </h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              {{ $cms['about_why_reason_4_desc'] ?? 'Processes and technology that grow with your business.' }}
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">
              {{ $cms['about_why_reason_5_title'] ?? 'Results-Focused' }}
            </h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              {{ $cms['about_why_reason_5_desc'] ?? 'We measure success by leads, conversions, and growth.' }}
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- 6. OUR MISSION & CTA -->
<section class="py-20 sm:py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="glass-panel rounded-3xl p-8 sm:p-14 border-cyan-500/30 shadow-2xl relative overflow-hidden text-center max-w-4xl mx-auto space-y-6">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        {{ $cms['about_mission_badge_text'] ?? 'OUR MISSION' }}
      </div>

      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
        {{ $cms['about_mission_heading_line1'] ?? 'To help ambitious businesses build scalable growth infrastructure that turns marketing into a' }} <br />
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">
          {{ $cms['about_mission_heading_highlight'] ?? 'predictable revenue engine.' }}
        </span>
      </h2>

      <div class="pt-8 border-t border-white/10 space-y-6">
        <h3 class="text-xl sm:text-2xl font-extrabold text-white">
          {{ $cms['about_mission_cta_heading'] ?? 'Ready to Build Your Growth System?' }}
        </h3>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
          {{ $cms['about_mission_cta_description'] ?? 'Let\'s turn your marketing into a connected, high-performing system that drives real results.' }}
        </p>

        <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ $cms['about_mission_cta_btn1_link'] ?? (route('home') . '#booking') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm shadow-glow-cyan hover:scale-105 transition-all flex items-center justify-center gap-2">
            <span>{{ $cms['about_mission_cta_btn1_text'] ?? 'Book a Strategy Call' }}</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="{{ $cms['about_mission_cta_btn2_link'] ?? route('services') }}" class="w-full sm:w-auto px-7 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/10 text-white font-semibold text-xs sm:text-sm transition-colors flex items-center justify-center gap-2">
            <i data-lucide="layers" class="w-4 h-4 text-cyan-400"></i>
            <span>{{ $cms['about_mission_cta_btn2_text'] ?? 'Explore Services & Pricing' }}</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
