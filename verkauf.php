<?php
$page_title = "Bike Verkauf";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Page-specific CSS -->
<link rel="stylesheet" href="assets/css/verkauf.css">

<!-- Hero Section -->
<section class="hero" style="background-image: url('assets/images/19.08.25-229.jpg');">
    <div class="hero-content">
        <h1 class="hero-title">Premium Bikes kaufen</h1>
        <p class="hero-subtitle">Hochwertige Mountainbikes, E-Bikes und Rennräder für jeden Anspruch</p>
    </div>
</section>

<!-- Main Content -->
<main>
    <!-- Introduction Section -->
    <section class="section">
        <div class="container">
            <div class="content-box fade-in">
                <h2 style="text-align: center; margin-bottom: 2rem;">Dein Traumbike wartet auf dich</h2>
                <p>Bei Bikepoint findest du eine sorgfältig ausgewählte Auswahl an Premium-Bikes führender Marken. Ob Mountainbike, E-Bike, Rennrad oder Gravelbike – wir bieten dir hochwertige Räder für jeden Einsatzbereich und jedes Budget.</p>
                <p>Unsere Experten beraten dich umfassend und helfen dir, das perfekte Bike für deine Bedürfnisse zu finden. Vor dem Kauf kannst du die Bikes bei einer ausgiebigen Testfahrt in den Alpen kennenlernen.</p>
            </div>
        </div>
    </section>

    <!-- Bike Categories Section -->
    <section class="section section-with-pattern" style="background-color: var(--color-primary);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Unsere Bike-Kategorien</h2>
            <div class="bike-categories-grid">
                <!-- Mountainbikes -->
                <div class="category-card">
                    <div class="category-icon">🏔️</div>
                    <div class="category-content">
                        <h3>Mountainbikes</h3>
                        <p>Für Trail, Enduro und Cross Country</p>
                        <ul class="category-features">
                            <li>All-Mountain & Trail (120-150mm)</li>
                            <li>Enduro (150-180mm)</li>
                            <li>Cross Country (100-120mm)</li>
                            <li>Downhill (180mm+)</li>
                        </ul>
                        <div class="brands-text"><strong>Marken:</strong> Specialized, Trek, Canyon, Santa Cruz, Cube</div>
                    </div>
                </div>

                <!-- E-Mountainbikes -->
                <div class="category-card">
                    <div class="category-icon">⚡</div>
                    <div class="category-content">
                        <h3>E-Mountainbikes</h3>
                        <p>Mehr Power für längere Touren</p>
                        <ul class="category-features">
                            <li>E-All-Mountain</li>
                            <li>E-Enduro</li>
                            <li>E-Trekking</li>
                            <li>Top-Motoren: Bosch, Shimano, Fazua</li>
                        </ul>
                        <div class="brands-text"><strong>Marken:</strong> Specialized, Haibike, Focus, Bulls, Cube</div>
                    </div>
                </div>

                <!-- Rennräder -->
                <div class="category-card">
                    <div class="category-icon">🚴</div>
                    <div class="category-content">
                        <h3>Rennräder</h3>
                        <p>Für Straße und Wettkampf</p>
                        <ul class="category-features">
                            <li>Race-Rennräder (Carbon)</li>
                            <li>Endurance-Modelle</li>
                            <li>Aero-Rennräder</li>
                            <li>Shimano, SRAM, Campagnolo</li>
                        </ul>
                        <div class="brands-text"><strong>Marken:</strong> Specialized, Trek, Canyon, Bianchi, Cervelo</div>
                    </div>
                </div>

                <!-- Gravelbikes -->
                <div class="category-card">
                    <div class="category-icon">🌄</div>
                    <div class="category-content">
                        <h3>Gravelbikes</h3>
                        <p>Vielseitig für Straße und Schotter</p>
                        <ul class="category-features">
                            <li>All-Road Bikes</li>
                            <li>Adventure-Modelle</li>
                            <li>Bikepacking-tauglich</li>
                            <li>Disc-Bremsen Standard</li>
                        </ul>
                        <div class="brands-text"><strong>Marken:</strong> Specialized, Trek, Canyon, Giant, Cannondale</div>
                    </div>
                </div>

                <!-- E-Bikes City/Trekking -->
                <div class="category-card">
                    <div class="category-icon">🚲</div>
                    <div class="category-content">
                        <h3>City & Trekking E-Bikes</h3>
                        <p>Komfortabel für Alltag und Touren</p>
                        <ul class="category-features">
                            <li>City E-Bikes</li>
                            <li>Trekking E-Bikes</li>
                            <li>Comfort-Geometrie</li>
                            <li>Reichweite bis 150km</li>
                        </ul>
                        <div class="brands-text"><strong>Marken:</strong> Kalkhoff, Riese & Müller, Cube, Haibike</div>
                    </div>
                </div>

                <!-- Kinderbikes -->
                <div class="category-card">
                    <div class="category-icon">👶</div>
                    <div class="category-content">
                        <h3>Kinder & Jugend</h3>
                        <p>Hochwertige Bikes für die Kleinen</p>
                        <ul class="category-features">
                            <li>Kinderräder 16" - 24"</li>
                            <li>Jugend-Mountainbikes 26" - 27.5"</li>
                            <li>Leichte Konstruktion</li>
                            <li>Qualitätskomponenten</li>
                        </ul>
                        <div class="brands-text"><strong>Marken:</strong> Cube, Scott, Specialized, Ghost</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Unsere Services beim Bike-Kauf</h2>
            <div class="benefits-showcase">
                <div class="benefit-box">
                    <h3>🎯 Persönliche Beratung</h3>
                    <p>Unsere Bike-Experten nehmen sich Zeit für dich und finden gemeinsam mit dir das perfekte Bike für deine Bedürfnisse.</p>
                </div>
                <div class="benefit-box">
                    <h3>🚴 Testfahrten</h3>
                    <p>Teste dein Wunsch-Bike ausgiebig auf echten Trails und Straßen. Nur so findest du heraus, ob es zu dir passt.</p>
                </div>
                <div class="benefit-box">
                    <h3>🔧 Basis-Setup</h3>
                    <p>Jedes Bike wird vor der Übergabe professionell aufgebaut, eingestellt und auf Sicherheit geprüft.</p>
                </div>
                <div class="benefit-box">
                    <h3>📏 Größenberatung</h3>
                    <p>Wir ermitteln die optimale Rahmengröße für deine Körpermaße und deinen Fahrstil.</p>
                </div>
                <div class="benefit-box">
                    <h3>💰 Faire Konditionen</h3>
                    <p>Transparente Preisgestaltung und beste Konditionen. Frag uns nach aktuellen Angeboten!</p>
                </div>
                <div class="benefit-box">
                    <h3>📞 After-Sales Support</h3>
                    <p>Auch nach dem Kauf sind wir für dich da – mit Service, Wartung und kompetenter Beratung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Financing Section -->
    <section class="section" style="background-color: var(--color-primary);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 2rem;">Finanzierung & Leasing</h2>
            <div class="content-box">
                <p style="text-align: center; font-size: 1.1rem; margin-bottom: 2rem;">Dein Traumbike muss nicht teuer sein! Wir bieten dir verschiedene Finanzierungsoptionen:</p>

                <div class="financing-grid">
                    <div class="financing-card">
                        <h3>💳 Ratenkauf</h3>
                        <p>Finanzierung über 6, 12 oder 24 Monate möglich. Bereits ab 0% effektiver Jahreszins bei ausgewählten Modellen.</p>
                    </div>
                    <div class="financing-card">
                        <h3>🏢 Bike-Leasing</h3>
                        <p>JobRad & BusinessBike Partner. Spare bis zu 40% durch Gehaltsumwandlung. Ideal für Arbeitnehmer und Selbstständige.</p>
                    </div>
                    <div class="financing-card">
                        <h3>🔄 Inzahlungnahme</h3>
                        <p>Wir nehmen dein altes Bike in Zahlung. Faire Bewertung und Anrechnung auf deinen Neukauf.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Buy From Us Section -->
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Warum bei Bikepoint kaufen?</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="checkmark">✅</div>
                    <div class="feature-text">
                        <h3>Expertise</h3>
                        <p>Über 9 Jahre Erfahrung im Bike-Business. Wir wissen, worauf es ankommt.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="checkmark">✅</div>
                    <div class="feature-text">
                        <h3>Premium-Marken</h3>
                        <p>Nur hochwertige Bikes von renommierten Herstellern mit bester Qualität.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="checkmark">✅</div>
                    <div class="feature-text">
                        <h3>Lokaler Service</h3>
                        <p>Werkstatt vor Ort für Wartung, Reparatur und Ersatzteile.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="checkmark">✅</div>
                    <div class="feature-text">
                        <h3>Garantie & Support</h3>
                        <p>Volle Herstellergarantie plus unser persönlicher Service.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="checkmark">✅</div>
                    <div class="feature-text">
                        <h3>Test-Möglichkeiten</h3>
                        <p>Umfangreiches Angebot an Testbikes direkt in den Bergen.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="checkmark">✅</div>
                    <div class="feature-text">
                        <h3>Faire Beratung</h3>
                        <p>Keine aufdringlichen Verkäufer – nur ehrliche, kompetente Beratung.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Used Bikes Section -->
    <section class="section" style="background-color: var(--color-primary);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 2rem;">Gebrauchte Bikes</h2>
            <div class="used-bikes-highlight">
                <p style="text-align: center; font-size: 1.1rem; margin-bottom: 2rem;">Hochwertige, gewartete Gebrauchtbikes zu fairen Konditionen</p>
                <div class="benefits-showcase">
                    <div class="benefit-box">
                        <h3>🔍 Sorgfältig geprüft</h3>
                        <p>Jedes Gebrauchtbike wird von unseren Mechanikern gründlich inspiziert und überholt.</p>
                    </div>
                    <div class="benefit-box">
                        <h3>🛠️ Technisch einwandfrei</h3>
                        <p>Alle wichtigen Verschleißteile werden erneuert oder sind in sehr gutem Zustand.</p>
                    </div>
                    <div class="benefit-box">
                        <h3>💎 Top Preis-Leistung</h3>
                        <p>Premium-Bikes in bestem Zustand zu attraktiven Konditionen.</p>
                    </div>
                    <div class="benefit-box">
                        <h3>📋 Mit Gewährleistung</h3>
                        <p>12 Monate Gewährleistung auf alle gebrauchten Bikes.</p>
                    </div>
                </div>
                <p style="text-align: center; margin-top: 2rem; font-size: 1.05rem;">Frag uns nach unserem aktuellen Angebot an Gebrauchtbikes!</p>
            </div>
        </div>
    </section>

    <!-- Bike Components Section -->
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Komponenten & Zubehör</h2>
            <p style="text-align: center; margin-bottom: 3rem; color: var(--color-text-light);">Zusätzlich zu kompletten Bikes bieten wir auch hochwertige Komponenten und Zubehör:</p>
            <div class="components-grid">
                <div class="component-card">
                    <h3>Laufräder</h3>
                    <p>Premium-Laufradsätze von DT Swiss, Mavic, Newmen</p>
                </div>
                <div class="component-card">
                    <h3>Federgabeln</h3>
                    <p>RockShox, Fox, Öhlins, Marzocchi</p>
                </div>
                <div class="component-card">
                    <h3>Dämpfer</h3>
                    <p>Fox Float, RockShox Super Deluxe</p>
                </div>
                <div class="component-card">
                    <h3>Bremsen</h3>
                    <p>Shimano, SRAM, Magura</p>
                </div>
                <div class="component-card">
                    <h3>Schaltungen</h3>
                    <p>Shimano (XT, XTR), SRAM (GX, X01, XX1)</p>
                </div>
                <div class="component-card">
                    <h3>Cockpit</h3>
                    <p>Lenker, Vorbauten, Griffe von Renthal, Race Face, Ergon</p>
                </div>
                <div class="component-card">
                    <h3>Sättel</h3>
                    <p>SQlab, Ergon, Fizik, WTB</p>
                </div>
                <div class="component-card">
                    <h3>Pedale</h3>
                    <p>Shimano, Crankbrothers, Race Face, HT</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Bereit für dein neues Bike?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">Besuche uns im Shop oder vereinbare einen Beratungstermin!</p>
            <a href="about.php" class="btn btn-primary pulse-button">Jetzt Kontakt aufnehmen</a>
        </div>
    </section>
</main>

<!-- Page-specific JavaScript -->
<script src="assets/js/verkauf.js"></script>

<?php include 'includes/footer.php'; ?>
