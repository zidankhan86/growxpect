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

      <a href="{{ route('services') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('services') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="layers" class="w-4 h-4 text-cyan-400"></i>
          Services
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
      </a>

      <a href="{{ route('gohighlevel') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('gohighlevel') || request()->routeIs('get-gohighlevel') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-bold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="cpu" class="w-4 h-4 text-cyan-400"></i>
          GoHighLevel
        </span>
        <span class="text-[10px] uppercase font-bold text-cyan-400 bg-cyan-500/10 px-2 py-0.5 rounded-full border border-cyan-500/20">All-in-One</span>
      </a>

      <a href="{{ route('case-studies') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('case-studies') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="trophy" class="w-4 h-4 text-blue-400"></i>
          Case Studies
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
      </a>

      <a href="{{ route('about') }}" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl {{ request()->routeIs('about') ? 'bg-gradient-to-r from-cyan-500/20 to-purple-500/10 border border-cyan-500/30 text-cyan-400 font-semibold shadow-glow-pill' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }} text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="users" class="w-4 h-4 text-purple-400"></i>
          About Us
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
      </a>

      <a href="{{ route('home') }}#pricing" class="drawer-link flex items-center justify-between px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white font-medium text-sm transition-colors">
        <span class="flex items-center gap-3">
          <i data-lucide="tag" class="w-4 h-4 text-purple-400"></i>
          Pricing Plans
        </span>
        <i data-lucide="chevron-right" class="w-4 h-4 text-slate-600"></i>
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
      <a href="#" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-colors">
        <i data-lucide="linkedin" class="w-4 h-4"></i>
      </a>
      <a href="#" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-colors">
        <i data-lucide="twitter" class="w-4 h-4"></i>
      </a>
      <a href="#" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-colors">
        <i data-lucide="youtube" class="w-4 h-4"></i>
      </a>
    </div>

    <p class="text-[11px] text-center text-slate-500">&copy; {{ date('Y') }} Growxpect Systems.</p>
  </div>

</aside>
