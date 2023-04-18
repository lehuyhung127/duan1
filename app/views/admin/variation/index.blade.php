@extends('admin.layouts.admin-layout')
@section('title', 'Danh sách biến thể')
@section('main')
<section class="d-flex justify-content-between align-items-center">
    <div class="position-relative">
        <form class="d-flex align-items-center" method="POST" action="{{ BASE_URL . '/variation-show' }}" autocomplete="off">
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
    <a href="{{ BASE_URL . '/variation-create' }}" class="btn btn-success">Thêm biến thể</a>
</section>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col" style="max-width: 70px;">Mã biến thể</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Màu sắc</th>
            <th scope="col">Size</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá($)</th>
            <th scope="col">Giảm giá(%)</th>
            <th scope="col" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listVariation as $key => $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3">{{ $item->products->name }}</p>
            </td>
            <td scope="row">{{ $item->color->name }}</td>
            <td scope="row">{{ $item->size->name }}</td>
            <td scope="row">{{ $item->quantity == 0 ? "Hết hàng" : $item->quantity }}</td>
            <td scope="row">{{ $item->price }}</td>
            <td scope="row">{{ $item->discount }}</td>
            <td scope="row" class="text-end">
                <form action="{{ BASE_URL . '/variation-edit' }}">
                    <input type="number" value="{{ $item->id }}" name="id" hidden>
                    <button class="btn btn-primary">Sửa</button>
                </form>
            </td>
            <td scope="row" class="text-start">
                <form action="{{ BASE_URL . '/variation-destroy' }}">
                    <input type="number" value="{{ $item->id }}" name="id" hidden>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa biến thể không')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#tim-kiem-san-pham').keyup(function() {
            var keywords = $(this).val()
            if (keywords != '') {
                $.ajax({
                    url: "{{ BASE_URL . '/search-variation-index' }}",
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
@endsection