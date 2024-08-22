<?php

// add assets
add_action('admin_enqueue_scripts', 'clab_options_panel_assets');
function clab_options_panel_assets()
{
    // add & reg css files
    wp_register_style('options-panel-style', CLAB_URL . 'options-panel/assets/css/options.css');
    wp_enqueue_style('options-panel-style');
    // add & reg js files
    wp_register_script('options-panel-script', CLAB_URL . 'options-panel/assets/js/options.js', ['jquery']);
    wp_enqueue_script('options-panel-script');
}

// add options-panel
add_action('admin_menu', 'clab_add_option_panel');
function clab_add_option_panel()
{
    add_theme_page('تنظیمات قالب', ' تنظیمات قالب clab', 'manage_options', 'clab_options_panel', 'clab_show_options_panel');
}

function clab_show_options_panel()
{
    // get the current tab from Get Request
    $current_tab = isset($_GET['tab']) && !empty($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'general';
    // security tips very important
    $white_list = ['general', 'posts', 'images', 'notification'];
    if (!in_array($current_tab, $white_list)) {
        wp_die('دسترسی به این بخش امکان پذیر نمی باشد');
    }
    // save our custom options in database
    if (isset($_POST['save_options'])) {
        do_action('clab_save_options', $current_tab);
    }
    // font list to select font
    $font_list = [
        'وزیر' => 'vazir',
        'صمیم' => 'samim',
        'تنها' => 'tanha',
    ];
    // image size option
    $images_sizes = get_intermediate_image_sizes();

    // to display saved options in form
    $clab_options = get_option('clab_options', []);
    // can access to $options variable in general view/page/file
    // to display saved information
    $options = isset($clab_options[$current_tab]) ? $clab_options[$current_tab] : [];
    include 'views/index.php';
}

// save our custom options in wp_options table
add_action('clab_save_options', 'clab_store_options');
function clab_store_options($current_tab)
{
    $clab_options = get_option('clab_options', []);
    switch ($current_tab){
        case 'general':
            $clab_options['general'] = [
                'site_title' => sanitize_text_field($_POST['site_title']),
                'home_posts_count' => intval($_POST['home_posts_count']) > 0 ? intval($_POST['home_posts_count']) : 1,
            ];
            break;
        case 'posts':
            $clab_options['posts'] = [
                'show_category' => isset($_POST['show_category']) ? 1 : 0,
                'show_excerpt' => isset($_POST['show_excerpt']) ? 1 : 0,
                'show_comments' => isset($_POST['show_comments']) ? 1 : 0,
                'select_font' => sanitize_text_field($_POST['select_font']),
            ];
            break;
        case 'images':
            $clab_options['images'] = [
                'default_image_size' => isset($_POST['default_image_size']),
            ];
            break;
        case 'notification':

            break;
    }

    update_option('clab_options', $clab_options);

    //    $clab_options['general'] = [];
    //    $clab_options['posts'] = [];
    //    $clab_options['images'] = [];
    //    $clab_options['notification'] = [];
}
