@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
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
              <form role="form" action ="/save-user" method="POST">
                {{csrf_field()}}
                <div class="card-body">
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
                  </div>
                  <div class="form-group">
                    <input id="password-field" type="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation"/>
                      @if($errors->first('password_confirmation'))
                      <div class="alert alert-success" role="alert">
                        <li>{{$errors->first('password_confirmation')}}</li>
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
