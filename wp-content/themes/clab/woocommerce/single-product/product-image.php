<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.0.0
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
    return;
}

global $product;

$gallery_ids = $product->get_gallery_image_ids();
?>
    <div class="owl-carousel owl-theme dot-style-1 nav-round" data-items="[1,1]" data-margin="30" data-autoplay="true" data-loop="true" data-nav="true" data-dots="true">
        <?php foreach ($gallery_ids as $gallery_id): ?>
        <?php $img_src = wp_get_attachment_url($gallery_id); ?>
        <div class="item">
            <a href="#" class="card border-0">
                <img class="card-img rounded" src="<?php echo $img_src ?>" alt="card image"/>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
<?php

