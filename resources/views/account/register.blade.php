@extends("layout")

@section("title", "Đăng kí")

@section("styles")
<link rel="stylesheet" href="{{asset('assets/css/account/register.css')}}">
@endsection

@section("content")

<div class="container-fluid">
  <div class="inner">
    <form action="/account/createuser" method="POST" class="form">
      @csrf
      <h3 class="form__title">Đăng ký</h3>

      <input value="{{old('name')}}" required name="name" type="text" class="form__input" placeholder="Nhập họ tên">
      @error("name")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <input value="{{old('address')}}" required name="address" type="text" class="form__input"
        placeholder="Nhập địa chỉ">
      @error("address")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <input value="{{old('phone_number')}}" required name="phone_number" type="text" class="form__input"
        placeholder="Nhập số điện thoại(ví dụ: 0123456789)">
      @error("phone_number")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <input value="{{old('email')}}" required value="{{old('email')}}" name="email" type="email" class="form__input"
        placeholder="Nhập email">
      @error("email")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <input required name="password" type="password" class="form__input" placeholder="Nhập mật khẩu">
      @error("password")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <input required name="password_confirmation" type="password" class="form__input" placeholder="Nhập lại mật khẩu">
      @error("password_confirmation")
      <span class="text-danger w-100 mt-1">{{$message}}</span>
      @enderror

      <button type="submit" class="form__button">Đăng nhập</button>

      <p class="form__text">Đã có tài khoản? <a href="/account/login" class="form__redirect-button">Đăng nhập</a></p>
    </form>
  </div>
</div>

@endsection
