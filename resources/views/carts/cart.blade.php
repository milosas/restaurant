@extends('layout.master')
@section('content')
  @if (session('ZINUTE'))
    <div class="alert alert-success">
      {{session('ZINUTE')}}
    </div>

  @endif
<table>
    <tr><th>Dish name: </th>
<th></th>
  <th>Price</th>
</tr>
<a href="{{route('checkout')}}" class="btn btn-success">Checkout</a>
    @foreach ($items as $item)
      <tr>
      <td> {{$item->dish->title}}</td>
<td></td>
      <td>{{$item->dish->price}}</td>
      <td>
        <form class="" action="{{route('carts.dish.delete',$item)}}" method="post">
          @method('DELETE')
            @csrf
          <button type="submit"  class="btn btn-danger">REMOVE Dish</a>
          </form>
      </td>
    </tr>
    @endforeach
    <tr>
      <td>Viso: {{$totalItems}} vnt</td>
      <td></td>
    <td>Total: {{$totalPrice}}  $</td>
    <td></td>

  </tr>
  <form class=""  action="{{route('deleteajaxcart', $cart)}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">CLEAN CART</button>
  </form>
  </form>
</table>

@endsection
