<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\order;
use App\orderproduct;
use DB;

class OrderController extends Controller
{
    public function order()
    {
    	 $data = DB::table('orders')->join('orderproducts','orders.id','orderproducts.order_id')->get();
    	 return view('admin.order.orderdisplay',compact('data'));
    }
}
