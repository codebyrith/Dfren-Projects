<?php
/**
 * The Header for Rehoboth Webinar Theme
 *
 * @package Rehoboth_Webinar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" type="image/png" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              navy: '#0b1120',
              slate: '#0f172a',
              deep: '#1e293b',
              card: '#162032',
              cream: '#fafaf9',
              gold: '#f59e0b',
              goldDark: '#d97706',
              goldLight: '#fef3c7',
              goldMuted: '#fbbf24',
              accent: '#f59e0b',
              crimson: '#dc2626',
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            serif: ['"Cormorant Garamond"', 'serif'],
          },
          animation: {
            'pulse-subtle': 'pulseSubtle 2.5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            'shimmer': 'shimmer 2s linear infinite',
            'float': 'float 4s ease-in-out infinite',
          },
          keyframes: {
            pulseSubtle: {
              '0%, 100%': { transform: 'scale(1)', boxShadow: '0 0 0 0 rgba(245, 158, 11, 0.6)' },
              '50%': { transform: 'scale(1.02)', boxShadow: '0 0 0 14px rgba(245, 158, 11, 0)' },
            },
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-6px)' },
            }
          }
        }
      }
    }
  </script>

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-cream text-slate-800 antialiased selection:bg-brand-gold selection:text-brand-navy pb-24 md:pb-0 overflow-x-hidden'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

  <!-- ============================================================== -->
  <!-- 1. UNIFIED STICKY HEADER (ANNOUNCEMENT + NAVIGATION) -->
  <!-- ============================================================== -->
  <header class="sticky top-0 z-40 shadow-xl bg-brand-navy">
    
    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-red-700 via-rose-600 to-amber-600 text-white text-[11px] sm:text-xs md:text-sm font-bold py-2 px-3 border-b border-amber-300/30 backdrop-blur-md">
      <div class="max-w-7xl mx-auto flex items-center justify-between gap-2">
        <!-- Left side message -->
        <div class="flex items-center gap-2 mx-auto md:mx-0 text-center sm:text-left">
          <span class="inline-flex items-center px-1.5 sm:px-2 py-0.5 rounded-full text-[10px] sm:text-[11px] font-black bg-white text-red-700 uppercase tracking-wider animate-pulse shadow-sm flex-shrink-0">
            <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-red-600 mr-1 sm:mr-1.5 animate-ping"></span>
            LIVE
          </span>
          <span class="text-white font-black tracking-tight drop-shadow truncate sm:overflow-visible">
            🔴 LIVE WEBINAR: Break Family Bondages &amp; Hear God's Voice in 150 Mins
          </span>
        </div>

        <!-- Right side review badge & timer -->
        <div class="hidden sm:flex items-center gap-2.5 mx-auto md:mx-0 text-xs">
          <div class="hidden lg:flex items-center gap-1.5 bg-black/40 px-2.5 py-1 rounded-md border border-white/20 text-white font-medium">
            <span class="text-amber-300 text-[11px]">⭐⭐⭐⭐⭐</span>
            <span class="font-bold text-amber-200">4.9/5</span>
            <span class="text-stone-300 text-[10px]">(5,000+ Reviews)</span>
          </div>

          <div class="flex items-center gap-1.5 bg-black/40 px-2.5 py-1 rounded-md border border-white/20 text-white font-medium">
            <svg class="w-3.5 h-3.5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span class="hidden md:inline">Batch Closes in:</span>
            <span id="banner-timer" class="font-mono font-bold text-amber-300">02h 47m 18s</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-brand-navy border-b border-slate-800 text-white py-2.5 sm:py-3.5 px-3 sm:px-6">
      <div class="max-w-7xl mx-auto flex items-center justify-between gap-2">
        
        <!-- Logo & Brand -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 sm:gap-2.5 group flex-shrink-0" title="Return to Home">
          <div class="w-9 h-9 sm:w-11 sm:h-11 rounded-xl bg-white p-1 flex items-center justify-center shadow-md shadow-amber-500/10 border border-amber-500/30 overflow-hidden group-hover:border-amber-400 transition-all flex-shrink-0">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth International Ministries" class="w-full h-full object-contain" />
          </div>
          <div>
            <span class="font-serif text-base sm:text-xl font-bold tracking-wide text-white block leading-none group-hover:text-amber-400 transition-colors">REHOBOTH</span>
            <span class="text-[8px] sm:text-[10px] tracking-widest text-amber-400 font-semibold uppercase block mt-0.5">International Ministries</span>
          </div>
        </a>

        <!-- Desktop Navigation Menu Items -->
        <div class="hidden lg:flex items-center gap-5 xl:gap-6 text-sm font-medium text-stone-300">
          <a href="<?php echo esc_url(home_url('/overview')); ?>" class="hover:text-amber-400 transition-colors">Overview</a>
          <a href="<?php echo esc_url(home_url('/testimonials')); ?>" class="hover:text-amber-400 transition-colors">Wall of Love</a>
          <a href="<?php echo esc_url(home_url('/breakthroughs')); ?>" class="hover:text-amber-400 transition-colors">Breakthroughs</a>
          <a href="<?php echo esc_url(home_url('/benefits')); ?>" class="hover:text-amber-400 transition-colors">Benefits</a>
          <a href="<?php echo esc_url(home_url('/curriculum')); ?>" class="hover:text-amber-400 transition-colors">Curriculum</a>
          <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="hover:text-amber-400 transition-colors">How It Works</a>
          <a href="<?php echo esc_url(home_url('/mentor')); ?>" class="hover:text-amber-400 transition-colors">Mentor</a>
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="hover:text-amber-400 transition-colors">FAQ</a>
        </div>

        <!-- Right Side: CTA Button + Mobile Hamburger Menu Toggle -->
        <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
          <a href="<?php echo esc_url(home_url('/register')); ?>" class="inline-flex items-center gap-1 sm:gap-1.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-extrabold px-3 sm:px-4 py-2 rounded-lg text-xs sm:text-sm shadow-md shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
            <span class="hidden xs:inline sm:inline">Claim Pass @</span>
            <span>₹199</span>
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>

          <!-- Mobile Hamburger Menu Button -->
          <button 
            type="button" 
            id="mobile-menu-btn" 
            onclick="toggleMobileSidebar(true)" 
            aria-label="Open Navigation Menu"
            class="lg:hidden p-2 rounded-xl bg-slate-800 text-stone-200 hover:text-amber-400 hover:bg-slate-700 border border-slate-700 transition-all flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-amber-400 cursor-pointer shadow-md"
          >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>

      </div>
    </nav>
  </header>

  <!-- ============================================================== -->
  <!-- MOBILE SIDEBAR / SIDE PANEL DRAWER -->
  <!-- ============================================================== -->
  <div 
    id="mobile-sidebar-overlay" 
    onclick="toggleMobileSidebar(false)" 
    class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-50 transition-opacity duration-300 opacity-0 pointer-events-none lg:hidden"
    aria-hidden="true"
  ></div>

  <aside 
    id="mobile-sidebar" 
    class="fixed inset-y-0 right-0 w-[85%] max-w-xs sm:max-w-sm bg-gradient-to-b from-slate-900 via-brand-navy to-slate-950 border-l border-amber-500/30 z-50 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between lg:hidden overflow-y-auto"
    aria-label="Mobile Navigation Sidebar"
  >
    <!-- Drawer Header -->
    <div class="p-4 border-b border-slate-800 flex items-center justify-between bg-slate-950/60">
      <a href="<?php echo esc_url(home_url('/')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-2.5">
        <div class="w-9 h-9 rounded-xl bg-white p-1 flex items-center justify-center border border-amber-500/30 shadow-md flex-shrink-0">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
        </div>
        <div>
          <span class="font-serif text-base font-bold text-white block leading-none">REHOBOTH</span>
          <span class="text-[8px] tracking-widest text-amber-400 font-semibold uppercase block mt-0.5">Ministries</span>
        </div>
      </a>
      <button 
        type="button" 
        onclick="toggleMobileSidebar(false)" 
        aria-label="Close Navigation Menu"
        class="w-9 h-9 rounded-xl bg-slate-800 text-stone-400 hover:text-white hover:bg-slate-700 flex items-center justify-center border border-slate-700 transition cursor-pointer text-lg font-bold"
      >
        ✕
      </button>
    </div>

    <!-- Drawer Navigation Links -->
    <div class="px-3 py-4 space-y-1 flex-grow overflow-y-auto">
      <div class="text-[10px] font-bold uppercase tracking-wider text-amber-400/80 px-3 py-1 mb-1">
        Menu Navigation
      </div>
      <a href="<?php echo esc_url(home_url('/overview')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">🏛️</span>
        <span>Overview</span>
      </a>
      <a href="<?php echo esc_url(home_url('/testimonials')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">⭐</span>
        <span>Wall of Love (Reviews)</span>
      </a>
      <a href="<?php echo esc_url(home_url('/breakthroughs')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">⚡</span>
        <span>Breakthroughs</span>
      </a>
      <a href="<?php echo esc_url(home_url('/benefits')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">🌟</span>
        <span>Benefits</span>
      </a>
      <a href="<?php echo esc_url(home_url('/curriculum')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">📖</span>
        <span>Curriculum</span>
      </a>
      <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">✨</span>
        <span>How It Works</span>
      </a>
      <a href="<?php echo esc_url(home_url('/mentor')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">🕊️</span>
        <span>Meet Prophet Michael</span>
      </a>
      <a href="<?php echo esc_url(home_url('/faq')); ?>" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm font-medium text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 transition-all">
        <span class="text-base">❓</span>
        <span>FAQ &amp; Guarantees</span>
      </a>
    </div>

    <!-- Drawer Footer Actions -->
    <div class="p-4 border-t border-slate-800 bg-slate-950/90 space-y-3">
      <a href="<?php echo esc_url(home_url('/register')); ?>" onclick="toggleMobileSidebar(false)" class="w-full bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-sm py-3 px-4 rounded-xl shadow-lg shadow-amber-500/30 flex items-center justify-center gap-2 transition-all">
        <span>Claim Pass @ ₹199</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>

      <div class="flex items-center justify-center gap-1.5 text-[11px] text-stone-300 font-medium">
        <span class="text-amber-400">⭐⭐⭐⭐⭐</span>
        <span>4.9/5 • 5,000+ Believers</span>
      </div>

      <div class="pt-2 border-t border-slate-800 text-center">
        <a href="https://wa.me/919886914599" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs text-emerald-400 hover:text-emerald-300 font-semibold">
          <span>💬 WhatsApp: +91 98869 14599</span>
        </a>
      </div>
    </div>
  </aside>
