<?php 
$page_title = 'About & Contact';
include 'includes/header.php'; 
?>

<main style="padding-top: 80px; min-height: 100vh;">

    <!-- About Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="max-width: 1000px; margin: 0 auto;">
                <h1 style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 300; margin-bottom: 3rem; letter-spacing: 0.15em; text-align: center;">
                    About Bikepoint
                </h1>
                
                <div style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 4rem;">
                    <p style="margin-bottom: 2rem;">
                        Founded in 2015, Bikepoint has been serving cycling enthusiasts with passion and dedication. 
                        Our mission is simple: provide premium bikes and exceptional service to make every ride memorable.
                    </p>
                    
                    <p style="margin-bottom: 2rem;">
                        We believe in the freedom of cycling, the joy of exploration, and the importance of quality equipment. 
                        Whether you're a seasoned rider or just starting out, we're here to support your cycling journey.
                    </p>
                    
                    <p>
                        Located in the heart of Salzburg, we're perfectly positioned to help you discover the beauty 
                        of Austria's cycling routes. From mountain trails to scenic city paths, every ride becomes 
                        an unforgettable adventure with Bikepoint.
                    </p>
                </div>
                
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
    
    <!-- Team Section -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="margin-bottom: 4rem;">
                <h2 class="section-title">Our Team</h2>
            </div>
            
            <div class="team-grid fade-in">
                <div class="team-member">
                    <div class="team-photo">MB</div>
                    <h3>Michael Berg</h3>
                    <p>Founder & Owner</p>
                </div>
                
                <div class="team-member">
                    <div class="team-photo">SW</div>
                    <h3>Sarah Winter</h3>
                    <p>Service Manager</p>
                </div>
                
                <div class="team-member">
                    <div class="team-photo">TM</div>
                    <h3>Tom Müller</h3>
                    <p>Rental Specialist</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Values Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="max-width: 1200px; margin: 0 auto;">
                <h2 class="section-title">Our Values</h2>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                <path d="M2 17l10 5 10-5"></path>
                                <path d="M2 12l10 5 10-5"></path>
                            </svg>
                        </div>
                        <h3>Quality First</h3>
                        <p>We only offer premium bikes and equipment that meet our high standards.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h3>Customer Focus</h3>
                        <p>Your satisfaction and safety are our top priorities in everything we do.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3>Reliability</h3>
                        <p>Count on us for consistent service, maintained equipment, and expert advice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="margin-bottom: 4rem;">
                <h2 class="section-title">Get in Touch</h2>
            </div>
            
            <div class="contact-wrapper fade-in">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Visit Us</h3>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Hauptstraße 123<br>5020 Salzburg, Austria</span>
                        </div>
                        
                        <div class="contact-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>+43 662 123456</span>
                        </div>
                        
                        <div class="contact-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>info@bikepoint.at</span>
                        </div>
                        
                        <div class="contact-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span>Monday - Saturday<br>9:00 - 18:00<br>Sunday: Closed</span>
                        </div>
                    </div>
                    
                    <div class="map-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div>
                    <form class="contact-form" method="POST" action="">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="NAME" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" placeholder="EMAIL" required>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" placeholder="MESSAGE" rows="6" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            SEND MESSAGE
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>