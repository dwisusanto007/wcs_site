@extends('layouts.app')

@section('content')
    {{-- Hero Banner --}}
    <div class="contact-hero-banner">
        <div class="contact-hero-content">
            <h1 class="contact-hero-title">{{ __('contact.hero_title') }}</h1>
            <p class="contact-hero-description">{{ __('contact.hero_description') }}</p>
        </div>
    </div>

    {{-- Contact Form & Info --}}
    <div class="contact-us-wrapper">
        <div class="contact-us-container">
            {{-- Left: Form Section --}}
            <div class="contact-form-section">
                <div class="contact-form-wrapper">
                    {{-- Flash Messages --}}
                    @if (session('success'))
                        <div class="messages messages--status">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="messages messages--error">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form
                        class="contact-us-form"
                        action="{{ route(app()->getLocale() === 'id' ? 'id.contact.store' : 'contact.store') }}"
                        method="POST"
                    >
                        @csrf

                        {{-- Full Name --}}
                        <div class="form-item @error('full_name') form-item--error @enderror">
                            <label for="full_name">{{ __('contact.form.full_name') }}</label>
                            <input
                                type="text"
                                id="full_name"
                                name="full_name"
                                class="contact-form-field"
                                placeholder="{{ __('contact.placeholders.full_name') }}"
                                value="{{ old('full_name') }}"
                                required
                            >
                            @error('full_name')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="form-item @error('email') form-item--error @enderror">
                            <label for="email">{{ __('contact.form.email') }}</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="contact-form-field"
                                placeholder="{{ __('contact.placeholders.email') }}"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Phone Number --}}
                        <div class="form-item @error('phone_number') form-item--error @enderror">
                            <label for="phone_number">{{ __('contact.form.phone_number') }}</label>
                            <input
                                type="tel"
                                id="phone_number"
                                name="phone_number"
                                class="contact-form-field"
                                placeholder="{{ __('contact.placeholders.phone_number') }}"
                                value="{{ old('phone_number') }}"
                                required
                            >
                            @error('phone_number')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Company Name --}}
                        <div class="form-item @error('company_name') form-item--error @enderror">
                            <label for="company_name">{{ __('contact.form.company_name') }}</label>
                            <input
                                type="text"
                                id="company_name"
                                name="company_name"
                                class="contact-form-field"
                                placeholder="{{ __('contact.placeholders.company_name') }}"
                                value="{{ old('company_name') }}"
                            >
                            @error('company_name')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Product Interest --}}
                        <div class="form-item @error('product_interest') form-item--error @enderror">
                            <label for="product_interest">{{ __('contact.form.product_interest') }}</label>
                            <select
                                id="product_interest"
                                name="product_interest"
                                class="contact-form-field"
                                required
                            >
                                <option value="">{{ __('contact.placeholders.product_interest') }}</option>
                                <option value="infrastructure" {{ old('product_interest') === 'infrastructure' ? 'selected' : '' }}>{{ __('contact.products.infrastructure') }}</option>
                                <option value="application" {{ old('product_interest') === 'application' ? 'selected' : '' }}>{{ __('contact.products.security') }}</option>
                                <option value="service" {{ old('product_interest') === 'service' ? 'selected' : '' }}>{{ __('contact.products.service') }}</option>
                                <option value="non-erp" {{ old('product_interest') === 'non-erp' ? 'selected' : '' }}>{{ __('contact.products.non_erp') }}</option>
                                <option value="electronic-security" {{ old('product_interest') === 'electronic-security' ? 'selected' : '' }}>{{ __('contact.products.electronic_security') }}</option>
                            </select>
                            @error('product_interest')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div class="form-item @error('message') form-item--error @enderror">
                            <label for="message">{{ __('contact.form.message') }}</label>
                            <textarea
                                id="message"
                                name="message"
                                class="contact-form-field"
                                placeholder="{{ __('contact.placeholders.message') }}"
                                rows="5"
                                maxlength="5000"
                            >{{ old('message') }}</textarea>
                            <div class="description">{{ __('contact.max_characters') }}</div>
                            @error('message')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Privacy Accepted --}}
                        <div class="form-item form-item-privacy-accepted @error('privacy_accepted') form-item--error @enderror">
                            <input
                                type="checkbox"
                                id="privacy_accepted"
                                name="privacy_accepted"
                                value="1"
                                {{ old('privacy_accepted') ? 'checked' : '' }}
                                required
                            >
                            <label for="privacy_accepted" class="option">
                                {!! __('contact.privacy_statement', ['url' => '#']) !!}
                            </label>
                            @error('privacy_accepted')
                                <div class="form-item--error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div class="form-actions">
                            <button type="submit" class="contact-form-submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:8px;">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                {{ __('contact.submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Right: Contact Info Section --}}
            <div class="contact-info-section">
                {{-- Phone --}}
                <div class="contact-info-item contact-phones">
                    <div class="contact-info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div class="contact-info-details">
                        <h3 class="contact-info-label">{{ __('contact.phone_label') }}</h3>
                        <a href="tel:+622150924120" class="contact-info-link">(021) 5092-4120</a>
                    </div>
                </div>

                {{-- Email --}}
                <div class="contact-info-item contact-emails">
                    <div class="contact-info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="contact-info-details">
                        <h3 class="contact-info-label">{{ __('contact.email_label') }}</h3>
                        <a href="mailto:contact@wcs.co.id" class="contact-info-link">contact@wcs.co.id</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
