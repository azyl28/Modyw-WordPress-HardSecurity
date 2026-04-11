<?php
/**
 * The footer of our theme
 *
 * @package HardSecurity
 */

$facebook = get_theme_mod('hardsecurity_facebook', '');
$linkedin = get_theme_mod('hardsecurity_linkedin', '');
$twitter = get_theme_mod('hardsecurity_twitter', '');
$instagram = get_theme_mod('hardsecurity_instagram', '');
$show_social = get_theme_mod('hardsecurity_show_social', true);
$footer_desc = get_theme_mod('hardsecurity_footer_desc', 'Profesjonalne usługi informatyczne i cyberbezpieczeństwa. Chronimy Twoją infrastrukturę cyfrową.');
$copyright = get_theme_mod('hardsecurity_copyright', '© ' . date('Y') . ' HardSecurity. Wszelkie prawa zastrzeżone.');
$logo_text = get_theme_mod('hardsecurity_footer_logo_text', 'HardSecurity');
$email = get_theme_mod('hardsecurity_email', 'kontakt@hardsecurity.pl');
$phone = get_theme_mod('hardsecurity_phone', '+48 123 456 789');
$address = get_theme_mod('hardsecurity_address', 'Warszawa, Polska');
?>

    </main><!-- #primary -->

    <footer id="colophon" class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <?php if (has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" stroke-width="2" fill="none"/>
                                    <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
                                </svg>
                                <div class="logo-text-group">
                                    <span class="logo-text"><?php echo esc_html($logo_text); ?></span>
                                    <span class="logo-subtitle">cyberbezpieczeństwo</span>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                    <p><?php echo esc_html($footer_desc); ?></p>
                    <?php if ($show_social): ?>
                    <div class="footer-social">
                        <?php if ($facebook): ?>
                            <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($linkedin): ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($twitter): ?>
                            <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($instagram): ?>
                            <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="footer-links">
                    <h4>Na skróty</h4>
                    <a href="#home">Start</a>
                    <a href="#services">Usługi</a>
                    <a href="#pricing">Cennik</a>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Kontakt</a>
                </div>
                
                <div class="footer-links">
                    <h4>Usługi</h4>
                    <a href="#services">Cyberbezpieczeństwo</a>
                    <a href="#services">Sieci Komputerowe</a>
                    <a href="#services">Serwis</a>
                    <a href="#pricing">Cennik</a>
                </div>
                
                <div class="footer-links">
                    <h4>Kontakt</h4>
                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
                    <span><?php echo esc_html($address); ?></span>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p><?php echo esc_html($copyright); ?></p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>