<?php get_header(); ?>

    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & upto 70% off!</p>
    </section>

    
    
    <section id="product1" class="section-p1">
     
     <div class="pro-container">
        <div class="pro">
          <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg" onclick="window.location.href='2product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
            <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <?php echo esc_html($newsCatData->name); ?>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#" class="add-to-cart"
             data-id="f1"
             data-name="Cartoon Astronaut T-Shirt"
             data-price="78"
             data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg">
             <i class="fa-solid fa-cart-shopping"></i>
            </a>

        </div>
        <div class="pro">
          <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f2.jpg" onclick="window.location.href='2product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Oxford Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f1"
   data-name="Cartoon Astronaut T-Shirt"
   data-price="78"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f2.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg" onclick="window.location.href='3product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Astrounaut Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$80</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f3"
   data-name="Oxford Shirts"
   data-price="80"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg" onclick="window.location.href='4product.html';"> 
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Dress Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$82</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f4"
   data-name="Dress Shirts"
   data-price="82"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
           <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f5.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Short Sleeve Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$85</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f5"
   data-name="Short-Sleeve Shirt"
   data-price="85"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f5.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f5.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Cuban collar Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f6"
   data-name="Cuban Collar Shirt"
   data-price="88"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f6.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f7.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Polar paint</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$90</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f7"
   data-name="Polo paint"
   data-price="90"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f7.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f8.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>(Fabric) Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$92</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f8"
   data-name="(Fabric) Shirt"
   data-price="90"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f8.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
   
     

        <div class="pro">
           <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n1.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Flannel Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$92</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n1"
   data-name="Flannel shirt "
   data-price="92"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n1.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n2.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Checkered Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$95</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n2"
   data-name="Checkered Shirt"
   data-price="95"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/product/n2.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Formal Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$98</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n3"
   data-name="Formal shirt"
   data-price="98"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n4.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Denim Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$99.5</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n4"
   data-name="Denim shirt"
   data-price="99.5"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n4.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n5.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Corduroy Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$100</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n5"
   data-name="Corduroy shirt"
   data-price="100"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n5.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
           <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n6.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Oxford paint</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$102</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n6"
   data-name="Oxford paint"
   data-price="102"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n6.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n7.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Chambray Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$104</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n7"
   data-name="Chambray shirt"
   data-price="104"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n7.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n8.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Linen Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$105</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n8"
   data-name="Linen shirt"
   data-price="105"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n8.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
         <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Formal Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$98</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n3"
   data-name="Formal shirt"
   data-price="98"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n4.jpg" onclick="window.location.href='1product.html';">
            <div class="des">
                <span>adidas</span>
                 <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Cartoon Astronaut T-Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f1"
   data-name="Cartoon Astronaut T-Shirt"
   data-price="78"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f2.jpg" onclick="window.location.href='2product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Cartoon Astronaut T-Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f1"
   data-name="Cartoon Astronaut T-Shirt"
   data-price="78"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
           <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg" onclick="window.location.href='3product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Oxford Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$80</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f3"
   data-name="Oxford Shirts"
   data-price="80"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg"  onclick="window.location.href='4product.html';"> 
            <div class="des">
                <span>adidas</span>
               <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Dress Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$82</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f4"
   data-name="Dress Shirts"
   data-price="82"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
         <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Formal Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$98</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n3"
   data-name="Formal shirt"
   data-price="98"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f5.jpg" alt="" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Short Sleeve Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$85</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f5"
   data-name="Short-Sleeve Shirt"
   data-price="85"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f5.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f6.jpg" alt="" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Cubon Collar Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f6"
   data-name="Cuban Collar Shirt"
   data-price="88"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f6.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f7.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Polo Paint</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$90</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f7"
   data-name="Polo paint"
   data-price="90"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f7.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f8.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>(Fabric) Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$92</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f8"
   data-name="(Fabric) Shirt"
   data-price="90"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f8.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
         <div class="pro">
           <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Formal Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$98</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n3"
   data-name="Formal shirt"
   data-price="98"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
   
     

        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n1.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Flannel Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$92</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n1"
   data-name="Flannel shirt "
   data-price="92"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n1.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n2.jpg" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Checkerd Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$95</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n2"
   data-name="Checkered Shirt"
   data-price="95"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/product/n2.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg" alt="" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Formal Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$98</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n3"
   data-name="Formal shirt"
   data-price="98"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n4.jpg" alt="" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Denim Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$99.5</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n4"
   data-name="Denim shirt"
   data-price="99.5"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n4.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
         <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg" alt="" onclick="window.location.href='5product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Formal Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$98</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="n3"
   data-name="Formal shirt"
   data-price="98"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/n3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg" alt="" onclick="window.location.href='1product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Cartoon Astronaut T-Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f1"
   data-name="Cartoon Astronaut T-Shirt"
   data-price="78"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f2.jpg" alt="" onclick="window.location.href='2product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Oxford Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f1"
   data-name="Cartoon Astronaut T-Shirt"
   data-price="78"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg" alt="" onclick="window.location.href='3product.html';">
            <div class="des">
                <span>adidas</span>
                <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Oxford Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$80</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f3"
   data-name="Oxford Shirts"
   data-price="80"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
        <div class="pro">
           <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg" alt=""  onclick="window.location.href='4product.html';"> 
            <div class="des">
                <span>adidas</span>
               <?php $newsCat=get_terms(['taxonomy'=>'cloths']);
                    foreach ($newsCat as $newsCatData){
                ?>
                 <h5>
              <a href="<?php echo esc_url(get_term_link($newsCatData)); ?>">
               <h5>Dress Shirt</h5>
              </a>
            </h5>
                
                <?php } ?>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$82</h4>
            </div>
            <a href="#" class="add-to-cart"
   data-id="f4"
   data-name="Dress Shirts"
   data-price="82"
   data-image="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg">
   <i class="fa-solid fa-cart-shopping"></i>
</a>

        </div>
     </div>
     <p  class="no-result">No products found 😔</p>

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
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

<?php get_footer(); ?>