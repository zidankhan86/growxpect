@php
    $setting = getSetting();
@endphp

<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row">
            <div class="col-12 text-center">
                © {{ date('Y') }} {{ $setting->site_name }}
            </div>
        </div>
    </div>
</footer>


 