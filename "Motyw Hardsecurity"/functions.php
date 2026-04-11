<?php
/**
 * Hardsecurity Theme functions and definitions
 *
 * @package Hardsecurity
 * @since 1.0.0
 */

// Zabezpieczenie przed bezpośrednim dostępem
if (!defined('ABSPATH')) {
    exit;
}

// Definiowanie stałych
define('THEME_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

// Ładowanie autoloadera klas
if (!function_exists('_autoload_theme_classes')) {
    function _autoload_theme_classes($class_name) {
        $file = THEME_DIR . '/classes/' . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
    spl_autoload_register('_autoload_theme_classes');
}

// Rejestr akcji i filtrów
add_action('after_setup_theme', '_theme_setup');
add_action('enqueue_scripts', '_theme_enqueue_scripts');
add_action('widgets_init', '_theme_register_sidebars');
add_filter('body_class', '_theme_body_classes');

// Inicjalizacja motywu
if (!function_exists('_theme_setup')) {
    function _theme_setup() {
        // Dodaj obsługę tytułu strony
        add_theme_support('title-tag');
        
        // Dodaj obsługę miniatur
        add_theme_support('post-thumbnails');
        add_image_size('hardsecurity-thumbnail', 800, 600, true);
        
        // Dodaj obsługę niestandardowych logo
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ));
        
        // Dodaj obsługę tła
        add_theme_support('custom-background', array(
            'default-color' => '#0a0a0a',
            'default-image' => '',
        ));
        
        // Rejestr menu
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'hardsecurity'),
            'footer'  => esc_html__('Footer Menu', 'hardsecurity'),
            'mobile'  => esc_html__('Mobile Menu', 'hardsecurity'),
        ));
        
        // Aktywuj obsługę kolorów w Customizerze
        add_theme_support('customize-selective-refresh-widgets');
        
        // Ustaw długi cache dla plików statycznych
        add_filter('theme_root_uri', function($url) {
            return $url;
        });
    }
}

// Rejestr stylów i skryptów
if (!function_exists('_theme_enqueue_scripts')) {
    function _theme_enqueue_scripts() {
        // Rejestr stylów
        wp_register_style('hardsecurity-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap', array(), '1.0.0');
        wp_register_style('hardsecurity-bootstrap', THEME_URI . '/assets/css/bootstrap.min.css', array(), '5.3.0');
        wp_register_style('hardsecurity-fontawesome', THEME_URI . '/assets/css/fontawesome.min.css', array(), '6.4.0');
        wp_register_style('hardsecurity-main', THEME_URI . '/assets/css/main.css', array(), '1.0.0');
        
        // Rejestr skryptów
        wp_register_script('hardsecurity-bootstrap', THEME_URI . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
        wp_register_script('hardsecurity-main', THEME_URI . '/assets/js/main.js', array('jquery'), '1.0.0', true);
        
        // Załaduj style
        wp_enqueue_style('hardsecurity-fonts');
        wp_enqueue_style('hardsecurity-bootstrap');
        wp_enqueue_style('hardsecurity-fontawesome');
        wp_enqueue_style('hardsecurity-main');
        
        // Załaduj skrypty
        wp_enqueue_script('hardsecurity-bootstrap');
        wp_enqueue_script('hardsecurity-main');
        
        // Dane lokalne dla skryptów
        wp_localize_script('hardsecurity-main', 'hardsecurity_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('hardsecurity_nonce'),
        ));
    }
}

// Rejestr sidebarów
if (!function_exists('_theme_register_sidebars')) {
    function _theme_register_sidebars() {
        register_sidebar(array(
            'name'          => esc_html__('Sidebar Primary', 'hardsecurity'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Main sidebar area', 'hardsecurity'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
        
        register_sidebar(array(
            'name'          => esc_html__('Footer Widgets', 'hardsecurity'),
            'id'            => 'sidebar-2',
            'description'   => esc_html__('Footer widget area', 'hardsecurity'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}

// Dodaj klasy do body
if (!function_exists('_theme_body_classes')) {
    function _theme_body_classes($classes) {
        if (is_single()) {
            $classes[] = 'single-post';
        }
        if (is_page()) {
            $classes[] = 'page';
        }
        if (is_front_page()) {
            $classes[] = 'home';
        }
        if (is_admin()) {
            $classes[] = 'admin';
        }
        return $classes;
    }
}

// Funkcje pomocnicze
if (!function_exists('hardsecurity_get_template_part')) {
    function hardsecurity_get_template_part($slug, $name = null) {
        ob_start();
        get_template_part($slug, $name);
        return ob_get_clean();
    }
}

// Klasa motywu
if (!class_exists('Hardsecurity_Theme')) {
    class Hardsecurity_Theme {
        protected static $instance;
        
        public static function get_instance() {
            if (!self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        
        protected function __construct() {
            $this->init();
        }
        
        protected function init() {
            // Inicjalizacja komponentów
            $this->setup_customizer();
            $this->setup_elementor();
            $this->setup_ajax();
            $this->setup_shortcodes();
            $this->setup_metaboxes();
        }
        
        protected function setup_customizer() {
            // Konfiguracja Customizera
            add_action('customize_register', array($this, 'customize_register'));
            add_action('customize_controls_enqueue_scripts', array($this, 'customize_controls_enqueue_scripts'));
        }
        
        public function customize_register($wp_customize) {
            // Dodaj sekcje i opcje
            $this->add_customizer_section($wp_customize);
        }
        
        protected function add_customizer_section($wp_customize) {
            // Sekcja ogólna
            $wp_customize->add_section('hardsecurity_general', array(
                'title'    => __('Hardsecurity General', 'hardsecurity'),
                'priority' => 10,
            ));
            
            // Sekcja Hero
            $wp_customize->add_section('hardsecurity_hero', array(
                'title'    => __('Hardsecurity Hero Section', 'hardsecurity'),
                'priority' => 20,
            ));
            
            // Sekcja Services
            $wp_customize->add_section('hardsecurity_services', array(
                'title'    => __('Hardsecurity Services', 'hardsecurity'),
                'priority' => 30,
            ));
            
            // Sekcja Articles
            $wp_customize->add_section('hardsecurity_articles', array(
                'title'    => __('Hardsecurity Articles', 'hardsecurity'),
                'priority' => 40,
            ));
            
            // Sekcja Partners
            $wp_customize->add_section('hardsecurity_partners', array(
                'title'    => __('Hardsecurity Partners', 'hardsecurity'),
                'priority' => 50,
            ));
            
            // Sekcja Stats
            $wp_customize->add_section('hardsecurity_stats', array(
                'title'    => __('Hardsecurity Stats', 'hardsecurity'),
                'priority' => 60,
            ));
            
            // Sekcja Testimonials
            $wp_customize->add_section('hardsecurity_testimonials', array(
                'title'    => __('Hardsecurity Testimonials', 'hardsecurity'),
                'priority' => 70,
            ));
            
            // Sekcja About
            $wp_customize->add_section('hardsecurity_about', array(
                'title'    => __('Hardsecurity About', 'hardsecurity'),
                'priority' => 80,
            ));
            
            // Sekcja Contact
            $wp_customize->add_section('hardsecurity_contact', array(
                'title'    => __('Hardsecurity Contact', 'hardsecurity'),
                'priority' => 90,
            ));
        }
        
        protected function setup_elementor() {
            // Integracja z Elementor
            add_action('elementor/loaded', array($this, 'elementor_loaded'));
        }
        
        public function elementor_loaded() {
            // Dodaj widgety Elementor
            require_once THEME_DIR . '/includes/elementor-widgets.php';
        }
        
        protected function setup_ajax() {
            // Obsługa żądań AJAX
            add_action('wp_ajax_hardsecurity_action', array($this, 'handle_ajax'));
            add_action('wp_ajax_nopriv_hardsecurity_action', array($this, 'handle_ajax'));
        }
        
        public function handle_ajax() {
            // Przetwarzanie żądań AJAX
            check_ajax_referer('hardsecurity_nonce', 'nonce');
            
            // Tutaj kod odpowiedzi
            wp_send_json_success(array(
                'message' => __('Action completed successfully', 'hardsecurity'),
            ));
        }
        
        protected function setup_shortcodes() {
            // Rejestr shortcode'ów
            add_shortcode('hardsecurity_button', array($this, 'shortcode_button'));
            add_shortcode('hardsecurity_icon', array($this, 'shortcode_icon'));
        }
        
        public function shortcode_button($atts, $content = null) {
            $atts = shortcode_atts(array(
                'url'  => '#',
                'text' => __('Click me', 'hardsecurity'),
                'class' => '',
            ), $atts, 'hardsecurity_button');
            
            return sprintf('<a href="%s" class="btn %s">%s</a>', esc_url($atts['url']), esc_attr($atts['class']), esc_html($atts['text']));
        }
        
        public function shortcode_icon($atts) {
            $atts = shortcode_atts(array(
                'icon' => 'fa-solid fa-check',
                'size' => '1x',
            ), $atts, 'hardsecurity_icon');
            
            return sprintf('<i class="%s fa-%s"></i>', esc_attr($atts['icon']), esc_attr($atts['size']));
        }
        
        protected function setup_metaboxes() {
            // Rejestr metaboxes
            add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        }
        
        public function add_meta_boxes() {
            add_meta_box(
                'hardsecurity_settings',
                __('Hardsecurity Settings', 'hardsecurity'),
                array($this, 'render_meta_box'),
                'post',
                'side'
            );
        }
        
        public function render_meta_box($post) {
            // Renderowanie metaboxa
            wp_nonce_field('hardsecurity_meta_box', 'hardsecurity_meta_box_nonce');
            ?>
            <p>
                <label for="hardsecurity_custom_field"><?php _e('Custom Field:', 'hardsecurity'); ?></label><br>
                <input type="text" id="hardsecurity_custom_field" name="hardsecurity_custom_field" value="<?php echo esc_attr(get_post_meta($post->ID, 'hardsecurity_custom_field', true)); ?>">
            </p>
            <?php
        }
    }
    
    // Inicjalizacja klasy motywu
    require_once THEME_DIR . '/includes/hardsecurity-theme.php';
}

// Uruchom motyw
Hardsecurity_Theme::get_instance();