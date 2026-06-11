@extends('layouts.app')

@section('content')
<div id="main-content" class="main-content" style="padding-top: 80px; padding-bottom: 160px;">

    <!-- Hero Section -->
    <section class="relative py-12 md:py-16">
        <img src="{{ asset('images/banners/bg_banner_left.png') }}" alt="" aria-hidden="true" loading="lazy" class="h-[250px] md:h-[400px] absolute left-0 top-0 invisible" style="z-index: -1; pointer-events: none;" onload="this.classList.remove('invisible')">
        <img src="{{ asset('images/banners/bg_banner_right.png') }}" alt="" aria-hidden="true" loading="lazy" class="h-[300px] md:h-[450px] absolute right-0 top-28 md:bottom-0 invisible" style="z-index: -1; pointer-events: none;" onload="this.classList.remove('invisible')">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center" style="gap: 48px;">

                <!-- Left: Image -->
                <div class="opacity-0 animate-slideInLeft delay-0" style="flex-shrink: 0;">
                    <img src="{{ asset('images/about-us.png') }}" alt="{{ app()->getLocale() === 'id' ? 'Tim PT Wahana Ciptasinatria berkolaborasi dalam solusi TI' : 'PT Wahana Ciptasinatria team collaborating on IT solutions' }}" class="rounded-xl object-cover" width="400" height="250">
                </div>

                <!-- Right: Title & Description -->
                <div class="opacity-0 animate-slideInRight delay-500" style="flex: 1;">
                    <h1 class="page-title mb-6" style="font-size: 28px; line-height: 36px; font-weight: 800;">
                        {{ __('about.page_title') }}
                    </h1>
                    <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                        {{ \App\Models\SiteSetting::getValue('about_description') ?? __('about.description') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

</div>

@php
$jsonLdDescription = app()->getLocale() === 'id'
    ? 'Penyedia solusi TI end-to-end di Indonesia yang menyediakan infrastruktur jaringan, solusi keamanan, ERP, layanan cloud, dan konsultasi transformasi digital.'
    : 'End-to-end IT solution provider in Indonesia delivering network infrastructure, security solutions, ERP, cloud services, and digital transformation consulting.';
@endphp

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'PT Wahana Ciptasinatria',
    'alternateName' => 'WCS',
    'url' => 'https://wcs.co.id',
    'logo' => 'https://wcs.co.id/images/logo_wcs.png',
    'foundingDate' => '1995',
    'description' => $jsonLdDescription,
    'email' => 'contact@wcs.co.id',
    'numberOfEmployees' => ['@type' => 'QuantitativeValue', 'value' => 220],
    'areaServed' => ['@type' => 'Country', 'name' => 'Indonesia'],
    'address' => [
        ['@type' => 'PostalAddress', 'addressLocality' => 'Jakarta', 'addressCountry' => 'ID'],
        ['@type' => 'PostalAddress', 'addressLocality' => 'Surabaya', 'addressCountry' => 'ID'],
        ['@type' => 'PostalAddress', 'addressLocality' => 'Bandung', 'addressCountry' => 'ID'],
    ],
    'sameAs' => ['https://www.linkedin.com/company/pt-wahana-ciptasinatria/'],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection
