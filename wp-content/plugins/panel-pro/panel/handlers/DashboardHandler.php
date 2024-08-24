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
        view::load('panel.dashboard.index',[
            'current_user' => $current_user
        ]);
        // the second parameter is variable pass to view file
        // view::load('panel/dashboard/index.php' , ['name' => 'mason' , 'age' => 32]);
        //var_dump('this is index fun in dashboard');
    }
}