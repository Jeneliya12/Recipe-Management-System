@include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider DataTable</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><button type="button" class="btn btn-primary" style="margin-right:10px"><a href="slider-register">Add Slider</a></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>Active Image</th>
                    <th>Description</th>
                    <th>Title</th>
                    <th>Second Image</th>
                    <th>Description</th>
                    <th>Title</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($slider as $slider)
                  <tr>
                    <td>
                      <img src="assets/img/bg-img/{{$slider->img}}" width="200px"; height="200px;" alt="Image">
                    </td>
                    <td>{{$slider->activedescription}}</td>
                    <td>{{$slider->activetitle}}</td>
                    <td>
                      <img src="assets/img/bg-img/{{$slider->secondimg}}" width="200px"; height="200px;" alt="Image">
                    </td>
                    <td>{{$slider->seconddescription}}</td>
                    <td>{{$slider->secondtitle}}</td>
                    <td>
                      <a href="/slider-edit/{{$slider->id}}" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  @endforeach    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
