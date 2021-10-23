  @include('header')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">


        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          @foreach($slider as $slider)
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/bg-img/{{$slider->img}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>{{$slider->activetitle}}</span></h2>
                <p class="animate__animated animate__fadeInUp">{{$slider->activedescription}}</p>
                <div>
                  <a href="#recipe" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Recipes</a>
                  <a href="#book-an-ingredients" class="btn-book animate__animated animate__fadeInUp scrollto">Book an Ingredients</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/bg-img/{{$slider->secondimg}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">{{$slider->secondtitle}}</h2>
                <p class="animate__animated animate__fadeInUp">{{$slider->seconddescription}}</p>
                <div>
                  <a href="#recipe" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Recipes</a>
                  <a href="#book-an-ingredients" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/bg-img/{{$slider->thirdimg}});">
            <div class="carousel-background"><img src="assets/img/bg-img/{{$slider->thirdimg}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">{{$slider->thirdtitle}}</h2>
                <p class="animate__animated animate__fadeInUp">{{$slider->thirddescription}}</p>
                <div>
                  <a href="#recipe" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Recipes</a>
                  <a href="#book-an-ingredients" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div> 
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          @foreach($about as $about)
          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/gallery/{{$about->img}}");'>
            <a href="https://www.youtube.com/watch?v=xCoztLy2SD4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3>{{$about->title}}</strong></h3>
              <p>
                {{$about->shortdescription}}
              </p>
              <p class="font-italic">
                {{$about->description}}
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i>{{$about->shortdescription}}</li>
                <li><i class="bx bx-check-double"></i>{{$about->shortdescription}}</li>
                <li><i class="bx bx-check-double"></i>{{$about->shortdescription}}</li>
              </ul>
              <p>
                {{$about->detaildescription}}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Recipe Section ======= -->
    <section id="recipe" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Recipes??</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          @foreach ($recipe as $recipe)
        <div class="col-lg-4 mt-4 mt-lg-0">
            <a href="recipe/{{$recipe->id}}"><img style= "width: 100%; height: 20vw; object-fit: cover;" class="card-img-top" src="assets/images/{{$recipe->img}}" alt="Card image"></a>
            <p>By <i><a style="color:black" href="author/{{$recipe->id}}">{{$recipe->name}}</a></i></p>
            <p>Published on <i><a style="color:black" href="">{{$recipe->recipedate}}</a></i></p>
            @if($recipe->status=='Instock')
              <a href="reserve/{{$recipe->id}}"><button type="button">{{$recipe->status}}</button></a>
              @else
              <a href="cancel/{{$recipe->id}}"><button type="button">{{$recipe->status}}</button></a>
              @endif
        </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Recipe Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Our tasty <span>Recipes and it's Prices</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          @foreach($menu as $menu)
          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">{{$menu->title}}</a><span>${{$menu->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$menu->shortdescription}}
            </div>
          </div>
          @endforeach

          @foreach ($specialty as $specialty)
          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">{{$specialty->title}}</a><span>${{$specialty->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$specialty->shortdescription}}
            </div>
          </div>
          @endforeach

          @foreach ($salad as $salad)
          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">{{$salad->title}}</a><span>${{$salad->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$salad->shortdescription}}
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">
        <div class="section-title">
          <h2>Check our <span>Special Recipes</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">French Fries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Momos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Chaumin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Pizza</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Biryani</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
            @foreach($specials as $specials)
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{$specials->title}}</h3>
                    <p class="font-italic">{{$specials->nav1}}</p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/{{$specials->img}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane active show" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{$specials->title2}}</h3>
                    <p class="font-italic">{{$specials->nav2}}</p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/{{$specials->img2}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
             <div class="tab-pane active show" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>{{$specials->title3}}</h3>
                  <p class="font-italic">{{$specials->nav3}}</p>
                  <p></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/{{$specials->img3}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
           <div class="tab-pane active show" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>{{$specials->title4}}</h3>
                  <p class="font-italic">{{$specials->nav4}}</p>
                  <p></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/{{$specials->img4}}" alt="" class="img-fluid">
                </div>
              </div>
          </div>
           <div class="tab-pane active show" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>{{$specials->title5}}</h3>
                <p class="font-italic">{{$specials->nav5}}</p>
                <p></p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/{{$specials->img5}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          @endforeach
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>We also organize Events. <span> Remember us for Events.</span></h2>
        </div>

        <div class="owl-carousel events-carousel">
          @foreach($events as $events)
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/{{$events->img}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>{{$events->title}}</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="font-italic">
                {{$events->description}}
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i>{{$events->shortdescription}}</li>
                <li><i class="icofont-check-circled"></i>{{$events->shortdescription}}</li>
                <li><i class="icofont-check-circled"></i>{{$events->shortdescription}}</li>
              </ul>
              <p>
                {{$events->detaildescription}}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-an-ingredients" class="book-an-ingredients">
      <div class="container">

        <div class="section-title">
          <h2>Book an <span>Ingredient</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="{{url('send-email')}}" method="post" role="form" class="">
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
            <button type="button" class="close" data-dismiss="alert"></button>
                   <strong>{{ $message }}</strong>
           </div>
          @endif
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="phone" class="form-control" placeholder="Enter your Phone number">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="address" class="form-control" placeholder="Enter your address">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="number" id="number" placeholder="number of ingredients">
              <div class="validate"></div>
            </div>     
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos of <span>Our Staffs and Customers</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row no-gutters">
          @foreach ($galleries as $galleries)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/{{$galleries->gallery}}" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/{{$galleries->gallery}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
        @foreach($chefs as $chefs)
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/{{$chefs->image}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$chefs->name}}</h4>
                <span>{{$chefs->position}}</span>
                <div class="social">
                  <a href="{{$chefs->twitter}}"><i class="icofont-twitter"></i></a>
                  <a href="{{$chefs->facebook}}"><i class="icofont-facebook"></i></a>
                  <a href="{{$chefs->instagram}}"><i class="icofont-instagram"></i></a>
                  <a href="{{$chefs->linkedin}}"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">
        @foreach($testimonials as $testimonials)
          <div class="testimonial-item">
            <img src="assets/img/testimonials/{{$testimonials->img}}" class="testimonial-img" alt="">
            <h3>{{$testimonials->name}}</h3>
            <h4>{{$testimonials->position}}</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
        </div>
      @endforeach
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="map">
       <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.9652824196237!2d85.3090681462448!3d27.714049941983824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fce2fbafef%3A0xb6e9822f398bdb21!2sOR2K!5e0!3m2!1sen!2snp!4v1617534806596!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
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
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  @include('footer')
</body>
</html>