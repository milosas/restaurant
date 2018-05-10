<?php

namespace App\Http\Controllers;
use Countries;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
      return view ('/admin.index');
    }
}
