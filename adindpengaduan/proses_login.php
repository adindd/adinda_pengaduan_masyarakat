<?php

$email      = $_POST['email'];
$password   = $_POST['password'];

include 'koneksi.php'
$sql = "SELECT * FROM masyarakat WHERE email='$email' AND password = '$password'";
$query = mysqli_query($koneksi,$sql);

if(mysqli_num_rows($query)>0){
    session_start();
    $_SESSION['email'] = $email;
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];

    header("");
}else{
    echo"<script>alert('Maaf anda gagal login'); window.location.assign('index.php'); </script>";
}

?>
