<?php

$publicIndex = __DIR__ . '/../public/index.php';

$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = $publicIndex;

require $publicIndex;
