<?php
    /*Template Name: Contact pagee*/
?>


<?php get_header(); ?>
      


      <div class="row">
        
        <div class="large-8 columns">
         
            <?php
    // TO SHOW THE PAGE CONTENTS
    while (have_posts()) : the_post(); 
            //Because the_content() works only inside a WP Loop?>
      
       
            <?php the_content();  //Page Content?>
        

    <?php
    endwhile; //resetting the page loop
    ?>
          
        </div>
      </div>
      
      
      
      
    
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>