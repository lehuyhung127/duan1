
<?php $__env->startSection('title', 'Chi tiết sản phẩm'); ?>
<?php $__env->startSection('main'); ?>
<style>
    .carousel-indicators button.thumbnail {
        width: 60px;
    }

    .carousel-indicators img {
        height: 60px;
    }

    .carousel-indicators button.thumbnail:not(.active) {
        opacity: .6;
    }

    .arousel-indicators {
        position: static;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active thumbnail border rounded shadow-lg" aria-current="true" aria-label="Slide 1">
                        <img src="<?php echo e('./public/uploads/products/' . $item->image); ?>" class="d-block" alt="...">
                    </button>
                    <?php $__currentLoopData = $listThumbnail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= ++$key ?>" class="thumbnail border rounded shadow-lg" aria-label="Slide <?= ++$key ?>">
                        <img src="<?php echo e('./public/uploads/products/' . $subItem->link); ?>" class="d-block" alt="..."></button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active border rounded shadow-lg">
                        <img src="<?php echo e('./public/uploads/products/' . $item->image); ?>" class="d-block w-100" alt="..." style="height: 500px;">
                    </div>
                    <?php $__currentLoopData = $listThumbnail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item border rounded shadow-lg">
                        <img src="<?php echo e('./public/uploads/products/' . $subItem->link); ?>" class="d-block w-100" alt="..." style="height: 500px;">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="col-7">
            <h2 class="card-title" id="test"><?php echo e($item->name); ?></h2>
            <p class="mt-3"><?php echo html_entity_decode($item->detail); ?></p>
            <form action="<?php echo e(BASE_URL . '/add-cart'); ?>" method="POST">
                <div class="d-inline-block">
                    <input type="number" value="<?php echo e($item->id); ?>" hidden name="product-id">
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="text-secondary mt-2">Size</p>
                    </div>
                    <div class="col-10">
                        <?php $__currentLoopData = $listVariation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-inline-block">
                            <label class="border p-2" style="min-width: 50px;" name="variation-size" for="<?php echo e('size-id-' . $item->id); ?>"><?php echo e($item->size->name); ?></label>
                            <input type="radio" value="<?php echo e($item->size_id); ?>" hidden name="size-id" id="<?php echo e('size-id-' . $item->id); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
                <div class="row" id="variation-color">

                </div>
                <div class="mt-3">
                    <label>Số lượng:</label>
                    <input type="number" name="quantity" min="1" value="1" class="form-control mt-2">
                </div>
                <div class="d-block mt-3">
                    
                    <p id="price" class="d-inline-block text-danger mt-3">
                        <span class="text-secondary">Giá:</span>
                        <?= $minPrice->price == $maxPrice->price ? $minPrice->price . ' VNĐ' : $minPrice->price . '~' . $maxPrice->price  . ' VNĐ' ?>
                    </p>
                    
                </div>
                <input type="submit" value="Thêm vào giỏ hàng" class="d-block mt-3 p-2 bg-danger text-white rounded border border-none">
            </form>
        </div>
        <div class="mb-5 py-5">

        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('label[name=variation-size]').each(function() {
            $(this).click(function() {
                $('label[name=variation-size]').removeClass('border-danger text-danger')
                $(this).addClass('border-danger text-danger')
                let idProduct = $('input[name=product-id]').val()
                let nameVariationSize = $(this).text()
                $.ajax({
                    url: "<?php echo e(BASE_URL . '/get-variation-color'); ?>",
                    method: "POST",
                    data: {
                        idProduct: idProduct,
                        nameVariationSize: nameVariationSize
                    },
                    success: function(result) {
                        $("#variation-color").html(result);
                        $('label[name=variation-color]').each(function() {
                            $(this).click(function() {
                                $('label[name=variation-color]').removeClass('border-danger text-danger')
                                $(this).addClass('border-danger text-danger')
                                let nameVariationColor = $(this).text()
                                console.log(nameVariationColor, nameVariationSize, idProduct);
                                $.ajax({
                                    url: "<?php echo e(BASE_URL . '/get-price'); ?>",
                                    method: "POST",
                                    data: {
                                        nameVariationSize: nameVariationSize,
                                        nameVariationColor: nameVariationColor,
                                        idProduct: idProduct
                                    },
                                    success: function(result) {
                                        $("#price").html('');
                                        $("#price").html(result);
                                        // console.log(result);
                                    }
                                })
                            })
                        })
                    }
                })
            })
        })
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.client-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\da1\app\views/client/product/detail.blade.php ENDPATH**/ ?>