<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abdum
 */

?>
	
	

	</div> <!-- #content -->
	
	<footer id="coltell" class="site-footer">
		 
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'abdum' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'abdum' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				esc_html_e( 'Abdum WordPress Theme by', 'abdum' ); ?>
				<a href="<?php echo esc_url('http://abnoothemes.com/'); ?>" target="_blank"><?php esc_html_e( 'Abnoothemes', 'abdum' ); ?></a>
		</div><!-- .site-info -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
