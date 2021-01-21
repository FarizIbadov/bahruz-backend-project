<html>
 <?php 
include 'header.php';
include 'DBaction.php';
 if(!isset($_SESSION['user_ID'])){
    ?>
    <script>setTimeout(function(){ window.location.href = 'index.php'; }, 1);</script>
    <?php
}

  $id= $_SESSION['user_ID'];
  if(isset($_POST['submitData'])){
    $temp = $obj->verifyint($_POST['temp']);
    $location = $obj->verifystring($_POST['location']);
    $humidity = $obj->verifyint($_POST['humiditiy']);
    $visibility = $obj->verifystring($_POST['visibility']);
    $pracipitation = $obj->verifystring($_POST['pracipitation']);
    $date = $obj->verifystring($_POST['date']);
    $rain = $obj->verifystring($_POST['rain']);
    $sun_shine = $obj->verifystring($_POST['sun_shine']);
    $cloud = $obj->verifystring($_POST['clouds']);
    $wind_speed = $obj->verifystring($_POST['wind_speed']);

    $insert = array("`Temperature`"=>$temp,"`Humidity`"=>$humidity,"`Visibility`"=>$visibility,"`Precipitation`"=>$pracipitation,"`Date_MEASUREMENT`"=>$date,"`Temprature_id_`"=>$rain,"`Wind_id`"=>$sun_shine,"`Sky_id`"=>$cloud,"`Wind_velocity`"=>$wind_speed);
    $result = $obj->insert("quantitative_data",$insert);
    if($result){
        ?>
        <script>
        type="bg-green";
        msg="Data Added Successfuly";</script>
        <?php
    }else{
        echo $obj->error();
?>
        <script>
        type="bg-orange";
        msg="Some Error Occured!";</script>

<?php
    }
}
?>

<style>

th {
    background-color: gray;
    color: white;
} 
td{
    background-color: white;
    color: black;
}

#overlay{
  position:fixed;
  z-index:99999;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background:rgba(0,0,0,0.9);
  transition: 1s 0.4s;
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php 
  include 'nav.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'side.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          <div class="overview-wrap">
                      <button class="btn btn-outline-danger" data-toggle="modal" data-target="#smallmodal">
                        <i class="fas fa-plus"></i> Add Temprature</button>
                      </div>
          <!--     <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <!-- modal small -->
      <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="smallmodalLabel">Add New Tempratures</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="login-form">
                <style type="text/css">.col-6,  .col-md-12, .col-md-6 {position: inherit;}</style>
                <form method="POST" id="weatherData">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="temp">Temprature</label>
                                    <input type="number"  class="form-control" required name="temp" id="temp" placeholder="Enter temprature">
                                </div>
                                <div class="form-group">
                                    <label for="humiditiy">Humidity</label>
                                    <input type="number" name="humiditiy" required class="form-control" id="humidity" placeholder="Enter Humidity">
                                </div>
                                <div class="form-group">
                                    <label for="visibility">Visibility</label>
                                    <input type="number" name="visibility"  required class="form-control" id="visibilty" placeholder="Enter Visibility">
                                </div>
                                <div class="form-group">
                                    <label for="pracipitation">Probability of Pracipitation</label>
                                    <!-- <div class="row"> -->
                                    <br>
                                    <input type="number" name="pracipitation" required class="form-control" id="pracipitation" placeholder="%">
                                    <!-- </div> -->
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" required name="date" id="date" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="rain">How it Feel</label>
                                    <select id="rain" name="rain" class="form-control" required>
                                    <option selected disabled> Select Atmosphere</option>
                                    <?php 
                                    print_r($rains);
                                    ?>
                                  }</select>
                                </div>
                                <div class="form-group">
                                    <label for="sun_shine">Sun Shine</label>
                                    <select id="sun_shine" name="sun_shine" class="form-control" required>
                                    <option selected disabled> Select SUN shine</option>
                                    <?php 
                                    print_r($sunShine);
                                    ?>
                                  }</select>
                                </div>
                                <div class="form-group">
                                    <label for="cloud">Cloud</label>

                                    <select id="clouds" name="clouds" class="form-control" required>
                                    <option selected disabled> Select Clouds</option>
                                    <?php 
                                    print_r($clouds);
                                    ?>
                                  }</select>                                </div>
                                <div class="form-group">
                                    <label for="wind_speed">Wind Speed</label>
                                    <input type="number" name="wind_speed" class="form-control" required id="wind_speed" placeholder="Enter Humidity">
                                </div>
                            </div>
                                <button type="submit" name="submitData" class="btn btn-success btn-lg">Submit</button>
                                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal small -->
    <!-- Main content -->
    <section class="content">          
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Data</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                            <table class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                            <th> Date </th>
                            <th>Temprature </th>
                            <th>Wind Speed</th>
                            <th>Humidity</th>
                            <th>Visibility</th>
                            <th><small>Probability of Precipitation</small></th>
                            <th>SunShine</th>
                            <th>Cloud</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $readAll = $obj->read_specific("A.*, 3_qualitativedata.Sky,1_qualitativedata.Temperature,2_qualitativedata.Wind","quantitative_data as A, 3_qualitativedata, 2_qualitativedata, 1_qualitativedata ","A.Sky_id = 3_qualitativedata.Sky_id AND A.Wind_id = 2_qualitativedata.Wind_id AND A.Temperature_id_ = 1_qualitativedata.Temperature_id_");
                            if($readAll->num_rows>0){
                                while($rad = $readAll->fetch_assoc()){
                                    ?>
                                    <tr>
                                    <td><?php echo $rad['Date_measurement'] ?></td>
                                    <td><?php echo $rad['Temperature'] ?></td>
                                    <td><?php echo $rad['Wind_velocity'] ?></td>
                                    <td><?php echo $rad['Humidity'] ?></td>
                                    <td><?php echo $rad['Visibility'] ?></td>
                                    <td><?php echo $rad['Precipitation'] ?></td>
                                    <td><?php echo $rad['Wind'] ?></td>
                                    <td><?php echo $rad['Sky'] ?></td>
                                    </tr>
                                    <?php
                                }
                            }                            
                            ?>
                            </tbody>
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/select2/js/select2.min.js"></script>
</body>
</html>
