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

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Data Warga Dasawisma</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="css/Home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title"><h6>Dasawisma Indonesia</h6></span></div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
				</div>
			</div>
			<!--header menu end-->

			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<li class="item">
						<a href="HomeketuaU.php" class="menu-btn">
							<i class="fas fa-home"></i><span>Beranda</span>
						</a>
					</li>
					<li class="item">
						<a href="Datawargaketua.php" class="menu-btn active">
							<i class="fas fa-file"></i><span>Data Warga</span>
						</a>
					</li>
                    <li class="item">
						<a href="Datapelatihanketua.php" class="menu-btn">
							<i class="fas fa-file"></i><span>Pelatihan</span>
						</a>
					</li>
					
					<li class="item" id="settings">
						<a href="#settings" class="menu-btn">
							<i class="fas fa-file"></i><span>Catatan Keluarga <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="Datakeluargaketua.php"><i class="fas fa-file"></i><span>Data Keluarga</span></a>
							<a href="Dataperkaranganketua.php"><i class="fas fa-file"></i><span>Pemanfaatan Perkarangan</span></a>
                            <a href="Pengumumanketua.html"><i class="fas fa-file"></i><span>Industri Rumah Tangga</span></a>
						</div>
					</li>
					<li class="item">
						<a href="Bantuanketua.html" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Bantuan</span>
						</a>
					</li>

					<li class="item">
						<a href="index.php" class="menu-btn">
							<i class="fas fa-arrow-left"></i><span>Keluar</span>
						</a>
					</li>
				</div>
			</div>

			<!--sidebar end-->

			<!--main container start-->
			<div class="main-container">
                <div class="card mt-3" style="background-color: rgba(231, 116, 185, 0.6);">
                <div class="card-header text-black text-center">
                    <h6><b>Data Warga</b></h6>
                </div>
                
                <div class="card-body">

                    <table class="table table-bordered table-striped">
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
                        $tampil = mysqli_query($koneksi, "SELECT * from warga order by idwarga asc");
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
                                    <a href="editwarga.php?hal=edit&id=<?= $data['idwarga'] ?>" class="btn btn-warning"> Edit </a>
                                    <a href="hapuswarga.php?hal=hapus&id=<?= $data['idwarga'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                                </td>
                            </tr>
                        <?php } //penutup perulangan while ?>
                    </table>
                    <a href="TambahWarga.php" class="btn btn-info fw-bold text-white mt-2" style="width: 140px; margin:5px;">Tambah Data</a>
                </div>
            </div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>