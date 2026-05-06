<?php get_header(); ?>

      <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & upto 70% off!</p>
        <button>Shop Now</button>
      </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/feature/f1.png">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/feature/f2.png">
            <h6>Online Order</h6>
        </div>
        
        <div class="fe-box">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/feature/f3.png">
            <h6>Save Money</h6>
        </div>
        

        <div class="fe-box">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/feature/f4.png">
            <h6>Promotions</h6>
        
        </div>
        <div class="fe-box">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/feature/f5.png">
            <h6>Happy Sell</h6>
        
        </div>
        <div class="fe-box">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/feature/f6.png">
            <h6>F24/7 Support</h6>
        </div>
    </section>
   <?php 
  // ================================================
// FEATURED PRODUCTS SECTION
// Yeh apne front-page.php mein pehle section#product1 ki jagah paste karo
// ================================================
?>
 
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
 
    <div class="pro-container">
        <?php
            $featured_products = new WP_Query(array(
                'post_type'      => 'product',
                'posts_per_page' => 8,
                'meta_query'     => array(
                    array(
                        'key'     => 'featured_product',
                        'value'   => '1',
                        'compare' => '=',
                    ),
                ),
            ));
        ?>
 
        <?php while ($featured_products->have_posts()) : $featured_products->the_post();
            setup_postdata($post);
 
            $price   = get_post_meta(get_the_ID(), 'price', true);
            $brand   = get_post_meta(get_the_ID(), 'brand', true);
            $rating  = get_post_meta(get_the_ID(), 'rating', true);
            $rating  = $rating ? (int)$rating : 5;
 
            $thumb_id  = get_post_thumbnail_id(get_the_ID());
            $thumb_url = wp_get_attachment_image_url($thumb_id, 'medium');
        ?>
 
        <div class="pro">
 
            <a href="<?php the_permalink(); ?>">
                <?php if ($thumb_url) : ?>
                    <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
            </a>
 
            <div class="des">
                <span><?php echo esc_html($brand); ?></span>
                <h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <div class="star">
                    <?php for ($i = 1; $i <= 5; $i++) {
                        echo $i <= $rating
                            ? '<i class="fas fa-star"></i>'
                            : '<i class="far fa-star"></i>';
                    } ?>
                </div>
                <h4>$<?php echo esc_html($price); ?></h4>
            </div>
 
            <a href="<?php the_permalink(); ?>" class="add-to-cart"
                data-id="<?php echo get_the_ID(); ?>"
                data-name="<?php the_title_attribute(); ?>"
                data-price="<?php echo esc_attr($price); ?>"
                data-image="<?php echo esc_url($thumb_url); ?>">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
 
        </div>
 
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
 
    </div>
    <p class="no-result" style="display:none;">No products found 😔</p>
</section>
 
 
<?php
// ================================================
// BANNER SECTION - same rehne do
// ================================================
?>
<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% Off</span> All t-Shirts & Accessories</h2>
    <button class="normal">Explore More</button>
</section>
 

<!-- ================== Latest Products ================== -->

<section id="product1" class="section-p1">
    <h2>Latest Products</h2>
    <p>Newly Added Products</p>

    <div class="pro-container">

        <?php
        $latest_products = new WP_Query(array(
            'post_type'      => 'product',
            'posts_per_page' => 8,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));
        ?>

        <?php if ($latest_products->have_posts()) : ?>
            <?php while ($latest_products->have_posts()) : $latest_products->the_post();

                $price   = get_post_meta(get_the_ID(), 'price', true);
                $brand   = get_post_meta(get_the_ID(), 'brand', true);
                $rating  = get_post_meta(get_the_ID(), 'rating', true);
                $rating  = $rating ? (int)$rating : 5;
                
                $category = get_post_meta(get_the_ID(), 'product_category', true);
                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            ?>

            <div class="pro" data-category="<?php echo esc_attr(strtolower($category)); ?>">

                <a href="<?php the_permalink(); ?>">
                    <?php if ($thumb_url) : ?>
                        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </a>

                <div class="des">
                    <span><?php echo esc_html($brand); ?></span>

                    <h5>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>

                    <div class="star">
                        <?php for ($i = 1; $i <= 5; $i++) {
                            echo $i <= $rating
                                ? '<i class="fas fa-star"></i>'
                                : '<i class="far fa-star"></i>';
                        } ?>
                    </div>

                    <h4>$<?php echo esc_html($price); ?></h4>
                </div>

                <a href="<?php the_permalink(); ?>" class="add-to-cart"
                    data-id="<?php echo get_the_ID(); ?>"
                    data-name="<?php the_title_attribute(); ?>"
                    data-price="<?php echo esc_attr($price); ?>"
                    data-image="<?php echo esc_url($thumb_url); ?>">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>

            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>

    <p class="no-result" style="display:none;">No products found 😔</p>
</section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The bestclassic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>Upcoming season</h2>
            <span>The bestclassic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>
    
    <section id="banner3">
        <div class="banner-box">
            <h2>Seasonal Sale</h2>
            <h3>Winter Collection -50% Off</h3>
        </div>
         <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
         <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div> 
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