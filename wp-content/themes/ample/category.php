<?php
/**
 * The template for displaying Archive page.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>
<?php get_header();
   add_filter('get_the_archive_title', function ($title) {
    return preg_replace('/^\w+: /', '', $title);
});
   do_action( 'ample_before_body_content' ); 
   $category = (array)get_the_category()[0];?>
   <div class="single-page clearfix">
      <div class="inner-wrap">
            <div id="content" class="row category-<?php echo $category['term_id']; ?>">
               <?php if ( have_posts() ) : 
                    
                  ?>
                  <div class="<?php if($category['term_id'] == 19) {?>col-sm-3<?php } else { ?>col-sm-9 <?php } ?>">
                     <?php if($category['term_id'] == 19) { ?>
                        <div class="views-row">
                            <button data-nid="0" class="gallery-toggle active">Показати всі</button>
                        </div>
                     <?php } ?>
                     <?php while ( have_posts() ) : the_post(); ?>

                        <?php if($category['term_id'] == 19) { ?>
                           
                              <?php get_template_part( 'category-gallery', get_post_format() ); ?>
                           
                        <?php } else 
                           get_template_part( 'category-blog', get_post_format() ); ?>

                     <?php endwhile; ?>

                     <?php get_template_part( 'navigation', 'archive' ); ?>
                  </div>
                  <?php if($category['term_id'] == 19) {  ?>
                     <div class="col-sm-9">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <script>
                           jQuery(document).ready(function(){
                              //Examples of how to assign the Colorbox event to elements
                              jQuery(".group<?php echo get_the_ID();?>").colorbox({rel:'group<?php echo get_the_ID();?>'});
                           })
                        </script>
                           <?php get_template_part( 'category-gallery-photos', get_post_format() ); ?>
                        <?php endwhile; ?>
                     </div>
                  <?php } ?>
               <?php else : ?>

                  <?php get_template_part( 'no-results', 'archive' ); ?>

               <?php endif; ?>
               <div class="col-sm-3">
                  <?php ample_both_sidebar_select(); ?>
                  <?php if($category['term_id'] != 19) {  ?>
                     <?php ample_sidebar_select(); ?>
                  <?php } ?>
               </div>
            </div>
           
      </div><!-- .inner-wrap -->
   </div><!-- .single-page -->

   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>
