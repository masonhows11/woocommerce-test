<?php
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function () {
    echo '  <h6 class="mb-2 font-size-16"><a href="#">' . get_the_title() . '</a></h6>';
});

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

add_action('woocommerce_before_shop_loop_item_title', function () {
    global $post, $product; ?>
    <div class="position-relative">
        <?php if ($product->is_on_sale()): ?>
            <div class="ft-tag ft-inside-tr">ویژه</div>
        <?php endif; ?>
        <?php
        echo woocommerce_get_product_thumbnail(' card-img-top');
        ?>
        <!--        <img class="card-img-top" src="/assets/img/shop/shop-img1.jpg" alt="card image"/>-->
    </div>
    <div class="card-body py-4 text-center">
    <?php

}, 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item_title', function () {
    ?>
    <div class="price mb-3">
        <?php echo wc_get_template('loop/price.php'); ?>
<!--        <del class="text-muted mr-2"><span class="font-size-14 h6">49.000 تومان</span></del>-->
<!--        <span class="h6">32.000 تومان</span>-->
    </div>
<!--    <a href="#" class="btn btn-sm btn-pill btn-outline">افزودن به سبد خرید</a>-->
<!--    </div>-->
    <?php
}, 10);


// To remove the information next to the products section
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_shop_loop_header', 'woocommerce_product_taxonomy_archive_header', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// Add to cart
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close',5);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);

add_action('woocommerce_after_shop_loop_item',function (){
    echo '</a>';
});

add_action('woocommerce_after_shop_loop_item',function (){
    wc_get_template('loop/add-to-cart.php');
    echo '</div>';
});