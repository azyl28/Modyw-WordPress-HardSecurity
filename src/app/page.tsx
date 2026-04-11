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
          <a href="#hero" className="logo">
            <svg className="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
              <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
            </svg>
            <span className="logo-text">SecureTech</span>
          </a>
          <div className="nav-menu">
            <a href="#hero" className="nav-link">Start</a>
            <a href="#services" className="nav-link">Usługi</a>
            <a href="#about" className="nav-link">O nas</a>
            <a href="#team" className="nav-link">Zespół</a>
            <a href="#contact" className="nav-link">Kontakt</a>
          </div>
          <a href="#contact" className="nav-cta">Kontakt</a>
        </div>
      </nav>

      {/* Sekcja Hero */}
      <section id="hero" className="hero">
        <div className="hero-image">
          <div className="hero-overlay"></div>
        </div>
        <div className="hero-content">
          <div className="hero-badge">
            <span className="badge-dot"></span>
            Profesjonalne usługi IT i cyberbezpieczeństwa
          </div>
          <h1 className="hero-title">
            Twój zaufany partner<br />
            <span className="highlight">w IT</span>
          </h1>
          <p className="hero-subtitle">
            Dostarczamy kompleksowe usługi IT i rozwiązania z zakresu cyberbezpieczeństwa, 
            które wspierają rozwój Twojego biznesu. Od infrastruktury sieciowej po oprogramowanie — zajmujemy się wszystkim.
          </p>
          <div className="hero-buttons">
            <a href="#contact" className="btn-primary">Skontaktuj się</a>
            <a href="#services" className="btn-secondary">Nasze usługi</a>
          </div>
        </div>
        <div className="scroll-indicator">
          <div className="mouse">
            <div className="wheel"></div>
          </div>
        </div>
      </section>

      {/* Sekcja Statystyk */}
      <section id="stats" className="stats">
        <div className="container">
          <div className="stats-grid">
            <div className="stat-card">
              <span className="stat-number">500+</span>
              <span className="stat-label">Zadowolonych klientów</span>
            </div>
            <div className="stat-card">
              <span className="stat-number">1200+</span>
              <span className="stat-label">Zrealizowanych projektów</span>
            </div>
            <div className="stat-card">
              <span className="stat-number">98%</span>
              <span className="stat-label">Skuteczność</span>
            </div>
            <div className="stat-card">
              <span className="stat-number">24/7</span>
              <span className="stat-label">Wsparcie dostępne</span>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Usług */}
      <section id="services" className="services">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">CO OFERUJEMY</span>
            <h2 className="section-title">
              Kompleksowe rozwiązania IT<br />
              <span className="highlight">dla Twojego biznesu</span>
            </h2>
            <p className="section-desc">
              Od cyberbezpieczeństwa po programowanie — dostarczamy kompleksowe usługi IT 
              dopasowane do potrzeb Twojej firmy.
            </p>
          </div>
          <div className="services-grid">
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L8 14V34L24 44L40 34V14L24 4Z" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="24" cy="24" r="8" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Cyberbezpieczeństwo</h3>
              <p>Zaawansowana ochrona Twoich zasobów cyfrowych. Wykrywanie zagrożeń, testy penetracyjne i audyty bezpieczeństwa.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="16" r="8" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M8 40V32C8 26.477 12.477 22 18 22H30C35.523 22 40 26.477 40 32V40" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 22V18C16 14.686 18.686 12 22 12H26C29.314 12 32 14.686 32 18V22" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Sieci komputerowe</h3>
              <p>Projektowanie, wdrażanie i utrzymanie infrastruktury sieciowej dla Twojego przedsiębiorstwa.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="6" y="10" width="36" height="28" rx="4" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M14 20H34" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M14 28H28" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Serwis IT i naprawy</h3>
              <p>Szybka i niezawodna pomoc techniczna. Diagnostyka sprzętu, naprawy i profilaktyczne utrzymanie.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="8" y="6" width="32" height="14" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <rect x="12" y="24" width="24" height="18" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="24" cy="33" r="4" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Reinstalacja systemów</h3>
              <p>Profesjonalna instalacja i konfiguracja systemów operacyjnych. Czyste instalacje, aktualizacje i optymalizacja.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="6" y="14" width="36" height="24" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M6 20H42" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="12" cy="17" r="1.5" fill="#66CCFF"/>
                  <circle cx="18" cy="17" r="1.5" fill="#66CCFF"/>
                  <circle cx="24" cy="17" r="1.5" fill="#66CCFF"/>
                </svg>
              </div>
              <h3>Konfiguracja sprzętu</h3>
              <p> Indywidualne konfiguracje sprzętowe. Instalacja serwerów, optymalizacja stacji roboczych i więcej.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 36L20 28L24 32L28 24L32 28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
                  <path d="M8 36H40" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M12 36V28" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M36 36V24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Programowanie i oprogramowanie</h3>
              <p>Niestandardowe rozwiązania programistyczne. Aplikacje webowe, mobilne, oprogramowanie biznesowe i API.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Umiejętności */}
      <section id="skills" className="skills">
        <div className="container">
          <div className="skills-wrapper">
            <div className="skills-content">
              <span className="section-tag">NASZA EKSPERTIZA</span>
              <h2 className="section-title">
                Doskonałość techniczna<br />
                <span className="highlight">w każdym szczególe</span>
              </h2>
              <p className="skills-desc">
                Nasz zespół łączy wieloletnie doświadczenie z najnowszymi technologiami, aby dostarczać 
                rozwiązania przynoszące realne efekty biznesowe.
              </p>
              <div className="skills-list">
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Wsparcie IT i utrzymanie</span>
                    <span className="skill-percent">95%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "95%" }}></div>
                  </div>
                </div>
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Rozwiązania cyberbezpieczeństwa</span>
                    <span className="skill-percent">92%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "92%" }}></div>
                  </div>
                </div>
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Infrastruktura sieciowa</span>
                    <span className="skill-percent">90%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "90%" }}></div>
                  </div>
                </div>
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Programowanie webowe</span>
                    <span className="skill-percent">88%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "88%" }}></div>
                  </div>
                </div>
              </div>
            </div>
            <div className="skills-image">
              <div className="image-container">
                <img 
                  src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&q=80" 
                  alt="Zespół IT przy pracy" 
                />
                <div className="image-overlay"></div>
              </div>
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
                  <img 
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&q=80" 
                    alt="Nowoczesne biuro" 
                  />
                  <div className="image-overlay"></div>
                </div>
                <div className="about-experience">
                  <span className="exp-number">15</span>
                  <span className="exp-label">Lat doświadczenia</span>
                </div>
              </div>
            </div>
            <div className="about-content">
              <span className="section-tag">O NAS</span>
              <h2 className="section-title">
                Twój niezawodny<br />
                <span className="highlight">partner IT</span>
              </h2>
              <p className="about-text">
                SecureTech zostało założone w 2011 roku z misją dostarczania firmom 
                niezawodnych, profesjonalnych usług IT. Na przestrzeni lat staliśmy się 
                zaufanym partnerem dla przedsiębiorstw każdej wielkości.
              </p>
              <p className="about-text">
                Nasz zespół składa się z certyfikowanych profesjonalistów pasjonujących się technologią. 
                Wierzymy w budowanie długotrwałych relacji z klientami, oferując 
                spersonalizowane rozwiązania dopasowane do ich unikalnych potrzeb.
              </p>
              <div className="about-stats">
                <div className="about-stat">
                  <span className="about-stat-number">50+</span>
                  <span className="about-stat-label">Ekspertów IT</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">500+</span>
                  <span className="about-stat-label">Zadowolonych klientów</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">15</span>
                  <span className="about-stat-label">Lat doświadczenia</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Sekcja Zespołu */}
      <section id="team" className="team">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">POZNAJ ZESPÓŁ</span>
            <h2 className="section-title">
              Nasi eksperci<br />
              <span className="highlight">profesjonaliści</span>
            </h2>
            <p className="section-desc">
              Zespół oddanych specjalistów IT zobowiązanych do dostarczania najwyższej jakości usług.
            </p>
          </div>
          <div className="team-grid">
            <div className="team-card">
              <div className="team-image">
                <img 
                  src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80" 
                  alt="CEO" 
                />
                <div className="team-overlay"></div>
              </div>
              <div className="team-info">
                <h3>Michał Kowalski</h3>
                <span className="team-role">Prezes i założyciel</span>
                <p>Ponad 20 lat doświadczenia w branży IT. Ekspert od strategii cyberbezpieczeństwa i rozwoju biznesu.</p>
              </div>
            </div>
            <div className="team-card">
              <div className="team-image">
                <img 
                  src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80" 
                  alt="CTO" 
                />
                <div className="team-overlay"></div>
              </div>
              <div className="team-info">
                <h3>Agnieszka Nowak</h3>
                <span className="team-role">Dyrektor techniczny</span>
                <p>Specjalista ds. cyberbezpieczeństwa. Posiada certyfikat CISSP z wieloletnim doświadczeniem w ochronie przedsiębiorstw.</p>
              </div>
            </div>
            <div className="team-card">
              <div className="team-image">
                <img 
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80" 
                  alt="Lead Developer" 
                />
                <div className="team-overlay"></div>
              </div>
              <div className="team-info">
                <h3>Piotr Wiśniewski</h3>
                <span className="team-role">Główny programista</span>
                <p>Ekspert full-stack. Pasjonat tworzenia wydajnych i skalowalnych rozwiązań programistycznych.</p>
              </div>
            </div>
            <div className="team-card">
              <div className="team-image">
                <img 
                  src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80" 
                  alt="Network Engineer" 
                />
                <div className="team-overlay"></div>
              </div>
              <div className="team-info">
                <h3>Katarzyna Lewandowska</h3>
                <span className="team-role">Inżynier sieci</span>
                <p>Certyfikat CCIE. Specjalizuje się w projektowaniu sieci korporacyjnych i zarządzaniu infrastrukturą.</p>
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
            <h2>Gotowy na transformację IT?</h2>
            <p>Porozmawiajmy o tym, jak możemy pomóc Twojej firmie rosnąć dzięki niezawodnym rozwiązaniom technologicznym.</p>
            <a href="#contact" className="btn-primary">Rozpocznij współpracę</a>
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
                Pracujmy<br />
                <span className="highlight">razem</span>
              </h2>
              <p className="contact-desc">
                Masz projekt na myśli? Chętnie Cię wysłuchamy. Nasz zespół jest gotowy, aby 
                pomóc przekształcić Twoje pomysły w rzeczywistość.
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
                    <span className="contact-label">Lokalizacja</span>
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
                  <option value="it">Usługi IT</option>
                  <option value="security">Cyberbezpieczeństwo</option>
                  <option value="development">Programowanie</option>
                  <option value="support">Wsparcie techniczne</option>
                  <option value="other">Inne</option>
                </select>
              </div>
              <div className="form-group">
                <label>Wiadomość</label>
                <textarea placeholder="Opisz swój projekt..." rows={5} required></textarea>
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
              <a href="#hero" className="logo">
                <svg className="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
                  <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
                </svg>
                <span className="logo-text">SecureTech</span>
              </a>
              <p>Profesjonalne usługi IT i rozwiązania cyberbezpieczeństwa. Twój zaufany partner technologiczny od 2011 roku.</p>
            </div>
            <div className="footer-links">
              <h4>Szybkie linki</h4>
              <a href="#hero">Start</a>
              <a href="#services">Usługi</a>
              <a href="#about">O nas</a>
              <a href="#contact">Kontakt</a>
            </div>
            <div className="footer-links">
              <h4>Usługi</h4>
              <a href="#services">Cyberbezpieczeństwo</a>
              <a href="#services">Wsparcie IT</a>
              <a href="#services">Sieci</a>
              <a href="#services">Programowanie</a>
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