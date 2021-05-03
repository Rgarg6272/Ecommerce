<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



//Route::get('addcategory','CategoryController@addcategory');

//Front Controller

Route::get('/','FrontController@index');

Route::get('productdetail/{id}','FrontController@productdetail');

Route::get('contact','FrontController@contact');

//Cart controller
Route::post('addtocart','FrontController@addtocart');

Route::get('cart','FrontController@cart');

Route::get('deletecart/{id}','FrontController@deletecart');

Route::get('cart/updatequantity/{id}/{product_quantity}','FrontController@updatequantity');

Route::get('checkout','FrontController@checkout');


//place order
Route::post('place_order','FrontController@place_order');

//my account

Route::get('myaccount','FrontController@myaccount');

Route::get('editaddress','FrontController@editaddress');
// order completed 

Route::get('thanks','FrontController@orderconfirm');
//User Controller

Route::get('login/user','UserController@login');

Route::get('register/user','UserController@register');

Route::post('register/user1','UserController@logreg');  //ye wala route mene registration k liye hai

Route::post('loginsave','UserController@loginsave');

Route::get('front/logout','UserController@logout');




//Category Controller
Route::get('category/create','CategoryController@create');

Route::post('category/save','CategoryController@save');

Route::get('admin/display','CategoryController@display');

Route::get('display/view/{id}','CategoryController@view');

Route::get('display/edit/{id}','CategoryController@edit');

Route::post('update','CategoryController@update');

Route::get('display/delete/{id}','CategoryController@delete');

//Product Controller

// Route::get('addproduct','ProductController@product');

Route::get('product/create','ProductController@create');

Route::post('product/save','ProductController@save');

Route::get('product/display','ProductController@display');

Route::get('product/display/view/{id}','ProductController@view');

Route::get('product/display/edit1/{id}','ProductController@edit');

Route::post('product/update','ProductController@update');

Route::get('product/display/delete/{id}','ProductController@delete');

//Coupen Controller

Route::get('coupen/create','CoupenController@create');

Route::post('coupen/save','CoupenController@save');

Route::get('coupen/display','CoupenController@display');

Route::get('coupen/display/view/{id}','CoupenController@view');

Route::get('coupen/display/edit/{id}','CoupenController@edit');

Route::post('coupen/update','CoupenController@update');

Route::get('coupen/display/delete/{id}','CoupenController@delete');

//Banner Controller

Route::get('banner/create','BannerController@create');

Route::post('banner/saved','BannerController@save');

Route::get('banner/display','BannerController@display');

Route::get('banner/display/view/{id}','BannerController@view');

Route::get('banner/display/edit/{id}','BannerController@edit');

Route::post('banner/update','BannerController@update');

Route::get('banner/display/delete/{id}','BannerController@delete');

//Ordre display in Admin Routes

Route::get('orders','OrderController@order');

//Admin Controller

Route::get('admin/login','AdminController@login');

Route::get('logout','AdminController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin/dashboard','AdminController@dashboard');
