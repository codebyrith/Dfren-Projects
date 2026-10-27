const fs = require('fs');
const path = require('path');

const indexHtml = fs.readFileSync('index.html', 'utf8');

// Define section markers
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

// Extract slices
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
const footerAndModals = indexHtml.substring(indexHtml.indexOf(markers.stickyBarStart));

// Function to generate the navigation bar with active state
function getNavbarHtml(activeKey) {
  const menuItems = [
    { key: 'overview', title: 'Overview', href: 'overview.html' },
    { key: 'testimonials', title: 'Wall of Love', href: 'testimonials.html' },
    { key: 'breakthroughs', title: 'Breakthroughs', href: 'breakthroughs.html' },
    { key: 'benefits', title: 'Benefits', href: 'benefits.html' },
    { key: 'curriculum', title: 'Curriculum', href: 'curriculum.html' },
    { key: 'how-it-works', title: 'How It Works', href: 'how-it-works.html' },
    { key: 'mentor', title: 'Mentor', href: 'mentor.html' },
    { key: 'faq', title: 'FAQ', href: 'faq.html' }
  ];

  const linksHtml = menuItems.map(item => {
    const isActive = item.key === activeKey;
    const activeClass = isActive 
      ? 'text-amber-400 font-bold border-b-2 border-amber-400 pb-0.5' 
      : 'text-stone-300 hover:text-amber-400 transition-colors font-medium';
    return `<a href="${item.href}" class="${activeClass}">${item.title}</a>`;
  }).join('\n        ');

  return `
  <!-- Navigation Bar -->
  <nav class="bg-brand-navy border-b border-slate-800 text-white py-3.5 px-4 sm:px-6 sticky top-[37px] z-40 backdrop-blur-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <a href="index.html" class="flex items-center gap-3 group" title="Return to Home">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-white p-1 flex items-center justify-center shadow-md shadow-amber-500/10 border border-amber-500/30 overflow-hidden group-hover:border-amber-400 transition-all flex-shrink-0">
          <img src="assets/rehoboth-logo.png" alt="Rehoboth International Ministries" class="w-full h-full object-contain" />
        </div>
        <div>
          <span class="font-serif text-lg sm:text-2xl font-bold tracking-wide text-white block leading-none group-hover:text-amber-400 transition-colors">REHOBOTH</span>
          <span class="text-[9px] sm:text-[11px] tracking-widest text-amber-400 font-semibold uppercase">International Ministries</span>
        </div>
      </a>

      <div class="hidden lg:flex items-center gap-6 text-sm">
        ${linksHtml}
      </div>

      <div>
        <a href="register.html" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg text-xs sm:text-sm shadow-md shadow-amber-500/20 transition-all transform hover:-translate-y-0.5">
          <span>Claim Pass @ ₹199</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>
    </div>
  </nav>
`;
}

// Function to generate the HTML head and top banner
function getHeaderHtml(title, description, activeKey) {
  // Extract head until </head> and top announcement banner
  const headMatch = indexHtml.match(/<!DOCTYPE html>[\s\S]*?<\/head>/);
  let headContent = headMatch ? headMatch[0] : '';
  
  // Replace title and meta description
  headContent = headContent.replace(/<title>[\s\S]*?<\/title>/, `<title>${title} | Rehoboth Ministries</title>`);
  headContent = headContent.replace(/<meta name="description"[\s\S]*?\/>/, `<meta name="description" content="${description}" />`);

  // Announcement banner
  const bannerMatch = indexHtml.match(/<!-- 1\. TOP ANNOUNCEMENT BANNER[\s\S]*?<\/header>/);
  const bannerContent = bannerMatch ? bannerMatch[0] : '';

  return `${headContent}
<body class="bg-brand-cream text-slate-800 antialiased selection:bg-brand-gold selection:text-brand-navy pb-16 md:pb-0">

  ${bannerContent}
  ${getNavbarHtml(activeKey)}
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
  <header class="bg-gradient-to-b from-brand-navy via-brand-slate to-brand-navy text-white pt-10 pb-12 px-4 sm:px-6 text-center border-b border-amber-500/30 relative overflow-hidden">
    <div class="absolute inset-0 bg-amber-500/5 pointer-events-none"></div>
    <div class="max-w-4xl mx-auto relative z-10 space-y-3">
      <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-slate-800/90 border border-amber-500/40 text-amber-300 text-xs font-bold uppercase tracking-wider shadow-md">
        ${badge}
      </div>
      <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white leading-tight">
        ${title}
      </h1>
      <p class="text-stone-300 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
        ${subtitle}
      </p>
    </div>
  </header>
`;
}

// 1. OVERVIEW PAGE
const overviewHtml = getHeaderHtml(
  'Webinar Overview',
  'Break Generational Bondages & Hear Gods Voice in 150 Minutes with Prophet Michael Rehoboth.',
  'overview'
) + `
  <main>
    ${heroPart}
    ${trustStripPart}
    ${getRegisterCtaStrip()}
  </main>
` + footerAndModals;
fs.writeFileSync('overview.html', overviewHtml, 'utf8');
console.log('Created overview.html');

// 2. TESTIMONIALS PAGE
const testimonialsHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('testimonials.html', testimonialsHtml, 'utf8');
console.log('Created testimonials.html');

// 3. BREAKTHROUGHS PAGE
const breakthroughsHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('breakthroughs.html', breakthroughsHtml, 'utf8');
console.log('Created breakthroughs.html');

// 4. BENEFITS PAGE
const benefitsHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('benefits.html', benefitsHtml, 'utf8');
console.log('Created benefits.html');

// 5. CURRICULUM PAGE
const curriculumHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('curriculum.html', curriculumHtml, 'utf8');
console.log('Created curriculum.html');

// 6. HOW IT WORKS PAGE
const howItWorksHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('how-it-works.html', howItWorksHtml, 'utf8');
console.log('Created how-it-works.html');

// 7. MENTOR PAGE
const mentorHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('mentor.html', mentorHtml, 'utf8');
console.log('Created mentor.html');

// 8. FAQ PAGE
const faqHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('faq.html', faqHtml, 'utf8');
console.log('Created faq.html');

// 9. REGISTER PAGE
const registerHtml = getHeaderHtml(
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
` + footerAndModals;
fs.writeFileSync('register.html', registerHtml, 'utf8');
console.log('Created register.html');

// Now update index.html navbar to point to the dedicated pages, while keeping all its sections intact!
const updatedIndexNavbar = getNavbarHtml('');
const finalIndexHtml = indexHtml.replace(/<!-- Navigation Bar -->[\s\S]*?<\/nav>/, updatedIndexNavbar.trim());
fs.writeFileSync('index.html', finalIndexHtml, 'utf8');
console.log('Updated index.html navbar with dedicated page links!');
