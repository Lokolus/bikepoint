<?php
$page_title = 'Home';
$has_hero = true; // Kennzeichnet Seiten mit Hero-Bild
include 'includes/header.php';
?>

<!-- Hero Section - Ultra-minimalistisch -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1>BIKEPOINT</h1>
        <p>Fahren. Entdecken. Genießen.</p>
        <a href="verkauf.php" class="btn btn-primary">Entdecken</a>
    </div>
    <div class="hero-scroll">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>
</section>

<?php include 'includes/footer.php'; ?>