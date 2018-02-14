<?php
/**
 * Template Name: Full Width My Work Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
<div id="pixelstrigger"></div>
<?php get_template_part('content', 'pixelsblocksmall'); ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row justify-content-center">

            <div class="col-md-10 content-area" id="primary">
				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'myworkpage' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->


		</div><!-- .row -->

<?php 
  $args = array(
    'post_type' => 'my_work',
    'posts_per_page' => -1,
    'orderby' => 'rand'
  );
  $query = new WP_Query( $args );

?>


  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<div class="row justify-content-center">
    
<div class="col-4">
    <br>
     <a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>

</div> 
<div class="col-4 workcont">

      
     <?php the_excerpt(); ?>
</div>    
</div>      
  <?php endwhile; endif; wp_reset_postdata(); ?>           
       
	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
