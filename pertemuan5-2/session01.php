<?php
session_start();
if (isset($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "2044088" && $pass == "terserahmu") {
        $_SESSION['login'] = $user;
        echo "<h1>Anda Berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session02.php'>di sini (session02.php)</a> untuk menuju ke halaman pemeriksaan session</h2>";
    }else{
        echo "<h1>Anda gagal LOGIN karena kombinasi username dan password tidak sama</h1>";
        echo "<h2>Klik <a href='session01.php'>di sini </a>untuk kembali ke form login</h2>";
    }
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Implementasi session di PHP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <h1>Membuat desain form login dengan implementsi session</h1>
    <div class="kotak_login">
            <p class="tulisan_login">Silahkan Login</p>
            <label>Username</label>
                <input type="text" name="user" class="form_login" placeholder="Username atau Email ..">

                <label>Password</label>
                <input type="password" name="pass" class="form_login" placeholder="Password ..">

                <input type="submit" name="Login" class="tombol_login" value="LOGIN">

                <br>
                <br>
            <center> <a class="link" href="index.php">kembali</a></center>
    </div>
    </body>
</html>
<?php }
?>