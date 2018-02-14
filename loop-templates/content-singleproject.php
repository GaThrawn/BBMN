<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>


	<header class="entry-header">

		

		

	</header><!-- .entry-header -->

<div class="col-12">
    <?php the_title( '<h1 class="entry-title fronttextsub">', '</h1>' ); ?>
  
    </div> 
<div class="row justify-content-center">
<div class="col-8">
   
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div> 
</div>
<div class="col-12">	

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div> 

	


	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->


