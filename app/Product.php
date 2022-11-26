<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category()
  {
    return $this->belongsTo(Category::class, "category_id");
  }

  public function cart_items()
  {
    return $this->hasMany(CartItem::class, "product_id");
  }

  public function order_items()
  {
    return $this->hasMany(OrderItem::class, "product_id");
  }
}
