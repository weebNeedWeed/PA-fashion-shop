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
}
