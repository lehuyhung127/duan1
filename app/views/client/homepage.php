<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>F-Watch</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="resource/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resource/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="resource/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="resource/css/vendor/simple-line-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="resource/css/plugins/animation.css">
    <link rel="stylesheet" href="resource/css/plugins/slick.css">
    <link rel="stylesheet" href="resource/css/style.css">
    <link rel="stylesheet" href="resource/css/plugins/nice-select.css">
    <link rel="stylesheet" href="resource/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="resource/css/plugins/jqueryui.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="resource
    /js/vendor/vendor.min.js"></script>
    <script src="resource
    /js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="resource/css/style.css">
    <!--<link rel="stylesheet" href="resource
        /css/style.min.css">-->
    <style>
        .txt-desc {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">

        <!--  Header Start -->
        <header class="header">

            <!-- Header Top Start -->
            <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center">
                                    <li class="language">English <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Tiếng Việt</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="top-info-wrap text-end">
                                <ul class="my-account-container">
                                    <li><a href="<?= BASE_URL . '/cart' ?>">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Header Top End -->
            <!-- haeader Mid Start -->
            <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-5">
                            <div class="logo-area" width="200px">
                                <a href="<?= BASE_URL . '/ ' ?>" class="text-decoration-none text-white fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box-wrapper " style="margin-left: 70px;">
                                <div class="search-box-inner-wrap ">
                                    <form class="search-box-inner" action="<?= BASE_URL . '/homeshow' ?>" method="post">

                                        <div class="search-field-wrap">
                                            <input type="text" class="search-field" placeholder="Search product..." name="tim-kiem-san-pham">


                                            <div class="search-btn">
                                                <button type="submit"><i class="icon-magnifier"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="right-blok-box text-white d-flex">

                                <!-- <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div> -->
                                <!-- danh sách yêu thích  -->

                                <div class="shopping-cart-wrap">
                                    <a href="<?= BASE_URL . '/cart' ?>"><i class="icon-basket-loaded"></i></a>

                                </div>
                                <!-- giỏ hàng  -->


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- haeader Mid End -->

            <!-- haeader bottom Start -->
            <div class="haeader-bottom-area bg-gren header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 d-none d-lg-block">
                            <div class="main-menu-area white_text">
                                <!--  Start Mainmenu Nav-->
                                <nav class="main-navigation text-center">
                                    <ul>
                                        <li class="active"><a href="<?= BASE_URL . '' ?>">Home </a></li>
                                        <li><a href="<?= BASE_URL . '/danhmuc' ?>">Sản phẩm</i></a>

                                        </li>
                                        <li class="active"><a href="<?= BASE_URL . '/about' ?>">Giới Thiệu </a></li>
                                        <li><a href="<?= BASE_URL . '/question' ?>">Hỏi Đáp</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-5 col-md-6 d-block d-lg-none">
                            <div class="logo"><a href="index.html"><img src="resource/images/logo/logo.png" alt=""></a></div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                            <div class="right-blok-box text-white d-flex">
                                <!-- <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div> -->
                                <div class="shopping-cart-wrap">
                                    <a href="<?= BASE_URL . '/cart' ?>"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                </div>
                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="<?= BASE_URL . '/cart' ?>"><img src="resource /images/icon/bg-menu.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- phần trang giỏ hàng chưa php -->
                    </div>
                </div>
            </div>
            <!-- haeader bottom End -->

            <!-- oke -->

            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="off-canvas-inner">
                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="icon-magnifier"></i></button>
                            </form>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">Home</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="<?= BASE_URL . '/danhmuc' ?>">Sản phẩm</a>
                                    </li>
                                    <li><a href="<?= BASE_URL . '/about' ?>">Giới Thiệu</a></li>
                                    <li><a href="<?= BASE_URL . '/question' ?>">Hỏi Đáp</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->


                        <div class="header-top-settings offcanvas-curreny-lang-support">

                            <ul class="nav align-items-center">
                                <li class="language">English <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                    </ul>
                                </li>
                                <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#"> € EURO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul class="offcanvas-account-container">
                                    <li><a href="<?= BASE_URL . '/cart' ?>">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>
        <!--  Header Start -->
        <!-- Hero Section Start -->
        <!-- phần di chuyển -->
        <div class="hero-slider hero-slider-one">
            <!-- phần di chuyển -->
            <!-- Single Slide Start -->
            <div class="single-slide" style="background-image: url(resource/images/slider/slide-bg-2.jpg)">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
                                <h5>Exclusive Offer -20% Off This Week</h5>
                                <h1>H-Vault Classico</h1>
                                <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American
                                    Part That Is. </p>
                                <p>Starting At <strong>$1.499.00</strong></p>
                                <div class="slide-btn-group">
                                    <a href="<?= BASE_URL . '/cart' ?>" class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
            <!-- Single Slide End -->
        </div>
        <div class="banner-area section-pt">
            <div class="container">
                <div class="row">
                    <!-- slide -->
                    <?php foreach ($listBanner as $item) : ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-banner mb-30">
                                <a href="#"><img src="<?= './public/uploads/banner/' . $item->image ?>" height="350px" alt=""></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!--  -->
        <!-- Sản phẩm bán chạy nhất -->
        <!-- Product Area Start -->
        <div class="product-area section-pb section-pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4 class="text-center fs-2 text-uppercase product-tab-menu" style="color: #c89979">Best seller products</h4>
                        </div>
                    </div>
                </div>
                <div class="row product-active-lg-4">
                    <?php foreach ($listProducts as $item) : ?>
                        <div class="col-lg-12" style="height: 500px;">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30" style="height: 380px;">
                                <div class="product-thumb">
                                    <a href="<?= BASE_URL . '/detail?id=' . $item->id ?>" class="text-center p-2">
                                        <img class="primary-image" src="<?= './public/uploads/products/' . $item->image ?>" style="height: 250px;" alt="">
                                    </a>
                                    <div class=" label-product label_new">New
                                    </div>
                                    <div class="action-links">
                                        <a href="<?= BASE_URL . '/cart ' ?>" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <ul class="watch-color">
                                        <li class="twilight"><span></span></li>
                                        <li class="pigeon"><span></span></li>
                                        <li class="portage"><span></span></li>
                                    </ul>
                                </div>
                                <div class="product-caption">
                                    <h4 class="txt-desc"><a href="<?= BASE_URL . '/detail?id=' . $item->id ?>"><?= $item->name ?></a></h4>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                        <?php endforeach ?>;
                </div>
            </div>
        </div>
        <!-- Product Area End -->

        <!-- Banner Area Start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <?php foreach ($listBanner as $item) : ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-banner mb-30">
                                <a href="#"><img src="<?= './public/uploads/banner/' . $item->image ?>" height="350px" alt=""></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->


        <!-- sản phẩm featured -->
        <div class="product-area section-pb section-pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="nav product-tab-menu d-block text-center" role="tablist">
                            <li class="product-tab-item nav-item active">
                                <a class="product-tab__link active fs-2" id="nav-featured-tab" data-bs-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">Featured</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-content product-tab__content" id="product-tabContent">
                    <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                        <div class="product-carousel-group">

                            <div class="row product-active-row-4">
                                <?php foreach ($listProductshome as $item) : ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-area start -->
                                        <div class="single-product-area mt-30" style="height: 350px;">
                                            <div class="product-thumb">
                                                <a href="<?= BASE_URL . '/detail?id=' . $item->id ?>" class="p-2">
                                                    <img class="primary-image" src="<?= './public/uploads/products/' . $item->image ?>" style="height: 250px" alt="">
                                                </a>
                                                <div class=" label-product label_new">New
                                                </div>
                                                <div class="action-links">
                                                    <a href="<?= BASE_URL . '/cart' ?>" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                    <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                    <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                </div>
                                                <ul class="watch-color">
                                                    <li class="twilight"><span></span></li>
                                                    <li class="pigeon"><span></span></li>
                                                    <li class="portage"><span></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-caption">
                                                <h4 class="product-name"><a href="<?= BASE_URL . '/detail?id=' . $item->id ?>"><?= $item->name ?></a></h4>
                                            </div>
                                        </div>
                                        <!-- single-product-area end -->
                                    </div>
                                    <?php endforeach ?>;
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Product Area End -->
        <!-- footer Start -->
        <footer>
            <div class="footer-top section-pb section-pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Contact Info</h6>

                                <div class="footer-addres">
                                    <div class="widget-content mb--20">
                                        <p>Address: TVB, Nam Từ liêm, Hà Nội <br> CA 12345 - USA.</p>
                                        <p>Phone: <a href="tel:">(012) 800 000 789</a></p>
                                        <p>Fax: <a href="tel:">(012) 800 888 789</a></p>
                                        <p>Email: <a href="tel:"> Fwatch@example.com</a></p>
                                    </div>
                                </div>

                                <ul class="social-icons">
                                    <li>
                                        <a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="rss social-icon" href="#" title="Rss" target="_blank"><i class="fa fa-rss"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Information</h6>
                                <ul class="footer-list">
                                    <li><a href="<?= BASE_URL . '/' ?>">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Quick Contact</a></li>
                                    <li><a href="blog.html">Blog Pages</a></li>
                                    <li><a href="#">Concord History</a></li>
                                    <li><a href="#">Client Feed</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Extras</h6>
                                <ul class="footer-list">

                                    <li><a href="#">Concord History</a></li>
                                    <li><a href="#">Client Feed</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Quick Contact</a></li>
                                    <li><a href="blog.html">Blog Pages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Get the app</h6>
                                <p>GreenLife App is now available on Google Play & App Store. Get it now.</p>
                                <ul class="footer-list">
                                    <li><img src="resource /images/brand/img-googleplay.jpg" alt=""></li>
                                    <li><img src="resource /images/brand/img-appstore.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copy-left-text">
                                <p>Copyright &copy; <a href="#">Ruiz</a> 2019. All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copy-right-image">
                                <img src="resource /images/icon/img-payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer End -->












        <!-- JS
============================================ -->

        <!-- Modernizer JS -->
        <script src="resource/js/vendor/modernizr-3.6.0.min.js"></script>

        <!-- jquery -->
        <script src="resource/js/vendor/jquery-3.6.1.min.js"></script>
        <script src="resource/js/vendor/jquery-migrate-3.4.0.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="resource/js/vendor/bootstrap.min.js"></script>

        <!-- Plugins JS -->
        <script src="resource/js/plugins/slick.min.js"></script>
        <script src="resource/js/plugins/jquery.nice-select.min.js"></script>
        <script src="resource/js/plugins/countdown.min.js"></script>
        <script src="resource/js/plugins/image-zoom.min.js"></script>
        <script src="resource/js/plugins/fancybox.js"></script>
        <script src="resource/js/plugins/scrollup.min.js"></script>
        <script src="resource/js/plugins/jqueryui.min.js"></script>
        <script src="resource/js/plugins/ajax-contact.js"></script>

        <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
        <!--
<script src="resource
/js/vendor/vendor.min.js"></script>
<script src="resource
/js/plugins/plugins.min.js"></script>
-->

        <!-- Main JS -->
        <script src="resource/js/main.js"></script>

</body>



<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:23 GMT -->

</html>