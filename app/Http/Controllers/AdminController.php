<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}