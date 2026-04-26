# Project Context — WCS Corporate Website

## Tentang Project
Website company profile untuk **PT Wahana Ciptasinatria (WCS)**, perusahaan System Integrator IT di Indonesia sejak 1995. Domain: wcs.co.id

## Tech Stack
- **HTML statis** (tanpa framework/bundler)
- **Tailwind CSS v3.4.17** — sudah di-compile ke `style.css` (bukan via CDN/PostCSS, file CSS sudah jadi)
- **Swiper.js v11** — carousel client logos (via CDN)
- **Vanilla JavaScript** — tanpa library tambahan
- **Tidak ada build tool** — langsung edit file HTML/CSS/JS

## Struktur File

### Halaman
| File | Fungsi |
|------|--------|
| `index.html` | Homepage (versi terbaru, ada tab Electronic Security) |
| `home.html` | Homepage versi lama (4 tab, tanpa Electronic Security) |
| `about.html` | Halaman About Us |
| `contact.html` | Halaman Contact Us dengan form |
| `maintenance.html` | Halaman maintenance/under construction |

### Komponen Shared
| File | Fungsi |
|------|--------|
| `js/header.js` | Inject header via `innerHTML` ke `#header-placeholder` |
| `js/footer.js` | Inject footer via `innerHTML` ke `#footer-placeholder` |
| `header.html` | Template header (referensi, tidak di-include langsung) |
| `footer.html` | Template footer (referensi, tidak di-include langsung) |

### Styling
| File | Fungsi |
|------|--------|
| `css/style.css` | CSS utama (Tailwind compiled + custom styles, ~2500 baris) |
| `css/contact-form.css` | CSS khusus halaman contact |

### Assets (`images/`)
| Folder | Isi |
|--------|-----|
| `images/alliance/` | Semua logo alliance partner (35 file) |
| `images/banners/` | Background banner & hero image |
| `images/clients/` | Logo klien untuk carousel Swiper |
| `images/icons/` | Icon SVG (ic_*, follow_*) |
| `images/logo_wcs.png` | Logo perusahaan |
| `images/about-us.png` | Foto halaman About |
| `wcs-logo.png` | Logo standalone (root) |

## Pola Arsitektur

### Header & Footer Injection
Setiap halaman menggunakan pattern:
```html
<div id="header-placeholder"></div>
<script src="js/header.js"></script>
<!-- ... konten ... -->
<div id="footer-placeholder"></div>
<script src="js/footer.js"></script>
```

### Tab Navigation (Homepage)
- 5 tab: Infrastructure, Security, Service, Non-ERP, Electronic Security
- Tab aktif via class `bg-primary text-white`
- Support URL param `?tab=xxx` untuk deep-link ke tab tertentu
- Scroll ke section via anchor `#solutionServices`

### Navigasi
- Desktop: horizontal nav dengan dropdown "Solution & Services"
- Mobile: hamburger menu (`#menu-toggle` → `#mobile-menu`)
- Link pattern: `index.html?tab=xxx#section` untuk navigasi ke tab + section

## Design System

### Warna
- **Primary (merah):** `#A21C21` (rgb 162,28,33) — `.bg-primary`, `.text-primary`
- **Primary hover:** `#711519` (rgb 113,21,25)
- **Gray 900:** `#303030` — heading text
- **Gray 500:** `#5A5A5A` — body text
- **Footer heading:** `#0B3955`
- **Contact accent:** `#667eea` → `#764ba2` (gradient)

### Typography
- Font: **Inter** (Google Fonts)
- Class: `.font-inter`
- Heading sizes responsive via media queries di `style.css`

### Komponen
- `.btn-primary` — tombol merah dengan hover gelap
- `.btn-primary-outline` — tombol outline merah
- `.page-title` / `.banner-title` — judul halaman/banner
- `.content-title` — judul konten section
- `.section-title` — wrapper judul section
- `.link-primary` — link merah underline

### Animasi
- `animate-slideInLeft` / `animate-slideInRight` — slide masuk dari kiri/kanan
- `animate-fadeInDown` — fade dari atas
- Delay classes: `.delay-0`, `.delay-500`, `.delay-1000`
- Image lazy reveal: `class="invisible" onload="this.classList.remove('invisible')"`

## Informasi Bisnis
- **Nama lengkap:** PT Wahana Ciptasinatria
- **Singkatan:** WCS
- **Berdiri:** 1995 (30+ tahun)
- **Lokasi:** Sahid Sudirman Centre Lt.17, Suite F&G, Jakarta
- **Telepon:** (021) 5092-4120
- **Email:** contact@wcs.co.id
- **LinkedIn:** linkedin.com/company/pt-wahana-ciptasinatria/
- **Karyawan:** ~220 orang
- **Project:** 200+ project sukses

### Layanan (5 Kategori)
1. Network and Infrastructure Solutions
2. Security Solutions
3. Service Solution
4. Application Non-ERP
5. Electronic Security System

### Alliance Partners (35+)
Aruba, Avaya, CyberArk, Dell EMC, FireEye, HPE, Huawei, IBM, Infor, Ivanti, Juniper, Trend Micro, Zimbra, Sangoma, CommScope, Axis, Sangfor, H3C, Supermicro, Fortinet, Palo Alto, EG, Forescout, HID, Bosch, ZKTeco, Lenel S2, Belden, Unitree, Acer, Came, Dahua, HP, Elastic, Nutanix

## Catatan Penting
- `index.html` adalah versi TERBARU homepage (5 tab termasuk Electronic Security)
- `home.html` adalah versi LAMA (4 tab, tanpa Electronic Security) — jangan gunakan sebagai referensi utama
- CSS sudah compiled Tailwind — untuk menambah utility class baru, tambahkan manual di `css/style.css`
- Tidak ada build process — semua perubahan langsung di file
- Footer copyright: "© 2026 PT WAHANA CIPTA NUSANTARA"
- Bahasa konten: English (dengan beberapa label Indonesia di contact page)
