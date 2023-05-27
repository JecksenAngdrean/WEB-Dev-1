<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
<title>
    Implementasi PHP Function, Array, Multi Array, String, dan File
</title>
</head>
<body>
    <h1 style="text-align:center">Menggunakan PHP Function Math</h1>
    <?php
    $akar_kuadrat =sqrt(49);
    $perpangkatan=pow(12,2);
    $maksimum=max (2,4,6,8,10);
    $random=rand(100,100000);
    echo "Akar Kudart dari 49 adalah".$akar_kuadrat."<br>";
    echo "Akar pangkat 2 dari 12 adalah".$perpangkatan."<br>";
    echo "Nilai maksimum dari himpunan 2,4,6,8,10".$maksimum."<br>";
    echo "Menghasilkan nilai random dengan function rand() yakni".$random."<br>";
    echo "Untuk implementasi function math lebih lengkap, silahkan klik link ini <a href='https://www.w3schools.com/php/php_ref_math.asp' target='_blank'> Belajar function math dari website w3schools </a><br>";
    echo "atau link ini <a href='https://www.php.net/manual/en/ref.math.php' target='_blank'> Belajar function math dari website PHP </a><br>";
    echo "Klik link ini untuk belajar materi selanjutnya <a href='functionmandiri.php' target='_blank'> Belajar lagi </a><br>";
    ?>
    <a href="uts.docx"><h1>Link Download Tugasnya</h1></a>
</body>
<?php
include('../footer.php')
?>
</html>