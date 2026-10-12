<?php
/**
 * Webinar Landing Page Main Content Sections
 *
 * @package Rehoboth_Webinar
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
  <!-- ============================================================== -->
  <!-- 2. HERO SECTION -->
  <!-- ============================================================== -->
  <section id="about-webinar" class="relative bg-gradient-to-b from-brand-navy via-brand-slate to-brand-navy text-white pt-10 sm:pt-16 pb-16 sm:pb-24 px-4 sm:px-6 overflow-hidden hero-glow">
    <!-- Ambient gold background elements -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10">
      
      <!-- Top Trust Subheading Pill -->
      <div class="flex justify-center mb-6">
        <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-slate-800/90 border border-amber-500/40 shadow-inner backdrop-blur-md">
          <div class="w-5 h-5 rounded-full bg-white p-0.5 flex items-center justify-center overflow-hidden flex-shrink-0">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Logo" class="w-full h-full object-contain" />
          </div>
          <span class="text-xs sm:text-sm font-semibold tracking-wider uppercase text-amber-300">
            Rehoboth International Ministries Presents • Spiritual Transformation Series
          </span>
        </div>
      </div>

      <!-- Main Two-Column Hero Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        
        <!-- Left Column: Copy & Value Proposition -->
        <div class="lg:col-span-7 text-center lg:text-left space-y-6">
          <h1 class="text-3xl sm:text-5xl lg:text-5xl font-extrabold tracking-tight leading-[1.15] text-white">
            Any Christian Can Grow in <br class="hidden sm:inline" />
            <span class="gold-gradient-text font-serif italic font-bold">Spirituality.</span>
          </h1>

          <p class="text-base sm:text-lg lg:text-xl text-stone-300 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
            Master the powerful secret technique hidden in the Bible—healing, deliverance, and divine connection. Master your dream life and unlock true spiritual growth.
          </p>

          <!-- Key Details Badges (Grid of 4) -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
            <!-- Badge 1: Language -->
            <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3 text-left hover:border-amber-500/50 transition-all">
              <div class="flex items-center gap-2 text-amber-400 mb-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-400">Language</span>
              </div>
              <div class="font-bold text-white text-xs sm:text-sm">Tanglish</div>
              <div class="text-[10px] text-stone-400">Tamil + English Blend</div>
            </div>

            <!-- Badge 2: Timing -->
            <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3 text-left hover:border-amber-500/50 transition-all">
              <div class="flex items-center gap-2 text-amber-400 mb-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-400">Timing</span>
              </div>
              <div class="font-bold text-white text-xs sm:text-sm">Evening Batches</div>
              <div class="text-[10px] text-stone-400">Flexible 7:30 PM IST</div>
            </div>

            <!-- Badge 3: Location -->
            <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3 text-left hover:border-amber-500/50 transition-all">
              <div class="flex items-center gap-2 text-amber-400 mb-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-400">Location</span>
              </div>
              <div class="font-bold text-white text-xs sm:text-sm">Online (Zoom)</div>
              <div class="text-[10px] text-stone-400">Private Stream Link</div>
            </div>

            <!-- Badge 4: Eligibility -->
            <div class="bg-slate-800/70 border border-slate-700/80 rounded-xl p-3 text-left hover:border-amber-500/50 transition-all">
              <div class="flex items-center gap-2 text-amber-400 mb-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                <span class="text-[11px] font-bold uppercase tracking-wider text-stone-400">Eligibility</span>
              </div>
              <div class="font-bold text-white text-xs sm:text-sm">Adults (18+)</div>
              <div class="text-[10px] text-stone-400">Believers & Seekers</div>
            </div>
          </div>

          <!-- Price Hook Card -->
          <div class="bg-gradient-to-r from-slate-900/90 via-slate-800/80 to-slate-900/90 border-2 border-amber-500/40 rounded-2xl p-5 sm:p-6 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-12 -top-12 w-36 h-36 bg-amber-500/10 rounded-full blur-2xl"></div>
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
              <!-- Price Display -->
              <div>
                <div class="flex items-center gap-2">
                  <span class="text-xs uppercase font-bold tracking-widest text-amber-400 bg-amber-500/10 px-2 py-0.5 rounded border border-amber-500/20">Exclusive Deal</span>
                  <span class="text-xs text-red-400 font-semibold bg-red-950/40 px-2 py-0.5 rounded border border-red-500/30">80% OFF</span>
                </div>
                <div class="flex items-baseline gap-3 mt-1">
                  <span class="text-stone-400 line-through text-lg sm:text-xl">₹999</span>
                  <span class="text-3xl sm:text-4xl font-extrabold text-amber-400">₹199</span>
                  <span class="text-xs text-stone-300 font-medium">Only for today's batch</span>
                </div>
              </div>

              <!-- CTA Button -->
              <div class="flex-shrink-0">
                <a href="#register" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-extrabold text-base sm:text-lg px-8 py-4 rounded-xl shadow-lg shadow-amber-500/30 transition-all transform hover:-translate-y-1 animate-pulse-subtle">
                  <span>Reserve My Seat Now @ ₹199</span>
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
              </div>
            </div>

            <!-- Trust Note -->
            <div class="mt-4 pt-3 border-t border-slate-700/60 flex flex-wrap items-center justify-between text-[11px] sm:text-xs text-stone-300 gap-2">
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>Instant access link sent via WhatsApp & Email</span>
              </div>
              <div class="flex items-center gap-1.5 text-amber-400 font-medium">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <span>100% Safe 256-Bit SSL Encrypted Checkout</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Prophet Michael Hero Portrait & Credibility Badge -->
        <div class="lg:col-span-5 relative">
          <div class="relative mx-auto max-w-md lg:max-w-none">
            <!-- Decorative Gold Glow Frame -->
            <div class="absolute -inset-1.5 bg-gradient-to-tr from-amber-500 via-amber-300 to-amber-600 rounded-3xl blur-md opacity-70 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
            
            <div class="relative rounded-2xl overflow-hidden bg-brand-slate border-2 border-amber-500/50 shadow-2xl">
              <!-- Prophet Michael Image -->
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/prophet-michael.jpg'); ?>" 
                alt="Prophet Michael Rehoboth - Christian Minister & Spiritual Deliverance Coach" 
                class="w-full h-[460px] sm:h-[520px] object-cover"
                style="object-position: center 8%;"
                loading="eager"
              />
              
              <!-- Gradient Overlay for Bottom Details -->
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>

              <!-- Top Left Floating Pill -->
              <div class="absolute top-4 left-4 bg-slate-900/90 backdrop-blur-md border border-amber-500/40 text-amber-300 px-3 py-1.5 rounded-full text-xs font-semibold flex items-center gap-1.5 shadow-lg">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <span>Host & Lead Mentor</span>
              </div>

              <!-- Bottom Content Overlay -->
              <div class="absolute bottom-4 left-4 right-4 space-y-2">
                <div class="bg-slate-900/95 backdrop-blur-md p-4 rounded-xl border border-amber-500/30 shadow-xl">
                  <div class="flex items-center justify-between">
                    <div>
                      <h2 class="text-lg font-bold text-white font-serif tracking-wide">Prophet Michael</h2>
                      <p class="text-xs text-amber-400 font-medium">Rehoboth Ministries International</p>
                    </div>
                    <div class="bg-amber-500/20 text-amber-300 border border-amber-500/30 px-2.5 py-1 rounded-lg text-xs font-bold text-center">
                      <span class="block text-sm font-extrabold text-amber-400">8+ Years</span>
                      <span class="text-[9px] uppercase tracking-wider">Experience</span>
                    </div>
                  </div>
                  
                  <div class="mt-2.5 pt-2.5 border-t border-slate-800 flex items-center justify-between text-[11px] text-stone-300">
                    <span class="flex items-center gap-1">
                      <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                      Ministry & Deliverance Coach
                    </span>
                    <span class="text-amber-400 font-semibold">5,000+ Believers Mentored</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 3. PROBLEM AGITATION SECTION -->
  <!-- ============================================================== -->
  <section class="py-16 sm:py-24 px-4 sm:px-6 bg-white relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-14">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-50 border border-red-200 text-red-600 text-xs font-bold uppercase tracking-wider">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          Spiritual Reality Check
        </div>

        <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
          Being a Christian, why are you still <span class="text-red-600 underline decoration-red-300 underline-offset-4">stuck</span>?
        </h2>

        <p class="text-base sm:text-lg text-slate-600 font-serif italic max-w-2xl mx-auto">
          "How many years have you been a Christian? Why haven't you experienced an encounter with God or a breakthrough in your life?"
        </p>
      </div>

      <!-- 4 Agitation Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Agitation Card 1 -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group">
          <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-wider text-red-600 block mb-1">Pain Point 01</span>
          <h3 class="text-lg font-bold text-slate-900 mb-2">Lack of Understanding</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            God speaks to humans every single day, but most don't recognize His voice, mistaking His promptings for random thoughts or confusion.
          </p>
        </div>

        <!-- Agitation Card 2 -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group">
          <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block mb-1">Pain Point 02</span>
          <h3 class="text-lg font-bold text-slate-900 mb-2">Spiritual Dryness</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            You pray faithfully day after day, but your prayers feel unanswered, dry, and mechanical without the palpable presence of the Holy Spirit.
          </p>
        </div>

        <!-- Agitation Card 3 -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group">
          <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-wider text-indigo-700 block mb-1">Pain Point 03</span>
          <h3 class="text-lg font-bold text-slate-900 mb-2">Doubt & Timing</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Unsure of God’s perfect timing and struggling to align His will with your everyday career, financial choices, and family relationships.
          </p>
        </div>

        <!-- Agitation Card 4 -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group">
          <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7 7z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-wider text-purple-700 block mb-1">Pain Point 04</span>
          <h3 class="text-lg font-bold text-slate-900 mb-2">Identity Crisis</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Unclear about your spiritual capabilities, feeling helpless in warfare, and stuck imitating others instead of walking in your unique heavenly calling.
          </p>
        </div>

      </div>

      <!-- Quick Agitation Transition Banner -->
      <div class="mt-12 bg-amber-50 border border-amber-200 rounded-2xl p-6 text-center max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="text-left">
          <h4 class="font-bold text-slate-900 text-base">You do not have to live in spiritual frustration anymore.</h4>
          <p class="text-xs sm:text-sm text-slate-600">The Bible contains precise spiritual blueprints that Prophet Michael will break down step-by-step.</p>
        </div>
        <a href="#register" class="flex-shrink-0 bg-slate-900 hover:bg-slate-800 text-amber-400 font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md">
          Break The Cycle Now →
        </a>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 3.5. THE COMPARISON MATRIX (OLD WAY VS. THE KINGDOM WAY) -->
  <!-- ============================================================== -->
  <section id="system" class="py-16 sm:py-24 px-4 sm:px-6 bg-slate-900 text-white relative overflow-hidden">
    <!-- Ambient gold background glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider">
          <span>⚖️ The Fundamental Difference</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
          Not Random Tips. <br class="hidden sm:inline" />
          <span class="gold-gradient-text font-serif italic">One Complete Spiritual System.</span>
        </h2>

        <p class="text-stone-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
          Most believers struggle for years because they rely on fragmented ideas and exhausting routines. See the difference between traditional spiritual exhaustion and operating in biblical kingdom authority.
        </p>
      </div>

      <!-- Side-by-Side Comparison Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto items-stretch">
        
        <!-- Column 1: The Traditional Rut -->
        <div class="bg-slate-950/80 border border-red-500/30 rounded-3xl p-6 sm:p-8 flex flex-col justify-between relative shadow-lg">
          <div>
            <div class="flex items-center justify-between pb-5 border-b border-slate-800">
              <div>
                <span class="text-xs font-bold text-red-400 uppercase tracking-widest block">The Painful Reality</span>
                <h3 class="text-xl sm:text-2xl font-bold text-white mt-1">The Traditional Rut</h3>
                <p class="text-xs text-stone-400 mt-0.5">Living in spiritual frustration and repeat cycles</p>
              </div>
              <span class="w-10 h-10 rounded-xl bg-red-950/70 border border-red-500/40 text-red-400 flex items-center justify-center font-black text-lg flex-shrink-0">✕</span>
            </div>

            <ul class="mt-6 space-y-4 text-xs sm:text-sm text-stone-300">
              <li class="flex items-start gap-3">
                <span class="text-red-400 font-bold mt-0.5 text-base">✕</span>
                <span><strong>Mechanical, Dry Prayers:</strong> Pleading and begging for hours without knowing biblical legal protocols or the Courts of Heaven.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-red-400 font-bold mt-0.5 text-base">✕</span>
                <span><strong>Spiritual Fog & Confusion:</strong> Guessing whether impressions are God’s voice, random soul thoughts, or demonic suggestions.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-red-400 font-bold mt-0.5 text-base">✕</span>
                <span><strong>Cyclical Generational Bondage:</strong> Facing the same emotional blockages, marital storms, and financial ceilings year after year.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-red-400 font-bold mt-0.5 text-base">✕</span>
                <span><strong>Identity Crisis:</strong> Living as an imitation of others, feeling insecure and powerless in spiritual warfare.</span>
              </li>
            </ul>
          </div>

          <div class="mt-8 pt-4 border-t border-slate-800 text-[11px] text-red-300/80 italic">
            Outcome: Spiritual burnout, unanswered questions, and remaining stuck in defeat.
          </div>
        </div>

        <!-- Column 2: The Rehoboth Kingdom Blueprint -->
        <div class="bg-gradient-to-b from-slate-900 to-slate-950 border-2 border-amber-500 rounded-3xl p-6 sm:p-8 flex flex-col justify-between relative shadow-2xl shadow-amber-500/10">
          <!-- Featured Badge -->
          <div class="absolute -top-3.5 right-6 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 text-[10px] font-black uppercase tracking-widest px-3.5 py-1 rounded-full shadow-lg">
            Rehoboth Spiritual Architecture
          </div>

          <div>
            <div class="flex items-center justify-between pb-5 border-b border-slate-800">
              <div>
                <span class="text-xs font-bold text-amber-400 uppercase tracking-widest block">The Biblical Breakthrough</span>
                <h3 class="text-xl sm:text-2xl font-bold text-white mt-1">The Kingdom Blueprint</h3>
                <p class="text-xs text-amber-300/80 mt-0.5">Walking in divine clarity, healing & spiritual authority</p>
              </div>
              <span class="w-10 h-10 rounded-xl bg-amber-500/20 border border-amber-500 text-amber-400 flex items-center justify-center font-black text-lg flex-shrink-0">✓</span>
            </div>

            <ul class="mt-6 space-y-4 text-xs sm:text-sm text-stone-200">
              <li class="flex items-start gap-3">
                <span class="text-amber-400 font-bold mt-0.5 text-base">✓</span>
                <span><strong>Courts of Heaven Authority:</strong> Praying legally from the position of Christ's finished work, enforcing breakthroughs that manifest.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-400 font-bold mt-0.5 text-base">✓</span>
                <span><strong>Sharp Spiritual Discernment:</strong> Proven keys to tune into God’s voice and prophetic guidance daily in conversational Tanglish.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-400 font-bold mt-0.5 text-base">✓</span>
                <span><strong>Targeted Deliverance:</strong> Dismantling hidden spiritual strongholds, breaking persistent sins, and restoring family peace.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-400 font-bold mt-0.5 text-base">✓</span>
                <span><strong>Prophetic Mantle & Calling:</strong> Unlocking your unique divine gifts, operating with confidence, and hosting the Holy Spirit.</span>
              </li>
            </ul>
          </div>

          <div class="mt-8 pt-4 border-t border-slate-800 text-[11px] text-amber-300 font-medium flex items-center justify-between">
            <span>Outcome: Peace, supernatural breakthroughs & personal divine connection.</span>
            <span class="text-amber-400 font-bold">Only ₹199</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 4. SCRIPTURE & VISION ANCHOR -->
  <!-- ============================================================== -->
  <section class="py-16 sm:py-20 px-4 sm:px-6 bg-gradient-to-r from-brand-slate via-brand-navy to-brand-slate text-white relative overflow-hidden">
    <!-- Golden cross decorative icon watermark -->
    <div class="absolute -right-10 -bottom-10 opacity-5 pointer-events-none select-none text-white text-[280px] font-serif">✝</div>
    
    <div class="max-w-5xl mx-auto">
      <div class="relative p-8 sm:p-12 md:p-16 rounded-3xl bg-slate-900/80 border-2 border-amber-500/50 shadow-2xl backdrop-blur-md text-center">
        <!-- Golden Top Quote Icon -->
        <div class="w-14 h-14 mx-auto -mt-16 sm:-mt-20 bg-gradient-to-tr from-amber-500 to-amber-300 rounded-2xl flex items-center justify-center text-slate-950 shadow-xl mb-6">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
        </div>

        <span class="text-xs uppercase font-extrabold tracking-widest text-amber-400 block mb-4">The Divine Promise For Believers</span>

        <blockquote class="text-xl sm:text-3xl md:text-3xl font-serif italic text-stone-100 font-semibold leading-relaxed tracking-wide">
          "Very truly I tell you, whoever believes in me will do the works I have been doing, and they will do even greater things than these, because I am going to the Father."
        </blockquote>

        <div class="mt-6 flex items-center justify-center gap-3">
          <div class="h-[1px] w-12 bg-amber-400/50"></div>
          <cite class="text-amber-400 font-bold text-sm sm:text-base tracking-wider not-italic uppercase">John 14:12</cite>
          <div class="h-[1px] w-12 bg-amber-400/50"></div>
        </div>

        <p class="mt-4 text-xs sm:text-sm text-stone-300 max-w-xl mx-auto">
          You were not called to merely survive as a Christian. You were called to operate in heavenly power, authority, and intimacy with Jesus.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 5. WHAT YOU WILL GAIN (THE TRANSFORMATION & BENEFITS) -->
  <!-- ============================================================== -->
  <section id="transformation" class="py-16 sm:py-24 px-4 sm:px-6 bg-brand-cream relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider">
          <span>✨ Life-Changing Outcomes</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          Step Into Healing, Deliverance & <span class="gold-gradient-text font-serif italic">True Power</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600 font-normal">
          In this 2.5-hour intensive masterclass, Prophet Michael will unpack tested, biblical keys that bring immediate results.
        </p>
      </div>

      <!-- 6 Key Outcome Bullet Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Outcome 1 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Key Outcome 01</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Complete Deliverance & Freedom</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Deliverance from persistent sins, generational patterns, demonic blockages, and spiritual bondage through Christ's authority.
          </p>
        </div>

        <!-- Outcome 2 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Key Outcome 02</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Marital & Relationship Peace</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Biblical solutions for personal, marital, and family challenges that have resisted counseling and conventional methods.
          </p>
        </div>

        <!-- Outcome 3 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Key Outcome 03</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Divine Direction For The Lost</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Supernatural clarity and divine guidance for those feeling lost, off-track, or uncertain about career and next steps.
          </p>
        </div>

        <!-- Outcome 4 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Key Outcome 04</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Prophetic Calling & Ministry Clarity</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Prophetic clarity for ministry workers and believers seeking their true calling, ministry assignment, and mantle.
          </p>
        </div>

        <!-- Outcome 5 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Key Outcome 05</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Holy Spirit Anointing & Impartation</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Direct spiritual impartation and practical keys to receive, host, and steward the anointing of the Holy Spirit.
          </p>
        </div>

        <!-- Outcome 6 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Key Outcome 06</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Hear God Daily & Spiritual Gifts</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Practical, repeatable keys to operate in gifts of the Spirit (prophecy, healing, discernment) and hear God's whisper every day.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 6. CORE TEACHING PILLARS -->
  <!-- ============================================================== -->
  <section class="py-16 sm:py-24 px-4 sm:px-6 bg-slate-900 text-white relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider">
          <span>🏛️ The 3-Pillar Framework</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
          The Proven Spiritual Architecture
        </h2>

        <p class="text-base sm:text-lg text-stone-300">
          This is not vague inspirational theory. You will receive a structured blueprint developed through over 8 years of active ministry.
        </p>
      </div>

      <!-- 3 Pillars Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Pillar 1 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-30 absolute top-4 right-6 group-hover:opacity-60 transition-opacity">
            01
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Foundation</span>
          <h3 class="text-2xl font-bold text-white mb-3">Spiritual Discipline</h3>
          <p class="text-sm text-stone-300 leading-relaxed mb-6">
            Habits of deep intimate communion, unlocking biblical secrets hidden from casual readers, and developing unshakeable daily consecration.
          </p>
          <ul class="space-y-2 text-xs text-stone-300">
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> The secret place communion protocols</li>
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Scriptural meditation techniques</li>
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Fasting & consecration for breakthrough</li>
          </ul>
        </div>

        <!-- Pillar 2 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border-2 border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group shadow-xl shadow-amber-500/10">
          <div class="absolute top-0 left-0 right-0 bg-gradient-to-r from-amber-500 to-amber-600 py-1 text-center text-[11px] font-extrabold uppercase tracking-widest text-slate-950">
            Core Breakthrough Module
          </div>
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-30 absolute top-7 right-6 group-hover:opacity-60 transition-opacity">
            02
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6 mt-3">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Deliverance & Authority</span>
          <h3 class="text-2xl font-bold text-white mb-3">Warfare Prayer</h3>
          <p class="text-sm text-stone-300 leading-relaxed mb-6">
            Praying with legal kingdom authority, dismantling long-standing generational strongholds, and enforcing victory against spiritual resistance.
          </p>
          <ul class="space-y-2 text-xs text-stone-300">
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Courts of Heaven & legal rights breaking</li>
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Healing prayers that actually manifest</li>
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Deliverance from fear, lust & demonic pressure</li>
          </ul>
        </div>

        <!-- Pillar 3 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-30 absolute top-4 right-6 group-hover:opacity-60 transition-opacity">
            03
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Alignment</span>
          <h3 class="text-2xl font-bold text-white mb-3">Prophetic Sensitivity</h3>
          <p class="text-sm text-stone-300 leading-relaxed mb-6">
            Tuning your spiritual senses to discern God's voice, interpreting impressions accurately, and aligning every decision with divine timing.
          </p>
          <ul class="space-y-2 text-xs text-stone-300">
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Distinguishing soul thoughts vs God's voice</li>
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Dreams, visions, and biblical symbology</li>
            <li class="flex items-center gap-2"><span class="text-amber-400">✓</span> Walking in prophetic sharpness & wisdom</li>
          </ul>
        </div>

      </div>

      <!-- Takeaway Included Banner -->
      <div class="mt-12 bg-gradient-to-r from-amber-500/20 via-amber-400/10 to-amber-500/20 border-2 border-amber-500/40 rounded-2xl p-6 sm:p-8 flex flex-col md:flex-row items-center gap-6 justify-between">
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-2xl bg-amber-500 flex-shrink-0 flex items-center justify-center text-slate-950 shadow-lg">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <div>
            <span class="text-xs font-bold uppercase tracking-widest text-amber-400">Exclusive Bonus Material (Worth ₹1,499)</span>
            <h4 class="text-lg sm:text-xl font-bold text-white">Complete Course Action Plan, Personal Guidance Notes & Structured Prayer Blueprint</h4>
            <p class="text-xs sm:text-sm text-stone-300 mt-1">Provided immediately as downloadable PDF worksheets to every registered participant.</p>
          </div>
        </div>
        <a href="#register" class="flex-shrink-0 bg-amber-400 hover:bg-amber-500 text-slate-950 font-extrabold px-6 py-3.5 rounded-xl text-sm transition-all shadow-lg shadow-amber-500/20 whitespace-nowrap">
          Claim With ₹199 Pass →
        </a>
      </div>

    </div>
  </section>



  <!-- ============================================================== -->
  <!-- 6.8. A CLEAR 4-STEP PATH FROM SIGN-UP TO SPIRITUAL BREAKTHROUGH (PROSKILL SIGNATURE STEPPER) -->
  <!-- ============================================================== -->
  <section id="roadmap" class="py-16 sm:py-24 px-4 sm:px-6 bg-brand-cream relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider">
          <span>🗺️ The Proven Journey</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          A Clear 4-Step Path From Sign-Up to <br class="hidden sm:inline" />
          <span class="gold-gradient-text font-serif italic">Spiritual Breakthrough.</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600">
          No guesswork. No complicated theological barriers. Four straightforward steps from registration to personal divine encounter.
        </p>
      </div>

      <!-- 4-Step Connected Grid Roadmap -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
        
        <!-- Step 01 -->
        <div class="bg-white rounded-3xl p-7 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                01
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">60 Seconds</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 01</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Register & Confirm Instant Pass</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Fill the simple 4-field form with your name, preferred evening slot, and WhatsApp number. Your secure Zoom credentials and calendar invite are instantly generated.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>Instant delivery to WhatsApp & Email</span>
          </div>
        </div>

        <!-- Step 02 -->
        <div class="bg-white rounded-3xl p-7 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                02
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">2.5 Hours Live</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 02</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Join The Live Tanglish Masterclass</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Connect to the private stream. Prophet Michael unpacks deep biblical secrets in everyday Tamil + English, demystifying deliverance, healing, and hearing God.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>Live prophetic prayer & personal ministry</span>
          </div>
        </div>

        <!-- Step 03 -->
        <div class="bg-white rounded-3xl p-7 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                03
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">Downloadable</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 03</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Activate Your Prayer Blueprint</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Receive your structured Prayer Action Plan PDF. Apply the exact courts-of-heaven prayer protocols to dismantle long-standing bondages and family challenges.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>Actionable 7-day personal consecration</span>
          </div>
        </div>

        <!-- Step 04 -->
        <div class="bg-white rounded-3xl p-7 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                04
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">Lifetime Access</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 04</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Walk in Continuous Breakthrough</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Re-watch HD recordings anytime to refresh your spiritual fire. Join weekly live Q&A community gatherings with fellow believers across India and the globe.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>Weekly mentorship & lifelong fellowship</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 7. MEET YOUR MENTOR / AUTHORITY SECTION -->
  <!-- ============================================================== -->
  <section id="mentor" class="py-16 sm:py-24 px-4 sm:px-6 bg-white relative">
    <div class="max-w-7xl mx-auto">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left: Mentor Photo in Professional Framing -->
        <div class="lg:col-span-5 order-2 lg:order-1">
          <div class="relative max-w-md mx-auto">
            <div class="absolute -inset-2 bg-gradient-to-r from-amber-500 to-amber-700 rounded-3xl blur-lg opacity-40"></div>
            <div class="relative bg-slate-900 rounded-2xl overflow-hidden border-2 border-amber-500/50 shadow-2xl">
              <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/prophet-michael.jpg'); ?>" 
                alt="Prophet Michael Rehoboth" 
                class="w-full h-[500px] object-cover"
                style="object-position: center 8%;"
              />
              <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent p-6 text-center">
                <h3 class="text-2xl font-bold text-white font-serif tracking-wide">Prophet Michael Rehoboth</h3>
                <p class="text-amber-400 text-xs font-semibold tracking-wider uppercase mt-1">Founder & Presiding Minister • Rehoboth Ministries</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Biography & Authority -->
        <div class="lg:col-span-7 order-1 lg:order-2 space-y-6">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider">
            <span>🛡️ Meet Your Mentor</span>
          </div>

          <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
            Prophet Michael <span class="gold-gradient-text font-serif italic">Rehoboth</span>
          </h2>

          <p class="text-base sm:text-lg text-slate-700 leading-relaxed font-normal">
            Christian minister dedicated to proclaiming the Word of God, unlocking practical biblical principles, and helping believers walk in their divine purpose through prophetical ministry, healing, and deliverance.
          </p>

          <!-- The Difference Callout -->
          <div class="bg-amber-50 border-l-4 border-amber-500 p-5 rounded-r-xl">
            <h4 class="font-bold text-slate-900 text-sm mb-1 uppercase tracking-wider">The Rehoboth Difference</h4>
            <p class="text-slate-700 text-sm italic font-serif leading-relaxed">
              "Whatever traditional settings leave unanswered, we teach with real-world, practical spiritual experiences. Faith is not meant to be sterile—it is dynamic, active, and delivering."
            </p>
          </div>

          <!-- Credibility Badges & Heritage -->
          <div class="space-y-4 pt-2">
            <h4 class="text-xs font-bold uppercase tracking-widest text-slate-500">Ministry Credibility & Global Impartation</h4>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <!-- Experience Badge -->
              <div class="flex items-start gap-3 bg-stone-50 border border-stone-200 p-3.5 rounded-xl">
                <div class="w-9 h-9 rounded-lg bg-amber-500/20 text-amber-700 flex items-center justify-center flex-shrink-0 font-bold">
                  8+
                </div>
                <div>
                  <div class="font-bold text-slate-900 text-xs sm:text-sm">8+ Years Ministry Experience</div>
                  <div class="text-[11px] text-slate-500">Active apostolic & deliverance coaching (2018 – 2026)</div>
                </div>
              </div>

              <!-- Mentorship Lineage Badge -->
              <div class="flex items-start gap-3 bg-stone-50 border border-stone-200 p-3.5 rounded-xl">
                <div class="w-9 h-9 rounded-lg bg-slate-900 text-amber-400 flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div>
                  <div class="font-bold text-slate-900 text-xs sm:text-sm">Global Spiritual Lineage</div>
                  <div class="text-[11px] text-slate-500">Mentored under notable global voices</div>
                </div>
              </div>
            </div>

            <!-- Global Ministers Mention -->
            <div class="bg-slate-900 text-stone-300 p-4 rounded-xl border border-slate-800 text-xs leading-relaxed">
              <span class="text-amber-400 font-bold block mb-1">Trained & Mentored Under Notable Ministers:</span>
              <span>Prophet Angel Uebert • Prophet Jerome Fernando • Riaan Swiegelaar • James Kawalya</span>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>



  <!-- ============================================================== -->
  <!-- 8. SOCIAL PROOF & TESTIMONIALS -->
  <!-- ============================================================== -->
  <section id="testimonials" class="py-16 sm:py-24 px-4 sm:px-6 bg-stone-100 relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold uppercase tracking-wider">
          <span>🕊️ Verified Transformations</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          Lives Touched, Bonds Broken, <span class="gold-gradient-text font-serif italic">Miracles Shared</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600">
          Read what fellow believers experienced after participating in Prophet Michael's deliverance and spiritual coaching.
        </p>
      </div>

      <!-- 4 Testimonial Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Testimonial 1 -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <!-- Star Ratings -->
            <div class="flex text-amber-400 mb-3">
              ★★★★★
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic font-medium mb-4">
              "For 7 years I struggled with deep night terrors and severe prayer blockages. In the warfare session, Prophet Michael spoke a word that broke the heavy oppression instantly. I sleep in peace now."
            </p>
          </div>
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-500 to-amber-600 text-white font-bold flex items-center justify-center text-sm shadow">
              SJ
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Samuel Jebaraj</div>
              <div class="text-[11px] text-slate-500">Chennai • IT Professional</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex text-amber-400 mb-3">
              ★★★★★
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic font-medium mb-4">
              "The Tanglish delivery made complex biblical concepts so effortless to understand. For the first time in my Christian journey, I can clearly discern God's voice in my everyday career choices."
            </p>
          </div>
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-600 text-white font-bold flex items-center justify-center text-sm shadow">
              RP
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Rachel Priya</div>
              <div class="text-[11px] text-slate-500">Coimbatore • Entrepreneur</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex text-amber-400 mb-3">
              ★★★★★
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic font-medium mb-4">
              "Our marriage was on the verge of separation due to bitter spiritual strife. The prophetic prayer blueprint transformed our home within 3 weeks. Glory to God for this ministry!"
            </p>
          </div>
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-emerald-500 to-teal-600 text-white font-bold flex items-center justify-center text-sm shadow">
              DK
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">David & Kezia</div>
              <div class="text-[11px] text-slate-500">Bengaluru • Worship Leaders</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 4 -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex text-amber-400 mb-3">
              ★★★★★
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic font-medium mb-4">
              "₹199 is an absolute fraction of the value. The downloadable blueprint and prayer protocols alone are gold. Don't think twice—register immediately!"
            </p>
          </div>
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-rose-500 to-red-600 text-white font-bold flex items-center justify-center text-sm shadow">
              AM
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Anitha Mohan</div>
              <div class="text-[11px] text-slate-500">Madurai • Youth Worker</div>
            </div>
          </div>
        </div>

      </div>

      <!-- Trust Stat Banner -->
      <div class="mt-12 text-center text-xs text-slate-500 font-medium">
        ⭐ Rated <strong class="text-slate-800">4.92 / 5.0</strong> by over 5,000+ webinar attendees across Tamil Nadu, Karnataka & Global NRI Communities
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 8.5. THE COMPLETE VALUE STACK BREAKDOWN (PROSKILL VALUE STACK) -->
  <!-- ============================================================== -->
  <section class="py-16 sm:py-24 px-4 sm:px-6 bg-brand-cream relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider">
          <span>💎 Unrivaled Fellowship Value</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          Everything Included In Your <br class="hidden sm:inline" />
          <span class="gold-gradient-text font-serif italic">₹199 Fellowship Pass.</span>
        </h2>

        <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
          We intentionally subsidize this masterclass so that every believer—regardless of financial background—can access life-transforming biblical spiritual tools.
        </p>
      </div>

      <!-- Value Stack Card Container -->
      <div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-10 border border-stone-200/90 shadow-xl relative overflow-hidden">
        
        <!-- Top Banner -->
        <div class="flex flex-col sm:flex-row items-center justify-between pb-6 border-b border-stone-100 gap-4">
          <div>
            <span class="text-xs font-bold uppercase tracking-widest text-amber-600 block">Deliverables Package</span>
            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mt-0.5">Spiritual Growth & Deliverance Suite</h3>
          </div>
          <div class="text-right">
            <span class="text-xs text-stone-400 block line-through">Total Value: ₹3,296</span>
            <span class="text-2xl sm:text-3xl font-black text-amber-600">Today: ₹199 Only</span>
          </div>
        </div>

        <!-- 5 Itemized Deliverable Rows -->
        <div class="divide-y divide-stone-100 mt-6 space-y-4">
          
          <!-- Item 1 -->
          <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-amber-500/10 text-amber-600 font-bold flex items-center justify-center text-xs flex-shrink-0 mt-0.5">01</span>
              <div>
                <h4 class="text-sm sm:text-base font-bold text-slate-900">Live 2.5-Hour Interactive Masterclass with Prophet Michael</h4>
                <p class="text-xs text-slate-500">Live Tanglish teaching, Courts of Heaven revelations, healing principles & personal prophetic prayer.</p>
              </div>
            </div>
            <span class="text-xs font-mono font-bold text-stone-400 sm:text-right pl-10 sm:pl-0">Value: ₹999</span>
          </div>

          <!-- Item 2 -->
          <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-amber-500/10 text-amber-600 font-bold flex items-center justify-center text-xs flex-shrink-0 mt-0.5">02</span>
              <div>
                <h4 class="text-sm sm:text-base font-bold text-slate-900">Lifetime HD Video Recording Access</h4>
                <p class="text-xs text-slate-500">Full re-watch privilege anytime to review scripture breakdowns, warfare keys, and family deliverance prayers.</p>
              </div>
            </div>
            <span class="text-xs font-mono font-bold text-stone-400 sm:text-right pl-10 sm:pl-0">Value: ₹799</span>
          </div>

          <!-- Item 3 -->
          <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-amber-500/10 text-amber-600 font-bold flex items-center justify-center text-xs flex-shrink-0 mt-0.5">03</span>
              <div>
                <h4 class="text-sm sm:text-base font-bold text-slate-900">Downloadable Deliverance & Warfare Prayer Blueprint (PDF)</h4>
                <p class="text-xs text-slate-500">Structured scriptural petitions, legal court prayers, and confessions for immediate personal breakthrough.</p>
              </div>
            </div>
            <span class="text-xs font-mono font-bold text-stone-400 sm:text-right pl-10 sm:pl-0">Value: ₹499</span>
          </div>

          <!-- Item 4 -->
          <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-amber-500/10 text-amber-600 font-bold flex items-center justify-center text-xs flex-shrink-0 mt-0.5">04</span>
              <div>
                <h4 class="text-sm sm:text-base font-bold text-slate-900">7-Day Consecration & Secret Place Daily Action Plan</h4>
                <p class="text-xs text-slate-500">Day-by-day practical spiritual discipline routine to establish consistent intimacy with the Holy Spirit.</p>
              </div>
            </div>
            <span class="text-xs font-mono font-bold text-stone-400 sm:text-right pl-10 sm:pl-0">Value: ₹499</span>
          </div>

          <!-- Item 5 -->
          <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div class="flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-amber-500/10 text-amber-600 font-bold flex items-center justify-center text-xs flex-shrink-0 mt-0.5">05</span>
              <div>
                <h4 class="text-sm sm:text-base font-bold text-slate-900">VIP WhatsApp Mentorship Community & Weekly Live Q&A</h4>
                <p class="text-xs text-slate-500">Direct invite into our ongoing believer network with weekly Q&A support and encouragement.</p>
              </div>
            </div>
            <span class="text-xs font-mono font-bold text-stone-400 sm:text-right pl-10 sm:pl-0">Value: ₹500</span>
          </div>

        </div>

        <!-- Summary & CTA Callout -->
        <div class="mt-8 pt-6 border-t border-stone-200 bg-amber-50/70 -mx-6 sm:-mx-10 -mb-6 sm:-mb-10 p-6 sm:p-8 rounded-b-3xl flex flex-col sm:flex-row items-center justify-between gap-4">
          <div>
            <div class="flex items-center gap-2">
              <span class="text-xs uppercase font-extrabold tracking-wider text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">80%+ Subsidized</span>
              <span class="text-xs text-slate-600 font-medium">You Save: <strong>₹3,097 Today</strong></span>
            </div>
            <p class="text-xs text-slate-500 mt-1">Instant WhatsApp & Email delivery upon completing registration.</p>
          </div>
          <a href="#register" class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black px-8 py-3.5 rounded-xl text-sm shadow-lg shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap text-center">
            Claim All 5 Deliverables @ ₹199 →
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 9. REGISTRATION / BOOKING CARD (HIGH CONVERSION CHECKOUT) -->
  <!-- ============================================================== -->
  <section id="register" class="py-16 sm:py-24 px-4 sm:px-6 bg-gradient-to-b from-brand-navy via-brand-slate to-brand-navy text-white relative">
    <!-- Glow elements -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-5xl mx-auto relative z-10">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-3 mb-12">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/20 border border-amber-500/40 text-amber-300 text-xs font-bold uppercase tracking-wider">
          <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
          Live Registration Window Open
        </div>

        <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white">
          Secure Your Webinar Seat <span class="gold-gradient-text font-serif italic">@ ₹199</span>
        </h2>

        <p class="text-sm sm:text-base text-stone-300">
          Strictly limited batches to ensure live prayer and personal Q&A interaction.
        </p>
      </div>

      <!-- Main Checkout Card Container -->
      <div class="bg-slate-900/95 border-2 border-amber-500/60 rounded-3xl p-6 sm:p-10 md:p-12 shadow-2xl backdrop-blur-xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          
          <!-- Left: Order Summary & What's Included -->
          <div class="lg:col-span-5 space-y-6">
            <div class="border-b border-slate-800 pb-5">
              <span class="text-xs font-bold uppercase tracking-widest text-amber-400">Selected Pass</span>
              <h3 class="text-xl sm:text-2xl font-bold text-white mt-1">Rehoboth Spiritual Masterclass</h3>
              <p class="text-xs text-stone-400 mt-1">Live Online Webinar in Tanglish</p>
            </div>

            <!-- Pricing Breakdown Box -->
            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700/80 space-y-2">
              <div class="flex justify-between text-xs text-stone-400">
                <span>Standard Webinar Fee:</span>
                <span class="line-through">₹999</span>
              </div>
              <div class="flex justify-between text-xs text-emerald-400 font-semibold">
                <span>Special Fellowship Discount:</span>
                <span>- ₹800 (80% OFF)</span>
              </div>
              <div class="border-t border-slate-700 pt-2 flex justify-between items-baseline">
                <span class="text-sm font-bold text-white">Total Investment:</span>
                <span class="text-2xl font-black text-amber-400">₹199</span>
              </div>
            </div>

            <!-- What's included checklist -->
            <div class="space-y-3">
              <div class="text-xs font-bold uppercase tracking-wider text-stone-300">Everything Included in Your Pass:</div>
              <ul class="space-y-2.5 text-xs text-stone-300">
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Live 2.5-Hour Interactive Masterclass</strong> with Prophet Michael</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Pre-recorded video access</strong> for lifetime review anytime</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Weekly Q&A community access</strong> & ongoing spiritual mentorship</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Downloadable Prayer Blueprint</strong> & Personal Guidance Notes</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Instant WhatsApp link delivery</strong> directly upon completion</span>
                </li>
              </ul>
            </div>

            <!-- Urgency Micro Banner -->
            <div class="bg-red-950/40 border border-red-500/30 rounded-xl p-3 flex items-center gap-3 text-red-300 text-xs">
              <span class="text-lg">⏳</span>
              <div>
                <strong>Batch Filling Fast:</strong> Only <span id="spots-checkout" class="font-bold text-amber-300">6 spots</span> left for this evening batch!
              </div>
            </div>
          </div>

          <!-- Right: Interactive Registration Form -->
          <div class="lg:col-span-7 bg-slate-800/90 rounded-2xl p-6 sm:p-8 border border-amber-500/30 shadow-inner">
            <h4 class="text-lg font-bold text-white mb-1 flex items-center gap-2">
              <span>Enter Registration Details</span>
            </h4>
            <p class="text-xs text-stone-400 mb-6">Access credentials will be delivered to your WhatsApp & Email.</p>

            <form id="webinar-registration-form" class="space-y-4" onsubmit="handleRegistrationSubmit(event)">
              
              <!-- Full Name -->
              <div>
                <label for="fullName" class="block text-xs font-semibold text-stone-300 uppercase tracking-wider mb-1">
                  Full Name <span class="text-red-400">*</span>
                </label>
                <div class="relative">
                  <input 
                    type="text" 
                    id="fullName" 
                    name="fullName" 
                    required 
                    placeholder="e.g. Samuel Jebaraj"
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-stone-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                  />
                </div>
              </div>

              <!-- WhatsApp Number -->
              <div>
                <label for="whatsapp" class="block text-xs font-semibold text-stone-300 uppercase tracking-wider mb-1">
                  WhatsApp Number (For Instant Access Link) <span class="text-red-400">*</span>
                </label>
                <div class="flex rounded-xl overflow-hidden border border-slate-700 focus-within:border-amber-400 focus-within:ring-1 focus-within:ring-amber-400">
                  <span class="bg-slate-900 px-3.5 py-3 text-stone-400 text-sm border-r border-slate-700 flex items-center">
                    🇮🇳 +91
                  </span>
                  <input 
                    type="tel" 
                    id="whatsapp" 
                    name="whatsapp" 
                    required 
                    pattern="[0-9]{10}"
                    maxlength="10"
                    placeholder="9876543210"
                    class="w-full bg-slate-900 px-4 py-3 text-sm text-white placeholder-stone-500 focus:outline-none transition"
                  />
                </div>
                <span class="text-[10px] text-stone-400 mt-1 block">We never spam. You'll receive zoom credentials and prayer notes.</span>
              </div>

              <!-- Email Address -->
              <div>
                <label for="email" class="block text-xs font-semibold text-stone-300 uppercase tracking-wider mb-1">
                  Email Address <span class="text-red-400">*</span>
                </label>
                <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  required 
                  placeholder="samuel@gmail.com"
                  class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-stone-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                />
              </div>

              <!-- Preferred Batch Timing -->
              <div>
                <label for="batchSlot" class="block text-xs font-semibold text-stone-300 uppercase tracking-wider mb-1">
                  Select Preferred Evening Batch <span class="text-red-400">*</span>
                </label>
                <select 
                  id="batchSlot" 
                  name="batchSlot" 
                  required
                  class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                >
                  <option value="Friday 7:30 PM - 10:00 PM IST">This Friday • 7:30 PM – 10:00 PM IST (Fast Filling)</option>
                  <option value="Saturday 7:30 PM - 10:00 PM IST">This Saturday • 7:30 PM – 10:00 PM IST (Weekend Special)</option>
                  <option value="Sunday 7:30 PM - 10:00 PM IST">This Sunday • 7:30 PM – 10:00 PM IST</option>
                </select>
              </div>

              <!-- Submit CTA Button -->
              <div class="pt-2">
                <button 
                  type="submit" 
                  id="submit-btn"
                  class="w-full bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-base sm:text-lg py-4 px-6 rounded-xl shadow-xl shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2 cursor-pointer"
                >
                  <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  <span>Complete Registration for ₹199</span>
                </button>
              </div>

              <!-- Payment Methods Accepted Badge -->
              <div class="pt-3 text-center space-y-2">
                <div class="text-[11px] text-stone-400 flex items-center justify-center gap-1">
                  <span>🔒 100% Secure Checkout via UPI & Cards</span>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-2 text-[10px] text-stone-300">
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-bold text-emerald-400">GPay</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-bold text-purple-400">PhonePe</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-bold text-sky-400">Paytm / UPI</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-medium">Cards (Visa/Mastercard)</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-medium">NetBanking</span>
                </div>
              </div>

            </form>

          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 10. FAQ ACCORDION -->
  <!-- ============================================================== -->
  <section id="faq" class="py-16 sm:py-24 px-4 sm:px-6 bg-white relative">
    <div class="max-w-4xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-4 mb-14">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 border border-slate-300 text-slate-800 text-xs font-bold uppercase tracking-wider">
          <span>❓ Got Questions?</span>
        </div>

        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Frequently Asked Questions
        </h2>

        <p class="text-base text-slate-600">
          Everything you need to know about the Rehoboth Ministries webinar.
        </p>
      </div>

      <!-- FAQ Accordion List -->
      <div class="space-y-4" id="faq-accordion">
        
        <!-- FAQ 1 -->
        <div class="border border-stone-200 rounded-2xl overflow-hidden transition-all bg-stone-50">
          <button 
            type="button" 
            class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 text-base sm:text-lg hover:text-amber-600 transition-colors"
            onclick="toggleFaq(this)"
            aria-expanded="false"
          >
            <span>Will a recording be provided?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Yes! A high-definition pre-recorded session is provided along with weekly live Q&A sessions and ongoing spiritual community activities, so you can review the teachings as many times as you need.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="border border-stone-200 rounded-2xl overflow-hidden transition-all bg-stone-50">
          <button 
            type="button" 
            class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 text-base sm:text-lg hover:text-amber-600 transition-colors"
            onclick="toggleFaq(this)"
            aria-expanded="false"
          >
            <span>Who is this webinar meant for?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            It is open to all adults (18+) seeking genuine spiritual depth, deliverance, and direction—whether you are a seasoned believer, youth leader, pastor, or someone feeling stuck and longing for an encounter with God.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="border border-stone-200 rounded-2xl overflow-hidden transition-all bg-stone-50">
          <button 
            type="button" 
            class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 text-base sm:text-lg hover:text-amber-600 transition-colors"
            onclick="toggleFaq(this)"
            aria-expanded="false"
          >
            <span>How will I receive the joining link?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Your private Zoom access link and calendar invitations will be sent directly to your registered WhatsApp number and Email within minutes of completing your registration. Reminders will also be sent 1 hour and 15 minutes before the session begins.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="border border-stone-200 rounded-2xl overflow-hidden transition-all bg-stone-50">
          <button 
            type="button" 
            class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 text-base sm:text-lg hover:text-amber-600 transition-colors"
            onclick="toggleFaq(this)"
            aria-expanded="false"
          >
            <span>What if I make the payment and don't receive instant confirmation?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Do not worry! Our dedicated support team is available around the clock to verify your transaction instantly via WhatsApp (+91 98400 00000 placeholder) and Email. Your seat will remain reserved.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="border border-stone-200 rounded-2xl overflow-hidden transition-all bg-stone-50">
          <button 
            type="button" 
            class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 text-base sm:text-lg hover:text-amber-600 transition-colors"
            onclick="toggleFaq(this)"
            aria-expanded="false"
          >
            <span>What language is the webinar delivered in?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Tanglish—a comfortable, conversational blend of Tamil and English so everyone understands easily without heavy jargon or difficult theological barriers.
          </div>
        </div>

      </div>

    </div>
  </section>