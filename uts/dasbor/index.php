<?php
include_once("../config.php");
session_start();

if (!isset($_COOKIE['login'])){
    header('location:../index.php');
    exit();
}else{
    if(!isset($_SESSION['uname'])){
        $_SESSION['uname']=$_COOKIE['login'];
    }

include('../../header.php');
include('../../menu.php');
echo "<h1>Selamat Datang " . $_SESSION['uname'] . " di Halaman Member</h1>";
echo "<h2>Ini adalah contoh halaman member</h2>";
echo "<h2>Teks ini hanya bisa di baca oleh member</h2>";

?>

<html>
    <head>
        <title>Dasbor</title>
    </head>
    <body>
        <a href="add.php">Add New Hobi</a>
        <br>
        <h1>Data Hobi User</h1>
        <table border=1>
            <tr>
                <th>Nama Lengkap</th>
                <th>Hobi</th>
                <th>Deskripsi Hobi</th>
                <th>Update</th>
            </tr>
            <?php
            include('../config.php');
            $result = mysqli_query($mysqli, 'SELECT * FROM 2044088_hobi ORDER BY nama_lengkap DESC');

            while($user_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $user_data['nama_lengkap'] . "</td>";
                echo "<td>" . $user_data['hobi'] . "</td>";
                echo "<td>" . $user_data['deskripsi_hobi'] . "</td>";
                echo "<td><a href='edit.php?id=$user_data[nama_lengkap]'>Edit</a> | <a href='delete.php?id=$user_data[nama_lengkap]'>Delete</a></td>";
                echo "</tr>";
            } 
            ?>
        </table>
        <?php
            echo "<h2><a href='logout.php'>LOG OUT</a></h2>";
        ?>
     <a href="uts.docx"><h1>Link Download jawaban UTS materinya</h1></a>
    </body>
</html>
<?php

include('../../footer.php');
}
?>