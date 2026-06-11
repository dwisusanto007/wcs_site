@php
    $locale = app()->getLocale();
    $pathInfo = request()->getPathInfo();

    // Language switcher URLs
    if ($locale === 'id') {
        $enUrl = url(preg_replace('#^/id#', '', $pathInfo) ?: '/');
        $idUrl = '#';
    } else {
        $enUrl = '#';
        $idUrl = url('/id' . ($pathInfo === '/' ? '' : $pathInfo));
    }

    // Home URL
    $homeUrl = $locale === 'id' ? url('/id') : url('/');

    // Solution tab base URL
    $solutionBase = $locale === 'id' ? '/id' : '';

    // Active page detection
    $currentRoute = request()->route()?->getName() ?? '';
@endphp

<header class="sticky top-0 shadow-sm z-50 border-b border-gray-100" style="background-color: var(--header-background, #FFFFFF);">
    <div class="container mx-auto flex items-center justify-between py-2 md:py-4">

        {{-- Logo --}}
        <div id="logo">
            <a href="{{ $homeUrl }}" class="header-logo inline-flex">
                <img src="{{ asset('images/logo_wcs.png') }}" alt="PT Wahana Ciptasinatria">
                <span class="text-xs md:text-base flex lg:hidden xl:flex ml-2 uppercase">PT Wahana Ciptasinatria</span>
            </a>
        </div>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:flex items-center space-x-2 lg:space-x-6 font-semibold text-gray-900 relative">
            <a href="{{ route($locale === 'id' ? 'id.about' : 'about') }}" class="md:px-1 {{ in_array($currentRoute, ['about', 'id.about']) ? 'text-primary' : '' }}">{{ __('nav.about_us') }}</a>

            {{-- Solution & Services Dropdown --}}
            <div class="relative group px-1">
                <button class="flex items-center space-x-1 group-hover:text-primary">
                    <span>{{ __('nav.solutions_services') }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="font-medium absolute left-0 mt-2 py-2 min-w-64 bg-white shadow-lg rounded-md z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 overflow-hidden">
                    <a href="{{ url($solutionBase . '/?tab=infrastructure#solutionServices') }}" class="block px-8 py-2 hover:text-primary">{{ __('nav.solutions.infrastructure') }}</a>
                    <a href="{{ url($solutionBase . '/?tab=application#solutionServices') }}" class="block px-8 py-2 hover:text-primary">{{ __('nav.solutions.security') }}</a>
                    <a href="{{ url($solutionBase . '/?tab=service#solutionServices') }}" class="block px-8 py-2 hover:text-primary">{{ __('nav.solutions.service') }}</a>
                    <a href="{{ url($solutionBase . '/?tab=non-erp#solutionServices') }}" class="block px-8 py-2 hover:text-primary">{{ __('nav.solutions.non_erp') }}</a>
                    <a href="{{ url($solutionBase . '/?tab=electronic-security#solutionServices') }}" class="block px-8 py-2 hover:text-primary">{{ __('nav.solutions.electronic_security') }}</a>
                </div>
            </div>

            <a href="{{ url($solutionBase . '/#featured-stories') }}" class="md:px-1">{{ __('nav.our_clients') }}</a>
            <a href="{{ url($solutionBase . '/#strategicAlliances') }}" class="md:px-1">{{ __('nav.our_partners') }}</a>

            {{-- Language Switcher --}}
            <div class="flex items-center space-x-2 text-sm font-medium">
                <a href="{{ $enUrl }}" class="flex items-center gap-1 {{ $locale === 'en' ? 'text-primary font-bold' : 'hover:text-primary' }}" title="{{ __('nav.language.english') }}">
                    <span class="text-base">&#127468;&#127463;</span>
                    <span>{{ __('nav.language.en') }}</span>
                </a>
                <span class="text-gray-300">|</span>
                <a href="{{ $idUrl }}" class="flex items-center gap-1 {{ $locale === 'id' ? 'text-primary font-bold' : 'hover:text-primary' }}" title="{{ __('nav.language.indonesian') }}">
                    <span class="text-base">&#127470;&#127465;</span>
                    <span>{{ __('nav.language.id') }}</span>
                </a>
            </div>

            {{-- Contact Us Button --}}
            <div>
                <a href="{{ route($locale === 'id' ? 'id.contact' : 'contact') }}" class="btn-primary">{{ __('nav.contact_us') }}</a>
            </div>
        </nav>

        {{-- Mobile Hamburger Button --}}
        <div class="lg:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-md border-t flex flex-col" style="height: calc(100vh - 67px)">
        <ul>
            <li class="border-b">
                <a href="{{ route($locale === 'id' ? 'id.about' : 'about') }}" class="flex items-center gap-2 px-4 py-3">{{ __('nav.about_us') }}</a>
            </li>
            <li class="border-b">
                <details>
                    <summary class="p-4 cursor-pointer flex items-center justify-between">
                        <span>{{ __('nav.solutions_services') }}</span>
                        <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </summary>
                    <div class="pl-6">
                        <a href="{{ url($solutionBase . '/?tab=infrastructure#solutionServices') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">{{ __('nav.solutions.infrastructure') }}</a>
                        <a href="{{ url($solutionBase . '/?tab=application#solutionServices') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">{{ __('nav.solutions.security') }}</a>
                        <a href="{{ url($solutionBase . '/?tab=service#solutionServices') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">{{ __('nav.solutions.service') }}</a>
                        <a href="{{ url($solutionBase . '/?tab=non-erp#solutionServices') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">{{ __('nav.solutions.non_erp') }}</a>
                        <a href="{{ url($solutionBase . '/?tab=electronic-security#solutionServices') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">{{ __('nav.solutions.electronic_security') }}</a>
                    </div>
                </details>
            </li>
            <li class="border-b">
                <a href="{{ url($solutionBase . '/#featured-stories') }}" class="flex items-center gap-2 px-4 py-3">{{ __('nav.our_clients') }}</a>
            </li>
            <li class="border-b">
                <a href="{{ url($solutionBase . '/#strategicAlliances') }}" class="flex items-center gap-2 px-4 py-3">{{ __('nav.our_partners') }}</a>
            </li>
            <li class="border-b">
                <a href="{{ url($solutionBase . '/#strategicAlliances') }}" class="flex items-center gap-2 px-4 py-3">{{ __('nav.strategic_alliances') }}</a>
            </li>
            <li class="border-b px-4 py-3 flex items-center gap-4 text-sm font-medium">
                <a href="{{ $enUrl }}" class="flex items-center gap-1 {{ $locale === 'en' ? 'text-primary font-bold' : 'hover:text-primary' }}" title="{{ __('nav.language.english') }}">
                    <span class="text-base">&#127468;&#127463;</span>
                    <span>{{ __('nav.language.en') }}</span>
                </a>
                <span class="text-gray-300">|</span>
                <a href="{{ $idUrl }}" class="flex items-center gap-1 {{ $locale === 'id' ? 'text-primary font-bold' : 'hover:text-primary' }}" title="{{ __('nav.language.indonesian') }}">
                    <span class="text-base">&#127470;&#127465;</span>
                    <span>{{ __('nav.language.id') }}</span>
                </a>
            </li>
            <li class="p-4 text-center">
                <a href="{{ route($locale === 'id' ? 'id.contact' : 'contact') }}" class="btn-primary flex justify-center !py-4">{{ __('nav.contact_us') }}</a>
            </li>
        </ul>
    </div>
</header>
