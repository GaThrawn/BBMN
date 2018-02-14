

<?php 

  

  $args = array(
    'p'         => 827,
    'post_type' => 'page',
    'include'   => '749',
    'posts_per_page' => 1
  );
  $query = new WP_Query( $args );

?>

  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

 


    

     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    
     <?php the_content(); ?>
  


  <?php endwhile; endif; wp_reset_postdata(); ?>   
<!--THIS IS FOR MOBILE DEVICES-->    



