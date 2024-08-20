<aside class="main-sidebar sidebar-light-green  elevation-2">
  <!-- dark-primary  -->
  <!-- Brand Logo -->
  <a href="#" class="brand-link text-center">
    <img src="<?= base_url() ?>/assets/dist/img/diskominfoprov.png" style="width: 150px; justify-content: center; margin: auto; " alt="#" class="elevation-1" style="opacity: .8"><br>
    <span class="brand-text font-weight-light"><b>DISKOMINFO PROV.KALSEL</b></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/avatar9.png" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <div>
          <label for="">Pengguna : </label>
          <u>
            <i>
            <?php
            if ($_SESSION['id_role'] == "1") {
              echo $_SESSION['nm_user'];
            } elseif ($_SESSION['id_role'] == "2") {
              echo $_SESSION['nm_user'];
            }
            ?>
            </i>
          </u>
         
          </div>
        </a>
      </div>
    </div>




    <?php if ($_SESSION['id_role'] == "1") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user') ?>" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/pegawai') ?>" class="nav-link">
              <i class="fas fa-id-card-alt nav-icon"></i>
              <p>Pegawai</p>
            </a>
          </li>

          <li class="nav-header">PEMILAH BERITA</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/berita') ?>" class="nav-link">
              <i class="fas fa-newspaper nav-icon"></i>
              <p>Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/sumber_berita') ?>" class="nav-link">
              <i class="fas fa-folder-open nav-icon"></i>
              <p>Sumber Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/positif') ?>" class="nav-link">
              <i class="fas fa-plus-square nav-icon"></i>
              <p>Positif</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/negatif') ?>" class="nav-link">
              <i class="fas fa-minus-square nav-icon"></i>
              <p>Negatif</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/hoax') ?>" class="nav-link">
              <i class="fas fa-exclamation-circle nav-icon"></i>
              <p>Hoax</p>
            </a>
          </li>
          <li class="nav-header">PERMINTAAN DESAIN</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/desain') ?>" class="nav-link">
              <i class="fas fa-pen-alt nav-icon"></i>
              <p>Desain</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/belumselesai') ?>" class="nav-link">
              <i class="fas fa-clock nav-icon"></i>
              <p>Belum Selesai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/selesai') ?>" class="nav-link">
              <i class="fas fa-check nav-icon"></i>
              <p>Selesai</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->



    <?php } elseif ($_SESSION['id_role'] == "2") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('user/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/desain') ?>" class="nav-link">
              <i class="fas fa-pen-alt nav-icon"></i>
              <p>Permintaan Desain</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <?php } ?>
  </div>
  <!-- /.sidebar -->
</aside>