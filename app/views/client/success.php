<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/ruiz/ruiz/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hóa Đơn Chi Tiết</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="resource/images/favicon.ico">
    <!-- danh sách mong muốn -->
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
                                <a href="<?= BASE_URL . '/ ' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="text-white">F-Watch</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box-wrapper">
                                <div class="search-box-inner-wrap">
                                    <form class="search-box-inner">
                                        <!--  -->
                                        <div class="search-field-wrap">
                                            <input type="text" class="search-field" placeholder="Search product...">

                                            <div class="search-btn">
                                                <button><i class="icon-magnifier"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right-blok-box text-white d-flex">



                                <div class="shopping-cart-wrap">
                                    <a href="<?= BASE_URL . '/cart' ?>"><i class="icon-basket-loaded"></i></a>

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
                                        <li class="active"><a href="<?= BASE_URL . '/ ' ?>">Home </i></a>
                                        </li>

                                        <li><a href="<?= BASE_URL . '/danhmuc' ?>">Shop </a>
                                        </li>
                                        <li class="active"><a href="<?= BASE_URL . '/about' ?>">Giới Thiệu </a></li>
                                        <li><a href="<?= BASE_URL . '/question' ?>">Hỏi Đáp</a></li>

                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="col-5 col-md-6 d-block d-lg-none">
                            <div class="logo"><a href="index.html"><img src="../../../resource/images/logo/logo.png" alt=""></a></div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                            <div class="right-blok-box text-white d-flex">

                                <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div>

                                <div class="shopping-cart-wrap">
                                    <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                </div>

                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="#"><img src="../../../resource/images/icon/bg-menu.png" alt=""></a>
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
                                    <li class="menu-item-has-children"><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>

                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>


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
                                <h5>My Account</h5>
                                <ul class="offcanvas-account-container">

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
                            <li class="breadcrumb-item active">Wishlist Page</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class=" table-content table-responsive">
                            <div class="container">
                                <h4>Đã đặt hàng thành công </h4>
                                <p>Đơn hàng sẽ được giao đến bạn trong 5-7 ngày tới</p>
                                <div>
                                    <p>Mã đơn: <?= $lastBill->id ?></p>
                                    <p>Tên khách hàng: <?= $lastBill->fullname ?></p>
                                    <p>Số điện thoại: <?= $lastBill->phone ?></p>
                                    <p>Địa chỉ: <?= $lastBill->address ?></p>
                                    <p>Ngày mua: <?= $lastBill->created_at ?></p>
                                </div>
                                <div class="mt-2">
                                    <h5>Danh sách sản phẩm</h5>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td>Tên sản phẩm</td>
                                                <td>Phân loại hàng</td>
                                                <td>Giá(VNĐ)</td>
                                                <td>Số lượng</td>
                                                <td>Đơn giá</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            use App\Models\BillDetail;

                                            foreach ($inforLastBill as $item) : ?>
                                                <tr>
                                                    <td><?= $item->products->name ?></td>
                                                    <td><?= $item->size->name ?>, <?= $item->color->name ?></td>
                                                    <td><span><?= number_format($item->price, 0, ',', '.') ?></span><span class="text-danger ms-2"><?= $item->discount != 0 ? '-' . $item->discount . '%' : '' ?></span></td>
                                                    <td>
                                                        <?php
                                                        $model = BillDetail::where('variation_id', $item->id)
                                                            ->where('bill_id', $item->pivot->bill_id)
                                                            ->first();
                                                        echo $model->quantity
                                                        ?>
                                                    </td>
                                                    <td><?= $model->unit_price ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-2">
                                    <p>Tổng tiền: <span class="text-danger"><?= number_format($lastBill->total_price, 0, ',', '.') ?></span> VNĐ</p>
                                </div>
                            </div>
                        </div>
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
    </div>


    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="../../../resource/js/vendor/modernizr-3.6.0.min.js"></script>

    <!-- jquery -->
    <script src="../../../resource/js/vendor/jquery-3.6.1.min.js"></script>
    <script src="../../../resource/js/vendor/jquery-migrate-3.4.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../../../resource/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="../../../resource/js/plugins/slick.min.js"></script>

    <script src="../../../resource/js/plugins/jquery.nice-select.min.js"></script>
    <script src="../../../resource/js/plugins/countdown.min.js"></script>
    <script src="../../../resource/js/plugins/image-zoom.min.js"></script>
    <script src="../../../resource/js/plugins/fancybox.js"></script>
    <script src="../../../resource/js/plugins/scrollup.min.js"></script>
    <script src="../../../resource/js/plugins/jqueryui.min.js"></script>
    <script src="../../../resource/js/plugins/ajax-contact.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="../../../resource/js/vendor/vendor.min.js"></script>
<script src="../../../resource/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="../../../resource/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/ruiz/ruiz/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:31 GMT -->

</html>