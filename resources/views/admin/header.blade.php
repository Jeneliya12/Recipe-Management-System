<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Charts-->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <!-- Styles -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/index3" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
       <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Aatish Shah</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin-dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
         <!--  <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/recipe-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Recipe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/role-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="about-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register About Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/gallery-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Galleries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/booking-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Bookings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/chefs-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Chefs </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/events-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Events </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/testimonials-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Testimonials </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/specials-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Specials </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/slider-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Sliders </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/menu-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Menu </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/salad-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Salad </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/speciality-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Specialty </p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="/userchart" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New User Growth Chart</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/recipechart" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Recipe Growth Chart</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pricechart" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Percentage Price Chart</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/chart" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comparison Chart</p>
                </a>
              </li> 
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/role-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/recipe-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recipe Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="about-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gallery-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galleries Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="booking-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="chefs-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chefs Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="events-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Events Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="testimonials-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="specials-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Specials Table</p>
                </a>
              </li>
             <li class="nav-item">
              <a href="slider-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders Table</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="menu-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu Table</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="salad-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Salad Table</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="speciality-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Specialty Table</p>
              </a>
            </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
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