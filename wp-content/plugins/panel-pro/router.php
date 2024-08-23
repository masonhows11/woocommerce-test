<?php

class Router
{

    public function __construct()
    {
        add_action('init', [$this, 'handle_routes']);
    }

    public function handle_routes()
    {

        $request_uri = $_SERVER['REQUEST_URI'];
        // router started & worked
        // var_dump($request_uri);
        // exit();

    }
}