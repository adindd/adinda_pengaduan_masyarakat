<!-- <?php 
 
 include 'koneksi.php';
 
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['username'])) {
     header("Location: berhasil_login.php");
 }
  
 if (isset($_POST['submit'])) {
     $email = $_POST['email'];
     $password = md5($_POST['password']);
  
     $sql = "SELECT * FROM masyarakat WHERE email='$email' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['username'] = $row['username'];
         header("Location: masyarakat.php");
     } else {
         echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
     }
 }
  
 ?> -->
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css" media="screen" title="no title">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     <title>Login Page</title>
 </head>
 <body>
     <div class="input">
     <img src="login.png" style="width:120px; height:120px; margin-left:75px; margin-bottom:30px;"/>
     <div class="container">
         <h1>LOGIN</h1>
         <form method="post" action="proses_login.php" class="user">
         <div class="box-input">
             <i class="fa fa-solid fa-envelope"></i>
             <input name="username" type="text" placeholder="Username">
         </div>
         <div class="box-input">
             <i class="fas fa-lock"></i>
             <input name="password" type="password" placeholder="Password">
         </div>
         <button type="submit" name="login" class="btn-input">Login</button>
         <div class="bottom">
             <center>
             <p>Belum punya akun?
                 <a href="register.php">Register disini</a>
             </p>
             </center>
         </form>
         </div>
     </div>
 </body>
 </html>
