<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DarshboardController extends Controller
{
    
    //

    public function index(){
      
      //dd(auth()->user()->posts);
        return view('Darshboard');
    }
}
