<?php
/**
 * Partial template for content in landingpage.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title fronttextsub">', '</h1>' ); ?>
       
	</header><!-- .entry-header -->
<div class="row justify-content-center">
<div class="col-5">

  <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>  

    
</div>
<div class="col-5">
   <div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
       <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content --> 
<?php get_template_part( 'loop-templates/custom/content', 'services' ); ?>    
</div>
    <br><br>
</div>
	

	<footer class="entry-footer">

		

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
