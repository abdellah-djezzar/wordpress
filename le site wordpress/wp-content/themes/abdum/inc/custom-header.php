<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * <?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Abdum
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses abdum_header_style()
 */
function abdum_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'abdum_custom_header_args',
			array(
				'default-image'      => get_template_directory_uri() . '/images/header.png',
				'default-text-color' => '2f2f2f',
				'width'              => 1800,
				'height'             => 900,
				'flex-height'        => true,
				'wp-head-callback'   => 'abdum_header_style',
			)
		)
	);

	register_default_headers(
		array(
			'abspa' => array(
				'url'           => '%s/images/header.png',
				'thumbnail_url' => '%s/images/header.png',
				'description'   => __( 'AbSpa', 'abdum' ),
			),
		)
	);
}
add_action( 'after_setup_theme', 'abdum_custom_header_setup' );

if ( ! function_exists( 'abdum_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see abdum_custom_header_setup().
	 */
	function abdum_header_style() {
		$header_image      = get_header_image();
		$header_text_color = get_header_textcolor();

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>

		<?php
		if ( ! empty( $header_image ) ) {
			?>
			.bannercontent {
				background: url(<?php header_image(); ?>) no-repeat center center;
				background-size: cover;
			}
			<?php
		}
		?>
		</style>
		<?php
	}
endif;
