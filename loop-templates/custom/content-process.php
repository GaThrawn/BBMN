<div class="row">
<!--<div class="col-md-12"><h1 class="fronttexth1">MY WORK PROCESS</h1><br></div><br>-->
<?php 

  

  $args = array(
    'p'         => 756,
    'post_type' => 'page',
    'include'   => '756',
    'posts_per_page' => 1
  );
  $query = new WP_Query( $args );

?>

  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

 

<div id="" class="col">
    
 <div class="d-none d-md-block"> 
     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    
     <?php the_content(); ?>
     
     
  </div>
</div>
  <?php endwhile; endif; wp_reset_postdata(); ?>   
<!--THIS IS FOR MOBILE DEVICES-->    
<div class="d-md-none">

</div>
</div>
    

