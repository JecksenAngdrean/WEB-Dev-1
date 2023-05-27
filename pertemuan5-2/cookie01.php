<?php
$value = 'Jecksen';
$value2 = 'Jecksen Angdrean';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1> Ini halaman pengesetan cookie</h1>";

echo "<h2>klik <a href='cookie02.php'>di sini</a>Untuk pemeriksaan cookies</h2>";
?>