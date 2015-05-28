<?php

/*
Theme Name: Kate Basic
Author: Kate Lee
Author URI: http://kateleeseattle.com
Description: Kate's basic wp template style.
Version: 1.0
*/

//Register My Menus
register_nav_menus(array(
    'main-menu' => __('Main'),
));
//

//Enable Featured Images & Post Thumbnails
add_theme_support('post-thumbnails');

//Register Sidebars
register_sidebar(array(
    'before_title' =>'<h2>',
    'after_title' =>'</h2>',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
));
//

?>
