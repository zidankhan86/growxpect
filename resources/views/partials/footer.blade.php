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
          <a href="#" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-400/40 transition-colors">
            <i data-lucide="linkedin" class="w-4 h-4"></i>
          </a>
          <a href="#" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-400/40 transition-colors">
            <i data-lucide="twitter" class="w-4 h-4"></i>
          </a>
          <a href="#" class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-400/40 transition-colors">
            <i data-lucide="youtube" class="w-4 h-4"></i>
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
