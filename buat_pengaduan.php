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
    <title>buat pengaduan</title>
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
    <form action="logout.php" method="post">
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

  <form class="row g-3">
  <div class="col-md-2">
  <br><font face=""><label for="inputidpengaduan" class="form-label">id pengaduan</label></font></br>
    <input type="text" class="form-control" id="inputpengaduan">
  </div>
  <div class="col-md-2">
  <br><font face=""><label for="inputtanggal" class="form-label">tanggal pengaduan</label></font></br>
    <input type="date" class="form-control" id="tanggal">
  </div>
  <div class="col-2">
  <br><font face=""><label for="inputnik" class="form-label">Nik</label></font><br>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">isi laporan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="col-3">
  <br><font face=""><label for="inputfile" class="form-label">bukti foto</label></font></br>
  <font face=""><input type="file" class="form-control" id="inputfile"></font>
  </div>
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck"><font face="">cek kembali</label></font>
    </div>
  </div>
  <br><br>
  <form class="d-flex" role="">
        <button class="btn btn-outline-success" type="submit" href="logout.php">Logout</button>
      </form>
</form>

  </tbody>
</table>
</body>
</html>