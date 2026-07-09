import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { MotionPathPlugin } from 'gsap/MotionPathPlugin';

gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

export function initAnimations() {

    // ============================================
    // SMOOTH SCROLL PROGRESS BAR
    // ============================================
    const progressBar = document.getElementById('scroll-progress');
    if (progressBar) {
        gsap.to(progressBar, {
            scaleX: 1,
            ease: 'none',
            scrollTrigger: {
                trigger: document.body,
                start: 'top top',
                end: 'bottom bottom',
                scrub: 0.3,
            },
        });
    }

    // ============================================
    // PAGE LOADER / ENTRANCE
    // ============================================
    const loader = document.getElementById('page-loader');
    if (loader) {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
        tl.to('.loader-logo', {
            scale: 1.2,
            duration: 0.6,
            ease: 'back.out(2)',
        })
        .to('.loader-logo', {
            scale: 0.8,
            opacity: 0,
            duration: 0.3,
        })
        .to(loader, {
            opacity: 0,
            duration: 0.5,
            onComplete: () => { loader.style.display = 'none'; },
        }, '-=0.1')
        .from('header', {
            y: -60,
            opacity: 0,
            duration: 0.6,
        }, '-=0.1')
        .from('.hero-reveal', {
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.12,
            ease: 'power3.out',
        }, '-=0.3');
    } else {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
        tl.from('header', {
            y: -60,
            opacity: 0,
            duration: 0.6,
        })
        .from('.hero-reveal', {
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.12,
            ease: 'power3.out',
        }, '-=0.3');
    }

    // ============================================
    // SPLIT TEXT REVEAL — targets elements with .split-text
    // ============================================
    function splitText(el) {
        const text = el.innerText;
        el.innerHTML = text.split('').map(char =>
            char === ' ' ? ' ' : `<span class="split-char">${char}</span>`
        ).join('');
    }

    document.querySelectorAll('.split-text').forEach(el => {
        splitText(el);
        const chars = el.querySelectorAll('.split-char');
        gsap.from(chars, {
            y: '100%',
            opacity: 0,
            rotateX: -90,
            duration: 0.6,
            stagger: 0.02,
            ease: 'back.out(1.7)',
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                toggleActions: 'play none none none',
            },
        });
    });

    // ============================================
    // SCROLL REVEAL — fade in up with GSAP
    // ============================================
    document.querySelectorAll('.reveal').forEach((el, i) => {
        ScrollTrigger.create({
            trigger: el,
            start: 'top 88%',
            onEnter: () => {
                gsap.to(el, {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    delay: i * 0.05,
                });
            },
            once: true,
        });
    });

    document.querySelectorAll('.reveal-left').forEach((el, i) => {
        ScrollTrigger.create({
            trigger: el,
            start: 'top 88%',
            onEnter: () => {
                gsap.to(el, {
                    x: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    delay: i * 0.05,
                });
            },
            once: true,
        });
    });

    document.querySelectorAll('.reveal-right').forEach((el, i) => {
        ScrollTrigger.create({
            trigger: el,
            start: 'top 88%',
            onEnter: () => {
                gsap.to(el, {
                    x: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    delay: i * 0.05,
                });
            },
            once: true,
        });
    });

    document.querySelectorAll('.reveal-scale').forEach((el, i) => {
        ScrollTrigger.create({
            trigger: el,
            start: 'top 85%',
            onEnter: () => {
                gsap.to(el, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'back.out(1.7)',
                    delay: i * 0.05,
                });
            },
            once: true,
        });
    });

    // ============================================
    // STAGGER CHILDREN
    // ============================================
    document.querySelectorAll('.stagger-children').forEach(parent => {
        const items = parent.querySelectorAll('.stagger-item');
        if (items.length === 0) return;
        ScrollTrigger.create({
            trigger: parent,
            start: 'top 85%',
            onEnter: () => {
                gsap.to(items, {
                    y: 0,
                    opacity: 1,
                    duration: 0.6,
                    stagger: 0.08,
                    ease: 'back.out(1.4)',
                });
            },
            once: true,
        });
    });

    // ============================================
    // IMAGE CLIP REVEAL — images with class .clip-reveal
    // ============================================
    document.querySelectorAll('.clip-reveal').forEach(el => {
        gsap.set(el, { clipPath: 'circle(0% at 50% 50%)' });
        ScrollTrigger.create({
            trigger: el,
            start: 'top 85%',
            onEnter: () => {
                gsap.to(el, {
                    clipPath: 'circle(100% at 50% 50%)',
                    duration: 1.2,
                    ease: 'power4.out',
                });
            },
            once: true,
        });
    });

    // ============================================
    // PARALLAX SECTIONS — elements with .parallax-bg
    // ============================================
    document.querySelectorAll('.parallax-bg').forEach(el => {
        gsap.to(el, {
            y: '30%',
            ease: 'none',
            scrollTrigger: {
                trigger: el.parentElement,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1,
            },
        });
    });

    // ============================================
    // COUNTER ANIMATION with GSAP
    // ============================================
    document.querySelectorAll('.counter-number').forEach(el => {
        const target = parseInt(el.getAttribute('data-target'));
        if (isNaN(target)) return;
        ScrollTrigger.create({
            trigger: el,
            start: 'top 85%',
            onEnter: () => {
                gsap.from(el, {
                    textContent: 0,
                    duration: 2,
                    ease: 'power2.out',
                    snap: { textContent: 1 },
                    modifiers: {
                        textContent: (val) => Math.round(parseFloat(val)).toString(),
                    },
                    onComplete: () => {
                        if (target >= 1000) {
                            el.textContent = target.toLocaleString();
                        } else {
                            el.textContent = target;
                        }
                    },
                });
            },
            once: true,
        });
    });

    // ============================================
    // 3D TILT ON CARDS — .tilt-card
    // ============================================
    document.querySelectorAll('.tilt-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 12;
            const rotateY = (centerX - x) / 12;

            gsap.to(card, {
                rotateX,
                rotateY,
                transformPerspective: 1000,
                duration: 0.4,
                ease: 'power2.out',
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                rotateX: 0,
                rotateY: 0,
                duration: 0.6,
                ease: 'elastic.out(1, 0.4)',
            });
        });
    });

    // ============================================
    // MAGNETIC BUTTONS — .magnetic-btn
    // ============================================
    document.querySelectorAll('.magnetic-btn').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            gsap.to(btn, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.4,
                ease: 'power2.out',
            });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.6,
                ease: 'elastic.out(1, 0.3)',
            });
        });
    });

    // ============================================
    // CUSTOM CURSOR — .custom-cursor (desktop only)
    // ============================================
    const cursor = document.getElementById('custom-cursor');
    const cursorDot = document.getElementById('cursor-dot');
    if (cursor && !('ontouchstart' in window)) {
        document.body.style.cursor = 'none';

        const pos = { x: 0, y: 0 };
        const mouse = { x: 0, y: 0 };

        document.addEventListener('mousemove', (e) => {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        });

        gsap.ticker.add(() => {
            pos.x += (mouse.x - pos.x) * 0.12;
            pos.y += (mouse.y - pos.y) * 0.12;

            gsap.set(cursor, { x: pos.x - 20, y: pos.y - 20 });
            if (cursorDot) {
                gsap.set(cursorDot, { x: mouse.x - 4, y: mouse.y - 4 });
            }
        });

        document.querySelectorAll('a, button, .tilt-card, .card-hover, input, textarea, select').forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(cursor, { scale: 1.8, backgroundColor: 'rgba(251, 191, 36, 0.15)', borderColor: 'rgba(251, 191, 36, 0.5)', duration: 0.3 });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(cursor, { scale: 1, backgroundColor: 'rgba(255,255,255,0.05)', borderColor: 'rgba(255,255,255,0.2)', duration: 0.3 });
            });
        });
    }

    // ============================================
    // MORPHING SVG SHAPES — .morph-shape svg
    // ============================================
    document.querySelectorAll('.morph-shape svg path').forEach(path => {
        const shapes = ['M0,0 C20,30 50,20 70,0 Z', 'M0,0 C30,10 40,40 70,0 Z', 'M0,0 C10,40 60,30 70,0 Z'];
        let index = 0;
        setInterval(() => {
            index = (index + 1) % shapes.length;
            gsap.to(path, {
                attr: { d: shapes[index] },
                duration: 3,
                ease: 'sine.inOut',
            });
        }, 4000);
    });

    // ============================================
    // HERO PARALLAX MOUSE TRACKING
    // ============================================
    const hero = document.getElementById('hero');
    if (hero) {
        const heroBg = hero.querySelector('.ken-burns-container');
        hero.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 10;
            const y = (e.clientY / window.innerHeight - 0.5) * 10;
            if (heroBg) {
                gsap.to(heroBg, { x, y, duration: 1.5, ease: 'power2.out' });
            }
        });
    }

    // ============================================
    // FLOATING PARTICLES — .particle-container
    // ============================================
    document.querySelectorAll('.particle-container').forEach(container => {
        const count = 25;
        for (let i = 0; i < count; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            const size = Math.random() * 4 + 2;
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.background = `hsla(${Math.random() * 60 + 30}, 70%, 60%, 0.3)`;
            particle.style.borderRadius = '50%';
            particle.style.position = 'absolute';
            particle.style.pointerEvents = 'none';

            container.appendChild(particle);

            gsap.to(particle, {
                y: -100 - Math.random() * 200,
                x: (Math.random() - 0.5) * 100,
                opacity: 0,
                duration: 3 + Math.random() * 4,
                repeat: -1,
                delay: Math.random() * 4,
                ease: 'power1.out',
            });
        }
    });

    console.log('GSAP animations initialized');
}
