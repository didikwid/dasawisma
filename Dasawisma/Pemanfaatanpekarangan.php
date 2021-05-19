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
    <title>Pemanfaatan Perkarangan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <!-- Awal Card Tabel -->
    <div class="card mt-3" style="background-color: rgba(231, 116, 185, 0.6);">
      <div class="card-header text-black text-center">
        Pemanfaatan Pekarangan
      </div>
      <div class="card-body">
        
        <table class="table table-striped table-bordered">
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
                <th>Kepala Keluarga</th>
                <th>Kategori</th>
                <th>Komoditi</th>
                <th>Jumlah</th>
                <th>Dasawisma</th>
                <th>Kendala</th>
                <th>Pilihan</th>
            </tr>
            <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from perkarangan order by idperkarangan desc");
                while($data = mysqli_fetch_array($tampil)){

            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['KepalaKeluarga']?></td>
                <td><?=$data['Kategori']?></td>
                <td><?=$data['Komoditi']?></td>
                <td><?=$data['Jumlah']?></td>
                <td><?=$data['Dasawisma']?></td>
                <td><?=$data['Kendala']?></td>
                <td>
                    <a href="editperkarangan.php?hal=edit&id=<?=$data['idperkarangan']?>" class="btn btn-warning"> Edit </a>
                    <a href="index.php?hal=hapus&id=<?=$data['idperkarangan']?>" 
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
</html><!