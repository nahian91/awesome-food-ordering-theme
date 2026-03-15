<?php get_header(); ?>

<div class="breadcrumb-area bg-cover text-center text-light" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Gallery</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="gallery-style-two-area default-padding">
    <div class="container">
        <div class="row">
            <div class="gallery-content-items">
                <div id="portfolio-grid" class="gallery-items colums-3">
                    
                    <div class="pf-item wow fadeInUp">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="https://via.placeholder.com/800x600" class="popup-gallery">
                                    <img src="https://via.placeholder.com/600x450" alt="Gallery Image 1">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pf-item wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="https://via.placeholder.com/800x600" class="popup-gallery">
                                    <img src="https://via.placeholder.com/600x450" alt="Gallery Image 2">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pf-item wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="https://via.placeholder.com/800x600" class="popup-gallery">
                                    <img src="https://via.placeholder.com/600x450" alt="Gallery Image 3">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pf-item wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="https://via.placeholder.com/800x600" class="popup-gallery">
                                    <img src="https://via.placeholder.com/600x450" alt="Gallery Image 4">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pf-item wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="https://via.placeholder.com/800x600" class="popup-gallery">
                                    <img src="https://via.placeholder.com/600x450" alt="Gallery Image 5">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pf-item wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="https://via.placeholder.com/800x600" class="popup-gallery">
                                    <img src="https://via.placeholder.com/600x450" alt="Gallery Image 6">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>