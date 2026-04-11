"use client";

import { useEffect, useRef } from 'react';

export default function Home() {
  const canvasRef = useRef<HTMLCanvasElement>(null);

  useEffect(() => {
    const canvas = canvasRef.current;
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = canvas.width = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    const particles: { x: number; y: number; vx: number; vy: number; size: number; alpha: number }[] = [];
    const particleCount = 80;

    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.5,
        vy: (Math.random() - 0.5) * 0.5,
        size: Math.random() * 2 + 1,
        alpha: Math.random() * 0.5 + 0.2
      });
    }

    let animationId: number;

    const animate = () => {
      ctx.fillStyle = 'rgba(0, 0, 0, 0.1)';
      ctx.fillRect(0, 0, width, height);

      particles.forEach((p, i) => {
        p.x += p.vx;
        p.y += p.vy;

        if (p.x < 0 || p.x > width) p.vx *= -1;
        if (p.y < 0 || p.y > height) p.vy *= -1;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(0, 255, 255, ${p.alpha})`;
        ctx.fill();

        for (let j = i + 1; j < particles.length; j++) {
          const p2 = particles[j];
          const dx = p.x - p2.x;
          const dy = p.y - p2.y;
          const dist = Math.sqrt(dx * dx + dy * dy);

          if (dist < 150) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.strokeStyle = `rgba(0, 255, 255, ${0.1 * (1 - dist / 150)})`;
            ctx.stroke();
          }
        }
      });

      animationId = requestAnimationFrame(animate);
    };

    animate();

    const handleResize = () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    };

    window.addEventListener('resize', handleResize);

    return () => {
      cancelAnimationFrame(animationId);
      window.removeEventListener('resize', handleResize);
    };
  }, []);

  return (
    <>
      <canvas ref={canvasRef} className="particles-bg" />
      
      <main className="min-h-screen">
        <nav className="nav">
          <div className="nav-container">
            <span className="logo">&lt;NEXUS/&gt;</span>
            <div className="nav-links">
              <a href="#home">Start</a>
              <a href="#about">O nas</a>
              <a href="#services">Usługi</a>
              <a href="#projects">Projekty</a>
              <a href="#contact">Kontakt</a>
            </div>
          </div>
        </nav>

        <section id="home" className="hero">
          <div className="hero-content">
            <div className="hero-badge">Witaj w przyszłości</div>
            <h1>
              <span className="hero-title">BUDUJEMY</span>
              <span className="hero-title accent">CYFROWĄ</span>
              <span className="hero-title">RZECZYWISTOŚĆ</span>
            </h1>
            <p className="hero-subtitle">
              Transformujemy wizje w innowacyjne rozwiązania. 
              Tworzymy technologie, które zmieniają świat.
            </p>
            <div className="hero-cta">
              <button className="btn-primary">
                <span>Rozpocznij journey</span>
                <div className="btn-glow"></div>
              </button>
              <button className="btn-secondary">
                <span>Zobacz portfolio</span>
              </button>
            </div>
            <div className="hero-stats">
              <div className="stat">
                <span className="stat-number">150+</span>
                <span className="stat-label">Projektów</span>
              </div>
              <div className="stat">
                <span className="stat-number">50+</span>
                <span className="stat-label">Klientów</span>
              </div>
              <div className="stat">
                <span className="stat-number">99%</span>
                <span className="stat-label">Satysfakcji</span>
              </div>
            </div>
          </div>
          <div className="scroll-indicator">
            <div className="mouse">
              <div className="wheel"></div>
            </div>
          </div>
        </section>

        <section id="about" className="about">
          <div className="section-container">
            <h2 className="section-title">
              <span className="title-accent">{"//"}</span> KIM JESTEŚMY
            </h2>
            <p className="section-subtitle">
              Jesteśmy zespołem wizjonerów, którzy łączą kreatywność z technologią
            </p>
            <div className="about-grid">
              <div className="about-card">
                <div className="about-icon">💡</div>
                <h3>Innowacja</h3>
                <p>Nieustannie poszukujemy nowych rozwiązań i technologii przyszłości.</p>
              </div>
              <div className="about-card">
                <div className="about-icon">🎯</div>
                <h3>Precyzja</h3>
                <p>Każdy projekt traktujemy z najwyższą dokładnością i uwaga.</p>
              </div>
              <div className="about-card">
                <div className="about-icon">⚡</div>
                <h3>Szybkość</h3>
                <p>Dostarczamy efekty w rekordowym czasie bez kompromisów.</p>
              </div>
              <div className="about-card">
                <div className="about-icon">🔐</div>
                <h3>Bezpieczeństwo</h3>
                <p>Twoje dane i projekty są zawsze chronione najwyższymi standardami.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="services" className="services">
          <div className="section-container">
            <h2 className="section-title">
              <span className="title-accent">{"//"}</span> NASZE USŁUGI
            </h2>
            <div className="services-grid">
              <div className="service-card">
                <div className="service-icon">🚀</div>
                <h3>Full-Stack Dev</h3>
                <p>Kompleksowe aplikacje webowe i mobilne od koncepcji do wdrożenia.</p>
                <div className="service-tags">
                  <span>React</span>
                  <span>Node.js</span>
                  <span>Python</span>
                </div>
              </div>
              <div className="service-card">
                <div className="service-icon">🎨</div>
                <h3>UI/UX Design</h3>
                <p>Interfejsy, które zachwycają i prowadzą użytkownika przez doświadczenie.</p>
                <div className="service-tags">
                  <span>Figma</span>
                  <span>Framer</span>
                  <span>Tailwind</span>
                </div>
              </div>
              <div className="service-card">
                <div className="service-icon">☁️</div>
                <h3>Cloud & DevOps</h3>
                <p>Skalowalna infrastruktura i automatyzacja procesów wdrożeniowych.</p>
                <div className="service-tags">
                  <span>AWS</span>
                  <span>Docker</span>
                  <span>K8s</span>
                </div>
              </div>
              <div className="service-card">
                <div className="service-icon">🤖</div>
                <h3>AI & Machine Learning</h3>
                <p>Inteligentne rozwiązania oparte na najnowszych modelach AI.</p>
                <div className="service-tags">
                  <span>Python</span>
                  <span>TensorFlow</span>
                  <span>LLM</span>
                </div>
              </div>
              <div className="service-card">
                <div className="service-icon">🔒</div>
                <h3>Cyberbezpieczeństwo</h3>
                <p>Ochrona Twoich systemów przed zagrożeniami XXI wieku.</p>
                <div className="service-tags">
                  <span>PenTest</span>
                  <span>Audit</span>
                  <span>ISO</span>
                </div>
              </div>
              <div className="service-card">
                <div className="service-icon">📱</div>
                <h3>Mobile Apps</h3>
                <p>Aplikacje natywne i hybrydowe na iOS i Android.</p>
                <div className="service-tags">
                  <span>React Native</span>
                  <span>Flutter</span>
                  <span>Swift</span>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="projects" className="projects">
          <div className="section-container">
            <h2 className="section-title">
              <span className="title-accent">{"//"}</span> PORTFOLIO
            </h2>
            <div className="projects-grid">
              <div className="project-card">
                <div className="project-image">
                  <div className="project-overlay">
                    <span className="project-category">E-Commerce</span>
                    <h3>Quantum Shop</h3>
                    <p>Platforma e-commerce nowej generacji</p>
                    <button className="project-btn">Zobacz →</button>
                  </div>
                </div>
              </div>
              <div className="project-card">
                <div className="project-image">
                  <div className="project-overlay">
                    <span className="project-category">FinTech</span>
                    <h3>BlockFlow</h3>
                    <p>Aplikacja do zarządzania kryptoaktywami</p>
                    <button className="project-btn">Zobacz →</button>
                  </div>
                </div>
              </div>
              <div className="project-card">
                <div className="project-image">
                  <div className="project-overlay">
                    <span className="project-category">HealthTech</span>
                    <h3>MediCare AI</h3>
                    <p>System diagnostyki wspomagany AI</p>
                    <button className="project-btn">Zobacz →</button>
                  </div>
                </div>
              </div>
              <div className="project-card">
                <div className="project-image">
                  <div className="project-overlay">
                    <span className="project-category">EdTech</span>
                    <h3>LearnSpace</h3>
                    <p>Platforma edukacyjna z VR</p>
                    <button className="project-btn">Zobacz →</button>
                  </div>
                </div>
              </div>
              <div className="project-card">
                <div className="project-image">
                  <div className="project-overlay">
                    <span className="project-category">IoT</span>
                    <h3>SmartCity</h3>
                    <p>System zarządzania miastem przyszłości</p>
                    <button className="project-btn">Zobacz →</button>
                  </div>
                </div>
              </div>
              <div className="project-card">
                <div className="project-image">
                  <div className="project-overlay">
                    <span className="project-category">SaaS</span>
                    <h3>TaskFlow</h3>
                    <p>Zarządzanie projektami z AI asystentem</p>
                    <button className="project-btn">Zobacz →</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="contact" className="contact">
          <div className="section-container">
            <h2 className="section-title">
              <span className="title-accent">{"//"}</span> KONTAKT
            </h2>
            <div className="contact-wrapper">
              <div className="contact-info">
                <h3>Porozmawiajmy</h3>
                <p>Masz pomysł? Powiedz nam o nim. Raz zbudujemy coś niesamowitego.</p>
                <div className="contact-details">
                  <div className="contact-item">
                    <span className="contact-icon">📧</span>
                    <span>hello@nexus.dev</span>
                  </div>
                  <div className="contact-item">
                    <span className="contact-icon">📍</span>
                    <span>Warszawa, Polska</span>
                  </div>
                  <div className="contact-item">
                    <span className="contact-icon">📱</span>
                    <span>+48 123 456 789</span>
                  </div>
                </div>
              </div>
              <form className="contact-form">
                <div className="form-group">
                  <input type="text" placeholder="Twoje imię" required />
                </div>
                <div className="form-group">
                  <input type="email" placeholder="Twój email" required />
                </div>
                <div className="form-group">
                  <textarea placeholder="Twoja wiadomość..." rows={5} required></textarea>
                </div>
                <button type="submit" className="submit-btn">
                  Wyślij wiadomość
                  <div className="btn-glow"></div>
                </button>
              </form>
            </div>
          </div>
        </section>

        <footer className="footer">
          <div className="footer-container">
            <div className="footer-logo">&lt;NEXUS/&gt;</div>
            <p>© 2026 Nexus Technologies. Wszelkie prawa zastrzeżone.</p>
            <div className="footer-links">
              <a href="#">Twitter</a>
              <a href="#">LinkedIn</a>
              <a href="#">GitHub</a>
            </div>
          </div>
        </footer>
      </main>
    </>
  );
}