@extends('client.layouts.client-layout')
@section('title', 'Chi tiết sản phẩm')
@section('main')
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
                        <img src="{{ './public/uploads/products/' . $item->image }}" class="d-block" alt="...">
                    </button>
                    @foreach($listThumbnail as $key => $subItem)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= ++$key ?>" class="thumbnail border rounded shadow-lg" aria-label="Slide <?= ++$key ?>">
                        <img src="{{ './public/uploads/products/' . $subItem->link }}" class="d-block" alt="..."></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active border rounded shadow-lg">
                        <img src="{{ './public/uploads/products/' . $item->image }}" class="d-block w-100" alt="..." style="height: 500px;">
                    </div>
                    @foreach($listThumbnail as $subItem)
                    <div class="carousel-item border rounded shadow-lg">
                        <img src="{{ './public/uploads/products/' . $subItem->link }}" class="d-block w-100" alt="..." style="height: 500px;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-7">
            <h2 class="card-title" id="test">{{ $item->name }}</h2>
            <p class="mt-3">{!! html_entity_decode($item->detail) !!}</p>
            <form action="{{ BASE_URL . '/add-cart' }}" method="POST">
                <div class="d-inline-block">
                    <input type="number" value="{{ $item->id }}" hidden name="product-id">
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="text-secondary mt-2">Size</p>
                    </div>
                    <div class="col-10">
                        @foreach($listVariation as $item)
                        <div class="d-inline-block">
                            <label class="border p-2" style="min-width: 50px;" name="variation-size" for="{{ 'size-id-' . $item->id }}">{{ $item->size->name }}</label>
                            <input type="radio" value="{{ $item->size_id }}" hidden name="size-id" id="{{ 'size-id-' . $item->id }}">
                        </div>
                        @endforeach
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
                    url: "{{ BASE_URL . '/get-variation-color' }}",
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
                                    url: "{{ BASE_URL . '/get-price' }}",
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
@endsection