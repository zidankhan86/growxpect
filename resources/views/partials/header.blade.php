<header class="sticky top-0 z-40 w-full backdrop-blur-xl bg-[#030712]/85 border-b border-white/[0.06] transition-all">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
    
    <!-- Dynamic Logo -->
    <a href="{{ route('home') }}" class="flex items-center group">
      <img src="{{ !empty($setting->site_logo) && file_exists(public_path($setting->site_logo)) ? asset($setting->site_logo) : asset('logo.png') }}" alt="{{ $setting->site_name ?? 'Growxpect' }}" class="h-9 w-auto object-contain transition-transform group-hover:scale-105" />
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">Home</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">About Us</a>
      <a href="{{ route('case-studies') }}" class="{{ request()->routeIs('case-studies') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">Case Studies</a>
      <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">Services & Pricing</a>
      <a href="{{ route('home') }}#pricing" class="text-slate-300 hover:text-white transition-colors">Pricing</a>
      <a href="{{ route('home') }}#process" class="text-slate-300 hover:text-white transition-colors">Process</a>
    </nav>

    <!-- Right Action CTA -->
    <div class="hidden md:flex items-center gap-4">
      <a href="{{ route('home') }}#booking" class="relative group overflow-hidden rounded-full p-[1px] font-semibold text-xs transition-all duration-300 hover:scale-[1.02] shadow-glow-cyan">
        <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-600 rounded-full transition-all group-hover:opacity-90"></div>
        <div class="relative px-5 py-2.5 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white flex items-center gap-2 font-semibold">
          <span>Book a Strategy Call</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1"></i>
        </div>
      </a>
    </div>

    <!-- Mobile Menu Hamburger Button -->
    <div class="flex md:hidden items-center">
      <button id="drawer-open-btn" class="p-2.5 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:bg-white/10 focus:outline-none active:scale-95 transition-all" aria-label="Open navigation drawer">
        <i data-lucide="menu" class="w-6 h-6"></i>
      </button>
    </div>
  </div>
</header>
