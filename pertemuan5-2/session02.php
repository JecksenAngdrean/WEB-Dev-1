<?php
session_start();
if (isset($_SESSION['login'])){
   echo "<h1>Selmat Datang". $_SESSION['login'] ."</h1>";
   echo "<h2>Halaman ini hanya bisa diakses jika anda sudah login</h2>";
   echo "<h2>klik <a href='session03.php'>di sini(session03.php)</a>untuk LOGOUT</h2>";
} else{
    die ("Anda belum login! Anda tidak berhak masuk ke halaman ini. Silahkan login <a href='session01.php'>di sini</a>");
}
?>