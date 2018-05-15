@extends('layout.master')
@section('content')
<table>
    <tr><th>Dish name: </th>
<th></th>
  <th>Price</th>
</tr>

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
      <td></td>
      <td>Viso: {{$totalItems}} vnt</td>
      <td></td>
    <td>Total: {{$totalPrice}}  $</td>
  </tr>
</table>

@endsection
