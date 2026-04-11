<?php
/**
 * The main template file
 *
 * @package HardSecurity
 */

get_header();

$use_slider = get_theme_mod('hardsecurity_show_hero_slider', false);
$use_animated_bg = get_theme_mod('hardsecurity_animated_bg', false);
?>

<div class="hero">
    <?php if ($use_animated_bg): ?>
    <div class="hero-bg animated-bg">
        <canvas id="animated-canvas"></canvas>
        <div class="hero-gradient"></div>
    </div>
    <?php else: ?>
    <div class="hero-bg">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>
    <?php endif; ?>
    
    <?php if ($use_slider): ?>
    <div class="hero-slider">
        <div class="hero-slides" id="hero-slides">
            <div class="hero-slide">
                <div class="container">
                    <div class="hero-container">
                        <div class="hero-content">
                            <div class="hero-badge">
                                <span class="badge-dot"></span>
                                Profesjonalne usługi IT i cyberbezpieczeństwa
                            </div>
                            <h1 class="hero-title">
                                <?php echo get_theme_mod('hardsecurity_slide1_title', 'Twoja firma zasługuje na najlepszą ochronę'); ?>
                            </h1>
                            <p class="hero-subtitle">
                                <?php echo get_theme_mod('hardsecurity_slide1_subtitle', 'Kompleksowe usługi informatyczne dla firm i klientów indywidualnych.'); ?>
                            </p>
                            <div class="hero-buttons">
                                <a href="#contact" class="btn btn-primary">Umów konsultację</a>
                                <a href="#pricing" class="btn btn-secondary">Zobacz cennik</a>
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
                                    <span class="stat-value"><?php echo get_theme_mod('hardsecurity_stats_number', '500+'); ?></span>
                                    <span class="stat-desc"><?php echo get_theme_mod('hardsecurity_stats_label', 'Zadowolonych klientów'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="hero-container">
                        <div class="hero-content">
                            <div class="hero-badge">
                                <span class="badge-dot"></span>
                                Cyberbezpieczeństwo
                            </div>
                            <h1 class="hero-title">
                                <?php echo get_theme_mod('hardsecurity_slide2_title', 'Bezpieczeństwo Twoich danych'); ?>
                            </h1>
                            <p class="hero-subtitle">
                                <?php echo get_theme_mod('hardsecurity_slide2_subtitle', 'Profesjonalne audyty bezpieczeństwa i ochrona przed cyberzagrożeniami.'); ?>
                            </p>
                            <div class="hero-buttons">
                                <a href="#contact" class="btn btn-primary">Umów konsultację</a>
                                <a href="#services" class="btn btn-secondary">Zobacz usługi</a>
                            </div>
                        </div>
                        <div class="hero-visual">
                            <div class="hero-card">
                                <div class="hero-card-icon">
                                    <svg viewBox="0 0 80 80" fill="none">
                                        <path d="M40 10L10 25V45L40 60L70 45V25L40 10Z" stroke="#66CCFF" stroke-width="2"/>
                                        <path d="M40 30V50" stroke="#66CCFF" stroke-width="2"/>
                                        <path d="M25 40H55" stroke="#66CCFF" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="hero-card-stat">
                                    <span class="stat-value">100%</span>
                                    <span class="stat-desc">Bezpieczne systemy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="hero-container">
                        <div class="hero-content">
                            <div class="hero-badge">
                                <span class="badge-dot"></span>
                                Wsparcie 24/7
                            </div>
                            <h1 class="hero-title">
                                <?php echo get_theme_mod('hardsecurity_slide3_title', 'Wsparcie IT 24/7'); ?>
                            </h1>
                            <p class="hero-subtitle">
                                <?php echo get_theme_mod('hardsecurity_slide3_subtitle', 'Jesteśmy dostępni całą dobę, 7 dni w tygodniu.'); ?>
                            </p>
                            <div class="hero-buttons">
                                <a href="#contact" class="btn btn-primary">Kontakt 24/7</a>
                                <a href="#about" class="btn btn-secondary">O nas</a>
                            </div>
                        </div>
                        <div class="hero-visual">
                            <div class="hero-card">
                                <div class="hero-card-icon">
                                    <svg viewBox="0 0 80 80" fill="none">
                                        <circle cx="40" cy="40" r="25" stroke="#66CCFF" stroke-width="2"/>
                                        <path d="M40 25V40L50 45" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="hero-card-stat">
                                    <span class="stat-value">24/7</span>
                                    <span class="stat-desc">Ciągłe wsparcie</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-nav" id="hero-slider-nav">
            <button class="hero-slider-dot active" data-slide="0"></button>
            <button class="hero-slider-dot" data-slide="1"></button>
            <button class="hero-slider-dot" data-slide="2"></button>
        </div>
    </div>
    <?php else: ?>
    <div class="container">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    <?php echo get_theme_mod('hardsecurity_hero_badge', 'Profesjonalne usługi IT i cyberbezpieczeństwa'); ?>
                </div>
                <h1 class="hero-title">
                    <?php echo get_theme_mod('hardsecurity_hero_title', 'Twoja firma zasługuje na najlepszą ochronę'); ?>
                </h1>
                <p class="hero-subtitle">
                    <?php echo get_theme_mod('hardsecurity_hero_subtitle', 'Kompleksowe usługi informatyczne dla firm i klientów indywidualnych. Bezpieczeństwo, niezawodność i profesjonalna obsługa.'); ?>
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Umów konsultację</a>
                    <a href="#pricing" class="btn btn-secondary">Zobacz cennik</a>
                </div>
                <?php if (get_theme_mod('hardsecurity_show_hero_stats', true)): ?>
                <div class="hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Bezpieczeństwo danych</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                        <span>Szybka realizacja</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span>Gwarancja jakości</span>
                    </div>
                </div>
                <?php endif; ?>
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
                        <span class="stat-value"><?php echo get_theme_mod('hardsecurity_stats_number', '500+'); ?></span>
                        <span class="stat-desc"><?php echo get_theme_mod('hardsecurity_stats_label', 'Zadowolonych klientów'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php if ($use_animated_bg): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('animated-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    
    let width, height;
    let particles = [];
    
    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    }
    
    function createParticles() {
        particles = [];
        const count = Math.floor(width * height / 15000);
        for (let i = 0; i < count; i++) {
            particles.push({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                size: Math.random() * 2 + 1,
                alpha: Math.random() * 0.5 + 0.1
            });
        }
    }
    
    function animate() {
        ctx.clearRect(0, 0, width, height);
        
        particles.forEach(p => {
            p.x += p.vx;
            p.y += p.vy;
            
            if (p.x < 0) p.x = width;
            if (p.x > width) p.x = 0;
            if (p.y < 0) p.y = height;
            if (p.y > height) p.y = 0;
            
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(102, 204, 255, ${p.alpha})`;
            ctx.fill();
        });
        
        particles.forEach((p1, i) => {
            particles.slice(i + 1).forEach(p2 => {
                const dx = p1.x - p2.x;
                const dy = p1.y - p2.y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 150) {
                    ctx.beginPath();
                    ctx.moveTo(p1.x, p1.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.strokeStyle = `rgba(102, 204, 255, ${0.1 * (1 - dist / 150)})`;
                    ctx.stroke();
                }
            });
        });
        
        requestAnimationFrame(animate);
    }
    
    resize();
    createParticles();
    animate();
    
    window.addEventListener('resize', function() {
        resize();
        createParticles();
    });
});
</script>
<?php endif; ?>

<?php if ($use_slider): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.getElementById('hero-slides');
    const dots = document.querySelectorAll('.hero-slider-dot');
    let currentSlide = 0;
    const totalSlides = 3;
    const speed = <?php echo get_theme_mod('hardsecurity_slider_speed', 5000); ?>;
    let autoSlide;
    
    function goToSlide(n) {
        currentSlide = n;
        slides.style.transform = `translateX(-${n * 100}%)`;
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === n);
        });
    }
    
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            goToSlide(parseInt(dot.dataset.slide));
            clearInterval(autoSlide);
            autoSlide = setInterval(() => goToSlide((currentSlide + 1) % totalSlides), speed);
        });
    });
    
    autoSlide = setInterval(() => goToSlide((currentSlide + 1) % totalSlides), speed);
});
</script>
<?php endif; ?>

<?php
// Services Section
$services = array(
    array(
        'title' => 'Cyberbezpieczeństwo',
        'desc' => 'Kompleksowa ochrona przed cyberzagrożeniami, audyty bezpieczeństwa, wdrażanie rozwiązań ochronnych dla firm i osób prywatnych.',
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" stroke-width="2"/><path d="M24 20V32" stroke="#66CCFF" stroke-width="2"/><path d="M16 26H32" stroke="#66CCFF" stroke-width="2"/></svg>'
    ),
    array(
        'title' => 'Sieci Komputerowe',
        'desc' => 'Profesjonalna konfiguracja sieci — szybkie i bezpieczne połączenia dla Twojej firmy lub domu.',
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="16" r="8" stroke="#66CCFF" stroke-width="2"/><path d="M8 40V32C8 27.5817 11.5817 24 16 24H32C36.4183 24 40 27.5817 40 32V40" stroke="#66CCFF" stroke-width="2"/></svg>'
    ),
    array(
        'title' => 'Serwis',
        'desc' => 'Serwis Laptopów i Komputerów Naprawa, konserwacja i modernizacja sprzętu komputerowego.',
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><rect x="8" y="8" width="32" height="24" rx="3" stroke="#66CCFF" stroke-width="2"/><path d="M16 36H32" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/></svg>'
    ),
    array(
        'title' => 'Reinstalacja systemu',
        'desc' => 'Profesjonalna reinstalacja systemów operacyjnych, migracja danych, konfiguracja oprogramowania.',
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><rect x="12" y="6" width="24" height="32" rx="3" stroke="#66CCFF" stroke-width="2"/><path d="M18 14H30M18 20H30M18 26H26" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/></svg>'
    ),
    array(
        'title' => 'Konfiguracja Sprzętu',
        'desc' => 'Profesjonalna konfiguracja komputerów, sieci, urządzeń peryferyjnych. Optymalizacja wydajności.',
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L28 14H40L30 22L34 32L24 24L14 32L18 22L8 14H20L24 4Z" stroke="#66CCFF" stroke-width="2"/></svg>'
    ),
    array(
        'title' => 'Programowanie',
        'desc' => 'Projektujemy bezpieczne i wydajne rozwiązania programistyczne dla firm i osób prywatnych.',
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><path d="M8 36H40" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/><path d="M12 36V32H36V36" stroke="#66CCFF" stroke-width="2"/><path d="M16 24L22 18L28 24L34 18" stroke="#66CCFF" stroke-width="2"/></svg>'
    ),
);
?>

<section id="services" class="section section-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">CO ROBIMY</span>
            <h2 class="section-title">
                Kompleksowe usługi<br>
                <span class="highlight">informatyczne</span>
            </h2>
            <p class="section-desc">
                Oferujemy szeroki zakres usług IT dla firm i klientów indywidualnych.
            </p>
        </div>
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
            <div class="service-card">
                <div class="service-icon"><?php echo $service['icon']; ?></div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <div class="about-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="about-image">
                <div class="image-placeholder" style="border-radius: 16px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80" alt="Cyberbezpieczeństwo" style="width: 100%; display: block;">
                </div>
            </div>
            <div class="about-content">
                <span class="section-tag">KIM JESTEŚMY</span>
                <h2 class="section-title">
                    Poświęceni dla<br>
                    <span class="highlight">Twojego bezpieczeństwa</span>
                </h2>
                <p><strong>Informatyka jest naszą pasją.</strong> Tworzymy rozwiązania, które łączą nowoczesne technologie z praktycznymi potrzebami użytkowników.</p>
                <p>Naszą misją jest dostarczanie usług informatycznych, które zwiększają komfort pracy, bezpieczeństwo danych oraz efektywność działania firm.</p>
            </div>
        </div>
    </div>
</section>

if (get_theme_mod('hardsecurity_show_latest_articles', true)) {
    $articles_count = get_theme_mod('hardsecurity_latest_articles_count', 3);
    $latest_posts = get_posts(array(
        'numberposts' => $articles_count,
        'post_status' => 'publish',
    ));
    
    if (!empty($latest_posts)) {
?>
<section id="latest-articles" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">BLOG</span>
            <h2 class="section-title">
                <?php echo get_theme_mod('hardsecurity_latest_articles_title', 'Najnowsze artykuły'); ?>
            </h2>
        </div>
        <div class="articles-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <?php foreach ($latest_posts as $post): setup_postdata($post); ?>
            <article class="article-card" style="background: #12121a; border-radius: 12px; overflow: hidden; border: 1px solid rgba(102, 204, 255, 0.1);">
                <?php if (has_post_thumbnail()): ?>
                <div class="article-image" style="height: 200px; overflow: hidden;">
                    <?php the_post_thumbnail('hardsecurity-blog', array('style' => 'width:100%;height:100%;object-fit:cover;')); ?>
                </div>
                <?php endif; ?>
                <div class="article-content" style="padding: 24px;">
                    <div class="article-meta" style="font-size: 12px; color: #888; margin-bottom: 12px;">
                        <?php echo get_the_date('d.m.Y', $post); ?>
                    </div>
                    <h3 class="article-title" style="font-size: 18px; margin-bottom: 12px; color: #fff;">
                        <a href="<?php the_permalink($post); ?>" style="color: inherit; text-decoration: none;"><?php echo get_the_title($post); ?></a>
                    </h3>
                    <p class="article-excerpt" style="color: #aaa; font-size: 14px; line-height: 1.6;">
                        <?php echo get_the_excerpt($post); ?>
                    </p>
                    <a href="<?php the_permalink($post); ?>" class="btn-link" style="color: #66CCFF; text-decoration: none; font-size: 14px; display: inline-block; margin-top: 16px;">
                        Czytaj więcej →
                    </a>
                </div>
            </article>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php
    }
}
?>

<?php
// Why Choose Us Section
$benefits = array(
    array(
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="20" stroke="#66CCFF" stroke-width="2"/><path d="M16 24L22 30L32 18" stroke="#66CCFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        'title' => 'Szybka realizacja',
        'desc' => 'Rozwiązujemy problemy w najkrótszym możliwym czasie, bez kompromisów w jakości.'
    ),
    array(
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4L6 14V34L24 44L42 34V14L24 4Z" stroke="#66CCFF" stroke-width="2"/><path d="M24 20V32" stroke="#66CCFF" stroke-width="2"/><path d="M16 26H32" stroke="#66CCFF" stroke-width="2"/></svg>',
        'title' => 'Bezpieczeństwo przede wszystkim',
        'desc' => 'Stosujemy najwyższe standardy bezpieczeństwa, chroniąc Twoje dane i systemy.'
    ),
    array(
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><path d="M24 4C12.954 4 4 12.954 4 24s8.954 20 20 20 20-8.954 20-20S35.046 4 24 4z" stroke="#66CCFF" stroke-width="2"/><path d="M24 14V24L32 28" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/></svg>',
        'title' => 'Wsparcie 24/7',
        'desc' => 'Jesteśmy dostępni całą dobę, 7 dni w tygodniu. Każda awaria to dla nas priorytet.'
    ),
    array(
        'icon' => '<svg viewBox="0 0 48 48" fill="none"><rect x="8" y="12" width="32" height="24" rx="4" stroke="#66CCFF" stroke-width="2"/><path d="M16 22H32M16 28H26" stroke="#66CCFF" stroke-width="2" stroke-linecap="round"/></svg>',
        'title' => 'Przejrzyste ceny',
        'desc' => 'Brak ukrytych kosztów. Znasz cenę przed rozpoczęciem prac.'
    ),
);
?>

<section id="why-us" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">DLACZEGO MY</span>
            <h2 class="section-title">
                Powierz nam swoje<br>
                <span class="highlight">problemy IT</span>
            </h2>
        </div>
        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <?php foreach ($benefits as $benefit): ?>
            <div class="benefit-card" style="background: #12121a; padding: 30px; border-radius: 16px; border: 1px solid rgba(102, 204, 255, 0.1); text-align: center;">
                <div class="benefit-icon" style="margin-bottom: 20px;">
                    <?php echo $benefit['icon']; ?>
                </div>
                <h3 style="font-size: 18px; margin-bottom: 12px; color: #fff;"><?php echo $benefit['title']; ?></h3>
                <p style="color: #aaa; font-size: 14px; line-height: 1.6;"><?php echo $benefit['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
// Testimonials
$testimonials = array(
    array(
        'quote' => 'Profesjonalne podejście i szybka reakcja na awarię. Polecam każdemu!',
        'author' => 'Jan Kowalski',
        'company' => 'Kowalski & Co'
    ),
    array(
        'quote' => 'Najlepszy serwis IT z jakim mieliśmy do czynienia. Konkurencyjne ceny.',
        'author' => 'Anna Nowak',
        'company' => 'Nowak Tech'
    ),
    array(
        'quote' => 'Zaufaliśmy im naszą infrastrukturę i nie zawiedliśmy się ani razu.',
        'author' => 'Michał Wiśniewski',
        'company' => 'Wiśniewski Systems'
    ),
);
?>

<section id="testimonials" class="section section-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">OPINIE KLIENTÓW</span>
            <h2 class="section-title">
                Co mówią o nas<br>
                <span class="highlight">klienci</span>
            </h2>
        </div>
        <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="testimonial-card" style="background: #0a0a0f; padding: 30px; border-radius: 16px; border: 1px solid rgba(102, 204, 255, 0.1);">
                <div class="testimonial-quote" style="font-size: 16px; color: #ccc; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                    "<?php echo $testimonial['quote']; ?>"
                </div>
                <div class="testimonial-author" style="display: flex; align-items: center; gap: 12px;">
                    <div class="author-avatar" style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #66CCFF, #FF6B9D); display: flex; align-items: center; justify-content: center; color: #0a0a0f; font-weight: bold; font-size: 18px;">
                        <?php echo strtoupper(substr($testimonial['author'], 0, 1)); ?>
                    </div>
                    <div>
                        <div class="author-name" style="font-weight: 600; color: #fff;"><?php echo $testimonial['author']; ?></div>
                        <div class="author-company" style="font-size: 13px; color: #888;"><?php echo $testimonial['company']; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="quote-section">
    <div class="container">
        <div class="quote-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <div class="quote-icon">
                <svg viewBox="0 0 48 48" fill="none">
                    <path d="M14 24C14 18.477 18.477 14 24 14V20C21.239 20 19 22.239 19 25C19 27.761 21.239 30 24 30H26M34 24C34 18.477 38.477 14 44 14V20C41.239 20 39 22.239 39 25C39 27.761 41.239 30 44 30H46" stroke="#66CCFF" stroke-width="2"/>
                </svg>
            </div>
            <blockquote class="quote-text">
                "W świecie cyfrowym, bezpieczeństwo nie jest produktem, lecz procesem."
            </blockquote>
            <div class="quote-author">
                <span class="author-name">HardSecurity</span>
                <span class="author-title">Twój partner w cyberbezpieczeństwie</span>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section section-bg">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <span class="section-tag">KONTAKT</span>
                <h2 class="section-title">
                    Porozmawiajmy o<br>
                    <span class="highlight">Twoich potrzebach</span>
                </h2>
                <p class="contact-desc">
                    Potrzebujesz kompleksowej oceny bezpieczenia lub masz pytania o nasze usługi? 
                    Wypełnij formularz, a nasz zespół skontaktuje się w ciągu 24 godzin.
                </p>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#66CCFF" stroke-width="1.5">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path d="M3 7L12 13L21 7"/>
                            </svg>
                        </div>
                        <div>
                            <span class="contact-label">Email</span>
                            <span class="contact-value">kontakt@hardsecurity.pl</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#66CCFF" stroke-width="1.5">
                                <path d="M5 4H9L11 8L8.5 10C9.5 12.5 11.5 14.5 14 15.5L16 13H20L21 17C19.5 19.5 16.5 20.5 14 19.5C7 16.5 3 10 5 4Z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="contact-label">Telefon</span>
                            <span class="contact-value">+48 123 456 789</span>
                        </div>
                    </div>
                </div>
            </div>
            <form class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>Imię i nazwisko</label>
                        <input type="text" placeholder="Jan Kowalski" required>
                    </div>
                    <div class="form-group">
                        <label>Adres email</label>
                        <input type="email" placeholder="jan@firma.pl" required>
                    </div>
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