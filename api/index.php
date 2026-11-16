<?php

header('Content-Type: application/json');

echo json_encode([
    'request_uri' => $_SERVER['REQUEST_URI'] ?? null,
    'script_name' => $_SERVER['SCRIPT_NAME'] ?? null,
    'path_info' => $_SERVER['PATH_INFO'] ?? null,
]);
