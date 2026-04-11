<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> HardSecurity. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js?ver=5.3.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?ver=<?php echo filemtime(get_template_directory() . '/assets/js/main.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/navigation.js?ver=<?php echo filemtime(get_template_directory() . '/js/navigation.js'); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>