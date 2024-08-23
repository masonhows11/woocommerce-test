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
        //var_dump('this is index fun in dashboard');
    }
}