// ==========================================
// RENTAL - Interactive Pricing & Accordion
// ==========================================

document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // ACCORDION FOR BIKE CATEGORIES
    // ==========================================

    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const content = this.nextElementSibling;
            const icon = this.querySelector('.accordion-icon');
            const allItems = document.querySelectorAll('.accordion-item');

            // Close other items
            allItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    const otherContent = otherItem.querySelector('.accordion-content');
                    const otherIcon = otherItem.querySelector('.accordion-icon');
                    otherContent.style.maxHeight = '0';
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current item
            item.classList.toggle('active');

            if (item.classList.contains('active')) {
                content.style.maxHeight = content.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';

                // Animate bikes inside
                const bikes = content.querySelectorAll('.rental-bike-card');
                bikes.forEach((bike, index) => {
                    setTimeout(() => {
                        bike.style.opacity = '1';
                        bike.style.transform = 'translateX(0)';
                    }, index * 100);
                });
            } else {
                content.style.maxHeight = '0';
                if (icon) icon.style.transform = 'rotate(0deg)';
            }
        });
    });

    // Open first accordion by default
    if (accordionHeaders.length > 0) {
        accordionHeaders[0].click();
    }


    // ==========================================
    // PRICING CALCULATOR
    // ==========================================

    const priceCalculators = document.querySelectorAll('.price-calculator');

    priceCalculators.forEach(calc => {
        const daysInput = calc.querySelector('.days-input');
        const priceDisplay = calc.querySelector('.calculated-price');
        const dailyRate = parseFloat(calc.dataset.dailyRate) || 50;

        if (daysInput && priceDisplay) {
            daysInput.addEventListener('input', function() {
                const days = parseInt(this.value) || 1;
                let total = dailyRate * days;

                // Apply discounts
                if (days >= 7) total *= 0.85; // 15% off
                else if (days >= 3) total *= 0.90; // 10% off

                priceDisplay.textContent = `€${total.toFixed(2)}`;
                priceDisplay.style.animation = 'priceUpdate 0.3s ease';

                setTimeout(() => {
                    priceDisplay.style.animation = '';
                }, 300);
            });
        }
    });


    // ==========================================
    // RENTAL CARD HOVER EFFECTS
    // ==========================================

    const rentalCards = document.querySelectorAll('.rental-bike-card');

    rentalCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.02)';
            this.style.boxShadow = '0 15px 35px rgba(139, 157, 147, 0.2)';

            const badge = this.querySelector('.availability-badge');
            if (badge) {
                badge.style.transform = 'scale(1.1)';
            }

            const image = this.querySelector('.rental-bike-image');
            if (image) {
                image.style.filter = 'grayscale(0%) brightness(1.05)';
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = 'none';

            const badge = this.querySelector('.availability-badge');
            if (badge) {
                badge.style.transform = 'scale(1)';
            }

            const image = this.querySelector('.rental-bike-image');
            if (image) {
                image.style.filter = 'grayscale(100%) brightness(1)';
            }
        });
    });


    // ==========================================
    // SERVICE PACKAGE COMPARISON
    // ==========================================

    const servicePackages = document.querySelectorAll('.service-package-card');

    servicePackages.forEach(pkg => {
        pkg.addEventListener('click', function() {
            servicePackages.forEach(p => p.classList.remove('selected'));
            this.classList.add('selected');

            this.style.animation = 'packageSelect 0.4s ease';
            setTimeout(() => {
                this.style.animation = '';
            }, 400);
        });
    });


    // ==========================================
    // TOOLTIP FOR FEATURES
    // ==========================================

    const featureIcons = document.querySelectorAll('.feature-icon-rental');

    featureIcons.forEach(icon => {
        const tooltip = icon.querySelector('.tooltip');

        icon.addEventListener('mouseenter', function() {
            if (tooltip) {
                tooltip.style.opacity = '1';
                tooltip.style.transform = 'translateY(-5px)';
            }
        });

        icon.addEventListener('mouseleave', function() {
            if (tooltip) {
                tooltip.style.opacity = '0';
                tooltip.style.transform = 'translateY(0)';
            }
        });
    });


    // ==========================================
    // AVAILABILITY PULSE ANIMATION
    // ==========================================

    const availableBadges = document.querySelectorAll('.availability-badge.available');

    availableBadges.forEach(badge => {
        setInterval(() => {
            badge.style.animation = 'pulse 1.5s ease-in-out';
            setTimeout(() => {
                badge.style.animation = '';
            }, 1500);
        }, 3000);
    });


    // ==========================================
    // DURATION SLIDER
    // ==========================================

    const durationSliders = document.querySelectorAll('.duration-slider');

    durationSliders.forEach(slider => {
        const input = slider.querySelector('input[type="range"]');
        const valueDisplay = slider.querySelector('.duration-value');

        if (input && valueDisplay) {
            input.addEventListener('input', function() {
                const value = this.value;
                valueDisplay.textContent = value + (value == 1 ? ' Tag' : ' Tage');

                // Update slider fill
                const percent = ((value - this.min) / (this.max - this.min)) * 100;
                this.style.background = `linear-gradient(to right, var(--color-accent) ${percent}%, #E0E0E0 ${percent}%)`;
            });

            // Trigger initial update
            input.dispatchEvent(new Event('input'));
        }
    });


    // ==========================================
    // SMOOTH SCROLL TO BOOKING
    // ==========================================

    const bookNowButtons = document.querySelectorAll('.book-now-btn');

    bookNowButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bikeType = this.dataset.bikeType;

            // Scroll to contact section
            const contactSection = document.querySelector('.rental-contact-section');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth' });

                // Highlight bike type in form
                const bikeSelect = document.querySelector('#bike-type-select');
                if (bikeSelect) {
                    bikeSelect.value = bikeType;
                    bikeSelect.style.animation = 'highlight 0.6s ease';
                }
            }
        });
    });

});


// ==========================================
// CSS ANIMATIONS
// ==========================================

const style = document.createElement('style');
style.textContent = `
    @keyframes priceUpdate {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.15);
            color: var(--color-accent);
        }
    }

    @keyframes packageSelect {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    @keyframes highlight {
        0%, 100% {
            border-color: var(--color-border);
        }
        50% {
            border-color: var(--color-accent);
            box-shadow: 0 0 20px rgba(139, 157, 147, 0.3);
        }
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.7;
            transform: scale(1.05);
        }
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .accordion-icon {
        transition: transform 0.3s ease;
    }

    .rental-bike-card {
        opacity: 0;
        transform: translateX(-20px);
        transition: all 0.4s ease;
    }

    .tooltip {
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.9);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        font-size: 0.75rem;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
        margin-bottom: 8px;
    }

    .tooltip::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 5px solid transparent;
        border-top-color: rgba(0, 0, 0, 0.9);
    }

    .service-package-card.selected {
        border: 2px solid var(--color-accent);
        background: rgba(139, 157, 147, 0.05);
    }
`;
document.head.appendChild(style);
