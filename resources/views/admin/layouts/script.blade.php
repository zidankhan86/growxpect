<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

{{-- dataTables --}}
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/buttons.html5.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables-buttons/js/vfs_fonts.js') }}"></script>

<script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/libs/jsvectormap/dist/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/libs/jsvectormap/dist/maps/world.js') }}"></script>
<script src="{{ asset('assets/libs/jsvectormap/dist/maps/world-merc.js') }}"></script>
<script src="{{ asset('assets/libs/hugerte/hugerte.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/tabler.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/jodit@4.0.13/es2021/jodit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-bs5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- iziToast --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>


{{-- IziToast Notify --}}
@if (session()->has('notify'))
    @foreach (session('notify') as $msg)
        <script>
            "use strict";
            iziToast.{{ $msg[0] }}({
                message: "{{ __($msg[1]) }}",
                position: "topRight",
                timeout: 3000
            });
        </script>
    @endforeach
@endif

{{-- IziToast Error Notify --}}
@if (isset($errors) && $errors->any())
    @php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    @endphp

    <script>
        "use strict";
        @foreach ($errors as $error)
            iziToast.error({
                message: '{{ __($error) }}',
                position: "topRight",
                timeout: 3000
            });
        @endforeach
    </script>
@endif

<script>
    $('.select2').select2({
        theme: 'bootstrap-5',
        width: '100%'
    });
</script>

