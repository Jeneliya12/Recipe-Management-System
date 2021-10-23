@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Recipe</h1>
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
              <form role="form" action ="/save-recipe" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Author Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter author name">
                     @if($errors->first('name'))
                        <div class="alert alert-danger" role="alert">
                          <li>{{$errors->first('name')}}</li>
                        </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Author Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          <input type="file" name="authorphoto" class="custom-file-input" id="exampleInputFile">
                          @if($errors->first('authorphoto'))
                          <div class="alert alert-danger" role="alert">
                            <li>{{$errors->first('authorphoto')}}</li>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Author Intro*</label>
                      <input type="text"  name="authorintro" class="form-control">
                        @if($errors->first('authorintro'))
                        <div class="alert alert-danger" role="alert">
                          <li>{{$errors->first('authorintro')}}</li>
                        </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Recipe Title*</label>
                      <input type="text"  name="title" class="form-control">
                      @if($errors->first('title'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('title')}}</li>
                      </div>
                    @endif
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Recipe Image</label>
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
                    <label>Short Description*</label>
                      <textarea name="shortdescription" class="form-control"></textarea>
                       @if($errors->first('shortdescription'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('shortdescription')}}</li>
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
                    <label>Detail Description*</label>
                      <textarea name="detaildescription" class="form-control"></textarea>
                       @if($errors->first('detaildescription'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('detaildescription')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Time*</label>
                    <input type="text"  name="time" class="form-control">
                    @if($errors->first('time'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('time')}}</li>
                    </div>
                  @endif
                  </div>

                  <div class="form-group">
                    <label>Cooktime*</label>
                     <input type="text"  name="cooktime" class="form-control">
                      @if($errors->first('cooktime'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('cooktime')}}</li>
                      </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Yield*</label>
                     <input type="text"  name="yield" class="form-control">
                      @if($errors->first('yield'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('yield')}}</li>
                      </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Summary*</label>
                    <textarea name="summary" class="form-control"></textarea>
                     @if($errors->first('summary'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('summary')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Ingredients*</label>
                    <textarea name="ingredients" class="form-control"></textarea>
                     @if($errors->first('ingredients'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('ingredients')}}</li>
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Method Title*</label>
                    <input type="text"  name="methodtitle" class="form-control">
                      @if($errors->first('methodtitle'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('methodtitle')}}</li>
                      </div>
                      @endif   
                  </div>

                  <div class="form-group">
                    <label>Method*</label>
                      <textarea name="method" class="form-control"></textarea>
                       @if($errors->first('method'))
                      <div class="alert alert-danger" role="alert">
                        <li>{{$errors->first('method')}}</li>
                      </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Commentor*</label>
                      <input type="text"  name="commentor" class="form-control">
                        @if($errors->first('commentor'))
                        <div class="alert alert-danger" role="alert">
                          <li>{{$errors->first('commentor')}}</li>
                        </div>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Comments*</label>
                     <input type="text"  name="comments" class="form-control">
                        @if($errors->first('comments'))
                        <div class="alert alert-danger" role="alert">
                          <li>{{$errors->first('comments')}}</li>
                        </div>
                        @endif
                  </div>

                  <div class="form-group">
                    <label>Comments Date</label>
                      <input type="date" name="comments_date">
                  </div>

                  <div class="form-group">
                      <label>Recipe Date</label>
                      <input type="date" name="recipedate">
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
