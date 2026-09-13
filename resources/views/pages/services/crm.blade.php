@extends('layouts.app')

@section('title', 'CRM Systems & Pipeline Architecture — Growxpect')
@section('meta_description', 'Turn your leads into an organized growth system with custom GoHighLevel CRM setup, automated pipeline management, and multi-channel lead routing.')

@section('content')
<!-- ========================================================================= -->
<!-- 1. HERO SECTION -->
<!-- ========================================================================= -->
<section class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
  <!-- Ambient Glow Orbs -->
  <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-600/15 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/3 right-1/4 -translate-y-1/2 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

      <!-- Left: Copy & Actions -->
      <div class="lg:col-span-6 space-y-6 text-left">
        <div class="inline-flex items-center gap-2 text-xs font-mono font-bold tracking-widest text-[#38C5D2] uppercase">
          <span># CRM SYSTEMS</span>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold tracking-tight text-white leading-[1.12]">
          Turn Your Leads Into<br />
          an Organized<br />
          <span class="text-[#38C5D2]">Growth System</span>
        </h1>

        <p class="text-base sm:text-lg text-slate-300 max-w-xl leading-relaxed">
          We build CRM systems that organize your leads, manage your pipeline and automate the follow-up needed to move opportunities forward.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-2">
          <button onclick="window.openBookingModal && window.openBookingModal()" class="px-7 py-3.5 rounded-full bg-[#38C5D2] hover:bg-[#2EB3C0] text-slate-950 font-bold text-xs sm:text-sm flex items-center gap-2 transition-all duration-200 hover:scale-[1.03] active:scale-95 shadow-[0_0_25px_rgba(56,197,210,0.35)]">
            <span>Book a Free Strategy Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>

          <a href="#pipeline-section" class="px-7 py-3.5 rounded-full bg-white/[0.04] hover:bg-white/10 border border-white/15 text-white font-medium text-xs sm:text-sm transition-all duration-200 hover:border-white/30">
            <span>Explore Our Systems</span>
          </a>
        </div>
      </div>

      <!-- Right: Interactive CRM Dashboard & Pipeline Card -->
      <div class="lg:col-span-6 relative">
        <div class="rounded-3xl bg-[#080E21]/95 border border-white/10 p-5 sm:p-7 shadow-[0_0_50px_rgba(0,0,0,0.7),0_0_30px_rgba(168,85,247,0.15)] backdrop-blur-2xl space-y-6">

          <!-- Top KPI Header -->
          <div>
            <div class="flex items-center justify-between pb-3 border-b border-white/[0.08]">
              <div class="text-xs sm:text-sm font-bold text-white flex items-center gap-2">
                <i data-lucide="layout-dashboard" class="w-4 h-4 text-cyan-400"></i>
                <span>Lead Overview</span>
              </div>
              <div class="px-2.5 py-1 rounded-lg bg-white/5 border border-white/10 text-[11px] text-slate-400 flex items-center gap-1.5">
                <span>Last 30 Days</span>
                <i data-lucide="chevron-down" class="w-3 h-3 text-slate-500"></i>
              </div>
            </div>

            <!-- 4 Metric KPI Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 pt-3">
              <div class="p-3 rounded-xl bg-cyan-950/30 border border-cyan-500/30 text-center space-y-1">
                <div class="text-[10px] text-slate-400">Total Leads</div>
                <div class="text-xl font-black text-cyan-400">128</div>
              </div>

              <div class="p-3 rounded-xl bg-purple-950/30 border border-purple-500/30 text-center space-y-1">
                <div class="text-[10px] text-slate-400">Active Opps</div>
                <div class="text-xl font-black text-purple-400">64</div>
              </div>

              <div class="p-3 rounded-xl bg-blue-950/30 border border-blue-500/30 text-center space-y-1">
                <div class="text-[10px] text-slate-400">Appointments</div>
                <div class="text-xl font-black text-blue-400">31</div>
              </div>

              <div class="p-3 rounded-xl bg-emerald-950/30 border border-emerald-500/30 text-center space-y-1">
                <div class="text-[10px] text-slate-400">Won Deals</div>
                <div class="text-xl font-black text-emerald-400">18</div>
              </div>
            </div>
          </div>

          <!-- Sales Pipeline Flow Track -->
          <div class="space-y-3">
            <div class="text-xs font-bold text-slate-300">Sales Pipeline</div>
            <div class="p-3.5 rounded-2xl bg-white/[0.02] border border-white/[0.08] relative">
              <div class="grid grid-cols-6 gap-1 text-center items-center relative">

                <!-- Track 1 -->
                <div class="space-y-1">
                  <div class="w-3 h-3 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2] mx-auto"></div>
                  <div class="text-[9px] text-slate-400">New Lead</div>
                  <div class="text-[10px] font-bold text-white">128</div>
                </div>

                <!-- Track 2 -->
                <div class="space-y-1">
                  <div class="w-3 h-3 rounded-full bg-cyan-500 mx-auto"></div>
                  <div class="text-[9px] text-slate-400">Contacted</div>
                  <div class="text-[10px] font-bold text-white">96</div>
                </div>

                <!-- Track 3 -->
                <div class="space-y-1">
                  <div class="w-3 h-3 rounded-full bg-indigo-500 mx-auto"></div>
                  <div class="text-[9px] text-slate-400">Qualified</div>
                  <div class="text-[10px] font-bold text-white">64</div>
                </div>

                <!-- Track 4 -->
                <div class="space-y-1">
                  <div class="w-3 h-3 rounded-full bg-purple-500 mx-auto"></div>
                  <div class="text-[9px] text-slate-400">Appointment</div>
                  <div class="text-[10px] font-bold text-white">31</div>
                </div>

                <!-- Track 5 -->
                <div class="space-y-1">
                  <div class="w-3 h-3 rounded-full bg-purple-400 mx-auto"></div>
                  <div class="text-[9px] text-slate-400">Proposal</div>
                  <div class="text-[10px] font-bold text-white">24</div>
                </div>

                <!-- Track 6 -->
                <div class="space-y-1">
                  <div class="w-3 h-3 rounded-full bg-emerald-400 shadow-[0_0_8px_#34D399] mx-auto"></div>
                  <div class="text-[9px] text-slate-400">Won</div>
                  <div class="text-[10px] font-bold text-emerald-400">18</div>
                </div>

              </div>
            </div>
          </div>

          <!-- Active Lead Highlight Pill -->
          <div class="p-3.5 rounded-xl bg-purple-950/40 border border-purple-500/40 flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-full bg-purple-600 text-white font-bold text-xs flex items-center justify-center">
                SW
              </div>
              <div>
                <div class="text-xs font-bold text-white">Sarah Williams</div>
                <div class="text-[11px] text-slate-300">Real Estate &bull; <span class="text-emerald-400 font-semibold">$8,700</span></div>
              </div>
            </div>
            <span class="px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-300 border border-cyan-400/30 text-[10px] font-bold">
              Appointment: Tomorrow
            </span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. DISCONNECTED VS CONNECTED CRM COMPARISON -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>THE PROBLEM &amp; THE SOLUTION</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Your Leads Shouldn't Live in a Spreadsheet
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        From disconnected tools to a unified CRM &mdash; get everything organized in one place.
      </p>
    </div>

    <!-- 2 Panels Comparison -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

      <!-- Left: Disconnected Chaos (Problem) -->
      <div class="p-7 sm:p-9 rounded-3xl bg-[#091024] border border-rose-500/30 space-y-6 flex flex-col justify-between shadow-xl">
        <div class="space-y-6">
          <span class="inline-block px-3.5 py-1 rounded-full bg-rose-500/20 border border-rose-500/30 text-rose-400 font-bold text-[10px] tracking-wider uppercase">
            DISCONNECTED CHAOS
          </span>

          <div class="relative py-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-center">
              <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-xs font-bold text-slate-300 flex items-center justify-center gap-2">
                <i data-lucide="globe" class="w-4 h-4 text-rose-400"></i> Website
              </div>
              <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-xs font-bold text-slate-300 flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-blue-400 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span>Facebook</span>
              </div>
              <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-xs font-bold text-slate-300 flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-amber-400 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.08 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                <span>Google</span>
              </div>
              <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-xs font-bold text-slate-300 flex items-center justify-center gap-2">
                <i data-lucide="phone" class="w-4 h-4 text-emerald-400"></i> Phone
              </div>
              <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-xs font-bold text-slate-300 flex items-center justify-center gap-2">
                <i data-lucide="file-text" class="w-4 h-4 text-indigo-400"></i> Forms
              </div>
              <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 text-xs font-bold text-slate-300 flex items-center justify-center gap-2">
                <i data-lucide="mail-warning" class="w-4 h-4 text-rose-400"></i> Manual Follow-Up
              </div>
            </div>

            <!-- Chaotic arrow down to spreadsheet -->
            <div class="pt-6 text-center">
              <div class="w-0.5 h-6 bg-rose-500/40 mx-auto mb-2 border-dashed border-l-2"></div>
              <div class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-rose-950/40 border border-rose-500/30 text-rose-300 font-bold text-xs shadow-sm">
                <i data-lucide="sheet" class="w-4 h-4 text-rose-400"></i> Messy Spreadsheets &amp; Lost Leads
              </div>
            </div>
          </div>
        </div>

        <p class="text-xs text-rose-300/80 leading-relaxed font-medium">
          &times; Scattered lead channels lead to missed follow-ups, delayed response times, and lost revenue.
        </p>
      </div>

      <!-- Right: Connected CRM (Solution) -->
      <div class="p-7 sm:p-9 rounded-3xl bg-[#091024] border border-cyan-500/40 space-y-6 flex flex-col justify-between shadow-[0_0_35px_rgba(56,197,210,0.12)]">
        <div class="space-y-6">
          <span class="inline-block px-3.5 py-1 rounded-full bg-cyan-500/20 border border-cyan-400/30 text-cyan-300 font-bold text-[10px] tracking-wider uppercase">
            CONNECTED CRM ARCHITECTURE
          </span>

          <!-- Organized Sequence -->
          <div class="space-y-2.5 max-w-md mx-auto">

            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 flex items-center justify-between text-xs font-bold text-white">
              <span class="flex items-center gap-2.5">
                <i data-lucide="user-plus" class="w-4 h-4 text-cyan-400"></i>
                Lead Capture
              </span>
              <span class="text-[10px] text-slate-500">&darr;</span>
            </div>

            <div class="p-3 rounded-xl bg-purple-950/50 border border-purple-500/40 flex items-center justify-between text-xs font-bold text-purple-200 shadow-md">
              <span class="flex items-center gap-2.5">
                <i data-lucide="database" class="w-4 h-4 text-purple-400"></i>
                Unified CRM Core
              </span>
              <span class="text-[10px] text-purple-400">&darr;</span>
            </div>

            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 flex items-center justify-between text-xs font-bold text-white">
              <span class="flex items-center gap-2.5">
                <i data-lucide="kanban" class="w-4 h-4 text-cyan-400"></i>
                Visual Pipeline
              </span>
              <span class="text-[10px] text-slate-500">&darr;</span>
            </div>

            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 flex items-center justify-between text-xs font-bold text-white">
              <span class="flex items-center gap-2.5">
                <i data-lucide="refresh-cw" class="w-4 h-4 text-blue-400"></i>
                Automated Follow-Up
              </span>
              <span class="text-[10px] text-slate-500">&darr;</span>
            </div>

            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 flex items-center justify-between text-xs font-bold text-white">
              <span class="flex items-center gap-2.5">
                <i data-lucide="calendar-check" class="w-4 h-4 text-cyan-400"></i>
                Booked Appointment
              </span>
              <span class="text-[10px] text-slate-500">&darr;</span>
            </div>

            <div class="p-3 rounded-xl bg-emerald-950/60 border border-emerald-400/50 text-emerald-300 shadow-lg flex items-center justify-between text-xs font-bold">
              <span class="flex items-center gap-2.5">
                <i data-lucide="badge-check" class="w-4 h-4 text-emerald-400"></i>
                Won Customer &amp; Closed Deal
              </span>
              <span class="text-[10px] text-emerald-400 font-mono">Closed &check;</span>
            </div>

          </div>
        </div>

        <p class="text-xs text-cyan-300 leading-relaxed font-semibold">
          &check; All leads automatically routed, tagged, nurtured, and scheduled inside one unified system.
        </p>
      </div>

    </div>

    <!-- ========================================================================= -->
    <!-- 3. WHAT WE BUILD (6 Feature Cards) -->
    <!-- ========================================================================= -->
    <div class="mt-28 pt-10 border-t border-white/[0.08]">

      <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
          <span>WHAT WE BUILD</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
          Everything Your CRM Needs to Run Your Sales Process
        </h2>
      </div>

      <!-- 6 Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="sliders-horizontal" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">CRM Setup &amp; Architecture</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              We design and configure your CRM for your business model and sales process.
            </p>
          </div>
          <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
            <span>Explore Feature &rarr;</span>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="user" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Lead Management</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Capture, organize and track leads from every marketing and sales source.
            </p>
          </div>
          <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
            <span>Explore Feature &rarr;</span>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="trending-up" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Sales Pipelines</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Visualize your pipeline and move opportunities forward stage-by-stage.
            </p>
          </div>
          <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
            <span>Explore Feature &rarr;</span>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="tag" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Custom Fields &amp; Tags</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Segment your leads with custom fields, tags and smart automated lists.
            </p>
          </div>
          <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
            <span>Explore Feature &rarr;</span>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="refresh-cw" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Workflow Automation</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Automate follow-ups, notifications, reminders and key business actions.
            </p>
          </div>
          <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
            <span>Explore Feature &rarr;</span>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="calendar" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Calendars &amp; Appointment Booking</h3>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
              Let leads book appointments and sync with your team's real-time calendars.
            </p>
          </div>
          <div class="pt-2 flex items-center text-[#38C5D2] group-hover:translate-x-1 font-bold text-sm transition-all">
            <span>Explore Feature &rarr;</span>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 4. CRM PIPELINE KANBAN BOARD SECTION (Dark Theme) -->
<!-- ========================================================================= -->
<section id="pipeline-section" class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
      <div class="text-xs font-bold uppercase tracking-wider text-cyan-400 font-mono">
        &mdash; CRM PIPELINE &mdash;
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        See Every Opportunity. Know What Happens Next.
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        A clear pipeline gives you full visibility and helps you close more deals.
      </p>
    </div>

    <!-- Interactive 6-Column Kanban Board -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3.5 overflow-x-auto pb-4">

      <!-- Column 1: NEW LEAD -->
      <div class="p-3.5 rounded-2xl bg-[#091024] border border-white/10 space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-white/10">
          <span class="text-[11px] font-bold text-slate-300 uppercase">NEW LEAD</span>
          <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10 text-white font-mono">12</span>
        </div>

        <div class="space-y-2.5">
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Daniel Carter</div>
            <div class="text-[10px] text-slate-400">Local Business &bull; <span class="text-cyan-400">$2,400</span></div>
            <div class="text-[9px] text-slate-500">1 hour ago</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Jessica Miller</div>
            <div class="text-[10px] text-slate-400">Real Estate &bull; <span class="text-cyan-400">$4,800</span></div>
            <div class="text-[9px] text-slate-500">3 hours ago</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Robert Davis</div>
            <div class="text-[10px] text-slate-400">SaaS &bull; <span class="text-cyan-400">$1,500</span></div>
            <div class="text-[9px] text-slate-500">Today</div>
          </div>
        </div>
      </div>

      <!-- Column 2: CONTACTED -->
      <div class="p-3.5 rounded-2xl bg-[#091024] border border-white/10 space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-white/10">
          <span class="text-[11px] font-bold text-slate-300 uppercase">CONTACTED</span>
          <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10 text-white font-mono">10</span>
        </div>

        <div class="space-y-2.5">
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Emily Wilson</div>
            <div class="text-[10px] text-slate-400">Healthcare &bull; <span class="text-cyan-400">$6,200</span></div>
            <div class="text-[9px] text-slate-500">Today</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">James Anderson</div>
            <div class="text-[10px] text-slate-400">SaaS &bull; <span class="text-cyan-400">$3,900</span></div>
            <div class="text-[9px] text-slate-500">Yesterday</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Laura Martinez</div>
            <div class="text-[10px] text-slate-400">Local Business &bull; <span class="text-cyan-400">$2,500</span></div>
            <div class="text-[9px] text-slate-500">Yesterday</div>
          </div>
        </div>
      </div>

      <!-- Column 3: QUALIFIED -->
      <div class="p-3.5 rounded-2xl bg-[#091024] border border-white/10 space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-white/10">
          <span class="text-[11px] font-bold text-slate-300 uppercase">QUALIFIED</span>
          <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10 text-white font-mono">12</span>
        </div>

        <div class="space-y-2.5">
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Olivia Thomas</div>
            <div class="text-[10px] text-slate-400">SaaS &bull; <span class="text-cyan-400">$7,200</span></div>
            <div class="text-[9px] text-slate-500">Yesterday</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Sophia Lee</div>
            <div class="text-[10px] text-slate-400">Coaching &bull; <span class="text-cyan-400">$8,400</span></div>
            <div class="text-[9px] text-slate-500">2 days ago</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Kevin Harris</div>
            <div class="text-[10px] text-slate-400">E-commerce &bull; <span class="text-cyan-400">$4,100</span></div>
            <div class="text-[9px] text-slate-500">2 days ago</div>
          </div>
        </div>
      </div>

      <!-- Column 4: APPOINTMENT -->
      <div class="p-3.5 rounded-2xl bg-[#091024] border border-purple-500/30 space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-purple-500/20">
          <span class="text-[11px] font-bold text-purple-300 uppercase">APPOINTMENT</span>
          <span class="text-[10px] px-2 py-0.5 rounded-full bg-purple-500/20 text-purple-300 font-mono">8</span>
        </div>

        <div class="space-y-2.5">
          <div class="p-3 rounded-xl bg-purple-950/20 border border-purple-500/30 hover:border-purple-400 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Olivia Robinson</div>
            <div class="text-[10px] text-slate-300">Med Spa &bull; <span class="text-purple-400 font-semibold">$2,900</span></div>
            <div class="text-[9px] text-purple-300 font-medium">Tomorrow</div>
          </div>

          <div class="p-3 rounded-xl bg-purple-950/20 border border-purple-500/30 hover:border-purple-400 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">William Scott</div>
            <div class="text-[10px] text-slate-300">Home Services &bull; <span class="text-purple-400 font-semibold">$6,700</span></div>
            <div class="text-[9px] text-purple-300 font-medium">Tomorrow</div>
          </div>

          <div class="p-3 rounded-xl bg-purple-950/20 border border-purple-500/30 hover:border-purple-400 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Isabella Clark</div>
            <div class="text-[10px] text-slate-300">Consulting &bull; <span class="text-purple-400 font-semibold">$4,800</span></div>
            <div class="text-[9px] text-slate-500">2 days ago</div>
          </div>
        </div>
      </div>

      <!-- Column 5: PROPOSAL -->
      <div class="p-3.5 rounded-2xl bg-[#091024] border border-white/10 space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-white/10">
          <span class="text-[11px] font-bold text-slate-300 uppercase">PROPOSAL</span>
          <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10 text-white font-mono">6</span>
        </div>

        <div class="space-y-2.5">
          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Ryan Watson</div>
            <div class="text-[10px] text-slate-400">Real Estate &bull; <span class="text-cyan-400">$11,800</span></div>
            <div class="text-[9px] text-slate-500">Tomorrow</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Grace Hall</div>
            <div class="text-[10px] text-slate-400">Health &amp; Fitness &bull; <span class="text-cyan-400">$4,300</span></div>
            <div class="text-[9px] text-slate-500">3 days ago</div>
          </div>

          <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] hover:border-cyan-400/40 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Isabella Clark</div>
            <div class="text-[10px] text-slate-400">Consulting &bull; <span class="text-cyan-400">$4,800</span></div>
            <div class="text-[9px] text-slate-500">2 days ago</div>
          </div>
        </div>
      </div>

      <!-- Column 6: WON -->
      <div class="p-3.5 rounded-2xl bg-emerald-950/20 border border-emerald-500/30 space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-emerald-500/20">
          <span class="text-[11px] font-bold text-emerald-400 uppercase">WON</span>
          <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 font-mono">4</span>
        </div>

        <div class="space-y-2.5">
          <div class="p-3 rounded-xl bg-emerald-950/40 border border-emerald-500/30 hover:border-emerald-400 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Ava Perez</div>
            <div class="text-[10px] text-slate-300">E-commerce &bull; <span class="text-emerald-400 font-bold">$5,200</span></div>
            <div class="text-[9px] text-emerald-300 font-medium">1 day ago</div>
          </div>

          <div class="p-3 rounded-xl bg-emerald-950/40 border border-emerald-500/30 hover:border-emerald-400 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Liam Cooper</div>
            <div class="text-[10px] text-slate-300">Insurance &bull; <span class="text-emerald-400 font-bold">$13,200</span></div>
            <div class="text-[9px] text-emerald-300 font-medium">3 days ago</div>
          </div>

          <div class="p-3 rounded-xl bg-emerald-950/40 border border-emerald-500/30 hover:border-emerald-400 transition-all space-y-1.5">
            <div class="text-xs font-bold text-white">Mia Bell</div>
            <div class="text-[10px] text-slate-300">Coaching &bull; <span class="text-emerald-400 font-bold">$7,800</span></div>
            <div class="text-[9px] text-emerald-300 font-medium">4 days ago</div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. LEAD MANAGEMENT & MULTI-CHANNEL ROUTING -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>LEAD MANAGEMENT SYSTEM</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        How Leads Enter and Move Through Your CRM
      </h2>
    </div>

    <!-- Multi-Channel Flow Grid -->
    <div class="space-y-8">

      <!-- Top Channels -->
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <svg class="w-5 h-5 text-blue-400 mx-auto" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          <div class="text-xs font-bold text-slate-200">Facebook Ads</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <svg class="w-5 h-5 text-amber-400 mx-auto" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.08 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
          <div class="text-xs font-bold text-slate-200">Google Ads</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <i data-lucide="globe" class="w-5 h-5 text-cyan-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Website</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <i data-lucide="layout" class="w-5 h-5 text-purple-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Landing Page</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <i data-lucide="phone" class="w-5 h-5 text-emerald-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Phone</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <i data-lucide="user-plus" class="w-5 h-5 text-indigo-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Manual Entry</div>
        </div>
      </div>

      <!-- Center Hub: Central CRM + Lead Record -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">

        <!-- Central CRM -->
        <div class="lg:col-span-5 p-7 rounded-3xl bg-gradient-to-br from-purple-900/60 to-[#091024] border border-purple-500/40 text-white text-center space-y-3 shadow-[0_0_35px_rgba(168,85,247,0.15)]">
          <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-400/30 mx-auto flex items-center justify-center">
            <i data-lucide="database" class="w-6 h-6 text-purple-300"></i>
          </div>
          <div class="text-xl font-extrabold text-white">Central CRM</div>
          <div class="text-xs text-purple-300 font-mono">Organize &bull; Track &bull; Automate</div>
        </div>

        <!-- Connector Arrow -->
        <div class="hidden lg:flex lg:col-span-2 justify-center text-cyan-400 font-bold text-2xl animate-pulse">
          &rarr;
        </div>

        <!-- Lead Record Preview -->
        <div class="lg:col-span-5 p-6 rounded-3xl bg-[#091024] border border-white/10 shadow-xl space-y-4">
          <div class="flex items-center justify-between pb-3 border-b border-white/10">
            <div class="flex items-center gap-2.5">
              <div class="w-9 h-9 rounded-full bg-purple-600 text-white font-bold text-xs flex items-center justify-center">
                SW
              </div>
              <div>
                <div class="text-xs font-bold text-white">Sarah Williams</div>
                <div class="text-[11px] text-slate-400">Real Estate &bull; (555) 123-4567</div>
              </div>
            </div>
            <span class="text-[10px] font-bold text-purple-300 bg-purple-500/20 border border-purple-500/30 px-3 py-1 rounded-full">Lead Record</span>
          </div>

          <div class="grid grid-cols-2 gap-3 text-xs">
            <div><span class="text-slate-400">Lead Source:</span> <span class="font-semibold text-white">Facebook Ads</span></div>
            <div><span class="text-slate-400">Pipeline:</span> <span class="font-semibold text-cyan-400">Contacted</span></div>
            <div><span class="text-slate-400">Assigned User:</span> <span class="font-semibold text-white">Alex Carter</span></div>
            <div><span class="text-slate-400">Next Task:</span> <span class="font-semibold text-purple-400">Follow Up (Today)</span></div>
          </div>
        </div>

      </div>

      <!-- Bottom Outbound Automated Actions -->
      <div class="grid grid-cols-2 sm:grid-cols-5 gap-3 pt-4">
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-purple-500/30 transition-all">
          <i data-lucide="message-square" class="w-4 h-4 text-purple-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">SMS</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-cyan-500/30 transition-all">
          <i data-lucide="mail" class="w-4 h-4 text-cyan-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Email</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-emerald-500/30 transition-all">
          <i data-lucide="phone-call" class="w-4 h-4 text-emerald-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Call</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 hover:border-blue-500/30 transition-all">
          <i data-lucide="calendar-plus" class="w-4 h-4 text-blue-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Appointment</div>
        </div>
        <div class="p-3.5 rounded-xl bg-[#091024] border border-white/10 text-center space-y-1.5 col-span-2 sm:col-span-1 hover:border-indigo-500/30 transition-all">
          <i data-lucide="check-square" class="w-4 h-4 text-indigo-400 mx-auto"></i>
          <div class="text-xs font-bold text-slate-200">Task</div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 6. CRM AUTOMATION WORKFLOW ENGINE -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>CRM AUTOMATION</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Let Your CRM Handle the Repetitive Work
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        Automate your follow-ups, reminders and administrative tasks so you can focus on closing deals.
      </p>
    </div>

    <!-- Visual Decision Logic Flowchart -->
    <div class="p-6 sm:p-10 rounded-3xl bg-[#091024] border border-white/10 shadow-2xl relative">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-3 items-center text-center">

        <!-- Step 1 -->
        <div class="p-4 rounded-xl bg-purple-950/40 border border-purple-500/30 space-y-2">
          <div class="w-8 h-8 rounded-lg bg-purple-600 text-white mx-auto flex items-center justify-center">
            <i data-lucide="user-plus" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">New Lead</div>
        </div>

        <!-- Step 2 -->
        <div class="p-4 rounded-xl bg-cyan-950/40 border border-cyan-500/30 space-y-2">
          <div class="w-8 h-8 rounded-lg bg-cyan-600 text-white mx-auto flex items-center justify-center">
            <i data-lucide="message-square" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Instant SMS</div>
        </div>

        <!-- Step 3 -->
        <div class="p-4 rounded-xl bg-purple-950/40 border border-purple-500/30 space-y-2">
          <div class="w-8 h-8 rounded-lg bg-purple-600 text-white mx-auto flex items-center justify-center">
            <i data-lucide="mail" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Email Follow-Up</div>
        </div>

        <!-- Step 4 -->
        <div class="p-4 rounded-xl bg-cyan-950/40 border border-cyan-500/30 space-y-2">
          <div class="w-8 h-8 rounded-lg bg-cyan-600 text-white mx-auto flex items-center justify-center">
            <i data-lucide="user-check" class="w-4 h-4"></i>
          </div>
          <div class="text-xs font-bold text-white">Assign Sales Rep</div>
        </div>

        <!-- Step 5 (Decision Logic Branch) -->
        <div class="p-4 rounded-xl bg-indigo-950/40 border border-indigo-500/40 space-y-2 col-span-1 lg:col-span-2">
          <div class="inline-block px-2.5 py-0.5 rounded-full bg-indigo-500/20 text-indigo-300 font-bold text-[10px]">
            Decision: Replied?
          </div>
          <div class="grid grid-cols-2 gap-2 text-left pt-1">
            <div class="p-2 rounded-lg bg-emerald-950/40 border border-emerald-500/30 text-[10px] text-emerald-300">
              <span class="font-bold">YES &rarr;</span> Sales Rep Notified
            </div>
            <div class="p-2 rounded-lg bg-purple-950/40 border border-purple-500/30 text-[10px] text-purple-300">
              <span class="font-bold">NO &rarr;</span> Auto Nurture
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 7. YOUR COMPLETE GROWTH SYSTEM (7 Step Flow) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>CRM &bull; FUNNEL &bull; AUTOMATION</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Your Complete Growth System
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        Capture more leads. Organize them in your CRM. Automate follow-ups. Close more deals.
      </p>
    </div>

    <!-- 7 Horizontal Flow Steps with CRM Highlighted -->
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-3 items-center">

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center">
        <div class="w-9 h-9 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center">
          <i data-lucide="activity" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-white">Traffic</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center">
        <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
          <i data-lucide="filter" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-white">Funnel</div>
      </div>

      <!-- Highlighted CRM Core -->
      <div class="p-4 rounded-2xl bg-purple-900/60 border-2 border-purple-400/80 text-white shadow-[0_0_30px_rgba(168,85,247,0.3)] text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center transform scale-105">
        <div class="w-9 h-9 rounded-xl bg-purple-500/30 border border-purple-300/40 text-purple-200 flex items-center justify-center">
          <i data-lucide="database" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-extrabold text-white">CRM Core</div>
        <div class="text-[9px] text-purple-300 font-mono">Central Engine</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center">
        <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
          <i data-lucide="kanban" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-white">Pipeline</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center">
        <div class="w-9 h-9 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center">
          <i data-lucide="refresh-cw" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-white">Automation</div>
      </div>

      <div class="p-4 rounded-2xl bg-[#091024] border border-white/10 text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center">
        <div class="w-9 h-9 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
          <i data-lucide="calendar" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-white">Appointment</div>
      </div>

      <div class="p-4 rounded-2xl bg-emerald-950/40 border border-emerald-500/40 text-center space-y-1.5 min-h-[130px] flex flex-col items-center justify-center">
        <div class="w-9 h-9 rounded-xl bg-emerald-500/20 border border-emerald-400/30 text-emerald-400 flex items-center justify-center">
          <i data-lucide="award" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-emerald-300">Customer</div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 8. EVERYTHING YOU NEED, IN ONE DASHBOARD (6 Modules) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>CRM DASHBOARD FEATURES</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Everything You Need, in One Dashboard
      </h2>
    </div>

    <!-- 6 Dashboard Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Feature 1: Lead Tracking -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
            <i data-lucide="users" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Lead Tracking</h3>
            <p class="text-xs text-slate-400">Real-time status &amp; lead source logs</p>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 text-xs space-y-2 text-slate-300">
          <div class="flex justify-between font-semibold"><span>Alex Johnson</span> <span class="text-cyan-400">New Lead</span></div>
          <div class="flex justify-between font-semibold"><span>Sarah Connor</span> <span class="text-purple-400">Contacted</span></div>
        </div>
      </div>

      <!-- Feature 2: Pipeline Management -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center">
            <i data-lucide="kanban" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Pipeline Management</h3>
            <p class="text-xs text-slate-400">Drag &amp; drop deal flow stages</p>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 text-xs space-y-2 text-slate-300">
          <div class="flex justify-between font-semibold"><span>Qualified &rarr; Proposal</span> <span class="text-emerald-400 font-bold">$14,200</span></div>
          <div class="flex justify-between font-semibold"><span>Proposal &rarr; Won</span> <span class="text-emerald-400 font-bold">$8,900</span></div>
        </div>
      </div>

      <!-- Feature 3: Task Management -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-indigo-500/20 border border-indigo-500/30 text-indigo-400 flex items-center justify-center">
            <i data-lucide="check-circle" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Task Management</h3>
            <p class="text-xs text-slate-400">Auto-assigned team reminders</p>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 text-xs space-y-2 text-slate-300">
          <div class="flex justify-between"><span>Follow up call (Michael)</span> <span class="font-bold text-purple-400">Today</span></div>
          <div class="flex justify-between"><span>Send revised proposal</span> <span class="font-bold text-slate-400">Tomorrow</span></div>
        </div>
      </div>

      <!-- Feature 4: Appointment Scheduling -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center">
            <i data-lucide="calendar" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Appointment Scheduling</h3>
            <p class="text-xs text-slate-400">2-way Google/Outlook sync</p>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 text-xs space-y-2 text-slate-300">
          <div class="flex justify-between font-semibold"><span>Strategy Session</span> <span class="text-cyan-400">9:00 AM</span></div>
          <div class="flex justify-between font-semibold"><span>Demo Walkthrough</span> <span class="text-cyan-400">2:30 PM</span></div>
        </div>
      </div>

      <!-- Feature 5: Follow-Up Automation -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center">
            <i data-lucide="send" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Follow-Up Automation</h3>
            <p class="text-xs text-slate-400">Multi-channel SMS, email &amp; VM</p>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 text-xs space-y-2 text-slate-300">
          <div class="flex justify-between font-semibold"><span>Day 1: Instant SMS</span> <span class="text-emerald-400">Active</span></div>
          <div class="flex justify-between font-semibold"><span>Day 3: Case Study Drip</span> <span class="text-emerald-400">Active</span></div>
        </div>
      </div>

      <!-- Feature 6: Reporting & Attribution -->
      <div class="p-6 rounded-2xl bg-[#091024] border border-white/10 hover:border-emerald-500/40 transition-all space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center">
            <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="text-base font-bold text-white">Reporting &amp; Attribution</h3>
            <p class="text-xs text-slate-400">Full conversion ROI metrics</p>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 text-xs space-y-2 text-slate-300">
          <div class="flex justify-between font-semibold"><span>Lead-to-Appointment Rate</span> <span class="text-emerald-400 font-bold">24.2%</span></div>
          <div class="flex justify-between font-semibold"><span>Total Pipeline Value</span> <span class="text-emerald-400 font-bold">$184,500</span></div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 9. REAL CRM SYSTEMS. REAL BUSINESS RESULTS (Case Studies) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06] overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Real CRM Systems. Real Business Results.
      </h2>
      <p class="text-xs sm:text-sm text-slate-400">
        Explore some of the custom CRM pipelines we've built for high-growth businesses.
      </p>
    </div>

    <!-- 4 CRM Case Study Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- Case 1 -->
      <div class="group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 p-5 space-y-4 transition-all">
        <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
          <div class="text-xs font-bold text-cyan-400">Mortgage CRM</div>
          <div class="text-[10px] text-slate-400">Lead Routing + Pipeline + Nurture</div>
        </div>
        <div>
          <div class="text-xs font-bold text-white">Mortgage &amp; Loan Pipeline</div>
          <div class="text-[11px] text-slate-400 mt-1">GoHighLevel Architecture</div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Case 2 -->
      <div class="group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 p-5 space-y-4 transition-all">
        <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
          <div class="text-xs font-bold text-purple-400">Home Service CRM</div>
          <div class="text-[10px] text-slate-400">Lead Management + Estimate Follow-Up</div>
        </div>
        <div>
          <div class="text-xs font-bold text-white">Home Services Dispatch</div>
          <div class="text-[11px] text-slate-400 mt-1">GoHighLevel Architecture</div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Case 3 -->
      <div class="group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 p-5 space-y-4 transition-all">
        <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
          <div class="text-xs font-bold text-cyan-400">Med Spa CRM</div>
          <div class="text-[10px] text-slate-400">Appointment Booking + Automation</div>
        </div>
        <div>
          <div class="text-xs font-bold text-white">Aesthetics Clinic Suite</div>
          <div class="text-[11px] text-slate-400 mt-1">GoHighLevel Architecture</div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Case 4 -->
      <div class="group rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 p-5 space-y-4 transition-all">
        <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
          <div class="text-xs font-bold text-purple-400">Insurance CRM</div>
          <div class="text-[10px] text-slate-400">Lead Capture + Pipeline + Follow-Up</div>
        </div>
        <div>
          <div class="text-xs font-bold text-white">Insurance Policy Pipeline</div>
          <div class="text-[11px] text-slate-400 mt-1">GoHighLevel Architecture</div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 10. MORE THAN CRM SETUP & STATS SECTION -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Left: Architecture Concept -->
      <div class="lg:col-span-6 space-y-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
          <span>SYSTEM ARCHITECTURE</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
          More Than CRM Setup
        </h2>
        <p class="text-sm text-slate-300 leading-relaxed">
          We combine strategy, architecture, automation and optimization to create CRM systems that actually drive revenue.
        </p>

        <!-- Node Map Diagram -->
        <div class="p-6 rounded-3xl bg-[#091024] border border-white/10 flex items-center justify-center">
          <div class="relative flex items-center justify-center w-full max-w-sm h-48">
            <!-- Center CRM -->
            <div class="w-16 h-16 rounded-full bg-purple-600 border border-purple-400 text-white font-bold text-sm flex items-center justify-center z-10 shadow-[0_0_25px_rgba(168,85,247,0.5)]">
              CRM
            </div>
            <!-- Orbit Nodes -->
            <div class="absolute top-2 left-6 px-3 py-1.5 rounded-full bg-white/[0.05] border border-white/15 text-[11px] font-bold text-slate-200 backdrop-blur-sm">
              Strategy
            </div>
            <div class="absolute top-2 right-6 px-3 py-1.5 rounded-full bg-white/[0.05] border border-white/15 text-[11px] font-bold text-slate-200 backdrop-blur-sm">
              Architecture
            </div>
            <div class="absolute bottom-2 left-6 px-3 py-1.5 rounded-full bg-white/[0.05] border border-white/15 text-[11px] font-bold text-slate-200 backdrop-blur-sm">
              Automation
            </div>
            <div class="absolute bottom-2 right-6 px-3 py-1.5 rounded-full bg-white/[0.05] border border-white/15 text-[11px] font-bold text-slate-200 backdrop-blur-sm">
              Optimization
            </div>
          </div>
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
<!-- 11. READY TO BUILD A CRM (Bottom CTA Banner) -->
<!-- ========================================================================= -->
<section class="py-16 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative rounded-3xl p-8 sm:p-14 overflow-hidden bg-gradient-to-r from-[#170B28] via-[#091024] to-[#041E26] border border-purple-500/40 shadow-[0_0_50px_rgba(168,85,247,0.25)] text-center space-y-6">

      <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-48 bg-purple-600/30 rounded-full blur-3xl pointer-events-none"></div>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Ready to Build a CRM That Works For Your Business?
      </h2>

      <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
        Let's turn your lead management process into an organized, automated pipeline.
      </p>

      <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
        <button onclick="window.openBookingModal && window.openBookingModal()" class="px-8 py-3.5 rounded-full bg-[#38C5D2] hover:bg-[#2EB3C0] text-slate-950 font-bold text-xs sm:text-sm flex items-center gap-2 transition-all duration-200 hover:scale-105 shadow-[0_0_25px_rgba(56,197,210,0.4)]">
          <span>Book a Free Strategy Call</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>

        <a href="#pipeline-section" class="px-8 py-3.5 rounded-full bg-white/[0.05] hover:bg-white/10 border border-white/15 text-white font-medium text-xs sm:text-sm transition-all duration-200">
          <span>View Our Work</span>
        </a>
      </div>

    </div>
  </div>
</section>
@endsection
