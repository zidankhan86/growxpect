<footer class="pt-16 pb-12 border-t border-white/[0.08] bg-[#02050E] relative z-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row items-center justify-between gap-8 pb-12 border-b border-white/[0.06]">
      <div class="flex flex-col items-center md:items-start gap-2">
        <a href="{{ route('home') }}" class="flex items-center">
          <img src="{{ !empty($setting->site_logo) && file_exists(public_path($setting->site_logo)) ? asset($setting->site_logo) : asset('logo.png') }}" alt="{{ $setting->site_name ?? 'Growxpect' }}" class="h-8 w-auto object-contain" />
        </a>
        <p class="text-xs text-slate-500">{{ $setting->footer_text ?? 'Connecting funnels, CRM, and automation into predictable revenue engines.' }}</p>
      </div>

      <div class="flex flex-wrap items-center justify-center md:justify-end gap-6 sm:gap-8 text-xs font-medium text-slate-400">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400 font-semibold' : 'hover:text-white' }} transition-colors">Home</a>
        <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-cyan-400 font-semibold' : 'hover:text-white' }} transition-colors">Services</a>
        <a href="{{ route('gohighlevel') }}" class="{{ request()->routeIs('gohighlevel') || request()->routeIs('get-gohighlevel') ? 'text-cyan-400 font-semibold' : 'hover:text-white' }} transition-colors">GoHighLevel</a>
        <a href="{{ route('case-studies') }}" class="{{ request()->routeIs('case-studies') ? 'text-cyan-400 font-semibold' : 'hover:text-white' }} transition-colors">Case Studies</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 font-semibold' : 'hover:text-white' }} transition-colors">About Us</a>
        <a href="{{ route('home') }}#booking" class="hover:text-white transition-colors">Book Call</a>
      </div>
    </div>

    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
      <p>&copy; {{ date('Y') }} {{ $setting->copyright_text ?? $setting->site_name ?? 'Growxpect' }}. All rights reserved.</p>
      
      <div class="flex items-center gap-6">
        @if(!empty($setting->linkedin_url))
          <a href="{{ $setting->linkedin_url }}" target="_blank" class="hover:text-cyan-400 transition-colors">LinkedIn</a>
        @endif
        @if(!empty($setting->twitter_url))
          <a href="{{ $setting->twitter_url }}" target="_blank" class="hover:text-cyan-400 transition-colors">Twitter</a>
        @endif
        @if(!empty($setting->facebook_url))
          <a href="{{ $setting->facebook_url }}" target="_blank" class="hover:text-cyan-400 transition-colors">Facebook</a>
        @endif
        <a href="#" class="hover:text-slate-400 transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-slate-400 transition-colors">Terms of Service</a>
      </div>
    </div>

  </div>
</footer>
