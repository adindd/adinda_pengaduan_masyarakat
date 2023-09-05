<?php
session_start();

$tgl_pengaduan = $_POST ['tgl_pengaduan'];
$nik = $_SESSION['nik'];
$isilaporan = $_POST['isi_laporan'];
$lokasi_foto = $_files['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['name'];
$status =0;

if (move_uploaded_file($lokasi_foto, 'foto/' . $nama_foto)) {
    $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status)
    VALUES ('$tgl_pengaduan', '$nik', '$isilaporan', '$nama_foto', '$status' )";

    include 'koneksi2.php';
    
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('pengaduan sudah tersimpan'); window.location.assign('lihat_pengaduan.php');</script>";
    } else {
        echo "<script>alert('pengaduan gagal tersimpan'); window.location.assign('id_pengaduan.php');</script>";
    }
}
