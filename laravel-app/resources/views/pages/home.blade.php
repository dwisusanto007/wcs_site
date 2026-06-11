@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<section id="homeBanner" class="relative py-8">
    <div class="-z-10">
        <img src="{{ asset('images/banners/bg_banner_left.png') }}" alt="hero banner left" class="h-[250px] md:h-[400px] absolute left-0 top-0 invisible" onload="this.classList.remove('invisible')">
        <img src="{{ asset('images/banners/bg_banner_right.png') }}" alt="hero banner right" class="h-[300px] md:h-[450px] absolute right-0 top-28 md:bottom-0 invisible" onload="this.classList.remove('invisible')">
    </div>
    <div class="container relative h-full">
        <div class="flex flex-col md:flex-row items-center h-full md:gap-8">
            <div class="order-2 md:order-1 flex-1 flex flex-col items-start space-y-4 md:space-y-8">
                <div>
                    <h1 class="banner-title opacity-0 animate-slideInLeft delay-0" style="color: var(--hero-title-color);">
                        {!! __('home.hero_title') !!}
                    </h1>
                    <p class="opacity-0 animate-slideInRight delay-500" style="color: var(--hero-text-color);">
                        {{ __('home.hero_description') }}
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary opacity-0 animate-fadeInDown delay-1000" style="background-color: var(--hero-button-bg); color: var(--hero-button-text);">
                    {{ __('home.contact_us') }}
                </a>
            </div>
            <div class="order-1 md:order-2 mb-4 md:mb-0 md:w-[475px] md:h-[430px] flex items-center justify-center">
                <img src="{{ asset('images/banners/hero_banner.png') }}" alt="{{ __('home.hero_title') }}" class="h-full w-auto object-contain md:h-full invisible" onload="this.classList.remove('invisible')">
            </div>
        </div>
    </div>
</section>

{{-- Solutions & Services --}}
<section id="solutionServices" class="pt-12 pb-4">
    <div class="container mx-auto flex flex-col gap-10">
        <div class="section-title text-center">
            <h2 class="page-title">{{ __('home.solutions_title') }}</h2>
            <p>{{ __('home.solutions_subtitle') }}</p>
        </div>

        <div>
            {{-- Tabs --}}
            <div class="flex flex-col md:flex-row space-y-1 md:space-x-4">
                <button class="tab-btn flex-1 px-4 py-3 rounded-xl md:rounded-t-xl md:rounded-b-none font-medium" style="background-color: var(--tabs-active-bg); color: var(--tabs-active-text);" data-tab="infrastructure">{{ __('home.tabs.infrastructure') }}</button>
                <button class="tab-btn flex-1 px-4 py-3 rounded-xl md:rounded-t-xl md:rounded-b-none font-medium" style="background-color: var(--tabs-inactive-bg); color: var(--tabs-inactive-text);" data-tab="application">{{ __('home.tabs.security') }}</button>
                <button class="tab-btn flex-1 px-4 py-3 rounded-xl md:rounded-t-xl md:rounded-b-none font-medium" style="background-color: var(--tabs-inactive-bg); color: var(--tabs-inactive-text);" data-tab="service">{{ __('home.tabs.service') }}</button>
                <button class="tab-btn flex-1 px-4 py-3 rounded-xl md:rounded-t-xl md:rounded-b-none font-medium" style="background-color: var(--tabs-inactive-bg); color: var(--tabs-inactive-text);" data-tab="non-erp">{{ __('home.tabs.non_erp') }}</button>
                <button class="tab-btn flex-1 px-4 py-3 rounded-xl md:rounded-t-xl md:rounded-b-none font-medium" style="background-color: var(--tabs-inactive-bg); color: var(--tabs-inactive-text);" data-tab="electronic-security">{{ __('home.tabs.electronic_security') }}</button>
            </div>

            {{-- Tab Content --}}
            <div class="tab-content p-4 mt-2 md:mt-0 border border-gray-200 rounded-xl md:rounded-b-xl md:rounded-t-none overflow-auto">
                {{-- Infrastructure --}}
                <div class="tab-panel min-h-64 md:h-[520px] lg:h-[400px] overflow-auto" id="infrastructure">
                    @if(isset($services['infrastructure']))
                        <div>
                            <h3 class="content-title mb-4 text-center">{{ __('home.tabs.infrastructure') }}</h3>
                            <p class="mb-6 text-gray-700">We engineer integrated infrastructure and security solutions that empower businesses to strengthen resilience, protect enterprise assets, and sustain operational excellence.</p>
                            <div class="grid grid-cols-2 gap-4 lg:gap-8">
                                @foreach($services['infrastructure'] as $service)
                                    <div>
                                        <h4 class="font-bold mb-1">{{ $service->getTitle() }}</h4>
                                        <p class="text-gray-600">{{ $service->getDescription() }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Security Solutions (application) --}}
                <div class="tab-panel min-h-64 overflow-auto hidden" id="application">
                    @if(isset($services['application']))
                        <div>
                            <h3 class="content-title mb-4 text-center">{{ __('home.tabs.security') }}</h3>
                            <p class="mb-6 text-gray-700">We deliver integrated enterprise security solutions tailored to support modern and complex core business environments. From resilient networking and advanced cybersecurity to cloud integration and managed services, we prepare the foundation for your organizations continue to operate securely, allowing you to concentrate on growing your core business.</p>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div>
                                    <h4 class="font-bold mb-2">Network & Cybersecurity</h4>
                                    <p class="mb-4 text-gray-600">Comprehensive protection across your network, applications, endpoints, and data environments.</p>
                                    <ul class="space-y-1 text-gray-700">
                                        @foreach($services['application']->take(9) as $service)
                                            <li>{{ $service->getTitle() }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">Cloud, Managed & Assurance Services</h4>
                                    <p class="mb-4 text-gray-600">Continuous support and strategic services to ensure performance, compliance, and long-term resilience.</p>
                                    <ul class="space-y-1 text-gray-700">
                                        @foreach($services['application']->skip(9) as $service)
                                            <li>{{ $service->getTitle() }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Service Solution --}}
                <div class="tab-panel min-h-64 md:h-[520px] lg:h-[400px] overflow-auto hidden" id="service">
                    @if(isset($services['service']))
                        <div>
                            <h3 class="content-title mb-4 text-center">{{ __('home.tabs.service') }}</h3>
                            <p class="mb-6 text-gray-700">We provide comprehensive, on-demand service solutions tailored to your operational and technological needs. Whether managing technology sourcing and solution supply, or system implementation and professional services, we function as a seamless extension of your team.</p>
                            <p class="mb-6 text-gray-700">From initial design to long-term maintenance, we aim to be a reliable partner for the end-to-end lifecycle of your business, enabling your organization to operate securely and efficiently without disruption.</p>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div>
                                    <h4 class="font-bold mb-2">Scope of Services:</h4>
                                    <ul class="space-y-1 text-gray-700">
                                        @foreach($services['service'] as $service)
                                            <li>{{ $service->getTitle() }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Advanced Application Solutions (non-erp) --}}
                <div class="tab-panel min-h-64 md:h-[520px] lg:h-[400px] overflow-auto hidden" id="non-erp">
                    @if(isset($services['non-erp']))
                        <div>
                            <h3 class="content-title mb-4 text-center">{{ __('home.tabs.non_erp') }}</h3>
                            <p class="mb-6 text-gray-700">Recognizing that every organization has unique requirements, we design specialized business applications that augment your existing infrastructure. We focus on developing flexible and growth-ready, customized solutions that drive deeper operational efficiency while ensuring seamless integration across your entire technology stack.</p>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div>
                                    <h4 class="font-bold mb-2">Scope of Services:</h4>
                                    <ul class="space-y-1 text-gray-700">
                                        @foreach($services['non-erp'] as $service)
                                            <li>{{ $service->getTitle() }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Electronic Security System --}}
                <div class="tab-panel min-h-64 md:h-[520px] lg:h-[400px] overflow-auto hidden" id="electronic-security">
                    @if(isset($services['electronic-security']))
                        <div>
                            <h3 class="content-title mb-4 text-center">{{ __('home.tabs.electronic_security') }}</h3>
                            <p class="mb-6 text-gray-700">WCS redefines physical security by leveraging a combination of robust hardware and intelligent software. Backed by trusted industry principals, we deliver an adaptive, reliable, and resilient security ecosystem service designed to meet today's rigorous demands while remaining fully adaptable to the technology and AI-driven landscape of tomorrow.</p>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div>
                                    <h4 class="font-bold mb-2">Our Approach:</h4>
                                    <p class="text-gray-700">An end-to-end lifecycle: solution design, seamless integration, operational efficiency, and proactive threat mitigation.</p>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">Our Core Capabilities & Services</h4>
                                    <ul class="space-y-1 text-gray-700">
                                        @foreach($services['electronic-security'] as $service)
                                            <li>{{ $service->getTitle() }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Featured Success Stories --}}
<section id="featured-stories" class="py-16 xl:h-fill">
    <div class="container mx-auto flex flex-col mb-10">
        <div class="section-title md:max-w-3/4">
            <h2 class="page-title">{{ __('home.featured_title') }}</h2>
            <p>{{ __('home.featured_subtitle') }}</p>
        </div>
    </div>

    <div class="relative container md:max-w-[100vw] ml-0 md:ml-4 lg:ml-8 xl:ml-0 md:pr-0 md:pl-[calc((100%-theme(maxWidth.7xl))/2+1rem)] lg:pl-[calc((100%-theme(maxWidth.7xl))/2+2rem)]">
        <div class="swiper clients-swiper clientSwiper w-full">
            <div class="swiper-wrapper items-center">
                @foreach($clients as $client)
                    <a href="#" class="swiper-slide flex items-center justify-center p-4 rounded-lg bg-white hover:cursor-pointer" style="width:140px;height:140px;flex-shrink:0">
                        <img src="{{ asset($client->logo_path) }}" alt="{{ $client->name }}" class="max-w-full max-h-full object-contain" loading="lazy">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Strategic Alliance --}}
<section id="strategicAlliances" class="py-8">
    <div class="container mx-auto flex flex-col gap-6">
        <div class="section-title md:w-[70%]">
            <h2 class="page-title">{{ __('home.alliance_title') }}</h2>
            <p>{{ __('home.alliance_subtitle') }}</p>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-10 gap-4 items-center">
            @foreach($partners as $partner)
                <img src="{{ asset($partner->logo_path) }}" alt="{{ $partner->name }}" class="w-full" loading="lazy">
            @endforeach
        </div>
    </div>
</section>

{{-- Why WCS --}}
<section id="whyUs" class="pt-16 pb-4">
    <div class="container mx-auto flex flex-col gap-10">
        <div class="section-title text-center">
            <h2 class="page-title">{{ __('home.why_us_title') }}</h2>
            <p>{{ __('home.why_us_subtitle') }}</p>
        </div>
        <div class="grid lg:grid-cols-3 gap-1">
            <div class="bg-gray-100 p-6 flex items-start gap-4 rounded-lg lg:rounded-r-none lg:rounded-l-lg">
                <img src="{{ asset('images/icons/ic_calendar.svg') }}" alt="experienced" class="w-8 lg:w-12" loading="lazy">
                <div>
                    <h3>{{ __('home.why_us_experience_title') }}</h3>
                    <p>{{ __('home.why_us_experience_desc') }}</p>
                </div>
            </div>
            <div class="bg-gray-100 p-6 flex items-start gap-4 rounded-lg lg:rounded-none">
                <img src="{{ asset('images/icons/ic_people.svg') }}" alt="services" class="w-8 lg:w-12" loading="lazy">
                <div>
                    <h3>{{ __('home.why_us_specialists_title') }}</h3>
                    <p>{{ __('home.why_us_specialists_desc') }}</p>
                </div>
            </div>
            <div class="bg-gray-100 p-6 flex items-start gap-4 rounded-lg lg:rounded-l-none lg:rounded-r-lg">
                <img src="{{ asset('images/icons/ic_project.svg') }}" alt="project" class="w-8 md:w-12" loading="lazy">
                <div>
                    <h3>{{ __('home.why_us_projects_title') }}</h3>
                    <p>{{ __('home.why_us_projects_desc') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
