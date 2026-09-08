@extends('layouts.app')

@section('title', 'Services & Solutions Pricing — Growxpect')
@section('meta_description', 'Explore Growxpect's end-to-end growth solutions: High-converting funnels, CRM setup, marketing automation, paid advertising, and AI-powered sales systems with transparent pricing.')

@section('content')
<!-- 1. HERO HEADER -->
<section class="relative pt-16 pb-16 md:pt-24 md:pb-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-bold tracking-widest uppercase backdrop-blur-md">
      <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
      SERVICES & TRANSPARENT PRICING
    </div>

    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
      Specialized Growth Solutions. <br />
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400 text-glow">
        Predictable ROI Packages.
      </span>
    </h1>

    <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
      Choose standalone infrastructure modules or deploy our unified end-to-end Growth Engine tailored to your business stage.
    </p>

    <!-- Service Quick Switcher Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 pt-4" id="service-switcher">
      <a href="#funnels" class="px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 hover:border-cyan-400/40 hover:text-white transition-all flex items-center gap-1.5">
        <i data-lucide="filter" class="w-3.5 h-3.5 text-cyan-400"></i> Funnels
      </a>
      <a href="#crm" class="px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 hover:border-purple-400/40 hover:text-white transition-all flex items-center gap-1.5">
        <i data-lucide="database" class="w-3.5 h-3.5 text-purple-400"></i> CRM & Automation
      </a>
      <a href="#ads" class="px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 hover:border-blue-400/40 hover:text-white transition-all flex items-center gap-1.5">
        <i data-lucide="badge-dollar-sign" class="w-3.5 h-3.5 text-blue-400"></i> Paid Advertising
      </a>
      <a href="#ai" class="px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 hover:border-indigo-400/40 hover:text-white transition-all flex items-center gap-1.5">
        <i data-lucide="bot" class="w-3.5 h-3.5 text-indigo-400"></i> AI Growth & Speed-to-Lead
      </a>
      <a href="#all-in-one" class="px-4 py-2 rounded-full text-xs font-bold bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white shadow-glow-cyan flex items-center gap-1.5">
        <i data-lucide="zap" class="w-3.5 h-3.5 text-white"></i> Full Growth Engine
      </a>
    </div>
  </div>
</section>

<!-- 2. SERVICE DETAIL SECTIONS & PRICING -->
<div class="space-y-24 pb-20">

  <!-- SERVICE 1: High-Converting Funnels -->
  <section id="funnels" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-28">
    <div class="glass-panel rounded-3xl p-6 sm:p-10 border-cyan-500/30">
      <div class="flex flex-col lg:flex-row items-start justify-between gap-8 pb-8 border-b border-white/10">
        <div class="space-y-3 max-w-2xl">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-cyan-400">
            <i data-lucide="filter" class="w-4 h-4"></i> Service 01
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-white">High-Converting Funnels & Conversion Systems</h2>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
            We don't build vanity websites. We engineer high-converting sales funnels, VSL funnels, webinar funnels, and appointment-booking pages optimized for conversion rate and maximum customer value.
          </p>
        </div>
        <div class="flex items-center gap-2">
          <span class="text-xs text-slate-400">Typical Timeline:</span>
          <span class="text-xs font-bold text-white px-3 py-1 rounded-full bg-white/5 border border-white/10">7 – 14 Days</span>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pt-8">
        <!-- Tier A -->
        <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/10 space-y-5 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-white">Essential High-Converting Funnel</h3>
              <span class="text-xl font-extrabold text-cyan-400">$1,490</span>
            </div>
            <p class="text-xs text-slate-400">For businesses looking to launch a high-converting core offer or landing page.</p>
            <ul class="space-y-2.5 text-xs text-slate-300">
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400"></i> Custom 2-Page Direct-Response Funnel (Opt-in + Thank You)</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400"></i> Direct-response persuasive copywriting & responsive design</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400"></i> Calendar, form, and webhook integrations</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400"></i> Speed & mobile optimization (< 1.2s load speed)</li>
            </ul>
          </div>
          <a href="{{ route('home') }}#booking" class="w-full py-3 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all">
            <span>Select Essential Funnel</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>

        <!-- Tier B -->
        <div class="p-6 rounded-2xl bg-gradient-to-b from-cyan-950/40 to-slate-900/60 border border-cyan-500/40 space-y-5 flex flex-col justify-between relative shadow-glow-cyan">
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-cyan-300 bg-cyan-500/20 px-2 py-0.5 rounded-full border border-cyan-400/30">Complete Suite</span>
                <h3 class="text-lg font-bold text-white mt-1">Multi-Stage Funnel Ecosystem</h3>
              </div>
              <span class="text-xl font-extrabold text-white">$2,990</span>
            </div>
            <p class="text-xs text-slate-300">Complete conversion architecture with VSL, qualification quiz, and automated upsell sequences.</p>
            <ul class="space-y-2.5 text-xs text-slate-200">
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> 4-Stage Funnel (Lead Magnet + VSL + Triage Application + Thank You)</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Interactive multi-step conditional qualification quiz</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Dynamic A/B headline & hook split testing setup</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Full Meta Pixel, Google Tag Manager, & server-side tracking (CAPI)</li>
            </ul>
          </div>
          <a href="{{ route('home') }}#booking" class="w-full py-3 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-glow-cyan">
            <span>Deploy Multi-Stage Ecosystem</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE 2: CRM & Marketing Automation -->
  <section id="crm" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-28">
    <div class="glass-panel rounded-3xl p-6 sm:p-10 border-purple-500/30">
      <div class="flex flex-col lg:flex-row items-start justify-between gap-8 pb-8 border-b border-white/10">
        <div class="space-y-3 max-w-2xl">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-purple-400">
            <i data-lucide="database" class="w-4 h-4"></i> Service 02
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-white">CRM Architecture & Marketing Automation</h2>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
            Stop losing leads between marketing and sales. We configure GoHighLevel, HubSpot, or custom CRMs with automated email/SMS sequences, deal pipelines, and automated lead triage.
          </p>
        </div>
        <div class="flex items-center gap-2">
          <span class="text-xs text-slate-400">Typical Timeline:</span>
          <span class="text-xs font-bold text-white px-3 py-1 rounded-full bg-white/5 border border-white/10">5 – 10 Days</span>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pt-8">
        <!-- Tier A -->
        <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/10 space-y-5 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-white">CRM Foundation & Pipeline</h3>
              <span class="text-xl font-extrabold text-purple-400">$1,290</span>
            </div>
            <p class="text-xs text-slate-400">Core CRM setup, pipeline deal stages, and primary automated notification alerts.</p>
            <ul class="space-y-2.5 text-xs text-slate-300">
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400"></i> Full CRM onboarding & contact field customization</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400"></i> Visual Deal Pipeline & Lead Status stages</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400"></i> 3-Touchpoint instant email & SMS confirmation sequence</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400"></i> Instant Slack / WhatsApp lead notification bot for sales rep</li>
            </ul>
          </div>
          <a href="{{ route('home') }}#booking" class="w-full py-3 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all">
            <span>Select CRM Foundation</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>

        <!-- Tier B -->
        <div class="p-6 rounded-2xl bg-gradient-to-b from-purple-950/40 to-slate-900/60 border border-purple-500/40 space-y-5 flex flex-col justify-between shadow-glow-purple">
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-purple-300 bg-purple-500/20 px-2 py-0.5 rounded-full border border-purple-400/30">Advanced Engine</span>
                <h3 class="text-lg font-bold text-white mt-1">Advanced Lifecycle Automation</h3>
              </div>
              <span class="text-xl font-extrabold text-white">$2,490</span>
            </div>
            <p class="text-xs text-slate-300">Complete nurture, re-engagement, and multi-channel pipeline automation.</p>
            <ul class="space-y-2.5 text-xs text-slate-200">
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-400"></i> Long-term 30-day automated nurture drip (Email + SMS + Voicemail)</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-400"></i> Dead-lead database reactivation campaign (turns old leads into cash)</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-400"></i> Round-robin automated sales appointment distribution</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-400"></i> Custom Webhook integrations (Zapier / Make / Webhooks)</li>
            </ul>
          </div>
          <a href="{{ route('home') }}#booking" class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-glow-purple">
            <span>Deploy Advanced CRM</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE 3: Paid Advertising & AI Speed-to-Lead -->
  <section id="ads" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-28">
    <div class="glass-panel rounded-3xl p-6 sm:p-10 border-blue-500/30">
      <div class="flex flex-col lg:flex-row items-start justify-between gap-8 pb-8 border-b border-white/10">
        <div class="space-y-3 max-w-2xl">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-blue-400">
            <i data-lucide="badge-dollar-sign" class="w-4 h-4"></i> Service 03 & 04
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Paid Traffic & AI Speed-to-Lead</h2>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
            Generate high-intent prospects via Meta and Google Ads, then qualify and book them automatically within 60 seconds with our AI conversation bots.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pt-8">
        <!-- Ads Retainer -->
        <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/10 space-y-5 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-white">Paid Ads Management</h3>
              <div class="text-right">
                <span class="text-xl font-extrabold text-blue-400">$1,850</span>
                <span class="text-xs text-slate-400">/ mo</span>
              </div>
            </div>
            <p class="text-xs text-slate-400">Targeted Meta & Google ad campaigns engineered for qualified lead generation.</p>
            <ul class="space-y-2.5 text-xs text-slate-300">
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-400"></i> Full campaign creation, ad copywriting & video creative curation</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-400"></i> Weekly audience testing, budget scaling & bidding optimization</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-400"></i> Dynamic retargeting campaigns to capture unconverted visitors</li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-400"></i> Bi-weekly live strategy & performance review calls</li>
            </ul>
          </div>
          <a href="{{ route('home') }}#booking" class="w-full py-3 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all">
            <span>Book Ads Strategy</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>

        <!-- AI Speed to Lead -->
        <div id="ai" class="p-6 rounded-2xl bg-gradient-to-b from-indigo-950/40 to-slate-900/60 border border-indigo-500/40 space-y-5 flex flex-col justify-between shadow-[0_0_30px_rgba(99,102,241,0.25)]">
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-indigo-300 bg-indigo-500/20 px-2 py-0.5 rounded-full border border-indigo-400/30">AI Conversational Engine</span>
                <h3 class="text-lg font-bold text-white mt-1">AI Speed-to-Lead Bot</h3>
              </div>
              <div class="text-right">
                <span class="text-xl font-extrabold text-white">$990</span>
                <span class="text-xs text-slate-400 block">+ $350/mo</span>
              </div>
            </div>
            <p class="text-xs text-slate-300">Custom-trained AI bot that messages leads within 45 seconds to qualify budget & book calls.</p>
            <ul class="space-y-2.5 text-xs text-slate-200">
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-indigo-400"></i> Multi-channel instant response (SMS, WhatsApp, Instagram DM, Webchat)</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-indigo-400"></i> Custom trained on your company knowledge, pricing & objections</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-indigo-400"></i> Automatic qualification questions before offering calendar slots</li>
              <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-indigo-400"></i> Seamless live agent handover when requested</li>
            </ul>
          </div>
          <a href="{{ route('home') }}#booking" class="w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-cyan-500 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-glow-cyan">
            <span>Deploy AI Bot</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ALL-IN-ONE FLAGSHIP ENGINE BANNER -->
  <section id="all-in-one" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-28">
    <div class="p-8 sm:p-14 rounded-3xl bg-gradient-to-r from-cyan-950/80 via-[#0B1530] to-purple-950/80 border-2 border-cyan-400/60 shadow-[0_0_60px_rgba(56,197,210,0.25)] relative overflow-hidden text-center space-y-6">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-300 bg-cyan-500/20 px-3.5 py-1 rounded-full border border-cyan-400/40">
        FLAGSHIP GROWTH ENGINE
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white">Want the Complete Connected System?</h2>
      <p class="text-xs sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
        Save over 35% by deploying the all-in-one growth architecture: Funnels + CRM Automation + Paid Ads + AI Speed-to-Lead bot running together seamlessly.
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
        <a href="{{ route('home') }}#booking" class="px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-extrabold text-xs sm:text-sm shadow-glow-cyan hover:scale-105 transition-all">
          <span>Book Free Architecture Call</span>
        </a>
        <a href="{{ route('home') }}#pricing" class="px-7 py-4 rounded-full bg-white/10 hover:bg-white/15 border border-white/15 text-white font-semibold text-xs sm:text-sm transition-colors">
          <span>Compare Growth Tiers</span>
        </a>
      </div>
    </div>
  </section>

</div>
@endsection
