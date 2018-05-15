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
      return view('carts.cart', compact('totalPrice', 'totalItems', 'items'));
    }
    public function destroy(CartItem $cartItem){
      $cartItem->delete();
      return redirect()->route('carts.cart')->with('ZINUTE','Sekmingai istrinta');
    }
}
