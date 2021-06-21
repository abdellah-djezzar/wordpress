<?php
/**
 * Abdum Theme Customizer
 *
 * @package Abdum
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function abdum_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'abdum_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'abdum_customize_partial_blogdescription',
			)
		);
	}
	
	
	$wp_customize->add_section(
		'header_area',
		array(
			'title'    => __( 'Header Settings', 'abdum' ),
			'priority' => 40,
		)
	);

	
	$wp_customize->add_setting(
		'header_text_main_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'header_text_main_title',
		array(
			'type'        => 'text',
			'label'       => __( 'Enter Main Title:', 'abdum' ),
			'description' => __( 'Leave this setting blank to disable it.', 'abdum' ),
			'section'     => 'header_area',
		)
	);

	$wp_customize->add_setting(
		'header_text_sub_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'header_text_sub_title',
		array(
			'type'        => 'text',
			'label'       => __( 'Enter Sub Title:', 'abdum' ),
			'description' => __( 'Leave this setting blank to disable it.', 'abdum' ),
			'section'     => 'header_area',
		)
	);



}
add_action( 'customize_register', 'abdum_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function abdum_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function abdum_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function abdum_customize_preview_js() {
	wp_enqueue_script( 'abdum-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), ABDUM_VERSION, true );
}
add_action( 'customize_preview_init', 'abdum_customize_preview_js' );


