<footer class="pt-16 pb-12 bg-[#02050E] border-t border-white/[0.08] relative z-10 overflow-hidden">

  <!-- Subtle Ambient Top Glow -->
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-32 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- ========================================================================= -->
    <!-- 1. FOUR COLUMN TOP SECTION (With Vertical Dividers) -->
    <!-- ========================================================================= -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-0 pb-16">

      <!-- Column 1: Brand Info (5 Cols on LG) -->
      <div class="lg:col-span-4 lg:pr-8 space-y-4">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5">
          <img src="{{ asset('logo.png') }}" alt="Growxpect" class="h-8 w-auto object-contain" />
        </a>

        <div class="space-y-2">
          <h4 class="text-sm font-bold text-white tracking-tight">
            Smarter Systems. Better Growth.
          </h4>
          <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
            We build connected growth systems that help businesses attract leads, manage opportunities, automate follow-up and book more appointments.
          </p>
        </div>

        <!-- Social Links in Rounded Glass Squares -->
        <div class="flex items-center gap-2.5 pt-2">
          <!-- Instagram -->
          <a href="https://instagram.com/growxpect120" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/[0.03] border border-white/10 hover:border-cyan-400/40 hover:text-cyan-400 flex items-center justify-center text-slate-400 transition-all hover:scale-105" title="Instagram">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
              <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
            </svg>
          </a>
          <!-- LinkedIn -->
          <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/[0.03] border border-white/10 hover:border-cyan-400/40 hover:text-cyan-400 flex items-center justify-center text-slate-400 transition-all hover:scale-105" title="LinkedIn">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
            </svg>
          </a>
          <!-- Facebook -->
          <a href="{{ !empty($setting->facebook_url) ? $setting->facebook_url : '#' }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/[0.03] border border-white/10 hover:border-cyan-400/40 hover:text-cyan-400 flex items-center justify-center text-slate-400 transition-all hover:scale-105" title="Facebook">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Column 2: SERVICES (3 Cols on LG) -->
      <div class="lg:col-span-3 lg:border-l lg:border-white/[0.08] lg:px-8 space-y-4">
        <h5 class="text-xs font-mono font-bold tracking-widest text-slate-200 uppercase">
          SERVICES
        </h5>
        <ul class="space-y-2.5 text-xs text-slate-400">
          <li>
            <a href="{{ route('services.funnels') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>High-Converting Funnels</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('services.crm') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>CRM Systems</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('services.ai-automation') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>AI Automation &amp; Appointment Setter</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('services.lead-generation') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>Lead Generation &amp; Paid Ads</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 3: COMPANY (2.5 Cols on LG) -->
      <div class="lg:col-span-2 lg:border-l lg:border-white/[0.08] lg:px-8 space-y-4">
        <h5 class="text-xs font-mono font-bold tracking-widest text-slate-200 uppercase">
          COMPANY
        </h5>
        <ul class="space-y-2.5 text-xs text-slate-400">
          <li>
            <a href="{{ route('home') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>Home</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('about') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>About Us</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('case-studies') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>Case Studies</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('services') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>Services</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('gohighlevel') }}" class="group flex items-center justify-between hover:text-cyan-300 transition-colors">
              <span>GoHighLevel</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
          <li>
            <a href="{{ route('home') }}#contact" onclick="window.openBookingModal && window.openBookingModal(); return false;" class="group flex items-center justify-between hover:text-cyan-300 transition-colors cursor-pointer">
              <span>Contact</span>
              <span class="text-slate-600 group-hover:text-cyan-400 group-hover:translate-x-1 transition-all text-sm">&rarr;</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 4: LET'S CONNECT (2.5 Cols on LG) -->
      <div class="lg:col-span-3 lg:border-l lg:border-white/[0.08] lg:pl-8 space-y-5">
        <h5 class="text-xs font-mono font-bold tracking-widest text-slate-200 uppercase">
          LET'S CONNECT
        </h5>

        <div class="space-y-3 text-xs">
          <!-- Email -->
          <a href="mailto:contact@growxpect.com" class="flex items-center gap-2.5 text-slate-300 hover:text-cyan-400 transition-colors">
            <div class="w-7 h-7 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="mail" class="w-3.5 h-3.5"></i>
            </div>
            <span>contact@growxpect.com</span>
          </a>

          <!-- Instagram -->
          <a href="https://instagram.com/growxpect120" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 text-slate-300 hover:text-cyan-400 transition-colors">
            <div class="w-7 h-7 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0">
              <i data-lucide="instagram" class="w-3.5 h-3.5"></i>
            </div>
            <span>@growxpect120</span>
          </a>
        </div>

        <!-- Strategy Call Button with Purple Neon Glow -->
        <div class="pt-1">
          <button onclick="window.openBookingModal && window.openBookingModal()" class="w-full px-5 py-3 rounded-full bg-gradient-to-r from-purple-950/80 via-[#170928] to-purple-900/60 hover:from-purple-900/90 hover:to-indigo-900/80 border border-purple-500/40 hover:border-purple-400 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all duration-200 hover:scale-[1.02] active:scale-95 shadow-[0_0_20px_rgba(168,85,247,0.25)]">
            <span>Book a Strategy Call</span>
            <span class="text-sm font-bold">&rarr;</span>
          </button>
        </div>
      </div>

    </div>

    <!-- ========================================================================= -->
    <!-- 2. CONNECTED GROWTH SYSTEM FLOW TRACK & HEADLINE -->
    <!-- ========================================================================= -->
    <div class="py-12 border-t border-white/[0.08] space-y-8">

      <!-- Flow Pills Grid / Row -->
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 lg:gap-4 max-w-5xl mx-auto">

        <!-- Step 1: FUNNEL -->
        <div class="px-5 py-2.5 rounded-full bg-[#0a0f24] border border-purple-500/40 text-purple-300 text-xs font-bold font-mono tracking-wider flex items-center gap-2 shadow-[0_0_15px_rgba(168,85,247,0.15)]">
          <i data-lucide="filter" class="w-3.5 h-3.5 text-purple-400"></i>
          <span>FUNNEL</span>
        </div>

        <!-- Connector 1 -->
        <div class="hidden sm:flex items-center gap-1 text-cyan-400">
          <span class="w-4 h-px bg-cyan-500/40"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2] animate-pulse"></span>
          <span class="w-4 h-px bg-cyan-500/40"></span>
          <span class="text-[10px] text-cyan-400 font-bold">&rarr;</span>
        </div>

        <!-- Step 2: CRM -->
        <div class="px-5 py-2.5 rounded-full bg-[#0a0f24] border border-cyan-500/40 text-cyan-300 text-xs font-bold font-mono tracking-wider flex items-center gap-2 shadow-[0_0_15px_rgba(56,197,210,0.15)]">
          <i data-lucide="users" class="w-3.5 h-3.5 text-cyan-400"></i>
          <span>CRM</span>
        </div>

        <!-- Connector 2 -->
        <div class="hidden sm:flex items-center gap-1 text-purple-400">
          <span class="w-4 h-px bg-purple-500/40"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-purple-400 shadow-[0_0_8px_#A855F7] animate-pulse"></span>
          <span class="w-4 h-px bg-purple-500/40"></span>
          <span class="text-[10px] text-purple-400 font-bold">&rarr;</span>
        </div>

        <!-- Step 3: AUTOMATION -->
        <div class="px-5 py-2.5 rounded-full bg-[#0a0f24] border border-cyan-500/40 text-white text-xs font-bold font-mono tracking-wider flex items-center gap-2 shadow-[0_0_20px_rgba(56,197,210,0.2)]">
          <i data-lucide="settings" class="w-3.5 h-3.5 text-cyan-400"></i>
          <span>AUTOMATION</span>
        </div>

        <!-- Connector 3 -->
        <div class="hidden sm:flex items-center gap-1 text-cyan-400">
          <span class="w-4 h-px bg-cyan-500/40"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-[0_0_8px_#38C5D2] animate-pulse"></span>
          <span class="w-4 h-px bg-cyan-500/40"></span>
          <span class="text-[10px] text-cyan-400 font-bold">&rarr;</span>
        </div>

        <!-- Step 4: APPOINTMENT -->
        <div class="px-5 py-2.5 rounded-full bg-[#0a0f24] border border-cyan-500/40 text-cyan-300 text-xs font-bold font-mono tracking-wider flex items-center gap-2 shadow-[0_0_15px_rgba(56,197,210,0.15)]">
          <i data-lucide="calendar" class="w-3.5 h-3.5 text-cyan-400"></i>
          <span>APPOINTMENT</span>
        </div>

        <!-- Connector 4 -->
        <div class="hidden sm:flex items-center gap-1 text-purple-400">
          <span class="w-4 h-px bg-purple-500/40"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-purple-400 shadow-[0_0_8px_#A855F7] animate-pulse"></span>
          <span class="w-4 h-px bg-purple-500/40"></span>
          <span class="text-[10px] text-purple-400 font-bold">&rarr;</span>
        </div>

        <!-- Step 5: CUSTOMER -->
        <div class="px-5 py-2.5 rounded-full bg-[#0a0f24] border border-purple-500/40 text-purple-300 text-xs font-bold font-mono tracking-wider flex items-center gap-2 shadow-[0_0_15px_rgba(168,85,247,0.15)]">
          <i data-lucide="user" class="w-3.5 h-3.5 text-purple-400"></i>
          <span>CUSTOMER</span>
        </div>

      </div>

      <!-- Headline & Progression Tagline -->
      <div class="text-center space-y-2">
        <h3 class="text-xl sm:text-2xl font-extrabold text-white tracking-tight">
          Your Growth System, <span class="text-[#38C5D2]">Connected.</span>
        </h3>

        <div class="flex items-center justify-center gap-3 text-xs text-slate-400">
          <span class="h-px w-8 sm:w-12 bg-gradient-to-r from-transparent to-purple-500/50"></span>
          <span class="font-medium text-slate-300 text-[11px] sm:text-xs">
            Funnel &rarr; CRM &rarr; Automation &rarr; Appointment &rarr; Customer
          </span>
          <span class="h-px w-8 sm:w-12 bg-gradient-to-l from-transparent to-cyan-500/50"></span>
        </div>
      </div>

    </div>

    <!-- ========================================================================= -->
    <!-- 3. BOTTOM COPYRIGHT & LEGAL BAR -->
    <!-- ========================================================================= -->
    <div class="pt-8 border-t border-white/[0.06] flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
      <p>&copy; {{ date('Y') }} Growxpect. All rights reserved.</p>

      <div class="flex items-center gap-3">
        <a href="#" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
        <span class="text-slate-700">|</span>
        <a href="#" class="hover:text-slate-300 transition-colors">Terms &amp; Conditions</a>
      </div>
    </div>

  </div>
</footer>
