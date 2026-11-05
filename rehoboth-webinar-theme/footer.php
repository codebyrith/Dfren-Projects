<?php
/**
 * The Footer for Rehoboth Webinar Theme
 *
 * @package Rehoboth_Webinar
 */
?>
  <!-- ============================================================== -->
  <!-- 11. FOOTER (CLEAN, PROFESSIONAL, WORKING POLICY LINKS) -->
  <!-- ============================================================== -->
  <footer class="bg-slate-950 border-t border-slate-800 text-stone-400 py-10 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto space-y-6">
      
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-white p-1 flex items-center justify-center border border-amber-500/40 shadow-sm flex-shrink-0">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
          </div>
          <div>
            <span class="font-serif text-lg font-bold text-white block leading-tight">REHOBOTH MINISTRIES</span>
            <span class="text-[10px] text-amber-400 uppercase tracking-wider font-semibold block">Courts of Heaven Masterclass</span>
          </div>
        </div>

        <div class="text-xs space-y-1">
          <div>Email: <a href="mailto:info@rehobothministries.com" class="text-amber-400 hover:underline">info@rehobothministries.com</a></div>
          <div>WhatsApp Helpline: <a href="https://wa.me/919886914599" target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:underline font-semibold">+91 98869 14599</a></div>
        </div>
      </div>

      <div class="pt-4 border-t border-slate-800/80 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-xs">
        <button type="button" onclick="openPolicyModal('privacy')" class="hover:text-amber-400 transition cursor-pointer">Privacy Policy</button>
        <span class="text-slate-700">•</span>
        <button type="button" onclick="openPolicyModal('terms')" class="hover:text-amber-400 transition cursor-pointer">Terms &amp; Conditions</button>
        <span class="text-slate-700">•</span>
        <button type="button" onclick="openPolicyModal('refund')" class="hover:text-amber-400 transition cursor-pointer">Refund Policy (45-Min Guarantee)</button>
      </div>

      <div class="text-[11px] text-stone-400 text-center max-w-3xl mx-auto leading-relaxed space-y-2">
        <p>
          Disclaimer: This masterclass is a spiritual faith-enrichment and biblical education fellowship. Spiritual outcomes depend on individual faith, scripture application, and prayer discipline. We do not provide clinical psychiatric or financial investment advice.
        </p>
        <p class="text-stone-400">
          © 2026 Rehoboth International Ministries. All rights reserved.
        </p>
      </div>

    </div>
  </footer>

  <!-- ============================================================== -->
  <!-- 12. MOBILE STICKY BOTTOM BAR (CONVERTS ON MOBILE) -->
  <!-- ============================================================== -->
  <aside class="md:hidden fixed bottom-0 inset-x-0 z-40 bg-slate-950/95 border-t border-amber-500/40 p-2.5 px-4 backdrop-blur-md shadow-2xl flex items-center justify-between gap-3">
    <div>
      <div class="flex items-baseline gap-1.5 leading-none">
        <span class="text-stone-400 line-through text-xs">₹999</span>
        <span class="text-xl font-black text-amber-400">₹199</span>
      </div>
      <div class="text-[9.5px] text-emerald-400 font-bold mt-0.5">45-Min Money-Back Guarantee</div>
    </div>
    <a 
      href="#register" 
      onclick="scrollToForm(); return false;" 
      class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-xs px-4 py-2.5 rounded-xl shadow-lg shadow-amber-500/30 flex items-center gap-1.5 active:scale-95 transition-transform whitespace-nowrap"
    >
      <span>Book Pass Now →</span>
    </a>
  </aside>

  <!-- ============================================================== -->
  <!-- ESSENTIAL POLICY MODAL -->
  <!-- ============================================================== -->
  <div id="policy-modal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-slate-900 border-2 border-amber-500/80 rounded-2xl max-w-2xl w-full p-6 text-white relative shadow-2xl max-h-[85vh] overflow-y-auto">
      <button onclick="closePolicyModal()" class="absolute top-4 right-4 text-stone-400 hover:text-white text-xl font-bold p-1 cursor-pointer">✕</button>
      <div id="policy-content" class="text-stone-300 text-xs sm:text-sm space-y-3"></div>
      <div class="mt-6 pt-4 border-t border-slate-800 text-right">
        <button onclick="closePolicyModal()" class="bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-4 py-2 rounded-xl text-xs transition cursor-pointer">
          Close Window
        </button>
      </div>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- REGISTRATION CONFIRMATION MODAL -->
  <!-- ============================================================== -->
  <div id="success-modal" class="fixed inset-0 bg-slate-950/85 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-slate-900 border-2 border-emerald-500/80 rounded-3xl max-w-md w-full p-6 text-white text-center shadow-2xl space-y-4">
      <div class="w-14 h-14 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center text-3xl mx-auto">
        ✓
      </div>
      <div>
        <h3 class="text-xl font-extrabold text-white">Registration Confirmed!</h3>
        <p class="text-xs text-stone-300 mt-1">
          Your seat has been reserved. Complete details have been prepared for your batch:
        </p>
      </div>

      <div class="bg-slate-950 p-3.5 rounded-xl border border-slate-800 text-xs space-y-1.5 text-left">
        <div class="flex justify-between text-stone-300">
          <span>Batch Selected:</span>
          <span id="confirmed-batch" class="font-bold text-amber-400">Friday 7:30 PM IST</span>
        </div>
        <div class="flex justify-between text-stone-300">
          <span>Registered Under:</span>
          <span id="confirmed-contact" class="font-bold text-white">Attendee</span>
        </div>
      </div>

      <div class="space-y-2">
        <a 
          id="whatsapp-join-btn" 
          href="https://wa.me/919886914599" 
          target="_blank" 
          rel="noopener noreferrer" 
          class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3 px-4 rounded-xl flex items-center justify-center gap-2 text-sm shadow-lg transition"
        >
          <span>💬 Join Official WhatsApp Community</span>
        </a>
        <button 
          onclick="closeSuccessModal()" 
          class="text-xs text-stone-400 hover:text-white pt-1 cursor-pointer block mx-auto"
        >
          Close
        </button>
      </div>
    </div>
  </div>

  <!-- SCRIPTS & INTERACTION LOGIC -->
  <script>
    function scrollToForm() {
      const target = document.getElementById('register');
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setTimeout(() => {
          const input = document.getElementById('fullName');
          if (input) input.focus();
        }, 500);
      }
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
          <h4 class="text-base font-bold text-amber-400 mb-2">Rehoboth Ministries International — Privacy Policy</h4>
          <p>We respect your privacy and are committed to protecting the personal information you share with us. This policy details how we treat your data when registering for our spiritual webinars and fellowships.</p>
          <h5 class="font-bold text-white mt-3">1. Information We Collect</h5>
          <p>We collect your Name, WhatsApp Phone Number, and Email Address solely to send your webinar Zoom link, reminder alerts, and downloadable PDF worksheets.</p>
          <h5 class="font-bold text-white mt-3">2. Data Security &amp; Sharing</h5>
          <p>We never sell, rent, or trade your personal information to third parties. All communications are sent strictly on behalf of Rehoboth Ministries International.</p>
          <h5 class="font-bold text-white mt-3">3. Contact</h5>
          <p>For questions or data deletion requests, contact us at info@rehobothministries.com or WhatsApp +91 98869 14599.</p>
        `
      },
      terms: {
        title: "Terms & Conditions",
        body: `
          <h4 class="text-base font-bold text-amber-400 mb-2">Terms and Conditions of Participation</h4>
          <p>By registering for the Courts of Heaven live masterclass, you agree to the following terms:</p>
          <h5 class="font-bold text-white mt-3">1. Webinar Access</h5>
          <p>Each ₹199 pass grants full live Zoom access to your chosen evening batch. Household members are permitted to watch together on one screen.</p>
          <h5 class="font-bold text-white mt-3">2. Spiritual Education Fellowship</h5>
          <p>This masterclass is a spiritual faith-enrichment and biblical teaching session. It does not replace medical, psychiatric, or professional financial advice.</p>
          <h5 class="font-bold text-white mt-3">3. Code of Conduct</h5>
          <p>Attendees must maintain Christian decorum, mutual respect, and reverence during live prayer and Zoom chat interactions.</p>
        `
      },
      refund: {
        title: "Refund Policy (45-Minute Guarantee)",
        body: `
          <h4 class="text-base font-bold text-emerald-400 mb-2">45-Minute Peace-Of-Mind Refund Policy</h4>
          <p>We want you to join with complete confidence and peace of mind.</p>
          <h5 class="font-bold text-white mt-3">How the Guarantee Works:</h5>
          <p>Attend the live session for the first 45 minutes. If you honestly feel the teaching is not delivering biblical clarity and value for your spiritual walk, simply message our official WhatsApp helpline at <strong>+91 98869 14599</strong> before the 45-minute mark of your batch.</p>
          <p class="mt-2">Our team will verify your live attendance and process a full 100% refund of your ₹199 back to your original payment method on the very same day. No hassle, no friction.</p>
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
        closePolicyModal();
        closeSuccessModal();
      }
    });
  </script>

  <?php wp_footer(); ?>
</body>
</html>
