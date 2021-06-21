<?php

/**
 * Various loops for this theme.
 *
 * @package Abdum
 */
 
?>
            
<?php
	// homepage
	if ( is_home()) : 
		 if ( have_posts() ) :
		 
			if ( is_home() && ! is_front_page() ) :		 
				echo '<header class="home-template"><h1 class="page-title screen-reader-text" itemprop="headline">' , single_post_title() , '</h1></header>';	
			endif; 	
				
		 while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
				?>
				
				<?php
		  else :
			get_template_part( 'template-parts/content', 'none' ); 
	    endif; 
	
	elseif (is_archive()) :
		if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile; 	
		else : 
		get_template_part( 'template-parts/content', 'none' );
	endif; 
	
	elseif (is_search()) :
		if ( have_posts() ) : ?>
			
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'abdum' ), get_search_query() ); ?></h1>
				</header>
			
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			// End the loop.
			endwhile;
			// Previous/next page navigation.
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;

	endif;
