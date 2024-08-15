<?php
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
add_action('woocommerce_shop_loop_item_title',function()
{
    echo '  <h6 class="mb-2 font-size-16"><a href="#">'. get_the_title() .'</a></h6>';
});