<?php
 /*Template Name: New Template
 */
 
get_header(); ?>

    
    <?php
    $mypost = array( 'post_type' => 'single-news', );
     if (have_posts()) :
   while (have_posts()) :
      the_post();
   the_content();
   endwhile;
endif;
    ?>
  
     
           
 
        
 
 

<?php wp_reset_query(); ?>
<?php get_footer(); ?>