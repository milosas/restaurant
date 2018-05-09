<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\ShoppingCart;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request){
      $id = $request->input('id');
      $dish = Dish::findOrFail($id);
      $oldCart = (Session::has('cart')) ? Session::get('cart') : null;
      $shopingCart = new ShoppingCart($oldCart);
      $shopingCart->add($dish);

      $request->session()->put('cart',$shopingCart);

      return redirect()->back()->with('ZINUTE', 'PRODUKTAS IDETAS I KREPSELi');
    }
    public function index(){
      $cart = (Session::has('cart')) ? Session::get('cart') : null;
      // dd($cart);
      return view ('cart.index', compact('cart'));
    }
    public function destroy(Request $request){
      $id = $request->input('id');
      $oldCart = (Session::has('cart')) ? Session::get('cart') : null;
      $shopingCart = new ShoppingCart($oldCart);
      $shopingCart->removeDish($id);

      $request->session()->put('cart',$shopingCart);

      return redirect()->back()->with('ZINUTE', 'PRODUKTAS ISTRINTAS');
    }
    public function minusDish(Request $request){
      $id = $request->input('id');
      $oldCart = (Session::has('cart')) ? Session::get('cart') : null;
      $shopingCart = new ShoppingCart($oldCart);
      $shopingCart->removeOneDish($id);

      $request->session()->put('cart',$shopingCart);

      return redirect()->back()->with('ZINUTE', 'PRODUKTAS Isimtas');
     }
     public function cleanCart(Request $request){
       $request->session()->flush();
       return redirect()->back()->with('ZINUTE', 'PRODUKTAI ISTRINTI');

     }
}
