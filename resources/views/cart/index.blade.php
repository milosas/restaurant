@extends('layout.master')
@section('content')
  @if (session('ZINUTE'))
    <div class="alert alert-success">
      {{session('ZINUTE')}}
    </div>

  @endif
  @if(isset($cart) && $cart->totalQty > 0)
  <table class="table">
    <tr>
    <th >Title</th>
    <th >Quantity</th>
    <th></th>
    <th >Price</th>
    <th></th>
    <th >Dish price</th>
    <th></th>

    {{-- <th><a class="btn btn-warning" href="{{route('dish.create')}}">Create</a></th> --}}
  </tr>
  @foreach ($cart->products as $dish)
  <tr>
  <td>{{$dish['item']['title']}}</td>
  <td>{{$dish['qty']}}</td>
  <td></td>
  <td>{{$dish['item']['price']}}</td>
  <td></td>
  <td>{{$dish['price']}}</td>
  <td>
    <form class="" action="{{route('addToCart')}}" method="post">
      @csrf

    <input type="hidden" name="id" value="{{$dish['item']['id']}}">
    <button type="submit"  class="btn btn-warning"> + </a>
    </form>
  </td>    <td>
      <form class="" action="{{route('cart.dish.minus')}}" method="post">
        @csrf

      <input type="hidden" name="id" value="{{$dish['item']['id']}}">
      <button type="submit"  class="btn btn-warning"> - </a>
      </form> </td>

      <td>
        <form class="" action="{{route('cart.dish.delete')}}" method="post">
            @csrf
          <input type="hidden" name="id" value="{{$dish['item']['id']}}">
          <button type="submit"  class="btn btn-danger">REMOVE Dish</a>
          </form>
</td>


  </tr>
  @endforeach
  <tr>
    <th class="table-primary">TOTAL DISHES:
    {{count($cart->products)}}</th>
    <th class="table-secondary">TOTAL Quantity:
    {{$cart->totalQty}}</th>
    <td></td>
    <td></td>
    <th class="table-info">TOTAL Price:</th>
    <th  class="table-info">{{$cart->totalPrice}}</th>
    <td></td>
    <td></td>
    <th>
      <a href="{{route('cleanCart')}}" class="btn btn-danger">REMOVE BAG</a>
  </th>
  </tr>
  <td></td><td></td><td></td><td></td><td></td>
  <td>
    <form class="" action="{{route('cart.dish.delete')}}" method="post">
        @csrf
      <input type="hidden" name="id" value="{{$dish['item']['id']}}">
      <button type="submit"  class="btn btn-success">Checkout</a>
      </form>
</td>
  </table>
@else{
  <h3 style="text-align:center">YOUR CART IS EMPTY</h3>
  <center><img  src="https://media.tenor.com/images/8625203536ded181ad5bd76f48baa187/tenor.gif"  height="400" width="400" alt="empty"></center>

@endif
@endsection
