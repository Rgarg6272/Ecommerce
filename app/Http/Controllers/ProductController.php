<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

use App\category;

use DB;

class ProductController extends Controller
{
    // public function product()
    // {
    // 	return view('admin.product.addproduct');
    // } 

    public function create()
    {
    	$cat = category::all();
    	return view('admin.product.addproduct',compact('cat'));
        // echo "<pre>";
        // print_r($cat);

    }

    public function save(Request $a)
    {
      

    	$file = $a->file('product_image');
    	$filename = 'product_image'. time().'.'.$a->product_image->extension();
    	$file->move("upload/",$filename);
    	$data = new product;
        $data->cat_id=$a->cat_id;
    	$data->product_name=$a->product_name;
    	$data->product_code=$a->product_code;
    	$data->product_size=$a->product_size;
    	$data->product_description=$a->product_description;
    	$data->product_price=$a->product_price;
    	$data->product_quantity=$a->product_quantity;
    	$data->product_image=$filename;
    	$data->save();
    	$data=DB::table('categories')->where(['status'=>1])->get();
        
    	if($data)
    	{
    	return redirect('product/create')->with('message','Successfully Registered');
    	}
    }

    public function display()
    {
        $data = product::all();
        return view('admin.product.viewproduct',compact('data'));
    }

    public function view($id)
    {
        //echo $id;
        $data = product::find($id);
        return view('admin.product.view',compact('data'));
    }

    public function edit($id)
    {
        //echo $id;
        $cat = category::all();
        $data = product::find($id);
        return view('admin.product.edit1',compact('data','cat'));
    }

    public function update(Request $a)
    {
        // $file = $a->file('product_image');
        // $filename = 'product_image'. time().'.'.$a->product_image->extension();
        // $file->move("upload/",$filename);
        // $data->cat_id=$a->cat_id;
        // $data->product_name=$a->product_name;
        // $data->product_code=$a->product_code;
        // $data->product_size=$a->product_size;
        // $data->product_description=$a->product_description;
        // $data->product_price=$a->product_price;
        // $data->product_quantity=$a->product_quantity;
        // $data->product_image=$filename;
        // $data->save();
        // $data=DB::table('categories')->where(['status'=>1])->get();
        // if($data)
        // {
        // return redirect('product/display')->with('message','Successfully updated');
        // }
        // echo '<pre>';
      // print_r($a->all());
      // die;
    if($a->hasFile('image'))
    { 
      $data = Product::find($a->id);
      $data->cat_id=$a->cat_id;
      $data->product_name=$a->product_name;
      $data->product_code=$a->product_code;
      $data->product_size=$a->product_description;
       ///Image
      $file=$a->file('product_image');     
      // dd($file);
      // exit();
      $filename = 'product_image'. time().'.'.$a->product_image->extension();
      // dd($filename);
      // exit(); 
     $file->move("upload/",$filename); 
     $data->product_image=$filename;

     $data->product_price=$a->product_price;
     $data->product_quantity=$a->product_quantity;

  //    print('<pre>');
  //     print_r($a->all());
      
     $data->save();
        if($data)
        {
            return redirect('product/display')->with('message','Data Updated');
        }
    }
        else{
        $data= Product::find($a->id);
        //$data1=Product::pluck('name','id');
        $data->cat_id=$a->cat_id;
        $data->product_name=$a->product_name;
        $data->product_code=$a->product_code;
        $data->product_size=$a->product_description;
        $data->product_price=$a->product_price;
        $data->product_quantity=$a->product_quantity;
        $data->save();
          if($data)
        {
            return redirect('product/display')->with('message','Data Updated');
        }
      }
    }

    public function delete($id)
    {
        $data = product::find($id);
          $delete = $data->delete();
          if ($data) {
            return redirect('product/display')->with('message','successfully Deleted');
        }
    }
}
