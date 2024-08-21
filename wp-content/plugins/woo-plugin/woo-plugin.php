<?php

/**
 * Plugin Name: Woo plugin
 * Plugin URI: https://websolo.ir/
 * Description: a woocommerce sample plugin
 * Version: 9.1.4
 * Author: Naeem soltany
 * Author URI: https://websolo.ir/
 * Text Domain: woo-plugin
 * Domain Path: /languages/
 * Requires at least: 6.5
 * Requires PHP: 7.4
 *
 */

if (!defined("ABSPATH")) {
    exit;
}
define('WOO_PLUGIN_DIR',plugin_dir_path(__FILE__));

// to check is woocommerce is exists & is active
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    include WOO_PLUGIN_DIR .'gateway.php';
    include WOO_PLUGIN_DIR . 'shipping.php';

};