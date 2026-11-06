<?php
/**
 * Template part for displaying webinar landing page content
 *
 * @package Rehoboth_Webinar
 */
?>
<section class="relative pt-4 sm:pt-10 pb-8 sm:pb-14 px-4 sm:px-6 bg-gradient-to-b from-[#EBF2FA] via-[#F4F8FC] to-[#EBF2FA] border-b border-[#1F355D]/15 overflow-hidden">
    <div class="max-w-6xl mx-auto">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10 items-center">
        
        <!-- Left Column: Copy & Core Action (Fits Above-The-Fold on Mobile) -->
        <div class="lg:col-span-7 text-left space-y-3 sm:space-y-4">
          
          <!-- Element 3: Social Proof Rating Pill -->
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-[#1F355D]/15 text-[11px] sm:text-xs shadow-xs">
            <span class="text-amber-500 font-bold">★★★★★</span>
            <span class="text-[#1F355D] font-bold">4.9/5 · 5,000+ Believers Mentored</span>
          </div>

          <!-- Element 1: Dream Outcome Headline (Clear & Powerful) -->
          <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-[1.18] text-[#1F355D]">
            Finally hear God's voice clearly and break the family patterns holding you back
          </h1>

          <!-- Element 2: Sub-Headline (Crisp 1-Sentence How It Works) -->
          <p class="text-xs sm:text-base text-slate-600 font-normal leading-relaxed">
            Learn the step-by-step <strong class="text-[#1F355D]">Courts of Heaven</strong> prayer blueprint in a live 150-minute Tanglish masterclass with Prophet Michael Rehoboth to revoke legal accusations and walk in lasting breakthrough.
          </p>

          <!-- Clean Info Pill (Spoken in Tanglish) -->
          <div class="inline-flex items-center gap-2 py-1 px-3 rounded-lg bg-amber-50 border border-amber-200 text-xs text-amber-900 font-bold">
            <span class="text-red-600">🔴 Live on Zoom</span>
            <span class="text-amber-400">•</span>
            <span>Spoken in Tanglish (Tamil + English)</span>
          </div>

          <!-- Element 4: Single Clear Primary CTA + WhatsApp Action -->
          <div class="pt-1 flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5">
            <button 
              type="button"
              onclick="openRegistrationModal()" 
              class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-base sm:text-lg px-6 sm:px-8 py-3.5 rounded-xl shadow-lg shadow-amber-500/25 transition-all transform hover:-translate-y-0.5 active:scale-95 cursor-pointer"
            >
              <span>Reserve Your Masterclass Seat</span>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>

            <a 
              href="https://wa.me/919886914599?text=Hi%20Rehoboth%20Ministries,%20I%20want%20to%20register%20for%20the%20Courts%20of%20Heaven%20webinar." 
              target="_blank" 
              rel="noopener noreferrer" 
              class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-emerald-600 text-emerald-700 font-bold px-4 py-3 rounded-xl text-xs sm:text-sm shadow-xs transition"
            >
              <span>💬 Ask on WhatsApp</span>
            </a>
          </div>

          <!-- Element 5: Reduce Friction & FUDs Line -->
          <div class="text-[11px] sm:text-xs text-slate-500 flex flex-wrap items-center gap-x-2 gap-y-1">
            <span class="text-emerald-700 font-bold flex items-center gap-1">
              <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              45-Min Money-Back Guarantee
            </span>
            <span class="text-slate-300">•</span>
            <span>Nominal ₹199 seat reservation</span>
            <span class="text-slate-300">•</span>
            <span>Covers whole household</span>
            <span class="text-slate-300">•</span>
            <span>Recording included</span>
          </div>

        </div>

        <!-- Right Column: Prophet Michael Hero Portrait -->
        <div class="lg:col-span-5 flex justify-center mt-3 lg:mt-0">
          <div class="relative w-full max-w-xs sm:max-w-sm">
            <div class="relative rounded-2xl overflow-hidden border border-[#1F355D]/20 bg-white shadow-xl">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/prophet-michael-hero.jpg'); ?>" 
                alt="Prophet Michael Rehoboth ministering live" 
                class="w-full h-auto object-cover object-top max-h-[300px] sm:max-h-[380px]" 
                loading="eager"
              />
              <div class="bg-white p-3.5 border-t border-slate-100 text-left">
                <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-amber-100 text-amber-800 font-bold text-[9px] uppercase tracking-wider mb-1">
                  Mentor &amp; Teacher
                </div>
                <h3 class="text-sm font-extrabold text-[#1F355D]">Prophet Michael Rehoboth</h3>
                <p class="text-[11px] text-amber-700 font-semibold">
                  8+ Years Ministry · Mentored under Global Apostolic Prophets
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- TRUST STATS STRIP (THEME NAVY ACCENTS) -->
  <!-- ============================================================== -->
  <section class="bg-white border-b border-slate-200/80 py-5 px-4">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
      <div class="p-1.5">
        <div class="text-xl sm:text-2xl font-black text-[#1F355D]">5,000+</div>
        <div class="text-[11px] sm:text-xs text-slate-600 font-semibold">Believers Mentored</div>
      </div>
      <div class="p-1.5">
        <div class="text-xl sm:text-2xl font-black text-[#1F355D]">14+</div>
        <div class="text-[11px] sm:text-xs text-slate-600 font-semibold">Countries Reached</div>
      </div>
      <div class="p-1.5">
        <div class="text-xl sm:text-2xl font-black text-[#1F355D]">8+ Years</div>
        <div class="text-[11px] sm:text-xs text-slate-600 font-semibold">Prophetic Lineage</div>
      </div>
      <div class="p-1.5">
        <div class="text-xl sm:text-2xl font-black text-[#1F355D]">4.9 / 5</div>
        <div class="text-[11px] sm:text-xs text-slate-600 font-semibold">Attendee Rating</div>
      </div>
    </div>
  </section>

  <!-- ============================================================== -->
  <!-- BLOCK 2: PAIN POINT SECTION (VISUAL IMAGE CARDS - THE GOOD BUG STYLE) -->
  <!-- ============================================================== -->
  <section class="py-10 sm:py-16 px-4 sm:px-6 bg-[#F4F7FB] border-b border-slate-200">
    <div class="max-w-6xl mx-auto space-y-8 sm:space-y-10">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#1F355D] tracking-tight">
          Do you struggle with these recurring spiritual roadblocks?
        </h2>
        <p class="text-xs sm:text-sm text-slate-600">
          Fasting harder has not broken the cycle because emotional prayer cannot overturn legal spiritual accusations.
        </p>
      </div>

      <!-- 4 Visual Problem Cards with Real Photos -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
        
        <!-- Struggle Card 1: Spiritual Dryness -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col justify-between">
          <div>
            <div class="relative h-44 w-full overflow-hidden bg-slate-100">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/struggle-spiritual-dryness.jpg'); ?>" 
                alt="Believer seeking spiritual renewal amidst prayer dryness" 
                class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500" 
                loading="lazy"
              />
              <span class="absolute top-2.5 left-2.5 bg-red-600 text-white text-[9.5px] font-extrabold uppercase px-2 py-0.5 rounded-full shadow-md">
                Symptom 1
              </span>
            </div>
            <div class="p-4 space-y-1 text-left">
              <h3 class="font-extrabold text-[#1F355D] text-sm">
                Dry &amp; Exhausted Prayer
              </h3>
              <p class="text-[11px] text-slate-600 leading-relaxed">
                Starting strong on Monday but feeling dry, drained, and out of words by Thursday. Prayer feels like a heavy routine.
              </p>
            </div>
          </div>
          <div class="p-4 pt-0 text-left">
            <div class="bg-amber-50 rounded-lg p-2 border border-amber-200 text-[10px] text-amber-900 font-semibold flex items-center gap-1.5">
              <span>🔥</span>
              <span>Rebuild daily altar fire</span>
            </div>
          </div>
        </div>

        <!-- Struggle Card 2: Midnight Anxiety & Attacks -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col justify-between">
          <div>
            <div class="relative h-44 w-full overflow-hidden bg-slate-100">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/struggle-night-anxiety.jpg'); ?>" 
                alt="Bedside prayer turning midnight anxiety into peace" 
                class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500" 
                loading="lazy"
              />
              <span class="absolute top-2.5 left-2.5 bg-red-600 text-white text-[9.5px] font-extrabold uppercase px-2 py-0.5 rounded-full shadow-md">
                Symptom 2
              </span>
            </div>
            <div class="p-4 space-y-1 text-left">
              <h3 class="font-extrabold text-[#1F355D] text-sm">
                Midnight Attacks &amp; Fear
              </h3>
              <p class="text-[11px] text-slate-600 leading-relaxed">
                Sleeping through midnight watches while recurring panic, bad dreams, and worry disturb your home peace.
              </p>
            </div>
          </div>
          <div class="p-4 pt-0 text-left">
            <div class="bg-amber-50 rounded-lg p-2 border border-amber-200 text-[10px] text-amber-900 font-semibold flex items-center gap-1.5">
              <span>🛡️</span>
              <span>Guard the 15-min night watch</span>
            </div>
          </div>
        </div>

        <!-- Struggle Card 3: Generational Delays -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col justify-between">
          <div>
            <div class="relative h-44 w-full overflow-hidden bg-slate-100">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/struggle-generational-chains.jpg'); ?>" 
                alt="Generational chains breaking and shattering into divine light" 
                class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500" 
                loading="lazy"
              />
              <span class="absolute top-2.5 left-2.5 bg-red-600 text-white text-[9.5px] font-extrabold uppercase px-2 py-0.5 rounded-full shadow-md">
                Symptom 3
              </span>
            </div>
            <div class="p-4 space-y-1 text-left">
              <h3 class="font-extrabold text-[#1F355D] text-sm">
                Generational Delays
              </h3>
              <p class="text-[11px] text-slate-600 leading-relaxed">
                Fighting the same financial patterns, marriage delays, and stagnation that troubled your parents.
              </p>
            </div>
          </div>
          <div class="p-4 pt-0 text-left">
            <div class="bg-emerald-50 rounded-lg p-2 border border-emerald-200 text-[10px] text-emerald-900 font-semibold flex items-center gap-1.5">
              <span>⛓️</span>
              <span>Revoke legal ancestral doors</span>
            </div>
          </div>
        </div>

        <!-- Struggle Card 4: Silence in Key Decisions -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col justify-between">
          <div>
            <div class="relative h-44 w-full overflow-hidden bg-slate-100">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/struggle-divine-direction.jpg'); ?>" 
                alt="Seeking divine direction in career and family with open Bible" 
                class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500" 
                loading="lazy"
              />
              <span class="absolute top-2.5 left-2.5 bg-red-600 text-white text-[9.5px] font-extrabold uppercase px-2 py-0.5 rounded-full shadow-md">
                Symptom 4
              </span>
            </div>
            <div class="p-4 space-y-1 text-left">
              <h3 class="font-extrabold text-[#1F355D] text-sm">
                Silence in Key Decisions
              </h3>
              <p class="text-[11px] text-slate-600 leading-relaxed">
                Crying out for clarity on career, marriage, and family, but second-guessing if impressions are God's voice.
              </p>
            </div>
          </div>
          <div class="p-4 pt-0 text-left">
            <div class="bg-blue-50 rounded-lg p-2 border border-blue-200 text-[10px] text-blue-900 font-semibold flex items-center gap-1.5">
              <span>🕊️</span>
              <span>3 biblical discernment checks</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Root Cause Solution Showcase: The Courts of Heaven Protocol (Visual Hero Card) -->
      <div class="brand-card rounded-3xl p-5 sm:p-8 border-2 border-amber-300 bg-gradient-to-b from-white via-[#F8FAFD] to-white space-y-6">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
          
          <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-[#1F355D]/15 shadow-md">
            <img 
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/solution-courts-of-heaven.jpg'); ?>" 
              alt="The Courts of Heaven Protocol and Celestial Courtroom" 
              class="w-full h-auto object-cover max-h-72" 
              loading="lazy"
            />
          </div>

          <div class="lg:col-span-7 space-y-3 text-left">
            <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full border border-emerald-300">
              The Root Cause Solution
            </span>
            <h3 class="text-xl sm:text-2xl font-extrabold text-[#1F355D]">
              The Courts of Heaven: Move from Battlefield to Courtroom
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              The Bible reveals that God is not only our loving Father—He is also the <strong>Righteous Judge of the Universe</strong> (Hebrews 12:23). When accusations stand against your family line, emotional shouting into the air cannot overturn legal claims.
            </p>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              In this live masterclass, Prophet Michael Rehoboth guides you step by step to present your case before the Judge, apply the Blood of the Lamb, silence demonic claims, and secure lasting decrees of freedom.
            </p>
          </div>

        </div>

        <!-- Side-by-Side Visual Comparison -->
        <div class="pt-3 border-t border-slate-200 grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
          
          <!-- Old Way -->
          <div class="bg-red-50 border border-red-200 rounded-xl p-4 space-y-2 text-left">
            <div class="font-bold text-red-800 text-xs flex items-center gap-1.5 pb-1 border-b border-red-200">
              <span class="w-5 h-5 rounded-full bg-red-200 text-red-800 flex items-center justify-center font-bold">✕</span>
              <span>The Exhausting Old Way</span>
            </div>
            <ul class="space-y-1.5 text-slate-600">
              <li class="flex items-start gap-1.5">
                <span class="text-red-500 font-bold">✕</span>
                <span>Fasting endlessly hoping for relief without legal grounds</span>
              </li>
              <li class="flex items-start gap-1.5">
                <span class="text-red-500 font-bold">✕</span>
                <span>Praying irregularly only when emergencies hit</span>
              </li>
              <li class="flex items-start gap-1.5">
                <span class="text-red-500 font-bold">✕</span>
                <span>Fighting symptoms while legal doors stay cracked open</span>
              </li>
            </ul>
          </div>

          <!-- Blueprint Way -->
          <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 space-y-2 text-left">
            <div class="font-bold text-emerald-900 text-xs flex items-center gap-1.5 pb-1 border-b border-emerald-200">
              <span class="w-5 h-5 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center font-bold">✓</span>
              <span>The Courts of Heaven Protocol</span>
            </div>
            <ul class="space-y-1.5 text-slate-700">
              <li class="flex items-start gap-1.5">
                <span class="text-emerald-700 font-bold">✓</span>
                <span>Presenting exact scriptures &amp; decrees before the Righteous Judge</span>
              </li>
              <li class="flex items-start gap-1.5">
                <span class="text-emerald-700 font-bold">✓</span>
                <span>A disciplined 15-minute Midnight &amp; 5 AM watch routine</span>
              </li>
              <li class="flex items-start gap-1.5">
                <span class="text-emerald-700 font-bold">✓</span>
                <span>Permanently revoking generational accusations by the Blood of Jesus</span>
              </li>
            </ul>
          </div>

        </div>

        <!-- Section CTA -->
        <div class="pt-2 text-center">
          <button 
            type="button"
            onclick="openRegistrationModal()" 
            class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 text-slate-950 font-black px-6 py-3 rounded-xl text-sm shadow-md transition-all transform hover:-translate-y-0.5 active:scale-95 cursor-pointer"
          >
            <span>Break the Cycle — Join the Live Masterclass →</span>
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- BLOCK 3: SOCIAL PROOF (REVIEWS IN PHOTO FORMAT - LIKE THE GOOD BUG) -->
  <!-- ============================================================== -->
  <section class="py-10 sm:py-16 px-4 sm:px-6 bg-white border-b border-[#1F355D]/10">
    <div class="max-w-6xl mx-auto space-y-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <span class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
          Real Stories, Verified Results
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#1F355D] tracking-tight">
          Join 5,000+ Believers Who Broke Generational Cycles
        </h2>
        <p class="text-xs sm:text-sm text-slate-600">
          Real experiences from brothers, sisters, and pastors who attended the Courts of Heaven masterclass.
        </p>
      </div>

      <!-- 4 Photo-Based Visual Review Cards (DTC Format) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6">
        
        <!-- Review 1: Chennai Family (Reconciliation) -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col sm:flex-row bg-white border border-slate-200 shadow-sm">
          <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
            <img 
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/review-chennai-family.jpg'); ?>" 
              alt="Bro. Stephen and family in Chennai after reconciliation" 
              class="w-full h-full object-cover" 
              loading="lazy"
            />
          </div>
          <div class="p-4 sm:p-5 flex flex-col justify-between space-y-2.5 text-left">
            <div>
              <div class="flex items-center justify-between text-amber-500 text-xs mb-1">
                <span>⭐⭐⭐⭐⭐</span>
                <span class="text-[9.5px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
              </div>
              <h4 class="font-bold text-[#1F355D] text-sm leading-snug">"Peace returned to our home"</h4>
              <p class="text-xs text-slate-600 mt-1">Four years of family silence broke after learning how to cancel unspoken accusations.</p>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500">
              <span class="font-bold text-[#1F355D]">Bro. Stephen J.</span>
              <span>Chennai, Tamil Nadu</span>
            </div>
          </div>
        </div>

        <!-- Review 2: Sis. Hannah (Peaceful Sleep & Freedom from Nightmares) -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col sm:flex-row bg-white border border-slate-200 shadow-sm">
          <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
            <img 
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/review-peaceful-sleep.jpg'); ?>" 
              alt="Sis. Hannah smiling in morning peace" 
              class="w-full h-full object-cover" 
              loading="lazy"
            />
          </div>
          <div class="p-4 sm:p-5 flex flex-col justify-between space-y-2.5 text-left">
            <div>
              <div class="flex items-center justify-between text-amber-500 text-xs mb-1">
                <span>⭐⭐⭐⭐⭐</span>
                <span class="text-[9.5px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
              </div>
              <h4 class="font-bold text-[#1F355D] text-sm leading-snug">"Sleeping peacefully without panic"</h4>
              <p class="text-xs text-slate-600 mt-1">Midnight panic attacks broke completely during live prayer. Now sleeping peacefully every night.</p>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500">
              <span class="font-bold text-[#1F355D]">Sis. Hannah M.</span>
              <span>Coimbatore, Tamil Nadu</span>
            </div>
          </div>
        </div>

        <!-- Review 3: Pastor Ruben (Tanglish Revelation) -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col sm:flex-row bg-white border border-slate-200 shadow-sm">
          <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
            <img 
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/review-pastor-tanglish.jpg'); ?>" 
              alt="Pastor Ruben holding Bible" 
              class="w-full h-full object-cover" 
              loading="lazy"
            />
          </div>
          <div class="p-4 sm:p-5 flex flex-col justify-between space-y-2.5 text-left">
            <div>
              <div class="flex items-center justify-between text-amber-500 text-xs mb-1">
                <span>⭐⭐⭐⭐⭐</span>
                <span class="text-[9.5px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Pastor</span>
              </div>
              <h4 class="font-bold text-[#1F355D] text-sm leading-snug">"Clear, practical Tanglish teaching"</h4>
              <p class="text-xs text-slate-600 mt-1">Spiritual warfare explained so practically in Tanglish. It shifted our family and church prayer altar.</p>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500">
              <span class="font-bold text-[#1F355D]">Pastor Ruben P.</span>
              <span>Tirunelveli, Tamil Nadu</span>
            </div>
          </div>
        </div>

        <!-- Review 4: Dubai Family (Unified Altar) -->
        <div class="brand-card rounded-2xl overflow-hidden flex flex-col sm:flex-row bg-white border border-slate-200 shadow-sm">
          <div class="sm:w-2/5 h-48 sm:h-auto overflow-hidden bg-slate-100 flex-shrink-0">
            <img 
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/review-dubai-family.jpg'); ?>" 
              alt="Sis. Rachel and family watching webinar in Dubai" 
              class="w-full h-full object-cover" 
              loading="lazy"
            />
          </div>
          <div class="p-4 sm:p-5 flex flex-col justify-between space-y-2.5 text-left">
            <div>
              <div class="flex items-center justify-between text-amber-500 text-xs mb-1">
                <span>⭐⭐⭐⭐⭐</span>
                <span class="text-[9.5px] text-emerald-700 font-bold bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Attendee</span>
              </div>
              <h4 class="font-bold text-[#1F355D] text-sm leading-snug">"United our entire family in prayer"</h4>
              <p class="text-xs text-slate-600 mt-1">Watched together on our TV in Dubai. My son was deeply touched, uniting our family altar.</p>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500">
              <span class="font-bold text-[#1F355D]">Sis. Rachel G.</span>
              <span>Dubai, UAE</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- BLOCK 4: VALUE PROPOSITIONS (VISUAL INGREDIENTS/PILLARS FLOW) -->
  <!-- ============================================================== -->
  <section class="py-10 sm:py-16 px-4 sm:px-6 bg-[#EBF2FA] border-b border-slate-200">
    <div class="max-w-6xl mx-auto space-y-10">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#1F355D] tracking-tight">
          What You Will Master in 150 Minutes
        </h2>
        <p class="text-xs sm:text-sm text-slate-600">
          Four practical spiritual pillars designed for immediate application and lasting breakthrough.
        </p>
      </div>

      <!-- 4 Visual Value Prop Cards (Alternating Image & Content Flow) -->
      <div class="space-y-6 sm:space-y-8">
        
        <!-- Pillar 1 -->
        <div class="brand-card rounded-2xl p-5 sm:p-6 grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
          <div class="md:col-span-5 rounded-xl overflow-hidden shadow-sm h-48 sm:h-52">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/courts-of-heaven-protocol.jpg'); ?>" alt="Courts of Heaven Protocol" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <div class="md:col-span-7 space-y-2 text-left">
            <span class="text-[9.5px] font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded">Pillar 1</span>
            <h3 class="text-base sm:text-lg font-extrabold text-[#1F355D]">The Courts of Heaven Legal Blueprint</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Understand the legal dimension of spiritual warfare. Learn the exact biblical scriptures and protocol to enter God's court, revoke generational accusations, and enforce the verdict of the Blood of Jesus over your home.
            </p>
            <div class="text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5 pt-1">
              <span>✓ Scripture-backed prayer declarations for every family member</span>
            </div>
          </div>
        </div>

        <!-- Pillar 2 -->
        <div class="brand-card rounded-2xl p-5 sm:p-6 grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
          <div class="md:col-span-5 md:order-2 rounded-xl overflow-hidden shadow-sm h-48 sm:h-52">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/spiritual-dryness-to-fire.jpg'); ?>" alt="Midnight and 5 AM watch prayer altar" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <div class="md:col-span-7 md:order-1 space-y-2 text-left">
            <span class="text-[9.5px] font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded">Pillar 2</span>
            <h3 class="text-base sm:text-lg font-extrabold text-[#1F355D]">The 15-Minute Midnight &amp; 5 AM Watch Routine</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Discover how to guard your spiritual atmosphere with an effortless 15-minute daily prayer watch. Transform dry prayer routines into an altar burning with fresh Holy Spirit fire that shields your children and career.
            </p>
            <div class="text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5 pt-1">
              <span>✓ Printable prayer watch guide with declaration cards</span>
            </div>
          </div>
        </div>

        <!-- Pillar 3 -->
        <div class="brand-card rounded-2xl p-5 sm:p-6 grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
          <div class="md:col-span-5 rounded-xl overflow-hidden shadow-sm h-48 sm:h-52">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/hearing-gods-voice.jpg'); ?>" alt="Discerning God's voice through scripture" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <div class="md:col-span-7 space-y-2 text-left">
            <span class="text-[9.5px] font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded">Pillar 3</span>
            <h3 class="text-base sm:text-lg font-extrabold text-[#1F355D]">Recognizing God's Voice in Daily Decisions</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Master 3 biblical discernment checks to distinguish between God's clear voice, enemy distraction, and human emotion. Never remain in paralyzing confusion about career, marriage, or financial choices.
            </p>
            <div class="text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5 pt-1">
              <span>✓ Step-by-step decision discernment framework</span>
            </div>
          </div>
        </div>

        <!-- Pillar 4 -->
        <div class="brand-card rounded-2xl p-5 sm:p-6 grid grid-cols-1 md:grid-cols-12 gap-5 items-center">
          <div class="md:col-span-5 md:order-2 rounded-xl overflow-hidden shadow-sm h-48 sm:h-52">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/generational-breakthrough.jpg'); ?>" alt="Generational breakthrough" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <div class="md:col-span-7 md:order-1 space-y-2 text-left">
            <span class="text-[9.5px] font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded">Pillar 4</span>
            <h3 class="text-base sm:text-lg font-extrabold text-[#1F355D]">Live Personal Impartation &amp; 7-Day Consecration Plan</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Prophet Michael Rehoboth ministers live over registered participants with prophetic direction. Receive a 7-day consecration roadmap to maintain and expand your spiritual victory after the webinar.
            </p>
            <div class="text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5 pt-1">
              <span>✓ Live Zoom Q&amp;A and personal prayer ministry</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Bonus Stack Mockup Card (Like Course Bonuses in Guide) -->
      <div class="bg-gradient-to-r from-amber-50 via-white to-amber-50 border-2 border-amber-300 rounded-2xl p-5 sm:p-7 shadow-xs space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-amber-200 pb-3 text-left">
          <div>
            <span class="text-[9px] font-black uppercase tracking-widest text-amber-800 bg-amber-200 px-2 py-0.5 rounded">
              Included 100% Free With Masterclass Registration
            </span>
            <h3 class="text-base sm:text-lg font-extrabold text-[#1F355D] mt-1">2 Downloadable PDF Action Blueprints (Value ₹1,499)</h3>
          </div>
          <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full border border-emerald-300 self-start sm:self-auto">
            Free With Registration
          </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-left">
          <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-2xs flex items-start gap-3">
            <span class="text-2xl">📘</span>
            <div>
              <div class="font-bold text-[#1F355D]">Courts of Heaven Prayer Blueprint (PDF)</div>
              <div class="text-[11px] text-slate-500 mt-0.5">Written decrees, scriptures &amp; step-by-step templates to pray over your family.</div>
            </div>
          </div>
          <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-2xs flex items-start gap-3">
            <span class="text-2xl">📙</span>
            <div>
              <div class="font-bold text-[#1F355D]">7-Day Consecration Guide (PDF)</div>
              <div class="text-[11px] text-slate-500 mt-0.5">Day-by-day scripture readings, midnight declarations, and fasting guide.</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- HOW IT WORKS (BENEFIT-LED 3 STEPS) -->
  <!-- ============================================================== -->
  <section class="py-10 sm:py-16 px-4 sm:px-6 bg-white border-b border-[#1F355D]/10">
    <div class="max-w-5xl mx-auto space-y-8">
      
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1F355D] tracking-tight">
          Your breakthrough evening in 3 simple steps
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-5">
        
        <div class="brand-card rounded-2xl p-5 space-y-2 text-left">
          <div class="w-8 h-8 rounded-lg bg-amber-500 text-slate-950 font-black text-sm flex items-center justify-center shadow-xs">
            1
          </div>
          <h3 class="font-extrabold text-[#1F355D] text-sm">Reserve your seat online</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Click any button to enter your name, WhatsApp number, and select your preferred live evening batch.
          </p>
        </div>

        <div class="brand-card rounded-2xl p-5 space-y-2 text-left">
          <div class="w-8 h-8 rounded-lg bg-amber-500 text-slate-950 font-black text-sm flex items-center justify-center shadow-xs">
            2
          </div>
          <h3 class="font-extrabold text-[#1F355D] text-sm">Get Zoom link on WhatsApp</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Receive your private Zoom access link on WhatsApp and email with helpful batch reminder alerts.
          </p>
        </div>

        <div class="brand-card rounded-2xl p-5 space-y-2 text-left">
          <div class="w-8 h-8 rounded-lg bg-amber-500 text-slate-950 font-black text-sm flex items-center justify-center shadow-xs">
            3
          </div>
          <h3 class="font-extrabold text-[#1F355D] text-sm">Experience breakthrough</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Join from any phone or TV, participate in live prayer, and download your free PDF action blueprints.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- BLOCK 5: REDUCE FUDS (45-MIN GUARANTEE & FAQS) -->
  <!-- ============================================================== -->
  <section class="py-10 sm:py-16 px-4 sm:px-6 bg-[#F4F7FB] border-b border-slate-200">
    <div class="max-w-4xl mx-auto space-y-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-2">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1F355D] tracking-tight">
          Frequently Asked Questions
        </h2>
      </div>

      <!-- FAQ Accordions -->
      <div class="space-y-2.5 text-left">
        
        <details class="group bg-white border border-slate-200 rounded-xl p-3.5 shadow-2xs open:border-amber-400">
          <summary class="font-bold text-[#1F355D] text-xs sm:text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Will I be asked to pay more during the session?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2 leading-relaxed border-t border-slate-100 pt-2">
            No. Your ₹199 pass covers the entire 150-minute teaching, live personal prayer, Q&amp;A, and both downloadable PDF blueprints. There is zero hidden fee and no obligation.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-3.5 shadow-2xs open:border-amber-400">
          <summary class="font-bold text-[#1F355D] text-xs sm:text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>What if I miss the live session?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2 leading-relaxed border-t border-slate-100 pt-2">
            If an emergency prevents you from attending live, full recording access will be provided so you don't miss any teaching or prayer declarations.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-3.5 shadow-2xs open:border-amber-400">
          <summary class="font-bold text-[#1F355D] text-xs sm:text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Do I need a laptop or the Zoom app?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2 leading-relaxed border-t border-slate-100 pt-2">
            No laptop needed! Join smoothly from any smartphone, tablet, iPad, or cast directly to your Smart TV via the free Zoom app.
          </div>
        </details>

        <details class="group bg-white border border-slate-200 rounded-xl p-3.5 shadow-2xs open:border-amber-400">
          <summary class="font-bold text-[#1F355D] text-xs sm:text-sm cursor-pointer list-none flex justify-between items-center gap-2">
            <span>Can I share personal prayer requests?</span>
            <span class="text-amber-600 group-open:rotate-180 transition-transform font-bold">▾</span>
          </summary>
          <div class="text-xs text-slate-600 mt-2 leading-relaxed border-t border-slate-100 pt-2">
            Yes! During the live session, Prophet Michael ministers prophetic prayer over registered believers. You can submit prayer points in the live chat or on WhatsApp.
          </div>
        </details>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- BLOCK 6: THE CLOSER (MINI-HERO OFFER STACK) -->
  <!-- ============================================================== -->
  <section class="py-12 sm:py-16 px-4 sm:px-6 bg-gradient-to-b from-[#EBF2FA] via-[#F4F8FC] to-[#EBF2FA] text-slate-900 border-b border-[#1F355D]/15">
    <div class="max-w-xl mx-auto text-center space-y-5">

      <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1F355D] tracking-tight">
        Don't spend another year struggling with the same battles
      </h2>

      <!-- Offer Summary Card -->
      <div class="brand-card rounded-2xl p-5 sm:p-6 text-left space-y-3">
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

        <div class="pt-3 border-t border-slate-100 flex justify-between items-baseline">
          <div>
            <span class="text-[10px] text-slate-400">Total Value: <del class="text-slate-400">₹2,498</del></span>
            <div class="text-xs text-amber-700 font-bold">Seat Reservation Fee:</div>
          </div>
          <div class="text-right">
            <span class="text-2xl sm:text-3xl font-black text-[#1F355D]">₹199</span>
            <span class="text-[9.5px] text-slate-500 block">Taxes included · One-time fee</span>
          </div>
        </div>

        <button 
          type="button" 
          onclick="openRegistrationModal()"
          class="w-full mt-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-sm sm:text-base py-3.5 px-4 rounded-xl shadow-lg shadow-amber-500/25 flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5 active:scale-95 cursor-pointer"
        >
          <span>Confirm My Seat Registration →</span>
        </button>

        <div class="text-center pt-1 text-[10.5px] text-slate-500 space-y-0.5">
          <div class="text-emerald-700 font-bold">🛡️ 100% Peace-of-Mind Guarantee</div>
          <div>UPI · GPay · PhonePe · Paytm · RuPay · Cards Accepted</div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- FOOTER (CLEAN, NEATLY ALIGNED, MODERN MINIMAL) -->
  <!-- ============================================================== -->
  