{{-- robots.txt template. Rendered at /robots.txt. Allows all crawlers and points to the XML sitemap. --}}
User-agent: *
Allow: /

Sitemap: {{ url('/sitemap.xml') }}
