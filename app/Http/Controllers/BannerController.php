<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Banner;

class BannerController extends Controller
{
    public function create()
    {
    	return view('admin.banner.addbanner');
    }

    public function save(Request $a)
    {
        $a->validate([
        'title' => 'required',
        'url' => 'required',
        'image'=> 'required',
    ]);

    	$file = $a->file('image');
    	$filename = 'image'. time().'.'.$a->image->extension();
    	$file->move("upload/",$filename);
    	$data = new Banner;
    	$data->title=$a->title;
    	$data->url=$a->url;
    	$data->image=$filename;
    	$data->save();
    	if($data)
    	{
    	return redirect('banner/create')->with('message','Successfully Registered');
    	}
    }

    public function display()
    {
    	$data = Banner::all();
    	return view('admin.banner.viewbanner',compact('data'));
    }

    public function view($id)
    {
    	// echo $id;
    	$data = Banner::find($id);
    	return view('admin.banner.view',compact('data'));
    }

    public function edit($id)
    {
    	//echo $id;
    	$data = Banner::find($id);
    	return view('admin.banner.edit',compact('data'));
    }

    public function update(Request $a)
    {
    	$data = Banner::find($a->id);
    	 $file = $a->file('image');
    	$filename = 'image'. time().'.'.$a->image->extension();
    	$file->move("upload/",$filename);
    	$data->title=$a->title;
    	$data->url=$a->url;
    	$data->image=$filename;
    	$data->save();
    	if($data)
    	{
    	return redirect('banner/display')->with('message','Successfully Updated');
    	}
    }

    public function delete($id)
    {
    	$data = Banner::find($id);
          $delete = $data->delete();
          if ($data) {
            return redirect('banner/display')->with('message','successfully Deleted');
        }
    }
}
