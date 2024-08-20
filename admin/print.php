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
<script>
    window.print();
</script>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
<?php
if (isset($_POST['print'])) {
  $tgl1 = $_POST['tgl1'];
  $tgl2 = $_POST['tgl2'];
}

?>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->


          <div class="col-md-12">
                <div>
                    <hr>
                    <h2 align="center">Grafik Berita pada <b><?= tgl_indo($tgl1)." s/d ".tgl_indo($tgl2); ?></b></h2>
                </div>
                <?php
                $data1 = $koneksi->query("SELECT * FROM berita WHERE (tgl_berita BETWEEN '$tgl1' AND '$tgl2') AND pemilah = 'Positif'");
                $hasil1 = mysqli_num_rows($data1);
                ?>
                <?php
                $data2 = $koneksi->query("SELECT * FROM berita WHERE (tgl_berita BETWEEN '$tgl1' AND '$tgl2') AND pemilah = 'Negatif'");
                $hasil2 = mysqli_num_rows($data2);
                ?>
                <?php
                $data3 = $koneksi->query("SELECT * FROM berita WHERE (tgl_berita BETWEEN '$tgl1' AND '$tgl2') AND pemilah = 'Hoax'");
                $hasil3 = mysqli_num_rows($data3);
                ?>
                
                <div style="width: 100%;margin: 0px auto;">
                    <table border="1" cellspacing="0" width="100%">
                        <thead>
                        <tr align="center">
                                <th>Positif</th>
                                <th>Negatif</th>
                                <th>Hoax</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white">
                                <tr>
                                    <td align="center"><?= $hasil1?></td>
                                    <td align="center"><?= $hasil2?></td>
                                    <td align="center"><?= $hasil3?></td>
                                </tr>
                                <tr>
                                    <canvas id="chartBerita"></canvas>
                                </tr>
                        </tbody>
                    </table>
                </div>
          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
 
  </div>

</body>
<?php
  include '../templates/script.php';
  ?>
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