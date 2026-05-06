<?php get_header(); ?>

<section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & upto 70% off!</p>
</section>

<section id="product1" class="section-p1">
    <div class="shop-toolbar">

  <!-- FILTER -->
  <div class="filter-container">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="shirt">Shirts</button>
    <button class="filter-btn" data-filter="trouser">Trousers</button>
    <button class="filter-btn" data-filter="pant">Paints</button>
  </div>

  <!-- search bar -->
  <div class="search-box">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="text" id="shopSearch" placeholder="Search products..." />
  </div>

  <!-- SORT -->
  <div class="sort-container">
    <label>Sort by:</label>
    <select id="sort">
      <option value="default">Default</option>
      <option value="price-low">Price: Low to High</option>
      <option value="price-high">Price: High to Low</option>
      <option value="name-a">Name A → Z</option>
      <option value="name-z">Name Z → A</option>
    </select>
  </div>

</div>

<div class="pro-container">

<p class="no-result" style="display:none;">No products found 😔</p>

<?php
$products = new WP_Query(array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
));

if ($products->have_posts()) :

while ($products->have_posts()) : $products->the_post();

$price  = get_post_meta(get_the_ID(), 'price', true);
$brand  = get_post_meta(get_the_ID(), 'brand', true);
$rating = get_post_meta(get_the_ID(), 'rating', true);
$rating = $rating ? (int)$rating : 5;

$category = get_post_meta(get_the_ID(), 'product_category', true);
$thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
?>

<div class="pro" data-category="<?php echo esc_attr(strtolower($category)); ?>">

    <!-- IMAGE CLICKABLE -->
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/beginner/img/products/f2.jpg" alt="no image">
        <?php endif; ?>
    </a>

    <div class="des">
        <span><?php echo esc_html($brand); ?></span>

        <h5>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h5>

        <!-- EXCERPT -->
        <p class="pro-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 8, '...'); ?>
        </p>

        <!-- STAR RATING -->
        <div class="star">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <?php if ($i <= $rating) : ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

        <h4>$<?php echo esc_html($price); ?></h4>
    </div>

    <!-- ADD TO CART -->
    <a href="#" class="add-to-cart"
        data-id="<?php echo get_the_ID(); ?>"
        data-name="<?php the_title_attribute(); ?>"
        data-price="<?php echo esc_attr($price); ?>"
        data-image="<?php echo esc_url($thumb_url); ?>">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>

</div>

<?php
endwhile;
wp_reset_postdata();

else :
    echo '<script>document.querySelector(".no-result").style.display="block";</script>';
endif;
?>

</div>

</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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