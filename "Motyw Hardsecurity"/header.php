<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'hardsecurity'); ?></a>
    
    <!-- Header -->
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    </a>
                    <?php
                }
                ?>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            </div><!-- .site-branding -->
            
            <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => 'nav',
                'container_id'   => 'primary-menu',
                'menu_class'     => 'primary-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </div>
    </header><!-- #masthead -->
    
    <div id="content" class="site-content">