<?php
$page_title = "Bikefitting";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Fullscreen Schwarz-Weiß wie Homepage -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/19.08.25-380.jpg');"></div>
    <div class="hero-content">
        <h1>Professionelles<br>Bikefitting</h1>
        <p>Maximiere Komfort & Leistung</p>
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
                    Bikefitting ist die professionelle Anpassung deines Fahrrads an deine individuellen körperlichen Voraussetzungen.
                    Eine optimale Sitzposition verbessert nicht nur deine Leistung, sondern beugt auch Schmerzen und Verletzungen vor.
                </p>
            </div>
        </div>
    </section>

    <!-- Benefits Section - Offenes Layout -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Vorteile</h2>
            </div>

            <div class="fade-in" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 6rem;">
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Maximale Effizienz</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Optimiere deine Kraftübertragung und steigere deine Leistung durch die perfekte Sitzposition.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Komfort & Gesundheit</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Vermeide Schmerzen in Rücken, Nacken, Knien und Händen durch ergonomische Anpassungen.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Verletzungsprävention</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Reduziere das Risiko von Überlastungen und chronischen Beschwerden nachhaltig.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Unser Prozess</h2>
            </div>

            <div class="fade-in" style="max-width: 900px; margin: 0 auto; display: grid; gap: 8rem;">
                <!-- Step 1 -->
                <div style="text-align: center;">
                    <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em; opacity: 0.3;">1</div>
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Anamnese & Zielsetzung</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem; max-width: 600px; margin: 0 auto;">
                        Ausführliches Gespräch über deine Fahrgewohnheiten, Ziele, bisherige Beschwerden und gesundheitliche Einschränkungen.
                    </p>
                </div>

                <!-- Step 2 -->
                <div style="text-align: center;">
                    <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em; opacity: 0.3;">2</div>
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Körperanalyse</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem; max-width: 600px; margin: 0 auto;">
                        Messung deiner Körpermaße, Flexibilitätstests und Analyse deiner Anatomie.
                    </p>
                </div>

                <!-- Step 3 -->
                <div style="text-align: center;">
                    <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em; opacity: 0.3;">3</div>
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Videoanalyse</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem; max-width: 600px; margin: 0 auto;">
                        Du fährst auf unserem Ergometer, während wir deine Position aus verschiedenen Winkeln filmen.
                    </p>
                </div>

                <!-- Step 4 -->
                <div style="text-align: center;">
                    <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em; opacity: 0.3;">4</div>
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Anpassung & Optimierung</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem; max-width: 600px; margin: 0 auto;">
                        Schrittweise Optimierung von Sattelhöhe, Sattelposition, Lenkerposition und -reichweite.
                    </p>
                </div>

                <!-- Step 5 -->
                <div style="text-align: center;">
                    <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 2rem; letter-spacing: 0.05em; opacity: 0.3;">5</div>
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Dokumentation</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem; max-width: 600px; margin: 0 auto;">
                        Du erhältst ein detailliertes Protokoll mit allen Einstellungen, Fotos und individuellen Empfehlungen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Unsere Pakete</h2>
            </div>

            <div class="fade-in" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 8rem;">
                <!-- Basis Paket -->
                <div style="text-align: center;">
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 2rem;">Basis Bikefitting</h3>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2.5rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Ausführliches Gespräch</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Körpervermessung</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Grundlegende Positionsanpassung</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Sattelhöhe & -position</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Lenkerposition</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Einstellungsprotokoll</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Dauer: ca. 90 Minuten</p>
                </div>

                <!-- Premium Paket -->
                <div style="text-align: center;">
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 2rem;">Premium Bikefitting</h3>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2.5rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Alle Basis-Leistungen</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Videoanalyse (2D)</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Beweglichkeitstest</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Druckmessung Sattel</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Cleat-Positionierung</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Detaillierte Dokumentation</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">Follow-up nach 4 Wochen</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Dauer: ca. 2-2,5 Stunden</p>
                </div>

                <!-- Performance Paket -->
                <div style="text-align: center;">
                    <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 2rem;">Performance Bikefitting</h3>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2.5rem;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Alle Premium-Leistungen</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">3D-Videoanalyse</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Biomechanische Analyse</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Leistungsdiagnostik</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Aerodynamik-Optimierung</li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid rgba(139, 157, 147, 0.15); color: var(--color-text-light); font-size: 0.9375rem;">Mehrere Bikes möglich</li>
                        <li style="padding: 0.75rem 0; color: var(--color-text-light); font-size: 0.9375rem;">2x Follow-up Sessions</li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--color-text-anthracite); letter-spacing: 0.05em;">Dauer: ca. 3-4 Stunden</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Dunkler Hintergrund -->
    <section style="padding: var(--spacing-md) 0; background-color: #0A0A0A; text-align: center;">
        <div class="container fade-in">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 2rem; color: white;">
                Bereit für deine perfekte Position?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 3rem; letter-spacing: 0.1em;">
                Vereinbare jetzt deinen Bikefitting-Termin und erlebe den Unterschied
            </p>
            <a href="about.php" class="btn btn-primary">Jetzt Termin vereinbaren</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
