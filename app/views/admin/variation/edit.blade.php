@extends('admin.layouts.admin-layout')
@section('title', 'Sửa biến thể')
@section('main')
<h2>Sửa biến thể</h2>
@isset ( $status )
<div class="alert alert-success" role="alert">
    {{ $status }}
</div>
@endisset
<form action="{{ BASE_URL . '/variation-update' }}" method="POST">
    <div class="mb-3" hidden>
        <label for="exampleInputtext" class="form-label">ID</label>
        <input type="number" name="id" value="{{ $variation->id }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Sản phẩm</label>
        <input type="text" value="{{ $variation->products->name }}" disabled class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Màu sắc</label>
        <input type="text" value="{{ $variation->color->name }}" disabled class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Size</label>
        <input type="text" value="{{ $variation->size->name }}" disabled class="form-control">
    </div>

    <div class="mb-3">
        <label for="exampleInputtext4" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="exampleInputtext4" placeholder="Nhập số lượng" name="quantity" min="0" value="{{ $variation->quantity }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext5" class="form-label">Giá (VNĐ)</label>
        <input type="number" class="form-control" id="exampleInputtext5" placeholder="Nhập giá" name="price" min="0" value="{{ $variation->price }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext6" class="form-label">Giảm giá (%)</label>
        <input type="number" class="form-control" id="exampleInputtext6" placeholder="Nhập giảm giá" name="discount" min="0" value="{{ $variation->discount }}">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
@endsection