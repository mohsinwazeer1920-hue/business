<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">


   <?php wp_head(); ?>

</head>

<body>
   <section id="header">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/logos/logo.png"></a>


      <div class="search-box">
         <i class="fa-solid fa-magnifying-glass"></i>
         <input type="text" id="searchInput" placeholder="Search products..." />
      </div>
      <div class="sort-container">
         <label for="sort">Sort by:</label>
         <select id="sort">
            <option value="default">Default</option>
            <option value="price-low">Price: Low to High</option>
            <option value="price-high">Price: High to Low</option>
            <option value="name-a">Name: A → Z</option>
            <option value="name-z">Name: Z → A</option>
         </select>
      </div>



      <div>
         <ul id="navbar">
            <li class="nav-logo">
               <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/logos/logo.png">
            </li>

            <li><a class="<?php if (is_home())
               echo 'active'; ?>" href="<?php echo home_url(); ?>">Home</a></li>
            <li><a class="<?php if (is_page('shop'))
               echo 'active'; ?>" href="<?php echo site_url('/shop'); ?>">Shop</a>
            </li>
            <li><a class="<?php if (is_page('blog'))
               echo 'active'; ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li><a class="<?php if (is_page('about'))
               echo 'active'; ?>" href="<?php echo site_url('/about'); ?>">About</a></li>
            <li><a class="<?php if (is_page('contact'))
               echo 'active'; ?>" href="<?php echo site_url('/contact'); ?>">Contact</a></li>

            <li class="nav-cart">
               <a href="#" id="cart-icon">
                  <i class="fa-solid fa-bag-shopping"></i>
               </a>
               <div id="cart-info" class="cart-info"></div>
            </li>


            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
         </ul>

      </div>
      <div id="mobile">
         <a href="cart.html"><i class="fa-notdog fa-solid fa-bag-shopping"></i></a>
         <i id="bar" class="fas fa-outdent"></i>
      </div>
   </section>