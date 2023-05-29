<?php
include_once("../config.php");
session_start();

$id = $_GET['id'];
$nama = $_SESSION['uname'];

if ($nama != $id ){
    echo "<script>alert('Maaf, tidak boleh mengubah hobi orang lain!.');location='index.php'</script>";
}
else{
    $result = mysqli_query($mysqli, "DELETE FROM 2044088_hobi WHERE nama_lengkap='$nama'");
header("Location:index.php");
}
?>