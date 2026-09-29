<?php
// Set current working directory to project root so includes work seamlessly
chdir(__DIR__ . '/..');

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = ltrim($request_uri, '/');

if (empty($file) || $file === 'index.php') {
    require 'index.php';
} else if (file_exists($file) && (pathinfo($file, PATHINFO_EXTENSION) === 'php')) {
    require $file;
} else if (file_exists($file)) {
    // Serve static files if requested directly through router
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $mimes = [
        'html' => 'text/html',
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'svg'  => 'image/svg+xml',
        'ico'  => 'image/x-icon',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
    }
    readfile($file);
} else {
    require 'index.php';
}
