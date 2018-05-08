<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['title','description','image_url','price','main_id'];
    public function toMain(){
      return $this->belongsto(Main::class, 'main_id');
    }
}
