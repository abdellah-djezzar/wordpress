<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Abdum
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8" itemprop="mainContentOfSinglePost">   
				<?php if ( have_posts() ) : ?>     
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
					
					// Include the page content template.
					get_template_part( 'template-parts/content', 'single' );
					
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					
					// End the loop.
						
					endwhile; 
					the_posts_navigation();
				endif;       
				?> 
				</div>
			
				<div class="col-md-4">        
					<?php get_sidebar(); ?>      
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</main><!-- #main -->
</div>

<?php
get_footer();
