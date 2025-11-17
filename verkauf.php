<?php
$page_title = "Bike Verkauf";
$has_hero = true;
include 'includes/header.php';
?>

<!-- Hero Section - Dynamic Verkauf Style -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/racing.jpg'); animation: heroZoom 30s ease-in-out infinite alternate;"></div>
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
                    <div style="aspect-ratio: 4/3; background-image: url('assets/images/auf.jpg'); background-size: cover; background-position: center; border-radius: 12px; filter: grayscale(100%); position: relative; overflow: hidden;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.25)); border-radius: 12px;"></div>
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
                <div class="bike-category-grid" data-category="mtb" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem; opacity: 1; transform: translateY(0); transition: all 0.4s ease;">

                    <!-- Cube Stereo 140 -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #2C3E50 0%, #34495E 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">CUBE</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Cube Stereo 140 HPC</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Vielseitiges Trail-Fully mit 140mm Federweg. Perfekt für anspruchsvolle Touren und flowige Trails. Carbon-Rahmen mit optimiertem Gewicht und ausgewogener Geometrie für maximalen Fahrspaß.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano XT 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Fox 36 Performance Elite
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Rahmen, 29 Zoll
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 13,2 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Orbea Occam -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #C0392B 0%, #E74C3C 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">ORBEA</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Orbea Occam M30</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Leichtes und agiles Trail-Bike mit 130mm Federweg. Die moderne Geometrie kombiniert Kletterfähigkeit mit Abfahrtsperformance. Ideal für Marathon-Touren und technische Trails in den Alpen.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano SLX 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox Pike Select+
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Aluminium, 29 Zoll
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 13,8 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Scott Spark -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #16A085 0%, #1ABC9C 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">SCOTT</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Scott Spark 950</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Race-orientiertes XC/Trail-Bike mit 120mm Federweg und TwinLoc-System für optimale Federungsabstimmung. Extrem effizient im Uphill, verspielt im Trail. Das perfekte Bike für Wettkämpfe und schnelle Runden.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano Deore XT 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox SID Select+
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon, 29 Zoll
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 11,9 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cube Stereo 170 -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #8E44AD 0%, #9B59B6 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">CUBE</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Cube Stereo 170 Race</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Enduro-Bike für anspruchsvolle Abfahrten mit 170mm Federweg vorne und hinten. Robuste Ausstattung für Bikepark und alpine Trails. Trotz Downhill-Fokus noch gut fahrbar bergauf dank moderner Kinematik.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> SRAM GX Eagle 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox Lyrik Select+
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Aluminium, 29 Zoll
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 15,2 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Orbea Rallon -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #D35400 0%, #E67E22 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">ORBEA</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Orbea Rallon M-LTD</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                High-End Enduro-Maschine mit 160mm Federweg und Carbon-Rahmen. Entwickelt für maximale Performance in anspruchsvollem Gelände. Variabler Lenkwinkel und progressives Fahrwerk für beste Kontrolle.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> SRAM X01 Eagle 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Fox 38 Factory
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Rahmen, 29 Zoll
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 14,3 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Scott Ransom -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #2980B9 0%, #3498DB 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">SCOTT</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Scott Ransom 920</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Vielseitiges Enduro-Bike mit 170mm Federweg und innovativer Geometrie-Anpassung. TwinLoc ermöglicht sofortige Abstimmung von Federung und Geometrie. Perfekt für Enduro-Rennen und anspruchsvolle Touren.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> SRAM GX Eagle 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox Zeb Select
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Rahmen, 29 Zoll
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 14,8 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- E-MTB Category -->
                <div class="bike-category-grid" data-category="emtb" style="display: none; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem; opacity: 0; transform: translateY(20px); transition: all 0.4s ease;">

                    <!-- Cube Stereo Hybrid -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #27AE60 0%, #2ECC71 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">CUBE</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Cube Stereo Hybrid 140</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Kraftvolles E-MTB mit Bosch Performance CX Motor und 750Wh Akku. 140mm Federweg für vielseitigen Einsatz auf Trail und Tour. Reichweite bis 120km je nach Modus und Gelände. Harmonische Integration von Motor und Fahrwerk.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Bosch CX 85Nm, 750Wh
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano Deore XT 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox Pike Select, 29"
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 23,5 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Orbea Rise -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #8E44AD 0%, #9B59B6 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">ORBEA</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Orbea Rise M20</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Leichtes E-MTB mit Shimano EP8 Motor und kompaktem 360Wh Akku. 140mm Federweg und nur 19kg Gewicht für natürliches Fahrgefühl. Das Bike fährt sich wie ein normales MTB mit dezenter Unterstützung. Perfekt für sportliche Fahrer.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano EP8 60Nm, 360Wh
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano XT 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Fox 36 Performance, 29"
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 19,2 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Scott Patron eRide -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #C0392B 0%, #E74C3C 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">SCOTT</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Scott Patron eRide 910</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                E-Enduro mit 170mm Federweg und Bosch Performance CX Motor. Für anspruchsvollste Abfahrten und Bikepark-Einsätze. TwinLoc-System für optimale Federungsabstimmung. Trotz E-Antrieb agiles Handling dank ausgeklügelter Gewichtsverteilung.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Bosch CX 85Nm, 625Wh
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> SRAM GX Eagle 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> RockShox Zeb Select, 29"
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 24,1 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Road Bikes Category -->
                <div class="bike-category-grid" data-category="road" style="display: none; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem; opacity: 0; transform: translateY(20px); transition: all 0.4s ease;">

                    <!-- Cube Attain -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #2C3E50 0%, #34495E 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">CUBE</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Cube Attain GTC Pro</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Vielseitiges Carbon-Rennrad für Einsteiger und ambitionierte Hobby-Fahrer. Komfortable Geometrie für lange Touren und Granfondos. Shimano 105 Schaltung bietet präzises Schalten bei allen Bedingungen.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano 105 11-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Rahmen & Gabel
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 28 Zoll Laufräder
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 8,2 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Orbea Orca -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #C0392B 0%, #E74C3C 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">ORBEA</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Orbea Orca M30 Team</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Leichtes Race-Bike mit Carbon-Rahmen und aggressiver Geometrie. Entwickelt für Wettkämpfe und schnelle Trainingsausfahrten. Shimano Ultegra Di2 für präzises elektronisches Schalten. Aerodynamisch optimiert für maximale Geschwindigkeit.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano Ultegra Di2 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Monocoque
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Vision Team 30 Disc
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 7,4 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Scott Addict RC -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #16A085 0%, #1ABC9C 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">SCOTT</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Scott Addict RC 30</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Klassisches Climbing-Bike mit ultraleichtem Carbon-Rahmen. Perfekt für Bergtouren und Alpenpässe. Die ausgewogene Geometrie sorgt für Komfort auch auf langen Anstiegen. Shimano Ultegra für zuverlässige Performance.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano Ultegra 12-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> HMF Carbon Rahmen
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Syncros Capital 1.0
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 7,6 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Gravel Bikes Category -->
                <div class="bike-category-grid" data-category="gravel" style="display: none; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem; opacity: 0; transform: translateY(20px); transition: all 0.4s ease;">

                    <!-- Cube Nuroad Pro -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #8E44AD 0%, #9B59B6 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">CUBE</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Cube Nuroad Pro</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Vielseitiges Gravel-Bike für Asphalt und Schotter. Komfortable Geometrie für lange Abenteuer-Touren. Platz für breite Reifen bis 50mm. Ideal für Bikepacking und gemischtes Terrain. Shimano GRX speziell für Gravel optimiert.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano GRX 810 11-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Carbon Rahmen & Gabel
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 28" Laufräder, Tubeless
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 9,1 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Orbea Terra -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #D35400 0%, #E67E22 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">ORBEA</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Orbea Terra M30 Team</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Performance-Gravel-Bike mit Race-DNA. Leichter Carbon-Rahmen und agile Geometrie für sportliches Fahren. Shimano GRX Di2 für präzises elektronisches Schalten auch bei Schlamm und Dreck. Perfekt für Gravel-Rennen und schnelle Ausfahrten.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano GRX Di2 11-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> OMR Carbon Monocoque
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Vision Team 30 Disc
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 8,3 kg
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Scott Speedster Gravel -->
                    <div class="bike-card-verkauf" style="background: var(--color-secondary); border-radius: 8px; overflow: hidden; position: relative; border: 1px solid var(--color-border);">
                        <div class="bike-image-zoom" style="height: 240px; background: linear-gradient(135deg, #2980B9 0%, #3498DB 100%); filter: grayscale(100%); transition: all 0.5s ease; position: relative; overflow: hidden;">
                            <div class="bike-hover-overlay"></div>
                            <div class="quick-view-btn">Details ansehen</div>
                            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.7); padding: 0.4rem 0.9rem; border-radius: 4px; font-size: 0.7rem; letter-spacing: 0.1em; color: white;">SCOTT</div>
                        </div>
                        <div style="padding: 1.75rem;">
                            <h4 style="font-size: 1.15rem; font-weight: 200; letter-spacing: 0.08em; margin-bottom: 0.6rem; color: var(--color-text);">Scott Speedster Gravel 20</h4>
                            <p style="font-size: 0.85rem; color: var(--color-text-light); line-height: 1.75; margin-bottom: 1rem;">
                                Einsteiger-Gravel mit Aluminium-Rahmen und ausgewogenem Preis-Leistungs-Verhältnis. Stabile Ausstattung für erste Gravel-Abenteuer. Carbon-Gabel dämpft Vibrationen auf Schotterpisten. Zuverlässig und wartungsarm für sorgenfreies Fahren.
                            </p>
                            <ul style="list-style: none; padding: 0; margin-bottom: 0;">
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Shimano GRX 400 10-fach
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Alu Rahmen, Carbon Gabel
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); margin-bottom: 0.45rem; padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> Syncros RP2.0 Disc
                                </li>
                                <li style="font-size: 0.8rem; color: var(--color-text-anthracite); padding-left: 1.4rem; position: relative;">
                                    <span style="position: absolute; left: 0; color: var(--color-accent);">•</span> 10,2 kg
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
                            <span style="font-size: 1.5rem;"></span>
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
                            <span style="font-size: 1.5rem;"></span>
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
                            <span style="font-size: 1.5rem;"></span>
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
                            <span style="font-size: 1.5rem;"></span>
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
    <section style="padding: 5rem 0; text-align: center; background: #0A0A0A; position: relative; overflow: hidden;">
        <!-- Background Image -->
        <div style="position: absolute; inset: 0; background-image: url('assets/images/bergab.jpg'); background-size: cover; background-position: center; filter: grayscale(100%); opacity: 0.45;"></div>

        <!-- Overlay -->
        <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10, 10, 10, 0.45), rgba(10, 10, 10, 0.6));"></div>

        <!-- Content -->
        <div class="container fade-in" style="position: relative; z-index: 1;">
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
