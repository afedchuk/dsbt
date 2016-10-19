<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<section class="no-results not-found">

   <div class="page-content">
      <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

         <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ample' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

      <?php elseif ( is_search() ) : ?>

         <h3><?php _e( 'За вашим пошуковим запитом нічого не знайдено', 'ample' ); ?></h3>
         <?php get_search_form(); ?>

      <?php else : ?>

         <p><?php _e( 'Здається, ми не можемо знайти те, що ви шукаєте. Можливо, пошук може допомогти.', 'ample' ); ?></p>
         <?php get_search_form(); ?>

      <?php endif; ?>
   </div><!-- .page-content -->
</section><!-- .no-results -->