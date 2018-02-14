<?php
/**
 * Template Name: Full Width Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
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

						

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

                <div id="frontfourth">
<div class="row">
    
  <div id="frontcontactcd" class="col"> <?php get_sidebar( 'frontfourth' ); ?>   </div>     
   <div class="col"> <?php get_template_part('content', 'pagefrontfourth'); ?>  </div>     

</div>
</div>
                
                
			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
