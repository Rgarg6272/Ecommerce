<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Login || Page</title>
  </head>
  <body>
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LoginForm</title>
    <style>
      * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(to right bottom, rgb(120, 216, 245), rgb(255, 0, 234));
    height: 100vh;
}

.container {
    height: 600px;
    width: 350px;
    box-shadow: 0px 15px 30px rgb(22, 22, 22);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    overflow: hidden;
    border-radius: 20px;
    background: linear-gradient(to right top, purple, rgb(187, 7, 142));
}

.circleTop {
    height: 300px;
    width: 300px;
    border-radius: 50%;
    background-color: white;
    box-shadow: inset 0px 15px 25px rgb(104, 102, 102), 0px 5px 15px rgb(114, 113, 113);
    margin-top: -120px;
    margin-left: -50px;
}

.circleBottom {
    height: 300px;
    width: 500px;
    border-radius: 50%;
    background-color: white;
    margin-top: 200px;
    margin-left: 200px;
    box-shadow: inset 0px 5px 15px rgb(90, 89, 89), 0px 5px 15px rgb(77, 75, 75);
}

.content {
    height: 400px;
    width: 250px;
    float: right;
    margin-top: -70px;
    margin-right: 0px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    background: linear-gradient(to right top, rgb(236, 23, 190), rgb(4, 238, 187));
    box-shadow: 0px 5px 15px rgb(22, 21, 21);
    color: white;
    font-family: 'Raleway', sans-serif;
}

.content h1 {
    margin-left: 10px;
    padding: 20px;
    color: white;
    padding-bottom: 40px;
    font-weight: lighter;
    margin-top: 25px;
}

.form {
    border-radius: 5px;
    border: none;
    margin-top: 5px;
    padding: 8px;
    margin-bottom: 10px;
    background-color: rgba(221, 235, 240, 0.4);
    color: rgb(145, 32, 145);
}

.form:focus {
    outline: none;
    /* border: 1px solid rgb(0, 225, 255); */
}

.form-group {
    margin-left: 30px;
}

p {
    margin-left: 30px;
    margin-top: 10px;
    font-size: small;
}

p a {
    color: white;
    text-decoration: none;
}

button {
    margin-left: 50px;
    margin-top: 50px;
    padding: 10px 60px;
    border: none;
    border-radius: 20px;
    background-color: white;
    box-shadow: 0px 5px 10px grey;
}

button a {
    text-decoration: none;
    color: purple;
    font-size: large;
}

.icons {
    margin-left: 90px;
    margin-top: 30px;
}

.icons i {
    padding-right: 10px;
    font-size: larger;
    transition: 0.3s;
}

.icons a {
    text-decoration: none;
    color: white;
}

.icons i:hover {
    transform: scale(1.04);
    color: rgb(219, 116, 214);
}
    </style>
</head>

<body>
    <div class="container">

        <div class="circleTop"></div>
        <div class="content">
            <h1>Login Here...!</h1>
            <form method="POST" action="{{ route('login') }}">
                 @csrf
            <div class="form-group">
                <label for="">{{ __('E-Mail Address') }}</label>
                <br>
                <input type="email" class="form" name="email" id="email" aria-describedby="helpId" placeholder="" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label for="">{{ __('Password') }}</label>
                <br>
                <input type="password" class="form" name="password" id="password" placeholder=""  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <p>
                <a href="index.html"> Forgot Password?</a>
            </p>
          <!--   <div class="icons">
                <a href="http://www.google-plus.com"><i class="fa fa-google-plus-official" aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a href="http://www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a>
            </div> -->
            <button type="submit" style="position: relative; top: -25px;"> {{ __('Login') }}</button>
             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
        </form>

        </div>
        <div class="circleBottom"></div>

    </div>
</body>

</html>
  </body>
</html>