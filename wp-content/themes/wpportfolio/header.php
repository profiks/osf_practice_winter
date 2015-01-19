<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); wp_title(' - '); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Denya Arkan">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="icon" href="http://faviconka.ru/ico/faviconka_ru_1440.ico" type="image/x-icon" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <div class="row">
        <div class="large-12 columns">
          <div class="nav-bar right">
<?php
$defaults = array(
                'theme_location'  => 'main-menu',
                'menu'            => '',
                'container'       => false,
                'container_class' => 'button',
                'container_id'    => '',
                'menu_class'      => 'button-group',
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

            wp_nav_menu($defaults);

?> </div>
          <h1><a href="<?=home_url(); ?>">My portfolio</a></h1>
          <hr/>
        </div>
      </div>