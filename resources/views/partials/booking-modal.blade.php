<div id="booking-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
  <div id="booking-modal-backdrop" class="absolute inset-0 bg-black/80 backdrop-blur-md"></div>

  <div class="relative w-full max-w-lg rounded-3xl p-6 sm:p-8 bg-[#091124] border border-cyan-500/40 shadow-[0_0_50px_rgba(56,197,210,0.25)] z-10 transition-transform duration-300 scale-95" id="booking-modal-card">
    
    <button id="booking-modal-close" class="absolute top-5 right-5 w-8 h-8 rounded-full bg-white/5 border border-white/10 text-slate-400 hover:text-white flex items-center justify-center hover:bg-white/10 transition-colors" aria-label="Close modal">
      <i data-lucide="x" class="w-4 h-4"></i>
    </button>

    <!-- Form View -->
    <div id="booking-form-view" class="space-y-5">
      <div class="space-y-1">
        <div class="inline-block text-[10px] font-bold uppercase tracking-widest text-cyan-400 bg-cyan-500/10 px-2.5 py-0.5 rounded-full border border-cyan-500/20">
          FREE STRATEGY SESSION
        </div>
        <h3 class="text-xl sm:text-2xl font-extrabold text-white">Confirm Your Growth Call</h3>
        <p class="text-xs text-slate-400">Lock in your dedicated 30-minute architecture session with our lead strategists.</p>
      </div>

      <!-- Selected Slot -->
      <div class="p-3 rounded-xl bg-cyan-950/50 border border-cyan-500/30 flex items-center justify-between text-xs">
        <div class="flex items-center gap-2.5 text-cyan-300">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span id="modal-slot-display" class="font-semibold">September 10, 2026 at 9:00 AM (EST)</span>
        </div>
        <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md border border-emerald-500/20">Slot Reserved</span>
      </div>

      <form id="booking-lead-form" class="space-y-3.5">
        <input type="hidden" name="booking_date" id="modal-input-date" value="September 10, 2026" />
        <input type="hidden" name="booking_time" id="modal-input-time" value="9:00 AM (EST)" />

        <div>
          <label class="block text-[11px] font-semibold text-slate-300 mb-1">Your Full Name *</label>
          <input type="text" name="name" required placeholder="e.g. Alex Morgan" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <label class="block text-[11px] font-semibold text-slate-300 mb-1">Work Email *</label>
            <input type="email" name="email" required placeholder="alex@company.com" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
          </div>

          <div>
            <label class="block text-[11px] font-semibold text-slate-300 mb-1">Phone / WhatsApp</label>
            <input type="tel" name="phone" placeholder="+1 (555) 000-0000" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all" />
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <label class="block text-[11px] font-semibold text-slate-300 mb-1">Monthly Revenue</label>
            <select name="monthly_revenue" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
              <option value="$10k - $30k">$10k – $30k / mo</option>
              <option value="$30k - $100k" selected>$30k – $100k / mo</option>
              <option value="$100k - $250k">$100k – $250k / mo</option>
              <option value="$250k+">$250k+ / mo</option>
            </select>
          </div>

          <div>
            <label class="block text-[11px] font-semibold text-slate-300 mb-1">Primary Growth Focus</label>
            <select name="service_interested" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-white/10 text-white text-xs focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
              <option value="Full Growth Engine" selected>All-In-One Growth Engine</option>
              <option value="Funnels & CRO">High-Converting Funnels</option>
              <option value="CRM & Automation">CRM & Marketing Automation</option>
              <option value="Paid Advertising">Paid Advertising (Meta & Google)</option>
              <option value="AI Speed-to-Lead">AI Speed-to-Lead Bot</option>
            </select>
          </div>
        </div>

        <button type="submit" id="modal-submit-btn" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-glow-cyan hover:scale-[1.02] active:scale-95 transition-all mt-2">
          <span>Lock In My Free Strategy Call</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>

        <p class="text-[10px] text-center text-slate-400">
          🔒 100% Confidential. No sales pitch, purely strategic growth roadmap.
        </p>
      </form>
    </div>

    <!-- Success View -->
    <div id="booking-success-view" class="hidden text-center py-6 space-y-4">
      <div class="w-16 h-16 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 flex items-center justify-center mx-auto shadow-[0_0_30px_rgba(16,185,129,0.3)]">
        <i data-lucide="check" class="w-8 h-8"></i>
      </div>
      <h3 class="text-2xl font-extrabold text-white">Call Confirmed!</h3>
      <p class="text-xs text-slate-300 max-w-sm mx-auto leading-relaxed">
        Your growth strategy session is confirmed. We have sent a calendar invite and preparation checklist to your email.
      </p>
      <button onclick="window.closeBookingModal()" class="px-6 py-2.5 rounded-full bg-white/10 hover:bg-white/15 border border-white/10 text-white font-semibold text-xs transition-colors">
        Done
      </button>
    </div>

  </div>
</div>
