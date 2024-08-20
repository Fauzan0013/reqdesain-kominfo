<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include '../../templates/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include '../../templates/sidebar.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Pengguna</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Master</li>
                                <li class="breadcrumb-item active">Pengguna</li>
                                <li class="breadcrumb-item active">Tambah Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

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
                                        <h3 class="card-title">Tambah Data</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nm_user" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="jk" required="">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="tmp_lahir" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="tgl_lahir" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" class="form-control" name="alamat" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="pekerjaan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="username" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control form-pass" name="password" required="">
                                                <div class="border-checkbox-group border-checkbox-group-primary">
                                                    <small>
                                                        <input class="border-checkbox form-cek" type="checkbox" id="checkbox1">
                                                        <label class="border-checkbox-label" for="checkbox1">Tampilkan Password</label>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih Role" id="role" name="id_role" required="">
                                                    <option value="">-Pilih-</option>
                                                    <option value="1">Administrator</option>
                                                    <option value="2">User</option>
                                                </select>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/user/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
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

        <?php include_once "../../templates/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../templates/script.php"; ?>

    <script>
        $(document).ready(function() {
            $('.form-cek').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-pass').attr('type', 'text');
                } else {
                    $('.form-pass').attr('type', 'password');
                }
            });

        });
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $nm_user = $_POST['nm_user'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $id_role  = $_POST['id_role'];

        $submit = $koneksi->query("INSERT INTO user VALUES (
        NULL,
        '$nm_user', 
        '$jk', 
        '$tmp_lahir', 
        '$tgl_lahir', 
        '$alamat', 
        '$pekerjaan', 
        '$email', 
        '$username', 
        '$password', 
        '$id_role')");

        if ($submit) {
            if ($id_role == "2") {
                $tkn =  $koneksi->query("SELECT * FROM user ORDER BY id_user DESC LIMIT 1")->fetch_array();
                $koneksi->query("INSERT INTO pegawai(
                id_user, 
                nm_pegawai, 
                jk, 
                tmp_lahir, 
                tgl_lahir, 
                alamat, 
                tugas, 
                email
                ) VALUES (
                '$tkn[id_user]', 
                '$tkn[nm_user]', 
                '$tkn[jk]',
                '$tkn[tmp_lahir]',
                '$tkn[tgl_lahir]',
                '$tkn[alamat]',
                '$tkn[pekerjaan]',
                '$tkn[email]'
                )");
            }
            $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
            echo "<script>window.location.replace('../user/');</script>";
        }
    }

    ?>
</body>

</html>