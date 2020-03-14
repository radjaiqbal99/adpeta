<aside class="main-sidebar sidebar-light-info elevation-3">
  <a href="#" class="brand-link bg-info elevation-2">
    <img src="assets/image/itenas.png" alt="itenas logo" class="brand-image " style="opacity: .8">
    <span class="brand-text font-weight-normal">ADPETA ITENAS</span>
  </a>
  <div class="sidebar bg-sidebar">
    <nav class="mt-5">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- DASHBOARD MAHASISWA -->
        <?php if ($value_side == 0) { ?>
          <li class="nav-item has-treeview ">
            <a href="mhs/dasmhs" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link  text-info">
              <i class="nav-icon fas fa-cog"></i>
              <p>Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link text-info">
                  <i class="fas fa-lock nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('login/logout') ?>" class="nav-link text-info">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
            </ul>
          </li>
        <?php } ?>

        <!-- DASHBOARD MAHASISWA KP -->
        <?php if ($value_side == 1) { ?>
          <li class="nav-item has-treeview ">
            <a href="mhs/dasmhs" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link  text-info">
              <i class="nav-icon fas fa-cog"></i>
              <p>Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link text-info">
                  <i class="fas fa-lock nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('login/logout') ?>" class="nav-link text-info">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</aside>