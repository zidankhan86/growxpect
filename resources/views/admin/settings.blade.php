@extends('admin.layouts.master')

@section('settings_menu', 'show')
@section('general', 'active')
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
                    <div class="">
                        <div class="">
                            <form action="{{ route('admin.settings.general_store') }}" method="post"
                                enctype="multipart/form-data" id="settingUpdate">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Settings') }}</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Logo
                                                                (<a class="small" target="_blank"
                                                                    href="{{ getPhoto($settings->site_logo) }}">View</a>)
                                                                <br>
                                                                <small class="text-info fw-bold">(180x60px
                                                                    recommended)</small>
                                                            </label>
                                                            <input type="file" class="form-control" name="site_logo"
                                                                accept=".png,.jpg,.jpeg,.gif,.svg" />
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">SEO Image
                                                                (<a class="small" target="_blank"
                                                                    href="{{ getIcon($settings->seo_image) }}">View</a>)
                                                                <br>
                                                                <small class="text-info fw-bold">(728x680px
                                                                    recommended)</small>
                                                            </label>
                                                            <input type="file" class="form-control" name="seo_image"
                                                                accept=".png,.jpg,.jpeg,.gif,.svg" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Favicon
                                                                (<a class="small" target="_blank"
                                                                    href="{{ getIcon($settings->favicon) }}">View</a>)
                                                                <br>
                                                                <small class="text-info fw-bold">(200x200px
                                                                    recommended)</small>
                                                            </label>
                                                            <input type="file" class="form-control" name="favicon"
                                                                accept=".png,.jpg,.jpeg,.gif,.svg,.ico" />
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">App Name</label>
                                                                <input type="text" class="form-control" name="app_name"
                                                                    value="{{ config('app.name') }}"
                                                                    placeholder="{{ __('App Name') }}..." readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label
                                                                    class="form-label required">{{ __('Site Name') }}</label>
                                                                <input type="text" class="form-control" name="site_name"
                                                                    value="{{ $settings->site_name ?? '' }}"
                                                                    placeholder="{{ __('Site Name') }}..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Footer Message </label>
                                                                <input type="text" name="footer_text"
                                                                    value="{{ $settings->footer_text ?? '' }}"
                                                                    placeholder="Footer Message" class="form-control">
                                                            </div>
                                                        </div>


                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label
                                                                    class="form-label required">{{ __('Meta Description') }}</label>
                                                                <textarea class="form-control" name="seo_meta_desc" rows="3" placeholder="{{ __('Meta Description') }}"
                                                                    style="height: 120px !important;" required>{{ $settings->seo_meta_description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">{{ __('SEO Keywords') }}</label>
                                                                <textarea class="form-control required" name="meta_keywords" rows="3"
                                                                    placeholder="{{ __('SEO Keywords (Keyword 1, Keyword 2)') }}" style="height: 120px !important;" required>{{ $settings->seo_keywords }}</textarea>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label
                                                                class="form-label required">{{ __('messages.settings.invoice_footer') }}</label>
                                                            <input type="text" class="form-control"
                                                                name="invoice_footer" value="{{ $settings->invoice_footer }}"
                                                                placeholder="{{ __('messages.settings.invoice_footer') }}..." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label
                                                                class="form-label required">{{ __('messages.settings.invoice_footer') }} (ger)</label>
                                                            <input type="text" class="form-control"
                                                                name="invoice_footer_de" value="{{ $settings->invoice_footer_de }}"
                                                                placeholder="{{ __('messages.settings.invoice_footer') }}..." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label
                                                                class="form-label required">{{ __('messages.settings.tax') }}</label>
                                                            <input type="number" step="0.01" min="0" class="form-control"
                                                                name="tax" value="{{ $settings->tax }}"
                                                                placeholder="{{ __('messages.settings.tax') }}..." required>
                                                        </div>
                                                    </div> --}}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- General Settings --}}
                                    <div class="col-12 mb-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">General Settings</h3>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">

                                                    {{-- <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label required"
                                                                for="timezone">{{ __('Timezone') }}</label>
                                                            <select name="timezone" id="timezone"
                                                                class="form-control" required>
                                                                @foreach (timezone_identifiers_list() as $timezone)
                                                                    <option value="{{ $timezone }}"
                                                                        {{ $config[2]->config_value == $timezone ? ' selected' : '' }}>
                                                                        {{ $timezone }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('timezone')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label required"
                                                                for="currency">{{ __('Currency') }}</label>
                                                            <select name="currency" id="currency"
                                                                class="form-control" required>
                                                                @foreach ($currencies as $currency)
                                                                    <option value="{{ $currency->iso_code }}"
                                                                        {{ $config[1]->config_value == $currency->iso_code ? ' selected' : '' }}>
                                                                        {{ $currency->name }}
                                                                        ({{ $currency->symbol }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('currency')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Email') }}
                                                                <span class="text-danger">*</span></label>
                                                            <input type="email" name="email" class="form-control"
                                                                required value="{{ $settings->email }}">
                                                            @error('email')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Support Email') }}
                                                                <span class="text-danger">*</span></label>
                                                            <input type="support_email" name="support_email" required
                                                                class="form-control"
                                                                value="{{ $settings->support_email }}">
                                                            @error('support_email')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Is Email <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="is_email" class="form-control" required>
                                                                <option value="1"
                                                                    {{ $settings->is_email == 1 ? 'selected' : '' }}>Enable
                                                                </option>
                                                                <option value="0"
                                                                    {{ $settings->is_email == 0 ? 'selected' : '' }}>
                                                                    Disable</option>
                                                            </select>
                                                            @error('is_email')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-xl-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Phone Number') }}
                                                                <span class="text-danger">*</span></label>
                                                            <input type="phone_no" name="phone_no" class="form-control"
                                                                required value="{{ $settings->phone_no }}">
                                                            @error('phone_no')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Social --}}
                                    {{-- <div class="col-lg-12 mb-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Social URL</h3>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Facebook URL') }}</label>
                                                            <input type="url" class="form-control"
                                                                name="facebook_url" value="{{ $settings->facebook_url }}"
                                                                placeholder="{{ __('Facebook URL') }}...">
                                                            @error('facebook_url')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Github Url') }}</label>
                                                            <input type="url" class="form-control" name="github_url"
                                                                value="{{ $settings->github_url }}"
                                                                placeholder="{{ __('Github Url') }}...">
                                                            @error('github_url')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Twitter Url') }}</label>
                                                            <input type="url" class="form-control" name="twitter_url"
                                                                value="{{ $settings->twitter_url }}"
                                                                placeholder="{{ __('Twitter Url') }}...">
                                                            @error('twitter_url')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Linkedin url') }}</label>
                                                            <input type="url" class="form-control"
                                                                name="linkedin_url" value="{{ $settings->linkedin_url }}"
                                                                placeholder="{{ __('Linkedin url') }}...">
                                                            @error('linkedin_url')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Instagram Url') }}</label>
                                                            <input type="url" class="form-control"
                                                                name="instagram_url"
                                                                value="{{ $settings->instagram_url }}"
                                                                placeholder="{{ __('Instagram Url') }}...">
                                                            @error('instagram_url')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('Whatsapp Number') }}</label>
                                                            <input type="text" class="form-control"
                                                                name="whatsapp_number"
                                                                value="{{ $settings->whatsapp_number }}"
                                                                placeholder="{{ __('Whatsapp Number') }}...">
                                                            @error('whatsapp_number')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- Google Settings --}}
                                    {{-- <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Google Login</h3>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label
                                                                class="form-label">{{ __('Google client id') }}</label>
                                                            <input type="text" class="form-control"
                                                                name="google_client_id"
                                                                value="{{ $settings->google_client_id }}"
                                                                placeholder="{{ __('Google client id') }}...">
                                                            @error('google_client_id')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label
                                                                class="form-label">{{ __('Google client secret') }}</label>
                                                            <input type="text" class="form-control"
                                                                name="google_client_secret"
                                                                value="{{ $settings->google_client_secret }}"
                                                                placeholder="{{ __('Google client secret') }}...">
                                                            @error('google_client_secret')
                                                                <span
                                                                    class="help-block text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}


                                </div>
                                <button type="submit"
                                    class="btn btn-success mt-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const form = document.getElementById("settingUpdate");
        const submitButton = form.querySelector("button[type='submit']");

        form.addEventListener("submit", function() {

            $("#updateButton").html(`
                <span id="">
                    <span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"></span>
                    Updating Setting...
                </span>
            `);

            submitButton.disabled = true;

        });
    </script>
    <script>
        $(document).ready(function() {
            $('#primaryColorPicker').on('input', function() {
                $('#primaryColorCode').val($(this).val());
            });

            $('#secondaryColorPicker').on('input', function() {
                $('#secondaryColorCode').val($(this).val());
            });
        });
    </script>
@endpush
