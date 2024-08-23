<?php

function clab_get_general_option($name){

    $options = get_option('clab_options');
    $general_options  = $options['general'];

    return isset($general_options[$name]) ? $general_options[$name] : null;

}

function clab_get_posts_option($name){

    $options = get_option('clab_options');
    $posts_options  = $options['posts'];

    return isset($posts_options[$name]) ? $posts_options[$name] : null;

}

function clab_get_image_option($name){

    $options = get_option('clab_options');
    $image_options  = $options['images'];

    return isset($image_options[$name]) ? $image_options[$name] : null;

}

function clab_get_notification_option($name){

    $options = get_option('clab_options');
    $notification_options  = $options['notification'];

    return isset($notification_options[$name]) ? $notification_options[$name] : null;

}
