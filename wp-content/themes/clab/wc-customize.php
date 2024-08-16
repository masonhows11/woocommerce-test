<?php
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function () {
    echo '  <h6 class="mb-2 font-size-16"><a href="#">' . get_the_title() . '</a></h6>';
});

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

add_action('woocommerce_before_shop_loop_item_title', function () {
    echo '<div class="position-relative">
        <div class="ft-tag ft-inside-tr">ویژه</div>
        <img class="card-img-top" src="'.CLAB_URL.'assets/img/shop/shop-img1.jpg" alt="card image" />
        </div>
        <div class="card-body py-4 text-center">';

}, 10);

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
add_action('woocommerce_after_shop_loop_item_title',function (){
    echo ' <div class="price mb-3">
           <del class="text-muted mr-2"><span class="font-size-14 h6">49.000 تومان</span></del>
           <span class="h6">32.000 تومان</span>
           </div>
           <a href="#" class="btn btn-sm btn-pill btn-outline">افزودن به سبد خرید</a>
           </div>';
},10);