@extends("layout")

@section("title", "Tin tức")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/news/index.css')}}">
@endsection

@section("content")
<div class="container-md mb-5">
  <div class="row">
    @foreach($headNews as $news)
    <x-head-news :news="$news" />
    @endforeach
  </div>

  <hr class="w-100">

  <div class="row">
    <div class="col-12 col-md-9">
      <div class="d-flex flex-column">
        @foreach($bodyNews as $news)
        <x-body-news :news="$news" />
        @endforeach
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="ads p-4 mb-4">
        <p class="ads__text">
          Voucher freeship 15% duy nhất 12/2/2022
        </p>
        <p class="ads__text" style="text-decoration: underline">Nhận ngay!</p>
      </div>

      <div class="ads p-4 mb-4">
        <p class="ads__text">
          Voucher giảm giá 15% đối với toàn bộ mặt hàng
        </p>
        <p class="ads__text" style="text-decoration: underline">Nhận ngay!</p>
      </div>

      <div class="ads p-4">
        <p class="ads__text">
          1/11 - 1/12 PA giảm giá 25% mọi sản phẩm nhân dịp khai trương
        </p>
        <p class="ads__text" style="text-decoration: underline">Mua ngay!</p>
      </div>
    </div>
  </div>
</div>
@endsection
