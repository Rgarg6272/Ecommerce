<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;

use App\product;

use App\Cart;

use Session;

use App\order;

use App\orderproduct;

use DB;

use Auth;

class FrontController extends Controller
{
    public function index()
    {
    	$banner=Banner::all();
    	$product=product::all();
    	return view('front.index',compact('banner','product'));
    }

    public function productdetail($id)
    {
    	$product = product::find($id);
    	return view('front.productdetail',compact('product'));
    }

    public function addtocart(Request $a)
    {
        // print_r($a->all());

          $session_id = Session::getId();
      // print_r($session_id);
      // die;
          $cart = new Cart;

          if (Auth::check()) {
            $useremail=Auth::user()->email;
            $cart->useremail=$useremail;
          }
          $cart->product_id=$a->product_id;
          $cart->product_name=$a->product_name;
          $cart->product_price=$a->product_price;
          $cart->product_image=$a->product_image;
          $cart->product_quantity=$a->product_quantity;
          $cart->session_id=$session_id;

          $cart->save();
          if ($cart) {
              return redirect('cart');
          }
    }

    public function cart()
    {
        if (Auth::check()){
          $useremail= Auth::User()->email; 
          $data= Cart::where('useremail',$useremail)->get();
           $a= Cart::where('useremail',$useremail)->get();
           return view('front.cart',compact('data','a'));
         }
        else{
        $session_id=Session::getId();
        $data=Cart::where(['session_id'=>$session_id])->get();
        // $data = Cart::all();
        $a=Cart::where(['session_id'=>$session_id])->get();
        return view('front.cart',compact('data','a'));
        }

       
    }

    public function updatequantity($id=null,$product_quantity=null)
    {
       DB::table('carts')->where('id',$id)->increment('product_quantity',$product_quantity);
       return redirect('cart');
    }

   public function checkout()
   {
    if (Auth::check()) {
      $useremail = Auth::User()->email;
      $a=Cart::where('useremail',$useremail)->get();
      $data = $a;
       return view('front.checkout',compact('a','data'));
    }
    else
    {
      $session_id = Session::getId();
      $a = Cart::where(['session_id'=>$session_id])->get();
       return view('front.checkout',compact('a'));
    }
   
   }

   public function place_order(Request $a)
   {
    // print_r($a->all());
    // die;
    $data = new order;
    $data->useremail=$a->email;
    $data->name=$a->name;
    $data->city=$a->city;
    $data->state=$a->state;
    $data->country=$a->country;
    $data->address=$a->address;
    $data->pincode=$a->pincode;
    $data->phone=$a->phone;
    $data->payment_method=$a->payment_method;
    $data->grand_total=$a->grand_total;

    $data->save();

    $order_id=DB::getPdo('')->lastinsertID();
    // print_r($order_id);
    // die;

    $cart_product = DB::table('carts')->where(['useremail'=>$a->email])->get();
   // print_r($cart_product);
    foreach($cart_product as $c)
    $cart = new orderproduct;
    $cart->useremail=$a->email;
    $cart->order_id=$order_id;
    $cart->product_id=$c->product_id;
    $cart->product_name=$c->product_name;
    $cart->product_quantity=$c->product_quantity;
    $cart->product_price=$c->product_price;
    $cart->product_image=$c->product_image;
    $cart->product_size=$c->product_size;
    // echo "<pre>";
    // print_r($data);
    // die;
    $cart->save();

    if($cart){
     
      return redirect('thanks')->with('message','Thanks your order suuccessfully');
    }

   }

   public function orderconfirm()
   {
    $useremail = Auth::user()->email;
    DB::table('carts')->where('useremail',$useremail)->delete();
    return view('front.thanks');
   }

   public function contact()
   {
    return view('front.contact');
   }

   public function myaccount()
   {
     {
    if (Auth::check()) {
      $useremail = Auth::User()->email;
      //$order=order::where('useremail',$useremail)->get();
      $data = DB::table('orders')->join('orderproducts','orders.id','orderproducts.order_id')->get();
      //$a=orderproduct::where('useremail',$useremail)->get();
      // $data = $a;
       return view('front.myaccount',compact('data'));
    }
    else
    {
      $session_id = Session::getId();
      $a = orderproduct::where(['session_id'=>$session_id])->get();
       return view('front.myaccount',compact('a'));
    }
   
   }
   }

   public function editaddress()
   {
    return view('front.editaddress');
   }

   public function changePassword(Request $request)
   {
    $input = $request->all();
    $user = User::find(auth()->user()->id);


    if(!Hash::check($input['current_password'], $user->password)){
        dd('Return error with current passowrd is not match.');
        return view('front.myaccount');

    }
    else{
        dd('Write here your update password code');

    }
}
    

    public function deletecart($id)
    {
      $data = Cart::find($id);
      $delete = $data->delete();
      if($delete){
      return redirect('cart')->with('message','Product Successfully Deleted');
   } 
}
}