@extends("account.dashboard.dashboard_layout")

@section("title", "Đơn hàng")

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
            <span class="text-primary">Đang giao</span>
            @else
            <span class="text-danger">Đã huỷ</span>
            @endif
          </li>
        </ol>
      </div>

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
          <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>
              <img src="{{$orderItem->product->image}}" width="80" height="80">
            </td>
            <td>
              {{$orderItem->product->name}}
            </td>
            <td>
              ₫<span class="format-vnd">
                {{$orderItem->product->price}}
              </span>
            </td>
            <td>
              {{$orderItem->quantity}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex flex-column align-items-end">
        <h5>Tổng số tiền: <span class="fw-normal">₫</span><span
            class="format-vnd fw-normal">{{$order->totalPrice()}}</span></h5>

        @unless($order->status === 0)
        <button type="button" class="btn btn-danger cancel-order-btn" data-order-id="{{$order->id}}">Huỷ đơn</button>
        <form action="/order/cancel-order" method="POST" id="cancel-form-{{$order->id}}">
          @csrf
          <input required type="hidden" name="order_id" value="{{$order->id}}">
        </form>
        @endunless
      </div>
    </div>
    @endforeach
  </div>
</div>

<div id="cancel-modal" class="modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thông báo</h5>
        <button type="button" class="btn-close closeBtn"></button>
      </div>
      <div class="modal-body">
        <p>Bạn có muốn huỷ đơn hàng này ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closeBtn">Đóng</button>
        <button id="cancel-btn" type="button" class="btn btn-danger">Huỷ đơn</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section("sub_scripts")
<script type="text/javascript" src="{{asset('assets/js/account/orders.js')}}"></script>
@endsection
