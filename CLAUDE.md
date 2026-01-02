# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12 news publication application for managing digital magazine archives (PDFs). The application provides a public-facing site for viewing and downloading publications, and an admin panel for managing archives, categories, users, and site settings.

## Key Technology Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Vite + Sass + Bootstrap 5 + Tailwind CSS 4
- **Database**: SQLite (default) or MySQL
- **Authentication**: Laravel UI with role-based permissions (Spatie Laravel Permission)
- **Package Manager**: Composer (PHP), npm (JavaScript)

## Development Commands

### Initial Setup
```bash
composer setup
# This runs: composer install, creates .env, generates app key, migrates database, installs npm packages, and builds assets
```

### Development Server
```bash
composer dev
# Runs concurrently: Laravel server (port 8000), queue listener, Laravel Pail logs, and Vite dev server
# Colors: server (blue), queue (purple), logs (pink), vite (orange)
```

Alternatively, run services individually:
```bash
php artisan serve           # Start Laravel development server
npm run dev                 # Start Vite dev server for hot module replacement
php artisan queue:listen    # Process background jobs
php artisan pail            # Real-time log viewer
```

### Testing
```bash
composer test               # Run all PHPUnit tests (clears config cache first)
php artisan test            # Alternative test command
php artisan test --filter TestName  # Run specific test
```

### Building Assets
```bash
npm run build              # Build production assets with Vite
```

### Database Operations
```bash
php artisan migrate        # Run migrations
php artisan migrate:fresh --seed  # Reset database and seed
php artisan db:seed --class=RolesAndPermissionsSeeder  # Seed roles/permissions
```

### Code Quality
```bash
./vendor/bin/pint          # Run Laravel Pint code formatter
```

## Architecture Overview

### User Roles & Permissions

The application uses Spatie Laravel Permission for role-based access control with three predefined roles:

- **Administrator**: Full access to all features
- **Editor**: Can create, edit, and publish posts
- **Author**: Can only create posts

Key permissions include: `posts.*`, `users.*`, `roles.*`, `analytics.view`, `featured-edition.manage`

User management routes are protected with `permission:users.edit` middleware.

### Core Models & Relationships

**Archive** (main content model)
- Stores PDF publications with metadata (title, slug, publication_date, thumbnail, etc.)
- `belongsTo`: Category, User
- `hasMany`: Download
- Key fields: `is_published`, `is_featured`, `is_archived`
- Tracks download counts via `totalDownloads()` method

**Category**
- Organizes archives into categories

**Download**
- Tracks download statistics per archive (`number_of_counts`)

**Contact**
- Stores contact form submissions

**Setting**
- Stores site-wide configuration

**SocialLink**
- Manages social media links

### Route Organization

The application has two distinct routing areas:

1. **Admin Routes** (`/admin-*`, `/categories`, `/settings`, etc.)
   - Protected by `auth` middleware
   - Resource controllers for CRUD operations
   - User management requires `permission:users.edit`

2. **Public Routes** (`/`, `/archives`, `/about`, `/contact-us`, etc.)
   - Anonymous access
   - Public archive browsing via `Pages\ArchiveController`
   - Contact form with validation (company_email, email, phone, message)
   - Donation and subscription pages

Note: User registration is disabled (`Auth::routes(['register' => false])`)

### Controller Structure

- **Admin Controllers**: `ArchiveController`, `CategoryController`, `SettingsController`, `SocialMediaLinksController`, `UsersController`
  - Handle admin CRUD operations
  - Located in `app/Http/Controllers/`

- **Public Controllers**: `Pages\ArchiveController`, `HomeController`
  - Handle public-facing content
  - Located in `app/Http/Controllers/Pages/`

### View Organization

- `resources/views/admin/*` - Admin panel views (archives, categories, settings, users)
- `resources/views/pages/*` - Public page views
- `resources/views/archives/*` - Archive-specific views
- `resources/views/auth/*` - Authentication views
- `resources/views/layouts/*` - Shared layouts
- Root views: `welcome.blade.php` (homepage with featured and latest editions), `about.blade.php`, `contact-us.blade.php`, `donate.blade.php`, `subscribe.blade.php`

### Asset Pipeline

Vite compiles:
- `resources/sass/app.scss` - SASS/SCSS styles
- `resources/js/app.js` - JavaScript

The project uses both Bootstrap 5 and Tailwind CSS 4.

### Featured Edition Logic

The homepage displays:
- Latest edition: `Archive::where('is_featured', false)->latest()->first()`
- Featured edition: `Archive::where('is_featured', true)->first()`

Only one archive should have `is_featured = true` at any time.

## Database Configuration

Default setup uses SQLite (`database/database.sqlite`). To switch to MySQL, update `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## Storage & File Uploads

Archives store PDF files and thumbnails. Ensure `storage/app/public` is linked:
```bash
php artisan storage:link
```

## Important Notes

- The application expects archives to have PDF files (`pdf_path`, `pdf_size`)
- Contact form validates: name, company_email, email, numeric_field (8-15 digits), message
- Queue connection is set to `database` - ensure queue worker is running for background jobs
- Session driver is `database` - run migrations to create sessions table
