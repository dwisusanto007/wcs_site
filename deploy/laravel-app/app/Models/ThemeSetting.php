<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ThemeSetting extends Model
{
    protected $fillable = ['group', 'key', 'value', 'label'];

    /**
     * Get all theme settings as CSS variables string.
     */
    public static function getCssVariables(): string
    {
        $settings = Cache::remember('theme_settings', 3600, function () {
            return static::all();
        });

        $vars = [];
        foreach ($settings as $setting) {
            $varName = "--{$setting->group}-{$setting->key}";
            $vars[] = "{$varName}: {$setting->value};";
        }

        return implode("\n    ", $vars);
    }

    /**
     * Get a specific theme value.
     */
    public static function getValue(string $group, string $key, string $default = '#000000'): string
    {
        $setting = Cache::remember("theme_{$group}_{$key}", 3600, function () use ($group, $key) {
            return static::where('group', $group)->where('key', $key)->first();
        });

        return $setting?->value ?? $default;
    }

    /**
     * Clear theme cache when settings are updated.
     */
    public static function clearCache(): void
    {
        Cache::forget('theme_settings');
        $settings = static::all();
        foreach ($settings as $setting) {
            Cache::forget("theme_{$setting->group}_{$setting->key}");
        }
    }

    protected static function booted(): void
    {
        static::saved(fn () => static::clearCache());
        static::deleted(fn () => static::clearCache());
    }
}
