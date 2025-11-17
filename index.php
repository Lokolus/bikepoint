<?php
$page_title = 'Home';
$has_hero = true; // Kennzeichnet Seiten mit Hero-Bild
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>BIKEPOINT</h1>
        <p>FAHREN. ENTDECKEN. GENIESSEN.</p>
        <a href="rental.php" class="btn btn-primary">BIKES ENTDECKEN</a>
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
        <h2 class="section-title fade-in">Unsere Services</h2>

        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </div>
                <h3><a href="verkauf.php" style="color: inherit;">Bike Verkauf</a></h3>
                <p>Premium-Bikes kaufen - Mountainbikes, E-Bikes, Rennräder und Gravelbikes von Top-Marken. Inklusive Testfahrt und Beratung.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                        <path d="M12 2v4M12 18v4M2 12h4M18 12h4"></path>
                    </svg>
                </div>
                <h3><a href="rental.php" style="color: inherit;">Bike Verleih</a></h3>
                <p>Premium-Bikes mieten für jedes Abenteuer. Große Auswahl an Mountainbikes, E-Bikes, Rennrädern und Kinderbikes.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                    </svg>
                </div>
                <h3><a href="rental.php#service" style="color: inherit;">Bike Service</a></h3>
                <p>Professionelle Wartung und Reparaturen. Unsere erfahrenen Techniker halten dein Bike in Top-Zustand.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 3h18v18H3z"></path>
                        <path d="M9 9h6v6H9z"></path>
                        <path d="M9 3v6M15 3v6M9 15v6M15 15v6M3 9h6M3 15h6M15 9h6M15 15h6"></path>
                    </svg>
                </div>
                <h3><a href="bikefitting.php" style="color: inherit;">Bikefitting</a></h3>
                <p>Professionelle Positionsoptimierung für maximalen Komfort und Leistung. Individuelle Anpassung an deinen Körper.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section-spacing" style="background-color: var(--color-primary);">
    <div class="container">
        <div class="fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <h2 class="section-title">Warum Bikepoint?</h2>
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 3rem;">
                Seit 2015 brennen wir für das Radfahren. Unsere Mission ist es, Premium-Bikes
                und außergewöhnlichen Service zu bieten, damit jede Fahrt unvergesslich wird. Ob du
                Bergpfade erkundest oder durch die Stadt cruist, wir haben das perfekte Bike für dich.
            </p>

            <div class="stats-grid">
                <div class="stat">
                    <div class="stat-number">2000+</div>
                    <div class="stat-label">Glückliche Fahrer</div>
                </div>

                <div class="stat">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Premium Bikes</div>
                </div>

                <div class="stat">
                    <div class="stat-number">9</div>
                    <div class="stat-label">Jahre Erfahrung</div>
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
                Bereit für dein nächstes Abenteuer?
            </h2>
            <p style="font-size: 1.125rem; color: var(--color-text-light); margin-bottom: 3rem; line-height: 1.8;">
                Entdecke unsere Kollektion an Premium-Bikes und starte noch heute deine Erkundungstour.
            </p>
            <a href="rental.php" class="btn btn-primary">BIKES ANSEHEN</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>