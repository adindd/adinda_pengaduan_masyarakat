<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Register Page</title>
</head>
<body>
    <div class="input">
    <img src="register.png" style="width:80px; height:80px; margin-left:90px; margin-bottom:30px;"/>
        <h1>REGISTER</h1>
        <form method="post" action="proses_register.php" class="user">
        <div class="box-input">
            <i class="fa fa-solid fa-address-card"></i>
            <input name="nik" type="text" placeholder="Nik">
        </div>
        <div class="box-input">
            <i class="fa fa-solid fa-user"></i>
            <input name="nama" type="text" placeholder="Nama">
        </div>
        <div class="box-input">
            <i class="fa fa-solid fa-at"></i>
            <input name="username" type="text" placeholder="Username">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password">
        </div>
        <div class="box-input">
            <i class="fa fa-solid fa-phone"></i>
            <input name="telepon" type="text" placeholder="Telepon">
        </div>
        <button type="submit" name="login" class="btn-input">Register</button>
        <div class="bottom">
            <center>
            <p>Sudah punya akun?
                <a href="login.php">Login disini</a>
            </p>
            </center>
        </form>
        </div>
    </div>
</body>
</html>
