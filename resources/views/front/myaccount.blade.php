
@extends('front/master')

@section('content')

@section('title','My Account')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">my account</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">my account</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">my account</h3>
            </div>
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>

                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                        Orders</a>

                    <a href="#download" data-toggle="tab"><i class="fas fa-cloud-download-alt"></i>
                        Download</a>

                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                        Payment
                        Method</a>

                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                        address</a>

                    <a href="#account-info" data-toggle="tab" class=""><i class="fa fa-user"></i> Account
                        Details</a>

                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade active show" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Dashboard</h3>

                            <div class="welcome mb-20">
                                <p>Hello, <strong>{{Auth::user()->name}}</strong>
                            </div>

                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                recent orders, manage your shipping and billing addresses and edit your
                                password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Orders</h3>

                            <div class="myaccount-table table-responsive text-center">

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Product Name</th>
                                            <th>Date & Time</th>
                                            <th>Image</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     @foreach($data as $cart)
                                    <tbody>
                                        <tr>
                                            <td>{{$cart->id}}</td>
                                            <td>{{$cart->product_name}}</td>
                                            <td>{{$cart->created_at}}</td>
                                            <td><img src="{{ url('/upload/'.$cart->product_image)}}" style="height: 100px; width: 100px"></td>
                                            <td>₹ {{$cart->product_price}}</td>
                                            <td><a href="shopping-cart.html" class="btn btn-info">View</a>
                                            	 <a href="shopping-cart.html" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Downloads</h3>

                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                     @foreach($data as $cart)
                                    <tbody>
                                        <tr>
                                            <td>{{$cart->product_name}}</td>
                                            <td>{{$cart->created_at}}</td>
                                            <td>Yes</td>
                                            <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">

                            <h3>Payment Method</h3>
                              <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Method</th>
                                        </tr>
                                    </thead>
                                     @foreach($data as $payment)
                                    <tbody>
                                        <tr>
                                            <td>{{$payment->id}}</td>
                                            <td>{{$payment->payment_method}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Billing Address</h3>
<!-- 
                            <address>
                                <p><strong></strong></p>
                                <p>1355 Market St, Suite 900 <br>
                                    San Francisco, CA 94103</p>
                                <p>Mobile: (123) 456-7890</p>
                            </address> -->
                               <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>city</th>
                                            <th>state</th>
                                            <th>country</th>
                                            <th>Pincode</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     @foreach($data as $address)
                                    <tbody>
                                        <tr>
                                            <td>{{$address->id}}</td>
                                            <td>{{$address->name}}</td>
                                            <td>{{$address->address}}</td>
                                              <td>{{$address->city}}</td>
                                                <td>{{$address->state}}</td>
                                                  <td>{{$address->country}}</td>
                                                    <td>{{$address->pincode}}</td>
                                                      <td>{{$address->phone}}</td>
                                            <td><a href="{{url('editaddress')}}" class="btn btn-info">Edit Address</a></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>

                           <!--  <a href="#" class="ht-btn black-btn d-inline-block edit-address-btn"><i
                                    class="fa fa-edit"></i>Edit Address</a> -->
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Account Details</h3>

                            <div class="account-details-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="first-name" placeholder="Name" name="name" value="{{Auth::user()->name}}"type="text">
                                        </div>
                                      <!--   <div class="col-12 mb-30">
                                            <input id="display-name" placeholder="Display Name" type="text">
                                        </div> -->

                                        <div class="col-12 mb-30">
                                            <input id="email" name="email" value="{{Auth::user()->email}}" placeholder="Email Address" type="email">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <h4>Password change</h4>
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="current-pwd" value="if (Hash::needsRehash($hashed)) {  $hashed = Hash::make('plain-text');
                                            }" placeholder="Current Password" type="password">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="new-pwd" placeholder="New Password" type="password">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                        </div>

                                        <div class="col-12">
                                            <button class="btn theme-btn--dark1 btn--md">Save
                                                Changes</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>
<!-- product tab end -->

@endsection