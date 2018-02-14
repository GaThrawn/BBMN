<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */
$the_theme = wp_get_theme();
$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'frontsecond' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper">

			<div class="<?php echo esc_attr( $container ); ?>" id=" widget-area" tabindex="-1">

				<div class="row">

					<?php dynamic_sidebar( 'frontsecond' ); ?>

				</div>

			</div>

	</div><!-- #wrapper-static-hero -->

<?php endif; ?>
