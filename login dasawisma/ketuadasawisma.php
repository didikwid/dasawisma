
<!DOCTYPE html>
<<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "dasawisma";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

if(isset($_POST['ilogin'])){
    $NIK = $_POST['tnik'];
    $Password = $_POST['tpassword'];
    
    $login = mysqli_query($koneksi, "select * from kdasawisma where NIK='$NIK'");
    $cek = mysqli_num_rows($login);

    if($cek === 1)
    {
        $fetch_pass = mysqli_fetch_assoc($login);
        $cek_password = $fetch_pass['Password'];

        if($cek_password <> $Password){
            echo"<script>alert('Password salah');</script>";
        }
        else{
            echo "<script>alert('Login Berhasil');
                document.location='homekdasawisma.php'</script>";
        }
    }else
    {
        echo"<script>alert('Username salah atau belum terdaftar');</script>";
    }
}

?>html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketua Dasawisma</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
<br/><br/>
    <img class="tengah" src="logo.jpg"/><br/>
        <div class="data-form">
                <form method="post" action="#">
                    <h6 style="text-align:center"><b>DASAWISMA INDONESIA</b></h6>
                    <h6 style="text-align:center"><b>Login sebagai Ketua Dasawisma :</b></h6>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="number" name="tnik" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="tpassword" class="form-control" required>
                    </div>
                    <div class="btn_login">
                    <button type="submit" name="ilogin" class="btn btn-block login">LOGIN</button>
                    </div><br>
                    <hr color="black">
                    <center>
                      <a class="link" href="">Forgot Password</a><br>
                      <a class="link" href="">Don't have an account? Register Now!</a>
		                </center>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>