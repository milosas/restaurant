@extends('layouts.master')
@section('content')

  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
              <h1 class="ftco-heading ftco-animate mb-3">EDIT USER</h1>

            </div>
          </div>
        </div>
      </section>

  <br>
  <a href="{{route('usersList')}}">Atgal</a>

  <form class=""  action="{{route('userUpdate', $user)}}" method="post">
    @csrf
    @method('PUT')

    <input value="{{($user->name)}}" name="name" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="name">
    @if ($errors->has('name'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->surname)}}" name="surname" class="form-control form-control-lg {{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" placeholder="surname">
    @if ($errors->has('surname'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('surname')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->country)}}" name="country" class="form-control form-control-lg {{ $errors->has('country') ? ' is-invalid' : '' }}" type="text" placeholder="country">
    @if ($errors->has('country'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('country')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->email)}}" name="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="email">
    @if ($errors->has('email'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('email')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->role)}}" name="role" class="form-control form-control-lg {{ $errors->has('role') ? ' is-invalid' : '' }}" type="text" placeholder="role">
    @if ($errors->has('role'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('role')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->password)}}" name="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="password">
    @if ($errors->has('password'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('password')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->date_of_birth)}}" name="date-of-birth" class="form-control form-control-lg {{ $errors->has('date-of-birth') ? ' is-invalid' : '' }}" type="date-of-birth" placeholder="date-of-birth">
    @if ($errors->has('date-of-birth'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('date-of-birth')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->phone_number)}}" name="phone-number" class="form-control form-control-lg {{ $errors->has('phone-number') ? ' is-invalid' : '' }}" type="phone-number" placeholder="phone-number">
    @if ($errors->has('phone-number'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('phone-number')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->city)}}" name="city" class="form-control form-control-lg {{ $errors->has('city') ? ' is-invalid' : '' }}" type="city" placeholder="city">
    @if ($errors->has('city'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('city')}}</strong>
    </span>
    @endif
    <br>
    <br>
    <input value="{{($user->country)}}" name="country" class="form-control form-control-lg {{ $errors->has('country') ? ' is-invalid' : '' }}" type="country" placeholder="country">
    @if ($errors->has('country'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('country')}}</strong>
    </span>
    @endif
    <br>
    <input value="{{($user->zip_code)}}" name="zip-code" class="form-control form-control-lg {{ $errors->has('zip-code') ? ' is-invalid' : '' }}" type="zip-code" placeholder="zip-code">
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
