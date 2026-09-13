<header class="sticky top-0 z-40 w-full backdrop-blur-xl bg-[#030712]/85 border-b border-white/[0.06] transition-all">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

    <!-- Dynamic Logo -->
    <a href="{{ route('home') }}" class="flex items-center group">
      <img src="{{ !empty($setting->site_logo) && file_exists(public_path($setting->site_logo)) ? asset($setting->site_logo) : asset('logo.png') }}" alt="{{ $setting->site_name ?? 'Growxpect' }}" class="h-9 w-auto object-contain transition-transform group-hover:scale-105" />
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="hidden md:flex items-center gap-7 text-sm font-medium">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">Home</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">About Us</a>

      <!-- Services Hover Dropdown -->
      <div class="relative group py-4">
        <a href="{{ route('services') }}" class="flex items-center gap-1.5 {{ request()->is('services*') ? 'text-cyan-400 font-semibold' : 'text-slate-300 group-hover:text-white' }} transition-colors">
          <span>Services</span>
          <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180 text-slate-400 group-hover:text-cyan-400"></i>
        </a>

        <!-- Dropdown Card -->
        <div class="absolute top-[80%] left-1/2 -translate-x-1/2 pt-2 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 ease-out z-50 min-w-[285px]">
          <div class="rounded-2xl p-2 bg-[#091024]/95 backdrop-blur-2xl border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,0.8),0_0_25px_rgba(168,85,247,0.15)] space-y-1">

            <a href="{{ route('services.funnels') }}" class="flex items-center px-3.5 py-2.5 rounded-xl transition-all {{ request()->routeIs('services.funnels') ? 'bg-[#8C2AA6] text-white font-semibold shadow-md' : 'text-slate-300 hover:text-white hover:bg-white/5' }}">
              <span class="text-xs">High-Converting Funnels</span>
            </a>

            <a href="{{ route('services.crm') }}" class="flex items-center px-3.5 py-2.5 rounded-xl transition-all {{ request()->routeIs('services.crm') ? 'bg-[#8C2AA6] text-white font-semibold shadow-md' : 'text-slate-300 hover:text-white hover:bg-white/5' }}">
              <span class="text-xs">CRM Systems</span>
            </a>

            <a href="{{ route('services.ai-automation') }}" class="flex items-center px-3.5 py-2.5 rounded-xl transition-all {{ request()->routeIs('services.ai-automation') ? 'bg-[#8C2AA6] text-white font-semibold shadow-md' : 'text-slate-300 hover:text-white hover:bg-white/5' }}">
              <span class="text-xs">AI Automation & Appointment Setter</span>
            </a>

            <a href="{{ route('services.lead-generation') }}" class="flex items-center px-3.5 py-2.5 rounded-xl transition-all {{ request()->routeIs('services.lead-generation') ? 'bg-[#8C2AA6] text-white font-semibold shadow-md' : 'text-slate-300 hover:text-white hover:bg-white/5' }}">
              <span class="text-xs">Lead Generation & Paid Ads</span>
            </a>

          </div>
        </div>
      </div>

      <a href="{{ route('case-studies') }}" class="{{ request()->routeIs('case-studies') ? 'text-cyan-400 font-semibold' : 'text-slate-300 hover:text-white' }} transition-colors">Case Studies</a>
      <a href="{{ route('gohighlevel') }}" class="{{ request()->routeIs('gohighlevel') || request()->routeIs('get-gohighlevel') ? 'text-cyan-400 font-bold relative after:absolute after:-bottom-2 after:left-0 after:right-0 after:h-0.5 after:bg-cyan-400 after:rounded-full' : 'text-slate-300 hover:text-white' }} transition-colors">GoHighLevel</a>
    </nav>

    <!-- Right Action CTA -->
    <div class="hidden md:flex items-center gap-4">
      <button onclick="window.openBookingModal && window.openBookingModal()" class="px-5 py-2.5 rounded-full bg-[#38C5D2] hover:bg-[#2EB3C0] text-slate-950 font-bold text-xs flex items-center gap-2 transition-all duration-200 hover:scale-[1.02] shadow-[0_0_20px_rgba(56,197,210,0.35)] active:scale-95">
        <span>Book a Free Strategy Call</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </button>
    </div>

    <!-- Mobile Menu Hamburger Button -->
    <div class="flex md:hidden items-center">
      <button id="drawer-open-btn" class="p-2.5 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:text-white hover:bg-white/10 focus:outline-none active:scale-95 transition-all" aria-label="Open navigation drawer">
        <i data-lucide="menu" class="w-6 h-6"></i>
      </button>
    </div>
  </div>
</header>
