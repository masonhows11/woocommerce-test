<?php

class Router
{

    public function __construct()
    {
        add_action('init', [$this, 'handle_routes']);
    }

    /**
     * @throws Exception
     */
    public function handle_routes()
    {

        $request_uri = $_SERVER['REQUEST_URI'];

        // router started & worked
        // var_dump($request_uri);
        // exit();
        $this->dispatch_request($request_uri);


    }

    /**
     * @throws Exception
     */
    private function dispatch_request($request_uri)
    {


        $handler = $this->parse_uri($request_uri);

        $handler_name = $this->format_handler_name($handler);

        if ($this->is_handler_valid($handler_name)) {
            throw new Exception('request handler is not valid');
        }
        // include & make new obj from requested handler class
        $handler_class_path = $this->get_handler_file($handler_name);
        include_once $handler_class_path;
        new $handler_class_path;
        exit();
    }

    private function parse_uri($uri)
    {
        $uri_part = explode('/', $uri);
        return end($uri_part);
    }

    private function is_handler_valid($handler)
    {
        $handler_file_path = $this->get_handler_file($handler);
        return file_exists($handler_file_path) && is_readable($handler_file_path);
    }

    private function get_handler_file($handler)
    {
        $handler_file_path = UPP_DIR . DIRECTORY_SEPARATOR . 'panel/handlers/' . $handler . '.php';
        return $handler_file_path;
    }

    private function format_handler_name($handler)
    {
        return ucfirst($handler) . 'Handler';
    }

}