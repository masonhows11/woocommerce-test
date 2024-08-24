<?php

include "Handler.php";
include  UPP_DIR ."view.class.php";
class DashboardHandler extends Handler {

    public function __construct()
    {

    }

    public function index()
    {
        $current_user = wp_get_current_user();
        $params = [
          'current_user' => $current_user,
          'user_posts_count' => count_user_posts($current_user->ID),
          'user_comments_count' => $this->get_user_comments_count($current_user->ID) ,
        ];
        view::load('panel.dashboard.index',$params);
        // the second parameter is variable pass to view file
        // view::load('panel/dashboard/index.php' , ['name' => 'mason' , 'age' => 32]);
        //var_dump('this is index fun in dashboard');
    }


    private function get_user_comments_count($user_id)
    {
        global $wpdb;

        $user_comments_count = $wpdb->get_var($wpdb->prepare("
        SELECT COUNT(comment_ID)
        FROM {$wpdb->comments}
        WHERE user_id=%d
        AND comment_approved = 1
        ",$user_id));
        return intval($user_comments_count);
        
    }
}