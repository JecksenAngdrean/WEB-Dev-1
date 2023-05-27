<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
<title>
   Membuat function versi kita sendiri
</title>
</head>
<body>
    <h1 style="text-align:center">Membuat function secara mandiri</h1>
    <?php
    function cetakhelloworld()
    {
        echo "Halo Dunia";
    }
    cetakhelloworld();
    ?>
    <h1 style="text-align:center">Membuat function dengan parameter</h1>
    <?php
    function tambah($angka1, $angka2)
    {
        return $angka1+$angka2;
    }
    function kurang($angka1, $angka2)
    {
        return $angka1-$angka2;
    }
    function kali($angka1, $angka2)
    {
     return $angka1*$angka2;
    }
    function bagi($angka1, $angka2)
    {
        return $angka1/$angka2;
    }
    $angkapertama=10;
    $angkakedua=2;
    echo "Hasil dari $angkapertama + $angkakedua=".tambah($angkapertama,$angkakedua)."<br>";
    echo "Hasil dari $angkapertama - $angkakedua=".tambah($angkapertama,$angkakedua)."<br>";
    echo "Hasil dari $angkapertama * $angkakedua=".tambah($angkapertama,$angkakedua)."<br>";
    echo "Hasil dari $angkapertama / $angkakedua=".tambah($angkapertama,$angkakedua)."<br>";
    ?>
</body>
<?php
include('../footer.php')
?>
</html>