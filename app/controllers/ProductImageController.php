<?php

namespace App\Controllers;

use App\Models\Products;
use App\Models\ProductImage;

class ProductImageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $listProductImage = ProductImage::with('products')->orderBy('id','desc')->get();
        // echo '<pre>';
        // var_dump($listProductImage);
        require_once "./app/views/admin/productimage/index.php";
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $listProduct = Products::all();
        require_once "./app/views/admin/productimage/create.php";
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        $model = new ProductImage();
        $_POST['link'] = uniqid() . '-' . $_FILES['link']['name'];
        move_uploaded_file($_FILES['link']['tmp_name'], './public/uploads/products/' . $_POST['link']);
        $model->fill($_POST);
        $model->save();

        // 
        // dd($_POST, $_FILES);
        // $listProductImage = ProductImage::with('products')->get();
        header("location:" . BASE_URL . '/product-image-index');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        $keywords = $_POST['ten-link'];
        $listProductImage = ProductImage::with('products')->where('id', 'like', '%' . $keywords . '%')
            ->orderBy('id', 'desc')
            ->get();
        // $listProductImage = ProductImage::where('link', 'like', '%' . $keywords . '%')
        //     ->orderBy('id', 'desc')
        //     ->get();
        require_once "./app/views/admin/productimage/show.php";
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit()
    {
        $editId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $productImg = ProductImage::find($editId);
        // lấy id product 
        $listProduct = Products::all();
        // lấy tất cả sp
        require_once "./app/views/admin/productimage/edit.php";
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {

        // dd($_POST, $_FILES);
        // isset tồn tại hay ko
        // empty vừa tồn tại ,hay ko và trống hay 0,false,'0','',
        if (empty($_FILES['link']['name'])) {
            $model = ProductImage::find($_POST['id']);
            // nếu ko upload ảnh bế link cũ ra 
            $_POST['link'] = $model->link;

            // Khi không có ảnh thì update 
            $model->fill($_POST);
            ///fill chỉ chuyền biến 
            $model->save();
            header("location:" . BASE_URL . '/product-image-index');
        } else {
            $updateId = $_POST['id'];
            // nếu ko trống thì xóa ảnh và update dữ liệu mới
            $model1 = ProductImage::find($updateId);
            $removeImg = './public/uploads/products/' . $model1->link;
            // dd($removeImg);
            if (file_exists($removeImg)) {
                unlink($removeImg);
            }
            // xóa
            $_POST['link'] = uniqid() . '-' . $_FILES['link']['name'];
            // tạo link ảnh mới lên và lưu nó vào
            // uiqid tạo 1 đoạn chuỗi số ko bao h giống nhau;
            move_uploaded_file($_FILES['link']['tmp_name'], './public/uploads/products/' . $_POST['link']);
            //    di chuyển đến public
            $model1->fill($_POST);
            ///fill chỉ chuyền biến 
            $model1->save();
            header("location:" . BASE_URL . '/product-image-index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
        // var_dump($_GET);

        $destroyId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $modelimg = ProductImage::find($destroyId);
        $removeImg = './public/uploads/products/' . $modelimg->link;
        // kiểm tra xem có tồi tại hay ko
        if (file_exists($removeImg)) {
            unlink($removeImg);
            // dùng để xóa một tập tin được lưu trên máy chủ của bạn.
        }
        $model = ProductImage::destroy($destroyId);

        header("location:" . BASE_URL . '/product-image-index');
    }
}
