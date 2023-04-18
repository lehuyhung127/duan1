@extends('admin.layouts.admin-layout')
@section('title', 'Thêm sản phẩm')
@section('main')
<h2>Thêm sản phẩm</h2>
@isset ( $status )
<div class="alert alert-success" role="alert">
    {{ $status }}
</div>
@endisset
<form action="{{ BASE_URL . '/products-store' }}" method="POST" class="mb-3" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputtext1" placeholder="Nhập tên sản phẩm" name="name" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext2" class="form-label">Tên thương hiệu</label>
        <select name="brand_id" id="" class="form-select" id="exampleInputtext2" required>>
            <option value="" hidden>Chọn tên thương hiệu</option>
            @foreach($listBrands as $key => $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext3" class="form-label">Hình ảnh</label>
        <input type="file" accept="image/*" class="form-control" id="exampleInputtext3" name="image" required onchange="document.getElementById('imgTmp').src = window.URL.createObjectURL(this.files[0])">
        <div class="mt-3" style="width: 200px; height: 200px;">
            <img src="./public/uploads/default/no-image.jpg" alt="" class="w-100 h-100 object-fit-fill" id="imgTmp">
        </div>
    </div>
    <div class="mb-3" class="form-floating">
        <label for="exampleInputtext4" class="form-label">Mô tả</label>
        <textarea name="description" id="exampleInputtext4" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="mb-3" class="form-floating">
        <label for="exampleInputtext5" class="form-label">Chi tiết</label>
        <textarea name="detail" id="exampleInputtext5" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
<script type="text/javascript">
    CKEDITOR.replace('exampleInputtext4')
    CKEDITOR.replace('exampleInputtext5')
</script>
@endsection