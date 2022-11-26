<?php

namespace App\Http\Controllers;

use App\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function addItem(Request $request)
  {
    $validated = $request->validate([
      "quantity" => ["required", "integer", "min:1", "max:100"],
      "product_id" => ["required", "integer", "exists:products,id"]
    ]);

    $userId = auth()->user()->id;
    $productId = $validated["product_id"];
    $quantity = $validated["quantity"];

    CartItem::create([
      "user_id" => $userId,
      "product_id" => $productId,
      "quantity" => $quantity
    ]);

    return back()->with("message", "Thêm vào giỏ hàng thành công");
  }

  public function index()
  {
    $cartItems = CartItem::where("user_id", auth()->user()->id)->get();

    return view("cart.index", [
      "cartItems" => $cartItems
    ]);
  }

  public function increaseQuantity(Request $request)
  {
    $request->validate([
      "cart_item_id" => ["required", "integer", "exists:cart_items,id"]
    ]);

    $cartItemId = $request->get("cart_item_id");
    $userId = auth()->user()->id;
    $cartItem = CartItem::all()->where("id", $cartItemId)->where("user_id", $userId)->first();

    if (!$cartItem) {
      return response()->json([
        "message" => "error",
        "status" => 400,
      ], 400);
    }

    $cartItem->quantity = $cartItem->quantity < 100 ? $cartItem->quantity + 1 : $cartItem->quantity;
    $cartItem->save();

    $cartItem->product = $cartItem->product;

    $cartItems = CartItem::where("user_id", auth()->user()->id)->get();
    $total = 0;
    foreach ($cartItems as $item) {
      $total = $total + $item->product->price * $item->quantity;
    }

    return response()->json([
      "message" => "success",
      "status" => 200,
      "data" => [
        "cart_item" => $cartItem,
        "total_price" => $total
      ]
    ]);
  }

  public function decreaseQuantity(Request $request)
  {
    $request->validate([
      "cart_item_id" => ["required", "integer", "exists:cart_items,id"]
    ]);

    $cartItemId = $request->get("cart_item_id");
    $userId = auth()->user()->id;
    $cartItem = CartItem::all()->where("id", $cartItemId)->where("user_id", $userId)->first();

    if (!$cartItem) {
      return response()->json([
        "message" => "error",
        "status" => 400,
      ], 400);
    }

    $cartItem->quantity = $cartItem->quantity > 1 ? $cartItem->quantity - 1 : $cartItem->quantity;
    $cartItem->save();

    $cartItem->product = $cartItem->product;

    $cartItems = CartItem::where("user_id", auth()->user()->id)->get();
    $total = 0;
    foreach ($cartItems as $item) {
      $total = $total + $item->product->price * $item->quantity;
    }

    return response()->json([
      "message" => "success",
      "status" => 200,
      "data" => [
        "cart_item" => $cartItem,
        "total_price" => $total
      ]
    ]);
  }

  public function deteteItem(Request $request)
  {
    $data = $request->validate([
      "cart_item_id" => ["required", "integer", "exists:cart_items,id"]
    ]);

    $cartItemId = $data["cart_item_id"];
    $cartItem = CartItem::all()
      ->where("user_id", auth()->user()->id)
      ->where("id", $cartItemId)->first();

    if (!$cartItem) {
      return back();
    }

    $cartItem->delete();

    return back()->with("message", "Xoá sản phẩm thành công");
  }
}
