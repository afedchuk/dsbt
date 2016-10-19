<?php
/**
 * Template Name: Gallery Template
 *
 * Displays the Gallery Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>
sdf
<?php get_header();

   do_action( 'ample_before_body_content' ); ?>
   <div class="gallery-page clearfix">
      <div class="inner-wrap clearfix">

   <?php
      if( is_active_sidebar( 'ample_gallery_sidebar' ) ) {
         // Calling the business sidebar if it exists.
         if ( !dynamic_sidebar( 'ample_gallery_sidebar' ) ):
         endif;
      }
   ?>
   <?php echo photo_gallery(2); ?>
   </div></div>
   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>