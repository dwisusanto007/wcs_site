@php
    $locale = app()->getLocale();
    $solutionBase = $locale === 'id' ? '/id' : '';
    $homeUrl = $locale === 'id' ? url('/id') : url('/');
@endphp

<footer class="region-footer" style="background-color: var(--footer-background, #FFFFFF);">
    <div class="container py-8 mx-auto md:flex md:gap-8">
        {{-- Left Column: Logo, Contact, Social --}}
        <div class="md:w-1/4 space-y-4 mb-8 md:mb-0">
            <div>
                <img src="{{ asset('images/logo_wcs.png') }}" alt="WCS" class="footer-logo">
            </div>
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/icons/ic_email.svg') }}" alt="email" class="footer-icon-sm">
                <a href="mailto:contact@wcs.co.id" class="footer-link">contact@wcs.co.id</a>
            </div>
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/icons/ic_phone.svg') }}" alt="phone" class="footer-icon-sm">
                <a href="tel:+622150924120" class="footer-link">(021) 5092-4120</a>
            </div>
            <div>
                <p class="font-bold mb-3 footer-heading">{{ __('nav.footer.connect_with_us') }}</p>
                <ul class="flex items-center gap-3">
                    <li>
                        <a href="https://www.linkedin.com/company/pt-wahana-ciptasinatria/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/icons/follow_linkedin.svg') }}" alt="LinkedIn">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Right Column: Site Information --}}
        <div class="md:flex-1">
            <h4 class="footer-heading font-bold mb-2">{{ __('nav.footer.site_information') }}</h4>
            <hr class="footer-divider mb-4">
            <div class="footer-cols">
                {{-- Navigation Links --}}
                <ul class="footer-col-list">
                    <li><a href="{{ $homeUrl }}" class="footer-link">{{ __('nav.home') }}</a></li>
                    <li><a href="{{ route($locale === 'id' ? 'id.about' : 'about') }}" class="footer-link">{{ __('nav.about_us') }}</a></li>
                    <li><a href="{{ route($locale === 'id' ? 'id.contact' : 'contact') }}" class="footer-link">{{ __('nav.contact_us') }}</a></li>
                    <li><a href="{{ url($solutionBase . '/#featured-stories') }}" class="footer-link">{{ __('nav.footer.our_client') }}</a></li>
                    <li><a href="{{ url($solutionBase . '/#strategicAlliances') }}" class="footer-link">{{ __('nav.our_partners') }}</a></li>
                </ul>

                {{-- Solutions Links --}}
                <ul class="footer-col-list">
                    <li><a href="{{ url($solutionBase . '/?tab=infrastructure#solutionServices') }}" class="footer-link">{{ __('nav.solutions.infrastructure') }}</a></li>
                    <li><a href="{{ url($solutionBase . '/?tab=application#solutionServices') }}" class="footer-link">{{ __('nav.solutions.security') }}</a></li>
                    <li><a href="{{ url($solutionBase . '/?tab=service#solutionServices') }}" class="footer-link">{{ __('nav.solutions.service') }}</a></li>
                    <li><a href="{{ url($solutionBase . '/?tab=non-erp#solutionServices') }}" class="footer-link">{{ __('nav.solutions.non_erp') }}</a></li>
                    <li><a href="{{ url($solutionBase . '/?tab=electronic-security#solutionServices') }}" class="footer-link">{{ __('nav.solutions.electronic_security') }}</a></li>
                </ul>

                {{-- Address --}}
                <div class="footer-col-address">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('images/icons/ic_location.svg') }}" alt="location" class="footer-icon-sm footer-icon-top">
                        <span class="footer-link">{{ __('nav.footer.address') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="footer-bottom text-center py-4 footer-copyright">
        {{ __('nav.footer.copyright') }}
    </div>
</footer>
