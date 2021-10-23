@include('admin.header')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Highcharts of New User Growth, 2021</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div id="chart-container"></div>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script>
                  var datas = <?php echo json_encode($datas) ?>

                  Highcharts.chart('chart-container', {
                  title:{
                    text: 'New User Growth, 2021'
                  },
                  subtitle:{
                    text:'Source: Jen Grg'
                  },
                  xAxis:{
                    categories:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                  },
                  yAxis:{
                    title:{
                      text: 'Number of New User'
                    }
                  },
                  legend:{
                    layout: 'vertical',
                    align: 'right',
                    verticalAllign:'middle'
                  },
                  plotOptions:{
                    series: {
                      allowPointSelect:true
                    }
                  },
                  series:[{
                    name: 'New User',
                    data: datas
                  }],
                  responsive:{
                    rules:[
                      {
                        condition:{
                          maxwidth:500
                        },
                        chartOptions:{
                          legend:{
                            layout:'horizontal',
                            align:'center',
                            verticalAllign:'bottom'
                          }
                        }
                      }
                    ]
                  }
                })
                </script>
              </div>
            </div>
            <!-- /.card -->
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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
