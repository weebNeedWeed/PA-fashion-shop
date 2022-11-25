<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
  protected $guarded = [];

  public function user()
  {
    return $this->hasOne(User::class, "user_id");
  }

  public function product()
  {
    return $this->hasOne(Product::class, "product_id");
  }
}
