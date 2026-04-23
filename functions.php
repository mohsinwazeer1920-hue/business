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