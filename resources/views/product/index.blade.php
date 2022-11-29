@extends("layout")

@section("title", "Trang chủ")

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/product/index.css')}}">
@endsection

@section("content")
<div class="container-fluid">
  <div class="ads p-2">
    <p class="ads__text">
      1/11 - 1/12 PA giảm giá 25% mọi sản phẩm nhân dịp khai trương
    </p>
    <p class="ads__text" style="text-decoration: underline">Mua ngay!</p>
  </div>

  <div class="mt-5 product-section">
    <div class="row flex-column-reverse flex-md-row">
      <div class="col-12 col-sm-12 col-md-8 col-lg-9">
        <div class="row">
          <div class="col-12">
            <h3 class="mb-0">Tất cả sản phẩm</h3>
            <p class="fw-light mb-3">Hiển thị {{count($products)}} kết quả</p>
          </div>
          @foreach($products as $product)
          <x-product-card :product="$product" />
          @endforeach
          <div class="col-12">
            <div class="flex">
              {{$products->withQueryString()->links()}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <form action="/" class="search-form mb-4">
          <input name="search" type="text" class="search-input" placeholder="Nhập từ khoá">
          <button type="submit" class="search-button">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

        <div class="category-box mb-5">
          <h3 class="category-title">Danh mục sản phẩm</h3>

          <div class="category-list">
            @php
            $total = 0;
            foreach($categories as $category){
            $total = $total + $category->products->count();
            }
            @endphp
            <div class="category-item">
              <a href="/">Tất cả</a>
              <span>{{$total}}</span>
            </div>

            @foreach($categories as $category)
            <div class="category-item">
              <a href="/?category={{$category->slug}}">{{$category->name}}</a>
              <span>{{$category->products->count()}}</span>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
