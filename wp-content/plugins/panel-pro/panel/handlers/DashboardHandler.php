<?php

include "Handler.php";
include  UPP_DIR ."view.class.php";
class DashboardHandler extends Handler {

    public function __construct()
    {

    }

    public function index()
    {
        view::load('panel/dashboard/index.php');
        // the second parameter is variable pass to view file
        // view::load('panel/dashboard/index.php' , ['name' => 'mason' , 'age' => 32]);
        //var_dump('this is index fun in dashboard');
    }
}