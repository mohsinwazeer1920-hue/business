<?php get_header(); ?>

<section id="prodetails" class="section-p1">

    <div class="single-pro-image">
        <?php the_post_thumbnail('large'); ?>
    </div>

    <div class="single-pro-details">
        <h4><?php the_title(); ?></h4>

        <?php
        $terms = get_the_terms(get_the_ID(), 'cloths');
        if ($terms) {
            echo '<span>'.$terms[0]->name.'</span>';
        }
        ?>

        <h2>$78</h2>

        <p><?php the_content(); ?></p>
    </div>

</section>

<?php get_footer(); ?>