<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Cart;
use Illuminate\Support\Facades\Auth;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer('layout.nav', function ($view) {   // globalus parametras
        if(Auth::check()){
        $cart = Cart::where('user_id', Auth::user()->id)->first(); // first paima duomenys
        if(!$cart){
          $cart = new Cart();
          $cart->user_id = Auth::user()->id;
          $cart->save();
        }
        $items = $cart->cartItems;
        $totalItems = count($items);

        $view->with('totalItems', $totalItems);
      }
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
