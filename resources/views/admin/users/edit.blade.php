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
                            <h3 class="card-title">Admin Information</h3>
                        </div>

                        <div class="card-body table-responsive p-4">
                            <form method="post" class="row" action="{{ route('admin.user.update', $user->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}" />
                                <div class="mb-3 col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="form-lable">User Image
                                            <small class="text-info fw-bold"><strong>(Recommended Size
                                                    150x150px)</strong></small>
                                        </label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <img src="{{ getProfile($user->image) }}" alt="{{ $user->name }}"
                                            class="custom-img mt-2" width="120" height="120">
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <input value="{{ $user->name }}" type="text" class="form-control" name="name"
                                        placeholder="Enter your name" required>
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input value="{{ $user->email }}" type="email" class="form-control" name="email"
                                        placeholder="Enter your email" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="role" class="form-label">Role <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control form-select" name="roles" required>
                                        <option value="">Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}"
                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                {{ ucfirst($role->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role'))
                                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="status" class="form-label">Status <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control form-select" name="status" id="status" required>
                                        <option value="1" {{ $user->status == '1' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="0" {{ $user->status == '0' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger text-left">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-success">Update</button>
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
@endpush
