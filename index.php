<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path !== '/' && $path !== false) {
    $file = __DIR__ . '/public' . $path;

    if (is_file($file)) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        $mimeTypes = [
            'css'   => 'text/css',
            'js'    => 'application/javascript',
            'json'  => 'application/json',
            'svg'   => 'image/svg+xml',
            'png'   => 'image/png',
            'jpg'   => 'image/jpeg',
            'jpeg'  => 'image/jpeg',
            'gif'   => 'image/gif',
            'webp'  => 'image/webp',
            'woff'  => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf'   => 'font/ttf',
            'otf'   => 'font/otf',
            'ico'   => 'image/x-icon',
            'html'  => 'text/html',
            'txt'   => 'text/plain',
            'xml'   => 'application/xml',
        ];

        $mime = $mimeTypes[$ext] ?? (mime_content_type($file) ?: 'application/octet-stream');

        header('Content-Type: ' . $mime);
        header('Content-Length: ' . filesize($file));
        header('Cache-Control: public, max-age=31536000, immutable');
        header('X-Content-Type-Options: nosniff');
        readfile($file);
        exit;
    }
}

require __DIR__ . '/public/index.php';
