<!-- @extends('client.layouts.client-layout')
@section('title', 'Giỏ hàng')
@section('main')
<div class="container">
    <form class="mb-3" action="{{ BASE_URL . '/pay-method' }}" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Họ tên</label>
            <input type="text" class="form-control" id="" required name="fullname">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="" required name="phone">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="" required name="addrress">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tổng tiền</label>
            <p class="text-danger">{{ $amount . ' VNĐ'}}</p>
            <input type="text" class="form-control" value="{{ $amount }}" hidden name="total_price">
        </div>
        <div>
            <select class="form-select mb-3" name="payment-method">
                <option hidden>Vui lòng chọn phương thức thanh toán</option>
                <option value="1">COD</option>
                <option value="2">VNPAY</option>
            </select>
        </div>
        <button type="submit" class="btn btn-danger text-white border border-none px-3" name="redirect">Đặt hàng</button>
    </form>

</div>
<script>
</script>
@endsection -->