<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'");
$count = mysqli_num_rows($result);

// if ($cek>0){
//     $data=mysqli_fetch_array($q);
//     session_start();
//     $_SESSION['nama']=$username;
//     $_SESSION['nik']=$data['nik'];
//     header('location:masyarakat.php');
// }
// else 
// {
//     ?>
     <script type="text/javascript">
//     alert ('Username atau Password tidak ditemukan');
     window.location = "masyarakat.php";
//     </script>
     <?php
// }

?>