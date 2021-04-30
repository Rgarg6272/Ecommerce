
@extends('front/master')

@section('content')

@section('title','Cart Summary')

 @if(session('message'))

  <p class ="alert alert-success">
      {{session('message')}}
  </p>
  @endif
    

<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="#"><span class="menu-text">Home</span></a>
                    <ul class="offcanvas-submenu">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index-2.html">Home 2</a></li>
                        <li><a href="index-3.html">Home 3</a></li>
                        <li><a href="index-4.html">Home 4</a></li>
                    </ul>

                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="offcanvas-submenu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Grid</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                                <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                                <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop List</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-list.html">Shop List</a></li>
                                <li><a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop Single</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="single-product.html">Shop Single</a></li>
                                <li><a href="single-product-configurable.html">Shop Variable</a></li>
                                <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                <li><a href="single-product-group.html">Shop Group</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">other pages</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="about-us.html">About Page</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="login.html">Login &amp; Register Page</a></li>
                                <li><a href="myaccount.html">Account Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Pages</span></a>
                    <ul class="offcanvas-submenu">
                        <li><a href="about-us.html">About Page</a></li>
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="compare.html">Compare Page</a></li>
                        <li><a href="login.html">Login &amp; Register Page</a></li>
                        <li><a href="myaccount.html">Account Page</a></li>
                        <li><a href="wishlist.html">Wishlist Page</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="offcanvas-submenu">
                        <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="blog-grid-3-column.html">Blog Grid 3 column</a></li>
                                <li><a href="blog-grid-4-column.html">Blog Grid 4 column</a></li>
                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                </li>
                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog List</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog Single</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/4.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/5.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/6.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <a href="wishlist.html" class="btn theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mt-30">view
            wishlist</a>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/1.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/2.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/3.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">$144.00</span>
        </div>
        <a href="cart.html" class="btn theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mr-sm-2">view
            cart</a>
        <a href="checkout.html"
            class="btn theme-btn--dark1 btn--lg d-block d-sm-inline-block mt-4 mt-sm-0 rounded-5">checkout</a>
        <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
    </div>
</div>
<!-- OffCanvas Cart End -->


<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110" style="background-image: url(https://image.shutterstock.com/image-photo/fresh-healthy-food-vegetables-grocery-260nw-1175684464.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <img src="">
                    <h2 class="title text-dark text-capitalize">cart</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
                <div class="table-responsive">
                  
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">Product Image</th>
                                <th class="text-center" scope="col">Product Name</th>
                                <th class="text-center" scope="col">Qty</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($data as $cart)
                            <tr>
                                <input type="hidden" value="{{$cart->id}}" name="id">
                                <th class="text-center" scope="row">
                                    <img src="{{url('/upload/'.$cart->product_image)}}" alt="img">
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">{{$cart->product_name}}</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" name="product_quantity" step="1" value="{{$cart->product_quantity}}">
                                            <div class="button-group">

                                                <a href="{{url('cart/updatequantity/'.$cart->id.'/1')}}" class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></a>
                                                <a href="{{url('cart/updatequantity/'.$cart->id.'/-1')}}" class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></a>
                                                        <!--  <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button> -->
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        ₹ {{$cart->product_price*$cart->product_quantity}}
                                    </span></td>

                                <td class="text-center">
                                    <a href="{{url('cart/delete/')}}/{{$cart->id}}"> <span class="trash"><i class="fas fa-trash-alt"></i></span></a>
                                </td>
                            </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 mb-30 mt-5">
                <ul class="list-group cart-summary rounded-0">
                    <?php
                    $total_amount=0;
                    ?>
                    @foreach($a as $carts)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        
                        <ul class="items">
                            <li>{{$carts->product_name}}</li>
                             <li>Quantity</li>
                            
                        </ul>
                        <ul class="amount">
                            <li>₹ {{$carts->product_price}}</li>
                            <li>{{$carts->product_quantity}}</li>
                        </ul>
                    </li>
                    <?php
                    $total_amount=$total_amount+($carts->product_price*$carts->product_quantity);
                    ?>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total Price:</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <li>₹ <?php echo $total_amount ?></li>
                            <li>₹ 0</li>
                        </ul>
                    </li>
                    <li class="list-group-item text-center">
                        @if(Auth::check())
                        <a href="{{url('checkout')}}" class="btn theme-btn--warning1 btn--md">Checkout</a>
                        @else
                       <a href="{{url('front/login')}}" class="btn theme-btn--warning1 btn--md">Checkout</a>
                       @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->

@endsection




   