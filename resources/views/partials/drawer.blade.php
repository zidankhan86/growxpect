<div id="drawer-backdrop" class="fixed inset-0 bg-black/75 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<aside id="drawer-panel" class="fixed top-0 left-0 bottom-0 w-[290px] sm:w-[320px] bg-[#070C18] border-r border-white/10 z-50 flex flex-col justify-between transform -translate-x-full transition-transform duration-300 ease-in-out shadow-2xl overflow-y-auto">

  <div>
    <!-- Drawer Top Header -->
    <div class="p-5 border-b border-white/[0.08] flex items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('logo.png') }}" alt="Growxpect" class="h-8 w-auto object-contain" />
      </a>
      <button id="drawer-close-btn" class="p-2 rounded-xl bg-white/5 border border-white/10 text-slate-400 hover:text-white hover:bg-white/10 transition-colors" aria-label="Close menu">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <!-- Drawer Nav Links -->
    <nav class="p-5 space-y-2">
      <a href="{{ route('home') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('home') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="home" class="w-4 h-4 text-cyan-400"></i>
          Home
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
      </a>

      <a href="{{ route('about') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('about') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="users" class="w-4 h-4 text-cyan-400"></i>
          About Us
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
      </a>

      <a href="{{ route('case-studies') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('case-studies') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="trophy" class="w-4 h-4 text-purple-400"></i>
          Case Studies
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
      </a>

      <!-- Services with Sublinks -->
      <div class="space-y-1">
        <a href="{{ route('services') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->is('services*') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
          <span class="flex items-center gap-3">
            <i data-lucide="layers" class="w-4 h-4 text-blue-400"></i>
            Services Overview
          </span>
          <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
        </a>

        <div class="pl-6 pr-2 py-1 space-y-1">
          <a href="{{ route('services.funnels') }}" class="drawer-link flex items-center px-3 py-2 rounded-lg text-xs {{ request()->routeIs('services.funnels') ? 'bg-purple-600/30 border border-purple-500/40 text-purple-300 font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }} transition-colors">
            <span>High-Converting Funnels</span>
          </a>
          <a href="{{ route('services.crm') }}" class="drawer-link flex items-center px-3 py-2 rounded-lg text-xs {{ request()->routeIs('services.crm') ? 'bg-purple-600/30 border border-purple-500/40 text-purple-300 font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }} transition-colors">
            <span>CRM Systems</span>
          </a>
          <a href="{{ route('services.ai-automation') }}" class="drawer-link flex items-center px-3 py-2 rounded-lg text-xs {{ request()->routeIs('services.ai-automation') ? 'bg-purple-600/30 border border-purple-500/40 text-purple-300 font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }} transition-colors">
            <span>AI Automation & Appointment</span>
          </a>
          <a href="{{ route('services.lead-generation') }}" class="drawer-link flex items-center px-3 py-2 rounded-lg text-xs {{ request()->routeIs('services.lead-generation') ? 'bg-purple-600/30 border border-purple-500/40 text-purple-300 font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }} transition-colors">
            <span>Lead Generation & Paid Ads</span>
          </a>
        </div>
      </div>

      <a href="{{ route('gohighlevel') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('gohighlevel') || request()->routeIs('get-gohighlevel') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-bold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="cpu" class="w-4 h-4 text-cyan-400"></i>
          GoHighLevel
        </span>
        <span class="text-[10px] uppercase font-bold text-cyan-400 bg-cyan-500/10 px-2 py-0.5 rounded-full border border-cyan-500/20">All-in-One</span>
      </a>
    </nav>
  </div>

  <!-- Drawer Bottom Actions -->
  <div class="p-5 border-t border-white/[0.08] space-y-4">
    <a href="{{ route('home') }}#booking" class="drawer-link w-full py-3 px-4 rounded-full bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-glow-cyan">
      <span>Book a Strategy Call</span>
      <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
    </a>

    <div class="flex items-center justify-center gap-3 pt-2">
      <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-colors" title="LinkedIn">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
          <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
        </svg>
      </a>
      <a href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-colors" title="Twitter / X">
        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
        </svg>
      </a>
      <a href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-colors" title="YouTube">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
          <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
        </svg>
      </a>
    </div>

    <p class="text-[11px] text-center text-slate-500">&copy; {{ date('Y') }} Growxpect Systems.</p>
  </div>

</aside>
