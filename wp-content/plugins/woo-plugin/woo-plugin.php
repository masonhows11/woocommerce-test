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

// to check is woocommerce is exists & is active
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))
)) {

    function load_woo_gateway()
    {
        class Woo_Gateway extends WC_Payment_Gateway
        {
            // add required gateway features

        }

        function add_woo_gateway($methods)
        {
            $methods[] = 'Woo_Gateway';
            return $methods;
        }
        // add our gateway to gateway list / wc class list
        add_filter('woocommerce_payment_gateways','add_woo_gateway');
    }


    // to check is plugins loaded or not
    // like our custom gateway plugin
    add_action('plugins_loaded','load_woo_gateway');

};