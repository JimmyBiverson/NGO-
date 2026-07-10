{{-- Sitemap XML template. Rendered at /sitemap.xml. Lists all public page URLs with priority and change frequency hints for search engines. --}}
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.0</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>{{ url('/about') }}</loc>
        <priority>0.9</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>{{ url('/programs') }}</loc>
        <priority>0.9</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>{{ url('/gallery') }}</loc>
        <priority>0.7</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>{{ url('/volunteer') }}</loc>
        <priority>0.8</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>{{ url('/contact') }}</loc>
        <priority>0.8</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>{{ url('/blog') }}</loc>
        <priority>0.8</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>{{ url('/faq') }}</loc>
        <priority>0.7</priority>
        <changefreq>monthly</changefreq>
    </url>
</urlset>
