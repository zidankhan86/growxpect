@extends('layouts.app')

@section('title', $case->title . ' — Growxpect Case Study')
@section('meta_description', Str::limit($case->description, 150))

@section('content')
<!-- Ambient Radial Background Glows -->
<div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
  <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-[140px]"></div>
  <div class="absolute top-1/3 -right-40 w-[600px] h-[600px] bg-indigo-500/10 rounded-full blur-[140px]"></div>
  <div class="absolute bottom-10 left-1/3 w-[600px] h-[600px] bg-purple-500/10 rounded-full blur-[160px]"></div>
</div>

<div class="relative z-10 bg-[#090D16] text-slate-100 min-h-screen font-sans">

  <!-- A. HERO SECTION (Cinematic Agency Style) -->
  <section class="pt-10 pb-12 md:pt-16 md:pb-16 border-b border-slate-800/80 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
      
      <!-- Top Navigation Bar & Category Badge -->
      <div class="flex flex-wrap items-center justify-between gap-4">
        <nav class="flex items-center gap-2 text-xs font-semibold text-slate-400">
          <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors flex items-center gap-1">
            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            <span>Home</span>
          </a>
          <span class="text-slate-600">/</span>
          <a href="{{ route('case-studies') }}" class="hover:text-cyan-400 transition-colors">Case Studies</a>
          <span class="text-slate-600">/</span>
          <span class="px-3 py-1 rounded-full bg-cyan-950/80 border border-cyan-500/40 text-cyan-400 text-[11px] font-bold uppercase tracking-widest">
            {{ $case->category_label }}
          </span>
        </nav>

        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-cyan-500/40 text-cyan-300 text-xs font-bold uppercase tracking-widest shadow-[0_0_15px_rgba(56,197,210,0.15)]">
          <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
          <span>Verified Client Results</span>
        </div>
      </div>

      <!-- Main Headline & Subtitle -->
      <div class="space-y-4 max-w-4xl">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.12]">
          {{ $case->title }}
        </h1>

      </div>

      <!-- THUMBNAIL IMAGE SLIDER & LIVE EVENT STREAM (SIDE BY SIDE GRID) -->
      @php
        $caseImages = is_array($case->images) && count($case->images) > 0 ? $case->images : ($case->image ? [$case->image] : []);
      @endphp

      <div class="pt-2">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
          
          <!-- LEFT SIDE: IMAGE SLIDER (8 cols on lg - Wider display) -->
          <div class="{{ count($caseImages) > 0 ? 'lg:col-span-8' : 'hidden' }}">
            <div class="bg-slate-900 rounded-3xl border border-slate-800 shadow-[0_0_50px_rgba(56,197,210,0.12)] overflow-hidden relative group h-full flex flex-col justify-between">
              
              <!-- Window Header Bar -->
              <div class="px-5 py-3 bg-slate-900 border-b border-slate-800 flex items-center justify-between z-20 relative shrink-0">
                <div class="flex items-center gap-2">
                  <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                </div>
                <div class="px-4 py-1 rounded-full bg-[#090D16] border border-slate-800 text-[11px] font-mono text-slate-400 flex items-center gap-2">
                  <svg class="w-3 h-3 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  <span>Project Work Gallery</span>
                </div>
                <div class="text-xs font-semibold text-cyan-400 bg-cyan-950/60 px-3 py-0.5 rounded-full border border-cyan-500/30">
                  <span id="slide-counter">1</span> / {{ count($caseImages) }} Photos
                </div>
              </div>

              <!-- Slides Track -->
              <div class="relative overflow-hidden aspect-[16/10] sm:aspect-[16/9] lg:aspect-auto grow min-h-[360px] bg-[#070A10]" id="cs-slider-container">
                <div class="flex transition-transform duration-500 ease-out h-full absolute inset-0" id="cs-slider-track">
                  @foreach($caseImages as $idx => $imgUrl)
                    <div class="w-full shrink-0 h-full relative">
                      <img src="{{ Str::startsWith($imgUrl, 'http') ? $imgUrl : asset($imgUrl) }}" 
                           alt="Work Showcase Image {{ $idx + 1 }}" 
                           class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-gradient-to-t from-[#090D16]/70 via-transparent to-transparent"></div>
                    </div>
                  @endforeach
                </div>

                <!-- Navigation Controls (Show if multiple images) -->
                @if(count($caseImages) > 1)
                  <button id="cs-prev-btn" class="absolute left-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-slate-900/80 hover:bg-cyan-500 border border-white/20 hover:border-cyan-400 text-white flex items-center justify-center backdrop-blur-md transition-all duration-300 shadow-xl z-20 group-hover:opacity-100 opacity-90">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                  </button>
                  <button id="cs-next-btn" class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-slate-900/80 hover:bg-cyan-500 border border-white/20 hover:border-cyan-400 text-white flex items-center justify-center backdrop-blur-md transition-all duration-300 shadow-xl z-20 group-hover:opacity-100 opacity-90">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                  </button>

                  <!-- Dots Indicators -->
                  <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex items-center gap-2 z-20 bg-slate-950/60 px-3.5 py-1.5 rounded-full backdrop-blur-md border border-white/10">
                    @foreach($caseImages as $idx => $imgUrl)
                      <button class="cs-dot w-2 h-2 rounded-full transition-all duration-300 {{ $idx === 0 ? 'bg-cyan-400 w-5 shadow-[0_0_10px_#38C5D2]' : 'bg-slate-600 hover:bg-slate-400' }}" data-index="{{ $idx }}"></button>
                    @endforeach
                  </div>
                @endif
              </div>

            </div>
          </div>

          <!-- RIGHT SIDE: LIVE EVENT STREAM & SYSTEM ARCHITECTURE RESULT (4 cols on lg - Narrower) -->
          <div class="{{ count($caseImages) > 0 ? 'lg:col-span-4' : 'lg:col-span-12' }} flex flex-col justify-between space-y-4">
            
            <!-- 1. Live Event Stream Card -->
            <div class="bg-slate-900/90 rounded-3xl border border-slate-800 p-6 space-y-4 shadow-xl relative overflow-hidden grow flex flex-col justify-center">
              <div class="flex items-center justify-between border-b border-slate-800/80 pb-3">
                <span class="text-xs font-black uppercase tracking-wider text-slate-200 flex items-center gap-2">
                  <span>LIVE EVENT STREAM</span>
                </span>
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 shadow-[0_0_8px_#10B981] animate-pulse"></span>
              </div>

              <div class="space-y-3">
                <!-- Stream Item 1 -->
                <div class="p-3.5 rounded-2xl bg-[#070A10] border border-slate-800/90 flex items-center gap-3.5 hover:border-emerald-500/40 transition-all group">
                  <div class="w-9 h-9 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                  </div>
                  <div class="space-y-0.5">
                    <div class="text-xs sm:text-sm font-bold text-white group-hover:text-emerald-300 transition-colors">Lead Qualified: Premium Quote</div>
                    <div class="text-[11px] text-slate-400 font-medium">SMS trigger sent in 42 seconds</div>
                  </div>
                </div>

                <!-- Stream Item 2 -->
                <div class="p-3.5 rounded-2xl bg-[#070A10] border border-slate-800/90 flex items-center gap-3.5 hover:border-amber-500/40 transition-all group">
                  <div class="w-9 h-9 rounded-xl bg-amber-500/15 border border-amber-500/30 text-amber-400 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                  </div>
                  <div class="space-y-0.5">
                    <div class="text-xs sm:text-sm font-bold text-white group-hover:text-amber-300 transition-colors">CRM Auto-Assigned</div>
                    <div class="text-[11px] text-slate-400 font-medium">Assigned to Senior Producer</div>
                  </div>
                </div>

                <!-- Stream Item 3 -->
                <div class="p-3.5 rounded-2xl bg-[#070A10] border border-slate-800/90 flex items-center gap-3.5 hover:border-purple-500/40 transition-all group">
                  <div class="w-9 h-9 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                  </div>
                  <div class="space-y-0.5">
                    <div class="text-xs sm:text-sm font-bold text-white group-hover:text-purple-300 transition-colors">Calendar Appointment Booked</div>
                    <div class="text-[11px] text-slate-400 font-medium">Zero human intervention required</div>
                  </div>
                </div>

              </div>
            </div>

            <!-- 2. System Architecture Result Box -->
            <div class="bg-slate-900/90 rounded-3xl border border-cyan-500/40 p-6 text-center space-y-1.5 shadow-[0_0_30px_rgba(56,197,210,0.15)] relative overflow-hidden">
              <div class="absolute -top-10 -left-10 w-32 h-32 bg-cyan-500/10 rounded-full blur-2xl pointer-events-none"></div>
              <div class="text-[11px] font-extrabold uppercase tracking-widest text-cyan-400">System Architecture Result</div>
              <div class="text-base sm:text-lg font-black text-white leading-snug">
                100% Automated Multi-Channel Nurture Workflow
              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- Key Metrics Highlight Bar (Professional Performance Grid) -->
      <div class="bg-[#090D17]/95 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl shadow-[0_0_50px_rgba(56,197,210,0.1)] relative overflow-hidden space-y-6">
        
        <!-- Header Bar -->
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-800/80 pb-4">
          <div class="flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2] animate-pulse"></span>
            <span class="text-xs font-black uppercase tracking-widest text-slate-200">VERIFIED PERFORMANCE METRICS</span>
          </div>
          <div class="px-3 py-1 rounded-full bg-slate-900 border border-slate-800 text-[11px] font-mono text-cyan-400 flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Audit Date: {{ date('M Y') }}</span>
          </div>
        </div>        <!-- 3 Visual Metric Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
          
          <!-- Metric 1: Conversion Growth -->
          <div class="p-4 sm:p-5 rounded-2xl bg-[#070A10] border border-slate-800 hover:border-cyan-500/50 transition-all duration-300 space-y-3 relative group overflow-hidden">
            <div class="flex items-center justify-between gap-1">
              <div class="text-[10px] sm:text-[11px] font-extrabold uppercase tracking-wider text-cyan-400 flex items-center gap-1 sm:gap-1.5 min-w-0">
                <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shrink-0">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <span class="truncate">Conversion Growth</span>
              </div>
              <span class="text-[10px] font-extrabold text-cyan-300 bg-cyan-950/80 px-2.5 py-0.5 rounded-full border border-cyan-500/30 whitespace-nowrap shrink-0">
                Primary Lift
              </span>
            </div>

            <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-mono tracking-tight group-hover:text-cyan-300 transition-colors">
              {{ $case->metric_1_val ?? '+280%' }}
            </div>

            <div class="text-xs text-slate-400 font-medium leading-snug">
              {{ $case->metric_1_label ?? 'Quote-to-Bind Conversion' }}
            </div>

            <!-- Sparkline indicator -->
            <div class="pt-1">
              <div class="w-full h-1.5 rounded-full bg-slate-900 overflow-hidden">
                <div class="h-full bg-gradient-to-r from-cyan-500 to-sky-400 rounded-full w-[92%] shadow-[0_0_8px_#38C5D2]"></div>
              </div>
            </div>
          </div>

          <!-- Metric 2: Speed & Response -->
          <div class="p-4 sm:p-5 rounded-2xl bg-[#070A10] border border-slate-800 hover:border-emerald-500/50 transition-all duration-300 space-y-3 relative group overflow-hidden">
            <div class="flex items-center justify-between gap-1">
              <div class="text-[10px] sm:text-[11px] font-extrabold uppercase tracking-wider text-emerald-400 flex items-center gap-1 sm:gap-1.5 min-w-0">
                <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 flex items-center justify-center shrink-0">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <span class="truncate">Speed & Response</span>
              </div>
              <span class="text-[10px] font-extrabold text-emerald-300 bg-emerald-950/80 px-2.5 py-0.5 rounded-full border border-emerald-500/30 whitespace-nowrap shrink-0">
                Automated
              </span>
            </div>

            <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-mono tracking-tight group-hover:text-emerald-300 transition-colors">
              {{ $case->metric_3_val ?? '< 15 Min' }}
            </div>

            <div class="text-xs text-slate-400 font-medium leading-snug">
              {{ $case->metric_3_label ?? 'Average Lead Response Time' }}
            </div>

            <!-- Sparkline indicator -->
            <div class="pt-1">
              <div class="w-full h-1.5 rounded-full bg-slate-900 overflow-hidden">
                <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full w-[95%] shadow-[0_0_8px_#10B981]"></div>
              </div>
            </div>
          </div>

          <!-- Metric 3: System Efficiency -->
          <div class="p-4 sm:p-5 rounded-2xl bg-[#070A10] border border-slate-800 hover:border-indigo-500/50 transition-all duration-300 space-y-3 relative group overflow-hidden">
            <div class="flex items-center justify-between gap-1">
              <div class="text-[10px] sm:text-[11px] font-extrabold uppercase tracking-wider text-indigo-400 flex items-center gap-1 sm:gap-1.5 min-w-0">
                <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 flex items-center justify-center shrink-0">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <span class="truncate">System Efficiency</span>
              </div>
              <span class="text-[10px] font-extrabold text-indigo-300 bg-indigo-950/80 px-2.5 py-0.5 rounded-full border border-indigo-500/30 whitespace-nowrap shrink-0">
                Time Saved
              </span>
            </div>

            <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-mono tracking-tight group-hover:text-indigo-300 transition-colors">
              74%
            </div>

            <div class="text-xs text-slate-400 font-medium leading-snug">
              Reduction in Manual Staff Hours
            </div>

            <!-- Sparkline indicator -->
            <div class="pt-1">
              <div class="w-full h-1.5 rounded-full bg-slate-900 overflow-hidden">
                <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full w-[74%] shadow-[0_0_8px_#6366F1]"></div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>



  <!-- C. TWO-COLUMN STORY GRID (68% Left / 32% Right) -->
  <section class="py-16 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        
        <!-- Left Column: Storyboard Content (8 cols) -->
        <div class="lg:col-span-8 space-y-12">
          
          <!-- 1. The Bottleneck (Problem) -->
          @if($case->challenge)
            <div class="bg-slate-900/90 rounded-3xl p-8 sm:p-10 border border-slate-800 space-y-6 relative">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-red-500/15 border border-red-500/30 text-red-400 flex items-center justify-center font-bold">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-widest text-red-400">The Challenge</div>
                  <h2 class="text-2xl font-extrabold text-white">The Bottleneck & Growth Friction</h2>
                </div>
              </div>

              <p class="text-base text-slate-300 leading-relaxed font-normal">
                {{ $case->challenge }}
              </p>

              <!-- Pain-Point Chips -->
              <div class="flex flex-wrap gap-2.5 pt-2">
                <span class="px-3.5 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-300 text-xs font-semibold flex items-center gap-1.5">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                  Manual Spreadsheets & Slow Follow-ups
                </span>
                <span class="px-3.5 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-300 text-xs font-semibold flex items-center gap-1.5">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                  48-Hour Callback Lag (75% Lead Drop-off)
                </span>
                <span class="px-3.5 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-300 text-xs font-semibold flex items-center gap-1.5">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                  Unqualified Lead Overload
                </span>
              </div>
            </div>
          @endif

          <!-- 2. The Solution Architecture (3-Step Workflow Nodes - INTACT) -->
          @if($case->solution)
            <div class="bg-slate-900/90 rounded-3xl p-8 sm:p-10 border border-cyan-500/30 space-y-8 relative shadow-xl">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center font-bold">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <div>
                  <div class="text-xs font-extrabold uppercase tracking-widest text-cyan-400">The Growth Architecture</div>
                  <h2 class="text-2xl font-extrabold text-white">How Growxpect Engineered The Solution</h2>
                </div>
              </div>

              <p class="text-base text-slate-300 leading-relaxed font-normal">
                {{ $case->solution }}
              </p>

              <!-- 3-Step Workflow Timeline Cards -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-2">
                
                <!-- Node 1 -->
                <div class="p-5 rounded-2xl bg-[#090D16] border border-slate-800 space-y-3 relative group hover:border-cyan-500/50 transition-all">
                  <div class="w-8 h-8 rounded-xl bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 flex items-center justify-center font-extrabold text-xs">
                    01
                  </div>
                  <h3 class="text-sm font-bold text-white">Instant Ingestion</h3>
                  <p class="text-xs text-slate-400 leading-relaxed">
                    Custom high-converting lead capture funnel with real-time field validation and data routing.
                  </p>
                </div>

                <!-- Node 2 -->
                <div class="p-5 rounded-2xl bg-[#090D16] border border-slate-800 space-y-3 relative group hover:border-purple-500/50 transition-all">
                  <div class="w-8 h-8 rounded-xl bg-purple-500/20 border border-purple-400/40 text-purple-300 flex items-center justify-center font-extrabold text-xs">
                    02
                  </div>
                  <h3 class="text-sm font-bold text-white">Smart AI Scoring</h3>
                  <p class="text-xs text-slate-400 leading-relaxed">
                    Automated lead qualification and CRM deal creation based on budget, urgency, and fit.
                  </p>
                </div>

                <!-- Node 3 -->
                <div class="p-5 rounded-2xl bg-[#090D16] border border-slate-800 space-y-3 relative group hover:border-emerald-500/50 transition-all">
                  <div class="w-8 h-8 rounded-xl bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 flex items-center justify-center font-extrabold text-xs">
                    03
                  </div>
                  <h3 class="text-sm font-bold text-white">Multi-Channel Nurture</h3>
                  <p class="text-xs text-slate-400 leading-relaxed">
                    Instant 2-minute SMS & WhatsApp response sequences leading straight to calendar booking.
                  </p>
                </div>

              </div>
            </div>
          @endif

          <!-- 3. Measurable Impact: Before vs After Implementation (REDESIGNED) -->
          <div class="bg-slate-900/90 rounded-3xl p-8 sm:p-10 border border-slate-800 space-y-8 relative overflow-hidden shadow-2xl">
            <div class="flex items-center justify-between">
              <div>
                <div class="text-xs font-extrabold uppercase tracking-widest text-emerald-400 flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                  Quantifiable Business Results
                </div>
                <h2 class="text-2xl font-extrabold text-white mt-1">Measurable Impact: Before vs After</h2>
              </div>
              <span class="text-xs font-bold text-slate-400 bg-slate-950 px-3.5 py-1.5 rounded-full border border-slate-800">
                Verified Metrics Comparison
              </span>
            </div>

            <!-- Sleek Comparative Performance Grid (4 Visual Metric Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              
              <!-- Impact Card 1: Response Speed -->
              <div class="p-6 rounded-2xl bg-[#090D16] border border-slate-800 space-y-4 hover:border-cyan-500/40 transition-all group">
                <div class="flex items-center justify-between">
                  <span class="text-xs font-bold text-white uppercase tracking-wider">Lead Response Speed</span>
                  <span class="px-2.5 py-0.5 rounded-full bg-cyan-500/20 text-cyan-300 text-[11px] font-extrabold border border-cyan-400/30">
                    95% Speed Uplift
                  </span>
                </div>

                <div class="space-y-2">
                  <!-- Before State -->
                  <div class="flex items-center justify-between text-xs">
                    <span class="text-red-400 font-semibold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span> Before:
                    </span>
                    <span class="text-slate-400 font-medium">48 Hours Manual Call</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-red-500/60 rounded-full w-[20%]"></div>
                  </div>

                  <!-- After State -->
                  <div class="flex items-center justify-between text-xs pt-1">
                    <span class="text-emerald-400 font-bold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> With Growxpect:
                    </span>
                    <span class="text-emerald-300 font-extrabold">&lt; 15 Minutes (Automated)</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-cyan-400 to-emerald-400 rounded-full w-[95%] shadow-[0_0_10px_#38C5D2]"></div>
                  </div>
                </div>
              </div>

              <!-- Impact Card 2: Conversion Rate -->
              <div class="p-6 rounded-2xl bg-[#090D16] border border-slate-800 space-y-4 hover:border-purple-500/40 transition-all group">
                <div class="flex items-center justify-between">
                  <span class="text-xs font-bold text-white uppercase tracking-wider">Quote Conversion Rate</span>
                  <span class="px-2.5 py-0.5 rounded-full bg-purple-500/20 text-purple-300 text-[11px] font-extrabold border border-purple-400/30">
                    +280% Growth
                  </span>
                </div>

                <div class="space-y-2">
                  <!-- Before State -->
                  <div class="flex items-center justify-between text-xs">
                    <span class="text-red-400 font-semibold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span> Before:
                    </span>
                    <span class="text-slate-400 font-medium">3.2% Conversion</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-red-500/60 rounded-full w-[25%]"></div>
                  </div>

                  <!-- After State -->
                  <div class="flex items-center justify-between text-xs pt-1">
                    <span class="text-emerald-400 font-bold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> With Growxpect:
                    </span>
                    <span class="text-emerald-300 font-extrabold">12.1% Conversion</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-purple-400 to-emerald-400 rounded-full w-[90%] shadow-[0_0_10px_#A855F7]"></div>
                  </div>
                </div>
              </div>

              <!-- Impact Card 3: Lead Retention -->
              <div class="p-6 rounded-2xl bg-[#090D16] border border-slate-800 space-y-4 hover:border-emerald-500/40 transition-all group">
                <div class="flex items-center justify-between">
                  <span class="text-xs font-bold text-white uppercase tracking-wider">Lead Retention & Follow-up</span>
                  <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 text-[11px] font-extrabold border border-emerald-400/30">
                    Zero Lead Loss
                  </span>
                </div>

                <div class="space-y-2">
                  <!-- Before State -->
                  <div class="flex items-center justify-between text-xs">
                    <span class="text-red-400 font-semibold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span> Before:
                    </span>
                    <span class="text-slate-400 font-medium">Manual Calling (75% Drop-off)</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-red-500/60 rounded-full w-[25%]"></div>
                  </div>

                  <!-- After State -->
                  <div class="flex items-center justify-between text-xs pt-1">
                    <span class="text-emerald-400 font-bold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> With Growxpect:
                    </span>
                    <span class="text-emerald-300 font-extrabold">100% Automated Multi-Channel</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-emerald-500 to-cyan-400 rounded-full w-[100%] shadow-[0_0_10px_#10B981]"></div>
                  </div>
                </div>
              </div>

              <!-- Impact Card 4: Revenue & Scale -->
              <div class="p-6 rounded-2xl bg-[#090D16] border border-slate-800 space-y-4 hover:border-indigo-500/40 transition-all group">
                <div class="flex items-center justify-between">
                  <span class="text-xs font-bold text-white uppercase tracking-wider">Annualized Pipeline Revenue</span>
                  <span class="px-2.5 py-0.5 rounded-full bg-indigo-500/20 text-indigo-300 text-[11px] font-extrabold border border-indigo-400/30">
                    $2.4M Generated
                  </span>
                </div>

                <div class="space-y-2">
                  <!-- Before State -->
                  <div class="flex items-center justify-between text-xs">
                    <span class="text-red-400 font-semibold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span> Before:
                    </span>
                    <span class="text-slate-400 font-medium">Stagnant Sales Pipeline</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-red-500/60 rounded-full w-[30%]"></div>
                  </div>

                  <!-- After State -->
                  <div class="flex items-center justify-between text-xs pt-1">
                    <span class="text-emerald-400 font-bold flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> With Growxpect:
                    </span>
                    <span class="text-emerald-300 font-extrabold">$2.4M New Premium Volume</span>
                  </div>
                  <div class="w-full h-2 rounded-full bg-slate-800 overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-indigo-500 to-emerald-400 rounded-full w-[95%] shadow-[0_0_10px_#6366F1]"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- 4. Full Case Story & Execution Details (INTACT) -->
          @if($case->full_content)
            <div class="bg-slate-900/90 rounded-3xl p-8 sm:p-10 border border-slate-800 space-y-4">
              <h3 class="text-xl font-bold text-white">Full Case Story & Execution Details</h3>
              <div class="text-sm sm:text-base text-slate-300 leading-relaxed space-y-4 font-normal">
                {!! nl2br(e($case->full_content)) !!}
              </div>
            </div>
          @endif

          <!-- 5. Client Testimonial Highlight -->
          @if($case->testimonial_quote)
            <div class="bg-gradient-to-br from-cyan-950/40 via-slate-900 to-indigo-950/40 rounded-3xl p-8 sm:p-10 border border-cyan-400/50 space-y-6 relative shadow-[0_0_40px_rgba(56,197,210,0.15)]">
              <div class="flex items-center justify-between">
                <span class="px-3.5 py-1 rounded-full bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 text-xs font-bold uppercase tracking-wider">
                  Verified Executive Review
                </span>
                <div class="flex text-amber-400 gap-1 text-sm">
                  ★★★★★
                </div>
              </div>

              <blockquote class="text-lg sm:text-2xl font-semibold italic text-white leading-relaxed">
                "{{ $case->testimonial_quote }}"
              </blockquote>

              @if($case->testimonial_author)
                <div class="pt-4 border-t border-slate-800 flex items-center gap-4">
                  <div class="w-12 h-12 rounded-2xl bg-gradient-to-r from-cyan-500 to-indigo-600 flex items-center justify-center text-white font-extrabold text-lg shadow-glow-cyan">
                    {{ substr($case->testimonial_author, 0, 1) }}
                  </div>
                  <div>
                    <div class="font-bold text-white text-base">{{ $case->testimonial_author }}</div>
                    <div class="text-xs text-cyan-400 font-semibold">{{ $case->client_name ?? 'Executive Partner' }}</div>
                  </div>
                </div>
              @endif
            </div>
          @endif

        </div>

        <!-- Right Column: Sticky Quick Overview & Actions (Project Details & Business Name) -->
        <div class="lg:col-span-4 space-y-6">
          <div class="bg-slate-900/90 rounded-3xl p-7 border border-slate-800 space-y-6 sticky top-8 shadow-2xl">
            
            <!-- Header Renamed to Project Growth Overview -->
            <h3 class="text-lg font-black text-white border-b border-slate-800 pb-4 flex items-center gap-2">
              <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
              <span>Project Growth Overview</span>
            </h3>

            <!-- Business Name -->
            @if($case->client_name)
              <div class="space-y-1">
                <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">Business Name</div>
                <div class="text-base font-bold text-white">{{ $case->client_name }}</div>
              </div>
            @endif

            <!-- Industry -->
            <div class="space-y-1">
              <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">Industry Sector</div>
              <div class="text-sm font-bold text-cyan-400">{{ $case->category_label }}</div>
            </div>

            <!-- Scope of Work / Tech Stack Tags -->
            @if($case->tech_stack)
              <div class="space-y-2">
                <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">Services & Stack</div>
                <div class="flex flex-wrap gap-2">
                  @foreach(explode(',', $case->tech_stack) as $tech)
                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-[#090D16] border border-slate-800 text-slate-300">
                      {{ trim($tech) }}
                    </span>
                  @endforeach
                </div>
              </div>
            @endif

            <!-- Location -->
            <div class="space-y-1">
              <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">Location</div>
              <div class="text-sm font-bold text-white flex items-center gap-1.5">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>{{ $case->location ?? 'United States' }}</span>
              </div>
            </div>

            <!-- Duration / Time -->
            <div class="space-y-1">
              <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">Duration / Time</div>
              <div class="text-sm font-bold text-white flex items-center gap-1.5">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>{{ $case->duration ?? '4 Weeks Implementation' }}</span>
              </div>
            </div>

            <!-- Mini CTA Widget -->
            <div class="pt-6 border-t border-slate-800 space-y-4">
              <div class="space-y-1 text-center">
                <div class="text-sm font-extrabold text-white">Need a Similar Pipeline?</div>
                <div class="text-xs text-slate-400">Get a custom architecture built for your business in 14 days.</div>
              </div>

              <a href="{{ route('home') }}#booking" 
                 class="w-full py-4 px-4 rounded-2xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 hover:from-cyan-400 hover:to-purple-500 text-white font-extrabold text-xs flex items-center justify-center gap-2 shadow-glow-cyan hover:scale-[1.02] transition-all">
                <span>Schedule Strategy Call</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </a>

              <div class="flex items-center justify-center gap-1.5 text-[11px] text-slate-400 pt-1">
                <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <span>Free 30-Min Growth Audit Included</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- D. RELATED SUCCESS STORIES -->
  @if(isset($relatedCases) && count($relatedCases) > 0)
  <section class="py-16 border-t border-slate-800/80 bg-[#070A10] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
      <div class="flex items-center justify-between">
        <div>
          <div class="text-xs font-extrabold text-cyan-400 uppercase tracking-widest">More Proof Points</div>
          <h2 class="text-2xl sm:text-3xl font-black text-white">Explore Related Case Studies</h2>
        </div>
        <a href="{{ route('case-studies') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5">
          <span>View All Case Studies</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($relatedCases as $rc)
          <div class="bg-slate-900/80 rounded-2xl p-6 border border-slate-800 flex flex-col justify-between space-y-4 hover:border-cyan-500/40 hover:-translate-y-1 transition-all group">
            <div class="space-y-3">
              <span class="text-[10px] font-bold uppercase tracking-widest text-cyan-400 bg-cyan-950/60 px-2.5 py-1 rounded-full border border-cyan-500/30">
                {{ $rc->category_label }}
              </span>
              <h3 class="text-base font-bold text-white group-hover:text-cyan-300 transition-colors line-clamp-2">
                <a href="{{ route('case-studies.show', $rc->slug) }}" class="no-underline hover:no-underline hover:text-cyan-300 transition-colors">
                  {{ $rc->title }}
                </a>
              </h3>
              <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">{{ $rc->description }}</p>
            </div>
            
            <div class="pt-3 border-t border-slate-800 flex items-center justify-between">
              <span class="text-xs font-bold text-emerald-400">{{ $rc->metric_1_val }} {{ $rc->metric_1_label }}</span>
              <a href="{{ route('case-studies.show', $rc->slug) }}" class="text-xs font-bold text-cyan-400 group-hover:text-white flex items-center gap-1 transition-colors">
                <span>View Story</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  <!-- E. FINAL GLOBAL CTA BANNER -->
  @include('partials.cta')

</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('cs-slider-track');
    if (!track) return;

    const prevBtn = document.getElementById('cs-prev-btn');
    const nextBtn = document.getElementById('cs-next-btn');
    const counter = document.getElementById('slide-counter');
    const dots = document.querySelectorAll('.cs-dot');
    const totalSlides = dots.length || 1;
    let currentIndex = 0;
    let autoPlayTimer = null;

    function goToSlide(index) {
      if (index < 0) {
        currentIndex = totalSlides - 1;
      } else if (index >= totalSlides) {
        currentIndex = 0;
      } else {
        currentIndex = index;
      }

      track.style.transform = `translateX(-${currentIndex * 100}%)`;

      if (counter) {
        counter.textContent = currentIndex + 1;
      }

      dots.forEach((dot, idx) => {
        if (idx === currentIndex) {
          dot.className = 'cs-dot w-6 h-2.5 rounded-full bg-cyan-400 shadow-[0_0_10px_#38C5D2] transition-all duration-300';
        } else {
          dot.className = 'cs-dot w-2.5 h-2.5 rounded-full bg-slate-600 hover:bg-slate-400 transition-all duration-300';
        }
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        goToSlide(currentIndex - 1);
        resetAutoPlay();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        goToSlide(currentIndex + 1);
        resetAutoPlay();
      });
    }

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        const idx = parseInt(dot.getAttribute('data-index'), 10);
        goToSlide(idx);
        resetAutoPlay();
      });
    });

    function startAutoPlay() {
      if (totalSlides > 1) {
        autoPlayTimer = setInterval(() => {
          goToSlide(currentIndex + 1);
        }, 5000);
      }
    }

    function resetAutoPlay() {
      if (autoPlayTimer) clearInterval(autoPlayTimer);
      startAutoPlay();
    }

    startAutoPlay();
  });
</script>
@endpush
