<?php

include 'Handler.php';
class WalletHandler extends Handler{

    public function __construct()
    {

    }

    public function index()
    {
        var_dump('this is index fun in wallet');
    }
}