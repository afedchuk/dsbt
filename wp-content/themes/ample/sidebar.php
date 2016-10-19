<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<div id="secondary" class="sidebar">
   <?php do_action( 'ample_before_sidebar' );

   if( is_page_template( 'page-templates/template-contact.php' ) ) {
      $sidebar = 'ample_contact_page_sidebar';
   }
   else {
      $sidebar = 'ample_right_sidebar';
   }

   if ( ! dynamic_sidebar( $sidebar ) ) :
      if ( $sidebar == 'ample_contact_page_sidebar' ) {
         $sidebar_display = __('Contact Page', 'ample');
      } else {
         $sidebar_display = __('Right', 'ample');
      }
      the_widget( 'WP_Widget_Text',
         array(
            
         ),
         array(
            'before_widget' => '<section class="widget widget_text">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
         )
      );
   endif;

   do_action( 'ample_after_sidebar' ); ?>
</div>
