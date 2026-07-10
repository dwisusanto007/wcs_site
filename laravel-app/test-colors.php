<?php
/**
 * Test: compare all theme colors in database vs homepage HTML output
 * 
 * Verifies that every CSS variable from theme_settings table
 * is correctly rendered in the homepage <style> block.
 * 
 * Usage: php test-colors.php
 */

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\ThemeSetting;

echo "=== Theme Colors: Database vs Homepage ===\n\n";

// Get all settings from database
$settings = ThemeSetting::all();

// Render homepage
$response = app()->make(\Illuminate\Contracts\Http\Kernel::class)
    ->handle(\Illuminate\Http\Request::create('/', 'GET'));
$html = $response->getContent();

$passed = 0;
$failed = 0;

foreach ($settings as $setting) {
    $varName = "--{$setting->group}-{$setting->key}";
    $expected = "{$varName}: {$setting->value}";

    $found = str_contains($html, $expected);

    $status = $found ? '✅' : '❌';
    echo "  {$status} {$varName}\n";
    echo "     DB value: {$setting->value}\n";

    if (!$found) {
        // Try to find what value is actually in the HTML
        if (preg_match('/' . preg_quote($varName, '/') . ':\s*([^;]+);/', $html, $matches)) {
            echo "     HTML value: " . trim($matches[1]) . "\n";
        } else {
            echo "     HTML value: NOT FOUND in page\n";
        }
        $failed++;
    } else {
        $passed++;
    }
    echo "\n";
}

echo "=== Results: {$passed} passed, {$failed} failed out of " . count($settings) . " ===\n";
echo ($failed === 0) ? "✅ ALL COLORS MATCH\n" : "❌ SOME COLORS DO NOT MATCH\n";
