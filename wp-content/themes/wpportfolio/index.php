
<?php get_header(); ?>
      <div class="row">
        
        <div class="large-12 columns">
         
       
<?php if (have_posts()) :?>
           
          
          
          <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
          
           <?php while(have_posts()) : the_post(); ?>
            <li>
             <?php if (has_post_thumbnail()) : ?>
             <?php 
$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                ?>
              <a href="<?=$image[0];?>">
              <?php the_post_thumbnail();?>
              
              </a>
              <?php endif; ?>
            </li>
             <?php endwhile; ?>
          </ul>
          <?php else :?>
              no posts
          <?php endif;?>
        </div>
      </div>


      
    
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>