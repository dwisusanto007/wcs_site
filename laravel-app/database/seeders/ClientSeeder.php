<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['filename' => 'allobank', 'ext' => 'png', 'name' => 'Allobank'],
            ['filename' => 'amazon', 'ext' => 'svg', 'name' => 'Amazon'],
            ['filename' => 'angkasa-pura-2', 'ext' => 'png', 'name' => 'Angkasa Pura 2'],
            ['filename' => 'astra-digital', 'ext' => 'png', 'name' => 'Astra Digital'],
            ['filename' => 'bangkok-bank', 'ext' => 'png', 'name' => 'Bangkok Bank'],
            ['filename' => 'bank-raya', 'ext' => 'png', 'name' => 'Bank Raya'],
            ['filename' => 'bca-life', 'ext' => 'png', 'name' => 'Bca Life'],
            ['filename' => 'bp', 'ext' => 'png', 'name' => 'Bp'],
            ['filename' => 'crowne-plaza', 'ext' => 'png', 'name' => 'Crowne Plaza'],
            ['filename' => 'fif-group', 'ext' => 'png', 'name' => 'Fif Group'],
            ['filename' => 'graha-alam-lestari', 'ext' => 'png', 'name' => 'Graha Alam Lestari'],
            ['filename' => 'hitachi-astemo', 'ext' => 'svg', 'name' => 'Hitachi Astemo'],
            ['filename' => 'idx', 'ext' => 'png', 'name' => 'Idx'],
            ['filename' => 'jamkrindo', 'ext' => 'png', 'name' => 'Jamkrindo'],
            ['filename' => 'japan-tobacco-indonesia', 'ext' => 'png', 'name' => 'Japan Tobacco Indonesia'],
            ['filename' => 'jasa-raharja', 'ext' => 'png', 'name' => 'Jasa Raharja'],
            ['filename' => 'jaya-kencana', 'ext' => 'png', 'name' => 'Jaya Kencana'],
            ['filename' => 'johnson-control-indonesia', 'ext' => 'svg', 'name' => 'Johnson Control Indonesia'],
            ['filename' => 'kalbe', 'ext' => 'svg', 'name' => 'Kalbe'],
            ['filename' => 'kemenkeu', 'ext' => 'png', 'name' => 'Kemenkeu'],
            ['filename' => 'kideco', 'ext' => 'svg', 'name' => 'Kideco'],
            ['filename' => 'madhani-talatah-nusantara', 'ext' => 'png', 'name' => 'Madhani Talatah Nusantara'],
            ['filename' => 'mandiri-sekuritas', 'ext' => 'png', 'name' => 'Mandiri Sekuritas'],
            ['filename' => 'mandiri', 'ext' => 'svg', 'name' => 'Mandiri'],
            ['filename' => 'maybank-finance', 'ext' => 'png', 'name' => 'Maybank Finance'],
            ['filename' => 'msig', 'ext' => 'png', 'name' => 'Msig'],
            ['filename' => 'multi-dimensi-teknologi', 'ext' => 'png', 'name' => 'Multi Dimensi Teknologi'],
            ['filename' => 'novotel', 'ext' => 'svg', 'name' => 'Novotel'],
            ['filename' => 'pelindo', 'ext' => 'png', 'name' => 'Pelindo'],
            ['filename' => 'pertamina', 'ext' => 'png', 'name' => 'Pertamina'],
            ['filename' => 'peruri', 'ext' => 'png', 'name' => 'Peruri'],
            ['filename' => 'pln', 'ext' => 'png', 'name' => 'Pln'],
            ['filename' => 'pusri', 'ext' => 'png', 'name' => 'Pusri'],
            ['filename' => 'raffles', 'ext' => 'svg', 'name' => 'Raffles'],
            ['filename' => 'showa', 'ext' => 'jpg', 'name' => 'Showa'],
            ['filename' => 'telkom-akses', 'ext' => 'png', 'name' => 'Telkom Akses'],
            ['filename' => 'telkom-indonesia', 'ext' => 'svg', 'name' => 'Telkom Indonesia'],
            ['filename' => 'telkomsel', 'ext' => 'png', 'name' => 'Telkomsel'],
            ['filename' => 'universitas-indonesia', 'ext' => 'png', 'name' => 'Universitas Indonesia'],
            ['filename' => 'universitas-pembangunan', 'ext' => 'png', 'name' => 'Universitas Pembangunan'],
        ];

        foreach ($clients as $index => $client) {
            Client::updateOrCreate(
                ['name' => $client['name']],
                [
                    'logo_path' => "images/clients/{$client['filename']}.{$client['ext']}",
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
