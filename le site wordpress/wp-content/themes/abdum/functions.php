<?php
/**
 * Abdum functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Abdum
 */

if ( ! defined( 'ABDUM_VERSION' ) ) {
	// current version of the theme
	define( 'ABDUM_VERSION', '1.0.0' );
}

if ( ! function_exists( 'abdum_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function abdum_setup() {

		load_theme_textdomain( 'abdum', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		// additional image sizes
		add_image_size( 'abdum_grid_gallery_thumbnail', 620, 380, true );
		set_post_thumbnail_size( 'abdum_masonry_thumbnail', 620, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'abdum' ),
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

		add_theme_support( 'post-formats', array(
			'image',
			'gallery',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'abdum_custom_background_args',
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

		/**
		 * Changing excerpt length for abdum theme
		 */
		function abdum_excerpt_length( $length ) {
			if ( ! is_admin() ) {
				return 50;
			} else {
				return $length;
			}
		}
		add_filter( 'excerpt_length', 'abdum_excerpt_length', 999 );

	}
endif;
add_action( 'after_setup_theme', 'abdum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abdum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'abdum_content_width', 1140 );
}
add_action( 'after_setup_theme', 'abdum_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abdum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'abdum' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'abdum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	 
}
add_action( 'widgets_init', 'abdum_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function abdum_scripts() {
  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'abdum-fonts', abdum_fonts_url(), array(), null );

  // Add Font Awesome Icons. Unminified version included.
  wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/inc/font-awesome/css/fontawesome-all.min.css', array(), '5.0.12' );
  
  // Load our responsive stylesheet based on Bootstrap. Unminified version included.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( ), '3.3.5' );
  
	wp_enqueue_style( 'abdum-style', get_stylesheet_uri(), array(), ABDUM_VERSION );
	

  wp_enqueue_script( 'abdum-navigation', get_template_directory_uri() . '/js/navigation.js', array(), ABDUM_VERSION, true );
  
  // customjs
	wp_enqueue_script( 'article-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'custom-main-js', get_template_directory_uri() . '/js/abdum-custom.js', array('jquery'), '1.0.0', true );

		


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'abdum_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';



/**
 * Register Google fonts.
 * @return string Google fonts URL for the theme.
 */

if ( ! function_exists( 'abdum_fonts_url' ) ) :
	function abdum_fonts_url() {
		$abdum_fonts_url = '';
		$abdum_fonts     = array();
		$abdum_font_subsets   = 'latin,latin-ext';
			
		// Translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. 
		if ( 'off' !== esc_html_x( 'on', 'Open Sans font: on or off', 'abdum' ) ) {
			$abdum_fonts[] = 'Open Sans:400,600,700';
		}
			
		// Translators: If there are characters in your language that are not supported by Bad Script, translate this to 'off'. Do not translate into your own language. 
		if ( 'off' !== esc_html_x( 'on', 'Bad Script font: on or off', 'abdum' ) ) {
			$abdum_fonts[] = 'Bad Script:400';
		}	
	
		if ( $abdum_fonts ) {
			$abdum_fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $abdum_fonts ) ),
				'subset' => urlencode( $abdum_font_subsets ),
			), 'https://fonts.googleapis.com/css' );
		}
	
		return $abdum_fonts_url;
	}
	endif;

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



/**
 * Abdum customizer
 */
require get_template_directory() . '/inc/abnoo-customizer/class-customize.php';






/**
 * Compare page CSS
 */

function abdum_comparepage_css($hook) {
	if ( 'appearance_page_abdum-info' != $hook ) {
		return;
	}
	wp_enqueue_style( 'abdum-custom-style', get_template_directory_uri() . '/css/compare.css' );
}
add_action( 'admin_enqueue_scripts', 'abdum_comparepage_css' );

/**
 * Compare page content
 */

add_action('admin_menu', 'abdum_themepage');
function abdum_themepage(){
	$theme_info = add_theme_page( __('Abdum Info','abdum'), __('Abdum Info','abdum'), 'manage_options', 'abdum-info.php', 'abdum_info_page' );
}

function abdum_info_page() {
	$user = wp_get_current_user();
	?>
	<div class="wrap about-wrap abdum-add-css">
		<div>
			<h1>
				<?php echo esc_html_e('Thank you for using Abdum Theme','abdum'); ?>
			</h1>

			
		</div>
		<hr>

		<h2><?php echo esc_html_e("Get Abdum PRO Theme Just $12","abdum"); ?></h2>
		<div class="col">
					<div class="widgets-holder-wrap">
						 <p><?php echo esc_html_e("You are using Free Version of Abdum Pro Theme. Upgrade to Pro for more extra features like Home Page Unlimited Slider, Work Gallery, Photo Gallery, Team & Client Section, Contact Page and many more Page Templates, Social Link Section, Documents, Life time theme support and much more.", "abdum"); ?></p>
						 
					</div>
				</div>
		<div class="abdum-button-container">
			<a target="blank" href="http://abnoothemes.com/abdum-responsive-multipurpose-wordpress-theme/" class="button button-primary abdumbt">
				<?php echo esc_html_e("Upgrade to Abdum Pro", "abdum"); ?>
			</a>
		</div>


		

	</div>
	<?php
}












