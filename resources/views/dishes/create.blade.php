@extends('layouts.master')
@if (session('ZINUTE'))
  <div class="alert alert-success">
    {{session('ZINUTE')}}
  </div>

@endif
@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});backgroud-size: 50px 50px;" id="section-home">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
              <h1 class="ftco-heading ftco-animate mb-3">CREATE DISH</h1>

            </div>
          </div>
        </div>
      </section>

<br>
<form class=""  action="{{route('store')}}" method="post">
  @csrf
  <a href="{{route('dish')}}">Atgal</a>
  <input value="{{old('title')}}" name="title" class="form-control form-control-lg {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" placeholder="title">
  @if ($errors->has('title'))
  <span class="invalid-feedback">
    <strong>{{$errors->first('title')}}</strong>
  </span>
@endif
  <br>
  <input value="{{old('description')}}" name="description" class="form-control form-control-lg" type="text" placeholder="Description">
  @if ($errors->has('description'))
    <span class="invalid-feedback">
      <strong>{{$errors->first('description')}}</strong>
    </span>
  @endif
<br>
  <input value="{{old('image_url')}}" name="image_url" class="form-control form-control-lg" type="text" placeholder="Photo">
  @if ($errors->has('image_url'))
    <span class="invalid-feedback">
      <strong>{{$errors->first('image_url')}}</strong>
    </span>
  @endif
  <br><input value="{{old('price')}}" name="price" class="form-control form-control-lg" type="text" placeholder="Price">
  @if ($errors->has('price'))
    <span class="invalid-feedback">
      <strong>{{$errors->first('price')}}</strong>
    </span>
  @endif
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Main</label>
    <select class="form-control" name="main_id">
      @foreach ($mains as $key)
        <option value="{{$key->id}}" {{old('main_id') == $key->id ? 'selected' :  ''}} >{{$key->title}}</option>
        @if ($errors->has('main_id'))
          <span class="invalid-feedback">
            <strong>{{$errors->first('main_id')}}</strong>
          </span>
        @endif
      @endforeach

    </select>

  </div>
  <br><button type="submit" name="submit" class="btn btn-primary">Create</button>
  <br>
</form>

@endsection
