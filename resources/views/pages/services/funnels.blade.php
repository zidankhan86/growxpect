@extends('layouts.app')

@section('title', 'High-Converting Funnels — Growxpect')
@section('meta_description', 'Turn more traffic into leads, appointments & customers with custom-engineered high-converting funnels.')

@section('content')
<!-- ========================================================================= -->
<!-- 1. HERO SECTION -->
<!-- ========================================================================= -->
<section class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
  <!-- Glowing Background Orbs -->
  <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/3 right-1/4 -translate-y-1/2 w-96 h-96 bg-purple-600/15 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

      <!-- Left Column: Copy & Actions -->
      <div class="lg:col-span-7 space-y-6 text-left">
        <div class="inline-flex items-center gap-2 text-xs font-mono font-bold tracking-widest text-[#38C5D2] uppercase">
          <span># HIGH-CONVERTING FUNNELS</span>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-[3.75rem] font-extrabold tracking-tight text-white leading-[1.12]">
          Turn More Traffic<br />
          Into <span class="text-[#38C5D2]">Leads, Appointments</span><br />
          <span class="text-[#38C5D2]">&amp; Customers</span>
        </h1>

        <p class="text-base sm:text-lg text-slate-300 max-w-xl leading-relaxed">
          We build strategic funnels that guide your visitors from the first click to the next step — without unnecessary complexity.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-2">
          <button onclick="window.openBookingModal && window.openBookingModal()" class="px-7 py-3.5 rounded-full bg-[#38C5D2] hover:bg-[#2EB3C0] text-slate-950 font-bold text-xs sm:text-sm flex items-center gap-2 transition-all duration-200 hover:scale-[1.03] active:scale-95 shadow-[0_0_25px_rgba(56,197,210,0.35)]">
            <span>Book a Free Strategy Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>

          <a href="#funnels-built" class="px-7 py-3.5 rounded-full bg-white/[0.04] hover:bg-white/10 border border-white/15 text-white font-medium text-xs sm:text-sm transition-all duration-200 hover:border-white/30">
            <span>View Our Work</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Vertical Funnel Flowchart Diagram -->
      <div class="lg:col-span-5 relative">
        <div class="rounded-3xl bg-[#091024]/90 border border-white/10 p-5 sm:p-7 shadow-[0_0_40px_rgba(0,0,0,0.6),0_0_20px_rgba(56,197,210,0.1)] backdrop-blur-xl relative overflow-hidden">

          <!-- Background Grid Overlay -->
          <div class="absolute inset-0 bg-[radial-gradient(#ffffff08_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>

          <!-- Vertical Nodes with Glowing Flow Track -->
          <div class="relative space-y-3">

            <!-- Node 1: Traffic -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-purple-950/30 border border-purple-500/30 hover:border-purple-400 transition-all">
              <div class="w-9 h-9 rounded-lg bg-purple-500/20 border border-purple-400/40 text-purple-300 flex items-center justify-center shrink-0 shadow-sm">
                <i data-lucide="activity" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-white">Traffic</div>
                <div class="text-[11px] text-slate-400 truncate">People visit your funnel</div>
              </div>
            </div>

            <!-- Connector -->
            <div class="w-0.5 h-3 bg-gradient-to-b from-purple-500/60 to-cyan-500/60 mx-auto"></div>

            <!-- Node 2: Landing Page -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-cyan-950/20 border border-cyan-500/20 hover:border-cyan-400 transition-all">
              <div class="w-9 h-9 rounded-lg bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 flex items-center justify-center shrink-0">
                <i data-lucide="layout" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-white">Landing Page</div>
                <div class="text-[11px] text-slate-400 truncate">Engage &amp; capture interest</div>
              </div>
            </div>

            <!-- Connector -->
            <div class="w-0.5 h-3 bg-gradient-to-b from-cyan-500/60 to-purple-500/60 mx-auto"></div>

            <!-- Node 3: Lead Capture -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-purple-950/20 border border-purple-500/20 hover:border-purple-400 transition-all">
              <div class="w-9 h-9 rounded-lg bg-purple-500/20 border border-purple-400/40 text-purple-300 flex items-center justify-center shrink-0">
                <i data-lucide="user-check" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-white">Lead Capture</div>
                <div class="text-[11px] text-slate-400 truncate">Collect valuable information</div>
              </div>
            </div>

            <!-- Connector -->
            <div class="w-0.5 h-3 bg-gradient-to-b from-purple-500/60 to-cyan-500/60 mx-auto"></div>

            <!-- Node 4: CRM -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-cyan-950/20 border border-cyan-500/20 hover:border-cyan-400 transition-all">
              <div class="w-9 h-9 rounded-lg bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 flex items-center justify-center shrink-0">
                <i data-lucide="database" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-white">CRM</div>
                <div class="text-[11px] text-slate-400 truncate">Organize &amp; segment leads</div>
              </div>
            </div>

            <!-- Connector -->
            <div class="w-0.5 h-3 bg-gradient-to-b from-cyan-500/60 to-purple-500/60 mx-auto"></div>

            <!-- Node 5: Follow-Up -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-purple-950/20 border border-purple-500/20 hover:border-purple-400 transition-all">
              <div class="w-9 h-9 rounded-lg bg-purple-500/20 border border-purple-400/40 text-purple-300 flex items-center justify-center shrink-0">
                <i data-lucide="mail" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-white">Follow-Up</div>
                <div class="text-[11px] text-slate-400 truncate">Automated email &amp; SMS</div>
              </div>
            </div>

            <!-- Connector -->
            <div class="w-0.5 h-3 bg-gradient-to-b from-purple-500/60 to-cyan-500/60 mx-auto"></div>

            <!-- Node 6: Appointment -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-cyan-950/20 border border-cyan-500/20 hover:border-cyan-400 transition-all">
              <div class="w-9 h-9 rounded-lg bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 flex items-center justify-center shrink-0">
                <i data-lucide="calendar" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-white">Appointment</div>
                <div class="text-[11px] text-slate-400 truncate">Book your call/meeting</div>
              </div>
            </div>

            <!-- Connector -->
            <div class="w-0.5 h-3 bg-gradient-to-b from-cyan-500/60 to-emerald-400 mx-auto"></div>

            <!-- Node 7: Customer -->
            <div class="flex items-center gap-3 p-2.5 sm:p-3 rounded-xl bg-emerald-950/30 border border-emerald-400/50 shadow-[0_0_15px_rgba(52,211,153,0.2)] hover:border-emerald-300 transition-all">
              <div class="w-9 h-9 rounded-lg bg-emerald-500/20 border border-emerald-400/50 text-emerald-300 flex items-center justify-center shrink-0">
                <i data-lucide="user" class="w-4 h-4"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs sm:text-sm font-bold text-emerald-300">Customer</div>
                <div class="text-[11px] text-slate-300 truncate">Become a loyal customer</div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. WHAT WE BUILD SECTION -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>WHAT WE BUILD</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Funnels Designed for Pure Conversion
      </h2>
      <p class="text-sm sm:text-base text-slate-400">
        Funnels engineered around your core offer, target audience, and next revenue step.
      </p>
    </div>

    <!-- 6 Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1: Lead Generation Funnels -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="user" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Lead Generation Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Attract the right audience and turn visitors into qualified leads.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
          <span>Explore Architecture &rarr;</span>
        </div>
      </div>

      <!-- Card 2: Sales Funnels -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="trending-up" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Sales Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Showcase your offer and guide visitors into confident buyers.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
          <span>Explore Architecture &rarr;</span>
        </div>
      </div>

      <!-- Card 3: Appointment Booking Funnels -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="calendar" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Appointment Booking Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Capture high intent and book qualified appointments automatically.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
          <span>Explore Architecture &rarr;</span>
        </div>
      </div>

      <!-- Card 4: Webinar & VSL Funnels -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="play-circle" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Webinar &amp; VSL Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Educate, build trust and drive high-ticket sales with video-based funnels.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
          <span>Explore Architecture &rarr;</span>
        </div>
      </div>

      <!-- Card 5: E-commerce Funnels -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="shopping-cart" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">E-commerce Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Turn visitors into immediate buyers and increase average order value (AOV).
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
          <span>Explore Architecture &rarr;</span>
        </div>
      </div>

      <!-- Card 6: Multi-Step Funnels -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
            <i data-lucide="layers" class="w-6 h-6"></i>
          </div>
          <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Multi-Step Funnels</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Nurture and qualify leads with multi-step interactive journeys.
          </p>
        </div>
        <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
          <span>Explore Architecture &rarr;</span>
        </div>
      </div>

    </div>

    <!-- ========================================================================= -->
    <!-- 3. FROM FIRST CLICK TO CUSTOMER (Horizontal Step Flow) -->
    <!-- ========================================================================= -->
    <div class="mt-28 pt-10 border-t border-white/[0.08]">

      <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
          <span>END-TO-END PIPELINE</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
          From First Click to Customer
        </h2>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Your funnel is more than a collection of pages. It is the journey that moves a prospect toward taking action.
        </p>
      </div>

      <!-- 7 Horizontal Flow Steps -->
      <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-3 items-center">

        <!-- Step 1: Traffic -->
        <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-2 hover:border-purple-500/50 transition-all min-h-[140px] flex flex-col items-center justify-center">
          <div class="w-9 h-9 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center shadow-sm">
            <i data-lucide="activity" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Traffic</div>
          <div class="text-[10px] text-slate-400 leading-tight">People discover your brand</div>
        </div>

        <!-- Step 2: Landing Page -->
        <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-2 hover:border-cyan-500/50 transition-all min-h-[140px] flex flex-col items-center justify-center">
          <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shadow-sm">
            <i data-lucide="layout" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Landing Page</div>
          <div class="text-[10px] text-slate-400 leading-tight">Engage &amp; learn more</div>
        </div>

        <!-- Step 3: Lead Capture -->
        <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-2 hover:border-purple-500/50 transition-all min-h-[140px] flex flex-col items-center justify-center">
          <div class="w-9 h-9 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center shadow-sm">
            <i data-lucide="user-check" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Lead Capture</div>
          <div class="text-[10px] text-slate-400 leading-tight">Submit info or interest</div>
        </div>

        <!-- Step 4: CRM -->
        <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-2 hover:border-cyan-500/50 transition-all min-h-[140px] flex flex-col items-center justify-center">
          <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shadow-sm">
            <i data-lucide="database" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">CRM</div>
          <div class="text-[10px] text-slate-400 leading-tight">Organize &amp; segment leads</div>
        </div>

        <!-- Step 5: Follow-Up -->
        <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-2 hover:border-purple-500/50 transition-all min-h-[140px] flex flex-col items-center justify-center">
          <div class="w-9 h-9 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center shadow-sm">
            <i data-lucide="mail" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Follow-Up</div>
          <div class="text-[10px] text-slate-400 leading-tight">Automated nurturing</div>
        </div>

        <!-- Step 6: Appointment -->
        <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-2 hover:border-cyan-500/50 transition-all min-h-[140px] flex flex-col items-center justify-center">
          <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shadow-sm">
            <i data-lucide="calendar" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Appointment</div>
          <div class="text-[10px] text-slate-400 leading-tight">Book a call or meeting</div>
        </div>

        <!-- Step 7: Customer -->
        <div class="p-4 rounded-2xl bg-emerald-950/40 border border-emerald-400/50 text-center space-y-2 hover:border-emerald-300 transition-all min-h-[140px] flex flex-col items-center justify-center shadow-[0_0_20px_rgba(52,211,153,0.15)]">
          <div class="w-9 h-9 rounded-xl bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 flex items-center justify-center shadow-sm">
            <i data-lucide="badge-check" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-emerald-300">Customer</div>
          <div class="text-[10px] text-slate-300 leading-tight">Become a loyal customer</div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 4. FUNNELS WE'VE BUILT SECTION (Portfolio & Case Studies) -->
<!-- ========================================================================= -->
<section id="funnels-built" class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto mb-10 space-y-3">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Funnels We've Built
      </h2>
      <p class="text-xs sm:text-sm text-slate-400">
        Your funnel is more than a systems we've designed and built for real businesses.
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2 mb-12" id="funnel-filter-tabs">
      <button class="filter-btn active px-4 py-2 rounded-full text-xs font-bold bg-purple-600 text-white shadow-[0_0_15px_rgba(168,85,247,0.4)] transition-all" data-filter="all">All</button>
      <button class="filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-white/20 transition-all" data-filter="lead-gen">Lead Generation</button>
      <button class="filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-white/20 transition-all" data-filter="sales">Sales</button>
      <button class="filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-white/20 transition-all" data-filter="appointment">Appointment</button>
      <button class="filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-white/20 transition-all" data-filter="webinar">Webinar</button>
      <button class="filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-white/20 transition-all" data-filter="ecommerce">E-commerce</button>
    </div>

    <!-- 6 Portfolio Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="funnel-cards-grid">

      <!-- Project 1: Valley Medical Group -->
      <div class="funnel-card group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300 flex flex-col justify-between" data-category="appointment">
        <!-- Mockup Visual Header -->
        <div class="h-48 bg-gradient-to-br from-cyan-950/40 via-slate-900 to-[#070c1a] border-b border-white/10 p-5 flex items-center justify-center relative overflow-hidden">
          <div class="w-full max-w-[240px] rounded-lg bg-slate-900 p-3 shadow-lg border border-cyan-500/30 transform group-hover:scale-105 transition-transform duration-300 text-white">
            <div class="text-[9px] font-bold text-cyan-400 mb-1">Book Your Free Consultation Today</div>
            <div class="h-1.5 w-16 bg-slate-700 rounded mb-2"></div>
            <div class="grid grid-cols-2 gap-1.5">
              <div class="h-5 bg-slate-800 rounded border border-slate-700"></div>
              <div class="h-5 bg-cyan-500 rounded text-[8px] font-bold text-slate-950 flex items-center justify-center font-bold">Confirm</div>
            </div>
          </div>
        </div>

        <div class="p-5 space-y-4">
          <div>
            <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition-colors">Valley Medical Group</h3>
            <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 mt-2">
              <span class="flex items-center gap-1"><i data-lucide="activity" class="w-3.5 h-3.5 text-cyan-400"></i> Healthcare</span>
              <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3.5 h-3.5 text-purple-400"></i> Appointment Booking</span>
              <span class="flex items-center gap-1 text-[11px] text-cyan-300"><i data-lucide="cpu" class="w-3 h-3"></i> GoHighLevel</span>
            </div>
          </div>

          <div class="pt-2 border-t border-white/10 flex justify-end">
            <a href="{{ route('case-studies') }}" class="text-xs font-bold text-white hover:text-cyan-400 flex items-center gap-1.5 transition-colors">
              <span>View Project</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project 2: Elite Business Coaching -->
      <div class="funnel-card group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300 flex flex-col justify-between" data-category="lead-gen">
        <!-- Mockup Visual Header -->
        <div class="h-48 bg-gradient-to-br from-indigo-950/40 via-slate-900 to-[#070c1a] border-b border-white/10 p-5 flex items-center justify-center relative overflow-hidden">
          <div class="w-full max-w-[240px] rounded-lg bg-slate-900 p-3 shadow-lg border border-indigo-500/30 transform group-hover:scale-105 transition-transform duration-300 text-white">
            <div class="text-[9px] font-bold text-indigo-400 mb-1">Get Expert Business Coaching</div>
            <div class="h-1.5 w-16 bg-slate-700 rounded mb-2"></div>
            <div class="grid grid-cols-2 gap-1.5">
              <div class="h-5 bg-slate-800 rounded border border-slate-700"></div>
              <div class="h-5 bg-indigo-600 rounded text-[8px] font-bold text-white flex items-center justify-center">Get Guide</div>
            </div>
          </div>
        </div>

        <div class="p-5 space-y-4">
          <div>
            <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition-colors">Elite Business Coaching</h3>
            <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 mt-2">
              <span class="flex items-center gap-1"><i data-lucide="briefcase" class="w-3.5 h-3.5 text-cyan-400"></i> Coaching</span>
              <span class="flex items-center gap-1"><i data-lucide="user-check" class="w-3.5 h-3.5 text-purple-400"></i> Lead Generation</span>
              <span class="flex items-center gap-1 text-[11px] text-cyan-300"><i data-lucide="cpu" class="w-3 h-3"></i> GoHighLevel</span>
            </div>
          </div>

          <div class="pt-2 border-t border-white/10 flex justify-end">
            <a href="{{ route('case-studies') }}" class="text-xs font-bold text-white hover:text-cyan-400 flex items-center gap-1.5 transition-colors">
              <span>View Project</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project 3: Radiant Aesthetics -->
      <div class="funnel-card group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300 flex flex-col justify-between" data-category="appointment">
        <!-- Mockup Visual Header -->
        <div class="h-48 bg-gradient-to-br from-purple-950/40 via-slate-900 to-[#070c1a] border-b border-white/10 p-5 flex items-center justify-center relative overflow-hidden">
          <div class="w-full max-w-[240px] rounded-lg bg-slate-900 p-3 shadow-lg border border-purple-500/30 transform group-hover:scale-105 transition-transform duration-300 text-white">
            <div class="text-[9px] font-bold text-purple-400 mb-1">Look Good Feel Confident</div>
            <div class="h-1.5 w-16 bg-slate-700 rounded mb-2"></div>
            <div class="grid grid-cols-2 gap-1.5">
              <div class="h-5 bg-slate-800 rounded border border-slate-700"></div>
              <div class="h-5 bg-purple-600 rounded text-[8px] font-bold text-white flex items-center justify-center">Book Now</div>
            </div>
          </div>
        </div>

        <div class="p-5 space-y-4">
          <div>
            <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition-colors">Radiant Aesthetics</h3>
            <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 mt-2">
              <span class="flex items-center gap-1"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-cyan-400"></i> Beauty &amp; Wellness</span>
              <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3.5 h-3.5 text-purple-400"></i> Appointment Booking</span>
              <span class="flex items-center gap-1 text-[11px] text-cyan-300"><i data-lucide="cpu" class="w-3 h-3"></i> GoHighLevel</span>
            </div>
          </div>

          <div class="pt-2 border-t border-white/10 flex justify-end">
            <a href="{{ route('case-studies') }}" class="text-xs font-bold text-white hover:text-cyan-400 flex items-center gap-1.5 transition-colors">
              <span>View Project</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project 4: Prime Realty Group -->
      <div class="funnel-card group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300 flex flex-col justify-between" data-category="lead-gen">
        <!-- Mockup Visual Header -->
        <div class="h-48 bg-gradient-to-br from-emerald-950/40 via-slate-900 to-[#070c1a] border-b border-white/10 p-5 flex items-center justify-center relative overflow-hidden">
          <div class="w-full max-w-[240px] rounded-lg bg-slate-900 p-3 shadow-lg border border-emerald-500/30 transform group-hover:scale-105 transition-transform duration-300 text-white">
            <div class="text-[9px] font-bold text-emerald-400 mb-1">Find Your Dream Home</div>
            <div class="h-1.5 w-16 bg-slate-700 rounded mb-2"></div>
            <div class="grid grid-cols-2 gap-1.5">
              <div class="h-5 bg-slate-800 rounded border border-slate-700"></div>
              <div class="h-5 bg-emerald-600 rounded text-[8px] font-bold text-white flex items-center justify-center">Get Listings</div>
            </div>
          </div>
        </div>

        <div class="p-5 space-y-4">
          <div>
            <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition-colors">Prime Realty Group</h3>
            <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 mt-2">
              <span class="flex items-center gap-1"><i data-lucide="home" class="w-3.5 h-3.5 text-cyan-400"></i> Real Estate</span>
              <span class="flex items-center gap-1"><i data-lucide="user-check" class="w-3.5 h-3.5 text-purple-400"></i> Lead Generation</span>
              <span class="flex items-center gap-1 text-[11px] text-cyan-300"><i data-lucide="cpu" class="w-3 h-3"></i> GoHighLevel</span>
            </div>
          </div>

          <div class="pt-2 border-t border-white/10 flex justify-end">
            <a href="{{ route('case-studies') }}" class="text-xs font-bold text-white hover:text-cyan-400 flex items-center gap-1.5 transition-colors">
              <span>View Project</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project 5: NextGen SaaS -->
      <div class="funnel-card group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300 flex flex-col justify-between" data-category="sales">
        <!-- Mockup Visual Header -->
        <div class="h-48 bg-gradient-to-br from-blue-950/40 via-slate-900 to-[#070c1a] border-b border-white/10 p-5 flex items-center justify-center relative overflow-hidden">
          <div class="w-full max-w-[240px] rounded-lg bg-blue-950/90 p-3 shadow-lg border border-blue-400/30 transform group-hover:scale-105 transition-transform duration-300 text-white">
            <div class="text-[9px] font-bold text-blue-300 mb-1">Scale Your Business with Automation</div>
            <div class="h-1.5 w-16 bg-blue-800 rounded mb-2"></div>
            <div class="grid grid-cols-2 gap-1.5">
              <div class="h-5 bg-blue-900 rounded border border-blue-700"></div>
              <div class="h-5 bg-blue-500 rounded text-[8px] font-bold text-white flex items-center justify-center">Start Trial</div>
            </div>
          </div>
        </div>

        <div class="p-5 space-y-4">
          <div>
            <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition-colors">NextGen SaaS</h3>
            <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 mt-2">
              <span class="flex items-center gap-1"><i data-lucide="cloud" class="w-3.5 h-3.5 text-cyan-400"></i> SaaS</span>
              <span class="flex items-center gap-1"><i data-lucide="trending-up" class="w-3.5 h-3.5 text-purple-400"></i> Sales Funnel</span>
              <span class="flex items-center gap-1 text-[11px] text-cyan-300"><i data-lucide="cpu" class="w-3 h-3"></i> GoHighLevel</span>
            </div>
          </div>

          <div class="pt-2 border-t border-white/10 flex justify-end">
            <a href="{{ route('case-studies') }}" class="text-xs font-bold text-white hover:text-cyan-400 flex items-center gap-1.5 transition-colors">
              <span>View Project</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project 6: FitLife Gym -->
      <div class="funnel-card group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 overflow-hidden transition-all duration-300 flex flex-col justify-between" data-category="lead-gen">
        <!-- Mockup Visual Header -->
        <div class="h-48 bg-gradient-to-br from-amber-950/40 via-slate-900 to-[#070c1a] border-b border-white/10 p-5 flex items-center justify-center relative overflow-hidden">
          <div class="w-full max-w-[240px] rounded-lg bg-black p-3 shadow-lg border border-amber-500/30 transform group-hover:scale-105 transition-transform duration-300 text-white">
            <div class="text-[9px] font-bold text-amber-400 mb-1">Stronger Healthier You</div>
            <div class="h-1.5 w-16 bg-stone-800 rounded mb-2"></div>
            <div class="grid grid-cols-2 gap-1.5">
              <div class="h-5 bg-stone-900 rounded border border-stone-800"></div>
              <div class="h-5 bg-amber-500 rounded text-[8px] font-bold text-black flex items-center justify-center">Claim Pass</div>
            </div>
          </div>
        </div>

        <div class="p-5 space-y-4">
          <div>
            <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition-colors">FitLife Gym</h3>
            <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 mt-2">
              <span class="flex items-center gap-1"><i data-lucide="dumbbell" class="w-3.5 h-3.5 text-cyan-400"></i> Fitness &amp; Health</span>
              <span class="flex items-center gap-1"><i data-lucide="user-check" class="w-3.5 h-3.5 text-purple-400"></i> Lead Generation</span>
              <span class="flex items-center gap-1 text-[11px] text-cyan-300"><i data-lucide="cpu" class="w-3 h-3"></i> GoHighLevel</span>
            </div>
          </div>

          <div class="pt-2 border-t border-white/10 flex justify-end">
            <a href="{{ route('case-studies') }}" class="text-xs font-bold text-white hover:text-cyan-400 flex items-center gap-1.5 transition-colors">
              <span>View Project</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. BUILT FOR GROWTH, NOT JUST DESIGN (Stats Section) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>PROVEN TRACK RECORD</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Built for Growth, Not Just Design
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        We combine funnel strategy, conversion-focused design and marketing technology to create customer journeys that support real business growth.
      </p>
    </div>

    <!-- 4 Stats Columns in Glass Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 space-y-2 transition-all">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400 tracking-tight">6+</div>
        <div class="text-xs sm:text-sm font-semibold text-slate-300">Years Experience</div>
      </div>

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 space-y-2 transition-all">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400 tracking-tight">800+</div>
        <div class="text-xs sm:text-sm font-semibold text-slate-300">Clients Globally</div>
      </div>

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 space-y-2 transition-all">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400 tracking-tight">1,000+</div>
        <div class="text-xs sm:text-sm font-semibold text-slate-300">Projects</div>
      </div>

      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 space-y-2 transition-all">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400 tracking-tight">500+</div>
        <div class="text-xs sm:text-sm font-semibold text-slate-300">Funnels Completed</div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 6. YOUR FUNNEL SHOULDN'T WORK ALONE (Connected Ecosystem) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
        Your Funnel Shouldn't Work Alone
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        We can connect your funnel with CRM, follow-up automation and AI appointment setting to create a complete lead-to-customer system.
      </p>
    </div>

    <!-- 5 Connected Glow Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-center">

      <!-- Card 1: Funnel -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-purple-500/40 shadow-[0_0_25px_rgba(168,85,247,0.15)] text-center space-y-3 relative hover:scale-105 transition-all">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 mx-auto flex items-center justify-center">
          <i data-lucide="filter" class="w-5 h-5"></i>
        </div>
        <div class="text-sm font-bold text-white">Funnel</div>
        <div class="text-[11px] text-slate-400">Capture &amp; convert traffic</div>
      </div>

      <!-- Card 2: CRM -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-cyan-500/30 text-center space-y-3 relative hover:scale-105 transition-all">
        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 mx-auto flex items-center justify-center">
          <i data-lucide="database" class="w-5 h-5"></i>
        </div>
        <div class="text-sm font-bold text-white">CRM</div>
        <div class="text-[11px] text-slate-400">Organize &amp; manage leads</div>
      </div>

      <!-- Card 3: Automation -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-purple-500/30 text-center space-y-3 relative hover:scale-105 transition-all">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 mx-auto flex items-center justify-center">
          <i data-lucide="refresh-cw" class="w-5 h-5"></i>
        </div>
        <div class="text-sm font-bold text-white">Automation</div>
        <div class="text-[11px] text-slate-400">Send the right message at the right time</div>
      </div>

      <!-- Card 4: AI -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-cyan-500/30 text-center space-y-3 relative hover:scale-105 transition-all">
        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 mx-auto flex items-center justify-center">
          <i data-lucide="bot" class="w-5 h-5"></i>
        </div>
        <div class="text-sm font-bold text-white">AI</div>
        <div class="text-[11px] text-slate-400">Smarter conversations. More bookings.</div>
      </div>

      <!-- Card 5: Appointment -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-purple-500/30 text-center space-y-3 relative hover:scale-105 transition-all">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 mx-auto flex items-center justify-center">
          <i data-lucide="calendar-check" class="w-5 h-5"></i>
        </div>
        <div class="text-sm font-bold text-white">Appointment</div>
        <div class="text-[11px] text-slate-400">Turn leads into revenue</div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 7. READY TO BUILD YOUR FUNNEL (Bottom CTA Banner) -->
<!-- ========================================================================= -->
<section class="py-16 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative rounded-3xl p-8 sm:p-14 overflow-hidden bg-gradient-to-r from-[#170B28] via-[#091024] to-[#041E26] border border-purple-500/40 shadow-[0_0_50px_rgba(168,85,247,0.25)] text-center space-y-6">

      <!-- Glowing Background Gradients -->
      <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-48 bg-purple-600/30 rounded-full blur-3xl pointer-events-none"></div>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Ready to Build Your Funnel?
      </h2>

      <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
        Let's turn your traffic into a structured customer journey.
      </p>

      <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
        <button onclick="window.openBookingModal && window.openBookingModal()" class="px-8 py-3.5 rounded-full bg-[#38C5D2] hover:bg-[#2EB3C0] text-slate-950 font-bold text-xs sm:text-sm flex items-center gap-2 transition-all duration-200 hover:scale-105 shadow-[0_0_25px_rgba(56,197,210,0.4)]">
          <span>Book a Free Strategy Call</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>

        <a href="#funnels-built" class="px-8 py-3.5 rounded-full bg-white/[0.05] hover:bg-white/10 border border-white/15 text-white font-medium text-xs sm:text-sm transition-all duration-200">
          <span>View Our Work</span>
        </a>
      </div>

    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Portfolio Filter Tab Logic
    const filterBtns = document.querySelectorAll('#funnel-filter-tabs .filter-btn');
    const funnelCards = document.querySelectorAll('#funnel-cards-grid .funnel-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');

        // Update active button state
        filterBtns.forEach(b => {
          b.className = 'filter-btn px-4 py-2 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:border-white/20 transition-all';
        });
        btn.className = 'filter-btn active px-4 py-2 rounded-full text-xs font-bold bg-purple-600 text-white shadow-[0_0_15px_rgba(168,85,247,0.4)] transition-all';

        // Filter cards
        funnelCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  });
</script>
@endpush

