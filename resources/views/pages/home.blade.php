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

<!-- 3. FIXED VIDEO + DYNAMIC INFINITE TESTIMONIALS MARQUEE -->
<section class="py-16 sm:py-24 relative overflow-hidden bg-slate-950/60 border-y border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

      <!-- Left Column: Auto-Scrolling Testimonials Loop -->
      <div class="lg:col-span-6 space-y-6 overflow-hidden">
        <div>
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/40 border border-purple-500/30 text-purple-400 text-xs font-semibold uppercase tracking-wider mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400 animate-pulse"></span>
            REAL CLIENT RESULTS
          </div>
          <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
            Loved By Growing Businesses.
          </h2>
          <p class="text-xs sm:text-sm text-slate-400 mt-1">
            Hover over any review to pause the stream.
          </p>
        </div>

        <!-- Marquee Track Container -->
        <div class="relative w-full overflow-hidden pt-2">
          <div class="animate-marquee flex gap-4">
            @if(isset($testimonials) && count($testimonials) > 0)
              @foreach($testimonials as $test)
                <div class="w-[320px] sm:w-[380px] shrink-0 glass-panel p-5 rounded-2xl border-white/10 space-y-3">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                      <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-cyan-500 to-purple-600 text-white font-bold text-xs flex items-center justify-center">
                        {{ substr($test->name, 0, 1) }}
                      </div>
                      <div>
                        <h3 class="text-xs font-bold text-white">{{ $test->name }}</h3>
                        <p class="text-[10px] text-slate-400">{{ $test->role_company }}</p>
                      </div>
                    </div>
                    <div class="flex text-amber-400 text-xs">{{ str_repeat('★', $test->rating ?? 5) }}</div>
                  </div>
                  <p class="text-xs text-slate-300 leading-relaxed">
                    "{{ $test->content }}"
                  </p>
                  @if($test->highlight_metric)
                    <div class="inline-block px-2.5 py-0.5 rounded-full bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-[10px] font-bold">
                      {{ $test->highlight_metric }}
                    </div>
                  @endif
                </div>
              @endforeach

              <!-- Duplicated for seamless infinite loop -->
              @foreach($testimonials as $test)
                <div class="w-[320px] sm:w-[380px] shrink-0 glass-panel p-5 rounded-2xl border-white/10 space-y-3">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                      <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-cyan-500 to-purple-600 text-white font-bold text-xs flex items-center justify-center">
                        {{ substr($test->name, 0, 1) }}
                      </div>
                      <div>
                        <h3 class="text-xs font-bold text-white">{{ $test->name }}</h3>
                        <p class="text-[10px] text-slate-400">{{ $test->role_company }}</p>
                      </div>
                    </div>
                    <div class="flex text-amber-400 text-xs">{{ str_repeat('★', $test->rating ?? 5) }}</div>
                  </div>
                  <p class="text-xs text-slate-300 leading-relaxed">
                    "{{ $test->content }}"
                  </p>
                  @if($test->highlight_metric)
                    <div class="inline-block px-2.5 py-0.5 rounded-full bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-[10px] font-bold">
                      {{ $test->highlight_metric }}
                    </div>
                  @endif
                </div>
              @endforeach
            @else
              <!-- Default Testimonial Cards Loop -->
              @php
                $defaultTestimonials = [
                  [
                    'initials' => 'SJ',
                    'name' => 'Sarah Johnson',
                    'role_company' => 'Founder & CEO, NovaHealth',
                    'content' => 'Growxpect completely transformed our lead generation and sales process. Our booked consultations increased by 3x within 60 days. The team is incredible and truly understands modern healthcare funnel architecture.',
                    'rating' => 5,
                    'metric' => '+312% Show-Up Rate',
                  ],
                  [
                    'initials' => 'MR',
                    'name' => 'Marcus Reed',
                    'role_company' => 'VP of Growth, CloudScale AI',
                    'content' => 'Our sales team was drowning in unqualified meetings. Growxpect automated our lead triage, scoring, and demo assignment. Our close rate doubled and demo attendance jumped to 88%.',
                    'rating' => 5,
                    'metric' => '4.2x Revenue ROI',
                  ],
                  [
                    'initials' => 'DK',
                    'name' => 'David Kensington',
                    'role_company' => 'Managing Broker, PrimeEstates',
                    'content' => 'In luxury real estate, responding in 2 minutes vs 2 hours is the difference between closing a $3M buyer or losing them. Growxpect\'s instant WhatsApp qualification made us unstoppable.',
                    'rating' => 5,
                    'metric' => '+240% Pipeline Growth',
                  ],
                  [
                    'initials' => 'EV',
                    'name' => 'Elena Vance',
                    'role_company' => 'Head of Operations, Apex Commerce',
                    'content' => 'The multi-channel follow-up workflows and high-converting funnel design eliminated our funnel leaks completely. Conversion jumped by 73% in 30 days.',
                    'rating' => 5,
                    'metric' => '+73% Conversion',
                  ],
                ];
              @endphp

              @foreach(array_merge($defaultTestimonials, $defaultTestimonials) as $test)
                <div class="w-[320px] sm:w-[380px] shrink-0 glass-panel p-5 rounded-2xl border-white/10 space-y-3">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2.5">
                      <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-cyan-500 to-purple-600 text-white font-bold text-xs flex items-center justify-center">
                        {{ $test['initials'] }}
                      </div>
                      <div>
                        <h3 class="text-xs font-bold text-white">{{ $test['name'] }}</h3>
                        <p class="text-[10px] text-slate-400">{{ $test['role_company'] }}</p>
                      </div>
                    </div>
                    <div class="flex text-amber-400 text-xs">{{ str_repeat('★', $test['rating']) }}</div>
                  </div>
                  <p class="text-xs text-slate-300 leading-relaxed">
                    "{{ $test['content'] }}"
                  </p>
                  <div class="inline-block px-2.5 py-0.5 rounded-full bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-[10px] font-bold">
                    {{ $test['metric'] }}
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>

      <!-- Right Column: Single Fixed Video Player -->
      <div class="lg:col-span-6">
        <div class="glass-panel rounded-3xl p-3 sm:p-4 border-cyan-500/30 shadow-2xl relative group">
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-slate-900 border border-white/10">
            <iframe class="w-full h-full object-cover" src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?autoplay=0&rel=0&modestbranding=1" title="Growxpect System Walkthrough" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="p-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-3 h-3 rounded-full bg-cyan-400 animate-ping"></div>
              <span class="text-xs font-bold text-white uppercase tracking-wider">How Growxpect Connects Marketing To Revenue</span>
            </div>
            <span class="text-[11px] text-slate-400">4-Min Architecture Breakdown</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 4. CORE SERVICES OVERVIEW -->
<section id="solutions" class="py-20 sm:py-28 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        {{ $cms['services_overview_badge'] ?? 'CORE GROWTH CAPABILITIES' }}
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        {{ $cms['services_overview_title'] ?? 'Solutions That Drive Growth' }}
      </h2>
      <p class="text-slate-400 text-sm sm:text-base">
        {{ $cms['services_overview_subtitle'] ?? 'We replace fragmented marketing agencies with connected, end-to-end growth infrastructure.' }}
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="glass-panel glass-panel-hover rounded-3xl p-6 space-y-4 border-white/10">
        <div class="w-12 h-12 rounded-2xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
          <i data-lucide="filter" class="w-6 h-6"></i>
        </div>
        <h3 class="text-base font-bold text-white">{{ $cms['services_overview_service_1_title'] ?? 'High-Converting Funnels' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['services_overview_service_1_desc'] ?? 'Strategic funnels that turn traffic into qualified leads and paying customers with frictionless UX.' }}</p>
      </div>

      <div class="glass-panel glass-panel-hover rounded-3xl p-6 space-y-4 border-white/10">
        <div class="w-12 h-12 rounded-2xl bg-purple-500/20 text-purple-400 flex items-center justify-center">
          <i data-lucide="database" class="w-6 h-6"></i>
        </div>
        <h3 class="text-base font-bold text-white">{{ $cms['services_overview_service_2_title'] ?? 'CRM Systems' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['services_overview_service_2_desc'] ?? 'Keep your leads organized, follow up automatically, and never let high-value revenue slip through cracks.' }}</p>
      </div>

      <div class="glass-panel glass-panel-hover rounded-3xl p-6 space-y-4 border-white/10">
        <div class="w-12 h-12 rounded-2xl bg-blue-500/20 text-blue-400 flex items-center justify-center">
          <i data-lucide="zap" class="w-6 h-6"></i>
        </div>
        <h3 class="text-base font-bold text-white">{{ $cms['services_overview_service_3_title'] ?? 'Marketing Automation' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['services_overview_service_3_desc'] ?? 'Automate your multi-channel follow-ups, re-engage cold leads, and scale conversion on 24/7 autopilot.' }}</p>
      </div>

      <div class="glass-panel glass-panel-hover rounded-3xl p-6 space-y-4 border-white/10">
        <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center">
          <i data-lucide="trending-up" class="w-6 h-6"></i>
        </div>
        <h3 class="text-base font-bold text-white">{{ $cms['services_overview_service_4_title'] ?? 'Lead Generation' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['services_overview_service_4_desc'] ?? 'Drive consistent, high-converting targeted traffic with full-funnel data-driven campaign architecture.' }}</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. OUR PROCESS -->
<section id="process" class="py-20 sm:py-24 relative bg-slate-950/70 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-14">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        {{ $cms['process_badge'] ?? 'OUR PROCESS' }}
      </div>
      <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        {{ $cms['process_title'] ?? 'A Simple Process. A Powerful Result.' }}
      </h2>
      <p class="text-slate-400 text-xs sm:text-base">
        {{ $cms['process_subtitle'] ?? 'We follow a proven 4-step framework to build your custom growth engine, tailored for your industry.' }}
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 relative group">
        <div class="text-3xl font-extrabold text-slate-700 group-hover:text-cyan-400/40 transition-colors">01</div>
        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center my-4">
          <i data-lucide="search" class="w-5 h-5"></i>
        </div>
        <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-1.5">{{ $cms['process_step_1_title'] ?? 'DISCOVER' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['process_step_1_desc'] ?? 'Understand your unique business model, ideal customer profile, and bottlenecks.' }}</p>
      </div>

      <div class="glass-panel glass-panel-hover rounded-2xl p-6 relative group">
        <div class="text-3xl font-extrabold text-slate-700 group-hover:text-blue-400/40 transition-colors">02</div>
        <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center my-4">
          <i data-lucide="map" class="w-5 h-5"></i>
        </div>
        <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-1.5">{{ $cms['process_step_2_title'] ?? 'STRATEGIZE' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['process_step_2_desc'] ?? 'Architect the optimal conversion funnel, CRM workflow, and customer journey.' }}</p>
      </div>

      <div class="glass-panel glass-panel-hover rounded-2xl p-6 relative group">
        <div class="text-3xl font-extrabold text-slate-700 group-hover:text-indigo-400/40 transition-colors">03</div>
        <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center my-4">
          <i data-lucide="code-2" class="w-5 h-5"></i>
        </div>
        <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-1.5">{{ $cms['process_step_3_title'] ?? 'BUILD' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['process_step_3_desc'] ?? 'Engineer high-converting pages, integrate CRM, and configure automated sequences.' }}</p>
      </div>

      <div class="glass-panel glass-panel-hover rounded-2xl p-6 relative group">
        <div class="text-3xl font-extrabold text-slate-700 group-hover:text-emerald-400/40 transition-colors">04</div>
        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center my-4">
          <i data-lucide="trending-up" class="w-5 h-5"></i>
        </div>
        <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-1.5">{{ $cms['process_step_4_title'] ?? 'OPTIMIZE' }}</h3>
        <p class="text-xs text-slate-400 leading-relaxed">{{ $cms['process_step_4_desc'] ?? 'Continuously track analytics, A/B test touchpoints, and maximize ROI.' }}</p>
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

<!-- 7. INTERACTIVE STRATEGY CALL BOOKING & CALENDAR SECTION -->
<section id="booking" class="py-20 sm:py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="glass-panel rounded-3xl p-6 sm:p-12 border-cyan-500/30 shadow-2xl">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

        <div class="lg:col-span-6 space-y-6 text-center sm:text-left">
          <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
            {{ $cms['booking_cta_badge'] ?? 'BOOK A FREE STRATEGY CALL' }}
          </div>

          <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
            {{ $cms['booking_cta_title'] ?? 'Ready to Build a Growth System That Works?' }}
          </h2>

          <p class="text-slate-300 text-xs sm:text-base leading-relaxed">
            {{ $cms['booking_cta_subtitle'] ?? 'Let\'s turn your leads, funnels and follow-ups into a connected revenue engine. Schedule a 1-on-1 strategy session with our lead architects.' }}
          </p>

          <!-- Live Slot Indicator -->
          <div class="p-3.5 rounded-2xl bg-cyan-950/40 border border-cyan-500/30 flex items-center gap-3 text-xs text-slate-300">
            <div class="w-8 h-8 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="check-circle" class="w-4 h-4"></i>
            </div>
            <div>
              <span class="text-slate-400 text-[11px] block">Selected Strategy Slot:</span>
              <span class="font-bold text-white" id="booking-slot-summary">September 10, 2026 at 9:00 AM (EST)</span>
            </div>
          </div>

          <div class="space-y-4 pt-1">
            <button id="main-book-btn" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all">
              <span>{{ $cms['booking_cta_button_text'] ?? 'Book A Free Growth Strategy Call' }}</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>

            <div class="flex items-center justify-center sm:justify-start gap-2 text-[11px] sm:text-xs text-slate-400">
              <i data-lucide="clock" class="w-4 h-4 text-cyan-400"></i>
              <span>{{ $cms['booking_cta_footnote'] ?? '30-Minute Call • 100% Free • No Obligation' }}</span>
            </div>
          </div>
        </div>

        <!-- Interactive Calendar Widget -->
        <div class="lg:col-span-6">
          <div class="p-5 sm:p-6 rounded-2xl bg-[#070D1F] border border-white/10 shadow-2xl space-y-5">
            <div class="flex items-center justify-between pb-3 border-b border-white/10">
              <div class="text-xs font-bold text-white flex items-center gap-2">
                <i data-lucide="calendar" class="w-4 h-4 text-cyan-400"></i>
                <span>Select a Date & Time</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="text-[11px] text-cyan-400 font-semibold min-w-[100px] text-center">September 2026</span>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-12 gap-5">
              <div class="sm:col-span-7 space-y-2">
                <div class="grid grid-cols-7 gap-1 text-center text-[10px] text-slate-500 font-bold">
                  <span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span><span>S</span>
                </div>
                <div class="grid grid-cols-7 gap-1 text-center text-xs" id="calendar-days">
                  <button class="cal-day p-1.5 rounded-lg text-slate-600" disabled>31</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="1">1</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="2">2</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="3">3</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="4">4</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-500" data-day="5">5</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-500" data-day="6">6</button>

                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="7">7</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="8">8</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="9">9</button>
                  <button class="cal-day p-1.5 rounded-lg text-white font-bold bg-cyan-500 shadow-glow-cyan" data-day="10">10</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="11">11</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-500" data-day="12">12</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-500" data-day="13">13</button>

                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="14">14</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="15">15</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="16">16</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="17">17</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-300 hover:bg-white/10 hover:text-cyan-300" data-day="18">18</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-500" data-day="19">19</button>
                  <button class="cal-day p-1.5 rounded-lg text-slate-500" data-day="20">20</button>
                </div>
              </div>

              <!-- Available Times Selection -->
              <div class="sm:col-span-5 flex flex-col gap-2" id="available-times-container">
                <span class="text-[10px] uppercase font-bold tracking-wider text-slate-400">Available Times</span>

                <button class="time-slot-btn w-full py-2 px-3 rounded-xl bg-cyan-500/20 border border-cyan-400 text-cyan-300 text-xs font-semibold text-center hover:bg-cyan-500/30 transition-all shadow-glow-cyan" data-time="9:00 AM">
                  9:00 AM
                </button>
                <button class="time-slot-btn w-full py-2 px-3 rounded-xl bg-white/5 border border-white/10 text-slate-300 text-xs font-semibold text-center hover:border-cyan-500/40 hover:text-white transition-all" data-time="10:30 AM">
                  10:30 AM
                </button>
                <button class="time-slot-btn w-full py-2 px-3 rounded-xl bg-white/5 border border-white/10 text-slate-300 text-xs font-semibold text-center hover:border-cyan-500/40 hover:text-white transition-all" data-time="1:00 PM">
                  1:00 PM
                </button>
                <button class="time-slot-btn w-full py-2 px-3 rounded-xl bg-white/5 border border-white/10 text-slate-300 text-xs font-semibold text-center hover:border-cyan-500/40 hover:text-white transition-all" data-time="3:30 PM">
                  3:30 PM
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  const dayButtons = document.querySelectorAll('.cal-day:not([disabled])');
  const timeButtons = document.querySelectorAll('.time-slot-btn');
  const summarySlot = document.getElementById('booking-slot-summary');
  const mainBookBtn = document.getElementById('main-book-btn');
  const modalInputDate = document.getElementById('modal-input-date');
  const modalInputTime = document.getElementById('modal-input-time');
  const modalSlotDisplay = document.getElementById('modal-slot-display');

  let selectedDay = '10';
  let selectedMonth = 'September 2026';
  let selectedTime = '9:00 AM';

  function updateSlotSummary() {
    const slotString = selectedMonth.split(' ')[0] + ' ' + selectedDay + ', 2026 at ' + selectedTime + ' (EST)';
    if (summarySlot) summarySlot.innerText = slotString;
    if (modalSlotDisplay) modalSlotDisplay.innerText = slotString;
    if (modalInputDate) modalInputDate.value = selectedMonth.split(' ')[0] + ' ' + selectedDay + ', 2026';
    if (modalInputTime) modalInputTime.value = selectedTime + ' (EST)';
  }

  dayButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      dayButtons.forEach(b => {
        b.classList.remove('bg-cyan-500', 'text-white', 'font-bold', 'shadow-glow-cyan');
        b.classList.add('text-slate-300');
      });
      btn.classList.add('bg-cyan-500', 'text-white', 'font-bold', 'shadow-glow-cyan');
      btn.classList.remove('text-slate-300');
      selectedDay = btn.getAttribute('data-day');
      updateSlotSummary();
    });
  });

  timeButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      timeButtons.forEach(b => {
        b.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-glow-cyan');
        b.classList.add('bg-white/5', 'border-white/10', 'text-slate-300');
      });
      btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'shadow-glow-cyan');
      btn.classList.remove('bg-white/5', 'border-white/10', 'text-slate-300');
      selectedTime = btn.getAttribute('data-time');
      updateSlotSummary();
      window.openBookingModal();
    });
  });

  if (mainBookBtn) {
    mainBookBtn.addEventListener('click', () => {
      updateSlotSummary();
      window.openBookingModal();
    });
  }
</script>
@endpush
