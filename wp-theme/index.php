<?php
/**
 * Main template for HardSecurity Theme v2.0
 * @package HardSecurity
 */
get_header();
?>

<!-- HERO SECTION -->
<?php if (get_theme_mod('hardsecurity_show_hero', true)): ?>
<div class="hero">
    <div class="hero-bg">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>
    <div class="container">
        <div class="hero-container">
            <div class="hero-content" data-aos="fade-right">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Profesjonalne usługi IT i cyberbezpieczeństwa
                </div>
                <h1 class="hero-title">
                    <?php echo get_theme_mod('hardsecurity_hero_title', 'Twoja firma zasługuje na najlepszą ochronę'); ?>
                </h1>
                <p class="hero-subtitle">
                    <?php echo get_theme_mod('hardsecurity_hero_subtitle', 'Kompleksowe usługi informatyczne dla firm i klientów indywidualnych.'); ?>
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Umów konsultację</a>
                    <a href="#pricing" class="btn btn-secondary">Zobacz cennik</a>
                </div>
            </div>
            <div class="hero-visual" data-aos="fade-left">
                <div class="hero-card">
                    <svg viewBox="0 0 80 80" fill="none">
                        <rect x="10" y="20" width="60" height="45" rx="4" stroke="#66CCFF" stroke-width="2"/>
                        <path d="M25 35h30M25 45h20" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="40" cy="28" r="8" stroke="#66CCFF" stroke-width="2"/>
                    </svg>
                    <div class="hero-card-stat">
                        <span class="stat-value"><?php echo get_theme_mod('hardsecurity_stats_number', '500+'); ?></span>
                        <span class="stat-desc"><?php echo get_theme_mod('hardsecurity_stats_label', 'Zadowolonych klientów'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- SERVICES SECTION -->
<?php if (get_theme_mod('hardsecurity_show_services', true)): ?>
<section id="services" class="section section-bg">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">CO ROBIMY</span>
            <h2 class="section-title"><?php echo get_theme_mod('hardsecurity_services_title', 'Kompleksowe usługi informatyczne'); ?></h2>
            <p class="section-desc"><?php echo get_theme_mod('hardsecurity_services_subtitle', ''); ?></p>
        </div>
        <div class="services-grid">
            <?php 
            $services = array(
                array('title' => 'Cyberbezpieczeństwo', 'desc' => 'Kompleksowa ochrona przed cyberzagrożeniami.'),
                array('title' => 'Sieci Komputerowe', 'desc' => 'Profesjonalna konfiguracja sieci.'),
                array('title' => 'Serwis', 'desc' => 'Naprawa sprzętu komputerowego.'),
                array('title' => 'Reinstalacja systemu', 'desc' => 'Konfiguracja systemów.'),
                array('title' => 'Konfiguracja Sprzętu', 'desc' => 'Optymalizacja wydajności.'),
                array('title' => 'Programowanie', 'desc' => 'Rozwiązania programistyczne.'),
            );
            foreach ($services as $i => $service): ?>
            <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                <div class="service-icon"><svg viewBox="0 0 48 48" fill="none"><path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" stroke-width="2"/></svg></div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ARTICLES SECTION -->
<?php if (get_theme_mod('hardsecurity_show_articles', true)): ?>
<section id="articles" class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">BLOG</span>
            <h2 class="section-title"><?php echo get_theme_mod('hardsecurity_articles_title', 'Najnowsze artykuły'); ?></h2>
        </div>
        <div class="articles-grid">
            <?php
            $count = get_theme_mod('hardsecurity_articles_count', 3);
            $posts = get_posts(array('numberposts' => $count, 'post_status' => 'publish'));
            foreach ($posts as $i => $post): setup_postdata($post);
            ?>
            <article class="article-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                <?php if (has_post_thumbnail()): ?>
                <div class="article-image"><?php the_post_thumbnail('hardsecurity-blog'); ?></div>
                <?php endif; ?>
                <div class="article-content">
                    <div class="article-meta"><?php echo get_the_date('d.m.Y'); ?></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-link">Czytaj więcej →</a>
                </div>
            </article>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- PARTNERS SECTION -->
<?php if (get_theme_mod('hardsecurity_show_partners', true)): ?>
<section id="partners" class="section section-bg">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">PARTNERZY</span>
            <h2 class="section-title"><?php echo get_theme_mod('hardsecurity_partners_title', 'Zaufali nam'); ?></h2>
        </div>
        <div class="partners-grid" data-aos="fade-up">
            <div class="partner-logo">LOGO 1</div>
            <div class="partner-logo">LOGO 2</div>
            <div class="partner-logo">LOGO 3</div>
            <div class="partner-logo">LOGO 4</div>
            <div class="partner-logo">LOGO 5</div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- STATS SECTION -->
<?php if (get_theme_mod('hardsecurity_show_stats', true)): ?>
<section id="stats" class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">LICZBY</span>
            <h2 class="section-title"><?php echo get_theme_mod('hardsecurity_stats_title', 'Nasze osiągnięcia'); ?></h2>
        </div>
        <div class="stats-grid">
            <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                <span class="stat-number"><?php echo get_theme_mod('hardsecurity_stat' . $i . '_number', '500+'); ?></span>
                <span class="stat-label"><?php echo get_theme_mod('hardsecurity_stat' . $i . '_label', 'Klientów'); ?></span>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- TESTIMONIALS SECTION -->
<?php if (get_theme_mod('hardsecurity_show_testimonials', true)): ?>
<section id="testimonials" class="section section-bg">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">OPINIE</span>
            <h2 class="section-title"><?php echo get_theme_mod('hardsecurity_testimonials_title', 'Co mówią o nas klienci'); ?></h2>
        </div>
        <div class="testimonials-grid">
            <?php
            $testimonials = array(
                array('quote' => 'Profesjonalne podejście i szybka reakcja na awarię.', 'author' => 'Jan K.', 'company' => 'Firma 1'),
                array('quote' => 'Najlepszy serwis IT z jakim mieliśmy do czynienia.', 'author' => 'Anna N.', 'company' => 'Firma 2'),
                array('quote' => 'Zaufaliśmy im naszą infrastrukturę i nie zawiedliśmy się.', 'author' => 'Michał W.', 'company' => 'Firma 3'),
            );
            foreach ($testimonials as $i => $t): ?>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                <p class="quote">"<?php echo $t['quote']; ?>"</p>
                <div class="author">
                    <strong><?php echo $t['author']; ?></strong>
                    <span><?php echo $t['company']; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ABOUT SECTION -->
<?php if (get_theme_mod('hardsecurity_show_about', true)): ?>
<section id="about" class="section">
    <div class="container">
        <div class="about-wrapper">
            <div class="about-image" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80" alt="Cyberbezpieczeństwo">
            </div>
            <div class="about-content" data-aos="fade-left">
                <span class="section-tag">KIM JESTEŚMY</span>
                <h2 class="section-title">Poświęceni dla <span class="highlight">Twojego bezpieczeństwa</span></h2>
                <p><strong>Informatyka jest naszą pasją.</strong> Tworzymy rozwiązania, które łączą nowoczesne technologie z praktycznymi potrzebami.</p>
                <p>Naszą misją jest dostarczanie usług informatycznych, które zwiększają komfort pracy i bezpieczeństwo danych.</p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CONTACT SECTION -->
<section id="contact" class="section section-bg">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info" data-aos="fade-right">
                <span class="section-tag">KONTAKT</span>
                <h2 class="section-title">Porozmawiajmy o <span class="highlight">Twoich potrzebach</span></h2>
                <div class="contact-details">
                    <p>📧 <?php echo get_theme_mod('hardsecurity_email', 'kontakt@hardsecurity.pl'); ?></p>
                    <p>📞 <?php echo get_theme_mod('hardsecurity_phone', '+48 123 456 789'); ?></p>
                </div>
            </div>
            <form class="contact-form" data-aos="fade-left">
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
                    <textarea rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
            </form>
        </div>
    </div>
</section>

<!-- Animations JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('[data-aos]').forEach(el => observer.observe(el));
});
</script>

<?php
get_footer();