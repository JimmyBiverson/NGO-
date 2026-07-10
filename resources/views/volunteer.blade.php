@extends('layouts.app')

@section('title', 'Volunteer')
@section('description', 'Join Community First Uganda as a volunteer. Make a meaningful difference in the lives of vulnerable communities in Kampala, Uganda.')

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 z-[1] bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=1920&q=85');"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">Join Our Mission</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                Volunteer With<br><span class="text-amber-400">Community First Uganda</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                Make a meaningful difference in the lives of vulnerable communities. Your time, skills, and passion can help transform lives and build stronger communities.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8 reveal">
                <a href="#opportunities" class="magnetic-btn inline-flex items-center gap-2 px-6 py-3 rounded-full text-forest-900 font-semibold text-sm bg-white transition-all duration-300 hover:bg-amber-50">View Opportunities</a>
                <a href="#apply" class="magnetic-btn inline-flex items-center gap-2 px-6 py-3 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10">Apply Now</a>
            </div>
        </div>
    </section>

    {{-- Why Volunteer --}}
    {{-- Benefits list with checkmark icons. Image uses clip-reveal circle animation. --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="reveal-left">
                    <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Why Volunteer</span>
                    <h2 class="section-title mb-6">Make a Real <span class="text-forest-700">Difference</span></h2>
                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed">Volunteering with Community First Uganda is an opportunity to directly impact the lives of vulnerable communities in Kampala. Whether you're teaching English, leading a fitness session, or helping with administrative tasks, your contribution matters.</p>
                        <div class="space-y-3">
                            @php
                                $benefits = [
                                    'Direct impact on vulnerable communities',
                                    'Flexible scheduling to fit your availability',
                                    'Gain valuable experience in community development',
                                    'Be part of a diverse, welcoming team',
                                    'Certificate of service provided',
                                    'References for future opportunities'
                                ];
                            @endphp
                            @foreach($benefits as $benefit)
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-forest-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-sm text-gray-700">{{ $benefit }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="reveal-right">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?w=800&q=85"
                             alt="Volunteer"
                             loading="lazy"
                             class="w-full h-[400px] object-cover clip-reveal"
                             onerror="this.parentElement.style.backgroundColor='#0B2B1D'; this.style.display='none';">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Opportunities --}}
    <section id="opportunities" class="py-16 sm:py-20 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Volunteer Roles</span>
                <h2 class="section-title mb-4">Volunteer <span class="text-forest-700">Opportunities</span></h2>
                <p class="section-subtitle mx-auto">Choose from various volunteer roles that match your skills, interests, and availability.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 stagger-children">
                @php
                    $roles = [
                        [
                            'title' => 'Education Support Volunteer',
                            'hours' => '4-6 hours/week',
                            'location' => 'Community Center, Kampala',
                            'desc' => 'Help teach English, computer skills, and provide homework support to community members of all ages.',
                            'requirements' => ['Basic English proficiency', 'Patience and empathy', 'Commitment to regular schedule', 'Interest in teaching'],
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 4.5 7.5 4.5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 17.5 7.5 17.5s3.332.977 4.5 1.753m0-13C13.168 5.477 14.754 4.5 16.5 4.5c1.747 0 3.332.977 4.5 1.753v13C19.832 18.477 18.247 17.5 16.5 17.5c-1.746 0-3.332.977-4.5 1.753"/></svg>',
                        ],
                        [
                            'title' => 'Healthcare Assistant',
                            'hours' => '2-3 hours/month',
                            'location' => 'Various Community Locations',
                            'desc' => 'Support our medical camps and health awareness programs in the community.',
                            'requirements' => ['Interest in healthcare', 'Good communication skills', 'Flexibility with schedule', 'Team collaboration'],
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>',
                        ],
                        [
                            'title' => 'Sports & Recreation Coordinator',
                            'hours' => '1-3 hours/week',
                            'location' => 'Community Sports Grounds',
                            'desc' => 'Lead futsal training sessions, aerobics classes, and organize youth sports activities.',
                            'requirements' => ['Sports background preferred', 'Leadership skills', 'Youth mentoring experience', 'Energy and enthusiasm'],
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                        ],
                        [
                            'title' => 'Skills Development Trainer',
                            'hours' => '4-5 hours/week',
                            'location' => 'Community Center',
                            'desc' => 'Teach vocational skills like crocheting, tailoring, henna art, or soap making to community members.',
                            'requirements' => ['Proficiency in a vocational skill', 'Patience in teaching', 'Creative mindset', 'Commitment to regular schedule'],
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>',
                        ],
                        [
                            'title' => 'Administrative Support',
                            'hours' => '3-5 hours/week',
                            'location' => 'Community Center',
                            'desc' => 'Assist with record keeping, data entry, communication, and general administrative tasks.',
                            'requirements' => ['Basic computer skills', 'Organizational abilities', 'Attention to detail', 'Reliability'],
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>',
                        ],
                        [
                            'title' => 'Community Outreach Volunteer',
                            'hours' => '2-4 hours/week',
                            'location' => 'Various Locations',
                            'desc' => 'Help with community mobilization, awareness campaigns, and home welfare visits.',
                            'requirements' => ['Good interpersonal skills', 'Knowledge of local area', 'Compassionate approach', 'Flexibility'],
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
                        ],
                    ];
                @endphp

                @foreach($roles as $role)
                    <div class="stagger-item group card-hover tilt-card bg-white rounded-2xl p-7 border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-xl bg-forest-50 flex items-center justify-center text-forest-700 mb-4 group-hover:bg-forest-100 group-hover:scale-110 transition-all duration-300">{!! $role['icon'] !!}</div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-xs font-semibold bg-forest-50 text-forest-700 px-3 py-1 rounded-full">{{ $role['hours'] }}</span>
                            <span class="text-xs text-gray-400">{{ $role['location'] }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $role['title'] }}</h3>
                        <p class="text-sm text-gray-600 mb-4">{{ $role['desc'] }}</p>
                        <div class="mb-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-500 mb-2 block">Requirements:</span>
                            <ul class="space-y-1.5">
                                @foreach($role['requirements'] as $req)
                                    <li class="flex items-center gap-2 text-sm text-gray-700">
                                        <svg class="w-4 h-4 text-forest-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        {{ $req }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <a href="#apply" class="inline-flex items-center gap-1.5 text-sm font-semibold text-forest-700 hover:text-amber-600 transition-colors">
                            Apply for This Role
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal bg-forest-50 rounded-2xl p-8 lg:p-12 text-center">
                <div class="w-16 h-16 rounded-full overflow-hidden mx-auto mb-4 shadow-md ring-2 ring-white">
                    <img src="https://images.unsplash.com/photo-1548625149-fc4a29cf7092?w=150&q=85&fit=crop&crop=face"
                         alt="Sarah, Education Volunteer"
                         loading="lazy"
                         class="w-full h-full object-cover"
                         onerror="this.parentElement.className='w-16 h-16 rounded-full bg-amber-100 mx-auto mb-4 flex items-center justify-center'; this.outerHTML='<svg class=\'w-8 h-8 text-amber-400\' fill=\'currentColor\' viewBox=\'0 0 24 24\'><path d=\'M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z\'/></svg>'">
                </div>
                <blockquote class="text-lg sm:text-xl text-gray-700 font-serif italic leading-relaxed mb-6">
                    &ldquo;Volunteering at Community First Uganda has been one of the most rewarding experiences. Seeing the smiles on the children's faces when they learn something new — that's what keeps me coming back.&rdquo;
                </blockquote>
                <div class="font-semibold text-forest-700">— Sarah, Education Volunteer</div>
            </div>
        </div>
    </section>

    {{-- Application Form --}}
    {{-- Client-side validation via form[data-validate]. POST to route('volunteer.submit'). --}}
    <section id="apply" class="py-16 sm:py-20 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-600 bg-amber-50 px-4 py-1.5 rounded-full mb-4">Apply</span>
                <h2 class="section-title mb-4">Apply to <span class="text-forest-700">Volunteer</span></h2>
                <p class="text-gray-600">Fill out this form and we'll get back to you within 48 hours.</p>
            </div>

            <div class="reveal bg-white rounded-2xl p-8 lg:p-10 shadow-sm border border-gray-100">
                <form method="POST" action="{{ route('volunteer.submit') }}" data-validate class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required class="form-input" placeholder="Your full name">
                            <span class="form-error text-xs text-red-500 mt-1 block"></span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required class="form-input" placeholder="your@email.com">
                            <span class="form-error text-xs text-red-500 mt-1 block"></span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" required class="form-input" placeholder="+256 XXX XXX XXX">
                            <span class="form-error text-xs text-red-500 mt-1 block"></span>
                        </div>
                        <div class="form-group">
                            <label for="program" class="form-label">Preferred Program <span class="text-red-500">*</span></label>
                            <select id="program" name="program" required class="form-input appearance-none bg-white">
                                <option value="">Select a program</option>
                                <option value="education">Education Support Volunteer</option>
                                <option value="healthcare">Healthcare Assistant</option>
                                <option value="sports">Sports & Recreation Coordinator</option>
                                <option value="skills">Skills Development Trainer</option>
                                <option value="admin">Administrative Support</option>
                                <option value="outreach">Community Outreach Volunteer</option>
                            </select>
                            <span class="form-error text-xs text-red-500 mt-1 block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="experience" class="form-label">Relevant Experience</label>
                        <textarea id="experience" name="experience" rows="3" class="form-input" placeholder="Tell us about any relevant experience, skills, or qualifications..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="motivation" class="form-label">Why do you want to volunteer with us? <span class="text-red-500">*</span></label>
                        <textarea id="motivation" name="motivation" rows="4" required class="form-input" placeholder="Share your motivation for volunteering and what you hope to contribute..."></textarea>
                        <span class="form-error text-xs text-red-500 mt-1 block"></span>
                    </div>

                    <div class="form-group">
                        <label for="availability" class="form-label">Availability <span class="text-red-500">*</span></label>
                        <textarea id="availability" name="availability" rows="2" required class="form-input" placeholder="When are you available? (days, times, how often...)"></textarea>
                        <span class="form-error text-xs text-red-500 mt-1 block"></span>
                    </div>

                    <button type="submit"
                            class="magnetic-btn w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm transition-all duration-300 donate-btn shadow-lg hover:shadow-xl">
                        <span>Submit Application</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                </form>
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
                <p class="text-white/70 text-lg mb-8">Join our community of volunteers and help us create lasting positive change in Uganda.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-forest-900 font-semibold text-sm bg-white transition-all duration-300 hover:bg-amber-50">Get in Touch</a>
                    <a href="{{ route('programs') }}" class="magnetic-btn inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm border-2 border-white/30 transition-all duration-300 hover:bg-white/10">Learn About Our Programs</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
