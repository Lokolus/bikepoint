<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bikepoint - Premium Bike Rental & Service in Salzburg. Ride. Explore. Enjoy.">
    <meta name="keywords" content="bike rental, fahrradverleih, mountain bike, e-bike, salzburg">
    <meta name="author" content="Bikepoint">
    
    <title><?php echo isset($page_title) ? $page_title . ' | Bikepoint' : 'Bikepoint - Ride. Explore. Enjoy.'; ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.jpg">
</head>
<body<?php echo !isset($has_hero) || !$has_hero ? ' class="no-hero"' : ''; ?>>

    <!-- Navigation -->
    <div class="nav-wrapper<?php echo !isset($has_hero) || !$has_hero ? ' scrolled' : ''; ?>">
        <div class="container">
            <nav>
                <a href="index.php" class="logo">
                    <img src="assets/images/logo.jpg" alt="Bikepoint Logo" class="logo-img">
                    <span class="logo-text">BIKEPOINT</span>
                </a>

                <ul class="nav-menu">
                    <li><a href="verkauf.php"<?php echo ($page_title == 'Bike Verkauf') ? ' class="active"' : ''; ?>>Verkauf</a></li>
                    <li><a href="rental.php"<?php echo ($page_title == 'Verleih & Service') ? ' class="active"' : ''; ?>>Verleih & Service</a></li>
                    <li><a href="bikefitting.php"<?php echo ($page_title == 'Bikefitting') ? ' class="active"' : ''; ?>>Bikefitting</a></li>
                    <li><a href="about.php"<?php echo ($page_title == 'Über uns & Kontakt') ? ' class="active"' : ''; ?>>Über uns & Kontakt</a></li>
                </ul>

                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </div>