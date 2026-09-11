@extends('layouts.app')

@section('title', 'About Growxpect — We Build Growth Systems That Turn Attention Into Revenue')
@section('meta_description', 'Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter marketing systems.')

@section('content')
<!-- 1. HERO SECTION -->
<section class="relative pt-16 pb-16 md:pt-24 md:pb-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-4xl mx-auto space-y-6">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-bold tracking-widest uppercase backdrop-blur-md">
        <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
        ABOUT GROWXPECT
      </div>

      <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
        We Build Growth Systems That <br />
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400 text-glow">
          Turn Attention Into Revenue
        </span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
        Growxpect is a digital growth agency helping businesses generate more leads, convert more customers, and scale with smarter marketing systems.
      </p>

      <div class="p-5 rounded-2xl bg-white/[0.04] border border-white/10 backdrop-blur-md text-sm sm:text-base text-slate-200 leading-relaxed max-w-3xl mx-auto shadow-2xl">
        We combine <strong class="text-cyan-300 font-semibold">high-converting funnels, CRM, marketing automation, paid advertising, and AI-powered solutions</strong> to create connected growth systems that work together — not isolated marketing services.
      </div>
    </div>

    <!-- Goal Banner -->
    <div class="mt-12 max-w-4xl mx-auto p-8 rounded-3xl bg-gradient-to-r from-cyan-950/60 via-[#0B142B] to-purple-950/60 border border-cyan-500/40 shadow-[0_0_50px_rgba(56,197,210,0.18)] text-center relative overflow-hidden">
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-purple-500/20 rounded-full blur-3xl"></div>
      <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-cyan-500/20 rounded-full blur-3xl"></div>

      <span class="text-xs uppercase font-bold tracking-widest text-cyan-400 block mb-2">OUR GOAL IS SIMPLE</span>
      <h2 class="text-xl sm:text-3xl font-extrabold text-white leading-snug">
        "Help businesses grow faster, operate smarter, and turn more opportunities into revenue."
      </h2>
    </div>

  </div>
</section>

<!-- 2. MORE THAN MARKETING: A COMPLETE GROWTH SYSTEM -->
<section class="py-20 sm:py-24 relative bg-slate-950/70 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-16">
      <div class="lg:col-span-6 space-y-5">
        <div class="inline-block text-xs font-bold uppercase tracking-widest text-purple-400 bg-purple-500/10 px-3.5 py-1 rounded-full border border-purple-500/20">
          MORE THAN MARKETING
        </div>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
          A Complete <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">
            Growth System.
          </span>
        </h2>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          Getting traffic is only one part of the equation.
        </p>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          If leads are not captured properly, follow-ups are slow, sales processes are unorganized, or customers fall through the cracks, businesses lose revenue every day.
        </p>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed font-semibold">
          That's where Growxpect comes in.
        </p>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          We design and implement the systems behind your marketing and sales process — from the moment someone discovers your business to the moment they become a customer.
        </p>
      </div>

      <div class="lg:col-span-6">
        <div class="glass-panel p-6 sm:p-8 rounded-3xl border-cyan-500/30 shadow-2xl relative">
          <div class="text-xs text-cyan-400 font-bold uppercase tracking-wider mb-5 flex items-center gap-2">
            <i data-lucide="check-circle" class="w-4 h-4"></i>
            Our Systems Help You:
          </div>

          <div class="space-y-4 text-xs sm:text-sm text-slate-300">
            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="target" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                <strong class="text-white">Attract the right audience</strong> with targeted advertising
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-purple-500/20 text-purple-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="filter" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                <strong class="text-white">Capture high-intent leads</strong> with conversion-focused funnels
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="zap" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                <strong class="text-white">Nurture prospects automatically</strong> with smart CRM workflows
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="dollar-sign" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                <strong class="text-white">Convert more leads into paying customers</strong> with streamlined sales systems
              </div>
            </div>

            <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="trending-up" class="w-3.5 h-3.5"></i>
              </div>
              <div>
                <strong class="text-white">Scale predictably</strong> with data-driven optimization
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 2.5 MEET THE FOUNDER: REZAEE RABBI (MATCHING MOCKUP) -->
<!-- ========================================================================= -->
<section class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Background Glows -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/3 -left-32 w-[500px] h-[500px] bg-purple-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute bottom-1/4 -right-32 w-[500px] h-[500px] bg-cyan-500/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-30"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

      <!-- Left Column: Founder Photo Card & Process Chain -->
      <div class="lg:col-span-5 space-y-6">
        <!-- Photo Container with Glass Frame & Floating Badge -->
        <div class="glass-panel p-3 sm:p-4 rounded-3xl border-white/10 relative shadow-2xl group">
          <div class="relative rounded-2xl overflow-hidden bg-slate-900 border border-white/10 aspect-[4/4.2] sm:aspect-square lg:aspect-[4/4.2]">
            <img src="{{ asset('founder.png') }}" alt="Rezaee Rabbi - Founder & Digital Growth Strategist at Growxpect" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-[1.02]" />

            <!-- Floating 7+ Years Experience Badge (Matches Mockup) -->
            <div class="absolute top-3.5 right-3.5 sm:top-4 sm:right-4 z-20 px-3.5 py-2 rounded-2xl bg-white/95 text-slate-900 backdrop-blur-md shadow-xl border border-white/40 flex items-center gap-2.5">
              <div class="w-8 h-8 rounded-xl bg-purple-100 border border-purple-200 text-purple-700 flex items-center justify-center shrink-0">
                <i data-lucide="award" class="w-4 h-4"></i>
              </div>
              <div class="text-left">
                <div class="text-xs sm:text-sm font-extrabold text-purple-950 leading-tight">7+ Years</div>
                <div class="text-[10px] text-slate-500 font-medium">Experience</div>
              </div>
            </div>
          </div>
        </div>

        <!-- 4-Stage Connected Process Bar (Matches Mockup under photo) -->
        <div class="glass-panel rounded-2xl p-4 sm:p-5 border-white/10">
          <div class="flex items-center justify-between gap-1 sm:gap-2">

            <!-- Step 1: Founder -->
            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(168,85,247,0.25)]">
                <i data-lucide="user" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Founder</span>
              <span class="text-[9px] text-slate-400">Vision & Strategy</span>
            </div>

            <!-- Arrow Connector 1 -->
            <div class="flex items-center justify-center text-slate-600 pb-4">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </div>

            <!-- Step 2: Expertise -->
            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(56,197,210,0.25)]">
                <i data-lucide="settings" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Expertise</span>
              <span class="text-[9px] text-slate-400">Funnels • CRM • Ads</span>
            </div>

            <!-- Arrow Connector 2 -->
            <div class="flex items-center justify-center text-slate-600 pb-4">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </div>

            <!-- Step 3: Growth System -->
            <div class="flex flex-col items-center text-center flex-1">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-1.5 shadow-[0_0_12px_rgba(168,85,247,0.25)]">
                <i data-lucide="share-2" class="w-4 h-4"></i>
              </div>
              <span class="text-[11px] sm:text-xs font-bold text-white leading-tight">Growth System</span>
              <span class="text-[9px] text-slate-400">Automation • Nurture</span>
            </div>

            <!-- Arrow Connector 3 -->
            <div class="flex items-center justify-center text-slate-600 pb-4">
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </div>

            <!-- Step 4: Business Growth -->
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

      <!-- Right Column: Meet the Founder Content & Core Expertise Grid -->
      <div class="lg:col-span-7 space-y-6">

        <!-- Header Tag -->
        <div class="flex items-center gap-3">
          <div class="h-0.5 w-7 bg-purple-500"></div>
          <span class="text-xs font-extrabold tracking-widest text-purple-400 uppercase">MEET THE FOUNDER</span>
        </div>

        <!-- Name Heading -->
        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
          Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-purple-300 to-indigo-400">Rezaee</span> <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-300">Rabbi.</span>
        </h2>

        <!-- Role -->
        <h3 class="text-base sm:text-xl font-bold text-slate-200">
          Founder & Digital Growth Strategist at <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400 font-extrabold">Growxpect</span>
        </h3>

        <!-- Description -->
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
          I help businesses grow through proven digital systems — including sales funnels, GoHighLevel, CRM & marketing automation, lead generation, paid advertising and conversion optimization.
        </p>

        <!-- Core Expertise -->
        <div class="pt-3">
          <div class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-3.5">
            MY CORE EXPERTISE
          </div>

          <!-- 2x3 Grid (6 Cards) -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">

            <!-- 1. Sales Funnels -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="filter" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-purple-300 transition-colors truncate">Sales Funnels</h4>
                <p class="text-[11px] text-slate-400 truncate">Turn visitors into customers.</p>
              </div>
            </div>

            <!-- 2. GoHighLevel -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/40 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="boxes" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-cyan-300 transition-colors truncate">GoHighLevel</h4>
                <p class="text-[11px] text-slate-400 truncate">All-in-one platform. Real results.</p>
              </div>
            </div>

            <!-- 3. CRM & Marketing Automation -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/40 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="settings" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-cyan-300 transition-colors truncate">CRM & Marketing Automation</h4>
                <p class="text-[11px] text-slate-400 truncate">Nurture. Engage. Convert.</p>
              </div>
            </div>

            <!-- 4. Lead Generation -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="megaphone" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-purple-300 transition-colors truncate">Lead Generation</h4>
                <p class="text-[11px] text-slate-400 truncate">Scale with data, not guesswork.</p>
              </div>
            </div>

            <!-- 5. Paid Advertising -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="target" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-purple-300 transition-colors truncate">Paid Advertising</h4>
                <p class="text-[11px] text-slate-400 truncate">More qualified leads. Faster.</p>
              </div>
            </div>

            <!-- 6. Conversion Optimization -->
            <div class="glass-panel glass-panel-hover rounded-2xl p-4 flex items-center gap-3.5 border-white/10 group">
              <div class="w-10 h-10 rounded-xl bg-teal-500/20 border border-teal-500/40 text-teal-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(45,212,191,0.25)] group-hover:scale-105 transition-transform">
                <i data-lucide="trending-up" class="w-5 h-5"></i>
              </div>
              <div class="min-w-0">
                <h4 class="text-sm font-bold text-white group-hover:text-teal-300 transition-colors truncate">Conversion Optimization</h4>
                <p class="text-[11px] text-slate-400 truncate">Higher traffic. Better results.</p>
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
              “Don't just generate more leads. Build a system that knows what to do with them.”
            </p>
          </div>
        </div>

        <!-- Founder Signature & Tag -->
        <div class="pt-2 flex flex-col items-start">
          <img src="{{ asset('signature-transparent.png') }}" alt="Rezaee Rabbi" class="h-9 sm:h-11 w-auto object-contain brightness-125" />
          <p class="text-xs text-slate-400 font-medium mt-1">Founder, Growxpect</p>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- 3. WHAT WE DO -->
<section class="py-20 sm:py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        OUR CAPABILITIES
      </div>
      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        What We Do
      </h2>
      <p class="text-slate-300 text-sm sm:text-base">
        We help businesses build and optimize every stage of their customer acquisition and retention process:
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Funnels -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(56,197,210,0.3)]">
          <i data-lucide="filter" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">High-Converting Funnels & Landing Pages</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Custom-designed funnels built to turn visitors into qualified leads and sales.
        </p>
      </div>

      <!-- CRM -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-purple-500/20 text-purple-400 border border-purple-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
          <i data-lucide="database" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">CRM & Pipeline Setup</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Organized systems to manage leads, track deals, and improve sales efficiency.
        </p>
      </div>

      <!-- Automation -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-blue-500/20 text-blue-400 border border-blue-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(59,130,246,0.3)]">
          <i data-lucide="zap" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Marketing & Sales Automation</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Automated email, SMS, and workflow follow-ups that engage prospects instantly.
        </p>
      </div>

      <!-- Paid Ads -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group">
        <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 text-indigo-400 border border-indigo-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(99,102,241,0.3)]">
          <i data-lucide="badge-dollar-sign" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-indigo-300 transition-colors">Paid Advertising (Meta & Google Ads)</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Targeted campaigns designed to generate consistent, qualified traffic.
        </p>
      </div>

      <!-- AI Solutions -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-7 space-y-4 border-white/10 relative group md:col-span-2 lg:col-span-2">
        <div class="w-12 h-12 rounded-2xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/40 flex items-center justify-center shadow-[0_0_20px_rgba(56,197,210,0.3)]">
          <i data-lucide="bot" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">AI & Smart Growth Solutions</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          AI-powered tools and automations that speed up lead response and improve conversion rates.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 4. WHY GROWXPECT? -->
<section class="py-20 sm:py-24 relative bg-slate-950/70 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

      <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-28">
        <div class="inline-block text-xs font-bold uppercase tracking-widest text-purple-400 bg-purple-500/10 px-3.5 py-1 rounded-full border border-purple-500/20">
          WHY GROWXPECT?
        </div>

        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
          We Focus on the <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">
            Entire System.
          </span>
        </h2>

        <div class="space-y-3 text-slate-300 text-xs sm:text-sm leading-relaxed">
          <p>
            Most agencies focus on only one piece of the puzzle — running ads without fixing the funnel, or building a website without follow-up systems.
          </p>
          <p class="font-bold text-white text-sm sm:text-base pt-2">
            At Growxpect, we focus on the entire system.
          </p>
        </div>
      </div>

      <div class="lg:col-span-7 space-y-4">

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="network" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">Connected Strategy</h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Marketing, sales, and automation working together.
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 border border-purple-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="clock" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">Speed to Lead</h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Instant follow-ups so you never lose high-intent prospects.
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 border border-blue-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="target" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">Conversion-Driven Design</h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Built to generate revenue, not just look good.
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="layers" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">Scalable Systems</h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Processes and technology that grow with your business.
            </p>
          </div>
        </div>

        <div class="glass-panel p-6 rounded-2xl border-white/10 flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white mb-1">Results-Focused</h4>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              We measure success by leads, conversions, and growth.
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- 5. OUR MISSION & CTA -->
<section class="py-20 sm:py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="glass-panel rounded-3xl p-8 sm:p-14 border-cyan-500/30 shadow-2xl relative overflow-hidden text-center max-w-4xl mx-auto space-y-6">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        OUR MISSION
      </div>

      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
        To help ambitious businesses build scalable growth infrastructure that turns marketing into a <br />
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">
          predictable revenue engine.
        </span>
      </h2>

      <div class="pt-8 border-t border-white/10 space-y-6">
        <h3 class="text-xl sm:text-2xl font-extrabold text-white">
          Ready to Build Your Growth System?
        </h3>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
          Let's turn your marketing into a connected, high-performing system that drives real results.
        </p>

        <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('home') }}#booking" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm shadow-glow-cyan hover:scale-105 transition-all flex items-center justify-center gap-2">
            <span>Book a Strategy Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="{{ route('services') }}" class="w-full sm:w-auto px-7 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/10 text-white font-semibold text-xs sm:text-sm transition-colors flex items-center justify-center gap-2">
            <i data-lucide="layers" class="w-4 h-4 text-cyan-400"></i>
            <span>Explore Services & Pricing</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
