<?php

namespace App\Controllers;


use App\Models\Products;
use App\Models\Brands;
use App\Models\Variation;
use App\Models\Size;
use App\Models\Color;
use App\Models\ProductImage;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $model = Products::with('brands')
            ->latest('updated_at')
            ->where('status', 0)
            ->get();
        $this->view('admin.product.index', [
            'listProduct' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
        $model = Brands::all();

        $this->view('admin.product.create', [
            'listBrands' => $model
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        //
        $model = new Products;
        $_POST['image'] = uniqid() . '-' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], './public/uploads/products/' . $_POST['image']);
        $model->fill($_POST);
        $model->save();
        $model1 = Brands::all();
        $status = "Thêm sản phẩm thành công";

        $this->view('admin.product.create', [
            'status' => $status,
            'listBrands' => $model1
        ]);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        //
        $keywords = $_POST['tim-kiem-san-pham'];
        if (!isset($keywords)) {
            header('location:' . BASE_URL . '/products-index');
        }
        $listProduct = Products::where('name', 'like', '%' . $keywords . '%')
            ->where('status', 0)
            ->get();
        $this->view('admin.product.show', [
            'listProduct' => $listProduct,
            'keywords' => $keywords,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit()
    {
        //
        $editId = isset($_GET['id']) ? $_GET['id'] : NULL;
        // dd($editId);
        if (!$editId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-cap-nhat');
            die;
        }

        $model = Products::find($editId);
        $model1 = Brands::all();
        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        // dd($model);

        $this->view('admin.product.edit', [
            'product' => $model,
            'listBrands' => $model1
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        //
        // dd($_POST);
        $findId = $_POST['id'];
        $model = Products::find($findId);
        // dd($model->image);
        if (!empty($_FILES['image']['name'])) {
            $_POST['image'] = uniqid() . '-' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], './public/uploads/products/' . $_POST['image']);
            $removeImg = './public/uploads/products/' . $model->image;
            if (file_exists($removeImg)) {
                // xóa ảnh
                unlink($removeImg);
            }
        } else {
            $_POST['image'] = $model->image;
        }
        $model->fill($_POST);
        $model->save();
        $status = "Sửa sản phẩm thành công";
        $item = Products::find($_POST['id']);
        $model1 = Brands::all();

        $this->view('admin.product.edit', [
            'status' => $status,
            'product' => $item,
            'listBrands' => $model1
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {

        // dd($_GET);
        $removeId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$removeId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-xoa');
            die;
        }
        $model = Products::find($removeId);
        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        // $removeImg = './public/uploads/products/' . $model->image;
        // if (file_exists($removeImg)) {
        //     unlink($removeImg);
        // }
        // $findPrd = Products::where('id', $removeId)
        //     ->get();
        // $findVariationPrd = Variation::where('product_id', $removeId)
        //     ->get();
        // dd($findVariationPrd);
        // $model = Products::find('id', $removeId);
        // dd($model);
        // $updateStatus = $_POST['1'];
        $model->status = 1;
        $model->save();
        $subModel = Variation::where('product_id', $removeId)->get();
        // dd($subModel);
        foreach ($subModel as $item) {
            $findVariationPrd = Variation::find($item->id);
            $findVariationPrd->status = 1;
            $findVariationPrd->save();
            // dd($item);
        }
        header('location:' . BASE_URL . '/products-index');
    }
    public function detail()
    {

        $findId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$findId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-cap-nhat');
            die;
        }
        $model = Products::find($findId);
        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        // dd($model);
        $model1 = Variation::with('products')
            ->with('color')
            ->with('size')
            ->where('product_id', $findId)
            ->groupBy('size_id')
            ->having('status', 0)
            // ->having('')
            ->orderBy('size_id', 'desc')
            ->get();
        $minPrice = Variation::with('products')
            ->with('color')
            ->with('size')
            ->where('product_id', $findId)
            ->orderBy('price', 'asc')
            ->first();
        $maxPrice = Variation::with('products')
            ->with('color')
            ->with('size')
            ->where('product_id', $findId)
            ->orderBy('price', 'desc')
            ->first();
        // dd($minPrice, $maxPrice);
        $listThumbnail = ProductImage::where('product_id', $findId)
            ->get();
        // dd($listThumbnail);
        $this->view('client.product.detail', [
            'item' => $model,
            'listVariation' => $model1,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'listThumbnail' => $listThumbnail
        ]);
    }
    public function getPrice()
    {
        $findIdVariationSize = Size::where('name', $_POST['nameVariationSize'])->first();
        $findIdVariationColor = Color::where('name', $_POST['nameVariationColor'])->first();
        $itemVariation = Variation::where('product_id', $_POST['idProduct'])
            ->where('size_id', $findIdVariationSize->id)
            ->where('color_id', $findIdVariationColor->id)
            ->first();
        // dd($itemVariation);
        if ($itemVariation->quantity == 0) {
            $output = "Hết hàng";
        } else {
            if ($itemVariation->discount == 0) {
                $output = "<span class='text-danger'>" . $itemVariation->price . "VNĐ</span>"
                    . "<input type='number' name='price' value='" . $itemVariation->price . "' hidden>";
            } else {
                $output = "<span class='text-secondary'>Giá: </span>"
                    . "<span class='text-secondary text-decoration-line-through'>" . $itemVariation->price . "VNĐ</span>"
                    . "<span class='mx-2 text-danger'>" . ($itemVariation->price - ($itemVariation->price * $itemVariation->discount) / 100) . "VNĐ</span>"
                    . "<span class='bg-danger rounded text-white p-1'>-" . $itemVariation->discount . "%</span>"
                    . "<input type='number' name='price' value='" . ($itemVariation->price - ($itemVariation->price * $itemVariation->discount) / 100) . "' hidden>"
                    . "<span class='ms-3 text-secondary'>Sản phẩm còn lại: " . $itemVariation->quantity . "</span>";
            }
        }


        echo $output;
    }
    public function searchProducts()
    {
        $keywords = $_POST['keywords'];
        $listProduct = Products::where('name', 'like', '%' . $keywords . '%')
            ->where('status', 0)
            ->take(5)
            ->orderBy('id', 'desc')
            ->get();
        $output = '<ul class="list-group w-full">';
        foreach ($listProduct as $item) {
            $output .= "<li class='li-ajax list-group-item' style='cursor: pointer;'>" . $item->name . '</li>';
        }
        $output .= '</ul>';
        echo $output;
    }
}
