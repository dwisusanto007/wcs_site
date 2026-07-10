<?php
/**
 * Change ALL theme colors to white (#FFFFFF)
 * 
 * Usage: php change-colors-to-white.php
 */

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\ThemeSetting;

$settings = ThemeSetting::all();
$count = 0;

echo "=== Changing All Theme Colors to #FFFFFF ===\n\n";

foreach ($settings as $setting) {
    $old = $setting->value;
    $setting->update(['value' => '#FFFFFF']);
    echo "  {$setting->group}.{$setting->key}: {$old} → #FFFFFF\n";
    $count++;
}

echo "\n✅ {$count} color settings changed to #FFFFFF\n";
