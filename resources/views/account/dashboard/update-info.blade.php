@extends("account.dashboard.dashboard_layout")

@section("sub_title", "Cập nhật thông tin")

@section("sub_content")

<div class="d-flex flex-column">
  <h4>Cập nhật thông tin người dùng</h4>

  <form action="/account/dashboard/info" method="POST" class="mt-3 mb-5">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Họ tên</label>
      <input required value="{{old('name', auth()->user()->name)}}" type="text" class="form-control" id="name"
        name="name">
      @error("name")
      <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Địa chỉ</label>
      <input required value="{{old('address', auth()->user()->address)}}" type="text" class="form-control" id="address"
        name="address">
      @error("address")
      <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="phone_number" class="form-label">Số điện thoại</label>
      <input required value="{{old('phone_number', auth()->user()->phone_number)}}" type="text" class="form-control"
        id="phone_number" name="phone_number">
      @error("phone_number")
      <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
</div>

@endsection
