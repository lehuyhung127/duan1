<?php

namespace App\Controllers;

use App\Models\Bill;
use App\Models\BillDetail;

class BillDetailController extends BaseController
{
    public function index()
    {
        if (isset($_GET)) {
            $findId = $_GET['id'];
        }
        // kiểm tra id có tồn tại trên đường dẫn hay ko
        $billDetail = Bill::find($findId)
            ->variation()
            ->with('size')
            ->with('color')
            ->with('products')
            ->get();
        $bill = Bill::find($findId);
        require_once './app/views/admin/bill/bill_detail.php';
    }
}
