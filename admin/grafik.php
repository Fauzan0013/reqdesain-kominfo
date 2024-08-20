<?php
require '../config/config.php';
require '../config/koneksi.php';
require '../config/day.php';
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
<?php
if (isset($_POST['grafik'])) {
  $tgl1 = $_POST['tgl1'];
  $tgl2 = $_POST['tgl2'];
}

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
                                  <button type="submit" name="grafik" class="btn btn-primary col-2">Search</button>
                                  </div>
                                </form>
                                <div>
                                    <hr>
                                    <h6>Grafik BeritaPada <b><?= tgl_indo($tgl1)." s/d ".tgl_indo($tgl2); ?></b></h6>
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
                        $data = $koneksi->query("SELECT * FROM berita WHERE (tgl_berita BETWEEN '$tgl1' AND '$tgl2') AND pemilah = 'Positif'");
                        $hasil = mysqli_num_rows($data);
                        echo $hasil;
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM berita WHERE (tgl_berita BETWEEN '$tgl1' AND '$tgl2') AND pemilah = 'Negatif'");
                        $hasil = mysqli_num_rows($data);
                        echo $hasil;
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM berita WHERE (tgl_berita BETWEEN '$tgl1' AND '$tgl2') AND pemilah = 'Hoax'");
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