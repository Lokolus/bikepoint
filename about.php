<?php
$page_title = 'Über uns & Kontakt';
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Fullscreen Schwarz-Weiß wie Homepage -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/19.08.25-330.jpg');"></div>
    <div class="hero-content">
        <h1>Über<br>Bikepoint</h1>
        <p>Seit 2015 deine Radsport-Experten</p>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<main>
    <!-- About Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.125rem; line-height: 2; color: var(--color-text-light); margin-bottom: 3rem;">
                    Gegründet 2015, bedient Bikepoint Radsport-Enthusiasten mit Leidenschaft und Hingabe.
                    Unsere Mission ist einfach: Premium-Bikes und außergewöhnlichen Service bieten, damit jede Fahrt unvergesslich wird.
                </p>

                <p style="font-size: 1.125rem; line-height: 2; color: var(--color-text-light); margin-bottom: 6rem;">
                    Im Herzen von Maria Alm gelegen, sind wir perfekt positioniert um dir zu helfen, die Schönheit
                    der österreichischen Radrouten zu entdecken.
                </p>

                <!-- Stats -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 4rem; margin-top: 6rem;">
                    <div style="text-align: center;">
                        <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 1rem; letter-spacing: 0.05em;">2000+</div>
                        <div style="font-size: 0.875rem; color: var(--color-text-light); letter-spacing: 0.1em; text-transform: uppercase;">Glückliche Fahrer</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 1rem; letter-spacing: 0.05em;">50+</div>
                        <div style="font-size: 0.875rem; color: var(--color-text-light); letter-spacing: 0.1em; text-transform: uppercase;">Premium Bikes</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 4rem; font-weight: 100; color: var(--color-accent); margin-bottom: 1rem; letter-spacing: 0.05em;">9</div>
                        <div style="font-size: 0.875rem; color: var(--color-text-light); letter-spacing: 0.1em; text-transform: uppercase;">Jahre Erfahrung</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Unser Team</h2>
            </div>

            <div class="fade-in" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 8rem;">
                <!-- Michael Berg -->
                <div style="text-align: center;">
                    <div style="width: 200px; height: 200px; margin: 0 auto 2rem; border-radius: 50%; background: linear-gradient(135deg, #2C3E50 0%, #4A5568 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: bold; color: rgba(255, 255, 255, 0.1); filter: grayscale(100%);">MB</div>
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 0.5rem;">Michael Berg</h3>
                    <p style="font-size: 0.875rem; color: var(--color-accent); letter-spacing: 0.1em;">Gründer & Inhaber</p>
                </div>

                <!-- Sarah Winter -->
                <div style="text-align: center;">
                    <div style="width: 200px; height: 200px; margin: 0 auto 2rem; border-radius: 50%; background: linear-gradient(135deg, #2C3E50 0%, #4A5568 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: bold; color: rgba(255, 255, 255, 0.1); filter: grayscale(100%);">SW</div>
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 0.5rem;">Sarah Winter</h3>
                    <p style="font-size: 0.875rem; color: var(--color-accent); letter-spacing: 0.1em;">Service Managerin</p>
                </div>

                <!-- Tom Müller -->
                <div style="text-align: center;">
                    <div style="width: 200px; height: 200px; margin: 0 auto 2rem; border-radius: 50%; background: linear-gradient(135deg, #2C3E50 0%, #4A5568 100%); display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: bold; color: rgba(255, 255, 255, 0.1); filter: grayscale(100%);">TM</div>
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 0.5rem;">Tom Müller</h3>
                    <p style="font-size: 0.875rem; color: var(--color-accent); letter-spacing: 0.1em;">Verleih Spezialist</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Unsere Werte</h2>
            </div>

            <div class="fade-in" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 8rem;">
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Qualität zuerst</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Wir bieten nur Premium-Bikes und Ausrüstung die unseren hohen Standards entsprechen.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Kundenfokus</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Deine Zufriedenheit und Sicherheit sind unsere obersten Prioritäten in allem was wir tun.
                    </p>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.25rem; font-weight: 200; letter-spacing: 0.15em; margin-bottom: 1.5rem;">Zuverlässigkeit</h3>
                    <p style="color: var(--color-text-light); line-height: 2; font-size: 0.9375rem;">
                        Verlasse dich auf uns für konstanten Service, gewartete Ausrüstung und Experten-Beratung.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section-spacing" style="background-color: var(--color-primary);">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: var(--spacing-md);">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 100; letter-spacing: 0.2em;">Kontakt</h2>
            </div>

            <div class="fade-in" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 8rem;">
                <!-- Contact Info -->
                <div>
                    <div style="margin-bottom: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 1.5rem; margin-bottom: 2rem;">
                            <div style="color: var(--color-accent); font-size: 0.875rem; letter-spacing: 0.1em; text-transform: uppercase; min-width: 100px;">Adresse</div>
                            <div style="color: var(--color-text-light); line-height: 2;">Hauptstraße 123<br>5761 Maria Alm, Österreich</div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 1.5rem; margin-bottom: 2rem;">
                            <div style="color: var(--color-accent); font-size: 0.875rem; letter-spacing: 0.1em; text-transform: uppercase; min-width: 100px;">Telefon</div>
                            <div style="color: var(--color-text-light); line-height: 2;">+43 6584 123456</div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 1.5rem; margin-bottom: 2rem;">
                            <div style="color: var(--color-accent); font-size: 0.875rem; letter-spacing: 0.1em; text-transform: uppercase; min-width: 100px;">Email</div>
                            <div style="color: var(--color-text-light); line-height: 2;">info@bikepoint-mariaalm.at</div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 1.5rem;">
                            <div style="color: var(--color-accent); font-size: 0.875rem; letter-spacing: 0.1em; text-transform: uppercase; min-width: 100px;">Öffnungszeiten</div>
                            <div style="color: var(--color-text-light); line-height: 2;">Montag - Samstag<br>9:00 - 18:00<br>Sonntag: Geschlossen</div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <form class="contact-form" method="POST" action="">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="NAME" required style="width: 100%; padding: 1rem 1.5rem; border: 1px solid var(--color-border); background-color: var(--color-secondary); font-size: 0.875rem; letter-spacing: 0.1em; transition: var(--transition-fast); font-family: inherit;">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="EMAIL" required style="width: 100%; padding: 1rem 1.5rem; border: 1px solid var(--color-border); background-color: var(--color-secondary); font-size: 0.875rem; letter-spacing: 0.1em; transition: var(--transition-fast); font-family: inherit;">
                        </div>

                        <div class="form-group">
                            <textarea name="message" placeholder="NACHRICHT" rows="6" required style="width: 100%; padding: 1rem 1.5rem; border: 1px solid var(--color-border); background-color: var(--color-secondary); font-size: 0.875rem; letter-spacing: 0.1em; transition: var(--transition-fast); font-family: inherit; resize: none; min-height: 200px;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-secondary" style="width: 100%;">
                            NACHRICHT SENDEN
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
