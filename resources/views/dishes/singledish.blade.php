@extends('layout.master')


@section('content')
  <div class="col-sm-4 md-4" style="width: 18rem;">
    <img class="card-img-top" src="{{$dish->image_url}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$dish->title}}</h5>
      <p class="card-text">Description: {{$dish->description}}</p>
      <p class="card-text">Main: {{$dish->main_id}}</p>
      <p class="card-text">Price: {{$dish->price}} $</p>

      <a class="btn btn-warning" href="{{route('dish.create')}}">Create</a>

      <form class=""  action="{{route('dish.delete', $dish->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" name="button">Trinti</button>
      </form>
    </div>
    <a class="btn btn-warning" href="{{route('dishes.edit', $dish)}}">UPDATE</a>

  </div>
@endsection
