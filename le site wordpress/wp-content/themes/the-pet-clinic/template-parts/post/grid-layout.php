<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage The Pet Clinic
 * @since 1.0
 * @version 1.4
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="article_content">
      <div class="metabox"> 
        <span class="entry-author"><a href="<?php echo esc_url( get_permalink() );?>"><i class="fas fa-user"></i><?php the_author(); ?></a></span>
        <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
        <span class="entry-comments"><a href="<?php echo esc_url( get_permalink() );?>"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','the-pet-clinic'), __('0 Comments','the-pet-clinic'), __('% Comments','the-pet-clinic') ); ?></a></span>
      </div>
      <?php if(has_post_thumbnail()) { ?>
        <?php the_post_thumbnail(); ?>  
      <?php }?>
      <h3><?php the_title(); ?></h3>
      <div class="entry-content"><p><?php the_excerpt(); ?></p></div>
      <div class="read-btn">
        <a href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'READ MORE', 'the-pet-clinic' ); ?>"><?php esc_html_e('READ MORE','the-pet-clinic'); ?><span class="screen-reader-text"><?php esc_html_e('READ MORE','the-pet-clinic'); ?></span></a>
      </div>
      <div class="clearfix"></div> 
    </div>
  </article>
</div>