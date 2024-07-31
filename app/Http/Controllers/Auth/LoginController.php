<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('guest')->except('logout');
    }
//this will provide the login form
public function index(){

    return view('auth.login');
   }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }



    // authenticate the login user. make sure the credentials are correct
    public function store(Request $request){
        //dd($request->remember);
            $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required',
           ]);
           /* if the password and/or email is wrong, deny access*/
           if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status', 'invalid login details');
        }
        /*if password and email are correct, grant access to darshboard */
           return Redirect()->route('Darshboard')->with('status', 'Login Successful');
      // dd('ok');

    }
}
