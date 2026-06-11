<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            // Infrastructure category
            [
                'category' => 'infrastructure',
                'title_en' => 'Infrastructure & Connectivity',
                'title_id' => 'Infrastructure & Connectivity',
                'description_en' => 'Reliable and scalable infrastructure designed to support essential enterprise operations.',
                'description_id' => 'Infrastruktur yang andal dirancang untuk mendukung operasi perusahaan.',
                'sort_order' => 1,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Data Center, Server & Storage Solutions',
                'title_id' => 'Data Center, Server & Storage Solutions',
                'description_en' => 'Scalable infrastructure to support secure and high-performance enterprise workloads.',
                'description_id' => 'Solusi infrastruktur yang fleksibel dan siap berkembang untuk mendukung kebutuhan perusahaan dengan tingkat keamanan dan performa tinggi.',
                'sort_order' => 2,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Enterprise Networking & Connectivity',
                'title_id' => 'Enterprise Networking & Connectivity',
                'description_en' => 'Reliable network architecture encompassing enterprise networking, WAN optimization, and network acceleration.',
                'description_id' => 'Arsitektur jaringan yang kuat dan efisien, mencakup enterprise networking, optimasi WAN, hingga akselerasi jaringan untuk konektivitas tanpa hambatan.',
                'sort_order' => 3,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Unified Communication & Contact Center',
                'title_id' => 'Unified Communication & Contact Center',
                'description_en' => 'Omni-channel communications systems combining voice and contact center with centralized WhatsApp integration.',
                'description_id' => 'Sistem komunikasi omni-channel yang mengintegrasikan layanan suara dan contact center, termasuk integrasi WhatsApp terpusat untuk pengalaman komunikasi yang lebih terhubung.',
                'sort_order' => 4,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Collaboration & Video Conferencing',
                'title_id' => 'Collaboration & Video Conferencing',
                'description_en' => 'Enterprise-grade video conferencing solutions for seamless communication and collaboration.',
                'description_id' => 'Solusi video conference kelas enterprise yang menghadirkan komunikasi dan kolaborasi yang lancar, efektif, dan real-time.',
                'sort_order' => 5,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Physical Security',
                'title_id' => 'Physical Security',
                'description_en' => 'Design and integrate robust security systems to protect your personnel, assets, and facilities.',
                'description_id' => 'Kami menghadirkan solusi keamanan fisik terintegrasi untuk melindungi personel, aset, dan fasilitas bisnis Anda secara menyeluruh.',
                'sort_order' => 6,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Intelligent Video Surveillance',
                'title_id' => 'Intelligent Video Surveillance',
                'description_en' => 'CCTV and video surveillance systems to ensure visibility across major enterprise touchpoints.',
                'description_id' => 'Sistem CCTV dan video surveillance cerdas untuk memberikan visibilitas penuh di seluruh area operasional penting.',
                'sort_order' => 7,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Access Control & Identity Management Systems',
                'title_id' => 'Access Control & Identity Management',
                'description_en' => 'Secure and scalable control to manage access for modern facilities.',
                'description_id' => 'Sistem pengelolaan akses yang aman dan skalabel untuk mengatur dan memonitor akses di lingkungan modern.',
                'sort_order' => 8,
            ],
            [
                'category' => 'infrastructure',
                'title_en' => 'Perimeter Security',
                'title_id' => 'Perimeter Security',
                'description_en' => 'Comprehensive monitoring solutions for critical sites.',
                'description_id' => 'Solusi pemantauan perimeter yang komprehensif untuk menjaga keamanan area dan lokasi kritis.',
                'sort_order' => 9,
            ],

            // Application (Security Solutions) category
            [
                'category' => 'application',
                'title_en' => 'Next-Generation Firewall',
                'title_id' => 'Next-Generation Firewall',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 1,
            ],
            [
                'category' => 'application',
                'title_en' => 'Web Application Firewall',
                'title_id' => 'Web Application Firewall',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 2,
            ],
            [
                'category' => 'application',
                'title_en' => 'Advanced Threat Protection',
                'title_id' => 'Advanced Threat Protection',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 3,
            ],
            [
                'category' => 'application',
                'title_en' => 'Advanced Endpoint Protection',
                'title_id' => 'Advanced Endpoint Protection',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 4,
            ],
            [
                'category' => 'application',
                'title_en' => 'Network Access Control',
                'title_id' => 'Network Access Control',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 5,
            ],
            [
                'category' => 'application',
                'title_en' => 'Database Security',
                'title_id' => 'Database Security',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 6,
            ],
            [
                'category' => 'application',
                'title_en' => 'Privilege Access Management',
                'title_id' => 'Privilege Access Management',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 7,
            ],
            [
                'category' => 'application',
                'title_en' => 'Vulnerability Management',
                'title_id' => 'Vulnerability Management',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 8,
            ],
            [
                'category' => 'application',
                'title_en' => 'Next-Generation SIEM',
                'title_id' => 'Next-Generation SIEM',
                'description_en' => 'Comprehensive protection across your network, applications, endpoints, and data environments.',
                'description_id' => 'Perlindungan menyeluruh pada jaringan, aplikasi, endpoint, dan lingkungan data Anda.',
                'sort_order' => 9,
            ],
            [
                'category' => 'application',
                'title_en' => 'Cloud Solutions',
                'title_id' => 'Solusi Cloud',
                'description_en' => 'Continuous support and strategic services to ensure performance, compliance, and long-term resilience.',
                'description_id' => 'Dukungan berkelanjutan serta layanan strategis untuk memastikan kinerja optimal, kepatuhan, dan ketahanan jangka panjang.',
                'sort_order' => 10,
            ],
            [
                'category' => 'application',
                'title_en' => 'Managed Services',
                'title_id' => 'Managed Services',
                'description_en' => 'Continuous support and strategic services to ensure performance, compliance, and long-term resilience.',
                'description_id' => 'Dukungan berkelanjutan serta layanan strategis untuk memastikan kinerja optimal, kepatuhan, dan ketahanan jangka panjang.',
                'sort_order' => 11,
            ],
            [
                'category' => 'application',
                'title_en' => 'DevSecOps Integration',
                'title_id' => 'Integrasi DevSecOps',
                'description_en' => 'Continuous support and strategic services to ensure performance, compliance, and long-term resilience.',
                'description_id' => 'Dukungan berkelanjutan serta layanan strategis untuk memastikan kinerja optimal, kepatuhan, dan ketahanan jangka panjang.',
                'sort_order' => 12,
            ],
            [
                'category' => 'application',
                'title_en' => 'Security Monitoring & Risk Mitigation',
                'title_id' => 'Monitoring Keamanan & Mitigasi Risiko',
                'description_en' => 'Continuous support and strategic services to ensure performance, compliance, and long-term resilience.',
                'description_id' => 'Dukungan berkelanjutan serta layanan strategis untuk memastikan kinerja optimal, kepatuhan, dan ketahanan jangka panjang.',
                'sort_order' => 13,
            ],
            [
                'category' => 'application',
                'title_en' => 'Service Delivery Assurance Platform',
                'title_id' => 'Platform Assurance Layanan',
                'description_en' => 'Continuous support and strategic services to ensure performance, compliance, and long-term resilience.',
                'description_id' => 'Dukungan berkelanjutan serta layanan strategis untuk memastikan kinerja optimal, kepatuhan, dan ketahanan jangka panjang.',
                'sort_order' => 14,
            ],

            // Service Solutions category
            [
                'category' => 'service',
                'title_en' => 'Technology Sourcing & Solution Supply',
                'title_id' => 'Pengadaan Teknologi & Penyediaan Solusi',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 1,
            ],
            [
                'category' => 'service',
                'title_en' => 'System Design & Implementation',
                'title_id' => 'Perancangan & Implementasi Sistem',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 2,
            ],
            [
                'category' => 'service',
                'title_en' => 'Professional & Technical Services',
                'title_id' => 'Layanan Profesional & Teknis',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 3,
            ],
            [
                'category' => 'service',
                'title_en' => 'Post-Deployment Support',
                'title_id' => 'Dukungan Pasca Implementasi',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 4,
            ],
            [
                'category' => 'service',
                'title_en' => 'Preventive & Corrective Maintenance',
                'title_id' => 'Pemeliharaan Preventif & Korektif',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 5,
            ],
            [
                'category' => 'service',
                'title_en' => 'Managed Services & System Monitoring',
                'title_id' => 'Managed Services & Monitoring Sistem',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 6,
            ],
            [
                'category' => 'service',
                'title_en' => 'Upgrade, Expansion & Enhancement Services',
                'title_id' => 'Upgrade, Ekspansi & Peningkatan Sistem',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 7,
            ],
            [
                'category' => 'service',
                'title_en' => 'SLA-Based Technical Support',
                'title_id' => 'Dukungan Teknis Berbasis SLA',
                'description_en' => 'We provide comprehensive, on-demand service solutions tailored to your operational and technological needs.',
                'description_id' => 'Kami menghadirkan layanan menyeluruh yang fleksibel dan dirancang mengikuti kebutuhan operasional serta teknologi Anda.',
                'sort_order' => 8,
            ],

            // Non-ERP (Advanced Application Solutions) category
            [
                'category' => 'non-erp',
                'title_en' => 'System Design & Development',
                'title_id' => 'Perancangan & Pengembangan Sistem',
                'description_en' => 'Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure.',
                'description_id' => 'Tiap organisasi memiliki kebutuhan yang unik. Karena itu, kami menghadirkan aplikasi bisnis yang dikembangkan secara khusus untuk melengkapi sistem yang telah ada.',
                'sort_order' => 1,
            ],
            [
                'category' => 'non-erp',
                'title_en' => 'Workflow Automation',
                'title_id' => 'Otomatisasi Workflow',
                'description_en' => 'Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure.',
                'description_id' => 'Tiap organisasi memiliki kebutuhan yang unik. Karena itu, kami menghadirkan aplikasi bisnis yang dikembangkan secara khusus untuk melengkapi sistem yang telah ada.',
                'sort_order' => 2,
            ],
            [
                'category' => 'non-erp',
                'title_en' => 'System Integration',
                'title_id' => 'Integrasi Sistem',
                'description_en' => 'Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure.',
                'description_id' => 'Tiap organisasi memiliki kebutuhan yang unik. Karena itu, kami menghadirkan aplikasi bisnis yang dikembangkan secara khusus untuk melengkapi sistem yang telah ada.',
                'sort_order' => 3,
            ],
            [
                'category' => 'non-erp',
                'title_en' => 'User Access & Security Configuration',
                'title_id' => 'Konfigurasi Akses & Keamanan Pengguna',
                'description_en' => 'Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure.',
                'description_id' => 'Tiap organisasi memiliki kebutuhan yang unik. Karena itu, kami menghadirkan aplikasi bisnis yang dikembangkan secara khusus untuk melengkapi sistem yang telah ada.',
                'sort_order' => 4,
            ],
            [
                'category' => 'non-erp',
                'title_en' => 'Data Migration',
                'title_id' => 'Migrasi Data',
                'description_en' => 'Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure.',
                'description_id' => 'Tiap organisasi memiliki kebutuhan yang unik. Karena itu, kami menghadirkan aplikasi bisnis yang dikembangkan secara khusus untuk melengkapi sistem yang telah ada.',
                'sort_order' => 5,
            ],
            [
                'category' => 'non-erp',
                'title_en' => 'Training & Post-Implementation Support',
                'title_id' => 'Pelatihan & Dukungan Pasca Implementasi',
                'description_en' => 'Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure.',
                'description_id' => 'Tiap organisasi memiliki kebutuhan yang unik. Karena itu, kami menghadirkan aplikasi bisnis yang dikembangkan secara khusus untuk melengkapi sistem yang telah ada.',
                'sort_order' => 6,
            ],

            // Electronic Security System category
            [
                'category' => 'electronic-security',
                'title_en' => 'Integrated Physical Security Command Centers (PSCC)',
                'title_id' => 'Pusat Komando Keamanan Fisik Terintegrasi (PSCC)',
                'description_en' => 'WCS redefines physical security by leveraging a combination of robust hardware and intelligent software.',
                'description_id' => 'WCS menghadirkan pendekatan baru dalam keamanan fisik melalui perpaduan perangkat keras yang andal dan perangkat lunak yang cerdas.',
                'sort_order' => 1,
            ],
            [
                'category' => 'electronic-security',
                'title_en' => 'Mission-Critical Radio Communications',
                'title_id' => 'Komunikasi Radio Kritis',
                'description_en' => 'WCS redefines physical security by leveraging a combination of robust hardware and intelligent software.',
                'description_id' => 'WCS menghadirkan pendekatan baru dalam keamanan fisik melalui perpaduan perangkat keras yang andal dan perangkat lunak yang cerdas.',
                'sort_order' => 2,
            ],
            [
                'category' => 'electronic-security',
                'title_en' => 'Monitoring, Surveillance, and Analytics',
                'title_id' => 'Pemantauan, Pengawasan, dan Analitik',
                'description_en' => 'WCS redefines physical security by leveraging a combination of robust hardware and intelligent software.',
                'description_id' => 'WCS menghadirkan pendekatan baru dalam keamanan fisik melalui perpaduan perangkat keras yang andal dan perangkat lunak yang cerdas.',
                'sort_order' => 3,
            ],
            [
                'category' => 'electronic-security',
                'title_en' => 'Physical Access Control Systems (PACS)',
                'title_id' => 'Sistem Kontrol Akses Fisik (PACS)',
                'description_en' => 'WCS redefines physical security by leveraging a combination of robust hardware and intelligent software.',
                'description_id' => 'WCS menghadirkan pendekatan baru dalam keamanan fisik melalui perpaduan perangkat keras yang andal dan perangkat lunak yang cerdas.',
                'sort_order' => 4,
            ],
            [
                'category' => 'electronic-security',
                'title_en' => 'Perimeter Intrusion Detection Systems (PIDS)',
                'title_id' => 'Sistem Deteksi Intrusi Perimeter (PIDS)',
                'description_en' => 'WCS redefines physical security by leveraging a combination of robust hardware and intelligent software.',
                'description_id' => 'WCS menghadirkan pendekatan baru dalam keamanan fisik melalui perpaduan perangkat keras yang andal dan perangkat lunak yang cerdas.',
                'sort_order' => 5,
            ],
            [
                'category' => 'electronic-security',
                'title_en' => 'Comprehensive Security System Services or Maintenance Support',
                'title_id' => 'Layanan Sistem Keamanan Komprehensif atau Dukungan Pemeliharaan',
                'description_en' => 'WCS redefines physical security by leveraging a combination of robust hardware and intelligent software.',
                'description_id' => 'WCS menghadirkan pendekatan baru dalam keamanan fisik melalui perpaduan perangkat keras yang andal dan perangkat lunak yang cerdas.',
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                [
                    'category' => $service['category'],
                    'title_en' => $service['title_en'],
                ],
                array_merge($service, ['is_active' => true])
            );
        }
    }
}
