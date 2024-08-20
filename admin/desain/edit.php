<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM desain WHERE id_desain = '$id'");
$row = $data->fetch_array();
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
                            <h1 class="m-0 text-dark">Desain</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Desain</li>
                                <li class="breadcrumb-item active">Edit Data</li>
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
                                        <h3 class="card-title">Ubah Data</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-9">
                                            <select class="form control select2" name="id_pegawai" id="id_pegawai" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $sd = $koneksi->query("SELECT * FROM pegawai ORDER BY id_pegawai DESC");
                                                    foreach ($sd as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_pegawai'] ?>" <?= $row['id_pegawai'] == $item['id_pegawai'] ? 'selected' : '' ?>><?= $item['nm_pegawai'] ?></option>
                                                        
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Desain</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="jenis_desain" required="">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Spanduk Besar" <?php if ($row['jenis_desain'] == "Spanduk Besar") {
                                                                                        echo "selected";
                                                                                    } ?>>Spanduk Besar</option>
                                                    <option value="Spanduk Biasa" <?php if ($row['jenis_desain'] == "Spanduk Biasa") {
                                                                                        echo "selected";
                                                                                    } ?>>Spanduk Biasa</option>
                                                    <option value="Pamflet" <?php if ($row['jenis_desain'] == "Pamflet") {
                                                                                        echo "selected";
                                                                                    } ?>>Pamflet</option>
                                                    <option value="Banner" <?php if ($row['jenis_desain'] == "Banner") {
                                                                                        echo "selected";
                                                                                    } ?>>Banner</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi Desain</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control" name="deskripsi_desain"><?= $row['deskripsi_desain'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Permintaan</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="tanggal_permintaan" value="<?= $row['tanggal_permintaan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="status">
                                                    <option value="Proses" <?php if ($row['status'] == "Proses") {
                                                                                        echo "selected";
                                                                                    } ?>>Proses</option>
                                                    <option value="Belum Selesai" <?php if ($row['status'] == "Belum Selesai") {
                                                                                        echo "selected";
                                                                                    } ?>>Belum Selesai</option>
                                                    <option value="Selesai" <?php if ($row['status'] == "Selesai") {
                                                                                        echo "selected";
                                                                                    } ?>>Selesai</option>
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


    <?php
    if (isset($_POST['submit'])) {
        $id_pegawai = $_POST['id_pegawai'];
        $jenis_desain = $_POST['jenis_desain'];
        $deskripsi_desain = $_POST['deskripsi_desain'];
        $tanggal_permintaan = $_POST['tanggal_permintaan'];
        $status = $_POST['status'];


        $submit = $koneksi->query("UPDATE desain SET 
        id_pegawai = '$id_pegawai',
        jenis_desain = '$jenis_desain',
        deskripsi_desain = '$deskripsi_desain',
        tanggal_permintaan = '$tanggal_permintaan',
        status = '$status'
        WHERE 
        id_desain = '$id'
        ");


        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Diubah";
            echo "<script>window.location.replace('../desain/');</script>";
        }
    }

    ?>
</body>

</html>