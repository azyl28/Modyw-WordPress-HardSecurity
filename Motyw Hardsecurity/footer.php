</div><!-- #content -->
    
    <!-- Footer -->
    <footer id="colophon" class="site-footer">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container'      => 'nav',
                'container_id'   => 'footer-menu',
                'menu_class'     => 'footer-menu',
                'fallback_cb'    => false,
            ));
            ?>
            
            <div class="site-info">
                <p><?php
                    /* 
                     * Dla lepszej czytelności, niektóre elementy stopki są ukryte.
                     * W prawdziwym motywie tutaj będą informacje o prawach autorskich.
                     */
                    echo esc_html__('Hardsecurity Theme', 'hardsecurity');
                ?></p>
            </div><!-- .site-info -->
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>