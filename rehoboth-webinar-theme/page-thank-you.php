<?php
/**
 * Template Name: Webinar Thank You Page
 * Description: Standalone, distraction-free thank you page for webinar bookings.
 *
 * @package Rehoboth_Webinar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title('|', true, 'right'); ?> Webinar Seat Confirmed</title>
  
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/rehoboth-logo.png'); ?>" type="image/png" />

  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            warmBg: '#FDF8F2',
            primaryText: '#2C1810',
            secondaryText: '#5A4238',
            mutedText: '#785A48',
            emeraldAccent: '#15803D',
            whatsappGreen: '#25D366',
            whatsappHover: '#20BD5A',
            cardBg: '#FFFBF5',
            calloutBg: '#FEF3E2',
            cardBorder: '#F3D9B1',
            calloutBorder: '#F5CBA7',
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #FDF8F2;
      color: #2C1810;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* Subtle smooth pulsing glow animation for WhatsApp CTA button */
    @keyframes pulseGlow {
      0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.65), 0 8px 24px -4px rgba(37, 211, 102, 0.4);
      }
      70% {
        box-shadow: 0 0 0 16px rgba(37, 211, 102, 0), 0 8px 24px -4px rgba(37, 211, 102, 0.4);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0), 0 8px 24px -4px rgba(37, 211, 102, 0.4);
      }
    }

    .pulse-btn {
      animation: pulseGlow 2.2s infinite cubic-bezier(0.4, 0, 0.6, 1);
    }
    .pulse-btn:hover {
      animation: none;
      box-shadow: 0 12px 28px -4px rgba(37, 211, 102, 0.55);
    }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#FDF8F2] text-[#2C1810] min-h-screen flex flex-col items-center justify-center py-16 sm:py-20 px-4 sm:px-6'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

  <!-- Main Centered Container (Max Width 680px) -->
  <main class="w-full max-w-[680px] mx-auto flex flex-col items-center text-center space-y-6 sm:space-y-7">

    <!-- Top Confirmation Badge (72px x 72px Circular Light-Green) -->
    <div class="w-[72px] h-[72px] rounded-full bg-[#DCFCE7] border-2 border-[#BBF7D0] flex items-center justify-center shadow-xs flex-shrink-0">
      <svg class="w-9 h-9 text-[#15803D]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
    </div>

    <!-- Hero Heading & Subtext Area -->
    <div class="space-y-2.5 sm:space-y-3">
      <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold tracking-tight text-[#2C1810] leading-tight">
        Your <span style="color: #15803D; font-style: italic;">Webinar Seat</span> is Confirmed!
      </h1>
      
      <p class="text-lg sm:text-xl font-bold text-[#2C1810]">
        Thank You for Your Booking ✨
      </p>

      <p class="text-sm sm:text-base text-[#5A4238] max-w-[540px] mx-auto leading-relaxed">
        Your registration for the live webinar has been successfully confirmed. You will receive a confirmation email shortly with your session details.
      </p>
    </div>

    <!-- Primary WhatsApp CTA Button (Full Width, Pill-Shaped, Pulse Animation) -->
    <div class="w-full pt-1">
      <a 
        href="https://wa.me/919071119295?text=Hi!%20I%20just%20booked%20my%20seat%20for%20the%20webinar.%20Please%20confirm%20my%20slot%20and%20share%20further%20updates." 
        target="_blank" 
        rel="noopener noreferrer" 
        class="pulse-btn w-full inline-flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#20BD5A] text-white font-bold text-base sm:text-lg px-8 py-4 sm:py-[18px] rounded-[50px] transition-all transform hover:-translate-y-0.5 active:scale-[0.99] cursor-pointer"
      >
        <!-- WhatsApp Icon SVG -->
        <svg class="w-6 h-6 fill-current flex-shrink-0" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.592 2.654-.696c1.004.573 1.832.879 2.806.879 3.181 0 5.767-2.586 5.768-5.766.001-3.18-2.585-5.767-5.768-5.767zm7.42 5.767c0 4.092-3.328 7.42-7.42 7.42-1.258 0-2.433-.314-3.468-.865l-4.563 1.196 1.218-4.444c-.655-1.096-1.027-2.378-1.027-3.747 0-4.092 3.328-7.42 7.42-7.42 4.092 0 7.42 3.328 7.42 7.42zm-3.649 2.282c-.2-.1-.58-.29-.67-.32-.09-.03-.16-.05-.23.05-.07.1-.27.34-.33.41-.06.07-.12.08-.22.03-.1-.05-.42-.15-.8-.49-.3-.27-.5-.6-.56-.7-.06-.1 0-.15.05-.2.04-.04.1-.11.15-.17.05-.06.07-.1.1-.17.03-.07.02-.13-.01-.18-.03-.05-.23-.55-.31-.76-.08-.2-.16-.17-.23-.17h-.2c-.07 0-.18.03-.27.13-.09.1-.35.34-.35.83 0 .49.36.96.41 1.03.05.07.71 1.08 1.72 1.52.24.1.43.16.58.21.24.08.46.07.63.04.19-.03.58-.24.66-.47.08-.23.08-.43.06-.47-.02-.04-.08-.07-.18-.12z"/>
        </svg>
        <span>WhatsApp us to confirm your slot</span>
      </a>
    </div>

    <!-- Verification Callout Box (Soft Warm Tint Card #FEF3E2) -->
    <div class="w-full bg-[#FEF3E2] border border-[#F5CBA7] rounded-2xl p-5 sm:p-6 text-center space-y-1.5 shadow-2xs">
      <p class="font-bold text-[#2C1810] text-sm sm:text-base leading-snug">
        Please click the WhatsApp button above and text our WhatsApp number to get updated with the webinar details.
      </p>
      <p class="text-xs sm:text-sm text-[#5A4238] leading-relaxed">
        This will help us verify your booking and send you direct session links and reminders.
      </p>
    </div>

    <!-- "What Happens Next" Card (#FFFBF5 with #F3D9B1 Border) -->
    <div class="w-full bg-[#FFFBF5] border border-[#F3D9B1] rounded-2xl p-6 sm:p-8 text-left shadow-xs space-y-5">
      
      <!-- Card Header with Subtle Divider -->
      <div class="border-b border-[#F3D9B1] pb-3">
        <h2 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#2C1810] flex items-center gap-2">
          <span>🙏 WHAT HAPPENS NEXT</span>
        </h2>
      </div>

      <!-- Numbered Steps (1, 2, 3) -->
      <ol class="space-y-4">
        <!-- Step 1 -->
        <li class="flex items-start gap-3.5 sm:gap-4">
          <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#15803D] text-white font-bold text-xs sm:text-sm flex items-center justify-center flex-shrink-0 mt-0.5 shadow-xs">
            1
          </span>
          <p class="text-xs sm:text-sm text-[#2C1810] leading-relaxed pt-0.5">
            You will receive a confirmation email shortly with your webinar registration details.
          </p>
        </li>

        <!-- Step 2 -->
        <li class="flex items-start gap-3.5 sm:gap-4">
          <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#15803D] text-white font-bold text-xs sm:text-sm flex items-center justify-center flex-shrink-0 mt-0.5 shadow-xs">
            2
          </span>
          <p class="text-xs sm:text-sm text-[#2C1810] leading-relaxed pt-0.5">
            Message our WhatsApp number using the button above to get timely reminders, session links, and webinar updates.
          </p>
        </li>

        <!-- Step 3 -->
        <li class="flex items-start gap-3.5 sm:gap-4">
          <span class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#15803D] text-white font-bold text-xs sm:text-sm flex items-center justify-center flex-shrink-0 mt-0.5 shadow-xs">
            3
          </span>
          <p class="text-xs sm:text-sm text-[#2C1810] leading-relaxed pt-0.5">
            Join the live session 5 minutes early so you don't miss anything.
          </p>
        </li>
      </ol>

    </div>

    <!-- Bottom Navigation Link (Centered & Underlined) -->
    <div class="pt-2">
      <a 
        href="<?php echo esc_url(home_url('/')); ?>" 
        class="text-xs sm:text-sm text-[#785A48] hover:text-[#2C1810] underline font-medium transition-colors"
      >
        ← Return to Homepage
      </a>
    </div>

  </main>

  <?php wp_footer(); ?>
</body>
</html>
