
<?php $__env->startSection('title', 'Thêm biến thể'); ?>
<?php $__env->startSection('main'); ?>
<h2>Thêm biến thể</h2>
<?php if(isset( $status )): ?>
<div class="alert alert-success" role="alert">
    <?php echo e($status); ?>

</div>
<?php endif; ?>
<?php if(isset( $error )): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e($error); ?>

</div>
<?php endif; ?>
<form action="<?php echo e(BASE_URL . '/variation-store'); ?>" method="POST">
    <div class="mb-3">
        <label for="exampleInputtext3" class="form-label">Sản phẩm</label>
        <select name="product_id" id="exampleInputtext3" class="form-select" required>
            <option value="" hidden>Chọn sản phẩm</option>
            <?php $__currentLoopData = $listProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Màu sắc</label>
        <select name="color_id" id="exampleInputtext1" class="form-select" required>
            <option value="" hidden>Chọn màu</option>
            <?php $__currentLoopData = $listColor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e((string)$item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext2" class="form-label">Size</label>
        <select name="size_id" id="exampleInputtext2" class="form-select" required>
            <option value="" hidden>Chọn size</option>
            <?php $__currentLoopData = $listSize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputtext4" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="exampleInputtext4" placeholder="Nhập số lượng" name="quantity" required min="0">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext5" class="form-label">Giá (VNĐ)</label>
        <input type="number" class="form-control" id="exampleInputtext5" placeholder="Nhập giá" name="price" required min="0">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext6" class="form-label">Giảm giá (%)</label>
        <input type="number" class="form-control" id="exampleInputtext6" placeholder="Nhập giảm giá" name="discount" required min="0">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\da1\app\views/admin/variation/create.blade.php ENDPATH**/ ?>