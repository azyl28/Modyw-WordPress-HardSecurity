<?php
/**
 * Plugin Name: HardSecurity Demo Content
 * Description: Importuje przykładowe treści dla motywu HardSecurity. Wymaga zainstalowanego Elementor.
 * Version: 1.0
 * Author: HardSecurity
 */

if (!defined('ABSPATH')) exit;

function hs_import_admin_menu() {
    add_management_page('Import HS', 'Import HardSecurity', 'manage_options', 'hs-import', 'hs_import_page');
}
add_action('admin_menu', 'hs_import_admin_menu');

function hs_import_page() {
    if (!current_user_can('manage_options')) return;
    
    if (isset($_POST['hs_import'])) {
        // Check Elementor
        if (!is_plugin_active('elementor/elementor.php')) {
            echo '<div class="error"><p>ZAINSTALUJ ELEMENTOR PRZED IMPORTEM!</p></div>';
        } else {
            // Create main page
            $page_id = wp_insert_post(array(
                'post_title' => 'Strona główna',
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_name' => 'home'
            ));
            update_post_meta($page_id, '_wp_page_template', 'elementor_canvas');
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_id);
            
            // Create menu
            $menu_id = wp_create_nav_menu('Main Menu');
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Start', 'menu-item-url' => home_url('/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Usługi', 'menu-item-url' => home_url('/#services'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Kontakt', 'menu-item-url' => home_url('/#contact'), 'menu-item-status' => 'publish'));
            
            $locations = get_theme_mod('nav_menu_locations');
            $locations['primary'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
            
            echo '<div class="updated"><p>✓ Import zakończony!</p></div>';
        }
    }
    
    echo '<div class="wrap"><h1>Import HardSecurity</h1>';
    echo '<form method="post">';
    echo '<p>Kliknij import aby utworzyć stronę główną i menu.</p>';
    echo '<p><strong>Wymagania:</strong> Zainstaluj Elementor przed importem!</p>';
    echo '<p><input type="submit" name="hs_import" class="button button-primary" value="Importuj treści"></p>';
    echo '</form></div>';
}