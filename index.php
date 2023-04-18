<?php

session_start();

use App\Controllers\BrandsController;
use App\Controllers\ColorController;
use App\Controllers\HomeController;
use App\Controllers\SizeController;
use App\Controllers\ProductController;
use App\Controllers\VariationController;
use App\Controllers\ProductImageController;
use App\Controllers\BannerController;
use App\Controllers\BillController;
use App\Controllers\BillDetailController;


require_once './vendor/autoload.php';
// config
require_once './config/database.php';
require_once './config/baseurl.php';
// helper
require_once './public/helper/dd.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case '':
        $ctr = new HomeController;
        $ctr->homePage();
        break;
    case 'dashboard':
        $ctr = new HomeController;
        $ctr->dashboard();
        break;
    case 'detail':
        $ctr = new ProductController;
        $ctr->detail();
        break;
    case 'cart':
        $ctr = new HomeController;
        $ctr->cart();
        break;
    case 'add-cart':
        $ctr = new HomeController;
        $ctr->addCart();
        break;
    case 'destroy-cart':
        $ctr = new HomeController;
        $ctr->destroyCart();
        break;
    case 'check-out':
        $ctr = new HomeController;
        $ctr->checkout();
        break;
    case 'danhmuc':
        $ctr = new HomeController;
        $ctr->danhmuc();
        break;
    case 'homeshow':
        $ctr = new HomeController;
        $ctr->show();
        break;
    case 'brands-index':
        # code...
        $ctr = new BrandsController;
        $ctr->index();
        break;
    case 'brands-create':
        $ctr = new BrandsController;
        $ctr->create();
        break;
    case 'brands-store':
        $ctr = new BrandsController;
        $ctr->store();
        break;
    case 'brands-edit':
        $ctr = new BrandsController;
        $ctr->edit();
        break;
    case 'brands-update':
        $ctr = new BrandsController;
        $ctr->update();
        break;
    case 'brands-destroy':
        $ctr = new BrandsController;
        $ctr->destroy();
        break;
    case 'brands-show':
        $ctr = new BrandsController;
        $ctr->show();
        break;
    case 'color-index':
        # code...
        $ctr = new ColorController;
        $ctr->index();
        break;
    case 'color-create':
        $ctr = new ColorController;
        $ctr->create();
        break;
    case 'color-store':
        $ctr = new ColorController;
        $ctr->store();
        break;
    case 'color-edit':
        $ctr = new ColorController;
        $ctr->edit();
        break;
    case 'color-update':
        $ctr = new ColorController;
        $ctr->update();
        break;
    case 'color-destroy':
        $ctr = new ColorController;
        $ctr->destroy();
        break;
    case 'color-show':
        $ctr = new ColorController;
        $ctr->show();
        break;
    case 'search-color-index':
        $ctr = new ColorController;
        $ctr->searchColor();
        break;
    case 'size-index':
        # code...
        $ctr = new SizeController;
        $ctr->index();
        break;
    case 'size-create':
        $ctr = new SizeController;
        $ctr->create();
        break;
    case 'size-store':
        $ctr = new SizeController;
        $ctr->store();
        break;
    case 'size-edit':
        $ctr = new SizeController;
        $ctr->edit();
        break;
    case 'size-update':
        $ctr = new SizeController;
        $ctr->update();
        break;
    case 'size-destroy':
        $ctr = new SizeController;
        $ctr->destroy();
        break;
    case 'search-size-index':
        $ctr = new SizeController;
        $ctr->searchSize();
        break;
    case 'size-show':
        $ctr = new SizeController;
        $ctr->show();
        break;
    case 'products-index':
        # code...
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'products-create':
        $ctr = new ProductController();
        $ctr->create();
        break;
    case 'products-store':
        $ctr = new ProductController();
        $ctr->store();
        break;
    case 'products-edit':
        $ctr = new ProductController();
        $ctr->edit();
        break;
    case 'products-update':
        $ctr = new ProductController();
        $ctr->update();
        break;
    case 'products-destroy':
        $ctr = new ProductController();
        $ctr->destroy();
        break;
    case 'products-show':
        $ctr = new ProductController();
        $ctr->show();
        break;
    case 'search-products-index':
        $ctr = new ProductController();
        $ctr->searchProducts();
        break;
    case 'search-products':
        $ctr = new ProductController();
        $ctr->searchProducts();
        break;
    case 'variation-index':
        # code...
        $ctr = new VariationController();
        $ctr->index();
        break;
    case 'variation-create':
        $ctr = new VariationController();
        $ctr->create();
        break;
    case 'variation-store':
        $ctr = new VariationController();
        $ctr->store();
        break;
    case 'variation-edit':
        $ctr = new VariationController();
        $ctr->edit();
        break;
    case 'variation-update':
        $ctr = new VariationController();
        $ctr->update();
        break;
    case 'variation-destroy':
        $ctr = new VariationController();
        $ctr->destroy();
        break;
    case 'variation-show':
        $ctr = new VariationController();
        $ctr->show();
        break;
    case 'search-variation-index':
        $ctr = new VariationController();
        $ctr->searchVariation();
        break;
    case 'product-image-index':
        # code...
        $ctr = new ProductImageController();
        $ctr->index();
        break;
    case 'product-image-create':
        $ctr = new ProductImageController();
        $ctr->create();
        break;
    case 'product-image-store':
        $ctr = new ProductImageController();
        $ctr->store();
        break;
    case 'product-image-edit':
        $ctr = new ProductImageController();
        $ctr->edit();
        break;
    case 'product-image-update':
        $ctr = new ProductImageController();
        $ctr->update();
        break;
    case 'product-image-destroy':
        $ctr = new ProductImageController();
        $ctr->destroy();
        break;
    case 'product-image-show':
        $ctr = new ProductImageController();
        $ctr->show();
        break;
    case 'banner-index':
        # code...
        $ctr = new BannerController();
        $ctr->index();
        break;
    case 'banner-create':
        $ctr = new BannerController();
        $ctr->create();
        break;
    case 'banner-store':
        $ctr = new BannerController();
        $ctr->store();
        break;
    case 'banner-edit':
        $ctr = new BannerController();
        $ctr->edit();
        break;
    case 'banner-update':
        $ctr = new BannerController();
        $ctr->update();
        break;
    case 'banner-destroy':
        $ctr = new BannerController();
        $ctr->destroy();
        break;
    case 'banner-show':
        $ctr = new BannerController();
        $ctr->show();
        break;
    case 'get-variation-color':
        $ctr = new VariationController();
        $ctr->getVariationColor();
        break;
    case 'get-price':
        $ctr = new ProductController();
        $ctr->getPrice();
        break;
    case 'bill-index':
        $ctr = new BillController();
        $ctr->index();
        break;
    case 'bill-edit':
        $ctr = new BillController();
        $ctr->edit();
        break;
    case 'bill-update':
        $ctr = new BillController();
        $ctr->update();
        break;
    case 'bill-store':
        $ctr = new BillController();
        $ctr->store();
        break;
    case 'bill-show':
        $ctr = new BillController();
        $ctr->show();
        break;
    case 'search-bill-index':
        $ctr = new BillController();
        $ctr->searchBill();
        break;
    case 'bill-detail-index':
        $ctr = new BillDetailController();
        $ctr->index();
        break;
    case 'change-status-bill-quickly':
        $ctr = new BillController();
        $ctr->changeStatusQuickly();
        break;
    case 'about':
        $ctr = new HomeController();
        $ctr->aubout();
        break;
    case 'question':
        $ctr = new HomeController();
        $ctr->question();
        break;
    case 404:
        require_once './public/errors/404.php';
        break;
    default:
        require_once './public/errors/404.php';
        break;
}
