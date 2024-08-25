<?php

abstract class Handler
{

    protected $current_user;

    public function __construct()
    {
        $this->current_user = wp_get_current_user();
    }

    //    protected function set_current_user($user)
    //    {
    //        $this->current_user = $user;
    //    }

    abstract protected function index();

}