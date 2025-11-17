/**
 * VERKAUF PAGE - Interactive Features
 * Kreative Animationen für Bike-Shop
 */

document.addEventListener('DOMContentLoaded', function() {

    // Stagger Animation for Cards
    initStaggerAnimation();

    // Interactive Category Cards
    initCategoryCardEffects();

    // Parallax Scroll for Images
    initParallaxScroll();

    // Hover Glow Effects
    initHoverGlowEffects();

    // Component Cards Animation
    initComponentCardsAnimation();

    // Scroll-triggered Animations
    initScrollAnimations();

    // Filter/Search functionality (for future enhancement)
    initBikeFilter();
});

/**
 * Stagger Animation for Grid Items
 */
function initStaggerAnimation() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('stagger-item');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe category cards
    document.querySelectorAll('.category-card').forEach(card => {
        observer.observe(card);
    });

    // Observe benefit boxes
    document.querySelectorAll('.benefit-box').forEach(box => {
        observer.observe(box);
    });
}

/**
 * Interactive Category Card Effects
 */
function initCategoryCardEffects() {
    const categoryCards = document.querySelectorAll('.category-card');

    categoryCards.forEach(card => {
        // Add ripple effect on click
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            ripple.className = 'ripple';
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(139, 157, 147, 0.3);
                width: 100px;
                height: 100px;
                margin-left: -50px;
                margin-top: -50px;
                pointer-events: none;
                animation: ripple-effect 0.8s ease-out;
            `;

            const rect = card.getBoundingClientRect();
            ripple.style.left = (e.clientX - rect.left) + 'px';
            ripple.style.top = (e.clientY - rect.top) + 'px';

            card.appendChild(ripple);

            setTimeout(() => ripple.remove(), 800);
        });

        // 3D tilt effect
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 15;
            const rotateY = (centerX - x) / 15;

            card.style.transform = `
                perspective(1000px)
                rotateX(${rotateX}deg)
                rotateY(${rotateY}deg)
                translateY(-15px)
                scale(1.02)
            `;
        });

        card.addEventListener('mouseleave', function() {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0) scale(1)';
        });
    });
}

/**
 * Parallax Scroll Effect
 */
function initParallaxScroll() {
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scrolled = window.pageYOffset;

                // Parallax for category cards
                document.querySelectorAll('.category-card').forEach((card, index) => {
                    const rect = card.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom > 0) {
                        const speed = 0.03 * (index % 2 === 0 ? 1 : -1);
                        const yPos = -(scrolled * speed);
                        card.style.backgroundPosition = `center ${yPos}px`;
                    }
                });

                ticking = false;
            });

            ticking = true;
        }
    });
}

/**
 * Hover Glow Effects
 */
function initHoverGlowEffects() {
    const glowElements = document.querySelectorAll('.category-card, .financing-card');

    glowElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.filter = 'brightness(1.05)';
            this.style.transition = 'all 0.4s ease';
        });

        element.addEventListener('mouseleave', function() {
            this.style.filter = 'brightness(1)';
        });
    });
}

/**
 * Component Cards Animation
 */
function initComponentCardsAnimation() {
    const componentCards = document.querySelectorAll('.component-card');

    componentCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px) scale(0.9)';

        setTimeout(() => {
            card.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0) scale(1)';
        }, index * 80);
    });

    // Rotate on hover
    componentCards.forEach(card => {
        let rotation = 0;

        card.addEventListener('mouseenter', function() {
            rotation = Math.random() * 10 - 5; // Random rotation between -5 and 5 degrees
            this.style.transform = `translateY(-8px) rotate(${rotation}deg)`;
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0deg)';
        });
    });
}

/**
 * Scroll-triggered Animations
 */
function initScrollAnimations() {
    const animateOnScroll = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    };

    const scrollObserver = new IntersectionObserver(animateOnScroll, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });

    // Animate financing cards
    document.querySelectorAll('.financing-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(40px)';
        card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        scrollObserver.observe(card);
    });

    // Animate feature items
    document.querySelectorAll('.feature-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-30px)';
        item.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        scrollObserver.observe(item);
    });
}

/**
 * Bike Filter/Search (Placeholder for future enhancement)
 */
function initBikeFilter() {
    // Could be used to filter bikes by category, price range, etc.
    const filterButtons = document.querySelectorAll('[data-filter]');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            console.log('Filter applied:', filter);
            // Future implementation
        });
    });
}

/**
 * Add ripple effect CSS
 */
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple-effect {
        0% {
            transform: scale(0);
            opacity: 0.8;
        }
        100% {
            transform: scale(4);
            opacity: 0;
        }
    }

    .category-card {
        position: relative;
        overflow: hidden;
    }
`;
document.head.appendChild(style);

/**
 * Image Lazy Loading Enhancement
 */
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.6s ease';

                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.onload = () => {
                        img.style.opacity = '1';
                    };
                }

                imageObserver.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

/**
 * Smooth scroll for anchor links
 */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);

            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

/**
 * Add particle effect on hover (subtle)
 */
function createParticle(x, y) {
    const particle = document.createElement('div');
    particle.style.cssText = `
        position: fixed;
        width: 5px;
        height: 5px;
        background: var(--color-accent);
        border-radius: 50%;
        pointer-events: none;
        left: ${x}px;
        top: ${y}px;
        opacity: 0.6;
        animation: particle-float 1s ease-out forwards;
        z-index: 9999;
    `;

    document.body.appendChild(particle);
    setTimeout(() => particle.remove(), 1000);
}

const particleStyle = document.createElement('style');
particleStyle.textContent = `
    @keyframes particle-float {
        to {
            transform: translateY(-100px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(particleStyle);

// Add particles on category card hover
document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('mouseenter', function(e) {
        for (let i = 0; i < 3; i++) {
            setTimeout(() => {
                const rect = card.getBoundingClientRect();
                const x = rect.left + Math.random() * rect.width;
                const y = rect.top + Math.random() * rect.height;
                createParticle(x, y);
            }, i * 100);
        }
    });
});
