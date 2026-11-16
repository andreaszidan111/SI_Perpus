<?php

header('Content-Type: application/json');

$files = [
    'api_routes' => __DIR__ . '/../routes/api.php',
    'web_routes' => __DIR__ . '/../routes/web.php',
    'bootstrap_app' => __DIR__ . '/../bootstrap/app.php',
];

$result = [];

foreach ($files as $name => $file) {
    $result[$name] = [
        'exists' => file_exists($file),
        'size' => file_exists($file) ? filesize($file) : null,
    ];
}

echo json_encode($result);
