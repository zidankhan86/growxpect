@extends('layouts.app')

@section('title', 'Case Studies & Client Results — Growxpect')
@section('meta_description', 'Discover how Growxpect builds end-to-end growth systems, conversion funnels, and CRM automation that drive predictable revenue across industries.')

@section('content')
<!-- 1. HERO HEADER -->
<section class="relative pt-16 pb-16 md:pt-24 md:pb-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/50 border border-cyan-500/30 text-cyan-400 text-xs font-bold tracking-widest uppercase backdrop-blur-md">
      <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
      PROVEN CLIENT RESULTS
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

    <!-- Category Filter Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 pt-4" id="case-filters">
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-bold bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white shadow-glow-cyan transition-all" data-filter="all">All Case Studies</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="healthcare">Healthcare & MedSpa</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="saas">B2B SaaS</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="realestate">Real Estate</button>
      <button class="filter-tab px-5 py-2.5 rounded-full text-xs font-semibold bg-white/5 border border-white/10 text-slate-300 hover:border-cyan-400/40 hover:text-white transition-all" data-filter="ecommerce">E-Commerce</button>
    </div>
  </div>
</section>

<!-- 2. CASE STUDY CARDS GRID -->
<section class="py-12 sm:py-16 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="case-grid">
      
      @forelse($caseStudies as $case)
        <div class="case-card glass-panel glass-panel-hover rounded-3xl p-7 sm:p-8 border-white/10 space-y-6 flex flex-col justify-between" data-category="{{ $case->category }}">
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-xs font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-3 py-1 rounded-full border border-cyan-500/20">
                {{ $case->category_label }}
              </span>
              <span class="text-xs text-slate-400">{{ $case->badge_text ?? 'Verified Growth' }}</span>
            </div>

            <h2 class="text-xl sm:text-2xl font-bold text-white">{{ $case->headline }}</h2>
            
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
              {{ $case->description }}
            </p>

            <!-- Metrics -->
            <div class="grid grid-cols-3 gap-3 pt-2">
              <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 text-center">
                <div class="text-xl sm:text-2xl font-extrabold text-cyan-400">{{ $case->metric_1_val }}</div>
                <div class="text-[10px] text-slate-400 mt-0.5">{{ $case->metric_1_label }}</div>
              </div>
              <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 text-center">
                <div class="text-xl sm:text-2xl font-extrabold text-purple-400">{{ $case->metric_2_val }}</div>
                <div class="text-[10px] text-slate-400 mt-0.5">{{ $case->metric_2_label }}</div>
              </div>
              <div class="p-3.5 rounded-xl bg-white/[0.03] border border-white/5 text-center">
                <div class="text-xl sm:text-2xl font-extrabold text-emerald-400">{{ $case->metric_3_val }}</div>
                <div class="text-[10px] text-slate-400 mt-0.5">{{ $case->metric_3_label }}</div>
              </div>
            </div>
          </div>

          <div class="pt-4 border-t border-white/10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
            <div class="text-xs text-slate-400">Stack: <span class="text-white font-medium">{{ $case->tech_stack }}</span></div>
            <a href="{{ route('home') }}#booking" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
              <span>Book Similar Call</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>
      @empty
        <div class="col-span-2 text-center py-12 text-slate-400">
          No case studies available in this category yet.
        </div>
      @endforelse

    </div>

  </div>
</section>

<!-- 3. BOTTOM CTA BANNER -->
<section class="py-20 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="glass-panel rounded-3xl p-8 sm:p-12 border-cyan-500/30 text-center max-w-4xl mx-auto space-y-6 shadow-2xl relative">
      <h2 class="text-2xl sm:text-4xl font-extrabold text-white">Ready to Architect Your Growth Engine?</h2>
      <p class="text-xs sm:text-base text-slate-300 max-w-xl mx-auto">
        Book a 30-minute free growth architecture call to discover the exact funnels, CRM workflows, and automation your business needs to scale.
      </p>
      <div class="pt-2">
        <a href="{{ route('home') }}#booking" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm shadow-glow-cyan hover:scale-105 transition-all">
          <span>Book A Free Strategy Call</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
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
</script>
@endpush
