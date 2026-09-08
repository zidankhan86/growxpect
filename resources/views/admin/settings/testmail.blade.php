@extends('admin.layouts.master')
@section('settings_menu', 'menu-open')
@section('smtp', 'active')
@section('title') {{ $title ?? 'Text Mail' }} @endsection

@section('content')
    <div class="page-wrapper">


        <div class="content">
            <div class="page-body">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $title ?? 'Text Mail' }}</h3>
                                </div>

                                <div class="card-body py-5 mt-5 mb-5">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-7">
                                            <form action="{{ route('admin.settings.test.mail') }}" method="post">
                                                @csrf
                                                <label for="" class="form-label">Email Address</label>
                                                <div class="input-group">
                                                    <input name="test_email" type="email"
                                                        class="form-control mr-2 @error('test_email') is-invalid @enderror"
                                                        id="test_email"
                                                        placeholder="{{ __('messages.placeholder.enter_email') }}" required>
                                                    @error('test_email')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                    @enderror
                                                    <button class="btn btn-success input-gorup-text">
                                                        <i class="far fa-paper-plane"></i>
                                                        {{ __('messages.common.send_mail') }}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- content -->
    </div>
@endsection

@push('script')
@endpush
