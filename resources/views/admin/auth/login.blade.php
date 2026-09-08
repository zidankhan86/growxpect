@php
    $settings = getSetting();
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() ?? 'en' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings->site_name ?? 'Admin Login' }}</title>

    <!-- Tabler CSS -->
    <link href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css" rel="stylesheet">
    <style>
        body {
            background: #fbfaf9;
        }

        .login-card {
            max-width: 400px;
            margin: auto;
            border-radius: 12px;
        }

        .logo {
            max-height: 60px;
        }
    </style>
</head>

<body class="d-flex align-items-center min-vh-100">

    <div class="container-tight py-6">
        <div class="card login-card">
            <div class="card-body p-5">

                
                <!-- Heading -->
                <h2 class="h3 text-center mb-4">Admin Login</h2>

                <!-- Login Form -->
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Admin Email</label>
                        <input type="email" name="email"
                            class="form-control shadow-none @error('email') is-invalid @enderror"
                            placeholder="Enter your email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" id="password" name="password"
                                class="form-control shadow-none @error('password') is-invalid @enderror"
                                placeholder="Enter your password" required>
                            <span class="input-group-text">
                                <a href="#" class="link-secondary toggle-password" toggle="#password">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path
                                            d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-footer mt-4">
                        <button type="submit" class="btn btn-primary py-2 w-100">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tabler JS -->
    <script src="{{ asset('tabler/js/tabler.min.js') }}"></script>

    <!-- Password Toggle -->
    <script>
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.querySelector(togglePassword.getAttribute('toggle'));
        const eyeIcon = togglePassword.querySelector('svg');

        togglePassword.addEventListener('click', function(e) {
            e.preventDefault();

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Change to eye-off icon
                eyeIcon.innerHTML = `
                <path stroke="none" d="M0 0h24v24H0z"/>
                <path d="M3 3l18 18"/>
                <path d="M10.584 10.584a2 2 0 1 0 2.832 2.832"/>
                <path d="M9.88 5.12c1.96-.43 4.04-.43 6 0 2.667.667 6 7 6 7s-3.333 6.333-6 7c-1.96.43-4.04.43-6 0-2.667-.667-6-7-6-7s3.333-6.333 6-7z"/>
            `;
            } else {
                passwordInput.type = 'password';
                // Change back to eye icon
                eyeIcon.innerHTML = `
                <path stroke="none" d="M0 0h24v24H0z"/>
                <circle cx="12" cy="12" r="2"/>
                <path d="M22 12c-2.667 4.667-6 7-10 7s-7.333-2.333-10-7c2.667-4.667 6-7 10-7s7.333 2.333 10 7"/>
            `;
            }
        });
    </script>


</body>

</html>
