<?php
/**
 * The template for displaying Archive page.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>
<?php add_filter( 'breadcrumb_trail', '__return_false' ); ?> 
<?php get_header();
   add_filter('get_the_archive_title', function ($title) {
    return preg_replace('/^\w+: /', '', $title);
});
   do_action( 'ample_before_body_content' ); ?>
   <div class="big-slider-wrapper">
   <div style="" class="bx-wrapper">
      <div style="width: 100%; overflow: hidden; position: relative; height: 500px;" class="bx-viewport"><div style="" class="big-slider">
         <div style=" position: absolute; width: 100%; z-index: 50; display: block;" class="slides displaynone">
                  <div class="slider-entry-container">
                     <h3 class="entry-title">
                        <?php the_archive_title(); ?>
                     </h3>
                                             <div class="desc"><p><?php  the_archive_description() ?></p></div>
                  </div>
                  <figure style="background-image: url(/wp-content/uploads/img/baner-archive-<?php echo get_queried_object_id(); ?>.jpg);"></figure>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div class="single-page clearfix">
      <div class="inner-wrap">
         <div id="primary">
            <div id="content">
               <?php if ( have_posts() ) : ?>

                  <?php while ( have_posts() ) : the_post(); ?>

                     <?php get_template_part( 'content', get_post_format() ); ?>

                  <?php endwhile; ?>

                  <?php get_template_part( 'navigation', 'archive' ); ?>

               <?php else : ?>

                  <?php get_template_part( 'no-results', 'archive' ); ?>

               <?php endif; ?>
            </div>
            <?php ample_both_sidebar_select(); ?>
         </div>

         <?php ample_sidebar_select(); ?>
      </div><!-- .inner-wrap -->
   </div><!-- .single-page -->

   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>
