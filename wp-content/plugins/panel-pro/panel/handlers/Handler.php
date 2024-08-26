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

    protected function performActions()
    {

        $action = $this->getAction();
        // execute action as method
        $this->{$action}();
    }

    protected function hasAction()
    {
        $action = $this->getAction();
        return !is_null($action) && method_exists($this,$action);
    }

    protected function getAction()
    {
        return isset($_GET['action']) && !empty($_GET['action']) ? $_GET['action'] : null;
    }

}