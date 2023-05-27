<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
<title>
    Belaar Array
</title>
</head>
<body>
    <h1 style="text-align:center">Implementasi Array</h1>
    <?php
    $array_biasa=array(1,2,3,4,5);
    $arr_dengan_key=array(
        1=>"PHP",
        2=>"MySQL",
        3=>"Java",
    );
    echo "<h2>Perulangan Array Biasa</h2>";
    for ($i=0;$i<count($array_biasa);$i++)
    {
        echo "Isi array item biasa adalah : $array_biasa[$i] <br>";
    }
    echo "<h2>Perulangan Array Dengan Key</h2>";
    foreach ($arr_dengan_key as $arritem)
    {
        echo "Isi array item adalah: $arritem <br>";
    }
    ?>
    <h1 style="text-align:center">Implementasi Multi Array</h1>
    <?php
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("LAnd Rover",17,15),
    );
    echo $cars[0][0].":In Stock:".$cars[0][1].",Sold:".$cars[0][2].".<br>";
    echo $cars[1][0].":In Stock:".$cars[1][1].",Sold:".$cars[1][1].".<br>";
    echo $cars[2][0].":In Stock:".$cars[2][1].",Sold:".$cars[2][1].".<br>";
    echo $cars[3][0].":In Stock:".$cars[3][1].",Sold:".$cars[3][1].".<br>";
?>
</body>
<?php
include('../footer.php')
?>
</html>