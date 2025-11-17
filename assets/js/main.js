// ==========================================
// BIKEPOINT - JavaScript Functions
// Minimalistische Animationen & Interaktionen
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // NAVIGATION
    // ==========================================
    
    const navWrapper = document.querySelector('.nav-wrapper');
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const navLinks = document.querySelectorAll('.nav-menu a');
    
    // Scroll Effect für Navigation
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            navWrapper.classList.add('scrolled');
        } else {
            navWrapper.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
    
    // Mobile Menu Toggle
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            mobileToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });
    }
    
    // Mobile Menu Links - Close on Click
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
    
    // Active Link Highlighting
    function setActiveLink() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        
        navLinks.forEach(link => {
            const linkPage = link.getAttribute('href');
            link.classList.remove('active');
            
            if (linkPage === currentPage || 
                (currentPage === 'index.php' && linkPage === 'index.php') ||
                (currentPage === '' && linkPage === 'index.php')) {
                link.classList.add('active');
            }
        });
    }
    
    setActiveLink();
    
    
    // ==========================================
    // SMOOTH SCROLL
    // ==========================================
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    
    // ==========================================
    // FADE-IN ANIMATIONS (Intersection Observer)
    // ==========================================
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: Observer nach Animation entfernen
                // observer.unobserve(entry.target);
            }
        });
    };
    
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    
    // Alle Elemente mit .fade-in Klasse beobachten
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));
    
    
    // ==========================================
    // ENHANCED PARALLAX EFFECT (Hero Section & Images)
    // ==========================================

    const heroBg = document.querySelector('.hero-bg');
    if (heroBg) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.4; // Smooth parallax effect
            const opacity = Math.max(0.3, 1 - scrolled / 800);
            heroBg.style.transform = `translateY(${scrolled * parallaxSpeed}px) scale(1.1)`;
            heroBg.style.opacity = opacity;
        });
    }

    // Parallax for all background images in sections
    const parallaxSections = document.querySelectorAll('section[style*="background-image"]');
    parallaxSections.forEach(section => {
        window.addEventListener('scroll', function() {
            const rect = section.getBoundingClientRect();
            const scrolled = window.pageYOffset;
            const sectionTop = section.offsetTop;

            if (rect.top < window.innerHeight && rect.bottom > 0) {
                const offset = (scrolled - sectionTop) * 0.2;
                section.style.backgroundPosition = `center ${offset}px`;
            }
        });
    });
    
    
    // ==========================================
    // COUNTER ANIMATION (Stats)
    // ==========================================
    
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start);
            }
        }, 16);
    }
    
    const statNumbers = document.querySelectorAll('.stat-number');
    if (statNumbers.length > 0) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.textContent.replace(/\D/g, ''));
                    const suffix = entry.target.textContent.replace(/[0-9]/g, '');
                    
                    animateCounter(entry.target, target);
                    
                    // Add suffix back after animation
                    setTimeout(() => {
                        entry.target.textContent += suffix;
                    }, 2000);
                    
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        statNumbers.forEach(stat => statsObserver.observe(stat));
    }
    
    
    // ==========================================
    // FORM VALIDATION
    // ==========================================
    
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = contactForm.querySelector('input[name="name"]');
            const email = contactForm.querySelector('input[name="email"]');
            const message = contactForm.querySelector('textarea[name="message"]');
            
            let isValid = true;
            
            // Simple Validation
            if (name.value.trim() === '') {
                isValid = false;
                name.style.borderColor = '#E57373';
            } else {
                name.style.borderColor = 'var(--color-border)';
            }
            
            if (email.value.trim() === '' || !isValidEmail(email.value)) {
                isValid = false;
                email.style.borderColor = '#E57373';
            } else {
                email.style.borderColor = 'var(--color-border)';
            }
            
            if (message.value.trim() === '') {
                isValid = false;
                message.style.borderColor = '#E57373';
            } else {
                message.style.borderColor = 'var(--color-border)';
            }
            
            if (isValid) {
                // Form absenden (kann mit AJAX erweitert werden)
                console.log('Form submitted successfully!');
                showNotification('Nachricht erfolgreich gesendet!', 'success');
                contactForm.reset();
            } else {
                showNotification('Bitte fülle alle Felder korrekt aus.', 'error');
            }
        });
    }
    
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
    
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 1rem 2rem;
            background-color: ${type === 'success' ? 'var(--color-accent)' : '#E57373'};
            color: white;
            border-radius: 4px;
            z-index: 10000;
            animation: slideIn 0.5s ease;
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.5s ease';
            setTimeout(() => notification.remove(), 500);
        }, 3000);
    }
    
    
    // ==========================================
    // HOVER EFFECTS FÜR CARDS
    // ==========================================
    
    const cards = document.querySelectorAll('.service-card, .bike-card, .team-member');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    
    // ==========================================
    // LAZY LOADING FÜR BILDER (optional)
    // ==========================================
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                }
            });
        });
        
        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => imageObserver.observe(img));
    }
    
    
    // ==========================================
    // RESIZE HANDLER
    // ==========================================
    
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Mobile Menu schließen bei Resize
            if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        }, 250);
    });
    
    
    // ==========================================
    // PAGE LOAD ANIMATION
    // ==========================================

    window.addEventListener('load', function() {
        document.body.classList.add('loaded');

        // Hero Content Animation with stagger
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            const heroElements = heroContent.querySelectorAll('h1, p, a');
            heroElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 300 + (index * 200));
            });
        }
    });


    // ==========================================
    // SMOOTH MOUSE CURSOR TRAIL (Subtle)
    // ==========================================

    let cursorDot, cursorOutline;

    function initCustomCursor() {
        cursorDot = document.createElement('div');
        cursorDot.className = 'cursor-dot';
        document.body.appendChild(cursorDot);

        cursorOutline = document.createElement('div');
        cursorOutline.className = 'cursor-outline';
        document.body.appendChild(cursorOutline);

        let mouseX = 0, mouseY = 0;
        let dotX = 0, dotY = 0;
        let outlineX = 0, outlineY = 0;

        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        // Smooth animation using requestAnimationFrame
        function animateCursor() {
            // Smooth follow for dot
            dotX += (mouseX - dotX) * 0.3;
            dotY += (mouseY - dotY) * 0.3;

            // Even smoother follow for outline
            outlineX += (mouseX - outlineX) * 0.15;
            outlineY += (mouseY - outlineY) * 0.15;

            cursorDot.style.left = dotX + 'px';
            cursorDot.style.top = dotY + 'px';

            cursorOutline.style.left = outlineX + 'px';
            cursorOutline.style.top = outlineY + 'px';

            requestAnimationFrame(animateCursor);
        }

        animateCursor();

        // Hover effects
        const hoverElements = document.querySelectorAll('a, button, .btn, .bike-card, .service-card');
        hoverElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.5)';
                cursorDot.style.transform = 'translate(-50%, -50%) scale(0.5)';
            });
            el.addEventListener('mouseleave', () => {
                cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)';
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
            });
        });
    }

    // Only on desktop
    if (window.innerWidth > 1024) {
        initCustomCursor();
    }


    // ==========================================
    // 3D TILT EFFECT FOR CARDS
    // ==========================================

    const tiltCards = document.querySelectorAll('.bike-card, .service-card, .benefit-card');

    tiltCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;

            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px) scale(1.02)`;
            this.style.transition = 'none';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0) scale(1)';
            this.style.transition = 'all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        });
    });


    // ==========================================
    // MAGNETIC BUTTON EFFECT
    // ==========================================

    const magneticButtons = document.querySelectorAll('.btn-primary, .btn-secondary');

    magneticButtons.forEach(button => {
        button.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            const distance = Math.sqrt(x * x + y * y);
            const maxDistance = 50;

            if (distance < maxDistance) {
                const moveX = (x / maxDistance) * 10;
                const moveY = (y / maxDistance) * 10;

                this.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
            }
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translate(0, 0) scale(1)';
        });

        button.style.transition = 'all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
    });


    // ==========================================
    // TEXT REVEAL ANIMATION
    // ==========================================

    const textRevealElements = document.querySelectorAll('h1, h2, h3');

    textRevealElements.forEach(element => {
        const text = element.textContent;
        const words = text.split(' ');

        if (words.length > 1) {
            element.innerHTML = words.map((word, index) =>
                `<span class="word-reveal" style="display: inline-block; opacity: 0; transform: translateY(20px); transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) ${index * 0.1}s;">${word}</span>`
            ).join(' ');
        }
    });

    const wordRevealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const words = entry.target.querySelectorAll('.word-reveal');
                words.forEach(word => {
                    word.style.opacity = '1';
                    word.style.transform = 'translateY(0)';
                });
                wordRevealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    textRevealElements.forEach(el => {
        if (el.querySelector('.word-reveal')) {
            wordRevealObserver.observe(el);
        }
    });


    // ==========================================
    // SCROLL PROGRESS INDICATOR
    // ==========================================

    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        progressBar.style.width = scrollPercent + '%';
    });


    // ==========================================
    // SMOOTH SECTION TRANSITIONS
    // ==========================================

    const sections = document.querySelectorAll('main > section');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(40px)';
        section.style.transition = 'all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        sectionObserver.observe(section);
    });

});


// ==========================================
// CSS KEYFRAMES FÜR NOTIFICATIONS
// ==========================================

const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }

    /* Custom Cursor Styles */
    .cursor-dot {
        width: 8px;
        height: 8px;
        background-color: var(--color-accent);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 99999;
        transform: translate(-50%, -50%);
        transition: transform 0.2s ease;
        mix-blend-mode: difference;
    }

    .cursor-outline {
        width: 32px;
        height: 32px;
        border: 2px solid var(--color-accent);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 99998;
        transform: translate(-50%, -50%);
        transition: transform 0.3s ease, width 0.3s ease, height 0.3s ease;
        mix-blend-mode: difference;
        opacity: 0.5;
    }

    /* Scroll Progress Bar */
    .scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, var(--color-accent), var(--color-accent-hover));
        z-index: 9999;
        transition: width 0.1s ease-out;
        box-shadow: 0 2px 10px rgba(139, 157, 147, 0.5);
    }

    /* Smooth transitions for all elements */
    * {
        scroll-behavior: smooth;
    }

    /* Card hover enhancements */
    .bike-card, .service-card, .benefit-card {
        will-change: transform;
        transform-style: preserve-3d;
    }

    /* Button ripple effect */
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .btn-primary::before,
    .btn-secondary::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-primary:active::before,
    .btn-secondary:active::before {
        width: 300px;
        height: 300px;
    }

    /* Smooth fade for images */
    img {
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    img:hover {
        transform: scale(1.02);
    }

    /* Text selection styling */
    ::selection {
        background-color: var(--color-accent);
        color: white;
    }

    ::-moz-selection {
        background-color: var(--color-accent);
        color: white;
    }

    /* Hide custom cursor on mobile */
    @media (max-width: 1024px) {
        .cursor-dot,
        .cursor-outline {
            display: none !important;
        }
    }

    /* Smooth scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: var(--color-primary);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--color-accent);
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--color-accent-hover);
    }

    /* Loading state */
    body:not(.loaded) {
        overflow: hidden;
    }

    body:not(.loaded) .hero-content * {
        opacity: 0 !important;
    }
`;
document.head.appendChild(style);