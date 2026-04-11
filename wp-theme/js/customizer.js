/**
 * Customizer Live Preview
 */
(function($) {
    // Update CSS variables on change
    wp.customize('hardsecurity_primary_color', function(value) {
        value.bind(function(to) {
            document.documentElement.style.setProperty('--primary-blue', to);
        });
    });
    
    wp.customize('hardsecurity_secondary_color', function(value) {
        value.bind(function(to) {
            document.documentElement.style.setProperty('--raspberry', to);
            $('.logo-subtitle').css('color', to);
        });
    });
    
    wp.customize('hardsecurity_button_color', function(value) {
        value.bind(function(to) {
            $('.btn-primary').css('background', to);
        });
    });
    
    wp.customize('hardsecurity_bg_color', function(value) {
        value.bind(function(to) {
            document.documentElement.style.setProperty('--dark-bg', to);
        });
    });
    
    // Hero title
    wp.customize('hardsecurity_hero_title', function(value) {
        value.bind(function(to) {
            $('.hero-title').text(to);
        });
    });
    
    // Hero subtitle
    wp.customize('hardsecurity_hero_subtitle', function(value) {
        value.bind(function(to) {
            $('.hero-subtitle').text(to);
        });
    });
    
    // Stats number
    wp.customize('hardsecurity_stats_number', function(value) {
        value.bind(function(to) {
            $('.stat-value').text(to);
        });
    });
    
    // Copyright
    wp.customize('hardsecurity_copyright', function(value) {
        value.bind(function(to) {
            $('.footer-bottom p').text(to);
        });
    });
    
    // Header CTA visibility
    wp.customize('hardsecurity_show_header_cta', function(value) {
        value.bind(function(to) {
            if (to) {
                $('.nav-cta').show();
            } else {
                $('.nav-cta').hide();
            }
        });
    });
})(jQuery);