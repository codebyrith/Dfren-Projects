<?php
/**
 * The Header for Rehoboth Webinar Theme
 *
 * @package Rehoboth_Webinar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" type="image/png" />

  <!-- Google Fonts: Plus Jakarta Sans & Cormorant Garamond -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

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
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            serif: ['"Cormorant Garamond"', 'serif'],
          }
        }
      }
    }
  </script>

  <style>
    html, body {
      max-width: 100vw !important;
      overflow-x: clip !important;
      width: 100%;
      position: relative;
    }
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #0b1120;
      color: #0f172a;
    }
    .gold-gradient-text {
      background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 50%, #d97706 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero-glow {
      background: radial-gradient(circle at 50% 20%, rgba(245, 158, 11, 0.12) 0%, rgba(11, 17, 32, 0) 75%);
    }
    .card-glass {
      background: rgba(22, 32, 50, 0.75);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(245, 158, 11, 0.2);
    }
    .card-glass-hover:hover {
      border-color: rgba(245, 158, 11, 0.5);
      transform: translateY(-2px);
      transition: all 0.25s ease;
    }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-navy text-slate-100 antialiased selection:bg-brand-gold selection:text-brand-navy pb-20 md:pb-0'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

  <!-- 1. TOP HEADER / NAV BAR (CLEAN, NO DISTRACTING MENU LINKS) -->
  <header class="sticky top-0 z-40 bg-brand-navy/95 backdrop-blur-md border-b border-slate-800">
    <!-- Top Announcement Strip (Real Batch Information) -->
    <div class="bg-gradient-to-r from-amber-600 via-amber-500 to-amber-600 text-slate-950 py-1.5 px-3 text-center text-xs font-bold tracking-tight">
      <div class="max-w-6xl mx-auto flex items-center justify-center gap-2">
        <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-black bg-slate-950 text-amber-400 uppercase tracking-wider">
          LIVE ZOOMLINK
        </span>
        <span>Next Batch: Friday, Saturday &amp; Sunday · 7:30 PM IST · Live in Tanglish</span>
      </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between gap-3">
      <!-- Left: Logo & Ministry Brand -->
      <a href="#" class="flex items-center gap-2.5 group flex-shrink-0">
        <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white p-1 flex items-center justify-center border border-amber-500/40 shadow-md overflow-hidden flex-shrink-0">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
        </div>
        <div>
          <span class="font-serif text-base sm:text-xl font-bold tracking-wide text-white block leading-tight group-hover:text-amber-400 transition-colors">
            REHOBOTH
          </span>
          <span class="text-[8.5px] sm:text-[10px] tracking-widest text-amber-400 font-semibold uppercase block leading-none">
            International Ministries
          </span>
        </div>
      </a>

      <!-- Right: WhatsApp Helpline + Direct CTA Button (No distracting anchor menus) -->
      <div class="flex items-center gap-2 sm:gap-4 flex-shrink-0">
        <a 
          href="https://wa.me/919886914599?text=Hi%20Rehoboth%20Ministries,%20I%20have%20a%20question%20about%20the%20Courts%20of%20Heaven%20webinar." 
          target="_blank" 
          rel="noopener noreferrer" 
          class="hidden sm:inline-flex items-center gap-1.5 text-xs text-emerald-400 hover:text-emerald-300 font-semibold transition-colors px-2.5 py-1.5 rounded-lg hover:bg-slate-800"
        >
          <span>💬 +91 98869 14599</span>
        </a>

        <a 
          href="#register" 
          onclick="scrollToForm(); return false;" 
          class="inline-flex items-center gap-1.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black px-3.5 sm:px-5 py-2 rounded-xl text-xs sm:text-sm shadow-md shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 active:scale-95 whitespace-nowrap"
        >
          <span>Claim Pass @ ₹199</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>
    </nav>
  </header>
