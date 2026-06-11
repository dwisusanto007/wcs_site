<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'key',
        'value_en',
        'value_id',
    ];

    public static function getValue(string $key): ?string
    {
        $setting = static::where('key', $key)->first();

        if (!$setting) {
            return null;
        }

        $locale = app()->getLocale();
        $value = $setting->{'value_' . $locale};

        return !empty($value) ? $value : $setting->value_en;
    }
}
