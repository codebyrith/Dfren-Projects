<?php
/**
 * Template part for displaying webinar landing page content
 *
 * @package Rehoboth_Webinar
 */
?>
  <!-- ============================================================== -->
  <!-- 2. HERO SECTION (ABOVE THE FOLD ON MOBILE & DESKTOP - LIGHT) -->
  <!-- ============================================================== -->
  <section class="relative pt-6 sm:pt-12 pb-10 sm:pb-16 px-4 sm:px-6 bg-gradient-to-b from-white via-slate-50 to-white overflow-hidden">
    <div class="max-w-6xl mx-auto">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
        
        <!-- Left: Copy & Above-The-Fold Conversion Elements -->
        <div class="lg:col-span-7 text-left space-y-4 sm:space-y-5">
          
          <!-- Element 3: Social Proof Rating Badge -->
          <div class="inline-flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-white border border-slate-200 text-xs shadow-xs">
            <div class="flex -space-x-1.5 overflow-hidden">
              <span class="inline-block h-5 w-5 rounded-full ring-1 ring-white bg-amber-500 text-[10px] font-bold text-slate-950 flex items-center justify-center">S</span>
              <span class="inline-block h-5 w-5 rounded-full ring-1 ring-white bg-blue-600 text-[10px] font-bold text-white flex items-center justify-center">J</span>
              <span class="inline-block h-5 w-5 rounded-full ring-1 ring-white bg-emerald-600 text-[10px] font-bold text-white flex items-center justify-center">R</span>
            </div>
            <div class="flex items-center gap-1 font-bold">
              <span class="text-amber-500">★★★★★</span>
              <span class="text-slate-700">5,000+ Believers Mentored in 14 Countries</span>
            </div>
          </div>

          <!-- Element 1: Dream Outcome Headline -->
          <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-[1.18] text-slate-900">
            Finally hear God's voice clearly and break the family patterns holding you back, <span class="gold-gradient-text font-serif italic font-bold">in one 150-minute evening</span>
          </h1>

          <!-- Element 2: Sub-Headline -->
          <p class="text-sm sm:text-base text-slate-600 font-normal leading-relaxed">
            <strong class="text-slate-900">Tired of fasting and praying for years without a breakthrough?</strong> In this live Tanglish masterclass, Prophet Michael Rehoboth teaches the Courts of Heaven prayer blueprint step by step, prays over you live, and gives you a 7-day plan to keep the breakthrough going.
          </p>

          <!-- Clean Info Line -->
          <div class="inline-flex flex-wrap items-center gap-x-3 gap-y-1 py-1.5 px-3 rounded-lg bg-amber-50 border border-amber-200 text-xs text-amber-900 font-semibold">
            <span class="flex items-center gap-1 text-red-600 font-bold">🔴 Live on Zoom</span>
            <span class="text-amber-300">•</span>
            <span>Spoken in Tanglish (Tamil + English)</span>
            <span class="text-amber-300">•</span>
            <span>Fri / Sat / Sun 7:30 PM IST</span>
          </div>

          <!-- Element 4: Single Clear Primary CTA + WhatsApp Button -->
          <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
            <button 
              type="button"
              onclick="openRegistrationModal()" 
              class="inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-base sm:text-lg px-6 sm:px-8 py-3.5 rounded-xl shadow-lg shadow-amber-500/25 transition-all transform hover:-translate-y-0.5 active:scale-95 cursor-pointer"
            >
              <span>Claim My ₹199 Fellowship Pass</span>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>

            <a 
              href="https://wa.me/919886914599?text=Hi%20Rehoboth%20Ministries,%20I%20want%20to%20register%20for%20the%20Courts%20of%20Heaven%20webinar." 
              target="_blank" 
              rel="noopener noreferrer" 
              class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 border border-emerald-600 text-emerald-700 font-bold px-4 py-3 rounded-xl text-xs sm:text-sm shadow-xs transition-all"
            >
              <span>💬 Ask on WhatsApp</span>
            </a>
          </div>

          <!-- Element 5: Reduce Friction & FUDs Line -->
          <div class="text-xs text-slate-500 flex flex-wrap items-center gap-x-2 gap-y-1 pt-1">
            <span class="text-emerald-700 font-bold flex items-center gap-1">
              <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Attend 45 mins or get ₹199 back
            </span>
            <span class="text-slate-300">•</span>
            <span>Whole family on 1 pass</span>
            <span class="text-slate-300">•</span>
            <span>Recording included</span>
          </div>

        </div>

        <!-- Right: Prophet Michael Hero Portrait & Caption -->
        <div class="lg:col-span-5 flex justify-center">
          <div class="relative w-full max-w-sm sm:max-w-md">
            <div class="relative rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-xl">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/prophet-michael-hero.jpg'); ?>" 
                alt="Prophet Michael Rehoboth ministering live" 
                class="w-full h-auto object-cover object-top max-h-[380px] sm:max-h-[440px]" 
                loading="eager"
              />
              
              <!-- Bottom Caption Card -->
              <div class="bg-white p-4 border-t border-slate-100 text-left">
                <div class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-amber-100 text-amber-800 font-bold text-[10px] uppercase tracking-wider mb-1">
                  Mentor &amp; Teacher
                </div>
                <h3 class="text-base font-extrabold text-slate-900">Prophet Michael Rehoboth</h3>
                <p class="text-xs text-amber-700 font-semibold">
                  8+ Years Ministry · Mentored under Global Apostolic Prophets
                </p>
                <p class="text-[11px] text-slate-500 mt-1">
                  Ministers live over every registered participant with prophetic direction.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- STATS STRIP (LIGHT GRAY BG) -->
  <!-- ============================================================== -->
  <section class="bg-slate-50 border-y border-slate-200 py-6 px-4">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 text-center">
      <div class="p-2">
        <div class="text-2xl sm:text-3xl font-black text-amber-600">5,000+</div>
        <div class="text-xs text-slate-600 font-semibold mt-1">Believers Mentored</div>
      </div>
      <div class="p-2">
        <div class="text-2xl sm:text-3xl font-black text-amber-600">14+</div>
        <div class="text-xs text-slate-600 font-semibold mt-1">Countries Reached</div>
      </div>
      <div class="p-2">
        <div class="text-2xl sm:text-3xl font-black text-amber-600">8+ Years</div>
        <div class="text-xs text-slate-600 font-semibold mt-1">Prophetic Lineage</div>
      </div>
      <div class="p-2">
        <div class="text-2xl sm:text-3xl font-black text-amber-600">4.9 / 5</div>
        <div class="text-xs text-slate-600 font-semibold mt-1">Attendee Satisfaction</div>
      </div>
    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 3. PAIN POINT SECTION (PROBLEM, AGITATE, SOLVE - CLEAN LIGHT) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-white border-b border-slate-200">
    <div class="max-w-4xl mx-auto text-left space-y-8">
      
      <!-- Headline -->
      <div class="text-center sm:text-left space-y-2">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
          The Unspoken Struggle
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-snug">
          You've fasted, prayed and served for years. So why do the same battles keep coming back?
        </h2>
      </div>

      <!-- Problem ("Does this sound like you?") -->
      <div class="light-card rounded-2xl p-6 sm:p-7 space-y-4">
        <h3 class="text-base sm:text-lg font-bold text-slate-900 flex items-center gap-2">
          <span>❓ Does this sound like your spiritual walk?</span>
        </h3>
        <ul class="space-y-3 text-sm text-slate-700">
          <li class="flex items-start gap-3">
            <span class="text-red-500 text-lg leading-none mt-0.5 font-bold">✕</span>
            <span>You start strong in prayer on Monday and feel dry, drained, and exhausted by Thursday.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-red-500 text-lg leading-none mt-0.5 font-bold">✕</span>
            <span>You sleep through the night watches while the same attacks of fear and anxiety hit your home.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-red-500 text-lg leading-none mt-0.5 font-bold">✕</span>
            <span>You're fighting the exact same delays and financial patterns that troubled your parents.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-red-500 text-lg leading-none mt-0.5 font-bold">✕</span>
            <span>You serve in church or ministry, but the spiritual fire and prophetic gifts feel switched off.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-red-500 text-lg leading-none mt-0.5 font-bold">✕</span>
            <span>You cry out to God for direction on your career, marriage and family, but hear only silence.</span>
          </li>
        </ul>
        <p class="text-xs sm:text-sm text-amber-800 font-semibold pt-2 border-t border-slate-100">
          If you nodded at even one, you are not alone. And it is not a lack of faith.
        </p>
      </div>

      <!-- Agitate -->
      <div class="bg-amber-50 border-l-4 border-amber-500 rounded-r-2xl p-5 sm:p-6 space-y-1.5 text-slate-700 text-sm leading-relaxed shadow-xs">
        <h4 class="text-xs uppercase font-extrabold tracking-widest text-amber-800">What It Costs Every Year It Stays Unbroken:</h4>
        <p>
          Peace at home, joy in prayer, and confidence in your divine calling. Worst of all, your children inherit the exact same patterns. Fasting harder and praying louder has not changed it, because <strong>effort was never the missing piece</strong>.
        </p>
      </div>

      <!-- Solve: The Better Way -->
      <div class="light-card rounded-2xl p-6 sm:p-7 space-y-4">
        <h3 class="text-base sm:text-lg font-bold text-emerald-700 flex items-center gap-2">
          <span>✨ The Solution: The Courts of Heaven Protocol</span>
        </h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          The Bible reveals that God is not just our loving Father—He is also the <strong>Righteous Judge</strong> (Hebrews 12:23). When the enemy accuses your family line based on unresolved generational doors, emotional prayers alone cannot overturn legal accusations. 
        </p>
        <p class="text-sm text-slate-600 leading-relaxed">
          In this 150-minute live masterclass, Prophet Michael Rehoboth walks you through the step-by-step biblical protocol in clear Tanglish to present your case, revoke demonic claims by the Blood of Jesus, and establish lasting breakthrough.
        </p>

        <!-- Visual Comparison: The Old Way vs The Blueprint Way -->
        <div class="mt-6 pt-4 border-t border-slate-100">
          <h4 class="text-xs uppercase font-bold tracking-wider text-slate-500 mb-3 text-center sm:text-left">
            How Your Prayer Approach Changes:
          </h4>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-xs sm:text-sm">
            
            <!-- Old Way -->
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 space-y-2.5">
              <div class="font-bold text-red-700 flex items-center gap-1.5 pb-1 border-b border-red-200">
                <span>✕ The Exhausting Old Way</span>
              </div>
              <ul class="space-y-2 text-slate-600">
                <li class="flex items-start gap-2">
                  <span class="text-red-500 font-bold">✕</span>
                  <span>Fasting longer and hoping for relief without legal grounds</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-red-500 font-bold">✕</span>
                  <span>Praying irregularly whenever an emergency hits</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-red-500 font-bold">✕</span>
                  <span>Guessing whether an impression is God's voice or your own thoughts</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-red-500 font-bold">✕</span>
                  <span>Fighting each attack blindly as it comes</span>
                </li>
              </ul>
            </div>

            <!-- Blueprint Way -->
            <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 space-y-2.5">
              <div class="font-bold text-emerald-800 flex items-center gap-1.5 pb-1 border-b border-emerald-200">
                <span>✓ The Courts of Heaven Blueprint</span>
              </div>
              <ul class="space-y-2 text-slate-700">
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✓</span>
                  <span>Knowing the exact biblical grounds to present before the Judge</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✓</span>
                  <span>A structured 15-min Midnight &amp; 5 AM watch discipline</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✓</span>
                  <span>Clear scriptural steps to discern God's definitive yes and no</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✓</span>
                  <span>Permanently closing the legal doors the attacks enter through</span>
                </li>
              </ul>
            </div>

          </div>
        </div>

        <!-- Section CTA Button -->
        <div class="pt-4 text-center">
          <button 
            type="button"
            onclick="openRegistrationModal()" 
            class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black px-6 py-3 rounded-xl text-sm sm:text-base shadow-md transition-all cursor-pointer"
          >
            <span>Claim My ₹199 Fellowship Pass</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </button>
          <p class="text-xs text-slate-500 mt-2">Attend 45 minutes or get your ₹199 back on WhatsApp</p>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 4. SOCIAL PROOF SECTION (WALL OF LOVE - LIGHT THEME) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto space-y-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-2">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
          Wall of Love
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
          Join 5,000+ Tamil believers who broke family cycles and hear God clearly again
        </h2>
        <p class="text-sm text-slate-600">
          Real experiences from brothers, sisters, and pastors who attended the live 150-minute Courts of Heaven masterclass.
        </p>
      </div>

      <!-- 6 Reviews Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        
        <!-- Review 1 -->
        <div class="light-card rounded-2xl p-5 space-y-3 light-card-hover flex flex-col justify-between">
          <div class="space-y-2">
            <div class="flex items-center justify-between text-amber-500 text-xs">
              <span>⭐⭐⭐⭐⭐</span>
              <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
            </div>
            <h4 class="font-extrabold text-slate-900 text-sm leading-snug">
              "Reconciled after 4 years of family silence"
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
              "For four years there was constant tension and cold silence at home. During the live Courts of Heaven session, Prophet Michael taught us how to cancel unspoken legal accusations. That very week, reconciliation happened. Peace has returned to our home."
            </p>
          </div>
          <div class="pt-3 border-t border-slate-100 flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-full bg-amber-500 text-slate-950 font-bold text-xs flex items-center justify-center">S</div>
            <div>
              <div class="font-bold text-slate-900 text-xs">Bro. Stephen J.</div>
              <div class="text-[10px] text-slate-500">Chennai, Tamil Nadu</div>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="light-card rounded-2xl p-5 space-y-3 light-card-hover flex flex-col justify-between">
          <div class="space-y-2">
            <div class="flex items-center justify-between text-amber-500 text-xs">
              <span>⭐⭐⭐⭐⭐</span>
              <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
            </div>
            <h4 class="font-extrabold text-slate-900 text-sm leading-snug">
              "Prayer went from dry routine to daily encounter"
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
              "I used to force myself to pray 15 minutes and ran out of words. The midnight and 5 AM watch blueprint completely ignited my spirit man. Now prayer feels alive, personal, and full of the Holy Spirit's presence."
            </p>
          </div>
          <div class="pt-3 border-t border-slate-100 flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center">D</div>
            <div>
              <div class="font-bold text-slate-900 text-xs">Sis. Deborah K.</div>
              <div class="text-[10px] text-slate-500">Bengaluru, Karnataka</div>
            </div>
          </div>
        </div>

        <!-- Review 3 -->
        <div class="light-card rounded-2xl p-5 space-y-3 light-card-hover flex flex-col justify-between">
          <div class="space-y-2">
            <div class="flex items-center justify-between text-amber-500 text-xs">
              <span>⭐⭐⭐⭐⭐</span>
              <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
            </div>
            <h4 class="font-extrabold text-slate-900 text-sm leading-snug">
              "Understood the Courts protocol in simple Tanglish"
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
              "I had read theological books in English about spiritual warfare, but hearing it explained in clear, heartfelt Tanglish with biblical scriptures opened my spiritual eyes. My entire church prayer approach shifted."
            </p>
          </div>
          <div class="pt-3 border-t border-slate-100 flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-full bg-purple-600 text-white font-bold text-xs flex items-center justify-center">R</div>
            <div>
              <div class="font-bold text-slate-900 text-xs">Pastor Ruben P.</div>
              <div class="text-[10px] text-slate-500">Tirunelveli, Tamil Nadu</div>
            </div>
          </div>
        </div>

        <!-- Review 4 -->
        <div class="light-card rounded-2xl p-5 space-y-3 light-card-hover flex flex-col justify-between">
          <div class="space-y-2">
            <div class="flex items-center justify-between text-amber-500 text-xs">
              <span>⭐⭐⭐⭐⭐</span>
              <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
            </div>
            <h4 class="font-extrabold text-slate-900 text-sm leading-snug">
              "Finally sleeping peacefully without fear or nightmares"
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
              "For months I was waking up between 2 AM and 3 AM in deep panic and anxiety. Prophet Michael's live prayer over registered families broke that recurring attack. I now sleep through the night with complete Shalom peace."
            </p>
          </div>
          <div class="pt-3 border-t border-slate-100 flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-full bg-pink-600 text-white font-bold text-xs flex items-center justify-center">H</div>
            <div>
              <div class="font-bold text-slate-900 text-xs">Sis. Hannah M.</div>
              <div class="text-[10px] text-slate-500">Coimbatore, Tamil Nadu</div>
            </div>
          </div>
        </div>

        <!-- Review 5 -->
        <div class="light-card rounded-2xl p-5 space-y-3 light-card-hover flex flex-col justify-between">
          <div class="space-y-2">
            <div class="flex items-center justify-between text-amber-500 text-xs">
              <span>⭐⭐⭐⭐⭐</span>
              <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
            </div>
            <h4 class="font-extrabold text-slate-900 text-sm leading-snug">
              "Clear direction for my career after 8 months"
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
              "I was stuck between two major life decisions and felt spiritual silence. The discernment steps taught in the masterclass gave me exact clarity on what God was saying yes and no to. An immense burden was lifted."
            </p>
          </div>
          <div class="pt-3 border-t border-slate-100 flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-full bg-emerald-600 text-white font-bold text-xs flex items-center justify-center">J</div>
            <div>
              <div class="font-bold text-slate-900 text-xs">Bro. Joshua D.</div>
              <div class="text-[10px] text-slate-500">Madurai, Tamil Nadu</div>
            </div>
          </div>
        </div>

        <!-- Review 6 -->
        <div class="light-card rounded-2xl p-5 space-y-3 light-card-hover flex flex-col justify-between">
          <div class="space-y-2">
            <div class="flex items-center justify-between text-amber-500 text-xs">
              <span>⭐⭐⭐⭐⭐</span>
              <span class="text-[10px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
            </div>
            <h4 class="font-extrabold text-slate-900 text-sm leading-snug">
              "Our whole family now prays during the midnight watch"
            </h4>
            <p class="text-xs text-slate-600 leading-relaxed">
              "One ₹199 pass allowed our whole family to watch on our living room TV in Dubai. My teenage sons were deeply moved during the live personal impartation. It has united our spiritual altar like never before."
            </p>
          </div>
          <div class="pt-3 border-t border-slate-100 flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-full bg-indigo-600 text-white font-bold text-xs flex items-center justify-center">R</div>
            <div>
              <div class="font-bold text-slate-900 text-xs">Sis. Rachel G.</div>
              <div class="text-[10px] text-slate-500">Dubai, UAE</div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 5. WHAT WE'LL COVER IN 150 MINUTES (AGENDA & BONUSES - LIGHT) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-white border-b border-slate-200">
    <div class="max-w-4xl mx-auto space-y-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
          Clear Masterclass Breakdown
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
          What We'll Cover in 150 Minutes
        </h2>
        <p class="text-sm text-slate-600">
          A focused, practical evening designed for rapid spiritual breakthrough.
        </p>
      </div>

      <!-- Agenda Timeline Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5 sm:gap-4">
        
        <div class="light-card rounded-xl p-4 flex items-start gap-3 border-l-4 border-amber-500">
          <div class="font-mono text-xs font-bold text-amber-800 bg-amber-100 px-2 py-1 rounded">Part 1</div>
          <div>
            <h4 class="font-bold text-slate-900 text-sm">Why your prayers haven't broken through yet</h4>
            <p class="text-xs text-slate-600 mt-0.5">Understanding the legal dimension of spiritual warfare.</p>
          </div>
        </div>

        <div class="light-card rounded-xl p-4 flex items-start gap-3 border-l-4 border-amber-500">
          <div class="font-mono text-xs font-bold text-amber-800 bg-amber-100 px-2 py-1 rounded">Part 2</div>
          <div>
            <h4 class="font-bold text-slate-900 text-sm">The Courts of Heaven blueprint, step by step</h4>
            <p class="text-xs text-slate-600 mt-0.5">Exact scriptures &amp; protocols to present before the Judge.</p>
          </div>
        </div>

        <div class="light-card rounded-xl p-4 flex items-start gap-3 border-l-4 border-amber-500">
          <div class="font-mono text-xs font-bold text-amber-800 bg-amber-100 px-2 py-1 rounded">Part 3</div>
          <div>
            <h4 class="font-bold text-slate-900 text-sm">Setting up your Midnight &amp; 5 AM watch</h4>
            <p class="text-xs text-slate-600 mt-0.5">A 15-minute routine to guard your spiritual altar daily.</p>
          </div>
        </div>

        <div class="light-card rounded-xl p-4 flex items-start gap-3 border-l-4 border-amber-500">
          <div class="font-mono text-xs font-bold text-amber-800 bg-amber-100 px-2 py-1 rounded">Part 4</div>
          <div>
            <h4 class="font-bold text-slate-900 text-sm">How to recognise God's voice in daily decisions</h4>
            <p class="text-xs text-slate-600 mt-0.5">3 biblical checks for career, marriage, and family decisions.</p>
          </div>
        </div>

        <div class="light-card rounded-xl p-4 flex items-start gap-3 border-l-4 border-amber-500">
          <div class="font-mono text-xs font-bold text-amber-800 bg-amber-100 px-2 py-1 rounded">Part 5</div>
          <div>
            <h4 class="font-bold text-slate-900 text-sm">Live personal prayer, prophecy &amp; impartation</h4>
            <p class="text-xs text-slate-600 mt-0.5">Prophet Michael ministers live over registered families.</p>
          </div>
        </div>

        <div class="light-card rounded-xl p-4 flex items-start gap-3 border-l-4 border-amber-500">
          <div class="font-mono text-xs font-bold text-amber-800 bg-amber-100 px-2 py-1 rounded">Part 6</div>
          <div>
            <h4 class="font-bold text-slate-900 text-sm">Your 7-day consecration plan &amp; live Q&amp;A</h4>
            <p class="text-xs text-slate-600 mt-0.5">Clear roadmap to maintain and expand your spiritual victory.</p>
          </div>
        </div>

      </div>

      <!-- Bonus Stack Mockup Card -->
      <div class="bg-gradient-to-r from-amber-50 via-white to-amber-50 border-2 border-amber-300 rounded-2xl p-6 sm:p-7 shadow-xs space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-amber-200 pb-3">
          <div>
            <span class="text-[10px] font-black uppercase tracking-widest text-amber-800 bg-amber-200 px-2 py-0.5 rounded">
              Included Free With Your ₹199 Pass
            </span>
            <h3 class="text-base sm:text-lg font-extrabold text-slate-900 mt-1">2 Downloadable PDF Action Blueprints (Value ₹1,499)</h3>
          </div>
          <span class="text-sm font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full border border-emerald-300 self-start sm:self-auto">
            100% Free With Registration
          </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm">
          <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-start gap-3">
            <span class="text-2xl">📘</span>
            <div>
              <div class="font-bold text-slate-900">Courts of Heaven Prayer Blueprint (PDF)</div>
              <div class="text-xs text-slate-600 mt-1">Written prayer decrees, scriptures &amp; step-by-step templates to pray over your home.</div>
            </div>
          </div>
          <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-start gap-3">
            <span class="text-2xl">📙</span>
            <div>
              <div class="font-bold text-slate-900">7-Day Consecration Guide (PDF)</div>
              <div class="text-xs text-slate-600 mt-1">Day-by-day scripture readings, midnight watch declarations, and fasting guide.</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 6. MEET PROPHET MICHAEL REHOBOTH (LIGHT CARD) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-slate-50 border-b border-slate-200">
    <div class="max-w-4xl mx-auto">
      <div class="light-card rounded-2xl p-6 sm:p-8 shadow-xs">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-center">
          
          <div class="md:col-span-5 flex justify-center">
            <div class="relative w-48 h-48 sm:w-56 sm:h-56 rounded-2xl overflow-hidden border border-slate-200 shadow-md">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/prophet-michael.jpg'); ?>" 
                alt="Prophet Michael Rehoboth" 
                class="w-full h-full object-cover object-top"
                loading="lazy"
              />
            </div>
          </div>

          <div class="md:col-span-7 space-y-3 text-left">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
              Meet Your Mentor
            </span>
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-slate-900 tracking-tight">
              Prophet Michael Rehoboth
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Prophet Michael has ministered across <strong class="text-slate-900">14+ nations</strong> for over 8 years, teaching believers how to move from emotional frustration to spiritual authority. 
            </p>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Trained and mentored under respected global prophetic voices including <strong class="text-slate-900">Prophet Angel Uebert</strong> and <strong class="text-slate-900">Prophet Jerome Fernando</strong>, his ministry focuses on authentic prophetic accuracy, deliverance, and raising mature believers anchored in Christ.
            </p>
            <div class="pt-2 flex flex-wrap gap-2 text-[11px] font-semibold text-slate-700">
              <span class="bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-xs">✓ 8+ Years Ministry</span>
              <span class="bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-xs">✓ 5,000+ Believers Mentored</span>
              <span class="bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-xs">✓ Tanglish Teaching</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 7. HOW IT WORKS (3 SIMPLE STEPS - LIGHT) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-white border-b border-slate-200">
    <div class="max-w-5xl mx-auto space-y-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
          Register in 30 Seconds · Join From Any Phone or TV
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
          Your breakthrough evening, booked in 3 simple steps
        </h2>
      </div>

      <!-- 3 Steps Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        
        <!-- Step 1 -->
        <div class="light-card rounded-2xl p-6 space-y-3 relative light-card-hover text-left">
          <div class="w-10 h-10 rounded-xl bg-amber-500 text-slate-950 font-black text-lg flex items-center justify-center shadow-xs">
            1
          </div>
          <h3 class="font-extrabold text-slate-900 text-base">Book your ₹199 pass &amp; pick your batch</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Click any button on this page to enter your name, WhatsApp number, and select your evening batch (Friday, Saturday, or Sunday 7:30 PM).
          </p>
        </div>

        <!-- Step 2 -->
        <div class="light-card rounded-2xl p-6 space-y-3 relative light-card-hover text-left">
          <div class="w-10 h-10 rounded-xl bg-amber-500 text-slate-950 font-black text-lg flex items-center justify-center shadow-xs">
            2
          </div>
          <h3 class="font-extrabold text-slate-900 text-base">Get your Zoom link on WhatsApp</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Receive your private Zoom access link directly on WhatsApp and email within 2 minutes. We also send helpful reminder alerts 1 hour and 15 minutes before the session.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="light-card rounded-2xl p-6 space-y-3 relative light-card-hover text-left">
          <div class="w-10 h-10 rounded-xl bg-amber-500 text-slate-950 font-black text-lg flex items-center justify-center shadow-xs">
            3
          </div>
          <h3 class="font-extrabold text-slate-900 text-base">Experience breakthrough &amp; download PDFs</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Join the live masterclass from the comfort of your home, participate in live prayer, and download your Courts of Heaven and 7-day consecration PDFs.
          </p>
        </div>

      </div>

      <!-- Step CTA -->
      <div class="text-center pt-2">
        <button 
          type="button"
          onclick="openRegistrationModal()" 
          class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black px-6 py-3 rounded-xl text-sm shadow-md transition-all cursor-pointer"
        >
          <span>Claim My ₹199 Fellowship Pass</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </button>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 8. FAQ & REDUCING FUDS (LIGHT ACCORDIONS) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-slate-50 border-b border-slate-200">
    <div class="max-w-4xl mx-auto space-y-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
          Frequently Asked Questions
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
          Got Questions? We Have Answers.
        </h2>
        <p class="text-xs sm:text-sm text-slate-600">
          Everything you need to know about joining, language, batches, and our 45-minute guarantee.
        </p>
      </div>

      <!-- Guarantee Box -->
      <div class="bg-white border-2 border-emerald-400 rounded-2xl p-5 sm:p-6 shadow-xs flex flex-col sm:flex-row items-center gap-4 text-left">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 font-black text-2xl flex items-center justify-center flex-shrink-0">
          🛡️
        </div>
        <div class="space-y-1">
          <h3 class="font-extrabold text-slate-900 text-base">The 45-Minute Same-Day Refund Guarantee</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Attend the first 45 minutes of the live masterclass. If you honestly feel it is not bringing clarity and biblical value to your spiritual life, simply message our WhatsApp team at +91 98869 14599 before the 45-minute mark and get your ₹199 refunded back the very same day.
          </p>
        </div>
      </div>

      <!-- FAQ Accordions -->
      <div class="space-y-3 text-left">
        
        <details class="group bg-white border border-slate-200 rounded-xl p-4 transition-colors open:border-amber-400 shadow-xs">
          <summary class="font-bold text-slate-900 text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Will I be asked to pay or donate more during the session?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold text-lg">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2.5 leading-relaxed border-t border-slate-100 pt-2.5">
            No. Your ₹199 pass covers the entire 150-minute teaching, live prayer, Q&amp;A, and both downloadable PDF blueprints. Near the very end of the masterclass, Prophet Michael will briefly share details of an optional advanced mentorship programme for those wanting year-round discipleship, but there is zero obligation and no hidden fee. The masterclass is 100% complete on its own.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-4 transition-colors open:border-amber-400 shadow-xs">
          <summary class="font-bold text-slate-900 text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>What if I miss the live session? Which batch should I choose?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold text-lg">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2.5 leading-relaxed border-t border-slate-100 pt-2.5">
            Choose the day that best fits your schedule: Friday, Saturday, or Sunday at 7:30 PM IST. If an emergency occurs and you cannot attend live, a recording of the session will be provided so you don't miss out on the teaching and prayer declarations.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-4 transition-colors open:border-amber-400 shadow-xs">
          <summary class="font-bold text-slate-900 text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Do I need a laptop or the Zoom app?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold text-lg">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2.5 leading-relaxed border-t border-slate-100 pt-2.5">
            No laptop is needed! You can join smoothly using any smartphone, tablet, iPad, laptop, or cast it to your living room Smart TV. Simply install the free Zoom app or join directly through your web browser with the link sent to your WhatsApp.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-4 transition-colors open:border-amber-400 shadow-xs">
          <summary class="font-bold text-slate-900 text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Can I share my personal or family situation for prayer?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold text-lg">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2.5 leading-relaxed border-t border-slate-100 pt-2.5">
            Yes! During the live session, there is dedicated time where Prophet Michael ministers prophetic prayer over registered participants. You can submit prayer points in the live Zoom chat or through WhatsApp helpline.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-4 transition-colors open:border-amber-400 shadow-xs">
          <summary class="font-bold text-slate-900 text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Is my WhatsApp number safe? Will I get spam?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold text-lg">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2.5 leading-relaxed border-t border-slate-100 pt-2.5">
            100% safe. We respect your privacy completely. Your WhatsApp number is strictly used to deliver your Zoom invitation, reminder alerts, and the downloadable PDF blueprints. We never share or sell your details.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-4 transition-colors open:border-amber-400 shadow-xs">
          <summary class="font-bold text-slate-900 text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>I'm a new believer, or from CSI / Catholic / Pentecostal. Can I attend?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold text-lg">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2.5 leading-relaxed border-t border-slate-100 pt-2.5">
            Absolutely! Believers from all church backgrounds—CSI, Pentecostal, Baptist, Catholic, Independent, and newer seekers—are warmly welcomed. The teaching is 100% rooted in the Holy Bible and focused on intimacy with Jesus Christ and walking in the power of the Holy Spirit.
          </div>
        </details>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 9. THE CLOSER SECTION (CLEAN MINI-HERO ON WHITE/LIGHT GRAY) -->
  <!-- ============================================================== -->
  <section class="py-14 sm:py-20 px-4 sm:px-6 bg-gradient-to-b from-white via-amber-50/40 to-slate-50 text-slate-900 border-b border-slate-200">
    <div class="max-w-4xl mx-auto text-center space-y-6">
      
      <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
        Final Step To Freedom
      </span>

      <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight max-w-2xl mx-auto">
        Don't spend another year struggling with the same spiritual frustrations.
      </h2>

      <p class="text-sm sm:text-base text-slate-600 max-w-xl mx-auto leading-relaxed">
        <strong class="text-slate-900">Next batch: This Friday, Saturday &amp; Sunday at 7:30 PM IST.</strong> Interactive virtual seats are limited to ensure Prophet Michael can minister personal prayer and prophetic direction over attendees.
      </p>

      <!-- Offer Stack Summary Card (Clean White) -->
      <div class="max-w-md mx-auto light-card rounded-2xl p-6 shadow-md text-left space-y-3">
        <div class="flex justify-between items-center text-xs text-slate-600">
          <span>Live 150-Min Tanglish Masterclass</span>
          <span class="font-mono text-slate-400">₹999</span>
        </div>
        <div class="flex justify-between items-center text-xs text-slate-600">
          <span>Courts of Heaven Prayer Blueprint (PDF)</span>
          <span class="font-bold text-emerald-700">INCLUDED</span>
        </div>
        <div class="flex justify-between items-center text-xs text-slate-600">
          <span>7-Day Consecration Guide (PDF)</span>
          <span class="font-bold text-emerald-700">INCLUDED</span>
        </div>
        <div class="flex justify-between items-center text-xs text-slate-600">
          <span>Live Prophetic Impartation &amp; Prayer</span>
          <span class="font-bold text-emerald-700">INCLUDED</span>
        </div>
        <div class="flex justify-between items-center text-xs text-slate-600">
          <span>Full Session Recording Access</span>
          <span class="font-bold text-emerald-700">INCLUDED</span>
        </div>

        <div class="pt-3 border-t border-slate-100 flex justify-between items-baseline">
          <div>
            <span class="text-[11px] text-slate-400">Total Value: <del class="text-slate-400">₹2,498</del></span>
            <div class="text-xs text-amber-700 font-bold">Fellowship Pass:</div>
          </div>
          <div class="text-right">
            <span class="text-3xl font-black text-amber-600">₹199</span>
            <span class="text-[10px] text-slate-500 block">Taxes included · One-time fee</span>
          </div>
        </div>

        <button 
          type="button" 
          onclick="openRegistrationModal()"
          class="w-full mt-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-base py-3.5 px-4 rounded-xl shadow-lg shadow-amber-500/25 flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5 active:scale-95 cursor-pointer"
        >
          <span>Claim My ₹199 Fellowship Pass →</span>
        </button>

        <div class="text-center pt-2 text-[11px] text-slate-500 space-y-1">
          <div class="text-emerald-700 font-bold flex items-center justify-center gap-1">
            <span>🛡️ 45-Minute Same-Day Money-Back Guarantee</span>
          </div>
          <div>UPI · GPay · PhonePe · Paytm · RuPay · Cards Accepted</div>
        </div>
      </div>

    </div>
  </section>
