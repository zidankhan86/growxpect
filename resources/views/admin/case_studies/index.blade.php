@extends('admin.layouts.master')

@section('case_studies', 'active')
@section('title', 'Manage Case Studies')

@section('content')
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">CMS Management</div>
                    <h2 class="page-title">Case Studies & Client Results</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCaseStudyModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y1="12"></line></svg>
                        Add New Case Study
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    <strong>Error!</strong> Please check the form errors below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h3 class="card-title fw-bold text-dark m-0">All Case Studies ({{ count($caseStudies) }})</h3>
                    <span class="text-muted small">Displayed dynamically on /case-studies and Home page</span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-hover card-table">
                            <thead class="table-light">
                                <tr>
                                    <th width="40">#</th>
                                    <th>Title & Client</th>
                                    <th>Category</th>
                                    <th>Metrics</th>
                                    <th>Featured</th>
                                    <th>Sort</th>
                                    <th width="150" class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($caseStudies as $index => $cs)
                                    <tr>
                                        <td class="text-muted">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="fw-bold text-dark">{{ $cs->title }}</div>
                                            <div class="text-muted small">
                                                <strong>Headline:</strong> {{ $cs->headline }}
                                                @if($cs->client_name) &bull; <strong>Client:</strong> {{ $cs->client_name }} @endif
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-cyan-lt text-cyan font-weight-bold px-2 py-1">
                                                {{ $cs->category_label }}
                                            </span>
                                            <div class="text-muted" style="font-size:10px;">{{ $cs->category }}</div>
                                        </td>
                                        <td>
                                            <div class="small">
                                                <span class="badge bg-success-lt text-success">{{ $cs->metric_1_val }}</span> {{ $cs->metric_1_label }}
                                            </div>
                                            @if($cs->metric_2_val)
                                                <div class="small mt-0.5">
                                                    <span class="badge bg-purple-lt text-purple">{{ $cs->metric_2_val }}</span> {{ $cs->metric_2_label }}
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($cs->is_featured)
                                                <span class="badge bg-success text-white">Featured</span>
                                            @else
                                                <span class="badge bg-secondary text-white">Standard</span>
                                            @endif
                                        </td>
                                        <td>{{ $cs->sort_order }}</td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm btn-outline-primary me-1 edit-cs-btn"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editCaseStudyModal"
                                                    data-id="{{ $cs->id }}"
                                                    data-title="{{ e($cs->title) }}"
                                                    data-slug="{{ $cs->slug }}"
                                                    data-category="{{ $cs->category }}"
                                                    data-category_label="{{ e($cs->category_label) }}"
                                                    data-badge_text="{{ e($cs->badge_text) }}"
                                                    data-headline="{{ e($cs->headline) }}"
                                                    data-description="{{ e($cs->description) }}"
                                                    data-metric_1_val="{{ e($cs->metric_1_val) }}"
                                                    data-metric_1_label="{{ e($cs->metric_1_label) }}"
                                                    data-metric_2_val="{{ e($cs->metric_2_val) }}"
                                                    data-metric_2_label="{{ e($cs->metric_2_label) }}"
                                                    data-metric_3_val="{{ e($cs->metric_3_val) }}"
                                                    data-metric_3_label="{{ e($cs->metric_3_label) }}"
                                                    data-tech_stack="{{ e($cs->tech_stack) }}"
                                                    data-location="{{ e($cs->location) }}"
                                                    data-duration="{{ e($cs->duration) }}"
                                                    data-full_content="{{ e($cs->full_content) }}"
                                                    data-client_name="{{ e($cs->client_name) }}"
                                                    data-challenge="{{ e($cs->challenge) }}"
                                                    data-solution="{{ e($cs->solution) }}"
                                                    data-testimonial_quote="{{ e($cs->testimonial_quote) }}"
                                                    data-testimonial_author="{{ e($cs->testimonial_author) }}"
                                                    data-is_featured="{{ $cs->is_featured }}"
                                                    data-sort_order="{{ $cs->sort_order }}">
                                                Edit
                                            </button>

                                            <form action="{{ route('admin.case-studies.destroy', $cs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this case study?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4 text-muted">
                                            No case studies added yet. Click "Add New Case Study" to post one.
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

<!-- ADD CASE STUDY MODAL -->
<div class="modal fade" id="addCaseStudyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.case-studies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title text-white">Add New Case Study</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label required">Case Study Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Scaling Apex MedSpa to $1.2M ARR" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-select" required>
                                <option value="insurance">Insurance</option>
                                <option value="realestate">Real Estate</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="homeservices">Home Services</option>
                                <option value="professionalservices">Professional Services</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label required">Headline / Client Brand</label>
                            <input type="text" name="headline" class="form-control" placeholder="e.g. Apex Aesthetics MedSpa" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Category Badge Label</label>
                            <input type="text" name="category_label" class="form-control" placeholder="e.g. Healthcare & MedSpa" value="Healthcare & MedSpa">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Card Badge Text</label>
                            <input type="text" name="badge_text" class="form-control" placeholder="e.g. Verified Case Study or 4.2x ROAS">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="client_name" class="form-control" placeholder="e.g. Apex Aesthetics Inc.">
                        </div>
                        <div class="col-12">
                            <label class="form-label required">Summary Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Brief summary of the case study results..." required></textarea>
                        </div>

                        <!-- Metrics -->
                        <div class="col-12"><hr class="my-2"><h6 class="fw-bold text-primary">Key Growth Metrics (Displayed in Cards)</h6></div>
                        <div class="col-md-4">
                            <label class="form-label">Metric 1 Value</label>
                            <input type="text" name="metric_1_val" class="form-control" placeholder="e.g. +340%">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Metric 1 Label</label>
                            <input type="text" name="metric_1_label" class="form-control" placeholder="e.g. Qualified Leads">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Metric 2 Value</label>
                            <input type="text" name="metric_2_val" class="form-control" placeholder="e.g. $1.2M">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Metric 2 Label</label>
                            <input type="text" name="metric_2_label" class="form-control" placeholder="e.g. New Annual Revenue">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Metric 3 Value</label>
                            <input type="text" name="metric_3_val" class="form-control" placeholder="e.g. 68%">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Metric 3 Label</label>
                            <input type="text" name="metric_3_label" class="form-control" placeholder="e.g. Lower Cost Per Booking">
                        </div>

                        <!-- Challenge & Solution -->
                        <div class="col-12"><hr class="my-2"><h6 class="fw-bold text-primary">Detailed Overview (For Expanded View)</h6></div>
                        <div class="col-md-6">
                            <label class="form-label">The Challenge</label>
                            <textarea name="challenge" class="form-control" rows="2" placeholder="What problem was the client facing?"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">The Solution</label>
                            <textarea name="solution" class="form-control" rows="2" placeholder="What growth system did Growxpect build?"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Testimonial Quote</label>
                            <textarea name="testimonial_quote" class="form-control" rows="2" placeholder="Client testimonial quote..."></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Testimonial Author & Role</label>
                            <input type="text" name="testimonial_author" class="form-control mb-2" placeholder="e.g. Dr. Sarah Jenkins, Founder">
                            <label class="form-label">Tech Stack Used</label>
                            <input type="text" name="tech_stack" class="form-control mb-2" placeholder="e.g. GoHighLevel, Meta Ads, Custom Web Funnel">
                            <div class="row g-2">
                                <div class="col-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control" placeholder="e.g. United States">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Duration / Time</label>
                                    <input type="text" name="duration" class="form-control" placeholder="e.g. 4 Weeks Implementation">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Full Case Story & Execution Details</label>
                            <textarea name="full_content" class="form-control" rows="4" placeholder="Detailed story of execution, strategy, and milestones..."></textarea>
                        </div>

                        <!-- Options -->
                        <div class="col-md-6">
                            <label class="form-label">Main Cover Image (Optional)</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Slider Gallery Photos (Multiple Optional)</label>
                            <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" value="0">
                        </div>
                        <div class="col-md-6 d-flex align-items-center pt-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_featured" value="1" checked id="add_is_featured">
                                <label class="form-check-label fw-bold" for="add_is_featured">Featured</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Case Study</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- EDIT CASE STUDY MODAL -->
<div class="modal fade" id="editCaseStudyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editCaseStudyForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title text-white">Edit Case Study</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label required">Case Study Title</label>
                            <input type="text" name="title" id="edit_title" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Category</label>
                            <select name="category" id="edit_category" class="form-select" required>
                                <option value="insurance">Insurance</option>
                                <option value="realestate">Real Estate</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="homeservices">Home Services</option>
                                <option value="professionalservices">Professional Services</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label required">Headline / Client Brand</label>
                            <input type="text" name="headline" id="edit_headline" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Category Badge Label</label>
                            <input type="text" name="category_label" id="edit_category_label" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Card Badge Text</label>
                            <input type="text" name="badge_text" id="edit_badge_text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="client_name" id="edit_client_name" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label required">Summary Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="3" required></textarea>
                        </div>

                        <!-- Metrics -->
                        <div class="col-12"><hr class="my-2"><h6 class="fw-bold text-primary">Key Growth Metrics</h6></div>
                        <div class="col-md-4">
                            <label class="form-label">Metric 1 Value</label>
                            <input type="text" name="metric_1_val" id="edit_metric_1_val" class="form-control">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Metric 1 Label</label>
                            <input type="text" name="metric_1_label" id="edit_metric_1_label" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Metric 2 Value</label>
                            <input type="text" name="metric_2_val" id="edit_metric_2_val" class="form-control">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Metric 2 Label</label>
                            <input type="text" name="metric_2_label" id="edit_metric_2_label" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Metric 3 Value</label>
                            <input type="text" name="metric_3_val" id="edit_metric_3_val" class="form-control">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Metric 3 Label</label>
                            <input type="text" name="metric_3_label" id="edit_metric_3_label" class="form-control">
                        </div>

                        <!-- Details -->
                        <div class="col-12"><hr class="my-2"><h6 class="fw-bold text-primary">Detailed Overview</h6></div>
                        <div class="col-md-6">
                            <label class="form-label">The Challenge</label>
                            <textarea name="challenge" id="edit_challenge" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">The Solution</label>
                            <textarea name="solution" id="edit_solution" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Testimonial Quote</label>
                            <textarea name="testimonial_quote" id="edit_testimonial_quote" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Testimonial Author & Role</label>
                            <input type="text" name="testimonial_author" id="edit_testimonial_author" class="form-control mb-2">
                            <label class="form-label">Tech Stack Used</label>
                            <input type="text" name="tech_stack" id="edit_tech_stack" class="form-control mb-2">
                            <div class="row g-2">
                                <div class="col-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" id="edit_location" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Duration / Time</label>
                                    <input type="text" name="duration" id="edit_duration" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Full Case Story & Execution Details</label>
                            <textarea name="full_content" id="edit_full_content" class="form-control" rows="4"></textarea>
                        </div>

                        <!-- Options -->
                        <div class="col-md-6">
                            <label class="form-label">Main Cover Image (Optional)</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Slider Gallery Photos (Multiple Optional)</label>
                            <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" id="edit_sort_order" class="form-control">
                        </div>
                        <div class="col-md-6 d-flex align-items-center pt-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_featured" value="1" id="edit_is_featured">
                                <label class="form-check-label fw-bold" for="edit_is_featured">Featured</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Case Study</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).on('click', '.edit-cs-btn', function () {
        const btn = $(this);
        const id = btn.data('id');
        const editForm = document.getElementById('editCaseStudyForm');
        if (editForm) {
            editForm.action = '/admin/case-studies/' + id + '/update';
        }

        $('#edit_title').val(btn.data('title') || '');
        $('#edit_category').val(btn.data('category') || 'healthcare');
        $('#edit_headline').val(btn.data('headline') || '');
        $('#edit_category_label').val(btn.data('category_label') || '');
        $('#edit_badge_text').val(btn.data('badge_text') || '');
        $('#edit_client_name').val(btn.data('client_name') || '');
        $('#edit_description').val(btn.data('description') || '');

        $('#edit_metric_1_val').val(btn.data('metric_1_val') || '');
        $('#edit_metric_1_label').val(btn.data('metric_1_label') || '');
        $('#edit_metric_2_val').val(btn.data('metric_2_val') || '');
        $('#edit_metric_2_label').val(btn.data('metric_2_label') || '');
        $('#edit_metric_3_val').val(btn.data('metric_3_val') || '');
        $('#edit_metric_3_label').val(btn.data('metric_3_label') || '');

        $('#edit_challenge').val(btn.data('challenge') || '');
        $('#edit_solution').val(btn.data('solution') || '');
        $('#edit_testimonial_quote').val(btn.data('testimonial_quote') || '');
        $('#edit_testimonial_author').val(btn.data('testimonial_author') || '');
        $('#edit_tech_stack').val(btn.data('tech_stack') || '');
        $('#edit_location').val(btn.data('location') || '');
        $('#edit_duration').val(btn.data('duration') || '');
        $('#edit_full_content').val(btn.data('full_content') || '');

        $('#edit_sort_order').val(btn.data('sort_order') || 0);
        $('#edit_is_featured').prop('checked', btn.data('is_featured') == 1 || btn.data('is_featured') == '1');

        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            const modalEl = document.getElementById('editCaseStudyModal');
            if (modalEl) {
                const modalObj = bootstrap.Modal.getOrCreateInstance(modalEl);
                modalObj.show();
            }
        } else if ($.fn.modal) {
            $('#editCaseStudyModal').modal('show');
        }
    });
</script>
@endpush
