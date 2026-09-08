<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title', $seo->title ?? $setting->site_name ?? 'Growxpect — Turn Leads Into Customers With Smarter Growth Systems')</title>
  <meta name="description" content="@yield('meta_description', $seo->description ?? $setting->seo_meta_description ?? 'Growxpect builds conversion-focused funnels, CRM systems, and automated workflows that help businesses capture, nurture and convert more leads.')" />
  @if(!empty($seo->keywords) || !empty($setting->seo_keywords))
    <meta name="keywords" content="{{ $seo->keywords ?? $setting->seo_keywords }}" />
  @endif

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ !empty($setting->favicon) && file_exists(public_path($setting->favicon)) ? asset($setting->favicon) : asset('logo.png') }}" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Tailwind Configuration -->
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
          colors: {
            brand: {
              darkest: '#030712',
              dark: '#070C18',
              card: '#0C1326',
              cardBorder: '#1E293B',
              cardHover: '#131D3B',
              cyan: '#38C5D2',
              purple: '#8C2AA6',
              cyanGlow: 'rgba(56, 197, 210, 0.25)',
              purpleGlow: 'rgba(140, 42, 166, 0.25)',
            }
          },
          boxShadow: {
            'glow-cyan': '0 0 25px -5px rgba(56, 197, 210, 0.45)',
            'glow-purple': '0 0 25px -5px rgba(168, 85, 247, 0.45)',
            'glow-brand': '0 0 30px -5px rgba(140, 42, 166, 0.4)',
            'glow-card': '0 8px 32px 0 rgba(0, 0, 0, 0.37), inset 0 0 0 1px rgba(255, 255, 255, 0.08)',
            'glow-pill': '0 0 15px rgba(56, 197, 210, 0.35)',
          }
        }
      }
    }
  </script>

  <style>
    * {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    .glass-panel {
      background: rgba(13, 21, 41, 0.7);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }
    .glass-panel-hover {
      transition: all 0.3s ease;
    }
    .glass-panel-hover:hover {
      background: rgba(18, 29, 58, 0.85);
      border-color: rgba(56, 197, 210, 0.35);
      box-shadow: 0 10px 30px -10px rgba(56, 197, 210, 0.25);
    }
    .text-glow {
      text-shadow: 0 0 20px rgba(56, 197, 210, 0.5);
    }
    .grid-bg {
      background-size: 40px 40px;
      background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    }
    .glow-dot {
      filter: drop-shadow(0 0 8px #38C5D2);
    }
    @keyframes marquee {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-50%); }
    }
    .animate-marquee {
      display: flex;
      width: max-content;
      animation: marquee 25s linear infinite;
    }
    .animate-marquee:hover {
      animation-play-state: paused;
    }
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #030712;
    }
    ::-webkit-scrollbar-thumb {
      background: #1e293b;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #334155;
    }
  </style>
  @stack('styles')
</head>

<body class="bg-[#030712] text-slate-200 font-sans antialiased overflow-x-hidden relative selection:bg-cyan-500/30 selection:text-cyan-200">

  <!-- Background Ambient Glows -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-purple-600/15 blur-[140px] rounded-full"></div>
    <div class="absolute top-[35%] -left-40 w-[600px] h-[600px] bg-cyan-500/15 blur-[150px] rounded-full"></div>
    <div class="absolute top-[60%] -right-40 w-[700px] h-[700px] bg-purple-600/15 blur-[160px] rounded-full"></div>
    <div class="absolute bottom-10 left-1/3 w-[800px] h-[500px] bg-sky-500/10 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 grid-bg opacity-40"></div>
  </div>

  <!-- Mobile Left Slide-out Drawer -->
  @include('partials.drawer')

  <!-- Main Page Wrapper -->
  <div class="relative z-10 flex flex-col min-h-screen">
    
    <!-- Top Navigation Header -->
    @include('partials.header')

    <!-- Main Content Body -->
    <main class="flex-grow">
      @yield('content')
    </main>

    <!-- Global Footer -->
    @include('partials.footer')

  </div>

  <!-- Interactive Booking Modal Component -->
  @include('partials.booking-modal')

  <!-- Base Scripts -->
  <script>
    lucide.createIcons();

    // Drawer functionality
    const drawerOpenBtn = document.getElementById('drawer-open-btn');
    const drawerCloseBtn = document.getElementById('drawer-close-btn');
    const drawerPanel = document.getElementById('drawer-panel');
    const drawerBackdrop = document.getElementById('drawer-backdrop');
    const drawerLinks = document.querySelectorAll('.drawer-link');

    function openDrawer() {
      drawerPanel.classList.remove('-translate-x-full');
      drawerPanel.classList.add('translate-x-0');
      drawerBackdrop.classList.remove('opacity-0', 'pointer-events-none');
      drawerBackdrop.classList.add('opacity-100', 'pointer-events-auto');
      document.body.classList.add('overflow-hidden');
    }

    function closeDrawer() {
      drawerPanel.classList.remove('translate-x-0');
      drawerPanel.classList.add('-translate-x-full');
      drawerBackdrop.classList.remove('opacity-100', 'pointer-events-auto');
      drawerBackdrop.classList.add('opacity-0', 'pointer-events-none');
      document.body.classList.remove('overflow-hidden');
    }

    if (drawerOpenBtn) drawerOpenBtn.addEventListener('click', openDrawer);
    if (drawerCloseBtn) drawerCloseBtn.addEventListener('click', closeDrawer);
    if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);
    drawerLinks.forEach(link => link.addEventListener('click', closeDrawer));

    // Global Modal Logic
    const bookingModal = document.getElementById('booking-modal');
    const bookingModalBackdrop = document.getElementById('booking-modal-backdrop');
    const bookingModalClose = document.getElementById('booking-modal-close');
    const bookingModalCard = document.getElementById('booking-modal-card');
    const bookingForm = document.getElementById('booking-lead-form');
    const bookingFormView = document.getElementById('booking-form-view');
    const bookingSuccessView = document.getElementById('booking-success-view');

    window.openBookingModal = function(slotTime) {
      if (slotTime) {
        const modalSlotDisplay = document.getElementById('modal-slot-display');
        const hiddenDateInput = document.getElementById('modal-input-date');
        const hiddenTimeInput = document.getElementById('modal-input-time');
        if (modalSlotDisplay) modalSlotDisplay.innerText = slotTime;
        if (hiddenTimeInput) hiddenTimeInput.value = slotTime;
      }
      bookingModal.classList.remove('opacity-0', 'pointer-events-none');
      bookingModal.classList.add('opacity-100', 'pointer-events-auto');
      bookingModalCard.classList.remove('scale-95');
      bookingModalCard.classList.add('scale-100');
      document.body.classList.add('overflow-hidden');
    };

    window.closeBookingModal = function() {
      bookingModal.classList.remove('opacity-100', 'pointer-events-auto');
      bookingModal.classList.add('opacity-0', 'pointer-events-none');
      bookingModalCard.classList.remove('scale-100');
      bookingModalCard.classList.add('scale-95');
      document.body.classList.remove('overflow-hidden');
    };

    if (bookingModalClose) bookingModalClose.addEventListener('click', window.closeBookingModal);
    if (bookingModalBackdrop) bookingModalBackdrop.addEventListener('click', window.closeBookingModal);

    // AJAX Booking Form Submit
    if (bookingForm) {
      bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const submitBtn = document.getElementById('modal-submit-btn');
        const originalBtnHtml = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="animate-spin inline-block w-4 h-4 border-2 border-white border-t-transparent rounded-full"></span> Securing Slot...';

        const formData = new FormData(bookingForm);
        const data = Object.fromEntries(formData.entries());

        fetch("{{ route('booking.store') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
          },
          body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(result => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHtml;
          if (result.success) {
            bookingFormView.classList.add('hidden');
            bookingSuccessView.classList.remove('hidden');
          } else {
            alert(result.message || 'Please check your inputs and try again.');
          }
        })
        .catch(err => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHtml;
          bookingFormView.classList.add('hidden');
          bookingSuccessView.classList.remove('hidden');
        });
      });
    }
  </script>
  @stack('scripts')
</body>
</html>
