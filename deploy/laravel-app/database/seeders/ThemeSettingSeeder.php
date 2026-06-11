<?php

namespace Database\Seeders;

use App\Models\ThemeSetting;
use Illuminate\Database\Seeder;

class ThemeSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Global colors
            ['group' => 'global', 'key' => 'primary', 'value' => '#A21C21', 'label' => 'Primary Color'],
            ['group' => 'global', 'key' => 'secondary', 'value' => '#0B3955', 'label' => 'Secondary Color'],
            ['group' => 'global', 'key' => 'third', 'value' => '#303030', 'label' => 'Third Color (Text)'],
            ['group' => 'global', 'key' => 'primary-hover', 'value' => '#711519', 'label' => 'Primary Hover'],
            ['group' => 'global', 'key' => 'body-text', 'value' => '#5A5A5A', 'label' => 'Body Text Color'],
            ['group' => 'global', 'key' => 'background', 'value' => '#FFFFFF', 'label' => 'Background Color'],

            // Hero section
            ['group' => 'hero', 'key' => 'title-color', 'value' => '#303030', 'label' => 'Hero Title Color'],
            ['group' => 'hero', 'key' => 'text-color', 'value' => '#5A5A5A', 'label' => 'Hero Text Color'],
            ['group' => 'hero', 'key' => 'button-bg', 'value' => '#A21C21', 'label' => 'Hero Button Background'],
            ['group' => 'hero', 'key' => 'button-text', 'value' => '#FFFFFF', 'label' => 'Hero Button Text'],

            // Tabs section
            ['group' => 'tabs', 'key' => 'active-bg', 'value' => '#A21C21', 'label' => 'Tab Active Background'],
            ['group' => 'tabs', 'key' => 'active-text', 'value' => '#FFFFFF', 'label' => 'Tab Active Text'],
            ['group' => 'tabs', 'key' => 'inactive-bg', 'value' => '#F5F5F5', 'label' => 'Tab Inactive Background'],
            ['group' => 'tabs', 'key' => 'inactive-text', 'value' => '#4B5563', 'label' => 'Tab Inactive Text'],

            // Footer section
            ['group' => 'footer', 'key' => 'background', 'value' => '#FFFFFF', 'label' => 'Footer Background'],
            ['group' => 'footer', 'key' => 'heading-color', 'value' => '#0B3955', 'label' => 'Footer Heading Color'],
            ['group' => 'footer', 'key' => 'text-color', 'value' => '#333333', 'label' => 'Footer Text Color'],

            // Header section
            ['group' => 'header', 'key' => 'background', 'value' => '#FFFFFF', 'label' => 'Header Background'],
            ['group' => 'header', 'key' => 'nav-color', 'value' => '#111827', 'label' => 'Nav Text Color'],
            ['group' => 'header', 'key' => 'nav-hover', 'value' => '#A21C21', 'label' => 'Nav Hover Color'],
        ];

        foreach ($settings as $setting) {
            ThemeSetting::updateOrCreate(
                ['group' => $setting['group'], 'key' => $setting['key']],
                ['value' => $setting['value'], 'label' => $setting['label']]
            );
        }
    }
}
