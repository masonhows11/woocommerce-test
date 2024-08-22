<?php
// register normally font.css file
add_action('wp_enqueue_scripts', 'clab_options_panel_css');
function clab_options_panel_css()
{

    wp_register_style('clab_options_panel_fonts', CLAB_URL.'options-panel/assets/css/fonts.css');
    wp_enqueue_style('clab_options_panel_fonts');

    // use select font style for specific html element/tag
    $current_font = clab_get_posts_option('select_font');
    if (!empty($current_font)) {
        $custom_font_style = "
        .blog-post h3 a {
            font-family:{$current_font}
          }
    ";
     wp_add_inline_style('clab_options_panel_fonts', $custom_font_style);
    }

}

