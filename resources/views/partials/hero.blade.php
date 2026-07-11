<section id="hero" class="relative min-h-[100dvh] flex items-center overflow-hidden bg-[#0B2B1D]">

    {{-- Ken Burns Background Images --}}
    {{-- 4 slides cycle every 12s (defined in app.js). Each image zooms slowly via CSS animation. --}}
    <div class="ken-burns-container absolute inset-0">
        @php
            $bgImages = [
                'https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=1920&q=80&fm=webp',
                'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=1920&q=80&fm=webp',
                'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1920&q=80&fm=webp',
                'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1920&q=80&fm=webp',
            ];
        @endphp
        @foreach($bgImages as $index => $image)
            <div class="ken-burns-slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}" style="background-image: url('{{ $image }}');">
            </div>
        @endforeach
    </div>

    {{-- Noise overlay --}}
    <div class="absolute inset-0 z-[3] noise-overlay"></div>

    {{-- Overlay gradients --}}
    <div class="absolute inset-0 z-[5] bg-[linear-gradient(to_right,rgba(0,0,0,0.9)_0%,rgba(0,0,0,0.5)_65%,rgba(21,128,61,0.85)_100%)]"></div>
    <div class="absolute inset-0 z-[5] bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>

    {{-- Floating morphing shapes --}}
    <div class="absolute top-20 right-20 z-[4] w-64 h-64 morph-shape opacity-20 hidden lg:block">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path fill="rgba(251, 191, 36, 0.3)" d="M0,0 C20,30 50,20 70,0 Z"/>
        </svg>
    </div>
    <div class="absolute bottom-40 left-10 z-[4] w-48 h-48 morph-shape opacity-20 hidden lg:block">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path fill="rgba(34, 197, 94, 0.2)" d="M0,0 C30,10 40,40 70,0 Z"/>
        </svg>
    </div>

    {{-- Particle container --}}
    <div class="particle-container absolute inset-0 z-[4]"></div>

    {{-- Content --}}
    {{-- Text content overlays matching each bg slide. GSAP timeline drives entrance: badge → heading → desc → CTA. --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-24 pb-20 lg:pt-36 lg:pb-28">
        <div class="max-w-2xl min-h-[200px] sm:min-h-[320px] relative">
            @php
                $textSlides = [
                    [
                        'badge' => 'Empowering Communities Since 2020',
                        'heading' => 'Community First<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-amber-500">Uganda</span>',
                        'desc' => 'We engage and empower vulnerable and marginalized communities to live holistically improved lives.',
                    ],
                    [
                        'badge' => 'Sustainable Development in Action',
                        'heading' => 'Our Programs<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-amber-500">Transform Lives</span>',
                        'desc' => 'From education to economic empowerment, we create lasting change through community-led initiatives.',
                    ],
                    [
                        'badge' => 'Building Brighter Futures',
                        'heading' => 'Community-Led<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-amber-500">Change</span>',
                        'desc' => 'We believe in the power of local leadership to drive sustainable development across Uganda.',
                    ],
                    [
                        'badge' => 'Holistic Transformation',
                        'heading' => 'Whole-Community<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-amber-500">Approach</span>',
                        'desc' => 'Addressing spiritual, social, and economic needs together for lasting impact.',
                    ],
                ];
            @endphp

            @foreach($textSlides as $index => $slide)
                <div class="hero-text-slide {{ $index === 0 ? 'active' : '' }}" data-text="{{ $index }}">
                    <div data-slide-element="badge" class="hero-reveal inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6 hero-badge">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                        {{ $slide['badge'] }}
                    </div>

                    <h1 data-slide-element="heading" class="hero-reveal text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white leading-[1.05] tracking-tight mb-6">
                        {!! $slide['heading'] !!}
                    </h1>

                    <p data-slide-element="desc" class="hero-reveal text-lg sm:text-xl md:text-2xl text-white/80 max-w-xl leading-relaxed mb-10">
                        {{ $slide['desc'] }}
                    </p>
                </div>
            @endforeach

            <div data-slide-element="cta" class="hero-reveal flex flex-wrap items-center gap-4 mt-4">
                <a href="{{ route('volunteer') }}"
                   class="magnetic-btn group inline-flex items-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-full text-white font-semibold text-sm transition-all duration-300 shadow-xl shadow-amber-500/30 hover:shadow-amber-500/50 hero-cta-primary">
                    <span>Volunteer With Us</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('programs') }}"
                   class="magnetic-btn group inline-flex items-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10 hover:border-white/50">
                    <span>Our Programs</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <a href="#" data-donate-modal
                   class="magnetic-btn group inline-flex items-center gap-2 px-5 py-3 sm:px-7 sm:py-3.5 rounded-full text-amber-300 font-semibold text-sm border border-amber-400/30 transition-all duration-300 hover:bg-amber-400/10 hover:border-amber-400/60">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    <span>Donate</span>
                </a>
            </div>

        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 text-white/40">
        <span class="text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-5 h-8 border-2 border-white/30 rounded-full flex justify-center pt-1.5">
            <div class="w-1 h-2 bg-white/60 rounded-full animate-scroll-down"></div>
        </div>
    </div>

    {{-- Slide progress bar — 4 bars fill in sync with the 12s slide interval --}}
    <div class="absolute bottom-0 left-0 right-0 z-10 flex gap-1 px-4 sm:px-6 lg:px-8 pb-4">
        @foreach($bgImages as $index => $image)
            <div class="flex-1 h-1 bg-white/20 rounded-full overflow-hidden">
                <div class="ken-progress h-full bg-amber-400 rounded-full" data-progress="{{ $index }}"></div>
            </div>
        @endforeach
    </div>
</section>
