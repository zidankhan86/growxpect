<footer class="pt-16 pb-12 border-t border-white/[0.08] bg-[#02050E] relative z-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    @if(request()->routeIs('gohighlevel') || request()->routeIs('get-gohighlevel'))
      <!-- Dedicated GoHighLevel Page Footer Bar (Matches Figma / Image) -->
      <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-10 border-b border-white/[0.06]">
        <a href="{{ route('home') }}" class="flex items-center">
          <img src="{{ asset('logo.png') }}" alt="Growxpect" class="h-8 w-auto object-contain" />
        </a>

        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-8 text-xs font-medium text-slate-300">
          <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors">Home</a>
          <a href="{{ route('services') }}" class="hover:text-cyan-400 transition-colors">Services</a>
          <a href="{{ route('gohighlevel') }}" class="text-cyan-400 font-bold transition-colors">GoHighLevel</a>
          <a href="{{ route('case-studies') }}" class="hover:text-cyan-400 transition-colors">Case Studies</a>
          <a href="{{ route('about') }}" class="hover:text-cyan-400 transition-colors">About Us</a>
        </div>

        <a href="https://www.gohighlevel.com/?fp_ref=growxpect" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-700 text-white font-bold text-xs flex items-center gap-2 shadow-[0_0_20px_rgba(168,85,247,0.3)] hover:scale-105 transition-all">
          <span>Start Your GoHighLevel Journey</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>
    @else
      <!-- Standard Site Footer -->
      <div class="flex flex-col md:flex-row items-center justify-between gap-8 pb-12 border-b border-white/[0.06]">
        <div class="flex flex-col items-center md:items-start gap-2">
          <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('logo.png') }}" alt="Growxpect" class="h-8 w-auto object-contain" />
          </a>
          <p class="text-xs text-slate-400">Funnels • CRM • Automation • Growth</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-8 text-xs font-medium text-slate-400">
          <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 font-semibold' : 'hover:text-cyan-400' }} transition-colors">Home</a>
          <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-cyan-400 font-semibold' : 'hover:text-cyan-400' }} transition-colors">Services</a>
          <a href="{{ route('case-studies') }}" class="{{ request()->routeIs('case-studies') ? 'text-cyan-400 font-semibold' : 'hover:text-cyan-400' }} transition-colors">Case Studies</a>
          <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 font-semibold' : 'hover:text-cyan-400' }} transition-colors">About</a>
          <a href="{{ route('home') }}#process" class="hover:text-cyan-400 transition-colors">Process</a>
          <a href="{{ route('gohighlevel') }}" class="{{ request()->routeIs('gohighlevel') || request()->routeIs('get-gohighlevel') ? 'text-cyan-400 font-semibold' : 'hover:text-cyan-400' }} transition-colors">GoHighLevel</a>
        </div>

        <div class="flex items-center gap-3">
          <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-400/40 transition-colors" title="LinkedIn">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
            </svg>
          </a>
          <a href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-400/40 transition-colors" title="Twitter / X">
            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
            </svg>
          </a>
          <a href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-400/40 transition-colors" title="YouTube">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
            </svg>
          </a>
        </div>
      </div>
    @endif

    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
      <p>&copy; {{ date('Y') }} Growxpect. All rights reserved.</p>
      <div class="flex items-center gap-6">
        <a href="#" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-slate-300 transition-colors">Terms of Service</a>
      </div>
    </div>

  </div>
</footer>
