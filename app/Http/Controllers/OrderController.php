<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function createOrder()
  {
    $cartItems = CartItem::where("user_id", auth()->user()->id)->get();

    if (count($cartItems) === 0) {
      return back();
    }

    $newOrder = new Order();

    $newOrder->user_id = auth()->user()->id;
    $newOrder->status = true;

    $newOrder->save();

    foreach ($cartItems as $cartItem) {
      $newOrderItem = new OrderItem();

      $newOrderItem->product_id = $cartItem->product_id;
      $newOrderItem->quantity = $cartItem->quantity;

      $newOrder->order_items()->save($newOrderItem);

      $cartItem->delete();
    }

    return redirect("/account/dashboard")->with("message", "Đặt hàng thành công");
  }

  public function cancelOrder(Request $request)
  {
    $validated = $request->validate([
      "order_id" => ["required", "integer", "exists:orders,id"]
    ]);

    $orderId = $validated["order_id"];
    $userId = auth()->user()->id;

    $order = Order::where("user_id", $userId)->where("id", $orderId)->first();

    if (!$order) {
      return back();
    }

    $order->status = 0;

    $order->save();

    return back()->with("message", "Huỷ đơn hàng thành công");
  }
}
