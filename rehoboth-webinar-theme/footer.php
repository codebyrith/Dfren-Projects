<?php
/**
 * The Footer for Rehoboth Webinar Theme
 *
 * @package Rehoboth_Webinar
 */
?>
<footer class="bg-white border-t border-slate-200 text-slate-600 py-6 px-4">
    <div class="max-w-6xl mx-auto space-y-3">
      
      <div class="flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-xl bg-white p-1 flex items-center justify-center border border-[#1F355D]/15 shadow-2xs flex-shrink-0">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
          </div>
          <div>
            <span class="font-serif text-sm font-bold text-[#1F355D] block leading-tight">REHOBOTH MINISTRIES</span>
            <span class="text-[9px] text-amber-600 uppercase tracking-wider font-bold block">Courts of Heaven Masterclass</span>
          </div>
        </div>

        <div class="text-xs space-y-0.5">
          <div>Email: <a href="mailto:info@rehobothministries.com" class="text-amber-700 hover:underline">info@rehobothministries.com</a></div>
          <div>WhatsApp: <a href="https://wa.me/919886914599" target="_blank" rel="noopener noreferrer" class="text-emerald-700 hover:underline font-bold">+91 98869 14599</a></div>
        </div>
      </div>

      <div class="pt-2 border-t border-slate-100 flex flex-wrap items-center justify-center gap-x-4 gap-y-1 text-xs">
        <button type="button" onclick="openPolicyModal('privacy')" class="hover:text-amber-700 transition cursor-pointer">Privacy Policy</button>
        <span class="text-slate-300">•</span>
        <button type="button" onclick="openPolicyModal('terms')" class="hover:text-amber-700 transition cursor-pointer">Terms &amp; Conditions</button>
        <span class="text-slate-300">•</span>
        <button type="button" onclick="openPolicyModal('refund')" class="hover:text-amber-700 transition cursor-pointer">Refund Policy (45-Min Guarantee)</button>
      </div>

      <div class="text-[10px] text-slate-400 text-center pt-1">
        © 2026 Rehoboth International Ministries. All rights reserved.
      </div>

    </div>
  </footer>

  <!-- ============================================================== -->
  <!-- MOBILE STICKY BOTTOM BAR -->
  <!-- ============================================================== -->
  <aside class="md:hidden fixed bottom-0 inset-x-0 z-40 bg-white/95 border-t border-slate-200 p-2.5 px-4 backdrop-blur-md shadow-2xl flex items-center justify-between gap-3">
    <div>
      <div class="flex items-baseline gap-1.5 leading-none">
        <span class="text-slate-400 line-through text-xs">₹999</span>
        <span class="text-xl font-black text-[#1F355D]">₹199</span>
      </div>
      <div class="text-[9px] text-emerald-700 font-bold mt-0.5">45-Min Money-Back Guarantee</div>
    </div>
    <button 
      type="button" 
      onclick="openRegistrationModal()"
      class="bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 text-slate-950 font-black text-xs px-4 py-2.5 rounded-xl shadow-md shadow-amber-500/20 flex items-center gap-1.5 active:scale-95 transition-transform whitespace-nowrap cursor-pointer"
    >
      <span>Book Pass Now →</span>
    </button>
  </aside>

  <!-- ============================================================== -->
  <!-- LIGHT REGISTRATION MODAL POPUP (OPENS ON CTA CLICK) -->
  <!-- ============================================================== -->
  <div id="registration-modal" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white border border-slate-200 rounded-3xl max-w-md w-full p-6 sm:p-7 shadow-2xl relative text-left animate-fade-in max-h-[90vh] overflow-y-auto">
      
      <button 
        type="button" 
        onclick="closeRegistrationModal()" 
        class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 text-xl font-bold p-1 cursor-pointer transition-colors"
        aria-label="Close"
      >
        ✕
      </button>

      <div class="space-y-1 mb-4">
        <span class="text-[9.5px] font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2 py-0.5 rounded">
          Step 1 of 1 · Instant Booking
        </span>
        <h3 class="text-lg font-extrabold text-[#1F355D]">Claim Your ₹199 Fellowship Pass</h3>
        <p class="text-xs text-slate-500">Enter your details to receive your private Zoom link on WhatsApp.</p>
      </div>

      <form id="registration-form" class="space-y-3" onsubmit="handleRegistrationSubmit(event)">
        
        <div>
          <label for="fullName" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
            Your Full Name <span class="text-amber-600">*</span>
          </label>
          <input 
            type="text" 
            id="fullName" 
            name="fullName" 
            required 
            placeholder="e.g. Bro. David Raj" 
            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-amber-500 focus:bg-white transition"
          />
        </div>

        <div>
          <label for="whatsapp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
            WhatsApp Phone Number <span class="text-amber-600">*</span>
          </label>
          <div class="flex">
            <span class="inline-flex items-center px-3 rounded-l-xl border border-r-0 border-slate-300 bg-slate-100 text-slate-700 text-xs font-bold">
              +91
            </span>
            <input 
              type="tel" 
              id="whatsapp" 
              name="whatsapp" 
              required 
              maxlength="10" 
              pattern="[0-9]{10}"
              placeholder="10-digit number" 
              class="w-full bg-slate-50 border border-slate-300 rounded-r-xl px-3.5 py-2 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-amber-500 focus:bg-white transition"
            />
          </div>
        </div>

        <div>
          <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
            Email Address <span class="text-amber-600">*</span>
          </label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            required 
            placeholder="yourname@gmail.com" 
            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-amber-500 focus:bg-white transition"
          />
        </div>

        <div>
          <label for="batchSlot" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
            Select Preferred Live Batch <span class="text-amber-600">*</span>
          </label>
          <select 
            id="batchSlot" 
            name="batchSlot" 
            required 
            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:bg-white transition cursor-pointer"
          >
            <option value="Friday Batch (7:30 PM IST)">🗓️ Friday Batch — 7:30 PM IST (Recommended)</option>
            <option value="Saturday Batch (7:30 PM IST)">🗓️ Saturday Batch — 7:30 PM IST</option>
            <option value="Sunday Batch (7:30 PM IST)">🗓️ Sunday Batch — 7:30 PM IST</option>
          </select>
        </div>

        <button 
          type="submit" 
          id="submit-btn" 
          class="w-full mt-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-sm py-3.5 px-4 rounded-xl shadow-lg shadow-amber-500/25 flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5 active:scale-95 cursor-pointer"
        >
          <span>Confirm &amp; Proceed (@ ₹199) →</span>
        </button>

      </form>

      <div class="mt-3 pt-2.5 border-t border-slate-100 text-center text-[10px] text-slate-500">
        🔒 100% Secure Checkout · 45-Minute Peace-Of-Mind Guarantee
      </div>

    </div>
  </div>

  <!-- ============================================================== -->
  <!-- REGISTRATION CONFIRMATION MODAL -->
  <!-- ============================================================== -->
  <div id="success-modal" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white border border-slate-200 rounded-3xl max-w-md w-full p-6 text-slate-900 text-center shadow-2xl space-y-4">
      <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-700 border border-emerald-200 flex items-center justify-center text-2xl mx-auto">
        ✓
      </div>
      <div>
        <h3 class="text-lg font-extrabold text-[#1F355D]">Registration Confirmed!</h3>
        <p class="text-xs text-slate-600 mt-1">
          Your seat has been reserved. Complete details have been prepared for your batch:
        </p>
      </div>

      <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 text-xs space-y-1 text-left">
        <div class="flex justify-between text-slate-600">
          <span>Batch Selected:</span>
          <span id="confirmed-batch" class="font-bold text-amber-700">Friday 7:30 PM IST</span>
        </div>
        <div class="flex justify-between text-slate-600">
          <span>Registered Under:</span>
          <span id="confirmed-contact" class="font-bold text-[#1F355D]">Attendee</span>
        </div>
      </div>

      <div class="space-y-2">
        <a 
          id="whatsapp-join-btn" 
          href="https://wa.me/919886914599" 
          target="_blank" 
          rel="noopener noreferrer" 
          class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3 px-4 rounded-xl flex items-center justify-center gap-2 text-sm shadow-md transition"
        >
          <span>💬 Join Official WhatsApp Community</span>
        </a>
        <button 
          onclick="closeSuccessModal()" 
          class="text-xs text-slate-500 hover:text-slate-800 pt-1 cursor-pointer block mx-auto"
        >
          Close Window
        </button>
      </div>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- POLICY MODAL -->
  <!-- ============================================================== -->
  <div id="policy-modal" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white border border-slate-200 rounded-2xl max-w-2xl w-full p-6 text-slate-900 relative shadow-2xl max-h-[85vh] overflow-y-auto">
      <button onclick="closePolicyModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 text-xl font-bold p-1 cursor-pointer">✕</button>
      <div id="policy-content" class="text-slate-600 text-xs sm:text-sm space-y-3"></div>
      <div class="mt-6 pt-4 border-t border-slate-100 text-right">
        <button onclick="closePolicyModal()" class="bg-[#1F355D] hover:bg-[#142340] text-white font-bold px-4 py-2 rounded-xl text-xs transition cursor-pointer">
          Close Window
        </button>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script>
    function openRegistrationModal() {
      const modal = document.getElementById('registration-modal');
      if (modal) {
        modal.classList.remove('hidden');
        setTimeout(() => {
          const input = document.getElementById('fullName');
          if (input) input.focus();
        }, 100);
      }
    }

    function closeRegistrationModal() {
      const modal = document.getElementById('registration-modal');
      if (modal) modal.classList.add('hidden');
    }

    function handleRegistrationSubmit(event) {
      event.preventDefault();
      
      const name = document.getElementById('fullName').value.trim();
      const phone = document.getElementById('whatsapp').value.trim();
      const email = document.getElementById('email').value.trim();
      const batch = document.getElementById('batchSlot').value;

      if (!name || !phone || !email) {
        alert('Please fill out all required fields.');
        return;
      }

      if (phone.length < 10) {
        alert('Please enter a valid 10-digit WhatsApp mobile number.');
        return;
      }

      const submitBtn = document.getElementById('submit-btn');
      const originalText = submitBtn.innerHTML;

      submitBtn.innerHTML = `
        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-slate-950 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span>Securing Your Seat...</span>
      `;
      submitBtn.disabled = true;

      setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        closeRegistrationModal();

        document.getElementById('confirmed-batch').textContent = batch;
        document.getElementById('confirmed-contact').textContent = `${name} (+91 ${phone})`;
        
        const waLink = `https://wa.me/919886914599?text=Hi%20Rehoboth%20Ministries,%20I%20have%20registered%20for%20the%20${encodeURIComponent(batch)}%20under%20${encodeURIComponent(name)}%20(+91${encodeURIComponent(phone)}).`;
        document.getElementById('whatsapp-join-btn').href = waLink;

        document.getElementById('success-modal').classList.remove('hidden');
      }, 700);
    }

    function closeSuccessModal() {
      document.getElementById('success-modal').classList.add('hidden');
    }

    const policyData = {
      privacy: {
        title: "Privacy Policy",
        body: `
          <h4 class="text-base font-bold text-[#1F355D] mb-2">Rehoboth Ministries International — Privacy Policy</h4>
          <p>We respect your privacy. We collect your Name, WhatsApp Phone Number, and Email Address solely to deliver your webinar Zoom link, reminder alerts, and downloadable PDF action blueprints.</p>
          <p class="mt-2">We never sell, rent, or trade your personal information. For questions, contact info@rehobothministries.com or WhatsApp +91 98869 14599.</p>
        `
      },
      terms: {
        title: "Terms & Conditions",
        body: `
          <h4 class="text-base font-bold text-[#1F355D] mb-2">Terms and Conditions</h4>
          <p>Each ₹199 pass grants full live Zoom access to your chosen evening batch. Household family members are permitted to participate together on one screen.</p>
          <p class="mt-2">This masterclass is a spiritual faith-enrichment and biblical teaching session.</p>
        `
      },
      refund: {
        title: "Refund Policy (45-Minute Guarantee)",
        body: `
          <h4 class="text-base font-bold text-emerald-800 mb-2">45-Minute Peace-Of-Mind Guarantee</h4>
          <p>Attend the live session for the first 45 minutes. If you honestly feel the teaching is not delivering biblical clarity and value for your spiritual walk, message our official WhatsApp helpline at <strong>+91 98869 14599</strong> before the 45-minute mark of your batch for a full 100% same-day refund.</p>
        `
      }
    };

    function openPolicyModal(type) {
      const data = policyData[type];
      if (!data) return;
      document.getElementById('policy-content').innerHTML = data.body;
      document.getElementById('policy-modal').classList.remove('hidden');
    }

    function closePolicyModal() {
      document.getElementById('policy-modal').classList.add('hidden');
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeRegistrationModal();
        closeSuccessModal();
        closePolicyModal();
      }
    });
  </script>

  <?php wp_footer(); ?>
</body>
</html>
