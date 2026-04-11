<?php
/**
 * The header for our theme
 *
 * @package HardSecurity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'hardsecurity'); ?></a>

    <header id="masthead" class="navbar">
        <div class="nav-container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 2L4 12V28L20 38L36 28V12L20 2Z" stroke="#66CCFF" stroke-width="2" fill="none"/>
                        <path d="M20 10L10 16V24L20 30L30 24V16L20 10Z" fill="#66CCFF"/>
                    </svg>
                    <div class="logo-text-group">
                        <span class="logo-text">HardSecurity</span>
                        <span class="logo-subtitle">cyberbezpieczeństwo</span>
                    </div>
                </a>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>

            <a href="#contact" class="nav-cta">Kontakt</a>
        </div>
    </header>

    <main id="primary" class="site-main">