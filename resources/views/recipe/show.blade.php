<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious Recipe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
<!--Recipe Container------>
<div class="receipe-content-area">
  <div class="container">
    <div class="row">
        <div class="col-8">
            <div class="receipe-headline my-5">
                <span>{{$recipes['recipedate']}}</span>
                <h2>{{$recipes['title']}}</h2>
                <div class="receipe-duration">
                    <h6>Prep: {{$recipes['time']}} mins</h6>
                    <h6>Cook: {{$recipes['cooktime']}} mins</h6>
                    <h6>Yields: {{$recipes['yield']}} Servings</h6>
                    <h6><a href="/authorinfo" style="color:black">Author Name: {{$recipes['name']}}</a></h6>
                    @include('paypal')
                </div>
            </div>
        </div>
        <div class="col-4">
          <div class="box">
            <img style= "width: 100%; height: 20vw; object-fit: cover;" class="card-img-top" src="../assets/images/{{$recipes->img}}" alt="Card image">
          </div>
        </div>
    </div>

    <div class="row">
      <div class="col-8">
        <!-- Single Preparation Step -->
        <div class="single-preparation-step d-flex">
            <h4>01. </h4>
            <p>{{$recipes['description']}}</p>
        </div>
        <!-- Single Preparation Step -->
        <div class="single-preparation-step d-flex">
            <h4>02. </h4>
            <p>{{$recipes['description2']}}</p>
        </div>
        <!-- Single Preparation Step -->
        <div class="single-preparation-step d-flex">
            <h4>03. </h4>
            <p>{{$recipes['description3']}}</p>
        </div>
        <!-- Single Preparation Step -->
        <div class="single-preparation-step d-flex">
            <h4>04. </h4>
            <p>{{$recipes['description4']}}</p>
        </div>
      </div>

      <!-- Ingredients -->
      <div class="col-4">
        <div class="ingredients">
            <h4>Ingredients</h4>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">{{$recipes['ingredients']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{$recipes['ingredients1']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">{{$recipes['ingredients2']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4">{{$recipes['ingredients3']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck5">
                <label class="custom-control-label" for="customCheck5">{{$recipes['ingredients4']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" for="customCheck6">{{$recipes['ingredients5']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck7">
                <label class="custom-control-label" for="customCheck7">{{$recipes['ingredients6']}}</label>
            </div>

            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck8">
                <label class="custom-control-label" for="customCheck8">{{$recipes['ingredients7']}}</label>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="section-heading text-left">
                <h3>Leave a comment</h3>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-12">               
        <form action="/save-comment" method="post" role="form">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    Recent Comments</h3>
                <span class="label label-info">
                </span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="{{asset('../assets/images/'. $recipes['img'])}}" style="width:80px; height:80px" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="">
                                      {{$recipes['title']}}</a>
                                    <div class="mic-info">
                                        By: <a href="#"></a> on {{$recipes['comments_date']}}
                                    </div>
                                </div>
                                <div class="comment-text">
                                  {{$recipes['comments']}}
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
             <!--    <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-refresh"></span> More</a> -->
            </div>
        </div>
    </div>
</div>
</div>

<!-- ##### Follow Us Instagram Area Start ##### -->
  <section id="gallery" class="gallery">
    <div class="container-fluid">
      <div class="section-title">
        <h2><span>Follow us on instagram</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-2 col-md-4">
          <div class="gallery-item">
            <a href="../assets/img/bg-img/insta6.jpg" class="venobox" data-gall="gallery-item">
              <img src="../assets/img/bg-img/insta6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div> 
        <div class="col-lg-2 col-md-4">
          <div class="gallery-item">
            <a href="../assets/img/bg-img/insta5.jpg" class="venobox" data-gall="gallery-item">
              <img src="../assets/img/bg-img/insta5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div> 
        <div class="col-lg-2 col-md-4">
          <div class="gallery-item">
            <a href="../assets/img/bg-img/insta4.jpg" class="venobox" data-gall="gallery-item">
              <img src="../assets/img/bg-img/insta4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div> 
        <div class="col-lg-2 col-md-4">
          <div class="gallery-item">
            <a href="../assets/img/bg-img/insta3.jpg" class="venobox" data-gall="gallery-item">
              <img src="../assets/img/bg-img/insta3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div> 
        <div class="col-lg-2 col-md-4">
          <div class="gallery-item">
            <a href="../assets/img/bg-img/insta2.jpg" class="venobox" data-gall="gallery-item">
              <img src="../assets/img/bg-img/insta2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div> 
        <div class="col-lg-2 col-md-4">
          <div class="gallery-item">
            <a href="../assets/img/bg-img/insta1.jpg" class="venobox" data-gall="gallery-item">
              <img src="../assets/img/bg-img/insta1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div> 
      </div>  
    </div>
  </section>
  <!-- ##### Follow Us Instagram Area End ##### -->
  <!--End Recipe Container--> 

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Recipe</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Aatish Shah</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
   <!--AlertNotification-->
  <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    @if (session('status'))
      // alert('{{session('status')}}');
      swal({
          title: '{{session('status')}}',
          // text: "You clicked the button!",
          icon: '{{session('statuscode')}}',
          button: "OK",
          });
    @endif
  </script>
</body>
</html>