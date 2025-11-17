#!/bin/bash

# ==========================================
# BIKEPOINT - Installation Guide
# Minimalistisches Website Design
# ==========================================

echo "╔════════════════════════════════════════════╗"
echo "║                                            ║"
echo "║          BIKEPOINT INSTALLATION            ║"
echo "║    Minimalistisches Website Design         ║"
echo "║                                            ║"
echo "╚════════════════════════════════════════════╝"
echo ""

# Farben
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# Schritt 1: PHP Check
echo "📋 Schritt 1: PHP-Version prüfen..."
if command -v php &> /dev/null; then
    PHP_VERSION=$(php -v | head -n 1)
    echo -e "${GREEN}✓ PHP gefunden: $PHP_VERSION${NC}"
else
    echo -e "${RED}✗ PHP nicht gefunden!${NC}"
    echo "   Bitte installiere PHP 7.4 oder höher."
    exit 1
fi

echo ""

# Schritt 2: Webserver Check
echo "📋 Schritt 2: Webserver prüfen..."
if systemctl is-active --quiet apache2; then
    echo -e "${GREEN}✓ Apache läuft${NC}"
    WEBSERVER="apache2"
elif systemctl is-active --quiet nginx; then
    echo -e "${GREEN}✓ Nginx läuft${NC}"
    WEBSERVER="nginx"
else
    echo -e "${YELLOW}⚠ Kein laufender Webserver gefunden${NC}"
    echo "   Bitte starte Apache oder Nginx."
    WEBSERVER=""
fi

echo ""

# Schritt 3: Projektstruktur anzeigen
echo "📋 Schritt 3: Projektstruktur..."
echo -e "${BLUE}"
cat << "EOF"
bikepoint/
├── index.php                 [Home]
├── rental.php                [Rental & Service]
├── about.php                 [About & Contact]
├── assets/
│   ├── css/style.css         [Styles]
│   ├── js/main.js            [JavaScript]
│   └── images/               [Bilder]
└── includes/
    ├── header.php            [Navigation]
    └── footer.php            [Footer]
EOF
echo -e "${NC}"
echo ""

# Schritt 4: Installation
echo "📋 Schritt 4: Installation..."
echo ""
echo "Wähle deine Installationsmethode:"
echo "  1) In /var/www/html/bikepoint installieren (Standard)"
echo "  2) In XAMPP htdocs installieren"
echo "  3) Benutzerdefinierten Pfad angeben"
echo "  4) Nur Anleitung anzeigen"
echo ""
read -p "Deine Wahl [1-4]: " CHOICE

case $CHOICE in
    1)
        TARGET_DIR="/var/www/html/bikepoint"
        echo -e "${BLUE}→ Installiere in: $TARGET_DIR${NC}"
        
        if [ ! -d "/var/www/html" ]; then
            echo -e "${RED}✗ /var/www/html existiert nicht!${NC}"
            exit 1
        fi
        
        if [ -d "$TARGET_DIR" ]; then
            echo -e "${YELLOW}⚠ Verzeichnis existiert bereits!${NC}"
            read -p "Überschreiben? [j/N]: " OVERWRITE
            if [[ ! $OVERWRITE =~ ^[Jj]$ ]]; then
                echo "Installation abgebrochen."
                exit 0
            fi
            rm -rf "$TARGET_DIR"
        fi
        
        cp -r . "$TARGET_DIR"
        echo -e "${GREEN}✓ Installation abgeschlossen!${NC}"
        echo ""
        echo "🌐 Öffne im Browser: http://localhost/bikepoint"
        ;;
        
    2)
        TARGET_DIR="$HOME/xampp/htdocs/bikepoint"
        echo -e "${BLUE}→ Installiere in: $TARGET_DIR${NC}"
        
        if [ ! -d "$HOME/xampp/htdocs" ]; then
            echo -e "${RED}✗ XAMPP htdocs nicht gefunden!${NC}"
            exit 1
        fi
        
        if [ -d "$TARGET_DIR" ]; then
            echo -e "${YELLOW}⚠ Verzeichnis existiert bereits!${NC}"
            read -p "Überschreiben? [j/N]: " OVERWRITE
            if [[ ! $OVERWRITE =~ ^[Jj]$ ]]; then
                echo "Installation abgebrochen."
                exit 0
            fi
            rm -rf "$TARGET_DIR"
        fi
        
        cp -r . "$TARGET_DIR"
        echo -e "${GREEN}✓ Installation abgeschlossen!${NC}"
        echo ""
        echo "🌐 Öffne im Browser: http://localhost/bikepoint"
        ;;
        
    3)
        read -p "Gib den Zielpfad an: " TARGET_DIR
        echo -e "${BLUE}→ Installiere in: $TARGET_DIR${NC}"
        
        if [ -d "$TARGET_DIR" ]; then
            echo -e "${YELLOW}⚠ Verzeichnis existiert bereits!${NC}"
            read -p "Überschreiben? [j/N]: " OVERWRITE
            if [[ ! $OVERWRITE =~ ^[Jj]$ ]]; then
                echo "Installation abgebrochen."
                exit 0
            fi
            rm -rf "$TARGET_DIR"
        fi
        
        mkdir -p "$TARGET_DIR"
        cp -r . "$TARGET_DIR"
        echo -e "${GREEN}✓ Installation abgeschlossen!${NC}"
        ;;
        
    4)
        echo ""
        echo "📖 INSTALLATIONS-ANLEITUNG"
        echo "=========================="
        echo ""
        echo "1. Kopiere den 'bikepoint' Ordner in dein Webserver-Verzeichnis:"
        echo "   - Apache: /var/www/html/"
        echo "   - XAMPP: ~/xampp/htdocs/"
        echo "   - MAMP: /Applications/MAMP/htdocs/"
        echo ""
        echo "2. Stelle sicher, dass dein Webserver läuft:"
        echo "   - Apache: sudo systemctl start apache2"
        echo "   - Nginx: sudo systemctl start nginx"
        echo ""
        echo "3. Öffne im Browser:"
        echo "   http://localhost/bikepoint"
        echo ""
        echo "4. Fertig! 🎉"
        echo ""
        exit 0
        ;;
        
    *)
        echo -e "${RED}✗ Ungültige Auswahl!${NC}"
        exit 1
        ;;
esac

echo ""
echo "════════════════════════════════════════════"
echo ""
echo "✨ BIKEPOINT erfolgreich installiert!"
echo ""
echo "📄 Seiten:"
echo "   → Home:     http://localhost/bikepoint/"
echo "   → Rental:   http://localhost/bikepoint/rental.php"
echo "   → About:    http://localhost/bikepoint/about.php"
echo ""
echo "📂 Dateien:"
echo "   → CSS:      assets/css/style.css"
echo "   → JS:       assets/js/main.js"
echo "   → Images:   assets/images/ (füge hier S/W Bilder ein)"
echo ""
echo "🎨 Design:"
echo "   → White Mode"
echo "   → S/W Bildsprache"
echo "   → Beige Akzent (#C4A07A)"
echo "   → Minimalistisch & Clean"
echo ""
echo "📱 Features:"
echo "   ✓ Mobile-responsive"
echo "   ✓ Fade-in Animationen"
echo "   ✓ Smooth Scrolling"
echo "   ✓ Form Validation"
echo ""
echo "📚 Dokumentation:"
echo "   → README.md für Details"
echo "   → VORSCHAU.html für visuelle Übersicht"
echo ""
echo "════════════════════════════════════════════"
echo ""
echo "Viel Spaß mit deiner neuen Website! 🚴‍♂️"
echo ""