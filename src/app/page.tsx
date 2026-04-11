"use client";

import { useState, useEffect } from "react";

export default function Home() {
  const [activeTab, setActiveTab] = useState("diagnostics");

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
  };

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
    );

    document.querySelectorAll('.animate-on-scroll').forEach((el) => {
      observer.observe(el);
    });

    const tabs = document.querySelectorAll('.pricing-tab');
    const panels = document.querySelectorAll('.pricing-panel');
    
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.getAttribute('data-tab');
        if (target) {
          setActiveTab(target);
          tabs.forEach(t => t.classList.remove('active'));
          tab.classList.add('active');
          panels.forEach(p => p.classList.remove('active'));
          document.getElementById(target)?.classList.add('active');
        }
      });
    });
  }, []);

  return (
    <main className="main">
      {/* Nawigacja */}
      <nav className="navbar">
        <div className="nav-container">
          <a href="#home" className="logo">
            <svg className="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
              <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
            </svg>
            <div className="logo-text-group">
              <span className="logo-text">HardSecurity</span>
              <span className="logo-subtitle">cyberbezpieczeństwo</span>
            </div>
          </a>
          <div className="nav-menu">
            <a href="#home" className="nav-link">Start</a>
            <a href="#services" className="nav-link">Usługi</a>
            <a href="#pricing" className="nav-link">Cennik</a>
            <a href="#blog" className="nav-link">Blog</a>
            <a href="#about" className="nav-link">O nas</a>
            <a href="#contact" className="nav-link">Kontakt</a>
          </div>
          <a href="#contact" className="nav-cta">Kontakt</a>
        </div>
      </nav>

      {/* Sekcja Hero */}
      <section id="home" className="hero">
        <div className="hero-bg">
          <div className="hero-gradient"></div>
          <div className="hero-pattern"></div>
        </div>
        <div className="hero-container">
          <div className="hero-content">
            <div className="hero-badge">
              <span className="badge-dot"></span>
              Profesjonalne usługi IT i cyberbezpieczeństwa
            </div>
            <h1 className="hero-title">
              Twoja firma zasługuje na<br />
              <span className="highlight">najlepszą ochronę</span>
            </h1>
            <p className="hero-subtitle">
              Kompleksowe usługi informatyczne dla firm i klientów indywidualnych. 
              Bezpieczeństwo, niezawodność i profesjonalna obsługa.
            </p>
            <div className="hero-buttons">
              <a href="#contact" className="btn-primary">Umów konsultację</a>
              <a href="#pricing" className="btn-secondary">Zobacz cennik</a>
            </div>
            <div className="hero-features">
              <div className="hero-feature">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                <span>Bezpieczeństwo danych</span>
              </div>
              <div className="hero-feature">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                  <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                </svg>
                <span>Szybka realizacja</span>
              </div>
              <div className="hero-feature">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                  <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span>Gwarancja jakości</span>
              </div>
            </div>
          </div>
          <div className="hero-visual">
            <div className="hero-card">
              <div className="hero-card-icon">
                <svg viewBox="0 0 80 80" fill="none">
                  <rect x="10" y="20" width="60" height="45" rx="4" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M25 35h30M25 45h20" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <circle cx="40" cy="28" r="8" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <div className="hero-card-stat">
                <span className="stat-value">500+</span>
                <span className="stat-desc">Zadowolonych klientów</span>
              </div>
              <div className="hero-card-glow"></div>
            </div>
          </div>
        </div>
        <div className="scroll-indicator">
          <div className="mouse">
            <div className="wheel"></div>
          </div>
        </div>
      </section>

      {/* Sekcja Cennik */}
      <section id="pricing" className="pricing">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <span className="section-tag">CENNIK</span>
            <h2 className="section-title">
              Cennik Usług<br />
              <span className="highlight">Informatycznych</span>
            </h2>
            <p className="section-desc">
              Profesjonalne usługi serwisowe w konkurencyjnych cenach. Skorzystaj z naszej oferty!
            </p>
            <div className="promo-badge">
              <span className="promo-icon">🎉</span>
              <span>PROMOCJA: Darmowa diagnostyka przy każdej naprawie powyżej 200 zł!</span>
            </div>
          </div>

          <div className="pricing-tabs">
            <button className="pricing-tab active" data-tab="diagnostics">Diagnostyka</button>
            <button className="pricing-tab" data-tab="desktop">PC Stacjonarne</button>
            <button className="pricing-tab" data-tab="laptop">Laptopy</button>
            <button className="pricing-tab" data-tab="recovery">Odzyskiwanie</button>
            <button className="pricing-tab" data-tab="software">Programowe</button>
            <button className="pricing-tab" data-tab="network">Sieci</button>
          </div>

          <div className="pricing-content">
            <div className="pricing-panel active" id="diagnostics">
              <table className="pricing-table">
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
                    <td>Ekspertyza awaryjna (święta/weekend)</td>
                    <td>1–2 dni</td>
                    <td className="price">615 zł</td>
                  </tr>
                  <tr>
                    <td>Podstawowa diagnostyka sprzętu</td>
                    <td>–</td>
                    <td className="price">30 zł</td>
                  </tr>
                  <tr>
                    <td>Rozszerzona diagnostyka sprzętu</td>
                    <td>–</td>
                    <td className="price">100 zł</td>
                  </tr>
                </tbody>
              </table>
              <p className="pricing-note">* Czas realizacji może ulec zmianie w zależności od obciążenia serwisu</p>
            </div>

            <div className="pricing-panel" id="desktop">
              <table className="pricing-table">
                <thead>
                  <tr>
                    <th>Usługa</th>
                    <th>Cena brutto (od)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Konserwacja / czyszczenie wentylatorów, wymiana past</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Złożenie komputera z części klienta</td>
                    <td className="price">250 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana płyty głównej</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana / dodanie karty graficznej</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana zasilacza</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana procesora</td>
                    <td className="price">70 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana / dodanie pamięci RAM</td>
                    <td className="price">30 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana / dodanie dysku twardego</td>
                    <td className="price">30 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana napędu optycznego</td>
                    <td className="price">30 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana baterii CMOS (BIOS)</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Modernizacja układu chłodzenia</td>
                    <td className="price">40 zł</td>
                  </tr>
                  <tr>
                    <td>Przełożenie podzespołów do nowej obudowy</td>
                    <td className="price">200 zł</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div className="pricing-panel" id="laptop">
              <table className="pricing-table">
                <thead>
                  <tr>
                    <th>Usługa</th>
                    <th>Cena brutto (od)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Wymiana płyty głównej</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Konserwacja układu chłodzenia</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana klawiatury (modułowa)</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana klawiatury (nitowana)</td>
                    <td className="price">300 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana matrycy LCD</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana taśmy matrycy</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana karty Wi-Fi</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana układu chłodzenia</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana procesora</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Wymiana gniazda zasilania</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Reballing chipsetu / mostka</td>
                    <td className="price">300 zł</td>
                  </tr>
                  <tr>
                    <td>Naprawa BIOS (programowanie kości)</td>
                    <td className="price">300 zł</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div className="pricing-panel" id="recovery">
              <table className="pricing-table">
                <thead>
                  <tr>
                    <th>Usługa</th>
                    <th>Cena brutto (od)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ekspertyza odzyskiwania danych – ekonomiczna</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Odzyskanie danych z dysku SSD/HDD (sprawny)</td>
                    <td className="price">300 zł</td>
                  </tr>
                  <tr>
                    <td>Odzyskanie danych z dysku SSD/HDD (niesprawny)</td>
                    <td className="price">700 zł</td>
                  </tr>
                  <tr>
                    <td>Otwieranie dysku / ingerencja wewnętrzna</td>
                    <td className="price">+400 zł</td>
                  </tr>
                  <tr>
                    <td>Archiwizacja danych z nośnika</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Kopia sprawnego dysku</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Programowe kasowanie nośnika</td>
                    <td className="price">100 zł</td>
                  </tr>
                </tbody>
              </table>
              <p className="pricing-note">* Cena ostateczna zależy od stanu nośnika i ilości danych do odzyskania</p>
            </div>

            <div className="pricing-panel" id="software">
              <table className="pricing-table">
                <thead>
                  <tr>
                    <th>Usługa</th>
                    <th>Cena brutto (od)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Podstawowa instalacja systemu Windows</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Instalacja systemu + sterowniki, antywirus, oprogramowanie</td>
                    <td className="price">150 zł</td>
                  </tr>
                  <tr>
                    <td>Instalacja systemu Linux (Ubuntu, Debian)</td>
                    <td className="price">180 zł</td>
                  </tr>
                  <tr>
                    <td>Klonowanie systemu z zachowaniem danych</td>
                    <td className="price">250 zł</td>
                  </tr>
                  <tr>
                    <td>Przywracanie systemu bez reinstalacji</td>
                    <td className="price">200 zł</td>
                  </tr>
                  <tr>
                    <td>Reset hasła administratora (Windows)</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Optymalizacja systemu / czyszczenie</td>
                    <td className="price">70 zł</td>
                  </tr>
                  <tr>
                    <td>Usuwanie wirusów / malware</td>
                    <td className="price">70 zł</td>
                  </tr>
                  <tr>
                    <td>Instalacja aplikacji / sterowników</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Konfiguracja BIOS/UEFI</td>
                    <td className="price">30 zł</td>
                  </tr>
                  <tr>
                    <td>Aktualizacja BIOS/UEFI</td>
                    <td className="price">80 zł</td>
                  </tr>
                  <tr>
                    <td>Podział dysku / formatowanie</td>
                    <td className="price">30 zł</td>
                  </tr>
                  <tr>
                    <td>Archiwizacja danych / backup</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Tworzenie kopii bezpieczeństwa systemu</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Przywrócenie kopii bezpieczeństwa</td>
                    <td className="price">100 zł</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div className="pricing-panel" id="network">
              <table className="pricing-table">
                <thead>
                  <tr>
                    <th>Usługa</th>
                    <th>Cena brutto (od)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Konfiguracja routera / modemu</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Instalacja i konfiguracja urządzeń sieciowych</td>
                    <td className="price">100 zł</td>
                  </tr>
                  <tr>
                    <td>Rozwiązanie problemu z Internetem</td>
                    <td className="price">80 zł</td>
                  </tr>
                  <tr>
                    <td>Instalacja i konfiguracja drukarki, skanera itp.</td>
                    <td className="price">50 zł</td>
                  </tr>
                  <tr>
                    <td>Podłączenie urządzeń (TV, konsola, smartfon)</td>
                    <td className="price">50 zł</td>
                  </tr>
                </tbody>
              </table>
              <p className="pricing-note">Ceny podane są w złotych i zawierają podatek VAT</p>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Usług */}
      <section id="services" className="services">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <span className="section-tag">CO ROBIMY</span>
            <h2 className="section-title">
              Kompleksowe usługi<br />
              <span className="highlight">informatyczne</span>
            </h2>
            <p className="section-desc">
              Oferujemy szeroki zakres usług IT dla firm i klientów indywidualnych. 
              Profesjonalne podejście i terminowość to nasz standard.
            </p>
          </div>
          <div className="services-grid">
            <div className="service-card animate-on-scroll animate-delay-1">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M24 20V32" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 26H32" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Cyberbezpieczeństwo</h3>
              <p>Kompleksowa ochrona przed cyberzagrożeniami, audyty bezpieczeństwa, wdrażanie rozwiązań ochronnych dla firm i osób prywatnych.</p>
            </div>
            <div className="service-card animate-on-scroll animate-delay-2">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="16" r="8" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M8 40V32C8 27.5817 11.5817 24 16 24H32C36.4183 24 40 27.5817 40 32V40" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 24V16M32 24V16" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="12" cy="16" r="2" fill="#66CCFF"/>
                  <circle cx="36" cy="16" r="2" fill="#66CCFF"/>
                </svg>
              </div>
              <h3>Sieci Komputerowe</h3>
              <p>Profesjonalna konfiguracja sieci — szybkie i bezpieczne połączenia dla Twojej firmy lub domu.</p>
            </div>
            <div className="service-card animate-on-scroll animate-delay-3">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="8" y="8" width="32" height="24" rx="3" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 36H32" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <rect x="20" y="32" width="12" height="4" rx="1" fill="#66CCFF"/>
                </svg>
              </div>
              <h3>Serwis</h3>
              <p>Serwis Laptopów i Komputerów Naprawa, konserwacja i modernizacja sprzętu komputerowego. Diagnostyka, czyszczenie, wymiana podzespołów.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="12" y="6" width="24" height="32" rx="3" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M18 14H30M18 20H30M18 26H26" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <circle cx="24" cy="36" r="3" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Reinstalacja systemu</h3>
              <p>Profesjonalna reinstalacja systemów operacyjnych, migracja danych, konfiguracja oprogramowania.</p>
            </div>
            <div className="service-card animate-on-scroll animate-delay-4">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L28 14H40L30 22L34 32L24 24L14 32L18 22L8 14H20L24 4Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                  <circle cx="24" cy="20" r="4" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Konfiguracja Sprzętu</h3>
              <p>Profesjonalna konfiguracja komputerów, sieci, urządzeń peryferyjnych. Optymalizacja wydajności systemów.</p>
            </div>
            <div className="service-card animate-on-scroll animate-delay-4">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 36H40" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M12 36V32H36V36" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 24L22 18L28 24L34 18" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
                  <path d="M22 18V36" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Programowanie</h3>
              <p>Projektujemy bezpieczne i wydajne rozwiązania programistyczne dla firm i osób prywatnych. Tworzymy aplikacje dopasowane do potrzeb.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja O nas */}
      <section id="about" className="about">
        <div className="container">
          <div className="about-wrapper">
            <div className="about-image animate-on-scroll">
              <div className="image-wrapper">
                <div className="image-placeholder">
                  <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80" alt="Cyberbezpieczeństwo" />
                  <div className="image-overlay"></div>
                </div>
                <div className="about-experience">
                  <span className="exp-number">15</span>
                  <span className="exp-label">Lat doświadczenia</span>
                </div>
              </div>
            </div>
            <div className="about-content">
              <span className="section-tag">KIM JESTEŚMY</span>
              <h2 className="section-title">
                Poświęceni dla<br />
                <span className="highlight">Twojego bezpieczeństwa</span>
              </h2>
              <p className="about-text">
                <strong>Informatyka jest naszą pasją.</strong> Tworzymy rozwiązania, które łączą nowoczesne 
                technologie z praktycznymi potrzebami użytkowników. Każdy projekt traktujemy indywidualnie — 
                od analizy, przez wdrożenie, aż po pełne wsparcie techniczne.
              </p>
              <p className="about-text">
                Naszą misją jest dostarczanie usług informatycznych, które zwiększają komfort pracy, 
                bezpieczeństwo danych oraz efektywność działania firm i użytkowników prywatnych.
                Wierzymy w budowanie długotrwałych relacji z klientami.
              </p>
              <div className="about-stats">
                <div className="about-stat">
                  <span className="about-stat-number">50+</span>
                  <span className="about-stat-label">Ekspertów bezpieczeństwa</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">200+</span>
                  <span className="about-stat-label">Klientów korporacyjnych</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">99%</span>
                  <span className="about-stat-label">Zatrzymanie klientów</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Dlaczego my */}
      <section id="why-us" className="why-us">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <span className="section-tag">DLACZEGO MY</span>
            <h2 className="section-title">
              Doskonałość w każdym<br />
              <span className="highlight">szczególe</span>
            </h2>
          </div>
          <div className="features-grid">
            <div className="feature-item animate-on-scroll animate-delay-1">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="18" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M24 14V24L30 30" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Wsparcie 24/7</h3>
              <p>Nasze Centrum Operacji Bezpieczeństwa monitoruje Twoje systemy całą dobę, zapewniając natychmiastową reakcję.</p>
            </div>
            <div className="feature-item animate-on-scroll animate-delay-2">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 24C8 15.1634 15.1634 8 24 8C32.8366 8 40 15.1634 40 24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M40 24C40 32.8366 32.8366 40 24 40C15.1634 40 8 32.8366 8 24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <circle cx="24" cy="24" r="6" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Zaawansowane technologie</h3>
              <p>Wykorzystujemy narzędzia AI i uczenie maszynowe do proaktywnego wykrywania i zapobiegania zagrożeniom.</p>
            </div>
            <div className="feature-item animate-on-scroll animate-delay-3">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="12" y="8" width="24" height="32" rx="4" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M20 16H28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M20 22H28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M20 28H24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Przejrzyste raporty</h3>
              <p>Otrzymujesz szczegółowe, praktyczne raporty pomagające zrozumieć stan bezpieczeństwa i podejmować decyzje.</p>
            </div>
            <div className="feature-item animate-on-scroll animate-delay-4">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L28 16H42L30 24L36 36L24 28L12 36L18 24L6 16H20L24 4Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                </svg>
              </div>
              <h3>Uznanie branżowe</h3>
              <p>Jesteśmy uznawani przez wiodących analityków i certyfikowani przez głównych dostawców bezpieczeństwa.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Projektów */}
      <section id="projects" className="projects">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <span className="section-tag">NASZE OSIĄGNIĘCIA</span>
            <h2 className="section-title">
              Zaufali nam liderzy<br />
              <span className="highlight">branż</span>
            </h2>
          </div>
          <div className="projects-grid">
            <div className="project-card animate-on-scroll animate-delay-1">
              <div className="project-img">
                <div className="project-visual">
                  <img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?w=600&q=80" alt="Finanse" />
                </div>
                <span className="project-type">Usługi finansowe</span>
              </div>
              <div className="project-info">
                <h3>Bank Polski</h3>
                <p>Kompleksowa modernizacja bezpieczeństwa infrastruktury, monitorowanie zagrożeń w czasie rzeczywistym.</p>
                <div className="project-tags">
                  <span>SIEM</span>
                  <span>Compliance</span>
                  <span>24/7 SOC</span>
                </div>
              </div>
            </div>
            <div className="project-card animate-on-scroll animate-delay-2">
              <div className="project-img">
                <div className="project-visual">
                  <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&q=80" alt="Medycyna" />
                </div>
                <span className="project-type">Ochrona zdrowia</span>
              </div>
              <div className="project-info">
                <h3>MedCare Systems</h3>
                <p>Zgodna z HIPAA infrastruktura bezpieczeństwa chroniąca wrażliwe dane pacjentów w 12 szpitalach.</p>
                <div className="project-tags">
                  <span>HIPAA</span>
                  <span>Szyfrowanie</span>
                  <span>IAM</span>
                </div>
              </div>
            </div>
            <div className="project-card animate-on-scroll animate-delay-3">
              <div className="project-img">
                <div className="project-visual">
                  <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&q=80" alt="Przemysł" />
                </div>
                <span className="project-type">Przemysł</span>
              </div>
              <div className="project-info">
                <h3>Industrial Tech Group</h3>
                <p>Implementacja bezpieczeństwa OT chroniąca systemy produkcyjne i infrastrukturę SCADA.</p>
                <div className="project-tags">
                  <span>OT Security</span>
                  <span>SCADA</span>
                  <span>Sieć</span>
                </div>
              </div>
            </div>
            <div className="project-card animate-on-scroll animate-delay-4">
              <div className="project-img">
                <div className="project-visual">
                  <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?w=600&q=80" alt="Handel" />
                </div>
                <span className="project-type">Handel</span>
              </div>
              <div className="project-info">
                <h3>GlobalRetail</h3>
                <p>Bezpieczeństwo platformy e-commerce chroniącej 2M+ dziennych transakcji w 200 sklepach.</p>
                <div className="project-tags">
                  <span>PCI-DSS</span>
                  <span>API Security</span>
                  <span>Chmura</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja z cytatem */}
      <section className="quote-section">
        <div className="container">
          <div className="quote-content animate-on-scroll">
            <div className="quote-icon">
              <svg viewBox="0 0 48 48" fill="none">
                <path d="M14 24C14 18.477 18.477 14 24 14V20C21.239 20 19 22.239 19 25C19 27.761 21.239 30 24 30H26M34 24C34 18.477 38.477 14 44 14V20C41.239 20 39 22.239 39 25C39 27.761 41.239 30 44 30H46" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
              </svg>
            </div>
            <blockquote className="quote-text">
              &quot;W świecie cyfrowym, bezpieczeństwo nie jest produktem, lecz procesem. Najsłabszym ogniem jest człowiek, 
              ale także największą siłą, gdy zostanie właściwie przeszkolony.&quot;
            </blockquote>
            <div className="quote-author">
              <span className="author-name">dr Aleksander Kowalski</span>
              <span className="author-title">Dyrektor ds. Cyberbezpieczeństwa, HardSecurity</span>
            </div>
          </div>
        </div>
      </section>

      {/* Banner CTA */}
      <section className="cta-banner">
        <div className="cta-pattern"></div>
        <div className="container">
          <div className="cta-content">
            <h2>Gotowy na wzmocnienie bezpieczeństwa?</h2>
            <p>Umów darmową konsultację z naszymi ekspertami i odkryj, jak możemy chronić Twoją firmę.</p>
            <a href="#contact" className="btn-primary">Umów darmową konsultację</a>
          </div>
        </div>
      </section>

      {/* Sekcja Partnerów */}
      <section className="partners">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <span className="section-tag">PARTNERZY</span>
            <h2 className="section-title">
              Zaufali nam<br />
              <span className="highlight">wiodący gracze</span>
            </h2>
          </div>
          <div className="partners-grid">
            <div className="partner-logo animate-on-scroll animate-delay-1">
              <div className="partner-card">
                <svg viewBox="0 0 120 40" fill="none">
                  <rect x="10" y="8" width="24" height="24" rx="4" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M44 14H56M44 20H56M44 26H50" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M70 12H88V16H74V20H86V24H74V28H88V32H70V12Z" fill="#66CCFF"/>
                  <path d="M100 12H112V16H104V32H100V12Z" fill="#66CCFF"/>
                </svg>
                <span>TechCorp</span>
              </div>
            </div>
            <div className="partner-logo animate-on-scroll animate-delay-2">
              <div className="partner-card">
                <svg viewBox="0 0 120 40" fill="none">
                  <circle cx="20" cy="20" r="12" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M40 14L52 20L40 26V14Z" fill="#66CCFF"/>
                  <path d="M60 14H76V18H68V22H74V26H68V30H76V34H60V14Z" fill="#66CCFF"/>
                  <path d="M84 14H96C98.2 14 100 15.8 100 18C100 20.2 98.2 22 96 22H92V34H88V14Z" fill="#66CCFF"/>
                </svg>
                <span>DataSys</span>
              </div>
            </div>
            <div className="partner-logo animate-on-scroll animate-delay-3">
              <div className="partner-card">
                <svg viewBox="0 0 120 40" fill="none">
                  <path d="M10 20L22 12V28L10 20Z" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M30 12H42L30 20H22L30 12Z" fill="#66CCFF"/>
                  <path d="M50 14H70L58 20H46L50 14Z" fill="#66CCFF"/>
                  <path d="M78 14H90L82 20H70L78 14Z" fill="#66CCFF"/>
                  <path d="M98 14H110L102 26H90L98 14Z" fill="#66CCFF"/>
                </svg>
                <span>NetWorks</span>
              </div>
            </div>
            <div className="partner-logo animate-on-scroll animate-delay-4">
              <div className="partner-card">
                <svg viewBox="0 0 120 40" fill="none">
                  <rect x="8" y="10" width="20" height="20" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M36 14H52V18H40V22H50V26H40V30H52V34H36V14Z" fill="#66CCFF"/>
                  <path d="M62 14H82L76 20H66L62 14Z" fill="#66CCFF"/>
                  <path d="M92 14H104L100 22H88L92 14Z" fill="#66CCFF"/>
                </svg>
                <span>CloudBase</span>
              </div>
            </div>
            <div className="partner-logo animate-on-scroll animate-delay-1">
              <div className="partner-card">
                <svg viewBox="0 0 120 40" fill="none">
                  <circle cx="20" cy="20" r="10" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M38 14H50V18H42V22H48V26H42V30H50V34H38V14Z" fill="#66CCFF"/>
                  <path d="M60 14H72L66 24L60 14Z" fill="#66CCFF"/>
                  <path d="M80 14H92L86 24L80 14Z" fill="#66CCFF"/>
                  <path d="M100 14H112L106 24L100 14Z" fill="#66CCFF"/>
                </svg>
                <span>SecureNet</span>
              </div>
            </div>
            <div className="partner-logo animate-on-scroll animate-delay-2">
              <div className="partner-card">
                <svg viewBox="0 0 120 40" fill="none">
                  <path d="M10 14H22V18H10V14Z" fill="#66CCFF"/>
                  <path d="M10 22H22V26H10V22Z" fill="#66CCFF"/>
                  <path d="M10 30H18V34H10V30Z" fill="#66CCFF"/>
                  <path d="M32 14H52V18H40V22H50V26H40V30H52V34H32V14Z" fill="#66CCFF"/>
                  <path d="M62 14H74L68 24L62 14Z" fill="#66CCFF"/>
                  <path d="M84 14H96L90 24L84 14Z" fill="#66CCFF"/>
                  <path d="M106 14H118L112 24L106 14Z" fill="#66CCFF"/>
                </svg>
                <span>InfoTech</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Blog */}
      <section id="blog" className="blog">
        <div className="container">
          <div className="section-header animate-on-scroll">
            <span className="section-tag">BLOG</span>
            <h2 className="section-title">
              Najnowsze<br />
              <span className="highlight">artykuły</span>
            </h2>
            <p className="section-desc">
              Poznaj najnowsze trendy w cyberbezpieczeństwie i technologiach IT. 
              Regularnie dzielimy się wiedzą i doświadczeniem.
            </p>
          </div>
          <div className="blog-grid">
            <article className="blog-card animate-on-scroll animate-delay-1">
              <div className="blog-image">
                <img src="https://images.unsplash.com/photo-1633265486064-086b219458ec?w=600&q=80" alt="Cyberbezpieczeństwo 2024" />
                <div className="blog-category">Cyberbezpieczeństwo</div>
              </div>
              <div className="blog-content">
                <div className="blog-date">8 kwietnia 2024</div>
                <h3>Top 5 zagrożeń cyberbezpieczeństwa w 2024 roku</h3>
                <p>Ransomware, phishing i ataki na łańcuch dostaw - poznaj najnowsze zagrożenia i jak się przed nimi chronić.</p>
                <a href="#" className="blog-read-more">Czytaj więcej →</a>
              </div>
            </article>
            <article className="blog-card animate-on-scroll animate-delay-2">
              <div className="blog-image">
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80" alt="Zero Trust" />
                <div className="blog-category">Bezpieczeństwo</div>
              </div>
              <div className="blog-content">
                <div className="blog-date">5 kwietnia 2024</div>
                <h3>Model Zero Trust - nowy standard bezpieczeństwa</h3>
                <p>Dowiedz się, dlaczego architektura Zero Trust staje się standardem w ochronie infrastruktury IT.</p>
                <a href="#" className="blog-read-more">Czytaj więcej →</a>
              </div>
            </article>
            <article className="blog-card animate-on-scroll animate-delay-3">
              <div className="blog-image">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="AI w cyberbezpieczeństwie" />
                <div className="blog-category">Sztuczna inteligencja</div>
              </div>
              <div className="blog-content">
                <div className="blog-date">2 kwietnia 2024</div>
                <h3>AI w walce z cyberzagrożeniami</h3>
                <p>Jak sztuczna inteligencja rewolucjonizuje wykrywanie i neutralizację zagrożeń w czasie rzeczywistym.</p>
                <a href="#" className="blog-read-more">Czytaj więcej →</a>
              </div>
            </article>
          </div>
        </div>
      </section>

      {/* Sekcja Kontaktu */}
      <section id="contact" className="contact">
        <div className="container">
          <div className="contact-wrapper">
            <div className="contact-info">
              <span className="section-tag">KONTAKT</span>
              <h2 className="section-title">
                Porozmawiajmy o<br />
                <span className="highlight">Twoich potrzebach</span>
              </h2>
              <p className="contact-desc">
                Potrzebujesz kompleksowej oceny bezpieczenia lub masz pytania o nasze usługi? 
                Wypełnij formularz, a nasz zespół skontaktuje się w ciągu 24 godzin.
              </p>
              <div className="contact-details">
                <div className="contact-item">
                  <div className="contact-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="5" width="18" height="14" rx="2" stroke="#66CCFF" strokeWidth="1.5"/>
                      <path d="M3 7L12 13L21 7" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round"/>
                    </svg>
                  </div>
                  <div>
                    <span className="contact-label">Email</span>
                    <span className="contact-value">kontakt@securetech.pl</span>
                  </div>
                </div>
                <div className="contact-item">
                  <div className="contact-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 4H9L11 8L8.5 10C9.5 12.5 11.5 14.5 14 15.5L16 13H20L21 17C19.5 19.5 16.5 20.5 14 19.5C7 16.5 3 10 5 4Z" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    </svg>
                  </div>
                  <div>
                    <span className="contact-label">Telefon</span>
                    <span className="contact-value">+48 123 456 789</span>
                  </div>
                </div>
                <div className="contact-item">
                  <div className="contact-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2Z" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    </svg>
                  </div>
                  <div>
                    <span className="contact-label">Siedziba</span>
                    <span className="contact-value">Warszawa, Polska</span>
                  </div>
                </div>
              </div>
            </div>
            <form className="contact-form" onSubmit={handleSubmit}>
              <div className="form-row">
                <div className="form-group">
                  <label>Imię i nazwisko</label>
                  <input type="text" placeholder="Jan Kowalski" required />
                </div>
                <div className="form-group">
                  <label>Adres email</label>
                  <input type="email" placeholder="jan@firma.pl" required />
                </div>
              </div>
              <div className="form-group">
                <label>Temat</label>
                <select>
                  <option value="">Wybierz temat</option>
                  <option value="audit">Audyt bezpieczeństwa</option>
                  <option value="pentest">Testy penetracyjne</option>
                  <option value="managed">Zarządzane bezpieczeństwo</option>
                  <option value="other">Inne zapytanie</option>
                </select>
              </div>
              <div className="form-group">
                <label>Wiadomość</label>
                <textarea placeholder="Opisz swoje potrzeby bezpieczeństwa..." rows={5} required></textarea>
              </div>
              <button type="submit" className="btn-primary">Wyślij wiadomość</button>
            </form>
          </div>
        </div>
      </section>

      {/* Stopka */}
      <footer className="footer">
        <div className="container">
          <div className="footer-content">
            <div className="footer-brand">
              <a href="#home" className="logo">
                <svg className="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
                  <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
                </svg>
                <span className="logo-text">SecureTech</span>
              </a>
              <p>Przedsiębiorcze rozwiązania cyberbezpieczeństwa chroniące firmy od 2011. Twoje bezpieczeństwo jest naszym priorytetem.</p>
            </div>
            <div className="footer-links">
              <h4>Szybkie linki</h4>
              <a href="#home">Start</a>
              <a href="#services">Usługi</a>
              <a href="#about">O nas</a>
              <a href="#contact">Kontakt</a>
            </div>
            <div className="footer-links">
              <h4>Usługi</h4>
              <a href="#services">Audyt bezpieczeństwa</a>
              <a href="#services">Testy penetracyjne</a>
              <a href="#services">Bezpieczeństwo chmury</a>
              <a href="#services">Reagowanie na incydenty</a>
            </div>
            <div className="footer-social">
              <h4>Połącz się</h4>
              <div className="social-links">
                <a href="#" className="social-link">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8C17.5913 8.9482 18.8364 10.3466 19.5363 12.0364C20.2362 13.7261 20.3498 15.5823 19.8584 17.3365C19.367 19.0906 18.2992 20.6538 16.8068 21.8401C15.3144 23.0263 13.4753 23.7711 11.5495 23.9931C9.62377 24.2151 7.70016 23.9031 5.99998 23.0902C4.29981 22.2773 2.89449 20.9965 1.92896 19.3931C0.963428 17.7897 0.478154 15.9302 0.527886 14.0392C0.577617 12.1481 1.15925 10.2931 2.19067 8.67468C3.22209 7.05624 4.66274 5.73253 6.32927 4.86425C7.9958 3.99597 9.8125 3.61428 11.6064 3.75676C13.4003 3.89924 15.1077 4.55897 16.5566 5.66376" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    <path d="M9 16L12 12L15 16" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                  </svg>
                  LinkedIn
                </a>
                <a href="#" className="social-link">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.9999 5.99991C22.2625 6.90367 21.3824 7.67083 20.3999 8.26991C19.4175 8.86899 18.3447 9.29098 17.2299 9.51991C16.3809 9.70016 15.5137 9.76791 14.6499 9.71991C15.4199 9.17991 16.0199 8.42991 16.3799 7.54991C15.6999 7.85991 14.9699 8.08991 14.2099 8.21991C13.5499 7.40991 12.5999 6.82991 11.5099 6.56991C10.4199 6.30991 9.27986 6.37991 8.21986 6.76991C7.15986 7.15991 6.22986 7.84991 5.55986 8.74991C4.88986 9.64991 4.50986 10.7199 4.45986 11.8299C4.40986 12.9399 4.68986 14.0399 5.26986 15.0099C4.52986 15.0099 3.80986 14.8599 3.14986 14.5699C3.14986 16.5999 4.78986 18.2799 6.77986 18.6099C6.27986 18.7799 5.74986 18.8699 5.19986 18.8699C4.77986 18.8699 4.36986 18.8199 3.96986 18.7299C4.00986 20.3099 5.33986 21.6499 6.91986 21.7599C5.53986 23.0799 3.80986 23.8999 1.96986 23.8999C1.32986 23.8999 0.699859 23.7799 0.0998594 23.5999C1.86986 25.0199 4.00986 25.8999 6.26986 25.8999C17.9999 25.8999 22.9999 15.8999 22.9999 5.99991Z" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                  </svg>
                  Twitter
                </a>
              </div>
            </div>
          </div>
          <div className="footer-bottom">
            <p>&copy; 2026 SecureTech Inc. Wszelkie prawa zastrzeżone.</p>
          </div>
        </div>
      </footer>
    </main>
  );
}