<?php
include("config.php");
session_start();
if (isset($_POST['username']))
{   
   $result = mysqli_query($mysqli,"SELECT * FROM 2044088_quiz WHERE username='$_POST[username]' AND password='$_POST[password]'");
   $checkLogin = $result->num_rows;
   if($checkLogin == 0){
      echo "<script>alert('Maaf, Username atau Password anda salah.');location='index.php'</script>";
   }else{
      $username = $_POST['username'];
      $_SESSION['username']=$username;
      echo "<script>alert('Login berhasil!.');location='dasbor/index.php'</script>";
      }
}
?>