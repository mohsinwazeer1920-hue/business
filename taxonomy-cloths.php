<?php
get_header();
?>

 <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg" width="100%" id="MainImg" alt="">
            <div class="small-image-group">
                <div class="small-image-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg" width="100%" class="small-image" alt="">
                </div>
                <div class="small-image-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f2.jpg" width="100%" class="small-image" alt="">
                </div>
                <div class="small-image-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg" width="100%" class="small-image" alt="">
                </div>
                <div class="small-image-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg" width="100%" class="small-image" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Men's Fashion T-Shirt</h4>
            <option>Select Size</option>
            <h2>$78.00</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora dolore incidunt expedita 
            id sapiente quas necessitatibus alias distinctio voluptatem magni ut aspernatur voluptate soluta libero,
            quae laborum quaerat molestiae Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat modi fugiat
            omnis laborum perferendis,quos possimus fuga repellat ab voluptates ad fugit culpa vitae facere amet inventore quia, voluptatibus corporis. </span>
        </div>
    </section>

 <section id="product1" class="section-p1">
     <h2>Featured Products</h2>
     <p>Summer Collection New Modern Design</p>
     
     <div class="pro-container">
        <div class="pro">
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f1 (1).jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astrounaut T-Shirts</h5>
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
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Oxford Shirts</h5>
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
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Oxford Shirts</h5>
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
            <img src="<?php echo get_template_directory_uri(); ?>/beginner/assets/img/products/f4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Dress Shirts</h5>
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
     <p class="no-result">No products found 😔</p>

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

<?php
get_footer();
?>