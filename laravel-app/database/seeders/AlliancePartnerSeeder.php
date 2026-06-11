<?php

namespace Database\Seeders;

use App\Models\AlliancePartner;
use Illuminate\Database\Seeder;

class AlliancePartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            ['filename' => 'AVAYA.svg', 'name' => 'Avaya'],
            ['filename' => 'Aruba_Networks.svg', 'name' => 'Aruba Networks'],
            ['filename' => 'CyberArk.svg', 'name' => 'CyberArk'],
            ['filename' => 'DELL_EMC.svg', 'name' => 'Dell EMC'],
            ['filename' => 'FireEye.svg', 'name' => 'FireEye'],
            ['filename' => 'Hewlett_Packard_Enterprise.svg', 'name' => 'Hewlett Packard Enterprise'],
            ['filename' => 'IBM.svg', 'name' => 'IBM'],
            ['filename' => 'Infor.svg', 'name' => 'Infor'],
            ['filename' => 'Ivanti.svg', 'name' => 'Ivanti'],
            ['filename' => 'Trend_Micro.svg', 'name' => 'Trend Micro'],
            ['filename' => 'acer.png', 'name' => 'Acer'],
            ['filename' => 'axis.png', 'name' => 'Axis'],
            ['filename' => 'belden.png', 'name' => 'Belden'],
            ['filename' => 'bosch.png', 'name' => 'Bosch'],
            ['filename' => 'commscope.png', 'name' => 'Commscope'],
            ['filename' => 'dahua.png', 'name' => 'Dahua'],
            ['filename' => 'eg.png', 'name' => 'Eg'],
            ['filename' => 'elastic.png', 'name' => 'Elastic'],
            ['filename' => 'forescout.png', 'name' => 'Forescout'],
            ['filename' => 'fortinet.png', 'name' => 'Fortinet'],
            ['filename' => 'h3c.png', 'name' => 'H3c'],
            ['filename' => 'hid.png', 'name' => 'Hid'],
            ['filename' => 'hp.png', 'name' => 'Hp'],
            ['filename' => 'huawei.svg', 'name' => 'Huawei'],
            ['filename' => 'juniper.svg', 'name' => 'Juniper'],
            ['filename' => 'lenel-s2.png', 'name' => 'Lenel S2'],
            ['filename' => 'netscout.png', 'name' => 'Netscout'],
            ['filename' => 'nutanix.png', 'name' => 'Nutanix'],
            ['filename' => 'palo-alto.png', 'name' => 'Palo Alto'],
            ['filename' => 'sangfor.png', 'name' => 'Sangfor'],
            ['filename' => 'sangoma.png', 'name' => 'Sangoma'],
            ['filename' => 'seciron.png', 'name' => 'Seciron'],
            ['filename' => 'supermicro.png', 'name' => 'Supermicro'],
            ['filename' => 'unitree.png', 'name' => 'Unitree'],
            ['filename' => 'wesco.png', 'name' => 'Wesco'],
            ['filename' => 'zimbra.svg', 'name' => 'Zimbra'],
            ['filename' => 'zkteko.png', 'name' => 'Zkteko'],
        ];

        foreach ($partners as $index => $partner) {
            AlliancePartner::updateOrCreate(
                ['name' => $partner['name']],
                [
                    'logo_path' => "images/alliance/{$partner['filename']}",
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
