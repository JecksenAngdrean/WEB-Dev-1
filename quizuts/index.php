<?php
session_start();

if(isset($_SESSION['username']))
{
        header("location:dasbor/index.php");
}
?>
<!DOCTYPE html>
<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="container">
        <div class="main">
            <form method="post" action="proses_login_member.php" id="form" enctype="multipart/form-data">
                <h2>Login</h2><hr>

                <label>Username :</label>
                <input type="text" name="username" placeholder="Masukkan username" required>

                <label>Password :</label>
                <input type="password" name="password" placeholder="Masukkan password" required>

                <input type="submit" name="login" value="LOGIN">

                <br><br>
                <center><b>Jika belum punya akun? Silahkan</b> <a href="daftar.php">Daftar</a></center>
            </form>
        </div>
    </div>
</body>
    <?php   
      include('../footer.php');
    ?>
</html>