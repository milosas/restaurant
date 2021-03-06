<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\CartItem;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function addItem($dishId){
      $cart = Cart::where('user_id', Auth::user()->id)->first();
      if(!$cart){
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
      }
      $cartItem = new CartItem();
      $cartItem->cart_id = $cart->id;
      $cartItem->dish_id = $dishId;
      $cartItem->save();

      return redirect()->back();
    }
    public function addItemAjax($dishId){
      $cart = Cart::where('user_id', Auth::user()->id)->first();
      if(!$cart){
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
      }
      $cartItem = new CartItem();
      $cartItem->cart_id = $cart->id;
      $cartItem->dish_id = $dishId;
      $cartItem->save();

      $items = $cart->cartItems;
      return response()->json(['items'=>$items]);

    }
    public function showCart(){
      $cart = Cart::where('user_id', Auth::user()->id)->first(); // first paima duomenys
      if(!$cart){
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
      }
      $items = $cart->cartItems;
      $totalPrice = 0;
      foreach ($items as $item) {
        $totalPrice += $item->dish->price;
      }
      $totalItems = count($items);
      return view('carts.cart', compact('totalPrice', 'totalItems', 'items', 'cart'));
    }
    public function destroy(CartItem $cartItem){
      $cartItem->delete();
      return redirect()->route('carts.cart')->with('ZINUTE','Sekmingai istrinta');
    }
    public function cleanCart(Cart $cart){
      if(count($cart->cartItems)>0){
      $cart->delete();
    return redirect()->route('carts.cart')->with('ZINUTE','Cart  istrinta');
  }
  return redirect()->route('carts.cart')->with('ZINUTE','Cart  TUSCIAS - Negalima isstrinti');
  }
}
