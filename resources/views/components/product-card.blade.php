@props(["product"])

<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
  <div class="w-100 p-3 bg-white product-card-inner d-flex flex-column align-items-center">
    <div class="product-card-image" style="background-image: url('{{$product->image}}')"></div>

    <h4 class="product-card-title">
      {{$product->name}}
    </h4>

    <p class="product-price">₫<span class="format-vnd">{{$product->price}}</span></p>

    <div class="d-flex justify-content-center mt-auto w-100 px-2">
      <form action="/cart/addItem" method="POST">
        @csrf
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button type="submit" class="product-add-cart">
          <i class="fa-solid fa-cart-plus"></i>
        </button>
      </form>

      <a href="/product/{{$product->slug}}" class="product-detail">
        Xem chi tiết
      </a>
    </div>
  </div>
</div>
