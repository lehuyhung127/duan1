<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="public/uploads/iconFwatch/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Thêm Banner</title>
</head>

<body>


    <div class="container ">
        <header class="m-3">
            <div class="header-main d-flex justify-content-around align-items-center">
                <div class="head-logo">
                    <a href="<?= BASE_URL . '/banner-index' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                </div>
                <div class="col-md-5 mx-auto">

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
                <div class="box-product col bg-secondary rounded bg-opacity-10">
                    <h3 class="text-center p-3">Thêm banner</h3>
                    <form action="<?= BASE_URL . '/banner-store' ?>" method="post" enctype="multipart/form-data" class="text-center">
                        <img src="./public/uploads/default/no-image.jpg" alt="" weight="90px" height="90px" class="ms-2">
                        <input type="file" name="image" class="ms-3" required>
                        <br>
                        <button class="btn btn-success">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</body>