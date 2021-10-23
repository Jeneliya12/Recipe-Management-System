@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add About Page</h1>
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
              <form role="form" action ="/save-about" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Title*</label>
                    <input type="text"  name="title" class="form-control">
                    @if($errors->first('title'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('title')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea name="shortdescription" class="form-control"></textarea>
                    @if($errors->first('shortdescription'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('shortdescription')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                     @if($errors->first('description'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('description')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Detail Description*</label>
                    <textarea name="detaildescription" class="form-control"></textarea>
                     @if($errors->first('detaildescription'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('detaildescription')}}</li>
                    </div>
                    @endif
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">About Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      @if($errors->first('img'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('img')}}</li>
                      </div>
                      @endif
                    </div>
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
