@extends('layouts.app')

@section('title', 'Our Programs')
@section('description', 'Explore Community First Uganda\'s four core program areas: Literacy & Development, Sports & Social Engagements, Community Services, and Livelihood Support.')

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">4 Core Programming Areas</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                Our<br><span class="text-amber-400">Programs</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                Comprehensive programs designed to empower, educate, and inspire communities through skill development, fitness, community services, and livelihood support.
            </p>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 stagger-children">
                @php
                    $stats = [
                        ['number' => '4', 'label' => 'Core Programs', 'suffix' => ''],
                        ['number' => '3', 'label' => 'Terms Per Year', 'suffix' => ''],
                        ['number' => '18', 'label' => 'Activities Offered', 'suffix' => '+'],
                        ['number' => '365', 'label' => 'Year-Round Access', 'suffix' => ''],
                    ];
                @endphp
                @foreach($stats as $stat)
                    <div class="stagger-item text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-forest-900 mb-1">
                            <span class="counter-number" data-target="{{ $stat['number'] }}">0</span>{{ $stat['suffix'] }}
                        </div>
                        <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Program Sections --}}
    @php
        $programs = [
            [
                'id' => 'literacy',
                'title' => 'Literacy & Development',
                'count' => '50+ Learners per term',
                'activities' => '3 Core Activities',
                'description' => 'Foundational education and digital literacy programs empowering minds through language mastery, children\'s education, and essential computer skills for comprehensive learning development.',
                'image' => 'https://images.unsplash.com/photo-1588072432833-9640fd5e3d6f?w=800&q=85',
                'items' => ['English Language Classes', 'Children\'s Education & Homework Support', 'Computer & Digital Literacy', 'Swahili & Somali Language Support'],
                'align' => 'left'
            ],
            [
                'id' => 'sports',
                'title' => 'Sports & Social Engagements',
                'count' => '4 Core Activities',
                'activities' => '4 Activities',
                'description' => 'Building community bonds through sports, fitness, and social connections that strengthen collective spirit, promote physical wellness, and foster inclusive participation across all community members.',
                'image' => 'https://images.unsplash.com/photo-1431324155629-1a9124e1f9c3?w=800&q=85',
                'items' => ['Futsal (Indoor Soccer)', 'Aerobics Sessions (Ladies Fitness)', 'Gym Access & Personal Training', 'Women\'s Social Groups', 'Community Events & Gatherings'],
                'align' => 'right'
            ],
            [
                'id' => 'services',
                'title' => 'Community Services',
                'count' => '50+ Beneficiaries per term',
                'activities' => '6 Core Activities',
                'description' => 'Comprehensive community support providing essential healthcare, legal aid, and psychosocial wellbeing services through partnerships and community-centered care programs for holistic development.',
                'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=85',
                'items' => ['Healthcare Support & Medical Outreach', 'Legal Aid Outreach & Workshops', 'Psychosocial Support & Counseling', 'Trauma Healing Programs', 'Home Welfare Visits', 'Partnership With Hope Speaks Organization'],
                'align' => 'left'
            ],
            [
                'id' => 'livelihood',
                'title' => 'Livelihood Support',
                'count' => '80+ Entrepreneurs per term',
                'activities' => '5 Core Activities',
                'description' => 'Sustainable income generation through practical skills and entrepreneurship development, empowering community members with vocational training and business skills for economic independence and self-reliance.',
                'image' => 'https://images.unsplash.com/photo-1604962914199-fc2467b2b4a3?w=800&q=85',
                'items' => ['Crocheting & Handicrafts Training', 'Henna Art & Cultural Skills', 'Tailoring & Fashion Design', 'Liquid Soap Making (Entrepreneurship)', 'Computer Programming Basics', 'Business Development & Financial Literacy'],
                'align' => 'right'
            ],
        ];
    @endphp

    @foreach($programs as $index => $program)
        <section id="{{ $program['id'] }}" class="program-section py-16 sm:py-20 lg:py-24 {{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-50' }}">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    {{-- Image side --}}
                    <div class="{{ $program['align'] === 'right' ? 'lg:order-2' : '' }} reveal-left">
                        <div class="relative rounded-2xl overflow-hidden shadow-lg card-hover">
                            <div class="card-image h-72 lg:h-96">
                                <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}" loading="lazy" class="w-full h-full object-cover clip-reveal"
                                     onerror="this.parentElement.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <span class="text-xs font-semibold bg-white/90 backdrop-blur-sm text-forest-900 px-3 py-1.5 rounded-full">{{ $program['count'] }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Content side --}}
                    <div class="{{ $program['align'] === 'right' ? 'lg:order-1' : '' }} reveal-right">
                        <span class="text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full mb-3 inline-block">{{ $program['activities'] }}</span>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">{{ $program['title'] }}</h2>
                        <p class="text-gray-600 leading-relaxed mb-6">{{ $program['description'] }}</p>

                        <div class="space-y-3 mb-8">
                            @foreach($program['items'] as $item)
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-forest-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-sm text-gray-700">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>

                        <a href="{{ route('volunteer') }}" class="magnetic-btn inline-flex items-center gap-2 px-6 py-3 rounded-full text-white font-semibold text-sm transition-all duration-300 donate-btn shadow-lg">
                            <span>Get Involved</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    {{-- Program Structure --}}
    <section class="py-16 sm:py-20 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Structure</span>
                <h2 class="section-title mb-4">Program <span class="text-forest-700">Structure</span></h2>
                <p class="section-subtitle mx-auto">Our programs operate on a 3-term yearly schedule with flexible intake options and year-round availability for community engagement.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto stagger-children">
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card">
                    <div class="text-4xl font-bold text-forest-900 mb-1">3</div>
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Terms Per Year</div>
                    <p class="text-xs text-gray-400 mt-2">Structured learning periods with breaks</p>
                </div>
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card">
                    <div class="text-4xl font-bold text-forest-900 mb-1">18<span class="text-2xl text-amber-500">+</span></div>
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Activities</div>
                    <p class="text-xs text-gray-400 mt-2">Diverse learning and skill-building options</p>
                </div>
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card sm:col-span-2 lg:col-span-1">
                    <div class="text-4xl font-bold text-forest-900 mb-1">Year-Round</div>
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Availability</div>
                    <p class="text-xs text-gray-400 mt-2">Flexible enrollment throughout the year</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Enrollment Process --}}
    <section class="py-16 sm:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">How to Join</span>
                <h2 class="section-title mb-4">Enrollment <span class="text-forest-700">Process</span></h2>
                <p class="section-subtitle mx-auto">Getting involved in our programs is simple and accessible to all community members.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto stagger-children">
                <div class="stagger-item text-center">
                    <div class="w-16 h-16 rounded-full bg-forest-100 text-forest-700 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                    <h3 class="font-bold text-gray-900 mb-2">Visit Our Center</h3>
                    <p class="text-sm text-gray-600">Come to Noor Emporium, Mengo Hill Rd, Kampala during office hours</p>
                </div>
                <div class="stagger-item text-center">
                    <div class="w-16 h-16 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                    <h3 class="font-bold text-gray-900 mb-2">Express Interest</h3>
                    <p class="text-sm text-gray-600">Speak with our team about your interests and choose a program</p>
                </div>
                <div class="stagger-item text-center">
                    <div class="w-16 h-16 rounded-full bg-forest-100 text-forest-700 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                    <h3 class="font-bold text-gray-900 mb-2">Start Learning</h3>
                    <p class="text-sm text-gray-600">Begin your journey with our community and start building skills</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative py-20 overflow-hidden noise-overlay">
        <div class="absolute inset-0 bg-gradient-to-br from-forest-900 via-forest-800 to-[#0B2B1D]"></div>
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="reveal">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Ready to Participate?</h2>
                <p class="text-white/70 text-lg mb-8">Join our programs and be part of transformative change.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('volunteer') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-forest-900 font-semibold text-sm bg-white transition-all duration-300 hover:bg-amber-50">Volunteer With Us</a>
                    <a href="{{ route('contact') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
