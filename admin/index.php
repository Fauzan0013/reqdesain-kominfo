<?php
require '../config/config.php';
require '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../templates/head.php';
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
              <h1 class="m-0 text-dark">Dashboard</h1>
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


          <!-- <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fa fa-truck-pickup"></i></span>
            <div class="info-box-content">
              <h3><span class="info-box-text">"BACKLOG SYSTEM CONTROL"</span></h3>
            </div>
          </div> -->


          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <center>
                    <img src="<?= base_url() ?>/assets/dist/img/diskominfoprov.png" height="100" width="500">
                  </center>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                      <div class="card card-red card-outline">
                                <div class="card-header">
                                <form method="post" action="<?= base_url('admin/grafik') ?>">
                                  <div class="row">
                                  <input type="date" name="tgl1" class="form-control col-2" required="" value="<?php echo $date_old; ?>">  
                                  <input type="date" name="tgl2" class="form-control col-2" required="" value="<?php echo $date_old; ?>">  
                                  <button type="submit" name="grafik" class="btn btn-primary col-2">Search</button> &nbsp;
                                  <a href="print" data-toggle="modal" data-target="#print" class="btn bg-info"><i class="fa fa-print"> Cetak Grafik</i></a>
                                  </div>
                                </form>
                                
                                <hr>
                                    <h6>Grafik Berita</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartBerita"></canvas>
                                </div>
                            </div>
                </div>
              </div>
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
<script>
  var ctx = document.getElementById("chartBerita").getContext('2d');
        var chartBerita = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Positif", "Negatif", "Hoax"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM berita WHERE pemilah = 'Positif'");
                        $hasil = mysqli_num_rows($data);
                        echo $hasil;
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM berita WHERE pemilah = 'Negatif'");
                        $hasil = mysqli_num_rows($data);
                        echo $hasil;
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM berita WHERE pemilah = 'Hoax'");
                        $hasil = mysqli_num_rows($data);
                        echo $hasil;
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
</script>

<!-- MODAL LAPORAN SURAT MASUK -->
<div id="print" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 class="modal-title">Rekap Grafik</h4>
            </div>
            <div class="modal-body">

                <!-- kategori -->
                <label style="font-size: 15px; font-style: bold;"></label>
                <form method="POST" target="_blank" action="<?= base_url('admin/print.php') ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                              <input type="date" name="tgl1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <input type="date" name="tgl2" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="print" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end kategori -->

            </div><!-- modal body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
            </div>
        </div>
    </div>
</div>