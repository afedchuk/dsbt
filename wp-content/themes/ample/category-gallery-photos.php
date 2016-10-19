<?php if ( get_post_gallery() ) :
         $gallery = get_post_gallery( get_the_ID(), false );
         
         /* Loop through all the image and output them one by one */
         foreach( $gallery['src'] as $src ) : ?>
         <a href="<?php echo $src; ?>" class="group<?php echo get_the_ID();?> init-colorbox-processed">
            <img src="<?php echo $src; ?>" width="250"/>
         </a>
             <?php
         endforeach;
     endif;
?>