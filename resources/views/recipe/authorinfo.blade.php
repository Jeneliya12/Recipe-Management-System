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
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Message to recipe author</span><h2>
        </div>
      </div>

      <div class="container">

        <div class="info-wrap">
          <div class="row">
            <div class="col-6">
              <img style="height:500px; width:400px" src="../assets/img/author/{{$recipes->authorphoto}}"> 
            </div>
            <div class="col-6 content">
              <h3><strong>{{$recipes->title}}</strong></h3>
              <p class="font-italic">
              {{$recipes->authordescription}}
              </p>
            </div> 
          </div>
        </div>

        <form action="/contact/send" method="post" role="form">
          {{ csrf_field() }}
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
          @endif
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
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message to the Author"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </section><!-- End Contact Section -->
    <section id="gallery" class="gallery">
    <div class="container-fluid">
      <div class="section-title">
        <h2><span>More recipes from the Author</span></h2>
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
@include('footer')