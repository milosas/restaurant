@extends('layouts.master')
@section('content')
<!-- Modal -->
   <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-body">
           <div class="row">
             <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
             <div class="col-lg-8 p-5">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <small>CLOSE </small><span aria-hidden="true">&times;</span>
               </button>
               <h1 class="mb-4">Reserve A Table</h1>
               <form action="{{route('submitReservation')}}" method="post">
                 @csrf
                 <div class="row">
                   <div class="col-md-6 form-group">
                     <label for="name">First Name</label>
                     <input type="text" value="{{ Auth::user() ? Auth::user()->name :old('name')}}" class="form-control" name="name" id="m_fname">
                   @if ($errors->has('name'))
                       <span class="invalid-feedback">
                           <strong>{{ $errors->first('name') }}</strong>
                       </span>
                   @endif
                 </div>
                   <div class="col-md-6 form-group">
                     <label for="surname">Last Name</label>
                     <input type="text" value="{{ Auth::user() ? Auth::user()->surname :old('surname')}}" name="surname"  class="form-control" id="m_lname">
                 @if ($errors->has('surname'))
                     <span class="invalid-feedback">
                         <strong>{{ $errors->first('surname') }}</strong>
                     </span>
                 @endif
               </div>
               </div>
                 <div class="row">
                   <div class="col-md-12 form-group">
                     <label for="email">Email</label>
                     <input type="email" value="{{ Auth::user() ? Auth::user()->email :old('email')}}"  name="email"  class="form-control" id="m_email">
                   </div>
                 @if ($errors->has('email'))
                     <span class="invalid-feedback">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
               </div>
                 <div class="row">
                   <div class="col-md-6 form-group">
                     <label for="number_of_people">How Many People</label>
                     <select name="number_of_people" id="number_of_people" class="form-control">
                       <option value="1">1 People</option>
                       <option value="2">2 People</option>
                       <option value="3">3 People</option>
                       <option value="4+">4+ People</option>
                     </select>
                   @if ($errors->has('number_of_people'))
                       <span class="invalid-feedback">
                           <strong>{{ $errors->first('number_of_people') }}</strong>
                       </span>
                   @endif
                 </div>
                   <div class="col-md-6 form-group">
                     <label for="phone_number">Phone</label>
                     <input type="text" value="{{ Auth::user() ? Auth::user()->phone_number :old('phone_number')}}" name="phone_number" class="form-control" id="phone_number">
                   </div>
                   @if ($errors->has('phone_number'))
                       <span class="invalid-feedback">
                           <strong>{{ $errors->first('phone_number') }}</strong>
                       </span>
                   @endif
                 </div>

                 <div class="row">
                   <div class="col-md-6 form-group">
                     <label for="date_reservation" >Date</label>
                     <input name="date_reservation" type="date" class="form-control" id="date_reservation">
                   @if ($errors->has('date_reservation'))
                       <span class="invalid-feedback">
                           <strong>{{ $errors->first('date_reservation') }}</strong>
                       </span>
                   @endif
                 </div>
                   <div class="col-md-6 form-group">
                     <label for="time_of_reservation">Time</label>
                     <input name="time_of_reservation" type="text" class="form-control" id="time_of_reservation">
                   @if ($errors->has('time_of_reservation'))
                       <span class="invalid-feedback">
                           <strong>{{ $errors->first('time_of_reservation') }}</strong>
                       </span>
                   @endif
                 </div>
                 </div>

                 <div class="row">
                   <div class="col-md-12 form-group">
                     <label for="message">Message</label>
                     <textarea name="message" class="form-control" id="message" cols="30" rows="7"></textarea>
                   @if ($errors->has('message'))
                       <span class="invalid-feedback">
                           <strong>{{ $errors->first('message') }}</strong>
                       </span>
                   @endif
                 </div>
                 </div>

                 <div class="row">
                   <div class="col-md-12 form-group">
                     <button type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">RESERVE TABLE</button>
                   </div>
                 </div>

               </form>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>
@endsection
   <!-- END Modal -->
