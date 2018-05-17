<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
  protected $fillable = [
    'order_id',
    'dish_id',
  ];
 public function order(){
   return $this->belongsTo(Order::class);
 }
 public function dish(){
   return $this->belongsTo(Dish::class);
 }
}
