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
            <input name="email" type="text" placeholder="Email">
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
