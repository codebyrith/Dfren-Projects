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
  <!-- 2. HERO SECTION (ABOVE THE FOLD) -->
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
            Rehoboth International Ministries Presents • Deliverance &amp; Prophetic Masterclass
          </span>
        </div>
      </div>

      <!-- Main Two-Column Hero Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        
        <!-- Left Column: Copy & Value Proposition -->
        <div class="lg:col-span-7 text-center lg:text-left space-y-6">
          
          <!-- Social Proof Rating Badge (Replaced 3rd image content with ratings) -->
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/90 border border-amber-500/40 text-xs sm:text-sm font-bold shadow-md">
            <span class="text-amber-400">⭐⭐⭐⭐⭐</span>
            <span class="text-white">4.9/5 Rated by 5,000+ Believers</span>
          </div>

          <!-- Headline Change -->
          <h1 class="text-3xl sm:text-5xl lg:text-5xl font-extrabold tracking-tight leading-[1.15] text-white">
            Break Generational Bondages &amp; <br class="hidden sm:inline" />
            <span class="gold-gradient-text font-serif italic font-bold">Hear God's Voice in 150 Minutes</span> — Guaranteed
          </h1>

          <p class="text-base sm:text-lg text-stone-200 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
            Join Prophet Michael Rehoboth in a live 150-minute Tanglish masterclass. Learn the step-by-step Courts of Heaven prayer blueprint that has already helped 5,000+ Tamil believers experience instant healing, peace, and spiritual authority.
          </p>

          <!-- Subheadline / Target Audience Hook (Incorporate Profiles 1–5) -->
          <div class="bg-slate-900/90 border border-amber-500/30 rounded-2xl p-4 sm:p-5 text-left shadow-xl backdrop-blur-md space-y-3">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              <span>This Masterclass Is Specially For You If:</span>
            </div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-stone-200">
              <li class="flex items-start gap-2 bg-slate-800/60 p-2 rounded-lg border border-slate-700/60">
                <span class="text-amber-400 font-bold">1.</span>
                <span>The one who <strong>wants to grow spiritually</strong> and deepen intimacy with God.</span>
              </li>
              <li class="flex items-start gap-2 bg-slate-800/60 p-2 rounded-lg border border-slate-700/60">
                <span class="text-amber-400 font-bold">2.</span>
                <span>The one who is <strong>stuck spiritually</strong> and doesn't know the next step or next life episode.</span>
              </li>
              <li class="flex items-start gap-2 bg-slate-800/60 p-2 rounded-lg border border-slate-700/60">
                <span class="text-amber-400 font-bold">3.</span>
                <span>The one in <strong>ministry</strong> but not able to perform or activate at the next level.</span>
              </li>
              <li class="flex items-start gap-2 bg-slate-800/60 p-2 rounded-lg border border-slate-700/60">
                <span class="text-amber-400 font-bold">4.</span>
                <span>Those wanting to <strong>see God, know God, and hear from God</strong> to improve their inner spirit man.</span>
              </li>
              <li class="flex items-start gap-2 bg-slate-800/60 p-2 rounded-lg border border-slate-700/60 sm:col-span-2">
                <span class="text-amber-400 font-bold">5.</span>
                <span>Those <strong>stuck or operating under negative portals</strong>, generational patterns, or recurring situations.</span>
              </li>
            </ul>
          </div>

          <!-- Key Details Badges (Grid of 4) -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-1">
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
              <div class="text-[10px] text-stone-400">Believers &amp; Seekers</div>
            </div>
          </div>

          <!-- Price Hook Card & CTA Block -->
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

              <!-- CTA Button & Social Proof Underneath -->
              <div class="flex flex-col items-center sm:items-end gap-1.5 flex-shrink-0">
                <a href="#register" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-extrabold text-base sm:text-lg px-7 py-3.5 rounded-xl shadow-lg shadow-amber-500/30 transition-all transform hover:-translate-y-1 animate-pulse-subtle">
                  <span>Claim My ₹199 Fellowship Pass</span>
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                
                <!-- Social Proof Rating directly under CTA button -->
                <div class="flex items-center gap-1.5 text-xs font-bold text-amber-300 pt-0.5">
                  <span>⭐⭐⭐⭐⭐</span>
                  <span class="text-white">4.9/5 Rated by 5,000+ Believers</span>
                </div>
              </div>
            </div>

            <!-- Trust Note -->
            <div class="mt-4 pt-3 border-t border-slate-700/60 flex flex-wrap items-center justify-between text-[11px] sm:text-xs text-stone-300 gap-2">
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>⚡ Instant Zoom link on WhatsApp &amp; Email</span>
              </div>
              <div class="flex items-center gap-1.5 text-amber-400 font-medium">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span>100% Peace of Mind Money-Back Guarantee</span>
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
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/prophet-michael-hero.jpg'); ?>" 
                alt="Prophet Michael Rehoboth - Christian Minister &amp; Spiritual Deliverance Coach" 
                class="w-full h-[460px] sm:h-[520px] object-cover"
                style="object-position: center 95%;"
                loading="eager"
              />
              
              <!-- Gradient Overlay for Bottom Details -->
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>

              <!-- Top Left Floating Pill -->
              <div class="absolute top-4 left-4 bg-slate-900/90 backdrop-blur-md border border-amber-500/40 text-amber-300 px-3 py-1.5 rounded-full text-xs font-semibold flex items-center gap-1.5 shadow-lg">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <span>Host &amp; Lead Mentor</span>
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
                      Ministry &amp; Deliverance Coach
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
  <!-- 2.5. TRUST & AUTHORITY MEDIA STRIP (CRO AUDIT: BELOW-THE-FOLD SOCIAL PROOF) -->
  <!-- ============================================================== -->
  <div class="bg-slate-950 border-y border-amber-500/20 py-5 px-4 sm:px-6 relative z-20">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-5">
      <!-- Rating & Community Proof -->
      <div class="flex items-center gap-3.5">
        <div class="flex -space-x-2">
          <div class="w-8 h-8 rounded-full bg-slate-800 border-2 border-amber-400 text-amber-300 font-bold text-xs flex items-center justify-center shadow">✝️</div>
          <div class="w-8 h-8 rounded-full bg-slate-700 border-2 border-amber-400 text-amber-300 font-bold text-xs flex items-center justify-center shadow">📖</div>
          <div class="w-8 h-8 rounded-full bg-slate-800 border-2 border-amber-400 text-amber-300 font-bold text-xs flex items-center justify-center shadow">🕊️</div>
          <div class="w-8 h-8 rounded-full bg-slate-700 border-2 border-amber-400 text-amber-300 font-bold text-xs flex items-center justify-center shadow">🔥</div>
        </div>
        <div>
          <div class="flex items-center gap-2">
            <span class="text-amber-400 text-xs">⭐⭐⭐⭐⭐</span>
            <span class="text-white text-xs font-black tracking-wide">4.92 / 5.0 RATING</span>
          </div>
          <p class="text-[11px] text-stone-400 font-medium">5,000+ Believers Mentored • 14+ Countries Worldwide</p>
        </div>
      </div>

      <!-- Authority Trust Pillars / Press -->
      <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-4 text-stone-300 text-[11px] font-bold uppercase tracking-wider">
        <span class="inline-flex items-center gap-1.5 bg-slate-900 border border-slate-800 px-3 py-1.5 rounded-lg text-stone-300 shadow-sm">
          <span class="text-amber-400">📺</span> Christian Satellite TV
        </span>
        <span class="inline-flex items-center gap-1.5 bg-slate-900 border border-slate-800 px-3 py-1.5 rounded-lg text-stone-300 shadow-sm">
          <span class="text-amber-400">📻</span> Tamil Christian Radio
        </span>
        <span class="inline-flex items-center gap-1.5 bg-slate-900 border border-slate-800 px-3 py-1.5 rounded-lg text-stone-300 shadow-sm">
          <span class="text-amber-400">🌍</span> Global Apostolic Network
        </span>
        <span class="inline-flex items-center gap-1.5 bg-slate-900 border border-slate-800 px-3 py-1.5 rounded-lg text-amber-400 shadow-sm">
          <span class="text-emerald-400 font-black">✓</span> 100% Biblical Doctrine
        </span>
      </div>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- 3. SOCIAL PROOF SECTION (WALL OF LOVE - IN TOP 30% OF PAGE) -->
  <!-- ============================================================== -->
  <section id="testimonials" class="py-16 sm:py-24 px-4 sm:px-6 bg-stone-100 relative border-b border-stone-200">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-10">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold uppercase tracking-wider">
          <span>🕊️ Verified Transformations • Wall of Love</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          Real Breakthroughs from Believers Who <br class="hidden sm:inline" />
          <span class="gold-gradient-text font-serif italic">Broke Bondages &amp; Heard God</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600">
          Real before and after transformation stories from Tamil believers and ministry workers across India and worldwide.
        </p>
      </div>

      <!-- CRO Audit: Featured Video Breakthrough Showcase Card -->
      <div class="mb-10 bg-white rounded-2xl p-6 sm:p-8 border border-amber-500/30 shadow-md">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          <!-- Video Thumbnail Container with Play Overlay -->
          <div class="lg:col-span-5 relative group cursor-pointer rounded-2xl overflow-hidden bg-slate-900 border border-slate-800 shadow-lg aspect-video flex items-center justify-center" onclick="openVideoModal()">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="w-16 h-16 rounded-full bg-red-600 hover:bg-red-500 text-white flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
            <div class="absolute bottom-3 left-4 right-4 text-left">
              <span class="text-[10px] font-black uppercase tracking-wider text-amber-400 bg-black/70 px-2 py-0.5 rounded border border-white/10">▶ 3-Min Video Testimony</span>
              <p class="text-xs font-bold text-white mt-1">Sister Stella &amp; Pastor David • Coimbatore Batch</p>
            </div>
          </div>

          <!-- Breakthrough Details & Before/After Comparison -->
          <div class="lg:col-span-7 space-y-4 text-left">
            <div class="flex flex-wrap items-center gap-2">
              <span class="text-amber-400 text-sm">⭐⭐⭐⭐⭐</span>
              <span class="text-xs font-bold uppercase tracking-wider bg-amber-100 text-amber-900 px-2.5 py-0.5 rounded">Featured Video Breakthrough</span>
              <span class="text-[11px] text-emerald-700 font-bold bg-emerald-50 px-2.5 py-0.5 rounded border border-emerald-200">✓ Verified Live Attendee</span>
            </div>
            <h3 class="text-xl sm:text-2xl font-black text-slate-900 leading-snug">
              "12 Years of Unbroken Sickness &amp; Generational Debt Ended in the Courts of Heaven."
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
              <div class="bg-red-50 p-3 rounded-xl border border-red-100 text-slate-700">
                <span class="font-bold text-red-700 block mb-1 uppercase text-[10px]">Before Masterclass:</span>
                "Fasted and prayed for 12 years. Continuous medical debt, midnight panic attacks, and fear that God's voice was completely out of reach."
              </div>
              <div class="bg-emerald-50 p-3 rounded-xl border border-emerald-100 text-slate-800">
                <span class="font-bold text-emerald-700 block mb-1 uppercase text-[10px]">After 150 Mins:</span>
                "Prophet Michael taught us how to present petitions before God's throne. Bloodline curse renounced. Full peace restored, debt cleared in 3 months!"
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Open 3-Column Grid (NO hidden carousels) covering Profiles 10–17 -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Story 1: Profile 10 & 13 - Samuel Jebaraj -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <div class="flex text-amber-400 text-sm">★★★★★</div>
              <span class="text-[10px] uppercase font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Generational Deliverance</span>
            </div>
            
            <div class="space-y-3 mb-4 text-xs">
              <div class="bg-red-50/70 p-2.5 rounded-lg border border-red-100 text-slate-700">
                <strong class="text-red-700 block mb-0.5 font-bold uppercase text-[10px]">Before:</strong>
                "7 years of severe night terrors, recurring oppression, and heavy medical debt. Every midnight felt like a spiritual battlefield."
              </div>
              <div class="bg-emerald-50/70 p-2.5 rounded-lg border border-emerald-100 text-slate-800 font-medium">
                <strong class="text-emerald-700 block mb-0.5 font-bold uppercase text-[10px]">After Breakthrough:</strong>
                "Delivered in the live prayer session! Prophet Michael dismantled the demonic legal right. Slept peacefully that very night—debt cleared within months."
              </div>
            </div>
          </div>
          
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-500 to-amber-600 text-slate-950 font-bold flex items-center justify-center text-sm shadow">
              SJ
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Samuel Jebaraj</div>
              <div class="text-[11px] text-slate-500">Chennai • IT Professional (Verified Attendee)</div>
            </div>
          </div>
        </div>

        <!-- Story 2: Profile 11 & 14 - David & Kezia -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <div class="flex text-amber-400 text-sm">★★★★★</div>
              <span class="text-[10px] uppercase font-bold text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">Personal Prophecy &amp; Marriage</span>
            </div>
            
            <div class="space-y-3 mb-4 text-xs">
              <div class="bg-red-50/70 p-2.5 rounded-lg border border-red-100 text-slate-700">
                <strong class="text-red-700 block mb-0.5 font-bold uppercase text-[10px]">Before:</strong>
                "Marriage of 4 years was on the verge of divorce. We were serving in worship but spiritually bitter, numb, and living in separate rooms."
              </div>
              <div class="bg-emerald-50/70 p-2.5 rounded-lg border border-emerald-100 text-slate-800 font-medium">
                <strong class="text-emerald-700 block mb-0.5 font-bold uppercase text-[10px]">After Breakthrough:</strong>
                "Prophet Michael called out our exact situation and prayed. Applied the Courts of Heaven blueprint; reconciled in tears within 3 weeks!"
              </div>
            </div>
          </div>
          
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-emerald-500 to-teal-600 text-white font-bold flex items-center justify-center text-sm shadow">
              DK
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">David &amp; Kezia</div>
              <div class="text-[11px] text-slate-500">Bengaluru • Worship Leaders (Verified Attendees)</div>
            </div>
          </div>
        </div>

        <!-- Story 3: Profile 12 & 15 - Rachel Priya -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <div class="flex text-amber-400 text-sm">★★★★★</div>
              <span class="text-[10px] uppercase font-bold text-indigo-700 bg-indigo-50 px-2 py-0.5 rounded border border-indigo-200">Spiritually Refreshed</span>
            </div>
            
            <div class="space-y-3 mb-4 text-xs">
              <div class="bg-red-50/70 p-2.5 rounded-lg border border-red-100 text-slate-700">
                <strong class="text-red-700 block mb-0.5 font-bold uppercase text-[10px]">Before:</strong>
                "Stuck in a dry routine for 6 years. Attended church faithfully every Sunday, but could never hear God's voice or get direction for my business."
              </div>
              <div class="bg-emerald-50/70 p-2.5 rounded-lg border border-emerald-100 text-slate-800 font-medium">
                <strong class="text-emerald-700 block mb-0.5 font-bold uppercase text-[10px]">After Breakthrough:</strong>
                "Stepped out of my dry routine and got spiritually refreshed! The Tanglish teaching unlocked how to discern God's voice in my daily decisions."
              </div>
            </div>
          </div>
          
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-600 text-white font-bold flex items-center justify-center text-sm shadow">
              RP
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Rachel Priya</div>
              <div class="text-[11px] text-slate-500">Coimbatore • Business Owner (Verified Attendee)</div>
            </div>
          </div>
        </div>

        <!-- Story 4: Profile 16 - Pastor Joshua Andrews -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <div class="flex text-amber-400 text-sm">★★★★★</div>
              <span class="text-[10px] uppercase font-bold text-purple-700 bg-purple-50 px-2 py-0.5 rounded border border-purple-200">Ministry Activation</span>
            </div>
            
            <div class="space-y-3 mb-4 text-xs">
              <div class="bg-red-50/70 p-2.5 rounded-lg border border-red-100 text-slate-700">
                <strong class="text-red-700 block mb-0.5 font-bold uppercase text-[10px]">Before:</strong>
                "Operating in ministry for 5 years, but felt dry and unable to activate spiritual gifts. Preaching without seeing tangible healing or deliverance."
              </div>
              <div class="bg-emerald-50/70 p-2.5 rounded-lg border border-emerald-100 text-slate-800 font-medium">
                <strong class="text-emerald-700 block mb-0.5 font-bold uppercase text-[10px]">After Breakthrough:</strong>
                "Received words I desperately needed and specialist instruction in prophetic ministry. My spiritual fire re-ignited; members now testifying miracles!"
              </div>
            </div>
          </div>
          
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-purple-500 to-pink-600 text-white font-bold flex items-center justify-center text-sm shadow">
              JA
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Pastor Joshua Andrews</div>
              <div class="text-[11px] text-slate-500">Tirunelveli • Ministry Leader (Verified Attendee)</div>
            </div>
          </div>
        </div>

        <!-- Story 5: Profile 17 - Anitha Mohan -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <div class="flex text-amber-400 text-sm">★★★★★</div>
              <span class="text-[10px] uppercase font-bold text-sky-700 bg-sky-50 px-2 py-0.5 rounded border border-sky-200">Bloodline Bonds Broken</span>
            </div>
            
            <div class="space-y-3 mb-4 text-xs">
              <div class="bg-red-50/70 p-2.5 rounded-lg border border-red-100 text-slate-700">
                <strong class="text-red-700 block mb-0.5 font-bold uppercase text-[10px]">Before:</strong>
                "Trapped under negative family patterns—depression, fear, and chronic sickness that affected three generations of women in our family."
              </div>
              <div class="bg-emerald-50/70 p-2.5 rounded-lg border border-emerald-100 text-slate-800 font-medium">
                <strong class="text-emerald-700 block mb-0.5 font-bold uppercase text-[10px]">After Breakthrough:</strong>
                "The midnight prayer warfare and Courts of Heaven protocol broke the bloodline bonds permanently. Peace reigns in our home today!"
              </div>
            </div>
          </div>
          
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-rose-500 to-red-600 text-white font-bold flex items-center justify-center text-sm shadow">
              AM
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">Anitha Mohan</div>
              <div class="text-[11px] text-slate-500">Madurai • Youth Worker (Verified Attendee)</div>
            </div>
          </div>
        </div>

        <!-- Story 6: Profile 10 & 18 - John Peter -->
        <div class="bg-white rounded-2xl p-6 border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <div class="flex text-amber-400 text-sm">★★★★★</div>
              <span class="text-[10px] uppercase font-bold text-teal-700 bg-teal-50 px-2 py-0.5 rounded border border-teal-200">Inner Power Activated</span>
            </div>
            
            <div class="space-y-3 mb-4 text-xs">
              <div class="bg-red-50/70 p-2.5 rounded-lg border border-red-100 text-slate-700">
                <strong class="text-red-700 block mb-0.5 font-bold uppercase text-[10px]">Before:</strong>
                "Felt completely powerless against worldly secret habits and guilt. Kept fasting for 21 days without knowing how to cancel the enemy's legal claims."
              </div>
              <div class="bg-emerald-50/70 p-2.5 rounded-lg border border-emerald-100 text-slate-800 font-medium">
                <strong class="text-emerald-700 block mb-0.5 font-bold uppercase text-[10px]">After Breakthrough:</strong>
                "Learned that I have more authority than I thought! The 5:00 AM blueprint transformed my inner spirit man. Totally delivered and walking in joy."
              </div>
            </div>
          </div>
          
          <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-500 to-indigo-600 text-white font-bold flex items-center justify-center text-sm shadow">
              JP
            </div>
            <div>
              <div class="font-bold text-slate-900 text-sm">John Peter</div>
              <div class="text-[11px] text-slate-500">Singapore • NRI Believer (Verified Attendee)</div>
            </div>
          </div>
        </div>

      </div>

      <!-- Trust Stat Banner -->
      <div class="mt-12 bg-white border border-stone-200 rounded-2xl p-5 text-center max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
        <div class="text-left text-xs sm:text-sm text-slate-700">
          <span class="font-bold text-slate-900 block">⭐ 4.9/5 Average Rating from 5,000+ Believers</span>
          <span>Attendees from Chennai, Coimbatore, Bengaluru, Madurai, Dubai, Singapore &amp; Global Tamil Diaspora</span>
        </div>
        <a href="#register" class="flex-shrink-0 bg-slate-900 hover:bg-slate-800 text-amber-400 font-extrabold px-6 py-2.5 rounded-xl text-xs sm:text-sm transition-all shadow-md">
          Claim My ₹199 Fellowship Pass →
        </a>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 4. PAIN POINT SECTION (FOR COLD TRAFFIC) -->
  <!-- ============================================================== -->
  <section id="pain-points" class="py-16 sm:py-24 px-4 sm:px-6 bg-white relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-14">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-50 border border-red-200 text-red-600 text-xs font-bold uppercase tracking-wider">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          Spiritual Reality Check For Seekers
        </div>

        <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
          Tired of Fasting and Praying for Years <br class="hidden sm:inline" />
          <span class="text-red-600 underline decoration-red-300 underline-offset-4">Without Seeing Breakthroughs?</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
          It's not your lack of faith or effort. Most believers struggle because nobody taught them the biblical legal protocols to plead in the Courts of Heaven and revoke demonic legal claims.
        </p>
      </div>

      <!-- 4 Agitation Cards Incorporating Profiles 6–9 -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Card 1: Profile 6 - How to develop spiritual discipline -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-red-600 block mb-1">Breakthrough Focus 01</span>
            <h3 class="text-lg font-bold text-slate-900 mb-2">How to Develop Spiritual Discipline</h3>
            <p class="text-xs text-slate-500 mb-3 italic">
              "Starting strong on Monday, dry and exhausted by Thursday..."
            </p>
            <p class="text-sm text-slate-600 leading-relaxed">
              Unpack proven biblical secrets to establish consistent intimacy in the secret place, so prayer transforms from an exhausting duty into an energizing daily divine encounter.
            </p>
          </div>
          <div class="mt-4 pt-3 border-t border-stone-200 text-xs font-bold text-amber-700 flex items-center gap-1">
            <span>✓ Resolved in 150 Mins</span>
          </div>
        </div>

        <!-- Card 2: Profile 7 - How to pray in the midnight hours -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block mb-1">Breakthrough Focus 02</span>
            <h3 class="text-lg font-bold text-slate-900 mb-2">How to Pray in the Midnight Hours</h3>
            <p class="text-xs text-slate-500 mb-3 italic">
              "Sleeping through spiritual watches while demonic altars attack..."
            </p>
            <p class="text-sm text-slate-600 leading-relaxed">
              Master the exact biblical protocols for midnight prayer watches. Learn how to take authority over spiritual gates, shut demonic attacks, and command your morning before dawn.
            </p>
          </div>
          <div class="mt-4 pt-3 border-t border-stone-200 text-xs font-bold text-amber-700 flex items-center gap-1">
            <span>✓ Resolved in 150 Mins</span>
          </div>
        </div>

        <!-- Card 3: Profile 8 - How to break curses & bloodline bonds -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-indigo-700 block mb-1">Breakthrough Focus 03</span>
            <h3 class="text-lg font-bold text-slate-900 mb-2">How to Break Curses &amp; Bloodline Bonds</h3>
            <p class="text-xs text-slate-500 mb-3 italic">
              "Fighting the exact illnesses and delays that troubled your parents..."
            </p>
            <p class="text-sm text-slate-600 leading-relaxed">
              Learn how to enter the Courts of Heaven, plead the Blood of Jesus, revoke ancient ancestral legal rights, and permanently sever generational cycles of poverty, divorce, and disease.
            </p>
          </div>
          <div class="mt-4 pt-3 border-t border-stone-200 text-xs font-bold text-amber-700 flex items-center gap-1">
            <span>✓ Resolved in 150 Mins</span>
          </div>
        </div>

        <!-- Card 4: Profile 9 - How to come out from addiction & worldly secret sins -->
        <div class="bg-stone-50 border border-stone-200 hover:border-amber-400 p-6 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative group flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700 block mb-1">Breakthrough Focus 04</span>
            <h3 class="text-lg font-bold text-slate-900 mb-2">How to Come Out from Addiction &amp; Secret Sins</h3>
            <p class="text-xs text-slate-500 mb-3 italic">
              "Weeping on Sunday, but returning to secret condemnation by Tuesday..."
            </p>
            <p class="text-sm text-slate-600 leading-relaxed">
              Targeted deliverance that destroys root spiritual strongholds. Experience Holy Spirit inner healing so you can overcome lust, worldly compromises, and walk in unashamed spiritual freedom.
            </p>
          </div>
          <div class="mt-4 pt-3 border-t border-stone-200 text-xs font-bold text-amber-700 flex items-center gap-1">
            <span>✓ Resolved in 150 Mins</span>
          </div>
        </div>

      </div>

      <!-- Quick Agitation Transition Banner -->
      <div class="mt-12 bg-amber-50 border border-amber-200 rounded-2xl p-6 text-center max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="text-left">
          <h4 class="font-bold text-slate-900 text-base">You do not have to live in spiritual frustration anymore.</h4>
          <p class="text-xs sm:text-sm text-slate-600">The Bible contains precise legal spiritual protocols that Prophet Michael will break down step-by-step.</p>
        </div>
        <a href="#register" class="flex-shrink-0 bg-slate-900 hover:bg-slate-800 text-amber-400 font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md">
          Break The Cycle Now @ ₹199 →
        </a>
      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 5. VALUE PROPOSITIONS & USPS (BENEFIT > FEATURE) -->
  <!-- ============================================================== -->
  <section id="benefits" class="py-16 sm:py-24 px-4 sm:px-6 bg-brand-cream relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider">
          <span>✨ Benefit > Feature Transformation</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          Tangible Life Breakthroughs — <br class="hidden sm:inline" />
          <span class="gold-gradient-text font-serif italic">Not Heavy Theological Jargon</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600 font-normal">
          Features describe what a webinar is; benefits describe what it does for your family, peace, and spiritual authority. Here is what changes in your life:
        </p>
      </div>

      <!-- 7 Key Benefit Cards (Profiles 10–18) -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Benefit 1: Profile 10 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Tangible Life Benefit 01</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Cancel Demonic Legal Rights</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Permanently stop recurring family sicknesses, marital strife, and generational poverty patterns by presenting the Blood of Jesus in the Courts of Heaven.
          </p>
        </div>

        <!-- Benefit 2: Profile 12 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Tangible Life Benefit 02</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Step Out of Your Routine &amp; Be Spiritually Refreshed</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Break away from dry, lifeless religious routines. Experience fresh personal revival and palpable Holy Spirit joy in your everyday walk with Jesus.
          </p>
        </div>

        <!-- Benefit 3: Profile 11 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Tangible Life Benefit 03</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Receive Impartation, Personal Prophecy &amp; Prayer</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Prophet Michael ministers live over registered participants with on-time prophetic direction, deliverance prayers, and Holy Spirit impartation.
          </p>
        </div>

        <!-- Benefit 4: Profile 13 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Tangible Life Benefit 04</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Meet &amp; Connect with New Spirit-Filled Believers</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Join an uplifting community of hungry believers across Tamil Nadu and global NRI communities. Form prayer partnerships and grow together.
          </p>
        </div>

        <!-- Benefit 5: Profile 14 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Tangible Life Benefit 05</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Get Direction &amp; Hear Clearly from God</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Never second-guess God's voice again. Wake up with crystal clarity—know God's exact 'Yes' or 'No' for your career, marriage, and family decisions.
          </p>
        </div>

        <!-- Benefit 6: Profile 15 -->
        <div class="bg-white rounded-2xl p-7 border border-stone-200/90 hover:border-amber-500/70 shadow-sm hover:shadow-xl transition-all duration-300 group">
          <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-5 group-hover:bg-amber-500 group-hover:text-white transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-1">Tangible Life Benefit 06</div>
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Stay Accountable &amp; Grounded in God's Presence</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Receive ongoing weekly Q&amp;A sessions and structured 7-day action blueprints to keep your spiritual altar blazing hot with consistency.
          </p>
        </div>

        <!-- Benefit 7: Profile 18 (Full Width on desktop grid) -->
        <div class="bg-gradient-to-r from-slate-900 to-slate-950 text-white rounded-2xl p-7 border-2 border-amber-500/70 shadow-xl md:col-span-2 lg:col-span-3 flex flex-col sm:flex-row items-center justify-between gap-6">
          <div class="space-y-2 text-left">
            <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400 bg-amber-500/20 px-3 py-1 rounded-full border border-amber-500/30">
              <span>⚡ Tangible Life Benefit 07</span>
            </div>
            <h3 class="text-xl sm:text-2xl font-bold text-white">Discover You Have More Than You Think &amp; Activate Inner Power</h3>
            <p class="text-sm text-stone-300 max-w-3xl leading-relaxed">
              Stop living like a spiritual victim. Realize the immense kingdom authority deposited in your spirit man through Jesus Christ, and start enforcing victory over sickness, debt, and fear.
            </p>
          </div>
          <a href="#register" class="flex-shrink-0 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-black px-6 py-3 rounded-xl text-xs sm:text-sm shadow-lg shadow-amber-500/20 whitespace-nowrap">
            Claim Pass @ ₹199 →
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 5.5. SCRIPTURE & VISION ANCHOR (JOHN 14:12) -->
  <!-- ============================================================== -->
  <section class="py-16 sm:py-20 px-4 sm:px-6 bg-gradient-to-r from-brand-slate via-brand-navy to-brand-slate text-white relative overflow-hidden">
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
          You were not called to merely survive as a Christian. You were called to operate in heavenly power, authority, and deep intimacy with Jesus.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 6. TRAINING & MENTORSHIP BREAKDOWN SECTION (PROFILES 19–24) -->
  <!-- ============================================================== -->
  <section id="training" class="py-16 sm:py-24 px-4 sm:px-6 bg-slate-900 text-white relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider">
          <span>🏛️ Training Curriculum &amp; Mentorship</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
          Comprehensive Training Modules to <br class="hidden sm:inline" />
          <span class="gold-gradient-text font-serif italic">Develop Your Prophetic Gift</span>
        </h2>

        <p class="text-base sm:text-lg text-stone-300">
          This is not vague theory. Receive specialized developmental instruction structured across 6 developmental modules.
        </p>
      </div>

      <!-- 6 Developmental Modules (Profiles 19–24) Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Module 1: Profile 19 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-25 absolute top-4 right-6 group-hover:opacity-50 transition-opacity">
            01
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Developmental Module 01</span>
          <h3 class="text-xl font-bold text-white mb-3">Develop Your Prophetic Gift</h3>
          <p class="text-sm text-stone-300 leading-relaxed">
            Training helps you develop your prophetic gift. Discover how your spiritual senses operate, how impressions form, and how to steward the prophetic mantle with biblical humility and precision.
          </p>
        </div>

        <!-- Module 2: Profile 20 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-25 absolute top-4 right-6 group-hover:opacity-50 transition-opacity">
            02
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Developmental Module 02</span>
          <h3 class="text-xl font-bold text-white mb-3">Learn from Experience &amp; Knowledge</h3>
          <p class="text-sm text-stone-300 leading-relaxed">
            Learn from other people’s experience and knowledge. Shorten decades of trial-and-error by understanding tested spiritual wisdom and overcoming common spiritual pitfalls before they occur.
          </p>
        </div>

        <!-- Module 3: Profile 21 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border-2 border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group shadow-xl shadow-amber-500/10">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-25 absolute top-4 right-6 group-hover:opacity-50 transition-opacity">
            03
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Developmental Module 03</span>
          <h3 class="text-xl font-bold text-white mb-3">Specialist Instruction in Your Gift</h3>
          <p class="text-sm text-stone-300 leading-relaxed">
            Enable you to receive specialist instruction in your gift. Get tailored guidance on warfare prayers, dream interpretation, healing, and personal deliverance according to biblical order.
          </p>
        </div>

        <!-- Module 4: Profile 22 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-25 absolute top-4 right-6 group-hover:opacity-50 transition-opacity">
            04
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Developmental Module 04</span>
          <h3 class="text-xl font-bold text-white mb-3">Environment in Which You Can Practice</h3>
          <p class="text-sm text-stone-300 leading-relaxed">
            Provide an environment in which you can practice. Cultivate confidence in listening to the Holy Spirit, prophesying, and speaking scripture in a safe, biblically sound fellowship setting.
          </p>
        </div>

        <!-- Module 5: Profile 23 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-25 absolute top-4 right-6 group-hover:opacity-50 transition-opacity">
            05
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Developmental Module 05</span>
          <h3 class="text-xl font-bold text-white mb-3">Feedback &amp; Mentorship</h3>
          <p class="text-sm text-stone-300 leading-relaxed">
            Provide opportunities to obtain feedback and mentorship. Receive ongoing weekly community Q&amp;A sessions where your questions are answered and your spiritual discernment is calibrated.
          </p>
        </div>

        <!-- Module 6: Profile 24 -->
        <div class="bg-gradient-to-b from-slate-800/80 to-slate-900/90 border border-slate-700/80 hover:border-amber-500 rounded-3xl p-8 relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group">
          <div class="text-amber-500 font-serif text-5xl font-extrabold opacity-25 absolute top-4 right-6 group-hover:opacity-50 transition-opacity">
            06
          </div>
          <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-amber-400 block mb-2">Developmental Module 06</span>
          <h3 class="text-xl font-bold text-white mb-3">Release Outdated Styles of Ministry</h3>
          <p class="text-sm text-stone-300 leading-relaxed">
            Help you identify and release outdated and hidden styles of ministry that breed religious burnout. Transition from striving in the flesh into resting in Christ's finished authority.
          </p>
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
            <h4 class="text-lg sm:text-xl font-bold text-white">Deliverance Prayer Blueprint, Consecration Guide &amp; Mentorship Notes</h4>
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
  <!-- 7. HOW IT WORKS SECTION (3 EFFORTLESS STEPS) -->
  <!-- ============================================================== -->
  <section id="how-it-works" class="py-16 sm:py-24 px-4 sm:px-6 bg-brand-cream relative">
    <div class="max-w-7xl mx-auto">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider">
          <span>⚡ Frictionless Experience</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
          How It Works in <span class="gold-gradient-text font-serif italic">3 Effortless Steps</span>
        </h2>

        <p class="text-base sm:text-lg text-slate-600">
          Zero friction. No long complicated forms. From registration to breakthrough in 3 simple steps:
        </p>
      </div>

      <!-- 3 Effortless Connected Steps Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative max-w-5xl mx-auto">
        
        <!-- Step 01 -->
        <div class="bg-white rounded-3xl p-8 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                01
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded border border-amber-200">30 Seconds</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 01</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Reserve in 30 Seconds</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Fill the fast 4-field checkout form with your name, WhatsApp number, email, and preferred evening batch slot. Simple and secure.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>No tedious paperwork or delays</span>
          </div>
        </div>

        <!-- Step 02 -->
        <div class="bg-white rounded-3xl p-8 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                02
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded border border-amber-200">Instant Delivery</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 02</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Get Zoom Link Instantly on WhatsApp</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Receive your private Zoom link, calendar invite, and session reminders directly on WhatsApp and Email within 2 minutes of booking.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>Reminders sent before start</span>
          </div>
        </div>

        <!-- Step 03 -->
        <div class="bg-white rounded-3xl p-8 border border-stone-200/90 hover:border-amber-500/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative group">
          <div>
            <div class="flex items-center justify-between mb-5">
              <span class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 font-mono font-extrabold text-lg flex items-center justify-center group-hover:bg-amber-500 group-hover:text-white transition-all shadow-inner">
                03
              </span>
              <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded border border-amber-200">150 Mins Live</span>
            </div>
            <p class="font-mono text-xs font-bold uppercase tracking-widest text-amber-600 mb-1">Step 03</p>
            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">Experience Breakthrough &amp; Download Blueprint</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Attend the live masterclass, receive personal prayer, and download your 7-Day Deliverance Action Plan PDF to sustain continuous victory.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-stone-100 text-xs text-stone-500 flex items-center gap-1.5">
            <span class="text-emerald-500 font-bold">✓</span>
            <span>Lifetime HD recording included</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 7.5. MEET YOUR MENTOR / AUTHORITY SECTION -->
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
                <p class="text-amber-400 text-xs font-semibold tracking-wider uppercase mt-1">Founder &amp; Presiding Minister • Rehoboth Ministries</p>
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
            Christian minister dedicated to proclaiming the Word of God, unlocking practical biblical principles, and helping believers walk in their divine purpose through prophetic ministry, healing, and deliverance.
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
            <h4 class="text-xs font-bold uppercase tracking-widest text-slate-500">Ministry Credibility &amp; Global Impartation</h4>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <!-- Experience Badge -->
              <div class="flex items-start gap-3 bg-stone-50 border border-stone-200 p-3.5 rounded-xl">
                <div class="w-9 h-9 rounded-lg bg-amber-500/20 text-amber-700 flex items-center justify-center flex-shrink-0 font-bold">
                  8+
                </div>
                <div>
                  <div class="font-bold text-slate-900 text-xs sm:text-sm">8+ Years Ministry Experience</div>
                  <div class="text-[11px] text-slate-500">Active apostolic &amp; deliverance coaching (2018 – 2026)</div>
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
              <span class="text-amber-400 font-bold block mb-1">Trained &amp; Mentored Under Notable Ministers:</span>
              <span>Prophet Angel Uebert • Prophet Jerome Fernando • Riaan Swiegelaar • James Kawalya</span>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 8. REGISTRATION / BOOKING CARD (HIGH CONVERSION CHECKOUT) -->
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
          Secure Your Fellowship Pass <span class="gold-gradient-text font-serif italic">@ ₹199</span>
        </h2>

        <p class="text-sm sm:text-base text-stone-300">
          Strictly limited batches to ensure live prayer, prophecy, and personal Q&amp;A interaction.
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
                  <span><strong>Live 150-Minute Interactive Masterclass</strong> with Prophet Michael</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Personal prophecy &amp; deliverance prayer</strong> session</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Downloadable Prayer Blueprint</strong> &amp; 7-Day Consecration Guide</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>Weekly Q&amp;A fellowship community access</strong></span>
                </li>
                <li class="flex items-start gap-2.5">
                  <span class="text-amber-400 font-bold">✓</span>
                  <span><strong>100% Peace-of-Mind Money-Back Guarantee</strong> (45 Mins)</span>
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

          <!-- Right: Interactive Registration Form (CRO Audit: Low Friction, Urgency & AOV Booster) -->
          <div class="lg:col-span-7 bg-slate-800/90 rounded-2xl p-6 sm:p-8 border border-amber-500/30 shadow-inner">
            <h4 class="text-lg font-bold text-white mb-1 flex items-center gap-2">
              <span>Enter Registration Details</span>
            </h4>
            <p class="text-xs text-stone-400 mb-4">Access credentials will be delivered instantly to your WhatsApp &amp; Email.</p>

            <!-- CRO Audit: Urgency & Scarcity Countdown Banner -->
            <div class="bg-red-500/10 border border-red-500/30 rounded-xl p-2.5 mb-5 flex flex-wrap items-center justify-between gap-2 text-xs text-red-300">
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-ping"></span>
                <span class="font-bold">🔥 14 Believers Viewing This Batch</span>
              </div>
              <div class="flex items-center gap-1.5 font-mono text-amber-300 font-bold text-[11px] bg-black/40 px-2 py-0.5 rounded border border-white/10">
                <span>Seat Held For:</span>
                <span id="checkout-seat-timer" class="text-amber-200">09:48</span>
              </div>
            </div>

            <form id="webinar-registration-form" class="space-y-4" onsubmit="handleRegistrationSubmit(event)">
              
              <!-- Full Name with Inline Validation -->
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
                    autocomplete="name"
                    placeholder="e.g. John Emmanuel"
                    oninput="validateName(this)"
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-stone-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                  />
                </div>
                <span id="name-error" class="hidden text-[10px] text-red-400 mt-1 block">Please enter your name</span>
              </div>

              <!-- Mobile Number with Validation -->
              <div>
                <label for="whatsapp" class="block text-xs font-semibold text-stone-300 uppercase tracking-wider mb-1">
                  WhatsApp Helpline / Mobile Number <span class="text-red-400">*</span>
                </label>
                <div class="flex rounded-xl overflow-hidden border border-slate-700 focus-within:border-amber-400 focus-within:ring-1 focus-within:ring-amber-400">
                  <span class="bg-slate-900 px-3.5 py-3 text-stone-400 text-sm border-r border-slate-700 flex items-center font-bold">
                    🇮🇳 +91
                  </span>
                  <input 
                    type="tel" 
                    id="whatsapp" 
                    name="whatsapp" 
                    required 
                    autocomplete="tel"
                    pattern="[0-9]{10}"
                    maxlength="10"
                    placeholder="Enter 10-digit WhatsApp number"
                    oninput="validatePhone(this)"
                    class="w-full bg-slate-900 px-4 py-3 text-sm text-white placeholder-stone-500 focus:outline-none transition"
                  />
                </div>
                <span id="phone-error" class="hidden text-[10px] text-red-400 mt-1 block">Please enter a valid 10-digit phone number</span>
                <span class="text-[10px] text-stone-400 mt-1 block">⚡ Zoom joining link &amp; private prayer notes are dispatched here immediately.</span>
              </div>

              <!-- Email Address with Validation -->
              <div>
                <label for="email" class="block text-xs font-semibold text-stone-300 uppercase tracking-wider mb-1">
                  Email Address <span class="text-red-400">*</span>
                </label>
                <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  required 
                  autocomplete="email"
                  placeholder="name@gmail.com"
                  oninput="validateEmail(this)"
                  class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white placeholder-stone-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition"
                />
                <span id="email-error" class="hidden text-[10px] text-red-400 mt-1 block">Please enter a valid email address</span>
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

              <!-- CRO Audit: AOV Booster / 1-Click Order Bump -->
              <div class="bg-gradient-to-r from-amber-500/15 via-amber-400/10 to-amber-500/15 border-2 border-dashed border-amber-500/60 rounded-xl p-3.5 my-3 text-left">
                <label class="flex items-start gap-3 cursor-pointer">
                  <input 
                    type="checkbox" 
                    id="orderBump" 
                    name="orderBump" 
                    onchange="toggleOrderBump(this)" 
                    class="mt-1 w-4 h-4 text-amber-500 rounded border-slate-700 bg-slate-900 focus:ring-amber-400 cursor-pointer"
                  />
                  <div class="space-y-1">
                    <div class="flex flex-wrap items-center gap-2">
                      <span class="bg-amber-500 text-slate-950 text-[9px] font-black px-1.5 py-0.5 rounded uppercase tracking-wider">ONE-TIME OFFER • SAVE 75%</span>
                      <span class="text-xs text-red-400 font-bold line-through">₹399</span>
                      <span class="text-xs text-amber-300 font-black">+₹99 Only</span>
                    </div>
                    <div class="text-xs font-bold text-white leading-tight">
                      Yes! Add the <span class="text-amber-400">"Courts of Heaven 30-Day Midnight Warfare Audio &amp; PDF Prayer Journal"</span>
                    </div>
                    <p class="text-[11px] text-stone-300 leading-snug">
                      Includes 30 targeted midnight prayers, scriptural decrees, and prophetic audio MP3 impartations to breakthrough generational blockages.
                    </p>
                  </div>
                </label>
              </div>

              <!-- CRO Audit: Transparent Order Summary -->
              <div class="bg-slate-900/95 rounded-xl p-3 border border-slate-700 text-xs text-stone-300 space-y-1.5">
                <div class="flex justify-between items-center">
                  <span>Fellowship Masterclass Pass:</span>
                  <span class="text-white font-bold">₹199</span>
                </div>
                <div id="bump-summary-row" class="hidden flex justify-between items-center text-amber-300 font-medium">
                  <span>30-Day Midnight Warfare Journal (Add-on):</span>
                  <span class="font-bold">+₹99</span>
                </div>
                <div class="flex justify-between items-center border-t border-slate-700/80 pt-1.5 font-bold text-sm text-white">
                  <span>Total Amount Payable:</span>
                  <span id="checkout-total-price" class="text-amber-400 text-base font-extrabold">₹199</span>
                </div>
                <p class="text-[10px] text-stone-400 flex items-center gap-1.5 pt-0.5">
                  <span class="text-emerald-400">✓</span> All Taxes &amp; Zoom Platform Access Included • Zero Hidden Charges
                </p>
              </div>

              <!-- Submit CTA Button -->
              <div class="pt-2">
                <button 
                  type="submit" 
                  id="submit-btn"
                  class="w-full bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-base sm:text-lg py-4 px-6 rounded-xl shadow-xl shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2 cursor-pointer"
                >
                  <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  <span id="submit-btn-text">🔒 Claim My ₹199 Fellowship Pass</span>
                </button>
              </div>

              <!-- Payment Methods Accepted Badge & Security Seals -->
              <div class="pt-3 text-center space-y-2">
                <div class="text-[11px] text-stone-300 flex items-center justify-center gap-1.5 font-medium">
                  <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                  <span>256-Bit Bank-Grade SSL Encrypted • Zero Payment Details Stored</span>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-1.5 text-[10px] text-stone-300">
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-bold text-emerald-400">GPay</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-bold text-purple-400">PhonePe</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-bold text-sky-400">Paytm / UPI</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-medium">Visa &amp; Mastercard</span>
                  <span class="bg-slate-900 border border-slate-700 px-2 py-0.5 rounded font-medium">RuPay</span>
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
  <!-- 8.5. FAQS & RISK REDUCERS (100% PEACE-OF-MIND GUARANTEE) -->
  <!-- ============================================================== -->
  <section id="faq" class="py-16 sm:py-24 px-4 sm:px-6 bg-white relative">
    <div class="max-w-4xl mx-auto">
      
      <!-- 100% PEACE-OF-MIND GUARANTEE BOX -->
      <div class="mb-16 bg-gradient-to-r from-amber-500/15 via-amber-400/10 to-amber-500/15 border-2 border-amber-500 rounded-3xl p-6 sm:p-10 shadow-xl relative overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center gap-6">
          <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-amber-500 to-amber-400 text-slate-950 flex items-center justify-center flex-shrink-0 shadow-lg">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div class="text-center sm:text-left space-y-2">
            <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-100 px-3 py-1 rounded-full border border-amber-300 inline-block">100% Spiritual Peace-of-Mind Guarantee</span>
            <h3 class="text-xl sm:text-2xl font-black text-slate-900 leading-snug">
              "Attend the first 45 minutes; if you don't experience absolute clarity and breakthrough, get an immediate unconditional refund of your ₹199."
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              We stand 100% behind the spiritual depth of this masterclass. Simply message our WhatsApp helpline (+91 98869 14599) during or immediately after the first 45 minutes. No hassle, no interrogation, 100% money back. You take zero risk!
            </p>
          </div>
        </div>
      </div>

      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-4 mb-14">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 border border-slate-300 text-slate-800 text-xs font-bold uppercase tracking-wider">
          <span>❓ Got Questions?</span>
        </div>

        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Frequently Asked Questions
        </h2>

        <p class="text-base text-slate-600">
          Everything you need to know about access, playback, and attendance.
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
            <span>Will a recording and playback access be provided?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Yes! Full high-definition recording access is provided along with weekly live Q&amp;A sessions and community updates, so you can re-watch and study the scriptures as often as you wish.
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
            <span>I belong to CSI / Pentecostal / Catholic / Baptist church. Can I attend?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Yes, absolutely! This masterclass is 100% Bible-centered and focuses entirely on the Lord Jesus Christ and biblical prayer protocols. Believers from all denominations and backgrounds attend and experience deep personal breakthroughs.
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
            <span>Can my family join with 1 pass?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Yes! One ₹199 Fellowship Pass covers your entire household watching together on one device screen (laptop, phone, or TV via Zoom). We encourage families to pray and receive deliverance together.
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
            <span>How will I receive the Zoom joining link?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Your private Zoom access link and calendar invitation will be delivered directly to your registered WhatsApp number and Email within minutes of completing registration. Reminder alerts are also sent 1 hour and 15 minutes before the session starts.
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
            Tanglish—a comfortable, conversational blend of Tamil and English so everyone can understand easily without heavy theological jargon or academic complexity.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="border border-stone-200 rounded-2xl overflow-hidden transition-all bg-stone-50">
          <button 
            type="button" 
            class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 text-base sm:text-lg hover:text-amber-600 transition-colors"
            onclick="toggleFaq(this)"
            aria-expanded="false"
          >
            <span>How does the 100% Money-Back Guarantee work?</span>
            <span class="faq-icon text-amber-600 transition-transform duration-300 text-xl font-mono ml-4">+</span>
          </button>
          <div class="faq-content hidden px-5 sm:px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-stone-200 pt-4">
            Attend the first 45 minutes of the masterclass. If you do not experience absolute biblical clarity and breakthrough, simply send a WhatsApp message to our helpline (+91 98869 14599) for an immediate, unconditional refund of your ₹199. No questions asked.
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================== -->
  <!-- 9. CLOSER SECTION (MINI-HERO FOOTER CTA) -->
  <!-- ============================================================== -->
  <section id="closer" class="py-16 sm:py-24 px-4 sm:px-6 bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 text-white relative border-t-2 border-amber-500/40 overflow-hidden">
    <!-- Ambient gold background glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-5xl mx-auto relative z-10 text-center space-y-6">
      
      <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-300 text-xs font-bold uppercase tracking-wider">
        <span>🔥 The Turning Point For Your Spiritual Life</span>
      </div>

      <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight max-w-3xl mx-auto">
        Don't Spend Another Year Struggling with the <br class="hidden sm:inline" />
        <span class="gold-gradient-text font-serif italic">Same Spiritual Frustrations.</span>
      </h2>

      <p class="text-stone-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
        150 Minutes • Prophet Michael • Courts of Heaven Blueprint • 100% Peace-of-Mind Guarantee • ₹199 (Save ₹800 Today)
      </p>

      <!-- CTA Button -->
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="#register" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-base sm:text-lg px-9 py-4 rounded-xl shadow-2xl shadow-amber-500/30 transition-all transform hover:-translate-y-1 animate-pulse-subtle">
          <span>Claim My ₹199 Fellowship Pass</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <!-- Trust Subtext Reinforcement -->
      <div class="pt-4 flex flex-wrap items-center justify-center gap-6 text-xs text-stone-400">
        <span class="flex items-center gap-1.5">
          <span class="text-emerald-400 font-bold">✓</span>
          <span>100% Unconditional 45-Min Money-Back Guarantee</span>
        </span>
        <span class="flex items-center gap-1.5">
          <span class="text-amber-400 font-bold">✓</span>
          <span>Instant Zoom link delivered on WhatsApp</span>
        </span>
        <span class="flex items-center gap-1.5">
          <span class="text-amber-400 font-bold">✓</span>
          <span>Covers entire household on 1 screen</span>
        </span>
      </div>

    </div>
  </section>