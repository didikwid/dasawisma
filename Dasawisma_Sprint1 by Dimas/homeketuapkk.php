<?php

//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "dasawisma";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/Home2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>



    <!-- Icon
        <link rel="shortcut icon" href="../img/logo.jpg" /> -->

    <title>Home</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header-text">
            <i class='bx bx-menu' id="header-toggle"></i>
            <span class="logo-name">DASAWISMA INDONESIA</span>
        </div>
    </header>

    <div class="menubar" id="nav-bar">
        <nav class="navbar">
            <div>
                <a href="#" class="search">
                    <i class='bx bx-search nav_icon'></i>Pencarian
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-home-circle nav_icon'></i>Beranda
                    </a>
                    <a href="#" class="nav_link">
                        <i href="datawarga.php" class='bx bx-file-blank nav_icon'></i>Data Warga
                    </a>
                    <a href="#" class="nav_link">
                        <i href="pelatihan.php" class='bx bx-file-blank nav_icon'></i>Pelatihan
                    </a>
                    <a class="nav_link"><i class='bx bx-file-blank nav_icon'></i>Catatan Keluarga</a>
                    <div class="submenu">
                        <a href="datakeluarga.php" class="sub-item">Data Keluarga</a>
                        <a href="pemanfaatanpekarangan.php" class="sub-item">Pemanfaatan Perkarangan</a>
                        <a href="#" class="sub-item">Industri Rumah Tangga</a>
                    </div>
                </div>
                <a href="#" class="nav_link">
                    <i href="index.php" class='bx bx-log-out nav_icon'></i>Keluar
                </a>
            </div>
        </nav>
    </div>

    <!-- isi home 

    <div class="holder">
        <div class="card">
            <div class="card__text">
                <div class="header_img">
                    <img src="../img/profile.png" alt="">
                </div>
                <h3>Nama : <?php echo  $_SESSION["Nama"] ?></h3>
                <h3>NIK : <?php echo  $_SESSION["NIK"] ?></h3>
                <h3>Email : <?php echo  $_SESSION["Email"] ?></h3>
                <h3>Status : <?php echo  $_SESSION["Level"] ?></h3>
            </div>
        </div>
    </div> -->

    <?php
    $query = mysqli_query($koneksi, "SELECT *FROM ketuapkk");
    while ($data = mysqli_fetch_assoc($query)) {
    ?>

        <!-- Jumbotron -->
        <div class="jumbotron text-center">
            <img src="personal.jpg" alt="Ketua PKK" width="100" class="rounded-circle img-thumbnail" />
            <h4>Anggota Dasawisma</h4>
            <p class="lead">
            <p><? echo $data['NIK'] ?></p>
            <p><? echo $data['Nama'] ?></p>
        <?php } ?>
        </p>

        </div>

        <!--===== MAIN JS =====-->
        <script type="text/javascript">
            $(document).ready(function() {
                //jquery for toggle sub menu
                $('.nav_link').click(function() {
                    $(this).next('.submenu').slideToggle();
                });
            });
        </script>
</body>

</html>