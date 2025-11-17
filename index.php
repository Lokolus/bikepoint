<?php 
$page_title = 'Home';
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>BIKEPOINT</h1>
        <p>RIDE. EXPLORE. ENJOY.</p>
        <a href="rental.php" class="btn btn-primary">EXPLORE BIKES</a>
    </div>
    <div class="hero-scroll">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<!-- Services Section -->
<section class="section-spacing">
    <div class="container">
        <h2 class="section-title fade-in">Our Services</h2>
        
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                        <path d="M12 2v4M12 18v4M2 12h4M18 12h4"></path>
                    </svg>
                </div>
                <h3>Bike Rental</h3>
                <p>Premium bikes for every adventure. Choose from our wide selection of mountain bikes, e-bikes, and city bikes.</p>
            </div>
            
            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </div>
                <h3>Shop</h3>
                <p>Quality gear and accessories. Everything you need for the perfect ride, from helmets to maintenance tools.</p>
            </div>
            
            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                    </svg>
                </div>
                <h3>Service</h3>
                <p>Expert maintenance and repairs. Our skilled technicians keep your bike in perfect condition.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section-spacing" style="background-color: var(--color-primary);">
    <div class="container">
        <div class="fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <h2 class="section-title">Why Choose Bikepoint?</h2>
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 3rem;">
                Since 2015, we've been passionate about cycling. Our mission is to provide premium bikes 
                and exceptional service, making every ride memorable. Whether you're exploring mountain 
                trails or cruising through the city, we have the perfect bike for you.
            </p>
            
            <div class="stats-grid">
                <div class="stat">
                    <div class="stat-number">2000+</div>
                    <div class="stat-label">Happy Riders</div>
                </div>
                
                <div class="stat">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Premium Bikes</div>
                </div>
                
                <div class="stat">
                    <div class="stat-number">9</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-spacing">
    <div class="container">
        <div class="fade-in" style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; margin-bottom: 1.5rem; letter-spacing: 0.1em;">
                Ready for your next adventure?
            </h2>
            <p style="font-size: 1.125rem; color: var(--color-text-light); margin-bottom: 3rem; line-height: 1.8;">
                Discover our collection of premium bikes and start exploring today.
            </p>
            <a href="rental.php" class="btn btn-primary">VIEW BIKES</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>