<?php
include_once("config.php");
session_start();

if (isset($_SESSION['uname']) || isset($_COOKIE['uname']))
{   
        header("location:dasbor/index.php");
        exit();
}
?>
<!DOCTYPE html>
<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
    <title>Sistem Informasi Berbasis Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="container">
        <div class="main">
            <form method="post" action="proses_login_member.php" id="form" enctype="multipart/form-data">
                <h2>Login</h2><hr>

                <label>Username :</label>
                <input type="text" name="username_login" id="username_login" required>

                <label>Password :</label>
                <input type="password" name="password_login" id="password_login" required>

                <input type="submit" name="submit_login" id="submit_login" value="LOGIN">

                <br><br>
                <center><b>Jika belum punya akun? Silahkan</b> <a href="daftar.php">Daftar</a></center>
            </form>
       
        </div>
    </div>
    <?php
        
      include('../footer.php');
    ?>

</body>

</html>