<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<!--Start Search Section---->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Search For Recipe</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="container mt-5">
        <form action="/search" method="post" role="form">
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
            <div class="col-2">      
            </div>
            <div class="col-md-8 form-group">
              <input type="text" name="q" class="form-control" id="title" placeholder="Recipe Title" data-rule="minlen:4" data-msg="Please enter the title of the recipe" /><br>
            </div>
             <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-md-8 form-group">
              <input type="text" name="r" class="form-control" id="name" placeholder="Author Name" data-rule="minlen:4" data-msg="Please enter the title of the recipe" /><br>
            </div>
             <div class="col-2">
            </div>
             <div class="col-2">
            </div>
            <div class="col-md-8 form-group">
              <input type="text" name="s" class="form-control" id="ingredient" placeholder="Ingredient Name" data-rule="minlen:4" data-msg="Please enter the title of the recipe" /><br>
            </div>
             <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-md-8 form-group"><input type="submit" name="search">
            </div>
            <div class="col-2">
            </div>
           
        </form>
      </div>
    </section><!-- End Search Section -->
  </div>
<body>
