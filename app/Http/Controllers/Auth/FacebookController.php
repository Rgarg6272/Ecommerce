<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Socialite;
use Auth;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class FacebookController extends Controller
{
    //Facebook login
    use AuthenticatesUsers;
    /* Where to redirect users after login. 
	** @var string 
	*/
    protected $redirectTo = '/';
    /* Create a new controller instance. 
	* * @return void 
	*/
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback() {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
             return redirect('/');
            } else {
                $newUser = User::create(['name' => $user->name, 'email' => $user->email, 'facebook_id' => $user->id]);
                Auth::login($newUser);
                return redirect()->back();
            }
        }
        catch(Exception $e) {
            return redirect('auth/facebook');
        }
    }
}
