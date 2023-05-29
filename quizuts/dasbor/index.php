<html>
<body>
<?php
include_once("../config.php");
session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}else{
    echo "<h1>Selamat Datang " . $_SESSION['username'] . " di Halaman Member</h1>";
    echo "<h2>Ini adalah contoh halaman member</h2>";
    echo "<h2>Teks ini hanya bisa di baca oleh member</h2>";
    echo "<h2><a href='logout.php'>Logout</a></h2>";
}
?>
  <a href="uts.docx"><h1>Link Download jawaban UTS materinya</h1></a>
</body>
</html>