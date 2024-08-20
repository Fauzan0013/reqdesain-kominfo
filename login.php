<?php
require 'config/config.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{ asset ('assets/dist/img/provkalsel.png') }}">
  <title>Pendataan Berita & Permintaan Design</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?= base_url() ?>/assets/dist/img/provkalsel.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-color: orange;">
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
      <div class="login-logo">
        <br>
        <img src="<?= base_url() ?>/assets/dist/img/diskominfoprov.png" style="margin-top: 20px; margin-bottom: 20px;" width="250px;" height="70px;">
          <h4 style="color:black; font-family: system-ui;"><b>APLIKASI</b><br></h4>
          <h6 style="color:black; font-family: system-ui;"><b>PENGADUAN BERITA DAN PERMINTAAN PEMBUATAN DESAIN DINAS
          KOMUNIKASI INFORMASI PROVINSI KALIMANTAN SELATAN BERBASIS WEB</b><br></h6>
      </div>
      <div class="card-body login-card-body" style="background-color: white;">
        <!-- <p class="login-box-msg">Sign in to start your session</p> -->
        <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
          <div class="alert alert-danger success-alert" role="alert">
            <small><i class="fa fa-check"> <?= $_SESSION['pesan']; ?></i></small>
          </div>
        <?php $_SESSION['pesan'] = '';
        } ?>

        <form action="" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" required="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user-circle"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required="">
            <div class="input-group-append">
              <div class="input-group-text" id="lihatpass">
                <span class="fas fa-eye" title="Lihat Password" onclick="change();"></span>
              </div>
            </div>
          </div>

          <button type="submit" name="login" class="btn btn-block bg-orange btn-xm"><i class="fa fa-sign-in-alt mr-1"></i>Login</button>
          <br>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>

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
include 'config/koneksi.php';
if (isset($_POST['login'])) {
  $user = mysqli_real_escape_string($koneksi, $_POST['username']);
  $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
  $pass = md5($pass);

  $query = mysqli_query($koneksi, "SELECT * FROM user  
                     WHERE username = '$user' AND password = '$pass'");
  $row = mysqli_fetch_array($query);

  $username   = $row['username'];
  $nm_user    = $row['nm_user'];
  $password   = $row['password'];
  $id_user    = $row['id_user'];
  $id_role    = $row['id_role'];



  if ($user == $username && $pass == $password) {

    $_SESSION['id_user']    = $id_user;
    $_SESSION['nm_user']    = $nm_user;
    $_SESSION['username']   = $username;
    $_SESSION['id_role']       = $id_role;


    if ($id_role == "1") {
        $_SESSION['id_user']    = $id_user;
        $_SESSION['nm_user']    = $nm_user;
      echo "<script>window.location.replace('admin/');</script>";
    } elseif ($id_role == "2") {
      $_SESSION['id_user']    = $id_user;
      $_SESSION['nm_user']    = $nm_user;
      $_SESSION['id_Role']    = $id_Role;
      echo "<script>window.location.replace('user/');</script>";
    } else {
    $_SESSION['pesan'] = 'Username atau Password Tidak Ditemukan';
    echo "<script>window.location.replace('login');</script>";
  }
}
}


?>