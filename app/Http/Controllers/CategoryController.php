<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

class CategoryController extends Controller
{
    // public function addcategory()
    // {
    // 	return view('admin.addcategory');
    // }

     public function viewcategory()
    {
    	return view('admin.viewcategory');
    }

    public function create()
    {
    	return view('admin.addcategory');
    }

    public function save(Request $a)
    {
         $a->validate([
        'name' => 'required',
        'description' => 'required',
        'image'=> 'required',
    ]);
    	$file = $a->file('image');
    	$filename = 'image'. time().'.'.$a->image->extension();
    	$file->move("upload/",$filename);
    	$data = new category;
    	$data->name=$a->name;
    	$data->description=$a->description;
    	$data->image=$filename;
    	$data->save();
    	if($data)
    	{
    	return redirect('category/create')->with('message','Successfully Registered');
    	}
    }

    public function display()
    {
    	$data = category::all();
    	return view('admin.viewcategory',compact('data'));
    }

    public function view($id)
    {
    	// echo $id;
    	$data = category::find($id);
    	return view('admin.view',compact('data'));
    }

    public function edit($id)
    {
    	// echo $id; 
    	$data = category::find($id);
    	return view('admin.edit',compact('data'));

    }

    public function update(Request $a)
    {
    	 $data = category::find($a->id);
    	 $file = $a->file('image');
    	$filename = 'image'. time().'.'.$a->image->extension();
    	$file->move("upload/",$filename);
    	$data->name=$a->name;
    	$data->description=$a->description;
    	$data->image=$filename;
    	$data->save();
    	if($data)
    	{
    	return redirect('admin/display')->with('message','Successfully Updated');
    	}
    }

    public function delete($id)
    {
    	$data = category::find($id);
          $delete = $data->delete();
          if ($data) {
            return redirect('admin/display')->with('message','successfully Deleted');
        }
    }
}
