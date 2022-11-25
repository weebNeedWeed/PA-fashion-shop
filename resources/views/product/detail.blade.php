@extends("layout")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/product/detail.css')}}">
@endsection

@section("content")

<div class="container-fluid">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Sản phẩm</a></li>
      <li class="breadcrumb-item"><a href="/?category={{$product->category->slug}}">{{$product->category->name}}</a>
      </li>
      <li class="breadcrumb-item active">{{$product->name}}</li>
    </ol>
  </nav>

  <div class="wrapper">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-4">
        <div class="d-flex justify-content-center">
          <div class="product-image" style="background-image: url('{{$product->image}}')"></div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-8 mt-4">
        <form method="POST" action="/cart/addItem" class="info-inner">
          @csrf
          <h3 class="product-name">{{$product->name}}</h3>

          <input name="product_id" type="hidden" value="{{$product->id}}">

          <div class="product-price">
            <div>Giá niêm yết:</div>
            <span>₫</span>
            <p class="format-vnd">{{$product->price}}</p>
          </div>

          <div class="product-quantity">
            <span>Số lượng:</span>

            <div class="quantity-box">
              <button type="button" id="minus">
                <i class="fa-solid fa-minus"></i>
              </button>
              <input id="quantity" name="quantity" type="number" value="1" min="1" max="100" readonly>
              <button type="button" id="add">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>

          <button class="add-to-cart" type="submit">
            <i class="fa-solid fa-cart-plus"></i>
            Thêm vào giỏ hàng
          </button>
        </form>
      </div>

      <div class="col-12 mt-5">
        <div class="w-100 d-flex flex-column">
          <h2 class="des-title">
            Mô tả sản phẩm
          </h2>

          <p class="description">
            {{$product->description}}
          </p>

          <div class="d-flex flex-row justify-content-center mt-3 mb-5">
            <img src="{{$product->image}}" width="350px">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section("scripts")
<script type="text/javascript" src="{{asset('assets/js/product/detail.js')}}"></script>
@endsection
