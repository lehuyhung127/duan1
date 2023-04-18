<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./resource/css/app.css"> -->
    <style>
        .short-3 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }
    </style>
    <style>

    </style>
    <!-- <link rel="stylesheet" href="./resource/js/app.js"> -->
</head>

<body>
    <div class="container">
        <!-- header -->
        <section class="d-flex justify-content-between align-items-center border-bottom">
            <!-- logo -->
            <div class="py-2">
                <a href="<?php echo e(BASE_URL . '/dashboard'); ?>" class="text-black text-decoration-none">
                    <h1 class="text-black">F-watch</h1>
                </a>
            </div>
        </section>
        <!-- body -->
        <div class="row mt-3">
            <div class="col-3">
                <nav>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/brands-index'); ?>">Quản lí thương hiệu</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/color-index'); ?>">Quản lí màu sắc</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/size-index'); ?>">Quản lí size</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/products-index'); ?>">Quản lí sản phẩm</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/variation-index'); ?>">Quản lí biến thể</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/product-image-index'); ?>">Quản lí ảnh nhỏ</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/banner-index'); ?>">Quản lí banner</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?php echo e(BASE_URL . '/bill-index'); ?>">Quản lí đơn hàng</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-9">
                <main>
                    <?php $__env->startSection('main'); ?>
                    <?php echo $__env->yieldSection(); ?>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <script src="./resource/js/app.js"></script> -->


</body>

</html><?php /**PATH C:\xampp\htdocs\da1\app\views/admin/layouts/admin-layout.blade.php ENDPATH**/ ?>