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
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                           @if (Auth::user()->can('admin.seo.index'))
                                <a href="{{ route('admin.seo.index') }}" class="btn btn-primary btn-5">
                                    Back
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="page-body">
                <div class="container-xl">
                    <div class="card">
                        <div class="card-header">
                             <h3 class="card-title">{{ $data['title'] }}</h3>
                        </div>

                        <div class="card-body table-responsive p-4">
                            <form action="{{ route('admin.seo.update', $data['seo']->page_slug) }}" class="form-horizontal"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">{{__('Meta Description')}} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $data['seo']->title }}" id="inputName"
                                            placeholder="{{__('Meta Description')}}" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">{{__('Meta Keywords')}} <span class="text-danger">*</span></label>
                                        <input type="text" name="keywords" id="meta_keyword"
                                            value="{{ old('keywords', $data['seo']->keywords) }}" class="form-control"
                                            placeholder="{{__('Meta Keywords')}}" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">{{__('Meta Description')}} <span class="text-danger">*</span></label>
                                        <textarea class="form-control" cols="4" rows="4" name="description"
                                            id="description" placeholder="{{__('Meta Description')}}" required>{{ $data['seo']->description }}</textarea>
                                    </div>
                                </div>
                                @if(!empty($data['seo']->image))
                                <div class="mb-3">
                                    <div class="form-group">
                                        <img width="15%" class="px-1" src="{{ asset($data['seo']->image) }}" alt="image">
                                    </div>
                                </div>
                                @endif
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">{{__('Meta Image')}}
                                            <br><small class="text-info fw-bold"><strong>(Recommended Size 1200X630px)</strong></small>
                                        </label>
                                        <input type="file" data-default-file="{{ asset($data['seo']->image) }}"
                                            class="form-control dropify" name="image" id="image">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script type="text/javascript">
    $(document).on('click', '.view', function() {
        let cat_id = $(this).data('id');
        $.get('seo/'+cat_id+'/view', function(data) {
            console.log(data);
            $('#viewSeoModal').modal('show');
            $('#modal_body').html(data);
        });
    });
</script>
@endpush
