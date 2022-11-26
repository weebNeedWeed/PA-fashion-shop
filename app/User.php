<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
  use AuthenticableTrait;

  protected $guarded = [];

  public function cart_items()
  {
    return $this->hasMany(CartItem::class, "user_id");
  }

  public function orders()
  {
    return $this->hasMany(Order::class, "user_id");
  }
}
