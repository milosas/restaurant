<?php

namespace App;

class ShoppingCart
{
      public $products = null;
      public $totalQty;
      public $totalPrice;

  public function __construct($oldCart){
  if($oldCart){
    $this->products = $oldCart->products;
    $this->totalQty = $oldCart->totalQty;
    $this->totalPrice = $oldCart->totalPrice;
  }
}
  public function add($dish){
    $storeItem = [
      'item' => $dish,
      'price' => $dish->price,
      'qty' => 0,
    ];
    if($this->products){
       if(array_key_exists($dish->id,$this->products)){
        $storeItem = $this->products[$dish->id];
      }
    }
    $storeItem['qty']++;
    $storeItem['price'] = $dish->price * $storeItem['qty'];
    $this->products[$dish->id] = $storeItem;

    $this->totalQty ++;
    $this->totalPrice += $dish->price;
  }
  public function removeDish($id){
    $this->totalQty -= $this->products[$id]['qty'];
    $this->totalPrice -= $this->products[$id]['price'];
    unset($this->products[$id]);
  }
  public function removeOneDish($id){
    $this->totalQty --;
    $this->totalPrice -= $this->products[$id]['item']['price'];
    $this->products[$id]['qty'] --;
    $this->products[$id]['price'] -= $this->products[$id]['item']['price'];
    if($this->products[$id]['qty'] == 0){
      unset($this->products[$id]);
    }
}
}
