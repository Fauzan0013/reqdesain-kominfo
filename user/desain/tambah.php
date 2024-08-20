<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
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
                            <h1 class="m-0 text-dark">Permintaan Desain</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Permintaan Desain</li>
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
                                        <h3 class="card-title">Tambah </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="id_pegawai" readonly value="<?= $pegawai_id['nm_pegawai'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Desain</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="jenis_desain" required="">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Spanduk Besar">Spanduk Besar</option>
                                                    <option value="Spanduk Biasa">Spanduk Biasa</option>
                                                    <option value="Pamflet">Pamflet</option>
                                                    <option value="Banner">Banner</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi Desain</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control" name="deskripsi_desain" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Permintaan</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="tanggal_permintaan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="status" required="">
                                                    <option value="Proses">Proses</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/desain/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $jenis_desain = $_POST['jenis_desain'];
        $deskripsi_desain = $_POST['deskripsi_desain'];
        $tanggal_permintaan = $_POST['tanggal_permintaan'];
        $status = $_POST['status'];

        $submit = $koneksi->query("INSERT INTO desain VALUES (
        NULL,
        '$pegawai_id[id_pegawai]', 
        '$jenis_desain', 
        '$deskripsi_desain', 
        '$tanggal_permintaan',
        NULL,
        '$status', 
        NULL,
        NULL
        )");
        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
            echo "<script>window.location.replace('../desain/');</script>";
        }
    }

    ?>
</body>

</html>