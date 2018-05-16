@extends('layout.master')
@section('content')

<table>
  <thead>
    <tr>
      <th>Preke</th>
      <th>Kaina</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($orderItems as $orderItem)
      <tr>
        <td>{{$orderItem->dish->name}}</td>
        <td>{{$orderItem->dish->price}}</td>
      </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
    <th>Viso:</th>
      <td>{{$totalPrice}}</td>
    </tr>
  </tfoot>
</table>
@endsection
