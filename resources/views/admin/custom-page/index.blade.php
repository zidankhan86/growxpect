@extends('admin.layouts.master')

@section('cpage', 'active')
@section('title') {{ $data['title'] ?? '' }} @endsection

@push('style')
@endpush

@php
    $rows = $data['rows'];
@endphp

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">Manage</div>
                        <h2 class="page-title">{{ $data['title'] ?? '' }}</h2>
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
                                        {{ $data['title'] ?? '' }}
                                    </h3>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table id="dataTables" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>{{ __('Page Name') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th style="width:15%;" class="text-center">
                                                    {{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rows as $key => $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $row->title }}</td>
                                                    <td>
                                                        @if ($row->is_active == 1)
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        @if (Auth::user()->can('admin.cpage.view'))
                                                            <a href="{{ route('admin.cpage.view', $row->id) }}"
                                                                class="btn btn-animate-icon">
                                                                <x-icons.view />
                                                        @endif

                                                        @if (Auth::user()->can('admin.cpage.edit'))
                                                            <a href="{{ route('admin.cpage.edit', $row->id) }}"
                                                                class="btn btn-animate-icon text-primary">
                                                                <x-icons.edit />
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
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
