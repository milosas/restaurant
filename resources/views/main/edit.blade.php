@extends('layouts.master')
@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
              <h1 class="ftco-heading ftco-animate mb-3">EDIT MAIN</h1>

            </div>
          </div>
        </div>
      </section>

  <br>
  <a href="{{route('adminMains')}}">Atgal</a>
  <form class=""  action="{{route('mainUpdate', $main)}}" method="post">

    @csrf
    @method('PUT')
    <input value="{{$main->title}}" name="title" class="form-control form-control-lg" type="text" placeholder="Name">
    <br>

    <br><button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
    <br>
    </form>
    @endsection
