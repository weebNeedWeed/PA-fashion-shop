<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $guarded = [];

  public function order_items()
  {
    return $this->hasMany(OrderItem::class, "order_id");
  }

  public function user()
  {
    return $this->belongsTo(User::class, "user_id");
  }

  public function totalPrice()
  {
    $orderItems = $this->order_items;
    $total = 0;

    foreach ($orderItems as $orderItem) {
      $localPrice = $orderItem->product->price * $orderItem->quantity;
      $total = $total + $localPrice;
    }

    return $total;
  }
}
