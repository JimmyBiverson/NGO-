@extends('layouts.app')

@section('title', 'Blog — News & Stories')
@section('description', 'Read the latest news, stories, and updates from Community First Uganda.')

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 z-[1] bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1920&q=85');"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">Our Stories</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                Blog<br><span class="text-amber-400">News & Updates</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                Read the latest news, stories, and updates from Community First Uganda.
            </p>
        </div>
    </section>

    {{-- Blog Content --}}
    <section class="py-16 sm:py-20 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-4 lg:gap-10">

                {{-- Main Content --}}
                <div class="lg:col-span-3">
                    {{-- Blog post data. Currently static/hardcoded — replace with a dynamic model when the blog is built out.
                        Each post: title, date, excerpt, image (Unsplash), category. 'Read Full Story' links point to # (placeholder). --}}
                    @php
                        $posts = [
                            [
                                'title' => 'Empowering Youth Through Sports',
                                'date' => 'November 15, 2024',
                                'excerpt' => 'Our futsal program continues to build leadership skills, teamwork, and confidence among young people in our community. See how sports are transforming lives.',
                                'image' => 'https://images.unsplash.com/photo-1431324155629-1a9124e1f9c3?w=800&q=85',
                                'category' => 'Sports',
                            ],
                            [
                                'title' => 'New Computer Lab Opens at Community Center',
                                'date' => 'October 28, 2024',
                                'excerpt' => 'Thanks to our partners, we\'ve launched a fully equipped computer lab to provide digital literacy training for youth and adults.',
                                'image' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=800&q=85',
                                'category' => 'Education',
                            ],
                            [
                                'title' => 'Health Outreach Reaches 200+ Families',
                                'date' => 'September 12, 2024',
                                'excerpt' => 'Our quarterly medical camp provided essential health services including checkups, vaccinations, and health education to over 200 families.',
                                'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=85',
                                'category' => 'Healthcare',
                            ],
                            [
                                'title' => 'Women\'s Tailoring Cohort Graduates',
                                'date' => 'August 5, 2024',
                                'excerpt' => 'Twenty women completed our 6-month vocational training in tailoring and fashion design, gaining skills for economic independence.',
                                'image' => 'https://images.unsplash.com/photo-1604962914199-fc2467b2b4a3?w=800&q=85',
                                'category' => 'Livelihood',
                            ],
                        ];
                    @endphp

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 stagger-children">
                        @foreach($posts as $post)
                            <article class="stagger-item card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                                <div class="h-52 overflow-hidden">
                                    <img src="{{ $post['image'] }}"
                                         alt="{{ $post['title'] }}"
                                         loading="lazy"
                                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                                         onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-2.5 py-1 rounded-full">{{ $post['category'] }}</span>
                                        <span class="text-xs text-gray-400">{{ $post['date'] }}</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">{{ $post['title'] }}</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed mb-4">{{ $post['excerpt'] }}</p>
                                        {{-- Placeholder: replace '#' with post URL when dynamic routing is added --}}
                                        <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-amber-700 hover:text-amber-800 transition-colors">
                                        Read Full Story: {{ $post['title'] }}
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- Sidebar --}}
                <aside class="mt-12 lg:mt-0 lg:col-span-1">
                    <div class="sticky top-24 space-y-8">
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Categories</h3>
                            <ul class="space-y-2">
                                @php
                                    $categories = ['Education', 'Healthcare', 'Sports', 'Community', 'Livelihood'];
                                @endphp
                                @foreach($categories as $cat)
                                    <li>
                                        <a href="#" class="flex items-center justify-between text-sm text-gray-600 hover:text-amber-700 transition-colors py-1.5 px-3 rounded-lg hover:bg-amber-50">
                                            <span>{{ $cat }}</span>
                                            {{-- Placeholder count — replace with real post-count per category when dynamic blog is built --}}
                                            <span class="text-xs text-gray-400">({{ rand(2, 8) }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-gray-900 mb-4">Recent Posts</h3>
                            <ul class="space-y-4">
                                @foreach($posts as $post)
                                    <li>
                                        <a href="#" class="flex gap-3 group">
                                            <div class="w-14 h-14 rounded-xl overflow-hidden shrink-0">
                                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover" loading="lazy">
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900 group-hover:text-amber-700 transition-colors leading-snug">{{ $post['title'] }}</p>
                                                <p class="text-xs text-gray-400 mt-0.5">{{ $post['date'] }}</p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
