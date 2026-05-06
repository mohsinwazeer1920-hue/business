<?php get_header(); ?>

<section id="contact" class="section-p1">
    <h2>Contact Us</h2>
    <p class="contact-sub">We’d love to hear from you</p>

    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>

</section>
 <section id="newsLetter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail Updates about our latest Shop and <span>Special offers</span></p>
        </div>
        <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="1ece48a" title="newsletter"]'); ?>
    </div>
    </section>

<?php get_footer(); ?>