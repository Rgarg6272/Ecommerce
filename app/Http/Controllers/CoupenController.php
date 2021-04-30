<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Coupen;

class CoupenController extends Controller
{
    public function create()
    {
    	return view('admin.product.addcoupen');
    }

    public function save(Request $a)
    {
    	$data = new Coupen;
    	$data->coupen_code=$a->coupen_code;
    	$data->amount=$a->amount;
    	$data->amount_type=$a->amount_type;
    	$data->expiry_date=$a->expiry_date;
    	$data->save();
    	if($data)
    	{
    	return redirect('coupen/create')->with('message','Successfully Registered');
    	}
    }

    public function display()
    {
    	$data = Coupen::all();
    	return view('admin.product.viewcoupen',compact('data'));
    }

    public function view($id)
    {
    	//echo $id;
    	$data = Coupen::find($id);
    	return view('admin.product.coupenview',compact('data'));
    }

    public function edit($id)
    {
    	// echo $id; 
    	$data = Coupen::find($id);
    	return view('admin.product.coupenedit',compact('data'));
    }

    public function update(Request $a)
    {
    	$data = Coupen::find($a->id);
    	$data->coupen_code=$a->coupen_code;
    	$data->amount=$a->amount;
    	$data->amount_type=$a->amount_type;
    	$data->expiry_date=$a->expiry_date;
    	$data->save();
    	if($data)
    	{
    	return redirect('coupen/display')->with('message','Successfully Updated');
    	}
    }

    public function delete($id)
    {
    	$data = Coupen::find($id);
          $delete = $data->delete();
          if ($data) {
            return redirect('coupen/display')->with('message','successfully Deleted');
        }
    }
}
