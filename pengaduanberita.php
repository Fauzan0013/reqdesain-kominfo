<?php
require 'config/config.php';
require 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include 'templates/head.php';

?>
<style>
  body{
	font-family: "roboto";
	background: #F4F4F4;
}
 
h1,p{
	text-align: center;
}
 
.kotak{
	margin: 10px auto;
	background: #fff;
	
	width: 400px;
	padding: 20px 0px;
}
 
.kotak table tr td{
	padding: 5px;
}
 
.kotak table tr td input{
	padding: 5px;
	font-size: 12pt;
}
</style>
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
      <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Laporan Berita</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="url">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sumber Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="sumber_berita">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tema Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="tema">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Berita</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="tgl_berita">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ringkasan</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" class="form-control" name="ringkasan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" class="form-control" name="keterangan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-sm-2 col-form-label">Jenis Berita</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="pemilah">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Positif">Positif</option>
                                                    <option value="Negatif">Negatif</option>
                                                    <option value="Hoax">Hoax</option>
                                                  </select>
                                                </div>
                                              </div>
                                            

                                              <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label"> Captcha</label>
                                                  <div class="col-sm-2">
                                                  <table align="center">			
                                                  <?php
                                                if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                                ?>
                                                    <div class="alert alert-danger alertinfo" role="alert">
                                                        <i class="fa fa-times"> <?= $_SESSION['pesan']; ?></i>
                                                    </div>
                                                <?php
                                                    $_SESSION['pesan'] = '';
                                                }
                                                ?>			
                                                    <tr>				
                                                      <td><img src="captcha.php" alt="gambar" /> </td>
                                                    </tr>
                                                    <td>
                                                      <input class="form-control" name="nilaiCaptcha" value=""/>
                                                    </td>
                                                  </table>
                                                  </div>
                                              </div>
                                        
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('index') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-success float-right mr-2"><i class="fa fa-pen-fancy"> Laporkan</i></button>
                                    </div>
                                    <!-- /.card-footer -->

                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

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

  
</body>

</html>

<?php
include 'config/koneksi.php';
?>
 <?php
    if (isset($_POST['submit'])) {
        $url = $_POST['url'];
        $sumber_berita = $_POST['sumber_berita'];
        $tema = $_POST['tema'];
        $tgl_berita = $_POST['tgl_berita'];
        $ringkasan = $_POST['ringkasan'];
        $keterangan = $_POST['keterangan'];
        $pemilah = $_POST['pemilah'];

        if ($_SESSION["Captcha"] == $_POST["nilaiCaptcha"]) {
          $submit = $koneksi->query("INSERT INTO berita VALUES (
            NULL,
            '$url', 
            '$sumber_berita', 
            '$tema', 
            '$tgl_berita',
            '$ringkasan', 
            '$keterangan', 
            '$pemilah',
            'Unverif'
            )");
            if ($submit) {
                // var_dump($submit, $koneksi->error);
                // die();
                $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
                echo "<script>window.location.replace('index');</script>";
            }
        }else{
              $_SESSION['pesan'] = "Captcha Tidak Sesuai";
              echo "<script>window.location.replace('pengaduanberita');</script>";
        }
      
     
    }

    ?>