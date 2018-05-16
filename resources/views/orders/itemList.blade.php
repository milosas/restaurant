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
    {{dd($orderItems)}}

    @foreach ($orderItems as $orderItem)
      <tr>
        <td>{{$orderItem->name}}</td>
        <td>{{$orderItem->price}}</td>
      </tr>
      {{dd($orderItem)}}
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
