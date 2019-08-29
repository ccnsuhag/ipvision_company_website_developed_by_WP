<?php 


function ipvision_setup(){

    load_theme_textdomain('ipvision');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('post-formats',array('image','video','audio'));
    register_nav_menu('topmenu',__('Top menu','ipvision'));

}
add_action('after_setup_theme','ipvision_setup');



?>