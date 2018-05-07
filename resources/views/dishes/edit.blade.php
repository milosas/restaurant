@extends('layout.master')
@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
              <h1 class="ftco-heading ftco-animate mb-3">EDIT DISH</h1>

            </div>
          </div>
        </div>
      </section>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class=""  action="{{route('dish.update', $dish->id)}}" method="post">
@method('PUT')
@csrf
<input value="{{$dish->title}}" name="title" class="form-control form-control-lg" type="text" placeholder="Name">
<br>
<input value="{{$dish->description}}" name="description" class="form-control form-control-lg" type="text" placeholder="Description">
<br>
<input value="{{$dish->image_url}}" name="image_url" class="form-control form-control-lg" type="text" placeholder="Photo">
<br><input value="{{$dish->price}}" name="price" class="form-control form-control-lg" type="text" placeholder="Price">
<br><input value="{{$dish->main_id}}" name="main_id" class="form-control form-control-lg" type="text" placeholder="Quantity">
<br>
<div class="form-group">
  <label for="exampleFormControlSelect1">Companies</label>
  <select class="form-control" name="main_id">
    @foreach ($main as $key)
      <option value="{{$key->id}}" {{$dish->main_id == $key->id ? 'selected' :  ''}} > {{$key->title}} </option>
    @endforeach

  </select>
</div>
<br><button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
<br>
</form>
@endsection
