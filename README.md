# Halal Fresh Chicken Web Application

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Status](https://img.shields.io/badge/Status-Live-16a34a?style=for-the-badge)

## Live Application

https://hfccibuyur.wuaze.com

---

## Project Overview

Halal Fresh Chicken is a modern business website developed for a halal chicken supplier.  
The application is designed to present products clearly and streamline customer ordering through direct WhatsApp integration.

This project emphasizes clean UI structure, responsive behavior, and practical real-world deployment.

---

## Core Features

- Responsive product catalog
- WhatsApp direct order integration
- Mobile bottom navigation system
- Clean and minimal layout architecture
- Optimized UI for business branding
- Production deployment with HTTPS

---

## System Architecture

### Backend
- Laravel 12
- Blade templating engine
- Route-based controller structure

### Frontend
- Tailwind CSS
- Alpine.js
- Swiper.js
- Font Awesome

### Deployment
- Shared hosting environment
- SSL enabled (HTTPS)
- Optimized production configuration

---

## Technical Decisions

**Laravel Framework**  
Laravel was selected for its structured MVC architecture, routing clarity, and Blade templating efficiency.

**Blade Templating**  
Blade enables modular UI development through layouts and partial components.

**Tailwind CSS**  
Utility-first approach for faster UI development and consistent spacing system.

**Alpine.js**  
Used for lightweight interactivity without introducing heavy frontend frameworks.

**WhatsApp Integration**  
Direct WhatsApp API integration was chosen to simplify ordering without requiring a complex backend order system.

**Mobile-First Design**  
The layout was structured starting from mobile viewport to ensure optimal responsiveness.

---

## Installation Guide

Clone the repository:

```bash
git clone https://github.com/dwiprayoga10/halalfreshchickenweb.git
```

Navigate into the project directory:

```bash
cd halalfreshchickenweb
```

Install dependencies:

```bash
composer install
npm install
```

Configure environment:

```bash
cp .env.example .env
php artisan key:generate
```

Run development server:

```bash
php artisan serve
```

---

## Production URL

https://hfccibuyur.wuaze.com

---

## Performance Notes

- Tailwind CSS purging reduces unused CSS.
- Assets are served through Laravel’s optimized public directory.
- Minimal JavaScript usage to avoid unnecessary render blocking.
- Mobile-first structure ensures faster load on smaller devices.
- Static business-oriented content reduces database overhead.

---

## SEO Considerations

- Semantic HTML structure for better indexing.
- Proper meta viewport configuration.
- Clean URL structure using Laravel routing.
- HTTPS enabled for search engine ranking benefit.
- Optimized heading hierarchy (H1, H2, H3 structure).

Future improvements may include:
- Open Graph meta tags
- Sitemap generation
- Structured data (JSON-LD)

---

## Security Notes

- HTTPS enabled via SSL.
- Laravel built-in CSRF protection.
- Environment configuration secured through `.env`.
- No sensitive data stored in public repository.
- Server-side validation prepared for future form expansion.

---

## Future Improvements

- Admin dashboard for product management
- Database-driven product system
- Order tracking system
- Payment gateway integration
- SEO meta automation
- Performance optimization with caching
- Image optimization pipeline
- Progressive Web App (PWA) implementation

---

## Repository Structure Highlights

- `resources/views` — Blade templates and UI structure
- `resources/css` — Tailwind configuration
- `public/` — Static assets and favicon
- `routes/web.php` — Application routing
- `app/Http/Controllers` — Request handling logic

---

## Project Purpose

This project was developed as:

- A real-world business implementation
- A portfolio demonstration of Laravel-based development
- A showcase of responsive UI architecture
- A demonstration of third-party service integration (WhatsApp API)

---

## Author

Dwi Prayoga  
GitHub: https://github.com/dwiprayoga10

---

## License

This project is created for portfolio and educational purposes.
