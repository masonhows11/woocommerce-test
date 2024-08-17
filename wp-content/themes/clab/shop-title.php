<section class="section-gap section-top bg-white text-center">
    <!--<div class="hero-img bg-overlay" data-overlay="1" style="background-image: url(assets/img/price-banner.jpg);"></div>-->
    <div class="container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-7">
                <!-- heading -->
                <?php if (apply_filters( 'woocommerce_show_page_title',true)): ?>
                    <h2 class="woocommerce-product-header__title page-title"><?php woocommerce_page_title(); ?></h2>
                <?php endif; ?>
                <!--breadcrumb-->
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ol class="breadcrumb bg-white btn-pill px-5">
                        <li class="breadcrumb-item"><a href="#" class="text-dark">بررسی</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-dark">فروشگاه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">فروشگاه 2 نوار کناری</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>