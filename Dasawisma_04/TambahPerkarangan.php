<?php

    //Memanggil Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dasawisma";

    $koneksi = mysqli_connect($server, $user, $password, $database)or die(mysqli_error($koneksi));

    //Data akan disimpan Baru
    if(isset($_POST['isimpan']))
    {
        $simpan = mysqli_query($koneksi, "INSERT INTO Perkarangan (KepalaKeluarga, Kategori, Komoditi, Jumlah, Dasawisma, Kendala)
                                                                        VALUES ('$_POST[pkepalakeluarga]', 
                                                                                '$_POST[pkategori]', 
                                                                                '$_POST[pkomoditi]', 
                                                                                '$_POST[pjumlah]',
                                                                                '$_POST[pdasawisma]',
                                                                                '$_POST[pkendala]')
                                                                    ");
        if($simpan) //jika berhasil disimpan
        {
            echo "<script>
                        alert('Data Berhasil di Simpan!');
                        document.location='Dataperkaranganketua.php';
                </script>";
        }
        else //jika gagal disimpan
        {
            echo "<script>
                        alert('Data Gagal di Simpan!!');
                        document.location='Dataperkaranganketua.php';
                </script>";
        }
    }
?>

<!DOCTYPE html> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pemanfaatan Perkarangan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TambahData.css">
</head>
<body>
<br/><br/>
    <img class="tengah" src="img/logo.jpg"/><br/>
        <h1 class="text-center">DASAWISMA INDONESIA</h1>
        <div class="data-form">
                <form method="post" action="#">
                    <h6 style="text-align:center"><b>TAMBAH DATA PEMANFAATAN PERKARANGAN<b></h6>
                    <hr color="black">
                    <div class="form-group">
                        <label>Kepala Keluarga</label>
                        <input type="text" name="pkepalakeluarga" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="pkategori" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Komoditi</label>
                        <input type="text" name="pkomoditi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="pjumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dasawisma</label>
                        <input type="text" name="pdasawisma" class="form-control" placeholder="Nama Dasawisma" required>
                    </div>
                    <div class="form-group">
                        <label>Kendala</label>
                        <input type="text" name="pkendala" class="form-control" required>
                    </div>
                    <div class="d-flex">
                        <div class="mt-3"></div>
                        <div class="mr-auto p-0">
                            <button type="button" class="btn btn-dark center-block" onclick="history.back();">Batal</button>
                        </div>
                        <div class="ml-auto p-0">
                            <button type="submit" class="btn btn-success center-block" name="isimpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>