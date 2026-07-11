import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { initAnimations } from './animations';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {

    // ============================================
    // KEN BURNS HERO BACKGROUND + TEXT SLIDES
    // ============================================
    // Cycles through 4 bg images every 12s with Ken Burns zoom.
    // Each slide triggers a GSAP timeline: badge → heading → desc → CTA.
    // Progress bars at bottom sync fill-width with the interval.
    const heroSlides = document.querySelectorAll('.ken-burns-slide');
    const textSlides = document.querySelectorAll('.hero-text-slide');
    const progressBars = document.querySelectorAll('.ken-progress');
    let currentSlide = 0;
    const slideInterval = 12000;
    let slideTimer;
    let progressTimer;
    let floatTween;

    function activateSlide(index) {
        const prevIndex = textSlides.length > 0 ? Array.from(textSlides).findIndex(s => s.classList.contains('active')) : -1;

        // Ken Burns background
        heroSlides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
            slide.style.animation = 'none';
            slide.offsetHeight;
            if (i === index) {
                slide.style.animation = 'ken-burns-zoom 12s ease-in-out forwards';
            }
        });

        // Text slides — GSAP transitions
        textSlides.forEach((slide, i) => {
            const badge = slide.querySelector('[data-slide-element="badge"]');
            const heading = slide.querySelector('[data-slide-element="heading"]');
            const desc = slide.querySelector('[data-slide-element="desc"]');

            if (i === index) {
                slide.classList.add('active');
                slide.style.position = 'relative';
                slide.style.pointerEvents = 'auto';

                const cta = document.querySelector('[data-slide-element="cta"]');

                gsap.set([badge, heading, desc, cta], { clearProps: 'all' });
                gsap.set(slide, { clearProps: 'opacity' });

                const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

                tl.fromTo(badge,
                    { y: -30, opacity: 0, scale: 0.8 },
                    { y: 0, opacity: 1, scale: 1, duration: 0.85 }
                )
                .fromTo(heading,
                    { y: 60, opacity: 0, rotateX: 15 },
                    { y: 0, opacity: 1, rotateX: 0, duration: 1.2 },
                    '-=0.35'
                )
                .fromTo(desc,
                    { x: -40, opacity: 0 },
                    { x: 0, opacity: 1, duration: 1.0 },
                    '-=0.45'
                )
                .fromTo(cta,
                    { y: 30, opacity: 0 },
                    { y: 0, opacity: 1, duration: 0.9, stagger: 0.15 },
                    '-=0.4'
                );

                if (floatTween) floatTween.kill();

                floatTween = gsap.to(heading, {
                    y: -12,
                    duration: 3.5,
                    repeat: -1,
                    yoyo: true,
                    ease: 'power1.inOut',
                    delay: 2.2,
                });

            } else if (i === prevIndex && prevIndex !== index) {
                gsap.to([badge, heading, desc], {
                    y: -20,
                    opacity: 0,
                    duration: 0.8,
                    ease: 'power2.inOut',
                    onComplete: () => {
                        slide.classList.remove('active');
                        slide.style.position = 'absolute';
                        slide.style.pointerEvents = 'none';
                    },
                });
            } else {
                slide.classList.remove('active');
                slide.style.position = 'absolute';
                slide.style.pointerEvents = 'none';
                gsap.set([badge, heading, desc], { clearProps: 'all' });
                gsap.set(slide, { opacity: 0 });
            }
        });

        resetProgress();
    }

    // Resets and ticks progress bars every 100ms to fill over 12s
    function resetProgress() {
        progressBars.forEach(bar => bar.style.width = '0%');
        let width = 0;
        const step = 100 / (slideInterval / 100);
        if (progressTimer) clearInterval(progressTimer);
        progressTimer = setInterval(() => {
            width += step;
            progressBars.forEach((bar, i) => {
                if (i === currentSlide) bar.style.width = Math.min(width, 100) + '%';
            });
            if (width >= 100) clearInterval(progressTimer);
        }, 100);
    }

    // Advances to the next slide in a circular loop
    function nextSlide() {
        currentSlide = (currentSlide + 1) % heroSlides.length;
        activateSlide(currentSlide);
    }

    if (heroSlides.length > 0) {
        gsap.set(textSlides, { opacity: 0 });
        textSlides.forEach((s, i) => {
            if (i === 0) {
                s.style.position = 'relative';
                s.style.pointerEvents = 'auto';
            } else {
                s.style.position = 'absolute';
                s.style.pointerEvents = 'none';
            }
        });
        setTimeout(() => {
            activateSlide(0);
            slideTimer = setInterval(nextSlide, slideInterval);
        }, 1000);
    }

    // ============================================
    // HEADER FROSTED GLASS SCROLL EFFECT
    // ============================================
    // Two ScrollTriggers:
    //   1. Tracks .in-hero state while the hero section is visible.
    //   2. Adds .scrolled class when scrolled past 60% of hero height (cap 400px),
    //      triggering the darker glass background in CSS.
    const header = document.getElementById('site-header');
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const menuLines = document.querySelectorAll('.menu-line');
    const heroSection = document.getElementById('hero');

    if (header) {
        if (heroSection) {
            ScrollTrigger.create({
                trigger: heroSection,
                start: 'top top',
                end: 'bottom top',
                onEnter: () => { header.classList.add('in-hero'); },
                onLeave: () => { header.classList.remove('in-hero'); },
                onEnterBack: () => { header.classList.add('in-hero'); },
                onLeaveBack: () => { header.classList.remove('in-hero'); },
            });

            ScrollTrigger.create({
                trigger: heroSection,
                start: 'top top',
                end: `+=${Math.min(heroSection.offsetHeight * 0.6, 400)}`,
                scrub: 0.4,
                onUpdate: (self) => {
                    if (self.progress >= 0.5) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                },
            });
        } else {
            header.classList.add('scrolled');
        }
    }

    // ============================================
    // MOBILE MENU (GSAP Stagger)
    // ============================================
    if (mobileBtn && mobileMenu) {
        const panel = mobileMenu.querySelector('.mobile-menu-panel');
        const links = mobileMenu.querySelectorAll('[data-mobile-link]');
        let menuTween;

        mobileBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('visible');
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', closeMenu);
        }

        const closeBtn = document.getElementById('mobile-menu-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }

        function openMenu() {
            if (menuTween) menuTween.kill();

            mobileMenu.classList.remove('invisible', 'opacity-0');
            mobileMenu.classList.add('visible');
            mobileBtn.setAttribute('aria-expanded', 'true');
            document.body.classList.add('menu-open');
            menuLines.forEach(line => line.classList.add('bg-gray-800'));

            gsap.set(panel, { x: '100%', visibility: 'visible' });
            gsap.set(links, { opacity: 0, x: 30 });
            gsap.set(mobileOverlay, { opacity: 0 });

            menuTween = gsap.timeline();
            menuTween
                .to(mobileOverlay, { opacity: 1, duration: 0.4, ease: 'power2.out' })
                .to(panel, { x: '0%', duration: 0.5, ease: 'power3.out' }, '-=0.3')
                .to(links, { x: 0, opacity: 1, duration: 0.4, stagger: 0.06, ease: 'power2.out' }, '-=0.2');
        }

        function closeMenu() {
            if (menuTween) menuTween.kill();

            mobileBtn.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('menu-open');
            menuLines.forEach(line => line.classList.remove('bg-gray-800'));

            menuTween = gsap.timeline();
            menuTween
                .to(links, { x: 30, opacity: 0, duration: 0.2, stagger: 0.02, ease: 'power2.in' })
                .to(panel, { x: '100%', duration: 0.4, ease: 'power3.in' }, '-=0.1')
                .to(mobileOverlay, { opacity: 0, duration: 0.3, ease: 'power2.in' }, '-=0.3')
                .call(() => {
                    mobileMenu.classList.add('invisible', 'opacity-0');
                    mobileMenu.classList.remove('visible');
                });
        }

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', (e) => {
                if (link.getAttribute('href') && !link.getAttribute('href').startsWith('#')) {
                    mobileMenu.classList.add('invisible', 'opacity-0');
                    mobileMenu.classList.remove('visible');
                    document.body.classList.remove('menu-open');
                    mobileBtn.setAttribute('aria-expanded', 'false');
                } else {
                    closeMenu();
                }
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('visible')) {
                closeMenu();
            }
        });
    }

    // ============================================
    // GALLERY FILTER
    // ============================================
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        item.classList.remove('hidden');
                        item.style.position = 'relative';
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    }

    // ============================================
    // LIGHTBOX
    // ============================================
    const lightboxTriggers = document.querySelectorAll('[data-lightbox]');
    let lightboxEl = document.getElementById('lightbox');

    if (lightboxTriggers.length > 0 && !lightboxEl) {
        lightboxEl = document.createElement('div');
        lightboxEl.id = 'lightbox';
        lightboxEl.className = 'fixed inset-0 z-[100] flex items-center justify-center invisible opacity-0 transition-all duration-500 lightbox-overlay bg-black/85';
        lightboxEl.innerHTML = `
            <button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20 transition-colors z-10" id="lightbox-close">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <button class="absolute left-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 items-center justify-center text-white hover:bg-white/20 transition-colors z-10 hidden sm:flex" id="lightbox-prev">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button class="absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 items-center justify-center text-white hover:bg-white/20 transition-colors z-10 hidden sm:flex" id="lightbox-next">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
            <div class="relative flex items-center justify-center p-4 w-full max-w-5xl max-h-[85vh]">
                <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[85vh] object-contain rounded-2xl shadow-2xl">
                <div id="lightbox-caption" class="absolute bottom-0 left-0 right-0 text-center text-white/80 text-sm py-4 bg-gradient-to-t from-black/60 to-transparent rounded-b-2xl px-6"></div>
            </div>
        `;
        document.body.appendChild(lightboxEl);
    }

    if (lightboxEl) {
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const lightboxClose = document.getElementById('lightbox-close');
        const lightboxPrev = document.getElementById('lightbox-prev');
        const lightboxNext = document.getElementById('lightbox-next');
        let currentLightboxIndex = 0;
        let lightboxItems = [];

        function openLightbox(index) {
            currentLightboxIndex = index;
            const item = lightboxItems[index];
            if (!item) return;
            lightboxImg.src = item.img;
            lightboxImg.alt = item.caption;
            lightboxCaption.textContent = item.caption;
            lightboxEl.classList.remove('invisible', 'opacity-0');
            document.body.style.overflow = 'hidden';

            const isMobile = window.innerWidth < 640;
            lightboxPrev.style.display = (!isMobile && lightboxItems.length > 1) ? 'flex' : 'none';
            lightboxNext.style.display = (!isMobile && lightboxItems.length > 1) ? 'flex' : 'none';
        }

        function closeLightbox() {
            lightboxEl.classList.add('invisible', 'opacity-0');
            document.body.style.overflow = '';
        }

        function prevLightbox() {
            currentLightboxIndex = (currentLightboxIndex - 1 + lightboxItems.length) % lightboxItems.length;
            const item = lightboxItems[currentLightboxIndex];
            lightboxImg.src = item.img;
            lightboxImg.alt = item.caption;
            lightboxCaption.textContent = item.caption;
        }

        function nextLightbox() {
            currentLightboxIndex = (currentLightboxIndex + 1) % lightboxItems.length;
            const item = lightboxItems[currentLightboxIndex];
            lightboxImg.src = item.img;
            lightboxImg.alt = item.caption;
            lightboxCaption.textContent = item.caption;
        }

        document.querySelectorAll('[data-lightbox]').forEach((trigger, index) => {
            const img = trigger.querySelector('img');
            const caption = trigger.getAttribute('data-caption') || trigger.querySelector('.gallery-item-title')?.textContent || '';
            lightboxItems.push({
                img: trigger.getAttribute('data-src') || img?.src || '',
                caption: caption
            });
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                openLightbox(index);
            });
        });

        if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        if (lightboxPrev) lightboxPrev.addEventListener('click', prevLightbox);
        if (lightboxNext) lightboxNext.addEventListener('click', nextLightbox);

        lightboxEl.addEventListener('click', (e) => {
            if (e.target === lightboxEl) closeLightbox();
        });

        document.addEventListener('keydown', (e) => {
            const isHidden = lightboxEl.classList.contains('invisible');
            if (!isHidden) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') prevLightbox();
                if (e.key === 'ArrowRight') nextLightbox();
            }
        });
    }

    // ============================================
    // FORM VALIDATION
    // ============================================
    const forms = document.querySelectorAll('form[data-validate]');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            let valid = true;
            const required = form.querySelectorAll('[required]');
            required.forEach(field => {
                const value = field.value.trim();
                const errorEl = field.closest('.form-group')?.querySelector('.form-error');
                if (!value) {
                    field.classList.add('error');
                    if (errorEl) errorEl.textContent = 'This field is required';
                    valid = false;
                } else {
                    field.classList.remove('error');
                    if (errorEl) errorEl.textContent = '';
                    if (field.type === 'email' && !/\S+@\S+\.\S+/.test(value)) {
                        field.classList.add('error');
                        if (errorEl) errorEl.textContent = 'Please enter a valid email';
                        valid = false;
                    }
                }
            });
            if (!valid) e.preventDefault();
        });

        form.querySelectorAll('.form-input').forEach(field => {
            field.addEventListener('input', () => {
                if (field.value.trim()) {
                    field.classList.remove('error');
                    const errorEl = field.closest('.form-group')?.querySelector('.form-error');
                    if (errorEl) errorEl.textContent = '';
                }
            });
        });
    });

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        const href = anchor.getAttribute('href');
        if (!href || href === '#' || anchor.hasAttribute('data-donate-modal') || (anchor.hasAttribute('data-mobile-link') && anchor.getAttribute('href') === '#')) {
            return;
        }
        anchor.addEventListener('click', (e) => {
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ============================================
    // BACK TO TOP
    // ============================================
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }, { passive: true });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ============================================
    // WHATSAPP FLOATING BUTTON
    // ============================================
    const whatsappBtn = document.getElementById('whatsapp-btn');
    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', () => {
            window.open('https://wa.me/256393249878', '_blank', 'noopener,noreferrer');
        });
    }

    // Language switching disabled - English only

    // ============================================
    // DONATION MODAL
    // ============================================
    const donateBtns = document.querySelectorAll('[data-donate-modal]');
    const donateModal = document.getElementById('donate-modal');
    const donateOverlay = document.getElementById('donate-overlay');
    const donateClose = document.getElementById('donate-close');

    if (donateModal && donateOverlay) {
        function openDonateModal() {
            donateModal.classList.remove('invisible', 'opacity-0');
            donateModal.querySelector('div:last-child')?.classList.remove('scale-90');
            document.body.style.overflow = 'hidden';
            resetDonateSteps();
        }

        function closeDonateModal() {
            donateModal.querySelector('div:last-child')?.classList.add('scale-90');
            donateModal.classList.add('invisible', 'opacity-0');
            document.body.style.overflow = '';
        }

        function resetDonateSteps() {
            document.querySelectorAll('.donate-step').forEach(step => {
                step.classList.add('hidden');
            });
            const step1 = document.getElementById('donate-step-1');
            if (step1) step1.classList.remove('hidden');
            document.querySelectorAll('[data-donate-provider]').forEach(b => b.classList.remove('active'));
            const form = document.getElementById('donate-momo-form');
            if (form) form.reset();
        }

        function goToDonateStep(stepNum, provider) {
            document.querySelectorAll('.donate-step').forEach(s => s.classList.add('hidden'));
            const target = document.getElementById('donate-step-' + stepNum);
            if (target) target.classList.remove('hidden');

            if (stepNum === 3 && provider) {
                const isMtn = provider === 'mtn';
                const icon = document.getElementById('donate-provider-icon');
                const name = document.getElementById('donate-provider-name');
                const code = document.getElementById('donate-ussd-code');

                if (icon) {
                    icon.className = 'w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg';
                    icon.classList.add(isMtn ? 'bg-yellow-50' : 'bg-red-50');
                    icon.classList.add(isMtn ? 'text-yellow-600' : 'text-red-600');
                    icon.textContent = isMtn ? 'MTN' : 'Airtel';
                }
                if (name) name.textContent = isMtn ? 'MTN Mobile Money' : 'Airtel Money';
                if (code) code.textContent = isMtn ? '*165#' : '*185#';
            }
        }

        donateBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                openDonateModal();
            });
        });

        document.querySelectorAll('[data-donate-goto]').forEach(btn => {
            btn.addEventListener('click', () => {
                const step = parseInt(btn.getAttribute('data-donate-goto'));
                const provider = btn.getAttribute('data-donate-provider');
                document.querySelectorAll('[data-donate-provider]').forEach(b => b.classList.remove('active'));
                if (provider) btn.classList.add('active');
                goToDonateStep(step, provider);
            });
        });

        if (donateClose) donateClose.addEventListener('click', closeDonateModal);
        donateOverlay.addEventListener('click', closeDonateModal);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !donateModal.classList.contains('invisible')) {
                closeDonateModal();
            }
        });

        // MoMo form submit → generate receipt
        const momoForm = document.getElementById('donate-momo-form');
        if (momoForm) {
            momoForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const name = document.getElementById('donor-name').value.trim();
                const phone = document.getElementById('donor-phone').value.trim();
                const amount = document.getElementById('donor-amount').value;
                const reference = document.getElementById('donor-reference').value.trim();

                if (!name || !phone || !amount || !reference) return;

                const selectedProvider = document.querySelector('[data-donate-provider].active')?.getAttribute('data-donate-provider') || 'mtn';
                const providerLabel = selectedProvider === 'mtn' ? 'MTN Mobile Money' : 'Airtel Money';
                const transactionId = 'CFU' + Date.now().toString(36).toUpperCase() + Math.random().toString(36).substring(2, 6).toUpperCase();
                const now = new Date();
                const dateStr = now.toLocaleDateString('en-UG', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' });

                document.getElementById('receipt-name').textContent = name;
                document.getElementById('receipt-phone').textContent = phone;
                document.getElementById('receipt-amount').textContent = 'UGX ' + parseInt(amount).toLocaleString();
                document.getElementById('receipt-method').textContent = providerLabel;
                document.getElementById('receipt-reference').textContent = reference;
                document.getElementById('receipt-transaction-id').textContent = transactionId;
                document.getElementById('receipt-date').textContent = dateStr;

                goToDonateStep(4);
            });
        }

        // Print receipt
        const printBtn = document.getElementById('donate-print-receipt');
        if (printBtn) {
            printBtn.addEventListener('click', () => {
                window.print();
            });
        }
    }

    // ============================================
    // NEWSLETTER FORM
    // ============================================
    const newsletterForm = document.getElementById('newsletter-form');
    const newsletterSuccess = document.getElementById('newsletter-success');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = newsletterForm.querySelector('input[type="email"]').value;
            if (email && /\S+@\S+\.\S+/.test(email)) {
                newsletterForm.classList.add('hidden');
                if (newsletterSuccess) {
                    newsletterSuccess.classList.remove('hidden');
                }
            }
        });
    }

    // ============================================
    // INITIALIZE GSAP ANIMATIONS
    // ============================================
    initAnimations();

    console.log('Community First Uganda — site initialized');
});
