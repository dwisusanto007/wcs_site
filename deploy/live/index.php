<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Path to Laravel app (outside public_html)
$laravelPath = __DIR__ . '/../../laravel-app';

// Fix for subfolder deployment - tell Laravel the script is at /live/index.php
// Laravel will automatically strip /live from the URI when matching routes
$_SERVER['SCRIPT_NAME'] = '/live/index.php';
$_SERVER['PHP_SELF'] = '/live/index.php';

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $laravelPath.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require $laravelPath.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once $laravelPath.'/bootstrap/app.php';

// Override public path to point to this directory (public_html/live)
$app->usePublicPath(__DIR__);

$app->handleRequest(Request::capture());
