@extends('layout.master')
@section('content')
  <h1>Jusu uzsakymas</h1>
  @foreach ($orders as $order)
    <h3>Data: {{$order->created_at}}</h3>
    {{-- {{dd($order)}} --}}
    @foreach ($order->cart->products as $asd)
      {{-- {{dd($asd)}} --}}
        <li>Preke: {{$asd['item']['title']}}</li>
        <li>Kaina: {{$asd['item']['price']}}</li>
        <li>Kiekis: {{$asd['qty']}}</li>
        <li>Visa kaina: {{$asd['price']}}</li>
------
  @endforeach
  <h4>Viso prekiu: {{$order->cart->totalQty}}</h4>

  <h4>Viso: {{$order->cart->totalPrice}} $</h4>
@endforeach
@endsection
