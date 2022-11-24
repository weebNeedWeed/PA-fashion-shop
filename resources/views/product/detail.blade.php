@extends("layout")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/product/detail.css')}}">
@endsection

@section("content")

<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Sản phẩm</a></li>
      <li class="breadcrumb-item"><a href="/?category={{$product->category_slug}}">{{$product->category_name}}</a></li>
      <li class="breadcrumb-item active">{{$product->slug}}</li>
    </ol>
  </nav>

  <div class="wrapper">

  </div>
</div>

@endsection
