
<?php $__env->startSection('title', 'Sửa sản phẩm'); ?>
<?php $__env->startSection('main'); ?>
<h2>Sửa sản phẩm</h2>
<?php if(isset( $status )): ?>
<div class="alert alert-success" role="alert">
    <?php echo e($status); ?>

</div>
<?php endif; ?>
<form action="<?php echo e(BASE_URL . '/products-update'); ?>" method="POST" class="mb-3" enctype="multipart/form-data">
    <div class="mb-3" hidden>
        <label for="exampleInputnumber1" class="form-label">Id</label>
        <input type="number" class="form-control" id="exampleInputnumber1" placeholder="Nhập tên sản phẩm" name="id" value="<?php echo e($product->id); ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputtext1" placeholder="Nhập tên sản phẩm" name="name" required value="<?php echo e($product->name); ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext2" class="form-label">Tên thương hiệu</label>
        <select name="brand_id" id="" class="form-select" id="exampleInputtext2" required>
            <option value="<?php echo e($product->brand_id); ?>" hidden><?php echo e($product->brands->name); ?></option>
            <?php $__currentLoopData = $listBrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext3" class="form-label">Hình ảnh</label>
        <input type="file" accept="image/*" class="form-control" id="exampleInputtext3" name="image" onchange="document.getElementById('imgTmp').src = window.URL.createObjectURL(this.files[0])">
        <div class="mt-3" style="width: 200px; height: 200px;">
            <img src="<?php echo e('./public/uploads/products/' . $product->image); ?>" alt="" class="w-100 h-100 object-fit-fill" id="imgTmp">
        </div>
    </div>
    <div class="mb-3" class="form-floating">
        <label for="exampleInputtext4" class="form-label">Mô tả</label>
        <textarea name="description" id="exampleInputtext4" cols="30" rows="10" class="form-control" required><?php echo e($product->description); ?></textarea>
    </div>
    <div class="mb-3" class="form-floating">
        <label for="exampleInputtext5" class="form-label">Chi tiết</label>
        <textarea name="detail" id="exampleInputtext5" cols="30" rows="10" class="form-control" required><?php echo e($product->detail); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
<script type="text/javascript">
    CKEDITOR.replace('exampleInputtext4')
    CKEDITOR.replace('exampleInputtext5')
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\da1\app\views/admin/product/edit.blade.php ENDPATH**/ ?>