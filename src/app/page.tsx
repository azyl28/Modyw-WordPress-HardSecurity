export default function Home() {
  return (
    <main className="min-h-screen bg-black">
      <div className="container">
        <nav className="nav">
          <span className="logo">&lt;CODE/&gt;</span>
          <div className="nav-links">
            <a href="#">Start</a>
            <a href="#">O nas</a>
            <a href="#">Projekty</a>
            <a href="#">Kontakt</a>
          </div>
        </nav>

        <section className="hero">
          <h1>
            <span className="glitch" data-text="WITAJ W PRZYSZŁOŚCI">WITAJ W PRZYSZŁOŚCI</span>
          </h1>
          <p className="subtitle">Tworzymy rewolucyjne rozwiązania IT</p>
          <div className="cta-group">
            <button className="btn-primary">Rozpocznij</button>
            <button className="btn-secondary">Dowiedz się więcej</button>
          </div>
        </section>

        <section className="features">
          <div className="feature-card">
            <div className="icon">⚡</div>
            <h3>Szybkie</h3>
            <p>Optymalizacja wydajności w czasie rzeczywistym</p>
          </div>
          <div className="feature-card">
            <div className="icon">🔒</div>
            <h3>Bezpieczne</h3>
            <p> Najnowsze standardy szyfrowania </p>
          </div>
          <div className="feature-card">
            <div className="icon">🚀</div>
            <h3>Innowacyjne</h3>
            <p>Technologie przyszłości już dziś</p>
          </div>
        </section>

        <footer className="footer">
          <p>© 2026 | Kod &lt;/&gt; z pasją</p>
        </footer>
      </div>
    </main>
  );
}