@extends('layouts.master')
@section('content')

  <table class="table">
    <tr>
    <th class="thead-dark">Name</th>
    <th class="thead-dark">Surname</th>
    <th class="thead-dark">Email</th>
    <th class="thead-dark">People</th>
    <th class="thead-dark">Phone</th>
    <th class="thead-dark">Date</th>
    <th class="thead-dark">Time</th>
    <th class="thead-dark">Message</th>

    <tr>

    </tr>
<th></th>
  </tr>
  @foreach ($reservations as $reservation)
  <tr>
  <td>{{$reservation->name}}</td>
  <td>{{$reservation->surname}}</td>
  <td>{{$reservation->email}}</td>
  <td>{{$reservation->number_of_people}}</td>
  <td>{{$reservation->phone_number}}</td>
  <td>{{$reservation->date_reservation}}</td>
  <td>{{$reservation->time_of_reservation}}</td>
  <td>{{$reservation->message}}</td>
<td>

  <form class="" action="{{route('reservation.delete',$reservation->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE</button>
  </form></td>
  <td><a class="btn btn-success" href="{{route('reservation.reservationForm', $reservation)}}">EDIT</a></td>
<th></th>
@endforeach
</tr>
<tr>

  <th><a class="btn btn-warning" href="{{route('reservation.newReservation')}}">Create Reservation</a></th>
</tr>
  </table>



@endsection
