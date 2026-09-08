@extends('admin.layouts.master')

@section('admin_menu', 'show')
@section('admin-user', 'active')
@section('title') {{ $title ?? '' }} @endsection

@push('style')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">Manage</div>
                        <h2 class="page-title">{{ $title ?? '' }}</h2>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            @if (Auth::user()->can('admin.user.index'))
                                <a href="{{ route('admin.user.index') }}" class="btn btn-primary btn-5">
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
                            <h3 class="card-title">Admin Password</h3>
                        </div>

                        <div class="card-body table-responsive p-4">
                            <form method="post" class="row"
                                action="{{ route('admin.user.password.update', $user->id) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}" />
                                <div class="form-group col-md-6 mb-3">
                                    <label for="" class="form-label">{{ __('messages.user_profile.new_password') }}
                                        <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-flat">
                                        <input type="password" name="password" id="password-field" value=""
                                            class="form-control shadow-none" required>
                                        <span class="input-group-text px-3">
                                            <a href="javascript:void(0)"
                                                class="link-secondary fa fa-fw fa-eye field-icon toggle-password"
                                                toggle="#password-field">
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for=""
                                        class="form-label">{{ __('messages.user_profile.confirm_password') }} <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group input-group-flat">
                                        <input type="password" name="confirm_password" id="confirm_password" value=""
                                            class="form-control shadow-none" required>
                                        <span class="input-group-text px-3">
                                            <a href="javascript:void(0)"
                                                class="link-secondary fa fa-fw fa-eye field-icon confirm-toggle-password"
                                                toggle="#confirm_password">
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-success">{{ __('messages.common.update') }}</button>
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
        $(document).ready(function() {

            // password show hide
            $(".toggle-password").click(function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

            $(".confirm-toggle-password").click(function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

        })
    </script>
@endpush
