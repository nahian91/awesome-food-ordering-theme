<?php
/**
 * Template Name: Static Home with Menu
 */

get_header(); ?>

<div class="banner-area banner-style-two navigation-circle navigation-dark overflow-hidden">
    <div class="banner-fade swiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="container">
                    <div class="content">
                        <div class="row align-center">
                            <div class="col-lg-6">
                                <h2>Fresh Ingredients, Better Taste</h2>
                                <h4>Experience the authentic flavor</h4>
                                <p>We serve the best food in town with a focus on quality and hygiene. Order your favorite meal now.</p>
                                <div class="button mt-40">
                                    <a class="btn btn-theme btn-md animation" href="#">Order Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/1.png" alt="Banner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/1.png" alt="Shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-nav-left">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>  
</div>

<div class="food-menu-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="fd-category-grid sticky-top" style="top: 100px;">
                    <h5 class="mb-3" style="font-weight: 800;">Categories</h5>
                    <a href="#burgers" class="fd-cat-item">Burgers</a>
                    <a href="#pizza" class="fd-cat-item">Pizza</a>
                    <a href="#drinks" class="fd-cat-item">Drinks</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div id="burgers" class="food-menu-wrapper mb-50">
                    <h3 class="category-title">Burgers</h3>
                    
                    <div class="fd-food-card-style-2">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/burger-1.jpg" alt="Food">
                        </div>
                        <div class="info">
                            <div class="head">
                                <h5>Classic Beef Burger</h5>
                                <span class="price">£9.50</span>
                            </div>
                            <p>Juicy beef patty with fresh lettuce, tomato, and our secret sauce.</p>
                            <button class="order-btn">Add +</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="fd-cart-sidebar-wrapper sticky-top" style="top: 100px;">
                    <div class="fd-cart-container">
                        <h4 style="font-weight: 800;">Your Order</h4>
                        <div id="fd-cart-list">
                            <p class="text-muted">Your cart is empty.</p>
                        </div>
                        <div class="fd-cart-footer">
                            <div class="total-row">
                                <span>Total</span>
                                <span id="fd-total-due">£0.00</span>
                            </div>
                            <a href="#" class="btn btn-theme btn-sm w-100 mt-3">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-style-one-area default-padding bg-gray bg-cover text-center" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/shape/4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-style-one-carousel swiper">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="testimonial-style-one">
                                <div class="item">
                                    <div class="content">
                                        <div class="tm-review">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                        <div class="provider">
                                            <h4>John Doe</h4>
                                        </div>
                                        <p>"The best burger I've had in a long time. Fast delivery and hot food!"</p>
                                        <div class="tm-proivder-thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/1.jpg" alt="Reviewer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial-pagination">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Essential UI Styles */
.fd-cat-item { display: block; padding: 12px 15px; background: #fff; border-radius: 10px; margin-bottom: 10px; text-decoration: none; color: #333; font-weight: 600; border: 1px solid #eee; transition: 0.3s; }
.fd-cat-item:hover { background: #d63638; color: #fff; border-color: #d63638; }
.fd-food-card-style-2 { display: flex; gap: 20px; background: #fff; padding: 20px; border-radius: 20px; margin-bottom: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
.fd-food-card-style-2 .thumb img { width: 90px; height: 90px; border-radius: 15px; object-fit: cover; }
.fd-food-card-style-2 .info { flex: 1; }
.fd-food-card-style-2 .head { display: flex; justify-content: space-between; align-items: center; }
.fd-food-card-style-2 .price { color: #d63638; font-weight: 800; }
.category-title { font-weight: 800; margin-bottom: 25px; border-left: 4px solid #d63638; padding-left: 15px; }
.fd-cart-container { background: #fff; padding: 25px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
.total-row { display: flex; justify-content: space-between; font-weight: 800; border-top: 1px solid #eee; padding-top: 15px; margin-top: 15px; }
</style>

<?php get_footer(); ?>