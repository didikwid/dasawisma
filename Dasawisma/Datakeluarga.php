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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Keluarga</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>
    <div class="container">
    <a href="TambahKeluarga.php" class="btn btn-info fw-bold text-white">Tambah Data</a>

        <!-- Awal Card Tabel -->
        <div class="card mt-3" style="background-color: rgba(231, 116, 185, 0.6);">
            <div class="card-header text-black text-center">
                Data Keluarga
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
                    $tampil = mysqli_query($koneksi, "SELECT * from keluarga order by idkeluarga desc");
                    while ($data = mysqli_fetch_array($tampil)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['NoKK'] ?></td>
                            <td><?= $data['KepalaKeluarga'] ?></td>
                            <td><?= $data['Dasawisma'] ?></td>
                            <td><?= $data['Lingkungan'] ?></td>
                            <td><?= $data['Kelurahan'] ?></td>
                            <td><?= $data['Kecamatan'] ?></td>
                            <td>
                                <a href="editkeluarga.php?hal=edit&id=<?= $data['idkeluarga'] ?>" class="btn btn-warning"> Edit </a>
                                <a href="hapuskeluarga.php?hal=hapus&id=<?= $data['idkeluarga'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                            </td>
                        </tr>
                    <?php } //penutup perulangan while 
                    ?>
                </table>
                <a href="homekdasawisma.php" class="btn btn-info"> Kembali </a>

            </div>
        </div>
        <!-- Akhir Card Tabel -->

    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>