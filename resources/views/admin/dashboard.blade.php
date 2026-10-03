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

                    <!-- Strategy Call Bookings Card -->
                    <div class="col-sm-6 col-lg-3">
                        <a href="{{ route('admin.bookings.index') }}" class="text-decoration-none">
                            <div class="card stat-card text-white" style="background:#0284c7;">
                                <div class="card-body d-flex align-items-center gap-3">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                                    </div>
                                    <div>
                                        <div class="label">Total Strategy Calls</div>
                                        <div class="value">{{ $totalBookings ?? 0 }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Pending Calls Card -->
                    <div class="col-sm-6 col-lg-3">
                        <a href="{{ route('admin.bookings.index', ['status' => 'pending']) }}" class="text-decoration-none">
                            <div class="card stat-card text-white" style="background:#eab308;">
                                <div class="card-body d-flex align-items-center gap-3">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    </div>
                                    <div>
                                        <div class="label">Pending Strategy Calls</div>
                                        <div class="value">{{ $pendingBookings ?? 0 }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Registered Users Card -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card stat-card text-white" style="background:#10b981;">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                                </div>
                                <div>
                                    <div class="label">Registered Users</div>
                                    <div class="value">{{ $totalUsers ?? 0 }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Completed Calls Card -->
                    <div class="col-sm-6 col-lg-3">
                        <a href="{{ route('admin.bookings.index', ['status' => 'completed']) }}" class="text-decoration-none">
                            <div class="card stat-card text-white" style="background:#8b5cf6;">
                                <div class="card-body d-flex align-items-center gap-3">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                    </div>
                                    <div>
                                        <div class="label">Completed Calls</div>
                                        <div class="value">{{ \App\Models\Booking::where('status', 'completed')->count() }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- Recent Strategy Call Bookings Widget -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title mb-0">
                            ⚡ Recent Strategy Call Appointments
                        </h3>
                        <a href="{{ route('admin.bookings.index') }}" class="btn btn-sm btn-outline-primary">
                            View All Bookings &rarr;
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table table-hover">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Email & Phone</th>
                                    <th>Scheduled Date & Time</th>
                                    <th>Revenue</th>
                                    <th>Focus Service</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentBookings ?? [] as $recent)
                                    <tr>
                                        <td class="font-weight-bold text-dark">{{ $recent->name }}</td>
                                        <td>
                                            <div><a href="mailto:{{ $recent->email }}" class="text-muted small text-decoration-none">{{ $recent->email }}</a></div>
                                            @if($recent->phone)<div class="small text-dark">{{ $recent->phone }}</div>@endif
                                        </td>
                                        <td>
                                            <div class="font-weight-bold text-primary">{{ $recent->booking_date }}</div>
                                            <div class="small text-muted">⏰ {{ $recent->booking_time }} @if($recent->timezone)<span class="badge bg-light text-dark border ms-1">{{ $recent->timezone }}</span>@endif</div>
                                             @if($recent->bangladesh_time)
                                                 <div class="font-weight-bold text-danger mt-1" style="font-size: 13px; color: #dc3545 !important;">Bangladesh Time: {{ $recent->bangladesh_time }}</div>
                                             @endif
                                        </td>
                                        <td>
                                            @if($recent->monthly_revenue)
                                                <span class="badge bg-green-lt">{{ $recent->monthly_revenue }}</span>
                                            @else
                                                <span class="text-muted small">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-blue-lt">{{ $recent->service_interested ?? 'General Strategy' }}</span>
                                        </td>
                                        <td>
                                            @if($recent->status === 'pending')
                                                <span class="badge bg-warning text-dark">Pending</span>
                                            @elseif($recent->status === 'confirmed')
                                                <span class="badge bg-primary">Confirmed</span>
                                            @elseif($recent->status === 'completed')
                                                <span class="badge bg-success">Completed</span>
                                            @else
                                                <span class="badge bg-secondary">Cancelled</span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            @if($recent->status !== 'completed')
                                                <form action="{{ route('admin.bookings.complete', $recent->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success" title="Mark call completed">
                                                        Completed
                                                    </button>
                                                </form>
                                            @endif
                                            <a href="{{ route('admin.bookings.index') }}" class="btn btn-sm btn-outline-secondary">Manage</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4 text-muted">No appointments booked yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
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
