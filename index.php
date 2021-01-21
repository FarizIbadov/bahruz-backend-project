<html>
<script>
  var toastMsg = '';
  var toastType ='';
</script>
<?php include 'header.php'; ?>
<style>
  body{
    background-color:#1c436a !important;
  }
  .content-wrapper {
    background: #1c436a !important;
}
.card{
    background-color: #1c436a !important;
}
.main-footer {
    background: #1c436a;
    border-top: 1px solid #1c436a;
    }
</style>
<body class="hold-transition sidebar-mini">
<!-- <div class="content-wrapper"> -->
  <!-- Navbar -->
<?php  
//include 'nav.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
  //include 'side.php';
  if(isset($_POST['sign_in'])){
    include 'DBaction.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email != "" && $password != "" ){
          $_SESSION['user_name'] = "Bahruz";
          $_SESSION['user_email'] = "admin@gmail.com";
          $_SESSION['user_ID'] = "1";
      ?>
      <script>
        toastMsg = "Loggedin Successfully";
        toastType = "success";
        setTimeout(function(){ window.location.href = 'dashboard.php'; }, 1000);
      </script>
        <?php
    }
    else{
      ?><script>
        toastMsg = "Invalid email or password";
        toastType = "error";
        </script> <?php
  }
  }
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!--     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8" style="margin:70px;">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <center><img src="dist/img/back.jpg" height="200px"></center>
                <center><h3 class="card-title center" style="color:white;">Login </h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="">
                <div class="card-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> -->
                    <!-- <div class="col-sm-10"> -->
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    <!-- </div> -->
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                    </div>
                    <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label> -->
                    <!-- <div class="col-sm-10"> -->
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    <!-- </div> -->
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="sign_in" class="btn btn-success btn-block">Sign in</button>
                  <!-- <button type="submit" name="cancel" class="btn btn-default float-right">Cancel</button> -->
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Developed by &copy; <a href="#">Bahruz</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->
<!-- </div> -->
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>
<!-- bs-custom-file-input -->
<!-- <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  // bsCustomFileInput.init();
  if(toastType == "success"){
    toastr.success(toastMsg);
    tostType='';
    toastMsg = '';
  }
  if(toastType == "error"){
    toastr.error(toastMsg);
    tostType='';
    toastMsg = '';
  }
});

</script>
</body>
</html>
