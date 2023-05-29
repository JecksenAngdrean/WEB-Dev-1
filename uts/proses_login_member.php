<?php
include("config.php");
if(!isset($_POST['username_login'])){
   echo "Username Harus di isi";
}else if(!isset($_POST['password_login'])){
   echo "Password Harus di isi";
}else{
   $result = mysqli_query($mysqli, "SELECT * FROM 2044088_uts WHERE username = '$_POST[username_login]' AND password = '$_POST[password_login]'");
   $checkLogin = $result->num_rows;
   if($checkLogin == 0){
      echo "<script>alert('Maaf, Username atau Password anda salah.');location='index.php'</script>";
   }else{
      session_start();
      $row = mysqli_fetch_assoc($result);
      $_SESSION['uname'] = $row['username'];
      setcookie ("login", $row['username'], time() + 3600);
      echo "<script>alert('Login berhasil!.');location='dasbor/index.php'</script>";
   }
}
?>