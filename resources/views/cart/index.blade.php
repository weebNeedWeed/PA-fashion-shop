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
          @php
          $total = 0;
          @endphp
          @foreach($cartItems as $cartItem)
          @php
          $total = $total + $cartItem->quantity * $cartItem->product->price;
          @endphp
          <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>
              <img src="{{$cartItem->product->image}}" width="78" height="78" />
            </td>
            <td>
              <a class="product-name" href="/product/{{$cartItem->product->slug}}">
                {{$cartItem->product->name}}
              </a>
            </td>
            <td>
              ₫<span class="format-vnd">{{$cartItem->product->price}}</span>
            </td>
            <td>
              <div class="quantity-box">
                <button class="minus" data-cart-item-id="{{$cartItem->id}}">
                  <i class="fa-solid fa-minus"></i>
                </button>
                <input type="number" readonly value="{{$cartItem->quantity}}" data-cart-item-id="{{$cartItem->id}}">
                <button class="add" data-cart-item-id="{{$cartItem->id}}">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
            </td>
            <td>
              ₫<span data-cart-item-id="{{$cartItem->id}}"
                class="format-vnd">{{$cartItem->quantity * $cartItem->product->price}}</span>
            </td>
            <td>
              <form action="/cart/deleteItem" method="POST">
                @csrf
                <input required type="hidden" name="cart_item_id" value={{$cartItem->id}}>
                <button type="submit" class="delete-button text-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    @unless(count($cartItems) === 0)
    <div class="mt-3 d-flex flex-column align-items-end">
      <p class="total-price">Tổng thanh toán: <span>₫</span><span class="format-vnd">{{$total}}</span></p>

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
