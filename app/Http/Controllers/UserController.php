<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Cart;
use Session;
use DB;



class UserController extends Controller
{
	public function register()
	{
		return view('front.register');
	}
    public function login()
    {
    	return view('front.login');
    }

    public function logreg(Request $a)
    {
    	$a->validate([   
       'name'=>'required',
       'email'=>'required|email|unique:users',
       'password'=>'required|min:8',
        ]);

    	$data = new User;
    	$data->name=$a->name;
    	$data->email=$a->email;
    	$data->password=Hash::make($a->password);
        $data->verification_code = sha1(time());
    	$data->save();
    	 if ($data != null) {
            MailController::sendSignupEmail($data->name, $data->email, $data->verification_code);
            return redirect()->back()->with(session()->flash('alert-danger','Your account has been created. Please check email for verification link'));

            //show a message
        }
        return redirect()->back()->with(session()->flash('alert-danger','Something Went Wrong '));
    }
    
      public function verifyUser(Request $request)
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $data = User::where(['verification_code'=>$verification_code])->first();
        if($data != null)
        {
            $data->is_verified = 1;
            $data->save();
            return redirect('front/login')->with(session()->flash('alert-danger','Your account is verified please Login'));
        }
        return redirect('front/login')->with(session()->flash('alert-danger','Invalid Verification code '));

    }

     public function samsung()
   {
    return view('front.forgotpassword');
   }


    

    public function loginsave(Request $a)
    {
    	// print_r($a->all());
        $session_id = Session::getId();
    	$data = $a->all();
    	if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])) {
           Cart::where('session_id',$session_id)->update(['useremail'=>$data['email']]);
    		return redirect('cart');
    	}
    	else{
    		return redirect()->back()->with('message','Invalid Username and password');
    	}
    }

   

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    
}
