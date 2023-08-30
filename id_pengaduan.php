<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <?php include "halaman.php" ?>
  <form action="lihat_pengaduan.php" method="POST" enctype="multipart/form-data">
    <div class="container">
    <form class="row g-3">
  <div class="col-md-2">
  <br><font face=""><label for="inputtanggal" class="form-label">Tanggal Pengaduan</label></font></br>
    <input type="date" class="form-control" id="tanggal">
  </div>
  <div class="col-2">
  <br><font face=""><label for="inputnik" class="form-label">Nik</label></font><br>
    <input type="text" class="form-control" id="inputAddress">
  </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Bukti Foto</label>
        <input class="form-control" type="file" id="formFile" name="foto">
      </div>
      <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
    </div>
    <br>
    <div class="d-grid gap-2 col-4 mx-auto">
      <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="#"></a>
    </div>
  </form>
</body>

</html>
