
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control{{ $errors->has('Name') ? ' is-invalid' : '' }}" name="Name" value="{{ old('Name') }}" required autofocus>

                                @if ($errors->has('Name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="Surname" type="text" class="form-control{{ $errors->has('Surname') ? ' is-invalid' : '' }}" name="Surname" value="{{ old('Surname') }}" required autofocus>

                                @if ($errors->has('Surname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date-of-birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date-of-birth" type="text" class="form-control{{ $errors->has('date-of-birth') ? ' is-invalid' : '' }}" name="Surname" value="{{ old('date-of-birth') }}" required autofocus>

                                @if ($errors->has('date-of-birth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date-of-birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="Address" type="text" class="form-control{{ $errors->has('Address') ? ' is-invalid' : '' }}" name="Address" value="{{ old('Address') }}" required autofocus>

                                @if ($errors->has('Address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone-number" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                            <div class="col-md-6">
                                <input id="phone-number" type="text" class="form-control{{ $errors->has('phone-number') ? ' is-invalid' : '' }}" name="City" value="{{ old('phone-number') }}" required autofocus>

                                @if ($errors->has('phone-number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone-number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="dropdown">
                            <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Country
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                                @if ($errors->has('Country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="City" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                          <div class="col-md-6">
                            <input id="City" type="text" class="form-control{{ $errors->has('City') ? ' is-invalid' : '' }}" name="City" value="{{ old('City') }}" required autofocus>

                            @if ($errors->has('City'))
                              <span class="invalid-feedback">
                                <strong>{{ $errors->first('City') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="zip-code" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>

                            <div class="col-md-6">
                                <input id="zip-code" type="text" class="form-control{{ $errors->has('zip-code') ? ' is-invalid' : '' }}" name="zip-code" value="{{ old('zip-code') }}" required autofocus>

                                @if ($errors->has('zip-code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip-code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
