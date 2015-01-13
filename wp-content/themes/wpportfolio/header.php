<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); wp_title(' - '); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Denya Arkan">
    
    <link rel="stylesheet" href="assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <div class="row">
        <div class="large-12 columns">
          <div class="nav-bar right">
           <ul class="button-group">
             <li><a href="#" class="button">Home</a></li>
             <li><a href="#" class="button">About</a></li>
             <li><a href="#" class="button">Contact</a></li>
             <li><a href="#" class="button">Work</a></li>
            </ul>
 
<?php

            $defaults = array(
                'theme_location'  => 'main-menu',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );

            wp_nav_menu( $defaults );

?>
            
            
          </div>
          <h1><a href="<?=home_url(); ?>">My portfolio</a></h1>
          <hr/>
        </div>
      </div>