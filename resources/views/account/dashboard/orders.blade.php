@extends("account.dashboard.dashboard_layout")

@section("sub_title", "Đơn hàng")

@section("sub_styles")
<link rel="stylesheet" href="{{asset('assets/css/account/orders.css')}}">
@endsection

@section("sub_content")

<div class="d-flex flex-column">
  <h4>Đơn hàng của bạn: <span class="fw-normal">{{count($orders)}} đơn</span></h4>

  <div class="orders">
    @foreach($orders as $order)
    <div class="order">
      <div class="order-header">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">{{$order->created_at}}</li>
          <li class="breadcrumb-item">
            @if($order->status)
            <span class="text-primary fw-bold">Đang giao</span>
            @else
            <span class="text-danger fw-bold">Đã huỷ</span>
            @endif
          </li>
        </ol>
      </div>

      <div class="w-100 table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Hình ảnh</th>
              <th scope="col">Tên hàng</th>
              <th scope="col">Đơn giá</th>
              <th scope="col">Số lượng</th>
            </tr>
          </thead>
          <tbody>
            @foreach($order->order_items as $orderItem)
            <x-order-item :index="$loop->index + 1" :orderItem="$orderItem" />
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="d-flex flex-column align-items-end">
        <h5>Tổng số tiền: <span class="fw-normal">₫</span><span
            class="format-vnd fw-normal">{{$order->totalPrice()}}</span></h5>

        @if($order->status === 1)
        <button type="button" class="btn btn-danger cancel-order-btn" data-order-id="{{$order->id}}">Huỷ đơn</button>
        <form action="/order/cancel-order" method="POST" id="cancel-form-{{$order->id}}">
          @csrf
          <input required type="hidden" name="order_id" value="{{$order->id}}">
        </form>
        @else
        <button type="button" class="btn btn-primary reorder-btn" data-order-id="{{$order->id}}">
          Đặt hàng lại
        </button>
        <form action="/order/reorder" method="POST" id="reorder-form-{{$order->id}}">
          @csrf
          <input required type="hidden" name="order_id" value="{{$order->id}}">
        </form>
        @endif
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

@section("sub_scripts")
<script type="text/javascript" src="{{asset('assets/js/account/orders.js')}}"></script>
@endsection
