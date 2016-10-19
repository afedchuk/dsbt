<?php
/**
 * This template is used to display content of page.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<?php do_action( 'ample_before_post_content' ); ?>
   <h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h4>
<?php do_action( 'ample_after_post_content' ); ?>
