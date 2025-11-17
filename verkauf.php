<?php
$page_title = "Bike Verkauf";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Fullscreen Schwarz-Weiß -->
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

<main>
    <!-- Elegante Intro-Sektion -->
    <section style="padding: 5rem 0 4rem;">
        <div class="container">
            <div class="fade-in" style="max-width: 1000px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 100; line-height: 1.3; margin-bottom: 2rem; color: var(--color-text); letter-spacing: 0.15em;">
                    Dein Traumbike wartet auf dich
                </h2>
                <p style="font-size: 1rem; line-height: 1.8; color: var(--color-text-light); max-width: 800px; margin: 0 auto 1.5rem;">
                    Bei Bikepoint findest du eine sorgfältig ausgewählte Auswahl an Premium-Bikes führender Marken.
                    Unsere Experten beraten dich umfassend und helfen dir, das perfekte Bike für deine Bedürfnisse zu finden.
                </p>
                <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); max-width: 750px; margin: 0 auto;">
                    Vor dem Kauf kannst du die Bikes bei einer ausgiebigen Testfahrt in den Alpen kennenlernen.
                    Wir nehmen uns Zeit für eine individuelle Beratung und finden gemeinsam die optimale Rahmengröße und Ausstattung für dich.
                </p>
            </div>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Zweispaltige Premium-Feature-Sektion -->
    <section style="padding: 4rem 0;">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 3rem; text-transform: uppercase;">
                    Warum Bikepoint?
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3rem 5rem; max-width: 1000px; margin: 0 auto;">
                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Persönliche Beratung</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Unsere Bike-Experten nehmen sich Zeit für dich und finden gemeinsam mit dir das perfekte Bike.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Wir analysieren deinen Fahrstil, deine körperlichen Voraussetzungen und dein Budget, um dir eine fundierte Empfehlung zu geben.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Ausgiebige Testfahrten</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Teste dein Wunsch-Bike auf echten Trails und Straßen. Nur so findest du heraus, ob es zu dir passt.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Erlebe Handling, Geometrie und Federung im realen Einsatz – direkt in den Bergen vor unserer Haustür.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Professionelles Setup</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Jedes Bike wird vor der Übergabe professionell aufgebaut, eingestellt und auf Sicherheit geprüft.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Federelemente werden auf dein Gewicht abgestimmt, Bremsen entlüftet und alle Schrauben mit korrektem Drehmoment angezogen.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">After-Sales Support</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Auch nach dem Kauf sind wir für dich da – mit Service, Wartung und kompetenter Beratung.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-light); opacity: 0.8;">
                            Nutze unsere Werkstatt für Inspektionen, Upgrades und Reparaturen. Wir kennen dein Bike und seine Geschichte.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Großes Bild Sektion -->
    <section style="position: relative; min-height: 70vh; display: flex; align-items: center; justify-content: center; background-image: url('assets/images/19.08.25-380.jpg'); background-size: cover; background-position: center; filter: grayscale(100%);">
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5));"></div>
        <div class="fade-in" style="position: relative; z-index: 10; text-align: center; color: white; padding: 0 2rem; max-width: 800px;">
            <p style="font-size: clamp(1.5rem, 3vw, 2.5rem); font-weight: 100; line-height: 1.5; letter-spacing: 0.1em;">
                Das perfekte Bike ist nicht das teuerste, sondern das, welches am besten zu dir passt.
            </p>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Bike-Kategorien in hochwertigem Grid -->
    <section style="padding: 4rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 3rem; text-transform: uppercase;">
                    Unsere Kategorien
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3.5rem 5rem;">
                    <!-- Mountainbikes -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Mountainbikes
                        </h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Für Trail, Enduro und Cross Country. Von spielerischen 100mm Hardtails bis zu abfahrtsorientierten Enduros mit 180mm Federweg.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• All-Mountain & Trail (120-150mm)</li>
                            <li>• Enduro (150-180mm)</li>
                            <li>• Cross Country (100-120mm)</li>
                            <li>• Downhill (180mm+)</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.25rem; letter-spacing: 0.05em;">
                            Specialized · Trek · Canyon · Santa Cruz · Cube
                        </p>
                    </div>

                    <!-- E-Mountainbikes -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            E-Mountainbikes
                        </h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Mehr Power für längere Touren. Mit Bosch, Shimano oder Fazua Motoren meisterst du auch steile Anstiege mühelos.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• E-All-Mountain</li>
                            <li>• E-Enduro</li>
                            <li>• E-Trekking</li>
                            <li>• Top-Motoren: Bosch, Shimano, Fazua</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.25rem; letter-spacing: 0.05em;">
                            Specialized · Haibike · Focus · Bulls · Cube
                        </p>
                    </div>

                    <!-- Rennräder -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Rennräder
                        </h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Für Straße und Wettkampf. Carbon-Rahmen, elektronische Schaltungen und aerodynamische Laufräder für maximale Performance.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• Race-Rennräder (Carbon)</li>
                            <li>• Endurance-Modelle</li>
                            <li>• Aero-Rennräder</li>
                            <li>• Shimano, SRAM, Campagnolo</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.25rem; letter-spacing: 0.05em;">
                            Specialized · Trek · Canyon · Bianchi · Cervelo
                        </p>
                    </div>

                    <!-- Gravelbikes -->
                    <div class="fade-in">
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1rem; padding-bottom: 0.75rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Gravelbikes
                        </h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem;">
                            Vielseitig für Straße und Schotter. Perfekt für Bikepacking-Abenteuer und lange Touren abseits asphaltierter Wege.
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 1.9;">
                            <li>• All-Road Bikes</li>
                            <li>• Adventure-Modelle</li>
                            <li>• Bikepacking-tauglich</li>
                            <li>• Disc-Bremsen Standard</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.25rem; letter-spacing: 0.05em;">
                            Specialized · Trek · Canyon · Giant · Cannondale
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- 4-Schritte-Prozess -->
    <section style="padding: 4rem 0;">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; text-align: center; margin-bottom: 3rem; letter-spacing: 0.15em;">
                    So läuft dein Bike-Kauf ab
                </h3>

                <div style="display: grid; gap: 3rem;">
                    <!-- Schritt 1 -->
                    <div class="fade-in" style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">01</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Beratung & Analyse</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                In einem ausführlichen Gespräch ermitteln wir gemeinsam deine Anforderungen, Fahrstil und Budget.
                                Wir analysieren deine körperlichen Voraussetzungen, empfehlen die passende Rahmengröße und besprechen die optimale Ausstattung für deinen Einsatzzweck.
                            </p>
                        </div>
                    </div>

                    <!-- Schritt 2 -->
                    <div class="fade-in" style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">02</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Testfahrt</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Teste dein Wunsch-Bike ausgiebig auf echten Trails oder Straßen in den Alpen.
                                Erlebe Handling, Geometrie und Komponenten im realen Einsatz und spüre den Unterschied zwischen verschiedenen Modellen und Ausstattungsvarianten.
                            </p>
                        </div>
                    </div>

                    <!-- Schritt 3 -->
                    <div class="fade-in" style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">03</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Konfiguration & Feinabstimmung</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Wir passen dein Bike individuell an: Sattel, Lenker, Vorbau, Pedale – jedes Detail wird auf deine Bedürfnisse abgestimmt.
                                Optional bieten wir auch professionelles Bikefitting für die perfekte Sitzposition an.
                            </p>
                        </div>
                    </div>

                    <!-- Schritt 4 -->
                    <div class="fade-in" style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">04</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Übergabe & Service</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Dein Bike wird professionell aufgebaut, eingestellt und final geprüft.
                                Bei der Übergabe erklären wir dir alle Funktionen, geben Tipps zur Pflege und stehen dir auch nach dem Kauf mit Service und Beratung zur Seite.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 4rem 0; text-align: center; background-color: #0A0A0A;">
        <div class="container fade-in">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 1.5rem; color: white;">
                Bereit für dein neues Bike?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 2.5rem; letter-spacing: 0.1em;">
                Besuche uns im Shop oder vereinbare einen Beratungstermin
            </p>
            <a href="about.php" class="btn btn-primary">Jetzt Kontakt aufnehmen</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
