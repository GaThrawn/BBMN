

<?php 

  

  $args = array(
    'post_type' => 'web_service',
    'posts_per_page' => 7
  );
  $query = new WP_Query( $args );

?>

  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

 

     <a href="<?php the_permalink(); ?>"><?php the_title( '<p>', '</p>' ); ?></a>
  


  <?php endwhile; endif; wp_reset_postdata(); ?>   
<!--THIS IS FOR MOBILE DEVICES-->    



