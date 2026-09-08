@extends('admin.layouts.master')

@section('cpage', 'active')
@section('title') {{ $data['title'] ?? '' }} @endsection

@php
    $row = $data['row'];
@endphp

@push('style')
    <style>
        td {
            width: 0;
        }
    </style>
@endpush

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

                        <div class="card-body p-0">
                            <table class="table">
                                <tr>
                                    <td style="width:15%;">Page Name :</td>
                                    <td>{{ $row->title }}</td>
                                </tr>
                                <tr>
                                    <td>Page Slug :</td>
                                    <td>{{ $row->url_slug }}</td>
                                </tr>
                                <tr>
                                    <td>Publihed Status :</td>
                                    <td>
                                        @if ($row->is_active == 1)
                                            <span class="text-success">Active</span>
                                        @else
                                            <span class="text-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <br>
                                        {!! $row->body !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
