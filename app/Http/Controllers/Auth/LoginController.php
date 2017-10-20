<?php

namespace Furbook\Http\Controllers\Auth;

use Furbook\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // Session::put('backUrl', URL::previous());
    }

    public function showLoginForm()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');    
    }

    // public function redirectTo()
    // {
    //     return Session::get('backUrl') ? Session::get('backUrl') :   $this->redirectTo;
    // }

    protected function authenticated(Request $request, $user)
    {
        if ( $user->isAdmin() ) {// do your margic here
            return redirect()->route('dashboard');
        }
        
         return redirect('/home');
    }
}
