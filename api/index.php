<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

header('Content-Type: application/json');

echo json_encode([
    'base_path' => $app->basePath(),
    'routes_path' => $app->getConfigurationPath(),
    'routes_cache_path' => $app->getCachedRoutesPath(),
    'routes_cache_exists' => file_exists($app->getCachedRoutesPath()),
    'api_routes_exists' => file_exists($app->basePath() . '/routes/api.php'),
    'app_env' => $app->environment(),
    'app_debug' => $app->hasDebugModeEnabled(),
]);
