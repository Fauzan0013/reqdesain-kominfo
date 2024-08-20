<?php
require '../config/config.php';
require '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../templates/head.php';
$pegawai_id = $koneksi->query("SELECT * FROM pegawai AS p 
LEFT JOIN user AS u
ON p.id_user = u.id_user
WHERE p.id_user = $_SESSION[id_user] 
ORDER BY id_pegawai DESC")->fetch_array();


?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php
    include '../templates/navbar.php';
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include '../templates/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard </h1>
            </div>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
              </ol>
            </div>

          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

    <h1>PEMBERITAHUAN !!!</h1>
     


          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                <?php
                        $no = 1;
                        $data = $koneksi->query("SELECT * FROM desain AS d
                        LEFT JOIN pegawai AS p 
                        ON d.id_pegawai = p.id_pegawai 
                        WHERE p.id_pegawai = $pegawai_id[id_pegawai]
                        ORDER BY tanggal_selesai DESC");
                        while ($row = $data->fetch_array()) {
                      ?> 
                      <?php if ($row['status'] == 'Selesai') { ?>
                <div class="alert alert-success" role="alert">
                  <h5>
                    <b>
                      <i class="fa fa-info-circle"> </i>
                      Nama : <?= $row['nm_pegawai'] ?><br>
                      Jenis : <?= $row['jenis_desain'] ?><br>
                      Desc : <?= $row['deskripsi_desain'] ?><br>
                      Tanggal Permintaan : <?= $row['tanggal_permintaan'] ?><br>
                      Tanggal Selesai : <?= $row['tanggal_selesai'] ?><br>
                      Desain : <a href="<?= $row['url'] ?>" target="blank" class="btn btn-sm btn-xs bg-yellow"><i class="fa fa-newspaper"></i> Download Desain</a><br>
                      <span class="badge badge-info"><?= $row['status'] ?></span>
                    </b>
                  </h5>
                </div>
                <?php } elseif ($row['status'] == 'Belum Selesai') {?>
                  <div class="alert alert-danger" role="alert">
                  <h5>
                    <b>
                      <i class="fa fa-info-circle"> </i>
                      Nama : <?= $row['nm_pegawai'] ?><br>
                      Jenis : <?= $row['jenis_desain'] ?><br>
                      Desc : <?= $row['deskripsi_desain'] ?><br>
                      Tanggal Permintaan : <?= $row['tanggal_permintaan'] ?><br>
                      Tanggal Selesai : <?= $row['tanggal_selesai'] ?><br>
                      <span class="badge badge-dark"><?= $row['status'] ?></span>
                    </b>
                  </h5>
                </div>
                <?php } ?>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">

          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    <?php
    include '../templates/footer.php';
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
  include '../templates/script.php';
  ?>
</body>

</html>