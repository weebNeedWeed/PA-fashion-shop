@extends("layout")

@section("title", "Đăng nhập")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/account/login.css')}}">
@endsection

@section("content")

<div class="container-fluid">
  <div class="inner">
    <form action="/account/auth" method="POST" class="form">
      @csrf
      <h3 class="form__title">Đăng nhập</h3>

      <input required value="{{old('email')}}" name="email" type="email" class="form__input" placeholder="Nhập email">
      @error("email")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <input required name="password" type="password" class="form__input" placeholder="Nhập mật khẩu">
      @error("password")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <a href="/account/forget-password" class="form__link">Quên mật khẩu?</a>

      <button type="submit" class="form__button">Đăng nhập</button>

      <p class="form__text">Chưa có tài khoản? <a href="/account/register" class="form__redirect-button">Đăng ký</a></p>
    </form>
  </div>
</div>

@endsection
