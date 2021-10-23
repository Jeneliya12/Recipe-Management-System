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
    <body class="img js-fullheight" style="background-image: url(assets/img/bg-img/bg5.jpg);">
      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
              <h2 class="heading-section">Delicious</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
              <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Have an account?</h3>
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    <p style="font-style: italic; color:black; font-size: 15px">{{ session('status') }}</p>
                  </div>
                  @endif
                <form method="POST" action="{{ route('register') }}" class="signin-form">
                  @csrf
                  <div class="form-group">
                    <input id="name" class="form-control" type="name" name="name" placeholder="Name" />
                      @if($errors->first('name'))
                      <div class="alert alert-success" role="alert">
                        <li>{{$errors->first('name')}}</li>
                      </div>
                      @endif
                  </div>
                  <div class="form-group">
                    <input id="phone" class="form-control" type="phone" name="phone" placeholder="Phone Number" />
                      @if($errors->first('phone'))
                      <div role="alert">
                        <li>{{$errors->first('phone')}}</li>
                      </div>
                      @endif
                  </div>
                  <div class="form-group">
                    <input id="email" class="form-control" type="email" name="email" placeholder="Email" />
                      @if($errors->first('email'))
                        <div class="alert alert-success" role="alert">
                          <li>{{$errors->first('email')}}</li>
                        </div>
                      @endif
                  </div>
                  <div class="form-group">
                    <input id="password-field" type="password" name="password" class="form-control" placeholder="Password"/>
                       @if($errors->first('password'))
                        <div class="alert alert-success" role="alert">
                          <li>{{$errors->first('password')}}</li>
                        </div>
                        @endif
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <input id="password-field" type="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation"/>
                      @if($errors->first('password_confirmation'))
                      <div class="alert alert-success" role="alert">
                        <li>{{$errors->first('password_confirmation')}}</li>
                      </div>
                      @endif
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary px-3">Register</button>
                  </div>
                  <button type="button" class="btn btn-primary"><a href="{{ route('login') }}">Already Registered?</a></button>
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

_