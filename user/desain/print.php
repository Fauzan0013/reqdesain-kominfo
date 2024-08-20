<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);
$pegawai_id = $koneksi->query("SELECT * FROM pegawai AS p 
LEFT JOIN user AS u
ON p.id_user = u.id_user
WHERE p.id_user = $_SESSION[id_user] 
ORDER BY id_pegawai DESC")->fetch_array();

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA </title>
</head>

<body>

    <p align="center">
        <b>
            <img src="<?= base_url('assets/dist/img/provkalsel.png') ?>" align="left" width="60" height="80">
            <font size="5">DINAS KOMUNIKASI DAN INFORMATIKA</font>
            <br>
            <font size="5">PROVINSI KALIMANTAN SELATAN</font>
            <br>
            <font size="2">Alamat : Jalan Dharma Praja II Kawasan Perkantoran Pemerintah Provinsi Kalimantan Selatan,
                <br>
                Cempaka, Kota Banjarbaru, Kalimantan Selatan 70732
            </font>
            <br>
            <hr size="1px" color="black">
            <h4 align="center"><u>Laporan Desain</u></h4>
        </b>
    </p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="bg-primary">
                        <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Desain</th>
                    <th>Deskripsi Desain</th>
                    <th>Tanggal Permintaan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody style="background-color: white">
                <?php
                $no = 1;
                $data = $koneksi->query("SELECT * FROM desain AS d
                LEFT JOIN pegawai AS p 
                ON d.id_pegawai = p.id_pegawai 
                WHERE p.id_pegawai = $pegawai_id[id_pegawai]
                ORDER BY id_desain DESC");
                while ($row = $data->fetch_array()) {
                ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td><?= $row['nm_pegawai'] ?></td>
                        <td><?= $row['jenis_desain'] ?></td>
                        <td><?= $row['deskripsi_desain'] ?></td>
                        <td><?= $row['tanggal_permintaan'] ?></td>
                        <td><?= $row['status'] ?></td>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>

    </div>

    </div>
    <div style="text-align: center; display: inline-block; float: right;">
        <h5>
            Banjarbaru , <?php echo tgl_indo(date('Y-m-d')); ?><br>
            Kepala Dinas
            <br>
            <br>
            <br>
            Dr. H. MUHAMAD MUSLIM. S.Pd, M.Kes <br>
            NIP. 19680311 198903 1 003
        </h5>

    </div>

</body>

</html>

<script>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    ?>
</script>