<?php
require '../../config/config.php';
require '../../config/koneksi.php';
require '../../config/day.php';
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
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item active">Pengguna</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-outline">
                                <div class="card-header">
                                    <a href="tambah" class="btn bg-green"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                                    <!-- <a href="print" target="blank" class="btn bg-info"><i class="fa fa-print"> Cetak</i></a> -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    ?>
                                        <div class="alert alert-info alertinfo" id_role="alert1                                     <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                        </div>
                                    <?php
                                        $_SESSION['pesan'] = '';
                                    }
                                    ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Keterangan Pengguna</th>
                                                    <th>Role</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            $data = $koneksi->query("SELECT * FROM user AS u
                                            LEFT JOIN role AS r
                                            ON u.id_role = r.id_role");
                                            while ($row = $data->fetch_array()) {
                                            ?>
                                                <tbody style="background-color: white">
                                                    <tr>
                                                        <td align="center"><?= $no++ ?></td>
                                                        <td><?= $row['username'] ?></td>
                                                        <td>
                                                            <Label>Nama : &nbsp;</Label><?= $row['nm_user'] ?><br>
                                                            <Label>Jk : &nbsp;</Label><?= $row['jk'] ?><br>
                                                            <Label>TTL : &nbsp;</Label><?= $row['tmp_lahir'].'/'.$row['tgl_lahir'] ?><br>
                                                            <Label>Alamat : &nbsp;</Label><?= $row['alamat'] ?><br>
                                                            <Label>Pekerjaan : &nbsp;</Label><?= $row['pekerjaan'] ?><br>
                                                            <Label>Email : &nbsp;</Label><?= $row['email'] ?><br>
                                                        </td>
                                                        <td><?= $row['role'] ?></td>
                                                        <td align="center">
                                                            <?php if ($row['id_role'] == '1') { ?>
                                                                <a href="edit?id=<?= $row['id_user'] ?>" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                                                            <?php } else { ?>
                                                                <a href="edit?id=<?= $row['id_user'] ?>" class="btn btn-success btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                                                                <a href="hapus?id=<?= $row['id_user'] ?>" class="btn btn-danger btn-xs alert-hapus" title="Hapus"><i class="fa fa-trash"></i></a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
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
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>

</body>

</html>