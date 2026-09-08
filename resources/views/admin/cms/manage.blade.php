@extends('admin.layouts.master')

@section('cms_manage', 'active')
@section('title') Homepage CMS @endsection

@push('style')
    <style>
        .cms-page-wrapper~.page-wrapper {
            display: none;
        }

        .cms-page-wrapper {
            display: flex;
            flex-direction: column;
            flex: 1 1 auto;
            overflow: hidden;
            padding: 0 !important;
            height: 100vh;
            max-height: 100vh;
            position: sticky;
            top: 0;
        }

        .cms-shell {
            display: flex;
            flex: 1 1 auto;
            overflow: hidden;
            height: 100%;
        }

        .cms-left {
            width: 420px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #e0e3e8;
            background: #fff;
            overflow: hidden;
        }

        .cms-left-head {
            padding: 10px 14px;
            border-bottom: 1px solid #e0e3e8;
            background: #f8f9fa;
            font-weight: 700;
            font-size: 13px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cms-left-body {
            flex: 1;
            overflow-y: auto;
        }

        .cms-accordion .accordion-button {
            font-size: 13px;
            font-weight: 600;
            padding: 10px 14px;
            background: #fff;
            color: #1a1a2e;
            box-shadow: none;
        }

        .cms-accordion .accordion-button:not(.collapsed) {
            background: #f0f4ff;
            color: #1665d8;
            box-shadow: none;
        }

        .cms-accordion .accordion-button::after {
            margin-left: auto;
            flex-shrink: 0;
        }

        .cms-accordion .accordion-body {
            padding: 12px 14px 16px;
            border-top: 1px solid #e8ecf0;
        }

        .cms-accordion .accordion-item {
            border: none;
            border-bottom: 1px solid #e8ecf0;
        }

        .cf-label {
            font-size: 11px;
            font-weight: 700;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: .04em;
            margin-bottom: 3px;
            display: block;
            margin-top: 10px;
        }

        .cf-label:first-child {
            margin-top: 0;
        }

        .cf-control {
            font-size: 12.5px;
            padding: 5px 8px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .cf-row {
            display: flex;
            gap: 6px;
        }

        .cf-row>* {
            flex: 1;
        }

        .cms-save-btn {
            width: 100%;
            margin-top: 14px;
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: .03em;
        }

        .img-thumb {
            max-height: 65px;
            border-radius: 4px;
            border: 1px solid #dee2e6;
            object-fit: cover;
            display: block;
            margin-bottom: 4px;
        }

        .sub-card {
            border: 1px solid #e8ecf0;
            border-radius: 6px;
            padding: 8px 10px;
            margin-top: 8px;
            background: #fafbfc;
        }

        .sub-card-title {
            font-size: 11px;
            font-weight: 700;
            color: #495057;
            margin-bottom: 6px;
        }

        .cms-preview {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: #f3f4f6;
        }

        .cms-preview-bar {
            background: #fff;
            border-bottom: 1px solid #e0e3e8;
            padding: 7px 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
            font-size: 12px;
        }

        #previewFrame {
            flex: 1;
            border: none;
            width: 100%;
        }

        #cmsToasts {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            display: flex;
            flex-direction: column-reverse;
            gap: 6px;
            pointer-events: none;
        }

        .cms-toast {
            padding: 9px 16px 9px 12px;
            border-radius: 6px;
            color: #fff;
            font-size: 12.5px;
            font-weight: 600;
            box-shadow: 0 4px 16px rgba(0, 0, 0, .18);
            display: flex;
            align-items: center;
            gap: 8px;
            max-width: 300px;
            animation: cmsToastIn .18s ease;
        }

        .cms-toast.success {
            background: #2fb344;
        }

        .cms-toast.error {
            background: #d63939;
        }

        @keyframes cmsToastIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .btn-spinner {
            display: inline-block;
            width: 12px;
            height: 12px;
            border: 2px solid rgba(255, 255, 255, .4);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .6s linear infinite;
            vertical-align: middle;
            margin-right: 4px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
@endpush

@section('content')
    <div class="page-wrapper cms-page-wrapper">
        <div class="cms-shell">

            <div class="cms-left">


                <div class="cms-left-body">
                    <div class="accordion accordion-flush cms-accordion" id="cmsAcc">

                        <div class="accordion cms-accordion" id="cmsAccordion">

                            <!-- HERO -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#hero">
                                        Screen 1 - Hero
                                    </button>
                                </h2>

                                <div id="hero" class="accordion-collapse collapse show">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="hero">

                                            <input type="hidden" name="section" value="hero">

                                            <label class="cf-label">Main Text</label>
                                            <textarea name="hero_title" class="form-control cf-control">{{ $cms['hero_title'] ?? "When no one's watching…" }}</textarea>

                                            <label class="cf-label">Sub Text</label>
                                            <textarea name="hero_subtitle" class="form-control cf-control">{{ $cms['hero_subtitle'] ?? 'who are you?' }}</textarea>

                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <!-- SCREEN 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#screen2">
                                        Screen 2
                                    </button>
                                </h2>

                                <div id="screen2" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="screen2">

                                            <input type="hidden" name="section" value="screen2">

                                            <label class="cf-label">Title</label>
                                            <textarea name="title" class="form-control cf-control">{{ $cms['screen2_title'] ?? "The moment didn't seem important." }}</textarea>


                                            <label class="cf-label">Subtitle</label>
                                            <textarea name="subtitle" class="form-control cf-control">{{ $cms['screen2_subtitle'] ?? 'Until it was.' }}</textarea>

                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <!-- VIDEO 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#video1">
                                        Video 1
                                    </button>
                                </h2>

                                <div id="video1" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="video1">

                                            <input type="hidden" name="section" value="video1">

                                            <label class="cf-label">YouTube URL</label>
                                            <input type="text" name="video_url" class="form-control cf-control"
                                                value="{{ $cms['video1_video_url'] ?? 'https://www.youtube.com/embed/a17AUmx3CkA' }}">

                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <!-- SCREEN 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#screen4">
                                        Emotional Text
                                    </button>
                                </h2>

                                <div id="screen4" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="screen4">

                                            <input type="hidden" name="section" value="screen4">

                                            <label class="cf-label">Line 1</label>
                                            <textarea name="line1" class="form-control cf-control">{{ $cms['screen4_line1'] ?? 'Not the moments you talk about.' }}</textarea>


                                            <label class="cf-label">Line 2</label>
                                            <textarea name="line2" class="form-control cf-control">{{ $cms['screen4_line2'] ?? 'The ones you carry.' }}</textarea>

                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <!-- VIDEO 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#video2">
                                        Video 2
                                    </button>
                                </h2>

                                <div id="video2" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="video2">

                                            <input type="hidden" name="section" value="video2">

                                            <label class="cf-label">YouTube URL</label>
                                            <input type="text" name="video_url" class="form-control cf-control"
                                                value="{{ $cms['video2_video_url'] ?? 'https://www.youtube.com/embed/UjWCIwPONsc' }}">

                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <!-- QUOTE -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#quote">
                                        Quote
                                    </button>
                                </h2>

                                <div id="quote" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="quote">
                                            <input type="hidden" name="section" value="quote">
                                            <label class="cf-label">Quote</label>
                                            <textarea name="quote" class="form-control cf-control">{{ $cms['quote'] ?? 'Some decisions never leave your heart.' }}</textarea>
                                            <button class="btn btn-dark cms-save-btn">Save</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#cta">
                                        CTA
                                    </button>
                                </h2>

                                <div id="cta" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST" data-section="cta">

                                            <input type="hidden" name="section" value="cta">

                                            <label class="cf-label">CTA Text</label>
                                            <textarea name="cta_text" class="form-control cf-control">{{ $cms['cta_text'] ?? 'Tell us about the moment that still lives inside you.' }}</textarea>

                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                            <!-- FINAL BUTTON -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#final">
                                        Button
                                    </button>
                                </h2>

                                <div id="final" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <form class="cms-form" action="{{ route('admin.cms.update') }}" method="POST"
                                            data-section="final_button">

                                            <input type="hidden" name="section" value="final_button">

                                            <label class="cf-label">Text</label>
                                            <input type="text" name="button_text" class="form-control cf-control"
                                                value="{{ $cms['button_text'] ?? 'Watch more reflections' }}">


                                            <button class="btn btn-dark cms-save-btn">Save</button>

                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            {{-- RIGHT PANEL --}}
            <div class="cms-preview">
                <div class="cms-preview-bar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                    <strong style="font-size:12px;">Live Preview</strong>
                    <div class="ms-auto d-flex gap-2">
                        <a href="{{ url('/') }}" target="_blank" class="btn btn-xs btn-outline-secondary"
                            style="font-size:11px; padding:2px 8px;">Open ↗</a>
                    </div>
                </div>
                <iframe id="previewFrame" src="{{ url('/') }}"
                    style="flex:1; border:none; width:100%; height:100%;"></iframe>
            </div>

        </div>
        <div id="cmsToasts"></div>
    </div>
@endsection

@push('script')
    <script>
        (function() {
            'use strict';

            var csrfToken = (document.querySelector('meta[name="csrf-token"]') || {}).content || '';
            var previewFrame = document.getElementById('previewFrame');
            var btnRefresh = document.getElementById('btnRefresh');

            if (btnRefresh) {
                btnRefresh.addEventListener('click', function() {
                    try {
                        previewFrame.contentWindow.location.reload();
                    } catch (e) {
                        previewFrame.src = previewFrame.src;
                    }
                });
            }

            function showToast(type, msg) {
                var wrap = document.getElementById('cmsToasts');
                var t = document.createElement('div');
                t.className = 'cms-toast ' + (type === 'success' ? 'success' : 'error');
                t.innerHTML = (type === 'success' ?
                        '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>' :
                        '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>'
                    ) +
                    ' <span>' + msg + '</span>';
                wrap.appendChild(t);
                setTimeout(function() {
                    t.style.transition = 'opacity .3s';
                    t.style.opacity = '0';
                    setTimeout(function() {
                        t.remove();
                    }, 320);
                }, 3500);
            }

            document.querySelectorAll('.cms-form').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    var section = form.getAttribute('data-section') || 'Section';
                    var btn = form.querySelector('[type=submit]');
                    var origHtml = btn.innerHTML;
                    btn.disabled = true;
                    btn.innerHTML = '<span class="btn-spinner"></span> Saving…';

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                            body: new FormData(form),
                        })
                        .then(function(r) {
                            if (r.status === 422) {
                                return r.json().then(function(d) {
                                    var first = d.errors ? Object.values(d.errors)[0][0] :
                                        'Validation failed.';
                                    return {
                                        success: false,
                                        message: first
                                    };
                                });
                            }
                            return r.json().catch(function() {
                                return {
                                    success: false,
                                    message: 'Unexpected server response.'
                                };
                            });
                        })
                        .then(function(data) {
                            showToast(data.success ? 'success' : 'error', data.message || (data
                                .success ? section + ' saved!' : 'Failed to save.'));
                            if (data.success) {
                                try {
                                    previewFrame.contentWindow.location.reload();
                                } catch (err) {
                                    previewFrame.src = previewFrame.src;
                                }
                            }
                        })
                        .catch(function() {
                            showToast('error', 'Network error. Please try again.');
                        })
                        .finally(function() {
                            btn.disabled = false;
                            btn.innerHTML = origHtml;
                        });
                });
            });
        })();
    </script>
@endpush
