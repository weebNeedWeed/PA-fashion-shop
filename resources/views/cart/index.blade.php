@extends('layout')

@section("title", "Giỏ hàng")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/cart/index.css')}}">
@endsection

@section('content')

<div class="container-fluid">
  <div class="d-flex flex-row justify-content-center">
    <div class="cart-icon">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
  </div>

  <div class="wrapper">
    <div class="address">
      <h5>Địa chỉ nhận hàng:</h5>
      <span>{{auth()->user()->address}}</span>
      <a href="/account/dashboard/update-info">Thay đổi</a>
    </div>

    <div class="mt-5 table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên hàng</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Số Tiền</th>
            <th scope="col">Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cartItems as $cartItem)
          <x-cart-item :index="$loop->index + 1" :cartItem="$cartItem" />
          @endforeach
        </tbody>
      </table>
    </div>

    @unless(count($cartItems) === 0)
    <div class="mt-3 d-flex flex-column align-items-end">
      <p class="total-price">Tổng thanh toán: <span>₫</span><span class="format-vnd">{{$totalPrice}}</span></p>

      <form action="/order/create-order" method="POST">
        @csrf
        <button type="submit" class="order-button">Đặt hàng</button>
      </form>
    </div>
    @endunless
  </div>
</div>

@endsection

@section("scripts")
<script type="text/javascript" src="{{asset('assets/js/cart/index.js')}}"></script>
@endsection
