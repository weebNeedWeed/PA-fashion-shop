@extends("layout")

@section("title", "Quên mật khẩu")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/account/forget-password.css')}}">
@endsection

@section("content")

<div class="container-fluid">
  <div class="inner">
    <form class="form">
      @csrf
      <h3 class="form__title">Quên mật khẩu</h3>

      <input name="email" type="email" class="form__input" placeholder="Nhập email">

      <button type="button" class="form__button">Lấy lại mật khẩu</button>

      <p class="form__text">Đã có tài khoản? <a href="/account/login" class="form__redirect-button">Đăng nhập</a></p>
    </form>
  </div>
</div>

@endsection
