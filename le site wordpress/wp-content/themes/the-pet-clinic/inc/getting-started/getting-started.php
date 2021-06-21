<?php
//about theme info
add_action( 'admin_menu', 'the_pet_clinic_gettingstarted' );
function the_pet_clinic_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'the-pet-clinic'), esc_html__('About Theme', 'the-pet-clinic'), 'edit_theme_options', 'the_pet_clinic_guide', 'the_pet_clinic_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function the_pet_clinic_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'the_pet_clinic_admin_theme_style');

//guidline for about theme
function the_pet_clinic_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'the-pet-clinic' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Multicolor Business WordPress Theme', 'the-pet-clinic' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'the-pet-clinic' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'the-pet-clinic' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'the-pet-clinic' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'the-pet-clinic' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'the-pet-clinic' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'the-pet-clinic' ); ?> <a href="<?php echo esc_url( THE_PET_CLINIC_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'the-pet-clinic' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'The Pet Clinic also referred as Pet Clinic lite WordPress theme is good for pet stores, pet hospital, animal breeders, zoo, safari, wildlife, dog cleaning centers as well as animal food suppliers. Although it is lite version, it is a totally responsive theme apart being multipurpose and it is not only sophisticated but retina ready as well as user friendly. It is a clean and beautiful WP theme with customization and personalization options. It has optimised codes and faster page load time as a result it can be easily used for the dog washing center as well as dog and pet service provider. The Pet Clinic lite is a wonderful theme for the animal care centers or consultancy related to pet care or the veterinary clinic. It is a WooCommerce oriented theme apart from being translation ready making it a good theme for opening online pet consultancy or business with a worldwide reach. Because of translation ready feature, it is quite easy to reach the global audience. This is a preferable WP theme for the pet health consultants and for making the websites related to the pets or animals for taming. It is not only mobile friendly theme but also interactive and stunning. It has received enough praise since inception.', 'the-pet-clinic')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Business Theme', 'the-pet-clinic' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'the-pet-clinic'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( THE_PET_CLINIC_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'the-pet-clinic'); ?></a>
			<a href="<?php echo esc_url( THE_PET_CLINIC_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'the-pet-clinic'); ?></a>
			<a href="<?php echo esc_url( THE_PET_CLINIC_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'the-pet-clinic'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/pet-care-clinic.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'the-pet-clinic'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'the-pet-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'the-pet-clinic'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>