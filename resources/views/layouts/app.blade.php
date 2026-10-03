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

    // Global Modal, Month Calendar & Timezone Logic
    const bookingModal = document.getElementById('booking-modal');
    const bookingModalBackdrop = document.getElementById('booking-modal-backdrop');
    const bookingModalClose = document.getElementById('booking-modal-close');
    const bookingModalCard = document.getElementById('booking-modal-card');
    const bookingForm = document.getElementById('booking-lead-form');
    const step1View = document.getElementById('booking-step-1');
    const step2View = document.getElementById('booking-step-2');
    const bookingSuccessView = document.getElementById('booking-success-view');

    const gotoStep2Btn = document.getElementById('goto-step-2-btn');
    const backToStep1Btn = document.getElementById('back-to-step-1-btn');
    const modalSlotDisplay = document.getElementById('modal-slot-display');
    const hiddenDateInput = document.getElementById('modal-input-date');
    const hiddenTimeInput = document.getElementById('modal-input-time');
    const hiddenTzInput = document.getElementById('modal-input-tz');
    const timezoneSelect = document.getElementById('booking-timezone-select');

    const calMonthYear = document.getElementById('cal-month-year');
    const calDaysGrid = document.getElementById('cal-days-grid');
    const calPrevMonthBtn = document.getElementById('cal-prev-month');
    const calNextMonthBtn = document.getElementById('cal-next-month');

    let todayDate = new Date();
    let currentCalMonth = todayDate.getMonth();
    let currentCalYear = todayDate.getFullYear();

    let selectedDateObj = new Date();
    selectedDateObj.setDate(selectedDateObj.getDate() + 1); // default tomorrow
    let selectedTimeStr = ""; // No auto pre-selected time slot!
    let selectedTzStr = "EST";

    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    function updateSlotDisplay() {
      if (!modalSlotDisplay) return;
      const formattedDate = selectedDateObj.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
      if (selectedTimeStr) {
        modalSlotDisplay.innerText = `${formattedDate} at ${selectedTimeStr} (${selectedTzStr})`;
      } else {
        modalSlotDisplay.innerText = `${formattedDate} — Please select a time slot below`;
      }
      if (hiddenDateInput) hiddenDateInput.value = formattedDate;
      if (hiddenTimeInput) hiddenTimeInput.value = selectedTimeStr || '';
      if (hiddenTzInput) hiddenTzInput.value = selectedTzStr;
    }

    function fetchBookedSlots(dateStr) {
      if (!dateStr) return;
      fetch("{{ route('booking.slots') }}?booking_date=" + encodeURIComponent(dateStr))
        .then(res => res.json())
        .then(data => {
          const bookedList = (data.success && data.booked_slots) ? data.booked_slots : [];
          updateSlotAvailability(bookedList);
        })
        .catch(err => {
          console.error('Error fetching booked slots:', err);
          updateSlotAvailability([]);
        });
    }

    function updateSlotAvailability(bookedList) {
      const slotButtons = document.querySelectorAll('.time-slot-btn');

      if (selectedTimeStr && bookedList.includes(selectedTimeStr)) {
        selectedTimeStr = "";
      }

      slotButtons.forEach(btn => {
        const timeVal = btn.getAttribute('data-time');
        const isBooked = bookedList.includes(timeVal);

        if (isBooked) {
          btn.disabled = true;
          btn.classList.add('cursor-not-allowed', 'bg-red-500/20', 'border-red-500/40', 'text-red-300', 'font-bold');
          btn.classList.remove('opacity-40', 'line-through', 'bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'bg-white/5', 'border-white/10', 'text-slate-200');
          btn.innerText = 'Booked';
          btn.title = `${timeVal} is already booked`;
        } else {
          btn.disabled = false;
          btn.classList.remove('opacity-40', 'line-through', 'cursor-not-allowed', 'bg-red-500/20', 'border-red-500/40', 'text-red-300', 'font-bold');
          btn.removeAttribute('title');
          btn.innerText = timeVal;
        }
      });

      slotButtons.forEach(btn => {
        const timeVal = btn.getAttribute('data-time');
        if (!btn.disabled && selectedTimeStr && timeVal === selectedTimeStr) {
          btn.classList.remove('bg-white/5', 'border-white/10', 'text-slate-200');
          btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'font-bold');
        } else if (!btn.disabled) {
          btn.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'font-bold');
          btn.classList.add('bg-white/5', 'border-white/10', 'text-slate-200');
        }
      });

      updateSlotDisplay();
    }

    function renderMonthCalendar(month, year) {
      if (!calDaysGrid || !calMonthYear) return;

      calMonthYear.innerText = `${monthNames[month]} ${year}`;
      calDaysGrid.innerHTML = '';

      const firstDayIndex = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      // Blank cells before day 1
      for (let i = 0; i < firstDayIndex; i++) {
        const blank = document.createElement('div');
        blank.className = 'py-1.5 text-xs text-transparent select-none';
        blank.innerText = '.';
        calDaysGrid.appendChild(blank);
      }

      const todayZero = new Date(todayDate.getFullYear(), todayDate.getMonth(), todayDate.getDate());

      for (let day = 1; day <= daysInMonth; day++) {
        const thisDate = new Date(year, month, day);
        const isPast = thisDate < todayZero;
        const isSelected = selectedDateObj.getFullYear() === year && selectedDateObj.getMonth() === month && selectedDateObj.getDate() === day;

        const dayBtn = document.createElement('button');
        dayBtn.type = 'button';

        if (isPast) {
          dayBtn.className = 'py-1.5 rounded-lg text-xs font-medium text-slate-600 cursor-not-allowed opacity-40';
          dayBtn.disabled = true;
        } else if (isSelected) {
          dayBtn.className = 'py-1.5 rounded-lg text-xs font-bold text-white bg-gradient-to-r from-cyan-500 to-purple-600 shadow-[0_0_12px_rgba(56,197,210,0.4)] active-day-cell';
        } else {
          dayBtn.className = 'py-1.5 rounded-lg text-xs font-semibold text-slate-300 hover:bg-cyan-500/20 hover:text-cyan-300 transition-colors';
        }

        dayBtn.innerText = day;

        if (!isPast) {
          dayBtn.addEventListener('click', function() {
            selectedDateObj = new Date(year, month, day);
            selectedTimeStr = ""; // reset time selection on date change
            renderMonthCalendar(month, year);
            const formatted = selectedDateObj.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
            fetchBookedSlots(formatted);
          });
        }

        calDaysGrid.appendChild(dayBtn);
      }
    }

    if (calPrevMonthBtn) {
      calPrevMonthBtn.addEventListener('click', function() {
        if (currentCalMonth === 0) {
          currentCalMonth = 11;
          currentCalYear--;
        } else {
          currentCalMonth--;
        }
        renderMonthCalendar(currentCalMonth, currentCalYear);
      });
    }

    if (calNextMonthBtn) {
      calNextMonthBtn.addEventListener('click', function() {
        if (currentCalMonth === 11) {
          currentCalMonth = 0;
          currentCalYear++;
        } else {
          currentCalMonth++;
        }
        renderMonthCalendar(currentCalMonth, currentCalYear);
      });
    }

    if (timezoneSelect) {
      timezoneSelect.addEventListener('change', function() {
        selectedTzStr = timezoneSelect.value;
        updateSlotDisplay();
      });
    }

    // Time Slot click listener
    document.querySelectorAll('.time-slot-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        if (btn.disabled) return;
        document.querySelectorAll('.time-slot-btn').forEach(b => {
          if (!b.disabled) {
            b.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'font-bold');
            b.classList.add('bg-white/5', 'border-white/10', 'text-slate-200');
          }
        });
        btn.classList.remove('bg-white/5', 'border-white/10', 'text-slate-200');
        btn.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300', 'font-bold');

        selectedTimeStr = btn.getAttribute('data-time') || '';
        updateSlotDisplay();
      });
    });

    // Step Switching
    if (gotoStep2Btn) {
      gotoStep2Btn.addEventListener('click', function() {
        const nameInput = document.getElementById('step1-name');
        const emailInput = document.getElementById('step1-email');
        const phoneInput = document.getElementById('step1-phone');
        const companyInput = document.getElementById('step1-company');
        const websiteInput = document.getElementById('step1-website');

        const inputs = [nameInput, emailInput, phoneInput, companyInput, websiteInput];
        for (let input of inputs) {
          if (input && !input.checkValidity()) {
            input.reportValidity();
            return;
          }
        }

        step1View.classList.add('hidden');
        step2View.classList.remove('hidden');
        renderMonthCalendar(currentCalMonth, currentCalYear);
        const formatted = selectedDateObj.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
        fetchBookedSlots(formatted);
        if (typeof lucide !== 'undefined') lucide.createIcons();
      });
    }

    if (backToStep1Btn) {
      backToStep1Btn.addEventListener('click', function() {
        step2View.classList.add('hidden');
        step1View.classList.remove('hidden');
        if (typeof lucide !== 'undefined') lucide.createIcons();
      });
    }

    window.openBookingModal = function(slotTime) {
      currentCalMonth = todayDate.getMonth();
      currentCalYear = todayDate.getFullYear();
      renderMonthCalendar(currentCalMonth, currentCalYear);

      selectedTimeStr = slotTime ? (slotTime.split(' ')[0] + ' ' + (slotTime.split(' ')[1] || 'AM')) : "";
      const formatted = selectedDateObj.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
      fetchBookedSlots(formatted);

      if (step1View) step1View.classList.remove('hidden');
      if (step2View) step2View.classList.add('hidden');
      if (bookingSuccessView) bookingSuccessView.classList.add('hidden');

      bookingModal.classList.remove('opacity-0', 'pointer-events-none');
      bookingModal.classList.add('opacity-100', 'pointer-events-auto');
      bookingModalCard.classList.remove('scale-95');
      bookingModalCard.classList.add('scale-100');
      document.body.classList.add('overflow-hidden');
      if (typeof lucide !== 'undefined') lucide.createIcons();
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

    // Form Submit
    if (bookingForm) {
      bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const messageInput = document.getElementById('step2-message');
        if (messageInput && !messageInput.checkValidity()) {
          messageInput.reportValidity();
          return;
        }

        if (!selectedTimeStr) {
          alert('Please click and select an available time slot before submitting.');
          return;
        }

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
            step2View.classList.add('hidden');
            step1View.classList.add('hidden');
            bookingSuccessView.classList.remove('hidden');
            if (typeof lucide !== 'undefined') lucide.createIcons();
          } else {
            alert(result.message || 'Please check your inputs and try again.');
          }
        })
        .catch(err => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHtml;
          step2View.classList.add('hidden');
          step1View.classList.add('hidden');
          bookingSuccessView.classList.remove('hidden');
          if (typeof lucide !== 'undefined') lucide.createIcons();
        });
      });
    }
  </script>
  @stack('scripts')
</body>
</html>
