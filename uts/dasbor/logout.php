<?php
include_once("../config.php");

session_start();
session_destroy();
if (isset($_COOKIE["login"])){
    unset($_COOKIE["login"]);
    setcookie ("login", "", time() - 3600);
}
header("location:../index.php");
exit();
?>