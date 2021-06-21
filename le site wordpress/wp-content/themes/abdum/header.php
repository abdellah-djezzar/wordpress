<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abdum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abdum' ); ?></a>
	<div class="container">
		<header id="mainhead" class="site-header row">
			<div id="site-branding-wrapper" class="col-lg-3 col-md-4 col-sm-4 col-sm-4">

				<div id="site-branding">
					<div class="site-logo">
						<?php the_custom_logo(); ?>
					</div>
					<div class="site-title" itemprop="headline">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
						<?php
							$abdum_description = get_bloginfo( 'description', 'display' );
							if ( $abdum_description || is_customize_preview() ) :
							?>
							<div class="site-description" itemprop="description"><p><?php bloginfo( 'description' ); ?></p></div>
						<?php endif; ?>
				</div><!-- .site-branding -->
			</div><!-- .site branding wrapper -->

			<nav id="site-navigation" class="main-navigation col-lg-9 col-md-8 col-sm-8 col-sm-8">
				<div class="toggle-container visible-xs visible-sm hidden-md hidden-lg">
    			<button class="menu-toggle nobanner">  </button>
				</div>
												
				<?php 
					
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu menu' ) );
							} else {
									wp_nav_menu( array(	'container' => '', 'menu_class' => 'menu', 'title_li' => '' ));
							}	
					
				?>
				<?php
					echo '<div class="abdum_search_box">';
					get_search_form();
					echo '</div>';
        ?> 
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->
	</div><!-- .container -->

	<div id="header-wrapper">
		<div id="header-banner"></div>
	</div>
	<?php
	if ( is_front_page() && is_home() ) {
	$header_image      = get_header_image();
	?>
	<?php if ( ! empty( $header_image ) ) {?>
	<div class="bannercontent">
	<div class="bannerinner">
			<h1><?php 
					if ( get_theme_mod( 'header_text_main_title' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'header_text_main_title' ) ) . '';
					}?>
					</h1>
					<?php 
					if ( get_theme_mod( 'header_text_sub_title' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'header_text_sub_title' ) ) . '';
					} ?>			
	</div></div>
	<?php } ?>
	<?php } ?>	
	<div id="content" class="site-content clearfix">

	