
@include('admin.header')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
		  	<div class="container">
				<div class="flex">
					<div class="w-1/2">
					<p class="text-1xl font-bold">Comparision of  Recipe Author ID with the Account Created Date</p>
						{!! $chart->container() !!}
					</div>

					<div class="w-1/2">
					<p class="text-1xl font-bold">Comparision of Booking ID with the User's address</p>
						{!! $charts->container() !!}
					</div>
				</div>
				{!! $chart->script() !!}
				{!! $charts->script() !!}
			</div>  
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
   @include('admin.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

</body>
</html>
