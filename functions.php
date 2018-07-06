<?php
/**
 * Strong AF functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Strong_AF
 */

if ( ! function_exists( 'strong_af_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function strong_af_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Strong AF, use a find and replace
	 * to change 'strong-af' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'strong-af', get_template_directory() . '/languages' );

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
	add_image_size( 'grimoire-thumb', 150, 9999, FALSE );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'strong-af' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'strong_af_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'strong_af_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strong_af_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'strong_af_content_width', 640 );
}
add_action( 'after_setup_theme', 'strong_af_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function strong_af_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'strong-af' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'strong-af' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Top', 'strong-af' ),
		'id'            => 'top',
		'description'   => esc_html__( 'Add widgets here.', 'strong-af' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Mid', 'strong-af' ),
		'id'            => 'mid',
		'description'   => esc_html__( 'Add widgets here.', 'strong-af' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'strong-af' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'strong-af' ),
		'before_widget' => '<section id="footer-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'strong_af_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function strong_af_scripts() {
	wp_enqueue_style( 'strong-af-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'strong-af-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'strong-af-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if( is_page( array( 'about', 'contact', 'shop', 'cart' ) )){
   
	wp_enqueue_script( 'strong-af-small-chat', 'https://embed.small.chat/T5NL09RHUG6BKHBVBK.js"', array(), '20170721', true );
    
     	}
}
        
add_action( 'wp_enqueue_scripts', 'strong_af_scripts' );

function strong_af_site_icon() {
  echo '<style type="text/css">
    h1 a {
      background-image: url(' . get_site_icon_url(). ') !important;
    }
  </style>';
}
add_action( 'login_head', 'strong_af_site_icon' );

function strong_af_login() {
    return get_site_url();
}
add_filter( 'login_headerurl', 'strong_af_login' );

function strong_af_login_text() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'strong_af_login_text' );

//* Make Font Awesome available
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    //add_theme_support( 'wc-product-gallery-zoom' );
   // add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    
}

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
add_filter( 'wp_nav_menu_items', 'my_account_loginout_link', 10, 2 );
/**
 * Add WooCommerce My Account Login/Logout to Menu
 * 
 * @see https://support.woothemes.com/hc/en-us/articles/203106357-Add-Login-Logout-Links-To-The-Custom-Primary-Menu-Area
 */
function my_account_loginout_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary') { //change your theme location menu to suit
        $items .= '<li class="loginout"><a href="'. wp_logout_url( get_permalink( wc_get_page_id( 'shop' ) ) ) .'">GTFO</a></li>'; //change logout link, here it goes to 'shop', you may want to put it to 'myaccount'
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'primary') {//change your theme location menu to suit
        $items .= '<li class="loginout"><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '" class="loginout">Enter</a></li>';
    }
    return $items;
}

/**
 * Place a cart icon with number of items and total cost in the menu bar.
 */
add_filter('wp_nav_menu_items','lootcrate', 10, 2);
function lootcrate($menu, $args) {

	// Check if WooCommerce is active and add a new item to a menu assigned to Primary Navigation Menu location
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'primary' !== $args->theme_location )
		return $menu;

	ob_start();
		global $woocommerce;
		$viewing_cart = __('View your shopping cart', 'strong-af');
		$start_shopping = __('Start shopping', 'strong-af');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$cart_contents = sprintf(_n('%d', $cart_contents_count, 'strong-af'), $cart_contents_count);
		//$cart_total = $woocommerce->cart->get_cart_total();
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		// if ( $cart_contents_count > 0 ) {
			if ($cart_contents_count == 0) {
				$menu_item = '<li class="right"><a class="lootcrate-contents" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
			} else {
				$menu_item = '<li class="right"><a class="lootcrate-contents" href="'. $cart_url .'" title="'. $viewing_cart .'">';
			}

			$menu_item .= '<i class="fa fa-shopping-cart"></i> ';

			$menu_item .= '<span class="lootcrate-count">'.$cart_contents.'</span>';
			$menu_item .= '</a></li>';
		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
		// }
		echo $menu_item;
	$social = ob_get_clean();
	return $menu . $social;

}

/**
 * Removes coupon form, order notes, and several billing fields if the checkout doesn't require payment
 * Tutorial: http://skyver.ge/c
 * Modifications by Z - included if else statements to work around 3.3 issues
 */
function sv_free_checkout_fields() {
	
	if ( function_exists( 'is_checkout' ) && ( ! is_checkout() || ( is_checkout() && ! WC()->cart->needs_payment() ) ) ): //new bit
	
	function unrequire_checkout_fields( $fields ) {
    $fields['billing']['billing_company']['required'] = false;
    $fields['billing']['billing_phone']['required'] = false;
    $fields['billing']['billing_address_1']['required'] = false;
    $fields['billing']['billing_address_2']['required'] = false;    
    $fields['billing']['billing_city']['required'] = false;
    $fields['billing']['billing_postcode']['required'] = false;
    $fields['billing']['billing_state']['required'] = false;
    $fields['billing']['billing_country']['required'] = false;

    return $fields; //also new - removes fields
}
	// remove coupon forms since why would you want a coupon for a free cart??
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
	
	// Remove the "Additional Info" order notes
	add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
	// Unset the fields we don't want in a free checkout
	function unset_unwanted_checkout_fields( $fields ) {
	
		// add or remove billing fields you do not want
		// list of fields: http://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/#section-2
		$billing_keys = array(
			'billing_company',
			'billing_phone',
			'billing_address_1',
			'billing_address_2',
			'billing_city',
			'billing_postcode',
			'billing_country',
			'billing_state',
		);
		// unset each of those unwanted fields
		foreach( $billing_keys as $key ) {
			unset( $fields['billing'][$key] );
		}
		
		return $fields;
	}
	add_filter( 'woocommerce_checkout_fields', 'unset_unwanted_checkout_fields' );
	
	// A tiny CSS tweak for the account fields; this is optional
	function print_custom_css() {
		echo '<style>.create-account { margin-top: 6em; }</style>';
	}
	add_action( 'wp_head', 'print_custom_css' );
	
	// Bail we're not at checkout, or if we're at checkout but payment is needed
	elseif ( function_exists( 'is_checkout' ) && ( ! is_checkout() || ( is_checkout() && WC()->cart->needs_payment() ) ) ) :
		return;
	endif;
}
add_action( 'wp', 'sv_free_checkout_fields' );

add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'footer' => 'page',
) );

add_filter( 'the_content', 'prefix_insert_post_ads' );

function prefix_insert_post_ads( $content ) {
	
	$ad_code = '[do_widget_area mid]';

	if ( is_single() && ! is_admin() ) {
		return prefix_insert_after_paragraph( $ad_code, 2, $content );
	}
	
	return $content;
}
 
// Parent Function that makes the magic happen
 
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    if (count($paragraphs) >= $insertion) {
        foreach ($paragraphs as $index => $paragraph) {

            if ( trim( $paragraph ) ) {
                $paragraphs[$index] .= $closing_p;
            }

            if ( $paragraph_id == $index + 1 ) {
                $paragraphs[$index] .= $insertion;
            }
        }

        return implode( '', $paragraphs );
    }

    return $content;
}

function add_google_analytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103646906-1', 'auto');
  ga('send', 'pageview');

</script>
 <?php }
add_action('wp_footer', 'add_google_analytics');

if ( is_page( 'become-legion' ) && ! is_shop( ) ) {
   add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt' );
}
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 20;
  return $cols;
}


add_action( 'wp', 'disable_wordads_selectively' );
function disable_wordads_selectively() {
	global $wordads;
	$user = wp_get_current_user();
	if ( in_array( 'oak',/*'mighty-oak','ancient-oak','fedaykin',*/ (array) $user->roles ) ) {
		remove_action( 'wp_head', array( $wordads, 'insert_head_meta' ), 20 );
		remove_action( 'wp_head', array( $wordads, 'insert_head_iponweb' ), 30 );
		remove_action( 'wp_enqueue_scripts', array( $wordads, 'enqueue_scripts' ) );
		remove_filter( 'the_content', array( $wordads, 'insert_ad' ) );
		remove_filter( 'the_excerpt', array( $wordads, 'insert_ad' ) );
	}
}

//add order details to Stripe payment metadata
function filter_wc_stripe_payment_metadata( $metadata, $order, $source ) {
    $order_data = $order->get_data();
    $metadata['Total Tax Charged'] = $order_data['total_tax'];
    $metadata['Total Shipping Charged'] = $order_data['shipping_total'];
    $count = 1;
    foreach( $order->get_items() as $item_id => $line_item ){
        $item_data = $line_item->get_data();
        $product = $line_item->get_product();
        $product_name = $product->get_name();
        $item_quantity = $line_item->get_quantity();
        $item_total = $line_item->get_total();
        $metadata['Line Item '.$count] = 'Product name: '.$product_name.' | Quantity: '.$item_quantity.' | Item total: '. number_format( $item_total, 2 );
        $count += 1;
    }

    return $metadata;
}
add_filter( 'wc_stripe_payment_metadata', 'filter_wc_stripe_payment_metadata', 10, 3 );

function enable_svg_upload( $upload_mimes ) {
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';