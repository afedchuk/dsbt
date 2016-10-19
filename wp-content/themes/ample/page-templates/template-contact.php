<?php
/**
 * Template Name: Contact Page Template
 *
 * Displays the Contact Page Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>
<?php get_header();

   do_action( 'ample_before_body_content' ); ?>
   <div class="inner-wrap">
         <div class="tg-one-third tg-column-odd">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('ample_top_header_left_sidebar') ) : endif; ?>
         </div>
         <div class="tg-one-third tg-column-even">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('ample_top_header_sidebar') ) : endif; ?>
            <div class="view-footer">
            <a href="<?php echo get_category_link(19); ?> ">Переглянути всі галереї</a>    
         </div>
         </div>
         <div class="tg-one-third tg-after-two-blocks-clearfix tg-one-third-last tg-column-odd">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('ample_top_header_right_sidebar') ) : endif; ?>
         </div>
   </div>
   <div class="single-page clearfix">
      
      <div class="inner-wrap clearfix">
         <div id="primary">

            <div id="content">
               <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'content', 'page' ); ?>

                  <?php
                     do_action( 'ample_before_comments_template' );
                     // If comments are open or we have at least one comment, load up the comment template
                     if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                     do_action ( 'ample_after_comments_template' );
                  ?>
               <?php endwhile; ?>
            </div>
            <?php ample_both_sidebar_select(); ?>
         </div>

         <?php ample_sidebar_select(); ?>

      </div><!-- .inner-wrap -->
   </div><!-- .single-page -->
   <?php wphtmlblock( array ( 'id' => 70 ) ) ?>
   <div class="inner-wrap">
      <div class="tg-one-half tg-column-even">
         <?php wphtmlblock( array ( 'id' => 156 ) ) ?>
      </div>
      <div class="tg-one-half-last">
         <?php wphtmlblock( array ( 'id' => 129 ) ) ?>
      </div>
      <?php wphtmlblock( array ( 'id' => 157 ) ) ?>
      <?php wphtmlblock( array ( 'id' => 68 ) ) ?>
   </div>
   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>