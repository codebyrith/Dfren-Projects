# Rehoboth Ministries Webinar - WordPress Theme

A custom, high-converting WordPress Theme for the **Rehoboth Ministries Live Spiritual Growth & Deliverance Webinar** landing page.

---

## 🚀 How to Install in WordPress (Step-by-Step)

### Option 1: One-Click Zip Upload (Easiest & Recommended)
1. In your project folder, locate the packaged zip archive:
   **`rehoboth-webinar-theme.zip`**
2. Log in to your WordPress Admin dashboard (`yourdomain.com/wp-admin`).
3. In the left menu, navigate to:
   **Appearance → Themes**
4. Click the **Add New** button at the top, then click **Upload Theme**.
5. Choose **`rehoboth-webinar-theme.zip`** from your computer and click **Install Now**.
6. Once uploaded, click **Activate**.
7. Visit your homepage — your complete webinar landing page is now live!

---

### Option 2: Upload via FTP or cPanel File Manager
1. Copy the `rehoboth-webinar-theme` folder into your WordPress installation:
   `wp-content/themes/rehoboth-webinar-theme/`
2. Go to **Appearance → Themes** in your WordPress Admin dashboard.
3. Click **Activate** on **Rehoboth Ministries Webinar**.

---

### Option 3: Use as a Page Template on an Existing Site
If you already have a blog or another active WordPress theme and only want this landing page on a specific URL (for example, `yourdomain.com/webinar`):
1. Keep this theme or copy the `template-landing-page.php` and `template-parts/` into your active theme.
2. In WordPress Admin, go to **Pages → Add New**.
3. Under **Page Attributes** (right sidebar), select **Template: Webinar Landing Page**.
4. Publish the page!

---

## 📁 Theme Structure
```
rehoboth-webinar-theme/
├── assets/
│   ├── prophet-michael.jpg       # Lead mentor high-res portrait
│   └── rehoboth-logo.png         # Official ministry crest & brand logo
├── template-parts/
│   └── content-webinar.php       # All landing page sections
├── style.css                     # Theme header definition & custom CSS
├── functions.php                 # WordPress theme setup & script enqueue
├── header.php                    # Head, Tailwind setup, banner & top navbar
├── footer.php                    # Footer, social channels, modals & toast JS
├── front-page.php                # Front page template
├── index.php                     # Default template fallback
├── page.php                      # Standard page fallback
├── template-landing-page.php     # Custom page template
├── screenshot.png                # Theme preview in WordPress admin
└── README.md                     # Documentation
```

---

## ✨ Features Included
- **Exact Match Design:** 100% pixel-perfect replica of the latest approved landing page.
- **₹199 Pricing Configured:** All CTA buttons and value stacks reflect ₹199.
- **Complete Value Stack & Stepper Roadmap:** Full 4-step path and curriculum.
- **Social Media Links:** YouTube, Instagram, Facebook, WhatsApp Community, Telegram in footer.
- **Dynamic Assets:** All images load dynamically using `get_template_directory_uri()`.
- **Live CRO Elements:** Floating registration toasts, countdown timer, and interactive confirmation modal.
