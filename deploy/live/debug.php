<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$laravelPath = __DIR__ . '/../../laravel-app';
$logFile = $laravelPath . '/storage/logs/laravel.log';

// Clear log first
file_put_contents($logFile, '');

// Boot and test
require $laravelPath . '/vendor/autoload.php';
$app = require_once $laravelPath . '/bootstrap/app.php';
$app->usePublicPath(__DIR__);

$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

echo "<pre>\n";

// Test homepage
$request = \Illuminate\Http\Request::create('/live', 'GET');
$request->server->set('SCRIPT_NAME', '/live/index.php');
$response = $kernel->handle($request);
echo "GET /live → Status: " . $response->getStatusCode() . "\n";

// Check log for errors
if (file_exists($logFile) && filesize($logFile) > 0) {
    $log = file_get_contents($logFile);
    preg_match_all('/\.ERROR: (.+?) \{/s', $log, $matches);
    if (!empty($matches[1])) {
        echo "\nErrors:\n";
        foreach ($matches[1] as $error) {
            echo "  - " . substr(trim($error), 0, 200) . "\n";
        }
    }
}

echo "</pre>";
