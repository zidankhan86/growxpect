<div id="booking-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
  <div id="booking-modal-backdrop" class="absolute inset-0 bg-black/80 backdrop-blur-md"></div>

  <div class="relative w-full max-w-lg rounded-3xl p-5 sm:p-7 bg-[#091124] border border-cyan-500/40 shadow-[0_0_50px_rgba(56,197,210,0.25)] z-10 transition-transform duration-300 scale-95 my-auto max-h-[95vh] overflow-y-auto" id="booking-modal-card">
    
    <button id="booking-modal-close" class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white/5 border border-white/10 text-slate-400 hover:text-white flex items-center justify-center hover:bg-white/10 transition-colors z-20" aria-label="Close modal">
      <i data-lucide="x" class="w-4 h-4"></i>
    </button>

    <form id="booking-lead-form">
      @csrf
      <input type="hidden" name="booking_date" id="modal-input-date" value="" />
      <input type="hidden" name="booking_time" id="modal-input-time" value="09:00 AM" />
      <input type="hidden" name="timezone" id="modal-input-tz" value="EST" />

      <!-- STEP 1 VIEW: CLIENT INFORMATION -->
      <div id="booking-step-1" class="space-y-3.5">
        <div class="space-y-1">
          <div class="inline-flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-2.5 py-0.5 rounded-full border border-cyan-500/20">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
            STEP 1 OF 2 — BUSINESS & CONTACT DETAILS
          </div>
          <h3 class="text-xl sm:text-2xl font-extrabold text-white">Confirm Your Growth Call</h3>
          <p class="text-xs text-slate-400">Provide your contact & business details so our team can prepare for your call.</p>
        </div>

        <div class="space-y-3 pt-1">
          <div>
            <label class="block text-[11px] font-semibold text-slate-300 mb-1">Your Full Name *</label>
            <input type="text" name="name" id="step1-name" required placeholder="e.g. Alex Morgan" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <label class="block text-[11px] font-semibold text-slate-300 mb-1">Work Email *</label>
              <input type="email" name="email" id="step1-email" required placeholder="alex@company.com" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
            </div>

            <div>
              <label class="block text-[11px] font-semibold text-slate-300 mb-1">Phone / WhatsApp *</label>
              <input type="tel" name="phone" id="step1-phone" required placeholder="+1 (555) 000-0000" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <label class="block text-[11px] font-semibold text-slate-300 mb-1">Company / Business Name *</label>
              <input type="text" name="company_name" id="step1-company" required placeholder="e.g. Acme Corp" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
            </div>

            <div>
              <label class="block text-[11px] font-semibold text-slate-300 mb-1">Website / Business URL *</label>
              <input type="text" name="website_url" id="step1-website" required placeholder="e.g. rezaeerabbi.com" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <label class="block text-[11px] font-semibold text-slate-300 mb-1">Monthly Revenue *</label>
              <select name="monthly_revenue" id="step1-revenue" required class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
                <option value="$10k - $30k">$10k – $30k / mo</option>
                <option value="$30k - $100k" selected>$30k – $100k / mo</option>
                <option value="$100k - $250k">$100k – $250k / mo</option>
                <option value="$250k+">$250k+ / mo</option>
              </select>
            </div>

            <div>
              <label class="block text-[11px] font-semibold text-slate-300 mb-1">Primary Growth Focus *</label>
              <select name="service_interested" id="step1-service" required class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
                <option value="Full Growth Engine" selected>All-In-One Growth Engine</option>
                <option value="Funnels & CRO">High-Converting Funnels</option>
                <option value="CRM & Automation">CRM & Marketing Automation</option>
                <option value="Paid Advertising">Paid Advertising (Meta & Google)</option>
                <option value="AI Speed-to-Lead">AI Speed-to-Lead Bot</option>
              </select>
            </div>
          </div>

          <button type="button" id="goto-step-2-btn" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all mt-3">
            <span>Next: Select Date & Time</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>

          <p class="text-[10px] text-center text-slate-400">
            🔒 100% Confidential. No sales pitch, purely strategic growth roadmap.
          </p>
        </div>
      </div>

      <!-- STEP 2 VIEW: CALENDAR, TIME SLOT & NOTES -->
      <div id="booking-step-2" class="hidden space-y-3.5">
        <div class="flex items-center justify-between">
          <div class="inline-flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-purple-400 bg-purple-500/10 px-2.5 py-0.5 rounded-full border border-purple-500/20">
            STEP 2 OF 2 — CALENDAR & NOTES
          </div>
          <button type="button" id="back-to-step-1-btn" class="text-xs text-cyan-400 hover:text-cyan-300 flex items-center gap-1 font-semibold">
            <i data-lucide="arrow-left" class="w-3.5 h-3.5"></i> Edit Details
          </button>
        </div>

        <div>
          <h3 class="text-xl font-extrabold text-white">Select Date & Time</h3>
          <p class="text-xs text-slate-400">Pick a suitable day & time slot for your call.</p>
        </div>

        <!-- Selected Slot Badge Banner (Matches User Screenshot) -->
        <div class="p-3 rounded-xl bg-cyan-950/50 border border-cyan-500/30 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2 text-cyan-300">
            <i data-lucide="calendar" class="w-4 h-4 text-cyan-400 shrink-0"></i>
            <span id="modal-slot-display" class="font-semibold text-white text-[11px] sm:text-xs">September 21, 2026 at 09:00 AM (EST)</span>
          </div>
          <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md border border-emerald-500/20 shrink-0">Slot Reserved</span>
        </div>

        <!-- Timezone Selector Dropdown -->
        <div class="flex items-center justify-between gap-2 p-2.5 rounded-xl bg-slate-900/90 border border-white/10">
          <div class="flex items-center gap-2 text-slate-300 text-xs font-semibold shrink-0">
            <i data-lucide="globe" class="w-3.5 h-3.5 text-cyan-400"></i>
            <span>Timezone:</span>
          </div>
          <select id="booking-timezone-select" class="bg-transparent text-white text-xs font-semibold focus:outline-none cursor-pointer text-right">
            <option value="EST" class="bg-slate-900 text-white" selected>EST (US Eastern - UTC-5)</option>
            <option value="CST" class="bg-slate-900 text-white">CST (US Central - UTC-6)</option>
            <option value="PST" class="bg-slate-900 text-white">PST (US Pacific - UTC-8)</option>
            <option value="GMT" class="bg-slate-900 text-white">GMT/BST (London UK - UTC+1)</option>
            <option value="CET" class="bg-slate-900 text-white">CET (Paris/Berlin - UTC+2)</option>
            <option value="GST" class="bg-slate-900 text-white">GST (Dubai/UAE - UTC+4)</option>
            <option value="BST (Dhaka)" class="bg-slate-900 text-white">BST (Dhaka/BD - UTC+6)</option>
            <option value="SGT" class="bg-slate-900 text-white">SGT (Singapore - UTC+8)</option>
            <option value="AEST" class="bg-slate-900 text-white">AEST (Sydney - UTC+10)</option>
          </select>
        </div>

        <!-- Full Interactive Month Calendar Widget -->
        <div class="p-3 rounded-2xl bg-slate-900/80 border border-white/10 space-y-2.5">
          <!-- Calendar Month Header & Navigation -->
          <div class="flex items-center justify-between px-1">
            <button type="button" id="cal-prev-month" class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 text-slate-300 flex items-center justify-center transition-colors">
              <i data-lucide="chevron-left" class="w-4 h-4"></i>
            </button>

            <span id="cal-month-year" class="text-xs font-bold text-white tracking-wide">September 2026</span>

            <button type="button" id="cal-next-month" class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 text-slate-300 flex items-center justify-center transition-colors">
              <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- Weekday Headers -->
          <div class="grid grid-cols-7 text-center text-[10px] font-bold text-slate-400 uppercase tracking-wider pb-1 border-b border-white/5">
            <div>Su</div><div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div>
          </div>

          <!-- Calendar Days Grid -->
          <div id="cal-days-grid" class="grid grid-cols-7 gap-1 text-center">
            <!-- Dynamically populated via JS -->
          </div>
        </div>

        <!-- Time Slot Selection Grid (9 Slots within 11:00 PM) -->
        <div>
          <label class="block text-[11px] font-semibold text-slate-300 mb-1.5">Select Time Slot (9 Available Slots)</label>
          <div class="grid grid-cols-3 gap-2" id="time-slots-container">
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="09:00 AM">09:00 AM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="10:30 AM">10:30 AM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="12:00 PM">12:00 PM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="01:30 PM">01:30 PM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="03:00 PM">03:00 PM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="04:30 PM">04:30 PM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="06:00 PM">06:00 PM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="08:00 PM">08:00 PM</button>
            <button type="button" class="time-slot-btn px-2 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-slate-200 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-center" data-time="09:30 PM">09:30 PM</button>
          </div>
        </div>

        <!-- Customer Notes / Growth Challenges Textarea -->
        <div>
          <label class="block text-[11px] font-semibold text-slate-300 mb-1">Business Goal & Challenges Notes *</label>
          <textarea name="message" id="step2-message" required rows="3" placeholder="Describe your main business goal, current challenges, or what you'd like to discuss during our call..." class="w-full px-3.5 py-2 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all"></textarea>
        </div>

        <button type="submit" id="modal-submit-btn" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all mt-2">
          <span>Lock In My Free Strategy Call</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>

        <p class="text-[10px] text-center text-slate-400">
          🔒 100% Confidential. No sales pitch, purely strategic growth roadmap.
        </p>
      </div>
    </form>

    <!-- Success View -->
    <div id="booking-success-view" class="hidden text-center py-6 space-y-4">
      <div class="w-16 h-16 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 flex items-center justify-center mx-auto shadow-[0_0_30px_rgba(16,185,129,0.3)]">
        <i data-lucide="check" class="w-8 h-8"></i>
      </div>
      <h3 class="text-2xl font-extrabold text-white">Call Confirmed!</h3>
      <p class="text-xs text-slate-300 max-w-sm mx-auto leading-relaxed">
        Your growth strategy session is confirmed. We have sent a calendar invite and preparation checklist to your email.
      </p>
      <button type="button" onclick="window.closeBookingModal()" class="px-6 py-2.5 rounded-full bg-white/10 hover:bg-white/15 border border-white/10 text-white font-semibold text-xs transition-colors">
        Done
      </button>
    </div>

  </div>
</div>
