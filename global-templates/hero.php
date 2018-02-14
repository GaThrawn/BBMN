<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

?>

<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) ) : ?>
<div id="topsection">
    <div id="topsectiontext"><h1 class="fronttexth1">FREELANCE <br>CREATIVE <br>DEVELOPER</h1></div> 
	
    <div class="wrapper" id="wrapper-hero">       
       <?php get_sidebar( 'hero' ); ?>
       <?php get_sidebar( 'statichero' ); ?>
    
  </div>
<div id="topsectiontrigger"></div>    
<div id="topsectionbtn"></div>
</div>
          
<?php endif; ?>
