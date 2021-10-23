<!doctype html>
<html lang="en">
  <head>
    <title>Delicious</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/style3.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    </head>
    <body class="img js-fullheight" style="background-image: url(assets/img/bg-img/breadcumb1.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Delicious</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Have an account?</h3>
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      <p style="font-style: italic; color:black; font-size: 15px">{{ session('status') }}</p>
                    </div>
                  @endif
                <form method="POST" action="{{ route('login') }}" class="signin-form">
                  @csrf
                    <div class="form-group">
                        <input id="email" class="form-control" type="email" name="email">
                          @if($errors->first('email'))
                          <div class="alert alert-success" role="alert">
                            <li>{{$errors->first('email')}}</li>
                          </div>
                          @endif
                    </div>
                    <div class="form-group">
                      <input id="password-field" type="password" name="password" class="form-control" placeholder="Password"/>
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        @if($errors->first('password'))
                          <div class="alert alert-success" role="alert">
                            <li>{{$errors->first('password')}}</li>
                          </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Log In</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary" name="remember">Remember Me
                              <input type="checkbox" checked>
                              <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="w-50 text-md-right">
                           @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="color: #fff">
                            Forgot Password
                          </a>
                          @endif
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary"><a href="{{ route('register') }}">Not Registered Yet?</a></button>
                  </form>
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/login/js/jquery.min.js"></script>
  <script src="assets/login/js/popper.js"></script>
  <script src="assets/login/js/bootstrap.min.js"></script>
  <script src="assets/login/js/main.js"></script>

    </body>
</html>

