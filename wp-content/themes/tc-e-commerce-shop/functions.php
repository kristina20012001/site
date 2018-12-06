<?php
/**
 * TC E-Commerce Shop functions and definitions
 *
 * @package TC E-Commerce Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'tc_e_commerce_shop_setup' ) ) :

/* Theme Setup */
function tc_e_commerce_shop_setup() {

	$GLOBALS['content_width'] = apply_filters( 'tc_e_commerce_shop_content_width', 640 );

	load_theme_textdomain( 'tc-e-commerce-shop', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('tc-e-commerce-shop-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tc-e-commerce-shop' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', tc_e_commerce_shop_font_url() ) );

	// Dashboard Theme Notification
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'tc_e_commerce_shop_activation_notice' );
	}
}
endif;
add_action( 'after_setup_theme', 'tc_e_commerce_shop_setup' );

// Dashboard Theme Notification
function tc_e_commerce_shop_activation_notice() {
	echo '<div class="welcome-notice notice notice-success is-dismissible">';
		echo '<h2>'. esc_html__( 'Thank You!!!!!', 'tc-e-commerce-shop' ) .'</h2>';
		echo '<p>'. esc_html__( 'Much grateful to you for choosing our Tc Ecommerce theme from themescaliber. we praise you for opting our services over others. we are obliged to invite you on our welcome page to render you with our outstanding services.', 'tc-e-commerce-shop' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=tc_e_commerce_shop_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click Here...', 'tc-e-commerce-shop' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function tc_e_commerce_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on blog page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Thid Column Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 1', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 2', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 3', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 4', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'tc_e_commerce_shop_widgets_init' );

/* Theme Font URL */
function tc_e_commerce_shop_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function tc_e_commerce_shop_scripts() {
	wp_enqueue_style( 'tc-e-commerce-shop-font', tc_e_commerce_shop_font_url(), array() );	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'tc-e-commerce-shop-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'tc-e-commerce-shop-style', 'rtl', 'replace' );
	wp_enqueue_style( 'tc-e-commerce-shop-effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );

		// Paragraph
	    $tc_e_commerce_shop_paragraph_color = get_theme_mod('tc_e_commerce_shop_paragraph_color', '');
	    $tc_e_commerce_shop_paragraph_font_family = get_theme_mod('tc_e_commerce_shop_paragraph_font_family', '');
	    $tc_e_commerce_shop_paragraph_font_size = get_theme_mod('tc_e_commerce_shop_paragraph_font_size', '');
	// "a" tag
		$tc_e_commerce_shop_atag_color = get_theme_mod('tc_e_commerce_shop_atag_color', '');
	    $tc_e_commerce_shop_atag_font_family = get_theme_mod('tc_e_commerce_shop_atag_font_family', '');
	// "li" tag
		$tc_e_commerce_shop_li_color = get_theme_mod('tc_e_commerce_shop_li_color', '');
	    $tc_e_commerce_shop_li_font_family = get_theme_mod('tc_e_commerce_shop_li_font_family', '');
	// H1
		$tc_e_commerce_shop_h1_color = get_theme_mod('tc_e_commerce_shop_h1_color', '');
	    $tc_e_commerce_shop_h1_font_family = get_theme_mod('tc_e_commerce_shop_h1_font_family', '');
	    $tc_e_commerce_shop_h1_font_size = get_theme_mod('tc_e_commerce_shop_h1_font_size', '');
	// H2
		$tc_e_commerce_shop_h2_color = get_theme_mod('tc_e_commerce_shop_h2_color', '');
	    $tc_e_commerce_shop_h2_font_family = get_theme_mod('tc_e_commerce_shop_h2_font_family', '');
	    $tc_e_commerce_shop_h2_font_size = get_theme_mod('tc_e_commerce_shop_h2_font_size', '');
	// H3
		$tc_e_commerce_shop_h3_color = get_theme_mod('tc_e_commerce_shop_h3_color', '');
	    $tc_e_commerce_shop_h3_font_family = get_theme_mod('tc_e_commerce_shop_h3_font_family', '');
	    $tc_e_commerce_shop_h3_font_size = get_theme_mod('tc_e_commerce_shop_h3_font_size', '');
	// H4
		$tc_e_commerce_shop_h4_color = get_theme_mod('tc_e_commerce_shop_h4_color', '');
	    $tc_e_commerce_shop_h4_font_family = get_theme_mod('tc_e_commerce_shop_h4_font_family', '');
	    $tc_e_commerce_shop_h4_font_size = get_theme_mod('tc_e_commerce_shop_h4_font_size', '');
	// H5
		$tc_e_commerce_shop_h5_color = get_theme_mod('tc_e_commerce_shop_h5_color', '');
	    $tc_e_commerce_shop_h5_font_family = get_theme_mod('tc_e_commerce_shop_h5_font_family', '');
	    $tc_e_commerce_shop_h5_font_size = get_theme_mod('tc_e_commerce_shop_h5_font_size', '');
	// H6
		$tc_e_commerce_shop_h6_color = get_theme_mod('tc_e_commerce_shop_h6_color', '');
	    $tc_e_commerce_shop_h6_font_family = get_theme_mod('tc_e_commerce_shop_h6_font_family', '');
	    $tc_e_commerce_shop_h6_font_size = get_theme_mod('tc_e_commerce_shop_h6_font_size', '');


		$custom_css ='
			p,span{
			    color:'.esc_html($tc_e_commerce_shop_paragraph_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_paragraph_font_family).';
			    font-size: '.esc_html($tc_e_commerce_shop_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($tc_e_commerce_shop_atag_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_atag_font_family).';
			}
			li{
			    color:'.esc_html($tc_e_commerce_shop_li_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_li_font_family).';
			}
			h1{
			    color:'.esc_html($tc_e_commerce_shop_h1_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_h1_font_family).'!important;
			    font-size: '.esc_html($tc_e_commerce_shop_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($tc_e_commerce_shop_h2_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_h2_font_family).'!important;
			    font-size: '.esc_html($tc_e_commerce_shop_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($tc_e_commerce_shop_h3_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_h3_font_family).'!important;
			    font-size: '.esc_html($tc_e_commerce_shop_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($tc_e_commerce_shop_h4_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_h4_font_family).'!important;
			    font-size: '.esc_html($tc_e_commerce_shop_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($tc_e_commerce_shop_h5_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_h5_font_family).'!important;
			    font-size: '.esc_html($tc_e_commerce_shop_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($tc_e_commerce_shop_h6_color).'!important;
			    font-family: '.esc_html($tc_e_commerce_shop_h6_font_family).'!important;
			    font-size: '.esc_html($tc_e_commerce_shop_h6_font_size).'!important;
			}

			';
		wp_add_inline_style( 'tc-e-commerce-shop-basic-style',$custom_css );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );	
	wp_enqueue_script( 'tc-e-commerce-shop-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style('tc-e-commerce-shop-ie', get_template_directory_uri().'/css/ie.css');
}
add_action( 'wp_enqueue_scripts', 'tc_e_commerce_shop_scripts' );

/*radio button sanitization*/

 function tc_e_commerce_shop_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'tc_e_commerce_shop_loop_columns');
	if (!function_exists('tc_e_commerce_shop_loop_columns')) {
	function tc_e_commerce_shop_loop_columns() {
		return 3; // 3 products per row
	}
}

function tc_e_commerce_shop_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// URL DEFINES

define('TC_E_COMMERCE_SHOP_FREE_THEME_DOC','https://themescaliber.com/doc/free-tc-ecommerce-shop/','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_SUPPORT','https://wordpress.org/support/theme/tc-e-commerce-shop/','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_REVIEW','https://www.themescaliber.com/topic/reviews-and-testimonials','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_BUY_NOW','https://www.themescaliber.com/premium/multipurpose-ecommerce-wordpress-theme','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_LIVE_DEMO','https://themescaliber.com/tc-e-commerce-shop/','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_PRO_DOC','https://themescaliber.com/doc/tc-ecommerce-shop-documentation/','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_CHILD_THEME','https://developer.wordpress.org/themes/advanced-topics/child-themes/','tc-e-commerce-shop');
define('TC_E_COMMERCE_SHOP_SITE_URL','https://www.themescaliber.com/free/ecommerce-shop-wordpress-theme');

function tc_e_commerce_shop_credit_link() {
    echo "<a href=".esc_url(TC_E_COMMERCE_SHOP_SITE_URL)." target='_blank'>".esc_html__('Ecommerce Theme','tc-e-commerce-shop')."</a>";
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the get started page */
require get_template_directory() . '/inc/dashboard/getstart.php';