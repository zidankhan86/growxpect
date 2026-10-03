@extends('layouts.app')

@section('title', 'Case Studies & Client Results — Growxpect')
@section('meta_description', 'Discover how Growxpect builds end-to-end growth systems, conversion funnels, and CRM automation that drive predictable revenue across industries.')

@section('content')
<!-- 1. HERO HEADER -->
<section class="relative pt-16 pb-14 md:pt-24 md:pb-18 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-bold tracking-widest uppercase backdrop-blur-md">
      <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
      PROVEN CLIENT RESULTS & CASE STUDIES
    </div>

    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
      Real Growth Systems. <br />
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400 text-glow">
        Measurable Revenue Impact.
      </span>
    </h1>

    <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
      Explore how we engineer custom full-funnel architectures, smart CRM pipelines, and automated multi-channel sequences to scale businesses across diverse industries.
    </p>

    <!-- Industry Filter Tabs (All | Insurance | Real Estate | Healthcare | Home Services | Professional Services) -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 pt-4" id="case-filters">
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-bold bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white shadow-glow-cyan transition-all" data-filter="all">All</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="insurance">Insurance</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="realestate">Real Estate</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="healthcare">Healthcare</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="homeservices">Home Services</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="professionalservices">Professional Services</button>
    </div>
  </div>
</section>

<!-- 2. CASE STUDY CARDS GRID (3 Cards Per Row: grid-cols-1 md:grid-cols-2 lg:grid-cols-3) -->
<section class="py-12 sm:py-16 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="case-grid">
      
      @forelse($caseStudies as $case)
        <div class="case-card glass-panel glass-panel-hover rounded-3xl p-6 sm:p-7 border-white/10 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 group" data-category="{{ $case->category }}">
          
          <div class="space-y-4">
            <!-- 1. Category Badge -->
            <div class="flex items-center justify-between">
              <span class="text-[11px] font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3 py-1 rounded-full border border-cyan-500/20">
                {{ $case->category_label }}
              </span>
              @if($case->badge_text)
                <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2.5 py-0.5 rounded-full border border-emerald-500/20">
                  {{ $case->badge_text }}
                </span>
              @endif
            </div>

            <!-- 2. Headline -->
            <h2 class="text-lg sm:text-xl font-extrabold text-white group-hover:text-cyan-300 transition-colors leading-snug">
              <a href="{{ route('case-studies.show', $case->slug) }}" class="no-underline hover:no-underline hover:text-cyan-300 transition-colors">
                {{ $case->title }}
              </a>
            </h2>

            <!-- 3. Company Name -->
            @if($case->client_name)
              <div class="flex items-center gap-2 text-xs font-semibold text-slate-300">
                <i data-lucide="building-2" class="w-4 h-4 text-cyan-400 shrink-0"></i>
                <span>{{ $case->client_name }}</span>
              </div>
            @endif

            <!-- 4. Thumbnail Image -->
            <a href="{{ route('case-studies.show', $case->slug) }}" class="block relative overflow-hidden rounded-2xl aspect-video bg-slate-900/80 border border-white/10 group-hover:border-cyan-500/40 transition-all">
              @if($case->image)
                <img src="{{ Str::startsWith($case->image, 'http') ? $case->image : asset($case->image) }}" 
                     alt="{{ $case->title }}" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
              @else
                <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-cyan-950/40 via-slate-900 to-purple-950/30 p-4 text-center">
                  <i data-lucide="layout" class="w-8 h-8 text-cyan-400 mb-2 opacity-80"></i>
                  <span class="text-xs font-bold text-slate-300">{{ $case->headline }}</span>
                </div>
              @endif
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-60"></div>
            </a>

            <!-- 5. Key Growth Metrics (Displayed in Cards) -->
            <div class="grid grid-cols-3 gap-2 pt-1">
              <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/5 text-center">
                <div class="text-base sm:text-lg font-black text-cyan-400 leading-none">{{ $case->metric_1_val }}</div>
                <div class="text-[9px] text-slate-400 mt-1 font-medium leading-tight">{{ $case->metric_1_label }}</div>
              </div>
              <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/5 text-center">
                <div class="text-base sm:text-lg font-black text-purple-400 leading-none">{{ $case->metric_2_val }}</div>
                <div class="text-[9px] text-slate-400 mt-1 font-medium leading-tight">{{ $case->metric_2_label }}</div>
              </div>
              <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/5 text-center">
                <div class="text-base sm:text-lg font-black text-emerald-400 leading-none">{{ $case->metric_3_val }}</div>
                <div class="text-[9px] text-slate-400 mt-1 font-medium leading-tight">{{ $case->metric_3_label }}</div>
              </div>
            </div>

            <!-- 6. Short Description -->
            <p class="text-xs text-slate-300 leading-relaxed line-clamp-3">
              {{ $case->description }}
            </p>
          </div>

          <!-- 7. View Case Study → Button (Links to Single Case Study Page) -->
          <div class="pt-5 border-t border-white/10 mt-4">
            <a href="{{ route('case-studies.show', $case->slug) }}" 
               class="w-full py-3 px-4 rounded-xl bg-gradient-to-r from-cyan-500/20 via-indigo-500/20 to-purple-500/20 hover:from-cyan-500 hover:via-indigo-600 hover:to-purple-600 border border-cyan-500/40 hover:border-cyan-400 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-sm transition-all group-hover:shadow-glow-cyan">
              <span>View Case Study</span>
              <i data-lucide="arrow-right" class="w-4 h-4 text-cyan-400 group-hover:text-white transition-colors"></i>
            </a>
          </div>

        </div>
      @empty
        <div class="col-span-3 text-center py-16 text-slate-400">
          No case studies available in this category yet.
        </div>
      @endforelse

    </div>

  </div>
</section>

<!-- 3. BOTTOM CTA BANNER -->
@include('partials.cta')
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const filterTabs = document.querySelectorAll('.filter-tab');
    const caseCards = document.querySelectorAll('.case-card');

    filterTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const filter = tab.getAttribute('data-filter');

        filterTabs.forEach(t => {
          t.classList.remove('bg-gradient-to-r', 'from-cyan-500', 'via-indigo-600', 'to-purple-600', 'text-white', 'shadow-glow-cyan', 'font-bold');
          t.classList.add('bg-white/5', 'border', 'border-white/10', 'text-slate-300', 'font-semibold');
        });

        tab.classList.add('bg-gradient-to-r', 'from-cyan-500', 'via-indigo-600', 'to-purple-600', 'text-white', 'shadow-glow-cyan', 'font-bold');
        tab.classList.remove('bg-white/5', 'border', 'border-white/10', 'text-slate-300');

        caseCards.forEach(card => {
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
