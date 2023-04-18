<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/uploads/iconFwatch/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Cập nhật đơn hàng</title>
</head>

<body>
    <div class="container">
        <header class="m-3">
            <div class="header-main d-flex justify-content-around align-items-center">
                <div class="head-logo">
                    <a href="<?= BASE_URL . '/dashboard' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="search" value="Search" id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill mx-2" type="button">
                                <iconify-icon icon="ic:baseline-search"></iconify-icon>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
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
                    <!-- <table class="table">
                    <tbody>
                            <td> -->
                    <h4 class="text-center p-3 ">Cập nhật đơn hàng</h4>
                    <form action="<?= BASE_URL . '/bill-update' ?>" method="post">
                        <input type="text" name="id" value="<?= $bill->id ?>" hidden>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Họ tên</span>
                            <input type="text" value="<?= $bill->fullname ?>" class="form-control" name="fullname" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Điện thoại</span>
                            <input type="text" value="<?= $bill->phone ?>" class="form-control" name="phone" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Địa chỉ </span>
                            <input type="text" value="<?= $bill->address ?>" class="form-control" name="address" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tổng tiền (VNĐ) </span>
                            <input type="text" value="<?= $bill->total_price ?>" class="form-control" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Trạng thái </span>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="0" <?= $bill->status == 0 ? 'selected' : '' ?>>Chờ xác nhận</option>
                                <option value="1" <?= $bill->status == 1 ? 'selected' : '' ?>>Đang vận chuyển</option>
                                <option value="2" <?= $bill->status == 2 ? 'selected' : '' ?>>Đã hoàn thành</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mb-1">Cập nhật</button>
                    </form>
                    <!-- </td>
                    </tbody>
                </table> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</body>