// ==========================================
// ABOUT - Parallax & Story Animation
// ==========================================

document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // PARALLAX SCROLLING EFFECT
    // ==========================================

    const parallaxElements = document.querySelectorAll('.parallax-element');

    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;

        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });


    // ==========================================
    // STATS COUNTER WITH INTERSECTION OBSERVER
    // ==========================================

    function animateValue(element, start, end, duration, suffix = '') {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                element.textContent = end + suffix;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + suffix;
            }
        }, 16);
    }

    const statNumbers = document.querySelectorAll('.stat-number-about');

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const endValue = parseInt(element.dataset.value);
                const suffix = element.dataset.suffix || '';

                animateValue(element, 0, endValue, 2000, suffix);
                statsObserver.unobserve(element);
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(stat => statsObserver.observe(stat));


    // ==========================================
    // VALUE CARDS STAGGER ANIMATION
    // ==========================================

    const valueCards = document.querySelectorAll('.value-card-about');

    const valueObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) rotate(0deg)';
                }, index * 150);
            }
        });
    }, { threshold: 0.2 });

    valueCards.forEach(card => {
        valueObserver.observe(card);
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px) rotate(-2deg)';
        card.style.transition = 'all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1)';

        // Hover effect
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) rotate(2deg) scale(1.03)';
            this.style.boxShadow = '0 20px 50px rgba(139, 157, 147, 0.2)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0deg) scale(1)';
            this.style.boxShadow = 'none';
        });
    });


    // ==========================================
    // CONTACT FORM ENHANCED ANIMATIONS
    // ==========================================

    const formInputs = document.querySelectorAll('.contact-form input, .contact-form textarea');

    formInputs.forEach(input => {
        // Floating label effect
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
            this.style.transform = 'scale(1.02)';
            this.style.borderColor = 'var(--color-accent)';
        });

        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
            this.style.transform = 'scale(1)';
            this.style.borderColor = 'var(--color-border)';
        });

        // Character count for textarea
        if (input.tagName === 'TEXTAREA') {
            const maxLength = 500;
            const counter = document.createElement('div');
            counter.className = 'char-counter';
            counter.style.cssText = `
                text-align: right;
                font-size: 0.75rem;
                color: var(--color-text-light);
                margin-top: 0.5rem;
            `;
            input.parentElement.appendChild(counter);

            input.addEventListener('input', function() {
                const remaining = maxLength - this.value.length;
                counter.textContent = `${remaining} Zeichen verbleibend`;
                counter.style.color = remaining < 50 ? '#E57373' : 'var(--color-text-light)';
            });

            // Initialize
            input.dispatchEvent(new Event('input'));
        }
    });

    // Form submit animation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.style.transform = 'scale(0.95)';
                submitBtn.innerHTML = '<span style="display:inline-block;animation:spin 1s linear infinite">⟳</span> Wird gesendet...';

                setTimeout(() => {
                    submitBtn.style.transform = 'scale(1)';
                }, 200);
            }
        });
    }


    // ==========================================
    // TIMELINE SCROLL ANIMATION
    // ==========================================

    const timelineItems = document.querySelectorAll('.timeline-item');

    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('timeline-visible');

                const icon = entry.target.querySelector('.timeline-icon');
                if (icon) {
                    setTimeout(() => {
                        icon.style.transform = 'scale(1) rotate(360deg)';
                    }, 300);
                }
            }
        });
    }, { threshold: 0.3 });

    timelineItems.forEach(item => {
        timelineObserver.observe(item);

        const icon = item.querySelector('.timeline-icon');
        if (icon) {
            icon.style.transform = 'scale(0) rotate(0deg)';
            icon.style.transition = 'all 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55)';
        }
    });


    // ==========================================
    // IMAGE GALLERY LIGHTBOX
    // ==========================================

    const galleryImages = document.querySelectorAll('.gallery-image');

    galleryImages.forEach(img => {
        img.addEventListener('click', function() {
            createLightbox(this.src);
        });

        img.style.cursor = 'pointer';
        img.style.transition = 'transform 0.3s ease';

        img.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });

        img.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    function createLightbox(imageSrc) {
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-content">
                <img src="${imageSrc}" alt="Gallery Image">
                <button class="lightbox-close">&times;</button>
            </div>
        `;

        document.body.appendChild(lightbox);
        document.body.style.overflow = 'hidden';

        setTimeout(() => lightbox.classList.add('active'), 10);

        const closeBtn = lightbox.querySelector('.lightbox-close');
        [closeBtn, lightbox].forEach(el => {
            el.addEventListener('click', function(e) {
                if (e.target === this) {
                    lightbox.classList.remove('active');
                    setTimeout(() => {
                        lightbox.remove();
                        document.body.style.overflow = '';
                    }, 300);
                }
            });
        });
    }


    // ==========================================
    // SCROLL REVEAL TEXT
    // ==========================================

    const revealTexts = document.querySelectorAll('.reveal-text');

    const textObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const text = entry.target.textContent;
                entry.target.textContent = '';
                entry.target.style.opacity = '1';

                text.split('').forEach((char, index) => {
                    const span = document.createElement('span');
                    span.textContent = char;
                    span.style.opacity = '0';
                    span.style.display = 'inline-block';
                    span.style.animation = `fadeInChar 0.5s ease forwards ${index * 0.03}s`;
                    entry.target.appendChild(span);
                });

                textObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    revealTexts.forEach(text => {
        textObserver.observe(text);
        text.style.opacity = '0';
    });

});


// ==========================================
// CSS ANIMATIONS
// ==========================================

const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInChar {
        to {
            opacity: 1;
            transform: translateY(0);
        }
        from {
            opacity: 0;
            transform: translateY(10px);
        }
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .timeline-visible {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    .timeline-item {
        opacity: 0;
        transform: translateX(-30px);
        transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .lightbox {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0);
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease;
    }

    .lightbox.active {
        background: rgba(0, 0, 0, 0.9);
    }

    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90%;
        transform: scale(0.8);
        opacity: 0;
        transition: all 0.3s ease;
    }

    .lightbox.active .lightbox-content {
        transform: scale(1);
        opacity: 1;
    }

    .lightbox-content img {
        max-width: 100%;
        max-height: 90vh;
        object-fit: contain;
    }

    .lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        background: transparent;
        border: none;
        color: white;
        font-size: 3rem;
        cursor: pointer;
        line-height: 1;
        transition: transform 0.3s ease;
    }

    .lightbox-close:hover {
        transform: rotate(90deg);
    }

    .parallax-element {
        will-change: transform;
    }
`;
document.head.appendChild(style);
