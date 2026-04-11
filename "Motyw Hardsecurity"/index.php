<?php
/**
 * The main template file
 * 
 * @package Hardsecurity
 */

get_header();

// Rozpocznij pętlę
if (have_posts()) :
    while (have_posts()) :
        the_post();
        
        // Sprawdź, czy to jest strona główna
        if (is_front_page()) :
            // Pobierz zawartość strony głównej
            get_template_part('template-parts/content', 'home');
        elseif (is_single()) :
            // Pobierz szablon pojedynczego posta
            get_template_part('template-parts/content', 'single');
        elseif (is_page()) :
            // Pobierz szablon strony
            get_template_part('template-parts/content', 'page');
        else :
            // Domyślny szablon archiwum
            get_template_part('template-parts/content', 'archive');
        endif;
        
    endwhile;
endif;

get_footer();