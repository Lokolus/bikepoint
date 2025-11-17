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
    // PARALLAX EFFECT (Hero Section)
    // ==========================================

    const heroBg = document.querySelector('.hero-bg');
    if (heroBg) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.3; // Subtle parallax for smooth effect
            heroBg.style.transform = `translateY(${scrolled * parallaxSpeed}px) scale(1.05)`;
        });
    }
    
    
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
        
        // Hero Content Animation
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            setTimeout(() => {
                heroContent.style.opacity = '1';
                heroContent.style.transform = 'translateY(0)';
            }, 100);
        }
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
`;
document.head.appendChild(style);