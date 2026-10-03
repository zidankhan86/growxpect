@extends('admin.layouts.master')

@section('bookings', 'active')

@section('title', 'Strategy Call Bookings')

@push('style')
<style>
    .booking-card {
        border-radius: 12px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .booking-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }
    .badge-pending { background: #fff3cd; color: #856404; border: 1px solid #ffeeba; }
    .badge-confirmed { background: #cce5ff; color: #004085; border: 1px solid #b8daff; }
    .badge-completed { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    .badge-cancelled { background: #e2e3e5; color: #383d41; border: 1px solid #d6d8db; }
    .table-responsive { overflow: visible !important; }
    .card { overflow: visible !important; }
    a.view-details-btn:hover { color: #206bc4 !important; text-decoration: underline !important; cursor: pointer; }
</style>
@endpush

@section('content')
<div class="page-wrapper">
    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                        Strategy Call Bookings
                    </h2>
                    <div class="text-muted mt-1">Manage 1-on-1 strategy session appointments & slot availability (Calendly System).</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Body -->
    <div class="page-body">
        <div class="container-xl">

            <!-- Alert Messages -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Statistics Overview Cards -->
            <div class="row row-cards mb-4">
                <div class="col-6 col-md-3">
                    <div class="card booking-card">
                        <div class="card-body p-3 text-center">
                            <div class="text-muted small uppercase font-weight-bold">Total Bookings</div>
                            <div class="h1 mb-0 font-weight-bold text-dark">{{ $stats['total'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card booking-card border-warning">
                        <div class="card-body p-3 text-center">
                            <div class="text-warning small uppercase font-weight-bold">Pending Calls</div>
                            <div class="h1 mb-0 font-weight-bold text-warning">{{ $stats['pending'] }}</div>
                            <div class="small text-muted">Slot Locked 🔒</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card booking-card border-primary">
                        <div class="card-body p-3 text-center">
                            <div class="text-primary small uppercase font-weight-bold">Confirmed</div>
                            <div class="h1 mb-0 font-weight-bold text-primary">{{ $stats['confirmed'] }}</div>
                            <div class="small text-muted">Slot Locked 🔒</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card booking-card border-success">
                        <div class="card-body p-3 text-center">
                            <div class="text-success small uppercase font-weight-bold">Completed</div>
                            <div class="h1 mb-0 font-weight-bold text-success">{{ $stats['completed'] }}</div>
                            <div class="small text-muted">Slot Unlocked ✅</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters & Search Card -->
            <div class="card mb-4">
                <div class="card-body p-3">
                    <form method="GET" action="{{ route('admin.bookings.index') }}" class="row g-2 align-items-center">
                        <!-- Status Filter Tabs -->
                        <div class="col-12 col-md-7">
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('admin.bookings.index', ['status' => 'all', 'search' => $searchQuery]) }}" class="btn btn-outline-secondary {{ $statusFilter === 'all' ? 'active' : '' }}">All ({{ $stats['total'] }})</a>
                                <a href="{{ route('admin.bookings.index', ['status' => 'pending', 'search' => $searchQuery]) }}" class="btn btn-outline-warning {{ $statusFilter === 'pending' ? 'active' : '' }}">Pending ({{ $stats['pending'] }})</a>
                                <a href="{{ route('admin.bookings.index', ['status' => 'confirmed', 'search' => $searchQuery]) }}" class="btn btn-outline-primary {{ $statusFilter === 'confirmed' ? 'active' : '' }}">Confirmed ({{ $stats['confirmed'] }})</a>
                                <a href="{{ route('admin.bookings.index', ['status' => 'completed', 'search' => $searchQuery]) }}" class="btn btn-outline-success {{ $statusFilter === 'completed' ? 'active' : '' }}">Completed ({{ $stats['completed'] }})</a>
                                <a href="{{ route('admin.bookings.index', ['status' => 'cancelled', 'search' => $searchQuery]) }}" class="btn btn-outline-dark {{ $statusFilter === 'cancelled' ? 'active' : '' }}">Cancelled ({{ $stats['cancelled'] }})</a>
                            </div>
                        </div>

                        <!-- Search Bar -->
                        <div class="col-8 col-md-4">
                            <input type="text" name="search" value="{{ $searchQuery }}" placeholder="Search name, email, phone..." class="form-control" />
                        </div>

                        <!-- Submit / Reset -->
                        <div class="col-4 col-md-1 d-flex gap-1">
                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Main Bookings Table Card -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Strategy Call Appointments</h3>
                    <span class="text-muted small">Showing {{ $bookings->firstItem() ?? 0 }} - {{ $bookings->lastItem() ?? 0 }} of {{ $bookings->total() }}</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Client Details</th>
                                <th>Contact</th>
                                <th>Scheduled Date & Time</th>
                                <th>Business & Revenue</th>
                                <th>Focus Service</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td class="font-weight-bold text-muted">#{{ $booking->id }}</td>
                                    <td>
                                        <a href="javascript:void(0)" class="font-weight-bold text-dark text-decoration-none view-details-btn cursor-pointer" data-booking="{{ json_encode($booking) }}" data-bs-toggle="modal" data-bs-target="#viewBookingModal" title="Click to view details">
                                            {{ $booking->name }}
                                        </a>
                                        <div class="text-muted small">
                                            <a href="mailto:{{ $booking->email }}" class="text-decoration-none text-muted">{{ $booking->email }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        @if($booking->phone)
                                            <div class="small font-weight-semibold text-dark">
                                                <a href="tel:{{ $booking->phone }}" class="text-decoration-none">{{ $booking->phone }}</a>
                                            </div>
                                        @else
                                            <span class="text-muted small">N/A</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="font-weight-bold text-primary">{{ $booking->booking_date }}</div>
                                        <div class="small text-muted">
                                            ⏰ {{ $booking->booking_time }}
                                            @if($booking->timezone)
                                                <span class="badge bg-light text-dark border ms-1">{{ $booking->timezone }}</span>
                                            @endif
                                        </div>
                                        @if($booking->bangladesh_time)
                                            <div class="font-weight-bold text-danger mt-1" style="font-size: 13px; color: #dc3545 !important;">
                                                Bangladesh Time: {{ $booking->bangladesh_time }}
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($booking->company_name)
                                            <div class="small font-weight-bold text-dark">{{ $booking->company_name }}</div>
                                        @endif
                                        @if($booking->monthly_revenue)
                                            <span class="badge bg-green-lt">{{ $booking->monthly_revenue }}</span>
                                        @else
                                            <span class="text-muted small">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-blue-lt text-wrap max-w-xs">{{ $booking->service_interested ?? 'General Strategy' }}</span>
                                    </td>
                                    <td>
                                        @if($booking->status === 'pending')
                                            <span class="badge badge-pending px-2.5 py-1">⏳ Pending (Locked)</span>
                                        @elseif($booking->status === 'confirmed')
                                            <span class="badge badge-confirmed px-2.5 py-1">📅 Confirmed (Locked)</span>
                                        @elseif($booking->status === 'completed')
                                            <span class="badge badge-completed px-2.5 py-1">✅ Completed (Unlocked)</span>
                                        @else
                                            <span class="badge badge-cancelled px-2.5 py-1">❌ Cancelled (Unlocked)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center gap-1">
                                            <!-- Quick Complete Button -->
                                            @if($booking->status !== 'completed')
                                                <form action="{{ route('admin.bookings.complete', $booking->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success" title="Mark call as completed & release time slot for others">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                                        Completed
                                                    </button>
                                                </form>
                                            @endif

                                            <!-- View Details Button -->
                                            <button type="button" class="btn btn-sm btn-outline-info view-details-btn" data-booking="{{ json_encode($booking) }}" data-bs-toggle="modal" data-bs-target="#viewBookingModal" title="View Full Client Details">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.425 4.747 -6.505 7 -10 7c-3.495 0 -7.575 -2.253 -10 -7c2.425 -4.747 6.505 -7 10 -7c3.495 0 7.575 2.253 10 7" /></svg>
                                                View
                                            </button>

                                            <!-- Status Dropdown (Dropup so menu opens upwards without scroll) -->
                                            <div class="dropdown dropup">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static">
                                                    Status
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="status" value="pending">
                                                            <button type="submit" class="dropdown-item">Mark as Pending</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="status" value="confirmed">
                                                            <button type="submit" class="dropdown-item">Mark as Confirmed</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="status" value="completed">
                                                            <button type="submit" class="dropdown-item text-success font-weight-bold">Mark as Completed (Free Slot)</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="status" value="cancelled">
                                                            <button type="submit" class="dropdown-item text-danger">Mark as Cancelled (Free Slot)</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Delete Button -->
                                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger delete-confirm" title="Delete record">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-5 text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-2 text-muted" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9" /><line x1="12" y1="8" x2="12" y2="12" /><line x1="12" y1="16" x2="12.01" y2="16" /></svg>
                                        <div>No strategy call bookings found.</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($bookings->hasPages())
                    <div class="card-footer d-flex justify-content-end">
                        {{ $bookings->links() }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

<!-- Modal: View Booking Full Details -->
<div class="modal fade" id="viewBookingModal" tabindex="-1" aria-labelledby="viewBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="viewBookingModalLabel">
                    🚀 Strategy Call Lead Details #<span id="modal-booking-id"></span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-3">

                    <!-- Customer Profile Section -->
                    <div class="col-md-6 border-end">
                        <h6 class="text-uppercase text-muted font-weight-bold mb-3" style="font-size: 11px; letter-spacing: 0.5px;">Client Contact Information</h6>
                        
                        <div class="mb-2">
                            <label class="text-muted small d-block">Full Name:</label>
                            <span id="modal-client-name" class="font-weight-bold text-dark fs-5"></span>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Work Email:</label>
                            <a id="modal-client-email" href="" class="font-weight-semibold text-primary"></a>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Phone / WhatsApp:</label>
                            <span id="modal-client-phone" class="font-weight-semibold text-dark"></span>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Company Name:</label>
                            <span id="modal-client-company" class="font-weight-semibold text-dark"></span>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Website URL:</label>
                            <a id="modal-client-website" href="" target="_blank" class="text-truncate d-inline-block max-w-full text-decoration-none"></a>
                        </div>
                    </div>

                    <!-- Appointment & Business Details -->
                    <div class="col-md-6">
                        <h6 class="text-uppercase text-muted font-weight-bold mb-3" style="font-size: 11px; letter-spacing: 0.5px;">Scheduled Slot & Focus</h6>

                        <div class="p-3 bg-light rounded-3 border mb-3">
                            <div class="small text-muted mb-1 font-weight-bold">Client Scheduled Time:</div>
                            <div class="h5 mb-2 text-primary font-weight-bold" id="modal-slot-full"></div>
                            <div class="pt-2 border-top">
                                <div class="small text-muted mb-1 font-weight-bold">Bangladesh Local Time (Asia/Dhaka):</div>
                                <div class="h5 mb-0 text-danger font-weight-bold" id="modal-slot-bd" style="color: #dc3545 !important;"></div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Monthly Revenue Range:</label>
                            <span id="modal-client-revenue" class="badge bg-green-lt fs-6"></span>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Primary Growth Focus:</label>
                            <span id="modal-client-service" class="badge bg-blue-lt fs-6"></span>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Current Status:</label>
                            <span id="modal-client-status"></span>
                        </div>

                        <div class="mb-2">
                            <label class="text-muted small d-block">Submission Time / IP:</label>
                            <span id="modal-client-submitted" class="small text-muted"></span>
                        </div>
                    </div>

                    <!-- Client Message/Notes -->
                    <div class="col-12 mt-3 pt-3 border-top">
                        <h6 class="text-uppercase text-muted font-weight-bold mb-2" style="font-size: 11px; letter-spacing: 0.5px;">Client Notes / Growth Challenge</h6>
                        <div class="p-3 bg-light rounded border text-secondary small" id="modal-client-message" style="white-space: pre-line;"></div>
                    </div>

                </div>
            </div>
            <div class="modal-footer bg-light d-flex justify-content-between">
                <a id="modal-email-btn" href="" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>
                    Send Email to Client
                </a>

                <div class="d-flex gap-2">
                    <form id="modal-complete-form" action="" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            Mark Completed & Release Slot
                        </button>
                    </form>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewModal = document.getElementById('viewBookingModal');
        if (!viewModal) return;

        viewModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            if (!button) return;

            const bookingData = JSON.parse(button.getAttribute('data-booking'));

            document.getElementById('modal-booking-id').innerText = bookingData.id;
            document.getElementById('modal-client-name').innerText = bookingData.name || 'N/A';
            
            const emailElem = document.getElementById('modal-client-email');
            emailElem.innerText = bookingData.email || 'N/A';
            emailElem.href = 'mailto:' + (bookingData.email || '');

            const emailBtn = document.getElementById('modal-email-btn');
            emailBtn.href = 'mailto:' + (bookingData.email || '') + '?subject=Re: Your Growth Strategy Call with Growxpect';

            document.getElementById('modal-client-phone').innerText = bookingData.phone || 'N/A';
            document.getElementById('modal-client-company').innerText = bookingData.company_name || 'N/A';
            
            const websiteElem = document.getElementById('modal-client-website');
            if (bookingData.website_url) {
                websiteElem.innerText = bookingData.website_url;
                websiteElem.href = bookingData.website_url.startsWith('http') ? bookingData.website_url : 'https://' + bookingData.website_url;
            } else {
                websiteElem.innerText = 'N/A';
                websiteElem.href = '#';
            }

            document.getElementById('modal-slot-full').innerText = (bookingData.booking_date || '') + ' at ' + (bookingData.booking_time || '') + (bookingData.timezone ? ' (' + bookingData.timezone + ')' : '');
            document.getElementById('modal-slot-bd').innerText = bookingData.bangladesh_time ? (bookingData.bangladesh_time + ' (BST)') : 'N/A';
            document.getElementById('modal-client-revenue').innerText = bookingData.monthly_revenue || 'N/A';
            document.getElementById('modal-client-service').innerText = bookingData.service_interested || 'General Strategy';
            document.getElementById('modal-client-submitted').innerText = (bookingData.created_at ? new Date(bookingData.created_at).toLocaleString() : '') + ' (IP: ' + (bookingData.ip_address || 'N/A') + ')';
            
            document.getElementById('modal-client-message').innerText = bookingData.message || 'No additional notes provided by client.';

            // Status Badge
            const statusElem = document.getElementById('modal-client-status');
            let badgeHtml = '';
            if (bookingData.status === 'pending') {
                badgeHtml = '<span class="badge badge-pending px-2.5 py-1">⏳ Pending (Slot Locked)</span>';
            } else if (bookingData.status === 'confirmed') {
                badgeHtml = '<span class="badge badge-confirmed px-2.5 py-1">📅 Confirmed (Slot Locked)</span>';
            } else if (bookingData.status === 'completed') {
                badgeHtml = '<span class="badge badge-completed px-2.5 py-1">✅ Completed (Slot Unlocked)</span>';
            } else {
                badgeHtml = '<span class="badge badge-cancelled px-2.5 py-1">❌ Cancelled (Slot Unlocked)</span>';
            }
            statusElem.innerHTML = badgeHtml;

            // Complete Form Action
            const completeForm = document.getElementById('modal-complete-form');
            completeForm.action = '/admin/bookings/' + bookingData.id + '/complete';
        });
    });
</script>
@endpush
