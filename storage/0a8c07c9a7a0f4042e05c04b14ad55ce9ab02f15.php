
<?php $__env->startSection('title', 'Sửa biến thể'); ?>
<?php $__env->startSection('main'); ?>
<h2>Sửa biến thể</h2>
<?php if(isset( $status )): ?>
<div class="alert alert-success" role="alert">
    <?php echo e($status); ?>

</div>
<?php endif; ?>
<form action="<?php echo e(BASE_URL . '/variation-update'); ?>" method="POST">
    <div class="mb-3" hidden>
        <label for="exampleInputtext" class="form-label">ID</label>
        <input type="number" name="id" value="<?php echo e($variation->id); ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Sản phẩm</label>
        <input type="text" value="<?php echo e($variation->products->name); ?>" disabled class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Màu sắc</label>
        <input type="text" value="<?php echo e($variation->color->name); ?>" disabled class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Size</label>
        <input type="text" value="<?php echo e($variation->size->name); ?>" disabled class="form-control">
    </div>

    <div class="mb-3">
        <label for="exampleInputtext4" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="exampleInputtext4" placeholder="Nhập số lượng" name="quantity" min="0" value="<?php echo e($variation->quantity); ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext5" class="form-label">Giá (VNĐ)</label>
        <input type="number" class="form-control" id="exampleInputtext5" placeholder="Nhập giá" name="price" min="0" value="<?php echo e($variation->price); ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext6" class="form-label">Giảm giá (%)</label>
        <input type="number" class="form-control" id="exampleInputtext6" placeholder="Nhập giảm giá" name="discount" min="0" value="<?php echo e($variation->discount); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\da1\app\views/admin/variation/edit.blade.php ENDPATH**/ ?>