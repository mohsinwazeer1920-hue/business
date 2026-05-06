<?php get_header(); ?>

<section id="page-header" class="blog-header">
    <div class="header-overlay"></div>
    <div class="header-content">
        <span class="blog-eyebrow">Our Journal</span>
        <h2>#ReadMore</h2>
        <p>Insights, stories, and ideas worth sharing</p>
    </div>
</section>

<section id="blog" class="section-p1">
    <div class="blog-grid-wrapper">

        <?php
        $blog_posts = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
        ));

        $is_first = true;

        if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) : $blog_posts->the_post();

            $date       = get_the_date('M j');
            $year       = get_the_date('Y');
            $thumb_url  = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $categories = get_the_category();
            $cat_name   = $categories ? esc_html($categories[0]->name) : '';
            $content    = get_the_content();
            $word_count = str_word_count(strip_tags($content));
            $read_time  = ceil($word_count / 200);
        ?>

        <?php if ($is_first) : $is_first = false; ?>
        <!-- Featured First Post -->
        <div class="featured-post-wrap">
            <div class="featured-post-img">
                <a href="<?php the_permalink(); ?>">
                    <?php if ($thumb_url) : ?>
                        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                        <div class="no-img-placeholder"></div>
                    <?php endif; ?>
                </a>
            </div>
            <div class="featured-post-body">
                <?php if ($cat_name) : ?>
                    <span class="post-category"><?php echo $cat_name; ?></span>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>">
                    <h2 class="featured-post-title"><?php the_title(); ?></h2>
                </a>
                <p class="featured-post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                <div class="blog-meta-row">
                    <div class="blog-meta-info">
                        <span class="meta-author-name"><?php the_author(); ?></span>
                        <span class="meta-dot">·</span>
                        <span><?php echo $date . ', ' . $year; ?></span>
                        <span class="meta-dot">·</span>
                        <span><?php echo $read_time; ?> min read</span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="read-more-link">
                        Read Article
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <?php else : ?>
        <!-- Regular Post Card -->
        <div class="blog-box blog-card">
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>">
                    <?php if ($thumb_url) : ?>
                        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                        <div class="no-img-placeholder"></div>
                    <?php endif; ?>
                    <div class="img-overlay"></div>
                </a>
            </div>
            <div class="blog-details">
                <div class="card-top-meta">
                    <?php if ($cat_name) : ?>
                        <span class="post-category"><?php echo $cat_name; ?></span>
                    <?php endif; ?>
                    <span class="post-date-badge"><?php echo $date; ?></span>
                </div>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                <div class="card-footer-row">
                    <span class="read-time-badge"><?php echo $read_time; ?> min read</span>
                    <a href="<?php the_permalink(); ?>" class="continue-link">Continue →</a>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<div class="no-posts-msg"><p>No blog posts found.</p></div>';
        endif;
        ?>

    </div>

    <!-- Pagination -->
    <div class="blog-pagination">
        <?php echo paginate_links(array(
            'prev_text' => '← Prev',
            'next_text' => 'Next →',
        )); ?>
    </div>

</section>

<!-- Newsletter -->
<section id="newsLetter" class="section-p1 section-m1">
    <div class="newsletter-inner">
        <div class="newstext">
            <span class="news-eyebrow">Stay in the loop</span>
            <h4>Sign Up For Newsletter</h4>
            <p>Get email updates about our latest articles and <span>special offers</span></p>
        </div>
         <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="1ece48a" title="newsletter"]'); ?>
    </div>
    </div>
</section>

<?php get_footer(); ?>