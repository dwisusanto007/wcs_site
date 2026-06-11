@php
    $seo = $seo ?? [];
    $title = $seo['title'] ?? 'WCS - PT Wahana Ciptasinatria';
    $description = $seo['description'] ?? 'PT Wahana Ciptasinatria - System Integrator IT Indonesia';
    $keywords = $seo['keywords'] ?? 'WCS, PT Wahana Ciptasinatria, system integrator, IT Indonesia';
    $ogImage = $seo['og_image'] ?? asset('images/logo_wcs.png');
    $currentUrl = request()->url();
    $locale = app()->getLocale();
    $ogLocale = $locale === 'id' ? 'id_ID' : 'en_ID';

    // Build hreflang URLs
    $pathInfo = request()->getPathInfo();
    if ($locale === 'id') {
        $enUrl = url(preg_replace('#^/id#', '', $pathInfo) ?: '/');
        $idUrl = $currentUrl;
    } else {
        $enUrl = $currentUrl;
        $idUrl = url('/id' . ($pathInfo === '/' ? '' : $pathInfo));
    }
@endphp

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $currentUrl }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:locale" content="{{ $ogLocale }}">

{{-- Canonical --}}
<link rel="canonical" href="{{ $currentUrl }}">

{{-- Hreflang --}}
<link rel="alternate" hreflang="en" href="{{ $enUrl }}">
<link rel="alternate" hreflang="id" href="{{ $idUrl }}">
<link rel="alternate" hreflang="x-default" href="{{ $enUrl }}">

{{-- Dynamic SVG Favicon --}}
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,{{ rawurlencode('<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><text x=\'50%\' y=\'50%\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-size=\'40\' font-family=\'sans-serif\' font-weight=\'bold\' fill=\'#A21C21\'>WCS</text></svg>') }}">
