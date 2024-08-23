<?php
include "Handler.php";
include  UPP_DIR ."view.class.php";
class ProfileHandler extends Handler{

    public function __construct()
    {

    }

    public function index()
    {
        view::load('panel.profile.index');
    }
}