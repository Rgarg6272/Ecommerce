@extends('front/master')

@section('title','Register Page')
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
     text-align: center;
  padding-top: 2rem;
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
/*login with google*/
.login-with-google-btn {
  transition: background-color .3s, box-shadow .3s;
    
  padding: 12px 16px 12px 42px;
  border: none;
  border-radius: 3px;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
  
  color: #757575;
  font-size: 14px;
  font-weight: 500;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
  
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
  background-color: white;
  background-repeat: no-repeat;
  background-position: 12px 11px;
  
  &:hover {
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25);
  }
  
  &:active {
    background-color: #eeeeee;
  }
  
  &:focus {
    outline: none;
    box-shadow: 
      0 -1px 0 rgba(0, 0, 0, .04),
      0 2px 4px rgba(0, 0, 0, .25),
      0 0 0 3px #c8dafc;
  }
  
  &:disabled {
    filter: grayscale(100%);
    background-color: #ebebeb;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
    cursor: not-allowed;
  }
}


</style>
  </head>
  <body>
       <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
         
            <form class="col-md-9" method="post" action="{{url('register/user1')}}">
                  @csrf
                <div class="AppForm shadow-lg">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="AppFormLeft">

                                <h1>Welcome Here...</h1><br>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" name="name" value="" required autocomplete="name" autofocus class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none @error('name') is-invalid @enderror" id="name"
                                        placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <i class="fa fa-user-o"></i>
                                </div>
                                 <div class="form-group position-relative mb-4">
                                    <input type="email" name="email" value="" required autocomplete="email" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none @error('email') is-invalid @enderror" id="email"
                                        placeholder="E-mail">
                                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                          @enderror
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" name="password" required autocomplete="new-password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password">
                                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                          @enderror
                                        <i class="fa fa-key"></i>
                                </div>
                                 <div class="form-group position-relative mb-4"> 
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>
                                <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase " type="submit">
                                   {{ __('Register') }}
                                </button>
                                
                              

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4">New Here?</h2>
                                <p>Sign Up and Explore Great Grocery Here...</p>
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