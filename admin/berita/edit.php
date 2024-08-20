<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM berita WHERE id_berita = '$id'");
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
                            <h1 class="m-0 text-dark">Pegawai</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Pegawai</li>
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
                                            <label class="col-sm-2 col-form-label">URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="url" value="<?= $row['url'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sumber Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="sumber_berita" value="<?= $row['sumber_berita'] ?>">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tema Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="tema" value="<?= $row['tema'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Berita</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="tgl_berita" value="<?= $row['tgl_berita'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ringkasan</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" class="form-control" name="ringkasan"><?= $row['ringkasan'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <textarea type="textarea" class="form-control" name="keterangan"><?= $row['keterangan'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Berita</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="pemilah">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Positif" <?php if ($row['pemilah'] == "Positif") {
                                                                                        echo "selected";
                                                                                    } ?>>Positif</option>
                                                    <option value="Negatif" <?php if ($row['pemilah'] == "Negatif") {
                                                                                        echo "selected";
                                                                                    } ?>>Negatif</option>
                                                    <option value="Hoax" <?php if ($row['pemilah'] == "Hoax") {
                                                                                        echo "selected";
                                                                                    } ?>>Hoax</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Verifikasi</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" data-placeholder="Pilih" name="verifikasi">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Unverif" <?php if ($row['verifikasi'] == "Unverif") {
                                                                                        echo "selected";
                                                                                    } ?>>Unverif</option>
                                                    <option value="Verif" <?php if ($row['verifikasi'] == "Verif") {
                                                                                        echo "selected";
                                                                                    } ?>>Verif</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/berita/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $url = $_POST['url'];
        $sumber_berita = $_POST['sumber_berita'];
        $tema = $_POST['tema'];
        $tgl_berita = $_POST['tgl_berita'];
        $ringkasan = $_POST['ringkasan'];
        $keterangan = $_POST['keterangan'];
        $pemilah = $_POST['pemilah'];
        $verifikasi = $_POST['verifikasi'];

        $submit = $koneksi->query("UPDATE berita SET 
        url = '$url',
        sumber_berita = '$sumber_berita',
        tema = '$tema',
        tgl_berita = '$tgl_berita',
        ringkasan = '$ringkasan',
        keterangan = '$keterangan',
        pemilah = '$pemilah',
        verifikasi = '$verifikasi'
        WHERE 
        id_berita = '$id'
        ");


        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Diubah";
            echo "<script>window.location.replace('../berita/');</script>";
        }
    }

    ?>
</body>

</html>