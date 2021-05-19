<?php

    //Memanggil Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dasawisma";

    $koneksi = mysqli_connect($server, $user, $password, $database)or die(mysqli_error($koneksi));
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pelatihan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <!-- Awal Card Tabel -->
    <div class="card mt-3" style="background-color: rgba(231, 116, 185, 0.6);">
      <div class="card-header text-black text-center">
        Pelatihan
      </div>
      <div class="card-body">
        
        <table class="table table-bordered table-striped">
        <style type="text/css">
        table td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: black;
            background-color: rgba(0,0,0,.03);
        }
        </style>
            <tr>
                <th>No.</th>
                <th>Nama Pelatihan</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tahun</th>
                <th>Keterangan</th>
                <th>Dasawisma</th>
                <th>Pilihan</th>
            </tr>
            <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from pelatihan order by idpelatihan desc");
                while($data = mysqli_fetch_array($tampil)){

            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['NamaPelatihan']?></td>
                <td><?=$data['NIK']?></td>
                <td><?=$data['Nama']?></td>
                <td><?=$data['Tahun']?></td>
                <td><?=$data['Keterangan']?></td>
                <td><?=$data['Dasawisma']?></td>
                <td>
                    <a href="editpelatihan.php?hal=edit&id=<?=$data['idpelatihan']?>" class="btn btn-warning"> Edit </a>
                    <a href="index.php?hal=hapus&id=<?=$data['idpelatihan']?>" 
                       onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                </td>
            </tr>
        <?php } //penutup perulangan while ?>
        </table>

      </div>
    </div>
    <!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

