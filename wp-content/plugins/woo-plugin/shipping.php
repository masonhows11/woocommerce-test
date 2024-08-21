<?php


add_action('woocommerce_shipping_init', 'init_woo_shipping');
function init_woo_shipping()
{
    class Woo_shipping extends WC_Shipping_Method
    {


        public function __construct()
        {
            $this->id = 'woo_shipping';
            $this->title = 'تحویل در حسن اباد';
            $this->method_description = "توضیحات تحویل سفارش در حسن آباد";
            $this->enabled = 'yes';

            $this->init_form_fields();
            // access to setting section data
            $this->init_settings();

            // to save current data setting in database
            add_action('woocommerce_update_options_shipping_'.$this->id,[$this,'process_admin_options']);

        }

        // display form for custom gateway
        public function init_form_fields()
        {
            $this->form_fields = [
                'enabled' => [
                    'title' => 'فعال / غیر فعال',
                    'label' => 'فعال / غیر فعال',
                    'type' => 'checkbox',
                ],
                'amount' => [
                    'title' => 'حداکثر وزن سفارش',
                    'label' => 'حداکثر وزن سفارش',
                    'type' => 'number',
                ]
            ];
        }

    }

    // add our gateway to gateway list / wc class list
    // or activate this feature
    function load_woo_shipping_method($methods){
        $methods['woo_shipping'] = 'Woo_shipping';
        return $methods;
    }

    // To activate this feature
    add_filter('woocommerce_shipping_methods','load_woo_shipping_method');
}