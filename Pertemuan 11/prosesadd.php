<?php
session_start();
if (isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $handle = $_POST['handle'];
    include_once("config.php");
    $result =  mysqli_query($mysqli, "INSERT INTO namauser(firstname,lastname,handle) VALUES('$firstname','$lastname','$handle')");
    $_SESSION['message'] = "Data Berhasil Ditambahkan";
    header("location: add.php");   
}
?>