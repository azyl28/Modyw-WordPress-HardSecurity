<?php
/**
 * The main template file
 * 
 * @package Hardsecurity
 */

get_header();
?>

<main class="main">

<!-- Nawigacja -->
<nav class="navbar">
    <div class="nav-container">
        <a href="#home" class="logo" onclick="window.scrollTo(0,0); return false;">
            <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
                <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
            </svg>
            <div class="logo-text-group">
                <span class="logo-text">HardSecurity</span>
                <span class="logo-subtitle">cyberbezpieczeństwo</span>
            </div>
        </a>
        <div class="nav-menu">
            <a href="#home" class="nav-link">Start</a>
            <a href="#services" class="nav-link">Usługi</a>
            <a href="#pricing" class="nav-link">Cennik</a>
            <a href="#blog" class="nav-link">Blog</a>
            <a href="#about" class="nav-link">O nas</a>
            <a href="#contact" class="nav-link">Kontakt</a>
        </div>
        <a href="#contact" class="nav-cta">Kontakt</a>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-bg">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                Profesjonalne usługi IT i cyberbezpieczeństwa
            </div>
            <h1 class="hero-title">
                Twoja firma zasługuje na<br />
                <span class="highlight">najlepszą ochronę</span>
            </h1>
            <p class="hero-subtitle">
                Kompleksowe usługi informatyczne dla firm i klientów indywidualnych. 
                Bezpieczeństwo, niezawodność i profesjonalna obsługa.
            </p>
            <div class="hero-buttons">
                <a href="#contact" class="btn-primary">Umów konsultację</a>
                <a href="#pricing" class="btn-secondary">Zobacz cennik</a>
            </div>
            <div class="hero-features">
                <div class="hero-feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    <span>Bezpieczeństwo danych</span>
                </div>
                <div class="hero-feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                    <span>Szybka realizacja</span>
                </div>
                <div class="hero-feature">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span>Gwarancja jakości</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-card">
                <div class="hero-card-icon">
                    <svg viewBox="0 0 80 80" fill="none">
                        <rect x="10" y="20" width="60" height="45" rx="4" stroke="#66CCFF" strokeWidth="2"/>
                        <path d="M25 35h30M25 45h20" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                        <circle cx="40" cy="28" r="8" stroke="#66CCFF" strokeWidth="2"/>
                    </svg>
                </div>
                <div class="hero-card-stat">
                    <span class="stat-value">500+</span>
                    <span class="stat-desc">Zadowolonych klientów</span>
                </div>
                <div class="hero-card-glow"></div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>
</section>

<!-- Sekcja Usługi -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <span class="section-tag">USŁUGI</span>
            <h2 class="section-title">
                Kompleksowa obsługa<br />
                <span class="highlight">informatyczna</span>
            </h2>
            <p class="section-desc">
                Oferujemy szeroki wachlarz usług informatycznych dla firm i klientów indywidualnych.
            </p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <rect x="2" y="3" width="20" height="14" rx="2"/>
                        <path d="M8 21h8M12 17v4"/>
                    </svg>
                </div>
                <h3>Serwis sprzętu</h3>
                <p>Naprawa laptopów, komputerów i innych urządzeń IT.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Cyberbezpieczeństwo</h3>
                <p>Ochrona przed malware, wirusami i atakami hakerskimi.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <path d="M22 6l-10 7L2 6"/>
                    </svg>
                </div>
                <h3>Konfiguracja sieci</h3>
                <p>Projektowanie i wdrażanie sieci LAN, WAN i WiFi.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M18 10h-1.26A8 8 0 109 20h9a5 5 0 000-10z"/>
                    </svg>
                </div>
                <h3>Rozwiązania chmurowe</h3>
                <p> Migracja do chmury i zarządzanie infrastrukturą.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                </div>
                <h3>Wsparcie 24/7</h3>
                <p>Pomoc techniczna dostępna o każdej porze dnia i nocy.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                        <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/>
                        <path d="M17 8l-5-5-5 5"/>
                        <path d="M12 3v12"/>
                    </svg>
                </div>
                <h3>Backup danych</h3>
                <p>Automatyczne kopiowanie i odzyskiwanie danych.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sekcja Cennik -->
<section id="pricing" class="pricing">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <span class="section-tag">CENNIK</span>
            <h2 class="section-title">
                Cennik Usług<br />
                <span class="highlight">Informatycznych</span>
            </h2>
            <p class="section-desc">
                Profesjonalne usługi serwisowe w konkurencyjnych cenach. Skorzystaj z naszej oferty!
            </p>
            <div class="promo-badge">
                <span class="promo-icon">🎉</span>
                <span>PROMOCJA: Darmowa diagnostyka przy każdej naprawie powyżej 200 zł!</span>
            </div>
        </div>

        <div class="pricing-tabs">
            <button class="pricing-tab active" data-tab="diagnostics">Diagnostyka</button>
            <button class="pricing-tab" data-tab="desktop">PC Stacjonarne</button>
            <button class="pricing-tab" data-tab="laptop">Laptopy</button>
            <button class="pricing-tab" data-tab="recovery">Odzyskiwanie</button>
            <button class="pricing-tab" data-tab="software">Programowe</button>
            <button class="pricing-tab" data-tab="network">Sieci</button>
        </div>

        <div class="pricing-content">
            <!-- Diagnostyka -->
            <div class="pricing-panel active" id="diagnostics">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th>Czas realizacji</th>
                            <th>Cena brutto (od)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ekspertyza wstępna</td>
                            <td>do 3 dni</td>
                            <td className="price">0 zł</td>
                        </tr>
                        <tr>
                            <td>Ekspertyza ekonomiczna</td>
                            <td>2–3 dni</td>
                            <td className="price">150 zł</td>
                        </tr>
                        <tr>
                            <td>Ekspertyza ekspresowa</td>
                            <td>1 dzień</td>
                            <td className="price">250 zł</td>
                        </tr>
                        <tr>
                            <td>Podstawowa diagnostyka sprzętu</td>
                            <td>do 3 dni</td>
                            <td className="price">30 zł</td>
                        </tr>
                        <tr>
                            <td>Rozszerzona diagnostyka sprzętu</td>
                            <td>2–3 dni</td>
                            <td className="price">100 zł</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- PC Stacjonarne -->
            <div class="pricing-panel" id="desktop">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th>Czas realizacji</th>
                            <th>Cena brutto (od)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Konserwacja / czyszczenie wentylatorów, wymiana past</td>
                            <td>2–3 dni</td>
                            <td className="price">150 zł</td>
                        </tr>
                        <tr>
                            <td>Złożenie komputera z części klienta</td>
                            <td>1–2 dni</td>
                            <td className="price">250 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana płyty głównej</td>
                            <td>2–3 dni</td>
                            <td className="price">150 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana / dodanie karty graficznej</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana zasilacza</td>
                            <td>1 dzień</td>
                            <td className="price">100 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana procesora</td>
                            <td>1 dzień</td>
                            <td className="price">70 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana / dodanie pamięci RAM</td>
                            <td>1 dzień</td>
                            <td className="price">30 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana / dodanie dysku twardego</td>
                            <td>1 dzień</td>
                            <td className="price">30 zł</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Laptopy -->
            <div class="pricing-panel" id="laptop">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th>Czas realizacji</th>
                            <th>Cena brutto (od)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Wymiana płyty głównej</td>
                            <td>5–7 dni</td>
                            <td className="price">150 zł</td>
                        </tr>
                        <tr>
                            <td>Konserwacja układu chłodzenia</td>
                            <td>3–4 dni</td>
                            <td className="price">150 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana klawiatury (modułowa)</td>
                            <td>3–4 dni</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana klawiatury (nitowana)</td>
                            <td>5–7 dni</td>
                            <td className="price">300 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana matrycy</td>
                            <td>3–5 dni</td>
                            <td className="price">200 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana dysku HDD/SSD</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Dodanie RAM</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana wentylatora</td>
                            <td>2–3 dni</td>
                            <td className="price">80 zł</td>
                        </tr>
                        <tr>
                            <td>Wymiana baterii CMOS (BIOS)</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Czyszczenie systemu</td>
                            <td>1–2 dni</td>
                            <td className="price">100 zł</td>
                        </tr>
                        <tr>
                            <td>Instalacja Windows</td>
                            <td>1 dzień</td>
                            <td className="price">80 zł</td>
                        </tr>
                        <tr>
                            <td>Odwirusowanie</td>
                            <td>1–2 dni</td>
                            <td className="price">100 zł</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Odzyskiwanie -->
            <div class="pricing-panel" id="recovery">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th>Czas realizacji</th>
                            <th>Cena brutto (od)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Odzyskiwanie danych z dysku HDD</td>
                            <td>3–7 dni</td>
                            <td className="price">300 zł</td>
                        </tr>
                        <tr>
                            <td>Odzyskiwanie danych z dysku SSD</td>
                            <td>5–10 dni</td>
                            <td className="price">500 zł</td>
                        </tr>
                        <tr>
                            <td>Odzyskiwanie danych z pendrive</td>
                            <td>1–2 dni</td>
                            <td className="price">150 zł</td>
                        </tr>
                        <tr>
                            <td>Odzyskiwanie danych z karty pamięci</td>
                            <td>1–2 dni</td>
                            <td className="price">100 zł</td>
                        </tr>
                        <tr>
                            <td>Kopia zapasowa danych (do 100GB)</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Programowe -->
            <div class="pricing-panel" id="software">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th>Czas realizacji</th>
                            <th>Cena brutto (od)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Instalacja systemu Windows</td>
                            <td>1 dzień</td>
                            <td className="price">80 zł</td>
                        </tr>
                        <tr>
                            <td>Instalacja sterowników</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Konfiguracja Office 365</td>
                            <td>1 dzień</td>
                            <td className="price">100 zł</td>
                        </tr>
                        <tr>
                            <td>Konfiguracja poczty e-mail</td>
                            <td>1 dzień</td>
                            <td className="price">30 zł</td>
                        </tr>
                        <tr>
                            <td>Konfiguracja drukarki sieciowej</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Instalacja pakietu biurowego</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Konfiguracja programu antywirusowego</td>
                            <td>1 dzień</td>
                            <td className="price">30 zł</td>
                        </tr>
                        <tr>
                            <td>Odwirusowanie i czyszczenie systemu</td>
                            <td>1–2 dni</td>
                            <td className="price">100 zł</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Sieci -->
            <div class="pricing-panel" id="network">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th>Czas realizacji</th>
                            <th>Cena brutto (od)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Konfiguracja routera</td>
                            <td>1 dzień</td>
                            <td className="price">80 zł</td>
                        </tr>
                        <tr>
                            <td>Konfiguracja sieci WiFi</td>
                            <td>1 dzień</td>
                            <td className="price">100 zł</td>
                        </tr>
                        <tr>
                            <td>Podział łącza internetowego</td>
                            <td>1 dzień</td>
                            <td className="price">50 zł</td>
                        </tr>
                        <tr>
                            <td>Zabezpieczenie sieci WiFi</td>
                            <td>1 dzień</td>
                            <td className="price">80 zł</td>
                        </tr>
                        <tr>
                            <td>Montowanie okablowania sieciowego</td>
                            <td>1–2 dni</td>
                            <td className="price">200 zł</td>
                        </tr>
                        <tr>
                            <td>Konfiguracja serwera plików</td>
                            <td>2–3 dni</td>
                            <td className="price">300 zł</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Sekcja Blog -->
<section id="blog" class="blog-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <span class="section-tag">BLOG</span>
            <h2 class="section-title">
                Najnowsze<br />
                <span class="highlight">artykuły</span>
            </h2>
            <p class="section-desc">
                Poznaj najnowsze trendy w cyberbezpieczeństwie i technologiach IT. 
                Regularnie dzielimy się wiedzą i doświadczeniem.
            </p>
        </div>
        <div class="blog-grid">
            <article class="blog-card animate-on-scroll animate-delay-1">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1633265486064-086b219458ec?w=600&q=80" alt="Cyberbezpieczeństwo 2024" />
                    <div class="blog-category">Cyberbezpieczeństwo</div>
                </div>
                <div class="blog-content">
                    <div class="blog-date">8 kwietnia 2024</div>
                    <h3>Top 5 zagrożeń cyberbezpieczeństwa w 2024 roku</h3>
                    <p>Ransomware, phishing i ataki na łańcuch dostaw - poznaj najnowsze zagrożenia i jak się przed nimi chronić.</p>
                    <a href="#" class="blog-read-more">Czytaj więcej →</a>
                </div>
            </article>
            <article class="blog-card animate-on-scroll animate-delay-2">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80" alt="Zero Trust" />
                    <div class="blog-category">Bezpieczeństwo</div>
                </div>
                <div class="blog-content">
                    <div class="blog-date">5 kwietnia 2024</div>
                    <h3>Model Zero Trust - nowy standard bezpieczeństwa</h3>
                    <p>Dowiedz się, dlaczego architektura Zero Trust staje się standardem w ochronie infrastruktury IT.</p>
                    <a href="#" class="blog-read-more">Czytaj więcej →</a>
                </div>
            </article>
            <article class="blog-card animate-on-scroll animate-delay-3">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="AI w cyberbezpieczeństwie" />
                    <div class="blog-category">Sztuczna inteligencja</div>
                </div>
                <div class="blog-content">
                    <div class="blog-date">2 kwietnia 2024</div>
                    <h3>AI w walce z cyberzagrożeniami</h3>
                    <p>Jak sztuczna inteligencja rewolucjonizuje wykrywanie i neutralizację zagrożeń w czasie rzeczywistym.</p>
                    <a href="#" class="blog-read-more">Czytaj więcej →</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Sekcja O nas -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <span class="section-tag">O NAS</span>
                <h2 class="section-title">
                    Twój partner<br />
                    <span class="highlight">w technologii</span>
                </h2>
                <p>
                    Jesteśmy firmą z wieloletnim doświadczeniem w branży IT. 
                    Nasz zespół składa się z certyfikowanych specjalistów, 
                    którzy zawsze służą profesjonalną pomocą.
                </p>
                <p>
                    Gwarantujemy uczciwe wyceny, przejrzyste warunki współpracy 
                    oraz najwyższą jakość świadczonych usług.
                </p>
                <div class="about-features">
                    <div class="about-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Doświadczeni specjaliści</span>
                    </div>
                    <div class="about-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Transparentne ceny</span>
                    </div>
                    <div class="about-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Gwarancja jakości</span>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-card">
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Naprawionych komputerów</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Zadowolonych klientów</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10+</span>
                            <span class="stat-label">Lat doświadczenia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sekcja Kontakt -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info animate-on-scroll">
                <span class="section-tag">KONTAKT</span>
                <h2 class="section-title">
                    Porozmawiajmy o<br />
                    <span class="highlight">Twoich potrzebach</span>
                </h2>
                <p class="contact-desc">
                    Potrzebujesz kompleksowej oceny bezpieczenia lub masz pytania o nasze usługi? 
                    Wypełnij formularz, a nasz zespół skontaktuje się w ciągu 24 godzin.
                </p>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke="#66CCFF" strokeWidth="1.5"/>
                                <path d="M3 7L12 13L21 7" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round"/>
                            </svg>
                        </div>
                        <div>
                            <span class="contact-label">Email</span>
                            <span class="contact-value">kontakt@hardsecurity.pl</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 4H9L11 8L8.5 10C9.5 12.5 11.5 14.5 14 15.5L16 13H20L21 17C19.5 19.5 16.5 20.5 14 19.5C7 16.5 3 10 5 4Z" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <span class="contact-label">Telefon</span>
                            <span class="contact-value">+48 123 456 789</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" stroke="#66CCFF" strokeWidth="1.5"/>
                                <circle cx="12" cy="10" r="3" stroke="#66CCFF" strokeWidth="1.5"/>
                            </svg>
                        </div>
                        <div>
                            <span class="contact-label">Lokalizacja</span>
                            <span class="contact-value">Warszawa, Poland</span>
                        </div>
                    </div>
                </div>
            </div>
            <form class="contact-form animate-on-scroll animate-delay-1" method="post" action="">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Imię i nazwisko *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adres e-mail *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Numer telefonu</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="service">Interesująca usługa</label>
                        <select id="service" name="service">
                            <option value="">Wybierz usługę...</option>
                            <option value="laptop">Serwis laptopa</option>
                            <option value="pc">Serwis komputera</option>
                            <option value="network">Konfiguracja sieci</option>
                            <option value="security">Cyberbezpieczeństwo</option>
                            <option value="other">Inna usługa</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Wiadomość *</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
            </form>
        </div>
    </div>
</section>

</main>

<?php
get_footer();