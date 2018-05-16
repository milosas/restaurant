@extends('layout.master')
@section('content')
  <h1>Jusu uzsakymas</h1>
  @foreach ($orders as $order)
    <h3>Data: {{$order->created_at}}</h3>
    {{-- {{dd($order)}} --}}
      {{-- {{dd($asd)}} --}}
        <li><a href="{{route('orders.itemList', $order->id)}}"> Uzsakymas: {{$order->order_id}}</a></li>
        <li>Kaina: {{$order->total_paid}}</li>
        {{-- <li>Kiekis: {{$order}}</li> --}}
------
  {{-- <h4>Viso prekiu: {{$order->cart->totalQty}}</h4> --}}

  {{-- <h4>Viso: {{$order->cart->totalPrice}} $</h4> --}}
@endforeach


@endsection
