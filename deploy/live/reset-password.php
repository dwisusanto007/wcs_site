<?php
// SECURITY: Delete this file immediately after use!

$laravelPath = __DIR__ . '/../../laravel-app';
define('LARAVEL_START', microtime(true));
require $laravelPath . '/vendor/autoload.php';

$app = require_once $laravelPath . '/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$email = 'admin@wcs.co.id';
$newPassword = 'WcsJaya26';

$user = \App\Models\User::where('email', $email)->first();
if ($user) {
    $user->password = \Illuminate\Support\Facades\Hash::make($newPassword);
    $user->save();
    echo "Done! Password reset for {$email}. DELETE this file now!";
} else {
    echo "User not found: {$email}";
}
