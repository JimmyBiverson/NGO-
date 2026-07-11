@extends('layouts.app')

@section('description', 'We engage and empower vulnerable and marginalized communities to live holistically improved lives.')

@section('content')

    {{-- Hero Section --}}
    @include('partials.hero')

    {{-- Mission & Vision --}}
    {{-- Reveal-left/right: GSAP scroll-triggered animations. clip-reveal on image triggers circle-wipe. --}}
    <section class="relative py-16 sm:py-20 lg:py-28 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
                <div class="reveal-left relative">
                    <div class="absolute -top-8 -left-8 w-32 h-32 bg-amber-100 rounded-full opacity-30 blur-3xl"></div>
                    <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Our Mission</span>
                    <h2 class="section-title mb-6">Empowering Communities,<br><span class="text-forest-700">Transforming Lives</span></h2>
                    <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-6">
                        To engage and empower vulnerable and marginalized communities — with a special focus on Somali urban refugees in Kampala — to identify their needs, develop their potential, and live holistically improved lives through participatory development.
                    </p>
                    <div class="grid grid-cols-2 gap-4 max-w-md">
                        <div class="p-4 rounded-xl bg-forest-50">
                            <div class="text-2xl font-bold text-forest-700">2020</div>
                            <div class="text-xs text-gray-600">Founded</div>
                        </div>
                        <div class="p-4 rounded-xl bg-amber-50">
                            <div class="text-2xl font-bold text-amber-600">300+</div>
                            <div class="text-xs text-gray-600">Lives Impacted</div>
                        </div>
                        <div class="p-4 rounded-xl bg-forest-50">
                            <div class="text-2xl font-bold text-forest-700">4</div>
                            <div class="text-xs text-gray-600">Core Programs</div>
                        </div>
                        <div class="p-4 rounded-xl bg-amber-50">
                            <div class="text-2xl font-bold text-amber-600">100%</div>
                            <div class="text-xs text-gray-600">Community-Led</div>
                        </div>
                    </div>
                </div>

                <div class="reveal-right">
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                             <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?w=800&q=85&fm=webp"
                                 alt="Community First Uganda"
                                 loading="eager"
                                 fetchpriority="high"
                                 class="w-full h-[250px] sm:h-[400px] lg:h-[500px] object-cover clip-reveal"
                                 onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                        </div>
                        {{-- Floating stat card --}}
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-5 shadow-xl shadow-black/10 max-w-[200px] tilt-card">
                            <div class="tilt-card-content">
                                <div class="text-3xl font-bold text-forest-700">300+</div>
                                <div class="text-xs text-gray-500">Community members empowered since 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Impact Stats --}}
    {{-- Counter numbers animate via GSAP ScrollTrigger when they enter the viewport. --}}
    <section class="relative py-16 sm:py-20 bg-forest-900 text-white noise-overlay">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12 stagger-children">
                <div class="stagger-item text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-amber-400 mb-2">
                        <span class="counter-number" data-target="4">0</span>
                    </div>
                    <div class="text-sm font-medium text-white/70 uppercase tracking-wider">Core Programs</div>
                    <div class="w-12 h-0.5 bg-amber-500 mx-auto mt-3 rounded-full"></div>
                </div>
                <div class="stagger-item text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-amber-400 mb-2">
                        <span class="counter-number" data-target="300">0</span><span class="text-3xl lg:text-4xl text-amber-500">+</span>
                    </div>
                    <div class="text-sm font-medium text-white/70 uppercase tracking-wider">Lives Impacted</div>
                    <div class="w-12 h-0.5 bg-amber-500 mx-auto mt-3 rounded-full"></div>
                </div>
                <div class="stagger-item text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-amber-400 mb-2">
                        <span class="counter-number" data-target="4">0</span>
                    </div>
                    <div class="text-sm font-medium text-white/70 uppercase tracking-wider">Programming Areas</div>
                    <div class="w-12 h-0.5 bg-amber-500 mx-auto mt-3 rounded-full"></div>
                </div>
                <div class="stagger-item text-center">
                    <div class="text-5xl lg:text-6xl font-bold text-amber-400 mb-2">
                        <span class="counter-number" data-target="10">0</span><span class="text-3xl lg:text-4xl text-amber-500">+</span>
                    </div>
                    <div class="text-sm font-medium text-white/70 uppercase tracking-wider">Activities Offered</div>
                    <div class="w-12 h-0.5 bg-amber-500 mx-auto mt-3 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Programs Preview --}}
    <section class="relative py-16 sm:py-20 lg:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 lg:mb-18 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Our Programs</span>
                <h2 class="section-title mb-4">Comprehensive Programs,<br><span class="text-forest-700">Lasting Impact</span></h2>
                <p class="section-subtitle mx-auto">Designed with our community to create lasting positive impact across four key development areas — from literacy to livelihood.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 stagger-children">
                @php
                    $programs = [
                        [
                            'title' => 'Literacy & Development',
                            'count' => '3 Activities',
                            'image' => 'https://images.unsplash.com/photo-1492538368677-f6e0afe31dcc?w=800&q=85&fm=webp',
                            'description' => 'Empowering minds through language mastery, children\'s education, and digital literacy for comprehensive learning foundation.',
                            'tags' => ['Language Classes', 'Children Classes', 'Computer Classes'],
                            'anchor' => 'literacy'
                        ],
                        [
                            'title' => 'Sports & Social Engagements',
                            'count' => '4 Activities',
                            'image' => 'https://images.unsplash.com/photo-1431324155629-1a9124e1f9c3?w=800&q=85&fm=webp',
                            'description' => 'Building community bonds through sports, fitness, and social connections that strengthen our collective spirit.',
                            'tags' => ['Soccer', 'Aerobics', 'Gym', 'Women Groups'],
                            'anchor' => 'sports'
                        ],
                        [
                            'title' => 'Community Services',
                            'count' => '6 Activities',
                            'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=85&fm=webp',
                            'description' => 'Comprehensive support for health, legal aid, and psychosocial wellbeing through community-centered care programs.',
                            'tags' => ['Healthcare', 'Medical Outreach', 'Legal Aid', 'Counseling', 'Trauma Healing', 'Home Welfare'],
                            'anchor' => 'services'
                        ],
                        [
                            'title' => 'Livelihood Support',
                            'count' => '5 Activities',
                            'image' => 'https://images.unsplash.com/photo-1604962914199-fc2467b2b4a3?w=800&q=85&fm=webp',
                            'description' => 'Sustainable income generation through practical skills and entrepreneurship development for economic empowerment.',
                            'tags' => ['Crocheting', 'Henna Art', 'Tailoring', 'Soap Making', 'Computer Programming'],
                            'anchor' => 'livelihood'
                        ],
                    ];
                @endphp

                @foreach($programs as $program)
                    <div class="stagger-item group card-hover tilt-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                        <div class="card-image relative h-52 lg:h-60">
                            <img src="{{ $program['image'] }}"
                                 alt="{{ $program['title'] }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover"
                                 onerror="this.parentElement.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            <div class="absolute bottom-4 left-5 right-5 flex items-center justify-between text-white">
                                <span class="text-xs font-semibold uppercase tracking-wider bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">{{ $program['count'] }}</span>
                            </div>
                        </div>
                        <div class="p-6 lg:p-7">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $program['title'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $program['description'] }}</p>
                            <div class="flex flex-wrap gap-2 mb-5">
                                @foreach($program['tags'] as $tag)
                                    <span class="text-xs px-3 py-1 rounded-full bg-forest-50 text-forest-700 font-medium">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('programs') }}#{{ $program['anchor'] }}"
                               class="inline-flex items-center gap-1.5 text-sm font-semibold text-forest-700 hover:text-amber-600 transition-colors">
                                Explore {{ $program['title'] }}
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12 reveal">
                <a href="{{ route('programs') }}"
                   class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm transition-all duration-300 shadow-lg shadow-forest-900/25 donate-btn hover:shadow-xl">
                    <span>View All Programs</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Community Center --}}
    {{-- Grid layout with icon feature list. tilt-card for the 3D hover effect on feature icons. --}}
    <section class="relative py-16 sm:py-20 lg:py-28 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="reveal-left relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl">
                             <img src="https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?w=800&q=85&fm=webp"
                             alt="Community Center"
                             loading="lazy"
                             class="w-full h-[400px] lg:h-[500px] object-cover clip-reveal"
                             onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 border-2 border-amber-300 rounded-2xl -z-10 hidden lg:block"></div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-forest-100 rounded-2xl -z-10 hidden lg:block"></div>
                </div>

                <div class="reveal-right">
                    <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Community Hub</span>
                    <h2 class="section-title mb-4">Community Center <br><span class="text-forest-700">for Learning</span></h2>
                    <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-8">
                        Our community center at Noor Emporium, Mengo Hill Road serves as the heart of our programs, bringing together learning, skilling, and social engagement in a welcoming space for the Somali community and beyond.
                    </p>

                    <div class="space-y-6">
                        @php
                            $features = [
                                ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title' => 'Learning Hub', 'desc' => 'Language classes, computer training, and children\'s education programs'],
                                ['icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z', 'title' => 'Skilling Center', 'desc' => 'Vocational training, arts & crafts, and entrepreneurship development'],
                                ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Social Space', 'desc' => 'Community gatherings, Gym, Aerobics and social engagement'],
                            ];
                        @endphp

                        @foreach($features as $feature)
                            <div class="flex items-start gap-4 group">
                                <div class="w-12 h-12 rounded-xl bg-forest-50 flex items-center justify-center text-forest-700 shrink-0 transition-all duration-300 group-hover:bg-forest-100 group-hover:scale-110">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $feature['icon'] }}"/></svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">{{ $feature['title'] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $feature['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Carousel --}}
    {{-- Single testimonial block with gold quote icon. Color theme: amber on forest-900. --}}
    <section class="relative py-20 lg:py-28 overflow-hidden bg-forest-900 noise-overlay">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 mb-6">Stories of Transformation</span>
                <svg class="w-12 h-12 mx-auto mb-6 text-amber-500/60" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z"/></svg>
                <blockquote class="text-xl sm:text-2xl lg:text-3xl text-white/90 font-serif italic leading-relaxed mb-8">
                    &ldquo;Community First Uganda has helped me a lot. They teach English and computers. I came here as a beginner last year, but now I'm getting better. I am grateful for their support. Thank you, Community First Uganda.&rdquo;
                </blockquote>
                <div class="flex items-center justify-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-amber-500/20 flex items-center justify-center text-amber-400 font-bold text-lg">A</div>
                    <div class="text-left">
                        <div class="font-semibold text-white">Ayanle</div>
                        <div class="text-sm text-white/60">Program Beneficiary</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners / Supporters --}}
    {{-- Infinite horizontal scroll via CSS @keyframes partner-scroll. Duplicated track for seamless loop. --}}
    <section class="py-16 sm:py-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Our Partners</span>
                <h2 class="section-title mb-4">Trusted By <span class="text-forest-700">Community Partners</span></h2>
            </div>
            <div class="relative overflow-hidden reveal">
                <div class="flex gap-16 items-center partner-track">
                    <div class="flex items-center gap-16 shrink-0">
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">Hope Speaks</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">UNHCR</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">Kampala Capital City</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">Mengo Community</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">National Bureau for NGOs</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-16 shrink-0">
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">Hope Speaks</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">UNHCR</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">Kampala Capital City</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">Mengo Community</span>
                        </div>
                        <div class="h-12 flex items-center px-8 rounded-xl bg-gray-50 border border-gray-100">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-wider">National Bureau for NGOs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    {{-- Full-width gradient banner with particle background. Uses magnetic-btn for mouse-follow effect. --}}
    <section class="relative py-20 lg:py-28 overflow-hidden noise-overlay">
        <div class="absolute inset-0 bg-gradient-to-br from-forest-900 via-forest-800 to-[#0B2B1D]"></div>
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="reveal">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">Join Our<br><span class="text-amber-400">Community</span></h2>
                <p class="text-lg text-white/70 max-w-2xl mx-auto mb-10 leading-relaxed">
                    We invite you to participate in our life with the community. Together, we can create lasting change and build stronger, more resilient communities.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('volunteer') }}"
                       class="magnetic-btn group inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-forest-900 font-semibold text-sm bg-white transition-all duration-300 hover:bg-amber-50 hover:shadow-xl hover:shadow-black/20">
                        <span>Volunteer With Us</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#" data-donate-modal
                       class="magnetic-btn group inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10 hover:border-white/50">
                        <span>Donate Now</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
