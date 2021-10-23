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

<body>
 <!-- ======= Recipe Section ======= -->
 @if(isset($details))
    <section id="recipe" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Recent <span> Recipes</span></h2>
          <h1 class="search-results-count"><h1> The Search results for  <b> {{ $query }} </b> is/are :</h1>
        </div>

        <div class="row">
          @foreach ($details as $recipes)
        <div class="col-lg-4 mt-4 mt-lg-0">
            <a href="recipe/{{$recipes->id}}"><img style= "width: 100%; height: 20vw; object-fit: cover;" class="card-img-top" src="assets/images/{{$recipes->img}}" alt="Card image"></a>
            <p>By <i><a style="color:black" href="author/{{$recipes->id}}">{{$recipes->name}}</a></i></p>
            <p>Published on <i><a style="color:black" href="">{{$recipes->recipedate}}</a></i></p>
            @if($recipes->status=='Instock')
              <a href="reserve/{{$recipes->id}}"><button type="button">{{$recipes->status}}</button></a>
              @else
              <a href="cancel/{{$recipes->id}}"><button type="button">{{$recipes->status}}</button></a>
              @endif
        </div>
          @endforeach
            @elseif(isset($message))
            <h1>{{ $message }}</h1>
            @endif
        </div>
      </div>
    </section><!-- End Recipe Section -->
  @include('footer')