<?php
/**
 * Shortcode Registrations
 */

// 1. [afd_food_menu]
add_shortcode('afd_food_menu', function() {
    ob_start();
    get_template_part('template-parts/frontend/menu-display');
    return ob_get_clean();
});

// 2. [afd_checkout]
add_shortcode('afd_checkout', function() {
    ob_start();
    get_template_part('template-parts/frontend/checkout-form');
    return ob_get_clean();
});

// 3. [afd_order_success]
add_shortcode('afd_order_success', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-thanks.php';
    return ob_get_clean();
});

// 3. [afd_reviews]
add_shortcode('afd_reviews', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-reviews.php';
    return ob_get_clean();
});

// 3. [afd_registration]
add_shortcode('afd_registration', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-registration.php';
    return ob_get_clean();
});

// 3. [afd_about]
add_shortcode('afd_about', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-about.php';
    return ob_get_clean();
});

// 3. [afd_account]
add_shortcode('afd_account', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-account.php';
    return ob_get_clean();
});

// 3. [afd_checkout]
add_shortcode('afd_checkout', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-checkout.php';
    return ob_get_clean();
});

// 3. [afd_contact]
add_shortcode('afd_contact', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-contact.php';
    return ob_get_clean();
});

// 3. [afd_gallery]
add_shortcode('afd_gallery', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-gallery.php';
    return ob_get_clean();
});

// 3. [afd_menu]
add_shortcode('afd_menu', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-menu.php';
    return ob_get_clean();
});

// 3. [afd_home]
add_shortcode('afd_home', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-home.php';
    return ob_get_clean();
});

// 3. [afd_login]
add_shortcode('afd_login', function() {
    ob_start();
    // We pass the order logic here
    include get_template_directory() . '/inc/frontend/page-login.php';
    return ob_get_clean();
});