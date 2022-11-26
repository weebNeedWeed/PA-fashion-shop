@extends("account.dashboard.dashboard_layout")

@section("sub_title", "Đổi mật khẩu")

@section("sub_content")

<div class="d-flex flex-column">
  <h4>Đổi mật khẩu</h4>

  <form action="/account/dashboard/password" method="POST" class="mt-3 mb-5">
    @csrf
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu mới</label>
      <input required type="password" class="form-control" id="password" name="password">
      @error("password")
      <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Nhập lại mật khẩu mới</label>
      <input required type="password" class="form-control" id="password_confirmation" name="password_confirmation">
      @error("password_confirmation")
      <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
  </form>
</div>

@endsection
