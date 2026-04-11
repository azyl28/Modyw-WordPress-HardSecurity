<?php
/**
 * HardSecurity Theme Functions
 * 
 * @package HardSecurity
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function hardsecurity_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('hardsecurity-blog', 600, 380, true);
    add_image_size('hardsecurity-hero', 1920, 1080, true);
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hardsecurity'),
        'footer' => __('Footer Menu', 'hardsecurity'),
        'mobile' => __('Mobile Menu', 'hardsecurity'),
    ));
    
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ));
    
    add_theme_support('customize-selective-refresh-widgets');
    
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
    
    add_theme_support('custom-background', array(
        'default-color' => '0a0a0f',
    ));
    
    add_theme_support('custom-header', array(
        'default-image' => '',
        'random-default' => false,
        'width' => 1920,
        'height' => 600,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'hardsecurity_setup');

function hardsecurity_content_width() {
    $GLOBALS['content_width'] = apply_filters('hardsecurity_content_width', 1200);
}
add_action('after_setup_theme', 'hardsecurity_content_width');

// Register widget areas
function hardsecurity_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'hardsecurity'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'hardsecurity'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'hardsecurity'),
        'id'            => 'footer-1',
        'description'   => __('First column in footer.', 'hardsecurity'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Column 2', 'hardsecurity'),
        'id'            => 'footer-2',
        'description'   => __('Second column in footer.', 'hardsecurity'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Column 3', 'hardsecurity'),
        'id'            => 'footer-3',
        'description'   => __('Third column in footer.', 'hardsecurity'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Column 4', 'hardsecurity'),
        'id'            => 'footer-4',
        'description'   => __('Fourth column in footer.', 'hardsecurity'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'hardsecurity_widgets_init');

// Enqueue scripts and styles
function hardsecurity_scripts() {
    wp_enqueue_style('hardsecurity-style', get_stylesheet_uri(), array(), '1.0.1');
    wp_enqueue_style('hardsecurity-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
    
    wp_enqueue_script('hardsecurity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.1', true);
    wp_enqueue_script('hardsecurity-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.1', true);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'hardsecurity_scripts');

// Custom excerpt length
function hardsecurity_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'hardsecurity_excerpt_length');

function hardsecurity_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'hardsecurity_excerpt_more');

// Custom body classes
function hardsecurity_body_classes($classes) {
    if (is_active_sidebar('sidebar-1') && !is_front_page()) {
        $classes[] = 'has-sidebar';
    }
    return $classes;
}
add_filter('body_class', 'hardsecurity_body_classes');

// ============================================
// CUSTOMIZER SETTINGS
// ============================================

function hardsecurity_customize_register($wp_customize) {
    // ====================
    // COLORS SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_colors', array(
        'title'       => __('Colors & Styling', 'hardsecurity'),
        'priority'    => 30,
        'description' => __('Customize colors of your theme', 'hardsecurity'),
    ));
    
    // Primary Color
    $wp_customize->add_setting('hardsecurity_primary_color', array(
        'default'           => '#66CCFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_primary_color', array(
        'label'    => __('Primary Accent Color', 'hardsecurity'),
        'section'  => 'hardsecurity_colors',
        'settings' => 'hardsecurity_primary_color',
    )));
    
    // Secondary Color (Raspberry/Pink)
    $wp_customize->add_setting('hardsecurity_secondary_color', array(
        'default'           => '#FF6B9D',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_secondary_color', array(
        'label'    => __('Secondary Accent Color (Pink)', 'hardsecurity'),
        'section'  => 'hardsecurity_colors',
        'settings' => 'hardsecurity_secondary_color',
    )));
    
    // Button Color
    $wp_customize->add_setting('hardsecurity_button_color', array(
        'default'           => '#66CCFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_button_color', array(
        'label'    => __('Button Color', 'hardsecurity'),
        'section'  => 'hardsecurity_colors',
        'settings' => 'hardsecurity_button_color',
    )));
    
    // Button Text Color
    $wp_customize->add_setting('hardsecurity_button_text_color', array(
        'default'           => '#0a0a0f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_button_text_color', array(
        'label'    => __('Button Text Color', 'hardsecurity'),
        'section'  => 'hardsecurity_colors',
        'settings' => 'hardsecurity_button_text_color',
    )));
    
    // Background Color
    $wp_customize->add_setting('hardsecurity_bg_color', array(
        'default'           => '#0a0a0f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_bg_color', array(
        'label'    => __('Background Color', 'hardsecurity'),
        'section'  => 'hardsecurity_colors',
        'settings' => 'hardsecurity_bg_color',
    )));
    
    // Text Color
    $wp_customize->add_setting('hardsecurity_text_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hardsecurity_text_color', array(
        'label'    => __('Main Text Color', 'hardsecurity'),
        'section'  => 'hardsecurity_colors',
        'settings' => 'hardsecurity_text_color',
    )));
    
    // ====================
    // HEADER SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_header', array(
        'title'       => __('Header Settings', 'hardsecurity'),
        'priority'    => 20,
        'description' => __('Configure header options', 'hardsecurity'),
    ));
    
    // Sticky Header
    $wp_customize->add_setting('hardsecurity_sticky_header', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_sticky_header', array(
        'label'    => __('Sticky Header', 'hardsecurity'),
        'section'  => 'hardsecurity_header',
        'type'     => 'checkbox',
    ));
    
    // Header Background
    $wp_customize->add_setting('hardsecurity_header_bg', array(
        'default'           => 'rgba(10, 10, 15, 0.95)',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_header_bg', array(
        'label'    => __('Header Background (rgba)', 'hardsecurity'),
        'section'  => 'hardsecurity_header',
        'type'     => 'text',
    ));
    
    // Show/Hide CTA Button
    $wp_customize->add_setting('hardsecurity_show_header_cta', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_header_cta', array(
        'label'    => __('Show Header CTA Button', 'hardsecurity'),
        'section'  => 'hardsecurity_header',
        'type'     => 'checkbox',
    ));
    
    // CTA Button Text
    $wp_customize->add_setting('hardsecurity_header_cta_text', array(
        'default'           => 'Kontakt',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_header_cta_text', array(
        'label'    => __('CTA Button Text', 'hardsecurity'),
        'section'  => 'hardsecurity_header',
        'type'     => 'text',
    ));
    
    // ====================
    // HERO SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_hero', array(
        'title'       => __('Hero Section', 'hardsecurity'),
        'priority'    => 25,
    ));
    
    // Enable Animated Background
    $wp_customize->add_setting('hardsecurity_animated_bg', array(
        'default'           => false,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_animated_bg', array(
        'label'    => __('Enable Animated Background', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'checkbox',
    ));

    // Hero Title
    $wp_customize->add_setting('hardsecurity_hero_title', array(
        'default'           => 'Twoja firma zasługuje na najlepszą ochronę',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_hero_title', array(
        'label'    => __('Hero Title', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('hardsecurity_hero_subtitle', array(
        'default'           => 'Kompleksowe usługi informatyczne dla firm i klientów indywidualnych. Bezpieczeństwo, niezawodność i profesjonalna obsługa.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_hero_subtitle', array(
        'label'    => __('Hero Subtitle', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'textarea',
    ));
    
    // Hero Badge Text
    $wp_customize->add_setting('hardsecurity_hero_badge', array(
        'default'           => 'Profesjonalne usługi IT i cyberbezpieczeństwa',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_hero_badge', array(
        'label'    => __('Hero Badge Text', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // Show Hero Stats
    $wp_customize->add_setting('hardsecurity_show_hero_stats', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_hero_stats', array(
        'label'    => __('Show Hero Stats', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'checkbox',
    ));
    
    // Stats Number
    $wp_customize->add_setting('hardsecurity_stats_number', array(
        'default'           => '500+',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_stats_number', array(
        'label'    => __('Stats Number', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // Stats Label
    $wp_customize->add_setting('hardsecurity_stats_label', array(
        'default'           => 'Zadowolonych klientów',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_stats_label', array(
        'label'    => __('Stats Label', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // ====================
    // HERO SLIDER SECTION
    // ====================
    $wp_customize->add_setting('hardsecurity_show_hero_slider', array(
        'default'           => false,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_hero_slider', array(
        'label'    => __('Enable Hero Slider', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'checkbox',
    ));
    
    // Slider Speed
    $wp_customize->add_setting('hardsecurity_slider_speed', array(
        'default'           => 5000,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slider_speed', array(
        'label'    => __('Slider Auto-play Speed (ms)', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'number',
    ));
    
    // Slider Slide 1 Title
    $wp_customize->add_setting('hardsecurity_slide1_title', array(
        'default'           => 'Twoja firma zasługuje na najlepszą ochronę',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slide1_title', array(
        'label'    => __('Slide 1 Title', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // Slider Slide 1 Subtitle
    $wp_customize->add_setting('hardsecurity_slide1_subtitle', array(
        'default'           => 'Kompleksowe usługi informatyczne dla firm i klientów indywidualnych.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slide1_subtitle', array(
        'label'    => __('Slide 1 Subtitle', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'textarea',
    ));
    
    // Slider Slide 2 Title
    $wp_customize->add_setting('hardsecurity_slide2_title', array(
        'default'           => 'Bezpieczeństwo Twoich danych',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slide2_title', array(
        'label'    => __('Slide 2 Title', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // Slider Slide 2 Subtitle
    $wp_customize->add_setting('hardsecurity_slide2_subtitle', array(
        'default'           => 'Profesjonalne audyty bezpieczeństwa i ochrona przed cyberzagrożeniami.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slide2_subtitle', array(
        'label'    => __('Slide 2 Subtitle', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'textarea',
    ));
    
    // Slider Slide 3 Title
    $wp_customize->add_setting('hardsecurity_slide3_title', array(
        'default'           => 'Wsparcie IT 24/7',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slide3_title', array(
        'label'    => __('Slide 3 Title', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'text',
    ));
    
    // Slider Slide 3 Subtitle
    $wp_customize->add_setting('hardsecurity_slide3_subtitle', array(
        'default'           => 'Jesteśmy dostępni całą dobę, 7 dni w tygodniu.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_slide3_subtitle', array(
        'label'    => __('Slide 3 Subtitle', 'hardsecurity'),
        'section'  => 'hardsecurity_hero',
        'type'     => 'textarea',
    ));
    
    // ====================
    // FOOTER SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_footer', array(
        'title'       => __('Footer Settings', 'hardsecurity'),
        'priority'    => 50,
        'description' => __('Configure footer options', 'hardsecurity'),
    ));
    
    // Footer Logo Text
    $wp_customize->add_setting('hardsecurity_footer_logo_text', array(
        'default'           => 'HardSecurity',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_footer_logo_text', array(
        'label'    => __('Footer Logo Text', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'text',
    ));
    
    // Footer Description
    $wp_customize->add_setting('hardsecurity_footer_desc', array(
        'default'           => 'Profesjonalne usługi informatyczne i cyberbezpieczeństwa. Chronimy Twoją infrastrukturę cyfrową.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_footer_desc', array(
        'label'    => __('Footer Description', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'textarea',
    ));
    
    // Copyright Text
    $wp_customize->add_setting('hardsecurity_copyright', array(
        'default'           => '© ' . date('Y') . ' HardSecurity. Wszelkie prawa zastrzeżone.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_copyright', array(
        'label'    => __('Copyright Text', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'text',
    ));
    
    // Show Social Links
    $wp_customize->add_setting('hardsecurity_show_social', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_social', array(
        'label'    => __('Show Social Links', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'checkbox',
    ));
    
    // Facebook
    $wp_customize->add_setting('hardsecurity_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_facebook', array(
        'label'    => __('Facebook URL', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('hardsecurity_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_linkedin', array(
        'label'    => __('LinkedIn URL', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'url',
    ));
    
    // Twitter
    $wp_customize->add_setting('hardsecurity_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_twitter', array(
        'label'    => __('Twitter URL', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('hardsecurity_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_instagram', array(
        'label'    => __('Instagram URL', 'hardsecurity'),
        'section'  => 'hardsecurity_footer',
        'type'     => 'url',
    ));
    
    // ====================
    // CONTACT SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_contact', array(
        'title'       => __('Contact Settings', 'hardsecurity'),
        'priority'    => 45,
    ));
    
    // Email
    $wp_customize->add_setting('hardsecurity_email', array(
        'default'           => 'kontakt@hardsecurity.pl',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_email', array(
        'label'    => __('Contact Email', 'hardsecurity'),
        'section'  => 'hardsecurity_contact',
        'type'     => 'email',
    ));
    
    // Phone
    $wp_customize->add_setting('hardsecurity_phone', array(
        'default'           => '+48 123 456 789',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_phone', array(
        'label'    => __('Contact Phone', 'hardsecurity'),
        'section'  => 'hardsecurity_contact',
        'type'     => 'text',
    ));
    
    // Address
    $wp_customize->add_setting('hardsecurity_address', array(
        'default'           => 'Warszawa, Polska',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_address', array(
        'label'    => __('Address', 'hardsecurity'),
        'section'  => 'hardsecurity_contact',
        'type'     => 'text',
    ));
    
    // ====================
    // SERVICES SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_services', array(
        'title'       => __('Services Section', 'hardsecurity'),
        'priority'    => 35,
    ));
    
    // Services Title
    $wp_customize->add_setting('hardsecurity_services_title', array(
        'default'           => 'Kompleksowe usługi informatyczne',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_services_title', array(
        'label'    => __('Services Section Title', 'hardsecurity'),
        'section'  => 'hardsecurity_services',
        'type'     => 'text',
    ));
    
    // Services Subtitle
    $wp_customize->add_setting('hardsecurity_services_subtitle', array(
        'default'           => 'Oferujemy szeroki zakres usług IT dla firm i klientów indywidualnych.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_services_subtitle', array(
        'label'    => __('Services Section Subtitle', 'hardsecurity'),
        'section'  => 'hardsecurity_services',
        'type'     => 'textarea',
    ));
    
    // ====================
    // LATEST ARTICLES SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_latest_articles', array(
        'title'       => __('Latest Articles Section', 'hardsecurity'),
        'priority'    => 36,
    ));

    // Show Latest Articles
    $wp_customize->add_setting('hardsecurity_show_latest_articles', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_latest_articles', array(
        'label'    => __('Show Latest Articles Section', 'hardsecurity'),
        'section'  => 'hardsecurity_latest_articles',
        'type'     => 'checkbox',
    ));

    // Latest Articles Title
    $wp_customize->add_setting('hardsecurity_latest_articles_title', array(
        'default'           => 'Najnowsze artykuły',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_latest_articles_title', array(
        'label'    => __('Latest Articles Title', 'hardsecurity'),
        'section'  => 'hardsecurity_latest_articles',
        'type'     => 'text',
    ));

    // Number of Articles
    $wp_customize->add_setting('hardsecurity_latest_articles_count', array(
        'default'           => 3,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_latest_articles_count', array(
        'label'    => __('Number of Articles', 'hardsecurity'),
        'section'  => 'hardsecurity_latest_articles',
        'type'     => 'number',
    ));

    // ====================
    // WHY CHOOSE US SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_why_us', array(
        'title'       => __('Why Choose Us Section', 'hardsecurity'),
        'priority'    => 37,
    ));

    $wp_customize->add_setting('hardsecurity_show_why_us', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_why_us', array(
        'label'    => __('Show Why Choose Us Section', 'hardsecurity'),
        'section'  => 'hardsecurity_why_us',
        'type'     => 'checkbox',
    ));

    $wp_customize->add_setting('hardsecurity_why_us_title', array(
        'default'           => 'Powierz nam swoje problemy IT',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_why_us_title', array(
        'label'    => __('Section Title', 'hardsecurity'),
        'section'  => 'hardsecurity_why_us',
        'type'     => 'text',
    ));

    // ====================
    // TESTIMONIALS SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_testimonials', array(
        'title'       => __('Testimonials Section', 'hardsecurity'),
        'priority'    => 38,
    ));

    $wp_customize->add_setting('hardsecurity_show_testimonials', array(
        'default'           => true,
        'sanitize_callback' => 'hardsecurity_sanitize_checkbox',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_show_testimonials', array(
        'label'    => __('Show Testimonials Section', 'hardsecurity'),
        'section'  => 'hardsecurity_testimonials',
        'type'     => 'checkbox',
    ));

    $wp_customize->add_setting('hardsecurity_testimonials_title', array(
        'default'           => 'Co mówią o nas klienci',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_testimonials_title', array(
        'label'    => __('Section Title', 'hardsecurity'),
        'section'  => 'hardsecurity_testimonials',
        'type'     => 'text',
    ));

    // ====================
    // SOCIAL LINKS SECTION
    // ====================
    $wp_customize->add_section('hardsecurity_social', array(
        'title'       => __('Social Media', 'hardsecurity'),
        'priority'    => 55,
    ));
    
    // YouTube
    $wp_customize->add_setting('hardsecurity_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_youtube', array(
        'label'    => __('YouTube URL', 'hardsecurity'),
        'section'  => 'hardsecurity_social',
        'type'     => 'url',
    ));
    
    // ====================
    // TYPOGRAPHY
    // ====================
    $wp_customize->add_section('hardsecurity_typography', array(
        'title'       => __('Typography', 'hardsecurity'),
        'priority'    => 40,
    ));
    
    // Font Family
    $wp_customize->add_setting('hardsecurity_font_family', array(
        'default'           => 'Inter, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hardsecurity_font_family', array(
        'label'    => __('Font Family', 'hardsecurity'),
        'section'  => 'hardsecurity_typography',
        'type'     => 'text',
    ));
    
    // Remove default sections
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');
}
add_action('customize_register', 'hardsecurity_customize_register');

// Sanitize checkbox
function hardsecurity_sanitize_checkbox($checked) {
    return (isset($checked) && true === $checked) ? true : false;
}

// Output custom CSS from customizer
function hardsecurity_customizer_css() {
    ?>
    <style type="text/css">
        :root {
            --primary-blue: <?php echo get_theme_mod('hardsecurity_primary_color', '#66CCFF'); ?>;
            --raspberry: <?php echo get_theme_mod('hardsecurity_secondary_color', '#FF6B9D'); ?>;
            --dark-bg: <?php echo get_theme_mod('hardsecurity_bg_color', '#0a0a0f'); ?>;
            --text-color: <?php echo get_theme_mod('hardsecurity_text_color', '#ffffff'); ?>;
            --button-color: <?php echo get_theme_mod('hardsecurity_button_color', '#66CCFF'); ?>;
            --button-text: <?php echo get_theme_mod('hardsecurity_button_text_color', '#0a0a0f'); ?>;
        }
        
        .btn-primary {
            background: var(--button-color) !important;
            color: var(--button-text) !important;
        }
        
        .logo-subtitle {
            color: var(--raspberry) !important;
        }
        
        .highlight {
            color: var(--primary-blue) !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'hardsecurity_customizer_css');

// Register customizer JS
function hardsecurity_customizer_scripts() {
    wp_enqueue_script('hardsecurity-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery', 'customize-preview'), '1.0.0', true);
}
add_action('customize_preview_init', 'hardsecurity_customizer_scripts');

// Allow SVG upload
function hardsecurity_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'hardsecurity_mime_types');

// Add default menu on theme activation
function hardsecurity_after_switch_theme() {
    if (!has_nav_menu('primary')) {
        $menu_name = 'Primary';
        $menu_exists = wp_get_nav_menu_object($menu_name);
        
        if (!$menu_exists) {
            $menu_id = wp_create_nav_menu($menu_name);
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Start', 'hardsecurity'),
                'menu-item-url'   =>  home_url('/'),
                'menu-item-status'=> 'publish',
            ));
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Usługi', 'hardsecurity'),
                'menu-item-url'   =>  home_url('/#services'),
                'menu-item-status'=> 'publish',
            ));
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Kontakt', 'hardsecurity'),
                'menu-item-url'   =>  home_url('/#contact'),
                'menu-item-status'=> 'publish',
            ));
        }
        
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('after_switch_theme', 'hardsecurity_after_switch_theme');