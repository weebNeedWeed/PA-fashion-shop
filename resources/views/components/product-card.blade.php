@props(["product"])

<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
  <div class="w-100 p-3 bg-white product-card-inner d-flex flex-column align-items-center">
    <div class="product-card-image" style="background-image: url('{{$product->image}}')"></div>

    <h4 class="product-card-title">
      {{$product->name}}
    </h4>

    <p class="product-price">₫{{$product->price}}</p>

    <div class="d-flex justify-content-center mt-auto w-100 px-2">
      <button class="product-add-cart">
        <i class="fa-solid fa-cart-plus"></i>
      </button>

      <button class="product-detail">
        Xem chi tiết
      </button>
    </div>
  </div>
</div>
