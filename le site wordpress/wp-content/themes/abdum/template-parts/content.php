<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abdum
 */





 ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<?php
		if ( has_post_thumbnail() ) {        
			echo '<a class="featured-image-link" href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
	
		
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
		
			echo '</a>';
		}
	?>

	<header class="entry-header">  
		<?php 
				the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
		<div class="entry-meta">
			<?php
				abdum_posted_on();
				abdum_posted_by();
			?>
		</div><!-- .entry-meta --> 
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p>
			<?php the_excerpt(); ?>
		</p>
		<p class="more-link-wrapper">
			<a class="more-link" href="<?php the_permalink(); ?>">
				<?php echo esc_html__('Read More', 'abdum'); ?>
			</a>
		</p>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->


