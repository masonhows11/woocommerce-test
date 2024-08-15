<?php

// get_stylesheet_directory() get dir in child theme
define('CLAB_CHILD_PATH',get_stylesheet_directory());
add_action('wp_enqueue_scripts','clab_child_add_styles');
function clab_child_add_styles(){

    // get_template_directory_uri() refer to parent/main  clab theme dir
    wp_enqueue_style('clab_main_style',get_template_directory_uri('/style.css'));

    // for add child theme style
    // array('clab_main_style') is third args refer to main theme style
    // mean first apply child theme then apply parent theme
    wp_enqueue_style('clab_child_style',get_stylesheet_directory_uri().'/style.css',array('clab_main_style'));
}

include CLAB_CHILD_PATH . '/custom.php';