@extends('layout.master')
@section('content')
<table>
  <thead>
    <tr>
      <th>Pirkejas</th>
      <th>Kiekis</th>
      <th>Viso</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
      <tr>
      <td>{{$order->user_id}}</td>
      <td>{{count($order->orderItems)}}</td>
      <td>{{$order->total_paid}} $</td>
      </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th>Total Paid:</th>
      <td></td>
      <td>{{$totalPaid}} $</td>
    </tr>
  </tfoot>
</table>


@endsection
