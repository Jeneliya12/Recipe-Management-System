@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action ="/save-booking" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Name*</label>
                    <input type="text"  name="name" class="form-control">
                    @if($errors->first('name'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('name')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email"  name="email" class="form-control">
                    @if($errors->first('email'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('email')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="phone"  name="phone" class="form-control">
                    @if($errors->first('phone'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('phone')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Address</label>
                    <input type="address"  name="address" class="form-control">
                    @if($errors->first('address'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('address')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Number of ingredients</label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="number of ingredients">
                    @if($errors->first('number'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('number')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Place message for your order*</label>
                    <textarea name="message" class="form-control"></textarea>
                     @if($errors->first('message'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('message')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>   
            </div>
          </div>
        <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
  @include('admin.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
