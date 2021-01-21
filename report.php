<!DOCTYPE html>
<html>
<?php 
include 'header.php';
?>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php 
    //include 'nav.php';
    ?>

    <!-- Main Sidebar Container -->
    <?php
    include 'side.php';
    ?> 


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Search Record</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Report</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
              	<div class="row container">
<!--               <div class="row"><span id="btn_data" class="col-md-12"></span></div><br>
              <div class="row" style="overflow-x: auto;margin:0;overflow-y: scroll;max-height: 450px;"> -->
                <div class="col-md-3">
                  <label>From Date</label>
                  <input type="date" name="date1" id="date1">
                </div>
                <div class="col-md-3">
                  <label>To Date</label>
                  <input type="date" name="date2" id="date2">
                </div>
                <div class="col-md-3">
                <button type="button" onclick="getList()" class="btn btn-success btn-lg">Search</button>
                </div>
            </div>
            <div class="col-md-6" id="showTemps">

            </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0
      </div>
      <strong>Copyright &copy; 2016-2020 <a href="#"> Mehin </a>.</strong> All rights
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->


  <script>

function getList(){
                    var date1 = $("#date1").val();
                    var date2 = $("#date2").val();
                    if(date1 =="" || date2 ==""){
                        $("#errorMsg").html("Verify Dates");
                        $("#errorMsg").css("display","block");
                        showNotification("bg-orange", "Verify Dates", "top", "right", "animated bounceIn", "animated bounceOut");
                    }else{
                    $.ajax({
                        url:"getList.php",
                        method:'post',
                        data:{from:date1,to:date2},
                        success:function(data){
                        $("#errorMsg").css("display","none");
                            $("#showTemps").html(data);
                        }, error: function(xhr){
                            alert("An error occured: " + xhr.status + " " + xhr.statusText);
                        }
                    });
                }
            }
</script>

</body>
</html>
