<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$routes = $app->make('router')->getRoutes();

header('Content-Type: application/json');

echo json_encode([
    'api_test_route_exists' => $routes->match(
        Illuminate\Http\Request::create('/api/test-api', 'GET')
    )->uri(),
]);
