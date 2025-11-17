<?php
$page_title = 'Home';
$has_hero = true; // Kennzeichnet Seiten mit Hero-Bild
include 'includes/header.php';
?>

<!-- Hero Section - Ultra-minimalistisch -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>BIKEPOINT</h1>
        <p>Fahren. Entdecken. Genießen.</p>
        <a href="verkauf.php" class="btn btn-primary">Entdecken</a>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<main>
    <!-- Intro Sektion mit SEO Keywords -->
    <section style="padding: 5rem 0 4rem;">
        <div class="container">
            <div class="fade-in" style="max-width: 1000px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 100; line-height: 1.3; margin-bottom: 2rem; color: var(--color-text); letter-spacing: 0.15em;">
                    Premium Bike Shop in Maria Alm
                </h2>
                <p style="font-size: 1rem; line-height: 1.8; color: var(--color-text-light); max-width: 800px; margin: 0 auto 1.5rem;">
                    Bikepoint ist dein Experte für Fahrradverleih Maria Alm und professionellen Bike Service im Salzburger Land.
                    Ob E-Bike Verleih, Mountainbike Verleih oder Premium-Rennräder – bei uns findest du das perfekte Bike für deine Tour in der Hochkönig Region.
                </p>
                <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); max-width: 750px; margin: 0 auto;">
                    Von Trail-MTB über E-MTB bis zu Gravel Bikes bieten wir die komplette Palette an Premium-Bikes.
                    Dazu professionelles Bikefitting, Bike Reparatur und Fahrrad Verkauf – alles unter einem Dach in Maria Alm.
                </p>
            </div>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Services Übersicht mit SEO Keywords -->
    <section style="padding: 4rem 0;">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 3rem; text-transform: uppercase;">
                    Unsere Services
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3rem 5rem; max-width: 1000px; margin: 0 auto;">
                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Bike Verkauf Maria Alm</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Premium Mountainbikes, E-Bikes, Rennräder und Gravel Bikes von führenden Marken. Persönliche Beratung und individuelle Anpassung für maximalen Fahrspaß.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Ob Trail-MTB für technische Abfahrten oder leichte XC-Rennmaschine – wir finden dein perfektes Bike.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Fahrradverleih & E-Bike Verleih</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Hochwertige Leihbikes für dein Abenteuer im Salzburger Land. Von E-MTB über Trail-Bikes bis zu City-E-Bikes – perfekt gewartet und startklar.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Inklusive Helm, Schloss und Versicherung. Tages-, Wochen- und Saisonmiete verfügbar.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Professionelles Bikefitting</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Biomechanische Analyse und individuelle Sitzpositions-Optimierung für maximalen Komfort und Performance. Mit modernster Videotechnik.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Verhindere Schmerzen und Überlastungen durch die perfekte Bike-Anpassung – für Rennrad, MTB und Gravel.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Bike Service & Werkstatt</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Professionelle Fahrradwerkstatt für alle Bike-Typen. Von Basis-Inspektion bis Komplett-Überholung. Same-Day-Service für die meisten Reparaturen.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Bremsen-Service, Federungs-Setup, Antriebsreinigung und mehr – wir halten dein Bike in Top-Form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Großes Bild Sektion -->
    <section style="position: relative; min-height: 70vh; display: flex; align-items: center; justify-content: center; background-image: url('assets/images/19.08.25-229.jpg'); background-size: cover; background-position: center; filter: grayscale(100%);">
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5));"></div>
        <div class="fade-in" style="position: relative; z-index: 10; text-align: center; color: white; padding: 0 2rem; max-width: 800px;">
            <p style="font-size: clamp(1.5rem, 3vw, 2.5rem); font-weight: 100; line-height: 1.5; letter-spacing: 0.1em;">
                Die Trails der Hochkönig Region warten. Starte dein Abenteuer mit Premium-Bikes aus Maria Alm.
            </p>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Standort & Region Sektion mit SEO Keywords -->
    <section style="padding: 4rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; text-align: center; margin-bottom: 2.5rem; letter-spacing: 0.15em;">
                    Bike Shop im Herzen der Hochkönig Region
                </h3>

                <div class="fade-in" style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <p style="font-size: 1rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1.5rem;">
                        Bikepoint Maria Alm ist dein Ausgangspunkt für unvergessliche Bike-Touren im Salzburger Land.
                        Ob anspruchsvolle MTB-Trails am Hochkönig, entspannte E-Bike-Touren durch das Salzachtal oder alpine Passstraßen für Rennradfahrer – die Region bietet für jeden das Richtige.
                    </p>
                    <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                        Als lokaler Bike-Experte kennen wir die besten Strecken, versteckten Trails und spektakulärsten Aussichtspunkte.
                        Wir beraten dich nicht nur beim Bike-Kauf oder Verleih, sondern geben dir auch wertvolle Tipps für deine Touren in Maria Alm und Umgebung.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 4rem 0; text-align: center; background-color: #0A0A0A;">
        <div class="container fade-in">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 1.5rem; color: white;">
                Bereit für dein nächstes Abenteuer?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 2.5rem; letter-spacing: 0.1em;">
                Besuche uns in Maria Alm oder kontaktiere uns für eine persönliche Beratung
            </p>
            <a href="about.php" class="btn btn-primary">Jetzt Kontakt aufnehmen</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
