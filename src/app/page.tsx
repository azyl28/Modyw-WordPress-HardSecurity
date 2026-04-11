"use client";

import { useState } from "react";

export default function Home() {
  const [formData, setFormData] = useState({ name: "", email: "", message: "" });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
  };

  return (
    <main className="main">
      {/* Navigation */}
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
            <a href="#home" className="nav-link">Home</a>
            <a href="#services" className="nav-link">Services</a>
            <a href="#about" className="nav-link">About</a>
            <a href="#why-us" className="nav-link">Why Us</a>
            <a href="#contact" className="nav-link">Contact</a>
          </div>
          <a href="#contact" className="nav-cta">Get Started</a>
        </div>
      </nav>

      {/* Hero Section */}
      <section id="home" className="hero">
        <div className="hero-image">
          <div className="hero-overlay"></div>
        </div>
        <div className="hero-content">
          <div className="hero-badge">
            <span className="badge-dot"></span>
            Enterprise Cyber Security Solutions
          </div>
          <h1 className="hero-title">
            Protecting Your Digital
            <span className="highlight"> Infrastructure</span>
          </h1>
          <p className="hero-subtitle">
            We deliver comprehensive cybersecurity services that safeguard your business against evolving threats. 
            Trust the experts who protect leading enterprises.
          </p>
          <div className="hero-buttons">
            <a href="#contact" className="btn-primary">Schedule Consultation</a>
            <a href="#services" className="btn-secondary">Explore Services</a>
          </div>
          <div className="hero-stats">
            <div className="stat-item">
              <span className="stat-number">500+</span>
              <span className="stat-label">Companies Protected</span>
            </div>
            <div className="stat-divider"></div>
            <div className="stat-item">
              <span className="stat-number">15+</span>
              <span className="stat-label">Years Experience</span>
            </div>
            <div className="stat-divider"></div>
            <div className="stat-item">
              <span className="stat-number">24/7</span>
              <span className="stat-label">Security Monitoring</span>
            </div>
          </div>
        </div>
        <div className="scroll-indicator">
          <div className="mouse">
            <div className="wheel"></div>
          </div>
        </div>
      </section>

      {/* Services Section */}
      <section id="services" className="services">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">WHAT WE DO</span>
            <h2 className="section-title">
              Comprehensive Security<br />
              <span className="highlight">Solutions</span>
            </h2>
            <p className="section-desc">
              From threat detection to incident response, we provide end-to-end cybersecurity services tailored to your organization&apos;s needs.
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
              <h3>Security Audits</h3>
              <p>Thorough evaluation of your IT infrastructure identifying vulnerabilities and providing actionable recommendations.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 24L20 12L32 24L20 36L8 24Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                  <path d="M32 24H44" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                </svg>
              </div>
              <h3>Penetration Testing</h3>
              <p>Simulated cyberattacks to identify weaknesses before real threats can exploit them. Ethical hacking at its finest.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="8" y="16" width="32" height="20" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 16V12C16 9.79086 17.7909 8 20 8H28C30.2091 8 32 9.79086 32 12V16" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="24" cy="26" r="4" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Cloud Security</h3>
              <p>Secure your cloud infrastructure across AWS, Azure, and GCP. Migration, configuration, and continuous monitoring.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M24 20V32" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 26H32" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Identity & Access</h3>
              <p>IAM solutions and Zero Trust architecture ensuring the right people have access to the right resources.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 8L28 18H40L30 26L34 36L24 28L14 36L18 26L8 18H20L24 8Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                </svg>
              </div>
              <h3>Threat Intelligence</h3>
              <p>Proactive threat hunting and intelligence gathering to stay ahead of emerging cyber threats.</p>
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
              <h3>Incident Response</h3>
              <p>Rapid deployment when breaches occur. Minimize damage and restore normal operations quickly.</p>
            </div>
          </div>
        </div>
      </section>

      {/* About Section */}
      <section id="about" className="about">
        <div className="container">
          <div className="about-wrapper">
            <div className="about-image">
              <div className="image-wrapper">
                <div className="image-placeholder">
                  <div className="image-scene">
                    <div className="server-rack"></div>
                    <div className="monitor-glow"></div>
                  </div>
                </div>
                <div className="about-experience">
                  <span className="exp-number">15</span>
                  <span className="exp-label">Years of Excellence</span>
                </div>
              </div>
            </div>
            <div className="about-content">
              <span className="section-tag">WHO WE ARE</span>
              <h2 className="section-title">
                Dedicated to Your<br />
                <span className="highlight">Security</span>
              </h2>
              <p className="about-text">
                SecureTech is a leading cybersecurity firm established in 2011. We specialize in protecting businesses 
                from the ever-evolving landscape of digital threats. Our team of certified security professionals 
                combines deep technical expertise with strategic insight to deliver solutions that truly work.
              </p>
              <p className="about-text">
                We believe in building long-term partnerships with our clients. Every organization has unique security 
                needs, and we tailor our approach to meet those specific requirements. Our methodology combines 
                industry best practices with cutting-edge technology.
              </p>
              <div className="about-stats">
                <div className="about-stat">
                  <span className="about-stat-number">50+</span>
                  <span className="about-stat-label">Security Experts</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">200+</span>
                  <span className="about-stat-label">Enterprise Clients</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">99%</span>
                  <span className="about-stat-label">Client Retention</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Why Choose Us */}
      <section id="why-us" className="why-us">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">WHY CHOOSE US</span>
            <h2 className="section-title">
              Excellence in Every<br />
              <span className="highlight">Detail</span>
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
              <h3>Round-the-Clock Support</h3>
              <p>Our Security Operations Center monitors your systems 24/7, ensuring immediate response to any threats.</p>
            </div>
            <div className="feature-item">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 24C8 15.1634 15.1634 8 24 8C32.8366 8 40 15.1634 40 24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <path d="M40 24C40 32.8366 32.8366 40 24 40C15.1634 40 8 32.8366 8 24" stroke="#66CCFF" strokeWidth="2" strokeLinecap="round"/>
                  <circle cx="24" cy="24" r="6" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Advanced Technology</h3>
              <p>We leverage AI-powered tools and machine learning for proactive threat detection and prevention.</p>
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
              <h3>Clear Reporting</h3>
              <p>Receive detailed, actionable reports that help you understand your security posture and make informed decisions.</p>
            </div>
            <div className="feature-item">
              <div className="feature-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4L28 16H42L30 24L36 36L24 28L12 36L18 24L6 16H20L24 4Z" stroke="#66CCFF" strokeWidth="2" strokeLinejoin="round"/>
                </svg>
              </div>
              <h3>Industry Recognition</h3>
              <p>Recognized by leading analysts and certified by major security vendors for excellence in cybersecurity.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Projects / Experience */}
      <section id="projects" className="projects">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">OUR TRACK RECORD</span>
            <h2 className="section-title">
              Trusted by Industry<br />
              <span className="highlight">Leaders</span>
            </h2>
          </div>
          <div className="projects-grid">
            <div className="project-card">
              <div className="project-img">
                <div className="project-visual">
                  <div className="building-mockup"></div>
                </div>
                <span className="project-type">Financial Services</span>
              </div>
              <div className="project-info">
                <h3>National Bank Corp</h3>
                <p>Complete infrastructure security overhaul, real-time threat monitoring, and compliance management for 500+ branches.</p>
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
                  <div className="building-mockup"></div>
                </div>
                <span className="project-type">Healthcare</span>
              </div>
              <div className="project-info">
                <h3>MedCare Systems</h3>
                <p>HIPAA-compliant security infrastructure protecting sensitive patient data across 12 hospitals.</p>
                <div className="project-tags">
                  <span>HIPAA</span>
                  <span>Encryption</span>
                  <span>IAM</span>
                </div>
              </div>
            </div>
            <div className="project-card">
              <div className="project-img">
                <div className="project-visual">
                  <div className="building-mockup"></div>
                </div>
                <span className="project-type">Manufacturing</span>
              </div>
              <div className="project-info">
                <h3>Industrial Tech Group</h3>
                <p>OT security implementation protecting manufacturing systems and SCADA infrastructure.</p>
                <div className="project-tags">
                  <span>OT Security</span>
                  <span>SCADA</span>
                  <span>Network</span>
                </div>
              </div>
            </div>
            <div className="project-card">
              <div className="project-img">
                <div className="project-visual">
                  <div className="building-mockup"></div>
                </div>
                <span className="project-type">Retail</span>
              </div>
              <div className="project-info">
                <h3>GlobalRetail Inc</h3>
                <p>E-commerce platform security securing 2M+ daily transactions across 200 stores.</p>
                <div className="project-tags">
                  <span>PCI-DSS</span>
                  <span>API Security</span>
                  <span>Cloud</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Banner */}
      <section className="cta-banner">
        <div className="cta-pattern"></div>
        <div className="container">
          <div className="cta-content">
            <h2>Ready to Strengthen Your Security?</h2>
            <p>Schedule a free consultation with our security experts and discover how we can protect your business.</p>
            <a href="#contact" className="btn-primary">Request Free Consultation</a>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="contact">
        <div className="container">
          <div className="contact-wrapper">
            <div className="contact-info">
              <span className="section-tag">GET IN TOUCH</span>
              <h2 className="section-title">
                Let&apos;s Discuss Your<br />
                <span className="highlight">Security Needs</span>
              </h2>
              <p className="contact-desc">
                Whether you need a comprehensive security assessment or have questions about our services, 
                                we&apos;re here to help. Fill out the form and our team will reach out within 24 hours.
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
                    <span className="contact-value">contact@securetech.com</span>
                  </div>
                </div>
                <div className="contact-item">
                  <div className="contact-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 4H9L11 8L8.5 10C9.5 12.5 11.5 14.5 14 15.5L16 13H20L21 17C19.5 19.5 16.5 20.5 14 19.5C7 16.5 3 10 5 4Z" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    </svg>
                  </div>
                  <div>
                    <span className="contact-label">Phone</span>
                    <span className="contact-value">+1 (555) 123-4567</span>
                  </div>
                </div>
                <div className="contact-item">
                  <div className="contact-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2Z" stroke="#66CCFF" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    </svg>
                  </div>
                  <div>
                    <span className="contact-label">Headquarters</span>
                    <span className="contact-value">San Francisco, CA</span>
                  </div>
                </div>
              </div>
            </div>
            <form className="contact-form" onSubmit={handleSubmit}>
              <div className="form-row">
                <div className="form-group">
                  <label>Full Name</label>
                  <input type="text" placeholder="John Smith" required />
                </div>
                <div className="form-group">
                  <label>Email Address</label>
                  <input type="email" placeholder="john@company.com" required />
                </div>
              </div>
              <div className="form-group">
                <label>Subject</label>
                <select>
                  <option value="">Select a topic</option>
                  <option value="audit">Security Audit</option>
                  <option value="pentest">Penetration Testing</option>
                  <option value="managed">Managed Security</option>
                  <option value="other">Other Inquiry</option>
                </select>
              </div>
              <div className="form-group">
                <label>Message</label>
                <textarea placeholder="Tell us about your security needs..." rows={5} required></textarea>
              </div>
              <button type="submit" className="btn-primary">Send Message</button>
            </form>
          </div>
        </div>
      </section>

      {/* Footer */}
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
              <p>Enterprise cybersecurity solutions protecting businesses since 2011. Your security is our priority.</p>
            </div>
            <div className="footer-links">
              <h4>Quick Links</h4>
              <a href="#home">Home</a>
              <a href="#services">Services</a>
              <a href="#about">About</a>
              <a href="#contact">Contact</a>
            </div>
            <div className="footer-links">
              <h4>Services</h4>
              <a href="#services">Security Audits</a>
              <a href="#services">Penetration Testing</a>
              <a href="#services">Cloud Security</a>
              <a href="#services">Incident Response</a>
            </div>
            <div className="footer-social">
              <h4>Connect</h4>
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
            <p>&copy; 2026 SecureTech Inc. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </main>
  );
}