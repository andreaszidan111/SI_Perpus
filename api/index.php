<?php

header('Content-Type: application/json');

$files = [
    'routes_file' => __DIR__ . '/../bootstrap/cache/routes-v7.php',
    'routes_file_alt' => __DIR__ . '/../bootstrap/cache/routes.php',
    'custom_routes_file' => '/tmp/routes.php',
];

$result = [];

foreach ($files as $name => $file) {
    $result[$name] = [
        'path' => $file,
        'exists' => file_exists($file),
        'size' => file_exists($file) ? filesize($file) : null,
    ];
}

echo json_encode($result);
