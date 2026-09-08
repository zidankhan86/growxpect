@php
    $settings = DB::table('settings')->first();
@endphp
<div class="page_wrapper">
    <header class="navbar navbar-expand-md  d-lg-flex d-print-none">
        <div class="container-xl">
            <!-- BEGIN NAVBAR TOGGLER -->
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- END NAVBAR TOGGLER -->
            <div class="navbar-nav flex-row order-md-last">
                <div class="d-flex align-items-center">
                    <div class="nav-item dropdown">
                        <a href="{{ route('home') }}" target="_lank" class="nav-link px-0 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-earth-icon lucide-earth">
                                <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                                <path
                                    d="M7 3.34V5a3 3 0 0 0 3 3a2 2 0 0 1 2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2c0-1.1.9-2 2-2h3.17" />
                                <path d="M11 21.95V18a2 2 0 0 0-2-2a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="{{ route('admin.cacheClear') }}" class="nav-link px-0 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-paintbrush-icon lucide-paintbrush">
                                <path d="m14.622 17.897-10.68-2.913" />
                                <path
                                    d="M18.376 2.622a1 1 0 1 1 3.002 3.002L17.36 9.643a.5.5 0 0 0 0 .707l.944.944a2.41 2.41 0 0 1 0 3.408l-.944.944a.5.5 0 0 1-.707 0L8.354 7.348a.5.5 0 0 1 0-.707l.944-.944a2.41 2.41 0 0 1 3.408 0l.944.944a.5.5 0 0 0 .707 0z" />
                                <path
                                    d="M9 8c-1.804 2.71-3.97 3.46-6.583 3.948a.507.507 0 0 0-.302.819l7.32 8.883a1 1 0 0 0 1.185.204C12.735 20.405 16 16.792 16 15" />
                            </svg>
                        </a>
                    </div>
                  

                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link px-0 d-flex align-items-center" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="avatar rounded" style="background-image: url('{{ getProfile(Auth::user()->image) }}')"></span>
                        <div class="d-none d-xl-block ms-2">
                            {{ Auth::user()->name }}
                        </div>
                        <span class="nav-link-arrow"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="{{ route('admin.profile') }}" class="dropdown-item">
                            <span class="dropdown-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                                    <path d="M6 20v-1a6 6 0 0 1 12 0v1" />
                                </svg></span>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item text-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="dropdown-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 16l4-4-4-4" />
                                    <path d="M21 12H9" />
                                    <path d="M12 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h7" />
                                </svg></span>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <!-- BEGIN NAVBAR MENU -->
                <ul class="navbar-nav">

                </ul>
                <!-- END NAVBAR MENU -->
            </div>
        </div>
    </header>


</div>

<!-- MOBILE OFFCANVAS SIDEBAR -->
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header border-dark py-3">
        <h5 class="offcanvas-title">
            <img src="{{ getIcon($settings->admin_logo) }}" alt="" style="height: 25px;">
        </h5>
        <button type="button" class="btn-close text-white opacity-100" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body px-0 py-2">
        @include('admin.layouts.sidebar_menu')
    </div>
</div>
