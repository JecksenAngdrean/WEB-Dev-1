<?php
$user = 'admin';
$pass = md5('admin');
session_start();
 
$username = $_POST['user'];
$password = $_POST['pass'];
 
if($username == $user && MD5($password) == $pass)
{
   $_SESSION['login'] = TRUE;
   if (isset($_POST['remember']))
   {
      $time = time();
      setcookie('login', $user, $time + 3600);
   }
   header('location:./home.php');
   exit();
} else {
   header('location:./index.php');
}
?>