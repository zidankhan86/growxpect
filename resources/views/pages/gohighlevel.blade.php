@extends('layouts.app')

@section('title', 'Get GoHighLevel — Your All-in-One Platform for Leads, Sales & Automation | Growxpect')
@section('meta_description', 'GoHighLevel brings your CRM, funnels, conversations, appointments, marketing automation, and client management into one powerful platform. Recommended and engineered by Growxpect.')

@section('content')
<!-- 1. HERO SECTION -->
<section class="relative pt-16 pb-20 md:pt-24 md:pb-28 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

      <!-- Left Content -->
      <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-[11px] sm:text-xs font-bold tracking-widest uppercase backdrop-blur-md shadow-glow-pill">
          <span class="text-cyan-400 font-extrabold">✦</span>
          <span>RECOMMENDED BY GROWXPECT</span>
        </div>

        <h1 class="text-3xl sm:text-5xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight text-white leading-[1.15]">
          Your All-in-One <br class="hidden sm:inline" />Platform for <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-indigo-300 to-cyan-400">
            Leads, Sales & <br class="hidden sm:inline" />Automation.
          </span>
        </h1>

        <p class="text-sm sm:text-base text-slate-300 max-w-xl mx-auto lg:mx-0 leading-relaxed">
          GoHighLevel brings your CRM, funnels, conversations, appointments, marketing automation, and client management into one powerful platform.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
          <a href="https://www.gohighlevel.com/?fp_ref=growxpect" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-7 py-4 rounded-full bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-700 hover:from-purple-500 hover:via-indigo-500 hover:to-purple-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-[0_0_30px_rgba(168,85,247,0.35)] hover:scale-[1.02] active:scale-95 transition-all">
            <span>Get Started with GoHighLevel</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>

          <a href="#how-it-works" class="w-full sm:w-auto px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 text-slate-200 hover:text-white font-semibold text-xs sm:text-sm flex items-center justify-center gap-2 backdrop-blur-md transition-all">
            <i data-lucide="play" class="w-3.5 h-3.5 text-cyan-400 fill-cyan-400"></i>
            <span>See How It Works</span>
          </a>
        </div>
      </div>

      <!-- Right Interactive Hub Graphic -->
      <div class="lg:col-span-6 flex items-center justify-center pt-4 lg:pt-0">
        <div class="relative w-full max-w-[500px] h-[380px] sm:h-[420px] flex items-center justify-center select-none">
          
          <!-- Background Ambient Glow -->
          <div class="absolute inset-0 bg-gradient-to-tr from-cyan-500/15 via-purple-600/15 to-indigo-500/15 rounded-full blur-[90px] -z-10 pointer-events-none"></div>

          <!-- SVG Curved Connector Wires -->
          <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 540 440" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="cyanLineGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#38C5D2" stop-opacity="0.8" />
                <stop offset="100%" stop-color="#818CF8" stop-opacity="0.5" />
              </linearGradient>
              <filter id="wireGlow" x="-20%" y="-20%" width="140%" height="140%">
                <feGaussianBlur stdDeviation="2.5" result="blur" />
                <feMerge>
                  <feMergeNode in="blur" />
                  <feMergeNode in="SourceGraphic" />
                </feMerge>
              </filter>
            </defs>

            <!-- 1. CRM (Top Left) -->
            <path d="M 235 185 C 235 125, 175 105, 175 75" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />
            
            <!-- 2. Funnels (Top Center) -->
            <path d="M 270 185 C 270 140, 270 110, 270 75" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />
            
            <!-- 3. Website (Top Right) -->
            <path d="M 305 185 C 305 125, 365 105, 365 75" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />

            <!-- 4. Appointments (Right Top) -->
            <path d="M 345 205 C 400 205, 435 175, 455 155" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />

            <!-- 5. SMS (Right Bottom) -->
            <path d="M 345 235 C 400 235, 435 265, 455 285" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />

            <!-- 6. Email (Bottom Right) -->
            <path d="M 305 255 C 305 315, 365 335, 365 365" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />

            <!-- 7. Automation (Bottom Center) -->
            <path d="M 270 255 C 270 300, 270 330, 270 365" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />

            <!-- 8. AI (Left Bottom) -->
            <path d="M 195 235 C 140 235, 105 265, 85 285" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />

            <!-- 9. Reputation (Left Top) -->
            <path d="M 195 205 C 140 205, 105 175, 85 155" stroke="url(#cyanLineGrad)" stroke-width="2" stroke-linecap="round" filter="url(#wireGlow)" />
          </svg>

          <!-- Central Core: Official HighLevel 3-Arrow Box -->
          <div class="relative z-30 px-5 py-3.5 sm:px-6 sm:py-4 rounded-2xl sm:rounded-3xl bg-[#061021] border-2 border-cyan-400/90 shadow-[0_0_35px_rgba(56,197,210,0.45)] flex items-center justify-center gap-3 transition-transform hover:scale-105 duration-300">
            <!-- 3 Colored Vertical Arrows (Yellow, Cyan, Green) -->
            <div class="flex items-end gap-1.5 h-7">
              <!-- Yellow Arrow -->
              <div class="flex flex-col items-center">
                <svg class="w-3.5 h-3.5 text-amber-400 -mb-1" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2L4 10H9V22H15V10H20L12 2Z"/>
                </svg>
              </div>
              <!-- Blue/Cyan Arrow -->
              <div class="flex flex-col items-center">
                <svg class="w-3 h-3 text-cyan-400 -mb-1" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 4L5 11H9V22H15V11H19L12 4Z"/>
                </svg>
              </div>
              <!-- Green Arrow -->
              <div class="flex flex-col items-center">
                <svg class="w-3.5 h-3.5 text-emerald-400 -mb-1" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 0L3 9H8V22H16V9H21L12 0Z"/>
                </svg>
              </div>
            </div>

            <!-- Bold HighLevel Wordmark -->
            <span class="text-lg sm:text-xl font-extrabold text-white tracking-tight">HighLevel</span>
          </div>

          <!-- 9 Surrounding Nodes (Matching media_1788984298035.png) -->
          
          <!-- 1. CRM (Top Left) -->
          <div class="absolute top-2 left-[26%] sm:left-[28%] z-20 w-16 sm:w-20 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-cyan-500/30 shadow-[0_0_20px_rgba(56,197,210,0.2)] flex flex-col items-center justify-center gap-1 hover:border-cyan-400 hover:scale-105 transition-all">
            <i data-lucide="user" class="w-4 h-4 sm:w-5 sm:h-5 text-cyan-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200">CRM</span>
          </div>

          <!-- 2. Funnels (Top Center) -->
          <div class="absolute top-2 left-1/2 -translate-x-1/2 z-20 w-16 sm:w-20 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-purple-500/30 shadow-[0_0_20px_rgba(168,85,247,0.2)] flex flex-col items-center justify-center gap-1 hover:border-purple-400 hover:scale-105 transition-all">
            <i data-lucide="filter" class="w-4 h-4 sm:w-5 sm:h-5 text-purple-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200">Funnels</span>
          </div>

          <!-- 3. Website (Top Right) -->
          <div class="absolute top-2 right-[26%] sm:right-[28%] z-20 w-16 sm:w-20 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-cyan-500/30 shadow-[0_0_20px_rgba(56,197,210,0.2)] flex flex-col items-center justify-center gap-1 hover:border-cyan-400 hover:scale-105 transition-all">
            <i data-lucide="monitor" class="w-4 h-4 sm:w-5 sm:h-5 text-cyan-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200">Website</span>
          </div>

          <!-- 4. Appointments (Right Top) -->
          <div class="absolute top-[26%] right-0 z-20 w-20 sm:w-24 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-cyan-500/30 shadow-[0_0_20px_rgba(56,197,210,0.2)] flex flex-col items-center justify-center gap-1 hover:border-cyan-400 hover:scale-105 transition-all">
            <i data-lucide="calendar" class="w-4 h-4 sm:w-5 sm:h-5 text-cyan-400"></i>
            <span class="text-[9px] sm:text-[10px] font-bold text-slate-200 text-center leading-tight">Appointments</span>
          </div>

          <!-- 5. SMS (Right Bottom) -->
          <div class="absolute bottom-[20%] right-0 z-20 w-16 sm:w-20 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-cyan-500/30 shadow-[0_0_20px_rgba(56,197,210,0.2)] flex flex-col items-center justify-center gap-1 hover:border-cyan-400 hover:scale-105 transition-all">
            <i data-lucide="message-square" class="w-4 h-4 sm:w-5 sm:h-5 text-cyan-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200">SMS</span>
          </div>

          <!-- 6. Email (Bottom Right) -->
          <div class="absolute bottom-2 right-[26%] sm:right-[28%] z-20 w-16 sm:w-20 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-cyan-500/30 shadow-[0_0_20px_rgba(56,197,210,0.2)] flex flex-col items-center justify-center gap-1 hover:border-cyan-400 hover:scale-105 transition-all">
            <i data-lucide="mail" class="w-4 h-4 sm:w-5 sm:h-5 text-cyan-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200">Email</span>
          </div>

          <!-- 7. Automation (Bottom Center) -->
          <div class="absolute bottom-2 left-1/2 -translate-x-1/2 z-20 w-20 sm:w-24 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-cyan-500/30 shadow-[0_0_20px_rgba(56,197,210,0.2)] flex flex-col items-center justify-center gap-1 hover:border-cyan-400 hover:scale-105 transition-all">
            <i data-lucide="settings" class="w-4 h-4 sm:w-5 sm:h-5 text-cyan-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200 text-center leading-tight">Automation</span>
          </div>

          <!-- 8. AI (Left Bottom) -->
          <div class="absolute bottom-[20%] left-0 z-20 w-16 sm:w-20 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-purple-500/30 shadow-[0_0_20px_rgba(168,85,247,0.2)] flex flex-col items-center justify-center gap-1 hover:border-purple-400 hover:scale-105 transition-all">
            <i data-lucide="sparkles" class="w-4 h-4 sm:w-5 sm:h-5 text-purple-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200">AI</span>
          </div>

          <!-- 9. Reputation (Left Top) -->
          <div class="absolute top-[26%] left-0 z-20 w-20 sm:w-24 p-2 sm:p-2.5 rounded-2xl bg-[#081226]/95 border border-purple-500/30 shadow-[0_0_20px_rgba(168,85,247,0.2)] flex flex-col items-center justify-center gap-1 hover:border-purple-400 hover:scale-105 transition-all">
            <i data-lucide="star" class="w-4 h-4 sm:w-5 sm:h-5 text-purple-400"></i>
            <span class="text-[10px] sm:text-[11px] font-bold text-slate-200 text-center leading-tight">Reputation</span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2. THE PROBLEM (DISCONNECTED TOOLS VS ONE PLATFORM) -->
<section id="problem" class="py-20 sm:py-24 relative bg-[#040916]/80 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Text Description -->
      <div class="lg:col-span-5 space-y-5">
        <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
          — THE PROBLEM
        </div>

        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
          Still Managing Your Business Across Too Many Tools?
        </h2>

        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
          Disconnected tools, scattered data, slow follow-ups, and manual processes create friction — and make it easy for leads to fall through the cracks.
        </p>
      </div>

      <!-- Comparison Diagram: Sprawl vs One Platform -->
      <div class="lg:col-span-7">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">

          <!-- Left: Fragmented Sprawl (Messy Tools) -->
          <div class="md:col-span-6 p-5 sm:p-6 rounded-3xl bg-[#081024] border border-red-500/20 relative overflow-hidden shadow-2xl">
            <div class="absolute top-3 left-4 text-[10px] font-bold uppercase tracking-wider text-red-400/80">
              Disconnected Sprawl
            </div>

            <!-- Chaotic Red Connecting Network -->
            <div class="grid grid-cols-4 gap-2 pt-6 pb-2 text-center text-[10px] text-slate-300">
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="monitor" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">Website</span>
              </div>
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="file-text" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90 leading-tight">Landing Pages</span>
              </div>
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="user" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">CRM</span>
              </div>
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="mail" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">Email</span>
              </div>
            </div>

            <!-- Messy middle line with dots -->
            <div class="relative py-2 flex items-center justify-center">
              <div class="w-full border-t border-dashed border-red-500/40"></div>
              <span class="absolute px-2 py-0.5 rounded bg-red-950/80 border border-red-500/40 text-[9px] font-bold text-red-300">Data Leaks & Friction</span>
            </div>

            <div class="grid grid-cols-4 gap-2 pt-2 text-center text-[10px] text-slate-300">
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="message-square" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">SMS</span>
              </div>
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="calendar" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">Calendar</span>
              </div>
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="settings" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">Automation</span>
              </div>
              <div class="p-2 rounded-xl bg-slate-900/90 border border-red-500/30 flex flex-col items-center gap-1">
                <i data-lucide="bar-chart-2" class="w-3.5 h-3.5 text-red-400"></i>
                <span class="scale-90">Pipeline</span>
              </div>
            </div>
          </div>

          <!-- Middle Arrow -->
          <div class="hidden md:flex md:col-span-1 items-center justify-center text-cyan-400">
            <i data-lucide="arrow-right" class="w-6 h-6 stroke-[2.5]"></i>
          </div>

          <!-- Right: Unified ONE PLATFORM -->
          <div class="md:col-span-5 p-6 rounded-3xl bg-[#09152C] border-2 border-cyan-400/50 shadow-[0_0_40px_rgba(56,197,210,0.25)] flex flex-col items-center justify-center text-center relative">
            <div class="inline-block text-[10px] font-bold uppercase tracking-wider text-cyan-300 bg-cyan-500/20 px-3 py-0.5 rounded-full border border-cyan-400/40 mb-3">
              ONE PLATFORM
            </div>

            <div class="w-24 h-24 rounded-full bg-cyan-950/80 border border-cyan-400/40 flex items-center justify-center p-2 shadow-glow-cyan mb-2">
              <div class="text-center">
                <span class="text-amber-400 text-xs font-bold">↑↑</span>
                <span class="text-white text-xs font-extrabold block">HighLevel</span>
              </div>
            </div>

            <p class="text-xs text-cyan-200 font-semibold">100% Unified Architecture</p>
            <span class="text-[11px] text-slate-400">All data, contacts & workflows synced</span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3. WHAT GOHIGHLEVEL BRINGS TOGETHER (8 FEATURES GRID) -->
<section id="how-it-works" class="py-20 sm:py-28 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        — WHAT GOHIGHLEVEL BRINGS TOGETHER
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        Everything Your Growth System Needs.
      </h2>
    </div>

    <!-- 8 Feature Cards Grid (4 Columns) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- 1. CRM & Pipelines -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="users" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">CRM & Pipelines</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Manage leads, track deals and close more sales.</p>
        </div>
      </div>

      <!-- 2. Sales Funnels -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="filter" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">Sales Funnels</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Turn visitors into leads and customers.</p>
        </div>
      </div>

      <!-- 3. Websites & Landing Pages -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="layout" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">Websites & Landing Pages</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Create high-converting pages without the tech hassle.</p>
        </div>
      </div>

      <!-- 4. Appointment Booking -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="calendar" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">Appointment Booking</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Let prospects book directly into your calendar.</p>
        </div>
      </div>

      <!-- 5. Email & SMS Marketing -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="mail" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">Email & SMS Marketing</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Nurture leads with targeted campaigns.</p>
        </div>
      </div>

      <!-- 6. Marketing Automation -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="settings-2" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">Marketing Automation</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Set it once, and let it work for you.</p>
        </div>
      </div>

      <!-- 7. AI-Powered Tools -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="sparkles" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">AI-Powered Tools</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Work smarter with built-in AI features.</p>
        </div>
      </div>

      <!-- 8. Reputation Management -->
      <div class="glass-panel glass-panel-hover rounded-2xl p-6 space-y-4 border-white/10 hover:border-cyan-400/50 transition-all group">
        <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 group-hover:text-cyan-400 group-hover:border-cyan-400/40 transition-all">
          <i data-lucide="star" class="w-6 h-6"></i>
        </div>
        <div>
          <h3 class="text-base font-bold text-white mb-1.5">Reputation Management</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Build trust and get more 5-star reviews.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 4. CUSTOMER JOURNEY (FROM FIRST CLICK TO LONG-TERM CUSTOMER) -->
<section class="py-20 sm:py-24 relative bg-slate-950/70 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        — YOUR CUSTOMER JOURNEY
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        From First Click to Long-Term Customer.
      </h2>
      <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
        GoHighLevel powers your entire journey — so you can focus on what matters most: growing your business.
      </p>
    </div>

    <!-- 7 Step Journey Flow Container -->
    <div class="p-6 sm:p-10 rounded-3xl bg-[#070E20] border border-white/10 shadow-2xl relative">

      <!-- Horizontal Steps Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-4 lg:gap-2 items-center text-center">

        <!-- Step 1: Lead -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="user" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">LEAD</span>
        </div>

        <!-- Step 2: Capture -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="magnet" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">CAPTURE</span>
        </div>

        <!-- Step 3: CRM -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="contact" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">CRM</span>
        </div>

        <!-- Step 4: Follow-up -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="mail" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">FOLLOW-UP</span>
        </div>

        <!-- Step 5: Appointment -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="calendar" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">APPOINTMENT</span>
        </div>

        <!-- Step 6: Sale -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="trending-up" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">SALE</span>
        </div>

        <!-- Step 7: Retention -->
        <div class="flex flex-col items-center space-y-2.5">
          <div class="w-12 h-12 rounded-full bg-purple-600/20 border-2 border-purple-500/50 text-purple-300 flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.3)]">
            <i data-lucide="heart" class="w-5 h-5"></i>
          </div>
          <span class="text-xs font-bold tracking-wider text-white uppercase">RETENTION</span>
        </div>

      </div>

      <!-- HighLevel Span Bracket Below Steps -->
      <div class="mt-8 pt-6 border-t border-cyan-500/30 flex flex-col items-center justify-center relative">
        <div class="flex items-center gap-2 px-6 py-2 rounded-full bg-cyan-950/60 border border-cyan-400/50 shadow-glow-cyan">
          <span class="text-amber-400 font-bold text-sm">↑↑</span>
          <span class="text-white font-extrabold text-sm tracking-wide">HighLevel Powers The Entire Engine</span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 5. WHY GROWXPECT RECOMMENDS IT -->
<section class="py-20 sm:py-24 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        — WHY GROWXPECT RECOMMENDS IT
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        Why We Recommend GoHighLevel to Our Clients
      </h2>
    </div>

    <!-- 3 Benefit Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- 01 ONE CONNECTED SYSTEM -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-8 space-y-6 border-white/10 hover:border-cyan-400/50 transition-all relative group">
        <div class="flex items-center justify-between">
          <div class="w-12 h-12 rounded-2xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="link-2" class="w-6 h-6"></i>
          </div>
          <span class="text-3xl font-extrabold text-slate-700 group-hover:text-cyan-400/40 transition-colors">01</span>
        </div>
        <div>
          <h3 class="text-sm font-extrabold text-white uppercase tracking-wider mb-2">ONE CONNECTED SYSTEM</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Manage your marketing, leads, conversations, and sales process from one place.</p>
        </div>
      </div>

      <!-- 02 AUTOMATION BUILT FOR GROWTH -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-8 space-y-6 border-white/10 hover:border-cyan-400/50 transition-all relative group">
        <div class="flex items-center justify-between">
          <div class="w-12 h-12 rounded-2xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="zap" class="w-6 h-6"></i>
          </div>
          <span class="text-3xl font-extrabold text-slate-700 group-hover:text-cyan-400/40 transition-colors">02</span>
        </div>
        <div>
          <h3 class="text-sm font-extrabold text-white uppercase tracking-wider mb-2">AUTOMATION BUILT FOR GROWTH</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Automate repetitive follow-ups and customer journeys so opportunities don't get missed.</p>
        </div>
      </div>

      <!-- 03 BUILT TO SCALE -->
      <div class="glass-panel glass-panel-hover rounded-3xl p-8 space-y-6 border-white/10 hover:border-cyan-400/50 transition-all relative group">
        <div class="flex items-center justify-between">
          <div class="w-12 h-12 rounded-2xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="bar-chart-3" class="w-6 h-6"></i>
          </div>
          <span class="text-3xl font-extrabold text-slate-700 group-hover:text-cyan-400/40 transition-colors">03</span>
        </div>
        <div>
          <h3 class="text-sm font-extrabold text-white uppercase tracking-wider mb-2">BUILT TO SCALE</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Create a system that can grow with your business without constantly adding more disconnected tools.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 6. GROWXPECT + GOHIGHLEVEL SYNERGY EQUATION -->
<section class="py-20 sm:py-24 relative bg-[#040A18]/80 border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
        — GROWXPECT + GOHIGHLEVEL
      </div>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
        GoHighLevel Gives You the Platform. <br class="hidden sm:inline" />We Help You Build the System.
      </h2>
      <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
        Powerful technology + expert strategy = real business growth.
      </p>
    </div>

    <!-- 3 Formula Cards with + and = -->
    <div class="grid grid-cols-1 lg:grid-cols-11 gap-6 items-center">

      <!-- Card 1: HighLevel Platform -->
      <div class="lg:col-span-4 p-7 rounded-3xl bg-[#081226] border border-cyan-500/30 shadow-2xl space-y-5">
        <div class="flex items-center justify-between pb-3 border-b border-white/10">
          <div class="flex items-center gap-2">
            <div class="flex items-end gap-1 h-5">
              <svg class="w-3 h-3 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L4 10H9V22H15V10H20L12 2Z"/></svg>
              <svg class="w-2.5 h-2.5 text-cyan-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4L5 11H9V22H15V11H19L12 4Z"/></svg>
              <svg class="w-3 h-3 text-emerald-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0L3 9H8V22H16V9H21L12 0Z"/></svg>
            </div>
            <span class="text-white font-extrabold text-base tracking-tight">HighLevel</span>
          </div>
          <span class="text-[11px] font-bold text-cyan-400 bg-cyan-500/10 px-2.5 py-0.5 rounded-full border border-cyan-500/20">PLATFORM</span>
        </div>

        <ul class="space-y-3 text-xs text-slate-300">
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span>CRM & Pipelines</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span>Funnels & Pages</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span>Automation Engine</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span>2-Way Messaging & SMS</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span>Appointment Calendars</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span>Built-in AI & Bots</span>
          </li>
        </ul>
      </div>

      <!-- Plus Operator -->
      <div class="lg:col-span-1 flex items-center justify-center text-3xl font-extrabold text-cyan-400">
        +
      </div>

      <!-- Card 2: Growxpect Strategy -->
      <div class="lg:col-span-4 p-7 rounded-3xl bg-[#081226] border border-purple-500/30 shadow-2xl space-y-5">
        <div class="flex items-center justify-between pb-3 border-b border-white/10">
          <div class="flex items-center gap-1.5 text-white font-extrabold text-base">
            <i data-lucide="zap" class="w-4 h-4 text-cyan-400"></i>
            <span>Growxpect</span>
          </div>
          <span class="text-[11px] font-bold text-purple-400 bg-purple-500/10 px-2.5 py-0.5 rounded-full border border-purple-500/20">STRATEGY</span>
        </div>

        <ul class="space-y-3 text-xs text-slate-300">
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <span>Custom Funnel Architecture</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <span>Complete CRM Setup & Tagging</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <span>End-to-End Workflow Automation</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <span>Speed-to-Lead Follow-up Sequences</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <span>Conversion Rate Optimization</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <span>Ongoing Optimization & Support</span>
          </li>
        </ul>
      </div>

      <!-- Equals Operator -->
      <div class="lg:col-span-1 flex items-center justify-center text-3xl font-extrabold text-cyan-400">
        =
      </div>

      <!-- Card 3: Outcome (YOUR GROWTH SYSTEM) -->
      <div class="lg:col-span-1 lg:col-start-auto p-7 rounded-3xl bg-gradient-to-br from-[#081B34] to-[#0A1224] border-2 border-cyan-400/60 shadow-glow-cyan text-center flex flex-col items-center justify-center space-y-4">
        <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 border border-cyan-400/50 text-cyan-300 flex items-center justify-center shadow-glow-cyan">
          <i data-lucide="trending-up" class="w-7 h-7"></i>
        </div>
        <div>
          <h3 class="text-xs sm:text-sm font-extrabold text-white tracking-wider uppercase mb-2">YOUR GROWTH SYSTEM</h3>
          <p class="text-xs text-cyan-200 font-semibold leading-relaxed">
            More leads. More sales.<br />Less manual work.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 7. IMPLEMENTATION SUPPORT (DON'T KNOW WHERE TO START?) -->
<section class="py-20 sm:py-24 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center mb-12">
      <div class="lg:col-span-6 space-y-4">
        <div class="inline-block text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3.5 py-1 rounded-full border border-cyan-500/20">
          — IMPLEMENTATION SUPPORT
        </div>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
          Don't Know Where to Start?<br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">We Can Build It For You.</span>
        </h2>
        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
          Get expert setup and ongoing support to make the most of GoHighLevel — from day one.
        </p>
      </div>

      <!-- 4-Step Process Grid -->
      <div class="lg:col-span-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

          <!-- Step 01: Create -->
          <div class="p-5 rounded-2xl bg-[#081024] border border-white/10 space-y-2">
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-xs font-extrabold text-cyan-400">01</span>
              <i data-lucide="user" class="w-4 h-4 text-cyan-400"></i>
            </div>
            <h4 class="text-xs font-bold text-white uppercase tracking-wider">CREATE</h4>
            <p class="text-[11px] text-slate-400 leading-relaxed">Create your GoHighLevel account.</p>
          </div>

          <!-- Step 02: Setup -->
          <div class="p-5 rounded-2xl bg-[#081024] border border-white/10 space-y-2">
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-xs font-extrabold text-cyan-400">02</span>
              <i data-lucide="settings" class="w-4 h-4 text-cyan-400"></i>
            </div>
            <h4 class="text-xs font-bold text-white uppercase tracking-wider">SETUP</h4>
            <p class="text-[11px] text-slate-400 leading-relaxed">Configure CRM, funnels, calendars and integrations.</p>
          </div>

          <!-- Step 03: Automate -->
          <div class="p-5 rounded-2xl bg-[#081024] border border-white/10 space-y-2">
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-xs font-extrabold text-cyan-400">03</span>
              <i data-lucide="zap" class="w-4 h-4 text-cyan-400"></i>
            </div>
            <h4 class="text-xs font-bold text-white uppercase tracking-wider">AUTOMATE</h4>
            <p class="text-[11px] text-slate-400 leading-relaxed">Build workflows, follow-ups and lead nurturing.</p>
          </div>

          <!-- Step 04: Optimize -->
          <div class="p-5 rounded-2xl bg-[#081024] border border-white/10 space-y-2">
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-xs font-extrabold text-cyan-400">04</span>
              <i data-lucide="bar-chart-2" class="w-4 h-4 text-cyan-400"></i>
            </div>
            <h4 class="text-xs font-bold text-white uppercase tracking-wider">OPTIMIZE</h4>
            <p class="text-[11px] text-slate-400 leading-relaxed">Improve the system for better conversions.</p>
          </div>

        </div>
      </div>
    </div>

    <!-- CTA Button to Book Setup Support -->
    <div class="text-center pt-4">
      <button onclick="window.openBookingModal()" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-700 hover:from-purple-500 hover:via-indigo-500 hover:to-purple-600 text-white font-bold text-xs sm:text-sm shadow-[0_0_30px_rgba(168,85,247,0.35)] hover:scale-[1.02] active:scale-95 transition-all">
        <span>Get GoHighLevel + Growxpect Setup Support</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </button>
    </div>

  </div>
</section>

<!-- 8. BOTTOM CTA BANNER & DISCLOSURE -->
<section class="py-16 sm:py-20 relative bg-gradient-to-b from-transparent via-cyan-950/20 to-black">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="p-8 sm:p-14 rounded-3xl bg-gradient-to-r from-[#07132B] via-[#0D1B3E] to-[#120B29] border border-cyan-500/40 shadow-2xl relative overflow-hidden">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <div class="lg:col-span-8 space-y-4">
          <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 block">LET'S GROW TOGETHER</span>
          <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
            Ready to Build a Smarter Growth System?
          </h2>
          <p class="text-xs sm:text-sm text-slate-300 max-w-xl leading-relaxed">
            Start with GoHighLevel and build your marketing, sales, and automation system in one place.
          </p>
        </div>

        <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col items-center lg:items-end justify-center gap-4">
          <a href="https://www.gohighlevel.com/?fp_ref=growxpect" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-7 py-3.5 rounded-full bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-700 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-[0_0_30px_rgba(168,85,247,0.35)] hover:scale-105 transition-all">
            <span>Start with GoHighLevel</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>

          <div class="text-xs text-slate-400 text-center lg:text-right">
            Need help setting it up? <button onclick="window.openBookingModal()" class="text-cyan-400 hover:text-cyan-300 font-semibold underline inline-flex items-center gap-1">Talk to Growxpect <i data-lucide="arrow-right" class="w-3 h-3"></i></button>
          </div>
        </div>

      </div>
    </div>

    <!-- Affiliate Disclosure Note -->
    <div class="mt-8 max-w-3xl mx-auto flex items-start gap-3 p-4 rounded-2xl bg-white/[0.03] border border-white/5 text-[11px] text-slate-400 leading-relaxed text-center sm:text-left">
      <i data-lucide="info" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
      <p>
        <strong class="text-slate-300 font-semibold">Disclosure:</strong> Growxpect may earn a commission if you sign up for GoHighLevel through our referral link. This does not affect your price, and we only recommend tools we believe can provide value to our clients.
      </p>
    </div>

  </div>
</section>
@endsection

