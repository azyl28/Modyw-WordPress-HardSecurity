<?php
/**
 * Hardsecurity Theme functions and definitions
 *
 * @package Hardsecurity
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('HARDSECURITY_THEME_URI', get_template_directory_uri());
define('HARDSECURITY_THEME_DIR', get_template_directory());

function hardsecurity_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('custom-background', array(
        'default-color' => '#0a0a0a',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hardsecurity'),
        'footer'  => __('Footer Menu', 'hardsecurity'),
    ));
    
    add_image_size('hardsecurity-thumbnail', 800, 600, true);
}
add_action('after_setup_theme', 'hardsecurity_theme_setup');

function hardsecurity_enqueue_scripts() {
    // Użyj timestamp aby wyczyścić cache i wymusić załadowanie nowych plików
    $cache_version = filemtime(get_template_directory() . '/assets/css/main.css');
    
    wp_enqueue_style('hardsecurity-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght=300;400;500;600;700&display=swap', array(), $cache_version);
    wp_enqueue_style('hardsecurity-main', get_template_directory_uri() . '/assets/css/main.css', array(), $cache_version);
    wp_enqueue_style('hardsecurity-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0');
    wp_enqueue_style('hardsecurity-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.4.0');
    
    wp_enqueue_script('hardsecurity-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
    wp_enqueue_script('hardsecurity-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $cache_version, true);
    wp_enqueue_script('hardsecurity-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), $cache_version, true);
}
add_action('wp_enqueue_scripts', 'hardsecurity_enqueue_scripts');

function hardsecurity_register_sidebars() {
    register_sidebar(array(
        'name'          => __('Sidebar Primary', 'hardsecurity'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar area', 'hardsecurity'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widgets', 'hardsecurity'),
        'id'            => 'sidebar-2',
        'description'   => __('Footer widget area', 'hardsecurity'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'hardsecurity_register_sidebars');

function hardsecurity_body_classes($classes) {
    if (is_single()) {
        $classes[] = 'single-post';
    }
    if (is_page()) {
        $classes[] = 'page';
    }
    if (is_front_page()) {
        $classes[] = 'home';
    }
    return $classes;
}
add_filter('body_class', 'hardsecurity_body_classes');