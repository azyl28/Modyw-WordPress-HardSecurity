<?php
/**
 * Main template for HardSecurity Theme
 * @package HardSecurity
 */
get_header();
?>

<div class="hero">
    <div class="hero-bg">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>
    <div class="container">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Profesjonalne usługi IT i cyberbezpieczeństwa
                </div>
                <h1 class="hero-title">
                    Twoja firma zasługuje na<br>
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
                <div class="hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        <span>Bezpieczeństwo danych</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <span>Szybka realizacja</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span>Gwarancja jakości</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-card">
                    <div class="hero-card-icon">
                        <svg viewBox="0 0 80 80" fill="none">
                            <rect x="10" y="20" width="60" height="45" rx="4" stroke="#66CCFF" stroke-width="2"/>
                            <path d="M25 35h30M25 45h20" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="40" cy="28" r="8" stroke="#66CCFF" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="hero-card-stat">
                        <span class="stat-value">500+</span>
                        <span class="stat-desc">Zadowolonych klientów</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="services" class="section section-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">CO ROBIMY</span>
            <h2 class="section-title">Kompleksowe usługi<br><span class="highlight">informatyczne</span></h2>
            <p class="section-desc">Oferujemy szeroki zakres usług IT dla firm i klientów indywidualnych.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" stroke-width="2"/><path d="M24 20V32" stroke="#66CCFF" stroke-width="2"/><path d="M16 26H32" stroke="#66CCFF" stroke-width="2"/></svg></div>
                <h3>Cyberbezpieczeństwo</h3>
                <p>Kompleksowa ochrona przed cyberzagrożeniami, audyty bezpieczeństwa.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="16" r="8" stroke="#66CCFF" stroke-width="2"/><path d="M8 40V32C8 27.5817 11.5817 24 16 24H32C36.4183 24 40 27.5817 40 32V40" stroke="#66CCFF" stroke-width="2"/></svg></div>
                <h3>Sieci Komputerowe</h3>
                <p>Profesjonalna konfiguracja sieci.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><rect x="8" y="8" width="32" height="24" rx="3" stroke="#66CCFF" stroke-width="2"/><path d="M16 36H32" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/></svg></div>
                <h3>Serwis</h3>
                <p>Naprawa sprzętu komputerowego.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><rect x="12" y="6" width="24" height="32" rx="3" stroke="#66CCFF" stroke-width="2"/><path d="M18 14H30M18 20H30M18 26H26" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/></svg></div>
                <h3>Reinstalacja systemu</h3>
                <p>Konfiguracja oprogramowania.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><path d="M24 4L28 14H40L30 22L34 32L24 24L14 32L18 22L8 14H20L24 4Z" stroke="#66CCFF" stroke-width="2"/></svg></div>
                <h3>Konfiguracja Sprzętu</h3>
                <p>Optymalizacja wydajności.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><path d="M8 36H40" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/><path d="M12 36V32H36V36" stroke="#66CCFF" stroke-width="2"/><path d="M16 24L22 18L28 24L34 18" stroke="#66CCFF" stroke-width="2"/></svg></div>
                <h3>Programowanie</h3>
                <p>Rozwiązania programistyczne.</p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <div class="about-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="about-image">
                <div style="border-radius: 16px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80" alt="Cyberbezpieczeństwo" style="width: 100%; display: block;">
                </div>
            </div>
            <div class="about-content">
                <span class="section-tag">KIM JESTEŚMY</span>
                <h2 class="section-title">Poświęceni dla<br><span class="highlight">Twojego bezpieczeństwa</span></h2>
                <p><strong>Informatyka jest naszą pasją.</strong> Tworzymy rozwiązania, które łączą nowoczesne technologie z praktycznymi potrzebami użytkowników.</p>
                <p>Naszą misją jest dostarczanie usług informatycznych, które zwiększają komfort pracy, bezpieczeństwo danych oraz efektywność działania firm.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section section-bg">
    <div class="container">
        <div class="contact-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px;">
            <div class="contact-info">
                <span class="section-tag">KONTAKT</span>
                <h2 class="section-title">Porozmawiajmy o<br><span class="highlight">Twoich potrzebach</span></h2>
                <p>Potrzebujesz kompleksowej oceny bezpieczeństwa?</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <span>Email: kontakt@hardsecurity.pl</span>
                    </div>
                    <div class="contact-item">
                        <span>Telefon: +48 123 456 789</span>
                    </div>
                </div>
            </div>
            <form class="contact-form">
                <div class="form-group">
                    <label>Imię i nazwisko</label>
                    <input type="text" placeholder="Jan Kowalski" required>
                </div>
                <div class="form-group">
                    <label>Adres email</label>
                    <input type="email" placeholder="jan@firma.pl" required>
                </div>
                <div class="form-group">
                    <label>Wiadomość</label>
                    <textarea placeholder="Opisz swoje potrzeby..." rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
            </form>
        </div>
    </div>
</section>

<?php
get_footer();