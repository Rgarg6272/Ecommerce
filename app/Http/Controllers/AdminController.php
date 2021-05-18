<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function login()
    {
    	return view('admin.login');
    }

    public function dashboard1()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/admin/login');
    }
}
