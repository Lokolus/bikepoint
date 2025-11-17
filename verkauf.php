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
    <!-- Elegante Intro-Sektion mit Serif-Überschrift -->
    <section style="padding: 8rem 0 6rem;">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
                <h2 style="font-family: Georgia, 'Times New Roman', serif; font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 300; line-height: 1.3; margin-bottom: 3rem; color: var(--color-text); font-style: italic;">
                    Dein Traumbike wartet auf dich
                </h2>
                <p style="font-size: 1rem; line-height: 1.8; color: var(--color-text-light); max-width: 800px; margin: 0 auto;">
                    Bei Bikepoint findest du eine sorgfältig ausgewählte Auswahl an Premium-Bikes führender Marken.
                    Unsere Experten beraten dich umfassend und helfen dir, das perfekte Bike für deine Bedürfnisse zu finden.
                </p>
            </div>
        </div>
    </section>

    <!-- Dünne Trennlinie -->
    <div class="container">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 800px;"></div>
    </div>

    <!-- Zweispaltige Premium-Feature-Sektion -->
    <section style="padding: 6rem 0;">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 5rem; text-transform: uppercase;">
                    Warum Bikepoint?
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 4rem 6rem; max-width: 1000px; margin: 0 auto;">
                    <div>
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Persönliche Beratung</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                            Unsere Bike-Experten nehmen sich Zeit für dich und finden gemeinsam mit dir das perfekte Bike.
                        </p>
                    </div>

                    <div>
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Ausgiebige Testfahrten</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                            Teste dein Wunsch-Bike auf echten Trails und Straßen. Nur so findest du heraus, ob es zu dir passt.
                        </p>
                    </div>

                    <div>
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Professionelles Setup</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                            Jedes Bike wird vor der Übergabe professionell aufgebaut, eingestellt und auf Sicherheit geprüft.
                        </p>
                    </div>

                    <div>
                        <h4 style="font-size: 1.125rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">After-Sales Support</h4>
                        <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                            Auch nach dem Kauf sind wir für dich da – mit Service, Wartung und kompetenter Beratung.
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

    <!-- Bike-Kategorien in hochwertigem Grid -->
    <section style="padding: 6rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.15em; text-align: center; margin-bottom: 5rem; text-transform: uppercase;">
                    Unsere Kategorien
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5rem 6rem;">
                    <!-- Mountainbikes -->
                    <div>
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Mountainbikes
                        </h4>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1.5rem;">
                            Für Trail, Enduro und Cross Country
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 2;">
                            <li>• All-Mountain & Trail (120-150mm)</li>
                            <li>• Enduro (150-180mm)</li>
                            <li>• Cross Country (100-120mm)</li>
                            <li>• Downhill (180mm+)</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.5rem; letter-spacing: 0.05em;">
                            Specialized · Trek · Canyon · Santa Cruz · Cube
                        </p>
                    </div>

                    <!-- E-Mountainbikes -->
                    <div>
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            E-Mountainbikes
                        </h4>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1.5rem;">
                            Mehr Power für längere Touren
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 2;">
                            <li>• E-All-Mountain</li>
                            <li>• E-Enduro</li>
                            <li>• E-Trekking</li>
                            <li>• Top-Motoren: Bosch, Shimano, Fazua</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.5rem; letter-spacing: 0.05em;">
                            Specialized · Haibike · Focus · Bulls · Cube
                        </p>
                    </div>

                    <!-- Rennräder -->
                    <div>
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Rennräder
                        </h4>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1.5rem;">
                            Für Straße und Wettkampf
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 2;">
                            <li>• Race-Rennräder (Carbon)</li>
                            <li>• Endurance-Modelle</li>
                            <li>• Aero-Rennräder</li>
                            <li>• Shimano, SRAM, Campagnolo</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.5rem; letter-spacing: 0.05em;">
                            Specialized · Trek · Canyon · Bianchi · Cervelo
                        </p>
                    </div>

                    <!-- Gravelbikes -->
                    <div>
                        <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.12em; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(139, 157, 147, 0.2);">
                            Gravelbikes
                        </h4>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1.5rem;">
                            Vielseitig für Straße und Schotter
                        </p>
                        <ul style="list-style: none; padding: 0; font-size: 0.875rem; color: var(--color-text-light); line-height: 2;">
                            <li>• All-Road Bikes</li>
                            <li>• Adventure-Modelle</li>
                            <li>• Bikepacking-tauglich</li>
                            <li>• Disc-Bremsen Standard</li>
                        </ul>
                        <p style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-top: 1.5rem; letter-spacing: 0.05em;">
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
    <section style="padding: 6rem 0;">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h3 style="font-family: Georgia, 'Times New Roman', serif; font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; text-align: center; margin-bottom: 4rem; font-style: italic;">
                    So läuft dein Bike-Kauf ab
                </h3>

                <div style="display: grid; gap: 4rem;">
                    <!-- Schritt 1 -->
                    <div style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">01</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Beratung & Analyse</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                In einem ausführlichen Gespräch ermitteln wir gemeinsam deine Anforderungen, Fahrstil und Budget.
                                Wir analysieren deine körperlichen Voraussetzungen und empfehlen die passende Rahmengröße.
                            </p>
                        </div>
                    </div>

                    <!-- Schritt 2 -->
                    <div style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">02</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Testfahrt</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Teste dein Wunsch-Bike ausgiebig auf echten Trails oder Straßen in den Alpen.
                                Erlebe Handling, Geometrie und Komponenten im realen Einsatz und spüre den Unterschied.
                            </p>
                        </div>
                    </div>

                    <!-- Schritt 3 -->
                    <div style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">03</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Konfiguration & Feinabstimmung</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Wir passen dein Bike individuell an: Sattel, Lenker, Vorbau, Pedale – jedes Detail wird auf deine Bedürfnisse abgestimmt.
                                Optional bieten wir auch professionelles Bikefitting an.
                            </p>
                        </div>
                    </div>

                    <!-- Schritt 4 -->
                    <div style="display: grid; grid-template-columns: 60px 1fr; gap: 2rem; align-items: start;">
                        <div style="font-size: 3rem; font-weight: 100; color: var(--color-accent); opacity: 0.4; line-height: 1;">04</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 300; letter-spacing: 0.1em; margin-bottom: 1rem;">Übergabe & Service</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Dein Bike wird professionell aufgebaut, eingestellt und final geprüft.
                                Bei der Übergabe erklären wir dir alle Funktionen und stehen dir auch nach dem Kauf mit Service und Beratung zur Seite.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Großes atmosphärisches Schwarz-Weiß-Foto mit Statement -->
    <section style="position: relative; min-height: 600px; display: flex; align-items: center; justify-content: center; background-image: url('assets/images/19.08.25-380.jpg'); background-size: cover; background-position: center; filter: grayscale(100%);">
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5));"></div>
        <div style="position: relative; z-index: 10; text-align: center; color: white; padding: 0 2rem; max-width: 800px;">
            <p style="font-family: Georgia, 'Times New Roman', serif; font-size: clamp(1.5rem, 3vw, 2.5rem); font-weight: 300; line-height: 1.5; font-style: italic;">
                „Das perfekte Bike ist nicht das teuerste, sondern das, welches am besten zu dir passt."
            </p>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 6rem 0; text-align: center; background-color: #0A0A0A;">
        <div class="container">
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
