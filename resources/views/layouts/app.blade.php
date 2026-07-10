<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title')@yield('title') — @endif Community First Uganda</title>
    <meta name="description" content="@yield('description', 'We engage and empower vulnerable and marginalized communities to live holistically improved lives.')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="@hasSection('title')@yield('title') — @endif Community First Uganda">
    <meta property="og:description" content="@yield('description', 'We engage and empower vulnerable and marginalized communities to live holistically improved lives.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('images/og-image.svg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_UG">
    <meta property="og:site_name" content="Community First Uganda">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@cofi_ug">
    <meta name="twitter:title" content="@hasSection('title')@yield('title') — @endif Community First Uganda">
    <meta name="twitter:description" content="@yield('description', 'We engage and empower vulnerable and marginalized communities to live holistically improved lives.')">
    <meta name="twitter:image" content="{{ url('images/og-image.svg') }}">

    {{-- hreflang --}}
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}?lang=en">
    <link rel="alternate" hreflang="so" href="{{ url()->current() }}?lang=so">
    <link rel="alternate" hreflang="lg" href="{{ url()->current() }}?lang=lg">
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">

    {{-- Theme & Icons --}}
    <meta name="theme-color" content="#0B2B1D">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/og-image.svg') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/og-image.svg') }}">

    {{-- Preconnect & Performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://images.unsplash.com">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- JSON-LD: Organization + WebSite + LocalBusiness --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "NGO",
        "name": "Community First Uganda",
        "url": "{{ url('/') }}",
        "logo": "{{ url('images/og-image.svg') }}",
        "description": "We engage and empower vulnerable and marginalized communities to live holistically improved lives.",
        "foundingDate": "2020",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Noor Emporium, Mengo Hill Road",
            "addressLocality": "Kampala",
            "addressCountry": "UG"
        },
        "contactPoint": [
            { "@type": "ContactPoint", "telephone": "+256-393-249-878", "contactType": "customer service", "email": "info@communityfirstuganda.org" }
        ],
        "sameAs": [
            "https://x.com/cofi_ug",
            "https://www.instagram.com/communityfirstuganda/"
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Community First Uganda",
        "url": "{{ url('/') }}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url('/') }}?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "CommunityCenter",
        "name": "Community First Uganda Community Center",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Noor Emporium, Mengo Hill Road",
            "addressLocality": "Kampala",
            "addressCountry": "UG"
        },
        "telephone": "+256-393-249-878",
        "email": "info@communityfirstuganda.org"
    }
    </script>
</head>
<body class="font-sans text-gray-900 bg-white antialiased overflow-x-hidden">

    {{-- Scroll Progress Bar --}}
    <div id="scroll-progress" class="fixed top-0 left-0 w-full h-[3px] bg-gradient-to-r from-amber-500 via-earth-500 to-amber-400 z-[60] scale-x-0"></div>

    {{-- Page Loader --}}
    <div id="page-loader" class="fixed inset-0 z-[9999] bg-forest-900 flex items-center justify-center">
        <div class="text-center">
            <div class="loader-logo w-20 h-20 mx-auto rounded-full bg-white/10 border-2 border-amber-400/50 flex items-center justify-center text-white font-bold text-2xl mb-4">
                CFU
            </div>
            <div class="text-white/60 text-sm tracking-widest uppercase">Community First Uganda</div>
        </div>
    </div>

    {{-- Custom Cursor (Desktop) --}}
    <div id="custom-cursor" class="fixed top-0 left-0 w-10 h-10 rounded-full border border-white/20 bg-white/5 pointer-events-none hidden lg:block" style="transform: translate(-50%, -50%);"></div>
    <div id="cursor-dot" class="fixed top-0 left-0 w-2 h-2 rounded-full bg-amber-400 pointer-events-none hidden lg:block" style="transform: translate(-50%, -50%);"></div>

    <div id="app" class="relative">

        {{-- Header --}}
        <header id="site-header" class="fixed top-0 left-0 w-full z-50 transition-colors duration-700 ease-out">
            <div id="header-border" class="absolute bottom-0 left-0 right-0 h-[1px] bg-gradient-to-r from-amber-500/0 via-amber-500/0 to-amber-500/0 transition-all duration-700"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-20">

                    {{-- Logo --}}
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-full bg-white/15 backdrop-blur-md border border-white/30 flex items-center justify-center text-white font-bold text-lg transition-all duration-500 group-hover:bg-white/25 header-logo">
                            <span class="header-logo-text text-white">CFU</span>
                        </div>
                        <span class="font-semibold text-lg tracking-tight transition-colors duration-500 header-site-name text-white">{{ __('common.site_name') }}</span>
                    </a>

                    {{-- Language Switcher --}}
                    <div class="hidden lg:flex items-center gap-2 mr-2">
                        <select id="lang-switcher" class="bg-transparent text-white/70 text-xs font-medium border border-white/20 rounded-lg px-2 py-1.5 focus:outline-none focus:border-white/40 transition-colors cursor-pointer">
                            <option value="en" class="text-gray-900">EN</option>
                            <option value="so" class="text-gray-900">Soomaali</option>
                            <option value="lg" class="text-gray-900">Luganda</option>
                        </select>
                    </div>

                    {{-- Desktop Nav --}}
                    <nav class="hidden lg:flex items-center gap-1" aria-label="Main navigation">
                        @php
                            $navItems = [
                            ['label' => __('common.nav_home'), 'route' => 'home'],
                            ['label' => __('common.nav_about'), 'route' => 'about'],
                            ['label' => __('common.nav_programs'), 'route' => 'programs'],
                            ['label' => __('common.nav_gallery'), 'route' => 'gallery'],
                            ['label' => __('common.nav_blog'), 'route' => 'blog'],
                            ['label' => __('common.nav_faq'), 'route' => 'faq'],
                            ['label' => __('common.nav_volunteer'), 'route' => 'volunteer'],
                            ['label' => __('common.nav_contact'), 'route' => 'contact'],
                            ];
                        @endphp
                        @foreach($navItems as $item)
                            <a href="{{ route($item['route']) }}"
                               class="nav-link relative px-3 py-2 text-sm font-medium rounded-lg transition-all duration-300
                                      {{ request()->routeIs($item['route']) ? 'text-white bg-white/15 nav-link-active' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                                {{ $item['label'] }}
                                <span class="nav-link-underline"></span>
                            </a>
                        @endforeach
                        <a href="#" data-donate-modal
                           class="ml-3 magnetic-btn donate-btn inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full text-white transition-all duration-300 shadow-lg shadow-amber-500/25 donate-btn-glow">
                            <span>{{ __('common.donate') }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </nav>

                    {{-- Mobile menu button --}}
                    <button id="mobile-menu-btn" class="lg:hidden relative w-10 h-10 rounded-lg flex items-center justify-center transition-colors duration-200 text-white hover:bg-white/10" aria-label="Toggle menu" aria-expanded="false">
                        <div class="w-5 h-4 relative flex flex-col justify-between">
                            <span class="menu-line block w-full h-0.5 bg-current rounded-full transition-all duration-300 origin-center"></span>
                            <span class="menu-line block w-full h-0.5 bg-current rounded-full transition-all duration-300"></span>
                            <span class="menu-line block w-full h-0.5 bg-current rounded-full transition-all duration-300 origin-center"></span>
                        </div>
                    </button>

                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="lg:hidden fixed inset-0 z-40 invisible opacity-0">
                <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="mobile-overlay"></div>
                <div class="mobile-menu-panel absolute top-0 right-0 w-72 sm:w-80 h-full shadow-2xl">
                    <div class="flex flex-col pt-20 px-6">
                        {{-- Mobile language --}}
                        <div class="mb-6 pb-6 border-b border-gray-100">
                            <select id="lang-switcher-mobile" class="w-full bg-gray-50 text-gray-700 text-sm font-medium border border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-forest-500 transition-colors cursor-pointer">
                                <option value="en">English</option>
                                <option value="so">Soomaali</option>
                                <option value="lg">Luganda</option>
                            </select>
                        </div>
                        @foreach($navItems as $item)
                            <a href="{{ route($item['route']) }}" data-mobile-link
                               class="mobile-nav-link py-3 text-lg font-medium text-gray-800 border-b border-gray-100 transition-colors hover:text-amber-600 {{ request()->routeIs($item['route']) ? 'text-amber-600' : '' }}">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                        <a href="#" data-donate-modal data-mobile-link
                           class="mobile-nav-link mt-6 inline-flex items-center justify-center gap-2 px-6 py-3 text-base font-semibold rounded-full text-white transition-all duration-300 donate-btn shadow-lg">
                            <span>{{ __('common.donate') }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <main>
            @yield('content')
        </main>

        {{-- WhatsApp Floating Button --}}
        <button id="whatsapp-btn" class="fixed bottom-8 left-8 z-40 w-14 h-14 rounded-full bg-[#25D366] text-white shadow-xl shadow-[#25D366]/30 flex items-center justify-center hover:scale-110 transition-transform duration-300 cursor-pointer" aria-label="Chat on WhatsApp">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </button>

        {{-- Donation Modal --}}
        <div id="donate-modal" class="fixed inset-0 z-[200] flex items-center justify-center invisible opacity-0 transition-all duration-300">
            <div id="donate-overlay" class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
            <div class="relative bg-white rounded-3xl p-8 lg:p-10 max-w-lg w-full mx-4 shadow-2xl scale-90 transition-all duration-300">
                <button id="donate-close" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-200 transition-colors cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

                <div class="text-center mb-8">
                    <div class="w-16 h-16 rounded-full bg-amber-50 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('common.donate_title') }}</h3>
                    <p class="text-gray-600 text-sm">{{ __('common.donate_subtitle') }}</p>
                </div>

                <div class="space-y-4">
                    <a href="https://dashboard.flutterwave.com/donate/bag8zq0soq1c" target="_blank" rel="noopener noreferrer"
                       class="flex items-center gap-4 p-4 rounded-2xl border-2 border-amber-100 hover:border-amber-400 bg-amber-50/50 hover:bg-amber-50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center text-amber-600 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold text-gray-900">Credit / Debit Card</div>
                            <div class="text-xs text-gray-500">Visa, Mastercard, Flutterwave</div>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-amber-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>

                    <div class="flex items-center gap-4 p-4 rounded-2xl border-2 border-green-100 hover:border-green-400 bg-green-50/50 hover:bg-green-50 transition-all duration-300 group cursor-pointer" onclick="window.open('https://wa.me/256393249878?text=I%20want%20to%20donate%20via%20Mobile%20Money', '_blank')">
                        <div class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center text-green-600 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold text-gray-900">Mobile Money</div>
                            <div class="text-xs text-gray-500">MTN MoMo / Airtel Money (UGX)</div>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <p class="text-xs text-gray-500 mb-3">Or send via Mobile Money directly:</p>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-3 rounded-xl bg-yellow-50 border border-yellow-100">
                                    <div class="text-xs font-bold text-yellow-700 mb-1">MTN MoMo</div>
                                    <div class="text-sm font-mono font-bold text-gray-900">+256 393 249 878</div>
                                </div>
                                <div class="p-3 rounded-xl bg-red-50 border border-red-100">
                                    <div class="text-xs font-bold text-red-700 mb-1">Airtel Money</div>
                                    <div class="text-sm font-mono font-bold text-gray-900">+256 393 249 878</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="bg-[#0B2B1D] text-white relative overflow-hidden noise-overlay">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-amber-500 via-green-400 to-amber-500"></div>

            {{-- Newsletter --}}
            <div class="border-b border-white/10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-12">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                        <div>
                            <h3 class="text-lg font-bold text-white">{{ __('common.newsletter_title') }}</h3>
                            <p class="text-white/60 text-sm">{{ __('common.footer_tagline') }}</p>
                        </div>
                        <form id="newsletter-form" class="flex w-full lg:w-auto gap-3">
                            @csrf
                            <input type="email" placeholder="{{ __('common.newsletter_placeholder') }}" required
                                   class="flex-1 lg:w-72 px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 text-sm focus:outline-none focus:border-amber-400/50 focus:bg-white/15 transition-all">
                            <button type="submit"
                                    class="newsletter-btn px-6 py-3 rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-semibold text-sm transition-all cursor-pointer">
                                    {{ __('common.newsletter_btn') }}
                                </button>
                        </form>
                        <div id="newsletter-success" class="hidden text-center lg:text-right">
                            <div class="flex items-center gap-2 text-green-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span class="font-medium">Thank you! You're subscribed.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">

                    {{-- Brand Column --}}
                    <div class="lg:col-span-4">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center text-white font-bold">CFU</div>
                            <span class="font-semibold text-lg">{{ __('common.site_name') }}</span>
                        </div>
                        <p class="text-white/70 text-sm leading-relaxed mb-6 max-w-sm">
                            {{ __('common.footer_tagline') }}
                        </p>
                        <div class="flex items-center gap-3">
                            <a href="https://x.com/cofi_ug" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-amber-500 hover:text-white transition-all duration-300" aria-label="X (Twitter)">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/communityfirstuganda/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-amber-500 hover:text-white transition-all duration-300" aria-label="Instagram">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.31 2.525c.636-.247 1.363-.416 2.427-.465C8.56 2.013 8.914 2 11.272 2h1.043zm0 1.802h-1.08c-2.404 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.403-.058 3.807v1.08c0 2.404.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h2.16c2.404 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-2.16c0-2.404-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.403-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                            </a>
                            <a href="https://wa.me/256393249878" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-green-500 hover:text-white transition-all duration-300" aria-label="WhatsApp">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Quick Links --}}
                    <div class="lg:col-span-2">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-amber-400 mb-5">{{ __('common.footer_links') }}</h3>
                        <ul class="space-y-3">
                            <li><a href="{{ route('home') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_home') }}</a></li>
                            <li><a href="{{ route('about') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_about') }}</a></li>
                            <li><a href="{{ route('programs') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_programs') }}</a></li>
                            <li><a href="{{ route('blog') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_blog') }}</a></li>
                            <li><a href="{{ route('faq') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_faq') }}</a></li>
                            <li><a href="{{ route('volunteer') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_volunteer') }}</a></li>
                            <li><a href="{{ route('gallery') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_gallery') }}</a></li>
                            <li><a href="{{ route('contact') }}" class="text-white/70 hover:text-white transition-colors text-sm">{{ __('common.nav_contact') }}</a></li>
                        </ul>
                    </div>

                    {{-- Programs --}}
                    <div class="lg:col-span-3">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-amber-400 mb-5">Our Programs</h3>
                        <ul class="space-y-3">
                            <li><a href="{{ route('programs') }}#literacy" class="text-white/70 hover:text-white transition-colors text-sm">Literacy & Development</a></li>
                            <li><a href="{{ route('programs') }}#sports" class="text-white/70 hover:text-white transition-colors text-sm">Sports & Social Engagements</a></li>
                            <li><a href="{{ route('programs') }}#services" class="text-white/70 hover:text-white transition-colors text-sm">Community Services</a></li>
                            <li><a href="{{ route('programs') }}#livelihood" class="text-white/70 hover:text-white transition-colors text-sm">Livelihood Support</a></li>
                        </ul>
                    </div>

                    {{-- Contact Info --}}
                    <div class="lg:col-span-3">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-amber-400 mb-5">{{ __('common.footer_contact') }}</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-amber-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <a href="mailto:info@communityfirstuganda.org" class="text-white/70 hover:text-white transition-colors text-sm">info@communityfirstuganda.org</a>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-amber-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <a href="tel:0393249878" class="text-white/70 hover:text-white transition-colors text-sm">0393 249 878</a>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-amber-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span class="text-white/70 text-sm">Noor Emporium, Mengo Hill Rd,<br>Kampala, Uganda</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-amber-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                <a href="https://wa.me/256393249878" target="_blank" rel="noopener noreferrer" class="text-white/70 hover:text-white transition-colors text-sm">Chat on WhatsApp</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-white/10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
                    <p class="text-white/50 text-xs">&copy; {{ date('Y') }} {{ __('common.site_name') }}. {{ __('common.rights') }}</p>
                    <div class="flex items-center gap-4 text-xs">
                        <a href="#" class="text-white/50 hover:text-white transition-colors">Privacy Policy</a>
                        <span class="text-white/20">|</span>
                        <a href="#" class="text-white/50 hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    @stack('scripts')

</body>
</html>
