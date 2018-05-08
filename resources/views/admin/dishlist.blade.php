@extends('layouts.master')
@section('content')

<table class="table">
  <tr>
  <th class="thead-dark">Title</th>
  <th class="thead-dark">Description</th>
  <th class="thead-dark">Price</th>
  <th class="thead-dark">Main</th>
  <th><a class="btn btn-warning" href="{{route('dish.create')}}">Create</a></th>
  <th></th>
</tr>
@foreach ($dishes as $dish)
<tr>
<td>{{$dish->title}}</td>
<td>{{$dish->description}}</td>
<td>{{$dish->price}}</td>
<td>
@foreach ($mains as $main)
@if ($main->id == $dish->main_id)
  {{$main->title}}
@endif
@endforeach
</td>
<td><a class="btn btn-success" href="{{route('admindishedit', $dish)}}">EDIT</a></td>
<td><form class="" action="{{route('dish.delete',$dish->id)}}" method="post">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger">DELETE</button>

</form></td>
</tr>
@endforeach
</table>
@endsection
