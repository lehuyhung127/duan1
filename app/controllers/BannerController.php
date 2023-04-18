<?php

namespace App\Controllers;

use App\Models\Banner;

class BannerController extends BaseController
{
    public function index()
    {

        $listBanner = Banner::All();
        // var_dump(' $listBanner');
        require_once('./app/views/admin/banner/index.php');
    }

    public function create()
    {
        require_once('./app/views/admin/banner/create.php');
    }

    public function store()
    {
        $model3 = new Banner();
        $_POST['image'] = uniqid() . '-' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], './public/uploads/banner/' . $_POST['image']);
        $model3->fill($_POST);
        $model3->save();

        // dd($_POST, $_FILES);
        // $listProductImage = ProductImage::with('products')->get();
        header("location:" . BASE_URL . '/banner-index');
    }
    public function edit()
    {
        $editId1 = isset($_GET['id']) ? $_GET['id'] : NULL;
        $productBanner = Banner::find($editId1);
        // lấy id product 
        require_once "./app/views/admin/banner/edit.php";
    }
    public function update()
    {
        // dd($_POST, $_FILES);
        if (empty($_FILES['image']['name'])) {
            $model = Banner::find($_POST['id']);
            // nếu ko upload ảnh bế link cũ ra 
            $_POST['image'] = $model->image;
            // Khi không có ảnh thì update 
            $model->fill($_POST);
            ///fill chỉ chuyền biến 
            $model->save();
            header("location:" . BASE_URL . '/banner-index');
        } else {
            $updateId = $_POST['id'];
            // nếu ko trống thì xóa ảnh và update dữ liệu mới
            $model1 = Banner::find($updateId);
            $removeImg = './public/uploads/banner/' . $model1->image;
            // dd($removeImg);
            if (file_exists($removeImg)) {
                unlink($removeImg);
            }
            // xóa
            $_POST['image'] = uniqid() . '-' . $_FILES['image']['name'];
            // tạo image ảnh mới lên và lưu nó vào
            // uiqid tạo 1 đoạn chuỗi số ko bao h giống nhau;
            move_uploaded_file($_FILES['image']['tmp_name'], './public/uploads/banner/' . $_POST['image']);
            //    di chuyển đến public
            $model1->fill($_POST);
            ///fill chỉ chuyền biến 
            $model1->save();
            header("location:" . BASE_URL . '/banner-index');
        }
    }
    public function destroy()
    {
        $destroyId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $modelimg1 = Banner::find($destroyId);
        $removeImg = './public/uploads/banner/' . $modelimg1->image;
        if (file_exists($removeImg)) {
            unlink($removeImg);
        }
        $model = Banner::destroy($destroyId);

        header("location:" . BASE_URL . '/banner-index');
    }
    public function show()
    {
        $keywords = $_POST['banner'];
        $listBanner = Banner::where('id', 'like', '%' . $keywords . '%')
            ->orderBy('id', 'desc')
            ->get();
        require_once "./app/views/admin/banner/show.php";
    }
}
