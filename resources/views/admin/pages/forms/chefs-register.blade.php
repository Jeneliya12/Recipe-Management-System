@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Chefs</h1>
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
              <form role="form" action ="/save-chefs" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Chefs Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter chef's name">
                     @if($errors->first('name'))
                        <div class="alert alert-danger" role="alert">
                          <li>{{$errors->first('name')}}</li>
                        </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Chef's Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                          @if($errors->first('image'))
                          <div class="alert alert-danger" role="alert">
                            <li>{{$errors->first('image')}}</li>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Chef's Intro*</label>
                      <textarea name="intro" class="form-control"></textarea>
                        @if($errors->first('intro'))
                        <div class="alert alert-danger" role="alert">
                          <li>{{$errors->first('intro')}}</li>
                        </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Chef's Position*</label>
                      <input type="text"  name="position" class="form-control">
                      @if($errors->first('position'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('position')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Experience*</label>
                      <textarea name="experience" class="form-control"></textarea>
                       @if($errors->first('experience'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('experience')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Description*</label>
                      <textarea name="description" class="form-control"></textarea>
                      @if($errors->first('description'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('description')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Twitter Link*</label>
                      <input type="url" name="twitter">
                      @if($errors->first('twitter'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('twitter')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Facebook Link*</label>
                      <input type="url" name="facebook">
                      @if($errors->first('facebook'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('facebook')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Instagram Link*</label>
                      <input type="url" name="instagram">
                      @if($errors->first('instagram'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('instagram')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Linkedin Link*</label>
                      <input type="url" name="linkedin">
                      @if($errors->first('linkedin'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('linkedin')}}</li>
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
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

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
