<?php
/**
 * The Footer for Rehoboth Webinar Theme
 *
 * @package Rehoboth_Webinar
 */
?>

  <!-- ============================================================== -->
  <!-- 10. MOBILE STICKY BOTTOM BAR (RESPONSIVE ONLY) -->
  <!-- ============================================================== -->
  <aside aria-label="Mobile Registration Action Bar" class="fixed bottom-0 inset-x-0 bg-slate-900/95 backdrop-blur-md border-t border-amber-500/40 p-3 z-40 md:hidden shadow-2xl flex items-center justify-between gap-3">
    <div class="flex flex-col">
      <div class="flex items-center gap-1 text-[11px] font-bold text-amber-400">
        <span>⭐⭐⭐⭐⭐</span>
        <span class="text-white">4.9/5 Rating</span>
      </div>
      <div class="flex items-center gap-1.5 mt-0.5">
        <span class="text-[10px] uppercase font-bold text-red-400 bg-red-950/60 px-1 rounded border border-red-500/20">80% OFF</span>
        <span class="text-xs text-stone-400 line-through">₹999</span>
        <span class="text-sm font-black text-amber-400 leading-none">₹199 Only</span>
      </div>
    </div>

    <a href="#register" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black text-xs px-4 py-2.5 rounded-lg shadow-lg shadow-amber-500/30 flex items-center gap-1.5 active:scale-95 transition-transform animate-pulse">
      <span>Claim Seat Now - ₹199</span>
      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
    </a>
  </aside>

  <!-- ============================================================== -->
  <!-- 12. CLEAN FOOTER -->
  <!-- ============================================================== -->
  <footer class="bg-slate-950 text-stone-400 text-xs py-12 px-4 sm:px-6 border-t border-slate-800">
    <div class="max-w-7xl mx-auto space-y-8">
      
      <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-slate-900">
        <!-- Logo Brand -->
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-xl bg-white p-1 flex items-center justify-center border border-amber-500/30 shadow-md overflow-hidden flex-shrink-0">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth International Ministries" class="w-full h-full object-contain" />
          </div>
          <div>
            <span class="font-serif text-xl font-bold tracking-wide text-white block leading-none">REHOBOTH</span>
            <span class="text-[10px] tracking-widest text-amber-400 font-semibold uppercase">International Ministries</span>
          </div>
        </div>

        <!-- Support Info -->
        <div class="flex flex-wrap items-center gap-6 text-xs text-stone-300">
          <div>Email: <a href="mailto:inforahaboth@gmail.com" class="text-amber-400 hover:underline">inforahaboth@gmail.com</a></div>
          <div>WhatsApp Helpline: <a href="https://wa.me/919886914599" target="_blank" rel="noopener noreferrer" class="text-amber-400 hover:underline">+91 98869 14599</a></div>
        </div>
      </div>

      <!-- Social Media Community Links Bar -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 py-4 px-5 rounded-2xl bg-slate-900/80 border border-slate-800/80">
        <div class="flex items-center gap-2">
          <span class="text-amber-400 font-bold text-xs uppercase tracking-wider">Connect With Us:</span>
          <span class="text-stone-400 text-xs hidden sm:inline">Follow Rehoboth Ministries on Social Media</span>
        </div>
        <div class="flex items-center gap-3">
          <!-- YouTube -->
          <a href="https://youtube.com/@rehobothministries6292?si=fMtpem7LgbWgaAFo" target="_blank" rel="noopener noreferrer" aria-label="YouTube Channel" class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-red-600 text-stone-300 hover:text-white flex items-center justify-center border border-slate-700/80 hover:border-red-500 transition-all transform hover:-translate-y-0.5 shadow-sm" title="YouTube">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
          <!-- Instagram -->
          <a href="https://www.instagram.com/rehobothministries_official?exln=bW9yaDE3Nm15MG45&amp;utm_source=qr" target="_blank" rel="noopener noreferrer" aria-label="Instagram Page" class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-gradient-to-tr hover:from-amber-500 hover:via-pink-500 hover:to-purple-600 text-stone-300 hover:text-white flex items-center justify-center border border-slate-700/80 hover:border-pink-500 transition-all transform hover:-translate-y-0.5 shadow-sm" title="Instagram">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <!-- Facebook -->
          <a href="https://www.facebook.com/share/1MQWcuXZZm/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook Page" class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-blue-600 text-stone-300 hover:text-white flex items-center justify-center border border-slate-700/80 hover:border-blue-500 transition-all transform hover:-translate-y-0.5 shadow-sm" title="Facebook">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <!-- WhatsApp Channel -->
          <a href="https://wa.me/919886914599" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Helpline &amp; Community" class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-emerald-600 text-stone-300 hover:text-white flex items-center justify-center border border-slate-700/80 hover:border-emerald-500 transition-all transform hover:-translate-y-0.5 shadow-sm" title="WhatsApp">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.303-.058.116-.087.188-.173.289l-.26.303c-.087.087-.178.181-.077.355.101.173.449.742.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.043.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/></svg>
          </a>
          <!-- Telegram -->
          <a href="https://t.me/+919886914599" target="_blank" rel="noopener noreferrer" aria-label="Telegram Channel" class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-sky-500 text-stone-300 hover:text-white flex items-center justify-center border border-slate-700/80 hover:border-sky-400 transition-all transform hover:-translate-y-0.5 shadow-sm" title="Telegram">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.194 1.006.131.832.942z"/></svg>
          </a>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-[11px] text-stone-500">
        <p>© <?php echo date('Y'); ?> Rehoboth Ministries International. All rights reserved.</p>
        <div class="flex gap-4">
          <a href="#about-webinar" class="hover:text-stone-300">Privacy Policy</a>
          <span>•</span>
          <a href="#about-webinar" class="hover:text-stone-300">Terms of Service</a>
          <span>•</span>
          <a href="#about-webinar" class="hover:text-stone-300">Refund & Cancellation Policy</a>
        </div>
      </div>

      <p class="text-[10px] text-stone-600 text-center leading-relaxed max-w-4xl mx-auto">
        Disclaimer: This webinar is designed for spiritual instruction, biblical prayer, and personal encouragement. All teachings adhere strictly to the Holy Bible. Results and spiritual experiences are personal journeys of faith.
      </p>

    </div>
  </footer>

  <!-- ============================================================== -->
  <!-- INTERACTIVE SUCCESS / CHECKOUT MODAL -->
  <!-- ============================================================== -->
  <div id="success-modal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-slate-900 border-2 border-amber-500 rounded-3xl max-w-md w-full p-6 sm:p-8 text-center text-white relative shadow-2xl animate-fade-in">
      
      <button onclick="closeSuccessModal()" class="absolute top-4 right-4 text-stone-400 hover:text-white text-xl font-bold">✕</button>

      <!-- Official Logo Icon -->
      <div class="w-16 h-16 rounded-2xl bg-white p-1.5 border-2 border-amber-500 flex items-center justify-center mx-auto mb-4 shadow-xl overflow-hidden">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
      </div>

      <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-1">Registration Confirmed</span>
      <h3 class="text-2xl font-bold text-white mb-2">Praise the Lord! Your Seat is Reserved</h3>
      
      <p class="text-xs text-stone-300 mb-6">
        Welcome aboard! A confirmation email and WhatsApp message with your Zoom credentials have been queued for:
        <span id="confirmed-contact" class="font-bold text-white block mt-1 text-sm bg-slate-800 p-2 rounded-lg border border-slate-700"></span>
      </p>

      <div class="bg-slate-800/80 rounded-xl p-4 text-left text-xs space-y-2 mb-6 border border-slate-700">
        <div class="flex justify-between">
          <span class="text-stone-400">Batch Selected:</span>
          <span id="confirmed-batch" class="font-bold text-amber-400"></span>
        </div>
        <div class="flex justify-between">
          <span class="text-stone-400">Pass Amount:</span>
          <span class="font-bold text-emerald-400">₹199 (Paid)</span>
        </div>
        <div class="flex justify-between">
          <span class="text-stone-400">Webinar Language:</span>
          <span class="font-bold text-white">Tanglish (Tamil + English)</span>
        </div>
      </div>

      <div class="space-y-3">
        <a id="whatsapp-join-btn" href="#" target="_blank" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-xl flex items-center justify-center gap-2 text-sm shadow-lg shadow-emerald-500/20 transition">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.303-.058.116-.087.188-.173.289l-.26.303c-.087.087-.178.181-.077.355.101.173.449.742.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.043.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/></svg>
          <span>Join Official WhatsApp Group</span>
        </a>

        <button onclick="closeSuccessModal()" class="w-full bg-slate-800 hover:bg-slate-700 text-stone-300 font-semibold py-2.5 px-4 rounded-xl text-xs transition">
          Return to Page
        </button>
      </div>

    </div>
  </div>

  <!-- ============================================================== -->
  <!-- FLOATING LIVE REGISTRATION TOAST (CRO SOCIAL PROOF) -->
  <!-- ============================================================== -->
  <div id="live-toast" class="fixed bottom-20 left-4 z-40 bg-slate-900/95 border border-amber-500/40 text-white p-3 rounded-xl shadow-2xl flex items-center gap-3 max-w-xs transition-all duration-500 transform translate-y-10 opacity-0 pointer-events-none">
    <div class="w-9 h-9 rounded-lg bg-amber-500 text-slate-950 flex items-center justify-center font-bold text-sm flex-shrink-0">
      ⚡
    </div>
    <div class="text-[11px] leading-tight">
      <p class="font-bold text-white"><span id="toast-name">Brother David</span> just registered!</p>
      <p class="text-stone-400 text-[10px] mt-0.5"><span id="toast-city">Chennai</span> • 4 minutes ago</p>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- JAVASCRIPT LOGIC -->
  <!-- ============================================================== -->
  <script>
    // 1. FAQ Accordion Toggle Logic
    function toggleFaq(button) {
      const content = button.nextElementSibling;
      const icon = button.querySelector('.faq-icon');
      const isExpanded = button.getAttribute('aria-expanded') === 'true';

      // Close all other accordions for clean single-open behavior
      document.querySelectorAll('.faq-trigger').forEach(btn => {
        if (btn !== button) {
          btn.setAttribute('aria-expanded', 'false');
          btn.nextElementSibling.classList.add('hidden');
          const otherIcon = btn.querySelector('.faq-icon');
          if (otherIcon) {
            otherIcon.textContent = '+';
            otherIcon.classList.remove('rotate-45');
          }
        }
      });

      if (isExpanded) {
        button.setAttribute('aria-expanded', 'false');
        content.classList.add('hidden');
        icon.textContent = '+';
        icon.classList.remove('rotate-45');
      } else {
        button.setAttribute('aria-expanded', 'true');
        content.classList.remove('hidden');
        icon.textContent = '−';
        icon.classList.add('rotate-45');
      }
    }

    // 2. Countdown Micro-Timer Logic
    function startCountdown() {
      // Countdown for 2 hours, 47 minutes, 18 seconds from page load
      let totalSeconds = 2 * 3600 + 47 * 60 + 18;
      const timerEl = document.getElementById('banner-timer');

      setInterval(() => {
        if (totalSeconds > 0) {
          totalSeconds--;
        } else {
          totalSeconds = 3 * 3600 + 15 * 60; // reset loop
        }

        const hrs = Math.floor(totalSeconds / 3600);
        const mins = Math.floor((totalSeconds % 3600) / 60);
        const secs = totalSeconds % 60;

        const formatted = `${String(hrs).padStart(2, '0')}h ${String(mins).padStart(2, '0')}m ${String(secs).padStart(2, '0')}s`;
        if (timerEl) {
          timerEl.textContent = formatted;
        }
      }, 1000);
    }
    startCountdown();

    // 3. Form Submission & Checkout Modal Handling
    function handleRegistrationSubmit(event) {
      event.preventDefault();
      
      const submitBtn = document.getElementById('submit-btn');
      const originalText = submitBtn.innerHTML;
      
      // Visual loading state
      submitBtn.innerHTML = `
        <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-slate-950" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span>Securing Your Seat...</span>
      `;
      submitBtn.disabled = true;

      const name = document.getElementById('fullName').value;
      const whatsapp = document.getElementById('whatsapp').value;
      const email = document.getElementById('email').value;
      const batch = document.getElementById('batchSlot').value;

      setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;

        // Populate and open success modal
        document.getElementById('confirmed-contact').textContent = `${name} • +91 ${whatsapp} • ${email}`;
        document.getElementById('confirmed-batch').textContent = batch;
        
        const waLink = `https://wa.me/919886914599?text=Hi%20Rehoboth%20Ministries,%20I%20have%20registered%20for%20the%20${encodeURIComponent(batch)}%20under%20${encodeURIComponent(name)}.`;
        document.getElementById('whatsapp-join-btn').href = waLink;

        document.getElementById('success-modal').classList.remove('hidden');

        // Reduce spots counter
        const seatsLeftBanner = document.getElementById('seats-left-banner');
        const spotsCheckout = document.getElementById('spots-checkout');
        if (seatsLeftBanner) seatsLeftBanner.textContent = "Only 5 Seats Remaining";
        if (spotsCheckout) spotsCheckout.textContent = "5 spots";

      }, 800);
    }

    function closeSuccessModal() {
      document.getElementById('success-modal').classList.add('hidden');
    }

    // 4. Live Social Proof Notification Popups
    const mockRegistrations = [
      { name: "Sister Priya", city: "Coimbatore", time: "2 minutes ago" },
      { name: "Brother Joshua", city: "Bengaluru", time: "5 minutes ago" },
      { name: "Sister Sharon", city: "Tirunelveli", time: "1 minute ago" },
      { name: "Pastor Paulraj", city: "Madurai", time: "6 minutes ago" },
      { name: "Brother Daniel", city: "Chennai", time: "Just now" }
    ];

    let toastIndex = 0;
    function triggerLiveToast() {
      const toast = document.getElementById('live-toast');
      const nameEl = document.getElementById('toast-name');
      const cityEl = document.getElementById('toast-city');

      if (!toast) return;

      const item = mockRegistrations[toastIndex % mockRegistrations.length];
      nameEl.textContent = item.name;
      cityEl.textContent = `${item.city} • ${item.time}`;

      // Slide in
      toast.classList.remove('translate-y-10', 'opacity-0', 'pointer-events-none');
      toast.classList.add('translate-y-0', 'opacity-100');

      // Hide after 4 seconds
      setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-10', 'opacity-0', 'pointer-events-none');
      }, 4000);

      toastIndex++;
    }

    // Trigger periodically
    setTimeout(triggerLiveToast, 3500);
    setInterval(triggerLiveToast, 14000);
  </script>

  <?php wp_footer(); ?>
</body>
</html>
