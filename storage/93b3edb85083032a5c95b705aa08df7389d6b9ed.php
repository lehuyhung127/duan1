
<?php $__env->startSection('title', 'Danh sách tìm kiếm'); ?>
<?php $__env->startSection('main'); ?>
<section class="d-flex justify-content-between align-items-center">
    <div class="position-relative">
        <form class="d-flex align-items-center" method="POST" action="<?= BASE_URL . '/bill-show' ?>" autocomplete="off">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Mã biến thể..." name="tim-kiem-san-pham" id="tim-kiem-san-pham">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success ms-2">Tìm kiếm</button>
            </div>
        </form>
        <div id="search-ajax" class="position-absolute start-0 end-0">

        </div>
    </div>
</section>
<h2 class="fs-6 my-3 text-secondary">Kết quả tìm kiếm đối với đơn hàng có mã đơn bao gồm kí tự: <?php echo e($keywords); ?></h2>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col" style="max-width: 50px;">Mã đơn</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">SĐT</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col" style="max-width: 100px;">Tổng tiền (VNĐ)</th>
            <th scope="col">Trạng thái đơn</th>
            <th scope="col" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listBill as $key => $item) : ?>
            <tr>

                <td class="bill-id"><?= $item->id ?></td>
                <td><?= $item->fullname ?></td>
                <td><?= $item->phone ?></td>
                <td style="max-width: 200px;">
                    <p class="short-3"><?= $item->address ?></p>
                </td>
                <td><?= $item->total_price ?></td>
                <td class="">
                    <select name="" class="change-status-bill" style="max-width: 120px;">
                        <option value="0" <?= $item->status == 0 ? 'selected' : '' ?>>Chờ xác nhận</option>
                        <option value="1" <?= $item->status == 1 ? 'selected' : '' ?>>Đang vận chuyển</option>
                        <option value="2" <?= $item->status == 2 ? 'selected' : '' ?>>Đã hoàn thành</option>
                    </select>
                    <!-- <?= $item->status ?> -->
                </td>
                <td class="text-end">
                    <form action="<?= BASE_URL . '/bill-edit' ?>" class="me-2">
                        <input type="text" name="id" value="<?= $item->id ?>" hidden>
                        <button class="btn text-white btn-primary">Sửa</button>
                    </form>
                </td>
                <td class="text-start">
                    <form action="<?= BASE_URL . '/bill-detail-index' ?>" class="" method="get">
                        <input type="text" name="id" value="<?= $item->id ?>" hidden>
                        <button class="btn text-white bg-danger">Chi tiết</iconify-icon></button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#tim-kiem-san-pham').keyup(function() {
            var keywords = $(this).val()
            if (keywords != '') {
                $.ajax({
                    url: "<?php echo e(BASE_URL . '/search-bill-index'); ?>",
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
@endsections
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\da1\app\views/admin/bill/show.blade.php ENDPATH**/ ?>