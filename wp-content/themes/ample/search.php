<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>

   <div class="single-page clearfix">
      <div class="inner-wrap">
         <div id="primary">
            <div id="content">

               <?php if ( have_posts() ) : ?>

                  <?php while ( have_posts() ) : the_post(); ?>

                     <?php get_template_part( 'content', get_post_format() ); ?>

                  <?php endwhile; ?>

                  <?php get_template_part( 'navigation', 'search' ); ?>

               <?php else : ?>

                  <?php get_template_part( 'no-results', 'search' ); ?>

               <?php endif; ?>
            </div>
            <?php ample_both_sidebar_select(); ?>
         </div>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('ample_search_right_sidebar') ) : endif; ?>
         <?php ample_sidebar_select(); ?>
         
      </div><!-- .inner-wrap -->
   </div><!-- .single-page -->

   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>