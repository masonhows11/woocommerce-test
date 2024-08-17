<?php get_header('shop'); ?>

<!--page title start-->
<section class="component-section section-top bg-gray">
    <!--<div class="hero-img bg-overlay" data-overlay="1" style="background-image: url(assets/img/price-banner.jpg);"></div>-->
    <div class="container">
        <div class="row justify-content-between align-items-center mt-5 text-lg-left text-center">
            <div class="col-md-6">
                <!-- heading -->
                <h3 class="">
                    سبد خرید ویرآمد
                </h3>
            </div>
            <div class="col-md-6">
                <!--breadcrumb-->
                <nav aria-label="breadcrumb" class="float-lg-right">
                    <ol class="breadcrumb bg-white btn-pill px-5 mb-0">
                        <li class="breadcrumb-item"><a href="#" class="text-dark">بررسی</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-dark">فروشگاه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">سبد خرید فروشگاه</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <div class="section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!--  To display cart items use the_content() method  -->
                        <?php the_content(); ?>

                    </div>
                </div>
            </div>
        </div>
      

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>


