# BIKEPOINT - Minimalistisches Website Design

## 📋 Projektübersicht

Eine elegante, minimalistische Website für Bikepoint (Bike-Verleih & Service) mit White Mode Design, Schwarz/Weiß Bildsprache und warmer Beige-Akzentfarbe.

## 🎨 Design-Konzept

### Farbpalette
```css
--color-primary: #F5F5F5        /* Heller Hintergrund */
--color-secondary: #FFFFFF      /* Weiß */
--color-accent: #C4A07A          /* Warmes Beige */
--color-text: #1A1A1A            /* Dunkles Anthrazit */
--color-text-light: #6B6B6B      /* Hellgrau */
--color-border: #E8E8E8          /* Rahmen */
```

### Design-Prinzipien
- ✨ Sehr viel Weißraum und große Abstände
- 🖼️ Schwarz/Weiß Bildplatzhalter
- 🎭 Sanfte Fade-in Animationen
- 🌊 Smooth Hover-Effekte
- 📱 Mobile-first Design
- 🎯 Klare Typografie (Sans-Serif, Light)

## 📁 Dateistruktur

```
bikepoint/
│
├── index.php                    # Home Page
├── rental.php                   # Rental & Service Page
├── about.php                    # About & Contact Page
│
├── assets/
│   ├── css/
│   │   └── style.css           # Haupt-Stylesheet
│   │
│   ├── js/
│   │   └── main.js             # JavaScript Funktionen
│   │
│   └── images/                 # Bilder (leer, bereit für S/W Fotos)
│
└── includes/
    ├── header.php              # Navigation & Header
    └── footer.php              # Footer
```

## 🚀 Features

### Navigation
- Fixed Header mit Blur-Effekt beim Scrollen
- Mobile-responsive Hamburger-Menü
- Aktive Link-Hervorhebung
- Smooth Scroll zu Sektionen

### Animationen
- Fade-in Effekte beim Scrollen (Intersection Observer)
- Smooth Hover-Transformationen
- Counter-Animation für Statistiken
- Hero-Section mit Parallax-Effekt

### Komponenten
- **Service Cards**: Minimalistische Icons mit Hover-Effekten
- **Bike Cards**: Strukturierte Layouts mit Preisen & Features
- **Team Section**: Runde Portraits mit Initialen
- **Contact Form**: Einfaches, clean gestaltetes Formular
- **Footer**: Dreispaltig mit Links und Öffnungszeiten

## 📄 Seiten-Struktur

### 1. Home (index.php)
- Hero-Section mit großem Claim
- Service-Teaser (Rental, Shop, Service)
- About Preview mit Statistiken
- Call-to-Action Section

### 2. Rental & Service (rental.php)
- Mountain Bikes (3 Modelle)
- E-Bikes (3 Modelle)
- Kids Bikes (3 Modelle)
- Service-Pakete (Basic & Full Service)

### 3. About & Contact (about.php)
- Über Bikepoint (Geschichte seit 2015)
- Team-Vorstellung (3 Mitglieder)
- Werte-Section
- Kontaktformular + Details

## 🛠️ Installation

1. **Projekt entpacken**
   ```bash
   # Entpacke die Dateien in dein Webserver-Verzeichnis
   # z.B. /var/www/html/bikepoint oder htdocs/bikepoint
   ```

2. **Webserver starten**
   - Apache oder Nginx mit PHP 7.4+ erforderlich
   - Keine Datenbank benötigt (statische Seiten)

3. **Im Browser öffnen**
   ```
   http://localhost/bikepoint
   ```

## 📱 Responsive Breakpoints

```css
Desktop:  > 768px   (Standard Layout)
Tablet:   ≤ 768px   (Mobile Navigation aktiviert)
Mobile:   ≤ 480px   (Kompakte Layouts)
```

## ⚙️ JavaScript-Funktionen

### Implementiert:
- ✅ Navigation Scroll-Effekt
- ✅ Mobile Menu Toggle
- ✅ Smooth Scroll
- ✅ Fade-in Animationen (Intersection Observer)
- ✅ Counter Animation
- ✅ Form Validation
- ✅ Lazy Loading Vorbereitung

### main.js Highlights:
```javascript
// Navigation Scroll
window.addEventListener('scroll', function() { ... });

// Fade-in Observer
const observer = new IntersectionObserver(...);

// Counter Animation
function animateCounter(element, target, duration) { ... }

// Form Validation
contactForm.addEventListener('submit', function(e) { ... });
```

## 🎯 Anpassungen

### Farben ändern
Bearbeite die CSS-Variablen in `assets/css/style.css`:
```css
:root {
    --color-accent: #C4A07A;  /* Deine neue Akzentfarbe */
}
```

### Bilder hinzufügen
1. Füge S/W Fotos in `assets/images/` ein
2. Ersetze `.bike-image` und `.team-photo` Hintergründe
3. Optional: Nutze `<img>` Tags mit `data-src` für Lazy Loading

### Inhalte ändern
- Texte direkt in den PHP-Dateien bearbeiten
- Preise in `rental.php` anpassen
- Team-Namen in `about.php` ändern

## 📝 Kontaktformular

Das Formular in `about.php` hat Client-Side Validation. Für Server-Side Processing:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    // Hier: E-Mail versenden oder in DB speichern
}
?>
```

## 🚀 Performance

### Optimierungen:
- ✅ Minimale CSS-Animationen
- ✅ Lazy Loading vorbereitet
- ✅ Intersection Observer statt Scroll-Events
- ✅ Keine externe Bibliotheken (außer optional)
- ✅ Leichte SVG-Icons

### Empfohlene Erweiterungen:
- CSS/JS Minification
- Image Optimization (WebP Format)
- Browser Caching
- CDN für Assets

## 🎨 Design-Richtlinien

### Typografie
- **Headings**: Font-weight 300 (Light)
- **Body**: Font-weight 300 (Light)
- **Letter-spacing**: 0.1em - 0.2em (weit)
- **Line-height**: 1.6 - 1.8 (luftig)

### Spacing
- **Section-padding**: 8rem (Desktop), 4rem (Mobile)
- **Card-gap**: 2rem - 4rem
- **Container-padding**: 3rem (Desktop), 1.5rem (Mobile)

### Animationen
- **Duration**: 0.3s (Fast), 0.5s (Smooth)
- **Easing**: cubic-bezier(0.4, 0, 0.2, 1)
- **Hover**: translateY(-10px) + shadow

## 📦 Browser-Kompatibilität

Getestet und funktioniert in:
- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+

## 🔧 Troubleshooting

**Problem: Menü funktioniert nicht auf Mobile**
- Prüfe ob `main.js` geladen wird
- Öffne Browser Console (F12) für Fehler

**Problem: Animationen laufen nicht**
- Browser unterstützt evtl. keine Intersection Observer
- Füge Polyfill hinzu für ältere Browser

**Problem: Styles werden nicht angewendet**
- Prüfe Pfad zu `style.css` in `header.php`
- Cache leeren (Strg + F5)

## 📞 Support

Bei Fragen oder Problemen:
- 📧 E-Mail: info@bikepoint.at
- 📱 Telefon: +43 662 123456

## 📄 Lizenz

Dieses Projekt wurde für Bikepoint erstellt.
Alle Rechte vorbehalten © 2024 Bikepoint

---

**Entwickelt mit ❤️ für minimalistisches Design**

Version 1.0.0 | November 2024