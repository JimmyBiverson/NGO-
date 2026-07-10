@extends('layouts.app')

@section('title', 'Gallery')
@section('description', 'Explore our photo gallery showcasing the impact of Community First Uganda\'s programs in education, healthcare, sports, and community development.')

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 z-[1] bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=1920&q=85');"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">Our Impact in Pictures</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                Gallery<br><span class="text-amber-400">Stories of Change</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                Witness the transformation happening in our communities through education, healthcare, sports, and cultural programs. Every image tells a story of hope, growth, and empowerment.
            </p>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="py-16 sm:py-20 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Filters --}}
            <div class="flex flex-wrap justify-center gap-2 mb-12 reveal">
                <button class="gallery-filter-btn active px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-filter="all">All Photos</button>
                <button class="gallery-filter-btn px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-filter="education">Education</button>
                <button class="gallery-filter-btn px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-filter="healthcare">Healthcare</button>
                <button class="gallery-filter-btn px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-filter="sports">Sports</button>
                <button class="gallery-filter-btn px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-filter="community">Community</button>
                <button class="gallery-filter-btn px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-filter="livelihood">Livelihood</button>
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children relative" id="gallery-grid">
                @php
                    $images = [
                        ['src' => 'https://images.unsplash.com/photo-1588072432833-9640fd5e3d6f?w=800&q=85', 'title' => 'English Language Class', 'desc' => 'Students actively participating in our English language program at the community center', 'date' => 'Term 3, 2024', 'category' => 'education'],
                        ['src' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=800&q=85', 'title' => 'Computer Skills Training', 'desc' => 'Youth learning essential computer skills for career development and digital literacy', 'date' => 'Term 3, 2024', 'category' => 'education'],
                        ['src' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=85', 'title' => 'Medical Outreach Camp', 'desc' => 'Healthcare professionals providing free medical checkups and health education', 'date' => 'October 2024', 'category' => 'healthcare'],
                        ['src' => 'https://images.unsplash.com/photo-1431324155629-1a9124e1f9c3?w=800&q=85', 'title' => 'Futsal Tournament', 'desc' => 'Young athletes developing teamwork, leadership, and fitness through organized sports', 'date' => 'November 2024', 'category' => 'sports'],
                        ['src' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&q=85', 'title' => 'Community Gathering', 'desc' => 'Community members coming together for empowerment workshops and social engagement', 'date' => 'November 2024', 'category' => 'community'],
                        ['src' => 'https://images.unsplash.com/photo-1559333086-b0a562ed0e6c?w=800&q=85', 'title' => 'Henna Art Workshop', 'desc' => 'Women learning traditional henna art as a cultural skill and income-generating craft', 'date' => 'October 2024', 'category' => 'livelihood'],
                        ['src' => 'https://images.unsplash.com/photo-1604962914199-fc2467b2b4a3?w=800&q=85', 'title' => 'Tailoring & Fashion', 'desc' => 'Vocational training in tailoring and fashion design for economic empowerment', 'date' => 'Term 2, 2024', 'category' => 'livelihood'],
                        ['src' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&q=85', 'title' => 'Community Service', 'desc' => 'Volunteers engaging in home welfare visits and community support activities', 'date' => 'September 2024', 'category' => 'community'],
                        ['src' => 'https://images.unsplash.com/photo-1544027993-37dbfe43562a?w=800&q=85', 'title' => 'Aerobics Session', 'desc' => 'Ladies fitness and aerobics sessions promoting physical wellness and social bonding', 'date' => 'Term 3, 2024', 'category' => 'sports'],
                    ];
                @endphp

                @foreach($images as $image)
                    <div class="stagger-item gallery-item card-hover tilt-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 cursor-pointer"
                         data-category="{{ $image['category'] }}"
                         data-lightbox
                         data-src="{{ $image['src'] }}"
                         data-caption="{{ $image['title'] }} — {{ $image['desc'] }}">
                        <div class="card-image h-60">
                            <img src="{{ $image['src'] }}"
                                 alt="{{ $image['title'] }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover"
                                 onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                        </div>
                        <div class="p-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-2.5 py-1 rounded-full">{{ $image['category'] }}</span>
                            <h3 class="gallery-item-title font-semibold text-gray-900 mt-2 mb-1">{{ $image['title'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $image['desc'] }}</p>
                            <p class="text-xs text-gray-400 mt-2">{{ $image['date'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative py-20 overflow-hidden noise-overlay">
        <div class="absolute inset-0 bg-gradient-to-br from-forest-900 via-forest-800 to-[#0B2B1D]"></div>
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="reveal">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Be Part of Our Story</h2>
                <p class="text-white/70 text-lg mb-8">Every photo represents real lives transformed. Join us in creating more stories of hope and empowerment.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('volunteer') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-forest-900 font-semibold text-sm bg-white transition-all duration-300 hover:bg-amber-50">Volunteer With Us</a>
                    <a href="#" data-donate-modal class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10">Support Our Mission</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
