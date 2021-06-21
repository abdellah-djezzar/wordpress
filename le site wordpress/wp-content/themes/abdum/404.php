<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Abdum
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="row">
			<div class="error-404 not-found col-md-8">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'abdum' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="more-link">
			<?php esc_html_e( 'Back To Home', 'abdum' ); ?> <i class="fa fa-angle-right"></i></a>

				</div><!-- .page-content -->
			</div><!-- .error-404 -->
			<div class="col-md-4">
								<?php get_sidebar(); ?>
							</div>
		</div><!-- row -->

	</main><!-- #main -->

<?php
get_footer();
