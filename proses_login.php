<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "laporanpengaduanmasyarakat";

$koneksi = mysqli_connect("localhost", "root", "", "laporanpengaduanmasyarakat");

$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'");
$count = mysqli_num_rows($result);

if ($count > 0) {
    session_start();
    $data = mysqli_fetch_array($result);
    $_SESSION['nama'] = $username;
    $_SESSION['nik'] = $data['nik'];
    header('location:halaman.php');
} else {
    ?>
    <script type="text/javascript">
        alert('Username atau Password Salah');
        window.location = "login.php";
    </script>
    <?php
}

?>
