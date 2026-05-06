<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

<?php
$price = get_post_meta(get_the_ID(), 'price', true);
$brand = get_post_meta(get_the_ID(), 'brand', true);
?>

<section id="prodetails" class="section-p1">

   <div class="single-pro-image">

    <!-- MAIN IMAGE -->
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" id="MainImg" width="100%">

    <!-- GALLERY IMAGES -->
    <?php
    $gallery = get_post_meta(get_the_ID(), 'product_gallery', true);

    if ($gallery) {
        $ids = explode(',', $gallery);
        echo '<div class="small-image-group">';

        foreach ($ids as $id) {
            $img = wp_get_attachment_image_url($id, 'thumbnail');
            echo '<div class="small-image-col">';
            echo '<img src="'.esc_url($img).'" class="small-img">';
            echo '</div>';
        }

        echo '</div>';
    }
    ?>

</div>

    <div class="single-pro-details">
        <h6>Home / <?php the_title(); ?></h6>
        <h4><?php echo $brand; ?></h4>
        <h2>$<?php echo $price; ?></h2>

        <input type="number" id="product-qty" value="1" min="1" style="width:60px; padding:6px; margin-right:10px;">

         <!-- <h4>Select Size</h4> -->
          <select id="product-size">
            <option value="">Choose Size</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>

        <button class="add-to-cart single-page"
         data-id="<?php echo get_the_ID(); ?>"
         data-name="<?php the_title(); ?>"
         data-price="<?php echo $price; ?>"
         data-image="<?php echo get_the_post_thumbnail_url(); ?>"
         data-qty="1" style="background:#088178; color:#fff; border:none; padding:10px 18px; border-radius:8px; cursor:pointer; transition:0.3s;">
         Add to Cart
        </button>
        <h4>Product Details</h4>
        <p><?php the_content(); ?></p>
    </div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>