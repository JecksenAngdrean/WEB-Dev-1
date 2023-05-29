<?php
session_start();
if (isset($_POST['Submit']))
{
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $handle = $_POST['handle'];
    include_once("config.php");
    $result =  mysqli_query($mysqli, "UPDATE namauser SET firstname='$firstname',lastname='$lastname',handle='$handle' WHERE id=$id");
    $_SESSION['message'] = "Data Berhasil Ditambahkan";
    header("location: edit.php?id=". $id);   
}
?>