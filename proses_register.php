<?php 
 session_start(); 

 include  "koneksi2.php"; 
 $nik = $_POST['nik']; 
 $name = $_POST['nama']; 
 $username= $_POST['username']; 
 $password = password_hash( $_POST['password'], PASSWORD_DEFAULT); 
 $telepon = $_POST['telepon']; 

echo $password;
die();

 $query = $koneksi->query("INSERT INTO masyarakat VALUES ('$nik','$name','$username','$password','$telepon')"); 
  
 if ($query) { 
  
     $_SESSION['nik'] = $nik; 
     $_SESSION['level'] = 'masyarakat'; 
  
     header("location:halaman.php"); 
 } else { 
     var_dump($koneksi->errorInfo()); 
 }
