<?php
/**
 * This template is used to display content of page.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php do_action( 'ample_before_post_content' ); ?>

   <?php
   if( is_single() ) { ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
   <?php }
   else{ ?>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h2>
   <?php } ?>
   
   <?php the_time('j, F / Y') ?>
  
   <?php do_action( 'ample_after_post_content' ); ?>
</article>
