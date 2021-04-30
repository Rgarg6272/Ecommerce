<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Session;

use\App\User;

use Auth;

use\App\Cart;



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
    	$data->save();
    	if($data)
    	{
    	return redirect('login/user')->with('message','Successfully Registered');
    	}
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
