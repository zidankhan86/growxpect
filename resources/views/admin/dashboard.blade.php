@extends('admin.layouts.master')

@section('dashboard', 'active')

@push('style')
    <style>
        .stat-card {
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .stat-card .icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 12px;
            font-size: 1.5rem;
            transition: background 0.3s ease;
        }

        .stat-card:hover .icon {
            background: rgba(255, 255, 255, 0.3);
        }

        .stat-card .label {
            font-size: 0.8rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            opacity: .85;
        }

        .stat-card .value {
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1;
        }
    </style>
@endpush

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <h2 class="page-title">Overview</h2>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">

                <!-- Stat Cards -->
                <div class="row row-cards mb-4">

                    <!-- Total Request -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card stat-card text-white" style="background:#007bff;">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="icon">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                                </div>
                                <div>
                                    <div class="label">Total Requests</div>
                                    <div class="value">10</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Users -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card stat-card text-white" style="background:#198754;">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                                </div>
                                <div>
                                    <div class="label">Users</div>
                                    <div class="value">50</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Visitors -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card stat-card text-white" style="background:#fd7e14;">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-icon lucide-book"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/></svg>
                                </div>
                                <div>
                                    <div class="label">Total Visitors</div>
                                    <div class="value">100</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Approve Request -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card stat-card text-white" style="background:#6f42c1;">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-icon lucide-wallet"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"/><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"/></svg>
                                </div>
                                <div>
                                    <div class="label">Approve Request</div>
                                    <div class="value">10</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Charts Row 1 -->
                <div class="row row-cards mb-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Visitors — Last 7 Days</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-revenue"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Request Breakdown</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-user-breakdown"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row 2 -->
                <div class="row row-cards">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">New Request — Last 7 Days</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-enrollments"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">New Registrations — Last 7 Days</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-registrations"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
   <script>
    // Static Data
    var days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    var revenue = [1200, 1800, 1500, 2200, 2000, 2500, 3000];
    var enrollments = [10, 15, 8, 20, 18, 25, 30];
    var newUsers = [5, 8, 6, 12, 10, 14, 18];
    var enrolled = 70;
    var notEnrolled = 30;

    // Revenue area chart
    new ApexCharts(document.querySelector("#chart-revenue"), {
        chart: {
            type: 'area',
            height: 260,
            toolbar: { show: false }
        },
        series: [{
            name: 'Revenue (V)',
            data: revenue
        }],
        xaxis: {
            categories: days
        },
        yaxis: {
            labels: {
                formatter: v => 'V' + v.toLocaleString()
            }
        },
        dataLabels: { enabled: false },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.5,
                opacityTo: 0.05
            }
        },
        colors: ['#6f42c1'],
        tooltip: {
            y: {
                formatter: v => 'V' + v.toLocaleString()
            }
        }
    }).render();

    // User breakdown donut chart
    new ApexCharts(document.querySelector("#chart-user-breakdown"), {
        chart: {
            type: 'donut',
            height: 260
        },
        series: [enrolled, notEnrolled],
        labels: ['Requested', 'Approved'],
        colors: ['#198754', '#dee2e6'],
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%'
                }
            }
        }
    }).render();

    // Enrollments bar chart
    new ApexCharts(document.querySelector("#chart-enrollments"), {
        chart: {
            type: 'bar',
            height: 240,
            toolbar: { show: false }
        },
        series: [{
            name: 'Enrollments',
            data: enrollments
        }],
        xaxis: {
            categories: days
        },
        colors: ['#198754'],
        plotOptions: {
            bar: {
                borderRadius: 4,
                columnWidth: '50%'
            }
        },
        dataLabels: { enabled: false }
    }).render();

    // Registrations bar chart
    new ApexCharts(document.querySelector("#chart-registrations"), {
        chart: {
            type: 'bar',
            height: 240,
            toolbar: { show: false }
        },
        series: [{
            name: 'Registrations',
            data: newUsers
        }],
        xaxis: {
            categories: days
        },
        colors: ['#007bff'],
        plotOptions: {
            bar: {
                borderRadius: 4,
                columnWidth: '50%'
            }
        },
        dataLabels: { enabled: false }
    }).render();
</script>
@endpush
