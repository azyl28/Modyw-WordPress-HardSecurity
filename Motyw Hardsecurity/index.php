<?php
/**
 * The main template file
 * 
 * @package Hardsecurity
 */

get_header();
?>

<!-- Hero Section -->
<?php if (is_front_page()) : ?>
<section id="home" class="hero">
    <div class="hero-bg">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>
    <div class="container">
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
                <a href="#contact" class="btn btn-primary">Umów konsultację</a>
                <a href="#pricing" class="btn btn-secondary">Zobacz cennik</a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Main Content -->
<div id="content" class="site-content">
    <div class="container">
        
        <!-- Usługi Section -->
        <section id="services" class="section">
            <div class="section-title">
                <h2>Nasze usługi</h2>
                <p>Kompleksowa obsługa informatyczna Twojej firmy</p>
            </div>
            <div class="articles-grid">
                <div class="services">
                    <div class="service-icon">💻</div>
                    <h3>Serwis komputerów</h3>
                    <p>Naprawa i konserwacja sprzętu komputerowego.</p>
                </div>
                <div class="services">
                    <div class="service-icon">🔒</div>
                    <h3>Cyberbezpieczeństwo</h3>
                    <p>Zabezpieczenie Twoich danych i systemów.</p>
                </div>
                <div class="services">
                    <div class="service-icon">🌐</div>
                    <h3>Konfiguracja sieci</h3>
                    <p>Projektowanie i wdrażanie sieci LAN/WAN.</p>
                </div>
                <div class="services">
                    <div class="service-icon">☁️</div>
                    <h3>Rozwiązania chmurowe</h3>
                    <p>Migracja i zarządzanie infrastrukturą w chmurze.</p>
                </div>
                <div class="services">
                    <div class="service-icon">📱</div>
                    <h3>Wsparcie IT</h3>
                    <p>Pomoc techniczna dla pracowników Twojej firmy.</p>
                </div>
                <div class="services">
                    <div class="service-icon">💾</div>
                    <h3>Backup danych</h3>
                    <p>Automatyczne kopiowanie i odzyskiwanie danych.</p>
                </div>
            </div>
        </section>

        <!-- Cennik Section -->
        <section id="pricing" class="section">
            <div class="section-title">
                <h2>Cennik usług</h2>
                <p>Sprawdź ceny naszych usług</p>
            </div>
            
            <div class="pricing-tabs">
                <button class="pricing-tab active" data-tab="laptop">Laptop</button>
                <button class="pricing-tab" data-tab="pc">PC</button>
                <button class="pricing-tab" data-tab="desktop">Desktop</button>
            </div>
            
            <div class="pricing-panel active" id="laptop">
                <table class="pricing-table">
                    <thead>
                        <tr><th>Usługa</th><th>Cena brutto (od)</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Wymiana płyty głównej</td><td class="price">150 zł</td></tr>
                        <tr><td>Konserwacja układu chłodzenia</td><td class="price">150 zł</td></tr>
                        <tr><td>Wymiana klawiatury</td><td class="price">50-300 zł</td></tr>
                        <tr><td>Wymiana matrycy</td><td class="price">200 zł</td></tr>
                        <tr><td>Wymiana dysku HDD/SSD</td><td class="price">50 zł</td></tr>
                        <tr><td>Dodanie RAM</td><td class="price">50 zł</td></tr>
                        <tr><td>Wymiana baterii</td><td class="price">50 zł</td></tr>
                        <tr><td>Czyszczenie systemu</td><td class="price">100 zł</td></tr>
                        <tr><td>Instalacja Windows</td><td class="price">80 zł</td></tr>
                        <tr><td>Odwirusowanie</td><td class="price">100 zł</td></tr>
                    </tbody>
                </table>
            </div>
            
            <div class="pricing-panel" id="pc">
                <table class="pricing-table">
                    <thead>
                        <tr><th>Usługa</th><th>Cena brutto (od)</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Podstawowa diagnostyka sprzętu</td><td class="price">30 zł</td></tr>
                        <tr><td>Rozszerzona diagnostyka sprzętu</td><td class="price">100 zł</td></tr>
                    </tbody>
                </table>
            </div>
            
            <div class="pricing-panel" id="desktop">
                <table class="pricing-table">
                    <thead>
                        <tr><th>Usługa</th><th>Cena brutto (od)</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Konserwacja / czyszczenie</td><td class="price">150 zł</td></tr>
                        <tr><td>Złożenie komputera</td><td class="price">250 zł</td></tr>
                        <tr><td>Wymiana płyty głównej</td><td class="price">150 zł</td></tr>
                        <tr><td>Wymiana karty graficznej</td><td class="price">50 zł</td></tr>
                        <tr><td>Wymiana zasilacza</td><td class="price">100 zł</td></tr>
                        <tr><td>Wymiana procesora</td><td class="price">70 zł</td></tr>
                        <tr><td>Wymiana RAM</td><td class="price">30 zł</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Blog Section -->
        <section id="blog" class="section">
            <div class="section-title">
                <h2>Blog</h2>
                <p>Najnowsze wiadomości ze świata IT</p>
            </div>
            <div class="articles-grid">
                <article class="article-card">
                    <div class="article-content">
                        <h3>Znaczenie cyberbezpieczeństwa</h3>
                        <p>W dzisiejszym świecie cyfrowym, ochrona danych jest kluczowa dla każdej firmy...</p>
                        <a href="#" class="btn-link">Czytaj więcej</a>
                    </div>
                </article>
                <article class="article-card">
                    <div class="article-content">
                        <h3>Jak zadbać o bezpieczeństwo PC</h3>
                        <p>Regularne aktualizacje systemu i dobre praktyki to podstawa bezpieczeństwa...</p>
                        <a href="#" class="btn-link">Czytaj więcej</a>
                    </div>
                </article>
                <article class="article-card">
                    <div class="article-content">
                        <h3>DLSS - co to jest?</h3>
                        <p>Deep Learning Super Sampling to innowacyjna technologia firmy NVIDIA...</p>
                        <a href="#" class="btn-link">Czytaj więcej</a>
                    </div>
                </article>
            </div>
        </section>

        <!-- O nas Section -->
        <section id="about" class="section">
            <div class="section-title">
                <h2>O nas</h2>
                <p>Kim jesteśmy i co oferujemy</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>HardSecurity - Twój partner w IT</h3>
                    <p>Jesteśmy firmą specjalizującą się w kompleksowej obsłudze informatycznej. 
                    Nasz zespół składa się z doświadczonych specjalistów, którzy zawsze służą pomocą.</p>
                    <p>Oferujemy:</p>
                    <ul>
                        <li>Profesjonalny serwis sprzętu komputerowego</li>
                        <li>Konfigurację i administrację sieciami</li>
                        <li>Rozwiązania w zakresie cyberbezpieczeństwa</li>
                        <li>Wsparcie techniczne 24/7</li>
                    </ul>
                </div>
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
        </section>

        <!-- Kontakt Section -->
        <section id="contact" class="section">
            <div class="section-title">
                <h2>Kontakt</h2>
                <p>Skontaktuj się z nami</p>
            </div>
            <div class="contact-form">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Imię i nazwisko *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adres e-mail *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
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
                    <div class="form-group">
                        <label for="message">Wiadomość *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
                </form>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="contact-icon">📧</span>
                        <span>kontakt@hardsecurity.pl</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <span>+48 123 456 789</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <span>Warszawa, Poland</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php
get_footer();