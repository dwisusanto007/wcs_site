<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::updateOrCreate(
            ['key' => 'hero_title'],
            [
                'value_en' => 'One System Integrator, All Your Connectivity Needs',
                'value_id' => 'Satu Sistem Integrator, Semua Kebutuhan Konektivitas Anda',
            ]
        );

        SiteSetting::updateOrCreate(
            ['key' => 'hero_description'],
            [
                'value_en' => 'From integration to security and voice solutions, we deliver seamless connectivity to power your business growth.',
                'value_id' => 'Mulai dari integrasi hingga solusi keamanan dan komunikasi suara, kami menghadirkan konektivitas tanpa hambatan untuk mendukung pertumbuhan bisnis Anda.',
            ]
        );

        SiteSetting::updateOrCreate(
            ['key' => 'about_description'],
            [
                'value_en' => 'Established in 1995, PT Wahana Ciptasinatria (WCS) brings over 30 years of expertise as a trusted System Integrator providing IT solutions for businesses across Indonesia. Combining deep industry expertise with innovative technologies, WCS partners closely with clients to design and deliver customized end-to-end solutions, from vital network infrastructure to advanced security solutions. Our mission is to empower our clients with robust systems to stay ahead in an increasingly digitized world.',
                'value_id' => 'Didirikan pada tahun 1995, PT Wahana Ciptasinatria (WCS) membawa lebih dari 30 tahun keahlian sebagai System Integrator terpercaya yang menyediakan solusi TI untuk bisnis di seluruh Indonesia. Menggabungkan keahlian industri yang mendalam dengan teknologi inovatif, WCS bermitra erat dengan klien untuk merancang dan menghadirkan solusi end-to-end yang disesuaikan, dari infrastruktur jaringan vital hingga solusi keamanan canggih. Misi kami adalah memberdayakan klien kami dengan sistem yang kokoh agar tetap unggul di dunia yang semakin terdigitalisasi.',
            ]
        );
    }
}
