<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class abdum_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/inc/abnoo-customizer/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'abdum_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new abdum_Customize_Section_Pro(
				$manager,
				'abdum-upsells',
				array(
					'title'    => esc_html__( 'Get More Features Just $11', 'abdum' ),
					'pro_text' => esc_html__( 'Go Pro', 'abdum' ),
					'pro_url'  => esc_url( 'http://abnoothemes.com/abdum-responsive-multipurpose-wordpress-theme/' ),
					'priority' => 1
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'abdum-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/abnoo-customizer/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'abdum-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/abnoo-customizer/customize-controls.css' );
	}
}

// Doing this customizer thang!
abdum_Customize::get_instance();
