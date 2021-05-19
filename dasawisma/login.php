<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "dasawisma";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <div class="img" align="center">
    <img src="logo.jpg" width="100" align="center">

    <title>DASA WISMA INDONESIA</title>

    <title>Login Sebagai :</title>
      </div>
    <nav>
      <ul>
      
          </ul>
    </nav>
    <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style type="text/css">

body{
    background-image: linear-gradient(-90deg, #d884b8, #e894c4);
}

.contact-form{
  width: 85%;
  max-width: 600px;
  background: #FDACFF;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #000000b3;
  font-family: "Montserrat",sans-serif;
}
.contact-form h1{
  margin-top: 0;
  font-weight: 200;
}
.txtb{
  border:1px aqua;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}
.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border: none;
  background: #FDACFF;
  outline: none;
  font-size: 18px;
  margin-top: 6px;
}
.btn{
  display: inline-block;
  background: #FF28EA;
  padding: 14px 0;
  color: black;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 8px;
  width: 100%;
}
  </style>
  </head>
  <body class="bg">
    <div class="container">
    <nav >
      <ul>
    </nav>
  </div>
  <form>
  <div class="contact-form">
    <h1>DASA WISMA INDONESIA</h1>
     <h1>Login Sebagai :</h1>
    <div class="txtb">
    <a href = "ketuapkk.php" class="btn" type="login">Ketua PKK</a>
    <a href = "ketuadasawisma.php" class="btn" type="login">Ketua Dasawisma</a>
    <a href = "adasawisma.php" class="btn" type="login">Anggota Dasawisma</a> 

    </div>
  
  </div>
  </form>
  </body>
</html>