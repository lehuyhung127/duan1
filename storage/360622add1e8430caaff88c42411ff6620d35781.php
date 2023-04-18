
<?php $__env->startSection('title', 'Danh sách tìm kiếm'); ?>
<?php $__env->startSection('main'); ?>
<section class="d-flex justify-content-between align-items-center">
    <div class="position-relative">
        <form class="d-flex align-items-center" method="POST" action="<?php echo e(BASE_URL . '/products-show'); ?>" autocomplete="off">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Tên sản phẩm..." name="tim-kiem-san-pham" id="tim-kiem-san-pham">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success ms-2">Tìm kiếm</button>
            </div>
        </form>
        <div id="search-ajax" class="position-absolute start-0 end-0">

        </div>
    </div>
    <a href="<?php echo e(BASE_URL . '/products-create'); ?>" class="btn btn-success">Thêm sản phẩm</a>
</section>
<h2 class="fs-6 my-3 text-secondary">Kết quả tìm kiếm đối với: <?php echo e($keywords); ?></h2>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Chi tiết</th>
            <th scope="col">Tên thương hiệu</th>
            <th scope="col" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e(++$key); ?></th>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3"><?php echo e($item->name); ?></p>
            </td>
            <td scope="row"><img src="<?php echo e('./public/uploads/products/' . $item->image); ?>" alt="" style="width: 100px; height: 100px;"></td>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3"><?php echo e($item->description); ?></p>
            </td>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3"><?php echo e($item->detail); ?></p>
            </td>
            <td scope="row"><?php echo e($item->brands->name); ?></td>
            <td scope="row" class="text-end">
                <form action="<?php echo e(BASE_URL . '/products-edit'); ?>">
                    <input type="number" value="<?php echo e($item->id); ?>" name="id" hidden>
                    <button class="btn btn-primary">Sửa</button>
                </form>
            </td>
            <td scope="row" class="text-start">
                <form action="<?php echo e(BASE_URL . '/products-destroy'); ?>">
                    <input type="number" value="<?php echo e($item->id); ?>" name="id" hidden>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm không')">Xóa</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#tim-kiem-san-pham').keyup(function() {
            var keywords = $(this).val()
            if (keywords != '') {
                $.ajax({
                    url: "<?php echo e(BASE_URL . '/search-products-index'); ?>",
                    method: "POST",
                    data: {
                        keywords: keywords
                    },
                    success: function(result) {
                        $('#search-ajax').fadeIn()
                        $('#search-ajax').html(result)
                        $('.li-ajax').click(function() {
                            // console.log(1);
                            $("#tim-kiem-san-pham").val($(this).text());
                            $("#tim-kiem-san-pham").focus();
                            $('#search-ajax').fadeOut();
                        })
                    }
                })
            } else {
                $('#search-ajax').fadeOut();
            }
        })

    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\da1\app\views/admin/product/show.blade.php ENDPATH**/ ?>