
<?php $__env->startSection('title', 'Giỏ hàng'); ?>
<?php $__env->startSection('main'); ?>
<div class="container">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <td>Ảnh sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Phân loại hàng</td>
                <td>Giá (VNĐ)</td>
                <td>Số lượng</td>
                <td>Đơn giá (VNĐ)</td>
                <td>Hành động</td>
            </tr>
            </tr>
        </thead>
        <?php if(isset($listProduct)): ?>
        <tbody>
            <?php $totalPrice = 0; ?>
            <?php $__currentLoopData = $listProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <!-- <pre>
                    <?php var_dump($_SESSION) ?>
                </pre> -->
                <td><?php echo e(++$key); ?></td>
                <td style="max-width: 150px;"><img src="<?php echo e('./public/uploads/products/' . $item->products->image); ?>" alt="" style="width: 100px; height: 100px;"></td>
                <td style="max-width: 200px;" class="text-start">
                    <p class="short-3"><?php echo e($item->products->name); ?></p>
                </td>
                <td>
                    <span><?php echo e($item->size->name); ?>, <?php echo e($item->color->name); ?></span>
                </td>
                <td>
                    <p><?php echo e(number_format($_SESSION['cart'][$item->id]['price'], 0, ',', '.')); ?></p><span class="text-danger"><?php echo e($item->discount !=0 ? '-' . $item->discount . '%' : ''); ?></span>
                </td>
                <td><?php echo e($_SESSION['cart'][$item->id]['quantity']); ?></td>
                <td>
                    <span><?php echo e(number_format(($_SESSION['cart'][$item->id]['price'] * $_SESSION['cart'][$item->id]['quantity']) - ($_SESSION['cart'][$item->id]['price'] * $item->discount / 100), 0, ',', '.')); ?></span>
                    <?php $totalPrice += ($_SESSION['cart'][$item->id]['price'] * $_SESSION['cart'][$item->id]['quantity']) - ($_SESSION['cart'][$item->id]['price'] * $item->discount / 100) ?>
                </td>
                <td>
                    <form action="<?php echo e(BASE_URL . '/destroy-cart'); ?>">
                        <input type="number" value="<?php echo e($item->id); ?>" name="id" hidden>
                        <button type="submit" class="btn btn-danger text-white border border-none p-2">Xóa</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <?php else: ?>
        <p class="text-danger"><?php echo e($msg); ?></p>
        <?php endif; ?>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p>Tổng tiền: <span class="text-danger"><?php echo e(isset($totalPrice) ? number_format($totalPrice, 0, ',', '.') . ' VNĐ' : ''); ?></span></p>
        </div>
        <div class="d-flex">
            <form action="<?php echo e(BASE_URL . '/check-out'); ?>" method="POST">
                <input type="number" value="<?php echo e($totalPrice); ?>" name="total-price" hidden>
                <button type="submit" class="btn btn-danger text-white border border-none px-3 me-2" <?php echo e(isset($msg) ? 'disabled' : ''); ?>>Mua hàng</button>
            </form>
        </div>
    </div>
</div>
<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.client-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\da1\app\views/client/product/cart.blade.php ENDPATH**/ ?>