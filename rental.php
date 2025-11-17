<?php
$page_title = 'Verleih & Service';
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Fullscreen Schwarz-Weiß -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/mtbkuh.jpg');"></div>
    <div class="hero-content">
        <h1>Bike Verleih<br>& Service</h1>
        <p>Premium Bikes für jedes Abenteuer</p>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<main>
    <!-- Elegante Intro-Sektion -->
    <section style="padding: 5rem 0 4rem;">
        <div class="container">
            <div class="fade-in" style="max-width: 1000px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 100; line-height: 1.3; margin-bottom: 2rem; color: var(--color-text); letter-spacing: 0.15em;">
                    Erlebe die Alpen auf Premium-Bikes
                </h2>
                <p style="font-size: 1rem; line-height: 1.8; color: var(--color-text-light); max-width: 800px; margin: 0 auto 1.5rem;">
                    Alle Verleihe inkludieren Helm, Schloss und Basisversicherung.
                    Unsere Bikes sind perfekt gewartet und bereit für dein Abenteuer in den Bergen.
                </p>
                <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); max-width: 750px; margin: 0 auto;">
                    Von Trail-Bikes über E-Mountainbikes bis zu XC-Race-Modellen – wir haben das passende Bike für deine Tour.
                    Reserviere online oder besuche uns direkt im Shop für eine persönliche Beratung.
                </p>
            </div>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Mountainbikes Sektion -->
    <section style="padding: 4rem 0;">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 3rem; text-transform: uppercase;">
                    Mountainbikes
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3.5rem 5rem;">
                    <!-- Trail Expert -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem;">Trail Expert</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Perfekt ausbalanciert für Uphills und Downhills. Mit Vollfederung und 29" Rädern meisterst du technische Trails genauso souverän wie flowige Bergabpassagen.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• Vollfederung</li>
                            <li>• 29" Räder</li>
                            <li>• Shimano XT Schaltwerk</li>
                            <li>• Hydraulische Scheibenbremsen</li>
                        </ul>
                    </div>

                    <!-- Enduro Pro -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem;">Enduro Pro</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Für anspruchsvolle Trails und steile Abfahrten. Carbon-Rahmen und Fox-Federung bieten maximale Performance bei minimalem Gewicht.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• Carbon Rahmen</li>
                            <li>• 27.5" Räder</li>
                            <li>• Fox Federung</li>
                            <li>• Vario-Sattelstütze</li>
                        </ul>
                    </div>

                    <!-- XC Race -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem;">XC Race</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Leichtbau-Rennmaschine für maximale Uphill-Performance. Race-Geometrie und 100mm Federweg sorgen für Effizienz auf langen Touren.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• Leichtbau-Design</li>
                            <li>• 29" Räder</li>
                            <li>• Race Geometrie</li>
                            <li>• 100mm Federweg</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Großes Bild Sektion -->
    <section style="position: relative; min-height: 70vh; display: flex; align-items: center; justify-content: center; background-image: url('assets/images/19.08.25-360.jpg'); background-size: cover; background-position: center; filter: grayscale(100%);">
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5));"></div>
        <div class="fade-in" style="position: relative; z-index: 10; text-align: center; color: white; padding: 0 2rem; max-width: 800px;">
            <p style="font-size: clamp(1.5rem, 3vw, 2.5rem); font-weight: 100; line-height: 1.5; letter-spacing: 0.1em;">
                Die Berge warten. Starte dein Abenteuer mit den besten Bikes der Region.
            </p>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- E-Bikes Sektion -->
    <section style="padding: 4rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 3rem; text-transform: uppercase;">
                    E-Bikes
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3.5rem 5rem;">
                    <!-- City Comfort -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem;">City Comfort</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Entspannt durch Maria Alm und Umgebung. Mit 500Wh Akku und Tiefeinstieg perfekt für entspannte Touren durch das Salzburger Land.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• 500Wh Akku</li>
                            <li>• Tiefeinstieg-Rahmen</li>
                            <li>• Reichweite: bis 100km</li>
                            <li>• Integrierte Beleuchtung</li>
                        </ul>
                    </div>

                    <!-- E-MTB Explorer -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem;">E-MTB Explorer</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Kraftvoll bergauf, souverän bergab. Mit 750Wh Akku und Vollfederung erreichst du auch entlegene Trails ohne große Anstrengung.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• 750Wh Akku</li>
                            <li>• Vollfederung</li>
                            <li>• Reichweite: bis 90km</li>
                            <li>• Trail Modus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Service & Wartung Sektion -->
    <section style="padding: 4rem 0;">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; text-align: center; margin-bottom: 2.5rem; letter-spacing: 0.15em;">
                    Service & Wartung
                </h3>

                <div class="fade-in" style="max-width: 800px; margin: 0 auto 3rem; text-align: center;">
                    <p style="font-size: 1rem; line-height: 1.8; color: var(--color-text-light);">
                        Unsere Werkstatt bietet professionellen Service für alle Bike-Typen. Von der einfachen Inspektion bis zur kompletten Überholung – wir kümmern uns um dein Bike, damit du sorglos fahren kannst.
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3.5rem 5rem; max-width: 1000px; margin: 0 auto;">
                    <!-- Basis Service -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Basis Service
                        </h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Die schnelle Inspektion für zwischendurch. Wir überprüfen alle sicherheitsrelevanten Komponenten und stellen Bremsen sowie Schaltung präzise ein.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• Bremsen einstellen</li>
                            <li>• Schaltung justieren</li>
                            <li>• Kette schmieren</li>
                            <li>• Sicherheitscheck</li>
                            <li>• Reifendruck prüfen</li>
                        </ul>
                    </div>

                    <!-- Komplett Service -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 0.75rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Komplett Service
                        </h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Die große Inspektion für maximale Sicherheit. Alle Komponenten werden gereinigt, geprüft und bei Bedarf ersetzt. Inklusive Federungs-Setup nach deinen Wünschen.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• Komplette Bike-Inspektion</li>
                            <li>• Bremsen-Service & Beläge</li>
                            <li>• Antrieb Tiefenreinigung</li>
                            <li>• Laufrad zentrieren & Speichen</li>
                            <li>• Federungs-Setup</li>
                            <li>• Kabelwechsel bei Bedarf</li>
                        </ul>
                    </div>
                </div>

                <div class="fade-in" style="text-align: center; margin-top: 3rem;">
                    <p style="font-size: 0.875rem; color: var(--color-text-light); max-width: 700px; margin: 0 auto; line-height: 2;">
                        Brauchst du einen individuellen Service oder Reparatur? Kontaktiere uns für eine kostenlose Beratung.
                        Wir bieten Same-Day-Service für die meisten Reparaturen und Wartungsarbeiten.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 4rem 0; text-align: center; background-color: #0A0A0A; position: relative; overflow: hidden;">
        <!-- Background Image -->
        <div style="position: absolute; inset: 0; background-image: url('assets/images/chill.jpg'); background-size: cover; background-position: center; filter: grayscale(100%); opacity: 0.25;"></div>

        <!-- Overlay -->
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10, 10, 10, 0.7), rgba(10, 10, 10, 0.85));"></div>

        <!-- Content -->
        <div class="container fade-in" style="position: relative; z-index: 1;">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 1.5rem; color: white;">
                Bereit für deine nächste Tour?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 2.5rem; letter-spacing: 0.1em;">
                Reserviere jetzt dein Bike oder vereinbare einen Service-Termin
            </p>
            <a href="about.php" class="btn btn-primary">Jetzt Kontakt aufnehmen</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
