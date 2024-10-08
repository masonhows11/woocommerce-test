<?php

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
                $this->icon = null;
                $this->has_fields = false;
                $this->method_title = "درگاه بانک فلان برای ووکامرس";
                $this->method_description = "توضیحات درگاه فلان برای ووکامرس";
                // display gateway for user
                $this->title = "درگاه بانک تست برای ووکامرس";
                $this->init_form_fields();
                // access to setting section data
                $this->init_settings();
                //// sample access to settings data
                //// $this->merchant = $this->settings['merchant'];
                //// die($this->merchant);


                // to save current data setting in database
                add_action('woocommerce_update_options_payment_gateways_'.$this->id,[$this,'process_admin_options']);

                // redirect user to bank for pay lv.2
                add_action('woocommerce_receipt_'.$this->id,[$this,'start_payment']);

                // verify payment
                add_action('woocommerce_api_'.strtolower(get_class($this)),[$this,'verify_payment']);


            }

            // display form for custom gateway
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

            // redirect user to bank for pay lv.1
            public function process_payment($order_id)
            {
                $order = new WC_Order($order_id);
                return  [
                    'result' => 'success',
                    'redirect' => $order->get_checkout_order_received_url(true),

                ];


            }

            // redirect user to bank for pay lv.3
            public function start_payment($order_id)
            {

                global $woocommerce;
                // save order_id to wc session
                $woocommerce->session->order_id = $order_id;
                // get order with order_id
                $order = new WC_Order($order_id);
                $total = $order->order_total;

                // make callback url
                $callback = get_home_url('/');
                $callback = add_query_arg('wc-api',get_class($this),$callback);

                // redirect user to bank
                // wp_redirect('')
            }

            // verify payment
            public function verify_payment()
            {
                global $woocommerce;
                // get order_id from session
                $order_id = $woocommerce->session->order_id;
                // find current order_id
                $order = new WC_Order($order_id);

                // set msg  for order status
                $order->add_order_note('سفارش با موفقیت ثبت شد');
                $order->add_order_note('مشکلی در ثبت سفارش پیش امده');

                // complete payment
                $order->payment_complete();

                // clear cart
                $woocommerce->cart->empty_cart();




            }

        }

        function add_woo_gateway($methods)
        {
            $methods[] = 'Woo_Gateway';
            return $methods;
        }
        // add our gateway to gateway list / wc class list
        // or activate this feature
        add_filter('woocommerce_payment_gateways','add_woo_gateway');
    }


    // to check is plugins loaded or not
    // like our custom gateway plugin
    add_action('plugins_loaded','load_woo_gateway');

};
