
<?php
// this is our first theme
 get_header(); ?>


    <?php get_template_part('template-parts/homeFeatured') ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
        <?php endwhile; ?>
    <?php endif; ?>


<?php 
get_sidebar(); 
get_footer();
?>











