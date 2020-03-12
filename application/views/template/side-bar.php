  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-bg-white elevation-3">
    <!-- Brand Logo -->
    <a class="brand-link bg-primary elevation-2">
      <img src="assets/image/itenas.png" alt="itenas logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-normal">ADPETA ITENAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-lock nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('login/logout') ?>" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>