@extends('layouts.app')

@section('title', $seo->title ?? 'Growxpect — Turn Leads Into Customers With Smarter Growth Systems')
@section('meta_description', $seo->description ?? 'Growxpect builds conversion-focused funnels, CRM systems, and automated workflows that help businesses capture, nurture and convert more leads.')

@section('content')
<!-- 2. HERO SECTION -->
<section class="relative pt-10 pb-20 md:pt-20 md:pb-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

      <!-- Hero Left Column: Copy & CTAs -->
      <div class="lg:col-span-6 space-y-6 sm:space-y-7 text-center lg:text-left">

        <!-- Category Tag Pills -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/40 border border-cyan-500/30 text-cyan-400 text-[11px] sm:text-xs font-semibold tracking-wider uppercase backdrop-blur-md">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
          {{ $cms['hero_badge'] ?? 'FUNNELS • CRM • AUTOMATION • GROWTH' }}
        </div>

        <!-- Main Heading -->
        <h1 class="text-3xl sm:text-5xl xl:text-6xl font-extrabold tracking-tight text-white leading-[1.15]">
          {{ $cms['hero_title'] ?? 'Turn More Leads Into Customers With Smarter Growth Systems.' }}
        </h1>

        <!-- Subtitle -->
        <p class="text-sm sm:text-base lg:text-lg text-slate-400 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
          {{ $cms['hero_subtitle'] ?? 'Growxpect builds conversion-focused funnels, CRM systems, and automated workflows that help businesses capture, nurture and convert more leads.' }}
        </p>

        <!-- CTA Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
          <a href="{{ $cms['hero_primary_btn_link'] ?? '#booking' }}" class="w-full sm:w-auto px-7 py-3.5 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-semibold text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:shadow-cyan-500/50 transition-all duration-300 hover:scale-[1.03]">
            <span>{{ $cms['hero_primary_btn_text'] ?? 'Build My Growth System' }}</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>

          <a href="{{ $cms['hero_secondary_btn_link'] ?? '#process' }}" class="w-full sm:w-auto px-6 py-3.5 rounded-full bg-white/[0.04] hover:bg-white/[0.09] border border-white/10 text-slate-200 font-semibold text-sm flex items-center justify-center gap-2 transition-all duration-200 backdrop-blur-md">
            <i data-lucide="play-circle" class="w-4 h-4 text-cyan-400"></i>
            <span>{{ $cms['hero_secondary_btn_text'] ?? 'See How It Works' }}</span>
          </a>
        </div>
      </div>

      <!-- Hero Right Column: Interactive Futuristic Growth Engine Dashboard -->
      <div class="lg:col-span-6 relative">
        <div class="relative mx-auto max-w-lg lg:max-w-none">

          <div class="absolute -top-5 right-2 sm:-right-2 z-20 glass-panel px-3.5 sm:px-4 py-2 rounded-2xl flex items-center gap-2.5 sm:gap-3 shadow-glow-card border-cyan-500/30">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-xl bg-cyan-500/20 border border-cyan-500/40 flex items-center justify-center text-cyan-300">
              <i data-lucide="trending-up" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
            </div>
            <div>
              <div class="text-[10px] sm:text-xs text-slate-400 font-medium">New Leads</div>
              <div class="text-xs sm:text-sm font-bold text-white flex items-center gap-1">
                {{ $cms['hero_stat_leads'] ?? '+128 this week' }}
              </div>
            </div>
          </div>

          <div class="glass-panel rounded-3xl p-4 sm:p-6 relative overflow-hidden border-white/10 shadow-2xl">
            <div class="flex items-center justify-between pb-4 border-b border-white/[0.07]">
              <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-cyan-400"></span>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-300">GROWTH ENGINE</span>
              </div>
              <div class="flex items-center gap-1.5 bg-white/5 px-2.5 py-1 rounded-lg border border-white/5 text-[11px] text-slate-300">
                <i data-lucide="activity" class="w-3 h-3 text-cyan-400"></i>
                <span>Live Tracking</span>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-12 gap-5 pt-5 items-center">
              <div class="sm:col-span-8 space-y-4">
                <div>
                  <div class="text-xs text-slate-400">Captured Leads (30 Days)</div>
                  <div class="text-2xl sm:text-3xl font-extrabold text-white flex items-baseline gap-2 mt-0.5">
                    {{ $cms['hero_stat_captured_leads'] ?? '2,847' }} <span class="text-xs font-semibold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-full border border-emerald-500/20">{{ $cms['hero_stat_growth_rate'] ?? '+32.5%' }}</span>
                  </div>
                </div>

                <div class="h-28 w-full relative">
                  <svg class="w-full h-full overflow-visible" viewBox="0 0 300 100" preserveAspectRatio="none">
                    <defs>
                      <linearGradient id="chartGlow" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#38C5D2" stop-opacity="0.35"/>
                        <stop offset="100%" stop-color="#8C2AA6" stop-opacity="0.0"/>
                      </linearGradient>
                      <linearGradient id="chartLine" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#38C5D2"/>
                        <stop offset="50%" stop-color="#6366F1"/>
                        <stop offset="100%" stop-color="#8C2AA6"/>
                      </linearGradient>
                    </defs>
                    <path d="M0,80 Q 45,65 75,70 T 150,40 T 225,35 T 300,10 L 300,100 L 0,100 Z" fill="url(#chartGlow)" />
                    <path d="M0,80 Q 45,65 75,70 T 150,40 T 225,35 T 300,10" fill="none" stroke="url(#chartLine)" stroke-width="3.5" stroke-linecap="round"/>
                    <circle cx="150" cy="40" r="4" fill="#38C5D2" class="glow-dot"/>
                    <circle cx="300" cy="10" r="4.5" fill="#8C2AA6" class="glow-dot"/>
                  </svg>
                </div>

                <div class="space-y-2 pt-1">
                  <div class="flex justify-between text-[11px] font-medium text-slate-400">
                    <span>Lead Sources</span>
                    <span class="text-cyan-400">Total 100%</span>
                  </div>
                  <div class="grid grid-cols-4 gap-1.5 text-[10px]">
                    <div class="bg-blue-950/40 border border-blue-500/20 p-1.5 rounded-md">
                      <div class="text-slate-400">Google</div>
                      <div class="font-bold text-white">42%</div>
                    </div>
                    <div class="bg-cyan-950/40 border border-cyan-500/20 p-1.5 rounded-md">
                      <div class="text-slate-400">Meta</div>
                      <div class="font-bold text-white">28%</div>
                    </div>
                    <div class="bg-indigo-950/40 border border-indigo-500/20 p-1.5 rounded-md">
                      <div class="text-slate-400">Podcasts</div>
                      <div class="font-bold text-white">20%</div>
                    </div>
                    <div class="bg-purple-950/40 border border-purple-500/20 p-1.5 rounded-md">
                      <div class="text-slate-400">Referral</div>
                      <div class="font-bold text-white">10%</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sm:col-span-4 grid grid-cols-2 sm:grid-cols-1 gap-2">
                <div class="p-2.5 rounded-xl bg-white/[0.04] border border-cyan-500/30 flex items-center gap-2.5 text-xs text-white">
                  <div class="w-6 h-6 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0">
                    <i data-lucide="filter" class="w-3.5 h-3.5"></i>
                  </div>
                  <span class="font-medium">Funnel</span>
                </div>
                <div class="p-2.5 rounded-xl bg-white/[0.04] border border-blue-500/30 flex items-center gap-2.5 text-xs text-white">
                  <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0">
                    <i data-lucide="database" class="w-3.5 h-3.5"></i>
                  </div>
                  <span class="font-medium">CRM</span>
                </div>
                <div class="p-2.5 rounded-xl bg-white/[0.04] border border-indigo-500/30 flex items-center gap-2.5 text-xs text-white">
                  <div class="w-6 h-6 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0">
                    <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                  </div>
                  <span class="font-medium">Nurture</span>
                </div>
                <div class="p-2.5 rounded-xl bg-white/[0.04] border border-purple-500/30 flex items-center gap-2.5 text-xs text-white">
                  <div class="w-6 h-6 rounded-lg bg-purple-500/20 text-purple-400 flex items-center justify-center shrink-0">
                    <i data-lucide="bot" class="w-3.5 h-3.5"></i>
                  </div>
                  <span class="font-medium">AI Bot</span>
                </div>
              </div>
            </div>

            <!-- Bottom Stats -->
            <div class="grid grid-cols-2 gap-3 pt-5 mt-4 border-t border-white/[0.07]">
              <div class="flex items-center gap-3 p-2.5 rounded-xl bg-cyan-950/30 border border-cyan-500/20">
                <div class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
                  <i data-lucide="calendar-check" class="w-4 h-4"></i>
                </div>
                <div>
                  <div class="text-base font-bold text-white leading-tight">{{ $cms['hero_stat_appointments'] ?? '34' }}</div>
                  <div class="text-[10px] text-slate-400">Appointments</div>
                </div>
              </div>

              <div class="flex items-center gap-3 p-2.5 rounded-xl bg-blue-950/30 border border-blue-500/20">
                <div class="w-8 h-8 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center">
                  <i data-lucide="check-circle" class="w-4 h-4"></i>
                </div>
                <div>
                  <div class="text-base font-bold text-white leading-tight">{{ $cms['hero_stat_followup_rate'] ?? '92%' }}</div>
                  <div class="text-[10px] text-slate-400">Follow-up Rate</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. BUILT FOR BUSINESSES READY TO GROW (INDUSTRY ECOSYSTEM SECTION) -->
<!-- ========================================================================= -->
<section class="py-16 sm:py-24 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Background Glow Accents -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-gradient-to-r from-purple-600/10 via-cyan-500/10 to-indigo-600/10 blur-[130px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-20"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-12 sm:mb-16">

      <!-- Eyebrow Badge with Gradient Accent Lines -->
      <div class="flex items-center justify-center gap-3">
        <div class="h-0.5 w-8 sm:w-12 bg-gradient-to-r from-transparent to-cyan-400"></div>
        <span class="text-xs sm:text-sm font-extrabold tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400 uppercase">
          TRUSTED BY GROWING BUSINESSES
        </span>
        <div class="h-0.5 w-8 sm:w-12 bg-gradient-to-r from-purple-400 to-transparent"></div>
      </div>

      <!-- Main Headline -->
      <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
        Built for Businesses <br />
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-indigo-300 to-cyan-400">
          Ready to Grow
        </span>
      </h2>

      <!-- Subtitle Description -->
      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
        Growxpect helps businesses build scalable growth systems — combining funnels, CRM and automation to capture more leads, nurture relationships and drive predictable revenue.
      </p>
    </div>

    <!-- 2 Separate Cards: Rating Card (Left) & 5 Industry Categories (Right) -->
    <div class="flex flex-col lg:flex-row items-stretch gap-6">

      <!-- Card 1: Rating Card -->
      <div class="glass-panel p-6 sm:p-8 rounded-3xl border-white/10 shadow-2xl flex flex-col justify-center items-center lg:items-start min-w-[240px] shrink-0 text-center lg:text-left relative overflow-hidden group hover:border-cyan-500/40 transition-all">
        <div class="absolute -top-10 -left-10 w-32 h-32 bg-purple-500/10 rounded-full blur-2xl pointer-events-none"></div>
        <!-- Stars -->
        <div class="flex items-center gap-1.5 mb-3 relative z-10">
          <i data-lucide="star" class="w-5 h-5 text-purple-400 fill-purple-400"></i>
          <i data-lucide="star" class="w-5 h-5 text-purple-400 fill-purple-400"></i>
          <i data-lucide="star" class="w-5 h-5 text-indigo-400 fill-indigo-400"></i>
          <i data-lucide="star" class="w-5 h-5 text-cyan-400 fill-cyan-400"></i>
          <i data-lucide="star" class="w-5 h-5 text-cyan-400 fill-cyan-400"></i>
        </div>
        <!-- Score -->
        <div class="text-3xl sm:text-4xl font-black text-white tracking-tight leading-none mb-2 relative z-10">
          4.9/5
        </div>
        <!-- Subtext -->
        <div class="text-xs sm:text-sm text-slate-400 font-medium relative z-10">
          Trusted by 50+ businesses
        </div>
      </div>

      <!-- Card 2: 5 Industry Categories Bar -->
      <div class="glass-panel p-6 sm:p-8 rounded-3xl border-white/10 shadow-2xl flex-1 flex flex-wrap sm:flex-nowrap items-center justify-between gap-4 sm:gap-2 relative overflow-hidden group hover:border-cyan-500/30 transition-all">
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-cyan-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <!-- Industry 1: Healthcare -->
        <div class="flex flex-col items-center text-center flex-1 min-w-[90px] group/item relative z-10">
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#091024] border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2.5 shadow-[0_0_15px_rgba(168,85,247,0.2)] group-hover/item:scale-110 group-hover/item:border-purple-400 group-hover/item:shadow-[0_0_25px_rgba(168,85,247,0.4)] transition-all">
            <i data-lucide="activity" class="w-6 h-6"></i>
          </div>
          <span class="text-xs sm:text-sm font-semibold text-slate-200 group-hover/item:text-purple-300 transition-colors">
            Healthcare
          </span>
        </div>

        <!-- Connector Dot 1 -->
        <div class="hidden sm:flex items-center justify-center pb-6 relative z-10">
          <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2]"></span>
        </div>

        <!-- Industry 2: Home Services -->
        <div class="flex flex-col items-center text-center flex-1 min-w-[90px] group/item relative z-10">
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#091024] border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-2.5 shadow-[0_0_15px_rgba(56,197,210,0.2)] group-hover/item:scale-110 group-hover/item:border-cyan-400 group-hover/item:shadow-[0_0_25px_rgba(56,197,210,0.4)] transition-all">
            <i data-lucide="home" class="w-6 h-6"></i>
          </div>
          <span class="text-xs sm:text-sm font-semibold text-slate-200 group-hover/item:text-cyan-300 transition-colors">
            Home Services
          </span>
        </div>

        <!-- Connector Dot 2 -->
        <div class="hidden sm:flex items-center justify-center pb-6 relative z-10">
          <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2]"></span>
        </div>

        <!-- Industry 3: Coaching -->
        <div class="flex flex-col items-center text-center flex-1 min-w-[90px] group/item relative z-10">
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#091024] border border-indigo-500/30 text-indigo-400 flex items-center justify-center mb-2.5 shadow-[0_0_15px_rgba(99,102,241,0.2)] group-hover/item:scale-110 group-hover/item:border-indigo-400 group-hover/item:shadow-[0_0_25px_rgba(99,102,241,0.4)] transition-all">
            <i data-lucide="users" class="w-6 h-6"></i>
          </div>
          <span class="text-xs sm:text-sm font-semibold text-slate-200 group-hover/item:text-indigo-300 transition-colors">
            Coaching
          </span>
        </div>

        <!-- Connector Dot 3 -->
        <div class="hidden sm:flex items-center justify-center pb-6 relative z-10">
          <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2]"></span>
        </div>

        <!-- Industry 4: Real Estate -->
        <div class="flex flex-col items-center text-center flex-1 min-w-[90px] group/item relative z-10">
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#091024] border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-2.5 shadow-[0_0_15px_rgba(56,197,210,0.2)] group-hover/item:scale-110 group-hover/item:border-cyan-400 group-hover/item:shadow-[0_0_25px_rgba(56,197,210,0.4)] transition-all">
            <i data-lucide="building" class="w-6 h-6"></i>
          </div>
          <span class="text-xs sm:text-sm font-semibold text-slate-200 group-hover/item:text-cyan-300 transition-colors">
            Real Estate
          </span>
        </div>

        <!-- Connector Dot 4 -->
        <div class="hidden sm:flex items-center justify-center pb-6 relative z-10">
          <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2]"></span>
        </div>

        <!-- Industry 5: Professional Services -->
        <div class="flex flex-col items-center text-center flex-1 min-w-[90px] group/item relative z-10">
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#091024] border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2.5 shadow-[0_0_15px_rgba(168,85,247,0.2)] group-hover/item:scale-110 group-hover/item:border-purple-400 group-hover/item:shadow-[0_0_25px_rgba(168,85,247,0.4)] transition-all">
            <i data-lucide="briefcase" class="w-6 h-6"></i>
          </div>
          <span class="text-xs sm:text-sm font-semibold text-slate-200 group-hover/item:text-purple-300 transition-colors">
            Professional Services
          </span>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 2.5 THE PROBLEM: LEADS LEAKING BETWEEN SYSTEMS (MOCKUP DESIGN) -->
<!-- ========================================================================= -->
<section id="the-problem" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-y border-white/[0.06]">
  <!-- Background Glow Accents -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[500px] h-[350px] bg-purple-600/10 blur-[130px] rounded-full"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[500px] h-[350px] bg-cyan-500/10 blur-[130px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-30"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16 sm:mb-20">
      <div class="flex items-center justify-center gap-3">
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-transparent to-cyan-400"></div>
        <span class="text-xs sm:text-sm font-extrabold tracking-widest text-cyan-400 uppercase">THE PROBLEM</span>
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-purple-500 to-transparent"></div>
      </div>

      <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
        Your Leads Are Leaking<br />
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-indigo-300 to-cyan-400">Between Systems.</span>
      </h2>

      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
        Disconnected tools, slow follow-ups, and manual processes can cause valuable leads to disappear before they ever become customers.
      </p>
    </div>

    <!-- 6-Stage Pipeline Flow (Contained & Fluid Responsive) -->
    <div class="relative py-4 w-full">

      <!-- Desktop Pipeline Flow (6 Cards with Connectors & Leaks - Fits 100% inside container) -->
      <div class="hidden lg:flex items-start justify-between w-full gap-1.5 relative">

        <!-- Stage 1: AD -->
        <div class="flex flex-col items-center flex-1 min-w-0 max-w-[155px]">
          <div class="w-full glass-panel rounded-2xl p-3.5 flex flex-col justify-between border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] transition-all group min-h-[175px]">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2.5 group-hover:scale-105 transition-transform shadow-[0_0_12px_rgba(168,85,247,0.25)]">
              <i data-lucide="megaphone" class="w-4 h-4"></i>
            </div>
            <div>
              <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider mb-1 truncate">AD</h3>
              <p class="text-[10px] text-slate-400 leading-snug">Attracts potential customers</p>
            </div>
            <div class="flex items-center gap-1.5 pt-2.5 mt-2 border-t border-white/5">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
            </div>
          </div>
          <span class="mt-2 px-2 py-0.5 rounded-full bg-cyan-500/10 border border-cyan-500/25 text-cyan-300 text-[9px] font-semibold whitespace-nowrap">New Leads</span>
        </div>

        <!-- Connector 1: Ad -> Landing Page -->
        <div class="flex items-center justify-center shrink-0 pt-16 px-0.5">
          <div class="flex items-center text-cyan-400">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2]"></span>
            <div class="w-3 xl:w-5 h-0.5 bg-gradient-to-r from-cyan-400 to-cyan-300"></div>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 -ml-1"></i>
          </div>
        </div>

        <!-- Stage 2: LANDING PAGE -->
        <div class="flex flex-col items-center flex-1 min-w-0 max-w-[155px]">
          <div class="w-full glass-panel rounded-2xl p-3.5 flex flex-col justify-between border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_20px_rgba(56,197,210,0.2)] transition-all group min-h-[175px]">
            <div class="w-9 h-9 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-2.5 group-hover:scale-105 transition-transform shadow-[0_0_12px_rgba(56,197,210,0.25)]">
              <i data-lucide="layout" class="w-4 h-4"></i>
            </div>
            <div>
              <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider mb-1 truncate">LANDING PAGE</h3>
              <p class="text-[10px] text-slate-400 leading-snug">Captures interest & details</p>
            </div>
            <div class="flex items-center gap-1.5 pt-2.5 mt-2 border-t border-white/5">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            </div>
          </div>
        </div>

        <!-- Connector 2: Landing Page -> Form -->
        <div class="flex items-center justify-center shrink-0 pt-16 px-0.5">
          <div class="flex items-center text-cyan-400">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2]"></span>
            <div class="w-3 xl:w-5 h-0.5 bg-gradient-to-r from-cyan-400 to-cyan-300"></div>
            <i data-lucide="chevron-right" class="w-3.5 h-3.5 -ml-1"></i>
          </div>
        </div>

        <!-- Stage 3: FORM -->
        <div class="flex flex-col items-center flex-1 min-w-0 max-w-[155px]">
          <div class="w-full glass-panel rounded-2xl p-3.5 flex flex-col justify-between border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] transition-all group min-h-[175px]">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2.5 group-hover:scale-105 transition-transform shadow-[0_0_12px_rgba(168,85,247,0.25)]">
              <i data-lucide="clipboard-list" class="w-4 h-4"></i>
            </div>
            <div>
              <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider mb-1 truncate">FORM</h3>
              <p class="text-[10px] text-slate-400 leading-snug">Captures lead information</p>
            </div>
            <div class="flex items-center gap-1.5 pt-2.5 mt-2 border-t border-white/5">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
            </div>
          </div>
        </div>

        <!-- LEAK 1: Form -> CRM (Manual) -->
        <div class="flex flex-col items-center justify-center shrink-0 pt-5 px-1 min-w-[50px] xl:min-w-[65px]">
          <!-- Top Tag -->
          <div class="flex flex-col items-center gap-0.5 mb-1">
            <span class="text-[9px] font-bold text-rose-400">Manual</span>
            <div class="w-4 h-4 rounded-full bg-rose-500/20 border border-rose-500/40 text-rose-400 flex items-center justify-center text-[9px] font-black shadow-[0_0_8px_rgba(244,63,94,0.4)]">!</div>
          </div>
          <!-- Leaking Dashed Connector Track -->
          <div class="w-full flex items-center justify-center relative my-1">
            <div class="w-full border-t border-dashed border-rose-500/60"></div>
            <i data-lucide="chevron-right" class="w-3 h-3 text-rose-400 absolute right-0"></i>
          </div>
          <!-- Bottom Drop Leak Badge -->
          <div class="mt-1 flex flex-col items-center">
            <div class="w-0.5 h-2.5 border-l border-dashed border-rose-500/60"></div>
            <span class="px-1.5 py-0.5 rounded-full bg-rose-500/15 border border-rose-500/30 text-rose-400 text-[8px] font-bold flex items-center gap-0.5 whitespace-nowrap shadow-[0_0_8px_rgba(244,63,94,0.2)]">
              <i data-lucide="x" class="w-2 h-2"></i> Leads Lost
            </span>
          </div>
        </div>

        <!-- Stage 4: CRM -->
        <div class="flex flex-col items-center flex-1 min-w-0 max-w-[155px]">
          <div class="w-full glass-panel rounded-2xl p-3.5 flex flex-col justify-between border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] transition-all group min-h-[175px]">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2.5 group-hover:scale-105 transition-transform shadow-[0_0_12px_rgba(168,85,247,0.25)]">
              <i data-lucide="users" class="w-4 h-4"></i>
            </div>
            <div>
              <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider mb-1 truncate">CRM</h3>
              <p class="text-[10px] text-slate-400 leading-snug">Stores & manages leads</p>
            </div>
            <div class="flex items-center gap-1.5 pt-2.5 mt-2 border-t border-white/5">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            </div>
          </div>
        </div>

        <!-- LEAK 2: CRM -> Follow-Up (Disconnected) -->
        <div class="flex flex-col items-center justify-center shrink-0 pt-5 px-1 min-w-[50px] xl:min-w-[65px]">
          <!-- Top Tag -->
          <div class="flex flex-col items-center gap-0.5 mb-1">
            <span class="text-[9px] font-bold text-rose-400">Disconnected</span>
            <div class="w-4 h-4 rounded-full bg-rose-500/20 border border-rose-500/40 text-rose-400 flex items-center justify-center text-[9px] font-black shadow-[0_0_8px_rgba(244,63,94,0.4)]">!</div>
          </div>
          <!-- Leaking Dashed Connector Track -->
          <div class="w-full flex items-center justify-center relative my-1">
            <div class="w-full border-t border-dashed border-rose-500/60"></div>
            <i data-lucide="chevron-right" class="w-3 h-3 text-rose-400 absolute right-0"></i>
          </div>
          <!-- Bottom Drop Leak Badge -->
          <div class="mt-1 flex flex-col items-center">
            <div class="w-0.5 h-2.5 border-l border-dashed border-rose-500/60"></div>
            <span class="px-1.5 py-0.5 rounded-full bg-rose-500/15 border border-rose-500/30 text-rose-400 text-[8px] font-bold flex items-center gap-0.5 whitespace-nowrap shadow-[0_0_8px_rgba(244,63,94,0.2)]">
              <i data-lucide="x" class="w-2 h-2"></i> Leads Lost
            </span>
          </div>
        </div>

        <!-- Stage 5: FOLLOW-UP -->
        <div class="flex flex-col items-center flex-1 min-w-0 max-w-[155px]">
          <div class="w-full glass-panel rounded-2xl p-3.5 flex flex-col justify-between border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_20px_rgba(56,197,210,0.2)] transition-all group min-h-[175px]">
            <div class="w-9 h-9 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-2.5 group-hover:scale-105 transition-transform shadow-[0_0_12px_rgba(56,197,210,0.25)]">
              <i data-lucide="mail" class="w-4 h-4"></i>
            </div>
            <div>
              <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider mb-1 truncate">FOLLOW-UP</h3>
              <p class="text-[10px] text-slate-400 leading-snug">Nurtures & builds leads</p>
            </div>
            <div class="flex items-center gap-1.5 pt-2.5 mt-2 border-t border-white/5">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
            </div>
          </div>
        </div>

        <!-- LEAK 3: Follow-Up -> Appointment (Delayed) -->
        <div class="flex flex-col items-center justify-center shrink-0 pt-5 px-1 min-w-[50px] xl:min-w-[65px]">
          <!-- Top Tag -->
          <div class="flex flex-col items-center gap-0.5 mb-1">
            <span class="text-[9px] font-bold text-rose-400">Delayed</span>
            <div class="w-4 h-4 rounded-full bg-rose-500/20 border border-rose-500/40 text-rose-400 flex items-center justify-center text-[9px] font-black shadow-[0_0_8px_rgba(244,63,94,0.4)]">!</div>
          </div>
          <!-- Leaking Dashed Connector Track -->
          <div class="w-full flex items-center justify-center relative my-1">
            <div class="w-full border-t border-dashed border-rose-500/60"></div>
            <i data-lucide="chevron-right" class="w-3 h-3 text-rose-400 absolute right-0"></i>
          </div>
          <!-- Bottom Drop Leak Badge -->
          <div class="mt-1 flex flex-col items-center">
            <div class="w-0.5 h-2.5 border-l border-dashed border-rose-500/60"></div>
            <span class="px-1.5 py-0.5 rounded-full bg-rose-500/15 border border-rose-500/30 text-rose-400 text-[8px] font-bold flex items-center gap-0.5 whitespace-nowrap shadow-[0_0_8px_rgba(244,63,94,0.2)]">
              <i data-lucide="x" class="w-2 h-2"></i> Leads Lost
            </span>
          </div>
        </div>

        <!-- Stage 6: APPOINTMENT -->
        <div class="flex flex-col items-center flex-1 min-w-0 max-w-[155px]">
          <div class="w-full glass-panel rounded-2xl p-3.5 flex flex-col justify-between border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] transition-all group min-h-[175px]">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2.5 group-hover:scale-105 transition-transform shadow-[0_0_12px_rgba(168,85,247,0.25)]">
              <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <div>
              <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider mb-1 truncate">APPOINTMENT</h3>
              <p class="text-[10px] text-slate-400 leading-snug">Turns leads to clients</p>
            </div>
            <div class="flex items-center gap-1.5 pt-2.5 mt-2 border-t border-white/5">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
            </div>
          </div>
        </div>

      </div>

      <!-- Mobile & Tablet Responsive Flow (Grid Layout) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:hidden gap-4">
        <!-- Stage 1 -->
        <div class="glass-panel rounded-2xl p-4 border-white/10 flex flex-col justify-between relative">
          <div class="flex items-center justify-between mb-2">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center">
              <i data-lucide="megaphone" class="w-4 h-4"></i>
            </div>
            <span class="px-2 py-0.5 rounded-full bg-cyan-500/10 border border-cyan-500/25 text-cyan-300 text-[9px] font-semibold">New Leads</span>
          </div>
          <h3 class="text-sm font-extrabold text-white mb-0.5">AD</h3>
          <p class="text-xs text-slate-400 mb-2">Attracts potential customers</p>
          <div class="flex items-center gap-1.5 pt-2 border-t border-white/5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
          </div>
        </div>

        <!-- Stage 2 -->
        <div class="glass-panel rounded-2xl p-4 border-white/10 flex flex-col justify-between relative">
          <div class="w-9 h-9 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-2">
            <i data-lucide="layout" class="w-4 h-4"></i>
          </div>
          <h3 class="text-sm font-extrabold text-white mb-0.5">LANDING PAGE</h3>
          <p class="text-xs text-slate-400 mb-2">Captures interest & collects details</p>
          <div class="flex items-center gap-1.5 pt-2 border-t border-white/5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
          </div>
        </div>

        <!-- Stage 3 -->
        <div class="glass-panel rounded-2xl p-4 border-white/10 flex flex-col justify-between relative">
          <div class="flex items-center justify-between mb-2">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center">
              <i data-lucide="clipboard-list" class="w-4 h-4"></i>
            </div>
            <span class="px-2 py-0.5 rounded-full bg-rose-500/15 border border-rose-500/30 text-rose-400 text-[9px] font-bold flex items-center gap-1">
              <i data-lucide="alert-triangle" class="w-2.5 h-2.5"></i> Manual Drop
            </span>
          </div>
          <h3 class="text-sm font-extrabold text-white mb-0.5">FORM</h3>
          <p class="text-xs text-slate-400 mb-2">Captures lead information</p>
          <div class="flex items-center gap-1.5 pt-2 border-t border-white/5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
          </div>
        </div>

        <!-- Stage 4 -->
        <div class="glass-panel rounded-2xl p-4 border-white/10 flex flex-col justify-between relative">
          <div class="flex items-center justify-between mb-2">
            <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center">
              <i data-lucide="users" class="w-4 h-4"></i>
            </div>
            <span class="px-2 py-0.5 rounded-full bg-rose-500/15 border border-rose-500/30 text-rose-400 text-[9px] font-bold flex items-center gap-1">
              <i data-lucide="alert-triangle" class="w-2.5 h-2.5"></i> Disconnected
            </span>
          </div>
          <h3 class="text-sm font-extrabold text-white mb-0.5">CRM</h3>
          <p class="text-xs text-slate-400 mb-2">Stores & manages leads</p>
          <div class="flex items-center gap-1.5 pt-2 border-t border-white/5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
          </div>
        </div>

        <!-- Stage 5 -->
        <div class="glass-panel rounded-2xl p-4 border-white/10 flex flex-col justify-between relative">
          <div class="flex items-center justify-between mb-2">
            <div class="w-9 h-9 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
              <i data-lucide="mail" class="w-4 h-4"></i>
            </div>
            <span class="px-2 py-0.5 rounded-full bg-rose-500/15 border border-rose-500/30 text-rose-400 text-[9px] font-bold flex items-center gap-1">
              <i data-lucide="alert-triangle" class="w-2.5 h-2.5"></i> Delayed
            </span>
          </div>
          <h3 class="text-sm font-extrabold text-white mb-0.5">FOLLOW-UP</h3>
          <p class="text-xs text-slate-400 mb-2">Nurtures & builds relationships</p>
          <div class="flex items-center gap-1.5 pt-2 border-t border-white/5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
          </div>
        </div>

        <!-- Stage 6 -->
        <div class="glass-panel rounded-2xl p-4 border-white/10 flex flex-col justify-between relative">
          <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2">
            <i data-lucide="calendar" class="w-4 h-4"></i>
          </div>
          <h3 class="text-sm font-extrabold text-white mb-0.5">APPOINTMENT</h3>
          <p class="text-xs text-slate-400 mb-2">Turns leads into customers</p>
          <div class="flex items-center gap-1.5 pt-2 border-t border-white/5">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom Alert Callout Card: Missed Lead = Missed Revenue -->
    <div class="mt-12 sm:mt-16 flex items-center justify-center">
      <div class="inline-flex items-center gap-3.5 px-6 sm:px-8 py-3.5 sm:py-4 rounded-full bg-gradient-to-r from-rose-950/40 via-[#0C1326]/90 to-purple-950/40 border border-rose-500/30 shadow-[0_0_35px_rgba(244,63,94,0.18)] backdrop-blur-xl hover:border-rose-400/50 transition-all">
        <div class="w-8 h-8 rounded-xl bg-rose-500/20 border border-rose-500/40 text-rose-400 flex items-center justify-center shrink-0 shadow-[0_0_12px_rgba(244,63,94,0.35)]">
          <i data-lucide="alert-triangle" class="w-4 h-4"></i>
        </div>
        <div class="h-5 w-px bg-rose-500/30 hidden sm:block"></div>
        <p class="text-sm sm:text-lg font-bold text-white tracking-tight">
          Missed Lead = <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-rose-400 font-extrabold">Missed Revenue</span>
        </p>
      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 2.6 OUR SOLUTION: THE GROWXPECT GROWTH SYSTEM (MOCKUP DESIGN) -->
<!-- ========================================================================= -->
<section id="our-solution" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-b border-white/[0.06]">
  <!-- Background Glows -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/3 -left-32 w-[500px] h-[500px] bg-cyan-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute bottom-1/3 -right-32 w-[500px] h-[500px] bg-purple-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-25"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      <!-- Left Column: Copy & CTA -->
      <div class="lg:col-span-6 space-y-6 text-left">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/40 border border-cyan-500/30 text-cyan-400 text-xs font-bold uppercase tracking-wider shadow-[0_0_15px_rgba(56,197,210,0.15)]">
          {{ $cms['solution_badge'] ?? 'OUR SOLUTION' }}
        </div>

        <!-- Headline -->
        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.15]">
          The Growxpect <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">
            Growth System.
          </span>
        </h2>

        <!-- Subtitle Paragraph -->
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl">
          {{ $cms['solution_subtitle'] ?? 'We connect the dots — from first click to final sale — with high-converting funnels, smart CRM and powerful automation. Everything works together seamlessly, so you can focus on what matters most: growing your business.' }}
        </p>

        <!-- CTA Button -->
        <div class="pt-2">
          <a href="#booking" class="inline-flex items-center gap-2 px-6 sm:px-7 py-3.5 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all">
            <span>Explore Our Services</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <!-- Right Column: 4 Connected Workflow Cards -->
      <div class="lg:col-span-6 relative">

        <!-- Connecting Pipeline Spine Line -->
        <div class="absolute left-7 sm:left-8 top-10 bottom-10 w-0.5 bg-gradient-to-b from-purple-500 via-cyan-400 via-teal-400 to-purple-500 opacity-60 z-0 pointer-events-none hidden sm:block"></div>

        <!-- Stack of 4 Cards -->
        <div class="space-y-4 sm:space-y-5 relative z-10">

          <!-- 1. Funnels (Purple Border & Glow) -->
          <div class="glass-panel rounded-2xl p-4 sm:p-5 bg-[#091024]/90 border border-purple-500/40 shadow-[0_0_25px_rgba(168,85,247,0.15)] hover:border-purple-400 hover:shadow-[0_0_35px_rgba(168,85,247,0.3)] transition-all flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="filter" class="w-5 h-5"></i>
            </div>
            <div class="min-w-0 flex-1">
              <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-purple-300 transition-colors">
                {{ $cms['solution_step_1_title'] ?? 'Funnels' }}
              </h3>
              <p class="text-xs text-slate-400">
                {{ $cms['solution_step_1_desc'] ?? 'Turn visitors into leads' }}
              </p>
            </div>
          </div>

          <!-- 2. CRM (Cyan Border & Glow) -->
          <div class="glass-panel rounded-2xl p-4 sm:p-5 bg-[#091024]/90 border border-cyan-500/40 shadow-[0_0_25px_rgba(56,197,210,0.15)] hover:border-cyan-400 hover:shadow-[0_0_35px_rgba(56,197,210,0.3)] transition-all flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-cyan-500/15 border border-cyan-500/40 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="database" class="w-5 h-5"></i>
            </div>
            <div class="min-w-0 flex-1">
              <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">
                {{ $cms['solution_step_2_title'] ?? 'CRM' }}
              </h3>
              <p class="text-xs text-slate-400">
                {{ $cms['solution_step_2_desc'] ?? 'Manage & nurture leads' }}
              </p>
            </div>
          </div>

          <!-- 3. Automation (Teal Border & Glow) -->
          <div class="glass-panel rounded-2xl p-4 sm:p-5 bg-[#091024]/90 border border-teal-500/40 shadow-[0_0_25px_rgba(45,212,191,0.15)] hover:border-teal-400 hover:shadow-[0_0_35px_rgba(45,212,191,0.3)] transition-all flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-teal-500/15 border border-teal-500/40 text-teal-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(45,212,191,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="zap" class="w-5 h-5"></i>
            </div>
            <div class="min-w-0 flex-1">
              <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-teal-300 transition-colors">
                {{ $cms['solution_step_3_title'] ?? 'Automation' }}
              </h3>
              <p class="text-xs text-slate-400">
                {{ $cms['solution_step_3_desc'] ?? 'Save time, boost conversions' }}
              </p>
            </div>
          </div>

          <!-- 4. Appointments (Purple Border & Glow) -->
          <div class="glass-panel rounded-2xl p-4 sm:p-5 bg-[#091024]/90 border border-purple-500/40 shadow-[0_0_25px_rgba(168,85,247,0.15)] hover:border-purple-400 hover:shadow-[0_0_35px_rgba(168,85,247,0.3)] transition-all flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/40 text-purple-400 flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="calendar" class="w-5 h-5"></i>
            </div>
            <div class="min-w-0 flex-1">
              <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-purple-300 transition-colors">
                {{ $cms['solution_step_4_title'] ?? 'Appointments' }}
              </h3>
              <p class="text-xs text-slate-400">
                {{ $cms['solution_step_4_desc'] ?? 'Book more meetings' }}
              </p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- 4. CORE SERVICES OVERVIEW / WHAT WE DO -->
<section id="solutions" class="py-20 sm:py-28 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-14 sm:mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-4 py-1.5 rounded-full border border-cyan-500/30 shadow-[0_0_15px_rgba(56,197,210,0.15)]">
        {{ $cms['services_overview_badge'] ?? 'WHAT WE DO' }}
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        {{ $cms['services_overview_title'] ?? 'Solutions That Drive Growth' }}
      </h2>
      <p class="text-slate-400 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
        {{ $cms['services_overview_subtitle'] ?? 'Everything your business needs to attract, engage, and convert more customers — all under one cohesive strategy.' }}
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- Card 1: High-Converting Funnels -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-6 flex flex-col justify-between border-white/10 group">
        <div class="space-y-4">
          <!-- Mini UI Graphic: Funnel Mockup -->
          <div class="h-32 sm:h-36 w-full rounded-2xl bg-[#060B18] border border-white/10 p-3.5 flex flex-col justify-between overflow-hidden relative shadow-inner">
            <div class="flex items-center gap-1.5 border-b border-white/5 pb-2">
              <span class="w-2 h-2 rounded-full bg-red-400/90"></span>
              <span class="w-2 h-2 rounded-full bg-amber-400/90"></span>
              <span class="w-2 h-2 rounded-full bg-emerald-400/90"></span>
              <div class="ml-2 h-1.5 w-16 rounded-full bg-white/10"></div>
            </div>
            <div class="space-y-2 py-1">
              <div class="h-5 w-3/4 rounded-md bg-cyan-950/60 border border-cyan-500/30 px-2 flex items-center shadow-[0_0_10px_rgba(56,197,210,0.1)]"></div>
              <div class="h-1.5 w-full bg-white/10 rounded-full"></div>
              <div class="h-1.5 w-2/3 bg-white/10 rounded-full"></div>
            </div>
            <div class="h-5 w-24 rounded-md bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 self-end shadow-[0_0_15px_rgba(168,85,247,0.35)]"></div>
          </div>

          <!-- Icon Badge -->
          <div class="w-10 h-10 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shadow-[0_0_15px_rgba(56,197,210,0.2)] group-hover:scale-105 transition-transform">
            <i data-lucide="filter" class="w-4 h-4"></i>
          </div>

          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">
            {{ $cms['services_overview_service_1_title'] ?? 'High-Converting Funnels' }}
          </h3>
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['services_overview_service_1_desc'] ?? 'Strategic funnels that turn traffic into qualified leads and paying customers with frictionless UX.' }}
          </p>
        </div>

        <a href="#booking" class="pt-6 inline-flex items-center gap-1.5 text-xs font-semibold text-cyan-400 hover:text-cyan-300 group-hover:gap-2.5 transition-all">
          <span>Explore</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

      <!-- Card 2: CRM Systems (Highlighted with subtle cyan border matching mockup) -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-6 flex flex-col justify-between border-cyan-500/30 group relative shadow-[0_0_30px_rgba(56,197,210,0.08)]">
        <div class="space-y-4">
          <!-- Mini UI Graphic: Leads Pipeline -->
          <div class="h-32 sm:h-36 w-full rounded-2xl bg-[#060B18] border border-white/10 p-3 sm:p-3.5 flex flex-col justify-between overflow-hidden shadow-inner">
            <div class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">LEADS PIPELINE</div>
            <div class="space-y-1.5">
              <div class="flex items-center justify-between px-2 py-1 rounded-md bg-white/[0.04] text-[10px] border border-white/[0.05]">
                <span class="text-slate-200 font-medium">Alex Morgan</span>
                <span class="text-emerald-400 font-semibold">Qualified</span>
              </div>
              <div class="flex items-center justify-between px-2 py-1 rounded-md bg-white/[0.04] text-[10px] border border-white/[0.05]">
                <span class="text-slate-200 font-medium">TechCorp Inc.</span>
                <span class="text-cyan-400 font-semibold">Booked</span>
              </div>
              <div class="flex items-center justify-between px-2 py-1 rounded-md bg-white/[0.04] text-[10px] border border-white/[0.05]">
                <span class="text-slate-200 font-medium">Elena Rostova</span>
                <span class="text-purple-400 font-semibold">Proposal</span>
              </div>
            </div>
          </div>

          <!-- Icon Badge -->
          <div class="w-10 h-10 rounded-xl bg-blue-500/15 border border-blue-500/30 text-cyan-400 flex items-center justify-center shadow-[0_0_15px_rgba(56,197,210,0.2)] group-hover:scale-105 transition-transform">
            <i data-lucide="database" class="w-4 h-4"></i>
          </div>

          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">
            {{ $cms['services_overview_service_2_title'] ?? 'CRM Systems' }}
          </h3>
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['services_overview_service_2_desc'] ?? 'Keep your leads organized, follow up automatically, and never let high-value revenue slip through cracks.' }}
          </p>
        </div>

        <a href="#booking" class="pt-6 inline-flex items-center gap-1.5 text-xs font-semibold text-cyan-400 hover:text-cyan-300 group-hover:gap-2.5 transition-all">
          <span>Explore</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

      <!-- Card 3: Marketing Automation -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-6 flex flex-col justify-between border-white/10 group">
        <div class="space-y-4">
          <!-- Mini UI Graphic: Automation Flow -->
          <div class="h-32 sm:h-36 w-full rounded-2xl bg-[#060B18] border border-white/10 p-3 sm:p-3.5 flex flex-col justify-center items-center gap-2 overflow-hidden shadow-inner">
            <div class="px-3 py-1.5 rounded-lg bg-cyan-950/60 border border-cyan-500/40 text-[10px] text-cyan-300 font-semibold shadow-[0_0_12px_rgba(56,197,210,0.2)]">
              Trigger: New Form Submit
            </div>
            <i data-lucide="arrow-down" class="w-3.5 h-3.5 text-slate-500"></i>
            <div class="px-3 py-1.5 rounded-lg bg-purple-950/60 border border-purple-500/40 text-[10px] text-purple-300 font-semibold shadow-[0_0_12px_rgba(168,85,247,0.2)]">
              Action: Instant SMS &amp; Email
            </div>
          </div>

          <!-- Icon Badge -->
          <div class="w-10 h-10 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center shadow-[0_0_15px_rgba(168,85,247,0.2)] group-hover:scale-105 transition-transform">
            <i data-lucide="cpu" class="w-4 h-4"></i>
          </div>

          <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">
            {{ $cms['services_overview_service_3_title'] ?? 'Marketing Automation' }}
          </h3>
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['services_overview_service_3_desc'] ?? 'Automate your multi-channel follow-ups, re-engage cold leads, and scale conversion on 24/7 autopilot.' }}
          </p>
        </div>

        <a href="#booking" class="pt-6 inline-flex items-center gap-1.5 text-xs font-semibold text-cyan-400 hover:text-cyan-300 group-hover:gap-2.5 transition-all">
          <span>Explore</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

      <!-- Card 4: Lead Generation -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-6 flex flex-col justify-between border-white/10 group">
        <div class="space-y-4">
          <!-- Mini UI Graphic: Growth Velocity Bar Chart -->
          <div class="h-32 sm:h-36 w-full rounded-2xl bg-[#060B18] border border-white/10 p-3 sm:p-3.5 flex flex-col justify-between overflow-hidden shadow-inner">
            <div class="flex items-center justify-between text-[10px]">
              <span class="text-slate-400 font-medium">Growth Velocity</span>
              <span class="text-cyan-400 font-extrabold tracking-wide">+184%</span>
            </div>
            <div class="h-16 flex items-end gap-2 pt-2">
              <div class="flex-1 bg-slate-800 rounded-t-sm h-[32%]"></div>
              <div class="flex-1 bg-slate-700/70 rounded-t-sm h-[48%]"></div>
              <div class="flex-1 bg-cyan-900/80 rounded-t-sm h-[64%]"></div>
              <div class="flex-1 bg-cyan-600/90 rounded-t-sm h-[82%]"></div>
              <div class="flex-1 bg-cyan-400 rounded-t-sm h-[100%] shadow-[0_0_15px_rgba(56,197,210,0.6)]"></div>
            </div>
          </div>

          <!-- Icon Badge -->
          <div class="w-10 h-10 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shadow-[0_0_15px_rgba(56,197,210,0.2)] group-hover:scale-105 transition-transform">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
          </div>

          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">
            {{ $cms['services_overview_service_4_title'] ?? 'Lead Generation' }}
          </h3>
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['services_overview_service_4_desc'] ?? 'Drive consistent, high-converting targeted traffic with full-funnel data-driven campaign architecture.' }}
          </p>
        </div>

        <a href="#booking" class="pt-6 inline-flex items-center gap-1.5 text-xs font-semibold text-cyan-400 hover:text-cyan-300 group-hover:gap-2.5 transition-all">
          <span>Explore</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 4.5 CASE STUDIES SHOWCASE SECTION (FULL-WIDTH STATS + 2 CASE STUDY CARDS) -->
<!-- ========================================================================= -->
<section id="case-studies" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Ambient Background Glows -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-gradient-to-r from-cyan-500/10 via-purple-600/10 to-indigo-600/10 blur-[150px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-25"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12 sm:space-y-16">

    <!-- Centered Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4">

      <!-- Eyebrow Badge with Gradient Accent Lines -->
      <div class="flex items-center justify-center gap-3">
        <div class="h-0.5 w-8 sm:w-12 bg-gradient-to-r from-transparent to-cyan-400"></div>
        <span class="text-xs sm:text-sm font-extrabold tracking-widest text-cyan-400 uppercase">
          CASE STUDIES
        </span>
        <div class="h-0.5 w-8 sm:w-12 bg-gradient-to-r from-purple-400 to-transparent"></div>
      </div>

      <!-- Main Headline -->
      <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.15]">
        Growth Systems <br />
        Built To <span class="text-cyan-400">Perform</span><span class="text-purple-400">.</span>
      </h2>

      <!-- Subtitle Description -->
      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
        Real businesses. Real results. See how we've helped companies scale predictability with custom automated growth systems.
      </p>
    </div>

    <!-- Below: 2 Responsive Case Study Cards (Side by Side on Desktop) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">

      <!-- Case Study Card 1 (Healthcare / MedSpa) -->
      <div class="glass-panel rounded-3xl p-6 sm:p-8 bg-[#070D1F]/90 border border-cyan-500/30 shadow-[0_0_30px_rgba(56,197,210,0.12)] relative overflow-hidden group hover:border-cyan-400/60 transition-all flex flex-col justify-between">

        <!-- Glow Corner Accent -->
        <div class="absolute -top-12 -right-12 w-36 h-36 bg-cyan-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <div class="relative z-10">
          <!-- Card Header: Badge & Category -->
          <div class="flex items-center justify-between text-xs font-bold tracking-wider uppercase mb-3">
            <span class="text-cyan-400">CASE STUDY</span>
            <span class="text-slate-400 font-medium">HEALTHCARE / AESTHETIC</span>
          </div>

          <!-- Case Study Title & Subtitle -->
          <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 group-hover:text-cyan-300 transition-colors">
            MedSpa — Lead to Appointment
          </h3>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6">
            Built a high-converting funnel + CRM + automation system for a multi-location MedSpa, multiplying booked appointments by 312% in 60 days.
          </p>

          <!-- Before & After Comparison Pill -->
          <div class="rounded-2xl bg-[#030712]/90 border border-white/10 p-4 sm:p-5 mb-6 flex items-center justify-around">

            <!-- Before -->
            <div class="text-center">
              <span class="text-[10px] sm:text-xs text-slate-400 font-bold uppercase tracking-wider">BEFORE</span>
              <div class="text-xl sm:text-2xl font-black text-white mt-0.5">1.1%</div>
              <span class="text-[10px] text-slate-500 font-medium">Conv. Rate</span>
            </div>

            <!-- Flow Arrow -->
            <div class="w-8 h-8 rounded-full bg-cyan-500/15 border border-cyan-500/40 text-cyan-400 flex items-center justify-center shadow-[0_0_12px_rgba(56,197,210,0.3)]">
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </div>

            <!-- After -->
            <div class="text-center">
              <span class="text-[10px] sm:text-xs text-cyan-400 font-bold uppercase tracking-wider">AFTER</span>
              <div class="text-xl sm:text-2xl font-black text-cyan-300 mt-0.5">4.7%</div>
              <span class="text-[10px] text-cyan-300/80 font-medium">Conv. Rate</span>
            </div>

          </div>
        </div>

        <!-- Bottom 2 Highlight Badges -->
        <div class="grid grid-cols-2 gap-3.5 relative z-10">
          <div class="p-3.5 sm:p-4 rounded-2xl bg-[#091126] border border-cyan-500/25 flex flex-col justify-center">
            <div class="text-xl sm:text-2xl font-black text-white tracking-tight leading-none mb-1">
              312%
            </div>
            <div class="text-[11px] sm:text-xs text-slate-400 font-medium">
              More Appointments
            </div>
          </div>

          <div class="p-3.5 sm:p-4 rounded-2xl bg-[#091126] border border-cyan-500/25 flex flex-col justify-center">
            <div class="text-xl sm:text-2xl font-black text-white tracking-tight leading-none mb-1">
              60 Days
            </div>
            <div class="text-[11px] sm:text-xs text-slate-400 font-medium">
              Time to Result
            </div>
          </div>
        </div>

      </div>

      <!-- Case Study Card 2 (Home Services / HVAC) -->
      <div class="glass-panel rounded-3xl p-6 sm:p-8 bg-[#070D1F]/90 border border-purple-500/30 shadow-[0_0_30px_rgba(168,85,247,0.12)] relative overflow-hidden group hover:border-purple-400/60 transition-all flex flex-col justify-between">

        <!-- Glow Corner Accent -->
        <div class="absolute -top-12 -right-12 w-36 h-36 bg-purple-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <div class="relative z-10">
          <!-- Card Header: Badge & Category -->
          <div class="flex items-center justify-between text-xs font-bold tracking-wider uppercase mb-3">
            <span class="text-purple-400">CASE STUDY</span>
            <span class="text-slate-400 font-medium">HOME SERVICES / HVAC</span>
          </div>

          <!-- Case Study Title & Subtitle -->
          <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 group-hover:text-purple-300 transition-colors">
            Apex HVAC — Pipeline & SMS Follow-Up
          </h3>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6">
            Revamped lead capture workflows and instant SMS response automations, eliminating lost leads and boosting closed revenue by $180k.
          </p>

          <!-- Before & After Comparison Pill -->
          <div class="rounded-2xl bg-[#030712]/90 border border-white/10 p-4 sm:p-5 mb-6 flex items-center justify-around">

            <!-- Before -->
            <div class="text-center">
              <span class="text-[10px] sm:text-xs text-slate-400 font-bold uppercase tracking-wider">BEFORE</span>
              <div class="text-xl sm:text-2xl font-black text-white mt-0.5">8%</div>
              <span class="text-[10px] text-slate-500 font-medium">Close Rate</span>
            </div>

            <!-- Flow Arrow -->
            <div class="w-8 h-8 rounded-full bg-purple-500/15 border border-purple-500/40 text-purple-400 flex items-center justify-center shadow-[0_0_12px_rgba(168,85,247,0.3)]">
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </div>

            <!-- After -->
            <div class="text-center">
              <span class="text-[10px] sm:text-xs text-purple-400 font-bold uppercase tracking-wider">AFTER</span>
              <div class="text-xl sm:text-2xl font-black text-purple-300 mt-0.5">24%</div>
              <span class="text-[10px] text-purple-300/80 font-medium">Close Rate</span>
            </div>

          </div>
        </div>

        <!-- Bottom 2 Highlight Badges -->
        <div class="grid grid-cols-2 gap-3.5 relative z-10">
          <div class="p-3.5 sm:p-4 rounded-2xl bg-[#091126] border border-purple-500/25 flex flex-col justify-center">
            <div class="text-xl sm:text-2xl font-black text-white tracking-tight leading-none mb-1">
              +$180K
            </div>
            <div class="text-[11px] sm:text-xs text-slate-400 font-medium">
              Pipeline Revenue
            </div>
          </div>

          <div class="p-3.5 sm:p-4 rounded-2xl bg-[#091126] border border-purple-500/25 flex flex-col justify-center">
            <div class="text-xl sm:text-2xl font-black text-white tracking-tight leading-none mb-1">
              45 Days
            </div>
            <div class="text-[11px] sm:text-xs text-slate-400 font-medium">
              Time to Result
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- Centered View All Case Studies Button -->
    <div class="text-center pt-2">
      <a href="{{ url('/case-studies') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full bg-white/[0.05] hover:bg-white/[0.1] border border-white/15 text-white font-bold text-sm shadow-lg hover:border-cyan-400/50 hover:shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all group">
        <span>View All Case Studies</span>
        <i data-lucide="arrow-right" class="w-4 h-4 text-cyan-400 transition-transform group-hover:translate-x-1.5"></i>
      </a>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 4.5 TESTIMONIALS SLIDER & FEATURED DOCUMENTARY (MATCHING MOCKUP) -->
<!-- ========================================================================= -->
<section id="testimonials" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Background Glow -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/3 left-1/3 w-[600px] h-[350px] bg-cyan-500/10 blur-[140px] rounded-full"></div>
    <div class="absolute bottom-10 right-10 w-[500px] h-[350px] bg-purple-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-20"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section Header (Centered) -->
    <div class="text-center max-w-4xl mx-auto space-y-4 mb-16">
      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
        <span class="inline-block sm:whitespace-nowrap">Trusted by Businesses, Across</span><br class="hidden sm:inline" />
        <span class="inline-block">Industries.</span>
      </h2>
      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
        Real people. Real results. Here's what our clients have to say about working with Growxpect.
      </p>
    </div>

    <!-- Main Grid: Left/Center Slider (8 cols) + Right Documentary Card (4 cols) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">

      <!-- LEFT & CENTER: Slider Area (lg:col-span-8) -->
      <div class="lg:col-span-8 flex flex-col justify-between space-y-4">

        <!-- Top Navigation Bar: Counter (Left) + Arrows (Right) -->
        <div class="flex items-center justify-between px-1">
          <!-- Slide Counter -->
          <div class="text-sm font-semibold tracking-wider font-mono">
            <span id="t-counter-current" class="text-cyan-400 font-bold text-base">01</span>
            <span class="text-slate-500"> / </span>
            <span id="t-counter-total" class="text-slate-500">04</span>
          </div>

          <!-- Arrow Controls -->
          <div class="flex items-center gap-2">
            <button id="t-prev-btn" aria-label="Previous Slide" class="w-9 h-9 rounded-full border border-white/10 bg-[#091024] hover:bg-white/10 text-slate-300 hover:text-white flex items-center justify-center transition-all active:scale-90 hover:border-cyan-400/40">
              <i data-lucide="chevron-left" class="w-4 h-4"></i>
            </button>
            <button id="t-next-btn" aria-label="Next Slide" class="w-9 h-9 rounded-full border border-white/10 bg-[#091024] hover:bg-white/10 text-slate-300 hover:text-white flex items-center justify-center transition-all active:scale-90 hover:border-cyan-400/40">
              <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>
        </div>

        <!-- Slider Viewport Container -->
        <div class="relative overflow-hidden rounded-3xl" id="t-slider-container">
          <div id="t-slider-track" class="flex transition-transform duration-500 ease-out">

            <!-- SLIDE 1: PrimeEstates (Real Estate) -->
            <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
              <!-- Quote Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl relative">
                <div>
                  <div class="flex items-center justify-between mb-5">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center shadow-[0_0_15px_rgba(168,85,247,0.25)]">
                      <i data-lucide="quote" class="w-5 h-5"></i>
                    </div>
                    <div class="flex items-center gap-1 text-amber-400">
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                    </div>
                  </div>
                  <p class="text-slate-200 italic text-sm sm:text-base leading-relaxed">
                    "In luxury real estate, responding in 2 minutes vs 2 hours is the difference between closing a $3M buyer or losing them. Growxpect's instant WhatsApp qualification made us unstoppable."
                  </p>
                </div>
                <div class="pt-5 mt-5 border-t border-white/[0.08] flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-purple-600 to-indigo-600 text-white font-bold text-xs flex items-center justify-center border border-purple-400/40 shadow-sm">
                      DK
                    </div>
                    <div>
                      <h4 class="text-sm font-bold text-white leading-tight">David Kensington</h4>
                      <p class="text-[11px] text-slate-400">Managing Broker, PrimeEstates</p>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/25 text-cyan-300 text-[10px] font-semibold">
                    Verified
                  </span>
                </div>
              </div>

              <!-- Results Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl">
                <div>
                  <div class="flex items-center justify-between mb-4 pb-2 border-b border-white/5">
                    <span class="text-[11px] font-extrabold uppercase tracking-wider text-cyan-400">THE RESULTS</span>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">REAL ESTATE</span>
                  </div>
                  <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-white leading-tight">+195%</div>
                      <div class="text-xs text-slate-400 mt-0.5">High-Net Inquiries</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-cyan-300 leading-tight">&lt;45s</div>
                      <div class="text-xs text-slate-400 mt-0.5">Instant WhatsApp Speed</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-emerald-400 leading-tight">$3.2M</div>
                      <div class="text-xs text-slate-400 mt-0.5">Closed Properties</div>
                    </div>
                  </div>
                </div>
                <div class="pt-3 text-right">
                  <span class="text-[10px] text-slate-500 font-medium">Verified Agency Audit</span>
                </div>
              </div>
            </div>

            <!-- SLIDE 2: NovaHealth (MedSpa & Healthcare) -->
            <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
              <!-- Quote Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl relative">
                <div>
                  <div class="flex items-center justify-between mb-5">
                    <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shadow-[0_0_15px_rgba(56,197,210,0.25)]">
                      <i data-lucide="quote" class="w-5 h-5"></i>
                    </div>
                    <div class="flex items-center gap-1 text-amber-400">
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                    </div>
                  </div>
                  <p class="text-slate-200 italic text-sm sm:text-base leading-relaxed">
                    "Before Growxpect, patient inquiries were dropping off because our front desk couldn't keep up. Their automated system booked 42 qualified consultations in our first 30 days."
                  </p>
                </div>
                <div class="pt-5 mt-5 border-t border-white/[0.08] flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-cyan-600 to-blue-600 text-white font-bold text-xs flex items-center justify-center border border-cyan-400/40 shadow-sm">
                      SJ
                    </div>
                    <div>
                      <h4 class="text-sm font-bold text-white leading-tight">Sarah Johnson</h4>
                      <p class="text-[11px] text-slate-400">Clinical Director, NovaHealth</p>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/25 text-cyan-300 text-[10px] font-semibold">
                    Verified
                  </span>
                </div>
              </div>

              <!-- Results Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl">
                <div>
                  <div class="flex items-center justify-between mb-4 pb-2 border-b border-white/5">
                    <span class="text-[11px] font-extrabold uppercase tracking-wider text-cyan-400">THE RESULTS</span>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">HEALTHCARE</span>
                  </div>
                  <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-white leading-tight">+42%</div>
                      <div class="text-xs text-slate-400 mt-0.5">Qualified Consultations</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-cyan-300 leading-tight">+312%</div>
                      <div class="text-xs text-slate-400 mt-0.5">Show-Up Rate</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-emerald-400 leading-tight">&lt;2min</div>
                      <div class="text-xs text-slate-400 mt-0.5">Lead Response Time</div>
                    </div>
                  </div>
                </div>
                <div class="pt-3 text-right">
                  <span class="text-[10px] text-slate-500 font-medium">Verified Agency Audit</span>
                </div>
              </div>
            </div>

            <!-- SLIDE 3: CloudScale AI (B2B SaaS) -->
            <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
              <!-- Quote Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl relative">
                <div>
                  <div class="flex items-center justify-between mb-5">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/20 border border-indigo-500/30 text-indigo-400 flex items-center justify-center shadow-[0_0_15px_rgba(99,102,241,0.25)]">
                      <i data-lucide="quote" class="w-5 h-5"></i>
                    </div>
                    <div class="flex items-center gap-1 text-amber-400">
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                    </div>
                  </div>
                  <p class="text-slate-200 italic text-sm sm:text-base leading-relaxed">
                    "Our outbound sales team was spending 60% of their day on manual follow-ups. Growxpect's AI workflows tripled our qualified demo pipeline in under 60 days."
                  </p>
                </div>
                <div class="pt-5 mt-5 border-t border-white/[0.08] flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-600 to-purple-600 text-white font-bold text-xs flex items-center justify-center border border-indigo-400/40 shadow-sm">
                      MR
                    </div>
                    <div>
                      <h4 class="text-sm font-bold text-white leading-tight">Marcus Reed</h4>
                      <p class="text-[11px] text-slate-400">VP of Growth, CloudScale AI</p>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/25 text-cyan-300 text-[10px] font-semibold">
                    Verified
                  </span>
                </div>
              </div>

              <!-- Results Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl">
                <div>
                  <div class="flex items-center justify-between mb-4 pb-2 border-b border-white/5">
                    <span class="text-[11px] font-extrabold uppercase tracking-wider text-cyan-400">THE RESULTS</span>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">B2B SAAS</span>
                  </div>
                  <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-white leading-tight">+240%</div>
                      <div class="text-xs text-slate-400 mt-0.5">Demo Pipeline</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-cyan-300 leading-tight">88.4%</div>
                      <div class="text-xs text-slate-400 mt-0.5">Show-Up Rate</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-emerald-400 leading-tight">4.2x</div>
                      <div class="text-xs text-slate-400 mt-0.5">Customer ROI</div>
                    </div>
                  </div>
                </div>
                <div class="pt-3 text-right">
                  <span class="text-[10px] text-slate-500 font-medium">Verified Agency Audit</span>
                </div>
              </div>
            </div>

            <!-- SLIDE 4: Apex Climate (Home Services) -->
            <div class="w-full shrink-0 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
              <!-- Quote Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl relative">
                <div>
                  <div class="flex items-center justify-between mb-5">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center shadow-[0_0_15px_rgba(16,185,129,0.25)]">
                      <i data-lucide="quote" class="w-5 h-5"></i>
                    </div>
                    <div class="flex items-center gap-1 text-amber-400">
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                      <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                    </div>
                  </div>
                  <p class="text-slate-200 italic text-sm sm:text-base leading-relaxed">
                    "Growxpect transformed our seasonal HVAC business into an all-year revenue machine. The automated SMS dispatch and quote funnels doubled our emergency booked calls."
                  </p>
                </div>
                <div class="pt-5 mt-5 border-t border-white/[0.08] flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-emerald-600 to-teal-600 text-white font-bold text-xs flex items-center justify-center border border-emerald-400/40 shadow-sm">
                      MT
                    </div>
                    <div>
                      <h4 class="text-sm font-bold text-white leading-tight">Marcus Torres</h4>
                      <p class="text-[11px] text-slate-400">Operations Director, Apex Services</p>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/25 text-cyan-300 text-[10px] font-semibold">
                    Verified
                  </span>
                </div>
              </div>

              <!-- Results Card -->
              <div class="bg-[#0a0f1d] border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-2xl">
                <div>
                  <div class="flex items-center justify-between mb-4 pb-2 border-b border-white/5">
                    <span class="text-[11px] font-extrabold uppercase tracking-wider text-cyan-400">THE RESULTS</span>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">HOME SERVICES</span>
                  </div>
                  <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-white leading-tight">+$180K</div>
                      <div class="text-xs text-slate-400 mt-0.5">Pipeline Revenue</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-cyan-300 leading-tight">+140%</div>
                      <div class="text-xs text-slate-400 mt-0.5">Emergency Bookings</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#060a14] border border-white/5">
                      <div class="text-2xl sm:text-3xl font-black text-emerald-400 leading-tight">45 Days</div>
                      <div class="text-xs text-slate-400 mt-0.5">Time to Result</div>
                    </div>
                  </div>
                </div>
                <div class="pt-3 text-right">
                  <span class="text-[10px] text-slate-500 font-medium">Verified Agency Audit</span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Slider Pagination Indicator Dots -->
        <div class="flex items-center gap-2 pt-2" id="t-dots-container">
          <button class="t-dot h-2 rounded-full transition-all duration-300 w-6 bg-cyan-400 shadow-[0_0_10px_#38C5D2]" data-index="0" aria-label="Go to slide 1"></button>
          <button class="t-dot h-2 rounded-full transition-all duration-300 w-2 bg-slate-700 hover:bg-slate-500" data-index="1" aria-label="Go to slide 2"></button>
          <button class="t-dot h-2 rounded-full transition-all duration-300 w-2 bg-slate-700 hover:bg-slate-500" data-index="2" aria-label="Go to slide 3"></button>
          <button class="t-dot h-2 rounded-full transition-all duration-300 w-2 bg-slate-700 hover:bg-slate-500" data-index="3" aria-label="Go to slide 4"></button>
        </div>

      </div>

      <!-- RIGHT COLUMN: Featured Documentary Card (lg:col-span-4) -->
      <div class="lg:col-span-4 flex">
        <div class="w-full relative bg-gradient-to-b from-[#0a1122] to-[#050813] border border-cyan-500/20 rounded-3xl p-6 sm:p-7 flex flex-col justify-between overflow-hidden shadow-2xl group">
          <!-- Background Glow Elements -->
          <div class="absolute -top-12 -right-12 w-44 h-44 bg-cyan-500/15 blur-[70px] rounded-full pointer-events-none"></div>
          <div class="absolute -bottom-12 -left-12 w-44 h-44 bg-purple-600/15 blur-[70px] rounded-full pointer-events-none"></div>

          <!-- Video Mockup / Play Box -->
          <div class="w-full aspect-[4/3] rounded-2xl bg-[#040711]/90 border border-white/10 flex items-center justify-center relative overflow-hidden my-auto group/vid cursor-pointer">
            <!-- Subtle backdrop icon -->
            <i data-lucide="video" class="w-24 h-24 text-white/[0.04] absolute"></i>

            <!-- Glowing Play Button with Ripple Animation -->
            <div class="relative flex items-center justify-center z-10">
              <span class="absolute inline-flex h-16 w-16 rounded-full bg-cyan-400/30 animate-ping"></span>
              <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-cyan-500 to-blue-600 border border-cyan-300 flex items-center justify-center text-white shadow-[0_0_30px_rgba(56,197,210,0.6)] group-hover/vid:scale-110 group-hover/vid:shadow-[0_0_40px_rgba(56,197,210,0.9)] transition-all">
                <i data-lucide="play" class="w-6 h-6 fill-white translate-x-0.5"></i>
              </div>
            </div>
          </div>

          <!-- Bottom Text Meta -->
          <div class="space-y-2.5 pt-6 relative z-10">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 text-[10px] font-extrabold uppercase tracking-wider">
              <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
              <span>FEATURED DOCUMENTARY</span>
            </div>
            <h3 class="text-xl font-extrabold text-white leading-snug">
              Watch Client Growth Story
            </h3>
            <p class="text-xs text-slate-400 leading-relaxed">
              See how our custom funnel & CRM systems generated over $12M+ in client revenue (Full Video &bull; 4min).
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. OUR PROCESS (REDESIGNED MATCHING MOCKUP) -->
<!-- ========================================================================= -->
<section id="process" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Ambient Background Glow & Grid Accents -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[550px] h-[350px] bg-purple-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[550px] h-[350px] bg-cyan-500/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-20"></div>

    <!-- Decorative Corner Dot Matrices -->
    <div class="absolute top-10 left-10 hidden sm:grid grid-cols-4 gap-2 opacity-25">
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
    </div>
    <div class="absolute top-10 right-10 hidden sm:grid grid-cols-4 gap-2 opacity-25">
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section Header (Centered) -->
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <!-- Tag with horizontal gradient lines -->
      <div class="flex items-center justify-center gap-3">
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-transparent to-cyan-400"></div>
        <span class="text-xs sm:text-sm font-extrabold tracking-widest text-cyan-400 uppercase">
          {{ $cms['process_badge'] ?? 'OUR PROCESS' }}
        </span>
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-purple-500 to-transparent"></div>
      </div>

      <!-- Main Headline -->
      <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
        From Strategy to <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-indigo-300 to-cyan-400">Growth.</span>
      </h2>

      <!-- Subtitle -->
      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto">
        {{ $cms['process_subtitle'] ?? 'A simple, structured process designed to turn your goals into a scalable growth system.' }}
      </p>
    </div>

    <!-- 4 Connected Process Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">

      <!-- Background Connecting Line (Desktop) -->
      <div class="hidden lg:block absolute top-[52%] left-[12%] right-[12%] h-0.5 bg-gradient-to-r from-purple-500/30 via-cyan-400/40 to-emerald-400/30 z-0 pointer-events-none"></div>

      <!-- STEP 1: DISCOVER -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.2)] transition-all group min-h-[320px] relative z-10">
        <div>
          <!-- Icon Box -->
          <div class="w-12 h-12 rounded-2xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-110 transition-transform">
            <i data-lucide="search" class="w-5 h-5"></i>
          </div>

          <!-- Step Number -->
          <div class="text-2xl sm:text-3xl font-black text-purple-400 mb-1 tracking-tight">01</div>

          <!-- Title -->
          <h3 class="text-sm sm:text-base font-extrabold text-white tracking-wider uppercase mb-2">
            {{ $cms['process_step_1_title'] ?? 'DISCOVER' }}
          </h3>

          <!-- Description -->
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['process_step_1_desc'] ?? 'Understand your goals, audience & current funnel.' }}
          </p>
        </div>

        <!-- Bottom Milestone Progress (Dot 1 Active) -->
        <div class="pt-6 mt-6 border-t border-white/5 flex items-center gap-2">
          <span class="w-3.5 h-3.5 rounded-full bg-purple-500 ring-4 ring-purple-500/25 shadow-[0_0_8px_#A855F7]"></span>
          <div class="h-0.5 w-3 bg-slate-800"></div>
          <span class="w-2 h-2 rounded-full bg-slate-700/60"></span>
          <div class="h-0.5 w-3 bg-slate-800"></div>
          <span class="w-2 h-2 rounded-full bg-slate-700/60"></span>
          <div class="h-0.5 w-3 bg-slate-800"></div>
          <span class="w-2 h-2 rounded-full bg-slate-700/60"></span>
        </div>

        <!-- Arrow Connector 1 (Desktop) -->
        <div class="hidden lg:flex absolute top-1/2 -right-3.5 -translate-y-1/2 z-20 items-center justify-center">
          <div class="w-7 h-7 rounded-full bg-[#080d1e] border border-cyan-400/40 text-cyan-400 flex items-center justify-center shadow-[0_0_12px_rgba(56,197,210,0.35)] group-hover:border-cyan-400 group-hover:scale-110 transition-all">
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </div>
        </div>
      </div>

      <!-- STEP 2: STRATEGIZE -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-indigo-500/40 hover:shadow-[0_0_30px_rgba(99,102,241,0.2)] transition-all group min-h-[320px] relative z-10">
        <div>
          <!-- Icon Box -->
          <div class="w-12 h-12 rounded-2xl bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(99,102,241,0.25)] group-hover:scale-110 transition-transform">
            <i data-lucide="compass" class="w-5 h-5"></i>
          </div>

          <!-- Step Number -->
          <div class="text-2xl sm:text-3xl font-black text-indigo-400 mb-1 tracking-tight">02</div>

          <!-- Title -->
          <h3 class="text-sm sm:text-base font-extrabold text-white tracking-wider uppercase mb-2">
            {{ $cms['process_step_2_title'] ?? 'STRATEGIZE' }}
          </h3>

          <!-- Description -->
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['process_step_2_desc'] ?? 'Design the right customer journey.' }}
          </p>
        </div>

        <!-- Bottom Milestone Progress (Dot 2 Active) -->
        <div class="pt-6 mt-6 border-t border-white/5 flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-purple-500"></span>
          <div class="h-0.5 w-3 bg-purple-500/40"></div>
          <span class="w-3.5 h-3.5 rounded-full bg-cyan-400 ring-4 ring-cyan-400/25 shadow-[0_0_8px_#38C5D2]"></span>
          <div class="h-0.5 w-3 bg-slate-800"></div>
          <span class="w-2 h-2 rounded-full bg-slate-700/60"></span>
          <div class="h-0.5 w-3 bg-slate-800"></div>
          <span class="w-2 h-2 rounded-full bg-slate-700/60"></span>
        </div>

        <!-- Arrow Connector 2 (Desktop) -->
        <div class="hidden lg:flex absolute top-1/2 -right-3.5 -translate-y-1/2 z-20 items-center justify-center">
          <div class="w-7 h-7 rounded-full bg-[#080d1e] border border-cyan-400/40 text-cyan-400 flex items-center justify-center shadow-[0_0_12px_rgba(56,197,210,0.35)] group-hover:border-cyan-400 group-hover:scale-110 transition-all">
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </div>
        </div>
      </div>

      <!-- STEP 3: BUILD -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.2)] transition-all group min-h-[320px] relative z-10">
        <div>
          <!-- Icon Box -->
          <div class="w-12 h-12 rounded-2xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-110 transition-transform">
            <i data-lucide="layers" class="w-5 h-5"></i>
          </div>

          <!-- Step Number -->
          <div class="text-2xl sm:text-3xl font-black text-cyan-400 mb-1 tracking-tight">03</div>

          <!-- Title -->
          <h3 class="text-sm sm:text-base font-extrabold text-white tracking-wider uppercase mb-2">
            {{ $cms['process_step_3_title'] ?? 'BUILD' }}
          </h3>

          <!-- Description -->
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['process_step_3_desc'] ?? 'Build funnels, CRM & automation.' }}
          </p>
        </div>

        <!-- Bottom Milestone Progress (Dot 3 Active) -->
        <div class="pt-6 mt-6 border-t border-white/5 flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-purple-500"></span>
          <div class="h-0.5 w-3 bg-purple-500/40"></div>
          <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
          <div class="h-0.5 w-3 bg-indigo-400/40"></div>
          <span class="w-3.5 h-3.5 rounded-full bg-cyan-400 ring-4 ring-cyan-400/25 shadow-[0_0_8px_#38C5D2]"></span>
          <div class="h-0.5 w-3 bg-slate-800"></div>
          <span class="w-2 h-2 rounded-full bg-slate-700/60"></span>
        </div>

        <!-- Arrow Connector 3 (Desktop) -->
        <div class="hidden lg:flex absolute top-1/2 -right-3.5 -translate-y-1/2 z-20 items-center justify-center">
          <div class="w-7 h-7 rounded-full bg-[#080d1e] border border-cyan-400/40 text-cyan-400 flex items-center justify-center shadow-[0_0_12px_rgba(56,197,210,0.35)] group-hover:border-cyan-400 group-hover:scale-110 transition-all">
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </div>
        </div>
      </div>

      <!-- STEP 4: OPTIMIZE -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-emerald-500/40 hover:shadow-[0_0_30px_rgba(16,185,129,0.2)] transition-all group min-h-[320px] relative z-10">
        <div>
          <!-- Icon Box -->
          <div class="w-12 h-12 rounded-2xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(16,185,129,0.25)] group-hover:scale-110 transition-transform">
            <i data-lucide="trending-up" class="w-5 h-5"></i>
          </div>

          <!-- Step Number -->
          <div class="text-2xl sm:text-3xl font-black text-emerald-400 mb-1 tracking-tight">04</div>

          <!-- Title -->
          <h3 class="text-sm sm:text-base font-extrabold text-white tracking-wider uppercase mb-2">
            {{ $cms['process_step_4_title'] ?? 'OPTIMIZE' }}
          </h3>

          <!-- Description -->
          <p class="text-xs text-slate-400 leading-relaxed">
            {{ $cms['process_step_4_desc'] ?? 'Track performance and improve conversions.' }}
          </p>
        </div>

        <!-- Bottom Milestone Progress (Dot 4 Active - All Completed) -->
        <div class="pt-6 mt-6 border-t border-white/5 flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-purple-500"></span>
          <div class="h-0.5 w-3 bg-purple-500/40"></div>
          <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
          <div class="h-0.5 w-3 bg-indigo-400/40"></div>
          <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
          <div class="h-0.5 w-3 bg-cyan-400/40"></div>
          <span class="w-3.5 h-3.5 rounded-full bg-emerald-400 ring-4 ring-emerald-400/25 shadow-[0_0_8px_#10B981]"></span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 5.5 OUR GROWTH SYSTEM: PREDICTABLE GROWTH ENGINE (MATCHING MOCKUP) -->
<!-- ========================================================================= -->
<section id="growth-system" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Ambient Background Glow & Grids -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[600px] h-[350px] bg-cyan-500/10 blur-[140px] rounded-full"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[600px] h-[350px] bg-purple-600/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-20"></div>

    <!-- Decorative Corner Dot Matrices -->
    <div class="absolute top-10 left-10 hidden sm:grid grid-cols-4 gap-2 opacity-25">
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
    </div>
    <div class="absolute top-10 right-10 hidden sm:grid grid-cols-4 gap-2 opacity-25">
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section Header (Centered) -->
    <div class="text-center max-w-4xl mx-auto space-y-4 mb-16 sm:mb-20">
      <!-- Tag with horizontal gradient lines -->
      <div class="flex items-center justify-center gap-3">
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-transparent to-cyan-400"></div>
        <span class="text-xs sm:text-sm font-extrabold tracking-widest text-cyan-400 uppercase">
          OUR GROWTH SYSTEM
        </span>
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-purple-500 to-transparent"></div>
      </div>

      <!-- Main Headline (Locked to 2 Lines Max) -->
      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
        <span class="inline-block sm:whitespace-nowrap">Everything You Need to Build a</span><br class="hidden sm:inline" />
        <span class="inline-block sm:whitespace-nowrap text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-indigo-300 to-cyan-400">Predictable Growth Engine.</span>
      </h2>

      <!-- Subtitle -->
      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
        From attracting the right prospects to converting leads and automating follow-up, we connect every stage of your customer journey into one scalable system.
      </p>
    </div>

    <!-- 3 Connected Growth Engine Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch relative">

      <!-- CARD 1: ATTRACT -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-8 flex flex-col justify-between hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.2)] transition-all group relative">
        <div class="space-y-6">
          <!-- Top Row: Icon + Visual Diagram -->
          <div class="flex items-start justify-between gap-3 min-h-[100px]">
            <!-- Icon Badge -->
            <div class="w-13 h-13 rounded-2xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center p-3 shadow-[0_0_15px_rgba(168,85,247,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="magnet" class="w-6 h-6"></i>
            </div>

            <!-- Visual Flow Graphic: Audience to Landing Page -->
            <div class="flex items-center gap-2 bg-[#060a15]/80 border border-white/5 rounded-2xl p-2.5 px-3">
              <!-- Audience stream -->
              <div class="flex flex-col gap-1 text-purple-400">
                <i data-lucide="user" class="w-3.5 h-3.5"></i>
                <i data-lucide="user" class="w-3.5 h-3.5 text-cyan-400"></i>
                <i data-lucide="user" class="w-3.5 h-3.5 text-indigo-400"></i>
                <i data-lucide="user" class="w-3.5 h-3.5 text-purple-300"></i>
              </div>

              <!-- Stream connector dots -->
              <div class="flex flex-col items-center gap-1.5 px-1">
                <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
                <span class="w-1 h-1 rounded-full bg-purple-400"></span>
                <span class="w-1 h-1 rounded-full bg-indigo-400"></span>
              </div>

              <!-- Mini Landing Page Card -->
              <div class="w-12 h-16 rounded-xl bg-[#091024] border border-cyan-500/30 p-1 flex flex-col justify-between shadow-md">
                <div class="w-full h-5 rounded-lg bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center text-cyan-400">
                  <i data-lucide="image" class="w-3 h-3"></i>
                </div>
                <div class="space-y-1">
                  <div class="w-full h-1 rounded bg-white/20"></div>
                  <div class="w-3/4 h-1 rounded bg-white/10"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Step Number & Headings -->
          <div>
            <div class="text-2xl sm:text-3xl font-black text-purple-400 mb-1">01</div>
            <h3 class="text-xl font-extrabold text-white tracking-tight uppercase mb-2">ATTRACT</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Get in front of the right audience with targeted campaigns and high-converting assets.
            </p>
          </div>
        </div>

        <!-- Checklist Footer -->
        <div class="pt-6 mt-6 border-t border-white/[0.08] space-y-2.5">
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Lead Generation</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Paid Traffic</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Landing Pages</span>
          </div>
        </div>

        <!-- Arrow Connector 1 (Desktop) -->
        <div class="hidden lg:flex absolute top-1/2 -right-4 -translate-y-1/2 z-20 items-center justify-center">
          <div class="w-8 h-8 rounded-full bg-[#080d1e] border border-cyan-400/40 text-cyan-400 flex items-center justify-center shadow-[0_0_15px_rgba(56,197,210,0.35)] group-hover:border-cyan-400 group-hover:scale-110 transition-all">
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </div>
        </div>
      </div>

      <!-- CARD 2: CONVERT -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-8 flex flex-col justify-between hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.2)] transition-all group relative">
        <div class="space-y-6">
          <!-- Top Row: Icon + Funnel Diagram -->
          <div class="flex items-start justify-between gap-3 min-h-[100px]">
            <!-- Icon Badge -->
            <div class="w-13 h-13 rounded-2xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center p-3 shadow-[0_0_15px_rgba(56,197,210,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="filter" class="w-6 h-6"></i>
            </div>

            <!-- Multi-Stage Funnel Graphic -->
            <div class="flex items-center gap-3 bg-[#060a15]/80 border border-white/5 rounded-2xl p-2.5 px-3">
              <!-- Tapered funnel shapes -->
              <div class="flex flex-col items-center gap-1">
                <div class="w-14 h-2.5 rounded-sm bg-purple-500/80 shadow-sm"></div>
                <div class="w-11 h-2.5 rounded-sm bg-indigo-500/80 shadow-sm"></div>
                <div class="w-8 h-2.5 rounded-sm bg-cyan-500/80 shadow-sm"></div>
                <div class="w-4 h-2.5 rounded-sm bg-teal-400/80 shadow-sm"></div>
              </div>

              <!-- Stage labels -->
              <div class="flex flex-col gap-1 text-[9px] font-semibold text-slate-300">
                <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>Lead</span>
                <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>Contacted</span>
                <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>Qualified</span>
                <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-teal-400"></span>Booked</span>
              </div>
            </div>
          </div>

          <!-- Step Number & Headings -->
          <div>
            <div class="text-2xl sm:text-3xl font-black text-cyan-400 mb-1">02</div>
            <h3 class="text-xl font-extrabold text-white tracking-tight uppercase mb-2">CONVERT</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Turn interested visitors into qualified leads and booked appointments.
            </p>
          </div>
        </div>

        <!-- Checklist Footer -->
        <div class="pt-6 mt-6 border-t border-white/[0.08] space-y-2.5">
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Funnels</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>CRM</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Appointment Booking</span>
          </div>
        </div>

        <!-- Arrow Connector 2 (Desktop) -->
        <div class="hidden lg:flex absolute top-1/2 -right-4 -translate-y-1/2 z-20 items-center justify-center">
          <div class="w-8 h-8 rounded-full bg-[#080d1e] border border-cyan-400/40 text-cyan-400 flex items-center justify-center shadow-[0_0_15px_rgba(56,197,210,0.35)] group-hover:border-cyan-400 group-hover:scale-110 transition-all">
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </div>
        </div>
      </div>

      <!-- CARD 3: AUTOMATE -->
      <div class="bg-[#0a0f20]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-8 flex flex-col justify-between hover:border-indigo-500/40 hover:shadow-[0_0_30px_rgba(99,102,241,0.2)] transition-all group relative">
        <div class="space-y-6">
          <!-- Top Row: Icon + Automation Channels Tree -->
          <div class="flex items-start justify-between gap-3 min-h-[100px]">
            <!-- Icon Badge -->
            <div class="w-13 h-13 rounded-2xl bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 flex items-center justify-center p-3 shadow-[0_0_15px_rgba(99,102,241,0.25)] group-hover:scale-105 transition-transform">
              <i data-lucide="settings" class="w-6 h-6"></i>
            </div>

            <!-- Automation Multi-Pill Tree -->
            <div class="flex flex-col gap-1.5 bg-[#060a15]/80 border border-white/5 rounded-2xl p-2 px-3">
              <div class="flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-white/5 border border-white/5 text-[9px] text-slate-200">
                <i data-lucide="mail" class="w-3 h-3 text-purple-400"></i>
                <span>Email</span>
              </div>
              <div class="flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-white/5 border border-white/5 text-[9px] text-slate-200">
                <i data-lucide="message-square" class="w-3 h-3 text-cyan-400"></i>
                <span>SMS</span>
              </div>
              <div class="flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-white/5 border border-white/5 text-[9px] text-slate-200">
                <i data-lucide="clock" class="w-3 h-3 text-indigo-400"></i>
                <span>Follow-Up</span>
              </div>
              <div class="flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-white/5 border border-white/5 text-[9px] text-slate-200">
                <i data-lucide="user-check" class="w-3 h-3 text-teal-400"></i>
                <span>Nurturing</span>
              </div>
            </div>
          </div>

          <!-- Step Number & Headings -->
          <div>
            <div class="text-2xl sm:text-3xl font-black text-indigo-400 mb-1">03</div>
            <h3 class="text-xl font-extrabold text-white tracking-tight uppercase mb-2">AUTOMATE</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Nurture leads, re-engage prospects and maximize revenue with intelligent automation.
            </p>
          </div>
        </div>

        <!-- Checklist Footer -->
        <div class="pt-6 mt-6 border-t border-white/[0.08] space-y-2.5">
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Email</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>SMS</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Follow-Up</span>
          </div>
          <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-200 font-medium">
            <div class="w-4 h-4 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check" class="w-3 h-3"></i>
            </div>
            <span>Nurturing</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 6. DYNAMIC PRICING TIERS SECTION -->
<section id="pricing" class="py-20 sm:py-28 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/40 border border-cyan-500/30 text-cyan-400 text-xs font-semibold uppercase tracking-wider">
        <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
        TRANSPARENT GROWTH TIERS
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        Simple, Value-Driven Investment For <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">Predictable Revenue</span>
      </h2>
      <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
        Choose the growth architecture that matches your current stage. Every system is custom-built and engineered for high conversion.
      </p>
    </div>

    <!-- 3 Tier Pricing Grid (Dynamic from Database) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
      @if(isset($pricingPlans) && count($pricingPlans) > 0)
        @foreach($pricingPlans as $plan)
          <div class="glass-panel {{ $plan->is_popular ? 'border-2 border-cyan-400/60 shadow-[0_0_50px_rgba(56,197,210,0.25)] lg:-translate-y-2 bg-[#091226]/90' : 'glass-panel-hover border-white/10' }} rounded-3xl p-8 flex flex-col justify-between relative group">

            @if($plan->is_popular)
              <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white text-[11px] font-extrabold uppercase tracking-wider shadow-glow-cyan flex items-center gap-1.5">
                <i data-lucide="sparkles" class="w-3.5 h-3.5 text-cyan-200"></i>
                <span>{{ $plan->badge ?? 'Most Popular • Complete System' }}</span>
              </div>
            @endif

            <div class="space-y-6 {{ $plan->is_popular ? 'pt-2' : '' }}">
              <div class="flex items-center justify-between">
                <div class="w-12 h-12 rounded-2xl {{ $plan->is_popular ? 'bg-gradient-to-br from-cyan-500/30 to-purple-600/30 border border-cyan-400/50 text-cyan-300 shadow-glow-cyan' : 'bg-cyan-500/15 border border-cyan-500/30 text-cyan-400' }} flex items-center justify-center">
                  <i data-lucide="{{ $plan->is_popular ? 'zap' : 'filter' }}" class="w-6 h-6"></i>
                </div>
                <span class="text-xs font-semibold px-3 py-1 rounded-full {{ $plan->is_popular ? 'bg-cyan-500/20 border border-cyan-400/40 text-cyan-300' : 'bg-white/5 border border-white/10 text-slate-400' }}">
                  {{ $plan->badge ?? 'Foundation' }}
                </span>
              </div>

              <div>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">{{ $plan->name }}</h3>
                <p class="text-xs text-slate-400 leading-relaxed min-h-[36px]">{{ $plan->description }}</p>
              </div>

              <!-- Price Box -->
              <div class="pt-4 pb-2 border-y border-white/[0.08]">
                <div class="flex items-baseline gap-1.5">
                  <span class="text-3xl sm:text-4xl font-extrabold text-white">{{ $plan->price }}</span>
                  <span class="text-xs text-slate-400 font-medium">{{ $plan->price_period }}</span>
                </div>
                @if($plan->sub_price_note)
                  <div class="text-[11px] text-cyan-400/80 font-medium mt-1">{{ $plan->sub_price_note }}</div>
                @endif
              </div>

              <!-- Features -->
              <div class="space-y-3 pt-2">
                <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">What's Included:</div>
                <ul class="space-y-2.5 text-xs text-slate-300">
                  @if(is_array($plan->features))
                    @foreach($plan->features as $feat)
                      <li class="flex items-start gap-2.5">
                        <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                        <span>{{ $feat }}</span>
                      </li>
                    @endforeach
                  @endif
                </ul>
              </div>
            </div>

            <div class="pt-8">
              <a href="#booking" class="w-full py-3.5 px-4 rounded-2xl {{ $plan->is_popular ? 'bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-extrabold shadow-glow-cyan' : 'bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold' }} text-xs flex items-center justify-center gap-2 transition-all">
                <span>{{ $plan->cta_text ?? 'Select Plan' }}</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </a>
            </div>
          </div>
        @endforeach
      @else
        <!-- Card 1: Growth Foundation (Starter) -->
        <div class="glass-panel glass-panel-hover rounded-3xl p-8 flex flex-col justify-between border-white/10 relative group">
          <div class="space-y-6">
            <div class="flex items-center justify-between">
              <div class="w-12 h-12 rounded-2xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
                <i data-lucide="filter" class="w-6 h-6"></i>
              </div>
              <span class="text-xs font-semibold px-3 py-1 rounded-full bg-white/5 border border-white/10 text-slate-400">Foundation</span>
            </div>

            <div>
              <h3 class="text-xl font-bold text-white mb-2">Growth Foundation</h3>
              <p class="text-xs text-slate-400 leading-relaxed min-h-[36px]">
                Essential lead capture and CRM pipeline automation designed to eliminate lead drop-off.
              </p>
            </div>

            <!-- Price Box -->
            <div class="pt-4 pb-2 border-y border-white/[0.08]">
              <div class="flex items-baseline gap-1.5">
                <span class="text-3xl sm:text-4xl font-extrabold text-white">$1,490</span>
                <span class="text-xs text-slate-400 font-medium">/ one-time setup</span>
              </div>
              <div class="text-[11px] text-cyan-400/80 font-medium mt-1">
                Optional optimization & hosting: $290/mo
              </div>
            </div>

            <!-- Feature List -->
            <div class="space-y-3 pt-2">
              <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">What's Included:</div>
              <ul class="space-y-2.5 text-xs text-slate-300">
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Custom High-Converting Landing Page / Funnel</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>CRM Configuration & Deal Pipeline Setup</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>3-Stage Instant Email & SMS Follow-Up Workflows</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Automated Booking Calendar & Form Integration</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Instant Team Alert Bot (Slack / WhatsApp / Email)</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Essential Analytics & Conversion Tracking</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="pt-8">
            <a href="#booking" class="w-full py-3.5 px-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all group-hover:border-cyan-500/40">
              <span>Start With Foundation</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
          </div>
        </div>

        <!-- Card 2: Flagship Growth Engine (POPULAR - Highlighted) -->
        <div class="glass-panel rounded-3xl p-8 flex flex-col justify-between border-2 border-cyan-400/60 shadow-[0_0_50px_rgba(56,197,210,0.25)] relative transform lg:-translate-y-2 bg-[#091226]/90">
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white text-[11px] font-extrabold uppercase tracking-wider shadow-glow-cyan flex items-center gap-1.5">
            <i data-lucide="sparkles" class="w-3.5 h-3.5 text-cyan-200"></i>
            <span>Most Popular &bull; Complete System</span>
          </div>

          <div class="space-y-6 pt-2">
            <div class="flex items-center justify-between">
              <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-cyan-500/30 to-purple-600/30 border border-cyan-400/50 text-cyan-300 flex items-center justify-center shadow-glow-cyan">
                <i data-lucide="zap" class="w-6 h-6"></i>
              </div>
              <span class="text-xs font-bold px-3 py-1 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-300">All-in-One Engine</span>
            </div>

            <div>
              <h3 class="text-2xl font-extrabold text-white mb-2">Flagship Growth Engine</h3>
              <p class="text-xs text-slate-300 leading-relaxed min-h-[36px]">
                The complete connected ecosystem: High-converting funnels, CRM automation, Paid Ads management, and AI Speed-to-Lead bot.
              </p>
            </div>

            <!-- Price Box -->
            <div class="pt-4 pb-2 border-y border-white/[0.12] bg-white/[0.02] rounded-xl px-4">
              <div class="flex items-baseline gap-1.5">
                <span class="text-3xl sm:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-white">$2,750</span>
                <span class="text-xs text-slate-400 font-medium">/ month</span>
              </div>
              <div class="text-[11px] text-cyan-300 font-medium mt-1 flex items-center gap-1">
                <i data-lucide="check-circle" class="w-3 h-3 text-cyan-400"></i> Includes $1,990 one-time architecture setup
              </div>
            </div>

            <!-- Feature List -->
            <div class="space-y-3 pt-2">
              <div class="text-[11px] font-bold uppercase tracking-wider text-cyan-300">Everything In Foundation, Plus:</div>
              <ul class="space-y-2.5 text-xs text-slate-200">
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span class="font-semibold text-white">Full Multi-Stage Funnel Ecosystem (VSL + Lead Magnet + Booking)</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span class="font-semibold text-white">Omnichannel Paid Ads Management (Meta & Google Ads)</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span class="font-semibold text-cyan-300">AI Speed-to-Lead Instant Response Bot (&lt; 60s qualification)</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Complete Lifecycle CRM Workflows & Multi-Touch Nurturing</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Continuous CRO A/B Split Testing & Copy Optimizations</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                  <span>Dedicated Growth Strategist & Private Slack Channel</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="pt-8">
            <a href="#booking" class="w-full py-4 px-4 rounded-2xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-extrabold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all">
              <span>Build My Growth Engine</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
          </div>
        </div>

        <!-- Card 3: Custom Enterprise -->
        <div class="glass-panel glass-panel-hover rounded-3xl p-8 flex flex-col justify-between border-white/10 relative group">
          <div class="space-y-6">
            <div class="flex items-center justify-between">
              <div class="w-12 h-12 rounded-2xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center">
                <i data-lucide="cpu" class="w-6 h-6"></i>
              </div>
              <span class="text-xs font-semibold px-3 py-1 rounded-full bg-white/5 border border-white/10 text-slate-400">Enterprise</span>
            </div>

            <div>
              <h3 class="text-xl font-bold text-white mb-2">Custom Enterprise</h3>
              <p class="text-xs text-slate-400 leading-relaxed min-h-[36px]">
                Bespoke AI automation, high-volume multi-brand funnels, and enterprise API integrations.
              </p>
            </div>

            <!-- Price Box -->
            <div class="pt-4 pb-2 border-y border-white/[0.08]">
              <div class="flex items-baseline gap-1.5">
                <span class="text-3xl sm:text-4xl font-extrabold text-white">Custom</span>
                <span class="text-xs text-slate-400 font-medium">/ tailored scope</span>
              </div>
              <div class="text-[11px] text-purple-400/90 font-medium mt-1">
                Tailored for established firms & high ad spend
              </div>
            </div>

            <!-- Feature List -->
            <div class="space-y-3 pt-2">
              <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">Enterprise Inclusions:</div>
              <ul class="space-y-2.5 text-xs text-slate-300">
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                  <span>Multi-Brand / Multi-Location Funnel & CRM Systems</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                  <span>Custom AI Agent Trained on Proprietary Business Knowledge</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                  <span>Custom Database, ERP, or Proprietary Webhook Integrations</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                  <span>Multi-Touch Revenue Attribution & Executive Reporting</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                  <span>White-Glove Team Onboarding & SOP Documentation</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                  <span>Priority 24/7 Response Time & Dedicated Tech Lead</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="pt-8">
            <a href="#booking" class="w-full py-3.5 px-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all group-hover:border-purple-500/40">
              <span>Talk to Solutions Architect</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
          </div>
        </div>
      @endif
    </div>

    <!-- Standalone Service Banner -->
    <div class="mt-12 p-6 rounded-2xl bg-gradient-to-r from-cyan-950/30 via-slate-900/50 to-purple-950/30 border border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3.5 text-center sm:text-left">
        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0">
          <i data-lucide="layers" class="w-5 h-5"></i>
        </div>
        <div>
          <h4 class="text-sm font-bold text-white">Looking for individual, a-la-carte service pricing?</h4>
          <p class="text-xs text-slate-400">View individual pricing for Funnels, CRM Automation, Paid Ads, and AI Speed-to-Lead bots.</p>
        </div>
      </div>
      <a href="{{ route('services') }}" class="px-5 py-2.5 rounded-xl bg-white/10 hover:bg-white/15 border border-white/15 text-cyan-300 font-semibold text-xs flex items-center gap-2 whitespace-nowrap transition-colors">
        <span>View All Services & Pricing</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </a>
    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 6.5 FREQUENTLY ASKED QUESTIONS & BOTTOM CTA (MATCHING MOCKUP) -->
<!-- ========================================================================= -->
<section id="faq" class="py-20 sm:py-28 relative overflow-hidden bg-[#030712] border-t border-white/[0.06]">
  <!-- Ambient Background Glow -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute top-1/3 left-1/4 -translate-y-1/2 w-[600px] h-[400px] bg-purple-600/10 blur-[150px] rounded-full"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[600px] h-[400px] bg-cyan-500/10 blur-[150px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-20"></div>

    <!-- Decorative Corner Dot Matrices -->
    <div class="absolute top-10 left-10 hidden sm:grid grid-cols-4 gap-2 opacity-25">
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
      <span class="w-1 h-1 rounded-full bg-cyan-400"></span>
    </div>
    <div class="absolute top-10 right-10 hidden sm:grid grid-cols-4 gap-2 opacity-25">
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
      <span class="w-1 h-1 rounded-full bg-purple-400"></span>
    </div>
  </div>

  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-16 sm:space-y-20">

    <!-- Section Header (Centered) -->
    <div class="text-center max-w-3xl mx-auto space-y-4">
      <div class="flex items-center justify-center gap-3">
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-transparent to-cyan-400"></div>
        <span class="text-xs sm:text-sm font-extrabold tracking-widest text-cyan-400 uppercase">
          FREQUENTLY ASKED QUESTIONS
        </span>
        <div class="h-0.5 w-10 sm:w-16 bg-gradient-to-r from-purple-500 to-transparent"></div>
      </div>

      <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
        Questions? Let's Clear <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-indigo-300 to-cyan-400">Things Up.</span>
      </h2>

      <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
        From funnels and CRM systems to AI automation and lead generation, here are answers to some of the questions we hear most often.
      </p>
    </div>

    <!-- 4-Stage Flow Pipeline Diagram (Matching Mockup) -->
    <div class="space-y-6">
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 relative">
        <!-- Connecting Line behind cards on desktop -->
        <div class="hidden sm:block absolute top-1/2 left-[12%] right-[12%] h-0.5 bg-gradient-to-r from-purple-500/30 via-cyan-400/40 to-teal-400/30 z-0 -translate-y-1/2 pointer-events-none"></div>

        <!-- Stage 1: FUNNEL -->
        <div class="glass-panel bg-[#0a0f20]/90 border border-white/10 rounded-2xl p-4 text-center flex flex-col items-center justify-between relative z-10 min-h-[140px] group hover:border-purple-500/40 transition-all">
          <div class="w-10 h-10 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center mb-2 shadow-[0_0_12px_rgba(168,85,247,0.2)]">
            <i data-lucide="filter" class="w-4 h-4"></i>
          </div>
          <div>
            <h4 class="text-xs font-black text-white uppercase tracking-wider mb-0.5">FUNNEL</h4>
            <p class="text-[10px] text-slate-400">Captures the Lead</p>
          </div>
          <span class="w-2 h-2 rounded-full bg-purple-400 mt-2"></span>
        </div>

        <!-- Stage 2: CRM -->
        <div class="glass-panel bg-[#0a0f20]/90 border border-white/10 rounded-2xl p-4 text-center flex flex-col items-center justify-between relative z-10 min-h-[140px] group hover:border-cyan-500/40 transition-all">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center mb-2 shadow-[0_0_12px_rgba(56,197,210,0.2)]">
            <i data-lucide="user" class="w-4 h-4"></i>
          </div>
          <div>
            <h4 class="text-xs font-black text-white uppercase tracking-wider mb-0.5">CRM</h4>
            <p class="text-[10px] text-slate-400">Organizes the Lead</p>
          </div>
          <span class="w-2 h-2 rounded-full bg-cyan-400 mt-2"></span>
        </div>

        <!-- Stage 3: AUTOMATION -->
        <div class="glass-panel bg-[#0a0f20]/90 border border-white/10 rounded-2xl p-4 text-center flex flex-col items-center justify-between relative z-10 min-h-[140px] group hover:border-indigo-500/40 transition-all">
          <div class="w-10 h-10 rounded-xl bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 flex items-center justify-center mb-2 shadow-[0_0_12px_rgba(99,102,241,0.2)]">
            <i data-lucide="settings" class="w-4 h-4"></i>
          </div>
          <div>
            <h4 class="text-xs font-black text-white uppercase tracking-wider mb-0.5">AUTOMATION</h4>
            <p class="text-[10px] text-slate-400">Follows Up</p>
          </div>
          <span class="w-2 h-2 rounded-full bg-indigo-400 mt-2"></span>
        </div>

        <!-- Stage 4: APPOINTMENT -->
        <div class="glass-panel bg-[#0a0f20]/90 border border-white/10 rounded-2xl p-4 text-center flex flex-col items-center justify-between relative z-10 min-h-[140px] group hover:border-emerald-500/40 transition-all">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 flex items-center justify-center mb-2 shadow-[0_0_12px_rgba(16,185,129,0.2)]">
            <i data-lucide="calendar" class="w-4 h-4"></i>
          </div>
          <div>
            <h4 class="text-xs font-black text-white uppercase tracking-wider mb-0.5">APPOINTMENT</h4>
            <p class="text-[10px] text-slate-400">Creates the Opportunity</p>
          </div>
          <span class="w-2 h-2 rounded-full bg-emerald-400 mt-2"></span>
        </div>
      </div>

      <!-- Sub-flow text pill track -->
      <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-6 text-[11px] sm:text-xs font-semibold text-slate-300 pt-2">
        <div class="flex items-center gap-2">
          <div class="w-5 h-5 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-[10px]">&gt;</div>
          <span>Lead Captured</span>
        </div>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-slate-600 hidden sm:inline"></i>
        <div class="flex items-center gap-2">
          <div class="w-5 h-5 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-[10px]">&gt;</div>
          <span>Lead Organized</span>
        </div>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-slate-600 hidden sm:inline"></i>
        <div class="flex items-center gap-2">
          <div class="w-5 h-5 rounded-full bg-indigo-500/20 text-indigo-400 flex items-center justify-center text-[10px]">&gt;</div>
          <span>Follow-Up Triggered</span>
        </div>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-slate-600 hidden sm:inline"></i>
        <div class="flex items-center gap-2">
          <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-[10px]">&gt;</div>
          <span>Appointment Booked</span>
        </div>
      </div>
    </div>

    <!-- Interactive FAQ Accordion (Items 01 - 09) -->
    <div class="space-y-3.5" id="faq-accordion-list">

      <!-- FAQ 01 (Open by default) -->
      <div class="faq-item rounded-2xl bg-[#091024] border border-purple-500/50 shadow-[0_0_20px_rgba(168,85,247,0.15)] overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-purple-400">01</span>
            <span class="text-sm sm:text-base font-bold text-white">What services does GrowXpect provide?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-purple-600 text-white flex items-center justify-center font-bold text-xs shrink-0 shadow-md">
            <i data-lucide="minus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 block">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-purple-500/40">
            GrowXpect builds complete growth systems that help businesses attract, manage, nurture and convert leads. Our services include funnels, GoHighLevel CRM, AI automation, appointment booking systems, lead generation, paid advertising and integrated follow-up systems. We can provide individual services or connect multiple systems into one complete customer journey.
          </p>
        </div>
      </div>

      <!-- FAQ 02 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">02</span>
            <span class="text-sm sm:text-base font-bold text-white">Can you build a complete growth system for my business?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Yes, we specialize in end-to-end growth ecosystems. From running high-converting ads and designing custom landing pages to configuring your CRM and automating multi-touch follow-ups, we engineer the entire pipeline to scale your revenue predictably.
          </p>
        </div>
      </div>

      <!-- FAQ 03 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">03</span>
            <span class="text-sm sm:text-base font-bold text-white">Do you work with GoHighLevel?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Yes! We are certified GoHighLevel (GHL) power users and architects. We build custom snapshots, advanced workflows, webhook integrations, and client portals tailored precisely for your industry.
          </p>
        </div>
      </div>

      <!-- FAQ 04 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">04</span>
            <span class="text-sm sm:text-base font-bold text-white">Can you build funnels, CRM and automation together?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Absolutely. Connecting all three is our core specialty. Having a separate funnel, CRM, and email tool often leads to lost leads. We unite them into a seamless, unified revenue engine.
          </p>
        </div>
      </div>

      <!-- FAQ 05 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">05</span>
            <span class="text-sm sm:text-base font-bold text-white">Can you automate lead follow-up and appointment booking?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Yes. We implement instant speed-to-lead automations via SMS, Email, and WhatsApp within 60 seconds of form submission, driving up show-up rates and eliminating manual follow-up friction.
          </p>
        </div>
      </div>

      <!-- FAQ 06 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">06</span>
            <span class="text-sm sm:text-base font-bold text-white">Can you integrate AI into our sales and follow-up process?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Yes. We integrate AI qualification agents that converse with prospects in real-time, answer questions, qualify intent, and autonomously book appointments onto your team's calendar.
          </p>
        </div>
      </div>

      <!-- FAQ 07 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">07</span>
            <span class="text-sm sm:text-base font-bold text-white">Do you also provide lead generation and paid advertising?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Yes, we manage performance-driven Meta (Facebook/Instagram) and Google Ad campaigns engineered to funnel qualified buyers straight into your custom conversion system.
          </p>
        </div>
      </div>

      <!-- FAQ 08 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">08</span>
            <span class="text-sm sm:text-base font-bold text-white">Can you improve or integrate our existing systems?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Definitely. If you already have existing software (like HubSpot, Zapier, ActiveCampaign, or WordPress), we can audit, optimize, and connect your current tech stack without starting from scratch.
          </p>
        </div>
      </div>

      <!-- FAQ 09 -->
      <div class="faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300">
        <button class="faq-toggle w-full p-5 sm:p-6 flex items-center justify-between text-left gap-4 cursor-pointer select-none">
          <div class="flex items-center gap-4">
            <span class="text-sm sm:text-base font-mono font-bold text-slate-400">09</span>
            <span class="text-sm sm:text-base font-bold text-white">How do we get started with GrowXpect?</span>
          </div>
          <div class="faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0">
            <i data-lucide="plus" class="w-4 h-4"></i>
          </div>
        </button>
        <div class="faq-content px-5 sm:px-6 pb-6 pt-0 hidden">
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-8 sm:pl-9 border-l-2 border-cyan-500/40">
            Getting started is simple. Book a free 30-minute growth strategy session. We’ll review your current setup, identify bottlenecks, and map out a custom growth roadmap for your business.
          </p>
        </div>
      </div>

    </div>

    <!-- Bottom CTA Banner Card (Matching Mockup) -->
    <div class="p-6 sm:p-10 rounded-3xl bg-gradient-to-r from-[#060b19] via-[#091228] to-[#0d1024] border border-white/10 relative overflow-hidden shadow-2xl">
      <!-- Glow lines -->
      <div class="absolute -bottom-10 left-10 w-96 h-32 bg-purple-600/20 blur-[70px] pointer-events-none"></div>
      <div class="absolute -bottom-10 right-10 w-96 h-32 bg-cyan-500/20 blur-[70px] pointer-events-none"></div>

      <div class="flex flex-col lg:flex-row items-center justify-between gap-6 relative z-10">
        <!-- Left: Icon & Title -->
        <div class="flex items-center gap-5 text-center lg:text-left">
          <!-- Icon Box -->
          <div class="w-14 h-14 rounded-2xl bg-cyan-500/15 border border-cyan-400/30 text-cyan-400 flex items-center justify-center shrink-0 shadow-[0_0_20px_rgba(56,197,210,0.3)] hidden sm:flex">
            <i data-lucide="trending-up" class="w-7 h-7"></i>
          </div>

          <div>
            <h3 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-white tracking-tight leading-tight mb-1.5">
              Ready to Build a Smarter<br class="hidden sm:inline" />
              <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-indigo-300">Growth System?</span>
            </h3>
            <p class="text-xs sm:text-sm text-slate-400 max-w-lg leading-relaxed">
              Let's connect the systems that help your business attract, manage, nurture and convert more leads.
            </p>
          </div>
        </div>

        <!-- Right: Action Button -->
        <div class="shrink-0">
          <button onclick="window.openBookingModal && window.openBookingModal()" class="px-8 py-4 rounded-full bg-gradient-to-r from-indigo-600 via-purple-600 to-purple-700 hover:from-indigo-500 hover:to-purple-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-[0_0_25px_rgba(168,85,247,0.4)] hover:shadow-[0_0_35px_rgba(168,85,247,0.6)] hover:scale-[1.03] active:scale-95 transition-all">
            <span>Book a Free Strategy Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection

@push('scripts')
<script>
  // FAQ Accordion Toggle Logic
  document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const toggleBtn = item.querySelector('.faq-toggle');
      if (!toggleBtn) return;

      toggleBtn.addEventListener('click', () => {
        const content = item.querySelector('.faq-content');
        const iconContainer = item.querySelector('.faq-icon');
        const isOpen = !content.classList.contains('hidden');

        // Close all other items
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            const otherContent = otherItem.querySelector('.faq-content');
            const otherIcon = otherItem.querySelector('.faq-icon');
            if (otherContent) otherContent.classList.add('hidden');
            otherItem.className = 'faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300';
            if (otherIcon) {
              otherIcon.className = 'faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0';
              otherIcon.innerHTML = '<i data-lucide="plus" class="w-4 h-4"></i>';
            }
          }
        });

        // Toggle clicked item
        if (isOpen) {
          content.classList.add('hidden');
          item.className = 'faq-item rounded-2xl bg-[#070c1a] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300';
          if (iconContainer) {
            iconContainer.className = 'faq-icon w-7 h-7 rounded-full bg-white/5 border border-white/10 text-slate-300 flex items-center justify-center font-bold text-xs shrink-0';
            iconContainer.innerHTML = '<i data-lucide="plus" class="w-4 h-4"></i>';
          }
        } else {
          content.classList.remove('hidden');
          item.className = 'faq-item rounded-2xl bg-[#091024] border border-purple-500/50 shadow-[0_0_20px_rgba(168,85,247,0.15)] overflow-hidden transition-all duration-300';
          if (iconContainer) {
            iconContainer.className = 'faq-icon w-7 h-7 rounded-full bg-purple-600 text-white flex items-center justify-center font-bold text-xs shrink-0 shadow-md';
            iconContainer.innerHTML = '<i data-lucide="minus" class="w-4 h-4"></i>';
          }
        }

        if (window.lucide) window.lucide.createIcons();
      });
    });
  });

  // Testimonials Slider Logic
  (function initTestimonialsSlider() {
    const track = document.getElementById('t-slider-track');
    if (!track) return;

    const prevBtn = document.getElementById('t-prev-btn');
    const nextBtn = document.getElementById('t-next-btn');
    const counterCurrent = document.getElementById('t-counter-current');
    const dots = document.querySelectorAll('.t-dot');
    const totalSlides = 4;
    let currentIndex = 0;
    let autoSlideInterval = null;

    function goToSlide(index) {
      if (index < 0) {
        currentIndex = totalSlides - 1;
      } else if (index >= totalSlides) {
        currentIndex = 0;
      } else {
        currentIndex = index;
      }

      // Update track position
      track.style.transform = `translateX(-${currentIndex * 100}%)`;

      // Update counter
      if (counterCurrent) {
        counterCurrent.textContent = String(currentIndex + 1).padStart(2, '0');
      }

      // Update dots
      dots.forEach((dot, idx) => {
        if (idx === currentIndex) {
          dot.className = 't-dot h-2 rounded-full transition-all duration-300 w-6 bg-cyan-400 shadow-[0_0_10px_#38C5D2]';
        } else {
          dot.className = 't-dot h-2 rounded-full transition-all duration-300 w-2 bg-slate-700 hover:bg-slate-500';
        }
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        goToSlide(currentIndex - 1);
        resetAutoSlide();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        goToSlide(currentIndex + 1);
        resetAutoSlide();
      });
    }

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        const index = parseInt(dot.getAttribute('data-index'), 10);
        goToSlide(index);
        resetAutoSlide();
      });
    });

    // Touch swipe support
    let startX = 0;
    const container = document.getElementById('t-slider-container');
    if (container) {
      container.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
      }, { passive: true });

      container.addEventListener('touchend', (e) => {
        const diffX = startX - e.changedTouches[0].clientX;
        if (Math.abs(diffX) > 50) {
          if (diffX > 0) {
            goToSlide(currentIndex + 1);
          } else {
            goToSlide(currentIndex - 1);
          }
          resetAutoSlide();
        }
      }, { passive: true });

      // Pause auto slide on mouse enter
      container.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
      container.addEventListener('mouseleave', () => startAutoSlide());
    }

    function startAutoSlide() {
      clearInterval(autoSlideInterval);
      autoSlideInterval = setInterval(() => {
        goToSlide(currentIndex + 1);
      }, 7000);
    }

    function resetAutoSlide() {
      startAutoSlide();
    }

    startAutoSlide();
  })();
</script>
@endpush
