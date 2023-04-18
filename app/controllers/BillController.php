<?php

namespace App\Controllers;

use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Variation;

class BillController extends BaseController
{
    public function index()
    {
        $listBill = Bill::orderBy('id', 'desc')->get();
        require_once './app/views/admin/bill/index.php';
    }

    public function create()
    {
        // require_once "./app/views/client/checkout.php";
    }
    public function store()
    {
        // dd($_POST);
        $model = new Bill;
        $model->fill($_POST);
        $model->save();
        $detail = $_SESSION['cart'];
        $variations = Variation::all();

        // dd($detail);
        $max_id = Bill::max('id');
        foreach ($detail as $key => $value) {
            $model = new BillDetail();
            $value['bill_id'] = $max_id;
            $model->fill($value);
            $model->save();
            foreach($variations as $item){
                if($item['id'] == $value['variation_id']){
                    $modelVariation = Variation::find($item['id']);
                    // dd($modelVariation);
                    $modelVariation->quantity = $modelVariation->quantity - $value['quantity'];
                    // dd($item);
                    $modelVariation->save();
                    // if($modelVariation->quantity  == 0){
                    //     $modelVariation->status = 1;
                    // }
                    // $modelVariation->save();
                }
            }
        }
        unset($_SESSION['cart']);
        // echo 1;
        $lastBill = Bill::latest('id')
            ->first();
        $inforLastBill = Bill::find($lastBill->id)
            ->variation()
            ->with('size')
            ->with('color')
            ->with('products')
            ->get();
        require_once './app/views/client/success.php';
    }

    public function edit()
    {
        $editId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$editId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-cap-nhat');
            die;
        }
        $bill = Bill::find($editId);


        if (!$bill) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }


        require_once "./app/views/admin/bill/edit.php";
        // var_dump ($model);
    }

    public function update()
    {
        $updateId = $_POST['id'];
        $model = Bill::find($updateId);
        $model->fill($_POST);
        $model->save();
        // var_dump($model);
        header("location:" . BASE_URL . '/bill-index');
    }

    public function changeStatusQuickly()
    {
        // echo $_POST['id'];
        $updateId = $_POST['id'];
        $model = Bill::find($updateId);
        $model->fill($_POST);
        $model->save();
    }
    public function show()
    {
        $keywords = $_POST['tim-kiem-san-pham'];
        $listBill = Bill::where('phone', 'like', '%' . $keywords . '%')
            ->orderBy('id', 'desc')
            ->get();
        // dd($listBill);
        require_once './app/views/admin/bill/show.php';
    }
    public function searchBill()
    {
        $keywords = $_POST['keywords'];
        $listBill = Bill::where('phone', 'like', '%' . $keywords . '%')
            ->take(5)
            ->groupBy('phone')
            // ->orderBy('id', 'desc')
            ->get();
        $output = '<ul class="list-group w-full">';
        foreach ($listBill as $item) {
            $output .= "<li class='li-ajax list-group-item' style='cursor: pointer;'>" . $item->phone . '</li>';
        }
        $output .= '</ul>';
        echo $output;
    }
}
