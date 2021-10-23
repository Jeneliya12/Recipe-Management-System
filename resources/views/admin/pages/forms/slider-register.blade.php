@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Slider Page</h1>
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
              <form role="form" action ="/save-slider" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Active Title*</label>
                    <input type="text"  name="activetitle" class="form-control">
                    @if($errors->first('activetitle'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('activetitle')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Active Description</label>
                    <textarea name="activedescription" class="form-control"></textarea>
                    @if($errors->first('activedescription'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('activedescription')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Active Image</label>
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

                  <div class="form-group">
                    <label>Second Title*</label>
                    <input type="text"  name="secondtitle" class="form-control">
                    @if($errors->first('secondtitle'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('secondtitle')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Second Description</label>
                    <textarea name="seconddescription" class="form-control"></textarea>
                     @if($errors->first('seconddescription'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('seconddescription')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Second Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="secondimg" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      @if($errors->first('secondimg'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('secondimg')}}</li>
                      </div>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Third Title*</label>
                    <input type="text"  name="thirdtitle" class="form-control">
                    @if($errors->first('thirdtitle'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('thirdtitle')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Third Description*</label>
                    <textarea name="thirddescription" class="form-control"></textarea>
                     @if($errors->first('thirddescription'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('thirddescription')}}</li>
                    </div>
                    @endif
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Third Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="thirdimg" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      @if($errors->first('thirdimg'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('thirdimg')}}</li>
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
