<?php
    //Memanggil Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dasawisma";

    $koneksi = mysqli_connect($server, $user, $password, $database)or die(mysqli_error($koneksi));


    //Pengujian jika tombol Edit di klik
    if(isset($_POST['isimpan']))
    {
            if($_GET['hal']=='edit')
            {
                $edit = mysqli_query($koneksi, "UPDATE perkarangan SET
                                                            KepalaKeluarga = '$_POST[pkepalakeluarga]', 
                                                            Kategori = '$_POST[pkategori]', 
                                                            Komoditi = '$_POST[pkomoditi]', 
                                                            Jumlah = '$_POST[pjumlah]',
                                                            Dasawisma = '$_POST[pdasawisma]',
                                                            Kendala = '$_POST[pkendala]'
                                                            where idperkarangan='$_GET[id]'
                                                ");
                if($edit) //jika berhasil disimpan
                {
                    echo "<script>
                                alert('Data Berhasil di Edit!');
                                document.location='Dataperkaranganketua.php';
                        </script>";
                }
                else //jika gagal disimpan
                {
                    echo "<script>
                                alert('Data Gagal di Edit!!');
                                document.location='Dataperkaranganketua.php';
                        </script>";
                }
            }
    }
	if(isset($_GET['hal']))
	{
		//Pengujian jika edit Data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM perkarangan WHERE idperkarangan = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$bKepalaKeluarga = $data['KepalaKeluarga'];
				$bKategori = $data['Kategori'];
				$bKomoditi = $data['Komoditi'];
				$bJumlah = $data['Jumlah'];
                $bDasawisma = $data['Dasawisma'];
                $bKendala = $data['Kendala'];
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pemanfaatan Perkarangan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/EditData.css">
</head>
<body>
<br/><br/>
    <img class="tengah" src="logo.jpg"/><br/>
        <h1 class="text-center">DASAWISMA INDONESIA</h1>
        <div class="data-form">
                <form method="post" action="#">
                    <h6 style="text-align:center"><b>EDIT DATA PEMANFAATAN PERKARANGAN</b></h6>
                    <hr color="black">
                    <div class="form-group">
                        <label>Kepala Keluarga</label>
                        <input type="text" name="pkepalakeluarga" value="<?=@$data['KepalaKeluarga']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="pkategori" value="<?=@$data['Kategori']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Komoditi</label>
                        <input type="text" name="pkomoditi" value="<?=@$data['Komoditi']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="pjumlah" value="<?=@$data['Jumlah']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dasawisma</label>
                        <input type="text" name="pdasawisma" value="<?=@$data['Dasawisma']; ?>>" class="form-control" placeholder="Nama Dasawisma" required>
                    </div>
                    <div class="form-group">
                        <label>Kendala</label>
                        <input type="text" name="pkendala" value="<?=@$data['Kendala']; ?>" class="form-control" required>
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