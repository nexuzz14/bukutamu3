<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', '/scan/sendData', '/daftar'],

    'allowed_methods' => ['GET', 'POST'],

    'allowed_origins' => ['http://localhost:8000', 'https://qrco.de', 'https://www.qrco.de', 'https://qrco.de/beoU3M', 'https://smkn2magelang.tech', 'https://www.smkn2magelang.tech', 'https://smkn2magelang.tech/daftar'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'X-Requested-With'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
