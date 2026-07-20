// Sticky Nav Logic
const nav = document.getElementById('main-nav');
const navBg = document.getElementById('nav-bg');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        if(nav) {
            nav.classList.add('py-4');
            nav.classList.remove('py-6');
        }
        if(navBg) {
            navBg.classList.add('opacity-100');
            navBg.classList.remove('opacity-0');
        }
    } else {
        if(nav) {
            nav.classList.add('py-6');
            nav.classList.remove('py-4');
        }
        if(navBg) {
            navBg.classList.add('opacity-0');
            navBg.classList.remove('opacity-100');
        }
    }
});

// Active Navigation Link Highlighting on Scroll
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll("#desktop-menu a, #mobile-menu a");

window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= sectionTop - 200) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("text-blue-400", "font-bold");
        link.classList.add("text-slate-300");
        if (link.getAttribute("href") && link.getAttribute("href").includes("#" + current)) {
            link.classList.remove("text-slate-300");
            link.classList.add("text-blue-400", "font-bold");
        }
    });
});

// Scroll To Top & Progress Ring Logic
const scrollTopBtn = document.getElementById('scrollToTopBtn');
const scrollProgress = document.getElementById('scrollProgress');
const progressCircumference = 163.4; // 2 * PI * 26

window.addEventListener('scroll', () => {
    // Calculate scroll percentage
    const scrollPx = document.documentElement.scrollTop;
    const winHeightPx = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercent = winHeightPx > 0 ? scrollPx / winHeightPx : 0;

    // Update Progress Ring
    if(scrollProgress) {
        const drawLength = progressCircumference * scrollPercent;
        scrollProgress.style.strokeDashoffset = progressCircumference - drawLength;
    }

    // Show/Hide Button
    if(scrollTopBtn) {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            scrollTopBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            scrollTopBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
            scrollTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
        }
    }
});

if(scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// GSAP Animations and Custom Interactions
window.addEventListener('load', () => {
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }
    
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReducedMotion && typeof gsap !== 'undefined') {
        gsap.set(".gsap-reveal", { autoAlpha: 1, y: 0 });
        const graphBefore = document.getElementById('graph-before');
        const graphAfter = document.getElementById('graph-after');
        if (graphBefore && graphAfter) {
            gsap.set([graphBefore, graphAfter], { strokeDashoffset: 0 });
            gsap.set(".graph-milestone, .graph-dot, .graph-annotation, .graph-area, .graph-tooltip-2", { opacity: 1 });
        }
        return; // Skip complex animations
    }

    if (typeof gsap !== 'undefined') {
        gsap.set(".gsap-reveal", {
            autoAlpha: 0,
            y: 30
        });

        const tl = gsap.timeline({
            defaults: {
                ease: "power4.out",
                duration: 1.5
            }
        });

        tl.to("#hero-content .gsap-reveal", {
            autoAlpha: 1,
            y: 0,
            stagger: 0.2,
            delay: 0.5
        });

        // Graph Animation
        const graphBefore = document.getElementById('graph-before');
        const graphAfter = document.getElementById('graph-after');

        if (graphBefore && graphAfter) {
            const lengthBefore = graphBefore.getTotalLength();
            const lengthAfter = graphAfter.getTotalLength();

            gsap.set(graphBefore, { strokeDasharray: lengthBefore, strokeDashoffset: lengthBefore });
            gsap.set(graphAfter, { strokeDasharray: lengthAfter, strokeDashoffset: lengthAfter });

            const tlGraph = gsap.timeline({
                scrollTrigger: {
                    trigger: "#rankaty-effect",
                    start: "top 75%",
                }
            });

            tlGraph.to("#rankaty-effect .gsap-reveal", { autoAlpha: 1, y: 0, duration: 1, stagger: 0.2, ease: "power3.out" })
                .to(graphBefore, { strokeDashoffset: 0, duration: 1.5, ease: "power1.inOut" }, "-=0.2")
                .to(".graph-milestone", { opacity: 1, duration: 0.5 }, "-=0.2")
                .to(".graph-dot:first-of-type", { opacity: 1, duration: 0.3 }, "-=0.2")
                .to(".graph-annotation", { opacity: 1, duration: 0.5, y: -5 }, "-=0.2")
                .to(graphAfter, { strokeDashoffset: 0, duration: 2, ease: "power3.inOut" }, "+=0.2")
                .to(".graph-area", { opacity: 1, duration: 1 }, "-=1.5")
                .to(".graph-dot", { opacity: 1, duration: 0.3, stagger: 0.2 }, "-=0.5")
                .to(".graph-tooltip-2", { opacity: 1, duration: 0.5, y: -5 }, "-=0.2");
        }

        gsap.to("#problem-solution .gsap-reveal", {
            scrollTrigger: {
                trigger: "#problem-solution",
                start: "top 80%"
            },
            autoAlpha: 1,
            y: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: "power3.out"
        });

        gsap.to("#faq-section .gsap-reveal", {
            scrollTrigger: {
                trigger: "#faq-section",
                start: "top 80%"
            },
            autoAlpha: 1,
            y: 0,
            duration: 1,
            stagger: 0.15,
            ease: "power3.out"
        });

        gsap.to(".service-grid .gsap-reveal", {
            scrollTrigger: {
                trigger: ".service-grid",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            autoAlpha: 1,
            y: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.out"
        });

        // Animated Counters for Results Section
        gsap.to("#results .gsap-reveal", {
            scrollTrigger: {
                trigger: "#results",
                start: "top 80%",
                onEnter: () => {
                    const counters = document.querySelectorAll('.stat-counter');
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        const prefix = counter.getAttribute('data-prefix') || '';
                        const suffix = counter.getAttribute('data-suffix') || '';
                        let count = { val: 0 };
                        
                        gsap.to(count, {
                            val: target,
                            duration: 2,
                            ease: "power2.out",
                            onUpdate: function() {
                                counter.innerHTML = prefix + Math.ceil(count.val) + suffix;
                            }
                        });
                    });
                }
            },
            autoAlpha: 1,
            y: 0,
            duration: 1,
            stagger: 0.2
        });

        gsap.to("#offers .gsap-reveal", {
            scrollTrigger: {
                trigger: "#offers",
                start: "top 75%",
            },
            autoAlpha: 1,
            y: 0,
            scale: (i, target) => target.classList.contains('md:scale-105') ? 1.05 : 1,
            duration: 1,
            stagger: 0.2,
            ease: "back.out(1.2)"
        });

        gsap.to("#blog .gsap-reveal", {
            scrollTrigger: {
                trigger: "#blog",
                start: "top 80%"
            },
            autoAlpha: 1,
            y: 0,
            duration: 1,
            stagger: 0.15,
            ease: "power3.out"
        });

        gsap.to("#contact .gsap-reveal", {
            scrollTrigger: {
                trigger: "#contact",
                start: "top 80%",
            },
            autoAlpha: 1,
            y: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out"
        });

        ScrollTrigger.refresh();
    }
});

// ==========================================
// Mobile Menu Logic
// ==========================================
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-link');
const menuIconOpen = document.getElementById('menu-icon-open');
const menuIconClose = document.getElementById('menu-icon-close');
let isMenuOpen = false;

function toggleMenuIcons() {
    if(!menuIconOpen || !menuIconClose) return;
    if (isMenuOpen) {
        menuIconOpen.classList.remove('opacity-100', 'rotate-0');
        menuIconOpen.classList.add('opacity-0', '-rotate-90');

        menuIconClose.classList.remove('opacity-0', 'rotate-90');
        menuIconClose.classList.add('opacity-100', 'rotate-0');
    } else {
        menuIconOpen.classList.remove('opacity-0', '-rotate-90');
        menuIconOpen.classList.add('opacity-100', 'rotate-0');

        menuIconClose.classList.remove('opacity-100', 'rotate-0');
        menuIconClose.classList.add('opacity-0', 'rotate-90');
    }
}

if(mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', () => {
        isMenuOpen = !isMenuOpen;
        toggleMenuIcons();
        mobileMenuBtn.setAttribute('aria-expanded', isMenuOpen);
        if (isMenuOpen) {
            mobileMenu.classList.remove('opacity-0', 'invisible');
            mobileMenu.classList.add('opacity-100', 'visible');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.remove('opacity-100', 'visible');
            mobileMenu.classList.add('opacity-0', 'invisible');
            document.body.style.overflow = '';
        }
    });
}

mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        isMenuOpen = false;
        toggleMenuIcons();
        if(mobileMenu) {
            mobileMenu.classList.remove('opacity-100', 'visible');
            mobileMenu.classList.add('opacity-0', 'invisible');
        }
        document.body.style.overflow = '';
    });
});

// ==========================================
// Premium Interactions (Scramble, Particles)
// ==========================================

class TextScramble {
    constructor(el) {
        this.el = el;
        this.chars = '!<>-_\\\\/[]{}—=+*^?#________';
        this.update = this.update.bind(this);
    }
    setText(newText) {
        const oldText = this.el.innerText;
        const length = Math.max(oldText.length, newText.length);
        const promise = new Promise((resolve) => this.resolve = resolve);
        this.queue = [];
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || '';
            const to = newText[i] || '';
            const start = Math.floor(Math.random() * 40);
            const end = start + Math.floor(Math.random() * 40);
            this.queue.push({ from, to, start, end });
        }
        cancelAnimationFrame(this.frameRequest);
        this.frame = 0;
        this.update();
        return promise;
    }
    update() {
        let output = '';
        let complete = 0;
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i];
            if (this.frame >= end) {
                complete++;
                output += to;
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar();
                    this.queue[i].char = char;
                }
                output += `<span class="opacity-50">${char}</span>`;
            } else {
                output += from;
            }
        }
        this.el.innerHTML = output;
        if (complete === this.queue.length) {
            this.resolve();
        } else {
            this.frameRequest = requestAnimationFrame(this.update);
            this.frame++;
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    }
}

const scrambleEl = document.querySelector('.scramble-text');
if (scrambleEl) {
    const originalText = scrambleEl.innerText;
    scrambleEl.innerText = '';
    const fx = new TextScramble(scrambleEl);
    setTimeout(() => {
        fx.setText(originalText);
    }, 1000);
}

const reducedMotionParticles = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isMobile = window.innerWidth < 768;
if (typeof tsParticles !== 'undefined' && !reducedMotionParticles) {
    tsParticles.load("tsparticles", {
        fpsLimit: isMobile ? 30 : 60,
        particles: {
            number: { value: isMobile ? 15 : 30, density: { enable: true, value_area: 800 } },
            color: { value: ["#3b82f6", "#ffffff"] },
            links: { enable: !isMobile, color: "#3b82f6", distance: 150, opacity: 0.2, width: 1 },
            move: { enable: true, speed: isMobile ? 0.4 : 0.8, direction: "none", random: true, outModes: "out" },
            size: { value: { min: 1, max: 2 } },
            opacity: { value: { min: 0.1, max: 0.4 }, animation: { enable: true, speed: 1, minimumValue: 0.1 } }
        },
        interactivity: {
            detectsOn: "window",
            events: { onHover: { enable: !isMobile, mode: "grab" } },
            modes: { grab: { distance: 200, links: { opacity: 0.5 } } }
        },
        detectRetina: false
    });
}

// ==========================================
// FAQ Accordion Logic
// ==========================================
const faqItems = document.querySelectorAll('[data-faq-item]');
faqItems.forEach(item => {
    item.addEventListener('click', () => {
        const isActive = item.classList.contains('active-faq');
        
        // Close all other FAQs
        faqItems.forEach(otherItem => {
            otherItem.classList.remove('active-faq');
        });

        // Toggle current FAQ
        if (!isActive) {
            item.classList.add('active-faq');
        }
    });
});

// ==========================================
// Contact Form Submission (Prevent Default for Template)
// ==========================================
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('شكراً لتواصلك معنا. سنقوم بالرد عليك قريباً!');
        form.reset();
    });
});

// Removed hardcoded Blog Interaction System (now handled by WordPress WP_Query)
