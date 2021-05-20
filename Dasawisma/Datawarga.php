<?php

//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "dasawisma";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Warga</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <!-- Awal Card Tabel -->
        <div class="card mt-3" style="background-color: rgba(231, 116, 185, 0.6);">
            <div class="card-header text-black text-center">
                Data Warga
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <style type="text/css">
                        table td {
                            border-width: 1px;
                            padding: 8px;
                            border-style: solid;
                            border-color: black;
                            background-color: rgba(0, 0, 0, .03);
                        }
                    </style>
                    <tr>
                        <th>No.</th>
                        <th>No. KK</th>
                        <th>Kepala Keluarga</th>
                        <th>Dasawisma</th>
                        <th>Lingkungan</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Pilihan</th>
                    </tr>
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * from warga order by idwarga desc");
                    while ($data = mysqli_fetch_array($tampil)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nokk'] ?></td>
                            <td><?= $data['kepalakeluarga'] ?></td>
                            <td><?= $data['dasawisma'] ?></td>
                            <td><?= $data['lingkungan'] ?></td>
                            <td><?= $data['kelurahan'] ?></td>
                            <td><?= $data['kecamatan'] ?></td>
                            <td>
                                <a href="editwarga.php?hal=edit&id=<?= $data['idwarga'] ?>" class="btn btn-warning"> Edit </a>
                                <a href="hapuswarga.php?hal=hapus&id=<?= $data['idwarga'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                            </td>
                        </tr>
                    <?php } //penutup perulangan while 
                    ?>
                </table>

            </div>
        </div>
        <!-- Akhir Card Tabel -->

    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>