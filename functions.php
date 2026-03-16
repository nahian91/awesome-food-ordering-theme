<?php
/**
 * Awesome Food Delivery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Awesome_Food_Delivery
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function awesome_food_delivery_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Awesome Food Delivery, use a find and replace
		* to change 'awesome-food-delivery' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'awesome-food-delivery', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'awesome-food-delivery' ),
			'menu-2' => esc_html__( 'Footer', 'awesome-food-delivery' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'awesome_food_delivery_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'awesome_food_delivery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function awesome_food_delivery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'awesome_food_delivery_content_width', 640 );
}
add_action( 'after_setup_theme', 'awesome_food_delivery_content_width', 0 );


function awesome_food_delivery_scripts() {

	$theme_uri = get_template_directory_uri();

	/* =====================
	 Styles
	===================== */
	wp_enqueue_style( 'bootstrap', $theme_uri . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome', $theme_uri . '/assets/css/font-awesome.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'flaticon', $theme_uri . '/assets/css/flaticon-set.css', array(), _S_VERSION );
	// wp_enqueue_style( 'magnific-popup', $theme_uri . '/assets/css/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper', $theme_uri . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'animate', $theme_uri . '/assets/css/animate.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'datepicker', $theme_uri . '/assets/css/bootstrap-datepicker3.css', array(), _S_VERSION );
	wp_enqueue_style( 'validnavs', $theme_uri . '/assets/css/validnavs.css', array(), _S_VERSION );
	wp_enqueue_style( 'helper', $theme_uri . '/assets/css/helper.css', array(), _S_VERSION );
	wp_enqueue_style( 'unit-test', $theme_uri . '/assets/css/unit-test.css', array(), _S_VERSION );
	// wp_enqueue_style( 'shop', $theme_uri . '/assets/css/shop.css', array(), _S_VERSION );
	wp_enqueue_style( 'main-style', $theme_uri . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'responsive-style', $theme_uri . '/assets/css/responsive.css', array(), _S_VERSION );

	// Theme main style.css
	wp_enqueue_style( 'awesome-food-delivery-style', get_stylesheet_uri(), array(), _S_VERSION );


	/* =====================
	 Scripts
	===================== */

	// Use WordPress built-in jQuery
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap', $theme_uri . '/assets/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'appear', $theme_uri . '/assets/js/jquery.appear.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'swiper', $theme_uri . '/assets/js/swiper-bundle.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'progress-bar', $theme_uri . '/assets/js/progress-bar.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wow', $theme_uri . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'isotope', $theme_uri . '/assets/js/isotope.pkgd.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'imagesloaded', $theme_uri . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'magnific-popup', $theme_uri . '/assets/js/magnific-popup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'count-to', $theme_uri . '/assets/js/count-to.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'nice-select', $theme_uri . '/assets/js/jquery.nice-select.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ytplayer', $theme_uri . '/assets/js/YTPlayer.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loopcounter', $theme_uri . '/assets/js/loopcounter.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'validnavs', $theme_uri . '/assets/js/validnavs.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'datepicker', $theme_uri . '/assets/js/bootstrap-datepicker.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'gsap', $theme_uri . '/assets/js/gsap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'items', $theme_uri . '/assets/js/items.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'scrolltrigger', $theme_uri . '/assets/js/ScrollTrigger.min.js', array('gsap'), _S_VERSION, true );
	wp_enqueue_script( 'splittext', $theme_uri . '/assets/js/SplitText.min.js', array('gsap'), _S_VERSION, true );

	// Main JS
	wp_enqueue_script( 'awesome-food-delivery-main', $theme_uri . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	// Comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'awesome_food_delivery_scripts' );

function fd_admin_styles() {
    $theme_uri = get_template_directory_uri();

    // Enqueue custom admin CSS
    wp_enqueue_style( 
        'awesome-food-delivery-admin-style', // handle
        $theme_uri . '/assets/css/admin-style.css', // path to your custom admin CSS
        array(), // dependencies
        _S_VERSION // version
    );

	wp_enqueue_script( 
        'awesome-food-delivery-admin-script', 
        $theme_uri . '/assets/js/admin-script.js', 
        array('jquery'), // Important: script needs jQuery to run
        _S_VERSION,
        true // Load in footer
    );
}
add_action( 'admin_enqueue_scripts', 'fd_admin_styles' );

/*--------------------------------------------------------------
# 1. Register CPTs and Taxonomy
--------------------------------------------------------------*/
add_action('init', function(){

    // Food Items (Dishes)
    register_post_type('food_item', [
        'labels' => ['name'=>'Food Items','singular_name'=>'Food Item'],
        'public' => false, 'show_ui' => false, 'supports' => ['title','editor','thumbnail'],
    ]);

    // Customers (Optional Profile CPT)
    register_post_type('food_customer', [
        'labels' => ['name'=>'Customers','singular_name'=>'Customer'],
        'public' => false, 'show_ui' => false, 'supports' => ['title','editor'],
    ]);

    // Categories
    register_taxonomy('food_category','food_item',[
        'labels' => ['name'=>'Food Categories','singular_name'=>'Food Category'],
        'hierarchical' => true,
        'show_ui' => false
    ]);
});

/*--------------------------------------------------------------
# 1. External Files Requirement
--------------------------------------------------------------*/
// ফাইলটি অ্যাকশন হুকের বাইরে রিকোয়ার করা ভালো যাতে ফাংশনগুলো গ্লোবালি অ্যাভেলেবল থাকে
require_once get_template_directory() . '/inc/admin/theme-settings.php';

/*--------------------------------------------------------------
# 2. Admin Menus Registration
--------------------------------------------------------------*/
add_action('admin_menu', function(){
    
    // মেইন ফুড ডেলিভারি মেনু
    add_menu_page(
        'Food Delivery',
        'Food Delivery',
        'manage_options',
        'awesome_food_delivery',
        'fd_main_page', 
        'dashicons-carrot',
        20
    );

    // থিম সেটিংস মেনু (আলাদা মেইন মেনু হিসেবে)
    add_menu_page(
        'Theme Settings',        
        'Theme Settings',        
        'manage_options',        
        'theme_settings',        
        'afd_theme_settings_render', 
        'dashicons-admin-appearance', 
        60                       
    );
});

/*--------------------------------------------------------------
# 1. Database Table Creation (dbDelta Compliant)
--------------------------------------------------------------*/
function afd_create_orders_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'afd_food_orders';
    $charset_collate = $wpdb->get_charset_collate();

    // dbDelta requirements: 
    // - Every column on a new line
    // - Two spaces after PRIMARY KEY
    $sql = "CREATE TABLE $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        display_id varchar(20) NOT NULL,
        customer_id bigint(20) DEFAULT 0 NOT NULL,
        order_type varchar(50) DEFAULT '' NOT NULL,
        payment_method varchar(30) DEFAULT 'cash' NOT NULL,
        full_name varchar(255) DEFAULT '' NOT NULL,
        email varchar(255) DEFAULT '' NOT NULL,
        phone varchar(50) DEFAULT '' NOT NULL,
        flat_no varchar(100) DEFAULT '' NOT NULL,
        door_no varchar(100) DEFAULT '' NOT NULL,
        building_name varchar(255) DEFAULT '' NOT NULL,
        road_name varchar(255) DEFAULT '' NOT NULL,
        postcode varchar(20) DEFAULT '' NOT NULL,
        address text NOT NULL,
        kitchen_notes text NOT NULL,
        delivery_notes text NOT NULL,
        scheduled_time varchar(50) DEFAULT 'asap' NOT NULL,
        delay_message text NOT NULL,
        items_json longtext NOT NULL,
        subtotal decimal(10,2) DEFAULT '0.00' NOT NULL,
        total_price decimal(10,2) DEFAULT '0.00' NOT NULL,
        order_status varchar(20) DEFAULT 'pending' NOT NULL,
        payment_status varchar(20) DEFAULT 'Unpaid' NOT NULL,
        order_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        service_fee decimal(10,2) DEFAULT '0.00' NOT NULL,
        bag_fee decimal(10,2) DEFAULT '0.00' NOT NULL,
        tip_amount decimal(10,2) DEFAULT '0.00' NOT NULL,
        delivery_charge decimal(10,2) DEFAULT '0.00' NOT NULL,
        collection_charge decimal(10,2) DEFAULT '0.00' NOT NULL,
        delivery_discount decimal(10,2) DEFAULT '0.00' NOT NULL,
        collection_discount decimal(10,2) DEFAULT '0.00' NOT NULL,
        PRIMARY KEY  (id),
        UNIQUE KEY display_id (display_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
add_action('admin_init', 'afd_create_orders_table');

/*--------------------------------------------------------------
# 2. Core Logic: Insert Custom Order
--------------------------------------------------------------*/
function fd_insert_custom_order($data) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'afd_food_orders';

    // Generate Display ID (Ensure afd_generate_unique_display_id exists in your theme/plugin)
    $permanent_id = function_exists('afd_generate_unique_display_id') ? afd_generate_unique_display_id() : date('Ymd') . '-' . rand(100, 999);
    
    $time_val   = !empty($data['scheduledTime']) ? $data['scheduledTime'] : 'asap';
    $status_val = ($time_val === 'asap') ? 'pending' : 'preorder';

    // Process the Cart (Capturing Modal Variants)
    $processed_cart = [];
    if (!empty($data['cart']) && is_array($data['cart'])) {
        foreach ($data['cart'] as $item) {
            $processed_cart[] = [
                'name'   => sanitize_text_field($item['name']),
                'price'  => floatval($item['price']),
                'qty'    => intval($item['qty']),
                'vName'  => sanitize_text_field($item['vName'] ?? ''),
                'vPrice' => floatval($item['vPrice'] ?? 0),
            ];
        }
    }

    // Mapping Incoming Data to Database Columns
    $insert_data = [
        'display_id'          => $permanent_id,
        'customer_id'         => get_current_user_id() ?: 0,
        'order_type'          => sanitize_text_field($data['orderType'] ?? 'delivery'),
        'payment_method'      => sanitize_text_field($data['paymentMethod'] ?? 'cash'),
        'full_name'           => sanitize_text_field($data['fullName'] ?? ''),
        'email'               => sanitize_email($data['email'] ?? ''),
        'phone'               => sanitize_text_field($data['phone'] ?? ''),
        'flat_no'             => sanitize_text_field($data['flat_no'] ?? ''),
        'door_no'             => sanitize_text_field($data['door_no'] ?? ''),
        'building_name'       => sanitize_text_field($data['building'] ?? ''), 
        'road_name'           => sanitize_text_field($data['road_name'] ?? ''),
        'postcode'            => strtoupper(sanitize_text_field($data['postcode'] ?? '')),
        'kitchen_notes'       => sanitize_textarea_field($data['kitchen_notes'] ?? ''),
        'delivery_notes'      => sanitize_textarea_field($data['delivery_notes'] ?? ''),
        'scheduled_time'      => sanitize_text_field($time_val),
        'items_json'          => wp_json_encode($processed_cart),
        
        // FINANCIAL MAPPING (Individual Columns for clean reporting)
        'subtotal'            => floatval($data['subtotal'] ?? 0),
        'service_fee'         => floatval($data['service_fee'] ?? 0),
        'bag_fee'             => floatval($data['bag_fee'] ?? 0),
        'tip_amount'          => floatval($data['tip'] ?? 0),
        'delivery_charge'        => floatval($data['delivery_charge'] ?? 0),
        'collection_charge'   => floatval($data['collection_charge'] ?? 0),
        'delivery_discount'   => floatval($data['delivery_discount'] ?? 0),
        'collection_discount' => floatval($data['collection_discount'] ?? 0),
        'total_price'         => floatval($data['total'] ?? 0),
        
        'order_status'        => $status_val,
        'payment_status'      => 'Unpaid',
        'order_date'          => current_time('mysql')
    ];

    $result = $wpdb->insert($table_name, $insert_data);

    if ($result === false) {
        error_log("AFD DB Error: " . $wpdb->last_error);
        return false;
    }

    return $permanent_id; 
}

/*--------------------------------------------------------------
# 3. Helper: Generate Sequential Display ID
--------------------------------------------------------------*/
function afd_generate_unique_display_id() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'afd_food_orders';
    $date_string = current_time('Ymd');
    $today_start = current_time('Y-m-d') . ' 00:00:00';

    $count_today = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(id) FROM $table_name WHERE order_date >= %s",
        $today_start
    ));

    $new_sequence = intval($count_today) + 1;
    return $date_string . '-' . str_pad($new_sequence, 3, '0', STR_PAD_LEFT);
}

/*--------------------------------------------------------------
# Main Page with LEFT Tabs + Right Content + Text Toggle
--------------------------------------------------------------*/
function fd_main_page(){

    $tabs = [
        'dashboard'  => 'Dashboard',
        'orders'     => 'Orders',
        'items'      => 'Items',
        'categories' => 'Categories',
        'extras'     => 'Extras',
        'reports'    => 'Reports',
        'customers'  => 'Customers',
        'settings'   => 'Settings'
    ];

    $active = $_GET['tab'] ?? 'orders';
    $is_print = (isset($_GET['action']) && $_GET['action'] === 'print');

    // Detect if sidebar should be hidden from cookie
    $is_hidden = isset($_COOKIE['afd_sidebar_state']) && $_COOKIE['afd_sidebar_state'] === 'hidden';
    $sidebar_class = $is_hidden ? 'afd-sidebar-hidden' : '';
    ?>

    <div id="afd-wrapper" class="awesome-food-delivery <?php echo $is_print ? 'afd-print' : $sidebar_class; ?>">
        
        <?php if (!$is_print) : ?>

            <ul class="afd-left-tabs">
                <?php foreach ($tabs as $slug => $label) : 
                    if ($slug === 'extras') continue; // Matches your original commented out logic
                ?>
                    <li>
                        <a class="<?php echo ($active === $slug) ? 'active' : ''; ?>" 
                           href="<?php echo admin_url('admin.php?page=awesome_food_delivery&tab=' . $slug); ?>">
                            <?php echo $label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="afd-right-box">
            <?php
            switch($active){
                case 'dashboard':  fd_dashboard_tab(); break;
                case 'orders':     fd_orders_tab(); break;
                case 'items':      fd_items_tab(); break;
                case 'categories': fd_category_tab(); break;
                case 'reports':    fd_reports_tab(); break;
                case 'customers':  fd_customers_tab(); break;
                case 'settings':   fd_settings_tab(); break;
            }
            ?>
        </div>
    </div>
    <?php
}
?>
<?php

require_once get_template_directory() . '/inc/admin/dashboard.php';
require_once get_template_directory() . '/inc/admin/orders.php';
require_once get_template_directory() . '/inc/admin/items.php';
require_once get_template_directory() . '/inc/admin/categories.php';
require_once get_template_directory() . '/inc/admin/report.php';
require_once get_template_directory() . '/inc/admin/customers.php';
require_once get_template_directory() . '/inc/admin/settings.php';

/*--------------------------------------------------------------
# THE OMNI-AUTOMATION: PAGES, STATES, MENU & HEADER HIDING
--------------------------------------------------------------*/

/**
 * ১. থিম অ্যাক্টিভেশনের সময় পেজ এবং মেনু অটোমেশন
 */
add_action('after_switch_theme', function() {
    $brand = 'AFD';
    
    // পেজ কনফিগারেশন: স্ল্যাগ => [টাইটেল, শর্টকোড]
    $pages_setup = [
        'home'           => ['title' => "Home - $brand",           'content' => '[afd_home]'],
        'about'          => ['title' => "About - $brand",          'content' => '[afd_about]'],
        'shop'           => ['title' => "Shop - $brand",           'content' => '[afd_shop]'],
        'checkout'       => ['title' => "Checkout - $brand",       'content' => '[afd_checkout]'],
        'account'        => ['title' => "My Account - $brand",     'content' => '[afd_account]'],
        'order-tracking' => ['title' => "Track Order - $brand",    'content' => '[afd_order_tracking]'],
        'contact'        => ['title' => "Contact - $brand",        'content' => '[afd_contact]'],
        'thanks'         => ['title' => "Thank You - $brand",      'content' => '[afd_thanks]'],
    ];

    // যে পেজগুলো মেনুতে যুক্ত হবে (সিরিয়াল অনুযায়ী)
    $menu_pages = ['home', 'shop', 'about', 'contact']; 
    $added_ids  = [];

    // পেজ তৈরি লুপ
    foreach ($pages_setup as $slug => $data) {
        $page_obj = get_page_by_path($slug);
        
        if (!$page_obj) {
            $page_id = wp_insert_post([
                'post_type'    => 'page',
                'post_title'   => $data['title'],
                'post_content' => $data['content'],
                'post_status'  => 'publish',
                'post_name'    => $slug
            ]);
        } else {
            $page_id = $page_obj->ID;
        }

        if ($page_id) {
            update_option("_afd_page_{$slug}", $page_id);
            if (in_array($slug, $menu_pages)) {
                $added_ids[$slug] = $page_id;
            }
        }
    }

    // মেনু অটো-ক্রিয়েশন
    $menu_name   = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        foreach ($menu_pages as $slug) {
            if (isset($added_ids[$slug])) {
                wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title'     => str_replace(" - $brand", "", get_the_title($added_ids[$slug])),
                    'menu-item-object-id' => $added_ids[$slug],
                    'menu-item-object'    => 'page',
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                ]);
            }
        }

        // থিমের 'primary' মেনু লোকেশনে সেট করা
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id; 
        set_theme_mod('nav_menu_locations', $locations);
    }
});

/**
 * ২. ড্যাশবোর্ডে পোস্ট স্টেট (Post States) দেখানো
 */
add_filter('display_post_states', function($post_states, $post) {
    $labels = [
        'home'           => 'Home Page',
        'about'          => 'About Page',
        'shop'           => 'Shop Page',
        'checkout'       => 'Checkout Page',
        'account'        => 'Account Page',
        'order-tracking' => 'Tracking Page',
        'contact'        => 'Contact Page',
        'thanks'         => 'Thank You Page',
    ];

    foreach ($labels as $slug => $label) {
        if ((int)get_option("_afd_page_{$slug}") === $post->ID) {
            $post_states[] = __($label, 'afd');
        }
    }
    return $post_states;
}, 10, 2);

/**
 * ৩. অটোমেটিক Entry Header রিমুভ করা (CSS Method)
 */
add_action('wp_head', function() {
    $special_pages = ['home', 'about', 'shop', 'checkout', 'account', 'order-tracking', 'contact', 'thanks'];
    $is_special = false;

    foreach ($special_pages as $slug) {
        if (is_page(get_option("_afd_page_{$slug}"))) {
            $is_special = true;
            break;
        }
    }

    if ($is_special) {
        echo '<style>.entry-header, .page-header, .entry-title { display: none !important; }</style>';
    }
});