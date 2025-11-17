<?php
$page_title = "Bikefitting";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/ab2.jpg');"></div>
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
    <section style="padding: 3.5rem 0 2.5rem; background: linear-gradient(180deg, var(--color-secondary) 0%, var(--color-primary) 100%);">
        <div class="container">
            <div class="fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
                <div style="display: inline-block; padding: 0.4rem 1.2rem; background: rgba(139, 157, 147, 0.1); border-radius: 50px; margin-bottom: 1.25rem;">
                    <span style="font-size: 0.7rem; letter-spacing: 0.2em; color: var(--color-accent); text-transform: uppercase;">Biomechanische Analyse</span>
                </div>
                <h2 style="font-size: clamp(2.5rem, 5vw, 3.5rem); font-weight: 100; line-height: 1.2; margin-bottom: 1.5rem; color: var(--color-text); letter-spacing: 0.1em;">
                    Perfektion in jedem Millimeter
                </h2>
                <p style="font-size: 1.05rem; line-height: 1.9; color: var(--color-text-light); max-width: 750px; margin: 0 auto 1rem;">
                    Professionelles Bikefitting ist die wissenschaftlich fundierte Anpassung deines Fahrrads an deine individuellen körperlichen Voraussetzungen und Fahrziele. Eine optimale Sitzposition ist die Grundlage für maximalen Komfort, beste Leistung und langfristige Gesundheit beim Radfahren.
                </p>
                <p style="font-size: 0.95rem; line-height: 1.8; color: var(--color-text-light); max-width: 720px; margin: 0 auto;">
                    Mit modernster Videotechnologie, präzisen Messinstrumenten und biomechanischer Expertise finden wir die ideale Position für jeden Radfahrer. Ob Rennrad, MTB, Gravel oder E-Bike – jedes Bike wird individuell auf deinen Körper, deine Beweglichkeit und deine Anforderungen abgestimmt.
                </p>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section style="padding: 3rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h3 class="fade-in" style="font-size: 1.5rem; font-weight: 200; letter-spacing: 0.12em; text-align: center; margin-bottom: 2.5rem; text-transform: uppercase; color: var(--color-text);">
                    Warum Bikefitting?
                </h3>

                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.75rem; margin-bottom: 1.5rem;">
                    <div class="benefit-card fade-in" style="grid-column: span 2; background: var(--color-secondary); padding: 2.25rem; border-radius: 8px; border: 1px solid var(--color-border);">
                        <h4 style="font-size: 1.35rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Maximale Effizienz & Leistung</h4>
                        <p style="font-size: 0.95rem; line-height: 1.85; color: var(--color-text-light); margin-bottom: 0.9rem;">
                            Optimiere deine Kraftübertragung und steigere deine Performance durch die perfekte Anpassung aller Kontaktpunkte. Eine biomechanisch korrekte Position sorgt dafür, dass jeder Tritt effektiver wird und mehr Kraft auf die Pedale gebracht werden kann.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Studien zeigen, dass durch professionelles Bikefitting die Leistung um bis zu 10% gesteigert werden kann, während gleichzeitig der Energieverbrauch sinkt. Besonders bei längeren Ausfahrten macht sich die optimierte Position deutlich bemerkbar.
                        </p>
                    </div>

                    <div class="benefit-card fade-in" style="background: linear-gradient(135deg, #8B9D93 0%, #A0B3A8 100%); padding: 2.25rem; border-radius: 8px; color: white;">
                        <h4 style="font-size: 1.2rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem; color: white;">Gesundheit & Komfort</h4>
                        <p style="font-size: 0.9rem; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 0.75rem;">
                            Vermeide Schmerzen in Rücken, Nacken, Knien und Händen durch ergonomische Anpassungen.
                        </p>
                        <p style="font-size: 0.825rem; line-height: 1.7; color: rgba(255, 255, 255, 0.85);">
                            Eine falsche Sitzposition führt zu Überlastungen und Beschwerden. Wir korrigieren Fehlhaltungen präventiv.
                        </p>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.75rem;">
                    <div class="benefit-card fade-in" style="background: var(--color-secondary); padding: 2.25rem; border-radius: 8px; border: 1px solid var(--color-border);">
                        <h4 style="font-size: 1.2rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem;">Verletzungsprävention</h4>
                        <p style="font-size: 0.9rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 0.75rem;">
                            Reduziere das Risiko von Überlastungen, Sehnenentzündungen und chronischen Beschwerden nachhaltig.
                        </p>
                        <p style="font-size: 0.825rem; line-height: 1.7; color: var(--color-text-anthracite);">
                            Viele typische Rad-Beschwerden entstehen durch falsche Sitzposition und können vermieden werden.
                        </p>
                    </div>

                    <div class="benefit-card fade-in" style="grid-column: span 2; background: var(--color-secondary); padding: 2.25rem; border-radius: 8px; border: 1px solid var(--color-border);">
                        <h4 style="font-size: 1.35rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem;">Mehr Fahrspaß & längere Touren</h4>
                        <p style="font-size: 0.95rem; line-height: 1.85; color: var(--color-text-light); margin-bottom: 0.9rem;">
                            Genieße längere Touren ohne Beschwerden und konzentriere dich voll aufs Fahren. Wenn alle Kontaktpunkte optimal passen, kannst du dich auf das Wesentliche fokussieren – das Erlebnis auf dem Bike.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Keine störenden Druckstellen, keine Taubheitsgefühle, keine Verspannungen. Nur reiner Fahrspaß auf jedem Kilometer. Die richtige Position ermöglicht es dir, deutlich längere Strecken schmerzfrei zu fahren.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="container" style="padding: 2rem 0;">
        <div style="height: 1px; background: linear-gradient(90deg, transparent, var(--color-border), transparent); margin: 0 auto; max-width: 600px;"></div>
    </div>

    <!-- Process Timeline Section -->
    <section class="process-timeline-section" style="padding: 3.5rem 0; background-color: var(--color-secondary); position: relative;">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h2 class="fade-in" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; text-align: center; margin-bottom: 3.5rem; letter-spacing: 0.15em;">
                    Unser Prozess
                </h2>

                <!-- Step 1 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 2.5rem; margin-bottom: 3rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">01</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.4rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem; color: var(--color-text);">Anamnese & Zielsetzung</h3>
                        <p style="font-size: 0.95rem; line-height: 1.9; color: var(--color-text-light); margin-bottom: 0.85rem;">
                            In einem ausführlichen Gespräch erfassen wir deine Fahrgewohnheiten, sportlichen Ziele, bisherige Beschwerden und gesundheitliche Besonderheiten. Wir analysieren deinen Fahrstil, deine Trainingsintensität und definieren gemeinsam die spezifischen Anforderungen an deine optimale Sitzposition.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Dabei berücksichtigen wir auch deine Flexibilität, bisherige Verletzungen und individuelle anatomische Besonderheiten. Diese Informationen bilden die Grundlage für alle weiteren Schritte.
                        </p>
                        <div style="display: flex; gap: 0.85rem; flex-wrap: wrap; margin-top: 1.25rem;">
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">INTERVIEW</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">ZIELDEFINITION</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">BESCHWERDENANALYSE</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 2.5rem; margin-bottom: 3rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">02</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.4rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem; color: var(--color-text);">Körperanalyse & Vermessung</h3>
                        <p style="font-size: 0.95rem; line-height: 1.9; color: var(--color-text-light); margin-bottom: 0.85rem;">
                            Präzise Messung deiner Körpermaße und umfassende Flexibilitätstests. Wir erfassen Beinlängen, Rumpf- und Armlänge, Schulterbereite sowie deine individuelle Beweglichkeit in Hüfte, Rücken und Schultern.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Die Beweglichkeitstests zeigen uns, welche Sitzposition für deinen Körper realistisch und komfortabel ist. Nicht jeder kann oder sollte eine aggressive Rennposition einnehmen.
                        </p>
                        <div style="display: flex; gap: 0.85rem; flex-wrap: wrap; margin-top: 1.25rem;">
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">VERMESSUNG</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">FLEXIBILITÄT</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">ANATOMIE</span>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 2.5rem; margin-bottom: 3rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">03</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.4rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem; color: var(--color-text);">Videoanalyse & Bewegungsanalyse</h3>
                        <p style="font-size: 0.95rem; line-height: 1.9; color: var(--color-text-light); margin-bottom: 0.85rem;">
                            Du fährst auf unserem professionellen Ergometer, während wir deine Position und Bewegung aus verschiedenen Winkeln mit Hochgeschwindigkeitskameras filmen. Die Videoanalyse zeigt präzise Winkel, Bewegungsmuster und Optimierungspotenzial.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Wir analysieren Kniewinkel, Hüftposition, Rückenwinkel, Schulterstellung und die Bewegung deiner Beine während der gesamten Pedal-Umdrehung. So erkennen wir auch subtile Fehlstellungen.
                        </p>
                        <div style="display: flex; gap: 0.85rem; flex-wrap: wrap; margin-top: 1.25rem;">
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">VIDEO</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">WINKELANALYSE</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">BEWEGUNGSMUSTER</span>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 2.5rem; margin-bottom: 3rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">04</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.4rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem; color: var(--color-text);">Anpassung & Optimierung</h3>
                        <p style="font-size: 0.95rem; line-height: 1.9; color: var(--color-text-light); margin-bottom: 0.85rem;">
                            Schrittweise Optimierung aller Kontaktpunkte basierend auf den Messdaten und der Videoanalyse. Wir passen Sattelhöhe, Sattelneigung, Sattelposition (vor/zurück), Lenkerposition, Lenkerhöhe, Vorbaulänge und bei Bedarf auch Lenkerbreite individuell an.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Bei Klickpedalen optimieren wir auch die Cleat-Position für optimale Kraftübertragung und gesunde Kniestellung. Jede Anpassung wird in kleinen Schritten vorgenommen und getestet.
                        </p>
                        <div style="display: flex; gap: 0.85rem; flex-wrap: wrap; margin-top: 1.25rem;">
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">FEINTUNING</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">OPTIMIERUNG</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">CLEAT-SETUP</span>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="process-step" style="display: grid; grid-template-columns: 80px 1fr; gap: 2.5rem; padding-left: 2rem;">
                    <div class="step-number" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 100; color: white; box-shadow: 0 10px 30px rgba(139, 157, 147, 0.3); z-index: 1; position: relative;">05</div>
                    <div class="step-content">
                        <h3 style="font-size: 1.4rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 0.9rem; color: var(--color-text);">Dokumentation & Follow-up</h3>
                        <p style="font-size: 0.95rem; line-height: 1.9; color: var(--color-text-light); margin-bottom: 0.85rem;">
                            Du erhältst ein detailliertes digitales Protokoll mit allen Einstellungen, Maßen, Fotos und individuellen Empfehlungen. Dieses Dokument kannst du für spätere Bike-Setups oder beim Kauf eines neuen Bikes verwenden.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Nach 2-3 Wochen Eingewöhnungszeit besprechen wir gerne deine Erfahrungen und nehmen bei Bedarf kostenlos Feintuning vor. Die optimale Position entwickelt sich manchmal erst nach mehreren Ausfahrten.
                        </p>
                        <div style="display: flex; gap: 0.85rem; flex-wrap: wrap; margin-top: 1.25rem;">
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">PROTOKOLL</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">NACHBETREUUNG</span>
                            <span style="padding: 0.45rem 1rem; background: rgba(139, 157, 147, 0.1); border-radius: 20px; font-size: 0.7rem; letter-spacing: 0.1em; color: var(--color-accent);">FEINTUNING</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section style="padding: 3rem 0; background-color: var(--color-primary);">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2.5rem;">
                    <div class="fade-in">
                        <h3 style="font-size: 1.3rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Für wen ist Bikefitting geeignet?</h3>
                        <p style="font-size: 0.9rem; line-height: 1.85; color: var(--color-text-light); margin-bottom: 0.9rem;">
                            Bikefitting ist für alle Radfahrer sinnvoll, unabhängig vom Leistungsniveau. Besonders empfehlenswert ist es bei bestehenden Beschwerden, nach Verletzungen, beim Kauf eines neuen Bikes oder wenn du deine Leistung optimieren möchtest.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Auch Freizeitfahrer profitieren enorm von der richtigen Position. Gerade bei längeren Touren oder mehrtägigen Bike-Reisen macht sich eine optimale Sitzposition deutlich bemerkbar.
                        </p>
                    </div>

                    <div class="fade-in">
                        <h3 style="font-size: 1.3rem; font-weight: 200; letter-spacing: 0.1em; margin-bottom: 1rem; color: var(--color-text);">Dauer und Investition</h3>
                        <p style="font-size: 0.9rem; line-height: 1.85; color: var(--color-text-light); margin-bottom: 0.9rem;">
                            Ein professionelles Bikefitting dauert zwischen 2-3 Stunden, je nach Komplexität und individuellen Anforderungen. Wir nehmen uns Zeit für eine gründliche Analyse und sorgen dafür, dass alle Anpassungen optimal sind.
                        </p>
                        <p style="font-size: 0.875rem; line-height: 1.75; color: var(--color-text-anthracite);">
                            Die Investition in ein Bikefitting zahlt sich langfristig aus: Mehr Komfort, bessere Performance, weniger Beschwerden und mehr Freude am Radfahren. Kontaktiere uns für aktuelle Preise und Terminvereinbarung.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 3.5rem 0; text-align: center; background: linear-gradient(135deg, #0A0A0A 0%, #1A1A1A 100%); position: relative; overflow: hidden;">
        <div style="position: absolute; inset: 0; background-image: url('assets/images/wadeln.jpg'); background-size: cover; background-position: center; opacity: 0.15; filter: grayscale(100%);"></div>
        <div class="container fade-in" style="position: relative; z-index: 1;">
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em; margin-bottom: 0.85rem; color: white;">
                Bereit für deine perfekte Position?
            </h2>
            <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 2.25rem; letter-spacing: 0.15em; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.7;">
                Vereinbare jetzt deinen Bikefitting-Termin und erlebe den Unterschied
            </p>
            <a href="about.php" class="btn btn-primary cta-button-fitting" style="padding: 1.25rem 3.5rem; font-size: 0.8rem;">Jetzt Termin vereinbaren</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<!-- Page-specific JavaScript -->
<script src="assets/js/bikefitting.js"></script>
