
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php  echo CLAB_URL; ?>assets/img/favicon.png">

    <!--web fonts-->
    <?php  wp_head(); ?>
    <!--basic styles-->
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/custom-icon/style.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/vl-nav/css/core-menu.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/animate.min.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/owl/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/vendor/owl/assets/owl.theme.default.min.css" rel="stylesheet">

    <!--custom styles-->
    <link href="<?php  echo CLAB_URL; ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php  echo CLAB_URL; ?>assets/css/custom.css" rel="stylesheet">

    <!--[if (gt IE 9) |!(IE)]><!-->
    <!--<link rel="stylesheet" href="assets/vendor/custom-nav/css/effects/fade-menu.css"/>-->
    <link rel="<?php  echo CLAB_URL; ?>stylesheet" href="assets/vendor/vl-nav/css/effects/slide-menu.css"/>
    <!--<![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136585988-1"></script>-->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136585988-1');
    </script>
</head>

<body <?php body_class(); ?> >
<section class="py-2 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <small class="font-size-14">هر سوالی دارید؟ با ما تماس بگیرید: 1-222-333-4445</small>
            </div>
            <div class="col-md-5 text-md-right">
                <ul class="list-inline m-0 d-inline mr-2">
                    <li class="list-inline-item font-size-14"><a href="#" class="text-dark">ورود</a></li>
                    <li class="list-inline-item font-size-14 ml-2"><a href="#" class="text-dark">ایجاد حساب کاربری</a></li>
                </ul>
                <div class="dropdown d-inline ml-2">
                    <button class="border-0 no-bg dropdown-toggle font-size-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="mb-1 mr-1" src="<?php  echo CLAB_URL; ?>assets/img/lang.jpg" alt=""> USA
                    </button>
                    <div class="dropdown-menu dropdown-menu-right custom-dropdown custom-dropdown-sm" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">ENG</a>
                        <a class="dropdown-item" href="#">GER</a>
                        <a class="dropdown-item" href="#">FRN</a>
                        <a class="dropdown-item" href="#">PUR</a>
                    </div>
                </div>
                <a href="#" class="text-decoration-none text-dark ml-2"><i class="vl-cart1"></i></a>
            </div>
        </div>
    </div>
</section>
<!--pre header end-->

<!--header start-->
<header class="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="index-2.html">
                        <img class="logo-light" src="<?php echo CLAB_URL; ?>assets/img/logo.png" srcset="<?php echo CLAB_URL; ?>assets/img/logo@2x.png 2x" alt="CLab">
                        <img class="logo-dark" src="<?php echo CLAB_URL; ?>assets/img/logo-dark.png" srcset="<?php echo CLAB_URL; ?>assets/img/logo-dark@2x.png 2x" alt="CLab">
                    </a>
                </div>
                <!--brand end-->
                <!--start responsive nav toggle button-->
                <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!--end responsive nav toggle button-->
                <!--</div>-->

                <!--top mega menu start-->
                <nav id="vl-menu">
                    <!--extra links start-->
                    <div class="float-right nav-extra-link">
                        <a href="https://www.rtl-theme.com/user-profile/tn_plugin/" class="btn btn-sm btn-pill btn-theme mt-3">هم اکنون بخرید</a>
                    </div>
                    <!--extra links end-->
                    <!--start nav-->
                    <ul class="vlmenu light-sub-menu slide-effect float-right">
                        <li><a href="#">خانه <i class="fa fa-angle-down"></i></a>
                            <!--mega menu start-->
                            <div class="mega-menu half-nav">
                                <div class="col3">
                                    <h3>دمو ها</h3>
                                    <ol>
                                        <li><a href="home-01.html">لندینگ یک</a></li>
                                        <li><a href="home-02.html">لندینگ دو</a></li>
                                        <li><a href="home-03.html">لندینگ سه</a></li>
                                        <li><a href="home-04.html">لندینگ چهار</a></li>
                                        <li><a href="home-05.html">لندینگ پنج</a></li>
                                        <li><a href="home-agency.html">آژانسی</a></li>
                                        <li><a href="home-agency2.html">آژانسی دو</a></li>
                                    </ol>
                                </div>
                                <div class="col3">
                                    <h3> &nbsp;</h3>
                                    <ol>
                                        <li><a href="home-business.html">کسب و کار</a></li>
                                        <li><a href="home-charity.html">خیریه</a></li>
                                        <li><a href="home-corporate.html">شرکت خیریه</a></li>
                                        <li><a href="home-creative.html">خلاق</a></li>
                                        <li><a href="home-gym.html">تناسب اندام</a></li>
                                        <li><a href="home-insurance.html">بیمه</a></li>
                                        <li><a href="home-job.html">کاریابی</a></li>
                                    </ol>
                                </div>
                                <div class="col3">
                                    <h3> &nbsp;</h3>
                                    <ol>
                                        <li><a href="home-listing.html">فهرست</a></li>
                                        <li><a href="home-portfolio.html">نمونه کار</a></li>
                                        <li><a href="home-product.html">محصولات</a></li>
                                        <li><a href="home-startup.html">استارت آپ</a></li>
                                        <li><a href="home-travel.html">سفر</a></li>
                                        <li><a href="home-blog.html">مقاله وبلاگ</a></li>
                                        <li></li>
                                    </ol>
                                    <a href="page-landing.html" class="btn btn-sm btn-theme ml-3 mt-2">مشاهده همه دمو ها</a>
                                </div>
                            </div>
                            <!--mega menu end-->
                        </li>
                        <li><a href="#"> صفحات <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li>
                                    <a href="page-landing.html" class="d-flex">
                                        <i class="vl-pop-corn font-size-20"></i>
                                        <div class="font-weight-700"> صفحات فرود </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-inner.html" class="d-flex">
                                        <i class="vl-layer font-size-20"></i>
                                        <div class="font-weight-700">صفحات داخلی</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-utility.html" class="d-flex">
                                        <i class="vl-gear font-size-20"></i>
                                        <div class="font-weight-700">صفحات سودمند</div>
                                    </a>
                                </li>
                            </ul>
                            <!--end level 2-->
                        </li>
                        <li><a href="#">بلاگ <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li><a href="#">پوسته وبلاگ</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="blog-standard.html">استاندارد وبلاگ</a></li>
                                        <li><a href="blog-standard-left.html">بلاگ استاندارد چپ</a></li>
                                        <li><a href="blog-standard-right.html">بلاگ استاندارد راست</a></li>
                                        <li><a href="blog-list.html">لیست بلاگ</a></li>
                                        <li><a href="blog-cards.html">کارت های وبلاگ</a></li>
                                        <li><a href="blog-cards-masonry.html">وبلاگ کارت های مختلف</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                                <li><a href="#">پست تک </a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="blog-single.html">پست استاندارد تک</a></li>
                                        <li><a href="blog-single-audio.html">پست صوتی تک</a></li>
                                        <li><a href="blog-single-video.html">پست ویدیو تک</a></li>
                                        <li><a href="blog-single-gallery.html">پست گالری تک</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                            </ul>
                            <!--end level 2-->
                        </li>
                        <li><a href="#">اجزاء <i class="fa fa-angle-down"></i></a>
                            <!--mega menu start-->
                            <div class="mega-menu full-nav  ">
                                <div class="col5">
                                    <!--<h3>Components</h3>-->
                                    <ol>
                                        <li><a href="component-accordions.html">آکاردئون ها</a></li>
                                        <li><a href="component-alert.html">هشدار ها</a></li>
                                        <li><a href="component-blurb.html">اعلان</a></li>
                                        <li><a href="component-buttons.html">دکمه ها</a></li>
                                        <li><a href="component-call-to-action.html">تماس به عملکردها</a></li>
                                        <li><a href="component-card.html">کارت ها</a></li>
                                        <li><a href="component-carousel.html">چرخ فلک ها</a></li>
                                        <li><a href="component-clients.html">مشتریان</a></li>
                                    </ol>
                                </div>
                                <div class="col5">
                                    <!--<h3> &nbsp;</h3>-->
                                    <ol>
                                        <li><a href="component-countdown.html">شمارش معکوس</a></li>
                                        <li><a href="component-footer.html">پاورقی ها</a></li>
                                        <li><a href="component-form.html">فرم ها</a></li>
                                        <li><a href="component-fun-factor.html">عوامل سرگرم کننده</a></li>
                                        <li><a href="component-gradient-background.html">پس زمینه گرادیان</a></li>
                                        <li><a href="component-grid-even.html">شبکه</a></li>
                                        <li><a href="component-grid-masonry.html">ساختمان شبکه ای</a></li>
                                        <li><a href="component-hero-header.html">سربرگ حرفه ای</a></li>
                                    </ol>
                                </div>

                                <div class="col5">
                                    <!--<h3>Extra Pages</h3>-->
                                    <ol>
                                        <li><a href="component-icon-box.html">جعبه آیکون</a></li>
                                        <li><a href="component-image-background.html">تصویر پس زمینه</a></li>
                                        <li><a href="component-image-block.html">بلوک های تصویر</a></li>
                                        <li><a href="component-list.html">لیست ها</a></li>
                                        <li><a href="component-list-group.html">لیست گروه ها</a></li>
                                        <li><a href="component-modal.html">مدال ها</a></li>
                                        <li><a href="component-parallax.html">پارالاکس</a></li>
                                        <li><a href="component-pricing-table.html">جداول قیمت</a></li>
                                    </ol>
                                </div>
                                <div class="col5">
                                    <!--<h3>Layouts</h3>-->
                                    <ol>
                                        <li><a href="component-progress-bar.html">میله پیشرفت</a></li>
                                        <li><a href="component-slider.html">اسلایدر ها</a></li>
                                        <li><a href="component-steps.html">مراحل</a></li>
                                        <li><a href="component-subscription.html">اشتراک ها</a></li>
                                        <li><a href="component-table.html">جداول</a></li>
                                        <li><a href="component-tabs.html">زبانه ها</a></li>
                                        <li><a href="component-team.html">تیم ها</a></li>
                                        <li><a href="component-testimonial.html">مشتریان</a></li>
                                    </ol>
                                </div>
                                <div class="col5">
                                    <!--<h3>Icons</h3>-->
                                    <ol>
                                        <li><a href="component-twitter.html">توییتر <span class="badge badge-pill badge-success text-white d-inline-block ml-2 py-1 px-2">زنده</span></a></li>
                                        <li><a href="component-typed-text.html">متن تایپ شده</a></li>
                                        <li><a href="component-typography.html">تایپوگرافی</a></li>
                                        <li><a href="component-video.html">ویدیو</a></li>
                                    </ol>
                                </div>

                            </div>
                            <!--mega menu end-->
                        </li>
                        <li class="menu-right"><a href="#">نمونه کار <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li><a href="#">شبکه</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="portfolio-grid-2.html">ستون دو</a></li>
                                        <li><a href="portfolio-grid-3.html">ستون سه</a></li>
                                        <li><a href="portfolio-grid-4.html">ستون چهار</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                                <li><a href="#">شبکه کامل عرض</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="portfolio-grid-2-fullwidth.html">ستون دو</a></li>
                                        <li><a href="portfolio-grid-3-fullwidth.html">ستون سه</a></li>
                                        <li><a href="portfolio-grid-4-fullwidth.html">ستون چهار</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                                <li><a href="#">عنوان شبکه</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="portfolio-grid-title-2.html">ستون دو</a></li>
                                        <li><a href="portfolio-grid-title-3.html">ستون سه</a></li>
                                        <li><a href="portfolio-grid-title-4.html">ستون چهار</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                                <li><a href="#">ساختمانی</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="portfolio-masonry-2.html">ستون دو</a></li>
                                        <li><a href="portfolio-masonry-3.html">ستون سه</a></li>
                                        <li><a href="portfolio-masonry-4.html">ستون چهار</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                                <li><a href="#">مصالح ساختمانی عرض کامل</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="portfolio-masonry-2-fullwidth.html">ستون دو</a></li>
                                        <li><a href="portfolio-masonry-3-fullwidth.html">ستون سه</a></li>
                                        <li><a href="portfolio-masonry-4-fullwidth.html">ستون چهار</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>
                                <li><a href="#">عنوان ساختمان</a>
                                    <!--start level 3-->
                                    <ul>
                                        <li><a href="portfolio-masonry-title-2.html">ستون دو</a></li>
                                        <li><a href="portfolio-masonry-title-3.html">ستون سه</a></li>
                                        <li><a href="portfolio-masonry-title-4.html">ستون چهار</a></li>
                                    </ul>
                                    <!--end level 3-->
                                </li>

                                <li><a href="portfolio-single.html">تک پروژه</a></li>

                            </ul>
                            <!--end level 2-->
                        </li>
                        <li><a href="#"> فروشگاه <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li><a href="shop-2.html">شبکه فروشگاه 2 </a></li>
                                <li><a href="shop-3.html">شبکه فروشگاه 3 </a></li>
                                <li><a href="shop-4.html">شبکه فروشگاه 4 </a></li>
                                <li><a href="shop-single.html">تک فروش </a></li>
                                <li><a href="shop-cart.html">صفحه سبد خرید</a></li>
                                <li><a href="shop-checkout.html">صفحه بررسی</a></li>
                            </ul>
                            <!--end level 2-->
                        </li>
                        <li><a href="#"> پشتیبانی <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                <li>
                                    <a href="mailto:dkmosa@gmail.com?subject=Clab-Support" class="d-flex">
                                        <i class="vl-support font-size-20"></i>
                                        <div class="font-weight-700">برای پشتیبانی بیایید</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://thevectorlab.net/clab-doc" target="_blank" class="d-flex">
                                        <i class="vl-file font-size-20"></i>
                                        <div class="font-weight-700">کمک آنلاین</div>
                                    </a>
                                </li>
                            </ul>
                            <!--end level 2-->
                        </li>
                    </ul>
                    <!--end nav-->
                </nav>
                <!--top mega menu end-->
            </div>
        </div>
    </div>
</header>
