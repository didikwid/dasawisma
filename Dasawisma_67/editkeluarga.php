<?php
    //Memanggil Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dasawisma";

    $koneksi = mysqli_connect($server, $user, $password, $database)or die(mysqli_error($koneksi));

    //Jika tombol simpan di klik
	if(isset($_POST['isimpan']))
	{
    		if($_GET['hal'] == "edit")
    		{
    			//Data akan di edit
    			$edit = mysqli_query($koneksi, "UPDATE keluarga set
    											 	NoKK = '$_POST[kNoKK]',
    											 	KepalaKeluarga = '$_POST[kkepalakeluarga]',
    												Dasawisma = '$_POST[kdasawisma]',
    											 	Lingkungan = '$_POST[klingkungan]',
                                                    Kelurahan = '$_POST[kkelurahan]',
                                                    Kecamatan = '$_POST[kkecamatan]'
    											WHERE idkeluarga = '$_GET[id]'
    										   ");
    			if($edit) //jika edit sukses
    			{
    				echo "<script>
    						alert('Data Berhasil di Edit!');
    						document.location='Datakeluargaketua.php';
    				     </script>";
    			}
    			else
    			{
    				echo "<script>
    						alert('Data Gagal di Edit!!');
    						document.location='Datakeluargaketua.php';
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
            $tampil = mysqli_query($koneksi, "SELECT * FROM keluarga WHERE idkeluarga = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                //Jika data ditemukan, maka data ditampung ke dalam variabel
                $bnokk = $data['NoKK'];
                $bkepalakeluarga = $data['KepalaKeluarga'];
                $bdasawisma = $data['Dasawisma'];
                $blingkungan = $data['Lingkungan'];
                $bkelurahan = $data['Kelurahan'];
                $bkecamatan = $data['Kecamatan'];
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
    <title>Edit Data Keluarga</title>

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
                    <h6 style="text-align:center"><b>EDIT DATA KELUARGA</b></h6>
                    <hr color="black">
                    <div class="form-group">
                        <label>No. KK</label>
                        <input type="number" name="kNoKK" value="<?=@$data['NoKK']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kepala keluarga</label>
                        <input type="text" name="kkepalakeluarga" value="<?=@$data['KepalaKeluarga']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dasawisma</label>
                        <input type="text" name="kdasawisma" value="<?=@$data['Dasawisma']; ?>" class="form-control" placeholder="Masukkan Nama Dasawisma" required>
                    </div>
                    <div class="form-group">
                        <label>Lingkungan</label>
                        <input type="text" name="klingkungan" value="<?=@$data['Lingkungan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" name="kkelurahan" value="<?=@$data['Kelurahan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kkecamatan" value="<?=@$data['Kecamatan']; ?>" class="form-control" required>
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