<?php
/**
 * HardSecurity Theme Functions v2.0
 * @package HardSecurity
 */

if (!defined('ABSPATH')) { exit; }

// Theme setup
function hardsecurity_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('hardsecurity-blog', 600, 380, true);
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hardsecurity'),
    ));
    
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('customize-selective-refresh-widgets');
    
    // Elementor Support
    add_theme_support('elementor', array('default_font' => 'Inter'));
}
add_action('after_setup_theme', 'hardsecurity_setup');

function hardsecurity_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action('after_setup_theme', 'hardsecurity_content_width');

// Widget Areas
function hardsecurity_widgets_init() {
    register_sidebar(array('name' => __('Sidebar', 'hardsecurity'), 'id' => 'sidebar-1'));
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array('name' => __('Footer ', 'hardsecurity') . $i, 'id' => 'footer-' . $i));
    }
}
add_action('widgets_init', 'hardsecurity_widgets_init');

// Scripts & Styles
function hardsecurity_scripts() {
    wp_enqueue_style('hardsecurity-style', get_stylesheet_uri(), array(), '2.0.0');
    wp_enqueue_style('hardsecurity-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
    
    wp_enqueue_script('hardsecurity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '2.0.0', true);
    wp_enqueue_script('hardsecurity-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '2.0.0', true);
}
add_action('wp_enqueue_scripts', 'hardsecurity_scripts');

// CUSTOMIZER SETTINGS
function hardsecurity_customize_register($wp_customize) {
    
    // ==================== COLORS ====================
    $wp_customize->add_section('hardsecurity_colors', array('title' => __('Colors', 'hardsecurity'), 'priority' => 30));
    
    $colors = array(
        'primary' => '#66CCFF',
        'secondary' => '#FF6B9D',
        'button' => '#66CCFF',
        'button_text' => '#0a0a0f',
        'bg' => '#0a0a0f',
        'text' => '#ffffff',
        'card_bg' => '#12121a',
        'section_bg' => '#0d0d14',
    );
    
    foreach ($colors as $name => $default) {
        $wp_customize->add_setting('hardsecurity_' . $name . '_color', array('default' => $default, 'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'refresh'));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_' . $name . '_color', array('label' => ucfirst($name) . ' Color', 'section' => 'hardsecurity_colors', 'settings' => 'hardsecurity_' . $name . '_color')));
    }
    
    // ==================== HEADER ====================
    $wp_customize->add_section('hardsecurity_header', array('title' => __('Header', 'hardsecurity'), 'priority' => 20));
    
    $wp_customize->add_setting('hardsecurity_sticky_header', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_sticky_header', array('label' => __('Sticky Header', 'hardsecurity'), 'section' => 'hardsecurity_header', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_header_bg', array('default' => 'rgba(10,10,15,0.95)', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_header_bg', array('label' => __('Background (rgba)', 'hardsecurity'), 'section' => 'hardsecurity_header', 'type' => 'text'));
    
    $wp_customize->add_setting('hardsecurity_show_cta', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_cta', array('label' => __('Show CTA Button', 'hardsecurity'), 'section' => 'hardsecurity_header', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_cta_text', array('default' => 'Kontakt', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_cta_text', array('label' => __('CTA Text', 'hardsecurity'), 'section' => 'hardsecurity_header', 'type' => 'text'));
    
    // ==================== HERO ====================
    $wp_customize->add_section('hardsecurity_hero', array('title' => __('Hero Section', 'hardsecurity'), 'priority' => 25));
    
    $wp_customize->add_setting('hardsecurity_hero_title', array('default' => 'Twoja firma zasługuje na najlepszą ochronę', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_hero_title', array('label' => __('Hero Title', 'hardsecurity'), 'section' => 'hardsecurity_hero', 'type' => 'text'));
    
    $wp_customize->add_setting('hardsecurity_hero_subtitle', array('default' => 'Kompleksowe usługi informatyczne dla firm i klientów indywidualnych.', 'sanitize_callback' => 'sanitize_textarea_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_hero_subtitle', array('label' => __('Hero Subtitle', 'hardsecurity'), 'section' => 'hardsecurity_hero', 'type' => 'textarea'));
    
    $wp_customize->add_setting('hardsecurity_show_hero_stats', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_hero_stats', array('label' => __('Show Stats', 'hardsecurity'), 'section' => 'hardsecurity_hero', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_stats_number', array('default' => '500+', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_stats_number', array('label' => __('Stats Number', 'hardsecurity'), 'section' => 'hardsecurity_hero', 'type' => 'text'));
    
    $wp_customize->add_setting('hardsecurity_stats_label', array('default' => 'Zadowolonych klientów', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_stats_label', array('label' => __('Stats Label', 'hardsecurity'), 'section' => 'hardsecurity_hero', 'type' => 'text'));
    
    // ==================== SERVICES ====================
    $wp_customize->add_section('hardsecurity_services', array('title' => __('Services Section', 'hardsecurity'), 'priority' => 35));
    
    $wp_customize->add_setting('hardsecurity_show_services', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_services', array('label' => __('Show Services', 'hardsecurity'), 'section' => 'hardsecurity_services', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_services_title', array('default' => 'Kompleksowe usługi informatyczne', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_services_title', array('label' => __('Section Title', 'hardsecurity'), 'section' => 'hardsecurity_services', 'type' => 'text'));
    
    $wp_customize->add_setting('hardsecurity_services_subtitle', array('default' => 'Oferujemy szeroki zakres usług IT dla firm.', 'sanitize_callback' => 'sanitize_textarea_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_services_subtitle', array('label' => __('Section Subtitle', 'hardsecurity'), 'section' => 'hardsecurity_services', 'type' => 'textarea'));
    
    // ==================== ARTICLES ====================
    $wp_customize->add_section('hardsecurity_articles', array('title' => __('Latest Articles', 'hardsecurity'), 'priority' => 36));
    
    $wp_customize->add_setting('hardsecurity_show_articles', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_articles', array('label' => __('Show Articles Section', 'hardsecurity'), 'section' => 'hardsecurity_articles', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_articles_title', array('default' => 'Najnowsze artykuły', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_articles_title', array('label' => __('Section Title', 'hardsecurity'), 'section' => 'hardsecurity_articles', 'type' => 'text'));
    
    $wp_customize->add_setting('hardsecurity_articles_count', array('default' => 3, 'sanitize_callback' => 'absint', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_articles_count', array('label' => __('Number of Articles', 'hardsecurity'), 'section' => 'hardsecurity_articles', 'type' => 'number'));
    
    $wp_customize->add_setting('hardsecurity_articles_animation', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_articles_animation', array('label' => __('Enable Animation', 'hardsecurity'), 'section' => 'hardsecurity_articles', 'type' => 'checkbox'));
    
    // ==================== PARTNERS ====================
    $wp_customize->add_section('hardsecurity_partners', array('title' => __('Partners', 'hardsecurity'), 'priority' => 37));
    
    $wp_customize->add_setting('hardsecurity_show_partners', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_partners', array('label' => __('Show Partners Section', 'hardsecurity'), 'section' => 'hardsecurity_partners', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_partners_title', array('default' => 'Zaufali nam', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_partners_title', array('label' => __('Section Title', 'hardsecurity'), 'section' => 'hardsecurity_partners', 'type' => 'text'));
    
    // ==================== STATS ====================
    $wp_customize->add_section('hardsecurity_stats', array('title' => __('Our Achievements', 'hardsecurity'), 'priority' => 38));
    
    $wp_customize->add_setting('hardsecurity_show_stats', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_stats', array('label' => __('Show Stats Section', 'hardsecurity'), 'section' => 'hardsecurity_stats', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_stats_title', array('default' => 'Nasze osiągnięcia', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_stats_title', array('label' => __('Section Title', 'hardsecurity'), 'section' => 'hardsecurity_stats', 'type' => 'text'));
    
    // Stats values
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting('hardsecurity_stat' . $i . '_number', array('default' => '500+', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
        $wp_customize->add_control('hardsecurity_stat' . $i . '_number', array('label' => 'Stat ' . $i . ' Number', 'section' => 'hardsecurity_stats', 'type' => 'text'));
        
        $wp_customize->add_setting('hardsecurity_stat' . $i . '_label', array('default' => 'Klientów', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
        $wp_customize->add_control('hardsecurity_stat' . $i . '_label', array('label' => 'Stat ' . $i . ' Label', 'section' => 'hardsecurity_stats', 'type' => 'text'));
    }
    
    // ==================== TESTIMONIALS ====================
    $wp_customize->add_section('hardsecurity_testimonials', array('title' => __('Testimonials', 'hardsecurity'), 'priority' => 39));
    
    $wp_customize->add_setting('hardsecurity_show_testimonials', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_testimonials', array('label' => __('Show Testimonials', 'hardsecurity'), 'section' => 'hardsecurity_testimonials', 'type' => 'checkbox'));
    
    $wp_customize->add_setting('hardsecurity_testimonials_title', array('default' => 'Co mówią o nas klienci', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_testimonials_title', array('label' => __('Section Title', 'hardsecurity'), 'section' => 'hardsecurity_testimonials', 'type' => 'text'));
    
    // ==================== ABOUT ====================
    $wp_customize->add_section('hardsecurity_about', array('title' => __('About Section', 'hardsecurity'), 'priority' => 40));
    
    $wp_customize->add_setting('hardsecurity_show_about', array('default' => true, 'sanitize_callback' => 'hardsecurity_sanitize_checkbox', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_show_about', array('label' => __('Show About Section', 'hardsecurity'), 'section' => 'hardsecurity_about', 'type' => 'checkbox'));
    
    // ==================== CONTACT ====================
    $wp_customize->add_section('hardsecurity_contact', array('title' => __('Contact', 'hardsecurity'), 'priority' => 45));
    
    $wp_customize->add_setting('hardsecurity_email', array('default' => 'kontakt@hardsecurity.pl', 'sanitize_callback' => 'sanitize_email', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_email', array('label' => __('Email', 'hardsecurity'), 'section' => 'hardsecurity_contact', 'type' => 'email'));
    
    $wp_customize->add_setting('hardsecurity_phone', array('default' => '+48 123 456 789', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_phone', array('label' => __('Phone', 'hardsecurity'), 'section' => 'hardsecurity_contact', 'type' => 'text'));
    
    // ==================== FOOTER ====================
    $wp_customize->add_section('hardsecurity_footer', array('title' => __('Footer', 'hardsecurity'), 'priority' => 50));
    
    $wp_customize->add_setting('hardsecurity_footer_logo_text', array('default' => 'HardSecurity', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_footer_logo_text', array('label' => __('Logo Text', 'hardsecurity'), 'section' => 'hardsecurity_footer', 'type' => 'text'));
    
    $wp_customize->add_setting('hardsecurity_footer_desc', array('default' => 'Profesjonalne usługi informatyczne i cyberbezpieczeństwa.', 'sanitize_callback' => 'sanitize_textarea_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_footer_desc', array('label' => __('Description', 'hardsecurity'), 'section' => 'hardsecurity_footer', 'type' => 'textarea'));
    
    $wp_customize->add_setting('hardsecurity_copyright', array('default' => '© ' . date('Y') . ' HardSecurity. Wszelkie prawa zastrzeżone.', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh'));
    $wp_customize->add_control('hardsecurity_copyright', array('label' => __('Copyright', 'hardsecurity'), 'section' => 'hardsecurity_footer', 'type' => 'text'));
    
    // Remove default sections
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');
}
add_action('customize_register', 'hardsecurity_customize_register');

// Sanitize checkbox
function hardsecurity_sanitize_checkbox($checked) {
    return (isset($checked) && true === $checked) ? true : false;
}

// Output custom CSS
function hardsecurity_customizer_css() {
    ?>
    <style type="text/css">
        :root {
            --primary: <?php echo get_theme_mod('hardsecurity_primary_color', '#66CCFF'); ?>;
            --secondary: <?php echo get_theme_mod('hardsecurity_secondary_color', '#FF6B9D'); ?>;
            --bg: <?php echo get_theme_mod('hardsecurity_bg_color', '#0a0a0f'); ?>;
            --text: <?php echo get_theme_mod('hardsecurity_text_color', '#ffffff'); ?>;
            --button: <?php echo get_theme_mod('hardsecurity_button_color', '#66CCFF'); ?>;
            --button-text: <?php echo get_theme_mod('hardsecurity_button_text_color', '#0a0a0f'); ?>;
            --card-bg: <?php echo get_theme_mod('hardsecurity_card_bg', '#12121a'); ?>;
            --section-bg: <?php echo get_theme_mod('hardsecurity_section_bg', '#0d0d14'); ?>;
        }
        body { background: var(--bg); color: var(--text); }
        .btn-primary { background: var(--button) !important; color: var(--button-text) !important; }
        .highlight, .logo-subtitle { color: var(--primary) !important; }
    </style>
    <?php
}
add_action('wp_head', 'hardsecurity_customizer_css');

// Allow SVG upload
function hardsecurity_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'hardsecurity_mime_types');

// Default menu on theme activation
function hardsecurity_after_switch_theme() {
    if (!has_nav_menu('primary')) {
        $menu_id = wp_create_nav_menu('Primary');
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Start', 'menu-item-url' => home_url('/'), 'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Usługi', 'menu-item-url' => home_url('/#services'), 'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Kontakt', 'menu-item-url' => home_url('/#contact'), 'menu-item-status' => 'publish'));
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('after_switch_theme', 'hardsecurity_after_switch_theme');

// ============================================
// IMPORT & ADMIN PANEL
// ============================================

// Add import button to theme page
function hardsecurity_admin_actions() {
    global $submenu;
    $theme_page = wp_get_theme()->get('Template');
    if ($theme_page === 'hardsecurity' || $theme_page === 'HardSecurity') {
        add_theme_page('Import Strony', 'Importuj Strony', 'manage_options', 'hs-import', 'hardsecurity_import_page');
    }
}
add_action('admin_menu', 'hardsecurity_admin_actions', 20);

// Check if Elementor is installed
function hs_is_elementor_active() {
    return defined('ELEMENTOR__FILE');
}

// Import page content
function hardsecurity_import_page() {
    if (!current_user_can('manage_options')) return;
    
    $elementor_active = hs_is_elementor_active();
    $message = '';
    
    if (isset($_POST['hs_import_demo']) && $elementor_active) {
        // Create Home page
        $home_id = wp_insert_post(array(
            'post_title' => 'Strona główna',
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'home'
        ));
        update_post_meta($home_id, '_wp_page_template', 'elementor_canvas');
        
        // Create Blog page
        $blog_id = wp_insert_post(array(
            'post_title' => 'Blog',
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'blog'
        ));
        
        // Set as front page and posts page
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_id);
        update_option('page_for_posts', $blog_id);
        
        // Create menu
        $menu_id = wp_create_nav_menu('Main Menu');
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Start', 'menu-item-url' => home_url('/'), 'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Blog', 'menu-item-url' => home_url('/blog'), 'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Usługi', 'menu-item-url' => home_url('/#services'), 'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Kontakt', 'menu-item-url' => home_url('/#contact'), 'menu-item-status' => 'publish'));
        
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
        
        // Sample posts
        for ($i = 1; $i <= 6; $i++) {
            wp_insert_post(array(
                'post_title' => 'Artykuł ' . $i . ' - Cyberbezpieczeństwo',
                'post_content' => 'Przykładowa treść artykułu o cyberbezpieczeństwie dla Twojej firmy. Możesz edytować ten artykuł w Elementorze lub klasycznym edytorze.',
                'post_status' => 'publish',
                'post_type' => 'post',
                'post_category' => array(1)
            ));
        }
        
        $message = '<div class="updated"><p>✓ Import zakończony! Utworzono: Strona główna, Blog, Menu, 6 przykładowych artykułów.</p></div>';
    }
    
    echo '<div class="wrap">';
    echo '<h1>Import Stron - HardSecurity Theme</h1>';
    echo $message;
    
    if (!$elementor_active) {
        echo '<div class="error"><p><strong>BŁĄD:</strong> Zainstaluj i aktywuj wtyczkę <strong>Elementor</strong> przed importem!</p>';
        echo '<p>Pobierz Elementor: <a href="https://pl.wordpress.org/plugins/elementor/" target="_blank">https://pl.wordpress.org/plugins/elementor/</a></p></div>';
    }
    
    echo '<form method="post">';
    echo '<table class="form-table">';
    echo '<tr><td>';
    echo '<p style="margin-bottom: 10px;">Ten przycisk utworzy:</p>';
    echo '<ul style="list-style: disc; padding-left: 20px;">';
    echo '<li>Strona główna (do edycji w Elementorze)</li>';
    echo '<li>Strona Blog (wyświetla artykuły)</li>';
    echo '<li>Menu nawigacyjne</li>';
    echo '<li>6 przykładowych artykułów</li>';
    echo '</ul>';
    
    if ($elementor_active) {
        echo '<input type="submit" name="hs_import_demo" class="button button-primary button-large" value="Importuj Strony i Treści" onclick="return confirm(\'Czy na pewno importować? Stare treści zostaną zachowane.\');">';
    } else {
        echo '<input type="submit" class="button button-primary button-large" value="Importuj (wymaga Elementor)" disabled>';
    }
    echo '</td></tr>';
    echo '</table>';
    echo '</form>';
    
    if ($elementor_active) {
        echo '<div style="margin-top: 20px; padding: 15px; background: #e8f5e9; border-left: 4px solid #4caf50;">';
        echo '<h3>✓ Elementor jest aktywny! Możesz importować strony.</h3>';
        echo '<p>Po imporcie przejdź do <strong>Strony > Strona główna > Edytuj w Elementorze</strong> aby edytować wygląd strony.</p>';
        echo '</div>';
    }
    echo '</div>';
}