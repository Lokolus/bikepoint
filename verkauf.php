<?php
$page_title = "Bike Verkauf";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Dynamic Verkauf Style -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/19.08.25-229.jpg'); animation: heroZoom 30s ease-in-out infinite alternate;"></div>
    <div class="hero-content">
        <h1 style="letter-spacing: 0.35em; font-size: clamp(3.5rem, 9vw, 7rem);">PREMIUM<br>BIKES</h1>
        <p style="letter-spacing: 0.5em; font-size: 0.8rem;">Find · Test · Ride</p>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<main>
    <!-- Intro with Split Layout -->
    <section style="padding: 5rem 0; background: var(--color-secondary);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center; max-width: 1200px; margin: 0 auto;">
                <div class="fade-in">
                    <div style="display: inline-block; padding: 0.4rem 1.2rem; background: linear-gradient(90deg, rgba(139, 157, 147, 0.15), rgba(139, 157, 147, 0.05)); border-radius: 50px; margin-bottom: 2rem; border: 1px solid rgba(139, 157, 147, 0.2);">
                        <span style="font-size: 0.7rem; letter-spacing: 0.25em; color: var(--color-accent); text-transform: uppercase; font-weight: 300;">Premium Selection</span>
                    </div>
                    <h2 style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 100; line-height: 1.2; margin-bottom: 2rem; letter-spacing: 0.05em;">
                        Dein Traumbike<br>wartet auf dich
                    </h2>
                    <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light);">
                        Sorgfältig ausgewählte Premium-Bikes führender Marken. Umfassende Beratung, ausgiebige Testfahrten in den Alpen und professionelles Setup inklusive.
                    </p>
                </div>
                <div class="fade-in" style="position: relative;">
                    <div style="aspect-ratio: 4/3; background: linear-gradient(135deg, rgba(139, 157, 147, 0.1) 0%, rgba(139, 157, 147, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 2px dashed rgba(139, 157, 147, 0.2);">
                        <span style="font-size: 4rem; opacity: 0.3;">🚴</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter Tabs -->
    <section style="padding: 4rem 0 3rem; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1400px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 2rem; font-weight: 100; letter-spacing: 0.15em; text-align: center; margin-bottom: 3rem; text-transform: uppercase;">
                    Unsere Kategorien
                </h3>

                <!-- Tab Navigation -->
                <div class="category-tabs" style="display: flex; justify-content: center; gap: 2rem; margin-bottom: 4rem; position: relative; flex-wrap: wrap; padding-bottom: 1rem; border-bottom: 1px solid var(--color-border);">
                    <button class="category-tab active" data-category="all" style="background: none; border: none; padding: 0.75rem 1.5rem; font-size: 0.875rem; letter-spacing: 0.15em; text-transform: uppercase; cursor: pointer; color: var(--color-text); transition: all 0.3s ease; font-family: inherit;">
                        Alle
                    </button>
                    <button class="category-tab" data-category="mtb" style="background: none; border: none; padding: 0.75rem 1.5rem; font-size: 0.875rem; letter-spacing: 0.15em; text-transform: uppercase; cursor: pointer; color: var(--color-text-light); transition: all 0.3s ease; font-family: inherit;">
                        Mountainbikes
                    </button>
                    <button class="category-tab" data-category="emtb" style="background: none; border: none; padding: 0.75rem 1.5rem; font-size: 0.875rem; letter-spacing: 0.15em; text-transform: uppercase; cursor: pointer; color: var(--color-text-light); transition: all 0.3s ease; font-family: inherit;">
                        E-MTB
                    </button>
                    <button class="category-tab" data-category="road" style="background: none; border: none; padding: 0.75rem 1.5rem; font-size: 0.875rem; letter-spacing: 0.15em; text-transform: uppercase; cursor: pointer; color: var(--color-text-light); transition: all 0.3s ease; font-family: inherit;">
                        Rennräder
                    </button>
                    <button class="category-tab" data-category="gravel" style="background: none; border: none; padding: 0.75rem 1.5rem; font-size: 0.875rem; letter-spacing: 0.15em; text-transform: uppercase; cursor: pointer; color: var(--color-text-light); transition: all 0.3s ease; font-family: inherit;">
                        Gravel
                    </button>
                </div>

                <!-- Bike Grid - Mountainbikes -->
                <div class="bike-category-grid" data-category="mtb" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2.5rem; margin-bottom: 4rem; opacity: 1; transform: translateY(0); transition: all 0.4s ease;">
                    <!-- Bike Card 1 -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 12px; overflow: hidden; position: relative;">
                        <div class="bike-image-zoom" style="height: 280px; background: linear-gradient(135deg, #E5E5E5 0%, #D0D0D0 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                        </div>
                        <div style="padding: 2rem;">
                            <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Trail Expert 29"</h4>
                            <p style="font-size: 0.875rem; color: var(--color-text-light); line-height: 1.8; margin-bottom: 1.5rem;">
                                Perfekt für Trail & All-Mountain. 140mm Federweg, moderne Geometrie.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                                <li style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano XT 12-fach
                                </li>
                                <li style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Rahmen
                                </li>
                                <li style="font-size: 0.8125rem; color: var(--color-text-anthracite); padding-left: 1.5rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Fox Federung
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bike Card 2 -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 12px; overflow: hidden; position: relative;">
                        <div class="bike-image-zoom" style="height: 280px; background: linear-gradient(135deg, #D5D5D5 0%, #C0C0C0 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                        </div>
                        <div style="padding: 2rem;">
                            <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Enduro Pro 27.5"</h4>
                            <p style="font-size: 0.875rem; color: var(--color-text-light); line-height: 1.8; margin-bottom: 1.5rem;">
                                Downhill-orientiert mit 170mm Federweg. Race-ready Setup.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                                <li style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> SRAM GX Eagle
                                </li>
                                <li style="font-size: 0.8125rem; color: var(--color-text-anthracite); margin-bottom: 0.5rem; padding-left: 1.5rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Vario-Sattelstütze
                                </li>
                                <li style="font-size: 0.8125rem; color: var(--color-text-anthracite); padding-left: 1.5rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox Lyrik
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Cards -->
    <section style="padding: 5rem 0; background: var(--color-secondary);">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 2rem; font-weight: 100; letter-spacing: 0.15em; text-align: center; margin-bottom: 4rem;">
                    Warum Bikepoint?
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 3rem;">
                    <div class="verkauf-feature" style="display: flex; gap: 1.5rem; padding: 1rem; border-radius: 8px; transition: all 0.3s ease;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; border-radius: 50%; background: rgba(139, 157, 147, 0.1); display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 1.5rem;">💬</span>
                        </div>
                        <div>
                            <h4 style="font-size: 1.125rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Persönliche Beratung</h4>
                            <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light);">
                                Zeit für dich, deine Bedürfnisse und das perfekte Bike. Individuelle Empfehlungen statt Verkaufsdruck.
                            </p>
                        </div>
                    </div>

                    <div class="verkauf-feature" style="display: flex; gap: 1.5rem; padding: 1rem; border-radius: 8px; transition: all 0.3s ease;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; border-radius: 50%; background: rgba(139, 157, 147, 0.1); display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 1.5rem;">🏔️</span>
                        </div>
                        <div>
                            <h4 style="font-size: 1.125rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Testfahrten in den Alpen</h4>
                            <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light);">
                                Erlebe Handling und Performance auf echten Trails. Teste ausgiebig vor der Entscheidung.
                            </p>
                        </div>
                    </div>

                    <div class="verkauf-feature" style="display: flex; gap: 1.5rem; padding: 1rem; border-radius: 8px; transition: all 0.3s ease;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; border-radius: 50%; background: rgba(139, 157, 147, 0.1); display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 1.5rem;">⚙️</span>
                        </div>
                        <div>
                            <h4 style="font-size: 1.125rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Professionelles Setup</h4>
                            <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light);">
                                Jedes Bike wird perfekt aufgebaut, eingestellt und auf Sicherheit geprüft.
                            </p>
                        </div>
                    </div>

                    <div class="verkauf-feature" style="display: flex; gap: 1.5rem; padding: 1rem; border-radius: 8px; transition: all 0.3s ease;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; border-radius: 50%; background: rgba(139, 157, 147, 0.1); display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 1.5rem;">🔧</span>
                        </div>
                        <div>
                            <h4 style="font-size: 1.125rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">After-Sales Support</h4>
                            <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light);">
                                Auch nach dem Kauf sind wir für dich da. Service, Wartung und kompetente Beratung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Steps - Horizontal Layout -->
    <section style="padding: 5rem 0; background: linear-gradient(180deg, var(--color-primary) 0%, var(--color-secondary) 100%);">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 2rem; font-weight: 100; letter-spacing: 0.15em; text-align: center; margin-bottom: 4rem;">
                    So läuft dein Bike-Kauf ab
                </h3>

                <div style="display: grid; gap: 2rem;">
                    <div class="verkauf-step" style="display: flex; gap: 2rem; align-items: start;">
                        <div class="step-number-verkauf" style="flex-shrink: 0; width: 60px; height: 60px; border-radius: 12px; background: var(--color-accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 100; color: white;">01</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Beratung & Analyse</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Gemeinsam ermitteln wir deine Anforderungen, Fahrstil, Budget und die passende Rahmengröße.
                            </p>
                        </div>
                    </div>

                    <div class="verkauf-step" style="display: flex; gap: 2rem; align-items: start;">
                        <div class="step-number-verkauf" style="flex-shrink: 0; width: 60px; height: 60px; border-radius: 12px; background: var(--color-accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 100; color: white;">02</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Testfahrt</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Ausgiebiger Test auf echten Trails oder Straßen. Spüre den Unterschied zwischen Modellen.
                            </p>
                        </div>
                    </div>

                    <div class="verkauf-step" style="display: flex; gap: 2rem; align-items: start;">
                        <div class="step-number-verkauf" style="flex-shrink: 0; width: 60px; height: 60px; border-radius: 12px; background: var(--color-accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 100; color: white;">03</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Feinabstimmung</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Individuelle Anpassung von Sattel, Lenker, Vorbau und optional professionelles Bikefitting.
                            </p>
                        </div>
                    </div>

                    <div class="verkauf-step" style="display: flex; gap: 2rem; align-items: start;">
                        <div class="step-number-verkauf" style="flex-shrink: 0; width: 60px; height: 60px; border-radius: 12px; background: var(--color-accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 100; color: white;">04</div>
                        <div>
                            <h4 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.75rem;">Übergabe & Service</h4>
                            <p style="font-size: 0.9375rem; line-height: 1.8; color: var(--color-text-light);">
                                Professioneller Aufbau, finale Prüfung und Einweisung. After-Sales Support inklusive.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 5rem 0; text-align: center; background: #0A0A0A;">
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

<!-- Page-specific JavaScript -->
<script src="assets/js/verkauf.js"></script>
