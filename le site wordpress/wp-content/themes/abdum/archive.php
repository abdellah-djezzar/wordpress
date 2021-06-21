<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abdum
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
	<div class="container">
						<div class="row">
							<div class="col-md-8 top-featured-right">
								<div class="blog-content-div">
									<?php get_template_part( 'loop' ); ?>
								</div>
								<nav class="main-pagination number">
									<div class="inner">
										<?php echo paginate_links(); ?>
									</div>
								</nav>

							</div>
							<div class="col-md-4">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>					
				 
	</main><!-- #main -->
</div><!-- primary -->
<?php
get_footer();
