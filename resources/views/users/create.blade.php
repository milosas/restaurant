@extends('layouts.master')
@if (session('ZINUTE'))
  <div class="alert alert-success">
    {{session('ZINUTE')}}
  </div>

@endif
@section('content')

  <h1 class="ftco-heading ftco-animate mb-3">CREATE USER</h1>

<br>
<form class=""  action="{{route('userStore')}}" method="post">


@csrf
<a href="{{route('usersList')}}">Atgal</a>

<input value="{{old('name')}}" name="name" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="name">
@if ($errors->has('name'))
<span class="invalid-feedback">
<strong>{{$errors->first('name')}}</strong>
</span>
@endif
<br>
<input value="{{old('surname')}}" name="surname" class="form-control form-control-lg {{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" placeholder="surname">
@if ($errors->has('surname'))
<span class="invalid-feedback">
<strong>{{$errors->first('surname')}}</strong>
</span>
@endif
<br>
<input value="{{old('country')}}" name="country" class="form-control form-control-lg {{ $errors->has('country') ? ' is-invalid' : '' }}" type="text" placeholder="country">
@if ($errors->has('country'))
<span class="invalid-feedback">
<strong>{{$errors->first('country')}}</strong>
</span>
@endif
<br>
<input value="{{old('email')}}" name="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="email">
@if ($errors->has('email'))
<span class="invalid-feedback">
<strong>{{$errors->first('email')}}</strong>
</span>
@endif
<br>
<input value="{{old('role')}}" name="role" class="form-control form-control-lg {{ $errors->has('role') ? ' is-invalid' : '' }}" type="text" placeholder="role">
@if ($errors->has('role'))
<span class="invalid-feedback">
<strong>{{$errors->first('role')}}</strong>
</span>
@endif
<br>
<input value="{{old('password')}}" name="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="password">
@if ($errors->has('password'))
<span class="invalid-feedback">
<strong>{{$errors->first('password')}}</strong>
</span>
@endif
<br>
<input value="{{old('date-of-birth')}}" name="date-of-birth" class="form-control form-control-lg {{ $errors->has('date-of-birth') ? ' is-invalid' : '' }}" type="date-of-birth" placeholder="date-of-birth">
@if ($errors->has('date-of-birth'))
<span class="invalid-feedback">
<strong>{{$errors->first('date-of-birth')}}</strong>
</span>
@endif
<br>
<input value="{{old('phone-number')}}" name="phone-number" class="form-control form-control-lg {{ $errors->has('phone-number') ? ' is-invalid' : '' }}" type="phone-number" placeholder="phone-number">
@if ($errors->has('phone-number'))
<span class="invalid-feedback">
<strong>{{$errors->first('phone-number')}}</strong>
</span>
@endif
<br>
<input value="{{old('city')}}" name="city" class="form-control form-control-lg {{ $errors->has('city') ? ' is-invalid' : '' }}" type="city" placeholder="city">
@if ($errors->has('city'))
<span class="invalid-feedback">
<strong>{{$errors->first('city')}}</strong>
</span>
@endif
<br>
<br>
<input value="{{old('country')}}" name="country" class="form-control form-control-lg {{ $errors->has('country') ? ' is-invalid' : '' }}" type="country" placeholder="country">
@if ($errors->has('country'))
<span class="invalid-feedback">
<strong>{{$errors->first('country')}}</strong>
</span>
@endif
<br>
<input value="{{old('zip-code')}}" name="zip-code" class="form-control form-control-lg {{ $errors->has('zip-code') ? ' is-invalid' : '' }}" type="zip-code" placeholder="zip-code">
@if ($errors->has('zip-code'))
<span class="invalid-feedback">
<strong>{{$errors->first('zip-code')}}</strong>
</span>
@endif
<br>
<button type="submit" name="submit" class="btn btn-primary">Create</button>
<br>
</form>
@endsection
