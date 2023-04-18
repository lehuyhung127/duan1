<?php

namespace App\Controllers;

use App\Models\Brands;
use App\Models\Products;
use App\Models\Banner;
use App\Models\Variation;
use App\Models\Bill;

class HomeController extends BaseController
{

    public function homePage()
    {
        // $listBrands = Brands::all();
        $listProducts = Products::where('status', 0)->orderBy('id', 'desc')->take(5)->get();
        // hiện thị 5 sản phẩm
        $listProductshome = Products::where('status', 0)->orderBy('id', 'desc')->take(10)->get();
        // hiện thị 10 sản phẩm ở trang chủ 
        $listProduct = Products::where('status', 0)->orderBy('id', 'desc')->take(12)->get();
        // hiện thị 12 sản phẩm ở trong sản phẩm 
        // $listProducts = Products::all();
        $listBanner = Banner::orderBy('id', 'desc')->take(2)->get();
        // $listBanner = Banner::all();
        require_once './app/views/client/homepage.php';
    }
    public function dashBoard()
    {
        $model = Bill::with('billDetail')
            // ->take(5)
            ->get();
        $tongTien = Bill::sum('total_price');
        $this->view('admin.dashboard', [
            'listProduct' => $model,
            'tongTien' => $tongTien
        ]);
    }
    public function cart()
    {
        if (isset($_SESSION['cart'])) {
            $listProduct = $_SESSION['cart'];
            // dd($listProduct);
            $getInforListProduct = [];
            foreach ($listProduct as $item) {
                foreach ($item as $subItem) {
                    $findInfor = Variation::with('products')
                        ->with('size')
                        ->with('color')
                        ->where('id', $subItem)
                        ->first();
                    array_push($getInforListProduct, $findInfor);

                    break;
                }
                // dd($getInforListProduct);
            }
            //     // dd($getInforListProduct);
            $this->view('client.product.cart', ['listProduct' => $getInforListProduct]);
        } else {
            $this->view('client.product.cart', ['msg' => 'Giỏ hàng hiện tại trống']);
        }
        // session_destroys();

    }
    // DAMN U
    public function addCart()
    {
        if (empty($_POST['size-id']) || empty($_POST['color-id'])) {
            echo "
            <script>
                alert('Không được bỏ trống size hoặc color')
            </script>
            ";
            die;
        } else if (empty($_POST['price'])) {
            echo "
            <script>
                alert('Hiện tại sản phẩm này đang hết hàng')
            </script>
            ";
            die;
        } else {
            $findVariation = Variation::where('product_id', $_POST['product-id'])
                ->where('size_id', $_POST['size-id'])
                ->where('color_id', $_POST['color-id'])
                ->first();
            if ($findVariation->quantity < $_POST['quantity']) {
                echo "
            <script>
                alert('Vượt quá số lượng hàng còn lại trong kho')
            </script>
            ";
                die;
            }
        }
        // dd($findVariation);
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            // dd($_SESSION['cart']);
            if (array_key_exists($findVariation->id, $cart)) {
                $cart[$findVariation->id] = [
                    'variation_id' => $findVariation->id,
                    'quantity' => $_POST['quantity'] + $cart[$findVariation->id]['quantity'],
                    'price' => $_POST['price'],
                    'unit_price' => ($_POST['quantity'] + $cart[$findVariation->id]['quantity']) * $_POST['price']
                ];
                // echo 1;
            } else {
                $cart[$findVariation->id] = [
                    'variation_id' => $findVariation->id,
                    'quantity' => $_POST['quantity'],
                    'price' => $_POST['price'],
                    'unit_price' => $_POST['quantity'] * $_POST['price']
                ];
            }
        } else {
            $cart = [];
            // dd($_SESSION['cart']);
            $cart[$findVariation->id] = [
                'variation_id' => $findVariation->id,
                'quantity' => $_POST['quantity'],
                'price' => $_POST['price'],
                'unit_price' => $_POST['quantity'] * $_POST['price']
            ];
        }
        $_SESSION['cart'] = $cart;
        // dd($_SESSION['cart']);
        header('location:' . $_SERVER['HTTP_REFERER']);
        // // // dd($Cart);
        // session_destroy();
    }
    public function destroyCart()
    {
        $removeId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$removeId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-xoa');
            die;
        }
        unset($_SESSION['cart'][$removeId]);
        header('location:' . BASE_URL . '/cart');
    }
    public function checkout()
    {
        // dd($_POST);
        $listProduct = $_SESSION['cart'];
        // // dd($listProduct);
        $getInforListProduct = [];
        foreach ($listProduct as $item) {
            foreach ($item as $subItem) {
                $findInfor = Variation::with('products')
                    ->with('size')
                    ->with('color')
                    ->where('id', $subItem)
                    ->first();
                array_push($getInforListProduct, $findInfor);
                break;
            }
            //     // dd($getInforListProduct);
        }
        // dd($getInforListProduct);
        if (isset($_POST['total-price'])) {
            $totalPrice = $_POST['total-price'];
            require_once './app/views/client/checkout.php';
        } else {
            header('location:' . BASE_URL . '/cart');
        }
    }
    public function danhmuc()
    {
        $listBrands = Brands::all();
        $listProduct = Products::where('status', 0)->orderBy('id', 'desc')->get();
        require_once './app/views/client/danhmuc.php';
    }
    // public function filterByBrands($id)
    // {
    //     $loc = Brands::find($id);
    //     $products = $loc->products;
    //     require_once './app/views/client/danhmuc.php';
    // }
    public function aubout()
    {
        require_once './app/views/client/about-us.php';
    }
    public function question()
    {
        require_once './app/views/client/question.php';
    }
    public function show()
    {
        // dd($_POST);
        $keywords = $_POST['tim-kiem-san-pham'];
        if (!isset($keywords)) {
            header('location:' . BASE_URL . '/404?msg=khong-du-thong-tin-de-tim-kiem');
        }
        $listBrands = Brands::all();
        $listProduct = Products::where('name', 'like', '%' . $keywords . '%')
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->get();
        // dd($_POST, $listProduct, $keywords);
        require_once "./app/views/client/homeshow.php";
    }
}
