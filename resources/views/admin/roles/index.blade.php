@extends('admin.layouts.master')

@section('admin_menu', 'menu-open')
@section('admin-roles', 'active')
@section('title') Admin| roles @endsection

@push('style')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">Manage</div>
                        <h2 class="page-title">{{ $title ?? 'Roles' }}</h2>
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
                                    <h3 class="m-0 card-title">{{ __('Admin roles') }}
                                    </h3>
                                    <span class="float-right">
                                        <a href="{{ route('admin.user.index') }}"
                                            class="btn btn-primary btn-gradient">{{ __('messages.roles.all_admins') }}</a>
                                        <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-gradient">+
                                            {{ __('messages.roles.create_role') }}</a>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>{{ __('messages.common.name') }}</th>
                                            <th>{{ __('messages.roles.permission') }}</th>
                                            <th width="10%" colspan="3" class="text-center">
                                                {{ __('messages.common.action') }}</th>
                                        </tr>
                                        @foreach ($roles as $key => $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <div>
                                                        @foreach ($role->permissions as $item)
                                                            <span
                                                                class="badge bg-success text-light permission m-1">{{ __($item->name) }}</span>
                                                        @endforeach
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    {{-- <a class="btn btn-info btn-xs"
                                                    href="{{ route('admin.roles.show', $role->id) }}">Show</a> --}}
                                                    <a class="btn btn-animate-icon text-primary"
                                                        href="{{ route('admin.roles.edit', $role->id) }}">
                                                        <x-icons.edit />

                                                    </a>

                                                    {{-- <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST"
                                                    class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                                        class="btn btn-danger btn-xs">Delete</button>
                                                </form> --}}

                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
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
