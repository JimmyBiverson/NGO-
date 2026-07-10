@extends('layouts.app')

@section('title', 'About Us')
@section('description', 'Learn about Community First Uganda — our mission, approach, leadership, and the communities we serve.')

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 z-[1] bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?w=1920&q=85');"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">Indigenous NGO Since 2020</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                Dignity &<br><span class="text-amber-400">Partnership</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                We affirm the dignity of vulnerable communities when we see them not just as beneficiaries of charity but as valuable contributors and stakeholders in the solutions to their challenges.
            </p>
        </div>
    </section>

    {{-- Quote --}}
    <section class="relative py-16 bg-gray-50 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-[0.04]" style="background-image: url('https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1920&q=85');"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="relative reveal">
                <svg class="w-10 h-10 text-amber-300 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z"/></svg>
                <blockquote class="text-xl sm:text-2xl text-gray-700 font-serif italic leading-relaxed">
                    We affirm the dignity of the members of vulnerable communities when we see them not just as beneficiaries of charity but as valuable contributors/stakeholders in the solutions to their challenges.
                </blockquote>
                <div class="mt-4 font-semibold text-forest-700">— Community First Uganda</div>
            </div>
        </div>
    </section>

    {{-- Our Story --}}
    <section class="py-16 sm:py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="reveal-left">
                    <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Our Story</span>
                    <h2 class="section-title mb-6">A Journey of<br><span class="text-forest-700">Community Service</span></h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>Community First Uganda was founded in 2020 by Philip Onen with a vision to serve the most vulnerable and marginalized communities in Kampala, Uganda. Recognizing the unique challenges faced by Somali urban refugees living in Kampala's slum areas, our founder established an organization built on the principles of dignity, partnership, and community-led development.</p>
                        <p>What began as a small initiative has grown into a comprehensive community development organization serving over 300 individuals annually through four core program areas: Literacy & Development, Sports & Social Engagements, Community Services, and Livelihood Support.</p>
                        <p>Our journey has been marked by the resilience and determination of the communities we serve. From Somali refugees rebuilding their lives to women gaining economic independence through skills training, every story of transformation reinforces our commitment to community-led development.</p>
                    </div>
                </div>
                <div class="reveal-right">
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=800&q=85"
                                 alt="Our Story"
                                 loading="lazy"
                                 class="w-full h-[450px] object-cover clip-reveal"
                                 onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-28 h-28 bg-amber-100 rounded-2xl -z-10 hidden lg:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Approach --}}
    <section class="py-16 sm:py-20 lg:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Our Approach</span>
                <h2 class="section-title mb-4">Participatory<br><span class="text-forest-700">Development Approach</span></h2>
                <p class="section-subtitle mx-auto">We engage vulnerable communities to establish their felt needs and empower them through participatory research, critical discourse, and community-led development.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 stagger-children">
                @php
                    $approaches = [
                        ['title' => 'Community-Led Development', 'desc' => 'We engage the Somali community to establish their felt needs and empower them to improve their livelihood through participatory research and critical discourse.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0'],
                        ['title' => 'Partnership & Participation', 'desc' => 'Projects are initiated by beneficiaries themselves and developed in partnership throughout the entire process from planning to execution to evaluation.', 'icon' => 'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1'],
                        ['title' => 'Empowerment & Self-Reliance', 'desc' => 'We aim to empower the community and reduce dependence, helping them realize their potential to take control of their situations and impact others positively.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                        ['title' => 'Holistic Transformation', 'desc' => 'Our engagements are designed to see the community holistically transformed into thriving, self-sufficient groups — socially, psychosocially, and economically.', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                    ];
                @endphp

                @foreach($approaches as $approach)
                    <div class="stagger-item group card-hover tilt-card bg-white rounded-2xl p-7 border border-gray-100 shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-forest-50 flex items-center justify-center text-forest-700 mb-5 transition-all duration-300 group-hover:bg-forest-100 group-hover:scale-110">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $approach['icon'] }}"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $approach['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">{{ $approach['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Leadership --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Leadership</span>
                <h2 class="section-title mb-4">Executive <span class="text-forest-700">Leadership</span></h2>
                <p class="section-subtitle mx-auto">Dedicated individuals committed to serving vulnerable communities with integrity and compassion.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto stagger-children">
                <div class="stagger-item tilt-card bg-white rounded-2xl p-8 lg:p-10 shadow-sm border border-gray-100 card-hover text-center">
                    <div class="w-28 h-28 rounded-full overflow-hidden mx-auto mb-6 shadow-lg ring-2 ring-forest-100">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=85&fit=crop&crop=face"
                             alt="Philip Onen"
                             loading="lazy"
                             class="w-full h-full object-cover"
                             onerror="this.parentElement.className='w-28 h-28 rounded-full bg-gradient-to-br from-forest-100 to-forest-200 mx-auto mb-6 flex items-center justify-center'; this.outerHTML='<svg class=\'w-14 h-14 text-forest-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\'/></svg>'">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Philip Onen</h3>
                    <p class="text-amber-600 font-medium mb-4">Executive Director</p>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Under Philip's leadership, Community First Uganda serves marginalized and vulnerable communities across Uganda, with a special focus on Somali Urban Refugees living in Kampala's slum areas.
                    </p>
                </div>
                <div class="stagger-item tilt-card bg-white rounded-2xl p-8 lg:p-10 shadow-sm border border-gray-100 card-hover text-center">
                    <div class="w-28 h-28 rounded-full overflow-hidden mx-auto mb-6 shadow-lg ring-2 ring-amber-100">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=200&q=85&fit=crop&crop=face"
                             alt="Community Team"
                             loading="lazy"
                             class="w-full h-full object-cover"
                             onerror="this.parentElement.className='w-28 h-28 rounded-full bg-gradient-to-br from-amber-100 to-amber-200 mx-auto mb-6 flex items-center justify-center'; this.outerHTML='<svg class=\'w-14 h-14 text-amber-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z\'/></svg>'">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Community Team</h3>
                    <p class="text-amber-600 font-medium mb-4">Program Coordinators & Volunteers</p>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        A dedicated team of program coordinators and community volunteers working together to deliver impactful programs across all four core areas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Community Served --}}
    <section class="py-16 sm:py-20 lg:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Our Focus</span>
                <h2 class="section-title mb-4">The Community<br><span class="text-forest-700">We Serve</span></h2>
                <p class="section-subtitle mx-auto">Our work focuses on holistic transformation — socially, psychosocially, and economically — across vulnerable communities in Uganda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 stagger-children">
                @php
                    $communities = [
                        ['title' => 'Somali Urban Refugees', 'desc' => 'Our current target community living in the slums of Kampala — including Katanga, Bwaise, and Mengo areas — focusing on establishing felt needs and empowerment.', 'tag' => 'Primary Focus Community', 'image' => 'https://images.unsplash.com/photo-1588072432833-9640fd5e3d6f?w=800&q=85'],
                        ['title' => 'Vulnerable Families', 'desc' => 'Supporting the most vulnerable families within the Somali and broader community through holistic intervention programs addressing education, health, and economic stability.', 'tag' => 'Multiple Communities', 'image' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&q=85'],
                        ['title' => 'Women & Youth', 'desc' => 'Empowering Somali women and youth through skills development, leadership training, and income-generating activities including crocheting, henna art, tailoring, and soap making.', 'tag' => 'Key Demographics', 'image' => 'https://images.unsplash.com/photo-1559333086-b0a562ed0e6c?w=800&q=85'],
                    ];
                @endphp

                @foreach($communities as $community)
                    <div class="stagger-item group card-hover tilt-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                        <div class="card-image h-56">
                            <img src="{{ $community['image'] }}" alt="{{ $community['title'] }}" loading="lazy" class="w-full h-full object-cover"
                                 onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-3 py-1 rounded-full">{{ $community['tag'] }}</span>
                            <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">{{ $community['title'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $community['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Registration --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal bg-white rounded-2xl p-8 lg:p-12 shadow-sm border border-gray-100">
                <div class="text-center mb-8">
                    <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Officially Registered</span>
                    <h2 class="section-title mb-4">Indigenous NGO —<br><span class="text-forest-700">Registered in Uganda</span></h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Community First Uganda is officially registered under the Ugandan National Bureau for NGOs, ensuring transparency, accountability, and legal compliance in all our operations.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-2xl mx-auto stagger-children">
                    <div class="stagger-item p-6 rounded-xl bg-forest-50 text-center card-hover">
                        <svg class="w-8 h-8 text-forest-700 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <h3 class="font-semibold text-gray-900">Legal Status</h3>
                        <p class="text-sm text-gray-600">Registered NGO under Uganda National Bureau for NGOs</p>
                    </div>
                    <div class="stagger-item p-6 rounded-xl bg-amber-50 text-center card-hover">
                        <svg class="w-8 h-8 text-amber-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <h3 class="font-semibold text-gray-900">Indigenous Organization</h3>
                        <p class="text-sm text-gray-600">Locally-led, community-based organization serving Uganda since 2020</p>
                    </div>
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
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Ready to Make a Difference?</h2>
                <p class="text-white/70 text-lg mb-8">Join us in empowering communities across Uganda.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('volunteer') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-forest-900 font-semibold text-sm bg-white transition-all duration-300 hover:bg-amber-50">Volunteer With Us</a>
                    <a href="{{ route('contact') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
