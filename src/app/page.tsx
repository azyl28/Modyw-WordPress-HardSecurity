"use client";

export default function Home() {
  return (
    <main className="main">
      {/* Navigation */}
      <nav className="navbar">
        <div className="nav-container">
          <div className="logo">
            <span className="logo-icon">🛡️</span>
            <span className="logo-text">SecureTech</span>
          </div>
          <div className="nav-menu">
            <a href="#home" className="nav-link">Start</a>
            <a href="#services" className="nav-link">Usługi</a>
            <a href="#about" className="nav-link">O nas</a>
            <a href="#why-us" className="nav-link">Dlaczego my</a>
            <a href="#contact" className="nav-link">Kontakt</a>
          </div>
          <button className="nav-cta">Darmowa konsultacja</button>
        </div>
      </nav>

      {/* Hero Section */}
      <section id="home" className="hero">
        <div className="hero-overlay"></div>
        <div className="hero-bg"></div>
        <div className="hero-content">
          <div className="hero-badge">🔒 Cyberbezpieczeństwo dla biznesu</div>
          <h1 className="hero-title">
            Chronimy Twój świat<br />
            <span className="highlight">cyfrowy</span>
          </h1>
          <p className="hero-subtitle">
            Kompleksowe usługi cyberbezpieczeństwa dla firm każdej wielkości. 
            Zabezpieczamy infrastrukturę, dane i reputację Twojego biznesu.
          </p>
          <div className="hero-buttons">
            <a href="#contact" className="btn-primary">Skontaktuj się z nami</a>
            <a href="#services" className="btn-secondary">Poznaj usługi</a>
          </div>
          <div className="hero-stats">
            <div className="stat-item">
              <span className="stat-number">500+</span>
              <span className="stat-label">Zabezpieczonych firm</span>
            </div>
            <div className="stat-item">
              <span className="stat-number">99.9%</span>
              <span className="stat-label">Skuteczność</span>
            </div>
            <div className="stat-item">
              <span className="stat-number">24/7</span>
              <span className="stat-label">Wsparcie</span>
            </div>
          </div>
        </div>
      </section>

      {/* Services Section */}
      <section id="services" className="services">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">NASZE USŁUGI</span>
            <h2 className="section-title">Kompleksowa ochrona<br /><span className="highlight">Twojego biznesu</span></h2>
            <p className="section-desc">Oferujemy pełen wachlarz usług z zakresu cyberbezpieczeństwa, dostosowanych do Twoich potrzeb.</p>
          </div>
          <div className="services-grid">
            <div className="service-card">
              <div className="service-icon">🔍</div>
              <h3>Audyt bezpieczeństwa</h3>
              <p>Szczegółowa analiza infrastruktury IT pod kątem luk i zagrożeń. Kompleksowy raport z rekomendacjami.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">🛡️</div>
              <h3>Penetration Testing</h3>
              <p>Testy penetracyjne symulujące ataki hakerów. Wykrywamy słabe punkty zanim zrobią to przestępcy.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">👥</div>
              <h3>Szkolenia SOC</h3>
              <p>Programy edukacyjne dla zespołów IT i pracowników. Budujemy świadomość zagrożeń w organizacji.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">☁️</div>
              <h3>Bezpieczeństwo chmury</h3>
              <p>Ochrona infrastruktury cloudowej i danych w Azure, AWS i GCP. Bezpieczna migracja i zarządzanie.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">🔐</div>
              <h3>Zarządzanie tożsamością</h3>
              <p>IAM i Zero Trust architecture. Kontrola dostępu i zarządzanie uprawnieniami użytkowników.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">🚨</div>
              <h3>Incident Response</h3>
              <p>Szybka reakcja na incydenty bezpieczeństwa. Minimalizacja strat i przywrócenie normalności.</p>
            </div>
          </div>
        </div>
      </section>

      {/* About Section */}
      <section id="about" className="about">
        <div className="container">
          <div className="about-wrapper">
            <div className="about-image">
              <div className="image-placeholder">
                <div className="image-overlay"></div>
                <div className="image-content">👨‍💻</div>
              </div>
              <div className="about-experience">
                <span className="exp-number">15+</span>
                <span className="exp-label">lat doświadczenia</span>
              </div>
            </div>
            <div className="about-content">
              <span className="section-tag">O NAS</span>
              <h2 className="section-title">Eksperci od<br /><span className="highlight">cyberbezpieczeństwa</span></h2>
              <p className="about-text">
                Jesteśmy zespołem doświadczonych specjalistów cyberbezpieczeństwa z wieloletnim doświadczeniem w ochronie firm różnej wielkości. Naszą misją jest dostarczanie najwyższej jakości rozwiązań security, które chronią Twoją firmę przed współczesnymi zagrożeniami.
              </p>
              <p className="about-text">
                Współpracujemy z wiodącymi dostawcami technologii security i ciągle podnosimy kwalifikacje, aby być o krok przed nowymi zagrożeniami.
              </p>
              <ul className="about-list">
                <li>✓ Certyfikowani specjaliści (CISSP, CEH, OSCP)</li>
                <li>✓ Wieloletnie doświadczenie w ochronie korporacji</li>
                <li>✓ Indywidualne podejście do każdego klienta</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* Why Choose Us */}
      <section id="why-us" className="why-us">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">DLACZEGO MY</span>
            <h2 className="section-title">Dlaczego warto<br /><span className="highlight">nam zaufać</span></h2>
          </div>
          <div className="features-grid">
            <div className="feature-item">
              <div className="feature-icon">⚡</div>
              <h3>Szybka reakcja</h3>
              <p>Nasz zespół SOC pracuje 24/7. Reagujemy na incydenty w ciągu minut, nie godzin.</p>
            </div>
            <div className="feature-item">
              <div className="feature-icon">🎯</div>
              <h3>Precyzyjna diagnostyka</h3>
              <p>Wykorzystujemy zaawansowane narzędzia do wykrywania i analizy zagrożeń.</p>
            </div>
            <div className="feature-item">
              <div className="feature-icon">📊</div>
              <h3>Przejrzyste raporty</h3>
              <p>Regularne raporty z analizą stanu bezpieczeństwa i rekomendacjami.</p>
            </div>
            <div className="feature-item">
              <div className="feature-icon">🤝</div>
              <h3>Partnerstwo</h3>
              <p>Traktujemy każdego klienta jako partnera. Jesteśmy zawsze dostępni.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Projects / Experience */}
      <section id="projects" className="projects">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">NASZE DOŚWIADCZENIE</span>
            <h2 className="section-title">Zabezpieczyliśmy<br /><span className="highlight">wiodące firmy</span></h2>
          </div>
          <div className="projects-grid">
            <div className="project-card">
              <div className="project-img">
                <div className="project-overlay">
                  <span className="project-type">FinTech</span>
                </div>
              </div>
              <div className="project-info">
                <h3>Bank Polski</h3>
                <p>Pełna ochrona infrastruktury bankowej, testy penetracyjne, SOC 24/7</p>
              </div>
            </div>
            <div className="project-card">
              <div className="project-img">
                <div className="project-overlay">
                  <span className="project-type">E-Commerce</span>
                </div>
              </div>
              <div className="project-info">
                <h3>ShopMax</h3>
                <p>Zabezpieczenie platformy e-commerce, ochrona danych klientów</p>
              </div>
            </div>
            <div className="project-card">
              <div className="project-img">
                <div className="project-overlay">
                  <span className="project-type">Healthcare</span>
                </div>
              </div>
              <div className="project-info">
                <h3>MedCare Plus</h3>
                <p>HIPAA compliance, ochrona danych medycznych, bezpieczeństwo IoT</p>
              </div>
            </div>
            <div className="project-card">
              <div className="project-img">
                <div className="project-overlay">
                  <span className="project-type">Manufacturing</span>
                </div>
              </div>
              <div className="project-info">
                <h3>Polska Fabryka</h3>
                <p>OT security, ochrona systemów przemysłowych, segmentacja sieci</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Banner */}
      <section className="cta-banner">
        <div className="container">
          <div className="cta-content">
            <h2>Gotowy na bezpieczną przyszłość?</h2>
            <p>Skontaktuj się z nami i otrzymaj darmową wycenę ochrony Twojej firmy.</p>
            <a href="#contact" className="btn-primary">Umów bezpłatną konsultację</a>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="contact">
        <div className="container">
          <div className="contact-wrapper">
            <div className="contact-info">
              <span className="section-tag">KONTAKT</span>
              <h2 className="section-title">Porozmawiajmy<br /><span className="highlight">o bezpieczeństwie</span></h2>
              <p className="contact-desc">Masz pytania? Chcesz uzyskać wycenę? Skontaktuj się z nami — chętnie pomożemy!</p>
              <div className="contact-details">
                <div className="contact-item">
                  <span className="contact-icon">📧</span>
                  <div>
                    <span className="contact-label">Email</span>
                    <span className="contact-value">contact@securetech.pl</span>
                  </div>
                </div>
                <div className="contact-item">
                  <span className="contact-icon">📱</span>
                  <div>
                    <span className="contact-label">Telefon</span>
                    <span className="contact-value">+48 123 456 789</span>
                  </div>
                </div>
                <div className="contact-item">
                  <span className="contact-icon">📍</span>
                  <div>
                    <span className="contact-label">Lokalizacja</span>
                    <span className="contact-value">Warszawa, Polska</span>
                  </div>
                </div>
              </div>
            </div>
            <form className="contact-form">
              <div className="form-group">
                <input type="text" placeholder="Imię i nazwisko" required />
              </div>
              <div className="form-group">
                <input type="email" placeholder="Adres email" required />
              </div>
              <div className="form-group">
                <input type="tel" placeholder="Numer telefonu" />
              </div>
              <div className="form-group">
                <textarea placeholder="Wiadomość..." rows={5} required></textarea>
              </div>
              <button type="submit" className="btn-primary">Wyślij wiadomość</button>
            </form>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="footer">
        <div className="container">
          <div className="footer-content">
            <div className="footer-brand">
              <div className="logo">
                <span className="logo-icon">🛡️</span>
                <span className="logo-text">SecureTech</span>
              </div>
              <p>Profesjonalne usługi cyberbezpieczeństwa dla Twojej firmy.</p>
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
              <a href="#services">Penetration Testing</a>
              <a href="#services">SOC 24/7</a>
              <a href="#services">Szkolenia</a>
            </div>
            <div className="footer-social">
              <h4>Social media</h4>
              <div className="social-icons">
                <a href="#" className="social-link">LinkedIn</a>
                <a href="#" className="social-link">Twitter</a>
              </div>
            </div>
          </div>
          <div className="footer-bottom">
            <p>© 2026 SecureTech. Wszelkie prawa zastrzeżone.</p>
          </div>
        </div>
      </footer>
    </main>
  );
}