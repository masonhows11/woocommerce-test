<?php

include "Handler.php";
include  UPP_DIR.'view.class.php';
include UPP_DIR.'/services/UserService.php';
include_once UPP_DIR .'/utility/Currency.php';
class WalletHandler extends Handler{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $currency = new Currency();
        $user_service = new UserService();
        $user_wallet = $currency->formatToman($user_service->get_user_wallet($this->current_user->ID));
        // put variable with their values in to an array
        // we access to variable in every-where
        // compact('user_wallet');

        view::load('panel.wallet.index',compact('user_wallet'));
    }
}