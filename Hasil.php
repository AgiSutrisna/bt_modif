<?php 
$koneksi = mysqli_connect("localhost", "root", "", "bt");
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$instansi = $_POST['instansi'];
$jeniskelamin = $_POST['jeniskelamin'];
$komentar = $_POST['komentar'];

$query = "INSERT INTO hasil VALUES ('$nama','$umur','$instansi','$jeniskelamin','$komentar')";

mysqli_query($koneksi, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Respon Berhasil</title>
<style>
body {
  background-image: url("responbg.png");
  background-repeat: no-repeat;
  background-size: 100% 150%;
 }

.judul {
  text-align: center;
  font-size:xxx-large;
  font-family: Verdana;
  background-color: #009900;
  padding: 3px ;
  width: 25rem;
  position: relative;
  border-radius: 10px;
  border-style: solid;
  border-color: black;
  border-width: 2px ;
  font-family: cursive
}

.posisijudul {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 17.5%;
}

.kembali {
  position: relative;
  left: 0;
  bottom: 0;
text-align: center;
align-items: center;
justify-content: center;
 background: rgb(0, 0, 0);
 padding: 10px;
 border-radius:10px;
 font-size: x-large;
 border-style: solid;
  border-color: black;
  border-width: 1px ;
}

.tombolbek {
  display: flex;
  justify-content: center;
}

.bek {
  text-decoration: none;
  color: white;
  font-style: normal;
  font-family: 'Nunito', sans-serif;
  font-weight: bolder;
}

</style>
</head>
<body>
<div class="posisijudul">
<h1 class="judul"><font color="ffff02">TERIMAKASIH</font><h1>
</div>

<div class="tombolbek">
 <div class="kembali">
  <a href="BukuTamu.php" class= "bek" >BACK</a>
</div>
</div>

</body>
</html>