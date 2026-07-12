# Deployment Guide — cPanel Shared Hosting

## Requirements

- PHP 8.3 or higher
- `mod_rewrite` enabled (Apache)
- Composer (run `composer install --no-dev` on the server if SSH is available)

## Step 0 — Build Assets (IMPORTANT!)

Before uploading, you **MUST** build the frontend assets locally:

```bash
npm install          # Install dependencies (if not done)
npm run build        # Build CSS, JS, and fonts into public/build/
```

This creates the `public/build/` directory with all compiled assets. **Do NOT skip this step** — the website will not have styles without it.

## Step 1 — Upload Files

Upload the **entire project folder** to `public_html/` via cPanel File Manager or FTP.

**CRITICAL**: Make sure `public/build/` directory is included in your upload!

Your `public_html/` structure should look like:

```
public_html/
├── app/
├── bootstrap/
├── config/
├── database/
├── lang/
├── public/          ← Laravel's public directory
│   ├── build/       ← ✅ CSS, JS, fonts (MUST be here!)
│   ├── images/
│   ├── favicon.ico
│   └── index.php
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

## Step 2 — Verify Assets Upload

In cPanel File Manager, navigate to `public/build/` and verify these files exist:

- `manifest.json`
- `assets/app-*.css`
- `assets/app-*.js`
- `assets/fonts-*.css`
- `assets/instrument-sans-*.woff` and `.woff2` files

If any files are missing, the website will load without styles and animations. Go back and re-upload the `public/build/` directory completely.

## Step 3 — Set Directory Permissions

In cPanel File Manager, set the following directories to **755** (or "Write" permission):

- `storage/` (and all subdirectories)
- `bootstrap/cache/`

## Step 4 — Configure Environment

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

## Step 5 — Run Migrations (if using database)

The application uses file-based session, cache, and queue by default — no database tables are needed for basic operation.

If you plan to use database sessions/cache/queue, run:

```bash
php artisan migrate --force
```

## Step 6 — SMTP Configuration (for Contact/Volunteer forms)

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

## Step 7 — Verify

Visit your domain. The site should load with all styles, images, and animations working.

### Troubleshooting

| Issue | Fix |
|---|---|
| Website has no CSS/styling | **Step 0 issue**: Did you run `npm run build` before uploading? Check that `public/build/` directory exists on server with CSS and JS files. Re-upload if missing. |
| 500 Internal Server Error | Check `.env` exists and `APP_KEY` is set. Check `storage/logs/` for errors. |
| White page | Ensure PHP 8.3+ is selected in cPanel > PHP Selector. |
| Assets return 404 | Confirm `public/build/` directory was uploaded with all files intact. Verify file permissions. |
| Session not persisting | Ensure `storage/framework/sessions/` is writable (755). |
| Routes return 404 | Confirm `mod_rewrite` is enabled. Check that `.htaccess` files were uploaded. |

## How It Works

The root `.htaccess` rewrites all incoming requests to `public/index.php` (Laravel's front controller). Sensitive directories (`config/`, `routes/`, `storage/`, etc.) are blocked from web access via Apache deny rules.

This setup works identically on both localhost (Laragon) and shared hosting — no code changes needed between environments.

## CloudPanel / Private Server Notes

- Document root must point to the Laravel `public/` folder. In CloudPanel set the **Root Directory** to `yourdomain.com/public` (for this site: `ngosite.duckdns.org/public`). If the document root points to the project root the server will not be able to find `/build/assets/*` and the site will load unstyled.
- If you use Varnish, purge its cache after deploying new assets: CloudPanel → Site → Varnish Cache → "Purge Entire Cache" or purge individual URLs/tags.
- If changes are not visible after updating the Root Directory or assets, reload the web server (requires SSH):

```bash
sudo systemctl reload nginx
```

Or use CloudPanel's controls to restart the site/PHP-FPM if SSH is not available.
- Always run `npm run build` locally and upload the entire `public/build/` directory before finishing deployment. Verify `manifest.json`, `assets/app-*.css`, `assets/app-*.js`, and font files are present on the server.

These CloudPanel-specific steps solved the issue where assets existed on disk but returned 404 because the site was served from the project root instead of the `public/` folder.
