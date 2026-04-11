"use client";

import { useState } from "react";

export default function Home() {
  const [formData, setFormData] = useState({ name: "", email: "", message: "" });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
  };

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
            <span className="logo-text">SecureTech</span>
          </a>
          <div className="nav-menu">
            <a href="#home" className="nav-link">Start</a>
            <a href="#services" className="nav-link">Usługi</a>
            <a href="#about" className="nav-link">O nas</a>
            <a href="#why-us" className="nav-link">Dlaczego my</a>
            <a href="#contact" className="nav-link">Kontakt</a>
          </div>
          <a href="#contact" className="nav-cta">Kontakt</a>
        </div>
      </nav>

      {/* Sekcja Hero */}
      <section id="home" className="hero">
        <div className="hero-image">
          <div className="hero-overlay"></div>
        </div>
        <div className="hero-content">
          <div className="hero-badge">
            <span className="badge-dot"></span>
            Profesjonalne usługi IT i cyberbezpieczeństwa
          </div>
          <h1 className="hero-title">
            Chronimy Twoją<br />
            <span className="highlight">infrastrukturę cyfrową</span>
          </h1>
          <p className="hero-subtitle">
            Dostarczamy kompleksowe usługi z zakresu cyberbezpieczeństwa, które chronią 
            Twoją firmę przed ewoluującymi zagrożeniami. Zaufały nam wiodące przedsiębiorstwa.
          </p>
          <div className="hero-buttons">
            <a href="#contact" className="btn-primary">Umów konsultację</a>
            <a href="#services" className="btn-secondary">Poznaj usługi</a>
          </div>
          <div className="hero-stats">
            <div className="stat-item">
              <span className="stat-number">500+</span>
              <span className="stat-label">Zabezpieczonych firm</span>
            </div>
            <div className="stat-divider"></div>
            <div className="stat-item">
              <span className="stat-number">15+</span>
              <span className="stat-label">Lat doświadczenia</span>
            </div>
            <div className="stat-divider"></div>
            <div className="stat-item">
              <span className="stat-number">24/7</span>
              <span className="stat-label">Monitorowanie</span>
            </div>
          </div>
        </div>
        <div className="scroll-indicator">
          <div className="mouse">
            <div className="wheel"></div>
          </div>
        </div>
      </section>

      {/* Sekcja Usług */}
      <section id="services" className="services">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">CO ROBIMY</span>
            <h2 className="section-title">
              Kompleksowe rozwiązania<br />
              <span className="highlight">bezpieczeństwa</span>
            </h2>
            <p className="section-desc">
              Od wykrywania zagrożeń po reagowanie na incydenty — dostarczamy usługi cyberbezpieczeństwa 
              dopasowane do potrzeb Twojej organizacji.
            </p>
          </div>
          <div className="services-grid">
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="20" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M24 12V24L32 28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Audyt bezpieczeństwa</h3>
              <p>Szczegółowa ocena Twojej infrastruktury IT. Identyfikacja luk i praktyczne rekomendacje.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 24L20 12L32 24L20 36L8 24Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                  <path d="M32 24H44" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Testy penetracyjne</h3>
              <p>Symulowane cyberataki identyfikujące słabe punkty, zanim wykorzystają je przestępcy.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="8" y="16" width="32" height="20" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 16V12C16 9.79086 17.7909 8 20 8H28C30.2091 8 32 9.79086 32 12V16" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="24" cy="26" r="4" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Bezpieczeństwo chmury</h3>
              <p>Zabezpiecz infrastrukturę chmurową w AWS, Azure i GCP. Migracja, konfiguracja i monitoring.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M24 20V32" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 26H32" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Tożsamość i dostęp</h3>
              <p>Rozwiązania IAM i architektura Zero Trust. Kontrola dostępu i zarządzanie uprawnieniami.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 8L28 18H40L30 26L34 36L24 28L14 36L18 26L8 18H20L24 8Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                </svg>
              </div>
              <h3>Analiza zagrożeń</h3>
                  <p>Proaktywne wyszukiwanie zagrożeń i zbieranie inteligencji, aby wyprzedzać nowe cyberzagrożenia.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 36V40H40V36" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <rect x="12" y="8" width="24" height="28" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M20 16H28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M20 22H28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M20 28H24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Reagowanie na incydenty</h3>
              <p>Szybka reakcja gdy dochodzi do naruszenia. Minimalizacja strat i przywrócenie normalności.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja O nas */}
      <section id="about" className="about">
        <div className="container">
          <div className="about-wrapper">
            <div className="about-image">
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
          <div className="section-header">
            <span className="section-tag">DLACZEGO MY</span>
            <h2 className="section-title">
              Doskonałość w każdym<br />
              <span className="highlight">szczególe</span>
            </h2>
          </div>
          <div className="features-grid">
            <div className="feature-item">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="18" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M24 14V24L30 30" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Wsparcie 24/7</h3>
              <p>Nasze Centrum Operacji Bezpieczeństwa monitoruje Twoje systemy całą dobę, zapewniając natychmiastową reakcję.</p>
            </div>
            <div className="feature-item">
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
            <div className="feature-item">
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
            <div className="feature-item">
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
          <div className="section-header">
            <span className="section-tag">NASZE OSIĄGNIĘCIA</span>
            <h2 className="section-title">
              Zaufali nam liderzy<br />
              <span className="highlight">branż</span>
            </h2>
          </div>
          <div className="projects-grid">
            <div className="project-card">
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
            <div className="project-card">
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
            <div className="project-card">
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
            <div className="project-card">
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