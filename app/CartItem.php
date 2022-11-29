<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class, "user_id");
  }

  public function product()
  {
    return $this->belongsTo(Product::class, "product_id");
  }

  public static function totalPriceByUserId($userId)
  {
    $cartItems = CartItem::where("user_id", $userId)->get();
    $total = 0;

    foreach ($cartItems as $cartItem) {
      $total = $total + ($cartItem->product->price * $cartItem->quantity);
    }

    return $total;
  }
}
