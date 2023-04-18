<!doctype html>
<html class="no-js" lang="en">



<!-- Mirrored from htmldemo.net/ruiz/ruiz/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sản Phẩm</title>
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
    <link rel="stylesheet" href="resource/css/plugins/animation.css">
    <link rel="stylesheet" href="resource/css/plugins/nice-select.css">
    <link rel="stylesheet" href="resource/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="resource/css/plugins/jqueryui.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="resource/js/vendor/vendor.min.js"></script>
    <script src="resource/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="resource/css/style.css">
    <!--<link rel="stylesheet" href="resource/css/style.min.css">-->
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
                        </div>
                        <div class="col-lg-6">
                            <div class="top-info-wrap text-end">
                                <ul class="my-account-container">

                                    <li><a href="cart.html">Cart</a></li>
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
                            <div class="logo-area">
                                <a href="<?= BASE_URL  ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="text-white">F-Watch</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box-wrapper" style="margin-left: 70px;">
                                <div class="search-box-inner-wrap position-relative">
                                    <form class="search-box-inner " action="<?= BASE_URL . '/homeshow' ?>" method="post" autocomplete="off">

                                        <div class="search-field-wrap">
                                            <input type="text" class="search-field" placeholder="Enter name product..." name="tim-kiem-san-pham" id="tim-kiem-san-pham">

                                            <div class="search-btn">
                                                <button><i class="icon-magnifier"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                    <div id="search-ajax" class="position-absolute start-0 end-0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right-blok-box text-white d-flex">

                                <!-- <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div> -->

                                <div class="shopping-cart-wrap">
                                    <a href="<?= BASE_URL . '/cart ' ?>"><i class="icon-basket-loaded"></i></a>

                                </div>
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
                                        <li class="active"><a href="<?= BASE_URL . '/ ' ?>">Home</a>
                                        </li>
                                        <li><a href="<?= BASE_URL . '/danhmuc' ?>">Sản Phẩm</a>
                                        </li>
                                        <li><a href="<?= BASE_URL . '/about' ?>">Giới Thiệu</a></li>
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
                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="#"><img src="resource/images/icon/bg-menu.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- haeader bottom End -->

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
                                    <li class="menu-item-has-children"><a href="">Home</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>

                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->


                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <h5>My Account</h5>
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
                                <h5>My Account</h5>
                                <ul class="offcanvas-account-container">
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="cart.html">Cart</a></li>
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
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL . '/ ' ?>">Home</a></li>
                            <li class="breadcrumb-item active">Shop left sidebar</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- shop-sidebar-wrap start -->
                        <div class="shop-sidebar-wrap">
                            <div class="shop-box-area">

                                <!--sidebar-categores-box start  -->
                                <div class="sidebar-categores-box shop-sidebar mb-30">
                                    <h4 class="title">Product categories</h4>
                                    <div class="category-sub-menu">
                                        <ul class="list-group">
                                            <?php foreach ($listBrands as $item) : ?>
                                                <li class="list-group-item"><a href="<? $item->id ?>" class="text-black text-decoration-none"><?= $item->name ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                                <!--sidebar-categores-box end  -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <!-- <h4 class="title">Filter By Price</h4> -->
                                    <!-- filter-price-content start -->
                                    <!-- <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price-slider" class="price-slider"></div>
                                            <div class="filter-price-wapper">

                                                <a class="add-to-cart-button" href="#">
                                                    <span>FILTER</span>
                                                </a>
                                                <div class="filter-price-cont">

                                                    <span>Price:</span>
                                                    <div class="input-type">
                                                        <input type="text" id="min-price" readonly="" />
                                                    </div>
                                                    <span>—</span>
                                                    <div class="input-type">
                                                        <input type="text" id="max-price" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->
                                    <!-- filter-price-content end -->
                                </div>
                                <!-- shop-sidebar end -->
                            </div>
                        </div>
                        <!-- shop-sidebar-wrap end -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">

                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">
                            <div class="row align-itmes-center">
                                <div class="col">
                                    <!-- shop-top-bar start -->
                                    <div class="shop-top-bar">
                                        <!-- product-view-mode start -->

                                        <div class="product-mode">
                                            <!--shop-item-filter-list-->
                                            <ul class="nav shop-item-filter-list" role="tablist">
                                                <li class="active"><a class="active grid-view" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                                <li><a class="list-view" data-bs-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a></li>
                                            </ul>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- product-view-mode end -->
                                        <!-- product-short start -->
                                        <div class="product-short">
                                            <p>Sort By :</p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name(A - Z)</option>
                                                <option value="sales">Name(Z - A)</option>
                                                <option value="rating">Price(Low > High)</option>
                                                <option value="date">Rating(Lowest)</option>
                                            </select>
                                        </div>
                                        <!-- product-short end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                </div>
                            </div>

                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <div class="row">
                                                <?php foreach ($listProduct as $item) : ?>
                                                    <div class="col-lg-4 col-md-6">
                                                        <!-- single-product-area start -->

                                                        <div class="single-product-area mt-30" style="height: 350px;">
                                                            <div class="product-thumb">
                                                                <a href="<?= BASE_URL . '/detail?id=' . $item->id ?>" class="p-2">
                                                                    <img class="primary-image" src="<?= './public/uploads/products/' . $item->image ?>" style="height: 250px" alt="">
                                                                </a>
                                                                <div class="label-product label_new">New</div>
                                                                <div class="action-links">
                                                                    <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                    <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                    <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                                </div>
                                                                <ul class="watch-color">
                                                                    <li class="twilight"><span></span></li>
                                                                    <li class="portage"><span></span></li>
                                                                    <li class="pigeon"><span></span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-caption">
                                                                <h4 class="product-name"><a href="<?= BASE_URL . '/detail?id=' . $item->id ?>"><?= $item->name ?></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                        <!-- single-product-area end -->
                                                    </div>
                                                <?php endforeach ?>
                                                <!-- end for -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="list">
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list mt-30">
                                                <?php foreach ($listProduct as $item) : ?>
                                                    <div class="col-lg-3 col-md-3">
                                                        <!-- single-product-wrap start -->
                                                        <div class="single-product">
                                                            <div class="product-image ">
                                                                <a href="<?= BASE_URL . '/detail?id=' . $item->id ?>" class="">
                                                                    <img class="primary-image" src="<?= './public/uploads/products/' . $item->image ?>" style="height: 200px" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product-wrap end -->
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="product-content-list text-left">
                                                            <h4><a href="<?= BASE_URL . '/detail?id=' . $item->id ?>"><?= $item->name ?></a>
                                                                <div class="product-rating">
                                                                    <ul class="d-flex">
                                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                                        <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="block2">
                                                            <ul class="stock-cont">
                                                                <li class="product-sku">Sku: <span>P006</span></li>
                                                                <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                            </ul>
                                                            <div class="product-button">

                                                                <ul class="actions">
                                                                    <li class="add-to-wishlist">
                                                                        <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="add-to-cart">
                                                                    <div class="product-button-action">
                                                                        <a href="#" class="add-to-cart">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->

                            <!-- paginatoin-area start -->
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="pagination-box">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a class="Next" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paginatoin-area end -->
                        </div>
                        <!-- shop-product-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

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
                                        <p>Address: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                                        <p>Phone: <a href="tel:">(012) 800 000 789</a></p>
                                        <p>Fax: <a href="tel:">(012) 800 888 789</a></p>
                                        <p>Email: <a href="tel:">demo@hashthemes.com</a></p>
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
                                    <li><a href="index.html">Home</a></li>
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
                                    <li><img src="resource/images/brand/img-googleplay.jpg" alt=""></li>
                                    <li><img src="resource/images/brand/img-appstore.jpg" alt=""></li>
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
                                <img src="resource/images/icon/img-payment.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer End -->

    </div>

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
<script src="resource/js/vendor/vendor.min.js"></script>
<script src="resource/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="resource/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#tim-kiem-san-pham').keyup(function() {
                var keywords = $(this).val()
                // 
                if (keywords != '') {
                    $.ajax({
                        url: "<?= BASE_URL . '/search-products' ?>",
                        method: "POST",
                        data: {
                            keywords: keywords
                        },
                        success: function(result) {
                            $('#search-ajax').fadeIn()
                            $('#search-ajax').html(result)
                            $('.li-ajax').click(function() {
                                // console.log(1);
                                $("#tim-kiem-san-pham").val($(this).text());
                                $("#tim-kiem-san-pham").focus();
                                $('#search-ajax').fadeOut();
                            })
                        }
                    })
                } else {
                    $('#search-ajax').fadeOut();
                }
            })

        })
    </script>
</body>


<!-- Mirrored from htmldemo.net/ruiz/ruiz/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:32 GMT -->

</html>