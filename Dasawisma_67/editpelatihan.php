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
            $edit = mysqli_query($koneksi, "UPDATE pelatihan set
                                                        NamaPelatihan = '$_POST[tnamapelatihan]', 
                                                        NIK = '$_POST[tNIK]', 
                                                        Nama = '$_POST[tnama]', 
                                                        Tahun = '$_POST[ttahun]',
                                                        Keterangan = '$_POST[tketerangan]',
                                                        Dasawisma = '$_POST[tdasawisma]'
                                                        where idpelatihan = '$_GET[id]'
                                            ");
            if($edit) //jika berhasil disimpan
            {
                echo "<script>
                            alert('Data Berhasil di Edit!');
                            document.location='Datapelatihanketua.php';
                    </script>";
            }
            else //jika gagal disimpan
            {
                echo "<script>
                            alert('Data Gagal di Edit!!');
                            document.location='Datapelatihanketua.php';
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
			$tampil = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE idpelatihan = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$bnamapelatihan = $data['NamaPelatihan'];
				$bNIK = $data['NIK'];
				$bknama = $data['Nama'];
				$btahun = $data['Tahun'];
                $bketerangan = $data['Keterangan'];
                $bdasawisma = $data['Dasawisma'];
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
    <title>Edit Data Pelatihan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/EditData.css">
</head>
<body>
<br/><br/>
    <img class="tengah" src="img/logo.jpg"/><br/>
        <h1 class="text-center">DASAWISMA INDONESIA</h1>
        <div class="data-form">
                <form method="post" action="#">
                    <h6 style="text-align:center"><b>EDIT DATA PELATIHAN</b></h6>
                    <hr color="black">
                    <div class="form-group">
                        <label>Nama Pelatihan</label>
                        <input type="text" name="tnamapelatihan" value="<?=@$data['NamaPelatihan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="number" name="tNIK" value="<?=@$data['NIK']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="tnama" value="<?=@$data['Nama']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" name="ttahun" value="<?=@$data['Tahun']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="tketerangan" value="<?=@$data['Keterangan']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dasawisma</label>
                        <input type="text" name="tdasawisma" value="<?=@$data['Dasawisma']; ?>" class="form-control" placeholder="Nama Dasawisma" required>
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