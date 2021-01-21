<style>
  [class*=sidebar-dark-] {
    background-color: #f4f6f9 !important;
}
[class*=sidebar-dark-] .sidebar a {
    color: #000000 !important;
}
[class*=sidebar-dark] .brand-link {
    border-bottom: 1px solid #4b545c;
    color: rgb(2 2 2 / 80%);
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="dist/img/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Weather Application</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['user_name']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="report.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reports
                <span class="right badge badge-danger">Min/Max</span>
              </p>
            </a>
          </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="logout.php" class="nav-link">
          Logout
        
      </a>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<style>
  .circle {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  font-size: 50px;
  color: #fff;
  text-align: center;
}
</style>