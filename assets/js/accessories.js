// ==========================================
// ACCESSORIES - Smooth Scroll Animations
// Unique Features: Staggered Reveals, Parallax, Brand Hover
// ==========================================

document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // CATEGORY SECTIONS - STAGGERED REVEAL
    // ==========================================

    const categories = document.querySelectorAll('.accessory-category');

    const categoryObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 150);
                categoryObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    categories.forEach(category => {
        categoryObserver.observe(category);
        category.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
    });


    // ==========================================
    // BRAND ITEMS - SEQUENTIAL ANIMATION
    // ==========================================

    const brandItems = document.querySelectorAll('.brand-item');

    const brandObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const items = document.querySelectorAll('.brand-item');
                items.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, index * 100);
                });
                brandObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    if (brandItems.length > 0) {
        brandObserver.observe(brandItems[0]);
    }

    // Brand hover effect
    brandItems.forEach(item => {
        const brand = item.querySelector('div');

        item.addEventListener('mouseenter', function() {
            brand.style.filter = 'grayscale(0%)';
            brand.style.opacity = '1';
            brand.style.transform = 'scale(1.05)';
        });

        item.addEventListener('mouseleave', function() {
            brand.style.filter = 'grayscale(100%)';
            brand.style.opacity = '0.6';
            brand.style.transform = 'scale(1)';
        });
    });


    // ==========================================
    // FADE-IN ELEMENTS - GENERAL
    // ==========================================

    const fadeElements = document.querySelectorAll('.fade-in');

    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                fadeObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    fadeElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        fadeObserver.observe(element);
    });


    // ==========================================
    // CATEGORY LINE ACCENT ANIMATION
    // ==========================================

    const categoryLines = document.querySelectorAll('.accessory-category > div > div > div');

    categoryLines.forEach(line => {
        const parent = line.closest('.accessory-category');

        const lineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        line.style.height = '80px';
                    }, 200);
                    lineObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        if (parent) {
            lineObserver.observe(parent);
            line.style.transition = 'height 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        }
    });


    // ==========================================
    // TAG BADGES - SUBTLE HOVER
    // ==========================================

    const badges = document.querySelectorAll('span[style*="border: 1px solid"]');

    badges.forEach(badge => {
        badge.addEventListener('mouseenter', function() {
            this.style.borderColor = 'var(--color-accent)';
            this.style.color = 'var(--color-accent)';
            this.style.transform = 'translateY(-2px)';
        });

        badge.addEventListener('mouseleave', function() {
            this.style.borderColor = 'var(--color-border)';
            this.style.color = 'var(--color-text-anthracite)';
            this.style.transform = 'translateY(0)';
        });

        badge.style.transition = 'all 0.3s ease';
    });


    // ==========================================
    // PARALLAX EFFECT ON HIGHLIGHT SECTION
    // ==========================================

    const highlightSection = document.querySelector('section[style*="min-height: 500px"]');

    if (highlightSection) {
        const parallaxBg = highlightSection.querySelector('div[style*="background-image"]');

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const sectionTop = highlightSection.offsetTop;
            const sectionHeight = highlightSection.offsetHeight;

            if (scrolled > sectionTop - window.innerHeight && scrolled < sectionTop + sectionHeight) {
                const offset = (scrolled - (sectionTop - window.innerHeight)) * 0.3;
                parallaxBg.style.transform = `translateY(${offset}px)`;
            }
        });
    }


    // ==========================================
    // SMOOTH BUTTON HOVER
    // ==========================================

    const buttons = document.querySelectorAll('.btn');

    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 10px 30px rgba(139, 157, 147, 0.3)';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });

        button.style.transition = 'all 0.3s ease';
    });


    // ==========================================
    // HERO SCROLL INDICATOR
    // ==========================================

    const heroScroll = document.querySelector('.hero-scroll');

    if (heroScroll) {
        heroScroll.addEventListener('click', function() {
            const nextSection = document.querySelector('main section:first-child');
            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Fade out on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const opacity = Math.max(0, 1 - scrolled / 300);
            heroScroll.style.opacity = opacity;
        });
    }

});


// ==========================================
// CSS ANIMATIONS & STYLES
// ==========================================

const styles = document.createElement('style');
styles.textContent = `
    .accessory-category:hover .step-content {
        transform: translateX(5px);
    }

    @media (max-width: 768px) {
        .accessory-category > div {
            grid-template-columns: 1fr !important;
            gap: 1.5rem !important;
        }
    }
`;
document.head.appendChild(styles);
