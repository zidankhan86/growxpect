@extends('layouts.app')

@section('title', 'AI Automation & Appointment Setter — Growxpect')
@section('meta_description', 'Deploy 24/7 AI-powered appointment setting, automated qualification, conversational follow-ups, and instant CRM sync.')

@section('content')
<!-- ========================================================================= -->
<!-- 1. HERO SECTION -->
<!-- ========================================================================= -->
<section class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
  <!-- Glowing Background Orbs -->
  <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/3 right-1/4 -translate-y-1/2 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

      <!-- Left: Copy & Actions -->
      <div class="lg:col-span-6 space-y-6 text-left">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/60 border border-purple-500/40 text-purple-300 text-xs font-mono font-bold tracking-widest uppercase shadow-[0_0_15px_rgba(168,85,247,0.2)]">
          <span>AI AUTOMATION &amp; APPOINTMENT SETTER</span>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold tracking-tight text-white leading-[1.12]">
          Turn More Leads Into<br />
          Conversations &amp;<br />
          <span class="text-[#38C5D2]">Appointments</span> <span class="text-white">With AI</span>
        </h1>

        <p class="text-base sm:text-lg text-slate-300 max-w-xl leading-relaxed">
          Deploy AI-powered automation that responds to leads, qualifies prospects, answers questions and helps book appointments around the clock.
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

      <!-- Right: Live AI Chat Simulation + KPI Floating Cards -->
      <div class="lg:col-span-6 relative">
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">

          <!-- Chat Card (Left side of visual) -->
          <div class="sm:col-span-8 rounded-3xl bg-[#080E21]/95 border border-purple-500/30 shadow-[0_0_40px_rgba(0,0,0,0.8),0_0_25px_rgba(168,85,247,0.15)] backdrop-blur-2xl overflow-hidden flex flex-col justify-between">

            <!-- Chat Window Header -->
            <div class="p-3.5 bg-white/[0.03] border-b border-white/10 flex items-center justify-between">
              <div class="flex items-center gap-2.5">
                <div class="w-7 h-7 rounded-full bg-purple-600 text-white flex items-center justify-center text-xs font-bold shadow-sm">
                  <i data-lucide="bot" class="w-4 h-4"></i>
                </div>
                <div>
                  <div class="text-xs font-bold text-white">AI Appointment Setter</div>
                  <div class="text-[9px] text-emerald-400 flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Online 24/7
                  </div>
                </div>
              </div>
              <span class="text-[10px] text-slate-500 font-mono">Live Demo</span>
            </div>

            <!-- Chat Stream Body -->
            <div class="p-4 space-y-3 text-xs">

              <!-- AI Bubble 1 -->
              <div class="flex items-start gap-2 max-w-[85%]">
                <div class="w-5 h-5 rounded-full bg-purple-600 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">AI</div>
                <div class="p-2.5 rounded-2xl rounded-tl-none bg-purple-950/50 border border-purple-500/30 text-purple-100">
                  <p class="leading-relaxed text-[11px]">Hi Derek, thanks for reaching out. What service are you interested in?</p>
                  <span class="text-[8px] text-purple-300 block text-right mt-1">10:30 AM</span>
                </div>
              </div>

              <!-- User Bubble 1 -->
              <div class="flex items-start gap-2 max-w-[85%] ml-auto justify-end">
                <div class="p-2.5 rounded-2xl rounded-tr-none bg-cyan-950/60 border border-cyan-500/40 text-cyan-100">
                  <p class="leading-relaxed text-[11px]">I'm looking for a consultation.</p>
                  <span class="text-[8px] text-cyan-400 block text-right mt-1">10:31 AM</span>
                </div>
              </div>

              <!-- AI Bubble 2 -->
              <div class="flex items-start gap-2 max-w-[85%]">
                <div class="w-5 h-5 rounded-full bg-purple-600 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">AI</div>
                <div class="p-2.5 rounded-2xl rounded-tl-none bg-purple-950/50 border border-purple-500/30 text-purple-100">
                  <p class="leading-relaxed text-[11px]">Awesome, I can help with that. Are you looking for an appointment this week?</p>
                  <span class="text-[8px] text-purple-300 block text-right mt-1">10:31 AM</span>
                </div>
              </div>

              <!-- User Bubble 2 -->
              <div class="flex items-start gap-2 max-w-[85%] ml-auto justify-end">
                <div class="p-2.5 rounded-2xl rounded-tr-none bg-cyan-950/60 border border-cyan-500/40 text-cyan-100">
                  <p class="leading-relaxed text-[11px]">Yes, Thursday would work.</p>
                  <span class="text-[8px] text-cyan-400 block text-right mt-1">10:32 AM</span>
                </div>
              </div>

              <!-- AI Bubble 3 -->
              <div class="flex items-start gap-2 max-w-[85%]">
                <div class="w-5 h-5 rounded-full bg-purple-600 text-white flex items-center justify-center text-[10px] shrink-0 mt-0.5">AI</div>
                <div class="p-2.5 rounded-2xl rounded-tl-none bg-purple-950/50 border border-purple-500/30 text-purple-100">
                  <p class="leading-relaxed text-[11px]">Great, I have two times available: <strong class="text-white">2:00 PM</strong> &amp; <strong class="text-white">4:30 PM</strong></p>
                  <span class="text-[8px] text-purple-300 block text-right mt-1">10:32 AM</span>
                </div>
              </div>

            </div>

            <!-- Chat Footer Input Mockup -->
            <div class="p-2.5 bg-white/[0.02] border-t border-white/10 flex items-center gap-2">
              <div class="flex-1 px-3 py-1.5 rounded-xl bg-white/5 text-[11px] text-slate-400">Type a message...</div>
              <div class="w-7 h-7 rounded-xl bg-purple-600 text-white flex items-center justify-center shrink-0">
                <i data-lucide="send" class="w-3.5 h-3.5"></i>
              </div>
            </div>

          </div>

          <!-- KPI Badges (Right side of visual) -->
          <div class="sm:col-span-4 space-y-3">

            <div class="p-3 rounded-2xl bg-[#091024] border border-cyan-500/30 space-y-1 shadow-md">
              <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xs">
                  <i data-lucide="users" class="w-3.5 h-3.5"></i>
                </div>
                <div class="text-base font-black text-cyan-400">+128</div>
              </div>
              <div class="text-[10px] text-slate-400">New Leads</div>
            </div>

            <div class="p-3 rounded-2xl bg-[#091024] border border-purple-500/30 space-y-1 shadow-md">
              <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-lg bg-purple-500/20 text-purple-400 flex items-center justify-center text-xs">
                  <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                </div>
                <div class="text-base font-black text-purple-400">31</div>
              </div>
              <div class="text-[10px] text-slate-400">Appointments</div>
            </div>

            <div class="p-3 rounded-2xl bg-[#091024] border border-blue-500/30 space-y-1 shadow-md">
              <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center text-xs">
                  <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                </div>
                <div class="text-base font-black text-blue-400">92%</div>
              </div>
              <div class="text-[10px] text-slate-400">Follow-up Rate</div>
            </div>

            <!-- Success Pill -->
            <div class="p-3 rounded-2xl bg-emerald-950/40 border border-emerald-400/50 space-y-1 shadow-lg">
              <div class="text-[10px] font-bold text-emerald-400 flex items-center gap-1.5">
                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-400"></i>
                Appointment Booked
              </div>
              <div class="text-[11px] font-extrabold text-white">Thursday 4:30 PM</div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. AI APPOINTMENT FLOW SECTION (Horizontal Step Track) -->
<!-- ========================================================================= -->
<section id="how-it-works" class="py-16 bg-[#030712] border-y border-white/[0.06] relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-12 space-y-2">
      <div class="text-xs font-bold uppercase tracking-wider text-purple-400 font-mono">
        &mdash; AI APPOINTMENT FLOW &mdash;
      </div>
      <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
        From Lead to Booked Appointment &mdash; Automatically
      </h2>
    </div>

    <!-- 7 Flow Steps -->
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-3 items-center">

      <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/10 text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center">
        <div class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center">
          <i data-lucide="user" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-slate-300">NEW LEAD</div>
      </div>

      <!-- Highlighted Step 2 -->
      <div class="p-3.5 rounded-xl bg-purple-600 text-white shadow-lg text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center border border-purple-400">
        <div class="w-8 h-8 rounded-lg bg-white/20 text-white flex items-center justify-center">
          <i data-lucide="bot" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold">AI RESPONSE</div>
      </div>

      <!-- Highlighted Step 3 -->
      <div class="p-3.5 rounded-xl bg-cyan-950/60 border border-cyan-400/60 text-cyan-300 shadow-lg text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center">
        <div class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
          <i data-lucide="message-square" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold">CONVERSATION</div>
      </div>

      <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/10 text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center">
        <div class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center">
          <i data-lucide="user-check" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-slate-300">QUALIFICATION</div>
      </div>

      <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/10 text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center">
        <div class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center">
          <i data-lucide="calendar" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-slate-300">APPOINTMENT</div>
      </div>

      <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/10 text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center">
        <div class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center">
          <i data-lucide="database" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-slate-300">CRM UPDATE</div>
      </div>

      <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/10 text-center space-y-1.5 min-h-[120px] flex flex-col items-center justify-center">
        <div class="w-8 h-8 rounded-lg bg-white/5 text-slate-300 flex items-center justify-center">
          <i data-lucide="mail" class="w-4 h-4"></i>
        </div>
        <div class="text-xs font-bold text-slate-300">FOLLOW-UP</div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 3. WHAT WE AUTOMATE -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>WHAT WE AUTOMATE</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        What We Automate
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        Let AI handle the busy work, so you can focus on closing more deals.
      </p>
    </div>

    <!-- 6 Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 space-y-4">
        <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
          <i data-lucide="zap" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Instant Lead Response</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          AI responds to new inquiries quickly within seconds across SMS, WhatsApp, and web chat.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 space-y-4">
        <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
          <i data-lucide="user-check" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Lead Qualification</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          AI asks targeted discovery questions and identifies high-intent qualified prospects.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 hover:shadow-[0_0_30px_rgba(56,197,210,0.15)] transition-all duration-300 space-y-4">
        <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
          <i data-lucide="calendar" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors">Appointment Booking</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          AI helps prospects choose and book available times directly on your calendar.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.15)] transition-all duration-300 space-y-4">
        <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
          <i data-lucide="mail-check" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">Automated Follow-Up</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Continue conversations with leads who haven't booked to recover lost opportunities.
        </p>
      </div>

      <!-- Card 5 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.15)] transition-all duration-300 space-y-4">
        <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
          <i data-lucide="messages-square" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">FAQ &amp; Sales Conversations</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Answer common questions and guide prospects toward the next logical step.
        </p>
      </div>

      <!-- Card 6 -->
      <div class="group p-7 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 hover:shadow-[0_0_30px_rgba(168,85,247,0.15)] transition-all duration-300 space-y-4">
        <div class="w-12 h-12 rounded-xl bg-purple-500/20 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
          <i data-lucide="database" class="w-6 h-6"></i>
        </div>
        <h3 class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">CRM Updates</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Automatically update contacts, tags, pipeline stages and activities in real time.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 4. YOUR AI SALES ASSISTANT NEVER SLEEPS -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Left: Copy -->
      <div class="lg:col-span-5 space-y-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
          <span>24/7 AI SALES ENGINE</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
          Your AI Sales Assistant Never Sleeps
        </h2>
        <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
          From first message to booked appointment &mdash; AI handles the entire conversation and automation.
        </p>
      </div>

      <!-- Right: Side-by-Side Panels (Chat + Actions Log) -->
      <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Panel 1: Real-Time Conversation -->
        <div class="p-5 rounded-3xl bg-[#091024] border border-white/10 space-y-4 shadow-xl">
          <div class="text-xs font-bold text-slate-200 pb-2 border-b border-white/10 flex items-center justify-between">
            <span>Real-time Conversation</span>
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
          </div>

          <div class="space-y-3 text-[11px]">
            <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/[0.08] space-y-1">
              <div class="flex justify-between text-slate-400 font-semibold"><span>Sarah Miller</span> <span>10:24 AM</span></div>
              <div class="text-white">Hi, I'm interested in your services. Can I get a free demo?</div>
            </div>

            <div class="p-2.5 rounded-xl bg-purple-950/40 border border-purple-500/30 space-y-1 text-purple-200">
              <div class="flex justify-between font-semibold"><span>AI Assistant</span> <span>10:24 AM</span></div>
              <div>Sure! What service are you interested in?</div>
            </div>

            <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/[0.08] space-y-1">
              <div class="flex justify-between text-slate-400 font-semibold"><span>Sarah Miller</span> <span>10:25 AM</span></div>
              <div class="text-white">I'd like a consultation.</div>
            </div>

            <div class="p-2.5 rounded-xl bg-purple-950/40 border border-purple-500/30 space-y-1 text-purple-200">
              <div class="flex justify-between font-semibold"><span>AI Assistant</span> <span>10:25 AM</span></div>
              <div>Great! I can help with that. Are you looking for an appointment this week?</div>
            </div>

            <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/[0.08] space-y-1">
              <div class="flex justify-between text-slate-400 font-semibold"><span>Sarah Miller</span> <span>10:26 AM</span></div>
              <div class="text-white">Yes, Thursday works for me.</div>
            </div>
          </div>
        </div>

        <!-- Panel 2: AI Actions & Automation Log -->
        <div class="p-5 rounded-3xl bg-[#091024] border border-cyan-500/30 space-y-4 shadow-xl flex flex-col justify-between">
          <div>
            <div class="text-xs font-bold text-cyan-300 pb-2 border-b border-white/10 flex items-center justify-between">
              <span>AI Actions &amp; Automation</span>
              <i data-lucide="activity" class="w-4 h-4 text-cyan-400"></i>
            </div>

            <div class="space-y-2.5 pt-2 text-[11px]">
              <div class="flex items-center justify-between text-slate-300">
                <span class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-cyan-400"></i> Responded to inquiry</span>
                <span class="text-[9px] text-slate-500 font-mono">10:24 AM</span>
              </div>

              <div class="flex items-center justify-between text-slate-300">
                <span class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-cyan-400"></i> Asked qualification questions</span>
                <span class="text-[9px] text-slate-500 font-mono">10:25 AM</span>
              </div>

              <div class="flex items-center justify-between text-slate-300">
                <span class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-cyan-400"></i> Identified intent</span>
                <span class="text-[9px] text-slate-500 font-mono">10:25 AM</span>
              </div>

              <div class="flex items-center justify-between text-slate-300">
                <span class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-cyan-400"></i> Checked availability</span>
                <span class="text-[9px] text-slate-500 font-mono">10:26 AM</span>
              </div>

              <div class="flex items-center justify-between text-slate-300">
                <span class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-cyan-400"></i> Booked appointment</span>
                <span class="text-[9px] text-slate-500 font-mono">10:26 AM</span>
              </div>

              <div class="flex items-center justify-between text-slate-300">
                <span class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-cyan-400"></i> Updated CRM</span>
                <span class="text-[9px] text-slate-500 font-mono">10:26 AM</span>
              </div>
            </div>
          </div>

          <!-- Bottom Summary Box -->
          <div class="p-3 rounded-2xl bg-cyan-950/40 border border-cyan-400/40 space-y-1">
            <div class="text-[10px] font-bold text-cyan-300 uppercase">AI ACTIONS COMPLETED</div>
            <div class="text-[10px] text-slate-300 leading-tight">
              Lead Qualified &bull; Calendar Checked &bull; Appointment Booked &bull; CRM Updated &bull; Team Notified
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. SMART QUALIFICATION LOGIC -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-950/50 border border-purple-500/30 text-purple-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>DECISION ENGINE</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Smart Qualification
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        AI asks the right questions, identifies intent and routes each lead automatically.
      </p>
    </div>

    <!-- Branching Diagram Container -->
    <div class="p-6 sm:p-10 rounded-3xl bg-[#091024] border border-white/10 max-w-4xl mx-auto space-y-6 shadow-2xl">

      <div class="flex flex-col md:flex-row items-center justify-between gap-6">

        <!-- Origin: New Lead & Question -->
        <div class="flex items-center gap-4 shrink-0">
          <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
            <i data-lucide="user" class="w-5 h-5 text-purple-400 mx-auto"></i>
            <div class="text-xs font-bold text-white mt-1">New Lead</div>
          </div>

          <div class="p-4 rounded-2xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-[0_0_20px_rgba(168,85,247,0.3)] text-center max-w-[190px]">
            <div class="text-xs font-bold">"What service are you interested in?"</div>
          </div>
        </div>

        <!-- 3 Decision Routes -->
        <div class="flex-1 w-full space-y-3">

          <!-- Route 1: Qualified -->
          <div class="p-3.5 rounded-xl bg-emerald-950/40 border border-emerald-500/40 flex items-center justify-between text-xs shadow-sm">
            <span class="font-bold text-emerald-300 flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400"></span> QUALIFIED
            </span>
            <span class="text-slate-300 text-[11px]">Continue &rarr; Offer Time &rarr; <strong class="text-emerald-400">Book</strong></span>
          </div>

          <!-- Route 2: Not Ready -->
          <div class="p-3.5 rounded-xl bg-purple-950/40 border border-purple-500/40 flex items-center justify-between text-xs shadow-sm">
            <span class="font-bold text-purple-300 flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-purple-400"></span> NOT READY
            </span>
            <span class="text-slate-300 text-[11px]">Nurture Sequence &rarr; Follow-Up Later</span>
          </div>

          <!-- Route 3: Wrong Fit -->
          <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/10 flex items-center justify-between text-xs shadow-sm">
            <span class="font-bold text-slate-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-slate-500"></span> WRONG FIT
            </span>
            <span class="text-slate-400 text-[11px]">Polite Exit / Route to Alternative</span>
          </div>

        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 6. AI + CRM + CALENDAR (3 Connected Modules) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-mono font-bold tracking-widest uppercase">
        <span>UNIFIED ECOSYSTEM</span>
      </div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        AI + CRM + Calendar
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        Three systems. One powerful workflow.
      </p>
    </div>

    <!-- 3 Big Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

      <!-- Card 1: AI Assistant -->
      <div class="p-6 rounded-3xl bg-[#091024] border border-purple-500/40 space-y-4 shadow-xl">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center">
          <i data-lucide="bot" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-white uppercase tracking-wide">AI ASSISTANT</h3>
        <ul class="space-y-2 text-xs text-slate-300">
          <li class="flex items-center gap-2">&rarr; Lead Information</li>
          <li class="flex items-center gap-2">&rarr; Conversation Data</li>
          <li class="flex items-center gap-2">&rarr; Qualification</li>
        </ul>
      </div>

      <!-- Card 2: CRM Core -->
      <div class="p-6 rounded-3xl bg-[#091024] border border-cyan-500/40 space-y-4 shadow-xl">
        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
          <i data-lucide="database" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-white uppercase tracking-wide">CRM CORE</h3>
        <ul class="space-y-2 text-xs text-slate-300">
          <li class="flex items-center gap-2">&rarr; Contact &amp; Tags</li>
          <li class="flex items-center gap-2">&rarr; Pipeline Stage</li>
          <li class="flex items-center gap-2">&rarr; Activity Notes</li>
        </ul>
      </div>

      <!-- Card 3: Calendar -->
      <div class="p-6 rounded-3xl bg-[#091024] border border-purple-500/40 space-y-4 shadow-xl">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center">
          <i data-lucide="calendar" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-white uppercase tracking-wide">CALENDAR</h3>
        <ul class="space-y-2 text-xs text-slate-300">
          <li class="flex items-center gap-2">&rarr; Real-time Availability</li>
          <li class="flex items-center gap-2">&rarr; Booking Confirmation</li>
          <li class="flex items-center gap-2">&rarr; Appointment Details</li>
        </ul>
      </div>

    </div>

    <!-- Bottom Unified Flow Pill -->
    <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 max-w-2xl mx-auto flex items-center justify-between text-xs font-bold text-slate-300">
      <span class="flex items-center gap-2 text-purple-400"><i data-lucide="user" class="w-4 h-4"></i> LEAD</span>
      <span>&rarr;</span>
      <span class="flex items-center gap-2 text-cyan-400"><i data-lucide="bot" class="w-4 h-4"></i> AI</span>
      <span>&rarr;</span>
      <span class="flex items-center gap-2 text-purple-400"><i data-lucide="database" class="w-4 h-4"></i> CRM</span>
      <span>&rarr;</span>
      <span class="flex items-center gap-2 text-cyan-400"><i data-lucide="calendar" class="w-4 h-4"></i> CALENDAR</span>
      <span>&rarr;</span>
      <span class="flex items-center gap-2 text-emerald-400"><i data-lucide="check-circle" class="w-4 h-4"></i> APPOINTMENT</span>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 7. AI APPOINTMENT SETTER DASHBOARD PREVIEW (Dark Theme Mini App) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#070C18] relative border-t border-white/[0.06]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="rounded-3xl bg-[#091024] border border-white/10 shadow-2xl p-6 sm:p-8 space-y-6">

      <!-- Top App Bar -->
      <div class="flex items-center justify-between pb-4 border-b border-white/10">
        <div class="flex items-center gap-3">
          <div class="text-xs font-bold uppercase tracking-wider text-purple-300 bg-purple-500/20 border border-purple-500/30 px-3 py-1 rounded-full font-mono">
            AI APPOINTMENT SETTER DASHBOARD
          </div>
        </div>
        <div class="flex items-center gap-3 text-slate-400 text-xs">
          <i data-lucide="bell" class="w-4 h-4 hover:text-white cursor-pointer"></i>
          <i data-lucide="search" class="w-4 h-4 hover:text-white cursor-pointer"></i>
        </div>
      </div>

      <!-- 4 Dashboard Stat Metrics -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/10">
          <div class="text-[11px] text-slate-400 font-semibold">Conversations</div>
          <div class="text-2xl font-black text-white mt-1">247</div>
          <div class="text-[10px] text-emerald-400 font-bold mt-0.5">&uarr; +18%</div>
        </div>

        <div class="p-4 rounded-2xl bg-purple-950/20 border border-purple-500/30">
          <div class="text-[11px] text-purple-300 font-semibold">Qualified Leads</div>
          <div class="text-2xl font-black text-purple-300 mt-1">86</div>
          <div class="text-[10px] text-emerald-400 font-bold mt-0.5">&uarr; +14%</div>
        </div>

        <div class="p-4 rounded-2xl bg-cyan-950/20 border border-cyan-500/30">
          <div class="text-[11px] text-cyan-300 font-semibold">Appointments</div>
          <div class="text-2xl font-black text-cyan-300 mt-1">52</div>
          <div class="text-[10px] text-emerald-400 font-bold mt-0.5">&uarr; +22%</div>
        </div>

        <div class="p-4 rounded-2xl bg-emerald-950/20 border border-emerald-500/30">
          <div class="text-[11px] text-emerald-300 font-semibold">Booking Rate</div>
          <div class="text-2xl font-black text-emerald-300 mt-1">60%</div>
          <div class="text-[10px] text-emerald-400 font-bold mt-0.5">&uarr; +8%</div>
        </div>
      </div>

      <!-- Tables Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 pt-2">

        <!-- Recent Conversations -->
        <div class="lg:col-span-8 p-5 rounded-2xl bg-white/[0.02] border border-white/10 space-y-3">
          <div class="text-xs font-bold text-white">Recent Conversations</div>
          <div class="space-y-2 text-xs">
            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between">
              <span class="font-semibold text-white">Sarah Miller</span>
              <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 text-[10px] font-bold">Appointment Booked</span>
              <span class="text-[11px] text-slate-400">10:26 AM</span>
            </div>

            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between">
              <span class="font-semibold text-white">Michael Brown</span>
              <span class="px-2.5 py-0.5 rounded-full bg-purple-500/20 border border-purple-500/30 text-purple-300 text-[10px] font-bold">In Conversation</span>
              <span class="text-[11px] text-slate-400">10:15 AM</span>
            </div>

            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between">
              <span class="font-semibold text-white">David Walsh</span>
              <span class="px-2.5 py-0.5 rounded-full bg-cyan-500/20 border border-cyan-500/30 text-cyan-300 text-[10px] font-bold">Follow-Up Scheduled</span>
              <span class="text-[11px] text-slate-400">09:45 AM</span>
            </div>
          </div>
        </div>

        <!-- Upcoming Appointments -->
        <div class="lg:col-span-4 p-5 rounded-2xl bg-white/[0.02] border border-white/10 space-y-3">
          <div class="text-xs font-bold text-white">Upcoming Appointments</div>
          <div class="space-y-2 text-xs">
            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08]">
              <div class="font-bold text-white">Sarah Williams</div>
              <div class="text-[11px] text-cyan-400">9:00 AM &bull; Consultation</div>
            </div>
            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08]">
              <div class="font-bold text-white">Michael Brown</div>
              <div class="text-[11px] text-purple-400">11:30 AM &bull; Strategy Call</div>
            </div>
            <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08]">
              <div class="font-bold text-white">Emma Davis</div>
              <div class="text-[11px] text-cyan-400">3:00 PM &bull; Consultation</div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 8. BUILD ONCE. LET AUTOMATION HANDLE THE REST (Engine Section) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Build Once. Let Automation Handle the Rest.
      </h2>
      <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
        Smart conversations, faster follow-ups and seamless GoHighLevel bookings.
      </p>
    </div>

    <!-- Engine Flow Diagram -->
    <div class="p-6 sm:p-10 rounded-3xl bg-[#091024] border border-purple-500/30 shadow-2xl">
      <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3 text-center items-center">

        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 space-y-1">
          <div class="text-[10px] text-slate-400">STEP 1</div>
          <div class="text-xs font-bold text-white">NEW LEAD</div>
        </div>

        <div class="p-3 rounded-xl bg-purple-950/40 border border-purple-500/30 space-y-1">
          <div class="text-[10px] text-purple-400">STEP 2</div>
          <div class="text-xs font-bold text-purple-200">AI RESPONSE</div>
        </div>

        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 space-y-1">
          <div class="text-[10px] text-slate-400">STEP 3</div>
          <div class="text-xs font-bold text-white">WAIT REPLY</div>
        </div>

        <div class="p-3 rounded-xl bg-indigo-950/40 border border-indigo-500/40 space-y-1">
          <div class="text-[10px] text-indigo-400">DECISION</div>
          <div class="text-xs font-bold text-indigo-200">REPLIED?</div>
        </div>

        <div class="p-3 rounded-xl bg-cyan-950/40 border border-cyan-500/30 space-y-1">
          <div class="text-[10px] text-cyan-400">STEP 4</div>
          <div class="text-xs font-bold text-cyan-200">QUALIFY</div>
        </div>

        <div class="p-3 rounded-xl bg-purple-950/40 border border-purple-500/30 space-y-1">
          <div class="text-[10px] text-purple-400">STEP 5</div>
          <div class="text-xs font-bold text-purple-200">BOOK TIME</div>
        </div>

        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/10 space-y-1">
          <div class="text-[10px] text-slate-400">STEP 6</div>
          <div class="text-xs font-bold text-white">CRM UPDATE</div>
        </div>

        <div class="p-3 rounded-xl bg-emerald-950/40 border border-emerald-500/30 space-y-1">
          <div class="text-[10px] text-emerald-400">STEP 7</div>
          <div class="text-xs font-bold text-emerald-200">NOTIFY TEAM</div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 9. AI & AUTOMATION SYSTEMS WE'VE BUILT (6 Case Studies) -->
<!-- ========================================================================= -->
<section class="py-24 bg-[#030712] relative border-t border-white/[0.06] overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        AI &amp; Automation Systems We've Built
      </h2>
      <p class="text-xs sm:text-sm text-slate-400">
        Real projects. Real results. Built for growing businesses.
      </p>
    </div>

    <!-- 6 Case Study Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-purple-400">AI Chatbot + Booking</div>
            <div class="text-[10px] text-slate-400">Healthcare AI Lead Qualification</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Healthcare AI Setter</h3>
            <div class="text-xs text-slate-400 mt-1">GoHighLevel + Custom AI Bot</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-purple-400 hover:text-purple-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-cyan-400">DML Workflow Automation</div>
            <div class="text-[10px] text-slate-400">Real Estate Nurture Sequence</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Real Estate Automation</h3>
            <div class="text-xs text-slate-400 mt-1">GoHighLevel + Multi-Channel</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-purple-400">Appointment Booking System</div>
            <div class="text-[10px] text-slate-400">Home Services AI Voice Assistant</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Home Services Dispatch Bot</h3>
            <div class="text-xs text-slate-400 mt-1">AI Voice &amp; Calendar Booking</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-purple-400 hover:text-purple-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-cyan-400">CRM Pipeline Automation</div>
            <div class="text-[10px] text-slate-400">Coaching Lead Management</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Executive Coaching Pipeline</h3>
            <div class="text-xs text-slate-400 mt-1">GoHighLevel Automation</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-purple-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-purple-400">Conversation Flow</div>
            <div class="text-[10px] text-slate-400">E-commerce AI Support &amp; Upsell</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">E-commerce AI Assistant</h3>
            <div class="text-xs text-slate-400 mt-1">AI FAQ &amp; Conversion Bot</div>
          </div>
        </div>
        <div class="pt-2 border-t border-white/10 flex justify-end">
          <a href="{{ route('case-studies') }}" class="text-xs font-bold text-purple-400 hover:text-purple-300 flex items-center gap-1">
            <span>View Project</span> &rarr;
          </a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="p-5 rounded-2xl bg-[#091024] border border-white/10 hover:border-cyan-500/40 transition-all space-y-4 flex flex-col justify-between">
        <div class="space-y-3">
          <div class="h-32 rounded-xl bg-slate-900 border border-white/10 p-3 flex flex-col justify-center text-center space-y-1">
            <div class="text-xs font-bold text-cyan-400">Calendar Integration</div>
            <div class="text-[10px] text-slate-400">Consulting Booking Automation</div>
          </div>
          <div>
            <h3 class="text-sm font-bold text-white">Consulting Calendar Sync</h3>
            <div class="text-xs text-slate-400 mt-1">Multi-Team Scheduling</div>
          </div>
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
<!-- 10. READY TO PUT YOUR LEAD FOLLOW-UP ON AUTOPILOT (Bottom CTA Banner) -->
<!-- ========================================================================= -->
<section class="py-16 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative rounded-3xl p-8 sm:p-14 overflow-hidden bg-gradient-to-r from-[#170B28] via-[#091024] to-[#041E26] border border-purple-500/40 shadow-[0_0_50px_rgba(168,85,247,0.25)] text-center space-y-6">

      <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-48 bg-purple-600/30 rounded-full blur-3xl pointer-events-none"></div>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
        Ready to Put Your Lead Follow-Up on Autopilot?
      </h2>

      <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
        Let AI respond, qualify, follow up and help turn more conversations into booked appointments.
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
