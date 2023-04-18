@extends('admin.layouts.admin-layout')
@section('title', 'Thêm biến thể')
@section('main')
<h2>Thêm biến thể</h2>
@isset ( $status )
<div class="alert alert-success" role="alert">
    {{ $status }}
</div>
@endisset
@isset ( $error )
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endisset
<form action="{{ BASE_URL . '/variation-store' }}" method="POST">
    <div class="mb-3">
        <label for="exampleInputtext3" class="form-label">Sản phẩm</label>
        <select name="product_id" id="exampleInputtext3" class="form-select" required>
            <option value="" hidden>Chọn sản phẩm</option>
            @foreach($listProduct as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Màu sắc</label>
        <select name="color_id" id="exampleInputtext1" class="form-select" required>
            <option value="" hidden>Chọn màu</option>
            @foreach($listColor as $item)
            <option value="{{ $item->id }}">{{ (string)$item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputtext2" class="form-label">Size</label>
        <select name="size_id" id="exampleInputtext2" class="form-select" required>
            <option value="" hidden>Chọn size</option>
            @foreach($listSize as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputtext4" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="exampleInputtext4" placeholder="Nhập số lượng" name="quantity" required min="0">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext5" class="form-label">Giá ($)</label>
        <input type="number" class="form-control" id="exampleInputtext5" placeholder="Nhập giá" name="price" required min="0">
    </div>
    <div class="mb-3">
        <label for="exampleInputtext6" class="form-label">Giảm giá (%)</label>
        <input type="number" class="form-control" id="exampleInputtext6" placeholder="Nhập giảm giá" name="discount" required min="0">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@endsection