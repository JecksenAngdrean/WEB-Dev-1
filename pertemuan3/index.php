<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
<body>    
<center>
    <h2>Tugas 3</h2>
</center>
<?php
$namadepan ="Jecksen";
$namabelakang="Angdrean";
$kelas="TI-E";
echo "<h1>Hello World, This is My First PHP Website</h1>";
echo "<h2>Selamat datang ".$namadepan." ".$namabelakang.",".$gelar."</h2>";  
echo "<h1>Implementasi Aritmatika di PHP</h1>";
$a=1+1;
$b=5-2.5;
$c=5*5;
$d=8/2;
$e=10%6;

echo '<h2> Hasil Peritungan Dengan PHP</h2>';
echo 'Hasil 1 + 1 adalah'.$a;
echo '<br/>';
echo 'Hasil 5 - 2.5 adalah'.$b;
echo '<br/>';
echo 'Hasil 5 * 5 adalah'.$c;
echo '<br/>';
echo 'Hasil 8 / 2 adalah'.$d;
echo '<br/>';
echo 'Hasil 10 mod 6 adalah'.$e;

echo '<h2> Jenis tipe data hasil perhitungan diatas </h2>';
echo 'Tipe data dari 1 + 1 adalah';var_dump($a);
echo '<br/>';
echo 'Tipe data dari 5 - 2.5 adalah';var_dump($b);
echo '<br/>';
echo 'Tipe data dari 5 * 5 adalah';var_dump($c);
echo '<br/>';
echo 'Tipe data dari 8 / 2 adalah';var_dump($d);
echo '<br/>';
echo 'Tipe data dari 10 mod 6 adalah';var_dump($e);
echo '<br/>';
?>
<a href="halamanpercabangan.php"><h1>Klik untuk ke halaman berikutnya</h1></a>
</div>
</body>
<?php
include('../footer.php')
?>