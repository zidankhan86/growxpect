@extends('layouts.app')

@section('title', 'Lead Generation & Paid Ads — Growxpect')
@section('meta_description', 'Turn ad spend into qualified leads & real opportunities with integrated Meta, Google & YouTube acquisition systems.')

@section('content')
<!-- ========================================================================= -->
<!-- 1. HERO SECTION -->
<!-- ========================================================================= -->
<section class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
  <!-- Glowing Ambient Background -->
  <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/3 right-1/4 -translate-y-1/2 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

      <!-- Left: Copy & Actions -->
      <div class="lg:col-span-6 space-y-6 text-left">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/60 border border-purple-500/40 text-purple-300 text-xs font-mono font-bold tracking-widest uppercase shadow-[0_0_15px_rgba(168,85,247,0.2)]">
          <span>LEAD GENERATION &amp; PAID ADS</span>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold tracking-tight text-white leading-[1.12]">
          Turn Ad Spend Into<br />
          Qualified Leads &amp;<br />
          <span class="text-[#38C5D2]">Real Opportunities</span>
        </h1>

        <p class="text-base sm:text-lg text-slate-300 max-w-xl leading-relaxed">
          We build paid acquisition systems that connect your ads, landing pages, lead capture, CRM and follow-up into one measurable customer journey.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-2">
          <button onclick="window.openBookingModal && window.openBookingModal()" class="px-7 py-3.5 rounded-full bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-700 hover:from-purple-500 hover:to-indigo-500 text-white font-bold text-xs sm:text-sm flex items-center gap-2 transition-all duration-200 hover:scale-[1.03] active:scale-95 shadow-[0_0_25px_rgba(168,85,247,0.4)]">
            <span>Book a Free Strategy Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>

          <a href="#how-it-works" class="px-7 py-3.5 rounded-full bg-white/[0.04] hover:bg-white/10 border border-white/15 text-white font-medium text-xs sm:text-sm transition-all duration-200 hover:border-white/30">
            <span>See How It Works</span>
          </a>
        </div>
      </div>

      <!-- Right: Live Ad Campaign Performance & Traffic Routing Flow Dashboard -->
      <div class="lg:col-span-6 relative">
        <div class="rounded-3xl bg-[#080E21]/95 border border-purple-500/30 shadow-[0_0_50px_rgba(0,0,0,0.8),0_0_30px_rgba(168,85,247,0.15)] backdrop-blur-2xl p-5 sm:p-7 space-y-6">

          <!-- Top Stats Bar -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 pb-4 border-b border-white/10">
            <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/[0.08] text-center space-y-1">
              <div class="text-[9px] text-slate-400">Campaign Status</div>
              <div class="text-xs font-bold text-emerald-400 flex items-center justify-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Active
              </div>
            </div>

            <div class="p-2.5 rounded-xl bg-cyan-950/30 border border-cyan-500/30 text-center space-y-1">
              <div class="text-[9px] text-slate-400">Leads Generated</div>
              <div class="text-base font-black text-cyan-400">128</div>
            </div>

            <div class="p-2.5 rounded-xl bg-purple-950/30 border border-purple-500/30 text-center space-y-1">
              <div class="text-[9px] text-slate-400">Cost Per Lead</div>
              <div class="text-base font-black text-purple-400">$4.32</div>
            </div>

            <div class="p-2.5 rounded-xl bg-emerald-950/30 border border-emerald-500/30 text-center space-y-1">
              <div class="text-[9px] text-slate-400">Appointments</div>
              <div class="text-base font-black text-emerald-400">28</div>
            </div>
          </div>

          <!-- Ad Channels & Pipeline Flow Track -->
          <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">

            <!-- Left: Ad Source Channels -->
            <div class="sm:col-span-5 space-y-2">
              <div class="p-2.5 rounded-xl bg-blue-950/40 border border-blue-500/30 flex items-center gap-2 text-xs font-bold text-white">
                <svg class="w-4 h-4 text-blue-400 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span>Meta Ads</span>
              </div>
              <div class="p-2.5 rounded-xl bg-amber-950/30 border border-amber-500/30 flex items-center gap-2 text-xs font-bold text-white">
                <svg class="w-4 h-4 text-amber-400 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.08 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                <span>Google Ads</span>
              </div>
              <div class="p-2.5 rounded-xl bg-red-950/30 border border-red-500/30 flex items-center gap-2 text-xs font-bold text-white">
                <svg class="w-4 h-4 text-red-400 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                <span>YouTube Ads</span>
              </div>
            </div>

            <!-- Right: Connected Pipeline Stack -->
            <div class="sm:col-span-7 space-y-1.5 text-[11px]">
              <div class="p-2 rounded-lg bg-purple-950/40 border border-purple-500/30 text-slate-200 flex items-center justify-between">
                <span class="flex items-center gap-1.5"><i data-lucide="activity" class="w-3.5 h-3.5 text-purple-400"></i> Traffic</span>
                <span class="text-slate-400 text-[10px]">&rarr;</span>
              </div>
              <div class="p-2 rounded-lg bg-cyan-950/40 border border-cyan-500/30 text-slate-200 flex items-center justify-between">
                <span class="flex items-center gap-1.5"><i data-lucide="layout" class="w-3.5 h-3.5 text-cyan-400"></i> Landing Page</span>
                <span class="text-slate-400 text-[10px]">&rarr;</span>
              </div>
              <div class="p-2 rounded-lg bg-purple-950/40 border border-purple-500/30 text-slate-200 flex items-center justify-between">
                <span class="flex items-center gap-1.5"><i data-lucide="user-check" class="w-3.5 h-3.5 text-purple-400"></i> Lead Capture</span>
                <span class="text-slate-400 text-[10px]">&rarr;</span>
              </div>
              <div class="p-2 rounded-lg bg-cyan-950/40 border border-cyan-500/30 text-slate-200 flex items-center justify-between">
                <span class="flex items-center gap-1.5"><i data-lucide="database" class="w-3.5 h-3.5 text-cyan-400"></i> CRM Sync</span>
                <span class="text-slate-400 text-[10px]">&rarr;</span>
              </div>
              <div class="p-2 rounded-lg bg-emerald-950/40 border border-emerald-500/40 text-emerald-300 font-bold flex items-center justify-between">
                <span class="flex items-center gap-1.5"><i data-lucide="calendar-check" class="w-3.5 h-3.5 text-emerald-400"></i> Appointment Booked</span>
                <span class="text-emerald-400 text-[10px]">&check;</span>
              </div>
            </div>

          </div>

          <!-- Bottom Checklist Bar -->
          <div class="pt-2 border-t border-white/10 flex flex-wrap items-center justify-between text-xs text-slate-300 gap-2">
            <span class="flex items-center gap-1.5 text-cyan-400 font-semibold"><i data-lucide="check" class="w-3.5 h-3.5"></i> More Qualified Leads</span>
            <span class="flex items-center gap-1.5 text-purple-400 font-semibold"><i data-lucide="check" class="w-3.5 h-3.5"></i> More Appointments</span>
            <span class="flex items-center gap-1.5 text-emerald-400 font-semibold"><i data-lucide="check" class="w-3.5 h-3.5"></i> Predictable Revenue</span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. GETTING CLICKS IS NOT THE SAME AS BUILDING A GROWTH SYSTEM -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-rose-950/50 border border-rose-500/30 text-rose-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>THE PROBLEM &amp; SOLUTION</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Getting Clicks Is Not the Same as Building a Growth System
      </h2>
      <p class="text-xs sm:text-sm text-slate-400">
        Better advertising needs a better system behind it.
      </p>
    </div>

    <!-- 3-Column Comparison Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

      <!-- Left: Ads Without A System -->
      <div class="lg:col-span-4 p-7 rounded-3xl bg-[#091024] border border-rose-500/30 space-y-5 shadow-xl">
        <div class="text-xs font-bold text-rose-400 uppercase tracking-wide">ADS WITHOUT A SYSTEM</div>
        <div class="space-y-2.5 text-xs text-slate-300">
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 font-semibold text-slate-200">Ad &rarr; Website &rarr; Form</div>
          <div class="p-3 rounded-xl bg-rose-950/40 border border-rose-500/30 text-rose-300 font-bold flex items-center gap-2">
            <span>&times;</span> No Instant Response
          </div>
          <div class="p-3 rounded-xl bg-rose-950/40 border border-rose-500/30 text-rose-300 font-bold flex items-center gap-2">
            <span>&times;</span> No Follow-Up Automation
          </div>
          <div class="p-3 rounded-xl bg-rose-950/40 border border-rose-500/30 text-rose-300 font-bold flex items-center gap-2">
            <span>&times;</span> Lost Lead &amp; Wasted Ad Spend
          </div>
        </div>
      </div>

      <!-- Center: Connected Lead System -->
      <div class="lg:col-span-4 p-7 rounded-3xl bg-[#091024] border border-cyan-500/40 shadow-[0_0_35px_rgba(56,197,210,0.15)] space-y-5">
        <div class="inline-block px-3 py-1 rounded-full bg-cyan-500/20 border border-cyan-400/30 text-cyan-300 font-bold text-[10px] uppercase">
          CONNECTED LEAD SYSTEM
        </div>
        <div class="space-y-2 text-xs text-slate-200">
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 font-bold flex items-center gap-2">
            <i data-lucide="target" class="w-4 h-4 text-cyan-400"></i> Targeted Ad
          </div>
          <div class="p-3 rounded-xl bg-purple-950/40 border border-purple-500/30 font-bold flex items-center gap-2 text-purple-200">
            <i data-lucide="layout" class="w-4 h-4 text-purple-400"></i> High-Converting Landing Page
          </div>
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 font-bold flex items-center gap-2">
            <i data-lucide="user-check" class="w-4 h-4 text-cyan-400"></i> Automated Lead Capture
          </div>
          <div class="p-3 rounded-xl bg-purple-950/40 border border-purple-500/30 font-bold flex items-center gap-2 text-purple-200">
            <i data-lucide="database" class="w-4 h-4 text-purple-400"></i> CRM Pipeline Sync
          </div>
          <div class="p-3 rounded-xl bg-emerald-950/60 border border-emerald-400/50 text-emerald-300 font-bold flex items-center gap-2 shadow-lg">
            <i data-lucide="calendar-check" class="w-4 h-4 text-emerald-400"></i> Instant Follow-up &rarr; Appointment
          </div>
        </div>
      </div>

      <!-- Right: Value Proposition -->
      <div class="lg:col-span-4 space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
          <i data-lucide="trending-up" class="w-6 h-6"></i>
        </div>
        <h3 class="text-xl sm:text-2xl font-extrabold text-white leading-snug">
          Better advertising needs a better system behind it.
        </h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          Same traffic. Same budget. A completely different conversion outcome. We engineer the entire backend so no lead slips through the cracks.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 3. WHAT WE HELP WITH (6 Services) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>WHAT WE HELP WITH</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        From Campaign Launch to Lead Follow-Up
      </h2>
    </div>

    <!-- 6 Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="crosshair" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">Paid Advertising Strategy</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Campaign planning based on your target audience, high-converting offer and business revenue goals.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] font-bold text-sm group-hover:translate-x-1 transition-transform">
          <span>Explore Feature &rarr;</span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-blue-500/40 hover:shadow-[0_0_30px_rgba(59,130,246,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-blue-500/20 border border-blue-500/30 text-blue-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Meta Ads (Facebook &amp; IG)</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            High-converting lead generation campaigns connected directly to landing pages and CRM systems.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] font-bold text-sm group-hover:translate-x-1 transition-transform">
          <span>Explore Feature &rarr;</span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-amber-500/40 hover:shadow-[0_0_30px_rgba(245,158,11,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-amber-500/20 border border-amber-500/30 text-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.08 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-amber-300 transition-colors">Google Search &amp; Display Ads</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Intent-driven search campaigns designed to capture ready-to-buy high-value prospects.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] font-bold text-sm group-hover:translate-x-1 transition-transform">
          <span>Explore Feature &rarr;</span>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-red-500/40 hover:shadow-[0_0_30px_rgba(239,68,68,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-red-500/20 border border-red-500/30 text-red-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-red-300 transition-colors">YouTube Video Ads</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Video campaigns that build trust, educate your market and generate pre-qualified buyers.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] font-bold text-sm group-hover:translate-x-1 transition-transform">
          <span>Explore Feature &rarr;</span>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="layout" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Landing Pages &amp; Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Dedicated conversion paths built specifically to maximize ROI on paid traffic campaigns.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] font-bold text-sm group-hover:translate-x-1 transition-transform">
          <span>Explore Feature &rarr;</span>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="database" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">Lead Follow-Up Systems</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            CRM and automation designed to respond within seconds after the lead is captured.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] font-bold text-sm group-hover:translate-x-1 transition-transform">
          <span>Explore Feature &rarr;</span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 4. YOUR COMPLETE LEAD GENERATION ENGINE -->
<!-- ========================================================================= -->
<section id="how-it-works" class="py-24 bg-[#070C18] relative border-t border-white/[0.06] overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>THE LEAD GENERATION ENGINE</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Your Complete Lead Generation Engine
      </h2>
    </div>

    <!-- Engine Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

      <!-- Left Copy -->
      <div class="lg:col-span-3 space-y-3">
        <h3 class="text-lg font-bold text-white leading-snug">
          From ads to appointments, every step is connected.
        </h3>
        <p class="text-xs text-slate-400 leading-relaxed">
          One unified system. More qualified leads. Superior conversion rates.
        </p>
      </div>

      <!-- Center Connected Flow Track -->
      <div class="lg:col-span-6 p-6 sm:p-7 rounded-3xl bg-[#091024] border border-purple-500/30 shadow-2xl space-y-4">

        <!-- Channels Bar -->
        <div class="grid grid-cols-3 gap-2">
          <div class="p-2.5 rounded-xl bg-blue-950/40 border border-blue-500/30 text-center text-xs font-bold text-white">
            Meta Ads
          </div>
          <div class="p-2.5 rounded-xl bg-amber-950/30 border border-amber-500/30 text-center text-xs font-bold text-white">
            Google Ads
          </div>
          <div class="p-2.5 rounded-xl bg-red-950/30 border border-red-500/30 text-center text-xs font-bold text-white">
            YouTube Ads
          </div>
        </div>

        <!-- Middle Flow Stack -->
        <div class="space-y-2 text-center text-xs">
          <div class="p-2.5 rounded-xl bg-purple-950/40 border border-purple-500/30 font-bold text-purple-200">
            &darr; Traffic Aggregation
          </div>
          <div class="p-2.5 rounded-xl bg-cyan-950/40 border border-cyan-500/30 font-bold text-cyan-200">
            &darr; Landing Page / Funnel
          </div>
          <div class="p-2.5 rounded-xl bg-purple-950/40 border border-purple-500/30 font-bold text-purple-200">
            &darr; Lead Capture
          </div>
        </div>

        <!-- Bottom Connected System -->
        <div class="grid grid-cols-5 gap-1.5 text-center text-[10px] font-bold">
          <div class="p-2 rounded-lg bg-white/5 border border-white/10 text-slate-300">CRM</div>
          <div class="p-2 rounded-lg bg-white/5 border border-white/10 text-slate-300">Automation</div>
          <div class="p-2 rounded-lg bg-white/5 border border-white/10 text-slate-300">AI Follow-up</div>
          <div class="p-2 rounded-lg bg-purple-600 text-white shadow-md">Appointment</div>
          <div class="p-2 rounded-lg bg-emerald-500 text-white shadow-md">Sales &check;</div>
        </div>

      </div>

      <!-- Right Checklist -->
      <div class="lg:col-span-3 space-y-3 text-xs text-slate-300">
        <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-cyan-400"></i> Target the right audience</div>
        <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-cyan-400"></i> Capture qualified leads</div>
        <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-cyan-400"></i> Automate follow-up</div>
        <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-cyan-400"></i> Book more appointments</div>
        <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-cyan-400"></i> Grow your revenue</div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. CAMPAIGN PERFORMANCE (Metrics & Analytics) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>CAMPAIGN PERFORMANCE</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Measure What Happens After the Click
      </h2>
    </div>

    <!-- 6 KPI Counters -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 mb-12">
      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1">
        <div class="text-[10px] text-slate-400 font-semibold">Impressions</div>
        <div class="text-xl font-black text-white">12,480</div>
        <div class="text-[9px] text-emerald-400 font-bold">&uarr; 32%</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1">
        <div class="text-[10px] text-slate-400 font-semibold">Clicks</div>
        <div class="text-xl font-black text-white">892</div>
        <div class="text-[9px] text-emerald-400 font-bold">&uarr; 28%</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1">
        <div class="text-[10px] text-slate-400 font-semibold">Leads</div>
        <div class="text-xl font-black text-white">128</div>
        <div class="text-[9px] text-emerald-400 font-bold">&uarr; 45%</div>
      </div>

      <div class="p-4 rounded-2xl bg-purple-950/30 border border-purple-500/30 text-center space-y-1">
        <div class="text-[10px] text-purple-300 font-semibold">Cost Per Lead</div>
        <div class="text-xl font-black text-purple-400">$4.32</div>
        <div class="text-[9px] text-emerald-400 font-bold">&darr; -18%</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1">
        <div class="text-[10px] text-slate-400 font-semibold">Qualified Leads</div>
        <div class="text-xl font-black text-white">64</div>
        <div class="text-[9px] text-emerald-400 font-bold">&uarr; 32%</div>
      </div>

      <div class="p-4 rounded-2xl bg-emerald-950/30 border border-emerald-500/40 text-center space-y-1">
        <div class="text-[10px] text-emerald-300 font-semibold">Appointments</div>
        <div class="text-xl font-black text-emerald-400">28</div>
        <div class="text-[9px] text-emerald-400 font-bold">&uarr; 41%</div>
      </div>
    </div>

    <!-- Funnel Conversion Breakdown -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

      <!-- Funnel Stage Waterfall -->
      <div class="lg:col-span-7 space-y-2 text-xs font-semibold">
        <div class="p-3.5 rounded-xl bg-slate-900 border border-white/10 text-white flex justify-between items-center">
          <span>12,480 Impressions</span> <span class="text-slate-400 font-mono">100% Top of Funnel</span>
        </div>
        <div class="p-3.5 rounded-xl bg-indigo-950/70 border border-indigo-500/30 text-white flex justify-between items-center w-[90%]">
          <span>892 Clicks</span> <span class="text-indigo-300 font-mono">7.1% CTR</span>
        </div>
        <div class="p-3.5 rounded-xl bg-purple-950/70 border border-purple-500/40 text-white flex justify-between items-center w-[75%]">
          <span>128 Leads Captured</span> <span class="text-purple-300 font-mono">14.3% Conversion</span>
        </div>
        <div class="p-3.5 rounded-xl bg-purple-900/60 border border-purple-400/50 text-white flex justify-between items-center w-[60%]">
          <span>64 Qualified Prospects</span> <span class="text-purple-200 font-mono">50% Qualification</span>
        </div>
        <div class="p-3.5 rounded-xl bg-emerald-950/70 border border-emerald-400/60 text-white flex justify-between items-center w-[45%] shadow-[0_0_20px_rgba(52,211,153,0.2)] font-bold">
          <span>28 Appointments Booked</span> <span class="text-emerald-300 font-mono">43.7% Booking</span>
        </div>
      </div>

      <!-- Right Description -->
      <div class="lg:col-span-5 space-y-4">
        <h3 class="text-2xl sm:text-3xl font-extrabold text-white leading-snug">
          We track the full journey &mdash; not just clicks.
        </h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          From ad impressions to booked appointments, so you can see what is working and scale what matters with complete ROI attribution.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 6. EVERY CLICK NEEDS A CLEAR NEXT STEP (Ad -> Funnel Connection) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>AD &bull; FUNNEL CONNECTION</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Every Click Needs a Clear Next Step
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        Your advertising and funnel should work together as one connected acquisition system.
      </p>
    </div>

    <!-- 4 Journey Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-center">

      <!-- Step 1: Ad -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 shadow-sm space-y-3 text-center">
        <div class="text-xs font-bold text-slate-300">1. Advertisement</div>
        <div class="h-28 rounded-xl bg-slate-900 border border-white/10 text-white p-3 flex flex-col justify-center text-[10px] space-y-1">
          <div class="font-bold text-cyan-400">High-Converting Ad Creative</div>
          <div class="text-slate-400">Compelling Hook &amp; Offer</div>
        </div>
      </div>

      <!-- Step 2: Landing Page -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 shadow-sm space-y-3 text-center">
        <div class="text-xs font-bold text-slate-300">2. Landing Page</div>
        <div class="h-28 rounded-xl bg-purple-950/30 border border-purple-500/30 p-3 flex flex-col justify-center text-[10px] space-y-1 text-slate-200">
          <div class="font-bold text-purple-400">Get a Free Consultation</div>
          <div class="text-slate-400">Persuasive VSL &amp; Proof</div>
        </div>
      </div>

      <!-- Step 3: Form -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 shadow-sm space-y-3 text-center">
        <div class="text-xs font-bold text-slate-300">3. Lead Capture Form</div>
        <div class="h-28 rounded-xl bg-white/[0.02] border border-white/10 p-3 flex flex-col justify-center text-[10px] space-y-1.5 text-slate-200">
          <div class="w-full bg-white/5 p-1 rounded border border-white/10 text-[9px] text-slate-400">Name &bull; Email &bull; Phone</div>
          <div class="w-full bg-[#38C5D2] text-slate-950 p-1 rounded font-bold text-[9px]">Submit Form</div>
        </div>
      </div>

      <!-- Step 4: Lead Captured -->
      <div class="p-5 rounded-2xl bg-emerald-950/40 border border-emerald-400/50 shadow-lg space-y-3 text-center">
        <div class="text-xs font-bold text-emerald-300">4. Lead Captured</div>
        <div class="h-28 rounded-xl bg-emerald-950/60 border border-emerald-500/40 text-emerald-200 p-3 flex flex-col justify-center items-center text-[10px] space-y-1">
          <i data-lucide="check-circle" class="w-6 h-6 text-emerald-400"></i>
          <div class="font-bold text-emerald-300">New Lead Stored in CRM</div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 7. LEAD ROUTING & FOLLOW-UP (A Lead Should Never Wait) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>LEAD ROUTING &amp; FOLLOW-UP</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        A Lead Should Never Wait
      </h2>
    </div>

    <!-- Engine Flow Diagram -->
    <div class="p-6 sm:p-10 rounded-3xl bg-[#091024] border border-white/10 shadow-2xl space-y-6">
      <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-2.5 text-center text-xs font-bold">
        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-slate-300">New Lead</div>
        <div class="p-3 rounded-xl bg-cyan-950/40 border border-cyan-500/30 text-cyan-300">Instant Response</div>
        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-slate-300">CRM Sync</div>
        <div class="p-3 rounded-xl bg-purple-950/40 border border-purple-500/30 text-purple-300">Lead Assignment</div>
        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-slate-300">SMS / Email</div>
        <div class="p-3 rounded-xl bg-cyan-950/40 border border-cyan-500/30 text-cyan-300">AI Conversation</div>
        <div class="p-3 rounded-xl bg-emerald-950/40 border border-emerald-400/50 text-emerald-300">Appointment</div>
      </div>

      <!-- Decision Row -->
      <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/10 flex flex-col sm:flex-row items-center justify-between text-xs gap-4">
        <span class="font-bold text-slate-300">Did the Lead Respond?</span>
        <div class="flex items-center gap-3">
          <span class="px-3 py-1 rounded-full bg-emerald-950/50 border border-emerald-500/40 text-emerald-300 font-bold">YES &rarr; Book Appointment</span>
          <span class="px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/40 text-purple-300 font-bold">NO &rarr; Auto Nurture Follow-Up</span>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 8. BUILT AROUND YOUR GROWTH GOAL (4 Target Campaign Models) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>READY-TO-SET TYPES</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Built Around Your Growth Goal
      </h2>
    </div>

    <!-- 4 Models Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-3">
        <h3 class="text-base font-bold text-white">Lead Generation</h3>
        <div class="text-xs text-purple-400 font-mono font-semibold">Traffic &rarr; Funnel &rarr; Lead &rarr; CRM</div>
        <p class="text-xs text-slate-400">Generate inquiries from qualified buyers at scale.</p>
      </div>

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-3">
        <h3 class="text-base font-bold text-white">Appointment Generation</h3>
        <div class="text-xs text-cyan-400 font-mono font-semibold">Traffic &rarr; Funnel &rarr; Calendar &rarr; Book</div>
        <p class="text-xs text-slate-400">Drive prospects directly toward consultation bookings.</p>
      </div>

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-3">
        <h3 class="text-base font-bold text-white">Local Business Leads</h3>
        <div class="text-xs text-purple-400 font-mono font-semibold">Geo-Ads &rarr; Landing Page &rarr; Call / Form</div>
        <p class="text-xs text-slate-400">Capture local market demand for clinics &amp; home services.</p>
      </div>

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-3">
        <h3 class="text-base font-bold text-white">High-Ticket / SaaS</h3>
        <div class="text-xs text-cyan-400 font-mono font-semibold">VSL &rarr; Application &rarr; Demo &rarr; Close</div>
        <p class="text-xs text-slate-400">Build high-trust qualification funnels for large deals.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 9. REAL CAMPAIGNS & PROJECTS (4 Case Studies) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>GROWTH SYSTEMS WE'VE BUILT</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Real Campaigns &amp; Projects
      </h2>
    </div>

    <!-- 4 Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- Card 1 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-cyan-400">Solar Lead Generation</div>
            <div class="text-[10px] text-slate-400">Meta Ads + Multi-Step Funnel</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Residential Solar System</h3>
            <div class="text-xs text-slate-400 mt-1">Cost Per Lead: $7.20</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-purple-400">Home Services Lead System</div>
            <div class="text-[10px] text-slate-400">Google Ads + Instant CRM Dispatch</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">HVAC &amp; Plumbing Growth</h3>
            <div class="text-xs text-slate-400 mt-1">Cost Per Lead: $14.50</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-purple-400 hover:text-purple-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-cyan-400">Real Estate Lead Funnel</div>
            <div class="text-[10px] text-slate-400">Meta Ads + Automated Booking</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Luxury Home Listings</h3>
            <div class="text-xs text-slate-400 mt-1">Cost Per Lead: $9.80</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-purple-400">Coaching Lead System</div>
            <div class="text-[10px] text-slate-400">YouTube Ads + VSL Funnel</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Executive Mastermind</h3>
            <div class="text-xs text-slate-400 mt-1">Cost Per Call: $48.00</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-purple-400 hover:text-purple-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 10. MORE THAN JUST AD MANAGEMENT & STATS -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Left: Loop Architecture -->
      <div class="lg:col-span-6 space-y-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
          <span>GROWTH ARCHITECTURE</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
          More Than Just Ad Management
        </h2>
        <p class="text-sm text-slate-300 leading-relaxed">
          We look beyond campaign performance and build the backend that handles what happens after a prospect clicks.
        </p>

        <!-- Full Loop Pill -->
        <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 flex flex-wrap items-center justify-between text-xs font-bold text-slate-300">
          <span>Ads</span> <span class="text-purple-400">&rarr;</span>
          <span>Funnels</span> <span class="text-cyan-400">&rarr;</span>
          <span>CRM</span> <span class="text-purple-400">&rarr;</span>
          <span>Automation</span> <span class="text-cyan-400">&rarr;</span>
          <span>AI</span> <span class="text-purple-400">&rarr;</span>
          <span class="text-emerald-400 font-extrabold">GROWTH</span>
        </div>
      </div>

      <!-- Right: Stats -->
      <div class="lg:col-span-6 grid grid-cols-2 gap-8 text-center divide-y sm:divide-y-0 sm:divide-x divide-white/10">
        <div class="p-4 space-y-1">
          <div class="text-4xl sm:text-5xl font-black text-cyan-400 tracking-tight">6+</div>
          <div class="text-xs sm:text-sm font-semibold text-slate-300">Years Experience</div>
        </div>

        <div class="p-4 space-y-1">
          <div class="text-4xl sm:text-5xl font-black text-purple-400 tracking-tight">800+</div>
          <div class="text-xs sm:text-sm font-semibold text-slate-300">Clients Globally</div>
        </div>

        <div class="p-4 space-y-1">
          <div class="text-4xl sm:text-5xl font-black text-cyan-400 tracking-tight">1,000+</div>
          <div class="text-xs sm:text-sm font-semibold text-slate-300">Projects</div>
        </div>

        <div class="p-4 space-y-1">
          <div class="text-4xl sm:text-5xl font-black text-purple-400 tracking-tight">500+</div>
          <div class="text-xs sm:text-sm font-semibold text-slate-300">Funnels Completed</div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 11. READY TO TURN AD SPEND INTO PIPELINE GROWTH (Bottom CTA Banner) -->
<!-- ========================================================================= -->
<section class="py-16 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative rounded-3xl p-8 sm:p-14 overflow-hidden bg-gradient-to-r from-[#170B28] via-[#091024] to-[#041E26] border border-purple-500/40 shadow-[0_0_50px_rgba(168,85,247,0.25)] text-center space-y-6">

      <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-48 bg-purple-600/30 rounded-full blur-3xl pointer-events-none"></div>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Ready to Turn Ad Spend Into Measurable Pipeline Growth?
      </h2>

      <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
        Let's build a paid acquisition system that connects your ads, funnels and CRM.
      </p>

      <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
        <button onclick="window.openBookingModal && window.openBookingModal()" class="px-8 py-3.5 rounded-full bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-700 hover:from-purple-500 hover:to-indigo-500 text-white font-bold text-xs sm:text-sm flex items-center gap-2 transition-all duration-200 hover:scale-105 shadow-[0_0_25px_rgba(168,85,247,0.4)]">
          <span>Book a Free Strategy Call</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>

        <a href="#how-it-works" class="px-8 py-3.5 rounded-full bg-white/[0.05] hover:bg-white/10 border border-white/15 text-white font-medium text-xs sm:text-sm transition-all duration-200">
          <span>See How It Works</span>
        </a>
      </div>

    </div>
  </div>
</section>
@endsection
