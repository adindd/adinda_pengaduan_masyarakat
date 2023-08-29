<?php
session_start();
// if (!isset($_SESSION['nama']))
// {
//     die("Anda belum Login");
// }
?>

<?php

$koneksi = new PDO("mysql:host=localhost;dbname=laporanpengaduanmasyarakat","root", "");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();


//if($koneksi){
//  echo "koneksi berhasil";
//}else{
  //echo "koneksi gagal";
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>lihat pengaduan</title>
</head>
<body>
</body>
<body>
<nav class="navbar navbar-expand-lg" style="background-color:#8CABFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font face="" color="black">Pengaduan Masyarakat</font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form action="logout .php" method="post">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="masyarakat.php"><font face="" color="black">home</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buat_pengaduan.php"><font face="" color="black">buat pengaduan</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_pengaduan.php"><font face="" color="black">lihat pengaduan</font></a>
        </li>
      </ul>
    </div>
        <button class="btn btn-outline-success" type="submit" href="logout.php"><font face="" color="black">logout</font></button>
  </div>
</nav>
<br><br><br>
<div class="container">
<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>11111</td>
      <td>06-08-2023</td>
      <td>2122039</td>
      <td>Kebanjiran</td>
      <td> 
      <img src="kebanjiran.jpg" style="width:80px; height:80px;"/>
      </td>
      <td>Terkirim</td>
      </td>
    </tr>
  </tbody>
</table>
</div>