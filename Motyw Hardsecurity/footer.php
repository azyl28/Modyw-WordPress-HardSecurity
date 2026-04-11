</div><!-- #content -->
    
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
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Wszelkie prawa zastrzeżone.', 'hardsecurity'); ?></p>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>