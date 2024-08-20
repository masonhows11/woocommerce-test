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

            public function __construct()
            {
                $this->id = 'woo_gateway';
                $this->method_title = 'درگاه بانک فلان برای ووکامرس';
                $this->icon = null;
                $this->has_fields = false;
                $this->method_description = "توضیحات درگاه فلان برای ووکامرس";

                $this->init_form_fields();
                // access to setting section data
                $this->init_settings();
                //// sample access to settings data
                //// $this->merchant = $this->settings['merchant'];
                //// die($this->merchant);

                // to save current data setting in database
                add_action('woocommerce_update_options_payment_gateways_'.$this->id,[$this,'process_admin_options']);

            }

            public function init_form_fields()
            {
               $this->form_fields = [
                    'enabled' => [
                        'title' => 'فعال / غیر فعال',
                        'type' => 'checkbox',
                        'label' => 'فغال سازی درگاه پرداخت',
                        'description' => 'برای فعال سازی درگاه پرداخت این چک باکس را انتخاب کنید',
                        'default' => 'yes',

                    ],
                    'merchant' => [
                    'title' => 'API درگاه',
                    'type' => 'text',
                    'label' => 'API درگاه فلان',
                    'description' => 'برای استفاده از این درگاه باید API کنید',
                    'default' => '',

            ]

               ];
            }

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