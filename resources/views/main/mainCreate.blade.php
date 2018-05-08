@extends('layouts.master')
@section('content')

                <h1 class="ftco-heading ftco-animate mb-3">CREATE MAIN</h1>

  <br>
  <form class=""  action="{{route('mainStore')}}" method="post">


    @csrf
    <a href="{{route('adminMains')}}">Atgal</a>

  <input value="{{old('title')}}" name="title" class="form-control form-control-lg {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" placeholder="title">
  @if ($errors->has('title'))
  <span class="invalid-feedback">
    <strong>{{$errors->first('title')}}</strong>
  </span>
@endif
    <br>

    <button type="submit" name="submit" class="btn btn-primary">Create</button>
    <br>
  </form>

  @endsection
