<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  
<?php
    $koneksi= mysqli_connect("localhost", "root", "", "laporanpengaduanmasyarakat");
    
  
    $query = $koneksi->query("SELECT * FROM pengaduan");
   
?>

<nav class="navbar navbar-expand-lg" style="background-color:#8CABFF;">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="halaman.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="id_pengaduan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_pengaduan.php">Lihat</a>
        </li>
      </ul>
      </div>
      <a class="nav-link" href="login.php"><button class="btn btn-outline-success" onclick="confirmLogout()"><font face="" color="black">Logout</font></button></a>
  </div>
    </div>
  </div>
</nav>
</body>

<body>
<br><br><br>
<a class="nav-link" href="id_pengaduan.php"><button class="btn btn-outline-success"><font face="" color="black">tambahkan</font></button></a>
<div class="container">
<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php while( $data = mysqli_fetch_array($query)) : ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $data['id_pengaduan'] ?></td>
      <td><?= $data['tgl_pengaduan'] ?></td>
      <td><?= $data['nik'] ?></td>
      <td><?= $data['isi_laporan'] ?></td>
      <td><?= $data['foto']?></td>
      <td><?= $data['status']?></td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</body>
</html>
