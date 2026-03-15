<?php get_header(); ?>

<div class="breadcrumb-area bg-cover text-center text-light" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Reviews</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li>Reviews</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-style-one-area default-padding bg-gray bg-cover text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/4.jpg);">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 mb-4">
                <div class="testimonial-style-one">
                    <div class="item">
                        <div class="content">
                            <div class="tm-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="provider">
                                <h4>John Doe</h4>
                            </div>
                            <p>
                                The service provided was exceptional. The team was professional, and the final delivery exceeded all our expectations. Highly recommended for any digital project!
                            </p>
                            <div class="tm-proivder-thumb">
                                <img src="https://via.placeholder.com/100" alt="Provider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="testimonial-style-one">
                    <div class="item">
                        <div class="content">
                            <div class="tm-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="provider">
                                <h4>Jane Smith</h4>
                            </div>
                            <p>
                                A truly wonderful experience from start to finish. Their attention to detail and creative approach helped our business reach new heights in the digital space.
                            </p>
                            <div class="tm-proivder-thumb">
                                <img src="https://via.placeholder.com/100" alt="Provider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>