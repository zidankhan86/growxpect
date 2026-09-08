@extends('admin.layouts.master')

@section('admin-permissions', 'active')
@section('title') Admin| permissions Update @endsection

@push('style')
@endpush

@section('content')
    <div class="content-wrapper">
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">{{ __('Admin permissions create') }}
                                    <span class="float-right">
                                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-primary btn-gradient"> 
                                        <i class="fa fa-angle-left"></i>
                                        back
                                    </a>
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">

                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input value="{{ $permission->name }}"
                                            type="text" class="form-control" name="name"
                                            placeholder="Name" required>

                                        @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="group_name" class="form-label">Group Name</label>
                                        <input value="{{ $permission->group_name }}"
                                            type="text" class="form-control"
                                            name="group_name" placeholder="Group Name" required>

                                        @if ($errors->has('group_name'))
                                            <span class="text-danger text-left">{{ $errors->first('group_name') }}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('script')
@endpush
