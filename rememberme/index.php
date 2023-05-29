<?php
$user = 'admin';
$pass = md5('admin');
session_start();
if(isset($_COOKIE['login']))
{
   if ($_COOKIE['login'] == $user)
   {
      $_SESSION['login'] = TRUE;
 
      header('location: ./home.php');
      exit();
   }
}
?>
<!DOCTYPE html>
<?php
include('../header.php');
include('../menu.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Remember Me Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <h1>Login Remember Me</h1>
    <form action="proses.php" method="post">
    <div class="kotak_login">
            <p class="tulisan_login">Silahkan Login</p>
            <label>Username</label>
                <input type="text" name="user" class="form_login" placeholder="Username atau Email ..">

                <label>Password</label>
                <input type="password" name="pass" class="form_login" placeholder="Password ..">
                <label for="remember"><input type="checkbox" name="remember" value="true"/> Remember Me</label>
                <br>
                <br>
            <input type="submit" name="Login" class="tombol_login" value="LOGIN">
            <center><a class="link" href="index.php">Reset</a></center>
    </div>
    </body>
</html>
<?php
include('../footer.php')
?>