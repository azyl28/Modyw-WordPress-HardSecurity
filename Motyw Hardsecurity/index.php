<?php
/**
 * The main template file
 * 
 * @package Hardsecurity
 */

get_header();
?>

<!-- Hero Section -->
<?php if (is_front_page()) : ?>
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            <a href="#services" class="btn">Dowiedz się więcej</a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Main Content -->
<div id="content" class="site-content">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (is_single()) : ?>
                        <h1><?php the_title(); ?></h1>
                    <?php else : ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php endif; ?>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
            
            the_posts_navigation();
        else :
            ?>
            <p><?php _e('Nie znaleziono treści.', 'hardsecurity'); ?></p>
            <?php
        endif;
        ?>
    </div>
</div>

<?php
get_footer();