# Deployment Guide — cPanel Shared Hosting

## Requirements

- PHP 8.3 or higher
- `mod_rewrite` enabled (Apache)
- Composer (run `composer install --no-dev` on the server if SSH is available)

## Step 1 — Upload Files

Upload the **entire project folder** to `public_html/` via cPanel File Manager or FTP.

Your `public_html/` structure should look like:

```
public_html/
├── app/
├── bootstrap/
├── config/
├── database/
├── lang/
├── public/          ← Laravel's public directory
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── .htaccess
├── index.php
├── artisan
└── ...
```

> If your hosting has SSH access, upload to a directory outside `public_html` and symlink `public/` into it. That is more secure.

## Step 2 — Set Directory Permissions

In cPanel File Manager, set the following directories to **755** (or "Write" permission):

- `storage/` (and all subdirectories)
- `bootstrap/cache/`

## Step 3 — Configure Environment

Edit `.env` in cPanel File Manager and update these values:

```env
APP_NAME="Community First Uganda"
APP_ENV=production
APP_KEY=base64:VwcrRuoBZRyG20vXJvRDxwFX/bwGDPAR3YNr+y6fVHk=
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_cpanel_database_name
DB_USERNAME=your_cpanel_database_user
DB_PASSWORD=your_cpanel_database_password
```

> Replace `yourdomain.com` with your actual domain.
> Create the MySQL database and user in cPanel > Databases > MySQL Databases.

### Generate a New App Key (if SSH available)

```bash
php artisan key:generate
```

If no SSH, generate a key locally with `php artisan key:generate` and paste the new value into your production `.env`.

## Step 4 — Run Migrations (if using database)

The application uses file-based session, cache, and queue by default — no database tables are needed for basic operation.

If you plan to use database sessions/cache/queue, run:

```bash
php artisan migrate --force
```

## Step 5 — SMTP Configuration (for Contact/Volunteer forms)

Update the mail section in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailprovider.com
MAIL_PORT=587
MAIL_USERNAME=info@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@yourdomain.com"
MAIL_FROM_NAME="Community First Uganda"
```

For cPanel email, use your hosting's SMTP settings (check cPanel > Email Accounts > your account > Configuration Settings).

For Gmail SMTP, use:
- `MAIL_HOST=smtp.gmail.com`
- `MAIL_PORT=587`
- `MAIL_ENCRYPTION=tls`
- Use an App Password (not your regular password)

## Step 6 — Verify

Visit your domain. The site should load with all styles, images, and animations working.

### Troubleshooting

| Issue | Fix |
|---|---|
| 500 Internal Server Error | Check `.env` exists and `APP_KEY` is set. Check `storage/logs/` for errors. |
| White page | Ensure PHP 8.3+ is selected in cPanel > PHP Selector. |
| Assets not loading | Confirm `public/build/` directory was uploaded with all files. |
| Session not persisting | Ensure `storage/framework/sessions/` is writable (755). |
| Routes return 404 | Confirm `mod_rewrite` is enabled. Check that `.htaccess` files were uploaded. |

## How It Works

The root `.htaccess` rewrites all incoming requests to `public/index.php` (Laravel's front controller). Sensitive directories (`config/`, `routes/`, `storage/`, etc.) are blocked from web access via Apache deny rules.

This setup works identically on both localhost (Laragon) and shared hosting — no code changes needed between environments.
