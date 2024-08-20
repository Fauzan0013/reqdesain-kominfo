<?php
require 'config/config.php';
require 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include 'templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light  navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">

        <a class="nav-link" href="index"><i class="fas fa-home"></i> Buletin</a>
        <a class="nav-link" href="pengaduanberita"><i class="fas fa-pen-fancy"></i> Masukkan Berita Masyarakat</a>
        <a class="nav-link" href="login"><i class="fas fa-sign-in-alt"></i> Login</a>

      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-green elevation-2" style="background-color: dark;">
      <!-- dark-primary  -->
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/assets/dist/img/provkalsel.png" style="width: 30px;" class="brand-image" style="opacity: 12">
        <span class="brand-text font-weight-light" style="color: white;"><b>DISKOMINFO</b></span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
   
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/logo.jpeg" class="img-circle elevation-1" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <i>
            
          </i>
        </a>
      </div>
    </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">


          </div>
        </div>
      </div>

      <!-- Main content -->
      <section>
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="col-12">
            <div class="card-header">
                <h1 align="center">BERITA YANG DISARING KOMINFO YANG SUDAH DI VERIFIKASI SEBELUMNYA</h1>
            </div>
            <div class="row">
              <div class="col-12 col-md-12">
                <div class="card">
                  <div class="card-body">
                     <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="">
                                    <tr align="center">
                                        <th>No</th>
                                        <th>URL</th>
                                        <th>Tanggal</th>
                                        <th>Ringkasan Berita</th>
                                        <th>Keterangan</th>
                                        <th>Pemilah Berita</th>
                                    </tr>
                                </thead>
                                <tbody style="background-color: white">
                                    <?php
                                    $no = 1;
                                    $data = $koneksi->query("SELECT * FROM berita WHERE verifikasi = 'Verif' ORDER BY id_berita DESC");
                                    while ($row = $data->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td> <a href="<?= $row['url'] ?>" target="blank" class="btn btn-block btn-xs bg-yellow"><i class="fa fa-newspaper"></i> Lihat Berita</a></td>
                                            <td><?= $row['tgl_berita'] ?></td>
                                            <td><?= $row['ringkasan'] ?></td>
                                            <td><?= $row['keterangan'] ?></td>
                                            <td align="center"><b><?= $row['pemilah'] ?></b></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-12 col-md-6">
                <div class="card">
                  <div class="card-body">
                    
                  </div>
                </div>
              </div> -->
            </div>
          </div>


        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'templates/footer.php';
    ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Script -->
  <?php
  include 'templates/script.php';
  ?>

  <script>
    $(function() {
      setTimeout(function() {
        $(".success-alert").slideUp();
      }, 1500);
    });

    function change() {
      var x = document.getElementById('pass').type;

      if (x == 'password') {
        document.getElementById('pass').type = 'text';
        document.getElementById('lihatpass').innerHTML = '<span class="fas fa-eye" title="Lihat Password" style="color: blue;" id="lihatpass" onclick="change();"></span>';
      } else {
        document.getElementById('pass').type = 'password';
        document.getElementById('lihatpass').innerHTML = '<span class="fas fa-eye" title="Lihat Password" id="lihatpass" onclick="change();"></span>';
      }
    }
  </script>
</body>

</html>
<?php
function tgl_indo($tanggal)
{
  $bulan = array(
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

?>

<?php
include 'config/koneksi.php';
?>