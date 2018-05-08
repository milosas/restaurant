@extends('layouts.master')
@section('content')
  <table class="table">
    <tr>
    <th class="thead-dark">Name</th>
    <th class="thead-dark">Surname</th>
    <th class="thead-dark">Country</th>
    <th class="thead-dark">Role</th>

    <th><a class="btn btn-warning" href="{{route('userCreate')}}">Create</a></th>
    <th></th>
  </tr>
  @foreach ($users as $user)
  <tr>
  <td>{{$user->name}}</td>
  <td>{{$user->surname}}</td>
  <td>{{$user->country}}</td>
  <td>{{$user->role}}</td>


  <td><a class="btn btn-success" href="{{route('usersEdit', $user)}}">EDIT</a></td>
  <td><form class="" action="{{route('userDelete',$user)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE</button>

  </form></td>
  </tr>
  @endforeach
  </table>
@endsection
