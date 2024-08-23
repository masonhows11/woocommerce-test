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

// send email with new  title & body when new user sign up
// use notification option
add_action('user_register','clab_process_notifications');
function clab_process_notifications($user_id){

    $email_subject = clab_get_notification_option('new_user_email_title');
    $email_body = clab_get_notification_option('new_user_email_body');
    if(!empty($email_subject) && !empty($email_body)){
        $user = get_user_by('id',$user_id);
        wp_mail($user->user_email,$email_subject,$email_body);
        // use mailtrap test email for test send email
    }

}

// set mail config from test email
// using mailtrap web test
function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '1480411f94b162';
    $phpmailer->Password = 'ed6618069fb09d';
}

add_action('phpmailer_init', 'mailtrap');
