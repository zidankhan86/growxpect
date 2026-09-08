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


     <!-- Course -->
     {{-- <li class="nav-item">
         <a class="nav-link @yield('course_manage')" href="{{ route('admin.course.edit') }}">
             <span class="nav-link-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                     <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                 </svg>
             </span>
             <span class="nav-link-title">Course</span>
         </a>
     </li>

     <!-- Classes -->
     <li class="nav-item">
         <a class="nav-link @yield('course_class')" href="{{ route('admin.course-class.index') }}">
             <span class="nav-link-icon">
                 <x-icons.layout-list />
             </span>
             <span class="nav-link-title">Classes</span>
         </a>
     </li>
     
     <!-- Enrollments -->
     <li class="nav-item">
         <a class="nav-link @yield('enrollment')" href="{{ route('admin.enrollment.index') }}">
             <span class="nav-link-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/>
                     <rect x="9" y="3" width="6" height="4" rx="2"/>
                     <path d="M9 12h6M9 16h4"/>
                 </svg>
             </span>
             <span class="nav-link-title">Enrollments</span>
         </a>
     </li>

     <!-- Users -->
    <li class="nav-item">
        <a class="nav-link @yield('front_users')" href="{{ route('admin.front-users.index') }}">
            <span class="nav-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="7" r="4"/><path d="M5.5 21a8.5 8.5 0 0 1 13 0"/>
                </svg>
            </span>
            <span class="nav-link-title">Users</span>
        </a>
    </li> --}}

     <!-- Homepage CMS -->
     <li class="nav-item">
         <a class="nav-link @yield('cms_manage')" href="{{ route('admin.cms.manage') }}">
             <span class="nav-link-icon">
                 <x-icons.paint_bucket />
             </span>
             <span class="nav-link-title">Homepage CMS</span>
         </a>
     </li>

     <!-- Payment Gateway Setup -->
     {{-- <li class="nav-item">
         <a class="nav-link @yield('payment_gateway')" href="{{ route('admin.payment-gateway.index') }}">
             <span class="nav-link-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                     <rect x="3" y="5" width="18" height="14" rx="3"/>
                     <line x1="3" y1="10" x2="21" y2="10"/>
                     <line x1="7" y1="15" x2="7.01" y2="15"/>
                     <line x1="11" y1="15" x2="13" y2="15"/>
                 </svg>
             </span>
             <span class="nav-link-title">Payment Setup</span>
         </a>
     </li>


        <!-- Custom Pages -->
     @if (Auth::user()->can('admin.cpage.index'))
         <li class="nav-item ">
             <a class="nav-link @yield('cpage')" href="{{ route('admin.cpage.index') }}">
                 <span class="nav-link-icon">
                     <x-icons.clipboard />
                 </span>
                 <span class="nav-link-title">Custom Pages</span>
             </a>
         </li>
     @endif --}}
     
    
     <!-- Settings -->
     @if (Auth::user()->can('admin.settings.general'))
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
     @endif

 </ul>
