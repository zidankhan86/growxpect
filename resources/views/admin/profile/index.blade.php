@extends('admin.layouts.master')
@section('title')
    {{ $data['title'] ?? 'Profile' }}
@endsection
@php
    $user = Auth::user();
@endphp
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 card card-info card-outline mt-3">
                        <div class="card-body box-profile position-relative">
                            <a href="{{ route('admin.profile.edit') }}" class="position-absolute" style="right: 0; top: 5px;"
                                title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </a>
                            <div class="text-center">
                                <img class="img-fluid rounded" width="120" src="{{ getProfile($user->image) }}"
                                    alt="{{ $user->name }}">
                            </div>
                            <ul class="list-group mb-3 mt-4">
                                <li class="list-group-item border-top-0">
                                    <b>Name</b> <a class="float-right">{{ $user->name }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Role</b> <a class="float-right">
                                        @foreach ($roles as $role)
                                            {{ $user->hasRole($role->name) ? ucfirst($role->name) : '' }}
                                        @endforeach
                                    </a>
                                </li>
                                @if (!empty($user->phone))
                                    <li class="list-group-item">
                                        <b>Phone</b> <a class="float-right">+{{ $user->phone }}</a>
                                    </li>
                                @endif
                                @if (!empty($user->created_at))
                                    <li class="list-group-item">
                                        <b>Join At</b> <a
                                            class="float-right">{{ date('d M, Y', strtotime($user->created_at)) }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
