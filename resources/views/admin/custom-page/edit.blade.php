@extends('admin.layouts.master')

@section('cpage', 'active')
@section('title') {{ $data['title'] ?? '' }} @endsection

@push('style')
    <style>
        .hr-text {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            font-size: .825rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .04em;
            line-height: 1rem;
            color: #6c7a91;
            height: 1px;
        }

        .hr-text:before {
            content: "";
            margin-right: .5rem;
        }

        .hr-text:after,
        .hr-text:before {
            flex: 1 1 auto;
            height: 1px;
            background-color: #dce1e7;
        }

        .hr-text:after {
            content: "";
            margin-left: .5rem;
        }
    </style>
@endpush

@php
    $row = $data['row'];
@endphp

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">{{ __('Manage') }}</div>
                        <h2 class="page-title">{{ $data['title'] ?? '' }}</h2>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="{{ route('admin.cpage.index') }}" class="btn btn-primary btn-5">
                                <x-icons.back />
                                Back
                            </a>
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
                            <form action="{{ route('admin.cpage.update', $row->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="title"
                                                class="form-lable">{{ __('Page Title') }}</label>
                                            <input type="text" name="title" id="title" readonly class="form-control"
                                                required value="{{ $row->title }}"
                                                placeholder="{{ __('Page Title') }}">
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="status"
                                                class="form-lable">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="body" cols="30" rows="5" class="form-control" id="hugerte-textarea">{!! $row->body !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="hr-text col-lg-12">Meta Info</div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="meta_title" class="form-lable">Meta Title
                                                <span class="ml-2 text-info">
                                                    Meta Title Recommend</span>
                                            </label>
                                            <input type="text" name="meta_title" id="meta_title"
                                                placeholder="Meta Title" class="form-control"
                                                value="{{ $row->meta_title }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="meta_keywords"
                                                class="form-lable">Meta Keywords</label>
                                            <input type="text" name="meta_keywords" id="meta_keywords"
                                                placeholder="{{ __('Meta Keywords') }}" class="form-control"
                                                value="{{ $row->meta_keywords }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="meta_description"
                                                class="form-lable">{{ __('Meta Description') }}
                                                <span class="ml-2 text-info">(
                                                    Meta description should be between 150–160 characters</span>
                                            </label>
                                            <textarea name="meta_description" cols="30" rows="5" id="meta_description" class="form-control"
                                                placeholder="{{ __('Meta Description') }}">{{ $row->meta_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <button type="submit"
                                                class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // slug generator
        $(document).on('input', '#title', function() {
            let titleValue = event.target.value;
            let slug = titleValue.toLowerCase()
                .replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
                .replace(/^\s+|\s+$/gm, '')
                .replace(/\s+/g, '-');
            $('#slug').val(slug);
        })
    </script>
@endpush
