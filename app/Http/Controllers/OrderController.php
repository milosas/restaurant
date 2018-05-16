<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use App\OrderItem;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
       $this->middleware('auth');
     }
     public function checkout(){

       $cart = Cart::where('user_id', Auth::user()->id)->first();
       $suma = 0;

       foreach ($cart->cartItems as $cartItem) {
         $suma += $cartItem->dish->price;
       }
       $order = new Order;
       $order->total_paid = $suma;
       $order->user_id = $cart->user_id;
       $order->save();

       foreach ($cart->cartItems as $cartItem) {
       $orderItem = new OrderItem;
       $orderItem->order_id = $order->id;
       $orderItem->dish_id = $cartItem->dish->id;
       $orderItem->save();
     }
     $cart->delete();
     return redirect()->route('carts.cart')->with('ZINUTE', 'SEKMINGAI UZSAKYTA');
     }
    public function index()
    {
        $orders = Order::all();
        return view ('orders.orderList', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
