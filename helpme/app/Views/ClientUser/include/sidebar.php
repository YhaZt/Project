<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="client" class="brand-link">
    <img src="/system_image/logo.jpg"  class="brand-image img-circle elevation-3" >
    <span class="brand-text font-weight-light">HelpMe Tracker</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info" style="color:white;">
                  <?php
                  $isLoggedIn = session()->get('isLoggedIn');
                  $user =session()->get('name');
                   ?>
                  <?php if($isLoggedIn): ?>
                   Welcome Back! <?= $user; ?>

                  <?php endif; ?>

      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="Dashboard" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <!-- <ul class="nav nav-treeview"> -->
            <!-- <li class="nav-item">
              <a href="../line-chart" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Client Analytics</p>
              </a> -->
            </li>
            <!-- <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li> -->
          <!-- </ul> -->
        </li>

        <li class="nav-item">
          <a href="rctable" class="nav-link">
            <i class="nav-icon fas fa-envelope-open"></i>
            <p>
            Request
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="trantable" class="nav-link">
            <i class="nav-icon fas fa-desktop"></i>
            <p>
              Transaction Log
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="Feed" class="nav-link">
            <i class="nav-icon fa fa-envelope"></i>
            <p>
              Feedback
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
