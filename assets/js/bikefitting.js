// ==========================================
// BIKEFITTING - Interactive Process Timeline
// Unique Features: Timeline Animation, Progress Tracking, Step Reveals
// ==========================================

document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // MOBILE MENU FUNCTIONALITY
    // ==========================================

    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const navLinks = document.querySelectorAll('.nav-menu a');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    mobileToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
    }

    // ==========================================
    // ANIMATED TIMELINE WITH PROGRESS LINE
    // ==========================================

    const processSteps = document.querySelectorAll('.process-step');
    const timelineContainer = document.querySelector('.process-timeline-section');

    // Create progress line
    if (timelineContainer && processSteps.length > 0) {
        const progressLine = document.createElement('div');
        progressLine.className = 'timeline-progress-line';
        progressLine.innerHTML = '<div class="timeline-progress-fill"></div>';
        timelineContainer.insertBefore(progressLine, timelineContainer.firstChild);

        const progressFill = progressLine.querySelector('.timeline-progress-fill');

        window.addEventListener('scroll', () => {
            const containerTop = timelineContainer.offsetTop;
            const containerHeight = timelineContainer.offsetHeight;
            const scrollPos = window.scrollY + window.innerHeight / 2;

            if (scrollPos > containerTop && scrollPos < containerTop + containerHeight) {
                const progress = ((scrollPos - containerTop) / containerHeight) * 100;
                progressFill.style.height = Math.min(Math.max(progress, 0), 100) + '%';
            }
        });
    }

    // Animate steps on scroll
    const stepObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('step-revealed');

                    const stepNumber = entry.target.querySelector('.step-number');
                    if (stepNumber) {
                        stepNumber.style.animation = 'numberPop 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55)';
                    }
                }, index * 200);
            }
        });
    }, { threshold: 0.3 });

    processSteps.forEach(step => stepObserver.observe(step));


    // ==========================================
    // BENEFIT CARDS WITH MAGNETIC HOVER
    // ==========================================

    const benefitCards = document.querySelectorAll('.benefit-card');

    benefitCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;

            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px) scale(1.03)`;
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0) scale(1)';
        });
    });


    // ==========================================
    // BODY ANALYSIS ICONS WITH PULSE
    // ==========================================

    const analysisIcons = document.querySelectorAll('.analysis-icon');

    analysisIcons.forEach((icon, index) => {
        setTimeout(() => {
            icon.style.opacity = '1';
            icon.style.transform = 'scale(1) rotate(360deg)';
        }, index * 150);

        icon.addEventListener('mouseenter', function() {
            this.style.animation = 'iconPulse 0.6s ease-in-out';
        });

        icon.addEventListener('animationend', function() {
            this.style.animation = '';
        });
    });


    // ==========================================
    // INTERACTIVE CTA BUTTON
    // ==========================================

    const ctaButtons = document.querySelectorAll('.cta-button-fitting');

    ctaButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            createRipple(e, this);
        });
    });

    function createRipple(event, element) {
        const ripple = document.createElement('span');
        const rect = element.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;

        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            left: ${x}px;
            top: ${y}px;
            transform: scale(0);
            animation: rippleEffect 0.6s ease-out;
            pointer-events: none;
        `;

        element.style.position = 'relative';
        element.style.overflow = 'hidden';
        element.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    }


    // ==========================================
    // SCROLL-TRIGGERED NUMBER COUNTER
    // ==========================================

    const counters = document.querySelectorAll('[data-count]');

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const endValue = parseInt(target.dataset.count);
                animateCounter(target, 0, endValue, 2000);
                counterObserver.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    function animateCounter(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= end) {
                element.textContent = end;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    counters.forEach(counter => counterObserver.observe(counter));

});


// ==========================================
// CSS ANIMATIONS & STYLES
// ==========================================

const styles = document.createElement('style');
styles.textContent = `
    @keyframes numberPop {
        0% {
            transform: scale(0) rotate(0deg);
            opacity: 0;
        }
        50% {
            transform: scale(1.2) rotate(180deg);
        }
        100% {
            transform: scale(1) rotate(360deg);
            opacity: 1;
        }
    }

    @keyframes iconPulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
    }

    @keyframes rippleEffect {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }

    .timeline-progress-line {
        position: absolute;
        left: 30px;
        top: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(to bottom, rgba(139, 157, 147, 0.1), rgba(139, 157, 147, 0.3));
        z-index: 0;
    }

    .timeline-progress-fill {
        width: 100%;
        height: 0%;
        background: linear-gradient(to bottom, var(--color-accent), var(--color-accent-hover));
        transition: height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 0 15px rgba(139, 157, 147, 0.6);
    }

    .process-step {
        position: relative;
        opacity: 0;
        transform: translateX(-30px);
        transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .process-step.step-revealed {
        opacity: 1;
        transform: translateX(0);
    }

    .benefit-card {
        transition: all 0.3s ease;
    }

    .analysis-icon {
        opacity: 0;
        transform: scale(0) rotate(0deg);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }

    @media (max-width: 768px) {
        .timeline-progress-line {
            left: 15px;
            width: 2px;
        }
    }
`;
document.head.appendChild(styles);
