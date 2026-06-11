<?php
/**
 * Setup script for cPanel deployment (run once via browser, then DELETE this file)
 * Access: https://yourdomain.com/live/setup.php
 */

$laravelPath = __DIR__ . '/../../laravel-app';

echo "<pre>\n";
echo "=== WCS Laravel Setup ===\n\n";

// 1. Create storage symlink
$target = $laravelPath . '/storage/app/public';
$link = __DIR__ . '/storage';
if (!file_exists($link)) {
    if (symlink($target, $link)) {
        echo "✅ Storage symlink created\n";
    } else {
        echo "❌ Failed to create storage symlink\n";
        echo "   Manually create: ln -s $target $link\n";
    }
} else {
    echo "⏭️  Storage symlink already exists\n";
}

echo "\n";

// 2. Run migrations
echo "--- Running migrations ---\n";
$output = shell_exec("cd $laravelPath && php artisan migrate --force 2>&1");
echo $output . "\n";

// 3. Run seeders
echo "--- Running seeders ---\n";
$output = shell_exec("cd $laravelPath && php artisan db:seed --force 2>&1");
echo $output . "\n";

// 4. Cache config/routes/views
echo "--- Caching ---\n";
$output = shell_exec("cd $laravelPath && php artisan config:cache 2>&1");
echo $output;
$output = shell_exec("cd $laravelPath && php artisan route:cache 2>&1");
echo $output;
$output = shell_exec("cd $laravelPath && php artisan view:cache 2>&1");
echo $output;

echo "\n\n=== DONE ===\n";
echo "⚠️  DELETE THIS FILE NOW: rm " . __FILE__ . "\n";
echo "</pre>";
