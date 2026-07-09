@extends('layouts.app')

@section('title', 'FAQ — Frequently Asked Questions')
@section('description', 'Frequently asked questions about Community First Uganda — volunteering, donations, programs, and how we serve the community.')

@push('scripts')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @php
            $faqs_schema = [
                ['q' => 'What is Community First Uganda?', 'a' => 'Community First Uganda is a non-profit organization dedicated to empowering vulnerable and marginalized communities in Uganda through education, healthcare, sports, community services, and livelihood support.'],
                ['q' => 'How can I volunteer?', 'a' => 'You can sign up through our Volunteer page, or contact us directly via email or WhatsApp. We offer both short-term and long-term volunteering opportunities.'],
                ['q' => 'Where do donations go?', 'a' => 'Your donations directly fund our programs including education materials, healthcare supplies, sports equipment, community outreach, and livelihood training.'],
                ['q' => 'What programs do you offer?', 'a' => 'We run four main programs: Literacy & Development, Sports & Social Engagements, Community Services, and Livelihood Support.'],
                ['q' => 'How are you funded?', 'a' => 'We are funded through donations from individuals and organizations, fundraising events, and small grants.'],
                ['q' => 'Can I visit the community center?', 'a' => 'Absolutely! Please contact us in advance to arrange a tour.'],
                ['q' => 'Do you work with other organizations?', 'a' => 'Yes, we actively collaborate with local and international organizations, government agencies, and community groups.'],
            ];
        @endphp
        @foreach($faqs_schema as $i => $item)
        {
            "@type": "Question",
            "name": "{{ $item['q'] }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ $item['a'] }}"
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endpush

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">Got Questions?</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                FAQ<br><span class="text-amber-400">Frequently Asked Questions</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                Frequently asked questions about Community First Uganda.
            </p>
        </div>
    </section>

    {{-- FAQ Content --}}
    <section class="py-16 sm:py-20 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Category Tabs --}}
            @php
                $categories = ['General', 'Volunteering', 'Donations', 'Programs'];
            @endphp
            <div class="flex flex-wrap justify-center gap-2 mb-12 reveal">
                <button class="faq-tab-btn active px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="all">All</button>
                @foreach($categories as $cat)
                    <button class="faq-tab-btn px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="{{ strtolower($cat) }}">{{ $cat }}</button>
                @endforeach
            </div>

            @php
                $faqs = [
                    ['q' => 'What is Community First Uganda?', 'a' => 'Community First Uganda is a non-profit organization dedicated to empowering vulnerable and marginalized communities in Uganda. We focus on education, healthcare, sports, community services, and livelihood support to help individuals and families live holistically improved lives.', 'category' => 'general'],
                    ['q' => 'How can I volunteer?', 'a' => 'We welcome both local and international volunteers! You can sign up through our Volunteer page, or contact us directly via email or WhatsApp. We offer both short-term and long-term volunteering opportunities across our programs.', 'category' => 'volunteering'],
                    ['q' => 'Where do donations go?', 'a' => 'Your donations directly fund our programs and operational costs. We ensure transparency and accountability — every contribution goes toward education materials, healthcare supplies, sports equipment, community outreach, and livelihood training for those in need.', 'category' => 'donations'],
                    ['q' => 'What programs do you offer?', 'a' => 'We run four main program areas: Literacy & Development (English classes, computer training, tutoring), Sports & Social Engagements (futsal, aerobics, community events), Community Services (home welfare visits, medical outreaches, HIV/AIDS counseling), and Livelihood Support (tailoring, crafts, skills training).', 'category' => 'programs'],
                    ['q' => 'How are you funded?', 'a' => 'We are funded through donations from individuals and organizations, fundraising events, and small grants. We also receive support from local businesses and community partners who share our mission.', 'category' => 'general'],
                    ['q' => 'Can I visit the community center?', 'a' => 'Absolutely! We welcome visitors to our community center. Please contact us in advance to arrange a tour so we can ensure a meaningful experience. You can email us or reach out on WhatsApp to schedule your visit.', 'category' => 'general'],
                    ['q' => 'Do you work with other organizations?', 'a' => 'Yes, we actively collaborate with local and international organizations, government agencies, schools, and community groups to maximize our impact. Partnerships are essential to expanding our reach and resources.', 'category' => 'general'],
                ];
            @endphp

            <div class="space-y-3 stagger-children" id="faq-list">
                @foreach($faqs as $index => $faq)
                    <div class="stagger-item faq-item bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden" data-category="{{ $faq['category'] }}">
                        <button class="faq-question w-full flex items-center justify-between text-left p-5 lg:p-6 cursor-pointer transition-colors duration-300 hover:bg-gray-50" aria-expanded="false">
                            <span class="text-base lg:text-lg font-semibold text-gray-900 pr-4">{{ $faq['q'] }}</span>
                            <svg class="faq-icon w-5 h-5 lg:w-6 lg:h-6 text-amber-600 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 lg:px-6 pb-5 lg:pb-6">
                                <p class="text-gray-600 leading-relaxed">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var answer = this.nextElementSibling;
            var icon = this.querySelector('.faq-icon');
            var isOpen = this.getAttribute('aria-expanded') === 'true';

            document.querySelectorAll('.faq-question').forEach(function (other) {
                if (other !== btn && other.getAttribute('aria-expanded') === 'true') {
                    other.setAttribute('aria-expanded', 'false');
                    other.nextElementSibling.style.maxHeight = '0';
                    other.querySelector('.faq-icon').classList.remove('rotate-180');
                }
            });

            if (isOpen) {
                this.setAttribute('aria-expanded', 'false');
                answer.style.maxHeight = '0';
                icon.classList.remove('rotate-180');
            } else {
                this.setAttribute('aria-expanded', 'true');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            }
        });
    });

    var tabBtns = document.querySelectorAll('.faq-tab-btn');
    var faqItems = document.querySelectorAll('.faq-item');
    tabBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            tabBtns.forEach(function (b) {
                b.classList.remove('active');
                b.classList.add('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
            });
            this.classList.remove('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
            this.classList.add('active');

            var tab = this.getAttribute('data-tab');
            faqItems.forEach(function (item) {
                if (tab === 'all' || item.getAttribute('data-category') === tab) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endpush
