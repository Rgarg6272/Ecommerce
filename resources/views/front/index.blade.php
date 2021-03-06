@extends('front/master')
@section('title','Grocery Store')
@section('content')

<!-- main slider start -->
<section class="bg-light position-relative">
    <div class="main-slider dots-style theme1">
        @foreach($banner as $banner)
       <div class="slider-item bg-img" style="background: url('{{ url('/upload/'.$banner->image) }}'); background-repeat: no-repeat; background-position: center bottom; background-size: cover";>
            <div class="container">
                <div class="row align-items-center slider-height2">
                    <div class="col-12">
                        <div class="slider-content">
                            <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInDown">
                               {{$banner->title}}</p>
                          <!--   <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInLeft"
                                data-delay-in="1">Lunchbox Snack</h4>
                            <h2 class="sub-title text-white animated" data-animation-in="fadeInRight" data-delay-in="2">
                                Kidsâ€™ll Love !</h2> -->
                            <a href="shop-grid-4-column.html"
                                class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- slick-progress -->
    <div class="slick-progress">
        <span></span>
    </div>
    <!-- slick-progress end-->
</section>
<!-- main slider end -->
<!-- popular-section  start -->
<div class="popular-section theme1 bg-white pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">Popular Categories</h2>
                    <p class="text mt-10">Some of our popular categories include electronics</p>
                </div>
            </div>
            <div class="col-12">
                <div class="popular-slider-init dots-style">
                    <div class="slider-item">
                        <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                            <div class="card-body">
                                <a href="#" class="thumb-naile"> <img class="d-block mx-auto"
                                        src="assets/img/popular/7.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Fresh Vegetables <span>(16)</span></a>
                                </h3>
                                <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                            <div class="card-body">
                                <a href="#" class="thumb-naile"> <img class="d-block mx-auto"
                                        src="assets/img/popular/8.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Fresh Fruit <span>(17)</span></a>
                                </h3>
                                <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                            <div class="card-body">
                                <a href="#" class="thumb-naile"> <img class="d-block mx-auto"
                                        src="assets/img/popular/9.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Milk, Butter & Eggs <span>(18)</span></a>
                                </h3>
                                <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                            <div class="card-body">
                                <a href="#" class="thumb-naile"> <img class="d-block mx-auto"
                                        src="assets/img/popular/10.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Fresh Food <span>(19)</span></a>
                                </h3>
                                <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                            <div class="card-body">
                                <a href="#" class="thumb-naile"> <img class="d-block mx-auto"
                                        src="assets/img/popular/11.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Oranges & Citrus Fruit <span>(20)</span></a>
                                </h3>
                                <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                            <div class="card-body">
                                <a href="#" class="thumb-naile"> <img class="d-block mx-auto"
                                        src="assets/img/popular/7.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Onions & Leeks <span>(21)</span></a>
                                </h3>
                                <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular-section  end -->
<br>

<section class="catagory-slider theme1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="https://img.dmart.in/images/rwd/banners/curated/14apr21-curated-mask.jpg">
            </div>
            
        </div>
    </div>
</section>
<br>
<!-- common banner  start -->
<div class="common-banner bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="banner-thumb">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="{{url('Front/assets/img/buy1.jpg')}}" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
            <div class="col-md-6 mb-30">
                <div class="banner-thumb mb-30">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="Front/assets/img/banner/16.jpg" alt="banner-thumb-naile">
                    </a>
                </div>
                <div class="banner-thumb">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="Front/assets/img/banner/17.jpg" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common banner  end -->
<!-- product tab start -->
<section class="product-tab theme3 bg-white pt-50 pb-80">
    <div class="container">
        <div class="product-tab-nav mb-35">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <h2 class="title text-dark text-capitalize">Our products</h2>
                        <p class="text mt-10">Add our products to weekly line up</p>
                    </div>
                </div>
                <div class="col-12">
                    <nav class="product-tab-menu">
                        
                         <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">

                            @foreach ($categories as $key=>$category)
                            <li class="nav-item">
                                <a  class="nav-link {{ $key==0 ? 'active' : '' }}" id="pills-home-tab" data-toggle="pill" role="tab" aria-controls="pills-home" href="#pills-category_{{$category->id}}" aria-selected="true"   
                                    >{{$category->name}}</a>
                            </li>
                            
                            @endforeach
                        </ul>
                    
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                  <!-- first tab-pane -->
                    @foreach ($categories as $key=>$category )
                    <div class="tab-pane fade show {{ $key==0 ? 'active' : ''}}" 
                       id="pills-category_{{$category->id}}"  role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="product-slider-init slick-nav">           
                            @php
                            $c_products=DB::table('products')->where('cat_id',$category->id)->get();
                            @endphp
                            @foreach ($c_products as $products)
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                 <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span> 
                                                <a href="{{url('productdetail/'.$products->id)}}">
                                                    <img src="{{ url('/upload/'.$products->product_image) }}" 
                                                    style="height: 250px; width: 250px; "        alt="thumbnail">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="{{'productdetail/'.$products->id}}">
                                                        {{$products->product_name}}</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><span>Rs. </span> {{$products->product_price}}</h6>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                         <button class="pro-btn" data-toggle="modal"
                                                                data-target="#add-to-cart"><i
                                                                    class="icon-basket"></i></button>
                                                    </div>
                                                     <div class="d-flex align-items-center justify-content-between">
                                                        <p class="product-price"><span>Quantity</span> {{$products->product_quantity}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- slider-item end -->
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<!-- staic media start -->
<section class="static-media-section pb-80 bg-white">
    <div class="container">
        <div class="static-media-wrap theme-bg rounded-5">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="Front/assets/img/icon/2.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Free Shipping</h4>
                            <p class="text text-white">On all orders over Rs. 750.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="Front/assets/img/icon/3.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Free Returns</h4>
                            <p class="text text-white">Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="Front/assets/img/icon/4.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">100% Payment Secure</h4>
                            <p class="text text-white">Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="Front/assets/img/icon/5.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Support 24/7</h4>
                            <p class="text text-white">Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- staic media end -->
<!-- catagory slider section start -->

<section class="catagory-slider theme1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 mb-50">
                <div class="section-title mb-30">
                    <h2 class="title text-dark text-capitalize">Featured products </h2>
                </div>
                <!-- featured  slider start-->
                <div class="featured-init2 slick-nav">
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/1.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/1.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Brixton Patrol All
                                                        Terrain Anorak Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/2.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Solid
                                                        Sleeve Puffer Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/3.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/3.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Balance Fresh
                                                        Foam LAZR v1 Sport</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/4.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/4.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Couture Juicy
                                                        Quilted Terry Track Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/5.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Brixton Patrol All
                                                        Terrain Anorak Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/6.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Solid
                                                        Sleeve Puffer Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/7.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Balance Fresh
                                                        Foam LAZR v1 Sport</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/8.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/8.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Couture Juicy
                                                        Quilted Terry Track Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                </div>
                <!-- featured  slider end-->
            </div>
            <div class="col-12 col-md-8 mx-auto col-lg-4 mb-50">
                <div class="banner-thumb">
                    <a href="shop-grid-4-column.html"
                        class="zoom-in d-block overflow-hidden position-relative zIndex-3">
                        <img src="Front/assets/img/banner/18.jpg" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-50">
                <div class="section-title mb-30">
                    <h2 class="title text-dark text-capitalize">Recommended Products</h2>
                </div>
                <!-- featured  slider start-->
                <div class="featured-init2 slick-nav">
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="assets/img/category/5.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Brixton Patrol All
                                                        Terrain Anorak Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/6.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Solid
                                                        Sleeve Puffer Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/7.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Balance Fresh
                                                        Foam LAZR v1 Sport</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/8.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/8.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Couture Juicy
                                                        Quilted Terry Track Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/1.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/1.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Brixton Patrol All
                                                        Terrain Anorak Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/2.jpg" alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Solid
                                                        Sleeve Puffer Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/3.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/3.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Balance Fresh
                                                        Foam LAZR v1 Sport</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="Front/assets/img/category/4.jpg" alt="thumbnail">
                                                <img class="second-img" src="Front/assets/img/category/4.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Couture Juicy
                                                        Quilted Terry Track Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                </div>
                <!-- featured  slider end-->
            </div>
        </div>
    </div>
</section>
<!-- catagory slider section end -->
<!-- brand slider start -->
<div class="brand-slider-section theme1 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-init border-top py-35 slick-nav-brand">
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/customPage/b01eee88-e6bc-410e-993c-dedd012cf04b/2834b8a1-bea1-4ed3-a3bc-ec53bc5e0551/897473bf-6ea5-47c3-8371-e5bfb57b91fa/Green_Amul_480x360_25thApr21.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/customPage/b01eee88-e6bc-410e-993c-dedd012cf04b/2834b8a1-bea1-4ed3-a3bc-ec53bc5e0551/897473bf-6ea5-47c3-8371-e5bfb57b91fa/Green_Dettol_480x360_25thApr21.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/customPage/b01eee88-e6bc-410e-993c-dedd012cf04b/2834b8a1-bea1-4ed3-a3bc-ec53bc5e0551/897473bf-6ea5-47c3-8371-e5bfb57b91fa/Green_Cocacola_480x360_25thApr21.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/customPage/b01eee88-e6bc-410e-993c-dedd012cf04b/2834b8a1-bea1-4ed3-a3bc-ec53bc5e0551/897473bf-6ea5-47c3-8371-e5bfb57b91fa/Green_Loreal_480x360_25thApr21.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/customPage/b01eee88-e6bc-410e-993c-dedd012cf04b/2834b8a1-bea1-4ed3-a3bc-ec53bc5e0551/897473bf-6ea5-47c3-8371-e5bfb57b91fa/Green_IndiaGate_480x360_25thApr21.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/uploads/p/s/40005430_1-amul-real-ice-cream-rajbhog.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="https://www.bigbasket.com/media/uploads/p/s/274148_11-fortune-sun-lite-sunflower-refined-oil.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand slider end -->

@endsection