<?php


function wplearning_theme_setup() {

    // title function
    add_theme_support('title-tag');


    add_theme_support('post-thumbnails');


    add_theme_support('automatic-feed-links');
}
 
add_action('after_setup_theme', 'wplearning_theme_setup');


function mohsin_assets() {

    // CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/beginner/assets/css/style.css');
    

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
    

    // Background Images All
    $hero_image_url = get_template_directory_uri() . '/beginner/assets/img/hero/hero4.png';
    $button_image_url = get_template_directory_uri() . '/beginner/assets/img/button/button.png';
    $banner1_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b2.jpg';
    $banner2_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b17.jpg';
    $banner3_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b10.jpg';
    $banner4_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b7.jpg';
    $banner5_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b4.jpg';
    $banner6_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b18.jpg';
    $pageshop_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b1.jpg';
    $pageblog_image_url = get_template_directory_uri(). '/beginner/assets/img/banner/b19.jpg';


    $custom_css = "
    #hero { background-image: url('{$hero_image_url}'); }
    #hero button { background-image: url('{$button_image_url}'); }
    #banner { background-image: url('{$banner1_image_url}'); }
    #sm-banner .banner-box { background-image: url('{$banner2_image_url}'); }
    #sm-banner .banner-box2 { background-image: url('{$banner3_image_url}'); }
    #banner3 .banner-box { background-image: url('{$banner4_image_url}'); }
    #banner3 .banner-box2 { background-image: url('{$banner5_image_url}'); }
    #banner3 .banner-box3 { background-image: url('{$banner6_image_url}'); }
    #page-header { background-image: url('{$pageshop_image_url}'); }
    #page-header.blog-header { background-image: url('{$pageblog_image_url}'); }
    ";

    wp_add_inline_style('main-style', $custom_css);

    
    wp_enqueue_style('responsive-style', get_template_directory_uri() . 
    '/beginner/assets/css/responsive.css',array('main-style') );
     

    // JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/beginner/assets/js/my-js.js', [], false, 
    true);

    
}

add_action('wp_enqueue_scripts', 'mohsin_assets');


function create_product_post_type() {
    register_post_type('product', array(
        'labels' => array(
            'name'          => 'Products',
            'singular_name' => 'Product',
            'add_new_item'  => 'Add New Product',
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'), // excerpt add kiya
        'rewrite'       => array('slug' => 'product'),
        'show_in_rest'  => true,
    ));
}
add_action('init', 'create_product_post_type');
 
// ============================================
// Product Details Meta Box
// ============================================
function add_product_meta_boxes() {
    add_meta_box(
        'product_details',
        'Product Details',
        'product_details_callback',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_product_meta_boxes');
 
function product_details_callback($post) {
 
    $rating          = get_post_meta($post->ID, 'rating', true);
    $price           = get_post_meta($post->ID, 'price', true);
    $brand           = get_post_meta($post->ID, 'brand', true);
    $featured        = get_post_meta($post->ID, 'featured_product', true); // featured value
    ?>
    <table>
        <tr>
            <td><label> Price:</label></td>
            <td>
                <input 
                    type="text" 
                    name="price" 
                    value="<?php echo esc_attr($price); ?>"
                    placeholder="e.g. 78"
                    style="width:200px; padding:5px;">
            </td>
        </tr>
        <br>
        <tr>
            <td><label> Brand:</label></td>
            <td>
                <input 
                    type="text" 
                    name="brand" 
                    value="<?php echo esc_attr($brand); ?>"
                    placeholder="e.g. Adidas"
                    style="width:200px; padding:5px;">
            </td>
        </tr>
        <br>
        <tr>
            <td><label> Rating:</label></td>
            <td>
                <input 
                    type="number" 
                    name="rating" 
                    value="<?php echo esc_attr($rating); ?>"
                    placeholder="1 to 5"
                    min="1"
                    max="5"
                    style="width:200px; padding:5px;">
            </td>
        </tr>
        <br>
        <!-- Featured Product Checkbox -->
        <tr>
            <td><label> Featured Product:</label></td>
            <td>
                <input 
                    type="checkbox" 
                    name="featured_product" 
                    value="1"
                    <?php checked($featured, '1'); ?> // agar pehle se checked hai to checked rahega
                    style="width:20px; height:20px;">
                <span style="color:#666; font-size:13px;"></span>
            </td>
        </tr>
    </table>
    <?php
}
 
function save_product_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
 
    if (isset($_POST['price'])) {
        update_post_meta($post_id, 'price', sanitize_text_field($_POST['price']));
    }
    if (isset($_POST['brand'])) {
        update_post_meta($post_id, 'brand', sanitize_text_field($_POST['brand']));
    }
    if (isset($_POST['rating'])) {
        update_post_meta($post_id, 'rating', intval($_POST['rating']));
    }
 
    // Featured product — checkbox unchecked ho to '0' save karo
    if (isset($_POST['featured_product'])) {
        update_post_meta($post_id, 'featured_product', '1');
    } else {
        update_post_meta($post_id, 'featured_product', '0');
    }
}
add_action('save_post', 'save_product_meta');


// ================= PRODUCT GALLERY =================
function add_product_gallery_meta_box() {
    add_meta_box(
        'product_gallery',
        'Product Gallery',
        'product_gallery_callback',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_product_gallery_meta_box');

function product_gallery_callback($post) {
    $gallery = get_post_meta($post->ID, 'product_gallery', true);
    ?>
    
    <div id="gallery-wrapper">
        <input type="hidden" id="product-gallery" name="product_gallery" value="<?php echo esc_attr($gallery); ?>">
        
        <button type="button" class="button" id="add-gallery-images">
            Add Gallery Images
        </button>

        <div id="gallery-preview" style="margin-top:10px;">
<?php
if ($gallery) {
    $ids = explode(',', $gallery);
    foreach ($ids as $id) {
        $img = wp_get_attachment_image_url($id, 'thumbnail');
        ?>
        <div class="gallery-item" data-id="<?php echo $id; ?>" style="display:inline-block; position:relative; margin:5px;">
            <img src="<?php echo esc_url($img); ?>" style="width:80px;">
            <span class="remove-image" style="position:absolute; top:0; right:0; background:red; color:#fff; cursor:pointer; padding:2px 5px;">×</span>
        </div>
        <?php
    }
}
?>
</div>
    </div>

    <script>
    jQuery(document).ready(function($){
        let frame;

        $('#add-gallery-images').on('click', function(e){
            e.preventDefault();

            if (frame) {
                frame.open();
                return;
            }

            frame = wp.media({
                title: 'Select Images',
                button: { text: 'Use Images' },
                multiple: true
            });

            frame.on('select', function(){
                let selection = frame.state().get('selection');
                let ids = [];

                $('#gallery-preview').html('');

                selection.map(function(attachment){
                    attachment = attachment.toJSON();
                    ids.push(attachment.id);

                    $('#gallery-preview').append(
                        '<img src="'+attachment.sizes.thumbnail.url+'" style="margin:5px;">'
                    );
                });

                $('#product-gallery').val(ids.join(','));
            });

            frame.open();
        });
    });
    </script>

    <?php
}

// SAVE
function save_product_gallery($post_id) {
    if (isset($_POST['product_gallery'])) {
        update_post_meta($post_id, 'product_gallery', sanitize_text_field($_POST['product_gallery']));
    }
}
add_action('save_post', 'save_product_gallery');
 


function add_product_category_field() {
    add_meta_box(
        'product_category_box',
        'Product Category',
        'product_category_callback',
        'product',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_product_category_field');

function product_category_callback($post) {
    $category = get_post_meta($post->ID, 'product_category', true);
    ?>

    <label>Category:</label>
    <input type="text" name="product_category"
        value="<?php echo esc_attr($category); ?>"
        placeholder="shirt / trouser / pant"
        style="width:100%; padding:5px;">

    <?php
}

// SAVE CATEGORY
function save_product_category($post_id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['product_category'])) {
        update_post_meta(
            $post_id,
            'product_category',
            sanitize_text_field($_POST['product_category'])
        );
    }
}
add_action('save_post', 'save_product_category');


// =========iski madad sa email nhi jae gi or eror nhi ae ga=============

add_filter('wpcf7_skip_mail', '__return_true');