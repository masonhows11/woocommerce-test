<?php

/**
 * Plugin Name: User panel-pro
 * Plugin URI: https://websolo.ir/
 * Description: A User pro panel with object-oriented with amazing feature
 * Version: 1.0.0
 * Author: Naeem soltany
 * Author URI: https://websolo.ir/
 * Text Domain: User panel-pro
 * Domain Path: /languages/
 * Requires at least: 6.5
 * Requires PHP: 7.4
 *
 */

class  PanelPro{

    public function __construct()
    {
        $this->Constants();
        $this->init();
    }

    public function Constants()
    {
        // get dir path
        define('OOP_DIR',plugin_dir_path(__FILE__));
        // get url path
        define('OOP_URL',plugin_dir_url(__FILE__));
    }

    public function init()
    {
        register_activation_hook(__FILE__,[$this,'activation']);
        register_deactivation_hook(__FILE__, [$this,'deactivation']);
        // to run router engine
        $this->start_router();

    }
    public function activation()
    {}
    public function deactivation()
    {}
    private function start_router(): void
    {
        // make new from Router class
        include "router.php";
        new Router();
    }
}

new PanelPro();