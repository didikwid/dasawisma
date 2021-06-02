<?php

//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "dasawisma";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

//Data akan disimpan Baru
if (isset($_POST['idaftar'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO adasawisma (NIK, Nama, Password, Alamat, NoHP, Email)
                                                                        VALUES ('$_POST[wnik]', 
                                                                                '$_POST[wnama]', 
                                                                                '$_POST[wpassword]', 
                                                                                '$_POST[walamat]',
                                                                                '$_POST[wnohp]',
                                                                                '$_POST[wemail]')
                                                                                ");
    if ($simpan) //jika berhasil disimpan
    {
        echo "<script>
                        alert('Berhasil Mendaftar!');
                        document.location='loginanggota.php';
                </script>";
    } else //jika gagal disimpan
    {
        echo "<script>
                        alert('Gagal Mendaftar!!');
                        document.location='loginanggota.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar Anggota</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TambahData.css">
</head>

<body>
    <br /><br />
    <img class="tengah" src="logo.jpg" /><br />
    <h1 class="text-center">DASAWISMA INDONESIA</h1>
    <div class="data-form">
        <form method="post" action="#">
            <h6 style="text-align:center">Pendaftaran Anggota</h6>
            <div class="form-group">
                <label>NIK</label>
                <input type="number" name="wnik" class="form-control" placeholder="contoh : 1234560123456789" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="wnama" class="form-control" placeholder="contoh : Fulan Fulani" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="wpassword" class="form-control" placeholder="Password Anda" required>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="walamat" class="form-control" placeholder="contoh : Jl. Muda Lr. Kurma" required>
                </div>
                <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" name="wnohp" class="form-control" placeholder="contoh : 081122334455" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="wemail" class="form-control" placeholder="contoh : dasawisma@gmail.com" required>
                </div>
                <div class="d-flex">
                    <div class="mt-3"></div>
                    <div class="mr-auto p-0">
                        <button type="button" class="btn btn-dark center-block" onclick="history.back();">Batal</button>
                    </div>
                    <div class="ml-auto p-0">
                        <button type="submit" class="btn btn-success center-block" name="idaftar">Daftar</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
    </div>
</body>

</html>