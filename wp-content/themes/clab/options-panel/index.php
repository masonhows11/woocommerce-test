<?php 

// add assets
add_action('admin_enqueue_scripts','clab_options_panel_assets');
function clab_options_panel_assets(){

    // add & reg css files
    wp_register_style('options-panel-style',CLAB_URL.'options-panel/assets/css/options.css');
    wp_enqueue_style('options-panel-style');

    // add & reg js files
    wp_register_script('options-panel-script',CLAB_URL.'options-panel/assets/js/options.js',['jquery']);
    wp_enqueue_script('options-panel-script');

}
// add options-panel
add_action('admin_menu','clab_add_option_panel');
function clab_add_option_panel()
{
    add_theme_page('تنظیمات قالب',' تنظیمات قالب clab','manage_options','clab_options_panel','clab_show_options_panel');
}

function clab_show_options_panel(){

    include 'views/index.php';
}
