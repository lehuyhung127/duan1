<?php

namespace App\Controllers;

/**
 * Các model sẽ tự động được use khi viết tên model ở trong các hàm
 */

use App\Models\Variation;
use App\Models\Color;
use App\Models\Size;
use App\Models\Products;

class VariationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $model = Variation::with('products')
            ->with('size')
            ->with('color')
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->get();
        $this->view('admin.variation.index', [
            'listVariation' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
        $model = Color::orderBy('id', 'desc')->get();
        $model1 = Size::orderBy('id', 'desc')->get();
        $model2 = Products::orderBy('id', 'desc')->get();
        $this->view('admin.variation.create', [
            'listColor' => $model,
            'listSize' => $model1,
            'listProduct' => $model2
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        //
        // dd($_POST);

        // dd($model1);
        $findVariation = Variation::where('color_id', $_POST['color_id'])
            ->where('size_id', $_POST['size_id'])
            ->where('product_id', $_POST['product_id'])
            ->get();
        $length = count($findVariation);

        if ($length == 0) {
            $model = new Variation();
            $model->fill($_POST);
            $model->save();
            $status = "Thêm biến thể thành công";
        } else {
            $error = "Biến thể đã tồn tại";
        }

        $model = Color::orderBy('id', 'desc')->get();
        $model1 = Size::orderBy('id', 'desc')->get();
        $model2 = Products::orderBy('id', 'desc')->get();

        if (isset($error)) {
            $this->view('admin.variation.create', [
                'error' => $error,
                'listColor' => $model,
                'listSize' => $model1,
                'listProduct' => $model2
            ]);
        } else {
            $this->view('admin.variation.create', [
                'status' => $status,
                'listColor' => $model,
                'listSize' => $model1,
                'listProduct' => $model2
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        //
        // dd($_POST);
        $keywords = $_POST['tim-kiem-san-pham'];
        $listVariation = Variation::with('products')
            ->with('size')
            ->with('color')
            ->where('id', 'like', '%' . $keywords . '%')
            ->orderBy('id', 'desc')
            ->get();
        // dd($listVariation);
        $this->view('admin.variation.show', [
            'listVariation' => $listVariation,
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
        $model = Variation::find($editId);
        $model1 = Color::orderBy('id', 'desc')->get();
        $model2 = Size::orderBy('id', 'desc')->get();
        $model3 = Products::orderBy('id', 'desc')->get();

        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        $this->view('admin.variation.edit', [
            'variation' => $model,
            'listColor' => $model1,
            'listSize' => $model2,
            'listProduct' => $model3
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
        $model = Variation::find($findId);
        $model->fill($_POST);
        $model->save();
        $status = "Sửa biến thể thành công";
        $item = Variation::find($_POST['id']);

        $this->view('admin.variation.edit', [
            'status' => $status,
            'variation' => $item
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
        $removeId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$removeId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-xoa');
            die;
        }
        $model = Variation::find($removeId);
        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        // $model = Variation::destroy($removeId);
        $model->status = 1;
        $model->save();
        header('location:' . BASE_URL . '/variation-index');
    }
    public function getVariationColor()
    {
        //
        // </div>
        $output = ' <div class="col-2">
                        <p class="text-secondary mt-2">Màu sắc</p>
                    </div>
                    <div class="col-10" >
                        ';

        $findIdVariationSize = Size::where('name', $_POST['nameVariationSize'])->first();
        $listVarationColor = Variation::with('products')
            ->with('size')
            ->with('color')
            ->where('product_id', $_POST['idProduct'])
            ->where('size_id', $findIdVariationSize->id)
            ->where('status', 0)
            ->get();
        foreach ($listVarationColor as $item) {
            $output .= "<div class='d-inline-block me-1 mt-2'>"
                . "<label class='border p-2' style='min-width: 50px;' name='variation-color' for='color-id-$item->id'>" . $item->color->name . '</label>'
                . "<input type='radio' name='color-id' value='$item->color_id' hidden id='color-id-$item->id'>"
                . '</div>';
        }
        $output .= '</div>';
        echo $output;
    }
    public function searchVariation()
    {
        $keywords = $_POST['keywords'];
        $listVariation = Variation::with('products')
            ->where('id', 'like', '%' . $keywords . '%')
            ->take(5)
            ->orderBy('id', 'desc')
            ->get();
        $output = '<ul class="list-group w-full">';
        foreach ($listVariation as $item) {
            $output .= "<li class='li-ajax list-group-item' style='cursor: pointer;'>" . $item->id . '</li>';
        }
        $output .= '</ul>';
        // $output .= "<span>Số lượng sản phẩm còn lại". ."</span>"
        echo $output;
    }
}
