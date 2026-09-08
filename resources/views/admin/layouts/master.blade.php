<!DOCTYPE html>
<html lang="en">
@php
    $setting = getSetting();
@endphp

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ getIcon($setting->favicon) }}" />
    {{-- admin not allow for robots --}}
    <meta name="robots" content="noindex, nofollow">

    <title>@yield('title') - {{ config('app.name', '') }}</title>

    {{-- style --}}
    @include('admin.layouts.style')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-bs5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('style')

    @php
        $primary = $setting->sitebar_color ?? '#000000';
        $hex = str_replace('#', '', $primary);
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        $brightness = ($r * 299 + $g * 587 + $b * 114) / 1000;
        $isDark = $brightness < 120;
    @endphp

    <style>
        .navbar-vertical,
        #mobileSidebar {
            background: {{ $primary }} !important;
        }

        .navbar-vertical .nav-link.active {
            @if ($isDark)
                background: #1818189e;
            @else
                background: linear-gradient(135deg, {{ $primary }}, rgba(0, 0, 0, .2));
            @endif
            color: #fff;
        }

        .navbar-vertical .nav-link.active .nav-link-icon {
            color: #fff;
        }
    </style>


</head>

<body>

    <div class="page">
        {{-- header area --}}
        @include('admin.layouts.header')

        {{-- sidebar area --}}
        @include('admin.layouts.sidebar')

        {{-- main content --}}
        @yield('content')

        {{-- footer --}}
        <div class="page-wrapper">
            @include('admin.layouts.footer')
        </div>
    </div>

    {{-- javascript --}}
    @include('admin.layouts.script')

    <script>
        // Initialize DataTable with language settings and additional configurations
        $(function() {
            $("#dataTables").DataTable({
                responsive: false,
                lengthChange: true,
                autoWidth: false,
                dom: '<"row mb-3"' +
                    '<"col-sm-12 col-md-6 d-flex align-items-center"l>' +
                    '<"col-sm-12 col-md-6 d-flex justify-content-end"f>' +
                    '>' +
                    '<"row"<"col-sm-12"tr>>' +
                    '<"row mt-3"' +
                    '<"col-sm-12 col-md-5"i>' +
                    '<"col-sm-12 col-md-7 d-flex justify-content-end"p>' +
                    '>',
            });
            $("#dataTables_two").DataTable({
                responsive: false,
                lengthChange: true,
                autoWidth: false,
                pageLength: 5, // show 5 rows per page by default
                lengthMenu: [5], // only allow 5 rows per page
                dom: '<"row mb-3"' +
                    '<"col-sm-12 col-md-6 d-flex align-items-center"l>' +
                    '<"col-sm-12 col-md-6 d-flex justify-content-end"f>' +
                    '>' +
                    '<"row"<"col-sm-12"tr>>' +
                    '<"row mt-3"' +
                    '<"col-sm-12 col-md-5"i>' +
                    '<"col-sm-12 col-md-7 d-flex justify-content-end"p>' +
                    '>',
            });
        });
    </script>

    {{-- delete sweetalert2 --}}
    <script>
        $(document).on("click", "#deleteData", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: "Are you want to delete?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#8bc34a',
                cancelButtonColor: '#d33',
                cancelButtonText: "Cancel",
                confirmButtonText: "Yes, delete it!",
            }).then((willDelete) => {
                if (willDelete.isConfirmed) {
                    window.location.href = link;
                }
            })
        })
    </script>

    {{-- delete confirm sweetalert2 --}}
    <script>
        $(document).on("click", ".delete-confirm", function(e) {
            e.preventDefault();
            var $this = $(this);
            var link = $this.attr("href");
            var form = $this.closest('form');
            Swal.fire({
                title: "Are you sure you want to delete?",
                text: "Once deleted, this will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#8bc34a',
                cancelButtonColor: '#d33',
                cancelButtonText: "Cancel",
                confirmButtonText: "Yes, delete it!",
            }).then((willDelete) => {
                if (willDelete.isConfirmed) {
                    if (form.length) {
                        form.submit();
                    } else if (link) {
                        window.location.href = link;
                    }
                }
            });
        });
    </script>

    {{-- summernote --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let options = {
                selector: "#hugerte-textarea",
                height: 300,
                menubar: false,
                statusbar: false,
                license_key: "gpl",
                plugins: [
                    "advlist",
                    "autolink",
                    "lists",
                    "link",
                    "image",
                    "charmap",
                    "preview",
                    "anchor",
                    "searchreplace",
                    "visualblocks",
                    "code",
                    "fullscreen",
                    "insertdatetime",
                    "media",
                    "table",
                    "code",
                    "help",
                    "wordcount",
                ],
                toolbar: "undo redo | formatselect | " +
                    "bold italic backcolor | alignleft aligncenter " +
                    "alignright alignjustify | bullist numlist outdent indent | " +
                    "removeformat",
                content_style: "body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }",
            };
            if (localStorage.getItem("tablerTheme") === "dark") {
                options.skin = "oxide-dark";
                options.content_css = "dark";
            }
            hugeRTE.init(options);
        });
    </script>
    {{-- custom js area --}}
    @stack('script')

</body>

</html>
