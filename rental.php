<?php 
$page_title = 'Rental & Service';
include 'includes/header.php'; 
?>

<main style="padding-top: 80px; min-height: 100vh;">

    <!-- Page Header -->
    <section class="section-spacing">
        <div class="container">
            <div class="fade-in" style="text-align: center; max-width: 900px; margin: 0 auto 5rem;">
                <h1 style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 300; margin-bottom: 1.5rem; letter-spacing: 0.15em;">
                    Bike Rental & Service
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-light);">
                    Choose from our premium selection of bikes. All rentals include helmet, lock, and basic insurance.
                </p>
            </div>
            
            <!-- Mountain Bikes -->
            <div class="bike-category fade-in">
                <h2>Mountain Bikes</h2>
                <div class="bikes-grid">
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>Trail Expert</h3>
                            <div class="bike-price">€45/day</div>
                            <ul class="bike-features">
                                <li>Full Suspension</li>
                                <li>29" Wheels</li>
                                <li>Shimano XT Groupset</li>
                                <li>Hydraulic Disc Brakes</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                    
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>Enduro Pro</h3>
                            <div class="bike-price">€55/day</div>
                            <ul class="bike-features">
                                <li>Carbon Frame</li>
                                <li>27.5" Wheels</li>
                                <li>Fox Suspension</li>
                                <li>Dropper Post</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                    
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>XC Race</h3>
                            <div class="bike-price">€50/day</div>
                            <ul class="bike-features">
                                <li>Lightweight Design</li>
                                <li>29" Wheels</li>
                                <li>Race Geometry</li>
                                <li>100mm Travel</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- E-Bikes -->
            <div class="bike-category fade-in">
                <h2>E-Bikes</h2>
                <div class="bikes-grid">
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>City Comfort</h3>
                            <div class="bike-price">€40/day</div>
                            <ul class="bike-features">
                                <li>500Wh Battery</li>
                                <li>Step-through Frame</li>
                                <li>Range: up to 100km</li>
                                <li>Integrated Lights</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                    
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>Trekking Tour</h3>
                            <div class="bike-price">€45/day</div>
                            <ul class="bike-features">
                                <li>625Wh Battery</li>
                                <li>Front Suspension</li>
                                <li>Range: up to 120km</li>
                                <li>Rear Rack</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                    
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>E-MTB Explorer</h3>
                            <div class="bike-price">€60/day</div>
                            <ul class="bike-features">
                                <li>750Wh Battery</li>
                                <li>Full Suspension</li>
                                <li>Range: up to 90km</li>
                                <li>Trail Mode</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Kids Bikes -->
            <div class="bike-category fade-in">
                <h2>Kids Bikes</h2>
                <div class="bikes-grid">
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>Junior 20"</h3>
                            <div class="bike-price">€20/day</div>
                            <ul class="bike-features">
                                <li>20" Wheels</li>
                                <li>Safety Brakes</li>
                                <li>Adjustable Seat</li>
                                <li>Ages 6-9</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                    
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>Teen 24"</h3>
                            <div class="bike-price">€25/day</div>
                            <ul class="bike-features">
                                <li>24" Wheels</li>
                                <li>7-Speed Gearing</li>
                                <li>Lightweight Frame</li>
                                <li>Ages 9-12</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                    
                    <div class="bike-card">
                        <div class="bike-image"></div>
                        <div class="bike-info">
                            <h3>Kids MTB</h3>
                            <div class="bike-price">€30/day</div>
                            <ul class="bike-features">
                                <li>24" Wheels</li>
                                <li>Front Suspension</li>
                                <li>Disc Brakes</li>
                                <li>Ages 10-14</li>
                            </ul>
                            <button class="btn btn-secondary" style="width: 100%;">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Service Section -->
    <section class="section-spacing" style="background-color: var(--color-primary); border-top: 1px solid var(--color-border);">
        <div class="container">
            <div class="fade-in" style="text-align: center; margin-bottom: 5rem;">
                <h2 class="section-title">Service & Maintenance</h2>
            </div>
            
            <div class="service-packages fade-in">
                <div class="service-package">
                    <h3>Basic Service</h3>
                    <div class="price">€45</div>
                    <ul>
                        <li>Brake adjustment</li>
                        <li>Gear tuning</li>
                        <li>Chain lubrication</li>
                        <li>Safety check</li>
                        <li>Tire pressure check</li>
                    </ul>
                </div>
                
                <div class="service-package">
                    <h3>Full Service</h3>
                    <div class="price">€95</div>
                    <ul>
                        <li>Complete bike inspection</li>
                        <li>Brake service & pads</li>
                        <li>Drivetrain deep cleaning</li>
                        <li>Wheel truing & spoke tension</li>
                        <li>Suspension setup</li>
                        <li>Cable replacement if needed</li>
                    </ul>
                </div>
            </div>
            
            <div class="fade-in" style="text-align: center; margin-top: 4rem;">
                <p style="font-size: 0.875rem; color: var(--color-text-light); max-width: 700px; margin: 0 auto; line-height: 1.8;">
                    Need a custom service or repair? Contact us for a free consultation. 
                    We offer same-day service for most repairs and maintenance work.
                </p>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>