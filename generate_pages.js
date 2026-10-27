const fs = require('fs');
const path = require('path');

const indexHtml = fs.readFileSync('index.html', 'utf8');

// Section markers
const markers = {
  heroStart: '<!-- 2. HERO SECTION (ABOVE THE FOLD) -->',
  trustStripStart: '<!-- 2.5. TRUST & AUTHORITY MEDIA STRIP',
  testimonialsStart: '<!-- 3. SOCIAL PROOF SECTION',
  breakthroughsStart: '<!-- 4. PAIN POINT SECTION',
  benefitsStart: '<!-- 5. VALUE PROPOSITIONS & USPS',
  curriculumStart: '<!-- 6. TRAINING & MENTORSHIP BREAKDOWN',
  howItWorksStart: '<!-- 7. HOW IT WORKS SECTION',
  mentorStart: '<!-- 7.5. MEET YOUR MENTOR',
  registerStart: '<!-- 8. REGISTRATION / BOOKING CARD',
  faqStart: '<!-- 8.5. FAQS & RISK REDUCERS',
  closerStart: '<!-- 9. CLOSER SECTION',
  stickyBarStart: '<!-- 10. MOBILE STICKY BOTTOM BAR',
  footerStart: '<!-- 11. CLEAN FOOTER -->'
};

// Slices
const heroPart = indexHtml.substring(indexHtml.indexOf(markers.heroStart), indexHtml.indexOf(markers.trustStripStart));
const trustStripPart = indexHtml.substring(indexHtml.indexOf(markers.trustStripStart), indexHtml.indexOf(markers.testimonialsStart));
const testimonialsPart = indexHtml.substring(indexHtml.indexOf(markers.testimonialsStart), indexHtml.indexOf(markers.breakthroughsStart));
const breakthroughsPart = indexHtml.substring(indexHtml.indexOf(markers.breakthroughsStart), indexHtml.indexOf(markers.benefitsStart));
const benefitsPart = indexHtml.substring(indexHtml.indexOf(markers.benefitsStart), indexHtml.indexOf(markers.curriculumStart));
const curriculumPart = indexHtml.substring(indexHtml.indexOf(markers.curriculumStart), indexHtml.indexOf(markers.howItWorksStart));
const howItWorksPart = indexHtml.substring(indexHtml.indexOf(markers.howItWorksStart), indexHtml.indexOf(markers.mentorStart));
const mentorPart = indexHtml.substring(indexHtml.indexOf(markers.mentorStart), indexHtml.indexOf(markers.registerStart));
const registerPart = indexHtml.substring(indexHtml.indexOf(markers.registerStart), indexHtml.indexOf(markers.faqStart));
const faqPart = indexHtml.substring(indexHtml.indexOf(markers.faqStart), indexHtml.indexOf(markers.closerStart));
const closerPart = indexHtml.substring(indexHtml.indexOf(markers.closerStart), indexHtml.indexOf(markers.stickyBarStart));
let footerAndModals = indexHtml.substring(indexHtml.indexOf(markers.stickyBarStart));

// Ensure mobile sticky bar link goes to register.html on dedicated pages
const footerAndModalsForPages = footerAndModals.replace(/href="#register"/g, 'href="register.html"');

// Common mobile sidebar toggle script to append if not present
const mobileSidebarScript = `
    // Mobile Sidebar Drawer Controller
    function toggleMobileSidebar(open) {
      const overlay = document.getElementById('mobile-sidebar-overlay');
      const sidebar = document.getElementById('mobile-sidebar');
      if (!overlay || !sidebar) return;

      if (open) {
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        overlay.classList.add('opacity-100', 'pointer-events-auto');
        sidebar.classList.remove('translate-x-full');
        sidebar.classList.add('translate-x-0');
        document.body.classList.add('overflow-hidden');
      } else {
        overlay.classList.remove('opacity-100', 'pointer-events-auto');
        overlay.classList.add('opacity-0', 'pointer-events-none');
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('translate-x-full');
        document.body.classList.remove('overflow-hidden');
      }
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        toggleMobileSidebar(false);
      }
    });
`;

function injectSidebarScript(htmlContent) {
  if (htmlContent.includes('function toggleMobileSidebar')) {
    return htmlContent;
  }
  return htmlContent.replace('</script>\n</body>', `${mobileSidebarScript}\n  </script>\n</body>`);
}

// Function to generate the Unified Sticky Header + Mobile Sidebar Drawer
function getUnifiedHeader(title, description, activeKey) {
  const headMatch = indexHtml.match(/<!DOCTYPE html>[\s\S]*?<\/head>/);
  let headContent = headMatch ? headMatch[0] : '';
  headContent = headContent.replace(/<title>[\s\S]*?<\/title>/, `<title>${title} | Rehoboth Ministries</title>`);
  headContent = headContent.replace(/<meta name="description"[\s\S]*?\/>/, `<meta name="description" content="${description}" />`);

  const menuItems = [
    { key: 'overview', title: 'Overview', href: 'overview.html', icon: '🏛️' },
    { key: 'testimonials', title: 'Wall of Love', href: 'testimonials.html', icon: '⭐' },
    { key: 'breakthroughs', title: 'Breakthroughs', href: 'breakthroughs.html', icon: '⚡' },
    { key: 'benefits', title: 'Benefits', href: 'benefits.html', icon: '🌟' },
    { key: 'curriculum', title: 'Curriculum', href: 'curriculum.html', icon: '📖' },
    { key: 'how-it-works', title: 'How It Works', href: 'how-it-works.html', icon: '✨' },
    { key: 'mentor', title: 'Mentor', href: 'mentor.html', icon: '🕊️' },
    { key: 'faq', title: 'FAQ', href: 'faq.html', icon: '❓' }
  ];

  const desktopLinks = menuItems.map(item => {
    const isActive = item.key === activeKey;
    const activeClass = isActive 
      ? 'text-amber-400 font-bold border-b-2 border-amber-400 pb-0.5' 
      : 'text-stone-300 hover:text-amber-400 transition-colors font-medium';
    return `<a href="${item.href}" class="${activeClass}">${item.title}</a>`;
  }).join('\n          ');

  const mobileLinks = menuItems.map(item => {
    const isActive = item.key === activeKey;
    const itemClass = isActive 
      ? 'bg-amber-500/20 text-amber-300 border border-amber-500/40 font-bold' 
      : 'text-stone-200 hover:bg-slate-800/80 hover:text-amber-300 font-medium';
    return `
        <a href="${item.href}" onclick="toggleMobileSidebar(false)" class="flex items-center gap-3.5 px-3.5 py-3 rounded-xl text-sm transition-all ${itemClass}">
          <span class="text-base">${item.icon}</span>
          <span>${item.title}</span>
        </a>`;
  }).join('');

  return `${headContent}
<body class="bg-brand-cream text-slate-800 antialiased selection:bg-brand-gold selection:text-brand-navy pb-24 md:pb-0 overflow-x-hidden">

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

        <!-- Right side timer & review badge -->
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
        <a href="index.html" class="flex items-center gap-2 sm:gap-2.5 group flex-shrink-0" title="Return to Home">
          <div class="w-9 h-9 sm:w-11 sm:h-11 rounded-xl bg-white p-1 flex items-center justify-center shadow-md shadow-amber-500/10 border border-amber-500/30 overflow-hidden group-hover:border-amber-400 transition-all flex-shrink-0">
            <img src="assets/rehoboth-logo.png" alt="Rehoboth International Ministries" class="w-full h-full object-contain" />
          </div>
          <div>
            <span class="font-serif text-base sm:text-xl font-bold tracking-wide text-white block leading-none group-hover:text-amber-400 transition-colors">REHOBOTH</span>
            <span class="text-[8px] sm:text-[10px] tracking-widest text-amber-400 font-semibold uppercase block mt-0.5">International Ministries</span>
          </div>
        </a>

        <!-- Desktop Navigation Menu Items -->
        <div class="hidden lg:flex items-center gap-5 xl:gap-6 text-sm">
          ${desktopLinks}
        </div>

        <!-- Right Side: CTA Button + Mobile Hamburger Menu Toggle -->
        <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
          <a href="register.html" class="inline-flex items-center gap-1 sm:gap-1.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-extrabold px-3 sm:px-4 py-2 rounded-lg text-xs sm:text-sm shadow-md shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
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
      <a href="index.html" onclick="toggleMobileSidebar(false)" class="flex items-center gap-2.5">
        <div class="w-9 h-9 rounded-xl bg-white p-1 flex items-center justify-center border border-amber-500/30 shadow-md flex-shrink-0">
          <img src="assets/rehoboth-logo.png" alt="Rehoboth Ministries" class="w-full h-full object-contain" />
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
      ${mobileLinks}
    </div>

    <!-- Drawer Footer Actions -->
    <div class="p-4 border-t border-slate-800 bg-slate-950/90 space-y-3">
      <a href="register.html" onclick="toggleMobileSidebar(false)" class="w-full bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-sm py-3 px-4 rounded-xl shadow-lg shadow-amber-500/30 flex items-center justify-center gap-2 transition-all">
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
`;
}

// Dedicated CTA strip to place before footer on dedicated pages
function getRegisterCtaStrip() {
  return `
  <!-- Dedicated Page ₹199 Quick Pass CTA Strip -->
  <section class="py-12 px-4 sm:px-6 bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 text-white border-y border-amber-500/30">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
      <div>
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/20 border border-amber-500/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-2">
          ⚡ 150-Minute Tanglish Masterclass
        </div>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Ready for Your Supernatural Breakthrough?</h2>
        <p class="text-stone-300 text-xs sm:text-sm mt-1 max-w-xl">
          Join Prophet Michael Rehoboth live. Master the legal prayer blueprint to break generational bondages and hear God's voice clearly.
        </p>
      </div>
      <div class="flex flex-col items-center sm:items-end gap-2 flex-shrink-0">
        <div class="flex items-baseline gap-2">
          <span class="text-stone-400 line-through text-sm">₹999</span>
          <span class="text-3xl font-black text-amber-400">₹199</span>
          <span class="text-xs text-red-400 font-bold bg-red-950/60 px-1.5 py-0.5 rounded border border-red-500/30">80% OFF</span>
        </div>
        <a href="register.html" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-extrabold text-sm sm:text-base px-6 py-3 rounded-xl shadow-lg shadow-amber-500/30 transition-all transform hover:-translate-y-0.5">
          <span>Claim My ₹199 Pass</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <span class="text-[11px] text-stone-400">⭐⭐⭐⭐⭐ 4.9/5 • 100% Money-Back Guarantee</span>
      </div>
    </div>
  </section>
`;
}

// Dedicated Page Banner component
function getPageBanner(badge, title, subtitle) {
  return `
  <!-- Dedicated Page Hero Header -->
  <header class="bg-gradient-to-b from-brand-navy via-brand-slate to-brand-navy text-white pt-8 pb-10 sm:pt-10 sm:pb-12 px-4 sm:px-6 text-center border-b border-amber-500/30 relative overflow-hidden">
    <div class="absolute inset-0 bg-amber-500/5 pointer-events-none"></div>
    <div class="max-w-4xl mx-auto relative z-10 space-y-3">
      <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-slate-800/90 border border-amber-500/40 text-amber-300 text-xs font-bold uppercase tracking-wider shadow-md">
        ${badge}
      </div>
      <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
        ${title}
      </h1>
      <p class="text-stone-300 max-w-2xl mx-auto text-xs sm:text-sm md:text-base leading-relaxed">
        ${subtitle}
      </p>
    </div>
  </header>
`;
}

// 1. OVERVIEW PAGE
const overviewHero = heroPart.replace(/href="#register"/g, 'href="register.html"');
const overviewHtml = injectSidebarScript(
  getUnifiedHeader(
    'Webinar Overview',
    'Break Generational Bondages & Hear Gods Voice in 150 Minutes with Prophet Michael Rehoboth.',
    'overview'
  ) + `
  <main>
    ${overviewHero}
    ${trustStripPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('overview.html', overviewHtml, 'utf8');
console.log('Created overview.html');

// 2. TESTIMONIALS PAGE
const testimonialsHtml = injectSidebarScript(
  getUnifiedHeader(
    'Wall of Love & Verified Believer Testimonies',
    'Read real breakthrough stories, audio decrees, and video testimonies from believers blessed by Rehoboth Ministries.',
    'testimonials'
  ) + `
  <main>
    ${getPageBanner(
      '⭐ Real Kingdom Transformations',
      'Wall of <span class="gold-gradient-text font-serif italic">Love &amp; Breakthroughs</span>',
      'Over 5,000+ Tamil believers across 14+ nations have experienced supernatural healing, deliverance, and intimacy with God.'
    )}
    ${testimonialsPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('testimonials.html', testimonialsHtml, 'utf8');
console.log('Created testimonials.html');

// 3. BREAKTHROUGHS PAGE
const breakthroughsHtml = injectSidebarScript(
  getUnifiedHeader(
    'Spiritual Breakthroughs & Deliverance Focus',
    'Unpack biblical legal protocols to plead in the Courts of Heaven and revoke demonic legal claims.',
    'breakthroughs'
  ) + `
  <main>
    ${getPageBanner(
      '⚡ Deliverance &amp; Prophetic Blueprint',
      'Spiritual <span class="gold-gradient-text font-serif italic">Breakthrough Focus</span>',
      'Tackle spiritual dryness, midnight warfare, generational pattern breaking, and closed demonic portals.'
    )}
    ${breakthroughsPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('breakthroughs.html', breakthroughsHtml, 'utf8');
console.log('Created breakthroughs.html');

// 4. BENEFITS PAGE
const benefitsHtml = injectSidebarScript(
  getUnifiedHeader(
    'Transformational Benefits & Shifts',
    'Discover the 6 life-changing spiritual shifts you will experience in 150 minutes.',
    'benefits'
  ) + `
  <main>
    ${getPageBanner(
      '🌟 Tangible Deliverance Outcomes',
      'Life-Changing <span class="gold-gradient-text font-serif italic">Spiritual Shifts</span>',
      'From weary effort to legal spiritual authority — discover what unlocks for your life, family, and destiny.'
    )}
    ${benefitsPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('benefits.html', benefitsHtml, 'utf8');
console.log('Created benefits.html');

// 5. CURRICULUM PAGE
const curriculumHtml = injectSidebarScript(
  getUnifiedHeader(
    '150-Minute Masterclass Curriculum',
    'Detailed breakdown of the 6 comprehensive modules taught in Tanglish by Prophet Michael Rehoboth.',
    'curriculum'
  ) + `
  <main>
    ${getPageBanner(
      '📖 150-Minute Tanglish Roadmap',
      'Masterclass <span class="gold-gradient-text font-serif italic">Curriculum &amp; Modules</span>',
      'A structured, step-by-step masterclass packed with actionable biblical decrees, legal prayers, and spiritual activations.'
    )}
    ${curriculumPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('curriculum.html', curriculumHtml, 'utf8');
console.log('Created curriculum.html');

// 6. HOW IT WORKS PAGE
const howItWorksHtml = injectSidebarScript(
  getUnifiedHeader(
    'How It Works (3 Effortless Steps)',
    'Learn how simple it is to register, receive your private Zoom credentials, and join the live masterclass.',
    'how-it-works'
  ) + `
  <main>
    ${getPageBanner(
      '✨ Simple &amp; Seamless Experience',
      'How The <span class="gold-gradient-text font-serif italic">Masterclass Works</span>',
      'Your effortless 3-step journey from registering today to receiving live personal prophetic impartation.'
    )}
    ${howItWorksPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('how-it-works.html', howItWorksHtml, 'utf8');
console.log('Created how-it-works.html');

// 7. MENTOR PAGE
const mentorHtml = injectSidebarScript(
  getUnifiedHeader(
    'Meet Prophet Michael Rehoboth',
    'Lead mentor, Christian minister, and spiritual deliverance coach with over 8 years of apostolic ministry experience.',
    'mentor'
  ) + `
  <main>
    ${getPageBanner(
      '🕊️ Lead Mentor &amp; Deliverance Coach',
      'Meet <span class="gold-gradient-text font-serif italic">Prophet Michael Rehoboth</span>',
      'Dedicated to equipping believers with biblical spiritual authority and hearing God clearly.'
    )}
    ${mentorPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('mentor.html', mentorHtml, 'utf8');
console.log('Created mentor.html');

// 8. FAQ PAGE
const faqHtml = injectSidebarScript(
  getUnifiedHeader(
    'Frequently Asked Questions & 100% Guarantee',
    'Find answers to all questions regarding language, Zoom access, recordings, and our 100% peace-of-mind money-back guarantee.',
    'faq'
  ) + `
  <main>
    ${getPageBanner(
      '❓ Clarity &amp; Reassurance',
      'Frequently <span class="gold-gradient-text font-serif italic">Asked Questions</span>',
      'Everything you need to know about the 150-minute Tanglish masterclass and our 100% money-back guarantee.'
    )}
    ${faqPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('faq.html', faqHtml, 'utf8');
console.log('Created faq.html');

// 9. REGISTER PAGE
const registerHtml = injectSidebarScript(
  getUnifiedHeader(
    'Claim Your ₹199 Fellowship Pass',
    'Register today for the live 150-minute Courts of Heaven Deliverance Masterclass. Limited seats available.',
    'register'
  ) + `
  <main>
    ${getPageBanner(
      '🔒 Instant Registration &amp; Zoom Access',
      'Claim Your <span class="gold-gradient-text font-serif italic">₹199 Fellowship Pass</span>',
      'Select your preferred batch and secure your seat. Instant confirmation sent to WhatsApp and Email.'
    )}
    ${registerPart}
  </main>
` + footerAndModalsForPages
);
fs.writeFileSync('register.html', registerHtml, 'utf8');
console.log('Created register.html');

// 10. UPDATE INDEX.HTML with the unified header, mobile drawer, and script
const unifiedHomeHeader = getUnifiedHeader(
  'Break Family Bondages & Hear Gods Voice in 150 Mins',
  'Break Generational Bondages & Hear Gods Voice in 150 Minutes — Guaranteed. Live in Tanglish with Prophet Michael Rehoboth.',
  ''
);

// In index.html, replace everything from <!DOCTYPE html> up to right before heroStart
const indexBodyAndSections = indexHtml.substring(indexHtml.indexOf(markers.heroStart));
let finalIndexHtml = unifiedHomeHeader + '\n  ' + indexBodyAndSections;
finalIndexHtml = injectSidebarScript(finalIndexHtml);
fs.writeFileSync('index.html', finalIndexHtml, 'utf8');
console.log('Updated index.html with unified header, mobile hamburger, and drawer!');
