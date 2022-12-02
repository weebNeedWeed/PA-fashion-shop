@extends("layout")

@section("title", "Liên hệ")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/contact/index.css')}}">
@endsection

@section("content")
<div class="container-fluid">
  <div class="wrapper">
    <div class="big-logo">
      <i class="fa-solid fa-envelope"></i>
    </div>

    <div class="row px-5">
      <div class="col-12 col-sm-12 col-md-6">
        <div class="w-100 d-flex flex-column mb-5">
          <div class="d-flex flex-row align-items-center mt-5">
            <div class="icon">
              <i class="fa-solid fa-map-location-dot"></i>
            </div>
            <div class="side-content">
              <span>
                Địa chỉ:
              </span>
              <span class="fw-normal">
                131A-133 Cách Mạng Tháng 8, Cái Khế, Ninh Kiều, Cần Thơ
              </span>
            </div>
          </div>

          <div class="d-flex flex-row align-items-center mt-5">
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="side-content">
              <span>
                Số điện thoại:
              </span>
              <span class="fw-normal">
                0339574669
              </span>
            </div>
          </div>

          <div class="d-flex flex-row align-items-center mt-5">
            <div class="icon">
              <i class="fa-solid fa-inbox"></i>
            </div>
            <div class="side-content">
              <span>
                Email:
              </span>
              <span class="fw-normal">
                meowracle@pashop.com
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-6">
        <form class="form">
          <h3 class="form__title">Liên hệ</h3>

          <input required type="text" class="form__input" placeholder="Nhập tên của bạn">

          <input required type="text" class="form__input" placeholder="Nhập email của bạn">

          <textarea rows="3" class="form__input" placeholder="Nhập tin nhắn"></textarea>

          <button type="button" class="form__button mt-5">Gửi</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
