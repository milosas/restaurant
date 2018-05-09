@extends('layout.master')
@section('content')
@if (session('ZINUTE'))
  <div class="alert alert-success">
    {{session('ZINUTE')}}
  </div>

@endif
<br>
<br>
<div class="row">

@foreach ($dish as $ey)

<div class="col-sm-4 md-4" style="width: 18rem;">
  <img class="card-img-top" src="{{$ey->image_url}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$ey->title}}</h5>
    <p class="card-text">{{$ey->description}}</p>
    <a href="{{route('singledish',$ey->id)}}" class="btn btn-primary">More Details</a>

    <form class="" action="{{route('addToCart')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$ey->id}}">
    <button type="submit"  class="btn btn-danger">ADD TO CART</a>
    </form>

  </div>
</div>
@endforeach
</div>


    {{-- <tr>


  <td>{{$ey->title}}</td>
  <td>{{$ey->description}}</td>
  <td>{{$ey->image_url}}</td>
  <td>{{$ey->price}}</td>
  <td>{{$ey->main_id}}</td>

    </tr>


  </table> --}}

@endsection
