@extends('admin.layouts.master')

@section('seo', 'active')
@section('title') {{ $data['title'] ?? '' }} @endsection

@push('style')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">Manage</div>
                        <h2 class="page-title">{{ $data['title'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="page-body">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header  d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">
                                        {{ $data['title'] ?? '' }}
                                    </h3>
                                </div>

                                <div class="card-body p-0">
                                    <table id="dataTables" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SN</th>
                                                <th>{{ __('Page Title') }}</th>
                                                <th>{{ __('Meta Title') }}</th>
                                                <th>{{ __('Meta Description') }}</th>
                                                <th width="15%">{{ __('Meta Image') }}</th>
                                                <th width="15%">{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['rows'] as $key => $row)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $row->page_slug }}
                                                    </td>
                                                    <td>{{ Str::limit($row->title, 25) }}</td>
                                                    <td>
                                                        {{ Str::limit($row->description, 35) }}
                                                    </td>
                                                    <td>
                                                        <img width="20%" src="{{ getPhoto($row->image) }}"
                                                            alt="image">
                                                    </td>
                                                    <td>
                                                        @if (Auth::user()->can('admin.seo.view'))
                                                            <a href="javascript:void(0)" class="view btn btn-animate-icon"
                                                                data-id="{{ $row->id }}">
                                                                <x-icons.view />
                                                            </a>
                                                        @endif
                                                        @if (Auth::user()->can('admin.seo.edit'))
                                                            <a href="{{ route('admin.seo.edit', $row->id) }}"
                                                                class="btn btn-animate-icon text-primary">
                                                                <x-icons.edit />
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- View modal --}}
        <div class="modal fade" id="viewSeoModal" tabindex="-1" aria-labelledby="viewSeoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewSeoModalLabel">{{ __('messages.seo.view_seo_info') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="modal_body"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script type="text/javascript">
            $(document).on('click', '.view', function() {
                let cat_id = $(this).data('id');
                $.get('seo/' + cat_id + '/view', function(data) {
                    console.log(data);
                    $('#viewSeoModal').modal('show');
                    $('#modal_body').html(data);
                });
            });
        </script>
    @endpush
