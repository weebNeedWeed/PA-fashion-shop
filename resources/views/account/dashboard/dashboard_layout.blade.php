@extends("layout")

@section("title")
@yield("sub_title") | Dashboard
@endsection

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/account/dashboard.css')}}">
@yield("sub_styles")
@endsection

@section("content")
<div class="container-fluid">
  <div class="wrapper">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-3">
        <div class="d-flex flex-column align-items-center w-100 justify-content-start">
          <div class="avatar">
            <i class="fa-solid fa-user"></i>
          </div>
          <h5 class="mt-2">{{auth()->user()->name}}</h5>

          <hr class="border border-2 opacity-50 w-75">

          <div class="d-flex flex-column align-items-start px-3 w-100">
            <p><span class="fw-bold">Email:</span> {{auth()->user()->email}}</p>
            <p><span class="fw-bold">Địa chỉ:</span> {{auth()->user()->address}}</p>
            <p class="m-0"><span class="fw-bold">Số điện thoại:</span> {{auth()->user()->phone_number}}</p>
            <a href="/account/dashboard/update-info">
              Cập nhật thông tin
            </a>
          </div>

          <hr class="border border-2 opacity-50 w-75">

          <div class="d-flex flex-column align-items-start px-3 w-100">
            <p class="m-0"><span class="fw-bold">Mật khẩu:</span> *********</p>
            <a href="/account/dashboard/update-password">
              Đổi mật khẩu
            </a>
          </div>

          <hr class="border border-2 opacity-50 w-75">

          <div class="d-flex flex-column align-items-start px-3 w-100">
            <p class="m-0"><span class="fw-bold">Số đơn hàng:</span> {{auth()->user()->orders()->count()}} đơn</p>
            <a href="/account/dashboard">
              Xem đơn hàng
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-9 my-5">
        @yield('sub_content')
      </div>
    </div>
  </div>
</div>
@endsection

@section("scripts")
@yield("sub_scripts")
@endsection
