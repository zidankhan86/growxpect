@extends('admin.layouts.master')

@section('front_users', 'active')
@section('title') {{ $title ?? 'Users' }} @endsection

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">Manage</div>
                        <h2 class="page-title">{{ $title ?? 'Users' }}</h2>
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
                                <div class="card-header">
                                    <h3 class="card-title">All Users</h3>
                                    <div class="card-options">
                                        <span class="badge bg-blue-lt fs-6">Total: {{ $users->count() }}</span>
                                    </div>
                                </div>
                                <div class="card-body p-0 table-responsive">
                                    <table id="dataTables" class="table table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th width="5%">SN</th>
                                                <th width="12%">User Code</th>
                                                <th width="25%">Name</th>
                                                <th width="18%">Phone</th>
                                                <th width="30%">Email</th>
                                                <th width="10%">Joined</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($users as $key => $user)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <span class="badge bg-secondary-lt text-secondary fw-bold">
                                                            #{{ $user->user_code }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        @if ($user && $user->name)
                                                            <a href="#" class="text-primary">{{ $user->name }}</a>
                                                        @else
                                                           <span  class="text-danger">Name not set</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($user->phone)
                                                            <a href="tel:{{ $user->phone }}"
                                                                class="text-blue-600 hover:underline">
                                                                {{ $user->phone }}
                                                            </a>
                                                        @else
                                                            —
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($user->email)
                                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                        @else
                                                            —
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->created_at ? $user->created_at->format('d M Y') : '—' }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted py-4">No users found.
                                                    </td>
                                                </tr>
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
