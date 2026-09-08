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
                                        {{ $title ?? '' }}
                                    </h3>
                                    <a href="{{ route('admin.user.create') }}" class="btn btn-md btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Add New
                                    </a>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table id="dataTables" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SN</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th width="15%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($users as $key=> $row)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td><a href="mailto:{{ $row->email }}">{{ $row->email }}</a></td>
                                                    <td>
                                                        @foreach ($roles as $role)
                                                            {{ $row->hasRole($role->name) ? ucfirst($role->name) : '' }}
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @if ($row->status == 1)
                                                            <span
                                                                class="text-success">Active</span>
                                                        @else
                                                            <span
                                                                class="text-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-icon px-2" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Actions
                                                                <x-icons.action />
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                @if (Auth::user()->can('admin.user.password.edit'))
                                                                    <a href="{{ route('admin.user.password.edit', $row->id) }}"
                                                                        class="dropdown-item"> <i data-lucide="lock"></i>
                                                                        Change Password</a>
                                                                @endif

                                                                @if (Auth::user()->can('admin.user.edit'))
                                                                    <a href="{{ route('admin.user.edit', $row->id) }}"
                                                                        class="dropdown-item"><i class="fa fa-edit"></i>
                                                                        Edit</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @empty
                                                <td colspan="4">User not found</td>
                                            @endforelse
                                        </tbody>
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
