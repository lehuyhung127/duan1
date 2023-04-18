<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="icon" href="public/uploads/iconFwatch/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <div class="container">
        <header class="m-3">
            <div class="header-main d-flex justify-content-around align-items-center">
                <div class="head-logo">
                    <a href="<?= BASE_URL . '/brands-index' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                </div>
                <div class="col-md-5 mx-auto">

                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- menu -- prodct -->
        <div class="box-content">
            <div class="boxmpr row gap-2 ">
                <div class="boxmenu col-3 ">
                    <div class="p-3 ">
                        <a href="<?= BASE_URL . '/brands-index' ?>" class="list-group-item list-group-item-action py-1"><iconify-icon icon="mdi:registered-trademark"></iconify-icon> Quản lý thương hiệu</a>
                        <a href="<?= BASE_URL . '/color-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ic:baseline-color-lens"></iconify-icon> Quản lý màu sắc</a>
                        <a href="<?= BASE_URL . '/size-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ic:baseline-format-size"></iconify-icon> Quản lý size</a>
                        <a href="<?= BASE_URL . '/products-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ri:shopping-bag-2-fill"></iconify-icon> Quản lý sản phẩm</a>
                        <a href="<?= BASE_URL . '/variation-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="mdi:drag-variant"></iconify-icon> Quản lý biến thể </a>
                        <a href="<?= BASE_URL . '/product-image-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="material-symbols:image"></iconify-icon> Quản lý ảnh nhỏ </a>
                        <a href="<?= BASE_URL . '/banner-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="mdi:image-area"></iconify-icon> Quản lý banner </a>
                        <a href="<?= BASE_URL . '/bill-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="material-symbols:order-approve-outline"></iconify-icon> Quản lý đơn hàng </a>
                    </div>
                </div>
                <!-- ========== -->
                <div class="box-product col bg-secondary rounded bg-opacity-10">
                    <div class="bg-white my-3 rounded p-2">
                        <h2 class="fw-bold">Chi tiết đơn hàng </h2>
                        <div>
                            <label for="">Mã hóa đơn:</label>
                            <span><?= $bill->id ?></span>
                        </div>
                        <div>
                            <label for="">Thời gian mua:</label>
                            <span><?= $bill->created_at ?></span>
                        </div>
                        <div>
                            <label for="">Họ và tên:</label>
                            <span><?= $bill->fullname ?></span>
                        </div>
                        <div>
                            <label for="">Số điện thoại:</label>
                            <span><?= $bill->phone ?></span>
                        </div>
                        <div>
                            <label for="">Địa chỉ:</label>
                            <span><?= $bill->address ?></span>
                        </div>

                        <table class="table text-center mt-3">
                            <thead class="table-dark">
                                <tr>
                                    <!-- <td>Bill_id</td> -->
                                    <td>Tên sản phẩm</td>
                                    <td>Tên size</td>
                                    <td>Tên màu</td>
                                    <td>Giá (VNĐ)</td>
                                    <td>Giảm giá (%)</td>
                                    <td>Số lượng </td>
                                    <td>Đơn giá (VNĐ)</td>
                                    <!-- <td>Đơn giá 1</td> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                use App\Models\BillDetail;

                                foreach ($billDetail as $item) : ?>
                                    <tr>
                                        <!-- <td><?= $item ?></td> -->
                                        <td style="max-width: 200px;"><?= $item->products->name ?></td>
                                        <td><?= $item->size->name ?></td>
                                        <td><?= $item->color->name ?></td>
                                        <td><?= $item->price ?></p>
                                        <td><?= $item->discount == 0 ? "" : $item->discount ?></td>
                                        <td>
                                            <?php
                                            $model = BillDetail::where('variation_id', $item->pivot->variation_id)
                                                ->where('bill_id', $item->pivot->bill_id)
                                                ->first();
                                            echo $model->quantity
                                            ?>
                                        </td>
                                        <td>
                                            <?= $model->unit_price ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div>
                            <label for="">Tổng tiền:</label>
                            <span><?= $bill->total_price . ' VNĐ' ?></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end menu -- prodct  -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>