<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abdum
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if( has_post_thumbnail() ) :  
		  echo '<div class="featured-image-wrapper">';         
				the_post_thumbnail( 'post-thumbnail', array('itemprop' => "image"));
		  echo '</div>';
    endif; ?>


	<header class="entry-header">
		
		<h1 class="entry-title" itemprop="headline">	
			<?php the_title(); ?>
		</h1>
        
		<div class="entry-meta">
			<?php
				abdum_posted_on();
				abdum_posted_by();
			?>
		</div><!-- .entry-meta --> 
	</header><!-- .entry-header -->


	<div class="entry-content" itemprop="text">
    <?php 
      the_content();
    ?>
              
	</div><!-- .entry-content -->

	<footer class="entry-footer">       
	<nav class="navigation post-navigation">
  <div class="nav-links">
    
    
		<div class="nav-previous">          
      <?php next_post_link(); ?>
		</div>
		
		<div class="nav-next">
      <?php previous_post_link(); ?>
		</div>
  </div>
</nav>

		<?php 
			if (is_single() && get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		?> 
        
	</footer>
</article>