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

     <!-- Homepage CMS -->
     <li class="nav-item">
         <a class="nav-link @yield('cms_manage')" href="{{ route('admin.cms.manage') }}">
             <span class="nav-link-icon">
                 <x-icons.paint_bucket />
             </span>
             <span class="nav-link-title">Homepage CMS</span>
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
