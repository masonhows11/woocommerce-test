<?php

include "Handler.php";
include  UPP_DIR ."view.class.php";
class WalletHandler extends Handler{

    public function __construct()
    {

    }

    public function index()
    {
        view::load('panel/wallet/index.php');
    }
}