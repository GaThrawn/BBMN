<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>
<script>
// init controller
    var controller = new ScrollMagic.Controller();
</script>
<div class="wrapper" id="wrapper-index">
<div id="pixelstrigger"></div>
<?php get_template_part('content', 'pixelsblock'); ?> 

    
    <div id="ssmenutrigger"></div>
    <div id="stickscrollmenu">
    <div class="stickscrollmenul">
    <ul>
    <li><a href="#0">Home </a></li>
    <li><a href="#1">About</a></li>    
    <li><a href="#2">Tools</a></li>
    <li><a href="#3">Samples</a></li>
    <li><a href="#4">Contact</a></li>
    </ul>
    </div>
    
    <div class="stickscrollmenur">
      
    <ul>
    <li><a href="#0"><i class="fa fa-home" aria-hidden="true"></i></a></li>
    <li><a href="#1"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
    <li><a href="#2"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
    <li><a href="#3"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
    <li><a href="#4"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a></li>
    </ul>
     </div> 
</div>

  
<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
 
        
<div id="firsttrigger"></div>
<div id="metexttrigger"></div>
<div id="meimagetrigger"></div>
<a name="1"></a>        
<div id="frontfirst">
<!--    <div class="row">       -->
  <?php get_sidebar( 'frontfirst' ); ?>
  <?php get_template_part('content', 'pagefrontfirst'); ?>     
<!--  </div>-->
</div>
        
<a name="2"></a>
<div id="worktriggertop"></div>
<div id="worktriggermid"></div>
<div id="worktriggerbottom"></div>
<div id="secondtrigger"></div>         
<div id="frontsecond">
<!--    <div class="row text-center">     -->
  <?php get_sidebar( 'frontsecond' ); ?>      
  <?php get_template_part('content', 'pagefrontsecond'); ?>      
<!--    </div>-->
</div>
        
<a name="3"></a>        
<div id="thirdtrigger"></div> 
<div id="porttrigger"></div>
<div id="frontthird">
    <div class="row">
   <?php get_sidebar( 'frontthird' ); ?>       
   <?php get_template_part('content', 'pagefrontthird'); ?>       
   </div> 
</div>
        
<a name="4"></a>        
<div id="fourthtrigger"></div>
<div id="contacttriggercb"></div>
<div id="contacttriggercd"></div>

<div id="frontfourth">
<div class="row">
    
  <div id="frontcontactcd" class="col"> <?php get_sidebar( 'frontfourth' ); ?>   </div>     
   <div class="col"> <?php get_template_part('content', 'pagefrontfourth'); ?>  </div>     

</div>
</div>



		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div><!-- .row -->
<div id="footertrigger"></div>
</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>


