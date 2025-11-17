<?php
$page_title = "Bikefitting";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Unique Bikefitting Style -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/19.08.25-380.jpg');"></div>
    <div class="hero-content">
        <h1 style="letter-spacing: 0.3em;">BIKE<br>FITTING</h1>
        <p style="letter-spacing: 0.4em; font-size: 0.875rem;">Präzision · Analyse · Perfektion</p>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<main>
    <!-- Intro Section -->
    <section style="padding: 6rem 0 4rem; background: linear-gradient(180deg, var(--color-secondary) 0%, var(--color-primary) 100%);">
        <div class="container">
            <div class="fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
                <div style="display: inline-block; padding: 0.5rem 1.5rem; background: rgba(139, 157, 147, 0.1); border-radius: 50px; margin-bottom: 2rem;">
                    <span style="font-size: 0.75rem; letter-spacing: 0.2em; color: var(--color-accent); text-transform: uppercase;">Biomechanische Analyse</span>
                </div>
                <h2 style="font-size: clamp(2.5rem, 5vw, 3.5rem); font-weight: 100; line-height: 1.2; margin-bottom: 2rem; color: var(--color-text); letter-spacing: 0.1em;">
                    Perfektion in<br>jedem Millimeter
                </h2>
                <p style="font-size: 1.125rem; line-height: 2; color: var(--color-text-light); max-width: 750px; margin: 0 auto;">
                    Professionelles Bikefitting ist die Grundlage für maximalen Komfort, optimale Leistung und langfristige Gesundheit beim Radfahren.
                </p>
            </div>
        </div>
    </section>

    <!-- Benefits Grid - Asymmetric Layout -->
    <section style="padding: 4rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-bottom: 2rem;">
                    <!-- Large card -->
                    <div class="benefit-card fade-in" style="grid-column: span 2; background: var(--color-secondary); padding: 3rem; border-radius: 8px; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 1.5rem; right: 1.5rem; width: 60px; height: 60px; border-radius: 50%; background: rgba(139, 157, 147, 0.1); display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 1.5rem;">⚡</span>
                        </div>
                        <h3 style="font-size: 1.75rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1.5rem;">Maximale Effizienz</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 1rem;">
                            Optimiere deine Kraftübertragung durch die perfekte Anpassung von Sattel, Lenker und Pedalen an deine Anatomie.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-anthracite); opacity: 0.7;">
                            Jeder Tritt wird effektiver, wenn deine Position biomechanisch optimal ist.
                        </p>
                    </div>

                    <!-- Small card 1 -->
                    <div class="benefit-card fade-in" style="background: linear-gradient(135deg, #8B9D93 0%, #A0B3A8 100%); padding: 2.5rem; border-radius: 8px; color: white;">
                        <div style="font-size: 2rem; margin-bottom: 1rem;">💪</div>
                        <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: white;">Gesundheit</h3>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: rgba(255, 255, 255, 0.9);">
                            Vermeide Schmerzen und Überlastungen durch ergonomische Anpassungen.
                        </p>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
                    <!-- Small card 2 -->
                    <div class="benefit-card fade-in" style="background: var(--color-secondary); padding: 2.5rem; border-radius: 8px;">
                        <div style="font-size: 2rem; margin-bottom: 1rem;">🎯</div>
                        <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem;">Prävention</h3>
                        <p style="font-size: 0.875rem; line-height: 1.8; color: var(--color-text-light);">
                            Reduziere das Risiko von Überlastungen und chronischen Beschwerden.
                        </p>
                    </div>

                    <!-- Large card 2 -->
                    <div class="benefit-card fade-in" style="grid-column: span 2; background: var(--color-secondary); padding: 3rem; border-radius: 8px; position: relative;">
                        <div style="position: absolute; top: 1.5rem; right: 1.5rem; width: 60px; height: 60px; border-radius: 50%; background: rgba(139, 157, 147, 0.1); display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 1.5rem;">😊</span>
                        </div>
                        <h3 style="font-size: 1.75rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1.5rem;">Mehr Fahrspaß</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light);">
                            Genieße längere Touren ohne Beschwerden und konzentriere dich voll aufs Fahren.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="container" style="padding: 3rem 0;">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 600px;"></div>
    </div>

    <!-- Process Timeline Section -->
    <section class="process-timeline-section" style="padding: 5rem 0; background-color: var(--color-secondary); position: relative;">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h2 class="fade-in" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 100; text-align: center; margin-bottom: 5rem; letter-spacing: 0.15em;">
                    Unser Prozess
                </h2>

                <!-- Step 1 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 3rem; margin-bottom: 4rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">01</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Anamnese & Zielsetzung</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Ausführliches Gespräch über deine Fahrgewohnheiten, Ziele und gesundheitliche Voraussetzungen. Wir analysieren deinen Fahrstil und definieren gemeinsam die Anforderungen.
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">INTERVIEW</span>
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">ZIELDEFINITION</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 3rem; margin-bottom: 4rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">02</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Körperanalyse</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Präzise Messung deiner Körpermaße und Flexibilitätstests. Wir erfassen Beinlängen, Rumpf- und Armlänge sowie deine individuelle Beweglichkeit.
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">VERMESSUNG</span>
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">FLEXIBILITÄT</span>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 3rem; margin-bottom: 4rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">03</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Videoanalyse</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Du fährst auf unserem Ergometer während wir deine Position aus verschiedenen Winkeln filmen. Die Videoanalyse zeigt präzise Optimierungspotenzial.
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">VIDEO</span>
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">ANALYSE</span>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 3rem; margin-bottom: 4rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">04</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Anpassung & Optimierung</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Schrittweise Optimierung aller Kontaktpunkte. Wir passen Sattelhöhe, -position, Lenkerposition, Cleat-Position und Vorbaulänge individuell an.
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">FEINTUNING</span>
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">OPTIMIERUNG</span>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 3rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">05</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Dokumentation & Follow-up</h3>
                        <p style="font-size: 1rem; line-height: 2; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Du erhältst ein detailliertes Protokoll mit allen Einstellungen, Fotos und individuellen Empfehlungen. Nach einigen Wochen besprechen wir deine Erfahrungen.
                        </p>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">PROTOKOLL</span>
                            <span style="padding: 0.5rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-accent);">NACHBETREUUNG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 5rem 0; text-align: center; background: linear-gradient(135deg, #0A0A0A 0%, #1A1A1A 100%); position: relative; overflow: hidden;">
        <div style="position: absolute; inset: 0; background-image: url('assets/images/19.08.25-229.jpg'); background-size: cover; background-position: center; opacity: 0.15; filter: grayscale(100%);"></div>
        <div class="container fade-in" style="position: relative; z-index: 1;">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 1rem; color: white;">
                Bereit für deine<br>perfekte Position?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 3rem; letter-spacing: 0.15em; max-width: 600px; margin-left: auto; margin-right: auto;">
                Vereinbare jetzt deinen Bikefitting-Termin
            </p>
            <a href="about.php" class="btn btn-primary cta-button-fitting" style="padding: 1.5rem 4rem; font-size: 0.875rem;">Jetzt Termin vereinbaren</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<!-- Page-specific JavaScript -->
<script src="assets/js/bikefitting.js"></script>
