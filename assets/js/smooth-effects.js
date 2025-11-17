// ==========================================
// SMOOTH EFFECTS - Global Animation Library
// Ultra-smooth, langsame und angenehme Animationen
// ==========================================

document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // SMOOTH SCROLL BEHAVIOR FOR ENTIRE PAGE
    // ==========================================

    // Lenis Smooth Scroll Alternative (Lightweight)
    let currentScroll = 0;
    let targetScroll = 0;
    let ease = 0.075; // Lower = smoother

    function smoothScroll() {
        currentScroll += (targetScroll - currentScroll) * ease;

        if (Math.abs(targetScroll - currentScroll) < 0.05) {
            currentScroll = targetScroll;
        }

        window.scrollTo(0, currentScroll);
        requestAnimationFrame(smoothScroll);
    }

    window.addEventListener('wheel', (e) => {
        targetScroll += e.deltaY * 0.5;
        targetScroll = Math.max(0, Math.min(targetScroll, document.body.scrollHeight - window.innerHeight));
    }, { passive: true });

    // smoothScroll(); // Enable if needed (can conflict with default scroll)


    // ==========================================
    // SMOOTH MOUSE PARALLAX FOR ELEMENTS
    // ==========================================

    const parallaxElements = document.querySelectorAll('[data-parallax]');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX / window.innerWidth - 0.5;
        const mouseY = e.clientY / window.innerHeight - 0.5;

        parallaxElements.forEach(el => {
            const speed = el.dataset.parallax || 20;
            const x = mouseX * speed;
            const y = mouseY * speed;

            el.style.transform = `translate(${x}px, ${y}px)`;
        });
    });


    // ==========================================
    // SMOOTH REVEAL ON SCROLL (With Blur)
    // ==========================================

    const revealElements = document.querySelectorAll('.smooth-reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0) scale(1)';
                entry.target.style.filter = 'blur(0px)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(60px) scale(0.95)';
        el.style.filter = 'blur(10px)';
        el.style.transition = 'all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        revealObserver.observe(el);
    });


    // ==========================================
    // FLOATING ANIMATION FOR ELEMENTS
    // ==========================================

    const floatingElements = document.querySelectorAll('.floating');

    floatingElements.forEach((el, index) => {
        const duration = 3 + (index * 0.5);
        const delay = index * 0.2;

        el.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
    });


    // ==========================================
    // STAGGERED TEXT ANIMATION
    // ==========================================

    const staggerTexts = document.querySelectorAll('.stagger-text');

    staggerTexts.forEach(element => {
        const text = element.textContent;
        element.innerHTML = '';

        text.split('').forEach((char, index) => {
            const span = document.createElement('span');
            span.textContent = char === ' ' ? '\u00A0' : char;
            span.style.display = 'inline-block';
            span.style.opacity = '0';
            span.style.transform = 'translateY(20px)';
            span.style.transition = `all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) ${index * 0.03}s`;
            element.appendChild(span);
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const spans = entry.target.querySelectorAll('span');
                    spans.forEach(span => {
                        span.style.opacity = '1';
                        span.style.transform = 'translateY(0)';
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(element);
    });


    // ==========================================
    // SMOOTH SCALE ON HOVER (Cards, Images)
    // ==========================================

    const hoverScaleElements = document.querySelectorAll('.hover-scale');

    hoverScaleElements.forEach(el => {
        el.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';

        el.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });

        el.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });


    // ==========================================
    // GRADIENT ANIMATION ON HOVER
    // ==========================================

    const gradientElements = document.querySelectorAll('.gradient-hover');

    gradientElements.forEach(el => {
        el.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            this.style.background = `radial-gradient(circle at ${x}% ${y}%, rgba(139, 157, 147, 0.2) 0%, transparent 50%)`;
        });

        el.addEventListener('mouseleave', function() {
            this.style.background = 'transparent';
        });

        el.style.transition = 'background 0.3s ease';
    });


    // ==========================================
    // SMOOTH COUNTER ANIMATION
    // ==========================================

    function animateNumber(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        const counter = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = Math.floor(target);
                clearInterval(counter);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    const numberElements = document.querySelectorAll('[data-number]');

    const numberObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.dataset.number);
                animateNumber(entry.target, target);
                numberObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    numberElements.forEach(el => numberObserver.observe(el));


    // ==========================================
    // IMAGE LAZY LOAD WITH FADE
    // ==========================================

    const lazyImages = document.querySelectorAll('img[data-lazy]');

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.lazy;
                img.style.opacity = '0';
                img.style.transition = 'opacity 1s ease';

                img.onload = () => {
                    img.style.opacity = '1';
                    img.removeAttribute('data-lazy');
                };

                imageObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));


    // ==========================================
    // SCROLL-TRIGGERED VIDEO PLAYBACK
    // ==========================================

    const scrollVideos = document.querySelectorAll('video[data-scroll-play]');

    const videoObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.play();
            } else {
                entry.target.pause();
            }
        });
    }, { threshold: 0.5 });

    scrollVideos.forEach(video => videoObserver.observe(video));


    // ==========================================
    // SMOOTH BACKGROUND COLOR TRANSITION
    // ==========================================

    const colorSections = document.querySelectorAll('[data-bg-color]');

    const colorObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const color = entry.target.dataset.bgColor;
                document.body.style.transition = 'background-color 1.5s ease';
                document.body.style.backgroundColor = color;
            }
        });
    }, { threshold: 0.5 });

    colorSections.forEach(section => colorObserver.observe(section));


    // ==========================================
    // SMOOTH ELEMENT MORPHING
    // ==========================================

    const morphElements = document.querySelectorAll('.morph-element');

    morphElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            this.style.borderRadius = '50%';
            this.style.transform = 'rotate(180deg) scale(1.2)';
        });

        el.addEventListener('mouseleave', function() {
            this.style.borderRadius = '0%';
            this.style.transform = 'rotate(0deg) scale(1)';
        });

        el.style.transition = 'all 1s cubic-bezier(0.68, -0.55, 0.27, 1.55)';
    });


    // ==========================================
    // INFINITE SMOOTH ROTATION
    // ==========================================

    const rotateElements = document.querySelectorAll('.rotate-infinite');

    rotateElements.forEach((el, index) => {
        const duration = 20 + (index * 5);
        el.style.animation = `rotateInfinite ${duration}s linear infinite`;
    });


    // ==========================================
    // TYPEWRITER EFFECT
    // ==========================================

    const typewriterElements = document.querySelectorAll('.typewriter');

    typewriterElements.forEach(el => {
        const text = el.textContent;
        el.textContent = '';
        let index = 0;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const typeInterval = setInterval(() => {
                        if (index < text.length) {
                            el.textContent += text[index];
                            index++;
                        } else {
                            clearInterval(typeInterval);
                        }
                    }, 50);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(el);
    });


    // ==========================================
    // SMOOTH PAGE TRANSITION
    // ==========================================

    const pageLinks = document.querySelectorAll('a:not([target="_blank"]):not([href^="#"])');

    pageLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // Skip if it's an anchor or external link
            if (!href || href.startsWith('#') || href.startsWith('http') || href.startsWith('mailto')) {
                return;
            }

            e.preventDefault();

            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';

            setTimeout(() => {
                window.location.href = href;
            }, 500);
        });
    });

    // Fade in on page load
    document.body.style.opacity = '0';

    setTimeout(() => {
        document.body.style.transition = 'opacity 0.8s ease';
        document.body.style.opacity = '1';
    }, 100);

});


// ==========================================
// CSS ANIMATIONS & KEYFRAMES
// ==========================================

const smoothStyles = document.createElement('style');
smoothStyles.textContent = `
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes rotateInfinite {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Smooth transitions for all interactive elements */
    a, button, input, textarea, select {
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Smooth image loading */
    img {
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    /* Disable default transitions during page load */
    .preload * {
        transition: none !important;
    }

    /* Cursor trail styling */
    body {
        cursor: default;
    }

    a, button, .btn {
        cursor: pointer;
    }

    /* Smooth focus states */
    *:focus {
        outline: 2px solid var(--color-accent);
        outline-offset: 4px;
        transition: outline-offset 0.2s ease;
    }

    *:focus:not(:focus-visible) {
        outline: none;
    }

    /* Enhance performance */
    .will-animate {
        will-change: transform, opacity;
    }

    /* Reduce motion for accessibility */
    @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
`;
document.head.appendChild(smoothStyles);


// ==========================================
// PRELOAD CLASS REMOVAL
// ==========================================

window.addEventListener('load', () => {
    document.body.classList.remove('preload');
});

// Add preload class initially
document.body.classList.add('preload');
