<?php
session_start();
// if (!isset($_SESSION['nama']))
// {
//     die("Anda belum Login");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">

    <title>home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#8CABFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="logout.php">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="masyarakat.php">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="buat_pengaduan.php">buat pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lihat_pengaduan.php">lihat pengaduan</a>
        </li>

      </ul>
      <form class="d-flex" role="">
      <button class="btn btn-outline-success" type="submit" href="logout.php"><font face="" color="black">logout</font></button>
      </form>
    </div>
</body>
</html>