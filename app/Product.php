<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category()
  {
    return $this->belongsTo(Category::class, "category_id");
  }

  public function cart_item()
  {
    return $this->belongsTo(CartItem::class, "product_id");
  }
}
