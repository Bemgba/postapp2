<?php

namespace App\Http\Controllers\api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


//any contoller that extends this controller will USE JWT auth
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
      //seperate jwt auth AND web auth, both controlled by laravel auth methods
        auth()->setDefaultDriver('api');
    }
}
