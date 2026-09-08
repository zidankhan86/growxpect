@php
    $settings = DB::table('settings')->first();
@endphp


<aside class="navbar navbar-vertical d-none d-lg-block navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">

        <!-- Logo (Centered on mobile) -->
        <div class="navbar-brand navbar-brand-autodark mx-auto d-none d-lg-block text-center">
            <a href="{{ route('admin.dashboard') }}" class="brand-link p-lg-3 pb-lg-2 pt-1">
                <img src="{{ getIcon($settings->site_logo) }}" alt="" width="180" style="height:50px;">
            </a>
        </div>

        <!-- DESKTOP SIDEBAR -->
        <div class="collapse navbar-collapse d-none d-lg-block" id="sidebar-menu">
            @include('admin.layouts.sidebar_menu')
        </div>
    </div>
</aside>
