<?php
$page_title = "Bike Verkauf";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Fullscreen Schwarz-Weiß wie Homepage -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/19.08.25-229.jpg');"></div>
    <div class="hero-content">
        <h1>Premium Bikes<br>kaufen</h1>
        <p>Hochwertige Bikes für jeden Anspruch</p>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<!-- Main Content -->
<main>
    <!-- Introduction Section - Premium Text, max 60% Breite -->
    <section class="section-spacing">
        <div class="container">
            <div class="content-box fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.125rem; line-height: 2; color: var(--color-text-light); margin-bottom: 3rem;">
                    Bei Bikepoint findest du eine sorgfältig ausgewählte Auswahl an Premium-Bikes führender Marken.
                    Ob Mountainbike, E-Bike, Rennrad oder Gravelbike – wir bieten dir hochwertige Räder für jeden Einsatzbereich.
                </p>
            </div>
        </div>
    </section>

    <!-- Bike Categories Section - Offenes Layout ohne Boxen -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 1.5rem;">Bike-Kategorien</h2>
            </div>

            <!-- Mountainbikes -->
            <div class="fade-in" style="margin-bottom: 12rem;">
                <h3 style="font-size: 1.75rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 3rem; text-align: center;">Mountainbikes</h3>
                <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 2.5rem;">
                        Für Trail, Enduro und Cross Country
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">All-Mountain & Trail (120-150mm)</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Enduro (150-180mm)</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Cross Country (100-120mm)</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Downhill (180mm+)</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Specialized · Trek · Canyon · Santa Cruz · Cube</p>
                </div>
            </div>

            <!-- E-Mountainbikes -->
            <div class="fade-in" style="margin-bottom: 12rem;">
                <h3 style="font-size: 1.75rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 3rem; text-align: center;">E-Mountainbikes</h3>
                <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 2.5rem;">
                        Mehr Power für längere Touren
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">E-All-Mountain</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">E-Enduro</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">E-Trekking</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Top-Motoren: Bosch, Shimano, Fazua</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Specialized · Haibike · Focus · Bulls · Cube</p>
                </div>
            </div>

            <!-- Rennräder -->
            <div class="fade-in" style="margin-bottom: 12rem;">
                <h3 style="font-size: 1.75rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 3rem; text-align: center;">Rennräder</h3>
                <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 2.5rem;">
                        Für Straße und Wettkampf
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Race-Rennräder (Carbon)</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Endurance-Modelle</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Aero-Rennräder</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Shimano, SRAM, Campagnolo</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Specialized · Trek · Canyon · Bianchi · Cervelo</p>
                </div>
            </div>

            <!-- Gravelbikes -->
            <div class="fade-in" style="margin-bottom: 12rem;">
                <h3 style="font-size: 1.75rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 3rem; text-align: center;">Gravelbikes</h3>
                <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 2.5rem;">
                        Vielseitig für Straße und Schotter
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">All-Road Bikes</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Adventure-Modelle</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Bikepacking-tauglich</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Disc-Bremsen Standard</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Specialized · Trek · Canyon · Giant · Cannondale</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section - Offenes Layout -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 1.5rem;">Unsere Services</h2>
            </div>

            <div class="fade-in" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 6rem;">
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Persönliche Beratung</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Unsere Bike-Experten nehmen sich Zeit für dich und finden gemeinsam mit dir das perfekte Bike.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Testfahrten</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Teste dein Wunsch-Bike ausgiebig auf echten Trails und Straßen.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Professionelles Setup</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Jedes Bike wird vor der Übergabe professionell aufgebaut und auf Sicherheit geprüft.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Dunkler Hintergrund -->
    <section style="padding: var(--spacing-md) 0; background-color: #0A0A0A; text-align: center;">
        <div class="container fade-in">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 2rem; color: white;">
                Bereit für dein neues Bike?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 3rem; letter-spacing: 0.1em;">
                Besuche uns im Shop oder vereinbare einen Beratungstermin
            </p>
            <a href="about.php" class="btn btn-primary">Jetzt Kontakt aufnehmen</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
