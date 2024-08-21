<?php 

add_action('admin_menu','clab_add_option_panel');
function clab_add_option_panel()
{
    add_theme_page('تنظیمات قالب',' تنظیمات قالب clab','manage_options','clab_options_panel','clab_show_options_panel');
}

function clab_show_options_panel(){

    include 'views/index.php';
}
