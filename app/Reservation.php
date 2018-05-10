<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $fillable = ['name','surname','email','number_of_people','phone_number','date_reservation','time_of_reservation','message'];

}
