<?php
/**
 * The footer of our theme
 *
 * @package HardSecurity
 */

?>

    </main><!-- #primary -->

    <footer id="colophon" class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" stroke-width="2" fill="none"/>
                                <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
                            </svg>
                            <div class="logo-text-group">
                                <span class="logo-text">HardSecurity</span>
                                <span class="logo-subtitle">cyberbezpieczeństwo</span>
                            </div>
                        </a>
                    </div>
                    <p>Profesjonalne usługi informatyczne i cyberbezpieczeństwa. Chronimy Twoją infrastrukturę cyfrową.</p>
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
                    <a href="mailto:kontakt@hardsecurity.pl">kontakt@hardsecurity.pl</a>
                    <a href="tel:+48123456789">+48 123 456 789</a>
                    <span>Warszawa, Polska</span>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> HardSecurity. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>