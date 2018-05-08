@extends('layouts.master')
@section('content')

  <table class="table">
  <tr>
      <th class="thead-dark">Id</th>
      <th class="thead-dark">Title</th>
      <th><a class="btn btn-warning" href="{{route('mainCreate')}}">Create</a></th>
  </tr>
  @foreach ($mains as $main)
  <tr>
  <td>{{$main->title}}</td>

  <td><a class="btn btn-success" href="{{route('mainEdit', $main)}}">EDIT</a></td>
  <td><form class="" action="{{route('mainDelete',$main->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE</button>

  </form></td>
  </tr>
  @endforeach
  </table>
  @endsection
