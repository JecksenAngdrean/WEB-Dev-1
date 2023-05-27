<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
<title>
   Halaman Percabangan
</title>
</head>
<body>
    <?php
    echo "<h1>Ini adalah Halaman Percabangan</h1>";
    $nilai = 50;
    if ($nilai >=85 and $nilai <=100)
    {
        echo "<h2>Predikat: A </h2>";
    }
    elseif ($nilai >=75)
    {
        echo "<h2>Predikat: B </h2>";
    }
    elseif ($nilai >=60)
    {
        echo "<h2>Predikat: C </h2>";
    }
    elseif ($nilai >=50)
    {
        echo "<h2>Predikat: D </h2>";
    }
    elseif ($nilai >=0)
    {
        echo "<h2>Predikat: E </h2>";
    }
    else 
    {
        echo "<h2>Nilai Tidak Valid.<h2>";    
    }
    ?>
<?php
echo "<h1>Implementasi Percabagan Switch Case</h1>";
$Xiaomi = 'Pria';
switch($Xiaomi)
{
    case 'Eletronik':
        echo 'Xiaomi adalah merk eletronik';
        break;
    case 'Perkakas':
        echo 'Oh ternyata adalah merk perkakas';
        break;
    default:
        echo 'Merk Xiaomi tidak dapat saya kenali';
        break;
}
    ?>
<a href="halamanperulangan.php"><h1>Klik untuk ke halaman berikutnya</h1></a>   
</body>
<?php
include('../footer.php')
?>
</html>