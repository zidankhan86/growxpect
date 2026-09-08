@php
    $setting = DB::table('settings')->first();
@endphp
<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <link rel="icon" href="{{ asset($setting->favicon) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    @yield('seo')
    @stack('style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Hero Section -->
    {{-- @include('frontend.layouts.header') --}}

    @yield('content')

    {{-- @include('frontend.layouts.footer') --}}

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>


    {{-- Session flash → iziToast --}}
    <script>
        @if (session('error'))
            iziToast.error({
                title: 'Error',
                message: '{{ addslashes(session('error')) }}',
                position: 'topRight',
                timeout: 7000,
                progressBar: true,
            });
        @endif
        @if (session('success'))
            iziToast.success({
                title: 'Success',
                message: '{{ addslashes(session('success')) }}',
                position: 'topRight',
                timeout: 5000,
                progressBar: true,
            });
        @endif
        @if (session('warning'))
            iziToast.warning({
                title: 'Warning',
                message: '{{ addslashes(session('warning')) }}',
                position: 'topRight',
                timeout: 6000,
                progressBar: true,
            });
        @endif
        @if (session('info'))
            iziToast.info({
                title: 'Info',
                message: '{{ addslashes(session('info')) }}',
                position: 'topRight',
                timeout: 5000,
                progressBar: true,
            });
        @endif
    </script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    @stack('script')
</body>

</html>
