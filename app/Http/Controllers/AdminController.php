<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin');
    }

    public function login()
    {
    	return view('admin.login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/admin/login');
    }
}
