<?php
$page_title = 'Verleih & Service';
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Fullscreen Schwarz-Weiß wie Homepage -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/19.08.25-360.jpg');"></div>
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
    <!-- Introduction Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="content-box fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.125rem; line-height: 2; color: var(--color-text-light); margin-bottom: 3rem;">
                    Alle Verleihe inkludieren Helm, Schloss und Basisversicherung.
                </p>
            </div>
        </div>
    </section>

    <!-- Bike Categories - Offenes Layout -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <!-- Mountainbikes -->
            <div class="fade-in" style="margin-bottom: 12rem;">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 5rem; text-align: center;">Mountainbikes</h2>

                <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 8rem;">
                    <!-- Trail Expert -->
                    <div style="text-align: center;">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">Trail Expert</h3>
                        <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em;">€45/Tag</div>
                        <ul style="list-style: none; padding: 0; max-width: 500px; margin: 0 auto;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Vollfederung</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">29" Räder</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Shimano XT Schaltwerk</li>
                            <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Hydraulische Scheibenbremsen</li>
                        </ul>
                    </div>

                    <!-- Enduro Pro -->
                    <div style="text-align: center;">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">Enduro Pro</h3>
                        <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em;">€55/Tag</div>
                        <ul style="list-style: none; padding: 0; max-width: 500px; margin: 0 auto;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Carbon Rahmen</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">27.5" Räder</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Fox Federung</li>
                            <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Vario-Sattelstütze</li>
                        </ul>
                    </div>

                    <!-- XC Race -->
                    <div style="text-align: center;">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">XC Race</h3>
                        <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em;">€50/Tag</div>
                        <ul style="list-style: none; padding: 0; max-width: 500px; margin: 0 auto;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Leichtbau-Design</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">29" Räder</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Race Geometrie</li>
                            <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">100mm Federweg</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- E-Bikes -->
            <div class="fade-in" style="margin-bottom: 12rem;">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 5rem; text-align: center;">E-Bikes</h2>

                <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 8rem;">
                    <!-- City Comfort -->
                    <div style="text-align: center;">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">City Comfort</h3>
                        <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em;">€40/Tag</div>
                        <ul style="list-style: none; padding: 0; max-width: 500px; margin: 0 auto;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">500Wh Akku</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Tiefeinstieg-Rahmen</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Reichweite: bis 100km</li>
                            <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Integrierte Beleuchtung</li>
                        </ul>
                    </div>

                    <!-- E-MTB Explorer -->
                    <div style="text-align: center;">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">E-MTB Explorer</h3>
                        <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em;">€60/Tag</div>
                        <ul style="list-style: none; padding: 0; max-width: 500px; margin: 0 auto;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">750Wh Akku</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Vollfederung</li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Reichweite: bis 90km</li>
                            <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Trail Modus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section - Offenes Layout -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Service & Wartung</h2>
            </div>

            <div class="fade-in" style="max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 8rem;">
                <!-- Basis Service -->
                <div style="text-align: center;">
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">Basis Service</h3>
                    <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2.5rem; letter-spacing: 0.05em;">€45</div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Bremsen einstellen</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Schaltung justieren</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Kette schmieren</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Sicherheitscheck</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Reifendruck prüfen</li>
                    </ul>
                </div>

                <!-- Komplett Service -->
                <div style="text-align: center;">
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1rem;">Komplett Service</h3>
                    <div style="font-size: 2rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2.5rem; letter-spacing: 0.05em;">€95</div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Komplette Bike-Inspektion</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Bremsen-Service & Beläge</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Antrieb Tiefenreinigung</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Laufrad zentrieren & Speichen</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Federungs-Setup</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Kabelwechsel bei Bedarf</li>
                    </ul>
                </div>
            </div>

            <div class="fade-in" style="text-align: center; margin-top: 6rem;">
                <p style="font-size: 0.875rem; color: var(--color-text-light); max-width: 700px; margin: 0 auto; line-height: 2;">
                    Brauchst du einen individuellen Service oder Reparatur? Kontaktiere uns für eine kostenlose Beratung.
                    Wir bieten Same-Day-Service für die meisten Reparaturen und Wartungsarbeiten.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section - Dunkler Hintergrund -->
    <section style="padding: var(--spacing-md) 0; background-color: #0A0A0A; text-align: center;">
        <div class="container fade-in">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 2rem; color: white;">
                Bereit für deine nächste Tour?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 3rem; letter-spacing: 0.1em;">
                Reserviere jetzt dein Bike oder vereinbare einen Service-Termin
            </p>
            <a href="about.php" class="btn btn-primary">Jetzt Kontakt aufnehmen</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
