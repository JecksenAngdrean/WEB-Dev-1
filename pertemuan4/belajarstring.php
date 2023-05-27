<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
<title>
    Belajar Manipulasi String pada PHP
</title>
</head>
<body>
    <h1 style="text-align:center">Mencoba String Function</h1>
    <?php
   $kalimat = "Belajar pemogramn di malasngoding.com";
   echo "Menghitung Jumlah Kalimat:".strlen($kalimat)."<br>";
   echo "Menghitung Jumlah Kata:".str_word_count($kalimat)."<br>";
   echo "Membalik string:".strrev($kalimat)."<br>";
   echo "Memfilter dan mengganti string:".str_replace("yang ingin diganti","pengganti","isi string")."<br>";
   echo "Mengganti Kata Belajar Menjadi Tutorial:".str_replace("Belajar","Tutorial",$kalimat)."<br>";
?>
</body>
<?php
include('../footer.php')
?>
</html>