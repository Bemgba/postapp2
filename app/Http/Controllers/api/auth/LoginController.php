<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\api\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login','register']]);
    // }
    //API login
    public function login(Request $request){
        //take credentials
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $creds=$request->only(['email', 'password']);

        //use the credentials to generate a token
   // $token = auth()->attempt($creds);
   if(!$token = auth()->attempt($creds)){
    return response()->json(['error'=>'Incorrect email/password'],401);

   }

    return response()->json(['token'=>$token]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
