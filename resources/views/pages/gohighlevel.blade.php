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

      <!-- Right Interactive Hub Graphic (100% Scalable Vector SVG) -->
      <div class="lg:col-span-6 flex items-center justify-center pt-2 lg:pt-0">
        <div class="w-full max-w-[580px] select-none relative">

          <!-- Background Ambient Glow -->
          <div class="absolute inset-4 bg-gradient-to-tr from-cyan-500/20 via-purple-600/20 to-indigo-500/20 rounded-full blur-[100px] -z-10 pointer-events-none"></div>

          <svg class="w-full h-auto overflow-visible filter drop-shadow-[0_10px_30px_rgba(0,0,0,0.5)]" viewBox="0 0 620 480" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <!-- Glowing Line Gradient (userSpaceOnUse to prevent 0-width collapse) -->
              <linearGradient id="hubCyanGrad" x1="0" y1="0" x2="620" y2="480" gradientUnits="userSpaceOnUse">
                <stop offset="0%" stop-color="#38C5D2" stop-opacity="0.95" />
                <stop offset="50%" stop-color="#38C5D2" stop-opacity="0.9" />
                <stop offset="100%" stop-color="#818CF8" stop-opacity="0.75" />
              </linearGradient>

              <!-- Node Card Background Gradient -->
              <linearGradient id="nodeBgGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="#0A1428" />
                <stop offset="100%" stop-color="#060C1A" />
              </linearGradient>

              <!-- Center HighLevel Card Gradient -->
              <linearGradient id="centerBgGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#071329" />
                <stop offset="100%" stop-color="#040915" />
              </linearGradient>

              <!-- Neon Glow Filters -->
              <filter id="centerGlow" x="-30%" y="-30%" width="160%" height="160%">
                <feGaussianBlur stdDeviation="6" result="blur" />
                <feMerge>
                  <feMergeNode in="blur" />
                  <feMergeNode in="SourceGraphic" />
                </feMerge>
              </filter>

              <filter id="lineGlow" x="-30%" y="-30%" width="160%" height="160%">
                <feGaussianBlur stdDeviation="3" result="blur" />
                <feMerge>
                  <feMergeNode in="blur" />
                  <feMergeNode in="SourceGraphic" />
                </feMerge>
              </filter>

              <filter id="nodeGlowCyan" x="-20%" y="-20%" width="140%" height="140%">
                <feDropShadow dx="0" dy="0" stdDeviation="4" flood-color="#38C5D2" flood-opacity="0.25" />
              </filter>

              <filter id="nodeGlowPurple" x="-20%" y="-20%" width="140%" height="140%">
                <feDropShadow dx="0" dy="0" stdDeviation="4" flood-color="#A855F7" flood-opacity="0.25" />
              </filter>
            </defs>

            <!-- 1. CONNECTING WIRES (DUAL-LAYER BULLETPROOF NEON GLOW) -->
            <!-- Soft Ambient Glow Underlay (Layer 1) -->
            <g stroke="#38C5D2" stroke-width="6" stroke-opacity="0.25" stroke-linecap="round" fill="none">
              <!-- CRM -->
              <path d="M 255 195 C 255 130, 190 120, 190 83" />
              <!-- Funnels -->
              <path d="M 310 195 L 310 83" />
              <!-- Website -->
              <path d="M 365 195 C 365 130, 430 120, 430 83" />
              <!-- Reputation -->
              <path d="M 210 220 C 160 220, 145 170, 120 159" />
              <!-- Appointments -->
              <path d="M 410 220 C 460 220, 475 170, 500 159" />
              <!-- AI -->
              <path d="M 210 260 C 160 260, 145 310, 120 319" />
              <!-- SMS -->
              <path d="M 410 260 C 460 260, 475 310, 500 319" />
              <!-- Automation -->
              <path d="M 270 285 C 270 340, 255 355, 255 395" />
              <!-- Email -->
              <path d="M 350 285 C 350 340, 372 355, 372 395" />
            </g>

            <!-- Crisp Core Stroke (Layer 2) -->
            <g stroke="#38C5D2" stroke-width="2.5" stroke-linecap="round" fill="none">
              <!-- CRM -->
              <path d="M 255 195 C 255 130, 190 120, 190 83" />
              <!-- Funnels -->
              <path d="M 310 195 L 310 83" />
              <!-- Website -->
              <path d="M 365 195 C 365 130, 430 120, 430 83" />
              <!-- Reputation -->
              <path d="M 210 220 C 160 220, 145 170, 120 159" />
              <!-- Appointments -->
              <path d="M 410 220 C 460 220, 475 170, 500 159" />
              <!-- AI -->
              <path d="M 210 260 C 160 260, 145 310, 120 319" />
              <!-- SMS -->
              <path d="M 410 260 C 460 260, 475 310, 500 319" />
              <!-- Automation -->
              <path d="M 270 285 C 270 340, 255 355, 255 395" />
              <!-- Email -->
              <path d="M 350 285 C 350 340, 372 355, 372 395" />
            </g>

            <!-- 2. CENTRAL HIGHLEVEL CARD -->
            <g class="cursor-pointer">
              <!-- Outer Glow Rectangle -->
              <rect x="210" y="195" width="200" height="90" rx="26" fill="url(#centerBgGrad)" stroke="#38C5D2" stroke-width="3" filter="url(#centerGlow)" />

              <!-- HighLevel 3-Arrow Brand Logo Group -->
              <g transform="translate(230, 222)">
                <!-- Yellow Arrow (Left) -->
                <path d="M 5 0 L 0 7.5 H 3.2 V 22 H 6.8 V 7.5 H 10 Z" fill="#F59E0B" />
                <!-- Cyan Arrow (Middle) -->
                <path d="M 17 4 L 12.5 10.5 H 15.2 V 22 H 18.8 V 10.5 H 21.5 Z" fill="#38BDF8" />
                <!-- Green Arrow (Right) -->
                <path d="M 29 -2 L 23.5 6.5 H 27 V 22 H 31 V 6.5 H 34.5 Z" fill="#10B981" />
              </g>

              <!-- HighLevel Wordmark -->
              <text x="278" y="250" fill="#ffffff" font-size="23" font-weight="800" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" letter-spacing="-0.5">HighLevel</text>
            </g>

            <!-- 3. TOP ROW NODES -->
            <!-- Node 1: CRM (Top Left) -->
            <g filter="url(#nodeGlowCyan)" class="transition-transform duration-300">
              <rect x="150" y="15" width="80" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#38C5D2" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- User Icon -->
              <circle cx="190" cy="39" r="6" stroke="#38C5D2" stroke-width="2" fill="none" />
              <path d="M 179 53 C 179 48, 184 47, 190 47 C 196 47, 201 48, 201 53" stroke="#38C5D2" stroke-width="2" stroke-linecap="round" fill="none" />
              <text x="190" y="70" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">CRM</text>
            </g>

            <!-- Node 2: Funnels (Top Center) -->
            <g filter="url(#nodeGlowPurple)">
              <rect x="270" y="15" width="80" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#A855F7" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Funnel Icon -->
              <path d="M 300 34 L 320 34 L 313 43 V 51 L 307 48 V 43 Z" stroke="#C084FC" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" fill="none" />
              <text x="310" y="70" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">Funnels</text>
            </g>

            <!-- Node 3: Website (Top Right) -->
            <g filter="url(#nodeGlowCyan)">
              <rect x="390" y="15" width="80" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#38C5D2" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Monitor Icon -->
              <rect x="420" y="33" width="20" height="14" rx="2" stroke="#38C5D2" stroke-width="2" fill="none" />
              <line x1="427" y1="51" x2="433" y2="51" stroke="#38C5D2" stroke-width="2" stroke-linecap="round" />
              <line x1="430" y1="47" x2="430" y2="51" stroke="#38C5D2" stroke-width="2" />
              <text x="430" y="70" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">Website</text>
            </g>

            <!-- 4. LEFT COLUMN NODES -->
            <!-- Node 9: Reputation (Left Top) -->
            <g filter="url(#nodeGlowPurple)">
              <rect x="20" y="125" width="100" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#A855F7" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Star Icon -->
              <path d="M 70 34 L 72.5 41 H 80 L 74 45.5 L 76.5 53 L 70 48.5 L 63.5 53 L 66 45.5 L 60 41 H 67.5 Z" transform="translate(0, 105)" stroke="#C084FC" stroke-width="1.8" stroke-linejoin="round" fill="none" />
              <text x="70" y="180" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">Reputation</text>
            </g>

            <!-- Node 8: AI (Left Bottom) -->
            <g filter="url(#nodeGlowPurple)">
              <rect x="20" y="285" width="100" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#A855F7" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Sparkles/AI Icon -->
              <path d="M 70 299 L 72.5 307 L 80.5 309.5 L 72.5 312 L 70 320 L 67.5 312 L 59.5 309.5 L 67.5 307 Z" stroke="#C084FC" stroke-width="1.8" stroke-linejoin="round" fill="none" />
              <circle cx="78" cy="303" r="1.5" fill="#C084FC" />
              <text x="70" y="340" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">AI</text>
            </g>

            <!-- 5. RIGHT COLUMN NODES -->
            <!-- Node 4: Appointments (Right Top) -->
            <g filter="url(#nodeGlowCyan)">
              <rect x="500" y="125" width="105" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#38C5D2" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Calendar Icon -->
              <rect x="543" y="139" width="18" height="15" rx="3" stroke="#38C5D2" stroke-width="2" fill="none" />
              <line x1="543" y1="144" x2="561" y2="144" stroke="#38C5D2" stroke-width="1.5" />
              <line x1="548" y1="136" x2="548" y2="139" stroke="#38C5D2" stroke-width="2" stroke-linecap="round" />
              <line x1="556" y1="136" x2="556" y2="139" stroke="#38C5D2" stroke-width="2" stroke-linecap="round" />
              <text x="552" y="180" fill="#E2E8F0" font-size="10.5" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">Appointments</text>
            </g>

            <!-- Node 5: SMS (Right Bottom) -->
            <g filter="url(#nodeGlowCyan)">
              <rect x="500" y="285" width="100" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#38C5D2" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Chat Bubble with 3 Dots -->
              <path d="M 540 300 C 535 300, 531 304, 531 309 C 531 313, 534 316.5, 538 317.5 L 536 322 L 542 318 C 547 318, 551 314, 551 309 C 551 304, 547 300, 540 300 Z" stroke="#38C5D2" stroke-width="1.8" stroke-linejoin="round" fill="none" transform="translate(10, 0)" />
              <circle cx="547" cy="309" r="1" fill="#38C5D2" />
              <circle cx="551" cy="309" r="1" fill="#38C5D2" />
              <circle cx="555" cy="309" r="1" fill="#38C5D2" />
              <text x="550" y="340" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">SMS</text>
            </g>

            <!-- 6. BOTTOM ROW NODES -->
            <!-- Node 7: Automation (Bottom Left) -->
            <g filter="url(#nodeGlowCyan)">
              <rect x="205" y="395" width="100" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#38C5D2" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Cog/Gear Icon -->
              <circle cx="255" cy="419" r="4.5" stroke="#38C5D2" stroke-width="2" fill="none" />
              <path d="M 255 410 V 412 M 255 426 V 428 M 246 419 H 248 M 262 419 H 264 M 248.5 412.5 L 250 414 M 260 424 L 261.5 425.5 M 248.5 425.5 L 250 424 M 260 414 L 261.5 412.5" stroke="#38C5D2" stroke-width="2" stroke-linecap="round" />
              <text x="255" y="450" fill="#E2E8F0" font-size="10.5" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">Automation</text>
            </g>

            <!-- Node 6: Email (Bottom Right) -->
            <g filter="url(#nodeGlowCyan)">
              <rect x="330" y="395" width="85" height="68" rx="18" fill="url(#nodeBgGrad)" stroke="#38C5D2" stroke-width="1.5" stroke-opacity="0.7" />
              <!-- Mail Envelope Icon -->
              <rect x="361" y="411" width="22" height="15" rx="3" stroke="#38C5D2" stroke-width="2" fill="none" />
              <path d="M 362 413 L 372 420 L 382 413" stroke="#38C5D2" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
              <text x="372.5" y="450" fill="#E2E8F0" font-size="11" font-weight="700" text-anchor="middle" font-family="system-ui, sans-serif">Email</text>
            </g>

          </svg>
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

    <!-- 3 Formula Cards with + and = (Balanced, Responsive Flex Container) -->
    <div class="flex flex-col lg:flex-row items-center justify-center gap-5 xl:gap-6">

      <!-- Card 1: HighLevel Platform -->
      <div class="w-full lg:flex-1 p-6 sm:p-8 rounded-3xl bg-[#081226] border border-cyan-500/30 shadow-2xl flex flex-col justify-between min-h-[340px] hover:border-cyan-400/60 transition-all">
        <div>
          <div class="flex items-center justify-between pb-4 border-b border-white/10 mb-5">
            <div class="flex items-center gap-2">
              <div class="flex items-end gap-1 h-5">
                <svg class="w-3 h-3 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L4 10H9V22H15V10H20L12 2Z"/></svg>
                <svg class="w-2.5 h-2.5 text-cyan-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4L5 11H9V22H15V11H19L12 4Z"/></svg>
                <svg class="w-3 h-3 text-emerald-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0L3 9H8V22H16V9H21L12 0Z"/></svg>
              </div>
              <span class="text-white font-extrabold text-base tracking-tight">HighLevel</span>
            </div>
            <span class="text-[10px] font-bold uppercase tracking-wider text-cyan-400 bg-cyan-500/10 px-2.5 py-0.5 rounded-full border border-cyan-500/20">PLATFORM</span>
          </div>

          <ul class="space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
              <span>CRM</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
              <span>Funnels</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
              <span>Automation</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
              <span>Messaging</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
              <span>Appointments</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i>
              <span>AI</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Plus Operator -->
      <div class="w-10 h-10 rounded-full bg-cyan-950/60 border border-cyan-500/30 flex items-center justify-center text-cyan-400 font-extrabold text-xl shrink-0 shadow-glow-pill">
        +
      </div>

      <!-- Card 2: Growxpect Strategy -->
      <div class="w-full lg:flex-1 p-6 sm:p-8 rounded-3xl bg-[#081226] border border-purple-500/30 shadow-2xl flex flex-col justify-between min-h-[340px] hover:border-purple-400/60 transition-all">
        <div>
          <div class="flex items-center justify-between pb-4 border-b border-white/10 mb-5">
            <div class="flex items-center gap-1.5 text-white font-extrabold text-base">
              <i data-lucide="zap" class="w-4 h-4 text-cyan-400"></i>
              <span>Growxpect</span>
            </div>
            <span class="text-[10px] font-bold uppercase tracking-wider text-purple-400 bg-purple-500/10 px-2.5 py-0.5 rounded-full border border-purple-500/20">STRATEGY</span>
          </div>

          <ul class="space-y-3 text-xs text-slate-300">
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
              <span>Funnel Design</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
              <span>CRM Setup</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
              <span>Automation</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
              <span>Workflow Architecture</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
              <span>Conversion Optimization</span>
            </li>
            <li class="flex items-center gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i>
              <span>Ongoing Support</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Equals Operator -->
      <div class="w-10 h-10 rounded-full bg-cyan-950/60 border border-cyan-500/30 flex items-center justify-center text-cyan-400 font-extrabold text-xl shrink-0 shadow-glow-pill">
        =
      </div>

      <!-- Card 3: Outcome (YOUR GROWTH SYSTEM) -->
      <div class="w-full lg:flex-1 p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-[#061833] via-[#081226] to-[#0A1024] border-2 border-cyan-400/70 shadow-[0_0_45px_rgba(56,197,210,0.3)] text-center flex flex-col items-center justify-center min-h-[340px] space-y-4 hover:scale-[1.02] transition-all">
        <div class="w-16 h-16 rounded-2xl bg-cyan-500/20 border border-cyan-400/50 text-cyan-300 flex items-center justify-center shadow-glow-cyan">
          <i data-lucide="trending-up" class="w-8 h-8"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-sm sm:text-base font-extrabold text-white tracking-wider uppercase">YOUR GROWTH SYSTEM</h3>
          <p class="text-xs sm:text-sm text-cyan-200 font-semibold leading-relaxed">
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

