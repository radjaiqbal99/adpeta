<aside class="main-sidebar sidebar-light-info elevation-3">
  <p class="brand-link bg-info m-0">
    <img src="assets/image/itenas.png" alt="itenas logo" class="brand-image " style="opacity: .8">
    <span class="brand-text font-weight-normal">ADPETA ITENAS</span>
  </p>
  <div class="sidebar bg-sidebar">
    <nav class="mt-5">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <!-- <?php if ($value_main == 6) { ?>
          <li class="nav-item has-treeview ">
            <a href="datamaster/supadmin" class="nav-link active">
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
        <?php } ?> -->

        <?php if ($value_side == 0) { ?>
          <li class="nav-item has-treeview ">
            <a href="datamaster/dashboard" class="nav-link active">
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
        <?php } ?>

        <?php if ($value_side == 2) { ?>
          <li class="nav-item has-treeview mb-3">
            <a href="datamaster/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="datamaster/setadm" class="nav-link menu-open text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Admin</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link text-info">
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
        <?php } ?>

        <?php if ($value_side == 2) { ?>
          <li class="nav-item has-treeview mb-3">
            <a href="datamaster/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <?php if ($value_side == 1) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setkp_kordinator" class="nav-link text-info menu-open">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator KP</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_pembimbing " class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing KP</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_penguji" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji KP</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_mahasiswa" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa KP</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($value_side == 4) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setkp_kordinator"class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator KP</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_pembimbing" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing KP</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_penguji" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji KP</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_mahasiswa" class="nav-link menu-open text-info ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa KP</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($value_side == 2) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setkp_kordinator" class="nav-link text-info ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator KP</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_pembimbing" class="nav-link text-info menu-open">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing KP</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_penguji" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji KP</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_mahasiswa" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa KP</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($value_side == 3) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setkp_kordinator" class="nav-link text-info ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator KP</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_pembimbing" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing KP</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_penguji" class="nav-link text-info menu-open">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji KP</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setkp_mahasiswa" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa KP</p>
            </a>
          </li>
          <?php } ?>

          <li class="nav-item has-treeview">
            <a class="nav-link text-info">
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
        <?php } ?>

        <?php if ($value_side == 2) { ?>
          <li class="nav-item has-treeview mb-3">
            <a href="datamaster/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <?php if ($value_side == 1) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setta_kordinator" class="nav-link text-info menu-open">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator TA</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_pembimbing " class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing TA</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_penguji" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji TA</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_mahasiswa" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa TA</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($value_side == 4) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setta_kordinator"class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator TA</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_pembimbing" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing TA</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_penguji" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji TA</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_mahasiswa" class="nav-link menu-open text-info ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa TA</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($value_side == 2) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setta_kordinator" class="nav-link text-info ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator TA</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_pembimbing" class="nav-link text-info menu-open">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing TA</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_penguji" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji TA</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_mahasiswa" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa TA</p>
            </a>
          </li>
          <?php } ?>

          <?php if ($value_side == 3) { ?>
          <li class="nav-item has-treeview">
            <a href="datamaster/setta_kordinator" class="nav-link text-info ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Kordinator TA</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_pembimbing" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Pembimbing TA</p>
            </a>
          </li>
          <!-- Dosen Penguji -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_penguji" class="nav-link text-info menu-open">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Dosen Penguji TA</p>
            </a>
          </li>
          <!-- Mahasiswa -->
          <li class="nav-item has-treeview ">
            <a href="datamaster/setta_mahasiswa" class="nav-link text-info">
              <i class="nav-icon fas fa-users-cog"></i>
              <p> Mahasiswa TA</p>
            </a>
          </li>
          <?php } ?>

          <li class="nav-item has-treeview">
            <a class="nav-link text-info">
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
        <?php } ?>

      </ul>
    </nav>
  </div>
</aside>