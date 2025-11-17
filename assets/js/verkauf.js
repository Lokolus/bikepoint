// ==========================================
// VERKAUF - Interactive Product Grid & Filters
// Unique Features: Category Tabs, Image Zoom, Product Cards
// ==========================================

document.addEventListener('DOMContentLoaded', function() {

    // ==========================================
    // CATEGORY FILTER TABS WITH SMOOTH TRANSITION
    // ==========================================

    const categoryTabs = document.querySelectorAll('.category-tab');
    const bikeGrids = document.querySelectorAll('.bike-category-grid');

    if (categoryTabs.length > 0) {
        // Create tab indicator
        const tabContainer = categoryTabs[0].parentElement;
        const indicator = document.createElement('div');
        indicator.className = 'tab-active-indicator';
        tabContainer.appendChild(indicator);

        function updateIndicator(activeTab) {
            const rect = activeTab.getBoundingClientRect();
            const containerRect = tabContainer.getBoundingClientRect();
            indicator.style.width = rect.width + 'px';
            indicator.style.left = (rect.left - containerRect.left) + 'px';
        }

        categoryTabs.forEach((tab, index) => {
            tab.addEventListener('click', function() {
                const category = this.dataset.category;

                // Update active state
                categoryTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                updateIndicator(this);

                // Filter categories
                bikeGrids.forEach(grid => {
                    if (category === 'all' || grid.dataset.category === category) {
                        grid.style.display = 'grid';
                        setTimeout(() => {
                            grid.style.opacity = '1';
                            grid.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        grid.style.opacity = '0';
                        grid.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            grid.style.display = 'none';
                        }, 300);
                    }
                });
            });

            // Initialize first tab
            if (index === 0) {
                setTimeout(() => updateIndicator(tab), 100);
            }
        });
    }


    // ==========================================
    // BIKE CARDS WITH IMAGE ZOOM & OVERLAY
    // ==========================================

    const bikeCards = document.querySelectorAll('.bike-card-verkauf');

    bikeCards.forEach(card => {
        const image = card.querySelector('.bike-image-zoom');
        const overlay = card.querySelector('.bike-hover-overlay');
        const quickView = card.querySelector('.quick-view-btn');

        card.addEventListener('mouseenter', function() {
            if (image) {
                image.style.transform = 'scale(1.15)';
                image.style.filter = 'grayscale(0%)';
            }

            if (overlay) {
                overlay.style.opacity = '1';
            }

            if (quickView) {
                quickView.style.transform = 'translateY(0)';
                quickView.style.opacity = '1';
            }

            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 25px 60px rgba(0, 0, 0, 0.2)';
        });

        card.addEventListener('mouseleave', function() {
            if (image) {
                image.style.transform = 'scale(1)';
                image.style.filter = 'grayscale(100%)';
            }

            if (overlay) {
                overlay.style.opacity = '0';
            }

            if (quickView) {
                quickView.style.transform = 'translateY(20px)';
                quickView.style.opacity = '0';
            }

            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });


    // ==========================================
    // STAGGERED CARD REVEAL ANIMATION
    // ==========================================

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const cards = entry.target.querySelectorAll('.bike-card-verkauf');
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, index * 100);
                });
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    bikeGrids.forEach(grid => {
        revealObserver.observe(grid);

        const cards = grid.querySelectorAll('.bike-card-verkauf');
        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(40px) scale(0.95)';
            card.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
        });
    });


    // ==========================================
    // FEATURE HIGHLIGHTS WITH SLIDE-IN
    // ==========================================

    const featureItems = document.querySelectorAll('.verkauf-feature');

    const featureObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateX(0)';
                }, idx * 100);
            }
        });
    }, { threshold: 0.3 });

    featureItems.forEach(item => {
        featureObserver.observe(item);
        item.style.opacity = '0';
        item.style.transform = 'translateX(-30px)';
        item.style.transition = 'all 0.6s ease';

        // Hover effect
        item.addEventListener('mouseenter', function() {
            this.style.backgroundColor = 'rgba(139, 157, 147, 0.08)';
            this.style.paddingLeft = '2rem';
        });

        item.addEventListener('mouseleave', function() {
            this.style.backgroundColor = 'transparent';
            this.style.paddingLeft = '1rem';
        });
    });


    // ==========================================
    // PROCESS STEPS WITH NUMBER ANIMATION
    // ==========================================

    const processSteps = document.querySelectorAll('.verkauf-step');

    const processObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('step-active');

                    const stepNum = entry.target.querySelector('.step-number-verkauf');
                    if (stepNum) {
                        stepNum.style.animation = 'stepNumberBounce 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55)';
                    }
                }, index * 200);
            }
        });
    }, { threshold: 0.4 });

    processSteps.forEach(step => processObserver.observe(step));


    // ==========================================
    // BRAND LOGOS CAROUSEL
    // ==========================================

    const brandLogos = document.querySelectorAll('.brand-logo');
    if (brandLogos.length > 0) {
        let currentBrand = 0;

        setInterval(() => {
            brandLogos[currentBrand].style.opacity = '0.4';
            brandLogos[currentBrand].style.transform = 'scale(1)';

            currentBrand = (currentBrand + 1) % brandLogos.length;

            brandLogos[currentBrand].style.opacity = '1';
            brandLogos[currentBrand].style.transform = 'scale(1.15)';
        }, 2500);
    }


    // ==========================================
    // LIGHTBOX FOR BIKE IMAGES
    // ==========================================

    const bikeImages = document.querySelectorAll('.bike-image-clickable');

    bikeImages.forEach(img => {
        img.addEventListener('click', function() {
            createImageLightbox(this.src);
        });

        img.style.cursor = 'zoom-in';
    });

    function createImageLightbox(imageSrc) {
        const lightbox = document.createElement('div');
        lightbox.className = 'image-lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-backdrop"></div>
            <div class="lightbox-content">
                <img src="${imageSrc}" alt="Bike Image">
                <button class="lightbox-close-btn">&times;</button>
            </div>
        `;

        document.body.appendChild(lightbox);
        document.body.style.overflow = 'hidden';

        setTimeout(() => lightbox.classList.add('lightbox-active'), 10);

        const closeBtn = lightbox.querySelector('.lightbox-close-btn');
        const backdrop = lightbox.querySelector('.lightbox-backdrop');

        [closeBtn, backdrop].forEach(el => {
            el.addEventListener('click', () => {
                lightbox.classList.remove('lightbox-active');
                setTimeout(() => {
                    lightbox.remove();
                    document.body.style.overflow = '';
                }, 300);
            });
        });
    }

});


// ==========================================
// CSS ANIMATIONS & STYLES
// ==========================================

const styles = document.createElement('style');
styles.textContent = `
    @keyframes stepNumberBounce {
        0% {
            transform: scale(0) rotate(-180deg);
            opacity: 0;
        }
        60% {
            transform: scale(1.2) rotate(10deg);
        }
        100% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }
    }

    .tab-active-indicator {
        position: absolute;
        bottom: -2px;
        height: 3px;
        background: linear-gradient(90deg, var(--color-accent), var(--color-accent-hover));
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 12px rgba(139, 157, 147, 0.5);
        border-radius: 2px 2px 0 0;
    }

    .bike-hover-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    .quick-view-btn {
        position: absolute;
        bottom: 1.5rem;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        opacity: 0;
        transition: all 0.4s ease;
        background: var(--color-accent);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 4px;
        font-size: 0.875rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        cursor: pointer;
        pointer-events: auto;
    }

    .bike-image-zoom {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        filter: grayscale(100%);
    }

    .bike-card-verkauf {
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .step-active {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    .image-lightbox {
        position: fixed;
        inset: 0;
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-lightbox.lightbox-active {
        opacity: 1;
    }

    .lightbox-backdrop {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.95);
        cursor: pointer;
    }

    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90vh;
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    .lightbox-active .lightbox-content {
        transform: scale(1);
    }

    .lightbox-content img {
        max-width: 100%;
        max-height: 90vh;
        object-fit: contain;
        display: block;
    }

    .lightbox-close-btn {
        position: absolute;
        top: -50px;
        right: 0;
        background: transparent;
        border: none;
        color: white;
        font-size: 3rem;
        cursor: pointer;
        transition: transform 0.3s ease;
        line-height: 1;
        padding: 0;
    }

    .lightbox-close-btn:hover {
        transform: rotate(90deg) scale(1.2);
    }

    @media (max-width: 768px) {
        .lightbox-close-btn {
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.7);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 2rem;
        }
    }
`;
document.head.appendChild(styles);
