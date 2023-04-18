<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/ruiz/ruiz/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruiz - Watch Store HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="resource/images/favicon.ico">
    <!-- Thủ tục thanh toán -->
    <!-- CSS
	============================================ -->
    <!-- khả năng xóa -->
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
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <div class="logo-area">
                                <a href="<?= BASE_URL . '/ ' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="text-white">F-Watch</span></a>
                            </div>
                        </div>
                        <div class="">
                            <div class="search-box-wrapper">
                                <div class="search-box-inner-wrap">
                                    <form class="search-box-inner">
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
                        <div class="shopping-cart-wrap">
                            <a href="<?= BASE_URL . '/cart' ?>"><i class="icon-basket-loaded fs-3 text-white"></i></span></a>
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
                                        <li class="active"><a href="<?= BASE_URL . '/' ?>">Home </a>
                                        </li>
                                        <li><a href="<?= BASE_URL . '/danhmuc' ?>">Sản phẩm</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-5 col-md-6 d-block d-lg-none">
                            <div class="logo"><a href="<?= BASE_URL . '/' ?>"><img src="resource/images/logo/logo.png" alt=""></a></div>
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
                                    <li class="menu-item-has-children"><a href="<?= BASE_URL . '/' ?>">Home</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="<?= BASE_URL . '/danhmuc' ?>">Sản phẩm </a>

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
                            <li class="breadcrumb-item"><a href="<?= BASE_URL . '/' ?>">Home</a></li>
                            <li class="breadcrumb-item active">Checkout Page</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb checkout-page">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="coupon-area">
                            <!-- coupon-accordion start -->
                            <div class="coupon-accordion">
                                <!-- <h3>Returning customer? <span class="coupon" id="showlogin">Click here to login</span>
                                </h3> -->
                                <div class="coupon-content" id="checkout-login">
                                    <div class="coupon-info">
                                        <p>If you have shopped with us before, please enter your details in the boxes
                                            below. If you are a new customer, please proceed to the Billing &amp;
                                            Shipping section.</p>
                                        <form action="#">
                                            <p class="coupon-input form-row-first">
                                                <label>Username or email <span class="required">*</span></label>
                                                <input type="text" name="email">
                                            </p>
                                            <p class="coupon-input form-row-last">
                                                <label>password <span class="required">*</span></label>
                                                <input type="password" name="password">
                                            </p>
                                            <div class="clear"></div>
                                            <p>
                                                <button type="submit" class="button-login btn" name="login" value="Login">Login</button>
                                                <label class="remember"><input type="checkbox" value="1"><span>Remember</span></label>
                                            </p>
                                            <p class="lost-password">
                                                <a href="#">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- coupon-accordion end -->
                            <!-- coupon-accordion start -->
                            <div class="coupon-accordion">
                                <!-- <h3>Have a coupon? <span class="coupon" id="showcoupon">Click here to enter your
                                        code</span></h3> -->
                                <div class="coupon-content" id="checkout-coupon">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" placeholder="Coupon code">
                                                <button type="submit" class="btn button-apply-coupon" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- coupon-accordion end -->
                        </div>
                    </div>
                </div>
                <!-- checkout-details-wrapper start -->
                <div class="checkout-details-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <!-- billing-details-wrap start -->
                            <div class="billing-details-wrap">
                                <form action="<?= BASE_URL . '/bill-store' ?>" method="post">
                                    <h3 class="shoping-checkboxt-title">Thanh toán</h3>
                                    <div class="">

                                        <div class="">
                                            <p class="single-form-row">
                                                <label>Họ tên khách hàng<span class="required">*</span></label>
                                                <input type="text" class="form-control" name="fullname" required>
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="single-form-row">
                                                <label>Số điện thoại<span class="required">*</span></label>
                                                <input type="number" class="form-control" name="phone" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Địa chỉ<span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="" name="address" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-12 mb-20">
                                            <div class="single-form-row">
                                                <p class="single-form-row">
                                                    <label>Tổng tiền: <span class="text-danger"><?= number_format($totalPrice, 0, ',', '.') . ' VNĐ' ?></span> </label>
                                                    <input type="number" hidden value="<?= $totalPrice ?>" name="total_price">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger py-2 border border-none text-white">Đặt hàng</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <!-- your-order-wrapper start -->
                            <div class="your-order-wrapper">
                                <h3 class="shoping-checkboxt-title">Danh sách sản phẩm</h3>
                                <!-- your-order-wrap start-->
                                <div class="your-order-wrap">
                                    <!-- your-order-table start -->
                                    <div class="your-order-table table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <td>Tên sản phẩm</td>
                                                    <td>Phân loại hàng</td>
                                                    <td>Giá (VNĐ)</td>
                                                    <td>Số lượng</td>
                                                    <td>Đơn giá (VNĐ)</td>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($getInforListProduct as $key => $item) : ?>
                                                    <tr>
                                                        <td style="max-width: 200px;" class="text-start">
                                                            <p class="short-3"><?= $item->products->name ?></p>
                                                        </td>
                                                        <td>
                                                            <span><?= $item->size->name ?>, <?= $item->color->name ?></span>
                                                        </td>
                                                        <td>
                                                            <p><?= number_format($_SESSION['cart'][$item->id]['price'], 0, ',', '.') ?></p><span class="text-danger"><?= $item->discount != 0 ? '-' . $item->discount . '%' : '' ?></span>
                                                        </td>
                                                        <td><?= $_SESSION['cart'][$item->id]['quantity'] ?></td>
                                                        <td>
                                                            <span><?= number_format(($_SESSION['cart'][$item->id]['price'] * $_SESSION['cart'][$item->id]['quantity']) - ($_SESSION['cart'][$item->id]['price'] * $item->discount / 100), 0, ',', '.') ?></span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- checkout-details-wrapper end -->
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
    <!-- <script language="javascript">
        // Lấy đối tượng
        var button = document.getElementById("show-btn");

        // Thêm sự kiện cho đối tượng
        button.onclick = function() {
            alert("Bạn đã đặt hàng thành công ");
        };
    </script> -->
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
    <!-- <label>Nơi Nhận</label><br>
    <input type="radio" name="dia_chi" onclick="hien_thi(false)">nội thành
    <input type="radio" name="dia_chi" onclick="hien_thi(true)"> ngoại thành <br>

    <label>Phí vận chuyển</label>
    <input id="phi_vc" type="text" value="1000"> <br>
    <button>Đặt mua</button> -->
    <script>
        function hien_thi(visible) {
            var phi = document.getElementById("phi_vc");
            phi.style.display = visible ? "" : "none";
        }
    </script>

</body>



<!-- Mirrored from htmldemo.net/ruiz/ruiz/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:31 GMT -->

</html>