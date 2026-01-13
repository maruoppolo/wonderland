![Wonder Land - Custom WordPress Theme](screenshot.jpg)
# Wonder Land - Custom WordPress Theme

This is a high-performance, custom-built WordPress theme developed with a **Code-First** approach. It focuses on pixel-perfect design, extreme performance optimization, and native functionality without the bloat of third-party plugins.

## Installation Guide

To get the theme up and running, follow these steps:

1.  **Upload the Theme**: Compress the theme folder into a `.zip` file and upload it via the WordPress Admin (Appearance > Themes > Add New) or upload the folder directly to `/wp-content/themes/` via FTP.
2.  **Create Home Page**: Go to **Pages > Add New** and create a page named **Home**.
3.  **Set Static Front Page**: 
    * Navigate to **Settings > Reading**.
    * Under "Your homepage displays", select **A static page**.
    * Choose the **Home** page you just created as the "Homepage".
4.  **Permalinks**: Go to **Settings > Permalinks** and ensure "Post name" is selected to handle AJAX requests correctly.

---

## Performance Optimization

This project was engineered for speed and high scores in Core Web Vitals. Key optimizations include:

* **Local Webfonts**: Google Fonts (Montserrat and Jost) are hosted locally in **WOFF2** format to eliminate external DNS lookups and SSL handshakes.
* **Asset Minification**: A custom PHP engine was implemented to minify HTML and inline CSS/JS on the fly, reducing the total document size.
* **Vector Icons (SVG)**: All icons are embedded directly as inline SVG code to reduce HTTP requests and ensure perfect scaling.
* **Next-Gen Images**: All photographic assets were converted to **WebP** format.
* **Optimized Hero Background**: The hero section uses a CSS background-image strategy with `background-size: cover` for faster rendering and better Largest Contentful Paint (LCP) performance.

---

## Exclusive Features & Improvements

### Native Lead Management (Custom Post Type)
I have implemented a native **Leads** system. Whenever a user completes the multi-step form, the data is saved directly into the WordPress database as a **Custom Post Type**. 
* **Security**: All submissions are protected with WordPress nonces and sanitized via PHP.
* **Admin UI**: A dedicated "Leads" menu in the dashboard allows for easy viewing of names, emails, and phone numbers directly in the list view.
* **Restricted Access**: To maintain data integrity, manual creation of leads via the dashboard is disabled; they are only captured via the frontend form.

### Responsive Version
Although the original design provided was desktop-only, I took the liberty of engineering a **fully responsive version**. 
* The layout uses a fluid grid system (Flexbox and CSS Grid) to adapt seamlessly to smartphones and tablets.
* Buttons and navigation components were optimized for touch targets.

---

## Project Screenshots

### Desktop View
![Desktop Hero Section](https://kloxstudios.com/wp-content/uploads/2026/01/Captura-de-Tela-2026-01-13-as-18.43.40-scaled.png)

### Admin Leads Dashboard
![WordPress Admin Leads](https://kloxstudios.com/wp-content/uploads/2026/01/Captura-de-Tela-2026-01-13-as-18.43.52-scaled.png)

### Mobile View
![Responsive Mobile Layout](https://kloxstudios.com/wp-content/uploads/2026/01/Captura-de-Tela-2026-01-13-as-18.37.53.png)

### Mobile PageSpeed Insights
![Mobile PageSpeed Insights](https://kloxstudios.com/wp-content/uploads/2026/01/Captura-de-Tela-2026-01-13-as-18.43.26-scaled.png)

### Desktop PageSpeed Insights
![Desktop PageSpeed Insights](https://kloxstudios.com/wp-content/uploads/2026/01/Captura-de-Tela-2026-01-13-as-18.43.04-scaled.png)

---

**Developed with a focus on clean code and performance.**