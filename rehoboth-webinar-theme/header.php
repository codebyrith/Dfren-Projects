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
              gold: '#f59e0b',
              goldDark: '#d97706',
              goldLight: '#fef3c7',
              navy: '#0f172a',
              slate: '#1e293b',
              grayBg: '#f8fafc',
              warmBg: '#fbfbfb',
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
      background-color: #ffffff;
      color: #0f172a;
    }
    .gold-gradient-text {
      background: linear-gradient(135deg, #d97706 0%, #b45309 50%, #92400e 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .light-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
    }
    .light-card-hover:hover {
      border-color: #cbd5e1;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
      transform: translateY(-2px);
      transition: all 0.25s ease;
    }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-slate-900 antialiased selection:bg-amber-200 selection:text-slate-900 pb-20 md:pb-0'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

  <!-- 1. TOP HEADER / NAV BAR (CLEAN LIGHT THEME, NO ORANGE BANNER, NO MENU BAR) -->
  <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-xs">
    <nav class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between gap-3">
      <!-- Left: Logo & Ministry Brand -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2.5 group flex-shrink-0">
        <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white p-1 flex items-center justify-center border border-slate-200 shadow-xs overflow-hidden flex-shrink-0">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
        </div>
        <div>
          <span class="font-serif text-base sm:text-xl font-bold tracking-wide text-slate-900 block leading-tight group-hover:text-amber-600 transition-colors">
            REHOBOTH
          </span>
          <span class="text-[8.5px] sm:text-[10px] tracking-widest text-amber-600 font-bold uppercase block leading-none">
            International Ministries
          </span>
        </div>
      </a>

      <!-- Right: WhatsApp Helpline + Direct CTA Button -->
      <div class="flex items-center gap-2 sm:gap-4 flex-shrink-0">
        <a 
          href="https://wa.me/919886914599?text=Hi%20Rehoboth%20Ministries,%20I%20have%20a%20question%20about%20the%20Courts%20of%20Heaven%20webinar." 
          target="_blank" 
          rel="noopener noreferrer" 
          class="hidden sm:inline-flex items-center gap-1.5 text-xs text-emerald-700 hover:text-emerald-800 font-bold transition-colors px-3 py-1.5 rounded-lg hover:bg-slate-50 border border-slate-200"
        >
          <span>💬 +91 98869 14599</span>
        </a>

        <button 
          type="button"
          onclick="openRegistrationModal()" 
          class="inline-flex items-center gap-1.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black px-4 sm:px-5 py-2 rounded-xl text-xs sm:text-sm shadow-md shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 active:scale-95 whitespace-nowrap cursor-pointer"
        >
          <span>Claim Pass @ ₹199</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </button>
      </div>
    </nav>
  </header>
