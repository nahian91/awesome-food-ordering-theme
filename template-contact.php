<?php

/*
Template Name: Contact
*/

get_header();?>

<div class="breadcrumb-area bg-cover text-center text-light" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="contact-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row align-center">
            
            <div class="col-lg-6">
                <div class="contact-style-one-info">
                    <h2>Find Food Lounge</h2>
                    <p>
                        Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                    </p>
                    <ul>
                        <li class="wow fadeInUp">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Our Location</h5>
                                <span>22 Baker Street, London, United Kingdom</span>
                            </div>
                        </li>

                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Phone Number</h5>
                                <span>+44 7123 456789</span>
                            </div>
                        </li>

                        <li class="wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Official Email</h5>
                                <span>info@foodlounge.co.uk</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form-style-one">
                    <div class="heading text-center">
                        <h5 class="sub-title">Keep in touch</h5>
                        <h2 class="heading">Send us a Message</h2>
                    </div>
                    <form action="#" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Email*" type="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" name="phone" placeholder="Phone" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" name="comments" placeholder="Your Message *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit">
                                    <i class="fa fa-paper-plane"></i> Get in Touch
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>