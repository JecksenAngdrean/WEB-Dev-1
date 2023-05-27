<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
<title>
   Halaman Perulangan
</title>
</head>
<body>
    <?php
    echo "<h1>Ini adalah halaman perulangan</h1>";
    echo "<h2>Terdapat 3 jenis perulangan</h2>";
    echo "<h1>1. Perulangan For:</h1>";
    for ($i=1; $i<=5; $i++)
    {
        echo"Ini adalah perulangan for ke-".$i."<br>";
    }
    echo "<h2>2. Perulangan while:</h2>";
    $i=0;
    while ($i<5)
    {
        echo "Ini adalah perulangan wile ke-".$i."<br>";
        $i++;
    }
    echo "<h2>3. Perulangan foreach:</h2>";
    $listmahawisa=['Nurul Huda','Wahid Abdullah','Dodi Wijaya'];
    foreach ($listmahawisa as $mahasiswa)
    {
        echo "Nama : ".$mahasiswa."<br>";
    }
    ?>
</body>
<?php
include('../footer.php')
?>
</html>