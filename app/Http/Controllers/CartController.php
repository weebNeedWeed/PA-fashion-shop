<?php

namespace App\Http\Controllers;

use App\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function addItem(Request $request)
  {
    $request->validate([
      "quantity" => ["required", "integer", "min:1", "max:100"],
      "product_id" => ["required", "integer", "exists:products,id"]
    ]);

    $userId = auth()->user()->id;
    $productId = intval($request->product_id);
    $quantity = intval($request->quantity);

    CartItem::create([
      "user_id" => $userId,
      "product_id" => $productId,
      "quantity" => $quantity
    ]);

    return back()->with("message", "Thêm vào giỏ hàng thành công");
  }

  public function index()
  {
    return view("cart.index");
  }
}
