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

// Create Post Thumbnails
add_theme_support( 'post-thumbnails' );
//

// Create Page Excerpts
add_post_type_support('page', 'excerpt');
//
    

//Create get my title
function get_my_title_tag(){
    
    global $post; //do not forget this one!!
    
    if(is_front_page()) {//the front page
        bloginfo( 'description' );
    }
    elseif ( is_page() || is_single() ) {//pages and postings
        the_title(); //title of page or posting
    }
    else{ // for everything else
        bloginfo( 'description' );
    }
    
    if($post->post_parent){
        echo ' | '; //sepeerator with spaces
        echo get_the_title($post->post_parent); //parent page title
    }
   
    
    echo ' | '; //seperator
    bloginfo('name'); //site name
    echo ' | '; //seperator
    echo 'Seattle, WA'; //city and state
}
//
?>
