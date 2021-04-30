@extends('front/master')
@section('title','Login Page')
@section('content')

<style>
      @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap');
/**{
    padding: 0;
    margin: 0;
    outline: none;
}*/

body{
    font-family: 'Roboto', sans-serif !important;
    height:100vh;
    color: #3a3e42 !important;
    background-color: #d7e4dcad;
}
.AppForm .AppFormLeft h1{
    font-size: 35px;
}
.AppForm .AppFormLeft input:focus{
    border-color: #ced4da;
}
.AppForm .AppFormLeft input::placeholder{
   font-size: 15px;
}
.AppForm .AppFormLeft i{
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.AppForm .AppFormLeft a{
    color: #3a3e42 ;
}
.AppForm .AppFormLeft button{
    background: linear-gradient(45deg,#8D334C,#CF6964);
    border-radius: 15px;
}
.AppForm .AppFormLeft p span{
  color: #007bff;
}
.AppForm .AppFormRight{
   /* background-image: url('https://i.ibb.co/tDLqQtj/bg.jpg');*/
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuj0GO-eRkJ8ox8tNWtLLcR2EWHXeaiN-BnQ&usqp=CAU');
    height: 450px;
    background-size: cover;
    background-position: center;
}
.AppForm .AppFormRight:after{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg,#8D334C,#CF6964);
    opacity: 0.5;
}
.AppForm .AppFormRight h2{
    z-index: 1;
}
.AppForm .AppFormRight h2::after{
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: #fff;
  bottom: 0;
  left:50%;
  transform: translateX(-50%);
}
.AppForm .AppFormRight p{
    z-index: 1;
}
</style>
  </head>
  <body>
       <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            @if(session('message'))
              <p class ="alert alert-success">
             {{session('message')}}
             </p>
           @endif
            <form class="col-md-9" method="post" action="{{url('loginsave')}}">
                @csrf
                <div class="AppForm shadow-lg">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="AppFormLeft">

                                <h1>Login Here...!</h1>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" name="email" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="username"
                                        placeholder="E-mail">
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="password"
                                        placeholder="Password" name="password">
                                        <i class="fa fa-key"></i>

                                </div>
                                <div class="row  mt-4 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                    Login
                                </button>


                                <p class="text-center mt-5">
                                    Don't have an account?
                                    <a href="{{url('register/user')}}">
                                    <span>
                                        Create your account
                                    </span>
                                    </a>

                                </p>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4">Welcome</h2>
                                <p>Lorem ipsuing elit. Molomos totam est voluptatum i omos totam est voluptatum i ure sit consectetur ill</p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
  </body>
</html>

@endsection