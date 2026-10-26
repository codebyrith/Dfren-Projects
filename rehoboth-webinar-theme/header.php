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
<body <?php body_class('bg-brand-cream text-slate-800 antialiased selection:bg-brand-gold selection:text-brand-navy pb-16 md:pb-0'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

  <!-- ============================================================== -->
  <!-- 1. TOP ANNOUNCEMENT BANNER (FIXED GLOWING HEADER BAR) -->
  <!-- ============================================================== -->
  <header class="bg-gradient-to-r from-red-700 via-rose-600 to-amber-600 text-white text-xs md:text-sm font-bold py-2.5 px-3 sticky top-0 z-50 shadow-lg shadow-red-600/30 border-b border-amber-300/40 backdrop-blur-md">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
      <!-- Left side message: High-visibility glowing background & bold white text -->
      <div class="flex items-center gap-2.5 mx-auto md:mx-0">
        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-black bg-white text-red-700 uppercase tracking-wider animate-pulse shadow-sm">
          <span class="w-2 h-2 rounded-full bg-red-600 mr-1.5 animate-ping"></span>
          LIVE
        </span>
        <span class="text-white text-xs sm:text-sm font-black tracking-tight drop-shadow">
          🔴 LIVE WEBINAR: Break Family Bondages &amp; Hear God's Voice in 150 Mins
        </span>
      </div>

      <!-- Right side timer -->
      <div class="hidden sm:flex items-center gap-3 mx-auto md:mx-0 text-xs">
        <div class="flex items-center gap-1.5 bg-black/40 px-2.5 py-1 rounded-md border border-white/20 text-white font-medium">
          <svg class="w-4 h-4 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Batch Closes in:</span>
          <span id="banner-timer" class="font-mono font-bold text-amber-300">02h 47m 18s</span>
        </div>
      </div>
    </div>
  </header>

  <!-- Navigation Bar -->
  <nav class="bg-brand-navy border-b border-slate-800 text-white py-3.5 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-white p-1 flex items-center justify-center shadow-md shadow-amber-500/10 border border-amber-500/30 overflow-hidden group-hover:border-amber-400 transition-all flex-shrink-0">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth International Ministries" class="w-full h-full object-contain" />
        </div>
        <div>
          <span class="font-serif text-lg sm:text-2xl font-bold tracking-wide text-white block leading-none group-hover:text-amber-400 transition-colors">REHOBOTH</span>
          <span class="text-[9px] sm:text-[11px] tracking-widest text-amber-400 font-semibold uppercase">International Ministries</span>
        </div>
      </a>

      <div class="hidden lg:flex items-center gap-6 text-sm font-medium text-stone-300">
        <a href="#about-webinar" class="hover:text-amber-400 transition-colors">Overview</a>
        <a href="#testimonials" class="hover:text-amber-400 transition-colors">Wall of Love</a>
        <a href="#pain-points" class="hover:text-amber-400 transition-colors">Breakthroughs</a>
        <a href="#benefits" class="hover:text-amber-400 transition-colors">Benefits</a>
        <a href="#training" class="hover:text-amber-400 transition-colors">Curriculum</a>
        <a href="#how-it-works" class="hover:text-amber-400 transition-colors">How It Works</a>
        <a href="#mentor" class="hover:text-amber-400 transition-colors">Mentor</a>
        <a href="#faq" class="hover:text-amber-400 transition-colors">FAQ</a>
      </div>

      <div>
        <a href="#register" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg text-xs sm:text-sm shadow-md shadow-amber-500/20 transition-all transform hover:-translate-y-0.5">
          <span>Claim Pass @ ₹199</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>
    </div>
  </nav>
