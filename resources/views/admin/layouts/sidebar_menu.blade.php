@php
    $adminUser = Auth::guard('admin')->user() ?? Auth::user();
@endphp
 <ul class="navbar-nav sidebar_nav pt-0">

     <!-- Dashboard -->
     <li class="nav-item">
         <a class="nav-link @yield('dashboard')" href="{{ route('admin.dashboard') }}">
             <span class="nav-link-icon">
                 <x-icons.home />
             </span>
             <span class="nav-link-title">Dashboard</span>
         </a>
     </li>

     <!-- Strategy Call Bookings -->
     @php
         $pendingBookingsCount = \App\Models\Booking::where('status', 'pending')->count();
     @endphp
     <li class="nav-item">
         <a class="nav-link @yield('bookings') d-flex justify-content-between align-items-center" href="{{ route('admin.bookings.index') }}">
             <span class="d-flex align-items-center gap-2">
                 <span class="nav-link-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                 </span>
                 <span class="nav-link-title">Strategy Calls</span>
             </span>
             @if($pendingBookingsCount > 0)
                 <span class="badge bg-danger text-white rounded-pill px-2 py-1 ms-auto" style="font-size: 10px;">{{ $pendingBookingsCount }}</span>
             @endif
         </a>
     </li>

     <!-- Homepage CMS -->
     <li class="nav-item">
         <a class="nav-link @yield('cms_manage')" href="{{ route('admin.cms.manage') }}">
             <span class="nav-link-icon">
                 <x-icons.paint_bucket />
             </span>
             <span class="nav-link-title">Homepage CMS</span>
         </a>
     </li>

     <!-- Case Studies Management -->
     <li class="nav-item">
         <a class="nav-link @yield('case_studies')" href="{{ route('admin.case-studies.index') }}">
             <span class="nav-link-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
             </span>
             <span class="nav-link-title">Case Studies</span>
         </a>
     </li>

     <!-- About Page CMS -->
     <li class="nav-item">
         <a class="nav-link @yield('cms_about_manage')" href="{{ route('admin.cms.about.manage') }}">
             <span class="nav-link-icon">
                 <x-icons.clipboard />
             </span>
             <span class="nav-link-title">About Page CMS</span>
         </a>
     </li>

     <!-- SEO Settings -->
     <li class="nav-item">
         <a class="nav-link @yield('seo')" href="{{ route('admin.seo.index') }}">
             <span class="nav-link-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <circle cx="11" cy="11" r="8"></circle>
                     <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                 </svg>
             </span>
             <span class="nav-link-title">SEO Settings</span>
         </a>
     </li>

     <!-- Custom Pages -->
     <li class="nav-item">
         <a class="nav-link @yield('cpage')" href="{{ route('admin.cpage.index') }}">
             <span class="nav-link-icon">
                 <x-icons.clipboard />
             </span>
             <span class="nav-link-title">Custom Pages</span>
         </a>
     </li>

     <!-- Settings -->
     <li class="nav-item mb-5 pb-5">
         <a class="nav-link d-flex justify-content-between align-items-center @if (View::getSection('settings_menu')) active @endif"
             data-bs-toggle="collapse" href="#collapseSettings" role="button"
             aria-expanded="@if (View::getSection('settings_menu')) true @else false @endif">
             <span>
                 <x-icons.settings /> Settings
             </span>
             <span class="chevron-icon">
                 <x-icons.chevron-down />
             </span>
         </a>
         <div class="collapse @if (View::getSection('settings_menu')) show @endif" id="collapseSettings">
             <ul class="sub_menu nav flex-column ms-4 ms-lg-3">
                 <li class="nav-item">
                     <a class="nav-link @yield('general')" href="{{ route('admin.settings.general') }}">
                         General Settings
                     </a>
                 </li>
             </ul>
         </div>
     </li>

 </ul>
