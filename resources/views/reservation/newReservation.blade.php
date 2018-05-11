@extends('layouts.master')
@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
              <h1 class="ftco-heading ftco-animate mb-3">NEW RESERVATION</h1>

            </div>
          </div>
        </div>
      </section>

  <br>
  <a href="{{route('reservation.index')}}">Atgal</a>

  <form class=""  action="{{route('submitReservation')}}" method="post">
    @csrf

    <input value="{{old('name')}}" name="name" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="name">
    @if ($errors->has('name'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="surname" class="form-control form-control-lg {{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" placeholder="surname">
    @if ($errors->has('surname'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('surname')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="email">
    @if ($errors->has('email'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('email')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="number_of_people" class="form-control form-control-lg {{ $errors->has('number_of_people') ? ' is-invalid' : '' }}" type="text" placeholder="number_of_people">
    @if ($errors->has('number_of_people'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('number_of_people')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="phone_number" class="form-control form-control-lg {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" type="text" placeholder="phone_number">
    @if ($errors->has('phone_number'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('phone_number')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="date_reservation" class="form-control form-control-lg {{ $errors->has('date_reservation') ? ' is-invalid' : '' }}" type="date_reservation" placeholder="date_reservation">
    @if ($errors->has('date_reservation'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('date_reservation')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="time_of_reservation" class="form-control form-control-lg {{ $errors->has('time_of_reservation') ? ' is-invalid' : '' }}" type="time_of_reservation" placeholder="DATE">
    @if ($errors->has('time_of_reservation'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('time_of_reservation')}}</strong>
    </span>
    @endif
    <br>
    <input value="" name="message" class="form-control form-control-lg {{ $errors->has('message') ? ' is-invalid' : '' }}" type="message" placeholder="message">
    @if ($errors->has('message'))
    <span class="invalid-feedback">
    <strong>{{$errors->first('message')}}</strong>
    </span>
    @endif

    <button type="submit" name="submit" class="btn btn-primary">Create</button>
    <br>
    </form>

@endsection
