<?php 
/*
 *  menu
 */

function register_my_menus(){
    register_nav_menus(array(
        'main-menu' => 'Top Main Menu'
    ));
}

add_action('init', 'register_my_menus');




/*
 *  theme suport for post thumbnail
 */
if (function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800,500);
}

?>
