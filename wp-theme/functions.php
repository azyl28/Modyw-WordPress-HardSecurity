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
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('hardsecurity-blog', 600, 380, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hardsecurity'),
        'footer' => __('Footer Menu', 'hardsecurity'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Custom logo support
    add_theme_support('custom-logo', array(
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'hardsecurity_setup');

// Set content width
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
        'name'          => __('Footer Area', 'hardsecurity'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'hardsecurity'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'hardsecurity_widgets_init');

// Enqueue scripts and styles
function hardsecurity_scripts() {
    wp_enqueue_style('hardsecurity-style', get_stylesheet_uri(), array(), '1.0.0');
    
    wp_enqueue_script('hardsecurity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true);
    
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

// Custom excerpt more
function hardsecurity_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'hardsecurity_excerpt_more');

// Register custom logo
function hardsecurity_custom_logo() {
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

// Get template part with variables
function hardsecurity_get_template_part($slug, $name = null, $args = array()) {
    do_action("hardsecurity_get_template_part_{$slug}", $slug, $name);
    
    $templates = array();
    if (null !== $name) {
        $templates[] = "{$slug}-{$name}.php";
    }
    $templates[] = "{$slug}.php";
    
    locate_template($templates, true, false, $args);
}

// Add custom body classes
function hardsecurity_body_classes($classes) {
    // Add class for sidebar
    if (is_active_sidebar('sidebar-1') && !is_front_page()) {
        $classes[] = 'has-sidebar';
    }
    
    return $classes;
}
add_filter('body_class', 'hardsecurity_body_classes');

// Custom comment form fields
function hardsecurity_comment_form_fields($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    
    return $fields;
}
add_filter('comment_form_fields', 'hardsecurity_comment_form_fields');