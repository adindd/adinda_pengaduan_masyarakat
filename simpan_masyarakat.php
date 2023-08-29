<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telepon'];
$sql = mysqli_query($conn, "INSERT INTO masyarakat VALUES ('$nik', '$nama', '$username', '$password', '$telp')");

if ($sql) {
    ?>  
    <script type="text/javascript">
        alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
        window.location = "index.php";
    </script>
    <?php
}
?>