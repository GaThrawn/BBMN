<div class="row">
<div class="col-md-8"><h1 class="fronttexth1">About Mike Nash</h1><br></div><br>
<?php 

  

  $args = array(
    'post_type' => 'page',
    'include'   => '40',
    'order'     => 'ASC',
    'orderby'   => 'title',
    'posts_per_page' => 1
  );
  $query = new WP_Query( $args );

?>

  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div id="meimage" class="col-md-6 text-center grey-scale50">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>

 

<div id="metext" class="col-md-6">
    
 <div class="d-none d-md-block"> 
     
    <p class="fronttext">
     <?php the_content(); ?>
     </p>
     
  </div>
</div>
  <?php endwhile; endif; wp_reset_postdata(); ?>   
<!--THIS IS FOR MOBILE DEVICES-->    
<div class="d-md-none">
<div id="metext" class="col-md-6">
    <p class="fronttext">I use cutting edge web technology combined with purposeful visuals to tell stories and invoke feelings true to the brands core values.<br>

I look forward to sharing my creativity and dedication to quality.<br>

Let’s build something great together.</p>
  </div>
</div>
</div>
    

