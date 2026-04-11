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
          <a href="#hero" className="logo">
            <svg className="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
              <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
            </svg>
            <span className="logo-text">SecureTech</span>
          </a>
          <div className="nav-menu">
            <a href="#hero" className="nav-link">Home</a>
            <a href="#services" className="nav-link">Services</a>
            <a href="#about" className="nav-link">About</a>
            <a href="#team" className="nav-link">Team</a>
            <a href="#contact" className="nav-link">Contact</a>
          </div>
          <a href="#contact" className="nav-cta">Get Started</a>
        </div>
      </nav>

      {/* Hero Section */}
      <section id="hero" className="hero">
        <div className="hero-image">
          <div className="hero-overlay"></div>
        </div>
        <div className="hero-content">
          <div className="hero-badge">
            <span className="badge-dot"></span>
            Enterprise IT & Security Solutions
          </div>
          <h1 className="hero-title">
            Your Trusted Partner in<br />
            <span className="highlight">IT Excellence</span>
          </h1>
          <p className="hero-subtitle">
            We deliver comprehensive IT services and cybersecurity solutions that empower your business. 
            From network infrastructure to software development — we handle it all.
          </p>
          <div className="hero-buttons">
            <a href="#contact" className="btn-primary">Contact Us</a>
            <a href="#services" className="btn-secondary">Our Services</a>
          </div>
        </div>
        <div className="scroll-indicator">
          <div className="mouse">
            <div className="wheel"></div>
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section id="stats" className="stats">
        <div className="container">
          <div className="stats-grid">
            <div className="stat-card">
              <span className="stat-number">500+</span>
              <span className="stat-label">Satisfied Clients</span>
            </div>
            <div className="stat-card">
              <span className="stat-number">1200+</span>
              <span className="stat-label">Projects Completed</span>
            </div>
            <div className="stat-card">
              <span className="stat-number">98%</span>
              <span className="stat-label">Success Rate</span>
            </div>
            <div className="stat-card">
              <span className="stat-number">24/7</span>
              <span className="stat-label">Support Available</span>
            </div>
          </div>
        </div>
      </section>

      {/* Services Section */}
      <section id="services" className="services">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">WHAT WE OFFER</span>
            <h2 className="section-title">
              Complete IT Solutions<br />
              <span className="highlight">For Your Business</span>
            </h2>
            <p className="section-desc">
              From cybersecurity to software development, we provide end-to-end IT services 
              tailored to your business needs.
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
              <h3>Cybersecurity</h3>
              <p>Advanced protection for your digital assets. Threat detection, penetration testing, and security audits.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="16" r="8" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M8 40V32C8 26.477 12.477 22 18 22H30C35.523 22 40 26.477 40 32V40" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M16 22V18C16 14.686 18.686 12 22 12H26C29.314 12 32 14.686 32 18V22" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>Computer Networks</h3>
              <p>Design, implementation, and maintenance of robust network infrastructure for your enterprise.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="6" y="10" width="36" height="28" rx="4" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M14 20H34" stroke="#66CCFF" strokeWidth="2"/>
                  <path d="M14 28H28" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>IT Service & Repair</h3>
              <p>Fast and reliable technical support. Hardware diagnostics, repairs, and preventive maintenance.</p>
            </div>
            <div className="service-card">
              <div className="service-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="8" y="6" width="32" height="14" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <rect x="12" y="24" width="24" height="18" rx="2" stroke="#66CCFF" strokeWidth="2"/>
                  <circle cx="24" cy="33" r="4" stroke="#66CCFF" strokeWidth="2"/>
                </svg>
              </div>
              <h3>System Reinstallation</h3>
              <p>Professional OS installation and configuration. Clean setups, upgrades, and system optimization.</p>
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
              <h3>Hardware Configuration</h3>
              <p>Custom hardware setups and configurations. Server installation, workstation optimization, and more.</p>
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
              <h3>Software Development</h3>
              <p>Custom software solutions. Web apps, mobile apps, enterprise software, and API development.</p>
            </div>
          </div>
        </div>
      </section>

      {/* Skills Section */}
      <section id="skills" className="skills">
        <div className="container">
          <div className="skills-wrapper">
            <div className="skills-content">
              <span className="section-tag">OUR EXPERTISE</span>
              <h2 className="section-title">
                Technical Excellence<br />
                <span className="highlight">In Every Detail</span>
              </h2>
              <p className="skills-desc">
                Our team combines years of experience with cutting-edge technology to deliver 
                solutions that drive real business results.
              </p>
              <div className="skills-list">
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">IT Support & Maintenance</span>
                    <span className="skill-percent">95%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "95%" }}></div>
                  </div>
                </div>
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Cybersecurity Solutions</span>
                    <span className="skill-percent">92%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "92%" }}></div>
                  </div>
                </div>
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Network Infrastructure</span>
                    <span className="skill-percent">90%</span>
                  </div>
                  <div className="skill-bar">
                    <div className="skill-fill" style={{ width: "90%" }}></div>
                  </div>
                </div>
                <div className="skill-item">
                  <div className="skill-header">
                    <span className="skill-name">Web Development</span>
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
                  alt="IT Team Working" 
                />
                <div className="image-overlay"></div>
              </div>
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
                  <img 
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&q=80" 
                    alt="Modern Office" 
                  />
                  <div className="image-overlay"></div>
                </div>
                <div className="about-experience">
                  <span className="exp-number">15</span>
                  <span className="exp-label">Years of Excellence</span>
                </div>
              </div>
            </div>
            <div className="about-content">
              <span className="section-tag">ABOUT US</span>
              <h2 className="section-title">
                Your Reliable IT<br />
                <span className="highlight">Partner</span>
              </h2>
              <p className="about-text">
                SecureTech was founded in 2011 with a mission to provide businesses with 
                reliable, professional IT services. Over the years, we&apos;ve grown into a 
                trusted partner for companies of all sizes.
              </p>
              <p className="about-text">
                Our team consists of certified professionals passionate about technology. 
                We believe in building long-term relationships with our clients, providing 
                personalized solutions that meet their unique needs.
              </p>
              <div className="about-stats">
                <div className="about-stat">
                  <span className="about-stat-number">50+</span>
                  <span className="about-stat-label">IT Experts</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">500+</span>
                  <span className="about-stat-label">Happy Clients</span>
                </div>
                <div className="about-stat">
                  <span className="about-stat-number">15</span>
                  <span className="about-stat-label">Years Experience</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Team Section */}
      <section id="team" className="team">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">MEET THE TEAM</span>
            <h2 className="section-title">
              Our Expert<br />
              <span className="highlight">Professionals</span>
            </h2>
            <p className="section-desc">
              A team of dedicated IT professionals committed to delivering excellence.
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
                <h3>Michael Chen</h3>
                <span className="team-role">CEO & Founder</span>
                <p>20+ years in IT leadership. Expert in cybersecurity strategy and business development.</p>
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
                <h3>Sarah Johnson</h3>
                <span className="team-role">Chief Technology Officer</span>
                <p>Cybersecurity specialist. CISSP certified with extensive experience in enterprise security.</p>
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
                <h3>David Williams</h3>
                <span className="team-role">Lead Developer</span>
                <p>Full-stack expert. Passionate about creating efficient, scalable software solutions.</p>
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
                <h3>Emily Rodriguez</h3>
                <span className="team-role">Network Engineer</span>
                <p>CCIE certified. Specializes in enterprise network design and infrastructure management.</p>
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
            <h2>Ready to Transform Your IT?</h2>
            <p>Let&apos;s discuss how we can help your business grow with reliable technology solutions.</p>
            <a href="#contact" className="btn-primary">Get Started Today</a>
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
                Let&apos;s Work<br />
                <span className="highlight">Together</span>
              </h2>
              <p className="contact-desc">
                Have a project in mind? We&apos;d love to hear from you. Our team is ready to help 
                transform your ideas into reality.
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
                    <span className="contact-label">Location</span>
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
                  <option value="it">IT Services</option>
                  <option value="security">Cybersecurity</option>
                  <option value="development">Software Development</option>
                  <option value="support">Technical Support</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div className="form-group">
                <label>Message</label>
                <textarea placeholder="Tell us about your project..." rows={5} required></textarea>
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
              <a href="#hero" className="logo">
                <svg className="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" strokeWidth="2" fill="none"/>
                  <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
                </svg>
                <span className="logo-text">SecureTech</span>
              </a>
              <p>Professional IT services and cybersecurity solutions. Your trusted technology partner since 2011.</p>
            </div>
            <div className="footer-links">
              <h4>Quick Links</h4>
              <a href="#hero">Home</a>
              <a href="#services">Services</a>
              <a href="#about">About</a>
              <a href="#contact">Contact</a>
            </div>
            <div className="footer-links">
              <h4>Services</h4>
              <a href="#services">Cybersecurity</a>
              <a href="#services">IT Support</a>
              <a href="#services">Networks</a>
              <a href="#services">Development</a>
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