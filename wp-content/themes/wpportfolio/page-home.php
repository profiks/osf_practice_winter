<?php
    /*Template Name: Homepage*/
?>


<?php get_header(); ?>
      

      <div class="row">
        <div id="slides" class="large-12 columns">
          
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/example-slide-1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/example-slide-2.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/example-slide-3.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/example-slide-4.jpg">
          
        </div>
      </div>

      <div class="row">
        <hr>
        <div class="large-8 columns">
          <h4>About</h4>
          
            <h1>Denys Arkan</h1>
           
               <h3>Responsibilities and achievements</h3>
               
               <ul>
                   <li>Competent with image creation software (like Photoshop)</li>
                   <li>Working with layers to transform design into html/css templates</li>
                   <li>User interface developing using jQuery, jQuery UI, Bootstrap 3, Foundation</li>
                   <li>Poor level of LESS CSS pre-processor</li>
                   <li>Experience with versioning system (git, Mercurial)</li>
                   <li>I know how to use Zen Coding</li>
                   <li>Experience with some most populare js libraries and tools</li>
               </ul>
            
            <p>
           
          
        </div>
      </div>
      
      
      
      <div class="row">
        <hr>
        <div class="large-12 columns">
          <h4>Work</h4>
          <p>Click on each image!</p>
          
    <?php
        $args = array(
            'posts_per_page'=> 4,
        ); 
        $work_items = new WP_Query($args);
        if($work_items->have_posts()) : ?>      
          
<ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
           <?php while($work_items->have_posts()) : $work_items->the_post();?>
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
          <?php endif; ?>
        </div>
      </div>
      
     <div class="row">
        <div class="large-12 columns">
          <hr>
          <h4>Contact Me</h4>
          <div class="large-4 columns">
              Email: <a href="mailto:denys.ark@gmail.com">denys.ark@gmail.com</a>
          </div>
          <div class="large-4 columns">
            Facebook : <a href="https://www.facebook.com/prfiks" target="_blank">www.facebook.com</a>
          </div>
          <div class="large-4 columns">
            Phone: <a href="tel:+380959427043">+380959427043</a>
          </div>
        </div>
      </div>
      
    
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>