<?php 
 session_start(); 
 include "koneksi2.php"; 
 $nik = $_POST['nik']; 
 $name = $_POST['nama']; 
 $username = $_POST['username']; 
 $password = $_POST['password']; 
 $telepon = $_POST['telepon']; 
 $query = $koneksi->query("INSERT INTO masyarakat VALUES ('$nik','$name','$username','$password','$telepon')"); 
  
 if ($query) { 
  
     $_SESSION['nik'] = $nik; 
     $_SESSION['level'] = 'masyarakat'; 
  
     header("location:halaman.php"); 
 } else { 
     var_dump($koneksi->errorInfo()); 
 }
