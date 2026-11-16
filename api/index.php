<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$routes = $app->make('router')->getRoutes();

header('Content-Type: application/json');

$result = [];

foreach ($routes as $route) {
    $result[] = [
        'uri' => $route->uri(),
        'methods' => $route->methods(),
    ];
}

echo json_encode([
    'total_routes' => count($result),
    'routes' => $result,
]);
