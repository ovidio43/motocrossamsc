<?php
require_once(get_template_directory() . '/lib/post-type.php');
register_nav_menu('primary', __('Primary Menu'));
register_nav_menu('social_nav', __('social Menu'));
add_theme_support('post-thumbnails');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}