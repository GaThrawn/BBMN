<div class="col-md-12"><h1 class="fronttexth1">Some of My <br>Work</h1><br></div><br>
<?php 

  $num_posts = ( is_front_page() ) ? 3 : 1;

  $args = array(
    'post_type' => 'my_work',
      'orderby'        => 'rand',
    'posts_per_page' => $num_posts
    
  );
  $query = new WP_Query( $args );

?>

  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
  <div class="col"><div class="porttext text-center"><?php the_title(); ?></div>
  <div class="port">
     <div class="portin grey-scale75"> 
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>
 </div>
</div>
  <?php endwhile; endif; wp_reset_postdata(); ?>



    

