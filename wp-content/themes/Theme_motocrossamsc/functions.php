<?php
require_once(get_template_directory() . '/lib/post-type.php');
register_nav_menu('primary', __('Primary Menu'));
register_nav_menu('social_nav', __('social Menu'));
add_theme_support('post-thumbnails');